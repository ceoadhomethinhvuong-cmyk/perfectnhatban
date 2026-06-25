@extends('client.layouts.app')

@section('seo_title', 'Tin tức chăm sóc da và sản phẩm PERFECT Nhật Bản')
@section('meta_description', 'Cập nhật tin tức, kiến thức chăm sóc da, xu hướng làm đẹp và thông tin sản phẩm từ PERFECT Nhật Bản.')

@section('title', 'Tin Tức')

@section('content')
<link rel='stylesheet' id='elementor-post-983-css' href='{{ asset("wp-content/uploads/elementor/css/post-9837071.css?ver=1772538381") }}' media='all' />
<style>
    .elementor-983 #ctgS2 > .e-con-inner {
        align-items: flex-start;
        gap: 48px;
    }

    .elementor-983 #filterCtg {
        --gap: 28px 0 !important;
        --row-gap: 28px !important;
        width: 360px !important;
        flex: 0 0 360px !important;
        padding-right: 0 !important;
    }

    .elementor-983 #filterCtg .search_btn_modal .elementor-button {
        display: flex !important;
        align-items: center;
        width: 100%;
        min-height: 64px;
        padding: 0 20px !important;
        background-color: #fff !important;
        border: 1px solid rgba(37, 37, 37, 0.14) !important;
        border-radius: 0 !important;
        box-shadow: none !important;
        color: rgba(37, 37, 37, 0.55) !important;
        text-decoration: none !important;
    }

    .elementor-983 #filterCtg .search_btn_modal .elementor-button-content-wrapper {
        display: flex;
        align-items: center;
        gap: 12px !important;
        justify-content: flex-start !important;
    }

    .elementor-983 #filterCtg .search_btn_modal .elementor-button-text {
        color: rgba(37, 37, 37, 0.55) !important;
        font-size: 18px;
        font-weight: 400;
        line-height: 24px;
    }

    .elementor-983 #filterCtg .elementor-widget-n-accordion {
        width: 100%;
    }

    .elementor-983 #filterCtg .e-n-accordion {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .elementor-983 #filterCtg .e-n-accordion-item {
        border-bottom: 1px solid rgba(37, 37, 37, 0.1);
    }

    .elementor-983 #filterCtg .e-n-accordion-item-title {
        min-height: 54px;
        padding: 0 4px !important;
        border: 0 !important;
        display: flex !important;
        align-items: center;
        justify-content: space-between;
        background: transparent !important;
        list-style: none;
    }

    .elementor-983 #filterCtg .e-n-accordion-item-title::-webkit-details-marker {
        display: none;
    }

    .elementor-983 #filterCtg .e-n-accordion-item-title-text {
        color: #1e1e1e;
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
    }

    .elementor-983 #filterCtg .e-n-accordion-item-title-icon svg {
        width: 16px;
        height: 16px;
    }

    .elementor-983 #filterCtg .e-n-accordion-item[open] .e-n-accordion-item-title-icon .e-closed,
    .elementor-983 #filterCtg .e-n-accordion-item:not([open]) .e-n-accordion-item-title-icon .e-opened {
        display: none !important;
    }

    .elementor-983 #filterCtg .e-n-accordion-item[open] .e-n-accordion-item-title-icon .e-opened,
    .elementor-983 #filterCtg .e-n-accordion-item:not([open]) .e-n-accordion-item-title-icon .e-closed {
        display: inline-flex !important;
    }

    .elementor-983 #filterCtg .e-filter {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
        padding: 14px 0 20px;
    }

    .elementor-983 #filterCtg .e-filter .e-filter-item {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        padding: 0 !important;
        background: transparent !important;
        border: 0 !important;
        color: rgba(37, 37, 37, 0.62) !important;
        font-family: "Manrope", Sans-serif;
        font-size: 16px !important;
        font-weight: 400 !important;
        line-height: 24px !important;
        text-align: left;
        box-shadow: none !important;
        text-decoration: none !important;
    }

    .elementor-983 #filterCtg .e-filter .e-filter-item::before {
        content: "" !important;
        width: 18px;
        height: 18px;
        flex: 0 0 18px;
        padding: 0 !important;
        border: 2px solid rgba(37, 37, 37, 0.24);
        border-radius: 4px;
        background: #fff;
        position: static !important;
    }

    .elementor-983 #filterCtg .e-filter .e-filter-item[aria-pressed="true"] {
        color: #1e1e1e !important;
    }

    .elementor-983 #filterCtg .e-filter .e-filter-item[aria-pressed="true"]::before {
        border-color: #3ea8e2;
        background-color: #3ea8e2;
        box-shadow: inset 0 0 0 3px #fff;
    }

    .elementor-983 #filterCtg .e-filter .e-filter-item:hover,
    .elementor-983 #filterCtg .e-filter .e-filter-item:focus {
        color: #1e1e1e !important;
        outline: none;
    }

    .elementor-983 #filterCtg .e-n-accordion > .e-n-accordion-item:nth-of-type(2) {
        display: none !important;
    }

    .elementor-983 #filterCtg .news-filter-count {
        margin-left: auto;
        color: rgba(37, 37, 37, 0.42);
        font-size: 13px;
        font-weight: 600;
    }

    .elementor-983 #filterCtg .news-search-form {
        display: flex;
        align-items: center;
        width: 100%;
        min-height: 64px;
        padding: 0 18px;
        background: #fff;
        border: 1px solid rgba(37, 37, 37, 0.14);
        gap: 12px;
    }

    .elementor-983 #filterCtg .news-search-form input {
        border: 0;
        outline: 0;
        width: 100%;
        color: rgba(37, 37, 37, 0.72);
        font-size: 18px;
        background: transparent;
    }

    .elementor-983 #filterCtg .news-search-form button {
        border: 0;
        background: transparent;
        cursor: pointer;
        padding: 0;
    }

    .elementor-983 .elementor-element.elementor-element-18e9df4 {
        flex: 1 1 0 !important;
        min-width: 0;
    }

    @media (max-width: 1024px) {
        .elementor-983 #ctgS2 > .e-con-inner {
            gap: 0;
        }

        .elementor-983 #filterCtg {
            width: 100% !important;
            flex-basis: auto !important;
        }
    }
