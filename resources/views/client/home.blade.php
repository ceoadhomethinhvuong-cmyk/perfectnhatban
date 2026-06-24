@extends('client.layouts.app')

@section('seo_title', 'PERFECT Nhật Bản Chính Hãng')
@section('meta_description', 'PERFECT Nhật Bản cung cấp viên uống, serum và giải pháp chăm sóc sắc đẹp chính hãng, hỗ
trợ chăm sóc da và sức khỏe từ bên trong.')

@section('content')
<style>
.elementor-93 .accompanying {
    background-color: #f6fbfe !important;
    background-image: none !important;
}

.elementor-93 .accompanying,
.elementor-93 .accompanying .elementor-heading-title,
.elementor-93 .accompanying .elementor-widget-container,
.elementor-93 .accompanying p,
.elementor-93 .accompanying span {
    color: #111827 !important;
}

.elementor-93 .accompanying #scrollAnimate1,
.elementor-93 .accompanying #scrollAnimate2,
.elementor-93 .accompanying #scrollAnimate3,
.elementor-93 .accompanying #scrollAnimate1 .elementor-heading-title,
.elementor-93 .accompanying #scrollAnimate2 .elementor-heading-title,
.elementor-93 .accompanying #scrollAnimate3 .elementor-heading-title,
.elementor-93 .accompanying #scrollAnimate1 .elementor-widget-container,
.elementor-93 .accompanying #scrollAnimate2 .elementor-widget-container,
.elementor-93 .accompanying #scrollAnimate3 .elementor-widget-container,
.elementor-93 .accompanying #scrollAnimate1 p,
.elementor-93 .accompanying #scrollAnimate2 p,
.elementor-93 .accompanying #scrollAnimate3 p,
.elementor-93 .accompanying #scrollAnimate1 span,
.elementor-93 .accompanying #scrollAnimate2 span,
.elementor-93 .accompanying #scrollAnimate3 span {
    color: #000 !important;
}

.elementor-93 .accompanying #scrollAnimate1,
.elementor-93 .accompanying #scrollAnimate2,
.elementor-93 .accompanying #scrollAnimate3 {
    overflow: hidden !important;
    border-radius: 16px !important;
}

.elementor-93 .accompanying #scrollAnimate1>.elementor-element-509863c,
.elementor-93 .accompanying #scrollAnimate2>.elementor-element-69fd96f,
.elementor-93 .accompanying #scrollAnimate3>.elementor-element-c36f5f5 {
    position: relative !important;
    z-index: 3 !important;
    align-self: center !important;
    margin: clamp(18px, 2vw, 34px) !important;
    padding: clamp(20px, 3vw, 36px) !important;
    border: 1px solid rgba(62, 168, 226, 0.18) !important;
    border-radius: 14px !important;
    background: rgba(255, 255, 255, 0.94) !important;
    box-shadow: 0 18px 44px rgba(15, 23, 42, 0.12) !important;
    backdrop-filter: blur(8px);
}

.elementor-93 .accompanying #scrollAnimate1 img,
.elementor-93 .accompanying #scrollAnimate2 img,
.elementor-93 .accompanying #scrollAnimate3 img {
    border-radius: 14px !important;
}

.elementor-93 .accompanying #scrollAnimate1 .elementor-heading-title,
.elementor-93 .accompanying #scrollAnimate2 .elementor-heading-title,
.elementor-93 .accompanying #scrollAnimate3 .elementor-heading-title {
    margin: 0 0 14px !important;
    color: #07111f !important;
    font-size: clamp(26px, 2.35vw, 38px) !important;
    line-height: 1.18 !important;
    font-weight: 800 !important;
    text-shadow: none !important;
}

.elementor-93 .accompanying #scrollAnimate1 p,
.elementor-93 .accompanying #scrollAnimate2 p,
.elementor-93 .accompanying #scrollAnimate3 p {
    margin: 0 !important;
    color: #1f2937 !important;
    font-size: clamp(16px, 1.15vw, 19px) !important;
    line-height: 1.65 !important;
    font-weight: 500 !important;
    text-shadow: none !important;
}

