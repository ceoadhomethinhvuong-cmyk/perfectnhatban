@extends('client.layouts.app')

@section('seo_title', 'Dưỡng tóc PERFECT Nhật Bản chính hãng')
@section('meta_description', 'Danh mục dưỡng tóc PERFECT Nhật Bản hỗ trợ chăm sóc, nuôi dưỡng và phục hồi tóc với các sản phẩm chính hãng, dễ tra cứu thông tin.')

@section('title', 'Dưỡng Tóc')

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
                                class="last"><a href="{{ route('duong-toc') }}">Dưỡng tóc</a></span></p>
                    </nav>
                </div>
            </div>
            <div class="elementor-element elementor-element-9cd445c e-con-full e-flex e-con e-child" data-id="9cd445c"
                data-element_type="container">
                <div class="elementor-element elementor-element-f6f1f34 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="f6f1f34" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">Dưỡng tóc</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-82a2dac elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="82a2dac" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-heading-title elementor-size-default">
                            <p>Các sản phẩm dưỡng tóc Perfect hỗ trợ chăm sóc và phục hồi tóc từ chuyên gia.</p>
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
                        </style>

                        <ul class="product-category-container-wrapper">
                            <li class="product-category-container">
                                <div class="product-category-information">
                                    <hgroup>
                                        <h2 class="product-category-title" style="font-size:24px;font-weight:600;color:#252525;">
                                            Dưỡng Tóc<sup style="font-size:14px;color:rgba(37,37,37,.4);">(0)</sup>
                                        </h2>
                                        <p style="margin-top:16px;font-weight:300;font-size:16px;color:rgba(37,37,37,.7);">Các sản phẩm dưỡng tóc Perfect hỗ trợ chăm sóc và phục hồi tóc từ chuyên gia.</p>
                                    </hgroup>
                                </div>

                                <div class="products-grid-container">
                                    <ul class="products-grid">

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
