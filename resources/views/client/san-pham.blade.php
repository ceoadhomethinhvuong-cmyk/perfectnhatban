@extends('client.layouts.app')

@section('seo_title', 'Sản phẩm PERFECT Nhật Bản chính hãng')
@section('meta_description', 'Khám phá danh mục sản phẩm PERFECT Nhật Bản chính hãng gồm viên uống, serum và sản phẩm
dưỡng tóc, minh bạch nguồn gốc và thông tin sử dụng.')

@section('title', 'Sản Phẩm')

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
                                class="last">Chăm sóc da</span></p>
                    </nav>
                </div>
            </div>
            <div class="elementor-element elementor-element-9cd445c e-con-full e-flex e-con e-child" data-id="9cd445c"
                data-element_type="container">
                <div class="elementor-element elementor-element-f6f1f34 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="f6f1f34" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">Chăm sóc da</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-82a2dac elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="82a2dac" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-heading-title elementor-size-default">
                            <p>Khám phá hành trình chăm sóc da với Perfect+. Tại đây, bạn sẽ tìm thấy
                                những bài viết từ chuyên gia.</p>
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

                        .product-container {
                            background: #ffffff;
                            border-radius: 14px;
                            overflow: hidden;
                        }

                        .product-container hgroup {
                            margin-top: 12px;
                        }

                        .product-subtitle {
                            margin: 0;
                            margin-top: 14px;
                            padding: 0 14px;
                            font-weight: 400 !important;
                            font-size: 12px !important;
                            color: rgba(37, 37, 37, .4) !important;
                        }

                        .product-title {
                            margin: 0;
                            padding: 0 14px;
                            color: #252525 !important;
                            font-size: 15px !important;
                            letter-spacing: 0 !important;
                            line-height: 1.45 !important;
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            transition: color 0.22s ease;
                        }

                        .product-container:hover .product-title,
                        .product-title:hover {
                            color: #3ea8e2 !important;
                        }

                        .product-description {
                            margin: 0;
                            margin-top: 2px;
                            padding: 0 14px;
                            font-size: 13px !important;
                            color: #252525;
                            flex-grow: 1;
                            opacity: 60%;
                            font-weight: 400;
                            white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            display: none;

                            @media (1024px <=width) {
                                display: block;
                            }
                        }

                        .product-discover-now {
                            margin: 8px 14px 14px;
                            display: inline-block;
                            width: fit-content;
                            color: #3ea8e2 !important;
                            font-weight: 500;
                            text-decoration: none;
                            border-bottom: 1.5px solid rgba(62, 168, 226, 0.4);
                            transition: color 0.22s ease, border-color 0.22s ease, transform 0.22s ease;
                            font-size: 13.5px;
                        }

                        .product-discover-now:hover {
                            color: #1d91cf !important;
                            border-bottom-color: #1d91cf !important;
                            transform: translateX(3px);
                            background: transparent !important;
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
                                        <p class="product-category-description">Khám phá hành trình chăm sóc da
                                            với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ
                                            chuyên gia,</p>
                                    </hgroup>
                                    <a href="{{ route('vien-uong') }}" class="product-category-link">Xem tất cả
                                        →</a>
                                </div>

                                <div class="products-swiper-container">
                                    <div class="swiper products-swiper products-swiper-0">
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
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            [Mã V1] Viên uống nội tiết tố nữ PERFECT LADY Nhật Bản hỗ
                                                            trợ cân bằng nội tiết, đẹp da, giảm khô hạn 60 viên</h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        V1 - Viên uống nội tiết Perfect Lady </p>

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
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            [Mã V2] Viên uống trắng da PERFECT BEAUTY WHITE Nhật Bản hỗ
                                                            trợ sáng da, mờ nám, chống lão hóa 70 viên </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        V2 - Viên uống trắng da Perfect Beauty White </p>

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
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            [Mã V8] Viên uống PERFECT NMN 10,000 Nhật Bản hỗ trợ chống
                                                            lão hóa, tăng cường năng lượng 90 viên </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Viên uống NMN 10,000MG </p>

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
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Viên uống ngừa đột quỵ Nattokinase </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Viên uống ngừa đột quỵ Nattokinase </p>

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
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Viên uống Spualene 900 </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Viên uống cải thiện mỡ máu Spualene 900 </p>

                                                    <a href="{{ route('chi-tiet-san-pham.show', 'spualene') }}"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                            </li>
                            <li class="swiper-slide">


                                <div class="product-container">
                                    <a href="{{ route('chi-tiet-san-pham.show', 'vien_nghe') }}"
                                        class="product-image-container">
                                        <img data-lazyloaded="1"
                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                            data-src="{{asset('images/sanpham/v14.webp')}}"
                                            alt="V14 - Viên uống tinh chất nghệ cao cấp Nhật Bản" class="product-image">


                                        <div class="product-tags-container-wrapper">
                                            <ul class="product-tag-container-wrapper">
                                                <li class="product-tag-container">
                                                    <p class="product-tag">
                                                        Chuyên Gia </p>
                                                </li>
                                                <li class="product-tag-container">
                                                    <p class="product-tag">
                                                        Tại Nhà </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>

                                    <hgroup>
                                        <h3 class="product-title" style="margin-top: 10px;">
                                            V14 - Viên uống tinh chất nghệ cao cấp Nhật Bản </h3>
                                    </hgroup>

                                    <p class="product-description">
                                        V14 - Viên uống tinh chất nghệ Nhật Bản </p>

                                    <a href="{{ route('chi-tiet-san-pham.show', 'vien_nghe') }}"
                                        class="product-discover-now">Khám phá ngay</a>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="products-swiper-prev products-swiper-prev-0">
                        <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg>
                    </div>
                    <div class="products-swiper-next products-swiper-next-0">
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
                    selector: ".products-swiper-0",
                    options: {
                        slidesPerView: 2,
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
                                slidesPerView: 3,
                                spaceBetween: 20,
                            },
                        },
                    }
                });
                </script>
                <!-- ///////-------------------------------------------------------------------serum -->
                <li class="product-category-container">
                    <div class="product-category-information">
                        <hgroup>
                            <h2 class="product-category-title">
                                Serum <sup class="products-count"></sup>
                            </h2>
                            <p class="product-category-description">Khám phá hành trình chăm sóc da
                                với Perfect Nhật Bản. Tại đây, bạn sẽ tìm thấy những bài viết từ
                                chuyên gia,</p>
                        </hgroup>
                        <a href="./muc-san-pham/serum" class="product-category-link">Xem tất cả →</a>
                    </div>

                    <div class="products-swiper-container">
                        <div class="swiper products-swiper products-swiper-1">
                            <ul class="swiper-wrapper">

                                <li class="swiper-slide">


                                    <div class="product-container">
                                        <a href="{{ route('chi-tiet-san-pham.show', 'p9') }}"
                                            class="product-image-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                data-src="{{asset('images/sanpham/perfect-skin-nano-250/p9.webp')}}"
                                                alt="P9" class="product-image">


                                            <div class="product-tags-container-wrapper">
                                                <ul class="product-tag-container-wrapper">
                                                    <li class="product-tag-container">
                                                        <p class="product-tag">
                                                            Tại Spa/Clinic </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>

                                        <hgroup>
                                            <h3 class="product-title" style="margin-top: 10px;">
                                                [Mã P9] SERUM PEPTIDE PERFECT SKIN NANO Nhật Bản hỗ trợ phục hồi da, mờ
                                                sẹo rỗ, tăng sinh collagen </h3>
                                        </hgroup>

                                        <p class="product-description">
                                            Serum - Perfect Skin Nano 250 (8ML)</p>

                                        <a href="{{ route('chi-tiet-san-pham.show', 'p9') }}" class="product-discover-now">Khám
                                            phá ngay</a>
                                    </div>
                                </li>
                                <li class="swiper-slide">


                                    <div class="product-container">
                                        <a href="{{ route('chi-tiet-san-pham.show', 'p6') }}"
                                            class="product-image-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                data-src="{{asset('images/sanpham/p6.webp')}}" alt="P6"
                                                class="product-image">


                                            <div class="product-tags-container-wrapper">
                                                <ul class="product-tag-container-wrapper">
                                                    <li class="product-tag-container">
                                                        <p class="product-tag">
                                                            Tại Spa/Clinic </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>

                                        <hgroup>
                                            <h3 class="product-title" style="margin-top: 10px;">
                                                [MÃ P6] SERUM PEPTIDE PERFECT SKIN NANO NHẬT BẢN – HỖ TRỢ PHỤC HỒI DA,
                                                MỜ SẸO RỖ, TĂNG SINH COLLAGEN </h3>
                                        </hgroup>

                                        <p class="product-description">
                                            Serum - Perfect Skin Nano 230 (8ML)</p>

                                        <a href="{{ route('chi-tiet-san-pham.show', 'p6') }}"
                                            class="product-discover-now">Khám phá ngay</a>
                                    </div>
                                </li>
                                <li class="swiper-slide">


                                    <div class="product-container">
                                        <a href="{{ route('chi-tiet-san-pham.show', 'p5') }}"
                                            class="product-image-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                data-src="{{asset('images/sanpham/p5.webp')}}" alt="P5"
                                                class="product-image">


                                            <div class="product-tags-container-wrapper">
                                                <ul class="product-tag-container-wrapper">
                                                    <li class="product-tag-container">
                                                        <p class="product-tag">
                                                            Tại Spa/Clinic </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>

                                        <hgroup>
                                            <h3 class="product-title" style="margin-top: 10px;">
                                                [Mã P5] SERUM PEPTIDE PERFECT SKIN NANO Nhật Bản hỗ trợ phục hồi da, mờ
                                                sẹo rỗ, tăng sinh collagen </h3>
                                        </hgroup>

                                        <p class="product-description">
                                            Serum - Perfect Skin Nano 205 (8ML)</p>

                                        <a href="{{ route('chi-tiet-san-pham.show', 'p5') }}"
                                            class="product-discover-now">Khám phá ngay</a>
                                    </div>
                                </li>
                                <li class="swiper-slide">


                                    <div class="product-container">
                                        <a href="{{ route('chi-tiet-san-pham.show', 'p7') }}"
                                            class="product-image-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                data-src="{{asset('images/sanpham/p7.webp')}}" alt="P7"
                                                class="product-image">


                                            <div class="product-tags-container-wrapper">
                                                <ul class="product-tag-container-wrapper">
                                                    <li class="product-tag-container">
                                                        <p class="product-tag">
                                                            Tại Spa/Clinic </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>

                                        <hgroup>
                                            <h3 class="product-title" style="margin-top: 10px;">
                                                [Mã P7] SERUM dưỡng da PERFECT PEPTIDE NANO Nhật Bản hỗ trợ cấp ẩm, làm
                                                sáng da, thu nhỏ lỗ chân lông </h3>
                                        </hgroup>

                                        <p class="product-description">
                                            Serum - Perfect Peptide Nano (500ML)</p>

                                        <a href="{{ route('chi-tiet-san-pham.show', 'p7') }}"
                                            class="product-discover-now">Khám phá ngay</a>
                                    </div>
                                </li>

                </li>
                <li class="swiper-slide">


                    <div class="product-container">
                        <a href="{{ route('chi-tiet-san-pham.show', 'vc30-serum-vitamin-c') }}" class="product-image-container">
                            <img data-lazyloaded="1"
                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                data-src="{{asset('images/sanpham/vc30.webp')}}" alt="VC30" class="product-image">


                            <div class="product-tags-container-wrapper">
                                <ul class="product-tag-container-wrapper">
                                    <li class="product-tag-container">
                                        <p class="product-tag">
                                            Tại Spa/Clinic </p>
                                    </li>
                                    <li class="product-tag-container">
                                        <p class="product-tag">
                                            Tại Nhà </p>
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <hgroup>
                            <h3 class="product-title" style="margin-top: 10px;">
                                [Mã VC30] PERFECT VC30 Nhật Bản tinh chất Vitamin C 30 hỗ trợ sáng da, mờ thâm nám,
                                chống lão hóa </h3>
                        </hgroup>

                        <p class="product-description">
                            Serum - Perfect VC30 Nhật Bản</p>

                        <a href="{{ route('chi-tiet-san-pham.show', 'vc30-serum-vitamin-c') }}" class="product-discover-now">Khám phá
                            ngay</a>
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
                loopedSlides: 5,
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

        <!-- Dưỡng Tóc -->
        <li class="product-category-container">
            <div class="product-category-information">
                <hgroup>
                    <h2 class="product-category-title">
                        Dưỡng Tóc<sup class="products-count"></sup>
                    </h2>
                    <p class="product-category-description">Khám phá hành trình chăm sóc tóc với Perfect+. Tại đây, bạn
                        sẽ tìm thấy những sản phẩm dưỡng tóc từ chuyên gia.</p>
                </hgroup>
                <a href="./muc-san-pham/duong-toc" class="product-category-link">Xem tất cả →</a>
            </div>

            <div class="products-swiper-container">
                <div class="swiper products-swiper products-swiper-9">
                    <ul class="swiper-wrapper">

                    </ul>
                </div>

                <div class="products-swiper-prev products-swiper-prev-9">
                    <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 8L22 12L18 16" />
                        <path d="M2 12H22" />
                    </svg>
                </div>
                <div class="products-swiper-next products-swiper-next-9">
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
            selector: ".products-swiper-9",
            options: {
                slidesPerView: 2,
                spaceBetween: 12,
                loop: false,
                loopedSlides: 5,
                centeredSlides: false,
                watchOverflow: true,
                navigation: {
                    prevEl: ".products-swiper-prev-9",
                    nextEl: ".products-swiper-next-9",
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

        <!-- <li class="product-category-container">
                                <div class="product-category-information">
                                    <hgroup>
                                        <h2 class="product-category-title">
                                            Ampoule <sup class="products-count">(4)</sup>
                                        </h2>
                                        <p class="product-category-description">Khám phá hành trình chăm sóc da
                                            với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ
                                            chuyên gia,</p>
                                    </hgroup>
                                    <a href="ampoule/index.html" class="product-category-link">Xem tất cả →</a>
                                </div>

                                <div class="products-swiper-container">
                                    <div class="swiper products-swiper products-swiper-2">
                                        <ul class="swiper-wrapper">

                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../tinh-chat-ampoule-trang-sang-cao-cap-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/TBG-TRANG-SANG-1.webp"
                                                            alt="Tinh chất ampoule Trắng Sáng Cao Cấp Perfect (8ml)"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Tinh chất ampoule Trắng Sáng Cao Cấp Perfect (8ml) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        GV Whitening Ampoule TR Perfect </p>

                                                    <a href="../tinh-chat-ampoule-trang-sang-cao-cap-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../tinh-chat-ampoule-mun-cao-cap-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/TBG-MUN-1.webp"
                                                            alt="Tinh chất ampoule mụn cao cấp Perfect (8ml)"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Tinh chất ampoule mụn cao cấp Perfect (8ml) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Perfect Acne Care Ampoule TR </p>

                                                    <a href="../tinh-chat-ampoule-mun-cao-cap-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../tinh-chat-ampoule-chong-lao-hoa-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/TBG-SEO-1.webp"
                                                            alt="Tinh chất ampoule chống lão hóa Perfect (8ml)"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Tinh chất ampoule chống lão hóa Perfect (8ml) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        GA Anti Ageing Ampoule X Perfect </p>

                                                    <a href="../tinh-chat-ampoule-chong-lao-hoa-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../tinh-chat-ampoule-chong-lao-hoa-dr-leemee/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/TBG-DR-LEEMEE.webp"
                                                            alt="Tinh chất Ampoule chống lão hóa Dr. Leemee (10ml)"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Tinh chất Ampoule chống lão hóa Dr. Leemee (10ml)
                                                        </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Dr. Leemee Magic Care Ampoule </p>

                                                    <a href="../tinh-chat-ampoule-chong-lao-hoa-dr-leemee/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="products-swiper-prev products-swiper-prev-2">
                                        <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                    <div class="products-swiper-next products-swiper-next-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                </div>
                            </li> -->

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

        <!-- <li class="product-category-container">
                                <div class="product-category-information">
                                    <hgroup>
                                        <h2 class="product-category-title">
                                            Kem Dưỡng <sup class="products-count">(6)</sup>
                                        </h2>
                                        <p class="product-category-description">Khám phá hành trình chăm sóc da
                                            với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ
                                            chuyên gia,</p>
                                    </hgroup>
                                    <a href="kem-duong/index.html" class="product-category-link">Xem tất cả →</a>
                                </div>

                                <div class="products-swiper-container">
                                    <div class="swiper products-swiper products-swiper-3">
                                        <ul class="swiper-wrapper">

                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../kem-duong-sang-mela-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/KEM-MELA-1.webp"
                                                            alt="Kem dưỡng sáng Mela Perfect" class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Kem dưỡng sáng Mela Perfect </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Mela Bright Spot Corrector Perfect </p>

                                                    <a href="../kem-duong-sang-mela-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../kem-phuc-hoi-thai-doc-da-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/KEM-K-1.webp"
                                                            alt="Kem Phục Hồi Thải Độc Da Perfect"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Kem Phục Hồi Thải Độc Da Perfect </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Perfect Ultra Calming K Cream </p>

                                                    <a href="../kem-phuc-hoi-thai-doc-da-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../kem-uc-che-nam-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/KEM-NAM-ARBUTIN-1.webp"
                                                            alt="Kem Ức Chế Nám Perfect" class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Kem Ức Chế Nám Perfect </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Perfect Alpha Arbutin Ultra Cream </p>

                                                    <a href="../kem-uc-che-nam-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../kem-cham-mun-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/KEM-MUN.webp"
                                                            alt="Kem Chấm Mụn Perfect" class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Kem Chấm Mụn Perfect </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Perfect Acne Clear Cream </p>

                                                    <a href="../kem-cham-mun-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../kem-massage-da-tang-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/KEM-MASSAGE-MAT.webp"
                                                            alt="Kem Massage Đa Tầng Perfect (500ml)"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Kem Massage Đa Tầng Perfect (500ml) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Perfect Natural Reparing </p>

                                                    <a href="../kem-massage-da-tang-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../kem-mat-gsc/index.html" class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="{{ asset('wp-content/uploads/2025/07/GSC-Anti-Wrinkle-Eye-Cream-thumb.webp') }}"
                                                            alt="Kem Mắt Perfect" class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Kem Mắt Perfect </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Anti Wrinkle Eye Cream Perfect </p>

                                                    <a href="../kem-mat-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="products-swiper-prev products-swiper-prev-3">
                                        <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                    <div class="products-swiper-next products-swiper-next-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                </div>
                            </li> -->

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

        <!-- <li class="product-category-container">
                                <div class="product-category-information">
                                    <hgroup>
                                        <h2 class="product-category-title">
                                            Mặt Nạ <sup class="products-count">(4)</sup>
                                        </h2>
                                        <p class="product-category-description">Khám phá hành trình chăm sóc da
                                            với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ
                                            chuyên gia,</p>
                                    </hgroup>
                                    <a href="mat-na/index.html" class="product-category-link">Xem tất cả →</a>
                                </div>

                                <div class="products-swiper-container">
                                    <div class="swiper products-swiper products-swiper-4">
                                        <ul class="swiper-wrapper">

                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../mat-na-nang-co-cang-bong-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/MAT-NA-CANG-BONG-1.webp"
                                                            alt="Mặt nạ nâng cơ căng bóng Perfect (10pcs)"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Mặt nạ nâng cơ căng bóng Perfect (10pcs) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Perfect Repair Control Modeling Mask </p>

                                                    <a href="../mat-na-nang-co-cang-bong-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../mat-na-kiem-soat-ba-nhon-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/MAT-NA-KIEM-SOAT-BA-NHON-1.webp"
                                                            alt="Mặt nạ kiểm soát bã nhờn Perfect (10pcs)"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Mặt nạ kiểm soát bã nhờn Perfect (10pcs) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Perfect Sebum Control Modeling Mask </p>

                                                    <a href="../mat-na-kiem-soat-ba-nhon-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../mat-na-phuc-hoi-tai-tao-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/MAT-NA-REBIRTH-1.webp"
                                                            alt="Mặt Nạ Phục Hồi Tái Tạo Perfect (10pcs)"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Mặt Nạ Phục Hồi Tái Tạo Perfect (10pcs) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Rebirth &amp; Recovery Mask Perfect </p>

                                                    <a href="../mat-na-phuc-hoi-tai-tao-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../mat-na-bot-ca-tam-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/MAT-NA-BOT-1.webp"
                                                            alt="Mặt Nạ Bột Cá Tầm Perfect (1kg)"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Mặt Nạ Bột Cá Tầm Perfect (1kg) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Caviar Magic Modeling Pack Perfect </p>

                                                    <a href="../mat-na-bot-ca-tam-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="products-swiper-prev products-swiper-prev-4">
                                        <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                    <div class="products-swiper-next products-swiper-next-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                </div>
                            </li> -->

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

        <!-- <li class="product-category-container">
                                <div class="product-category-information">
                                    <hgroup>
                                        <h2 class="product-category-title">
                                            Kem Chống Nắng <sup class="products-count">(2)</sup>
                                        </h2>
                                        <p class="product-category-description">Khám phá hành trình chăm sóc da
                                            với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ
                                            chuyên gia,</p>
                                    </hgroup>
                                    <a href="kem-chong-nang/index.html" class="product-category-link">Xem tất cả
                                        →</a>
                                </div>

                                <div class="products-swiper-container">
                                    <div class="swiper products-swiper products-swiper-5">
                                        <ul class="swiper-wrapper">

                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../kem-chong-nang-pho-rong-mela-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/KCN-MELA-1.webp"
                                                            alt="Kem chống nắng phổ rộng Mela Perfect"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Kem chống nắng phổ rộng Mela Perfect </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Mela Bright UV Defense Perfect </p>

                                                    <a href="../kem-chong-nang-pho-rong-mela-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>
                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../kem-chong-nang-vat-ly-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/KCN-VAT-LY-1.webp"
                                                            alt="Kem Chống Nắng Vật Lý Perfect"
                                                            class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Kem Chống Nắng Vật Lý Perfect </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Triple Sun Block Perfect </p>

                                                    <a href="../kem-chong-nang-vat-ly-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="products-swiper-prev products-swiper-prev-5">
                                        <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                    <div class="products-swiper-next products-swiper-next-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                </div>
                            </li> -->

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

        <!-- <li class="product-category-container">
                                <div class="product-category-information">
                                    <hgroup>
                                        <h2 class="product-category-title">
                                            Tẩy Da Chết <sup class="products-count">(1)</sup>
                                        </h2>
                                        <p class="product-category-description">Khám phá hành trình chăm sóc da
                                            với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ
                                            chuyên gia,</p>
                                    </hgroup>
                                    <a href="tay-da-chet/index.html" class="product-category-link">Xem tất cả
                                        →</a>
                                </div>

                                <div class="products-swiper-container">
                                    <div class="swiper products-swiper products-swiper-6">
                                        <ul class="swiper-wrapper">

                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../kem-tay-da-chet-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/TAY-DA-CHET-1.webp"
                                                            alt="Kem Tẩy Da Chết Perfect (500ml)" class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Kem Tẩy Da Chết Perfect (500ml) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Natural Peeling Perfect </p>

                                                    <a href="../kem-tay-da-chet-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="products-swiper-prev products-swiper-prev-6">
                                        <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                    <div class="products-swiper-next products-swiper-next-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                </div>
                            </li> -->

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

        <!-- <li class="product-category-container">
                                <div class="product-category-information">
                                    <hgroup>
                                        <h2 class="product-category-title">
                                            Tẩy trang <sup class="products-count">(1)</sup>
                                        </h2>
                                        <p class="product-category-description">Khám phá hành trình chăm sóc da
                                            với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ
                                            chuyên gia,</p>
                                    </hgroup>
                                    <a href="tay-trang/index.html" class="product-category-link">Xem tất cả →</a>
                                </div>

                                <div class="products-swiper-container">
                                    <div class="swiper products-swiper products-swiper-7">
                                        <ul class="swiper-wrapper">

                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../dau-tay-trang-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/dau-tay-trang.webp"
                                                            alt="Dầu Tẩy Trang Perfect (250ml)" class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Chuyên Gia </p>
                                                                </li>
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Dầu Tẩy Trang Perfect (250ml) </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Natural Makeup Remove Perfect </p>

                                                    <a href="../dau-tay-trang-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="products-swiper-prev products-swiper-prev-7">
                                        <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                    <div class="products-swiper-next products-swiper-next-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                </div>
                            </li> -->

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

        <!-- <li class="product-category-container">
                                <div class="product-category-information">
                                    <hgroup>
                                        <h2 class="product-category-title">
                                            Xịt Khoáng <sup class="products-count">(1)</sup>
                                        </h2>
                                        <p class="product-category-description">Khám phá hành trình chăm sóc da
                                            với Perfect+. Tại đây, bạn sẽ tìm thấy những bài viết từ
                                            chuyên gia,</p>
                                    </hgroup>
                                    <a href="xit-khoang/index.html" class="product-category-link">Xem tất cả →</a>
                                </div>

                                <div class="products-swiper-container">
                                    <div class="swiper products-swiper products-swiper-8">
                                        <ul class="swiper-wrapper">

                                            <li class="swiper-slide">


                                                <div class="product-container">
                                                    <a href="../toner-can-bang-da-gsc/index.html"
                                                        class="product-image-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2026/02/XIT-KHOANG.webp"
                                                            alt="Toner Cân Bằng Da Perfect" class="product-image">


                                                        <div class="product-tags-container-wrapper">
                                                            <ul class="product-tag-container-wrapper">
                                                                <li class="product-tag-container">
                                                                    <p class="product-tag">
                                                                        Tại Nhà </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </a>

                                                    <hgroup>
                                                        <h3 class="product-title" style="margin-top: 10px;">
                                                            Toner Cân Bằng Da Perfect </h3>
                                                    </hgroup>

                                                    <p class="product-description">
                                                        Moist Smoothing Toner Perfect </p>

                                                    <a href="../toner-can-bang-da-gsc/index.html"
                                                        class="product-discover-now">Khám phá ngay</a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="products-swiper-prev products-swiper-prev-8">
                                        <svg style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                    <div class="products-swiper-next products-swiper-next-8">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </div>
                                </div>
                            </li> -->

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
<style>
.perfect-search-results-page {
    width: min(1720px, calc(100vw - 96px));
    margin: 0 auto;
    padding: 58px 0 96px;
    display: grid;
    grid-template-columns: 340px minmax(0, 1fr);
    gap: 46px;
}

.perfect-search-sidebar {
    position: sticky;
    top: 96px;
    align-self: start;
}

.perfect-search-input-row {
    display: flex;
    align-items: center;
    border-bottom: 1px solid rgba(37, 37, 37, 0.22);
}

.perfect-search-input {
    width: 100%;
    min-width: 0;
    border: 0;
    outline: 0;
    background: transparent;
    color: #252525;
    font-size: 34px;
    font-weight: 500;
    line-height: 1;
    padding: 8px 0 18px;
}

button.perfect-search-close {
    width: 36px;
    height: 36px;
    min-width: 36px;
    border: 0 !important;
    border-radius: 0 !important;
    background: transparent !important;
    background-color: transparent !important;
    color: #252525 !important;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    padding: 0 !important;
    box-shadow: none !important;
    appearance: none;
    -webkit-appearance: none;
}

button.perfect-search-close:hover,
button.perfect-search-close:focus {
    background: transparent !important;
    background-color: transparent !important;
    color: #3ea8e2 !important;
    box-shadow: none !important;
    transform: none !important;
}

button.perfect-search-close svg {
    width: 22px;
    height: 22px;
    display: block;
    flex: 0 0 auto;
}

button.perfect-search-close svg path {
    fill: currentColor !important;
}

.perfect-search-tabs {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 28px;
}

.perfect-search-tab {
    min-height: 30px;
    padding: 7px 13px;
    border-radius: 3px;
    background: rgba(62, 168, 226, 0.10);
    color: rgba(62, 168, 226, 0.64) !important;
    font-size: 12px;
    font-weight: 700;
    line-height: 16px;
    text-transform: uppercase;
    text-decoration: none !important;
}

.perfect-search-tab.is-active {
    background: #d6efe4;
    color: #3ea8e2 !important;
}

.perfect-search-count {
    margin: 28px 0 34px;
    color: #252525;
    font-size: 14px;
    font-weight: 700;
    line-height: 20px;
    text-transform: uppercase;
}

.perfect-search-count strong {
    color: #3ea8e2;
}

.perfect-search-filter-title {
    margin: 0 0 14px;
    padding-bottom: 12px;
    border-bottom: 1px solid rgba(37, 37, 37, 0.1);
    color: #252525;
    font-size: 14px;
    font-weight: 600;
    line-height: 20px;
}

.perfect-search-filter-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.perfect-search-filter-list label {
    display: flex;
    align-items: center;
    gap: 10px;
    color: rgba(37, 37, 37, 0.56);
    font-size: 14px;
    font-weight: 400;
    line-height: 20px;
}

.perfect-search-filter-list input {
    width: 16px;
    height: 16px;
    accent-color: #3ea8e2;
}

.perfect-search-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 58px 28px;
}

.perfect-search-card {
    min-width: 0;
}

.perfect-search-card-image {
    display: block;
    width: 100%;
    aspect-ratio: 4 / 5;
    overflow: hidden;
    border-radius: 8px;
    background: #f5f5f5;
}

.perfect-search-card-image img {
    width: 100%;
    height: 100% !important;
    display: block;
    object-fit: cover;
    transition: transform 0.28s ease;
}

.perfect-search-card:hover .perfect-search-card-image img {
    transform: scale(1.035);
}

.perfect-search-card-title {
    margin: 18px 0 0 !important;
    color: #252525 !important;
    font-size: 17px !important;
    font-weight: 600 !important;
    line-height: 24px !important;
    letter-spacing: 0 !important;
}

.perfect-search-card-desc {
    margin: 8px 0 0 !important;
    color: rgba(37, 37, 37, 0.55) !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    line-height: 20px !important;
}

.perfect-search-card-link {
    display: inline-block;
    margin-top: 14px;
    color: #3ea8e2 !important;
    border-bottom: 1px solid #3ea8e2;
    font-size: 15px;
    font-weight: 600;
    line-height: 20px;
    text-decoration: none !important;
}

.perfect-search-empty {
    grid-column: 1 / -1;
    margin: 80px 0;
    color: rgba(37, 37, 37, 0.68);
    font-size: 16px;
    line-height: 24px;
}

@media (max-width: 1200px) {
    .perfect-search-results-page {
        width: calc(100vw - 40px);
        grid-template-columns: 280px minmax(0, 1fr);
        gap: 32px;
    }

    .perfect-search-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 768px) {
    .perfect-search-results-page {
        width: calc(100vw - 32px);
        padding: 36px 0 64px;
        display: block;
    }

    .perfect-search-sidebar {
        position: static;
        margin-bottom: 34px;
    }

    .perfect-search-input {
        font-size: 30px;
    }

    .perfect-search-grid {
        grid-template-columns: 1fr;
        gap: 38px;
    }
}
</style>
<script>
(function() {
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
        return (value || '').toString().replace(/[&<>"']/g, function(char) {
            return {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            } [char];
        });
    }

    function resolveUrl(url) {
        if (!url || url.startsWith('data:')) {
            return url || '';
        }

        try {
            return new URL(url, window.location.origin).href;
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
            ['perfect lady', 'perfect-lady'],
            ['perfect beauty white', 'perfect-beauty-white'],
            ['nattokinase', 'nattokinase'],
            ['spualene', 'spualene'],
            ['nmn', 'nmn'],
            ['tinh chat nghe', 'vien_nghe'],
            ['p9', 'p9'],
            ['p6', 'p6'],
            ['p5', 'p5'],
            ['p7', 'p7'],
            ['vc30', 'vc30-serum-vitamin-c'],
        ];
        const match = products.find(function(product) {
            return normalizedTitle.includes(product[0]);
        });

        return match ? match[1] : '';
    }

    function productHref(title, href) {
        const knownSlug = knownProductSlug(title);

        if (knownSlug) {
            return '/chi-tiet-san-pham/' + knownSlug;
        }

        try {
            const url = new URL(href || '', window.location.origin);
            const parts = url.pathname.split('/').filter(Boolean);
            const slug = parts.filter(function(part) {
                return part !== 'index.html';
            }).pop();

            return '/chi-tiet-san-pham/' + (slug || slugify(title));
        } catch (error) {
            return '/chi-tiet-san-pham/' + slugify(title);
        }
    }

    function collectProducts() {
        const products = new Map();

        document.querySelectorAll('.product-container').forEach(function(card) {
            const title = (card.querySelector('.product-title')?.textContent || '').trim();
            const description = (card.querySelector('.product-description')?.textContent || '').trim();
            const image = card.querySelector('.product-image');
            const imageSrc = image?.getAttribute('data-src') || image?.getAttribute('src') || '';
            const imageAlt = image?.getAttribute('alt') || title;
            const rawHref = card.querySelector('.product-discover-now')?.getAttribute('href') ||
                card.querySelector('.product-image-container')?.getAttribute('href') ||
                '';
            const href = productHref(title, rawHref);
            const tags = Array.from(card.querySelectorAll('.product-tag')).map(function(tag) {
                return tag.textContent.trim();
            }).join(' ');
            const key = normalizeText(title) + '|' + href;

            if (!title || products.has(key)) {
                return;
            }

            products.set(key, {
                title,
                description,
                href,
                imageSrc: resolveUrl(imageSrc),
                imageAlt,
                searchText: normalizeText(title + ' ' + description + ' ' + imageAlt + ' ' + tags)
            });
        });

        return Array.from(products.values());
    }

    function renderCard(product) {
        return [
            '<article class="perfect-search-card">',
            '<a class="perfect-search-card-image" href="' + escapeHtml(product.href) + '">',
            product.imageSrc ? '<img src="' + escapeHtml(product.imageSrc) + '" alt="' + escapeHtml(product
                .imageAlt) + '" loading="lazy">' : '',
            '</a>',
            '<h3 class="perfect-search-card-title">' + escapeHtml(product.title) + '</h3>',
            product.description ? '<p class="perfect-search-card-desc">' + escapeHtml(product.description) +
            '</p>' : '',
            '<a class="perfect-search-card-link" href="' + escapeHtml(product.href) +
            '">Kh\u00e1m ph\u00e1 ngay</a>',
            '</article>'
        ].join('');
    }

    function renderSearchPage(keyword, products) {
        const normalizedKeyword = normalizeText(keyword);
        const matches = products.filter(function(product) {
            return product.searchText.includes(normalizedKeyword);
        });
        const section = document.createElement('section');
        const safeKeyword = escapeHtml(keyword);
        const searchUrl = '/san-pham?s=' + encodeURIComponent(keyword) + '&type=product';
        const newsUrl = '/tin-tuc?s=' + encodeURIComponent(keyword);
        const protocolUrl = '/lieu-phap?s=' + encodeURIComponent(keyword);

        section.className = 'perfect-search-results-page';
        section.innerHTML = [
            '<aside class="perfect-search-sidebar">',
            '<form class="perfect-search-input-row" action="/san-pham" method="get">',
            '<input class="perfect-search-input" name="s" value="' + safeKeyword + '" autocomplete="off">',
            '<input type="hidden" name="type" value="product">',
            '<button class="perfect-search-close" type="button" aria-label="Clear search">',
            '<svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M6.64 5.36a.9.9 0 0 0-1.28 1.28L10.72 12l-5.36 5.36a.9.9 0 1 0 1.28 1.28L12 13.28l5.36 5.36a.9.9 0 1 0 1.28-1.28L13.28 12l5.36-5.36a.9.9 0 1 0-1.28-1.28L12 10.72 6.64 5.36Z"/></svg>',
            '</button>',
            '</form>',
            '<nav class="perfect-search-tabs" aria-label="Search types">',
            '<a class="perfect-search-tab" href="' + newsUrl + '">Tin t\u1ee9c</a>',
            '<a class="perfect-search-tab is-active" href="' + searchUrl + '">S\u1ea3n ph\u1ea9m</a>',
            '<a class="perfect-search-tab" href="' + protocolUrl + '">Ph\u00e1c \u0111\u1ed3</a>',
            '</nav>',
            '<p class="perfect-search-count"><strong>' + matches.length +
            '</strong> k\u1ebft qu\u1ea3 hi\u1ec3n th\u1ecb</p>',
            '<div class="perfect-search-filter">',
            '<p class="perfect-search-filter-title">Danh m\u1ee5c</p>',
            '<div class="perfect-search-filter-list">',
            '<label><input type="checkbox"> Th\u00f4ng tin ng\u00e0nh</label>',
            '<label><input type="checkbox"> S\u1ef1 ki\u1ec7n</label>',
            '<label><input type="checkbox"> Xu h\u01b0\u1edbng</label>',
            '</div>',
            '</div>',
            '</aside>',
            '<div class="perfect-search-grid">',
            matches.length ? matches.map(renderCard).join('') :
            '<p class="perfect-search-empty">Kh\u00f4ng t\u00ecm th\u1ea5y k\u1ebft qu\u1ea3 ph\u00f9 h\u1ee3p.</p>',
            '</div>'
        ].join('');

        section.querySelector('.perfect-search-close')?.addEventListener('click', function() {
            window.location.href = '/san-pham';
        });

        return section;
    }

    document.addEventListener('DOMContentLoaded', function() {
        const params = new URLSearchParams(window.location.search);
        const keyword = (params.get('s') || '').trim();
        const archive = document.querySelector('.elementor-6949');

        if (!keyword || !archive) {
            return;
        }

        const products = collectProducts();
        const searchPage = renderSearchPage(keyword, products);

        archive.parentNode.insertBefore(searchPage, archive);
        archive.style.display = 'none';
    });
})();
</script>
@endsection