@media (max-width: 767px) {

    .elementor-93 .accompanying #scrollAnimate1>.elementor-element-509863c,
    .elementor-93 .accompanying #scrollAnimate2>.elementor-element-69fd96f,
    .elementor-93 .accompanying #scrollAnimate3>.elementor-element-c36f5f5 {
        margin: 14px !important;
        padding: 18px !important;
    }
}
</style>
<div data-elementor-type="wp-page" data-elementor-id="93" class="elementor elementor-93"
    data-elementor-post-type="page">
    <div class="elementor-element elementor-element-2d73e025 e-con-full e-flex e-con e-parent" data-id="2d73e025"
        data-element_type="container">
        <div class="elementor-element elementor-element-55402d8e elementor-pagination-position-inside elementor-pagination-type-bullets elementor-arrows-position-inside elementor-widget elementor-widget-n-carousel"
            data-id="55402d8e" data-element_type="widget" id="homeSlider"
            data-settings="{&quot;carousel_items&quot;:[{&quot;slide_title&quot;:&quot;Slide #2&quot;,&quot;_id&quot;:&quot;e945d2f&quot;},{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;6a5d523&quot;}],&quot;slides_to_show&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;1&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;offset_sides&quot;:&quot;none&quot;,&quot;arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;image_spacing_custom_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
            data-widget_type="nested-carousel.default">
            <div class="elementor-widget-container">
                <div class="e-n-carousel swiper" role="region" aria-roledescription="carousel" aria-label="Home slide"
                    dir="ltr">
                    <div class="swiper-wrapper" aria-live="off">
                        <div class="swiper-slide" data-slide="1" role="group" aria-roledescription="slide"
                            aria-label="1 of 2">
                            <div class="elementor-element elementor-element-191883d e-flex e-con-boxed e-con e-child"
                                data-id="191883d" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-a7ca8a1 elementor-absolute cs-home-banner-image elementor-widget elementor-widget-tda_responsive_image"
                                        data-id="a7ca8a1" data-element_type="widget"
                                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="tda_responsive_image.default">
                                        <div class="elementor-widget-container">
                                            <picture class="tda-responsive-picture">
                                                <source media="(min-width: 1025px)"
                                                    srcset="{{ asset('images/banner/bannerweb1.jpg') }}"><img
                                                    data-lazyloaded="1"
                                                    src="{{ asset('images/banner/bannerweb1.jpg') }}" decoding="async"
                                                    data-src="{{ asset('images/banner/bannerweb1.jpg') }}"
                                                    alt="Chăm sóc từ góc 2025_D" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-782e888 e-con-full e-flex e-con e-child"
                                        data-id="782e888" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-element elementor-element-d7f9b34 e-con-full e-flex e-con e-child"
                                            data-id="d7f9b34" data-element_type="container">
                                            <div class="elementor-element elementor-element-a0f528c elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-widget elementor-widget-heading"
                                                data-id="a0f528c" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">Khởi đầu
                                                        cho làn da khoẻ</h1>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-68fc68d elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-widget elementor-widget-text-editor"
                                                data-id="68fc68d" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Chứa đựng tinh túy từ thiên nhiên, Perfect là dòng dược mỹ phẩm
                                                        cao
                                                        cấp được chiết xuất từ các thành phần thực vật quý giá. Chăm từ
                                                        &#8220;Gốc&#8221;, mang lại vẻ đẹp bền vững, rạng rỡ.</p>
                                                </div>
                                            </div>
                                            <!-- <div class="elementor-element elementor-element-34f8c43 e-con-full elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile_extra e-flex e-con e-child"
                                                data-id="34f8c43" data-element_type="container">
                                                <div class="elementor-element elementor-element-b713be8 elementor-widget elementor-widget-button"
                                                    data-id="b713be8" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                href="#gioithieudn">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Về Perfect</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a4a247b elementor-widget elementor-widget-button"
                                                    data-id="a4a247b" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6Ijg5MzIiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">HỢP TÁC CÙNG
                                                                        Perfect</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="elementor-element elementor-element-ad494fb e-con-full e-flex e-con e-child"
                                            data-id="ad494fb" data-element_type="container">
                                            <div class="elementor-element elementor-element-2b24062 elementor-widget elementor-widget-spacer"
                                                data-id="2b24062" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide="2" role="group" aria-roledescription="slide"
                            aria-label="2 of 2">
                            <div class="elementor-element elementor-element-121be043 e-flex e-con-boxed e-con e-child"
                                data-id="121be043" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-7f24004 elementor-absolute cs-home-banner-image elementor-widget elementor-widget-tda_responsive_image"
                                        data-id="7f24004" data-element_type="widget"
                                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="tda_responsive_image.default">
                                        <div class="elementor-widget-container">
                                            <picture class="tda-responsive-picture">
                                                <source media="(min-width: 1025px)"
                                                    srcset="{{ asset('images/banner/bannerweb2.jpg') }}">
                                                <img data-lazyloaded="1"
                                                    src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                    decoding="async"
                                                    data-src="{{ asset('images/banner/mobileweb2.jpg') }}"
                                                    alt="Bộ chăm sóc da cơ bản dược mỹ phẩm PERFECT" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0"
                    aria-label="Previous">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" fill="none">
                        <path
                            d="M7.77259 0.169769C8.06495 0.404398 8.07583 0.796878 7.80096 1.04451L1.72938 6.50032L7.80093 11.9555C8.07655 12.2031 8.06492 12.595 7.77256 12.8302C7.48095 13.0655 7.02062 13.055 6.74428 12.8067L0.199267 6.9256C0.0668992 6.80675 -7.36762e-07 6.65322 -7.30079e-07 6.50032C-7.23395e-07 6.34742 0.0668992 6.19327 0.199267 6.0744L6.74428 0.193306C7.02065 -0.0549581 7.48095 -0.0654697 7.77259 0.169769Z"
                            fill="#3ea8e2"></path>
                    </svg>
                </div>
                <div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0"
                    aria-label="Next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" fill="none">
                        <path
                            d="M0.199043 11.9555C-0.0758341 12.2031 -0.0649475 12.5956 0.227408 12.8302C0.519047 13.0655 0.979353 13.055 1.25572 12.8067L7.80073 6.9256C7.9331 6.80672 8 6.65258 8 6.49968C8 6.34678 7.9331 6.19325 7.80073 6.0744L1.25572 0.193306C0.979384 -0.0549573 0.519048 -0.0654688 0.227438 0.16977C-0.0649174 0.405008 -0.0765492 0.796878 0.199074 1.04451L6.27062 6.49968L0.199043 11.9555Z"
                            fill="#3ea8e2"></path>
                    </svg>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-0a92f45 e-flex e-con-boxed e-con e-parent" data-id="0a92f45"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-88850ed cs-about-image elementor-widget elementor-widget-tda_responsive_image"
                data-id="88850ed" data-element_type="widget" data-widget_type="tda_responsive_image.default">
                <div class="elementor-widget-container">
                    <picture class="tda-responsive-picture">
                        <source media="(min-width: 1025px)" srcset="{{asset('images/banner/banner3.webp')}}"><img
                            data-lazyloaded="1"
                            src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                            decoding="async" data-src="{{asset('images/banner/banner3.webp')}}"
                            alt="Kết Hợp Sản Phẩm Cho Phác Đồ &amp; Chăm Sóc Tại Nhà_D" loading="lazy">
                    </picture>
                </div>
            </div>
            <div class="elementor-element elementor-element-460ed96 cs-home-about-slider elementor-pagination-type-progressbar elementor-widget elementor-widget-n-carousel"
                data-id="460ed96" data-element_type="widget"
                data-settings="{&quot;carousel_items&quot;:[{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;9bc3587&quot;},{&quot;slide_title&quot;:&quot;Slide #2&quot;,&quot;_id&quot;:&quot;2f7cf55&quot;},{&quot;slide_title&quot;:&quot;Slide #3&quot;,&quot;_id&quot;:&quot;d29454c&quot;},{&quot;slide_title&quot;:&quot;Slide #3&quot;,&quot;_id&quot;:&quot;2770dae&quot;},{&quot;slide_title&quot;:&quot;Slide #3&quot;,&quot;_id&quot;:&quot;4d54678&quot;}],&quot;slides_to_show&quot;:&quot;5&quot;,&quot;slides_to_show_laptop&quot;:&quot;4&quot;,&quot;slides_to_show_tablet&quot;:&quot;3&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;56&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;32&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;24&quot;,&quot;sizes&quot;:[]},&quot;slides_to_scroll_laptop&quot;:&quot;1&quot;,&quot;slides_to_scroll_tablet&quot;:&quot;1&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;1&quot;,&quot;pagination&quot;:&quot;progressbar&quot;,&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;48&quot;,&quot;sizes&quot;:[]},&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;image_spacing_custom_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                data-widget_type="nested-carousel.default">
                <div class="elementor-widget-container">
                    <div class="e-n-carousel swiper" role="region" aria-roledescription="carousel" aria-label="Carousel"
                        dir="ltr">
                        <div class="swiper-wrapper" aria-live="off">
                            <div class="swiper-slide" data-slide="1" role="group" aria-roledescription="slide"
                                aria-label="1 of 5">
                                <div class="elementor-element elementor-element-607a8b5 e-flex e-con-boxed e-con e-child"
                                    data-id="607a8b5" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-3c6c7ae e-transform elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
                                            data-id="3c6c7ae" data-element_type="widget"
                                            data-settings="{&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;-2&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48"
                                                                height="48" viewBox="0 0 48 48" fill="none">
                                                                <g clip-path="url(#clip0_9_3677)">
                                                                    <path
                                                                        d="M44.7533 25.7468C44.4375 25.4309 44.0625 25.1803 43.6498 25.0093C43.2371 24.8384 42.7948 24.7504 42.3481 24.7504C41.9014 24.7504 41.459 24.8384 41.0463 25.0093C40.6337 25.1803 40.2587 25.4309 39.9428 25.7468L34.1206 31.569C33.8651 31.0961 33.4869 30.7008 33.0258 30.4247C32.5646 30.1486 32.0376 30.0019 31.5001 30H22.9831C22.2498 29.1125 21.3393 28.3881 20.3097 27.873C19.2801 27.358 18.1543 27.0637 17.0044 27.0091C15.8545 26.9546 14.7059 27.1408 13.6322 27.5561C12.5585 27.9713 11.5833 28.6062 10.7693 29.4203L7.50008 32.6895L6.53033 31.7198C6.38969 31.5792 6.19896 31.5002 6.00008 31.5002C5.80121 31.5002 5.61048 31.5792 5.46983 31.7198L2.46983 34.7198C2.32923 34.8604 2.25024 35.0511 2.25024 35.25C2.25024 35.4489 2.32923 35.6396 2.46983 35.7803L14.4698 47.7803C14.6105 47.9209 14.8012 47.9999 15.0001 47.9999C15.199 47.9999 15.3897 47.9209 15.5303 47.7803L18.5303 44.7803C18.6709 44.6396 18.7499 44.4489 18.7499 44.25C18.7499 44.0511 18.6709 43.8604 18.5303 43.7198L17.5606 42.75L18.4021 41.9085C18.8249 41.4885 19.3961 41.2519 19.9921 41.25H30.9541C31.9395 41.2527 32.9156 41.0598 33.8259 40.6826C34.7362 40.3054 35.5626 39.7513 36.2573 39.0525L44.7533 30.5573C45.0692 30.2414 45.3198 29.8665 45.4908 29.4538C45.6617 29.0411 45.7497 28.5987 45.7497 28.152C45.7497 27.7053 45.6617 27.263 45.4908 26.8503C45.3198 26.4376 45.0692 26.0626 44.7533 25.7468ZM15.0001 46.1895L4.06058 35.25L6.00008 33.3105L16.9396 44.25L15.0001 46.1895ZM43.6928 29.4968L35.1976 37.9928C34.6416 38.5517 33.9803 38.9949 33.2519 39.2965C32.5235 39.5981 31.7425 39.7523 30.9541 39.75H19.9928C19.5003 39.7487 19.0123 39.845 18.5572 40.0335C18.1022 40.222 17.689 40.4988 17.3416 40.848L16.5001 41.6895L8.56058 33.75L11.8298 30.4808C12.5048 29.806 13.3149 29.2816 14.2069 28.9423C15.0989 28.6029 16.0527 28.4561 17.0055 28.5117C17.9583 28.5672 18.8885 28.8238 19.7351 29.2645C20.5817 29.7052 21.3254 30.3201 21.9173 31.0688L22.0328 31.215C22.1031 31.3039 22.1925 31.3757 22.2945 31.4251C22.3965 31.4744 22.5083 31.5001 22.6216 31.5H31.5001C31.8979 31.5 32.2794 31.6581 32.5607 31.9394C32.8421 32.2207 33.0001 32.6022 33.0001 33C33.0001 33.3978 32.8421 33.7794 32.5607 34.0607C32.2794 34.342 31.8979 34.5 31.5001 34.5H21.0001C20.8012 34.5 20.6104 34.579 20.4698 34.7197C20.3291 34.8603 20.2501 35.0511 20.2501 35.25C20.2501 35.4489 20.3291 35.6397 20.4698 35.7804C20.6104 35.921 20.8012 36 21.0001 36H31.5001C32.2337 35.9976 32.9409 35.7258 33.4874 35.2364C34.034 34.747 34.3818 34.0739 34.4648 33.345L41.0033 26.8073C41.3656 26.4613 41.8472 26.2683 42.3481 26.2683C42.849 26.2683 43.3306 26.4613 43.6928 26.8073C44.0494 27.164 44.2497 27.6477 44.2497 28.152C44.2497 28.6564 44.0494 29.1401 43.6928 29.4968Z"
                                                                        fill="#3ea8e2" stroke="#3ea8e2"
                                                                        stroke-width="1.05"></path>
                                                                    <path
                                                                        d="M14.808 15.2835C14.7975 15.2985 14.7818 15.306 14.772 15.3218C14.7698 15.3263 14.7698 15.3308 14.7675 15.3345C12.4864 18.2317 11.2473 21.8126 11.25 25.5C11.25 25.623 11.2508 25.7445 11.259 25.8675C11.2723 26.0568 11.3568 26.234 11.4956 26.3635C11.6343 26.4929 11.817 26.5649 12.0068 26.565C12.024 26.565 12.042 26.5643 12.0593 26.5628C12.2575 26.5489 12.4422 26.4569 12.5727 26.307C12.7032 26.1571 12.7689 25.9616 12.7553 25.7633C12.75 25.6748 12.75 25.5878 12.75 25.5C12.7507 22.3476 13.7511 19.2766 15.6075 16.7288C17.7285 18.114 18.9698 19.4513 19.0208 20.4488C18.9423 21.3968 18.6428 22.3133 18.1463 23.1248C17.9104 23.6016 17.6883 24.085 17.4803 24.5745C17.4395 24.6659 17.4175 24.7645 17.4155 24.8646C17.4135 24.9646 17.4315 25.064 17.4685 25.157C17.5055 25.25 17.5607 25.3346 17.6309 25.4059C17.7011 25.4772 17.7849 25.5337 17.8773 25.5722C17.9697 25.6106 18.0688 25.6301 18.1688 25.6297C18.2689 25.6292 18.3679 25.6087 18.4599 25.5694C18.5519 25.5302 18.6351 25.4729 18.7047 25.4009C18.7742 25.329 18.8286 25.2438 18.8648 25.1505C19.0673 24.6645 19.2878 24.21 19.497 23.778C20.1194 22.746 20.4708 21.5735 20.5185 20.3693C20.4413 18.8565 19.098 17.2388 16.551 15.5558C17.6994 14.2557 19.0634 13.1634 20.583 12.327C22.0433 15.174 23.8013 16.6763 25.7205 16.6763C25.8601 16.6763 25.9995 16.6686 26.1383 16.653C27.4681 16.5684 28.7374 16.0663 29.7653 15.2183C30.4253 14.7083 30.699 14.4968 32.2125 15.0255C33.627 15.5183 35.1173 14.901 36.4673 13.299C37.6363 14.1364 38.6789 15.1374 39.5633 16.2713C38.6604 17.2354 37.9499 18.3631 37.47 19.5938C36.8303 20.9903 36.3975 21.8513 35.6025 21.9255C35.0857 21.9576 34.5673 21.9554 34.0508 21.9188C32.0723 21.8213 29.6108 21.7058 27.8528 25.1625C27.4541 25.9412 27.1863 26.7802 27.06 27.6458C27.0462 27.7433 27.0518 27.8426 27.0765 27.938C27.1011 28.0334 27.1443 28.1231 27.2035 28.2018C27.2628 28.2805 27.337 28.3467 27.4219 28.3967C27.5068 28.4468 27.6007 28.4796 27.6983 28.4933C27.733 28.4981 27.7681 28.5003 27.8033 28.5C27.9841 28.5 28.1588 28.4346 28.2952 28.3159C28.4316 28.1973 28.5206 28.0333 28.5458 27.8543C28.6476 27.1519 28.8655 26.4713 29.1908 25.8405C30.5078 23.2508 32.0408 23.3273 33.9795 23.4173C34.5658 23.4583 35.1541 23.4591 35.7405 23.4195C37.4415 23.259 38.1495 21.7133 38.8335 20.2185C39.2211 19.2376 39.7641 18.3254 40.4415 17.517C41.4447 19.1044 42.1382 20.8675 42.4853 22.713C42.5028 22.8103 42.5394 22.9032 42.593 22.9863C42.6466 23.0695 42.716 23.1411 42.7974 23.1973C42.8788 23.2535 42.9705 23.293 43.0672 23.3136C43.164 23.3341 43.2638 23.3354 43.361 23.3172C43.4582 23.2991 43.5509 23.2619 43.6336 23.2078C43.7164 23.1537 43.7877 23.0838 43.8433 23.0021C43.899 22.9203 43.9379 22.8284 43.9579 22.7315C43.9779 22.6347 43.9785 22.5349 43.9598 22.4378C43.2696 18.7885 41.3674 15.4793 38.5614 13.0462C35.7555 10.6131 32.2102 9.19871 28.5 9.03227V8.20502C28.5001 7.78499 28.6183 7.37346 28.8411 7.01739C29.0639 6.66132 29.3823 6.37506 29.76 6.19127C30.1773 6.67752 30.6947 7.06786 31.2768 7.33556C31.8589 7.60326 32.492 7.742 33.1328 7.74227C33.7403 7.73701 34.3426 7.62872 34.914 7.42202C35.8705 7.08713 36.7776 6.62525 37.611 6.04877C37.9719 5.72491 38.4159 5.50797 38.8932 5.42226C39.3705 5.33655 39.8622 5.38547 40.3133 5.56352C40.4653 5.60282 40.6258 5.5934 40.7722 5.5366C40.9186 5.4798 41.0435 5.37847 41.1293 5.24691C41.215 5.11535 41.2573 4.96019 41.2502 4.80331C41.243 4.64644 41.1868 4.49576 41.0895 4.37252C40.9275 4.16777 37.1093 -0.614979 33.4335 0.0682713C29.8853 0.729771 29.4698 2.88152 29.2965 4.74827C28.6813 5.00888 28.1472 5.42976 27.75 5.96702C27.3529 5.42948 26.8188 5.00834 26.2035 4.74752C26.0303 2.88152 25.6148 0.729771 22.0665 0.0675213C18.39 -0.620229 14.5718 4.16777 14.4105 4.37252C14.3135 4.49578 14.2575 4.64636 14.2505 4.80308C14.2436 4.95979 14.2859 5.11475 14.3716 5.24615C14.4573 5.37754 14.582 5.47876 14.7283 5.53556C14.8745 5.59236 15.0348 5.60187 15.1868 5.56277C15.6378 5.38463 16.1295 5.33567 16.6068 5.42138C17.0841 5.50709 17.5281 5.72408 17.889 6.04802C18.7224 6.6245 19.6296 7.08638 20.586 7.42127C21.1573 7.62817 21.7596 7.73646 22.3673 7.74152C23.008 7.7412 23.6411 7.60244 24.2232 7.33474C24.8053 7.06705 25.3227 6.67674 25.74 6.19052C26.1178 6.37436 26.4363 6.66075 26.6591 7.01696C26.8819 7.37318 27 7.78487 27 8.20502V9.01952C24.6368 9.12557 22.3243 9.74013 20.2203 10.8213C18.1162 11.9024 16.2702 13.424 14.808 15.2835ZM33.708 1.54277C35.3513 1.23377 37.3155 2.66027 38.6535 3.93827C37.9755 4.07912 37.3381 4.37141 36.789 4.79327C36.0569 5.30257 35.2591 5.71029 34.4175 6.00527C33.8984 6.23186 33.3266 6.31004 32.7658 6.23113C32.2049 6.15222 31.6769 5.9193 31.2405 5.55827L33.2228 4.72577C33.3167 4.68989 33.4024 4.63548 33.4749 4.56579C33.5474 4.49609 33.6051 4.41253 33.6447 4.32008C33.6842 4.22762 33.7048 4.12816 33.7051 4.02761C33.7054 3.92705 33.6855 3.82746 33.6466 3.73475C33.6077 3.64204 33.5505 3.5581 33.4785 3.48793C33.4064 3.41777 33.321 3.3628 33.2273 3.3263C33.1336 3.2898 33.0336 3.27252 32.933 3.27548C32.8325 3.27844 32.7336 3.30158 32.6423 3.34352L30.8858 4.08077C31.0943 2.79827 31.6208 1.93202 33.708 1.54277ZM21.0825 6.00527C20.2409 5.71052 19.4431 5.30306 18.711 4.79402C18.1617 4.37119 17.5237 4.07836 16.845 3.93752C18.18 2.65952 20.139 1.23452 21.7928 1.54202C23.88 1.93127 24.4065 2.79752 24.615 4.08002L22.8585 3.34277C22.7675 3.30325 22.6695 3.28219 22.5702 3.28082C22.471 3.27945 22.3724 3.2978 22.2803 3.33479C22.1882 3.37179 22.1044 3.42669 22.0337 3.49633C21.9629 3.56597 21.9067 3.64896 21.8683 3.74048C21.8299 3.832 21.81 3.93024 21.8099 4.02949C21.8097 4.12875 21.8292 4.22705 21.8673 4.3187C21.9055 4.41035 21.9614 4.49353 22.0319 4.5634C22.1024 4.63328 22.186 4.68847 22.278 4.72577L24.2603 5.55827C23.8236 5.91887 23.2956 6.15145 22.7348 6.23022C22.174 6.30899 21.6024 6.23087 21.0833 6.00452L21.0825 6.00527ZM32.7075 13.6095C30.585 12.8685 29.8005 13.2953 28.8473 14.0318C28.0362 14.709 27.0277 15.1056 25.9725 15.162C24.195 15.3653 22.7655 13.305 21.924 11.6783C24.0494 10.7823 26.3528 10.3885 28.6552 10.5275C30.9576 10.6666 33.1969 11.3347 35.199 12.48C34.5488 13.2113 33.6323 13.932 32.7075 13.6095Z"
                                                                        fill="#3ea8e2" stroke="#3ea8e2"
                                                                        stroke-width="1.05"></path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_9_3677">
                                                                        <rect width="48" height="48" fill="white">
                                                                        </rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg> </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                Cân bằng &amp; bền vững </span>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            Perfect giao thoa tinh túy từ nguồn nguyên liệu thiên nhiên.
                                                        </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="2" role="group" aria-roledescription="slide"
                                aria-label="2 of 5">
                                <div class="elementor-element elementor-element-bde2473 e-flex e-con-boxed e-con e-child"
                                    data-id="bde2473" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-70017024 e-transform elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
                                            data-id="70017024" data-element_type="widget"
                                            data-settings="{&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;-2&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48"
                                                                height="48" viewBox="0 0 48 48" fill="none">
                                                                <g opacity="0.9">
                                                                    <path
                                                                        d="M20.76 22.0276L22.3933 23.7584L27.0972 19.0547L28.9465 20.904L22.339 27.5114L18.8579 23.8226L20.76 22.0276Z"
                                                                        fill="#3ea8e2"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M24.0009 12.2314C18.2325 12.2314 13.5396 16.9244 13.5396 22.6928C13.5396 28.4611 18.2325 33.1541 24.0009 33.1541C29.7692 33.1541 34.4622 28.4611 34.4622 22.6928C34.4622 16.9244 29.7692 12.2314 24.0009 12.2314ZM24.0009 30.5387C19.6746 30.5387 16.1549 27.019 16.1549 22.6928C16.1549 18.3665 19.6746 14.8468 24.0009 14.8468C28.3271 14.8468 31.8469 18.3665 31.8469 22.6928C31.8469 27.019 28.3271 30.5387 24.0009 30.5387Z"
                                                                        fill="#3ea8e2"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M40.2159 9.79873C36.0927 7.99625 33.3195 6.67655 31.5181 2.5541L31.1755 1.77002H16.8247L16.482 2.5541C14.6804 6.67725 11.9064 7.99651 7.7843 9.79873L7.00049 10.1414V22.2787C7.00049 27.3995 8.5954 32.3705 11.6128 36.6542C16.2126 43.1848 22.3857 45.5949 23.7409 46.124C23.8815 46.1789 23.9705 46.2136 24.0001 46.2305C24.0347 46.2108 24.1333 46.1724 24.2879 46.1122C25.6999 45.5624 31.7807 43.1944 36.3875 36.6542C39.4048 32.3705 40.9998 27.3995 40.9998 22.2787V10.1414L40.2159 9.79873ZM38.3844 22.2787C38.3844 31.3103 32.6255 39.7362 24.0001 43.4075C15.3748 39.7362 9.61582 31.3102 9.61582 22.2787V11.827C9.8133 11.7279 10.0763 11.6178 10.3904 11.4863C12.3018 10.686 16.1023 9.09473 18.5075 4.38535H29.4928C31.843 8.98729 35.491 10.5617 37.5198 11.4373C37.8573 11.583 38.15 11.7093 38.3844 11.827V22.2787Z"
                                                                        fill="#3ea8e2"></path>
                                                                </g>
                                                            </svg> </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                Hiệu quả an toàn </span>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            Perfect kiểm nghiệm lâm sàng tại các cơ sở uy tín, an toàn.
                                                        </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="3" role="group" aria-roledescription="slide"
                                aria-label="3 of 5">
                                <div class="elementor-element elementor-element-1f1ac78 e-flex e-con-boxed e-con e-child"
                                    data-id="1f1ac78" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-3dc0e3ad e-transform elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
                                            data-id="3dc0e3ad" data-element_type="widget"
                                            data-settings="{&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;-2&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48"
                                                                height="48" viewBox="0 0 48 48" fill="none">
                                                                <path opacity="0.9"
                                                                    d="M24 2.00415L2 24.0042L3.82265 25.8269L6.19513 23.4544V45.9966H41.8048V23.4544L44.1773 25.8269L46 24.0042L24 2.00415ZM22.7112 31.7537H21.0103C18.4659 31.7537 16.3958 29.6837 16.3958 27.1392V25.4384H18.0967C20.6411 25.4384 22.7112 27.5084 22.7112 30.0529V31.7537ZM39.2272 43.4188H25.2888V34.3314H26.9897C30.9554 34.3314 34.1819 31.105 34.1819 27.1392V22.8608H29.9034C27.4611 22.8608 25.3007 24.0854 24.0001 25.9518C22.6995 24.0854 20.539 22.8608 18.0968 22.8608H13.8181V27.1392C13.8181 31.105 17.0446 34.3314 21.0103 34.3314H22.7112V43.4189H8.77282V20.8767L24 5.64962L39.2272 20.8768V43.4188ZM25.2888 31.7537V30.0529C25.2888 27.5085 27.3589 25.4384 29.9033 25.4384H31.6042V27.1393C31.6042 29.6838 29.5341 31.7538 26.9897 31.7538L25.2888 31.7537Z"
                                                                    fill="#3ea8e2"></path>
                                                            </svg> </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                Giải pháp chuyên nghiệp </span>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            Perfect tối ưu công thức, hiệu quả phù hợp mọi nền da. </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="4" role="group" aria-roledescription="slide"
                                aria-label="4 of 5">
                                <div class="elementor-element elementor-element-7f135d5 e-flex e-con-boxed e-con e-child"
                                    data-id="7f135d5" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-77c4fb54 e-transform elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
                                            data-id="77c4fb54" data-element_type="widget"
                                            data-settings="{&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;-2&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48"
                                                                height="48" viewBox="0 0 48 48" fill="none">
                                                                <g opacity="0.9">
                                                                    <path
                                                                        d="M20.76 22.0276L22.3933 23.7584L27.0972 19.0547L28.9465 20.904L22.339 27.5114L18.8579 23.8226L20.76 22.0276Z"
                                                                        fill="#3ea8e2"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M24.0009 12.2314C18.2325 12.2314 13.5396 16.9244 13.5396 22.6928C13.5396 28.4611 18.2325 33.1541 24.0009 33.1541C29.7692 33.1541 34.4622 28.4611 34.4622 22.6928C34.4622 16.9244 29.7692 12.2314 24.0009 12.2314ZM24.0009 30.5387C19.6746 30.5387 16.1549 27.019 16.1549 22.6928C16.1549 18.3665 19.6746 14.8468 24.0009 14.8468C28.3271 14.8468 31.8469 18.3665 31.8469 22.6928C31.8469 27.019 28.3271 30.5387 24.0009 30.5387Z"
                                                                        fill="#3ea8e2"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M40.2159 9.79873C36.0927 7.99625 33.3195 6.67655 31.5181 2.5541L31.1755 1.77002H16.8247L16.482 2.5541C14.6804 6.67725 11.9064 7.99651 7.7843 9.79873L7.00049 10.1414V22.2787C7.00049 27.3995 8.5954 32.3705 11.6128 36.6542C16.2126 43.1848 22.3857 45.5949 23.7409 46.124C23.8815 46.1789 23.9705 46.2136 24.0001 46.2305C24.0347 46.2108 24.1333 46.1724 24.2879 46.1122C25.6999 45.5624 31.7807 43.1944 36.3875 36.6542C39.4048 32.3705 40.9998 27.3995 40.9998 22.2787V10.1414L40.2159 9.79873ZM38.3844 22.2787C38.3844 31.3103 32.6255 39.7362 24.0001 43.4075C15.3748 39.7362 9.61582 31.3102 9.61582 22.2787V11.827C9.8133 11.7279 10.0763 11.6178 10.3904 11.4863C12.3018 10.686 16.1023 9.09473 18.5075 4.38535H29.4928C31.843 8.98729 35.491 10.5617 37.5198 11.4373C37.8573 11.583 38.15 11.7093 38.3844 11.827V22.2787Z"
                                                                        fill="#3ea8e2"></path>
                                                                </g>
                                                            </svg> </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                Da như một hệ sinh thái </span>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            Sản phẩm Perfect tôn trọng và bảo vệ sinh thái học làn da.
                                                        </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="5" role="group" aria-roledescription="slide"
                                aria-label="5 of 5">
                                <div class="elementor-element elementor-element-b46d42d e-flex e-con-boxed e-con e-child"
                                    data-id="b46d42d" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-30d9ecfb e-transform elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
                                            data-id="30d9ecfb" data-element_type="widget"
                                            data-settings="{&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;-2&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48"
                                                                height="48" viewBox="0 0 48 48" fill="none">
                                                                <g clip-path="url(#clip0_9_3701)">
                                                                    <path
                                                                        d="M24 3.75C24.1989 3.75 24.3897 3.67098 24.5303 3.53033C24.671 3.38968 24.75 3.19891 24.75 3V0.75C24.75 0.551088 24.671 0.360322 24.5303 0.21967C24.3897 0.0790176 24.1989 0 24 0C23.8011 0 23.6103 0.0790176 23.4697 0.21967C23.329 0.360322 23.25 0.551088 23.25 0.75V3C23.25 3.19891 23.329 3.38968 23.4697 3.53033C23.6103 3.67098 23.8011 3.75 24 3.75ZM16.9928 4.5435C17.0496 4.68063 17.1459 4.79781 17.2694 4.88018C17.3929 4.96256 17.538 5.00644 17.6865 5.00625C17.7848 5.0059 17.8821 4.98655 17.973 4.94925C18.064 4.91155 18.1467 4.85628 18.2164 4.78661C18.286 4.71693 18.3413 4.63422 18.379 4.54319C18.4166 4.45216 18.436 4.35459 18.436 4.25607C18.4359 4.15755 18.4165 4.06 18.3787 3.969L17.5177 1.89075C17.4801 1.79974 17.4248 1.71705 17.3552 1.64739C17.2856 1.57773 17.2029 1.52246 17.1119 1.48475C16.9282 1.40859 16.7217 1.40854 16.5379 1.48463C16.4469 1.5223 16.3642 1.57753 16.2945 1.64716C16.2249 1.71679 16.1696 1.79946 16.1319 1.89045C16.0557 2.07421 16.0557 2.2807 16.1318 2.4645L16.9928 4.5435ZM11.8028 8.3625C11.9442 8.49912 12.1337 8.57471 12.3303 8.57301C12.5269 8.5713 12.7151 8.49242 12.8541 8.35336C12.9932 8.21431 13.072 8.0262 13.0738 7.82955C13.0755 7.6329 12.9999 7.44345 12.8632 7.302L11.2718 5.71125C11.2026 5.63962 11.1198 5.58248 11.0283 5.54317C10.9368 5.50387 10.8384 5.48318 10.7388 5.48231C10.6392 5.48145 10.5405 5.50042 10.4483 5.53813C10.3561 5.57584 10.2724 5.63153 10.202 5.70195C10.1315 5.77237 10.0758 5.85611 10.0381 5.94828C10.0004 6.04046 9.98145 6.13922 9.98231 6.2388C9.98318 6.33839 10.0039 6.4368 10.0432 6.5283C10.0825 6.61981 10.1396 6.70257 10.2112 6.77175L11.8028 8.3625ZM9.0435 12.4928L6.9645 11.6318C6.87311 11.5915 6.77462 11.57 6.67479 11.5683C6.57496 11.5667 6.4758 11.585 6.38314 11.6222C6.29048 11.6593 6.20617 11.7146 6.13516 11.7848C6.06415 11.855 6.00788 11.9387 5.96963 12.0309C5.93138 12.1231 5.91193 12.2221 5.91242 12.3219C5.91291 12.4218 5.93333 12.5205 5.97249 12.6123C6.01164 12.7042 6.06874 12.7873 6.14043 12.8568C6.21213 12.9263 6.29698 12.9807 6.39 13.017L8.469 13.8787C8.56001 13.9165 8.65755 13.9359 8.75606 13.9359C8.85458 13.9359 8.95213 13.9166 9.04316 13.8789C9.13418 13.8412 9.2169 13.786 9.28657 13.7163C9.35625 13.6467 9.41153 13.564 9.44925 13.473C9.48697 13.382 9.5064 13.2844 9.50642 13.1859C9.50645 13.0874 9.48707 12.9899 9.44939 12.8988C9.41171 12.8078 9.35648 12.7251 9.28683 12.6554C9.21719 12.5858 9.13451 12.5305 9.0435 12.4928ZM8.25 19.5C8.25 19.3011 8.17098 19.1103 8.03033 18.9697C7.88968 18.829 7.69891 18.75 7.5 18.75H5.25C5.05109 18.75 4.86032 18.829 4.71967 18.9697C4.57902 19.1103 4.5 19.3011 4.5 19.5C4.5 19.6989 4.57902 19.8897 4.71967 20.0303C4.86032 20.171 5.05109 20.25 5.25 20.25H7.5C7.69891 20.25 7.88968 20.171 8.03033 20.0303C8.17098 19.8897 8.25 19.6989 8.25 19.5ZM8.469 25.1213L6.39 25.983C6.21048 26.062 6.06905 26.2082 5.99602 26.3902C5.92299 26.5722 5.92417 26.7756 5.9993 26.9568C6.07444 27.138 6.21755 27.2825 6.39797 27.3594C6.57839 27.4363 6.78176 27.4395 6.9645 27.3683L9.0435 26.5072C9.22729 26.4311 9.3733 26.285 9.44939 26.1012C9.52548 25.9173 9.52543 25.7108 9.44925 25.527C9.37307 25.3432 9.22699 25.1972 9.04316 25.1211C8.85933 25.045 8.65279 25.0451 8.469 25.1213ZM11.8028 30.6375L10.2112 32.2282C10.1396 32.2974 10.0825 32.3802 10.0432 32.4717C10.0039 32.5632 9.98318 32.6616 9.98231 32.7612C9.98145 32.8608 10.0004 32.9595 10.0381 33.0517C10.0758 33.1439 10.1315 33.2276 10.202 33.298C10.2724 33.3685 10.3561 33.4242 10.4483 33.4619C10.5405 33.4996 10.6392 33.5186 10.7388 33.5177C10.8384 33.5168 10.9368 33.4961 11.0283 33.4568C11.1198 33.4175 11.2026 33.3604 11.2718 33.2887L12.8632 31.698C12.9999 31.5565 13.0755 31.3671 13.0738 31.1705C13.072 30.9738 12.9932 30.7857 12.8541 30.6466C12.7151 30.5076 12.5269 30.4287 12.3303 30.427C12.1337 30.4253 11.9442 30.5009 11.8028 30.6375ZM30.027 4.95C30.1182 4.98743 30.2157 5.00679 30.3142 5.007C30.4626 5.00704 30.6076 4.96309 30.7309 4.88073C30.8543 4.79836 30.9504 4.68126 31.0072 4.54425L31.8683 2.46525C31.9093 2.37372 31.9316 2.27487 31.9338 2.17457C31.936 2.07428 31.918 1.97456 31.8809 1.88133C31.8439 1.78809 31.7885 1.70324 31.7181 1.63179C31.6477 1.56034 31.5636 1.50375 31.4709 1.46536C31.3783 1.42697 31.2788 1.40756 31.1785 1.40829C31.0782 1.40902 30.979 1.42987 30.8869 1.46961C30.7948 1.50934 30.7116 1.56715 30.6422 1.63962C30.5728 1.71209 30.5187 1.79774 30.483 1.8915L29.6213 3.969C29.5834 4.06004 29.5639 4.15766 29.5638 4.25626C29.5637 4.35487 29.583 4.45252 29.6207 4.54364C29.6584 4.63476 29.7137 4.71755 29.7834 4.78728C29.8531 4.857 29.9359 4.9123 30.027 4.95ZM35.6677 8.58225C35.8666 8.58221 36.0574 8.50316 36.198 8.3625L37.7887 6.77175C37.8604 6.70257 37.9175 6.61981 37.9568 6.5283C37.9961 6.4368 38.0168 6.33839 38.0177 6.2388C38.0186 6.13922 37.9996 6.04046 37.9619 5.94828C37.9242 5.85611 37.8685 5.77237 37.798 5.70195C37.7276 5.63153 37.6439 5.57584 37.5517 5.53813C37.4595 5.50042 37.3608 5.48145 37.2612 5.48231C37.1616 5.48318 37.0632 5.50387 36.9717 5.54317C36.8802 5.58248 36.7974 5.63962 36.7282 5.71125L35.1375 7.302C35.0326 7.40689 34.9612 7.54051 34.9323 7.68598C34.9034 7.83144 34.9182 7.98222 34.975 8.11924C35.0317 8.25627 35.1278 8.37339 35.2512 8.4558C35.3745 8.53821 35.5194 8.58222 35.6677 8.58225ZM39.2438 13.9357C39.3423 13.9358 39.4399 13.9164 39.531 13.8787L41.6092 13.017C41.703 12.9813 41.7887 12.9272 41.8611 12.8578C41.9336 12.7884 41.9914 12.7052 42.0311 12.6131C42.0709 12.521 42.0917 12.4218 42.0925 12.3215C42.0932 12.2212 42.0738 12.1217 42.0354 12.0291C41.997 11.9364 41.9404 11.8523 41.869 11.7819C41.7975 11.7115 41.7127 11.6561 41.6194 11.6191C41.5262 11.582 41.4265 11.564 41.3262 11.5662C41.2259 11.5684 41.127 11.5907 41.0355 11.6318L38.9565 12.4928C38.7961 12.5591 38.6637 12.6791 38.5819 12.8321C38.5 12.9852 38.4738 13.1619 38.5077 13.3322C38.5416 13.5024 38.6335 13.6556 38.7677 13.7657C38.9019 13.8758 39.0702 13.9359 39.2438 13.9357ZM42.75 18.75H40.5C40.3011 18.75 40.1103 18.829 39.9697 18.9697C39.829 19.1103 39.75 19.3011 39.75 19.5C39.75 19.6989 39.829 19.8897 39.9697 20.0303C40.1103 20.171 40.3011 20.25 40.5 20.25H42.75C42.9489 20.25 43.1397 20.171 43.2803 20.0303C43.421 19.8897 43.5 19.6989 43.5 19.5C43.5 19.3011 43.421 19.1103 43.2803 18.9697C43.1397 18.829 42.9489 18.75 42.75 18.75ZM41.6092 25.983L39.531 25.1213C39.44 25.0835 39.3424 25.0641 39.2439 25.0641C39.1454 25.0641 39.0479 25.0834 38.9568 25.1211C38.8658 25.1588 38.7831 25.214 38.7134 25.2837C38.6438 25.3533 38.5885 25.436 38.5508 25.527C38.513 25.618 38.4936 25.7156 38.4936 25.8141C38.4936 25.9126 38.5129 26.0101 38.5506 26.1012C38.5883 26.1922 38.6435 26.2749 38.7132 26.3446C38.7828 26.4143 38.8655 26.4695 38.9565 26.5072L41.0355 27.3683C41.127 27.4093 41.2259 27.4316 41.3262 27.4338C41.4265 27.436 41.5262 27.418 41.6194 27.3809C41.7127 27.3439 41.7975 27.2885 41.869 27.2181C41.9404 27.1477 41.997 27.0636 42.0354 26.9709C42.0738 26.8783 42.0932 26.7788 42.0925 26.6785C42.0917 26.5782 42.0709 26.479 42.0311 26.3869C41.9914 26.2948 41.9336 26.2116 41.8611 26.1422C41.7887 26.0728 41.703 26.0187 41.6092 25.983ZM36.198 30.6375C36.0565 30.5009 35.8671 30.4253 35.6705 30.427C35.4738 30.4287 35.2857 30.5076 35.1466 30.6466C35.0076 30.7857 34.9287 30.9738 34.927 31.1705C34.9253 31.3671 35.0009 31.5565 35.1375 31.698L36.7282 33.2887C36.8697 33.4254 37.0592 33.501 37.2558 33.4993C37.4524 33.4975 37.6406 33.4187 37.7796 33.2796C37.9187 33.1406 37.9975 32.9524 37.9993 32.7558C38.001 32.5592 37.9254 32.3697 37.7887 32.2282L36.198 30.6375Z"
                                                                        fill="#3ea8e2" stroke="#3ea8e2"
                                                                        stroke-width="1.05"></path>
                                                                    <path
                                                                        d="M23.9999 5.25C20.959 5.24805 17.9973 6.2196 15.5484 8.02243C13.0995 9.82526 11.292 12.3647 10.3905 15.2689C9.4891 18.1732 9.54104 21.2898 10.5387 24.1624C11.5365 27.035 13.4275 29.5128 15.9352 31.233C16.3386 31.508 16.6691 31.877 16.8982 32.3081C17.1272 32.7393 17.2479 33.2198 17.2499 33.708V34.5H16.8749C16.3531 34.4993 15.843 34.6543 15.4098 34.9453C14.9766 35.2362 14.6401 35.6498 14.4434 36.1331C14.2467 36.6164 14.1988 37.1474 14.3056 37.6582C14.4125 38.1689 14.6694 38.6361 15.0434 39C14.6694 39.3639 14.4125 39.8311 14.3056 40.3418C14.1988 40.8526 14.2467 41.3836 14.4434 41.8669C14.6401 42.3502 14.9766 42.7638 15.4098 43.0547C15.843 43.3457 16.3531 43.5007 16.8749 43.5H18.8099C18.9892 44.7486 19.6127 45.8908 20.566 46.7169C21.5193 47.5431 22.7384 47.9979 23.9999 47.9979C25.2614 47.9979 26.4805 47.5431 27.4338 46.7169C28.3871 45.8908 29.0106 44.7486 29.1899 43.5H31.1249C31.6467 43.5007 32.1568 43.3457 32.59 43.0547C33.0232 42.7638 33.3597 42.3502 33.5564 41.8669C33.7531 41.3836 33.8011 40.8526 33.6942 40.3418C33.5873 39.8311 33.3304 39.3639 32.9564 39C33.3304 38.6361 33.5873 38.1689 33.6942 37.6582C33.8011 37.1474 33.7531 36.6164 33.5564 36.1331C33.3597 35.6498 33.0232 35.2362 32.59 34.9453C32.1568 34.6543 31.6467 34.4993 31.1249 34.5H30.7499V33.708C30.7517 33.2197 30.8723 32.7392 31.1014 32.308C31.3304 31.8768 31.6611 31.5078 32.0647 31.233C34.5723 29.5128 36.4633 27.035 37.4611 24.1624C38.4588 21.2898 38.5107 18.1732 37.6093 15.2689C36.7078 12.3647 34.9003 9.82526 32.4515 8.02243C30.0026 6.2196 27.0408 5.24805 23.9999 5.25ZM23.9999 46.5C23.1357 46.4991 22.2983 46.2001 21.6288 45.6536C20.9594 45.1071 20.4988 44.3465 20.3249 43.5H27.6749C27.501 44.3465 27.0404 45.1071 26.371 45.6536C25.7015 46.2001 24.8641 46.4991 23.9999 46.5ZM32.2499 40.875C32.2499 41.1734 32.1314 41.4595 31.9204 41.6705C31.7094 41.8815 31.4233 42 31.1249 42H16.8749C16.5765 42 16.2904 41.8815 16.0794 41.6705C15.8684 41.4595 15.7499 41.1734 15.7499 40.875C15.7499 40.5766 15.8684 40.2905 16.0794 40.0795C16.2904 39.8685 16.5765 39.75 16.8749 39.75H31.1249C31.4233 39.75 31.7094 39.8685 31.9204 40.0795C32.1314 40.2905 32.2499 40.5766 32.2499 40.875ZM32.2499 37.125C32.2499 37.4234 32.1314 37.7095 31.9204 37.9205C31.7094 38.1315 31.4233 38.25 31.1249 38.25H16.8749C16.5765 38.25 16.2904 38.1315 16.0794 37.9205C15.8684 37.7095 15.7499 37.4234 15.7499 37.125C15.7499 36.8266 15.8684 36.5405 16.0794 36.3295C16.2904 36.1185 16.5765 36 16.8749 36H31.1249C31.4233 36 31.7094 36.1185 31.9204 36.3295C32.1314 36.5405 32.2499 36.8266 32.2499 37.125ZM25.4999 34.5H22.4999V25.05C22.4999 24.6983 22.4804 24.3473 22.4549 24H25.5449C25.5194 24.3495 25.4999 24.7005 25.4999 25.05V34.5ZM31.2149 29.9963C30.6108 30.4091 30.1163 30.9628 29.774 31.6094C29.4316 32.2561 29.2518 32.9763 29.2499 33.708V34.5H26.9999V25.05C26.9999 24.6983 27.0164 24.3473 27.0449 24H29.2499C29.4488 24 29.6396 23.921 29.7802 23.7803C29.9209 23.6397 29.9999 23.4489 29.9999 23.25C29.9999 23.0511 29.9209 22.8603 29.7802 22.7197C29.6396 22.579 29.4488 22.5 29.2499 22.5H27.2669C27.6715 20.4784 28.5521 18.5822 29.8357 16.9688C29.96 16.8134 30.0175 16.615 29.9955 16.4173C29.9736 16.2195 29.874 16.0386 29.7187 15.9143C29.6417 15.8527 29.5534 15.8069 29.4588 15.7795C29.3642 15.752 29.2651 15.7435 29.1672 15.7544C28.9694 15.7763 28.7885 15.8759 28.6642 16.0313C27.1663 17.9112 26.1593 20.1342 25.7339 22.5H22.2659C21.8408 20.1341 20.8338 17.9111 19.3357 16.0313C19.2113 15.8759 19.0304 15.7763 18.8326 15.7544C18.6349 15.7324 18.4365 15.7899 18.2812 15.9143C18.1258 16.0386 18.0262 16.2195 18.0043 16.4173C17.9823 16.615 18.0398 16.8134 18.1642 16.9688C19.4479 18.5821 20.3284 20.4783 20.7329 22.5H18.7499C18.551 22.5 18.3602 22.579 18.2196 22.7197C18.0789 22.8603 17.9999 23.0511 17.9999 23.25C17.9999 23.4489 18.0789 23.6397 18.2196 23.7803C18.3602 23.921 18.551 24 18.7499 24H20.9549C20.9834 24.3495 20.9999 24.7005 20.9999 25.05V34.5H18.7499V33.708C18.748 32.9762 18.5681 32.2559 18.2256 31.6093C17.8831 30.9626 17.3884 30.409 16.7842 29.9963C14.5402 28.456 12.848 26.2381 11.9551 23.667C11.0623 21.0959 11.0156 18.3066 11.8219 15.7071C12.6282 13.1075 14.2452 10.8342 16.4364 9.21975C18.6275 7.60526 21.2778 6.73431 23.9995 6.73431C26.7212 6.73431 29.3715 7.60526 31.5627 9.21975C33.7538 10.8342 35.3708 13.1075 36.1772 15.7071C36.9835 18.3066 36.9368 21.0959 36.0439 23.667C35.1511 26.2381 33.4589 28.456 31.2149 29.9963Z"
                                                                        fill="#3ea8e2" stroke="#3ea8e2"
                                                                        stroke-width="1.05"></path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_9_3701">
                                                                        <rect width="48" height="48" fill="white">
                                                                        </rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg> </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                Thiên nhiên &amp; khoa học </span>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            Kết hợp thiên nhiên và khoa học cho làn da khỏe đẹp. </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-27cb2174 e-flex e-con-boxed e-con e-parent" data-id="27cb2174"
        data-element_type="container" id="gioithieudn">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-68d6ece3 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                data-id="68d6ece3" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <p class="elementor-heading-title elementor-size-default" style="white-space: nowrap;">về thương
                        hiệu</p>
                </div>
            </div>
            <div class="elementor-element elementor-element-5f33c5ed elementor-widget elementor-widget-heading"
                data-id="5f33c5ed" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Hơn 11 năm nghiên cứu phát triển</h2>
                </div>
            </div>
            <div class="elementor-element elementor-element-44dcc53f elementor-widget elementor-widget-text-editor"
                data-id="44dcc53f" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <p>&#8220;Hơn 11 năm phát triển, Perfect đã khẳng định vị thế dẫn đầu trong ngành làm đẹp tại Việt
                        Nam
                        và khu vực Châu Á.&#8221;</p>
                </div>
            </div>
            <div class="elementor-element elementor-element-4d3fe207 elementor-widget__width-auto elementor-widget elementor-widget-button"
                data-id="4d3fe207" data-element_type="widget" id="btnAbu" data-widget_type="button.default">
                <div class="elementor-widget-container">
                    <div class="elementor-button-wrapper">
                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-shrink"
                            href="gioi-thieu/index.html">
                            <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M20.7938 11.9872L20.7931 11.9865L17.1192 8.21233C16.8439 7.92959 16.3987 7.93064 16.1248 8.2148C15.8508 8.49891 15.8519 8.95846 16.1271 9.24123L18.5938 11.7752H3.70312C3.31479 11.7752 3 12.1001 3 12.501C3 12.9018 3.31479 13.2268 3.70312 13.2268H18.5938L16.1272 15.7607C15.8519 16.0435 15.8509 16.503 16.1248 16.7872C16.3988 17.0713 16.844 17.0723 17.1192 16.7896L20.7932 13.0154L20.7938 13.0147C21.0692 12.731 21.0683 12.27 20.7938 11.9872Z"
                                            fill="#3ea8e2"></path>
                                    </svg> </span>
                                <span class="elementor-button-text">Hiểu về Perfect</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-e545674 accompanying e-flex e-con-boxed e-con e-parent"
        data-id="e545674" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-40e12564 e-con-full e-flex e-con e-child" data-id="40e12564"
                data-element_type="container">
                <div class="elementor-element elementor-element-725f26f7 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="725f26f7" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="elementor-heading-title elementor-size-default" style="white-space: nowrap;">giá trị
                            dành cho bạn</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3e64040b elementor-widget elementor-widget-heading"
                    data-id="3e64040b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Đồng Hành Cùng Perfect</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-726e5367 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
                    data-id="726e5367" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Perfect cam kết mang đến giải pháp tiên phong &#8211; nuôi dưỡng làn da khoẻ mạnh từ bên
                            trong,
                            lan toả cảm hứng về một lối sống bền vững.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-4858a9f e-con-full e-flex e-con e-child" data-id="4858a9f"
                data-element_type="container">
                <div class="elementor-element elementor-element-df91c2a e-con-full scroll-info-animation e-flex e-con e-child"
                    data-id="df91c2a" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-element elementor-element-5e242bf e-con-full e-flex e-con e-child"
                        data-id="5e242bf" data-element_type="container" id="scrollAnimate1"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-e9f5448 e-con-full e-flex e-con e-child"
                            data-id="e9f5448" data-element_type="container">
                            <div class="elementor-element elementor-element-83a718b elementor-widget elementor-widget-image"
                                data-id="83a718b" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img data-lazyloaded="1"
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2ODAiIGhlaWdodD0iNDkwIiB2aWV3Qm94PSIwIDAgNjgwIDQ5MCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                        loading="lazy" decoding="async" width="680" height="490"
                                        data-src="https://gsccos.vn/wp-content/uploads/2025/11/2_11zon.webp"
                                        class="attachment-full size-full wp-image-6217" alt="Chăm Từ Gốc"
                                        data-srcset="https://gsccos.vn/wp-content/uploads/2025/11/2_11zon.webp 680w, https://gsccos.vn/wp-content/uploads/2025/11/2_11zon-300x216.webp 300w, https://gsccos.vn/wp-content/uploads/2025/11/2_11zon-600x432.webp 600w"
                                        data-sizes="(max-width: 680px) 100vw, 680px" />
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-509863c e-con-full e-flex e-con e-child"
                            data-id="509863c" data-element_type="container">
                            <div class="elementor-element elementor-element-6a6b3f0 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading"
                                data-id="6a6b3f0" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">Nâng tầm sức khỏe và sắc
                                        đẹp từ bên trong</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f2253e9 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
                                data-id="f2253e9" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Perfect Nhật Bản tin rằng sức khỏe là nền tảng của sắc đẹp. Mỗi sản phẩm được lựa
                                        chọn với mong muốn đồng hành cùng bạn trên hành trình sống khỏe, sống đẹp và
                                        sống hạnh phúc hơn mỗi ngày.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-0bfaf3f e-con-full e-flex e-con e-child"
                        data-id="0bfaf3f" data-element_type="container" id="scrollAnimate2"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-69fd96f e-con-full e-flex e-con e-child"
                            data-id="69fd96f" data-element_type="container">
                            <div class="elementor-element elementor-element-538decc elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading"
                                data-id="538decc" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">Tinh hoa công nghệ Nhật
                                        Bản</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6828f5e elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
                                data-id="6828f5e" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Kết hợp giữa nghiên cứu hiện đại và các dưỡng chất được tuyển chọn kỹ lưỡng,
                                        hướng đến giải pháp chăm sóc sức khỏe và sắc đẹp bền vững.</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7f6fc32 e-con-full e-flex e-con e-child"
                            data-id="7f6fc32" data-element_type="container">
                            <div class="elementor-element elementor-element-27a88f3 elementor-widget elementor-widget-image"
                                data-id="27a88f3" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img data-lazyloaded="1"
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2ODAiIGhlaWdodD0iNDkwIiB2aWV3Qm94PSIwIDAgNjgwIDQ5MCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                        loading="lazy" decoding="async" width="680" height="490"
                                        data-src="https://gsccos.vn/wp-content/uploads/2025/11/1_11zon.webp"
                                        class="attachment-full size-full wp-image-6216" alt="Khoa Học Tiên Tiến"
                                        data-srcset="https://gsccos.vn/wp-content/uploads/2025/11/1_11zon.webp 680w, https://gsccos.vn/wp-content/uploads/2025/11/1_11zon-300x216.webp 300w, https://gsccos.vn/wp-content/uploads/2025/11/1_11zon-600x432.webp 600w"
                                        data-sizes="(max-width: 680px) 100vw, 680px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5a8f088 e-con-full e-flex e-con e-child"
                        data-id="5a8f088" data-element_type="container" id="scrollAnimate3"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-89ac959 e-con-full e-flex e-con e-child"
                            data-id="89ac959" data-element_type="container">
                            <div class="elementor-element elementor-element-f7d2df5 elementor-widget elementor-widget-image"
                                data-id="f7d2df5" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img data-lazyloaded="1"
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3NzgiIGhlaWdodD0iNTYwIiB2aWV3Qm94PSIwIDAgNzc4IDU2MCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                        loading="lazy" decoding="async" width="778" height="560"
                                        data-src="https://gsccos.vn/wp-content/uploads/2025/08/9-web.webp"
                                        class="attachment-full size-full wp-image-5450" alt="Dich Vụ Tận Tâm"
                                        data-srcset="https://gsccos.vn/wp-content/uploads/2025/08/9-web.webp 778w, https://gsccos.vn/wp-content/uploads/2025/08/9-web-300x216.webp 300w, https://gsccos.vn/wp-content/uploads/2025/08/9-web-768x553.webp 768w, https://gsccos.vn/wp-content/uploads/2025/08/9-web-600x432.webp 600w"
                                        data-sizes="(max-width: 778px) 100vw, 778px" />
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c36f5f5 e-con-full e-flex e-con e-child"
                            data-id="c36f5f5" data-element_type="container">
                            <div class="elementor-element elementor-element-24bbed0 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading"
                                data-id="24bbed0" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">Chất lượng tạo nên niềm
                                        tin</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-fc1142b elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
                                data-id="fc1142b" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Perfect Nhật Bản mong muốn trở thành người bạn đồng hành trên hành trình chăm sóc
                                        sức khỏe, sắc đẹp và nâng cao chất lượng cuộc sống mỗi ngày.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="elementor-element elementor-element-74888872 e-flex e-con-boxed e-con e-parent" data-id="74888872"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-43e5b04a e-con-full cs-image-zoom e-flex e-con e-child"
                data-id="43e5b04a" data-element_type="container">
                <div class="elementor-element elementor-element-6a503fa6 elementor-widget elementor-widget-image"
                    data-id="6a503fa6" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <a href="../muc-san-pham/serum">
                            <img data-lazyloaded="1"
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4ODAiIGhlaWdodD0iNzA0IiB2aWV3Qm94PSIwIDAgODgwIDcwNCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                loading="lazy" decoding="async" width="880" height="704"
                                data-src="https://gsccos.vn/wp-content/uploads/2025/08/4-web.webp"
                                class="attachment-full size-full wp-image-5443" alt="Bổ sản phẩm chuyên sâu Perfect"
                                data-srcset="https://gsccos.vn/wp-content/uploads/2025/08/4-web.webp 880w, https://gsccos.vn/wp-content/uploads/2025/08/4-web-300x240.webp 300w, https://gsccos.vn/wp-content/uploads/2025/08/4-web-768x614.webp 768w, https://gsccos.vn/wp-content/uploads/2025/08/4-web-600x480.webp 600w"
                                data-sizes="(max-width: 880px) 100vw, 880px" /> </a>
                    </div>
                </div>
                <div class="elementor-element elementor-element-69acce38 e-con-full e-flex e-con e-child"
                    data-id="69acce38" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                    <div class="elementor-element elementor-element-59d20bfb elementor-absolute elementor-widget elementor-widget-heading"
                        data-id="59d20bfb" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">Tại Spa, Clinic</h3>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2b74608c elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-button"
                        data-id="2b74608c" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-shrink"
                                    href="../muc-san-pham/serum">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M20.7938 11.987L20.7931 11.9863L17.1192 8.21209C16.8439 7.92935 16.3987 7.9304 16.1248 8.21455C15.8508 8.49867 15.8519 8.95821 16.1271 9.24099L18.5938 11.7749H3.70312C3.31479 11.7749 3 12.0999 3 12.5007C3 12.9016 3.31479 13.2265 3.70312 13.2265H18.5938L16.1272 15.7605C15.8519 16.0433 15.8509 16.5028 16.1248 16.7869C16.3988 17.0711 16.844 17.0721 17.1192 16.7894L20.7932 13.0152L20.7938 13.0145C21.0692 12.7308 21.0683 12.2697 20.7938 11.987Z"
                                                    fill="white"></path>
                                            </svg> </span>
                                        <span class="elementor-button-text">Khám phá ngay</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-4e846eab e-con-full cs-image-zoom e-flex e-con e-child"
                data-id="4e846eab" data-element_type="container">
                <div class="elementor-element elementor-element-420f5abf elementor-widget elementor-widget-image"
                    data-id="420f5abf" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <a href="cham-soc-tai-nha/index.html">
                            <img data-lazyloaded="1"
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNjAwIiBoZWlnaHQ9IjEyODAiIHZpZXdCb3g9IjAgMCAxNjAwIDEyODAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                                loading="lazy" decoding="async" width="1600" height="1280"
                                data-src="https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss3-D.webp"
                                class="attachment-full size-full wp-image-5445" alt="Mela Bright Perfect set Campaing"
                                data-srcset="https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss3-D.webp 1600w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss3-D-300x240.webp 300w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss3-D-1024x819.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss3-D-768x614.webp 768w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss3-D-1536x1229.webp 1536w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss3-D-600x480.webp 600w"
                                data-sizes="(max-width: 1600px) 100vw, 1600px" /> </a>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5d2cb000 e-con-full cs-image-zoom e-flex e-con e-child"
                    data-id="5d2cb000" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                    <div class="elementor-element elementor-element-7e9afa4a elementor-absolute elementor-widget elementor-widget-heading"
                        data-id="7e9afa4a" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">Tại Nhà</h3>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-381a0447 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-button"
                        data-id="381a0447" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-shrink"
                                    href="cham-soc-tai-nha/index.html">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M20.7938 11.987L20.7931 11.9863L17.1192 8.21209C16.8439 7.92935 16.3987 7.9304 16.1248 8.21455C15.8508 8.49867 15.8519 8.95821 16.1271 9.24099L18.5938 11.7749H3.70312C3.31479 11.7749 3 12.0999 3 12.5007C3 12.9016 3.31479 13.2265 3.70312 13.2265H18.5938L16.1272 15.7605C15.8519 16.0433 15.8509 16.5028 16.1248 16.7869C16.3988 17.0711 16.844 17.0721 17.1192 16.7894L20.7932 13.0152L20.7938 13.0145C21.0692 12.7308 21.0683 12.2697 20.7938 11.987Z"
                                                    fill="white"></path>
                                            </svg> </span>
                                        <span class="elementor-button-text">Khám phá ngay</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="elementor-element elementor-element-5b8eca43 e-flex e-con-boxed e-con e-parent" data-id="5b8eca43"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-67a8fa7b e-con-full e-flex e-con e-child" data-id="67a8fa7b"
                data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;video&quot;}">
                <div class="elementor-element elementor-element-4f065534 elementor-widget elementor-widget-video"
                    data-id="4f065534" data-element_type="widget"
                    data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtube.com\/shorts\/47SzEvKYSoc?feature=share&quot;,&quot;lazy_load&quot;:&quot;yes&quot;,&quot;show_image_overlay&quot;:&quot;yes&quot;,&quot;image_overlay&quot;:{&quot;url&quot;:&quot;https:\/\/media.gsccos.vn\/wp-content\/uploads\/2025\/12\/Artboard-4.webp&quot;,&quot;id&quot;:&quot;7907&quot;,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;video_type&quot;:&quot;youtube&quot;}"
                    data-widget_type="video.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-wrapper elementor-open-inline">
                            <div class="elementor-video"></div>
                            <div class="elementor-custom-embed-image-overlay"
                                style="background-image: url(https://media.gsccos.vn/wp-content/uploads/2025/12/Artboard-4.webp);">
                                <div class="elementor-custom-embed-play" role="button" aria-label="Phát video"
                                    tabindex="0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M40 80C62.0914 80 80 62.0914 80 40C80 17.9086 62.0914 0 40 0C17.9086 0 0 17.9086 0 40C0 62.0914 17.9086 80 40 80ZM33.75 54.6721L56.25 42.096C57.9167 41.1645 57.9167 38.8355 56.25 37.904L33.75 25.3279C32.0833 24.3963 30 25.5608 30 27.4239L30 52.5761C30 54.4392 32.0833 55.6037 33.75 54.6721Z"
                                            fill="white" fill-opacity="0.8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-47023a86 e-con-full e-flex e-con e-child" data-id="47023a86"
                data-element_type="container">
                <div class="elementor-element elementor-element-39c90b23 elementor-widget elementor-widget-heading"
                    data-id="39c90b23" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Cấy trắng nano - bật tone sau 60'
                        </h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3d515719 elementor-widget elementor-widget-text-editor"
                    data-id="3d515719" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Phác đồ cấy nano trắng sáng Perfect là liệu trình chuyên nghiệp giúp làm sáng đều màu và tăng
                            độ
                            căng bóng, mịn màng cho da chỉ trong 60 phút. Hệ sản phẩm chăm sóc độc quyền Perfect, hỗ trợ
                            giảm nếp nhăn nông, hạn chế phải trang điểm dày và có thể áp dụng tăng cường sau các thủ
                            thuật xâm lấn (phi kim, peel, laser…) theo chỉ định chuyên gia.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-8155b8 e-con-full e-flex e-con e-child" data-id="8155b8"
                    data-element_type="container">
                    <div class="elementor-element elementor-element-3635d031 elementor-widget elementor-widget-heading"
                        data-id="3635d031" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">trắng da</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-1ace179b elementor-widget elementor-widget-heading"
                        data-id="1ace179b" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">dưỡng ẩm</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-47f4c3a3 elementor-widget elementor-widget-heading"
                        data-id="47f4c3a3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">mờ thâm</p>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1be2a61d elementor-widget elementor-widget-image"
                    data-id="1be2a61d" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTIwIiBoZWlnaHQ9IjEwODAiIHZpZXdCb3g9IjAgMCAxOTIwIDEwODAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            loading="lazy" decoding="async" width="1920" height="1080"
                            data-src="https://media.gsccos.vn/wp-content/uploads/2025/12/Artboard-2.webp"
                            class="attachment-full size-full wp-image-7906" alt=""
                            data-srcset="https://media.gsccos.vn/wp-content/uploads/2025/12/Artboard-2.webp 1920w, https://media.gsccos.vn/wp-content/uploads/2025/12/Artboard-2-300x300.webp 300w, https://media.gsccos.vn/wp-content/uploads/2025/12/Artboard-2-1024x576.webp 1024w, https://media.gsccos.vn/wp-content/uploads/2025/12/Artboard-2-768x432.webp 768w, https://media.gsccos.vn/wp-content/uploads/2025/12/Artboard-2-1536x864.webp 1536w, https://media.gsccos.vn/wp-content/uploads/2025/12/Artboard-2-600x338.webp 600w"
                            data-sizes="(max-width: 1920px) 100vw, 1920px">
                    </div>
                </div>
                <div class="elementor-element elementor-element-6e51c298 elementor-widget elementor-widget-button"
                    data-id="6e51c298" data-element_type="widget" id="btnFull" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="phi-nano-cang-bong-trang-sang/index.html">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Khám phá ngay</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="elementor-element elementor-element-67aacf86 e-flex e-con-boxed e-con e-parent" data-id="67aacf86"
        data-element_type="container" id="s10">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-34c66273 e-con-full e-flex e-con e-child" data-id="34c66273"
                data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-3b4d6b62 elementor-widget elementor-widget-heading"
                    data-id="3b4d6b62" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Hợp Tác Kinh Doanh</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-580c9cba elementor-widget elementor-widget-button"
                    data-id="580c9cba" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6Ijg5MzIiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">KINH DOANH CÙNG PERFECT</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-64eed624 e-flex e-con-boxed e-con e-parent" data-id="64eed624"
        data-element_type="container" id="pdSlider"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-56bea36 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading"
                data-id="56bea36" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Phác đồ chăm da chuyên sâu</h2>
                </div>
            </div>
            <div class="elementor-element elementor-element-7dfb45c4 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
                data-id="7dfb45c4" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <p>Đảm bảo mỗi người phụ nữ có thể gìn giữ và nuôi dưỡng vẻ đẹp của mình, chúng tôi đã tạo ra các
                        liệu trình, cá nhân hoá từng làn da, phù hợp dành cho bạn.</p>
                </div>
            </div>
            <div class="elementor-element elementor-element-63fe3460 elementor-pagination-type-progressbar elementor-widget elementor-widget-n-carousel"
                data-id="63fe3460" data-element_type="widget"
                data-settings="{&quot;carousel_items&quot;:[{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;b3b5ee6&quot;},{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;2d8ec48&quot;},{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;62d8c80&quot;}],&quot;slides_to_show&quot;:&quot;1&quot;,&quot;pagination&quot;:&quot;progressbar&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;500&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;200&quot;,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;1&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;offset_sides&quot;:&quot;none&quot;,&quot;image_spacing_custom_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                data-widget_type="nested-carousel.default">
                <div class="elementor-widget-container">
                    <div class="e-n-carousel swiper" role="region" aria-roledescription="carousel" aria-label="Carousel"
                        dir="ltr">
                        <div class="swiper-wrapper" aria-live="off">
                            <div class="swiper-slide" data-slide="1" role="group" aria-roledescription="slide"
                                aria-label="1 of 3">
                                <div class="elementor-element elementor-element-76b14450 e-flex e-con-boxed e-con e-child"
                                    data-id="76b14450" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-2579a73b e-con-full e-flex e-con e-child"
                                            data-id="2579a73b" data-element_type="container">
                                            <div class="elementor-element elementor-element-69b7125c e-con-full e-flex e-con e-child"
                                                data-id="69b7125c" data-element_type="container">
                                                <div class="elementor-element elementor-element-3035a912 elementor-widget elementor-widget-image"
                                                    data-id="3035a912" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAwIiBoZWlnaHQ9IjgwMCIgdmlld0JveD0iMCAwIDEyMDAgODAwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                            loading="lazy" decoding="async" width="1200" height="800"
                                                            data-src="https://gsccos.vn/wp-content/uploads/2025/07/28-CANG-BONG-TRE-HOa-vi-nano-1.webp"
                                                            class="attachment-full size-full wp-image-4732" alt=""
                                                            data-srcset="https://gsccos.vn/wp-content/uploads/2025/07/28-CANG-BONG-TRE-HOa-vi-nano-1.webp 1200w, https://gsccos.vn/wp-content/uploads/2025/07/28-CANG-BONG-TRE-HOa-vi-nano-1-300x200.webp 300w, https://gsccos.vn/wp-content/uploads/2025/07/28-CANG-BONG-TRE-HOa-vi-nano-1-1024x683.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/07/28-CANG-BONG-TRE-HOa-vi-nano-1-768x512.webp 768w, https://gsccos.vn/wp-content/uploads/2025/07/28-CANG-BONG-TRE-HOa-vi-nano-1-600x400.webp 600w"
                                                            data-sizes="(max-width: 1200px) 100vw, 1200px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6dd792dc elementor-absolute elementor-widget elementor-widget-heading"
                                                    data-id="6dd792dc" data-element_type="widget"
                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">Phi
                                                            nano căng bóng trắng sáng</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6f8c7f7a e-con-full e-flex e-con e-child"
                                                data-id="6f8c7f7a" data-element_type="container">
                                                <div class="elementor-element elementor-element-6c81415d elementor-widget elementor-widget-text-editor"
                                                    data-id="6c81415d" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Trả lại sức sống cho làn da mệt mỏi, lão hoá &#8211; Mang đến
                                                            hiệu quả bật tone căng bóng ấn tượng chỉ sau 60 phút</p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1caad312 elementor-widget elementor-widget-heading"
                                                    data-id="1caad312" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="lieu-trinh/phi-nano-cang-bong-trang-sang/index.html">Khám
                                                                phá liệu trình</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="2" role="group" aria-roledescription="slide"
                                aria-label="2 of 3">
                                <div class="elementor-element elementor-element-65067db7 e-flex e-con-boxed e-con e-child"
                                    data-id="65067db7" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-3b9ad35e e-con-full e-flex e-con e-child"
                                            data-id="3b9ad35e" data-element_type="container">
                                            <div class="elementor-element elementor-element-46dc2841 e-con-full e-flex e-con e-child"
                                                data-id="46dc2841" data-element_type="container">
                                                <div class="elementor-element elementor-element-433c60dd elementor-widget elementor-widget-image"
                                                    data-id="433c60dd" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAwIiBoZWlnaHQ9IjgwMCIgdmlld0JveD0iMCAwIDEyMDAgODAwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                            loading="lazy" decoding="async" width="1200" height="800"
                                                            data-src="https://gsccos.vn/wp-content/uploads/2025/07/5-Vi-kim-nam-3.webp"
                                                            class="attachment-full size-full wp-image-4730" alt=""
                                                            data-srcset="https://gsccos.vn/wp-content/uploads/2025/07/5-Vi-kim-nam-3.webp 1200w, https://gsccos.vn/wp-content/uploads/2025/07/5-Vi-kim-nam-3-300x200.webp 300w, https://gsccos.vn/wp-content/uploads/2025/07/5-Vi-kim-nam-3-1024x683.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/07/5-Vi-kim-nam-3-768x512.webp 768w, https://gsccos.vn/wp-content/uploads/2025/07/5-Vi-kim-nam-3-600x400.webp 600w"
                                                            data-sizes="(max-width: 1200px) 100vw, 1200px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5a12a62d elementor-absolute elementor-widget elementor-widget-heading"
                                                    data-id="5a12a62d" data-element_type="widget"
                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">Vi kim
                                                            sinh học nám</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-52a85e99 e-con-full e-flex e-con e-child"
                                                data-id="52a85e99" data-element_type="container">
                                                <div class="elementor-element elementor-element-6351f33b elementor-widget elementor-widget-text-editor"
                                                    data-id="6351f33b" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>&#8220;Giải pháp&#8221; chuyên biệt giúp giảm khuyết điểm do
                                                            sẹo lõm gây ra, mang đến làn da sinh học khoẻ mạnh.</p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-34171d6e elementor-widget elementor-widget-heading"
                                                    data-id="34171d6e" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="lieu-trinh/vi-kim-sinh-hoc-nam/index.html">Khám
                                                                phá liệu trình</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="3" role="group" aria-roledescription="slide"
                                aria-label="3 of 3">
                                <div class="elementor-element elementor-element-7dde85b3 e-flex e-con-boxed e-con e-child"
                                    data-id="7dde85b3" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-5f9372c9 e-con-full e-flex e-con e-child"
                                            data-id="5f9372c9" data-element_type="container">
                                            <div class="elementor-element elementor-element-2fe4d4ce e-con-full e-flex e-con e-child"
                                                data-id="2fe4d4ce" data-element_type="container">
                                                <div class="elementor-element elementor-element-7fa11e45 elementor-widget elementor-widget-image"
                                                    data-id="7fa11e45" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAwIiBoZWlnaHQ9IjgwMCIgdmlld0JveD0iMCAwIDEyMDAgODAwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                            loading="lazy" decoding="async" width="1200" height="800"
                                                            data-src="https://gsccos.vn/wp-content/uploads/2025/08/37-VI-KIM-TRE-HOA-CANG-BONG-DA-1.webp"
                                                            class="attachment-full size-full wp-image-5452"
                                                            alt="Perfect"
                                                            data-srcset="https://gsccos.vn/wp-content/uploads/2025/08/37-VI-KIM-TRE-HOA-CANG-BONG-DA-1.webp 1200w, https://gsccos.vn/wp-content/uploads/2025/08/37-VI-KIM-TRE-HOA-CANG-BONG-DA-1-300x200.webp 300w, https://gsccos.vn/wp-content/uploads/2025/08/37-VI-KIM-TRE-HOA-CANG-BONG-DA-1-1024x683.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/08/37-VI-KIM-TRE-HOA-CANG-BONG-DA-1-768x512.webp 768w, https://gsccos.vn/wp-content/uploads/2025/08/37-VI-KIM-TRE-HOA-CANG-BONG-DA-1-600x400.webp 600w"
                                                            data-sizes="(max-width: 1200px) 100vw, 1200px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-580b6a9f elementor-absolute elementor-widget elementor-widget-heading"
                                                    data-id="580b6a9f" data-element_type="widget"
                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">Vi kim
                                                            căng bóng</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-511fd96e e-con-full e-flex e-con e-child"
                                                data-id="511fd96e" data-element_type="container">
                                                <div class="elementor-element elementor-element-6d9e2e4e elementor-widget elementor-widget-text-editor"
                                                    data-id="6d9e2e4e" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>&#8220;Giải pháp&#8221; chuyên biệt chống lão hóa khắc phục
                                                            và tái tạo da chuyên sâu để cải thiện cấu trúc da.</p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-21586ad8 elementor-widget elementor-widget-heading"
                                                    data-id="21586ad8" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="lieu-trinh/vi-kim-cang-bong/index.html">Khám phá
                                                                liệu trình</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-130faad8 e-flex e-con-boxed e-con e-parent" data-id="130faad8"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-233bb07b e-con-full e-flex e-con e-child" data-id="233bb07b"
                data-element_type="container">
                <div class="elementor-element elementor-element-4a595a7b elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                    data-id="4a595a7b" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Tin tức</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5188c0f5 elementor-widget elementor-widget-heading"
                    data-id="5188c0f5" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Hiểu đúng - chăm từ "Gốc"</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7a18a1fd elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                    data-id="7a18a1fd" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Góc nhìn chuyên sâu và xu hướng mới từ các chuyên gia – giúp bạn hiểu làn da và chăm sóc đúng
                            cách.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7f70a273 elementor-widget elementor-widget-button"
                    data-id="7f70a273" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="tin-tuc/index.html">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Tìm hiểu thêm</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-c9a1fb4 e-con-full e-flex e-con e-child" data-id="c9a1fb4"
                data-element_type="container" id="blogSlider">
                <div class="elementor-element elementor-element-f8c91eb elementor-pagination-type-progressbar cs-progress-swiper elementor-widget elementor-widget-loop-carousel"
                    data-id="f8c91eb" data-element_type="widget"
                    data-settings="{&quot;template_id&quot;:&quot;7308&quot;,&quot;slides_to_show&quot;:&quot;2&quot;,&quot;pagination&quot;:&quot;progressbar&quot;,&quot;slides_to_show_laptop&quot;:&quot;2&quot;,&quot;slides_to_show_tablet_extra&quot;:&quot;2&quot;,&quot;slides_to_scroll_laptop&quot;:&quot;1&quot;,&quot;slides_to_scroll_tablet_extra&quot;:&quot;1&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;20&quot;,&quot;sizes&quot;:[]},&quot;_skin&quot;:&quot;post&quot;,&quot;slides_to_show_tablet&quot;:&quot;2&quot;,&quot;slides_to_show_mobile_extra&quot;:&quot;2&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;edit_handle_selector&quot;:&quot;.elementor-loop-container&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;offset_sides&quot;:&quot;none&quot;,&quot;image_spacing_custom_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="loop-carousel.post">
                    <div class="elementor-widget-container">
                        <div class="swiper elementor-loop-container elementor-grid" role="list" dir="ltr">
                            <div class="swiper-wrapper" aria-live="off">
                                <style id="loop-7308">
                                .cs-loop-post-image {
                                    aspect-ratio: 768/480;
                                    overflow: hidden;
                                }

                                .cs-loop-post-excerpt {
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                }

                                .elementor-7308 .elementor-element.elementor-element-1c42c36 {
                                    --display: flex;
                                    --flex-direction: column;
                                    --container-widget-width: 100%;
                                    --container-widget-height: initial;
                                    --container-widget-flex-grow: 0;
                                    --container-widget-align-self: initial;
                                    --flex-wrap-mobile: wrap;
                                    --overflow: hidden;
                                    --border-radius: 10px 10px 10px 10px;
                                }

                                .elementor-7308 .elementor-element.elementor-element-1c42c36:not(.elementor-motion-effects-element-type-background),
                                .elementor-7308 .elementor-element.elementor-element-1c42c36>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                                    background-color: var(--e-global-color-secondary);
                                }

                                .elementor-widget-image .widget-image-caption {
                                    color: var(--e-global-color-text);
                                    font-family: var(--e-global-typography-text-font-family), Sans-serif;
                                }

                                .elementor-7308 .elementor-element.elementor-element-5018347 {
                                    --display: flex;
                                    --gap: 10px 10px;
                                    --row-gap: 10px;
                                    --column-gap: 10px;
                                    --padding-top: 16px;
                                    --padding-bottom: 16px;
                                    --padding-left: 24px;
                                    --padding-right: 24px;
                                }

                                .elementor-widget-theme-post-title .elementor-heading-title {
                                    font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                                    font-size: var(--e-global-typography-primary-font-size);
                                    font-weight: var(--e-global-typography-primary-font-weight);
                                    color: var(--e-global-color-primary);
                                }

                                .elementor-7308 .elementor-element.elementor-element-daeda39 .elementor-heading-title {
                                    font-family: "Manrope", Sans-serif;
                                    font-size: 18px;
                                    font-weight: 600;
                                    line-height: 1.3em;
                                    color: var(--e-global-color-accent);
                                }

                                .elementor-7308 .elementor-element.elementor-element-daeda39 .elementor-heading-title a:hover,
                                .elementor-7308 .elementor-element.elementor-element-daeda39 .elementor-heading-title a:focus {
                                    color: var(--e-global-color-primary);
                                }

                                .elementor-widget-theme-post-excerpt .elementor-widget-container {
                                    font-family: var(--e-global-typography-text-font-family), Sans-serif;
                                    color: var(--e-global-color-text);
                                }

                                .elementor-7308 .elementor-element.elementor-element-1f01a7b .elementor-widget-container {
                                    font-family: "Manrope", Sans-serif;
                                    font-size: 16px;
                                    font-weight: 400;
                                    color: #888888;
                                }

                                @media(max-width:1700px) {
                                    .elementor-widget-theme-post-title .elementor-heading-title {
                                        font-size: var(--e-global-typography-primary-font-size);
                                    }
                                }

                                @media(max-width:1024px) {
                                    .elementor-widget-theme-post-title .elementor-heading-title {
                                        font-size: var(--e-global-typography-primary-font-size);
                                    }
                                }

                                @media(max-width:767px) {
                                    .elementor-widget-theme-post-title .elementor-heading-title {
                                        font-size: var(--e-global-typography-primary-font-size);
                                    }
                                }
                                </style>
                                <div data-elementor-type="loop-item" data-elementor-id="7308"
                                    class="elementor elementor-7308 swiper-slide e-loop-item e-loop-item-7803 post-7803 post type-post status-publish format-standard has-post-thumbnail hentry category-su-kien"
                                    data-elementor-post-type="elementor_library" role="group"
                                    aria-roledescription="slide" data-custom-edit-handle="1">
                                    <div class="elementor-element elementor-element-1c42c36 cs-image-zoom e-flex e-con-boxed e-con e-parent"
                                        data-id="1c42c36" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-faaa8c9 cs-loop-post-image elementor-widget elementor-widget-image"
                                                data-id="faaa8c9" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="su-kien/tong-ket-hoi-thao-gsc-melasma-biocode/index.html">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3NjgiIGhlaWdodD0iNDgwIiB2aWV3Qm94PSIwIDAgNzY4IDQ4MCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                            loading="lazy" decoding="async" width="768" height="480"
                                                            data-src="https://media.gsccos.vn/wp-content/uploads/2025/12/HINH-1--768x480.webp"
                                                            class="attachment-medium_large size-medium_large wp-image-7804"
                                                            alt="hội thảo Melasma Biocode tại ORCHIDS SAIGON HOTEL ngày 26/11/2025"
                                                            data-srcset="https://media.gsccos.vn/wp-content/uploads/2025/12/HINH-1--768x480.webp 768w, https://media.gsccos.vn/wp-content/uploads/2025/12/HINH-1--300x300.webp 300w, https://media.gsccos.vn/wp-content/uploads/2025/12/HINH-1--1024x640.webp 1024w, https://media.gsccos.vn/wp-content/uploads/2025/12/HINH-1--600x375.webp 600w, https://media.gsccos.vn/wp-content/uploads/2025/12/HINH-1-.webp 1200w"
                                                            data-sizes="(max-width: 768px) 100vw, 768px"> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5018347 e-con-full e-flex e-con e-child"
                                                data-id="5018347" data-element_type="container">
                                                <div class="elementor-element elementor-element-daeda39 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading"
                                                    data-id="daeda39" data-element_type="widget"
                                                    data-widget_type="theme-post-title.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default"><a
                                                                href="su-kien/tong-ket-hoi-thao-gsc-melasma-biocode/index.html">Tổng
                                                                kết hội thảo Perfect về ngăn ngừa nám tái phát</a></h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f01a7b cs-loop-post-excerpt elementor-widget elementor-widget-theme-post-excerpt"
                                                    data-id="1f01a7b" data-element_type="widget"
                                                    data-widget_type="theme-post-excerpt.default">
                                                    <div class="elementor-widget-container">
                                                        Trong thị trường làm đẹp hiện nay, việc điều trị nám ngày càng
                                                        khó khăn do thị trường tràn ngập những sản phẩm “giả”, “lậu” và
                                                        cơ sở thẩm mỹ kém chất lượng. Hàng loạt xử lý sai phạm diễn ra
                                                        trong năm 2025 vừa qua, không chỉ vậy hệ lụy để lại còn là làn
                                                        da bị tổn thương của hàng ngàn, hàng triệu khách hàng. Thấu hiểu
                                                        và mong muốn chia sẻ điều này với khách hàng Perfect đã tổ chức
                                                        hội
                                                        thảo “Melasma Biocode – Ứng dụng phức hợp công nghệ Mela Bright
                                                        Complex ngăn ngừa nám tái phát” tại TP. HCM. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-elementor-type="loop-item" data-elementor-id="7308"
                                    class="elementor elementor-7308 swiper-slide e-loop-item e-loop-item-244 post-244 post type-post status-publish format-standard has-post-thumbnail hentry category-xu-huong tag-new"
                                    data-elementor-post-type="elementor_library" role="group"
                                    aria-roledescription="slide" data-custom-edit-handle="1">
                                    <div class="elementor-element elementor-element-1c42c36 cs-image-zoom e-flex e-con-boxed e-con e-parent"
                                        data-id="1c42c36" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-faaa8c9 cs-loop-post-image elementor-widget elementor-widget-image"
                                                data-id="faaa8c9" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="xu-huong/da-treatment-la-da-gi/index.html">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3NjgiIGhlaWdodD0iNDgwIiB2aWV3Qm94PSIwIDAgNzY4IDQ4MCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                            loading="lazy" decoding="async" width="768" height="480"
                                                            data-src="https://gsccos.vn/wp-content/uploads/2025/03/da-treatment-la-da-gi-1-768x480.webp"
                                                            class="attachment-medium_large size-medium_large wp-image-2582"
                                                            alt="Da treatment là da gì"
                                                            data-srcset="https://gsccos.vn/wp-content/uploads/2025/03/da-treatment-la-da-gi-1-768x480.webp 768w, https://gsccos.vn/wp-content/uploads/2025/03/da-treatment-la-da-gi-1-300x188.webp 300w, https://gsccos.vn/wp-content/uploads/2025/03/da-treatment-la-da-gi-1-1024x640.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/03/da-treatment-la-da-gi-1-600x375.webp 600w, https://gsccos.vn/wp-content/uploads/2025/03/da-treatment-la-da-gi-1.webp 1200w"
                                                            data-sizes="(max-width: 768px) 100vw, 768px" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5018347 e-con-full e-flex e-con e-child"
                                                data-id="5018347" data-element_type="container">
                                                <div class="elementor-element elementor-element-daeda39 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading"
                                                    data-id="daeda39" data-element_type="widget"
                                                    data-widget_type="theme-post-title.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default"><a
                                                                href="xu-huong/da-treatment-la-da-gi/index.html">Da
                                                                treatment là da gì? Hướng dẫn cách phục hồi hiệu quả</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f01a7b cs-loop-post-excerpt elementor-widget elementor-widget-theme-post-excerpt"
                                                    data-id="1f01a7b" data-element_type="widget"
                                                    data-widget_type="theme-post-excerpt.default">
                                                    <div class="elementor-widget-container">
                                                        Perfect bật mí các hoạt chất "đỉnh" nhất năm 2025 và cách lựa
                                                        chọn
                                                        phù hợp cho từng tình trạng da! </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-elementor-type="loop-item" data-elementor-id="7308"
                                    class="elementor elementor-7308 swiper-slide e-loop-item e-loop-item-242 post-242 post type-post status-publish format-standard has-post-thumbnail hentry category-thong-tin-nganh tag-cham-soc-da tag-lam-dep-da"
                                    data-elementor-post-type="elementor_library" role="group"
                                    aria-roledescription="slide" data-custom-edit-handle="1">
                                    <div class="elementor-element elementor-element-1c42c36 cs-image-zoom e-flex e-con-boxed e-con e-parent"
                                        data-id="1c42c36" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-faaa8c9 cs-loop-post-image elementor-widget elementor-widget-image"
                                                data-id="faaa8c9" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="thong-tin-nganh/da-nhay-cam-la-da-gi/index.html">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3NjgiIGhlaWdodD0iNDgwIiB2aWV3Qm94PSIwIDAgNzY4IDQ4MCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                            loading="lazy" decoding="async" width="768" height="480"
                                                            data-src="https://gsccos.vn/wp-content/uploads/2025/03/da-nhay-cam-la-da-gi-768x480.webp"
                                                            class="attachment-medium_large size-medium_large wp-image-2537"
                                                            alt=""
                                                            data-srcset="https://gsccos.vn/wp-content/uploads/2025/03/da-nhay-cam-la-da-gi-768x480.webp 768w, https://gsccos.vn/wp-content/uploads/2025/03/da-nhay-cam-la-da-gi-300x188.webp 300w, https://gsccos.vn/wp-content/uploads/2025/03/da-nhay-cam-la-da-gi-1024x640.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/03/da-nhay-cam-la-da-gi-600x375.webp 600w, https://gsccos.vn/wp-content/uploads/2025/03/da-nhay-cam-la-da-gi.webp 1200w"
                                                            data-sizes="(max-width: 768px) 100vw, 768px" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5018347 e-con-full e-flex e-con e-child"
                                                data-id="5018347" data-element_type="container">
                                                <div class="elementor-element elementor-element-daeda39 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading"
                                                    data-id="daeda39" data-element_type="widget"
                                                    data-widget_type="theme-post-title.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default"><a
                                                                href="thong-tin-nganh/da-nhay-cam-la-da-gi/index.html">Da
                                                                nhạy cảm là da gì? 5 phương pháp phục hồi da nhạy
                                                                cảm</a></h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f01a7b cs-loop-post-excerpt elementor-widget elementor-widget-theme-post-excerpt"
                                                    data-id="1f01a7b" data-element_type="widget"
                                                    data-widget_type="theme-post-excerpt.default">
                                                    <div class="elementor-widget-container">
                                                        Perfect sẽ giúp bạn hiểu rõ quy trình phục hồi da đúng cách - từ
                                                        nhận diện dấu hiệu tổn thương đến các bước củng cố hàng rào bảo
                                                        vệ. Giúp bạn sớm lấy lại làn da khỏe đẹp, căng tràn sức sống.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-elementor-type="loop-item" data-elementor-id="7308"
                                    class="elementor elementor-7308 swiper-slide e-loop-item e-loop-item-240 post-240 post type-post status-publish format-standard has-post-thumbnail hentry category-xu-huong tag-cham-soc-da tag-lam-dep-da"
                                    data-elementor-post-type="elementor_library" role="group"
                                    aria-roledescription="slide" data-custom-edit-handle="1">
                                    <div class="elementor-element elementor-element-1c42c36 cs-image-zoom e-flex e-con-boxed e-con e-parent"
                                        data-id="1c42c36" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-faaa8c9 cs-loop-post-image elementor-widget elementor-widget-image"
                                                data-id="faaa8c9" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="xu-huong/hoat-chat-phuc-hoi-da/index.html">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3NjgiIGhlaWdodD0iNDgwIiB2aWV3Qm94PSIwIDAgNzY4IDQ4MCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                            loading="lazy" decoding="async" width="768" height="480"
                                                            data-src="https://gsccos.vn/wp-content/uploads/2025/03/10-hoat-chat-phuc-hoi-da-768x480.webp"
                                                            class="attachment-medium_large size-medium_large wp-image-2521"
                                                            alt="Top 10 hoạt chất phục hồi da đáng thử năm 2025"
                                                            data-srcset="https://gsccos.vn/wp-content/uploads/2025/03/10-hoat-chat-phuc-hoi-da-768x480.webp 768w, https://gsccos.vn/wp-content/uploads/2025/03/10-hoat-chat-phuc-hoi-da-300x188.webp 300w, https://gsccos.vn/wp-content/uploads/2025/03/10-hoat-chat-phuc-hoi-da-1024x640.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/03/10-hoat-chat-phuc-hoi-da-600x375.webp 600w, https://gsccos.vn/wp-content/uploads/2025/03/10-hoat-chat-phuc-hoi-da.webp 1200w"
                                                            data-sizes="(max-width: 768px) 100vw, 768px" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5018347 e-con-full e-flex e-con e-child"
                                                data-id="5018347" data-element_type="container">
                                                <div class="elementor-element elementor-element-daeda39 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading"
                                                    data-id="daeda39" data-element_type="widget"
                                                    data-widget_type="theme-post-title.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default"><a
                                                                href="xu-huong/hoat-chat-phuc-hoi-da/index.html">10+ các
                                                                hoạt chất phục hồi da hiệu quả nhất năm 2025</a></h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f01a7b cs-loop-post-excerpt elementor-widget elementor-widget-theme-post-excerpt"
                                                    data-id="1f01a7b" data-element_type="widget"
                                                    data-widget_type="theme-post-excerpt.default">
                                                    <div class="elementor-widget-container">
                                                        Da bạn có thường bốc hỏa, ngứa rát hay khô căng mỗi khi thay đổi
                                                        thời tiết hoặc dùng sản phẩm mới? Nếu đáp án là "có", bạn có thể
                                                        đang sở hữu làn da nhạy cảm - loại da dễ kích ứng, mỏng manh và
                                                        cần được chăm sóc đặc biệt. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-elementor-type="loop-item" data-elementor-id="7308"
                                    class="elementor elementor-7308 swiper-slide e-loop-item e-loop-item-238 post-238 post type-post status-publish format-standard has-post-thumbnail hentry category-xu-huong tag-cham-soc-da tag-lam-dep-da"
                                    data-elementor-post-type="elementor_library" role="group"
                                    aria-roledescription="slide" data-custom-edit-handle="1">
                                    <div class="elementor-element elementor-element-1c42c36 cs-image-zoom e-flex e-con-boxed e-con e-parent"
                                        data-id="1c42c36" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-faaa8c9 cs-loop-post-image elementor-widget elementor-widget-image"
                                                data-id="faaa8c9" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="xu-huong/phuc-hoi-da-la-gi/index.html">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3NjgiIGhlaWdodD0iNDgwIiB2aWV3Qm94PSIwIDAgNzY4IDQ4MCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                            loading="lazy" decoding="async" width="768" height="480"
                                                            data-src="https://gsccos.vn/wp-content/uploads/2025/03/hoat-chat-phuc-hoi-da-768x480.webp"
                                                            class="attachment-medium_large size-medium_large wp-image-2514"
                                                            alt="Các hoạt chất phục hồi da"
                                                            data-srcset="https://gsccos.vn/wp-content/uploads/2025/03/hoat-chat-phuc-hoi-da-768x480.webp 768w, https://gsccos.vn/wp-content/uploads/2025/03/hoat-chat-phuc-hoi-da-300x188.webp 300w, https://gsccos.vn/wp-content/uploads/2025/03/hoat-chat-phuc-hoi-da-1024x640.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/03/hoat-chat-phuc-hoi-da-600x375.webp 600w, https://gsccos.vn/wp-content/uploads/2025/03/hoat-chat-phuc-hoi-da.webp 1200w"
                                                            data-sizes="(max-width: 768px) 100vw, 768px" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5018347 e-con-full e-flex e-con e-child"
                                                data-id="5018347" data-element_type="container">
                                                <div class="elementor-element elementor-element-daeda39 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading"
                                                    data-id="daeda39" data-element_type="widget"
                                                    data-widget_type="theme-post-title.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default"><a
                                                                href="xu-huong/phuc-hoi-da-la-gi/index.html">Phục hồi da
                                                                là gì? Hiểu đúng để chăm da yếu hiệu quả 2025</a></h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f01a7b cs-loop-post-excerpt elementor-widget elementor-widget-theme-post-excerpt"
                                                    data-id="1f01a7b" data-element_type="widget"
                                                    data-widget_type="theme-post-excerpt.default">
                                                    <div class="elementor-widget-container">
                                                        Bạn đang tìm serum phục hồi da tốt để giúp làn da nhạy cảm, mỏng
                                                        yếu lấy lại sức sống? Dù da bạn bị kích ứng, bong tróc hay tổn
                                                        thương sau các liệu trình làm đẹp, một loại serum phù hợp sẽ
                                                        giúp phục hồi nhanh chóng, củng cố hàng rào bảo vệ da. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-elementor-type="loop-item" data-elementor-id="7308"
                                    class="elementor elementor-7308 swiper-slide e-loop-item e-loop-item-234 post-234 post type-post status-publish format-standard has-post-thumbnail hentry category-xu-huong tag-cham-soc-da tag-lam-dep-da"
                                    data-elementor-post-type="elementor_library" role="group"
                                    aria-roledescription="slide" data-custom-edit-handle="1">
                                    <div class="elementor-element elementor-element-1c42c36 cs-image-zoom e-flex e-con-boxed e-con e-parent"
                                        data-id="1c42c36" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-faaa8c9 cs-loop-post-image elementor-widget elementor-widget-image"
                                                data-id="faaa8c9" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="xu-huong/phuc-hoi-da-kich-ung-tai-nha/index.html">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3NjgiIGhlaWdodD0iNDgwIiB2aWV3Qm94PSIwIDAgNzY4IDQ4MCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                            loading="lazy" decoding="async" width="768" height="480"
                                                            data-src="https://gsccos.vn/wp-content/uploads/2025/03/phuc-hoi-da-kich-ung-tai-nha-don-gian-768x480.webp"
                                                            class="attachment-medium_large size-medium_large wp-image-2499"
                                                            alt="Phục hồi da kích ứng tại nhà"
                                                            data-srcset="https://gsccos.vn/wp-content/uploads/2025/03/phuc-hoi-da-kich-ung-tai-nha-don-gian-768x480.webp 768w, https://gsccos.vn/wp-content/uploads/2025/03/phuc-hoi-da-kich-ung-tai-nha-don-gian-300x188.webp 300w, https://gsccos.vn/wp-content/uploads/2025/03/phuc-hoi-da-kich-ung-tai-nha-don-gian-1024x640.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/03/phuc-hoi-da-kich-ung-tai-nha-don-gian-600x375.webp 600w, https://gsccos.vn/wp-content/uploads/2025/03/phuc-hoi-da-kich-ung-tai-nha-don-gian.webp 1200w"
                                                            data-sizes="(max-width: 768px) 100vw, 768px" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5018347 e-con-full e-flex e-con e-child"
                                                data-id="5018347" data-element_type="container">
                                                <div class="elementor-element elementor-element-daeda39 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading"
                                                    data-id="daeda39" data-element_type="widget"
                                                    data-widget_type="theme-post-title.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default"><a
                                                                href="xu-huong/phuc-hoi-da-kich-ung-tai-nha/index.html">Phục
                                                                hồi da kích ứng tại nhà: 3 mẹo đơn giản, hiệu quả
                                                                nhanh</a></h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f01a7b cs-loop-post-excerpt elementor-widget elementor-widget-theme-post-excerpt"
                                                    data-id="1f01a7b" data-element_type="widget"
                                                    data-widget_type="theme-post-excerpt.default">
                                                    <div class="elementor-widget-container">
                                                        Khám phá hành trình chăm sóc da với Perfect. Tại đây, bạn sẽ tìm
                                                        thấy những bài viết từ chuyên gia, mẹo làm đẹp hàng ngày, cập
                                                        nhật xu hướng mỹ phẩm, và câu chuyện truyền cảm hứng từ khách
                                                        hàng thực tế. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-16b5ad6 e-flex e-con-boxed e-con e-child" data-id="16b5ad6"
        data-element_type="container" id="s9Slider">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-7304fcaf elementor-pagination-position-inside elementor-pagination-type-bullets elementor-arrows-position-inside elementor-widget elementor-widget-n-carousel"
                data-id="7304fcaf" data-element_type="widget"
                data-settings="{&quot;carousel_items&quot;:[{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;1651369&quot;},{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;e0b46fc&quot;},{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;8b23260&quot;},{&quot;slide_title&quot;:&quot;Slide #1&quot;,&quot;_id&quot;:&quot;877d875&quot;}],&quot;slides_to_show&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;500&quot;,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;none&quot;,&quot;slides_to_show_tablet&quot;:&quot;1&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;offset_sides&quot;:&quot;none&quot;,&quot;arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;image_spacing_custom_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                data-widget_type="nested-carousel.default">
                <div class="elementor-widget-container">
                    <div class="e-n-carousel swiper" role="region" aria-roledescription="carousel" aria-label="Carousel"
                        dir="ltr">
                        <div class="swiper-wrapper" aria-live="off">
                            <div class="swiper-slide" data-slide="1" role="group" aria-roledescription="slide"
                                aria-label="1 of 4">
                                <div class="elementor-element elementor-element-6467e8d4 e-flex e-con-boxed e-con e-child"
                                    data-id="6467e8d4" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-3c43952c e-con-full e-flex e-con e-child"
                                            data-id="3c43952c" data-element_type="container">
                                            <div class="elementor-element elementor-element-7848735f elementor-widget elementor-widget-image"
                                                data-id="7848735f" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img data-lazyloaded="1"
                                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAwIiBoZWlnaHQ9Ijg1NiIgdmlld0JveD0iMCAwIDEyMDAgODU2Ij48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                        loading="lazy" decoding="async" width="1200" height="856"
                                                        data-src="https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.1-D-M.webp"
                                                        class="attachment-full size-full wp-image-5458"
                                                        alt="Mela bright review 01"
                                                        data-srcset="https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.1-D-M.webp 1200w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.1-D-M-300x214.webp 300w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.1-D-M-1024x730.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.1-D-M-768x548.webp 768w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.1-D-M-600x428.webp 600w"
                                                        data-sizes="(max-width: 1200px) 100vw, 1200px" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1a2f1bc8 e-con-full e-flex e-con e-child"
                                            data-id="1a2f1bc8" data-element_type="container">
                                            <div class="elementor-element elementor-element-2e734d44 elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="2e734d44" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="38"
                                                                height="32" viewBox="0 0 38 32" fill="none">
                                                                <path opacity="0.1"
                                                                    d="M0 16.001V32.001H16.2857V16.001H5.42861C5.42861 10.1195 10.2992 5.33434 16.2857 5.33434V0.000976562C7.30524 0.000976562 0 7.17805 0 16.001ZM38 5.33434V0.000976562C29.0195 0.000976562 21.7143 7.17805 21.7143 16.001V32.001H38V16.001H27.1429C27.1429 10.1195 32.0135 5.33434 38 5.33434Z"
                                                                    fill="#3ea8e2"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-26f43f34 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading"
                                                data-id="26f43f34" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Da đều
                                                        màu rõ sau 01 tháng sử dụng</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-48185613 elementor-widget elementor-widget-heading"
                                                data-id="48185613" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Mình bị
                                                        nám mảng khá lâu, dùng nhiều sản phẩm nhưng không cải thiện rõ.
                                                        Được bác sĩ Perfect tư vấn bộ Perfect Mela Bright, sau 4 tuần
                                                        thấy da
                                                        đều màu hơn, sáng lên nhẹ và ít bị khô như trước. Các vết nám mờ
                                                        dần và không lan thêm, mình cảm giác da khỏe hơn rõ rệt.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7154e6eb elementor-widget elementor-widget-heading"
                                                data-id="7154e6eb" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Chị Hồng
                                                        Ngọc</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3efad997 elementor-icon-list--layout-inline elementor-list-item-link-inline elementor-align-start elementor-widget elementor-widget-icon-list"
                                                data-id="3efad997" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Da đều màu</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Nám mờ rõ</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Bác sỹ chuyên môn
                                                                cao</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-67074dff elementor-widget elementor-widget-button"
                                                data-id="67074dff" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                            href="tin-tuc/index.html">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Tìm hiểu thêm</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="2" role="group" aria-roledescription="slide"
                                aria-label="2 of 4">
                                <div class="elementor-element elementor-element-f960e77 e-flex e-con-boxed e-con e-child"
                                    data-id="f960e77" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-7343900f e-con-full e-flex e-con e-child"
                                            data-id="7343900f" data-element_type="container">
                                            <div class="elementor-element elementor-element-31e42eb2 elementor-widget elementor-widget-image"
                                                data-id="31e42eb2" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img data-lazyloaded="1"
                                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAwIiBoZWlnaHQ9Ijg1NiIgdmlld0JveD0iMCAwIDEyMDAgODU2Ij48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                        loading="lazy" decoding="async" width="1200" height="856"
                                                        data-src="https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.2-D-M.webp"
                                                        class="attachment-full size-full wp-image-5461"
                                                        alt="Mela bright review 02"
                                                        data-srcset="https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.2-D-M.webp 1200w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.2-D-M-300x214.webp 300w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.2-D-M-1024x730.webp 1024w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.2-D-M-768x548.webp 768w, https://gsccos.vn/wp-content/uploads/2025/08/Homepage-ss8.2-D-M-600x428.webp 600w"
                                                        data-sizes="(max-width: 1200px) 100vw, 1200px" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-46ca68ba e-con-full e-flex e-con e-child"
                                            data-id="46ca68ba" data-element_type="container">
                                            <div class="elementor-element elementor-element-554bde94 elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="554bde94" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="38"
                                                                height="32" viewBox="0 0 38 32" fill="none">
                                                                <path opacity="0.1"
                                                                    d="M0 16.001V32.001H16.2857V16.001H5.42861C5.42861 10.1195 10.2992 5.33434 16.2857 5.33434V0.000976562C7.30524 0.000976562 0 7.17805 0 16.001ZM38 5.33434V0.000976562C29.0195 0.000976562 21.7143 7.17805 21.7143 16.001V32.001H38V16.001H27.1429C27.1429 10.1195 32.0135 5.33434 38 5.33434Z"
                                                                    fill="#3ea8e2"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-742f718c elementor-widget elementor-widget-heading"
                                                data-id="742f718c" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Không
                                                        bong tróc, da vẫn sáng và mịn</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5091d663 elementor-widget elementor-widget-heading"
                                                data-id="5091d663" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Da mình
                                                        nhạy cảm, từng bị kích ứng khi dùng serum dưỡng trắng trước đây.
                                                        Nhưng với Perfect Mela Bright, mình hoàn toàn yên tâm vì không
                                                        bị đỏ
                                                        rát hay bong tróc. Quan trọng nhất là nền da được phục hồi rõ
                                                        rệt.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5984a5cd elementor-widget elementor-widget-heading"
                                                data-id="5984a5cd" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Chị Hà</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7a86e92d elementor-icon-list--layout-inline elementor-list-item-link-inline elementor-align-start elementor-widget elementor-widget-icon-list"
                                                data-id="7a86e92d" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Không bong
                                                                tróc</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Sáng mịn tự
                                                                nhiên</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Da nhạy cảm</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-51644af9 elementor-widget elementor-widget-button"
                                                data-id="51644af9" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                            href="tin-tuc/index.html">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Tìm hiểu thêm</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="3" role="group" aria-roledescription="slide"
                                aria-label="3 of 4">
                                <div class="elementor-element elementor-element-4f1fa3f0 e-flex e-con-boxed e-con e-child"
                                    data-id="4f1fa3f0" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-471fcb81 e-con-full e-flex e-con e-child"
                                            data-id="471fcb81" data-element_type="container">
                                            <div class="elementor-element elementor-element-757043e5 elementor-widget elementor-widget-image"
                                                data-id="757043e5" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img data-lazyloaded="1"
                                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4NzgiIGhlaWdodD0iNjI2IiB2aWV3Qm94PSIwIDAgODc4IDYyNiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                        loading="lazy" decoding="async" width="878" height="626"
                                                        data-src="{{ asset('../images/banner/perfect-viet-thao.webp') }}"
                                                        class="attachment-full size-full wp-image-5462" alt="Perfect"
                                                        data-srcset="{{ asset('../images/banner/perfect-viet-thao.webp') }} 878w,{{ asset('../images/banner/perfect-viet-thao.webp') }} 300w,{{ asset('../images/banner/perfect-viet-thao.webp') }} 768w, {{ asset('../images/banner/perfect-viet-thao.webp') }}1 600w"
                                                        data-sizes="(max-width: 878px) 100vw, 878px" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-64db8d55 e-con-full e-flex e-con e-child"
                                            data-id="64db8d55" data-element_type="container">
                                            <div class="elementor-element elementor-element-79081c0c elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="79081c0c" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="38"
                                                                height="32" viewBox="0 0 38 32" fill="none">
                                                                <path opacity="0.1"
                                                                    d="M0 16.001V32.001H16.2857V16.001H5.42861C5.42861 10.1195 10.2992 5.33434 16.2857 5.33434V0.000976562C7.30524 0.000976562 0 7.17805 0 16.001ZM38 5.33434V0.000976562C29.0195 0.000976562 21.7143 7.17805 21.7143 16.001V32.001H38V16.001H27.1429C27.1429 10.1195 32.0135 5.33434 38 5.33434Z"
                                                                    fill="#3ea8e2"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-558e8061 elementor-widget elementor-widget-heading"
                                                data-id="558e8061" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Đội ngũ
                                                        tận tâm, hỗ trợ chuyên nghiệp.</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7a0914e6 elementor-widget elementor-widget-heading"
                                                data-id="7a0914e6" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Nhãn hàng
                                                        được mong chờ nhất mang đến liệu trình chăm sóc da cá nhân hoá
                                                        cho từng làn da, xử lý tốt mọi vấn đề da</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1d5d88bf elementor-widget elementor-widget-heading"
                                                data-id="1d5d88bf" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Viet Thao
                                                        Spa</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1e7fc87 elementor-icon-list--layout-inline elementor-list-item-link-inline elementor-align-start elementor-widget elementor-widget-icon-list"
                                                data-id="1e7fc87" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Vô cùng hài
                                                                lòng</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">2 năm đồng
                                                                hành</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a2e457b elementor-widget elementor-widget-button"
                                                data-id="a2e457b" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                            href="tin-tuc/index.html">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Tìm hiểu thêm</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="4" role="group" aria-roledescription="slide"
                                aria-label="4 of 4">
                                <div class="elementor-element elementor-element-1df3463d e-flex e-con-boxed e-con e-child"
                                    data-id="1df3463d" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-3c9ee7a2 e-con-full e-flex e-con e-child"
                                            data-id="3c9ee7a2" data-element_type="container">
                                            <div class="elementor-element elementor-element-4ffcd0a6 elementor-widget elementor-widget-image"
                                                data-id="4ffcd0a6" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img data-lazyloaded="1"
                                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4NzgiIGhlaWdodD0iNjI2IiB2aWV3Qm94PSIwIDAgODc4IDYyNiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                        loading="lazy" decoding="async" width="878" height="626"
                                                        data-src="https://gsccos.vn/wp-content/uploads/2025/08/image8-wp.webp"
                                                        class="attachment-full size-full wp-image-5463" alt="Perfect"
                                                        data-srcset="https://gsccos.vn/wp-content/uploads/2025/08/image8-wp.webp 878w, https://gsccos.vn/wp-content/uploads/2025/08/image8-wp-300x214.webp 300w, https://gsccos.vn/wp-content/uploads/2025/08/image8-wp-768x548.webp 768w, https://gsccos.vn/wp-content/uploads/2025/08/image8-wp-600x428.webp 600w"
                                                        data-sizes="(max-width: 878px) 100vw, 878px" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-15244cfd e-con-full e-flex e-con e-child"
                                            data-id="15244cfd" data-element_type="container">
                                            <div class="elementor-element elementor-element-38013bbf elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="38013bbf" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="38"
                                                                height="32" viewBox="0 0 38 32" fill="none">
                                                                <path opacity="0.1"
                                                                    d="M0 16.001V32.001H16.2857V16.001H5.42861C5.42861 10.1195 10.2992 5.33434 16.2857 5.33434V0.000976562C7.30524 0.000976562 0 7.17805 0 16.001ZM38 5.33434V0.000976562C29.0195 0.000976562 21.7143 7.17805 21.7143 16.001V32.001H38V16.001H27.1429C27.1429 10.1195 32.0135 5.33434 38 5.33434Z"
                                                                    fill="#3ea8e2"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-58314963 elementor-widget elementor-widget-heading"
                                                data-id="58314963" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Thương
                                                        hiệu dược mỹ phẩm chính hãng.</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1227910f elementor-widget elementor-widget-heading"
                                                data-id="1227910f" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Khách bên
                                                        mình phản hồi rất tốt sau khi trải nghiệm liệu trình của
                                                        Perfect.
                                                        Quy trình chuyển giao rõ ràng, đội ngũ hỗ trợ nhanh và chuyên
                                                        nghiệp.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-428ef8 elementor-widget elementor-widget-heading"
                                                data-id="428ef8" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Tâm Spa
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-601f3fa9 elementor-icon-list--layout-inline elementor-list-item-link-inline elementor-align-start elementor-widget elementor-widget-icon-list"
                                                data-id="601f3fa9" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Vô cùng hài
                                                                lòng</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item elementor-inline-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g opacity="0.6">
                                                                        <path
                                                                            d="M9.18405 12.0658C8.97659 12.2572 8.65694 12.2572 8.44948 12.0658L6.29939 10.0823C6.07951 9.87943 6.0657 9.53675 6.26854 9.31687C6.47138 9.09699 6.81407 9.08317 7.03395 9.28602L8.81676 10.9307L12.9661 7.10285C13.1859 6.9 13.5286 6.91381 13.7315 7.13369C13.9343 7.35357 13.9205 7.69626 13.7006 7.8991L9.18405 12.0658Z"
                                                                            fill="#252525"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10 18.876C5.09848 18.876 1.125 14.9025 1.125 10.001C1.125 5.09946 5.09848 1.12598 10 1.12598C14.9015 1.12598 18.875 5.09946 18.875 10.001C18.875 14.9025 14.9015 18.876 10 18.876ZM2.20833 10.001C2.20833 14.3042 5.69679 17.7926 10 17.7926C14.3032 17.7926 17.7917 14.3042 17.7917 10.001C17.7917 5.69776 14.3032 2.20931 10 2.20931C5.69679 2.20931 2.20833 5.69776 2.20833 10.001Z"
                                                                            fill="#252525"></path>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">2 năm đồng
                                                                hành</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e1b42ac elementor-widget elementor-widget-button"
                                                data-id="e1b42ac" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                            href="tin-tuc/index.html">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Tìm hiểu thêm</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0"
                        aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path
                                d="M3.20623 12.4083L3.20687 12.409L6.88083 16.1832C7.15607 16.4659 7.60126 16.4649 7.87523 16.1807C8.14917 15.8966 8.14811 15.437 7.87287 15.1543L5.40617 12.6203L20.2969 12.6203C20.6852 12.6203 21 12.2954 21 11.8945C21 11.4937 20.6852 11.1687 20.2969 11.1687L5.40621 11.1687L7.87284 8.63479C8.14808 8.35201 8.14913 7.89247 7.87519 7.60835C7.60122 7.32416 7.156 7.32318 6.8808 7.60588L3.20683 11.3801L3.2062 11.3808C2.93082 11.6645 2.9317 12.1255 3.20623 12.4083Z"
                                fill="#1E1E1E"></path>
                        </svg>
                    </div>
                    <div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0"
                        aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path
                                d="M20.7938 12.3808L20.7931 12.3801L17.1192 8.60588C16.8439 8.32315 16.3987 8.3242 16.1248 8.60835C15.8508 8.89247 15.8519 9.35201 16.1271 9.63479L18.5938 12.1687H3.70312C3.31479 12.1687 3 12.4937 3 12.8945C3 13.2954 3.31479 13.6203 3.70312 13.6203H18.5938L16.1272 16.1543C15.8519 16.437 15.8509 16.8966 16.1248 17.1807C16.3988 17.4649 16.844 17.4659 17.1192 17.1832L20.7932 13.409L20.7938 13.4083C21.0692 13.1246 21.0683 12.6635 20.7938 12.3808Z"
                                fill="#1E1E1E"></path>
                        </svg>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection