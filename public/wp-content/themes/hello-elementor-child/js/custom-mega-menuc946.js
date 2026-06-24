document.addEventListener('DOMContentLoaded', () => {
  const isMobileScreen = () => window.matchMedia('(max-width: 1024px)').matches;

  if (!isMobileScreen()) {
    return;
  }

  const headings = document.querySelectorAll('#cs-mega-menu .cs-menu-heading');
  const menuLinks = document.querySelectorAll('#cs-mega-menu .elementor-icon-list-item > a');
  const toggleButtons = document.querySelectorAll('#cs-mega-menu .e-n-menu-toggle');
  const backButton = document.querySelector('#menu-back-button');
  const body = document.body;
  const html = document.documentElement;
  const megaMenuData = window.tdacsMegaMenu || {};
  const productCache = new Map();
  const inflightRequests = new Map();
  const shopButton = document.querySelector('#cs-shop-button');
  let shopOriginalParent = null;
  let shopOriginalNextSibling = null;
  let shopMoved = false;
  const initialBodyStyles = {
    overflow: body ? body.style.overflow : '',
    position: body ? body.style.position : '',
    top: body ? body.style.top : '',
    left: body ? body.style.left : '',
    right: body ? body.style.right : '',
    width: body ? body.style.width : '',
  };
  const initialHtmlOverflow = html ? html.style.overflow : '';
  let scrollLockY = 0;
  let isScrollLocked = false;
  const menuHistory = [];

  const showBackButton = () => {
    if (backButton) {
      backButton.style.display = 'block';
    }
  };

  const hideBackButton = () => {
    if (backButton) {
      backButton.style.display = 'none';
    }
  };

  const lockBodyScroll = () => {
    if (!body || isScrollLocked) {
      return;
    }

    scrollLockY = window.scrollY || document.documentElement.scrollTop || 0;
    body.style.position = 'fixed';
    body.style.top = `-${scrollLockY}px`;
    body.style.left = '0';
    body.style.right = '0';
    body.style.width = '100%';
    body.style.overflow = 'hidden';
    if (html) {
      html.style.overflow = 'hidden';
    }
    isScrollLocked = true;
  };

  const unlockBodyScroll = () => {
    if (!body || !isScrollLocked) {
      return;
    }

    body.style.position = initialBodyStyles.position;
    body.style.top = initialBodyStyles.top;
    body.style.left = initialBodyStyles.left;
    body.style.right = initialBodyStyles.right;
    body.style.width = initialBodyStyles.width;
    body.style.overflow = initialBodyStyles.overflow;
    if (html) {
      html.style.overflow = initialHtmlOverflow;
    }
    window.scrollTo(0, scrollLockY);
    isScrollLocked = false;
  };

  const ensureViewAllLink = (container, targetUrl) => {
    const existing = container.querySelector('.cs-menu-view-all');
    if (existing) {
      if (!existing.getAttribute('href')) {
        existing.setAttribute('href', targetUrl);
      }
      return;
    }

    const viewAllLink = document.createElement('a');
    viewAllLink.href = targetUrl;
    viewAllLink.className = 'cs-menu-view-all';
    viewAllLink.textContent = 'Xem tất cả sản phẩm';
    container.appendChild(viewAllLink);
  };

  const buildProductList = (htmlContent, targetUrl) => {
    const temp = document.createElement('div');
    temp.innerHTML = htmlContent || '';
    const providedList = temp.querySelector('.cs-menu-product-list');

    let container = providedList;
    if (!container) {
      container = document.createElement('div');
      container.className = 'cs-menu-product-list';
      container.innerHTML = htmlContent || '';
    }

    ensureViewAllLink(container, targetUrl);
    return container;
  };

  const getSlugFromUrl = (url) => {
    try {
      const parsed = new URL(url, window.location.origin);
      const parts = parsed.pathname.split('/').filter(Boolean);
      return parts.pop() || '';
    } catch (error) {
      return '';
    }
  };

  const getMenuTargetList = () => {
    const menuRoot = document.querySelector('#cs-mega-menu');
    if (!menuRoot) {
      return null;
    }
    const nav = menuRoot.querySelector('nav');
    if (nav && nav.querySelector('ul')) {
      return nav.querySelector('ul');
    }
    return menuRoot.querySelector('ul');
  };

  const moveShopButtonToMenu = () => {
    if (!shopButton || shopMoved) {
      return;
    }
    const targetList = getMenuTargetList();
    if (!targetList) {
      return;
    }

    shopOriginalParent = shopButton.parentElement;
    shopOriginalNextSibling = shopButton.nextElementSibling;
    targetList.appendChild(shopButton);
    shopMoved = true;
  };

  const restoreShopButton = () => {
    if (!shopButton || !shopMoved) {
      return;
    }

    if (shopOriginalParent) {
      if (shopOriginalNextSibling && shopOriginalNextSibling.parentElement === shopOriginalParent) {
        shopOriginalParent.insertBefore(shopButton, shopOriginalNextSibling);
      } else {
        shopOriginalParent.appendChild(shopButton);
      }
    }
    shopMoved = false;
  };

  const fetchProductList = (slug, targetUrl) => {
    if (productCache.has(slug)) {
      return Promise.resolve(productCache.get(slug));
    }

    if (inflightRequests.has(slug)) {
      return inflightRequests.get(slug);
    }

    const payload = new URLSearchParams({
      action: 'tda_cs_menu_products',
      slug,
      target_url: targetUrl,
    });

    if (megaMenuData.nonce) {
      payload.append('_ajax_nonce', megaMenuData.nonce);
    }

    const request = fetch(megaMenuData.ajaxUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
      },
      body: payload.toString(),
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error('Request failed');
        }
        return response.text();
      })
      .then((htmlContent) => {
        const productList = buildProductList(htmlContent, targetUrl);
        productCache.set(slug, productList);
        inflightRequests.delete(slug);
        return productList;
      })
      .catch((error) => {
        inflightRequests.delete(slug);
        throw error;
      });

    inflightRequests.set(slug, request);
    return request;
  };

  const preloadAllLinks = () => {
    if (!isMobileScreen()) {
      return;
    }

    menuLinks.forEach((link) => {
      const targetUrl = link.getAttribute('href');
      if (!targetUrl) {
        return;
      }

      const slug = getSlugFromUrl(targetUrl);
      if (!slug || productCache.has(slug) || inflightRequests.has(slug) || !megaMenuData.ajaxUrl) {
        return;
      }

      fetchProductList(slug, targetUrl).catch(() => {});
    });
  };

  headings.forEach((heading) => {
    // 1. Add 'event' to the function arguments
    heading.addEventListener('click', (event) => {
      if (!isMobileScreen()) {
        return;
      }

      // 2. Add this line to stop the link navigation
      event.preventDefault();

      let menuList = heading.nextElementSibling;
      while (menuList && !menuList.classList.contains('cs-menu-list')) {
        menuList = menuList.nextElementSibling;
      }

      if (!menuList) {
        return;
      }

      const previousDisplay = window.getComputedStyle(menuList).display;
      menuHistory.push({ type: 'menu', element: menuList, display: previousDisplay, activeParent: heading.parentElement });

      const isHidden = window.getComputedStyle(menuList).display === 'none';
      menuList.style.display = isHidden ? 'block' : 'none';
      if (heading.parentElement) {
        heading.parentElement.classList.add('cs-active');
      }
      showBackButton();
    });
  });

  menuLinks.forEach((link) => {
    link.addEventListener('click', (event) => {
      if (!isMobileScreen()) {
        return;
      }

      event.preventDefault();

      const targetUrl = link.getAttribute('href');
      if (!targetUrl) {
        return;
      }

      const slug = getSlugFromUrl(targetUrl);
      if (!slug || !megaMenuData.ajaxUrl) {
        window.location.href = targetUrl;
        return;
      }

      if (link.dataset.loading === 'true') {
        return;
      }

      const parentList = link.closest('.cs-menu-list');
      const itemContainer = link.closest('.elementor-icon-list-item');

      if (itemContainer && itemContainer.querySelector('.cs-menu-product-list')) {
        itemContainer.classList.add('cs-active-item');
        showBackButton();
        return;
      }

      link.dataset.loading = 'true';

      fetchProductList(slug, targetUrl)
        .then((productList) => {
          if (itemContainer && productList.parentElement !== itemContainer) {
            itemContainer.appendChild(productList);
            itemContainer.classList.add('cs-active-item');
          } else if (parentList && parentList.parentElement) {
            parentList.parentElement.insertBefore(productList, parentList.nextSibling);
          } else {
            const menuRoot = document.querySelector('#cs-mega-menu');
            if (menuRoot) {
              menuRoot.appendChild(productList);
            }
          }

          menuHistory.push({
            type: 'ajax',
            insertedElement: productList,
            relatedMenuList: parentList,
            container: itemContainer,
          });

          showBackButton();
        })
        .catch((error) => {
          console.error('Failed to load menu content', error);
          window.location.href = targetUrl;
        })
        .finally(() => {
          delete link.dataset.loading;
        });
    });
  });

  const handleToggleState = (button) => {
    const isExpanded = button.getAttribute('aria-expanded') === 'true';
    if (isExpanded && isMobileScreen()) {
      lockBodyScroll();
      preloadAllLinks();
      moveShopButtonToMenu();
      if (menuHistory.length > 0) {
        showBackButton();
      } else {
        hideBackButton();
      }
    } else {
      unlockBodyScroll();
      hideBackButton();
      restoreShopButton();
    }
  };

  toggleButtons.forEach((button) => {
    button.addEventListener('click', () => {
      if (!isMobileScreen()) {
        unlockBodyScroll();
        return;
      }

      requestAnimationFrame(() => handleToggleState(button));
    });

    const observer = new MutationObserver(() => {
      if (!isMobileScreen()) {
        unlockBodyScroll();
        return;
      }

      handleToggleState(button);
    });

    observer.observe(button, { attributes: true, attributeFilter: ['aria-expanded'] });
  });

  if (backButton) {
    backButton.addEventListener('click', () => {
      if (!isMobileScreen()) {
        return;
      }

      const previousState = menuHistory.pop();
      if (!previousState) {
        hideBackButton();
        return;
      }

      if (previousState.type === 'menu') {
        if (previousState.element) {
          previousState.element.style.display = previousState.display;
        }

        if (previousState.activeParent) {
          previousState.activeParent.classList.remove('cs-active');
        }
      } else if (previousState.type === 'ajax') {
        if (previousState.insertedElement && previousState.insertedElement.parentElement) {
          previousState.insertedElement.parentElement.removeChild(previousState.insertedElement);
        }
        if (previousState.container) {
          previousState.container.classList.remove('cs-active-item');
        }
      }

      if (menuHistory.length === 0) {
        hideBackButton();
      }
    });
  }
});
