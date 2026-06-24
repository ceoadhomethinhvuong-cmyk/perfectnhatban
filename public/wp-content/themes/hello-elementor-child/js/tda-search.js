jQuery(function ($) {
  const $form = $(".tda-search-header");
  const $input = $("#tda-search-input");
  const $iconBtn = $("#tda-search-btn");
  const $resultsGrid = $(".tda-results-grid");

  const iconSearch = `<svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#A2A2A2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>search</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-256.000000, -1139.000000)" fill="#A2A2A2"> <path d="M269.46,1163.45 C263.17,1163.45 258.071,1158.44 258.071,1152.25 C258.071,1146.06 263.17,1141.04 269.46,1141.04 C275.75,1141.04 280.85,1146.06 280.85,1152.25 C280.85,1158.44 275.75,1163.45 269.46,1163.45 L269.46,1163.45 Z M287.688,1169.25 L279.429,1161.12 C281.591,1158.77 282.92,1155.67 282.92,1152.25 C282.92,1144.93 276.894,1139 269.46,1139 C262.026,1139 256,1144.93 256,1152.25 C256,1159.56 262.026,1165.49 269.46,1165.49 C272.672,1165.49 275.618,1164.38 277.932,1162.53 L286.224,1170.69 C286.629,1171.09 287.284,1171.09 287.688,1170.69 C288.093,1170.3 288.093,1169.65 287.688,1169.25 L287.688,1169.25 Z" id="search" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>`; // dán mã SVG "search"
  const iconClose = `<svg viewBox="0 0 24 24" width="24" height="24" fill="#A2A2A2"><path d="M18.3 5.71a1 1 0 0 0-1.41 0L12 10.59 7.11 5.7A1 1 0 0 0 5.7 7.11L10.59 12l-4.89 4.89a1 1 0 1 0 1.41 1.41L12 13.41l4.89 4.89a1 1 0 0 0 1.41-1.41L13.41 12l4.89-4.89a1 1 0 0 0 0-1.4z"/></svg>`;

  function updateIcon() {
    const inputVal =
      $input && typeof $input.val === "function" ? $input.val() : "";
    const hasValue = (inputVal || "").trim().length > 0;
    $iconBtn.html(hasValue ? iconClose : iconSearch);
  }

  function fetchResults() {
    const keyword = $input.val().trim();
    const formData = $form.serialize();

    if (keyword.length === 0) {
      $resultsGrid.html("<p>Vui lòng nhập từ khoá.</p>");
      return;
    }

    $.ajax({
      url: tdaSearch.ajax_url,
      method: "POST",
      data: formData + "&action=tda_search",
      beforeSend: () => $resultsGrid.html("<p>Đang tải...</p>"),
      success: (res) => {
        $resultsGrid.html(res);
        const $countEl = $(res).filter(".tda-count-hidden");
        const count = $countEl.data("count") || 0;
        $(".tda-count-number").text(count);
      },
      error: () => $resultsGrid.html("<p>Lỗi khi tải dữ liệu.</p>"),
    });
  }

  function loadCategories(postType) {
    let tax = "category";
    if (postType === "product" || postType === "san-pham") tax = "product_cat";

    $.ajax({
      url: tdaSearch.ajax_url,
      type: "POST",
      data: {
        action: "tda_get_terms",
        taxonomy: tax,
      },
      beforeSend: () =>
        $(".tda-filter-checkboxes").html("<p>Đang tải danh mục...</p>"),
      success: (html) => $(".tda-filter-checkboxes").html(html),
      error: () => $(".tda-filter-checkboxes").html("<p>Lỗi tải danh mục.</p>"),
    });
  }

  $input.on("input", function () {
    updateIcon();
    fetchResults();
  });

  $iconBtn.on("click", function () {
    if ($input.val().trim().length > 0) {
      $input.val("");
      updateIcon();
      $input.focus();
      $form.find('input[name="cat[]"]').remove();
      $resultsGrid.html("<p>Vui lòng nhập từ khoá.</p>");
      $(".tda-count-number").text("0");
    } else {
      $input.focus();
    }
  });

  $form.on("submit", function (e) {
    e.preventDefault();
  });

  $(".tda-tab").click(function () {
    const type = $(this).data("type");
    $('input[name="post_type"]').val(type);
    $('.tda-filter-checkboxes input[type="checkbox"]').prop("checked", false);
    $form.find('input[name="cat[]"]').remove();
    loadCategories(type);
    fetchResults();
    $(".tda-tab").removeClass("active");
    $(this).addClass("active");
  });

  $(".tda-filter-toggle").click(() => $(".tda-filter-popup").addClass("show"));
  $(".tda-filter-close").click(() =>
    $(".tda-filter-popup").removeClass("show")
  );

  $(document).on(
    "change",
    '.tda-filter-checkboxes input[type="checkbox"]',
    function () {
      $form.find('input[name="cat[]"]').remove();
      $('.tda-filter-checkboxes input[name="cat[]"]:checked').each(function () {
        $("<input>")
          .attr("type", "hidden")
          .attr("name", "cat[]")
          .val($(this).val())
          .appendTo($form);
      });
      fetchResults();
    }
  );

  updateIcon();
  if (($input.val() || "").trim().length > 0) {
    fetchResults();
  }

  function getURLParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  const typeFromURL = getURLParam("type");
  const validTypes = ["san-pham", "product", "post"];
  const initialPostType = validTypes.includes(typeFromURL)
    ? typeFromURL
    : "san-pham";

  $('input[name="post_type"]').val(initialPostType);

  loadCategories(initialPostType);
  $(".tda-tab").removeClass("active");
  $(".tda-tab").each(function () {
    if ($(this).data("type") === initialPostType) {
      $(this).addClass("active");
    }
  });

  if (($input.val() || "").trim().length > 0) {
    fetchResults();
  }

  // loadCategories(initialPostType);
  // $('.tda-tab').removeClass('active');
  // $('.tda-tab').each(function () {
  //     if ($(this).data('type') === initialPostType) {
  //         $(this).addClass('active');
  //     }
  // });

  $(document).on("click", ".tda-group-toggle", function () {
    const $parentGroup = $(this).closest(".tda-term-group");
    const $content = $parentGroup.find(".tda-group-content");

    $content.slideToggle(200);
    $parentGroup.toggleClass("active");
  });
});
