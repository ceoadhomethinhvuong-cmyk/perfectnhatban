jQuery(document).ready(function ($) {
    let timeout;
    let productIndexPromise = null;

    const $input = $('#custom-search-input');
    const $iconBtn = $('#custom-search-icon');
    const $popup = $('#custom-search-popup');
    const $barContainer = $('.search-bar-container');

    const iconClose = '<svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M6.64 5.36a.9.9 0 0 0-1.28 1.28L10.72 12l-5.36 5.36a.9.9 0 1 0 1.28 1.28L12 13.28l5.36 5.36a.9.9 0 1 0 1.28-1.28L13.28 12l5.36-5.36a.9.9 0 1 0-1.28-1.28L12 10.72 6.64 5.36Z"/></svg>';

    const articleIndex = [
        {
            title: 'Melasma Biocode - \u1ee8ng d\u1ee5ng c\u00f4ng ngh\u1ec7 Mela Bright Complex ng\u0103n ng\u1eeba n\u00e1m t\u00e1i ph\u00e1t',
            href: '/tin-tuc',
            imageSrc: 'https://gsccos.vn/wp-content/uploads/2025/11/1600x1000-1-1-600x375.webp',
            searchText: 'mela melasma biocode mela bright complex nam tai phat'
        },
        {
            title: 'NMN (Nicotinamide Mononucleotide) ho\u1ea1t ch\u1ea5t "tr\u1ebb h\u00f3a t\u1ebf b\u00e0o"',
            href: '/tin-tuc',
            imageSrc: 'https://media.gsccos.vn/wp-content/uploads/2026/03/NMN-1-600x375.webp',
            searchText: 'nmn nicotinamide mononucleotide tre hoa te bao mela'
        },
        {
            title: 'Neo Heliopan E1000 - M\u00e0ng l\u1ecdc UVB d\u1ecbu nh\u1eb9, chi\u1ebft xu\u1ea5t th\u1ef1c v\u1eadt',
            href: '/tin-tuc',
            imageSrc: 'https://media.gsccos.vn/wp-content/uploads/2026/01/Neo-Heliopan-E1000-1-1-600x375.webp',
            searchText: 'neo heliopan e1000 mang loc uvb diu nhe thuc vat mela'
        },
        {
            title: 'Bakuchiol - B\u1ea3n sao retinol d\u1ecbu nh\u1eb9 ch\u1ed1ng l\u00e3o h\u00f3a & \u0111\u1ec1u m\u00e0u',
            href: '/tin-tuc',
            imageSrc: 'https://media.gsccos.vn/wp-content/uploads/2026/01/92-thumb-600x375.webp',
            searchText: 'bakuchiol retinol diu nhe chong lao hoa deu mau mela'
        }
    ];

    function updateIcon() {
        $iconBtn.html(iconClose);
    }

    function closeSearchModal() {
        const searchModal = document.getElementById('off-canvas-bd76a4d');
        const closeButton = searchModal?.querySelector('.elementor-element-6365e0f a.elementor-icon');
        const overlay = searchModal?.querySelector('.e-off-canvas__overlay');

        $popup.addClass('hidden').empty();
        $input.val('');
        $barContainer.removeClass('focused');
        updateIcon();

        if (closeButton) {
            closeButton.click();
            return;
        }

        if (overlay) {
            overlay.click();
        }
    }

    function normalizeText(value) {
        return (value || '')
            .toString()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .replace(/\u0111/g, 'd')
            .replace(/\u0110/g, 'D')
            .toLowerCase()
            .trim();
    }

    function escapeHtml(value) {
        return (value || '').toString().replace(/[&<>"']/g, function (char) {
            return {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            }[char];
        });
    }

    function resolveUrl(url, baseUrl) {
        if (!url || url.startsWith('data:')) {
            return url || '';
        }

        try {
            return new URL(url, baseUrl).href;
        } catch (error) {
            return url;
        }
    }

    function slugify(value) {
        return normalizeText(value)
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/^-+|-+$/g, '');
    }

    function knownProductSlug(title) {
        const normalizedTitle = normalizeText(title);
        const products = [
            ['perfect lady', 'perfectlady'],
            ['perfect beauty white', 'perfectbeatywhite'],
            ['nattokinase', 'nattokinase'],
            ['spualene', 'spualene'],
            ['nmn', 'NMN'],
            ['tinh chat nghe', 'vien_nghe'],
            ['p9', 'P9'],
            ['p6', 'P6'],
            ['p5', 'P5'],
            ['p7', 'P7'],
            ['vc30', 'vc30-serum-vitamin-c'],
        ];

        const match = products.find(function (product) {
            return normalizedTitle.includes(product[0]);
        });

        return match ? match[1] : '';
    }

    function slugFromHref(href, title) {
        try {
            const url = new URL(href, window.location.origin);
            const parts = url.pathname.split('/').filter(Boolean);
            const detailIndex = parts.indexOf('chi-tiet-san-pham');

            if (detailIndex >= 0 && parts[detailIndex + 1]) {
                return parts[detailIndex + 1];
            }

            const lastPart = parts.filter(function (part) {
                return part !== 'index.html';
            }).pop();

            return lastPart || slugify(title);
        } catch (error) {
            return slugify(title);
        }
    }

    function productDetailUrl(title, rawHref, baseUrl) {
        const resolvedHref = resolveUrl(rawHref || '', baseUrl);
        const slug = knownProductSlug(title) || slugFromHref(resolvedHref, title);

        return new URL('/chi-tiet-san-pham/' + (slug || slugify(title)), window.location.origin).href;
    }

    function extractProducts(doc, baseUrl) {
        const products = new Map();

        doc.querySelectorAll('.product-container').forEach(function (card) {
            const title = (card.querySelector('.product-title')?.textContent || '').trim();
            const description = (card.querySelector('.product-description')?.textContent || '').trim();
            const image = card.querySelector('.product-image');
            const imageLink = card.querySelector('.product-image-container');
            const detailLink = card.querySelector('.product-discover-now') || imageLink;
            const rawHref = detailLink?.getAttribute('href') || imageLink?.getAttribute('href') || '';
            const href = productDetailUrl(title, rawHref, baseUrl);
            const imageSrc = resolveUrl(image?.getAttribute('data-src') || image?.getAttribute('src') || '', baseUrl);
            const imageAlt = image?.getAttribute('alt') || title;
            const tags = Array.from(card.querySelectorAll('.product-tag'))
                .map(function (tag) {
                    return tag.textContent.trim();
                })
                .filter(Boolean);
            const key = normalizeText(title) + '|' + href;

            if (!title || products.has(key)) {
                return;
            }

            products.set(key, {
                title,
                description,
                href,
                imageSrc,
                imageAlt,
                tags,
                searchText: normalizeText(title + ' ' + description + ' ' + imageAlt + ' ' + tags.join(' '))
            });
        });

        return Array.from(products.values());
    }

    function loadProductIndex() {
        if (productIndexPromise) {
            return productIndexPromise;
        }

        const productsUrl = new URL('/san-pham', window.location.origin).href;

        productIndexPromise = fetch(productsUrl, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
            .then(function (response) {
                if (!response.ok) {
                    throw new Error('Cannot load products');
                }

                return response.text();
            })
            .then(function (html) {
                const doc = new DOMParser().parseFromString(html, 'text/html');
                return extractProducts(doc, productsUrl);
            });

        return productIndexPromise;
    }

    function searchResultsUrl(keyword, type) {
        const url = new URL(type === 'post' ? '/tin-tuc' : '/san-pham', window.location.origin);
        url.searchParams.set('s', keyword);

        if (type && type !== 'post') {
            url.searchParams.set('type', type);
        }

        return url.href;
    }

    function renderProduct(product) {
        const description = product.description ? '<span class="meta">' + escapeHtml(product.description) + '</span>' : '';

        return [
            '<div class="search-card">',
            '<a href="' + escapeHtml(product.href) + '">',
            product.imageSrc ? '<img src="' + escapeHtml(product.imageSrc) + '" alt="' + escapeHtml(product.imageAlt) + '" loading="lazy">' : '',
            '<span>',
            '<span class="title">' + escapeHtml(product.title) + '</span>',
            description,
            '</span>',
            '</a>',
            '</div>'
        ].join('');
    }

    function renderArticle(article) {
        return [
            '<div class="search-card popup-article-card">',
            '<a href="' + escapeHtml(article.href) + '">',
            article.imageSrc ? '<img src="' + escapeHtml(article.imageSrc) + '" alt="' + escapeHtml(article.title) + '" loading="lazy">' : '',
            '<span class="title">' + escapeHtml(article.title) + '</span>',
            '</a>',
            '</div>'
        ].join('');
    }

    function matchedArticles(keyword) {
        const normalizedKeyword = normalizeText(keyword);

        return articleIndex
            .filter(function (article) {
                return normalizeText(article.title + ' ' + article.searchText).includes(normalizedKeyword);
            })
            .slice(0, 4);
    }

    function renderResults(products, keyword) {
        const normalizedKeyword = normalizeText(keyword);
        const matchedProducts = products
            .filter(function (product) {
                return product.searchText.includes(normalizedKeyword);
            })
            .slice(0, 4);
        const articles = matchedArticles(keyword);
        const productHtml = matchedProducts.length
            ? '<div class="popup-grid">' + matchedProducts.map(renderProduct).join('') + '</div><div class="search-more-button-wrapper"><a class="search-more-button" href="' + escapeHtml(searchResultsUrl(keyword, 'product')) + '">Xem th\u00eam s\u1ea3n ph\u1ea9m</a></div>'
            : '<p class="search-empty-line">Kh\u00f4ng t\u00ecm th\u1ea5y s\u1ea3n ph\u1ea9m ph\u00f9 h\u1ee3p.</p>';
        const articleHtml = articles.length
            ? '<div class="popup-list">' + articles.map(renderArticle).join('') + '</div><div class="search-more-button-wrapper"><a class="search-more-button" href="' + escapeHtml(searchResultsUrl(keyword, 'post')) + '">Xem th\u00eam b\u00e0i vi\u1ebft</a></div>'
            : '<p class="search-empty-line">Kh\u00f4ng c\u00f3 b\u00e0i vi\u1ebft.</p>';

        $popup
            .html([
                '<div class="popup-section">',
                '<div class="popup-section-title">S\u1ea3n ph\u1ea9m</div>',
                productHtml,
                '</div>',
                '<div class="popup-section-flex">',
                '<div class="popup-column">',
                '<div class="popup-section-title">Ph\u00e1c \u0111\u1ed3</div>',
                '<p class="search-empty-line">Kh\u00f4ng c\u00f3 ph\u00e1c \u0111\u1ed3.</p>',
                '</div>',
                '<div class="popup-column">',
                '<div class="popup-section-title">B\u00e0i vi\u1ebft</div>',
                articleHtml,
                '</div>',
                '</div>'
            ].join(''))
            .removeClass('hidden');
    }

    function runSearch() {
        const keyword = $input.val().trim();

        clearTimeout(timeout);
        updateIcon();

        if (keyword.length < 2) {
            $popup.addClass('hidden').empty();
            return;
        }

        timeout = setTimeout(function () {
            $popup
                .html('<p class="search-popup-state">\u0110ang t\u00ecm ki\u1ebfm...</p>')
                .removeClass('hidden');

            loadProductIndex()
                .then(function (products) {
                    renderResults(products, keyword);
                })
                .catch(function () {
                    $popup
                        .html('<p class="search-popup-state">Ch\u01b0a t\u1ea3i \u0111\u01b0\u1ee3c d\u1eef li\u1ec7u t\u00ecm ki\u1ebfm.</p>')
                        .removeClass('hidden');
                });
        }, 180);
    }

    function focusInputWhenOpen() {
        const searchModal = document.getElementById('off-canvas-bd76a4d');

        if (!searchModal) {
            return;
        }

        new MutationObserver(function () {
            if (searchModal.getAttribute('aria-hidden') === 'false') {
                window.setTimeout(function () {
                    $input.trigger('focus');
                }, 60);
            }
        }).observe(searchModal, {
            attributes: true,
            attributeFilter: ['aria-hidden']
        });
    }

    $input.on('focus', function () {
        $barContainer.addClass('focused');
    }).on('blur', function () {
        if (!$input.val()) {
            $barContainer.removeClass('focused');
        }
    });

    $input.on('keydown', function (event) {
        if (event.key !== 'Enter') {
            return;
        }

        event.preventDefault();

        const keyword = $input.val().trim();
        if (keyword.length < 2) {
            return;
        }

        window.location.href = searchResultsUrl(keyword, 'product');
    });

    $input.on('input', runSearch);

    $iconBtn.on('click', function () {
        closeSearchModal();
    });

    $(document).on('click', function (event) {
        if (!$(event.target).closest('.search-popup-wrapper, #custom-search-popup').length) {
            $popup.addClass('hidden');
        }
    });

    focusInputWhenOpen();
    updateIcon();
});
