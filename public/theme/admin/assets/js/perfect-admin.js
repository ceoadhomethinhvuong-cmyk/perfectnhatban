(function ($) {
    "use strict";

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();

        $('.js-check-all').on('change', function () {
            var target = $(this).data('target');
            $(target).prop('checked', this.checked);
        });

        $('.custom-file-input').on('change', function () {
            var fileName = $(this).val().split('\\').pop();
            $(this).siblings('.custom-file-label').addClass('selected').html(fileName || 'Chọn tệp');
        });

        $('[data-color-sync]').on('input', function () {
            var value = $(this).val().trim();
            var target = $(this).data('color-sync');

            if (/^#[0-9a-fA-F]{6}$/.test(value)) {
                $(target).val(value);
            }
        });

        $('.admin-color-input').on('input', function () {
            $('[data-color-sync="#' + this.id + '"]').val(this.value.toUpperCase());
        });

        $('.admin-sidebar-toggle').on('click', function (event) {
            event.preventDefault();
            var item = $(this).closest('.menu-item-has-children');
            item.toggleClass('is-open show');
            $(this).attr('aria-expanded', item.hasClass('is-open') || item.hasClass('show') || item.hasClass('active') ? 'true' : 'false');
        });

        function updateCounters() {
            $('.js-count-field').each(function () {
                var target = $(this).data('counter');
                if (target) {
                    $(target).text($(this).val().length);
                }
            });
        }

        function updateSeoPreview() {
            var title = $('[data-seo-source="title"]').val() || $('#title').val() || 'Tiêu đề SEO của bài viết';
            var description = $('[data-seo-source="description"]').val() || $('#summary').val() || 'Mô tả ngắn của bài viết sẽ hiển thị tại đây.';
            var canonical = $('[data-seo-source="canonical"]').val();
            var slug = $('[data-seo-source="url"]').val() || 'slug-bai-viet';

            if (!canonical) {
                canonical = (window.BASE_URL || '').replace(/\/$/, '') + '/tin-tuc/' + slug.replace(/^\//, '');
            }

            $('[data-seo-preview="title"]').text(title);
            $('[data-seo-preview="description"]').text(description);
            $('[data-seo-preview="url"]').text(canonical);
        }

        $(document).on('input', '.js-count-field, [data-seo-source], #title, #summary', function () {
            updateCounters();
            updateSeoPreview();
        });

        updateCounters();
        updateSeoPreview();
    });
})(jQuery);
