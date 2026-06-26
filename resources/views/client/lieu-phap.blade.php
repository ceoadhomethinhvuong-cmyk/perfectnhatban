@extends('client.layouts.app')

@section('seo_title', 'Liệu pháp chăm sóc da PERFECT Nhật Bản')
@section('meta_description', 'Tìm hiểu các liệu pháp chăm sóc da cùng PERFECT Nhật Bản, gợi ý phác đồ và sản phẩm phù hợp theo từng vấn đề da.')

@section('title', 'Liệu Pháp')

@section('content')
<link rel='stylesheet' id='elementor-post-6949-css' href='{{ asset("wp-content/uploads/elementor/css/post-69491625.css?ver=1772512056") }}' media='all' />

<div data-elementor-type="product-archive" data-elementor-id="6949" class="elementor elementor-6949 elementor-location-archive product" data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-2b336a1 e-flex e-con-boxed e-con e-parent" data-id="2b336a1" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-d7bfbea elementor-align-center elementor-widget elementor-widget-breadcrumbs" data-id="d7bfbea" data-element_type="widget" data-widget_type="breadcrumbs.default">
                    <div class="elementor-widget-container">
                        <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
                            <p><a href="../index.html">Trang chủ</a><span class="separator"> &gt; </span><span class="last">Liệu pháp</span></p>
                        </nav>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9cd445c e-con-full e-flex e-con e-child" data-id="9cd445c" data-element_type="container">
                    <div class="elementor-element elementor-element-f6f1f34 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="f6f1f34" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">Liệu pháp</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-82a2dac elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="82a2dac" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-heading-title elementor-size-default">
                                <p>Khám phá hành trình chăm sóc da với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ chuyên gia,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-c94fc7b e-flex e-con-boxed e-con e-parent" data-id="c94fc7b" data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-a53f188 elementor-widget elementor-widget-shortcode" data-id="a53f188" data-element_type="widget" data-widget_type="shortcode.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-shortcode">
                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
                            <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

                            <style>
                                .product-image-container {
                                    display: block;
                                    aspect-ratio: 4 / 5;
                                    overflow: hidden;
                                    border-radius: 10px;
                                    position: relative;
                                }

                                .product-image {
                                    width: 100%;
                                    height: 100% !important;
                                    object-fit: cover;
                                    transition: all 0.3s;

                                    &:hover {
                                        transform: scale(1.1);
                                    }
                                }

                                .product-subtitle {
                                    margin: 0px;
                                    margin-top: 16px;
                                    font-weight: 400 !important;
                                    font-size: 12px !important;
                                    color: rgba(37, 37, 37, .4) !important;
                                }

                                .product-title {
                                    margin: 0px;
                                    color: #252525 !important;
                                    font-size: 16px !important;
                                    letter-spacing: 0px !important;
                                    opacity: 80%;
                                    padding: 0;
                                    margin-bottom: 0px;
                                    line-height: 1.5 !important;
                                }

                                .product-description {
                                    margin: 0px;
                                    margin-top: 2px;
                                    font-size: 14px !important;
                                    color: #252525;
                                    flex-grow: 1;
                                    opacity: 60%;
                                    font-weight: 400;
                                    display: none;

                                    @media (1024px <=width) {
                                        display: block;
                                    }
                                }

                                .product-discover-now {
                                    margin: 0px;
                                    margin-top: 8px;
                                    display: block;
                                    width: fit-content;
                                    color: #3ea8e2 !important;
                                    font-weight: 600;
                                    text-decoration: none;
                                    border-bottom: 1px solid #3ea8e2;
                                    transition: all 0.3s ease;
                                    font-size: 15px;
                                    margin-top: 8px;
                                }
                            </style>
                            <style>
                                .product-tags-container-wrapper {
                                    position: absolute;
                                    top: 12px;
                                    right: 12px;

                                    @media (1024px <=width) {
                                        top: 20px;
                                        right: 20px;
                                    }
                                }

                                .product-tag-container-wrapper {
                                    display: flex;
                                    flex-direction: column;
                                    gap: 8px;
                                }

                                .product-tag-container {
                                    padding: 4px 8px;
                                    border-radius: 4px;
                                    background-color: rgba(194, 239, 209, 1)
                                }

                                .product-tag {
                                    margin: 0;
                                    font-weight: 600 !important;
                                    font-size: 12px !important;
                                    color: rgba(10, 107, 61, 1) !important;
                                }
                            </style>

                            <style>
                                /* --- Global Resets --- */
                                * {
                                    padding: 0;
                                    margin: 0;
                                    box-sizing: border-box;
                                }

                                ul {
                                    list-style-type: none;
                                }

                                a {
                                    text-decoration: none;
                                    color: inherit !important;
                                }

                                /* =========================================
       SECTION A: MAIN CATEGORY LAYOUT
       ========================================= */
                                .product-category-container-wrapper {
                                    display: flex;
                                    flex-direction: column;
                                    gap: 25px;
                                    margin-inline: 20px;
                                    margin-bottom: 56px;
                                }

                                @media (min-width: 1024px) {
                                    .product-category-container-wrapper {
                                        gap: 56px;
                                        margin-inline: 0px;
                                        margin-top: 36px;
                                        margin-bottom: 80px;
                                    }
                                }

                                .product-category-container {
                                    display: grid;
                                    grid-template-columns: repeat(4, 1fr);
                                    column-gap: 20px;
                                }

                                .product-category-information {
                                    grid-column: 1 / -1;
                                    margin-block: 28px;
                                }

                                @media (min-width: 1024px) {
                                    .product-category-information {
                                        grid-column: span 1;
                                    }
                                }

                                .product-category-title {
                                    margin: 0;
                                    font-weight: 600 !important;
                                    font-size: 24px !important;
                                    color: rgba(37, 37, 37, 1);
                                }

                                .products-count {
                                    margin: 0;
                                    font-weight: 600 !important;
                                    font-size: 14px !important;
                                    color: rgba(37, 37, 37, .4);
                                }

                                .product-category-description {
                                    margin: 0;
                                    margin-top: 12px;
                                    font-weight: 300 !important;
                                    font-size: 16px !important;
                                    color: rgba(37, 37, 37, .7);
                                }

                                @media (min-width: 1024px) {
                                    .product-category-description {
                                        margin-top: 16px;
                                    }
                                }

                                .product-category-link {
                                    display: block;
                                    margin: 0;
                                    margin-top: 20px;
                                    font-weight: 600 !important;
                                    font-size: 14px !important;
                                    color: var(--e-global-color-primary) !important;
                                    text-decoration: underline !important;
                                }

                                @media (min-width: 1024px) {
                                    .product-category-link {
                                        margin-top: 36px;
                                    }
                                }

                                .products-swiper-container {
                                    grid-column: 1 / -1;
                                    position: relative;
                                    contain: layout;
                                }

                                @media (min-width: 1024px) {
                                    .products-swiper-container {
                                        grid-column: span 3;
                                    }
                                }

                                /* Arrows */
                                .products-swiper-prev,
                                .products-swiper-next {
                                    position: absolute;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    width: 48px;
                                    height: 48px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    cursor: pointer;
                                    z-index: 10;
                                    background-color: #fff;
                                    border-radius: 50%;
                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                }

                                .products-swiper-prev {
                                    left: 10px;
                                }

                                .products-swiper-next {
                                    right: 10px;
                                }

                                .swiper-button-lock {
                                    display: none !important;
                                }

                                /* =========================================
       SECTION B: SERVICE CARD STYLES
       (Scoped strictly to .service-container)
       ========================================= */
                                .service-container {
                                    display: flex;
                                    flex-direction: column;
                                    border-radius: 10px;
                                    overflow: hidden;
                                    background: #fff;
                                    height: 100%;
                                    border: 1px solid #f0f0f0;
                                }

                                .service-image-container {
                                    display: flex;
                                    width: 100%;
                                    aspect-ratio: 4375 / 2461;
                                    overflow: hidden;
                                    position: relative;
                                }

                                @media (min-width: 1024px) {
                                    .service-image-container {
                                        aspect-ratio: 57900 / 32569;
                                    }
                                }

                                .service-image {
                                    width: 100%;
                                    height: 100% !important;
                                    object-fit: cover;
                                    transition: transform 0.3s ease;
                                }

                                .service-container:hover .service-image {
                                    transform: scale(1.10);
                                }

                                .service-information-container {
                                    --padding-inline: 24px;
                                    flex: 1;
                                    display: flex;
                                    flex-direction: column;
                                    padding: 16px var(--padding-inline) var(--padding-inline);
                                    background-color: #F6F6F6;
                                }

                                .service-title {
                                    margin: 0 0 8px 0;
                                    font-weight: 600 !important;
                                    font-size: 20px !important;
                                    color: rgba(37, 37, 37, 1) !important;
                                    line-height: 1.5 !important;
                                }

                                @media (min-width: 1024px) {
                                    .service-title {
                                        font-size: 24px !important;
                                    }
                                }

                                .service-title a:hover {
                                    color: var(--e-global-color-primary) !important;
                                }

                                .service-meta-container {
                                    margin-bottom: 12px;
                                    display: flex;
                                    flex-direction: column;
                                    gap: 4px;
                                }

                                .service-meta-label {
                                    font-size: 14px !important;
                                    color: rgba(37, 37, 37, .5) !important;
                                    margin: 0;
                                }

                                .service-meta-value {
                                    font-weight: 600 !important;
                                    color: rgba(37, 37, 37, .8) !important;
                                }

                                .service-care-text {
                                    font-weight: 600 !important;
                                    font-size: 16px !important;
                                    color: rgba(37, 37, 37, 1) !important;
                                    margin: 12px 0 0 0;
                                }

                                /* =========================================
       SECTION C: SERVICE INNER PRODUCTS (RENAMED)
       Renamed classes to avoid conflict with main loop
       ========================================= */
                                .inner-product-swiper-wrapper {
                                    margin-top: 12px;
                                    border-top: 1px solid rgba(184, 184, 184, 1);
                                    padding-top: 8px;
                                    width: 100%;
                                    overflow: hidden;
                                }

                                .inner-product-item {
                                    display: grid;
                                    grid-template-columns: repeat(4, 1fr);
                                    align-items: center;
                                    gap: 12px;
                                    height: auto !important;
                                }

                                .inner-product-item:hover .inner-product-title {
                                    color: var(--e-global-color-primary) !important;
                                }

                                .inner-product-item:hover .inner-product-img {
                                    transform: scale(1.2);
                                }

                                .inner-product-img-box {
                                    grid-column: span 1;
                                    aspect-ratio: 4 / 5;
                                    display: flex;
                                    border-radius: 6px;
                                    overflow: hidden;
                                }

                                .inner-product-img {
                                    width: 100%;
                                    height: 100% !important;
                                    object-fit: cover;
                                    transition: transform 0.3s ease;
                                }

                                .inner-product-title {
                                    grid-column: span 3;
                                    font-weight: 600 !important;
                                    font-size: 12px !important;
                                    color: rgba(37, 37, 37, 1) !important;
                                    margin: 0;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                }
                            </style>

                            <script>
                                const swipers = [];
                                const nestedSwipers = [];
                            </script>

                            <ul class="product-category-container-wrapper">

                                <li class="product-category-container">
                                    <div class="product-category-information">
                                        <hgroup>
                                            <h2 class="product-category-title">
                                                Microneedling <sup class="products-count">(6)</sup>
                                            </h2>
                                            <p class="product-category-description">Khám phá hành trình chăm sóc da với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ chuyên gia,</p>
                                        </hgroup>
                                        <a href="microneedling/index.html" class="product-category-link">Xem tất cả →</a>
                                    </div>

                                    <div class="products-swiper-container">
                                        <div class="swiper products-swiper products-swiper-0">
                                            <ul class="swiper-wrapper">

                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../tach-day-phi-kim-seo/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Tách đáy và phi kim sẹo" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../tach-day-phi-kim-seo/index.html">Tách đáy và phi kim sẹo</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                                <p class="service-meta-label">Thời gian điều trị: <span class="service-meta-value">6 – 8 tuần</span></p>
                                                                <p class="service-meta-label">Mục Tiêu: <span class="service-meta-value">Giảm viêm, kháng khuẩn, ngừa thâm sẹo</span></p>
                                                            </div>

                                                            <p class="service-care-text">Chăm sóc tại gia</p>

                                                            <div class="inner-product-swiper-wrapper">
                                                                <div class="swiper nested-swiper-0-0">
                                                                    <ul class="swiper-wrapper">
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="#" class="inner-product-img-box">
                                                                                <img src="#" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="#"></a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../sua-rua-mat-bot-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../sua-rua-mat-bot-gsc/index.html">Sữa Rửa Mặt Bột Perfect</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../sua-rua-mat-gel-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../sua-rua-mat-gel-gsc/index.html">Sữa Rửa Mặt Gel Perfect (500ml)</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../sua-rua-mat-mela-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../sua-rua-mat-mela-gsc/index.html">Sữa rửa mặt Mela Perfect</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../sua-rua-mat-ph-5-5-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../sua-rua-mat-ph-5-5-gsc/index.html">Sữa Rửa Mặt Gel pH 5.5 Perfect</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../kem-uc-che-nam-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../kem-uc-che-nam-gsc/index.html">Kem Ức Chế Nám Perfect</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../kem-u-trang-da-mat-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../kem-u-trang-da-mat-gsc/index.html">Kem Ủ Trắng Da Mặt Perfect (250ml)</a>
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                nestedSwipers.push({
                                                                    selector: ".nested-swiper-0-0",
                                                                    options: {
                                                                        nested: true,
                                                                        slidesPerView: 1.3,
                                                                        spaceBetween: 12,
                                                                        loop: false,
                                                                        grabCursor: true,
                                                                        breakpoints: {
                                                                            768: {
                                                                                slidesPerView: 2,
                                                                                spaceBetween: 16
                                                                            },
                                                                            1024: {
                                                                                slidesPerView: 2.5,
                                                                                spaceBetween: 20
                                                                            },
                                                                        }
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../lan-kim-phi-kim-mun-san/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Lăn kim phi kim mụn sần" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../lan-kim-phi-kim-mun-san/index.html">Lăn kim phi kim mụn sần</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                                <p class="service-meta-label">Thời gian điều trị: <span class="service-meta-value">6 – 8 tuần</span></p>
                                                                <p class="service-meta-label">Mục Tiêu: <span class="service-meta-value">Giảm viêm, kháng khuẩn, ngừa thâm sẹo</span></p>
                                                            </div>

                                                            <p class="service-care-text">Chăm sóc tại gia</p>

                                                            <div class="inner-product-swiper-wrapper">
                                                                <div class="swiper nested-swiper-0-1">
                                                                    <ul class="swiper-wrapper">
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="#" class="inner-product-img-box">
                                                                                <img src="#" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="#"></a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../dau-tay-trang-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../dau-tay-trang-gsc/index.html">Dầu Tẩy Trang Perfect (250ml)</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../dau-dan-da-nang-dr-leemee/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../dau-dan-da-nang-dr-leemee/index.html">Dầu Dẫn Đa Năng Dr. Leemee</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../indexb59a.html?post_type=product&amp;p=5762" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../indexb59a.html?post_type=product&amp;p=5762">Riêng tư: Kem chống nắng BB Cream Perfect</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../kem-chong-nang-vat-ly-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../kem-chong-nang-vat-ly-gsc/index.html">Kem Chống Nắng Vật Lý Perfect</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../kem-phuc-hoi-thai-doc-da-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../kem-phuc-hoi-thai-doc-da-gsc/index.html">Kem Phục Hồi Thải Độc Da Perfect</a>
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                nestedSwipers.push({
                                                                    selector: ".nested-swiper-0-1",
                                                                    options: {
                                                                        nested: true,
                                                                        slidesPerView: 1.3,
                                                                        spaceBetween: 12,
                                                                        loop: false,
                                                                        grabCursor: true,
                                                                        breakpoints: {
                                                                            768: {
                                                                                slidesPerView: 2,
                                                                                spaceBetween: 16
                                                                            },
                                                                            1024: {
                                                                                slidesPerView: 2.5,
                                                                                spaceBetween: 20
                                                                            },
                                                                        }
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../lan-kim-phi-kim-nam/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Lăn kim phi kim nám" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../lan-kim-phi-kim-nam/index.html">Lăn kim phi kim nám</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../phi-nano-cang-bong-trang-sang/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Phi nano căng bóng, trắng sáng" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../phi-nano-cang-bong-trang-sang/index.html">Phi nano căng bóng, trắng sáng</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../lan-kim-phi-kim-cang-bong/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Lăn kim phi kim căng bóng" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../lan-kim-phi-kim-cang-bong/index.html">Lăn kim phi kim căng bóng</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../vi-kim-cang-bong/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Vi kim căng bóng" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../vi-kim-cang-bong/index.html">Vi kim căng bóng</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>

                                            </ul>
                                        </div>

                                        <div class="products-swiper-prev products-swiper-prev-0">
                                            <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                        <div class="products-swiper-next products-swiper-next-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>

                                <script>
                                    swipers.push({
                                        selector: ".products-swiper-0",
                                        options: {
                                            slidesPerView: 1.1,
                                            spaceBetween: 12,
                                            loop: true,
                                            loopedSlides: 5,
                                            centeredSlides: false,
                                            watchOverflow: true,
                                            navigation: {
                                                prevEl: ".products-swiper-prev-0",
                                                nextEl: ".products-swiper-next-0",
                                            },
                                            breakpoints: {
                                                1024: {
                                                    slidesPerView: 2,
                                                    spaceBetween: 20,
                                                },
                                            },
                                        }
                                    });
                                </script>

                                <li class="product-category-container">
                                    <div class="product-category-information">
                                        <hgroup>
                                            <h2 class="product-category-title">
                                                Peel <sup class="products-count">(5)</sup>
                                            </h2>
                                            <p class="product-category-description">Khám phá hành trình chăm sóc da với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ chuyên gia,</p>
                                        </hgroup>
                                        <a href="peel/index.html" class="product-category-link">Xem tất cả →</a>
                                    </div>

                                    <div class="products-swiper-container">
                                        <div class="swiper products-swiper products-swiper-1">
                                            <ul class="swiper-wrapper">

                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../peel-hoa-hoc-nam/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Peel hóa học nám" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../peel-hoa-hoc-nam/index.html">Peel hóa học nám</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                            <p class="service-care-text">Chăm sóc tại gia</p>

                                                            <div class="inner-product-swiper-wrapper">
                                                                <div class="swiper nested-swiper-1-0">
                                                                    <ul class="swiper-wrapper">
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../tinh-chat-mun-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../tinh-chat-mun-gsc/index.html">Tinh chất mụn Perfect (15ml)</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../kem-phuc-hoi-thai-doc-da-gsc/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../kem-phuc-hoi-thai-doc-da-gsc/index.html">Kem Phục Hồi Thải Độc Da Perfect</a>
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                nestedSwipers.push({
                                                                    selector: ".nested-swiper-1-0",
                                                                    options: {
                                                                        nested: true,
                                                                        slidesPerView: 1.3,
                                                                        spaceBetween: 12,
                                                                        loop: false,
                                                                        grabCursor: true,
                                                                        breakpoints: {
                                                                            768: {
                                                                                slidesPerView: 2,
                                                                                spaceBetween: 16
                                                                            },
                                                                            1024: {
                                                                                slidesPerView: 2.5,
                                                                                spaceBetween: 20
                                                                            },
                                                                        }
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../vi-kim-sinh-hoc-nam/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Vi kim sinh học nám" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../vi-kim-sinh-hoc-nam/index.html">Vi kim sinh học nám</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../seo-tca/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Sẹo với TCA" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../seo-tca/index.html">Sẹo với TCA</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../vi-kim-sinh-hoc-mun-san/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Vi kim sinh học mụn sần" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../vi-kim-sinh-hoc-mun-san/index.html">Vi kim sinh học mụn sần</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../peel-hoa-hoc-mun/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Peel hóa học mụn sần, mụn trứng cá" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../peel-hoa-hoc-mun/index.html">Peel hóa học mụn sần, mụn trứng cá</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>

                                            </ul>
                                        </div>

                                        <div class="products-swiper-prev products-swiper-prev-1">
                                            <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                        <div class="products-swiper-next products-swiper-next-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>

                                <script>
                                    swipers.push({
                                        selector: ".products-swiper-1",
                                        options: {
                                            slidesPerView: 1.1,
                                            spaceBetween: 12,
                                            loop: true,
                                            loopedSlides: 5,
                                            centeredSlides: false,
                                            watchOverflow: true,
                                            navigation: {
                                                prevEl: ".products-swiper-prev-1",
                                                nextEl: ".products-swiper-next-1",
                                            },
                                            breakpoints: {
                                                1024: {
                                                    slidesPerView: 2,
                                                    spaceBetween: 20,
                                                },
                                            },
                                        }
                                    });
                                </script>

                                <li class="product-category-container">
                                    <div class="product-category-information">
                                        <hgroup>
                                            <h2 class="product-category-title">
                                                Advanced Skincare Therapy <sup class="products-count">(8)</sup>
                                            </h2>
                                            <p class="product-category-description">Khám phá hành trình chăm sóc da với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ chuyên gia,</p>
                                        </hgroup>
                                        <a href="advanced-skincare-therapy/index.html" class="product-category-link">Xem tất cả →</a>
                                    </div>

                                    <div class="products-swiper-container">
                                        <div class="swiper products-swiper products-swiper-2">
                                            <ul class="swiper-wrapper">

                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../dien-di-anh-sang-voi-mun-trung-ca/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Điện di &#038; ánh sáng với mụn trứng cá" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../dien-di-anh-sang-voi-mun-trung-ca/index.html">Điện di &#038; ánh sáng với mụn trứng cá</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                            <p class="service-care-text">Chăm sóc tại gia</p>

                                                            <div class="inner-product-swiper-wrapper">
                                                                <div class="swiper nested-swiper-2-0">
                                                                    <ul class="swiper-wrapper">
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../dien-di-anh-sang-phuc-hoi-sau-laser/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../dien-di-anh-sang-phuc-hoi-sau-laser/index.html">Điện di &#038; ánh sáng phục hồi sau laser</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../lan-kim-phi-kim-cang-bong/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../lan-kim-phi-kim-cang-bong/index.html">Lăn kim phi kim căng bóng</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../duong-trang-cang-bong/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../duong-trang-cang-bong/index.html">Dưỡng trắng, căng bóng</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../lan-kim-phi-kim-mun-san/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../lan-kim-phi-kim-mun-san/index.html">Lăn kim phi kim mụn sần</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../dien-di-anh-sang-voi-mun-trung-ca/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../dien-di-anh-sang-voi-mun-trung-ca/index.html">Điện di &#038; ánh sáng với mụn trứng cá</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../laser-nam/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../laser-nam/index.html">Laser nám</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../mun-nhan-viem-nhe/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../mun-nhan-viem-nhe/index.html">Mụn nhân viêm nhẹ</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../mesotherapy-nam/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../mesotherapy-nam/index.html">Mesotherapy nám</a>
                                                                            </p>
                                                                        </li>
                                                                        <li class="inner-product-item swiper-slide">
                                                                            <a href="../mesotherapy-mun/index.html" class="inner-product-img-box">
                                                                                <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" class="inner-product-img" loading="lazy">
                                                                            </a>
                                                                            <p class="inner-product-title">
                                                                                <a href="../mesotherapy-mun/index.html">Mesotherapy mụn sần, mụn viêm</a>
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                nestedSwipers.push({
                                                                    selector: ".nested-swiper-2-0",
                                                                    options: {
                                                                        nested: true,
                                                                        slidesPerView: 1.3,
                                                                        spaceBetween: 12,
                                                                        loop: false,
                                                                        grabCursor: true,
                                                                        breakpoints: {
                                                                            768: {
                                                                                slidesPerView: 2,
                                                                                spaceBetween: 16
                                                                            },
                                                                            1024: {
                                                                                slidesPerView: 2.5,
                                                                                spaceBetween: 20
                                                                            },
                                                                        }
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../dien-di-anh-sang-mun-san/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Điện di &#038; ánh sáng với mụn sần" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../dien-di-anh-sang-mun-san/index.html">Điện di &#038; ánh sáng với mụn sần</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../dien-di-anh-sang-mun-viem/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Điện di &#038; ánh sáng với mụn viêm" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../dien-di-anh-sang-mun-viem/index.html">Điện di &#038; ánh sáng với mụn viêm</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../dien-di-anh-sang-phuc-hoi-sau-laser/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Điện di &#038; ánh sáng phục hồi sau laser" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../dien-di-anh-sang-phuc-hoi-sau-laser/index.html">Điện di &#038; ánh sáng phục hồi sau laser</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../dien-di-phuc-hoi/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Điện di phục hồi" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../dien-di-phuc-hoi/index.html">Điện di phục hồi</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../u-trang-cang-bong/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Ủ trắng căng bóng" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../u-trang-cang-bong/index.html">Ủ trắng căng bóng</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../oxyjet-dien-di-phuc-hoi-corticoid/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Oxy jet &#038; điện di phục hồi corticoid" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../oxyjet-dien-di-phuc-hoi-corticoid/index.html">Oxy jet &#038; điện di phục hồi corticoid</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../oxyjet-anh-sang-phuc-hoi-kich-ung/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Oxyjet &#038; ánh sáng phục hồi kích ứng" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../oxyjet-anh-sang-phuc-hoi-kich-ung/index.html">Oxyjet &#038; ánh sáng phục hồi kích ứng</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>

                                            </ul>
                                        </div>

                                        <div class="products-swiper-prev products-swiper-prev-2">
                                            <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                        <div class="products-swiper-next products-swiper-next-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>

                                <script>
                                    swipers.push({
                                        selector: ".products-swiper-2",
                                        options: {
                                            slidesPerView: 1.1,
                                            spaceBetween: 12,
                                            loop: true,
                                            loopedSlides: 5,
                                            centeredSlides: false,
                                            watchOverflow: true,
                                            navigation: {
                                                prevEl: ".products-swiper-prev-2",
                                                nextEl: ".products-swiper-next-2",
                                            },
                                            breakpoints: {
                                                1024: {
                                                    slidesPerView: 2,
                                                    spaceBetween: 20,
                                                },
                                            },
                                        }
                                    });
                                </script>

                                <li class="product-category-container">
                                    <div class="product-category-information">
                                        <hgroup>
                                            <h2 class="product-category-title">
                                                Meso Therapy <sup class="products-count">(2)</sup>
                                            </h2>
                                            <p class="product-category-description"></p>
                                        </hgroup>
                                        <a href="meso-therapy/index.html" class="product-category-link">Xem tất cả →</a>
                                    </div>

                                    <div class="products-swiper-container">
                                        <div class="swiper products-swiper products-swiper-3">
                                            <ul class="swiper-wrapper">

                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../mesotherapy-nam/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Mesotherapy nám" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../mesotherapy-nam/index.html">Mesotherapy nám</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../mesotherapy-mun/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Mesotherapy mụn sần, mụn viêm" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../mesotherapy-mun/index.html">Mesotherapy mụn sần, mụn viêm</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>

                                            </ul>
                                        </div>

                                        <div class="products-swiper-prev products-swiper-prev-3">
                                            <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                        <div class="products-swiper-next products-swiper-next-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>

                                <script>
                                    swipers.push({
                                        selector: ".products-swiper-3",
                                        options: {
                                            slidesPerView: 1.1,
                                            spaceBetween: 12,
                                            loop: false,
                                            loopedSlides: 5,
                                            centeredSlides: false,
                                            watchOverflow: true,
                                            navigation: {
                                                prevEl: ".products-swiper-prev-3",
                                                nextEl: ".products-swiper-next-3",
                                            },
                                            breakpoints: {
                                                1024: {
                                                    slidesPerView: 2,
                                                    spaceBetween: 20,
                                                },
                                            },
                                        }
                                    });
                                </script>

                                <li class="product-category-container">
                                    <div class="product-category-information">
                                        <hgroup>
                                            <h2 class="product-category-title">
                                                Laser <sup class="products-count">(2)</sup>
                                            </h2>
                                            <p class="product-category-description"></p>
                                        </hgroup>
                                        <a href="laser/index.html" class="product-category-link">Xem tất cả →</a>
                                    </div>

                                    <div class="products-swiper-container">
                                        <div class="swiper products-swiper products-swiper-4">
                                            <ul class="swiper-wrapper">

                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../tach-day-va-laser-seo/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Tách đáy và laser sẹo" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../tach-day-va-laser-seo/index.html">Tách đáy và laser sẹo</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>
                                                <li class="swiper-slide">


                                                    <div class="service-container">
                                                        <a href="../laser-nam/index.html" class="service-image-container">
                                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="{{ asset('images/banner/banner2.webp') }}" alt="Laser nám" class="service-image" loading="lazy">
                                                        </a>

                                                        <div class="service-information-container">
                                                            <h2 class="service-title">
                                                                <a href="../laser-nam/index.html">Laser nám</a>
                                                            </h2>

                                                            <div class="service-meta-container">
                                                            </div>

                                                        </div>
                                                    </div>


                                                </li>

                                            </ul>
                                        </div>

                                        <div class="products-swiper-prev products-swiper-prev-4">
                                            <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                        <div class="products-swiper-next products-swiper-next-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>

                                <script>
                                    swipers.push({
                                        selector: ".products-swiper-4",
                                        options: {
                                            slidesPerView: 1.1,
                                            spaceBetween: 12,
                                            loop: false,
                                            loopedSlides: 5,
                                            centeredSlides: false,
                                            watchOverflow: true,
                                            navigation: {
                                                prevEl: ".products-swiper-prev-4",
                                                nextEl: ".products-swiper-next-4",
                                            },
                                            breakpoints: {
                                                1024: {
                                                    slidesPerView: 2,
                                                    spaceBetween: 20,
                                                },
                                            },
                                        }
                                    });
                                </script>
                            </ul>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    nestedSwipers.forEach(item => new Swiper(item.selector, item.options));
                                    swipers.forEach(item => new Swiper(item.selector, item.options));
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