</style>

<main id="content" class="site-main post-983 page type-page status-publish has-post-thumbnail hentry">


    <div class="page-content">
        <div data-elementor-type="wp-page" data-elementor-id="983" class="elementor elementor-983" data-elementor-post-type="page">
            <div class="elementor-element elementor-element-e928e23 e-flex e-con-boxed e-con e-parent" data-id="e928e23" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-7af38c7 breadcrumb_main elementor-widget elementor-widget-heading" data-id="7af38c7" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default"><a href="../index.html">Trang chủ</a> &gt;
                                Tin tức</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2f34617 e-con-full e-flex e-con e-child" data-id="2f34617" data-element_type="container">
                        <div class="elementor-element elementor-element-f7cf1f4 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="f7cf1f4" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default">Tin tức nổi bật</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-92a1f09 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="92a1f09" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-heading-title elementor-size-default">Khám phá hành trình chăm sóc da với Perfect. Tại đây, bạn sẽ tìm thấy
                                    những bài viết từ chuyên gia, mẹo làm đẹp hàng ngày</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3f7f365 e-flex e-con-boxed e-con e-parent" data-id="3f7f365" data-element_type="container" id="ctgS2">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-c5e3c6f e-con-full e-flex e-con e-child" data-id="c5e3c6f" data-element_type="container" id="filterCtg">
                        <div class="elementor-element elementor-element-3e6f322 elementor-hidden-desktop elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3e6f322" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item">
                                        <a href="#elementor-action%3Aaction%3Doff_canvas%3Aopen%26settings%3DeyJpZCI6IjlhZDBmM2IiLCJkaXNwbGF5TW9kZSI6Im9wZW4ifQ%3D%3D">

                                            <!-- <span class="elementor-icon-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3183 6C14.4829 6 14.6408 6.0654 14.7572 6.18181C14.8736 6.29822 14.939 6.45611 14.939 6.62075V9.17325C14.939 9.33789 14.8736 9.49578 14.7572 9.61219C14.6408 9.7286 14.4829 9.794 14.3183 9.794C14.1536 9.794 13.9958 9.7286 13.8793 9.61219C13.7629 9.49578 13.6975 9.33789 13.6975 9.17325V8.4863H3.62075C3.45611 8.4863 3.29822 8.4209 3.18181 8.30448C3.0654 8.18807 3 8.03018 3 7.86555C3 7.70092 3.0654 7.54303 3.18181 7.42662C3.29822 7.3102 3.45611 7.2448 3.62075 7.2448H13.6975V6.62075C13.6975 6.45611 13.7629 6.29822 13.8793 6.18181C13.9958 6.0654 14.1536 6 14.3183 6ZM20.702 7.85893C20.7028 7.94045 20.6875 8.02132 20.657 8.09692C20.6265 8.17253 20.5814 8.24139 20.5243 8.29957C20.4672 8.35775 20.3992 8.40411 20.3242 8.43601C20.2492 8.4679 20.1686 8.48471 20.0871 8.48547L16.7483 8.51857C16.5837 8.52022 16.4251 8.4564 16.3075 8.34115C16.19 8.2259 16.123 8.06867 16.1213 7.90404C16.1197 7.7394 16.1835 7.58086 16.2988 7.46328C16.414 7.34571 16.5712 7.27873 16.7359 7.27708L20.0755 7.24398C20.157 7.24321 20.2379 7.25851 20.3135 7.289C20.3891 7.31949 20.4579 7.36458 20.5161 7.42168C20.5743 7.47879 20.6207 7.54679 20.6526 7.62182C20.6845 7.69684 20.7013 7.77741 20.702 7.85893ZM9.35644 10.0986C9.52107 10.0986 9.67896 10.164 9.79538 10.2804C9.91179 10.3968 9.97719 10.5547 9.97719 10.7193V13.2718C9.97719 13.4365 9.91179 13.5944 9.79538 13.7108C9.67896 13.8272 9.52107 13.8926 9.35644 13.8926C9.19181 13.8926 9.03392 13.8272 8.91751 13.7108C8.8011 13.5944 8.73569 13.4365 8.73569 13.2718V12.584H3.62075C3.45611 12.584 3.29822 12.5186 3.18181 12.4022C3.0654 12.2858 3 12.1279 3 11.9633C3 11.7987 3.0654 11.6408 3.18181 11.5244C3.29822 11.408 3.45611 11.3426 3.62075 11.3426H8.73569V10.7193C8.73569 10.5547 8.8011 10.3968 8.91751 10.2804C9.03392 10.164 9.19181 10.0986 9.35644 10.0986ZM11.1839 11.9625C11.1839 11.7978 11.2493 11.64 11.3657 11.5235C11.4821 11.4071 11.64 11.3417 11.8047 11.3417H20.0813C20.2459 11.3417 20.4038 11.4071 20.5202 11.5235C20.6366 11.64 20.702 11.7978 20.702 11.9625C20.702 12.1271 20.6366 12.285 20.5202 12.4014C20.4038 12.5178 20.2459 12.5832 20.0813 12.5832H11.8047C11.64 12.5832 11.4821 12.5178 11.3657 12.4014C11.2493 12.285 11.1839 12.1271 11.1839 11.9625ZM12.6456 15.0331C12.8102 15.0331 12.9681 15.0985 13.0845 15.2149C13.2009 15.3313 13.2663 15.4892 13.2663 15.6538V18.2072C13.2663 18.3718 13.2009 18.5297 13.0845 18.6461C12.9681 18.7625 12.8102 18.8279 12.6456 18.8279C12.4809 18.8279 12.323 18.7625 12.2066 18.6461C12.0902 18.5297 12.0248 18.3718 12.0248 18.2072V17.5194H3.91953C3.7549 17.5194 3.59701 17.454 3.4806 17.3376C3.36419 17.2212 3.29879 17.0633 3.29879 16.8987C3.29879 16.734 3.36419 16.5761 3.4806 16.4597C3.59701 16.3433 3.7549 16.2779 3.91953 16.2779H12.0248V15.6547C12.0248 15.49 12.0902 15.3322 12.2066 15.2157C12.323 15.0993 12.4809 15.0339 12.6456 15.0339V15.0331ZM21 16.8953C21.0005 16.9769 20.985 17.0578 20.9542 17.1334C20.9235 17.209 20.8782 17.2777 20.8208 17.3358C20.7635 17.3938 20.6952 17.44 20.62 17.4716C20.5448 17.5033 20.4641 17.5198 20.3826 17.5202L15.1062 17.5525C14.9416 17.5535 14.7833 17.489 14.6662 17.3733C14.5491 17.2576 14.4827 17.1001 14.4817 16.9355C14.4807 16.7708 14.5452 16.6126 14.6609 16.4955C14.7766 16.3783 14.9341 16.312 15.0988 16.311L20.3751 16.2779C20.4567 16.2774 20.5376 16.2929 20.6132 16.3236C20.6887 16.3544 20.7575 16.3997 20.8155 16.4571C20.8736 16.5144 20.9197 16.5826 20.9514 16.6578C20.983 16.733 20.9996 16.8138 21 16.8953Z" fill="#3ea8e2"></path>
                                                </svg> </span>
                                            <span class="elementor-icon-list-text">Hiển thị bộ lọc</span> -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9ad0f3b elementor-widget elementor-widget-off-canvas" data-id="9ad0f3b" data-element_type="widget" data-settings="{&quot;entrance_animation_mobile&quot;:&quot;fadeIn&quot;,&quot;prevent_scroll&quot;:&quot;yes&quot;}" data-widget_type="off-canvas.default">
                            <div class="elementor-widget-container">
                                <div id="off-canvas-9ad0f3b" class="e-off-canvas" role="dialog" aria-hidden="true" aria-label="Filter-block" aria-modal="true" inert="" data-delay-child-handlers="true">
                                    <div class="e-off-canvas__overlay"></div>
                                    <div class="e-off-canvas__main">
                                        <div class="e-off-canvas__content">
                                            <div class="elementor-element elementor-element-a6b7673 e-con-full e-flex e-con e-child" data-id="a6b7673" data-element_type="container">
                                                <div class="elementor-element elementor-element-9ae15c6 ctg_search_btn elementor-widget elementor-widget-search" data-id="9ae15c6" data-element_type="widget" data-settings="{&quot;live_results&quot;:&quot;yes&quot;,&quot;template_id&quot;:45,&quot;results_is_dropdown_width&quot;:&quot;widget_width&quot;,&quot;submit_trigger&quot;:&quot;click_submit&quot;,&quot;minimum_search_characters&quot;:3,&quot;pagination_type_options&quot;:&quot;none&quot;}" data-widget_type="search.default">
                                                    <div class="elementor-widget-container">
                                                        <search class="e-search hidden" role="search">
                                                            <form class="e-search-form" action="https://gsccos.vn/" method="get">


                                                                <label class="e-search-label" for="search-9ae15c6">
                                                                    <span class="elementor-screen-only">
                                                                        Search </span>
                                                                </label>

                                                                <div class="e-search-input-wrapper">
                                                                    <input id="search-9ae15c6" placeholder="Tìm kiếm..." class="e-search-input" type="search" name="s" value="" autocomplete="off" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-controls="results-9ae15c6" aria-haspopup="listbox">
                                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-times" viewBox="0 0 352 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                                                                    </svg>
                                                                </div>
                                                                <output id="results-9ae15c6" class="e-search-results-container hide-loader" aria-live="polite" aria-atomic="true" aria-label="Results for search" tabindex="0">
                                                                    <div class="e-search-results"></div>
                                                                    <div class="e-search-loader">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                                            <path fill-rule="evenodd" d="M14 .188c.587 0 1.063.475 1.063 1.062V5.5a1.063 1.063 0 0 1-2.126 0V1.25c0-.587.476-1.063 1.063-1.063ZM4.182 4.181a1.063 1.063 0 0 1 1.503 0L8.73 7.228A1.062 1.062 0 1 1 7.228 8.73L4.182 5.685a1.063 1.063 0 0 1 0-1.503Zm19.636 0a1.063 1.063 0 0 1 0 1.503L20.772 8.73a1.062 1.062 0 1 1-1.502-1.502l3.045-3.046a1.063 1.063 0 0 1 1.503 0ZM.188 14c0-.587.475-1.063 1.062-1.063H5.5a1.063 1.063 0 0 1 0 2.126H1.25A1.063 1.063 0 0 1 .187 14Zm21.25 0c0-.587.475-1.063 1.062-1.063h4.25a1.063 1.063 0 0 1 0 2.126H22.5A1.063 1.063 0 0 1 21.437 14ZM8.73 19.27a1.062 1.062 0 0 1 0 1.502l-3.045 3.046a1.063 1.063 0 0 1-1.503-1.503l3.046-3.046a1.063 1.063 0 0 1 1.502 0Zm10.54 0a1.063 1.063 0 0 1 1.502 0l3.046 3.045a1.063 1.063 0 0 1-1.503 1.503l-3.046-3.046a1.063 1.063 0 0 1 0-1.502ZM14 21.438c.587 0 1.063.475 1.063 1.062v4.25a1.063 1.063 0 0 1-2.126 0V22.5c0-.587.476-1.063 1.063-1.063Z" />
                                                                        </svg>
                                                                    </div>
                                                                </output>


                                                                <button class="e-search-submit  " type="submit" aria-label="Search">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path d="M17.5 17.5L22 22" stroke="#252525" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z" stroke="#252525" stroke-opacity="0.6" stroke-width="1.5" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </button>
                                                                <input type="hidden" name="e_search_props" value="9ae15c6-983">
                                                            </form>
                                                        </search>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cfc2293 elementor-widget elementor-widget-n-accordion" data-id="cfc2293" data-element_type="widget" data-settings="{&quot;max_items_expended&quot;:&quot;multiple&quot;,&quot;default_state&quot;:&quot;expanded&quot;,&quot;n_accordion_animation_duration&quot;:{&quot;unit&quot;:&quot;ms&quot;,&quot;size&quot;:400,&quot;sizes&quot;:[]}}" data-widget_type="nested-accordion.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="e-n-accordion" aria-label="Accordion. Open links with Enter or Space, close with Escape, and navigate with Arrow Keys">
                                                            <details id="e-n-accordion-item-2170" class="e-n-accordion-item" open>
                                                                <summary class="e-n-accordion-item-title" data-accordion-index="1" tabindex="0" aria-expanded="true" aria-controls="e-n-accordion-item-2170">
                                                                    <span class='e-n-accordion-item-title-header'>
                                                                        <div class="e-n-accordion-item-title-text"> Danh mục bài viết </div>
                                                                    </span>
                                                                    <span class='e-n-accordion-item-title-icon'>
                                                                        <span class='e-opened'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M17.3234 15.8059C17.5786 16.0739 17.9832 16.0633 18.225 15.7783C18.4675 15.494 18.4566 15.0452 18.2007 14.7757L12.1387 8.39462C12.0162 8.26556 11.8573 8.20034 11.6997 8.20034C11.5421 8.20034 11.3838 8.26556 11.2613 8.39462L5.19925 14.7757C4.94335 15.0451 4.93252 15.494 5.17499 15.7783C5.41747 16.0633 5.8214 16.0746 6.07665 15.8059L11.6997 9.88641L17.3234 15.8059Z" fill="#1E1E1E"></path>
                                                                            </svg></span>
                                                                        <span class='e-closed'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M6.67665 8.19406C6.4214 7.92607 6.01684 7.93668 5.77499 8.22171C5.53252 8.50605 5.54335 8.95483 5.79925 9.22428L11.8613 15.6054C11.9838 15.7344 12.1427 15.7997 12.3003 15.7997C12.4579 15.7997 12.6162 15.7344 12.7387 15.6054L18.8007 9.22428C19.0566 8.95486 19.0675 8.50605 18.825 8.22174C18.5825 7.93671 18.1786 7.92537 17.9234 8.19409L12.3003 14.1136L6.67665 8.19406Z" fill="#1E1E1E"></path>
                                                                            </svg></span>
                                                                    </span>

                                                                </summary>
                                                                <div role="region" aria-labelledby="e-n-accordion-item-2170" class="elementor-element elementor-element-537324a e-con-full e-flex e-con e-child" data-id="537324a" data-element_type="container">
                                                                    <div class="elementor-element elementor-element-fab642c elementor-widget elementor-widget-taxonomy-filter" data-id="fab642c" data-element_type="widget" data-settings="{&quot;selected_element&quot;:&quot;82c7ac7&quot;,&quot;taxonomy&quot;:&quot;category&quot;}" data-widget_type="taxonomy-filter.default">
                                                                        <div class="elementor-widget-container">
                                                                            @include('client.partials.news-category-filter')
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </details>
                                                            <details id="e-n-accordion-item-2171" class="e-n-accordion-item">
                                                                <summary class="e-n-accordion-item-title" data-accordion-index="2" tabindex="-1" aria-expanded="false" aria-controls="e-n-accordion-item-2171">
                                                                    <span class='e-n-accordion-item-title-header'>
                                                                        <div class="e-n-accordion-item-title-text"> Kiến thức da </div>
                                                                    </span>
                                                                    <span class='e-n-accordion-item-title-icon'>
                                                                        <span class='e-opened'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M17.3234 15.8059C17.5786 16.0739 17.9832 16.0633 18.225 15.7783C18.4675 15.494 18.4566 15.0452 18.2007 14.7757L12.1387 8.39462C12.0162 8.26556 11.8573 8.20034 11.6997 8.20034C11.5421 8.20034 11.3838 8.26556 11.2613 8.39462L5.19925 14.7757C4.94335 15.0451 4.93252 15.494 5.17499 15.7783C5.41747 16.0633 5.8214 16.0746 6.07665 15.8059L11.6997 9.88641L17.3234 15.8059Z" fill="#1E1E1E"></path>
                                                                            </svg></span>
                                                                        <span class='e-closed'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M6.67665 8.19406C6.4214 7.92607 6.01684 7.93668 5.77499 8.22171C5.53252 8.50605 5.54335 8.95483 5.79925 9.22428L11.8613 15.6054C11.9838 15.7344 12.1427 15.7997 12.3003 15.7997C12.4579 15.7997 12.6162 15.7344 12.7387 15.6054L18.8007 9.22428C19.0566 8.95486 19.0675 8.50605 18.825 8.22174C18.5825 7.93671 18.1786 7.92537 17.9234 8.19409L12.3003 14.1136L6.67665 8.19406Z" fill="#1E1E1E"></path>
                                                                            </svg></span>
                                                                    </span>

                                                                </summary>
                                                                <div role="region" aria-labelledby="e-n-accordion-item-2171" class="elementor-element elementor-element-05a2315 e-con-full e-flex e-con e-child" data-id="05a2315" data-element_type="container">
                                                                    <div class="elementor-element elementor-element-6d818f2 elementor-widget elementor-widget-taxonomy-filter" data-id="6d818f2" data-element_type="widget" data-settings="{&quot;selected_element&quot;:&quot;82c7ac7&quot;,&quot;taxonomy&quot;:&quot;post_tag&quot;}" data-widget_type="taxonomy-filter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <search class="e-filter" role="search" data-base-url="https://gsccos.vn/tin-tuc/" data-page-num="1">
                                                                                <button class="e-filter-item" data-filter="cham-soc-da" aria-pressed="false">Chăm sóc da</button>
                                                                                <button class="e-filter-item" data-filter="lam-dep-da" aria-pressed="false">Làm đẹp da</button>
                                                                                <button class="e-filter-item" data-filter="new" aria-pressed="false">New</button>
                                                                                <button class="e-filter-item" data-filter="san-pham-gsc" aria-pressed="false">Sản phẩm Perfect</button>

                                                                            </search>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </details>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7a3bb9a elementor-absolute elementor-view-default elementor-widget elementor-widget-icon" data-id="7a3bb9a" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-wrapper">
                                                            <a class="elementor-icon" href="#elementor-action%3Aaction%3Doff_canvas%3Aclose%26settings%3DeyJpZCI6IjlhZDBmM2IiLCJkaXNwbGF5TW9kZSI6ImNsb3NlIn0%3D">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                                    <path d="M0.342989 11.6575C0.196476 11.511 0.114166 11.3123 0.114166 11.1051C0.114166 10.8979 0.196476 10.6992 0.342989 10.5527L4.89454 6.00112L0.342104 1.44869C0.195591 1.30218 0.113281 1.10346 0.113281 0.896262C0.113282 0.689062 0.195592 0.490347 0.342104 0.343834C0.488617 0.197322 0.687331 0.115012 0.894531 0.115012C1.10173 0.115012 1.30045 0.197322 1.44696 0.343834L5.99939 4.89627L10.5518 0.343813C10.6984 0.1973 10.8971 0.11499 11.1043 0.11499C11.3115 0.11499 11.5102 0.1973 11.6567 0.343813C11.8032 0.490325 11.8855 0.68904 11.8855 0.89624C11.8855 1.10344 11.8032 1.30215 11.6567 1.44867L7.10424 6.00112L11.6558 10.5527C11.8023 10.6992 11.8846 10.8979 11.8846 11.1051C11.8846 11.3123 11.8023 11.511 11.6558 11.6575C11.5093 11.8041 11.3106 11.8864 11.1034 11.8864C10.8962 11.8864 10.6975 11.8041 10.551 11.6575L5.99939 7.10597L1.44784 11.6575C1.30133 11.804 1.10262 11.8863 0.895416 11.8863C0.688216 11.8863 0.489501 11.804 0.342989 11.6575Z" fill="#252525"></path>
                                                                </svg> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e6f1593 elementor-align-justify search_btn_modal elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button" data-id="e6f1593" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <form class="news-search-form" action="{{ route('tin-tuc') }}" method="get">
                                        @if(!empty($activeCategory))
                                            <input type="hidden" name="danh_muc" value="{{ $activeCategory }}">
                                        @endif
                                        <button type="submit" aria-label="Tìm kiếm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M17.5 17.5L22 22" stroke="#252525" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z" stroke="#252525" stroke-opacity="0.6" stroke-width="1.5" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                        <input type="search" name="s" value="{{ $search ?? '' }}" placeholder="Tìm kiếm...">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cd6c6eb elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-n-accordion" data-id="cd6c6eb" data-element_type="widget" data-settings="{&quot;max_items_expended&quot;:&quot;multiple&quot;,&quot;default_state&quot;:&quot;expanded&quot;,&quot;n_accordion_animation_duration&quot;:{&quot;unit&quot;:&quot;ms&quot;,&quot;size&quot;:400,&quot;sizes&quot;:[]}}" data-widget_type="nested-accordion.default">
                            <div class="elementor-widget-container">
                                <div class="e-n-accordion" aria-label="Accordion. Open links with Enter or Space, close with Escape, and navigate with Arrow Keys">
                                    <details id="e-n-accordion-item-2150" class="e-n-accordion-item" open>
                                        <summary class="e-n-accordion-item-title" data-accordion-index="1" tabindex="0" aria-expanded="true" aria-controls="e-n-accordion-item-2150">
                                            <span class='e-n-accordion-item-title-header'>
                                                <div class="e-n-accordion-item-title-text"> Danh mục bài viết </div>
                                            </span>
                                            <span class='e-n-accordion-item-title-icon'>
                                                <span class='e-opened'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M17.3234 15.8059C17.5786 16.0739 17.9832 16.0633 18.225 15.7783C18.4675 15.494 18.4566 15.0452 18.2007 14.7757L12.1387 8.39462C12.0162 8.26556 11.8573 8.20034 11.6997 8.20034C11.5421 8.20034 11.3838 8.26556 11.2613 8.39462L5.19925 14.7757C4.94335 15.0451 4.93252 15.494 5.17499 15.7783C5.41747 16.0633 5.8214 16.0746 6.07665 15.8059L11.6997 9.88641L17.3234 15.8059Z" fill="#1E1E1E"></path>
                                                    </svg></span>
                                                <span class='e-closed'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M6.67665 8.19406C6.4214 7.92607 6.01684 7.93668 5.77499 8.22171C5.53252 8.50605 5.54335 8.95483 5.79925 9.22428L11.8613 15.6054C11.9838 15.7344 12.1427 15.7997 12.3003 15.7997C12.4579 15.7997 12.6162 15.7344 12.7387 15.6054L18.8007 9.22428C19.0566 8.95486 19.0675 8.50605 18.825 8.22174C18.5825 7.93671 18.1786 7.92537 17.9234 8.19409L12.3003 14.1136L6.67665 8.19406Z" fill="#1E1E1E"></path>
                                                    </svg></span>
                                            </span>

                                        </summary>
                                        <div role="region" aria-labelledby="e-n-accordion-item-2150" class="elementor-element elementor-element-a407ca4 e-con-full e-flex e-con e-child" data-id="a407ca4" data-element_type="container">
                                            <div class="elementor-element elementor-element-982f5b4 elementor-widget elementor-widget-taxonomy-filter" data-id="982f5b4" data-element_type="widget" data-settings="{&quot;selected_element&quot;:&quot;82c7ac7&quot;,&quot;taxonomy&quot;:&quot;category&quot;}" data-widget_type="taxonomy-filter.default">
                                                <div class="elementor-widget-container">
                                                    @include('client.partials.news-category-filter')
                                                </div>
                                            </div>
                                        </div>
                                    </details>
                                    <details id="e-n-accordion-item-2151" class="e-n-accordion-item">
                                        <summary class="e-n-accordion-item-title" data-accordion-index="2" tabindex="-1" aria-expanded="false" aria-controls="e-n-accordion-item-2151">
                                            <span class='e-n-accordion-item-title-header'>
                                                <div class="e-n-accordion-item-title-text"> Kiến thức da </div>
                                            </span>
                                            <span class='e-n-accordion-item-title-icon'>
                                                <span class='e-opened'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M17.3234 15.8059C17.5786 16.0739 17.9832 16.0633 18.225 15.7783C18.4675 15.494 18.4566 15.0452 18.2007 14.7757L12.1387 8.39462C12.0162 8.26556 11.8573 8.20034 11.6997 8.20034C11.5421 8.20034 11.3838 8.26556 11.2613 8.39462L5.19925 14.7757C4.94335 15.0451 4.93252 15.494 5.17499 15.7783C5.41747 16.0633 5.8214 16.0746 6.07665 15.8059L11.6997 9.88641L17.3234 15.8059Z" fill="#1E1E1E"></path>
                                                    </svg></span>
                                                <span class='e-closed'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M6.67665 8.19406C6.4214 7.92607 6.01684 7.93668 5.77499 8.22171C5.53252 8.50605 5.54335 8.95483 5.79925 9.22428L11.8613 15.6054C11.9838 15.7344 12.1427 15.7997 12.3003 15.7997C12.4579 15.7997 12.6162 15.7344 12.7387 15.6054L18.8007 9.22428C19.0566 8.95486 19.0675 8.50605 18.825 8.22174C18.5825 7.93671 18.1786 7.92537 17.9234 8.19409L12.3003 14.1136L6.67665 8.19406Z" fill="#1E1E1E"></path>
                                                    </svg></span>
                                            </span>

                                        </summary>
                                        <div role="region" aria-labelledby="e-n-accordion-item-2151" class="elementor-element elementor-element-6d7aaf7 e-con-full e-flex e-con e-child" data-id="6d7aaf7" data-element_type="container">
                                            <div class="elementor-element elementor-element-a20efca elementor-widget elementor-widget-taxonomy-filter" data-id="a20efca" data-element_type="widget" data-settings="{&quot;selected_element&quot;:&quot;82c7ac7&quot;,&quot;taxonomy&quot;:&quot;post_tag&quot;}" data-widget_type="taxonomy-filter.default">
                                                <div class="elementor-widget-container">
                                                    <search class="e-filter" role="search" data-base-url="https://gsccos.vn/tin-tuc/" data-page-num="1">
                                                        <button class="e-filter-item" data-filter="cham-soc-da" aria-pressed="false">Chăm sóc da</button>
                                                        <button class="e-filter-item" data-filter="lam-dep-da" aria-pressed="false">Làm đẹp da</button>
                                                        <button class="e-filter-item" data-filter="new" aria-pressed="false">New</button>
                                                        <button class="e-filter-item" data-filter="san-pham-gsc" aria-pressed="false">Sản phẩm Perfect</button>

                                                    </search>
                                                </div>
                                            </div>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-18e9df4 e-con-full e-flex e-con e-child" data-id="18e9df4" data-element_type="container">
                        <div class="elementor-element elementor-element-82c7ac7 elementor-grid-1 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-loop-grid" data-id="82c7ac7" data-element_type="widget" data-settings="{&quot;template_id&quot;:&quot;45&quot;,&quot;columns&quot;:1,&quot;pagination_type&quot;:&quot;numbers_and_prev_next&quot;,&quot;row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;pagination_load_type&quot;:&quot;ajax&quot;,&quot;auto_scroll&quot;:&quot;yes&quot;,&quot;_skin&quot;:&quot;post&quot;,&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns_mobile&quot;:&quot;1&quot;,&quot;edit_handle_selector&quot;:&quot;[data-elementor-type=\&quot;loop-item\&quot;]&quot;,&quot;row_gap_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="loop-grid.post">
                            <div class="elementor-widget-container">
                                <div class="elementor-loop-container elementor-grid" role="list">
                                    <style id="loop-45">
                                        .elementor-45 .elementor-element.elementor-element-4823444 {
                                            --display: flex;
                                            --flex-direction: row;
                                            --container-widget-width: initial;
                                            --container-widget-height: 100%;
                                            --container-widget-flex-grow: 1;
                                            --container-widget-align-self: stretch;
                                            --flex-wrap-mobile: wrap;
                                            --gap: 0px 20px;
                                            --row-gap: 0px;
                                            --column-gap: 20px;
                                            --border-radius: 12px 12px 12px 12px;
                                            box-shadow: 3px 6px 44px 0px rgba(0, 0, 0, 0.15);
                                            --padding-top: 20px;
                                            --padding-bottom: 20px;
                                            --padding-left: 20px;
                                            --padding-right: 20px;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-4823444:not(.elementor-motion-effects-element-type-background),
                                        .elementor-45 .elementor-element.elementor-element-4823444>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                                            background-color: var(--e-global-color-secondary);
                                        }

                                        .elementor-widget-theme-post-featured-image .widget-image-caption {
                                            color: var(--e-global-color-text);
                                            font-family: var(--e-global-typography-text-font-family), Sans-serif;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-b1b3095 {
                                            width: initial;
                                            max-width: initial;
                                            text-align: start;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-b1b3095 .elementor-widget-container {
                                            aspect-ratio: 16 / 10;
                                            overflow: hidden;
                                            border-radius: 4px 4px 4px 4px;
                                            flex-shrink: 0;
                                            width: 340px;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-b1b3095 img {
                                            width: 100% !important;
                                            height: 100% !important;
                                            object-fit: cover;
                                            display: block;
                                            filter: brightness(100%) contrast(100%) saturate(85%) blur(0px) hue-rotate(0deg);
                                            transition: filter 0.3s, transform 0.3s;
                                            border-radius: 0;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-b1b3095:hover img {
                                            filter: brightness(100%) contrast(100%) saturate(100%) blur(0px) hue-rotate(0deg);
                                            transform: scale(1.03);
                                        }

                                        .elementor-45 .elementor-element.elementor-element-016be2c {
                                            --display: flex;
                                            --flex-direction: column;
                                            --container-widget-width: 100%;
                                            --container-widget-height: initial;
                                            --container-widget-flex-grow: 0;
                                            --container-widget-align-self: initial;
                                            --flex-wrap-mobile: wrap;
                                            --justify-content: space-between;
                                            --padding-top: 20px;
                                            --padding-bottom: 0px;
                                            --padding-left: 0px;
                                            --padding-right: 0px;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-1ff496f {
                                            --display: flex;
                                        }

                                        .elementor-widget-post-info .elementor-icon-list-item:not(:last-child):after {
                                            border-color: var(--e-global-color-text);
                                        }

                                        .elementor-widget-post-info .elementor-icon-list-icon i {
                                            color: var(--e-global-color-primary);
                                        }

                                        .elementor-widget-post-info .elementor-icon-list-icon svg {
                                            fill: var(--e-global-color-primary);
                                        }

                                        .elementor-widget-post-info .elementor-icon-list-text,
                                        .elementor-widget-post-info .elementor-icon-list-text a {
                                            color: var(--e-global-color-secondary);
                                        }

                                        .elementor-widget-post-info .elementor-icon-list-item {
                                            font-family: var(--e-global-typography-text-font-family), Sans-serif;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-772d81c>.elementor-widget-container {
                                            margin: 0px 0px 18px 0px;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-772d81c .elementor-icon-list-text,
                                        .elementor-45 .elementor-element.elementor-element-772d81c .elementor-icon-list-text a {
                                            color: #3ea8e299;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-772d81c .elementor-icon-list-item {
                                            font-family: "Manrope", Sans-serif;
                                            font-size: 13px;
                                            font-weight: 600;
                                            line-height: 16px;
                                        }

                                        .elementor-widget-theme-post-title .elementor-heading-title {
                                            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                                            font-size: var(--e-global-typography-primary-font-size);
                                            font-weight: var(--e-global-typography-primary-font-weight);
                                            color: var(--e-global-color-primary);
                                        }

                                        .elementor-45 .elementor-element.elementor-element-def5230>.elementor-widget-container {
                                            margin: 0px 0px 16px 0px;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-def5230 .elementor-heading-title {
                                            font-family: "Manrope", Sans-serif;
                                            font-size: 32px;
                                            font-weight: 600;
                                            line-height: 40px;
                                            color: #252525CC;
                                        }

                                        .elementor-widget-theme-post-excerpt .elementor-widget-container {
                                            font-family: var(--e-global-typography-text-font-family), Sans-serif;
                                            color: var(--e-global-color-text);
                                        }

                                        .elementor-45 .elementor-element.elementor-element-26e5014 .elementor-widget-container {
                                            font-family: "Manrope", Sans-serif;
                                            font-size: 16px;
                                            font-weight: 400;
                                            line-height: 22px;
                                            color: #252525B5;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-21260bc {
                                            --display: flex;
                                        }

                                        .elementor-widget-button .elementor-button {
                                            background-color: var(--e-global-color-accent);
                                            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-1b72fbc .elementor-button {
                                            background-color: #FFFFFF00;
                                            fill: var(--e-global-color-primary);
                                            color: var(--e-global-color-primary);
                                            transition-duration: 0.3s;
                                            border-style: solid;
                                            border-width: 1px 1px 1px 1px;
                                            border-color: #3ea8e266;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-1b72fbc .elementor-button:hover,
                                        .elementor-45 .elementor-element.elementor-element-1b72fbc .elementor-button:focus {
                                            background-color: var(--e-global-color-primary);
                                            color: var(--e-global-color-secondary);
                                            border-color: var(--e-global-color-primary);
                                        }

                                        .elementor-45 .elementor-element.elementor-element-1b72fbc {
                                            width: var(--container-widget-width, 140px);
                                            max-width: 140px;
                                            --container-widget-width: 140px;
                                            --container-widget-flex-grow: 0;
                                        }

                                        .elementor-45 .elementor-element.elementor-element-1b72fbc .elementor-button:hover svg,
                                        .elementor-45 .elementor-element.elementor-element-1b72fbc .elementor-button:focus svg {
                                            fill: var(--e-global-color-secondary);
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

                                            .elementor-45 .elementor-element.elementor-element-def5230 .elementor-heading-title {
                                                font-size: 24px;
                                                line-height: 27px;
                                            }
                                        }

                                        @media(max-width:767px) {
                                            .elementor-45 .elementor-element.elementor-element-4823444 {
                                                --padding-top: 24px;
                                                --padding-bottom: 24px;
                                                --padding-left: 20px;
                                                --padding-right: 20px;
                                            }

                                            .elementor-widget-theme-post-title .elementor-heading-title {
                                                font-size: var(--e-global-typography-primary-font-size);
                                            }

                                            .elementor-45 .elementor-element.elementor-element-def5230>.elementor-widget-container {
                                                margin: 0px 0px 10px 0px;
                                            }

                                            .elementor-45 .elementor-element.elementor-element-def5230 .elementor-heading-title {
                                                font-size: 18px;
                                                line-height: 26px;
                                                letter-spacing: -0.96px;
                                            }

                                            .elementor-45 .elementor-element.elementor-element-26e5014>.elementor-widget-container {
                                                margin: 0px 0px 15px 0px;
                                            }

                                            .elementor-45 .elementor-element.elementor-element-26e5014 .elementor-widget-container {
                                                font-size: 14px;
                                            }
                                        }

                                        /* Start custom CSS for button, class: .elementor-element-1b72fbc */
                                        .ctg_btn a {
                                            display: block;
                                        }

                                        /* End custom CSS */
                                    </style>
                                    @forelse($articles as $article)
                                    <div data-elementor-type="loop-item" data-elementor-id="45"
                                        class="elementor elementor-45 e-loop-item e-loop-item-{{ $article['id'] }} post-{{ $article['id'] }} post type-post status-publish format-standard has-post-thumbnail hentry category-{{ $article['danh_muc'] }}"
                                        data-elementor-post-type="elementor_library" data-custom-edit-handle="1">
                                        <div class="elementor-element elementor-element-4823444 e-con-full ctg_post e-flex e-con e-parent"
                                            data-id="4823444" data-element_type="container"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-element elementor-element-b1b3095 elementor-widget__width-initial elementor-widget elementor-widget-theme-post-featured-image elementor-widget-image"
                                                data-id="b1b3095" data-element_type="widget"
                                                data-widget_type="theme-post-featured-image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="/tin-tuc/{{ $article['slug'] }}">
                                                        @if(!empty($article['anh']))
                                                        <img loading="lazy" decoding="async" width="1200" height="750"
                                                            src="{{ $article['anh'] }}"
                                                            class="attachment-full size-full"
                                                            alt="{{ $article['tieu_de'] }}">
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-016be2c e-con-full e-flex e-con e-child"
                                                data-id="016be2c" data-element_type="container">
                                                <div class="elementor-element elementor-element-1ff496f e-con-full e-flex e-con e-child"
                                                    data-id="1ff496f" data-element_type="container">
                                                    <div class="elementor-element elementor-element-772d81c elementor-widget elementor-widget-post-info"
                                                        data-id="772d81c" data-element_type="widget"
                                                        data-widget_type="post-info.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-inline-items elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                                    <span class="elementor-icon-list-text elementor-post-info__item" style="color:#3ea8e299;font-size:13px;font-weight:600;">
                                                                        {{ date('d/m/Y', strtotime($article['ngay_dang'])) }}
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-def5230 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading"
                                                        data-id="def5230" data-element_type="widget"
                                                        data-widget_type="theme-post-title.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-default">
                                                                <a href="/tin-tuc/{{ $article['slug'] }}">{{ $article['tieu_de'] }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-26e5014 elementor-widget elementor-widget-theme-post-excerpt"
                                                        data-id="26e5014" data-element_type="widget"
                                                        data-widget_type="theme-post-excerpt.default">
                                                        <div class="elementor-widget-container">
                                                            {{ $article['tom_tat'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-21260bc e-con-full e-flex e-con e-child"
                                                    data-id="21260bc" data-element_type="container">
                                                    <div class="elementor-element elementor-element-1b72fbc elementor-widget__width-initial ctg_btn elementor-widget elementor-widget-button"
                                                        data-id="1b72fbc" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-sm" href="/tin-tuc/{{ $article['slug'] }}">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">Xem bài viết</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div style="padding:36px;border-radius:12px;background:#fff;box-shadow:0 12px 40px rgba(0,0,0,0.06);color:#666;">
                                        <h3 style="font-size:24px;color:#252525;margin:0 0 10px;">Chưa có bài viết phù hợp</h3>
                                        <p style="margin:0 0 18px;">Bạn thử đổi từ khóa tìm kiếm hoặc chọn danh mục khác.</p>
                                        <a href="{{ route('tin-tuc') }}" style="color:#3ea8e2;font-weight:600;text-decoration:none;">Xem tất cả bài viết</a>
                                    </div>
                                    @endforelse
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</main>
@endsection
