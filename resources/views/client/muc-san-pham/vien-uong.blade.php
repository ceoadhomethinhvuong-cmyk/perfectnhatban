@extends('client.layouts.app')

@section('seo_title', 'Viên uống PERFECT Nhật Bản chính hãng')
@section('meta_description', 'Danh mục viên uống PERFECT Nhật Bản hỗ trợ chăm sóc sắc đẹp và sức khỏe từ bên trong, thông tin sản phẩm rõ ràng, dễ chọn theo nhu cầu.')

@section('title', 'Viên Uống')

@section('content')
<link rel='stylesheet' id='elementor-post-6949-css'
    href='{{ asset("wp-content/uploads/elementor/css/post-69491625.css?ver=1772512056") }}' media='all' />

<div data-elementor-type="product-archive" data-elementor-id="6949"
    class="elementor elementor-6949 elementor-location-archive product" data-elementor-post-type="elementor_library">
    <div class="elementor-element elementor-element-2b336a1 e-flex e-con-boxed e-con e-parent" data-id="2b336a1"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-d7bfbea elementor-align-center elementor-widget elementor-widget-breadcrumbs"
                data-id="d7bfbea" data-element_type="widget" data-widget_type="breadcrumbs.default">
                <div class="elementor-widget-container">
                    <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
                        <p><a href="../index.html">Trang chủ</a><span class="separator"> &gt; </span><span
                                class="last"><a href="{{ route('vien-uong') }}">Viên uống</a></span></p>
                    </nav>
                </div>
            </div>
            <div class="elementor-element elementor-element-9cd445c e-con-full e-flex e-con e-child" data-id="9cd445c"
                data-element_type="container">
                <div class="elementor-element elementor-element-f6f1f34 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="f6f1f34" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">Viên uống</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-82a2dac elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="82a2dac" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-heading-title elementor-size-default">
                            <p>Các sản phẩm viên uống Perfect hỗ trợ chăm sóc sức khỏe và sắc đẹp từ bên trong.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-c94fc7b e-flex e-con-boxed e-con e-parent" data-id="c94fc7b"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-a53f188 elementor-widget elementor-widget-shortcode"
                data-id="a53f188" data-element_type="widget" data-widget_type="shortcode.default">
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
                            transition: color 0.25s ease;
                        }

                        .product-container:hover .product-title,
                        .product-title:hover {
                            color: #3ea8e2 !important;
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

                        .product-discover-now:hover {
                            color: #3ea8e2 !important;
                            border-bottom-color: #3ea8e2;
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
                            background-color: #3ea8e2;
                            box-shadow: 0 4px 12px rgba(20, 92, 132, 0.18);
                        }

                        .product-tag {
                            margin: 0;
                            font-weight: 600 !important;
                            font-size: 12px !important;
                            color: #ffffff !important;
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
                            color: #3ea8e2 !important;
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

                        /* Products Grid (no swiper) */
                        .products-grid-container {
                            grid-column: 1 / -1;
                        }

                        @media (min-width: 1024px) {
                            .products-grid-container {
                                grid-column: span 3;
                            }
                        }

                        .products-grid {
                            display: grid;
                            grid-template-columns: repeat(2, 1fr);
                            gap: 20px;
                        }

                        @media (min-width: 768px) {
                            .products-grid {
                                grid-template-columns: repeat(3, 1fr);
                            }
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
                            color: #3ea8e2 !important;
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
                                            Viên Uống<sup class="products-count">(6)</sup>
                                        </h2>
                                        <p class="product-category-description">Các sản phẩm viên uống Perfect hỗ trợ
                                            chăm sóc sức khỏe và sắc đẹp từ bên trong.</p>
                                    </hgroup>

                                </div>

                                <div class="products-swiper-container">
                                    <div class="swiper products-swiper products-swiper-1">
                                        <ul class="swiper-wrapper">

                                            <li class="swiper-slide">
                                                <div class="product-container">
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'perfect-lady') }}"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="{{asset('images/sanpham/perfect-lady/lady.webp')}}"
                                                            alt="V1 - Viên uống nội tiết Perfect Lady"
                                                            class="product-image">
                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Chuyên Gia</p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Tại Nhà</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            [Mã V1] Viên uống nội tiết tố nữ PERFECT LADY Nhật Bản hỗ trợ cân bằng nội tiết, đẹp da, giảm khô hạn 60 viên</h3>
                                                    </hgroup>
                                                    <p class="product-description">V1 - Viên uống nội tiết Perfect Lady</p>
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'perfect-lady') }}"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                            <li class="swiper-slide">
                                                <div class="product-container">
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'perfect-beauty-white') }}"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="{{asset('images/sanpham/perfect-beauty-white/white.webp')}}"
                                                            alt="V2 - Viên uống trắng da Perfect Beauty White"
                                                            class="product-image">
                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Chuyên Gia</p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Tại Nhà</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            [Mã V2] Viên uống trắng da PERFECT BEAUTY WHITE Nhật Bản hỗ trợ sáng da, mờ nám, chống lão hóa 70 viên</h3>
                                                    </hgroup>
                                                    <p class="product-description">V2 - Viên uống trắng da Perfect Beauty White</p>
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'perfect-beauty-white') }}"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                            <li class="swiper-slide">
                                                <div class="product-container">
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'nmn') }}"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="{{asset('images/sanpham/nmn.webp')}}"
                                                            alt="Viên uống NMN 10000MG" class="product-image">
                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Chuyên Gia</p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Tại Nhà</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            [Mã V8] Viên uống PERFECT NMN 10,000 Nhật Bản hỗ trợ chống lão hóa, tăng cường năng lượng 90 viên</h3>
                                                    </hgroup>
                                                    <p class="product-description">Viên uống NMN 10,000MG</p>
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'nmn') }}"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                            <li class="swiper-slide">
                                                <div class="product-container">
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'nattokinase') }}"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="{{asset('images/sanpham/nattokinase.webp')}}"
                                                            alt="Viên uống Nattokinase" class="product-image">
                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Chuyên Gia</p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Tại Nhà</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Viên uống ngừa đột quỵ Nattokinase</h3>
                                                    </hgroup>
                                                    <p class="product-description">Viên uống ngừa đột quỵ Nattokinase</p>
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'nattokinase') }}"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                            <li class="swiper-slide">
                                                <div class="product-container">
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'spualene') }}"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="{{asset('images/sanpham/spualene.webp')}}"
                                                            alt="Viên uống Spualene 900" class="product-image">
                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Chuyên Gia</p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Tại Nhà</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Viên uống Spualene 900</h3>
                                                    </hgroup>
                                                    <p class="product-description">Viên uống cải thiện mỡ máu Spualene 900</p>
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'spualene') }}"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                            <li class="swiper-slide">
                                                <div class="product-container">
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'vien_nghe') }}"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="{{asset('images/sanpham/v14.webp')}}"
                                                            alt="V14 - Viên uống tinh chất nghệ cao cấp Nhật Bản"
                                                            class="product-image">
                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Chuyên Gia</p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">Tại Nhà</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            V14 - Viên uống tinh chất nghệ cao cấp Nhật Bản</h3>
                                                    </hgroup>
                                                    <p class="product-description">V14 - Viên uống tinh chất nghệ Nhật Bản</p>
                                                    <a href="{{ route('chi-tiet-san-pham.show', 'vien_nghe') }}"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="products-swiper-prev products-swiper-prev-1">
                                        <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                    <div class="products-swiper-next products-swiper-next-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                    slidesPerView: 2,
                                    spaceBetween: 12,
                                    loop: true,
                                    loopedSlides: 6,
                                    centeredSlides: false,
                                    watchOverflow: true,
                                    navigation: {
                                        prevEl: ".products-swiper-prev-1",
                                        nextEl: ".products-swiper-next-1",
                                    },
                                    breakpoints: {
                                        1024: {
                                            slidesPerView: 3,
                                            spaceBetween: 20,
                                        },
                                    },
                                }
                            });
                            </script>



                            <script>
                            swipers.push({
                                selector: ".products-swiper-2",
                                options: {
                                    slidesPerView: 2,
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
                                            slidesPerView: 3,
                                            spaceBetween: 20,
                                        },
                                    },
                                }
                            });
                            </script>



                            <script>
                            swipers.push({
                                selector: ".products-swiper-3",
                                options: {
                                    slidesPerView: 2,
                                    spaceBetween: 12,
                                    loop: true,
                                    loopedSlides: 5,
                                    centeredSlides: false,
                                    watchOverflow: true,
                                    navigation: {
                                        prevEl: ".products-swiper-prev-3",
                                        nextEl: ".products-swiper-next-3",
                                    },
                                    breakpoints: {
                                        1024: {
                                            slidesPerView: 3,
                                            spaceBetween: 20,
                                        },
                                    },
                                }
                            });
                            </script>



                            <script>
                            swipers.push({
                                selector: ".products-swiper-4",
                                options: {
                                    slidesPerView: 2,
                                    spaceBetween: 12,
                                    loop: true,
                                    loopedSlides: 5,
                                    centeredSlides: false,
                                    watchOverflow: true,
                                    navigation: {
                                        prevEl: ".products-swiper-prev-4",
                                        nextEl: ".products-swiper-next-4",
                                    },
                                    breakpoints: {
                                        1024: {
                                            slidesPerView: 3,
                                            spaceBetween: 20,
                                        },
                                    },
                                }
                            });
                            </script>



                            <script>
                            swipers.push({
                                selector: ".products-swiper-5",
                                options: {
                                    slidesPerView: 2,
                                    spaceBetween: 12,
                                    loop: false,
                                    loopedSlides: 5,
                                    centeredSlides: false,
                                    watchOverflow: true,
                                    navigation: {
                                        prevEl: ".products-swiper-prev-5",
                                        nextEl: ".products-swiper-next-5",
                                    },
                                    breakpoints: {
                                        1024: {
                                            slidesPerView: 3,
                                            spaceBetween: 20,
                                        },
                                    },
                                }
                            });
                            </script>


                            <script>
                            swipers.push({
                                selector: ".products-swiper-6",
                                options: {
                                    slidesPerView: 2,
                                    spaceBetween: 12,
                                    loop: false,
                                    loopedSlides: 5,
                                    centeredSlides: false,
                                    watchOverflow: true,
                                    navigation: {
                                        prevEl: ".products-swiper-prev-6",
                                        nextEl: ".products-swiper-next-6",
                                    },
                                    breakpoints: {
                                        1024: {
                                            slidesPerView: 3,
                                            spaceBetween: 20,
                                        },
                                    },
                                }
                            });
                            </script>



                            <script>
                            swipers.push({
                                selector: ".products-swiper-7",
                                options: {
                                    slidesPerView: 2,
                                    spaceBetween: 12,
                                    loop: false,
                                    loopedSlides: 5,
                                    centeredSlides: false,
                                    watchOverflow: true,
                                    navigation: {
                                        prevEl: ".products-swiper-prev-7",
                                        nextEl: ".products-swiper-next-7",
                                    },
                                    breakpoints: {
                                        1024: {
                                            slidesPerView: 3,
                                            spaceBetween: 20,
                                        },
                                    },
                                }
                            });
                            </script>


                            <script>
                            swipers.push({
                                selector: ".products-swiper-8",
                                options: {
                                    slidesPerView: 2,
                                    spaceBetween: 12,
                                    loop: false,
                                    loopedSlides: 5,
                                    centeredSlides: false,
                                    watchOverflow: true,
                                    navigation: {
                                        prevEl: ".products-swiper-prev-8",
                                        nextEl: ".products-swiper-next-8",
                                    },
                                    breakpoints: {
                                        1024: {
                                            slidesPerView: 3,
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
