<!doctype html>
<html lang="vi" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Google tag (gtag.js) consent mode dataLayer added by Site Kit -->
    <script id="google_gtagjs-js-consent-mode-data-layer">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('consent', 'default', {
        "ad_personalization": "denied",
        "ad_storage": "denied",
        "ad_user_data": "denied",
        "analytics_storage": "denied",
        "functionality_storage": "denied",
        "security_storage": "denied",
        "personalization_storage": "denied",
        "region": ["AT", "BE", "BG", "CH", "CY", "CZ", "DE", "DK", "EE", "ES", "FI", "FR", "GB", "GR", "HR",
            "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MT", "NL", "NO", "PL", "PT", "RO", "SE", "SI",
            "SK"
        ],
        "wait_for_update": 500
    });
    window._googlesitekitConsentCategoryMap = {
        "statistics": ["analytics_storage"],
        "marketing": ["ad_storage", "ad_user_data", "ad_personalization"],
        "functional": ["functionality_storage", "security_storage"],
        "preferences": ["personalization_storage"]
    };
    window._googlesitekitConsents = {
        "ad_personalization": "denied",
        "ad_storage": "denied",
        "ad_user_data": "denied",
        "analytics_storage": "denied",
        "functionality_storage": "denied",
        "security_storage": "denied",
        "personalization_storage": "denied",
        "region": ["AT", "BE", "BG", "CH", "CY", "CZ", "DE", "DK", "EE", "ES", "FI", "FR", "GB", "GR", "HR", "HU",
            "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MT", "NL", "NO", "PL", "PT", "RO", "SE", "SI", "SK"
        ],
        "wait_for_update": 500
    };
    </script>
    <!-- End Google tag (gtag.js) consent mode dataLayer added by Site Kit -->

    @php
    $seoBaseUrl = rtrim(config('app.url') ?: 'https://perfectnhatban.com', '/');
    if (preg_match('/localhost|127\.0\.0\.1/i', $seoBaseUrl)) {
    $seoBaseUrl = 'https://perfectnhatban.com';
    }

    $seoPath = request()->getPathInfo();
    $seoCanonical = trim($__env->yieldContent('canonical')) ?: ($seoPath === '/' ? $seoBaseUrl : $seoBaseUrl .
    $seoPath);
    $seoTitle = trim($__env->yieldContent('seo_title')) ?: (trim($__env->yieldContent('title')) ?: 'PERFECT Nhật Bản');
    $seoFullTitle = str_contains($seoTitle, 'PERFECT') ? $seoTitle : $seoTitle . ' | PERFECT Nhật Bản';
    $seoDescription = trim($__env->yieldContent('meta_description')) ?: 'PERFECT Nhật Bản cung cấp sản phẩm chăm sóc da,
    viên uống và giải pháp làm đẹp chính hãng, minh bạch nguồn gốc, tối ưu hiệu quả chăm sóc từ bên trong.';
    $seoImage = trim($__env->yieldContent('og_image')) ?: $seoBaseUrl . '/images/banner/banner2.webp';
    $seoType = trim($__env->yieldContent('og_type')) ?: 'website';
    $organizationId = $seoBaseUrl . '/#organization';
    $websiteId = $seoBaseUrl . '/#website';
    $webpageId = $seoCanonical . '#webpage';
    $seoSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
    [
    '@type' => 'Organization',
    '@id' => $organizationId,
    'name' => 'PERFECT Nhật Bản',
    'url' => $seoBaseUrl,
    'logo' => [
    '@type' => 'ImageObject',
    'url' => $seoBaseUrl . '/images/logo/flaicon.png',
    ],
    'address' => [
    '@type' => 'PostalAddress',
    'streetAddress' => '48 Tố Hữu',
    'addressLocality' => 'Hà Nội',
    'addressCountry' => 'VN',
    ],
    ],
    [
    '@type' => 'WebSite',
    '@id' => $websiteId,
    'url' => $seoBaseUrl,
    'name' => 'PERFECT Nhật Bản',
    'publisher' => ['@id' => $organizationId],
    'inLanguage' => 'vi-VN',
    'potentialAction' => [
    '@type' => 'SearchAction',
    'target' => $seoBaseUrl . '/san-pham?s={search_term_string}',
    'query-input' => 'required name=search_term_string',
    ],
    ],
    [
    '@type' => 'WebPage',
    '@id' => $webpageId,
    'url' => $seoCanonical,
    'name' => $seoFullTitle,
    'description' => $seoDescription,
    'isPartOf' => ['@id' => $websiteId],
    'about' => ['@id' => $organizationId],
    'inLanguage' => 'vi-VN',
    'primaryImageOfPage' => [
    '@type' => 'ImageObject',
    'url' => $seoImage,
    ],
    ],
    ],
    ];
    @endphp
    <title>{{ $seoFullTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="{{ $seoCanonical }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="{{ $seoType }}" />
    <meta property="og:title" content="{{ $seoFullTitle }}" />
    <meta property="og:description" content="{{ $seoDescription }}" />
    <meta property="og:url" content="{{ $seoCanonical }}" />
    <meta property="og:site_name" content="PERFECT Nhật Bản" />
    <meta property="og:image" content="{{ $seoImage }}" />
    <meta property="og:image:secure_url" content="{{ $seoImage }}" />
    <meta property="og:image:alt" content="{{ $seoFullTitle }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $seoFullTitle }}" />
    <meta name="twitter:description" content="{{ $seoDescription }}" />
    <meta name="twitter:image" content="{{ $seoImage }}" />
    <script type="application/ld+json">
{!! json_encode($seoSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- Legacy cloned Rank Math meta is disabled; Laravel SEO tags above are canonical.

    <!-- Tối ưu hóa công cụ tìm kiếm bởi Rank Math PRO - https://rankmath.com/ -->
    <title>@yield('title', "Trang chủ")</title>
    <meta name="description"
        content="Thương hiệu PERFECT tiên phong chăm sóc da từ bên trong, ứng dụng công nghệ &amp; giải pháp tự nhiên, minh bạch, hiệu quả, bền vững." />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PERFECT Chính Hãng" />
    <meta property="og:description"
        content="Thương hiệu PERFECT tiên phong chăm sóc da từ bên trong, ứng dụng công nghệ &amp; giải pháp tự nhiên, minh bạch, hiệu quả, bền vững." />
    <meta property="og:url" content="https://perfectnhatban.com/" />
    <meta property="og:site_name" content="PERFECT Chính Hãng" />
    <meta property="og:updated_time" content="2026-05-06T16:04:29+07:00" />
    <meta property="og:image"
        content="http://perfectnhatban.com/images/banner/banner2.webp" />
    <meta property="og:image:secure_url"
        content="http://perfectnhatban.com/images/banner/banner2.webp" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="417" />
    <meta property="og:image:alt" content="Bộ chăm sóc da cơ bản PERFECT" />
    <meta property="og:image:type" content="image/webp" />
    <meta property="article:published_time" content="2025-03-15T00:52:47+07:00" />
    <meta property="article:modified_time" content="2026-05-06T16:04:29+07:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="PERFECT Chính Hãng" />
    <meta name="twitter:description"
        content="Thương hiệu PERFECT tiên phong chăm sóc da từ bên trong, ứng dụng công nghệ &amp; giải pháp tự nhiên, minh bạch, hiệu quả, bền vững." />
    <meta name="twitter:image"
        content="http://perfectnhatban.com/images/banner/banner2.webp" />
    <meta name="twitter:label1" content="Được viết bởi" />
    <meta name="twitter:data1" content="Trinh Duc" />
    <meta name="twitter:label2" content="Thời gian để đọc" />
    <meta name="twitter:data2" content="7 phút" />
    <script type="application/ld+json" class="rank-math-schema-pro">
    {
        "@context": "https://schema.org",
        "@graph": [{
            "@type": "Place",
            "@id": "https://perfectnhatban/#",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "20.9980153",
                "longitude": "105.7918633"
            },
            "hasMap": "https://www.google.com/maps/search/?api=1&amp;query=20.9980153,105.7918633",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "48 T\u1ed1 H\u1eefu"
            }
        }, {
            "@type": "Organization",
            "@id": "http://perfectnhatban.com/#organization",
            "name": "PERFECT Ch\u00ednh H\u00e3ng",
            "url": "http://perfectnhatban.com",
            "sameAs": ["https://www.facebook.com/Perfect.globalshieldcosmetic"],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "48 T\u1ed1 H\u1eefu"
            },
            "logo": {
                "@type": "ImageObject",
                "@id": "http://perfectnhatban.com/#logo",
                "url": "http://perfectnhatban.com/images/banner/banner2.webp",
                "contentUrl": "http://perfectnhatban.com/images/banner/banner2.webp",
                "caption": "PERFECT Ch\u00ednh H\u00e3ng",
                "inLanguage": "vi",
                "width": "500",
                "height": "500"
            },
            "location": {
                "@id": "http://perfectnhatban.com/#place"
            }
        }, {
            "@type": "WebSite",
            "@id": "http://perfectnhatban.com/#website",
            "url": "http://perfectnhatban.com",
            "name": "PERFECT Ch\u00ednh H\u00e3ng",
            "alternateName": "PERFECT Ch\u00ednh H\u00e3ng",
            "publisher": {
                "@id": "http://perfectnhatban.com/#organization"
            },
            "inLanguage": "vi",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "http://perfectnhatban.com/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }, {
            "@type": "ImageObject",
            "@id": "http://perfectnhatban.com/images/banner/banner2.webp",
            "url": "http://perfectnhatban.com/images/banner/banner2.webp",
            "width": "2110",
            "height": "1100",
            "caption": "B\u1ed9 ch\u0103m s\u00f3c da c\u01a1 b\u1ea3n PERFECT",
            "inLanguage": "vi"
        }, {
            "@type": "WebPage",
            "@id": "http://perfectnhatban.com/#webpage",
            "url": "http://perfectnhatban.com/",
            "name": "PERFECT Ch\u00ednh H\u00e3ng",
            "datePublished": "2025-03-15T00:52:47+07:00",
            "dateModified": "2026-05-06T16:04:29+07:00",
            "about": {
                "@id": "http://perfectnhatban.com/#organization"
            },
            "isPartOf": {
                "@id": "http://perfectnhatban.com/#website"
            },
            "primaryImageOfPage": {
                "@id": "http://perfectnhatban.com/images/banner/banner2.webp"
            },
            "inLanguage": "vi"
        }, {
            "@type": "Person",
            "@id": "http://perfectnhatban.com/#author",
            "name": "Trinh Duc",
            "image": {
                "@type": "ImageObject",
                "@id": "http://perfectnhatban.com/images/banner/banner2.webp",
                "url": "http://perfectnhatban.com/images/banner/banner2.webp",
                "caption": "Trinh Duc",
                "inLanguage": "vi"
            },
            "sameAs": ["http://perfectnhatban.com/"],
            "worksFor": {
                "@id": "http://perfectnhatban.com/#organization"
            }
        }, {
            "headline": "PERFECT Ch\u00ednh H\u00e3ng",
            "description": "Th\u01b0\u01a1ng hi\u1ec7u PERFECT ti\u00ean phong ch\u0103m s\u00f3c da t\u1eeb b\u00ean trong, \u1ee9ng d\u1ee5ng c\u00f4ng ngh\u1ec7 &amp; gi\u1ea3i ph\u00e1p t\u1ef1 nhi\u00ean, minh b\u1ea1ch, hi\u1ec7u qu\u1ea3, b\u1ec1n v\u1eefng.",
            "datePublished": "2025-03-15T00:52:47+07:00",
            "dateModified": "2026-05-06T16:04:29+07:00",
            "keywords": "d\u01b0\u1ee3c m\u1ef9 ph\u1ea9m,PERFECT,PERFECT Chính Hãng",
            "image": {
                "@id": "http://perfectnhatban.com/images/banner/banner2.webp"
            },
            "author": {
                "@id": "http://perfectnhatban.com/#author",
                "name": "Trinh Duc"
            },
            "@type": "Article",
            "name": "PERFECT Ch\u00ednh H\u00e3ng",
            "@id": "http://perfectnhatban.com/#schema-3285",
            "isPartOf": {
                "@id": "http://perfectnhatban.com/#webpage"
            },
            "publisher": {
                "@id": "http://perfectnhatban.com/#organization"
            },
            "inLanguage": "vi",
            "mainEntityOfPage": {
                "@id": "http://perfectnhatban.com/#webpage"
            }
        }]
    }
    </script>
    --}}
    <meta name="google-site-verification" content="Of0Oix-bSngaQOXMMtj1rIl0TSDBawoKAXsvIbA9ghE" />
    <!-- /Plugin SEO WordPress Rank Math -->

    <link rel='dns-prefetch' href='http://cdn.jsdelivr.net/' />
    <link rel='dns-prefetch' href='http://www.googletagmanager.com/' />
    <link rel="alternate" type="application/rss+xml" title="Dòng thông tin PERFECT Chính Hãng &raquo;"
        href="{{ route('tin-tuc') }}" />
    <link rel="alternate" type="application/rss+xml" title="PERFECT Chính Hãng &raquo; Dòng bình luận"
        href="{{ route('tin-tuc') }}" />
    <link rel="alternate" title="oNhúng (JSON)" type="application/json+oembed" href="{{ url()->current() }}" />
    <link rel="alternate" title="oNhúng (XML)" type="text/xml+oembed" href="{{ url()->current() }}" />
    <style id='wp-img-auto-sizes-contain-inline-css'>
    img:is([sizes=auto i], [sizes^="auto,"i]) {
        contain-intrinsic-size: 3000px 1500px
    }

    /*# sourceURL=wp-img-auto-sizes-contain-inline-css */
    </style>

    <style id='classic-theme-styles-inline-css'>
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }

    /*# sourceURL=/wp-includes/css/classic-themes.min.css */
    </style>
    <style id='safe-svg-svg-icon-style-inline-css'>
    .safe-svg-cover {
        text-align: center
    }

    .safe-svg-cover .safe-svg-inside {
        display: inline-block;
        max-width: 100%
    }

    .safe-svg-cover svg {
        fill: currentColor;
        height: 100%;
        max-height: 100%;
        max-width: 100%;
        width: 100%
    }
    </style>
    <style id='global-styles-inline-css'>
    :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgb(6, 147, 227) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgb(252, 185, 0) 0%, rgb(255, 105, 0) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgb(255, 105, 0) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--font-family--inter: "Inter", sans-serif;
        --wp--preset--font-family--cardo: Cardo;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);
        --wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }

    body .is-layout-flex {
        display: flex;
    }

    .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    .is-layout-flex> :is(*, div) {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    .is-layout-grid> :is(*, div) {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-term-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-term-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :root :where(.wp-block-pullquote) {
        font-size: 1.5em;
        line-height: 1.6;
    }

    /*# sourceURL=global-styles-inline-css */
    </style>
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='{{ asset("wp-content/plugins/woocommerce/assets/css/woocommerce-layout716b.css?ver=9.7.2") }}'
        media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{ asset("wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen716b.css?ver=9.7.2") }}'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='{{ asset("wp-content/plugins/woocommerce/assets/css/woocommerce716b.css?ver=9.7.2") }}' media='all' />
    <style id='woocommerce-inline-inline-css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }

    /*# sourceURL=woocommerce-inline-inline-css */
    </style>
    <style id='ez-toc-exclude-toggle-css-inline-css'>
    #ez-toc-container input[type="checkbox"]:checked+nav,
    #ez-toc-widget-container input[type="checkbox"]:checked+nav {
        opacity: 0;
        max-height: 0;
        border: none;
        display: none;
    }

    /*# sourceURL=ez-toc-exclude-toggle-css-inline-css */
    </style>
    <link rel='stylesheet' id='brands-styles-css'
        href='{{ asset("wp-content/plugins/woocommerce/assets/css/brands716b.css?ver=9.7.2") }}' media='all' />
    <!-- <link rel='stylesheet' id='swiper-css-css' href='../cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.css' media='all' /> -->
    <link rel='stylesheet' id='tda-shortcode-product-style-css'
        href='{{ asset("wp-content/themes/hello-elementor-child/css/short-code-productd016.css?ver=1754468433") }}'
        media='all' />
    <link rel='stylesheet' id='custom-search-style-css'
        href='{{ asset("wp-content/themes/hello-elementor-child/css/custom-search-styled4d0.css?ver=6.9.3") }}'
        media='all' />
    <link rel='stylesheet' id='tda-search-style-css'
        href='{{ asset("wp-content/themes/hello-elementor-child/css/tda-search.css") }}' media='all' />
    <link rel='stylesheet' id='hello-elementor-css'
        href='{{ asset("wp-content/themes/hello-elementor/style.minb12b.css?ver=3.1.1") }}' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='{{ asset("wp-content/themes/hello-elementor/theme.minb12b.css?ver=3.1.1") }}' media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css'
        href='{{ asset("wp-content/themes/hello-elementor/header-footer.minb12b.css?ver=3.1.1") }}' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ asset("wp-content/uploads/elementor/css/custom-frontend.min7580.css?ver=1772511860") }}' media='all' />
    <link rel='stylesheet' id='elementor-post-7-css'
        href='{{ asset("wp-content/uploads/elementor/css/post-72652.css?ver=1772511861") }}' media='all' />
    <link rel='stylesheet' id='widget-off-canvas-css'
        href='{{ asset("wp-content/plugins/elementor-pro/assets/css/widget-off-canvas.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href='{{ asset("wp-content/plugins/elementor/assets/css/widget-image.min46ff.css?ver=3.34.3") }}' media='all' />
    <link rel='stylesheet' id='widget-heading-css'
        href='{{ asset("wp-content/plugins/elementor/assets/css/widget-heading.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='widget-icon-list-css'
        href='{{ asset("wp-content/uploads/elementor/css/custom-widget-icon-list.min7580.css?ver=1772511860") }}'
        media='all' />
    <link rel='stylesheet' id='widget-loop-common-css'
        href='{{ asset("wp-content/plugins/elementor-pro/assets/css/widget-loop-common.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='widget-loop-grid-css'
        href='{{ asset("wp-content/uploads/elementor/css/custom-pro-widget-loop-grid.min7580.css?ver=1772511860") }}'
        media='all' />
    <link rel='stylesheet' id='widget-mega-menu-css'
        href='{{ asset("wp-content/uploads/elementor/css/custom-pro-widget-mega-menu.min7580.css?ver=1772511860") }}'
        media='all' />
    <link rel='stylesheet' id='e-sticky-css'
        href='{{ asset("wp-content/plugins/elementor-pro/assets/css/modules/sticky.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='widget-social-icons-css'
        href='{{ asset("wp-content/plugins/elementor/assets/css/widget-social-icons.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='e-apple-webkit-css'
        href='{{ asset("wp-content/uploads/elementor/css/custom-apple-webkit.min7580.css?ver=1772511860") }}'
        media='all' />
    <link rel='stylesheet' id='e-popup-css'
        href='{{ asset("wp-content/plugins/elementor-pro/assets/css/conditionals/popup.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='widget-form-css'
        href='{{ asset("wp-content/plugins/elementor-pro/assets/css/widget-form.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='widget-spacer-css'
        href='{{ asset("wp-content/plugins/elementor/assets/css/widget-spacer.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='{{ asset("wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5") }}'
        media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href='{{ asset("wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='widget-nested-carousel-css'
        href='{{ asset("wp-content/plugins/elementor-pro/assets/css/widget-nested-carousel.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='widget-icon-box-css'
        href='{{ asset("wp-content/uploads/elementor/css/custom-widget-icon-box.min7580.css?ver=1772511860") }}'
        media='all' />
    <link rel='stylesheet' id='e-animation-shrink-css'
        href='{{ asset("wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-shrink.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='widget-video-css'
        href='{{ asset("wp-content/plugins/elementor/assets/css/widget-video.min46ff.css?ver=3.34.3") }}' media='all' />
    <link rel='stylesheet' id='widget-loop-carousel-css'
        href='{{ asset("wp-content/plugins/elementor-pro/assets/css/widget-loop-carousel.min46ff.css?ver=3.34.3") }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-93-css'
        href='{{ asset("wp-content/uploads/elementor/css/post-9384b7.css?ver=1778058275") }}' media='all' />
    <link rel='stylesheet' id='elementor-post-15-css'
        href='{{ asset("wp-content/uploads/elementor/css/post-15b1c4.css?ver=1772511863") }}' media='all' />
    <link rel='stylesheet' id='elementor-post-65-css'
        href='{{ asset("wp-content/uploads/elementor/css/post-6536fc.css?ver=1778058794") }}' media='all' />
    <link rel='stylesheet' id='elementor-post-5222-css'
        href='{{ asset("wp-content/uploads/elementor/css/post-5222b680.css?ver=1772512181") }}' media='all' />
    <link rel='stylesheet' id='elementor-post-8932-css'
        href='{{ asset("wp-content/uploads/elementor/css/post-893204cc.css?ver=1776353806") }}' media='all' />
    <link rel='stylesheet' id='elementor-post-5213-css'
        href='{{ asset("wp-content/uploads/elementor/css/post-521304cc.css?ver=1776353806") }}' media='all' />
    <link rel='stylesheet' id='elementor-gf-lexend-deca-css'
        href='https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap'
        media='all' />
    <script src="{{ asset("wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1") }}" id="jquery-core-js"></script>
    <script src="{{ asset("wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1") }}" id="jquery-migrate-js">
    </script>
    <script
        src="{{ asset("wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1") }}"
        id="jquery-numerator-js"></script>
    <script
        src="{{ asset("wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min448b.js?ver=2.7.0-wc.9.7.2") }}"
        id="jquery-blockui-js" data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-js-extra">
    var wc_add_to_cart_params = {
        "ajax_url": "/wp-admin/admin-ajax.php",
        "wc_ajax_url": "/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
        "cart_url": "https://perfectnhatban.com",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    //# sourceURL=wc-add-to-cart-js-extra
    </script>
    <script src="{{ asset("wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min716b.js?ver=9.7.2") }}"
        id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
    <script
        src="{{ asset("wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.mind63b.js?ver=2.1.4-wc.9.7.2") }}"
        id="js-cookie-js" data-wp-strategy="defer"></script>

    <!-- Đoạn mã Google tag (gtag.js) được thêm bởi Site Kit -->
    <!-- Đoạn mã Google Analytics được thêm bởi Site Kit -->
    <script src="https://www.googletagmanager.com/gtag/js?id=GT-WK2DQ3M3" id="google_gtagjs-js" async></script>
    <script id="google_gtagjs-js-after">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("set", "linker", {
        "domains": ["perfectnhatban.com"]
    });
    gtag("js", new Date());
    gtag("set", "developer_id.dZTNiMT", true);
    gtag("config", "GT-WK2DQ3M3", {
        "googlesitekit_post_type": "page"
    });
    window._googlesitekit = window._googlesitekit || {};
    window._googlesitekit.throttledEvents = [];
    window._googlesitekit.gtagEvent = (name, data) => {
        var key = JSON.stringify({
            name,
            data
        });
        if (!!window._googlesitekit.throttledEvents[key]) {
            return;
        }
        window._googlesitekit.throttledEvents[key] = true;
        setTimeout(() => {
            delete window._googlesitekit.throttledEvents[key];
        }, 5);
        gtag("event", name, {
            ...data,
            event_source: "site-kit"
        });
    };
    //# sourceURL=google_gtagjs-js-after
    </script>
    <link rel="https://api.w.org/" href="{{ url('/') }}" />
    <link rel="alternate" title="JSON" type="application/json" href="{{ url()->current() }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ url('/') }}" />
    <meta name="generator" content="WordPress 6.9" />
    <link rel='shortlink' href='{{ url()->current() }}' />
    <meta name="generator" content="Site Kit by Google 1.171.0" />
    <meta name="google-site-verification" content="RfIVexkhrSm-P_1tHRMv2C4CaYY3-yAknPQqZivw_-E" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17013793975"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-17013793975');
    </script>
    <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "sel4g1ajkp");
    </script>
    <!-- Meta Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1328671232608035');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1328671232608035&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '3288153221339281');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=3288153221339281&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    {{-- Legacy duplicate WebSite schema disabled.
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "PERFECT Chính Hãng",
        "alternateName": ["PERFECT", "PERFECT Official", "PERFECT Chính Hãng"],
        "url": "http://perfectnhatban.com/"
    }
    </script>
    --}}
    <noscript>
        <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.34.3; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
        background-image: none !important;
    }

    @media screen and (max-height: 1024px) {

        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }

    @media screen and (max-height: 640px) {

        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }
    </style>
    <style>
    .removed_link,
    a.removed_link {
        text-decoration: line-through;
    }

    .elementor-15 .elementor-element.elementor-element-c20186c {
        position: absolute !important;
        inset: 0 auto auto 0 !important;
        width: 0 !important;
        height: 0 !important;
        min-height: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: visible !important;
    }

    .elementor-15 .elementor-element.elementor-element-c20186c > .e-con-inner,
    .elementor-15 .elementor-element.elementor-element-bd76a4d,
    .elementor-15 .elementor-element.elementor-element-bd76a4d > .elementor-widget-container {
        width: 0 !important;
        height: 0 !important;
        min-height: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: visible !important;
    }

    .elementor.elementor-15.elementor-location-header {
        margin-top: 0 !important;
        padding-top: 0 !important;
    }

    #hdMain>.e-con-inner {
        width: 100% !important;
        max-width: 1380px !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }

    #header_hd {
        height: 68px !important;
        min-height: 68px !important;
    }

    #hdMain .elementor-element-07df7aa>.elementor-widget-container {
        display: flex !important;
        align-items: center !important;
        height: 68px !important;
        margin-left: 6px !important;
        margin-right: 10px !important;
    }

    #hdMain .elementor-element-07df7aa {
        align-self: center !important;
        flex: 0 0 auto !important;
        width: auto !important;
        min-width: 150px !important;
    }

    #hdMain .elementor-element-07df7aa a {
        display: inline-flex !important;
        align-items: center !important;
        line-height: 0 !important;
    }

    #hdMain .elementor-element-07df7aa img {
        width: clamp(118px, 8vw, 146px) !important;
        max-width: none !important;
        height: auto !important;
        max-height: 56px !important;
        object-fit: contain !important;
    }

    #cs-shop-button {
        background-color: #3ea8e2 !important;
        border-color: #3ea8e2 !important;
    }

    #cs-mega-menu .cs-child-menu-container {
        display: grid !important;
        grid-template-columns: minmax(160px, 200px) repeat(3, minmax(0, 1fr));
        grid-template-rows: repeat(3, auto);
        grid-auto-rows: auto;
        align-items: start !important;
        align-content: start !important;
        justify-content: stretch !important;
        gap: 6px 16px !important;
        width: 100% !important;
        max-width: 1100px !important;
        min-height: auto !important;
    }

    #cs-mega-menu .cs-child-menu-container>.elementor-element:nth-child(-n+3) {
        grid-column: 1;
        display: block !important;
        height: auto !important;
        min-height: 0 !important;
        padding: 0 !important;
        align-self: start !important;
        width: 100% !important;
    }

    #cs-mega-menu .cs-child-menu-container>.elementor-element:nth-child(4) {
        grid-column: 2;
        grid-row: 1 / span 3;
    }

    #cs-mega-menu .cs-child-menu-container>.elementor-element:nth-child(5) {
        grid-column: 3;
        grid-row: 1 / span 3;
    }

    #cs-mega-menu .cs-child-menu-container>.elementor-element:nth-child(6) {
        grid-column: 4;
        grid-row: 1 / span 3;
    }

    #cs-mega-menu .cs-child-menu-container>.elementor-element:nth-child(n+4) {
        display: flex !important;
        width: 100% !important;
        min-width: 0 !important;
    }

    /* Card sản phẩm trong mega menu */
    #cs-mega-menu .cs-child-menu-container>.elementor-element:nth-child(n+4) .elementor-widget-container {
        width: 100% !important;
        overflow: hidden !important;
    }

    #cs-mega-menu .cs-child-menu-container .cs-menu-heading .elementor-heading-title {
        margin: 0 !important;
        line-height: 1.2 !important;
    }

    #cs-mega-menu .cs-child-menu-container .cs-menu-heading,
    #cs-mega-menu .cs-child-menu-container .cs-menu-heading>.elementor-widget-container {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    #cs-mega-menu .cs-child-menu-container .cs-menu-heading a {
        display: block;
        color: #111827 !important;
        font-size: 17px !important;
        line-height: 1.25 !important;
        font-weight: 700 !important;
        padding: 3px 0 !important;
        text-transform: uppercase;
        text-decoration: none !important;
        transition: color 0.2s ease, transform 0.2s ease;
    }

    #cs-mega-menu .cs-child-menu-container>.elementor-element:nth-child(-n+3) .cs-menu-heading a {
        padding-top: 3px !important;
        padding-bottom: 3px !important;
    }

    #cs-mega-menu .cs-child-menu-container .cs-menu-heading a:hover,
    #cs-mega-menu .cs-child-menu-container .cs-menu-heading a:focus {
        color: #3ea8e2 !important;
        transform: translateX(4px);
    }

    /* Product card trong mega menu: cân đối, đồng nhất */
    #cs-mega-menu .cs-product-loop {
        border-radius: 12px !important;
        overflow: hidden !important;
        background: #fff !important;
        box-shadow: 0 2px 12px rgba(0,0,0,0.08) !important;
        width: 100% !important;
        min-width: 0 !important;
        display: flex !important;
        flex-direction: column !important;
    }
    #cs-mega-menu .cs-product-loop .e-con-inner {
        display: flex !important;
        flex-direction: column !important;
        width: 100% !important;
        padding: 0 !important;
    }
    /* Ảnh sản phẩm: cùng chiều cao */
    #cs-mega-menu .cs-product-loop .elementor-widget-theme-post-featured-image,
    #cs-mega-menu .cs-product-loop .elementor-widget-image {
        width: 100% !important;
        margin: 0 !important;
    }
    #cs-mega-menu .cs-product-loop .elementor-widget-theme-post-featured-image img,
    #cs-mega-menu .cs-product-loop .elementor-widget-image img {
        width: 100% !important;
        height: 190px !important;
        object-fit: contain !important;
        background: #f0f7fd !important;
        display: block !important;
    }
    /* Tên sản phẩm: 2 dòng cố định */
    #cs-mega-menu .cs-product-loop .elementor-heading-title {
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
        font-size: 13px !important;
        line-height: 1.4 !important;
        min-height: 2.8em !important;
        margin: 8px 12px 4px !important;
        color: #111827 !important;
        font-weight: 600 !important;
    }
    #cs-mega-menu .cs-product-loop .elementor-heading-title a {
        color: inherit !important;
        text-decoration: none !important;
    }
    /* Subtitle: 1 dòng */
    #cs-mega-menu .cs-product-loop .elementor-widget-text-editor,
    #cs-mega-menu .cs-product-loop .elementor-widget-theme-post-excerpt {
        margin: 0 12px !important;
        overflow: hidden !important;
    }
    #cs-mega-menu .cs-product-loop .elementor-widget-text-editor p,
    #cs-mega-menu .cs-product-loop .elementor-widget-theme-post-excerpt p {
        white-space: nowrap !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        font-size: 12px !important;
        color: #6b7280 !important;
        margin: 0 !important;
    }
    /* Link Khám phá ngay */
    #cs-mega-menu .cs-product-loop .elementor-widget-button,
    #cs-mega-menu .cs-product-loop .elementor-widget-text-editor + *,
    #cs-mega-menu .cs-product-loop a.tda-page-category-discover-btn {
        margin: 8px 12px 12px !important;
        display: block !important;
    }
    /* Ẩn product card & loop grid trong off-canvas mobile menu */
    #off-canvas-bd76a4d .e-loop-item,
    #off-canvas-bd76a4d .elementor-widget-loop-grid,
    #off-canvas-bd76a4d .products-swiper-container,
    #off-canvas-bd76a4d .products-grid-container,
    #off-canvas-bd76a4d .product-container {
        display: none !important;
    }

    #cs-mega-menu .e-n-menu-title .e-n-menu-title-container,
    #cs-mega-menu .e-n-menu-title .e-n-menu-title-text,
    #cs-mega-menu .e-n-menu-title .e-n-menu-dropdown-icon svg path {
        transition: color 0.25s ease, fill 0.25s ease;
    }

    #cs-mega-menu .e-n-menu-title:hover .e-n-menu-title-text,
    #cs-mega-menu .e-n-menu-title:focus-within .e-n-menu-title-text,
    #cs-mega-menu .e-n-menu-title.e-current .e-n-menu-title-text {
        color: #3ea8e2 !important;
    }

    /* Mega menu: ẩn inner container khi chưa có e-active, chỉ hiện khi hover */
    #cs-mega-menu .e-n-menu-content > .e-con:not(.e-active) {
        display: none !important;
    }
    #cs-mega-menu .e-n-menu-item:hover .e-n-menu-content > .e-con {
        display: flex !important;
    }

    /* Dropdown wrapper: limit width và không overflow */
    #cs-mega-menu .e-n-menu-content > .e-con > .e-con-inner {
        max-width: 1200px !important;
        width: 100% !important;
        overflow: hidden !important;
    }

    #cs-mega-menu .e-n-menu-title:hover .e-n-menu-dropdown-icon svg path,
    #cs-mega-menu .e-n-menu-title:focus-within .e-n-menu-dropdown-icon svg path,
    #cs-mega-menu .e-n-menu-title.e-current .e-n-menu-dropdown-icon svg path {
        fill: #3ea8e2 !important;
    }

    @media (max-width: 1024px) {
        #hdMain .elementor-element-07df7aa {
            min-width: 126px !important;
        }

        #hdMain .elementor-element-07df7aa img {
            width: 120px !important;
            max-height: 52px !important;
        }

        #cs-mega-menu .cs-child-menu-container {
            display: grid !important;
            grid-template-columns: minmax(150px, 190px) repeat(3, minmax(140px, 1fr));
            gap: 6px 14px !important;
            width: 100% !important;
        }
    }

    @media (max-width: 767px) {
        #hdMain .elementor-element-07df7aa {
            min-width: 112px !important;
        }

        #hdMain .elementor-element-07df7aa img {
            width: 108px !important;
            max-height: 48px !important;
        }

        #cs-mega-menu .cs-child-menu-container {
            grid-template-columns: 1fr !important;
        }

        #cs-mega-menu .cs-child-menu-container>.elementor-element {
            grid-column: 1 !important;
            grid-row: auto !important;
        }
    }

    :root {
        --perfect-accent: #3ea8e2;
        --perfect-accent-dark: #1d91cf;
        --perfect-accent-soft: #eaf7fd;
        --perfect-text: #161b22;
        --perfect-muted: #6f7782;
        --perfect-border: rgba(22, 27, 34, 0.1);
        --perfect-shadow: 0 18px 45px rgba(30, 74, 104, 0.12);
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background-color: #fbfdff;
        color: var(--perfect-text);
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    }

    a,
    button,
    .elementor-button,
    .elementor-icon,
    .product-container,
    .product-image,
    .service-container,
    .inner-product-item,
    .search-card,
    .product-discover-now,
    .product-category-link {
        transition-duration: 0.25s;
        transition-property: color, background-color, border-color, box-shadow, opacity, transform, filter;
        transition-timing-function: ease;
    }

    #hdMain {
        border-bottom: 1px solid rgba(62, 168, 226, 0.12) !important;
        box-shadow: 0 8px 28px rgba(20, 53, 74, 0.05);
        backdrop-filter: saturate(135%) blur(14px);
        -webkit-backdrop-filter: saturate(135%) blur(14px);
    }

    #hdMain .e-n-menu-title-container:hover,
    #hdMain .e-n-menu-title-container:focus {
        color: var(--perfect-accent) !important;
    }

    .elementor-button,
    #cs-shop-button,
    .product-discover-now,
    .product-category-link,
    .tda-page-category-discover-btn,
    .tda-page-category-cat-link {
        will-change: transform;
    }

    .elementor-button:hover,
    #cs-shop-button:hover,
    .tda-page-category-discover-btn:hover,
    .tda-page-category-cat-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 26px rgba(62, 168, 226, 0.22);
    }

    .product-discover-now:hover,
    .product-category-link:hover {
        color: var(--perfect-accent-dark) !important;
        border-color: var(--perfect-accent-dark) !important;
    }

    .product-container:hover,
    .cs-product-loop:hover,
    .service-container:hover,
    .inner-product-item:hover {
        transform: translateY(-3px);
    }

    .product-image-container,
    .cs-product-loop .elementor-widget-theme-post-featured-image,
    .service-image-box,
    .inner-product-img-box {
        background: linear-gradient(180deg, rgba(62, 168, 226, 0.08), rgba(255, 255, 255, 0.35));
    }

    .product-image,
    .service-image,
    .inner-product-img,
    .cs-product-loop img {
        will-change: transform;
    }

    .product-container:hover .product-image,
    .service-container:hover .service-image,
    .inner-product-item:hover .inner-product-img,
    .cs-product-loop:hover img {
        filter: saturate(1.04) contrast(1.02);
    }

    .product-tag-container,
    .elementor-7008 .product-tag-container {
        background-color: var(--perfect-accent) !important;
        border: 1px solid rgba(255, 255, 255, 0.42);
        box-shadow: 0 6px 14px rgba(20, 92, 132, 0.2);
    }

    .product-tag,
    .elementor-7008 .product-tag {
        color: #fff !important;
    }

    .elementor-form .elementor-field-textual,
    .elementor-form select,
    .elementor-form textarea {
        transition: border-color 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
    }

    .elementor-form .elementor-field-textual:focus,
    .elementor-form select:focus,
    .elementor-form textarea:focus {
        border-color: var(--perfect-accent) !important;
        box-shadow: 0 0 0 3px rgba(62, 168, 226, 0.16) !important;
        outline: none !important;
    }

    .perfect-motion-ready main .perfect-reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.65s ease, transform 0.65s ease;
        transition-delay: var(--perfect-reveal-delay, 0ms);
    }

    .perfect-motion-ready main .perfect-reveal.perfect-visible {
        opacity: 1;
        transform: translateY(0);
    }

    @media (prefers-reduced-motion: reduce) {
        html {
            scroll-behavior: auto;
        }

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            scroll-behavior: auto !important;
            transition-duration: 0.01ms !important;
        }

        .perfect-motion-ready main .perfect-reveal {
            opacity: 1;
            transform: none;
        }
    }

    .perfect-sheets-form-status {
        width: 100%;
        margin: 10px 0 0;
        font-size: 14px;
        line-height: 20px;
        font-weight: 600;
        text-align: center;
    }

    .perfect-sheets-form-status[data-type="success"] {
        color: #3ea8e2 !important;
    }

    .perfect-sheets-form-status[data-type="error"] {
        color: #c62828;
    }

    .perfect-sheets-form-status[data-type="loading"] {
        color: rgba(37, 37, 37, 0.72);
    }

    .elementor-form .elementor-button.is-loading {
        opacity: 0.72;
        cursor: wait;
    }

    .floating-contact-buttons {
        --gap: 12px 0 !important;
        --row-gap: 12px !important;
        --column-gap: 0 !important;
        min-height: auto !important;
        height: auto !important;
        width: 64px !important;
        padding: 22px 8px 24px !important;
        overflow: hidden !important;
        background-color: #3ea8e2 !important;
        background-image: none !important;
        border-radius: 32px 0 0 32px !important;
        align-items: center !important;
        top: 50% !important;
        z-index: 100 !important;
    }

    .hieudm_progress-wrap,
    .hieudm_progress-wrap.hieudm_active-progress {
        right: 86px !important;
        z-index: 120 !important;
    }

    .floating-contact-buttons .floating-contact-item {
        align-items: center;
        justify-content: center;
        gap: 6px 0 !important;
        min-height: auto !important;
        width: 100% !important;
    }

    .floating-contact-buttons .floating-contact-item img {
        display: block;
        width: 40px !important;
        height: 40px !important;
        object-fit: contain;
    }

    .floating-contact-buttons .floating-contact-tiktok img {
        width: 36px !important;
        height: 36px !important;
        border-radius: 50%;
        background: #fff;
    }

    .floating-contact-buttons .floating-contact-item .elementor-heading-title {
        color: #fff !important;
        font-family: "Lexend Deca", sans-serif !important;
        font-size: 10px !important;
        font-weight: 600 !important;
        line-height: 13px !important;
        margin: 0 !important;
    }

    @media (max-width: 767px) {
        .elementor-65 .elementor-element.elementor-element-9c10a0d.floating-contact-buttons {
            min-height: auto !important;
            height: auto !important;
            width: 64px !important;
            padding: 22px 8px 24px !important;
            top: 50% !important;
        }

        .hieudm_progress-wrap,
        .hieudm_progress-wrap.hieudm_active-progress {
            right: 78px !important;
        }
    }
    </style>
    <script id="google_gtagjs" src="https://www.googletagmanager.com/gtag/js?id=G-77H1HK1HEL" async></script>
    <script id="google_gtagjs-inline">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-77H1HK1HEL', {
        'anonymize_ip': true
    });
    </script>

    <!-- Đoạn mã Google Tag Manager được thêm bởi Site Kit -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KLK3VS9C');
    </script>

    <!-- Kết thúc đoạn mã Google Tag Manager được thêm bởi Site Kit -->
    <style class='wp-fonts-local'>
    @font-face {
        font-family: Inter;
        font-style: normal;
        font-weight: 300 900;
        font-display: fallback;
        src: url('wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt%2cwght.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: Cardo;
        font-style: normal;
        font-weight: 400;
        font-display: fallback;
        src: url('wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
    }
    </style>
    <link rel="icon" href="{{asset('images/logo/flaicon.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('images/logo/flaicon.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('images/logo/flaicon.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('images/logo/flaicon.png')}}" />
    <style id="wp-custom-css">
    :root {
        --perfect-serif-font: "Lexend Deca", sans-serif;
        --e-global-typography-primary-font-family: var(--perfect-serif-font);
        --e-global-typography-secondary-font-family: var(--perfect-serif-font);
        --e-global-typography-text-font-family: var(--perfect-serif-font);
        --e-global-typography-accent-font-family: var(--perfect-serif-font);
    }

    html,
    body {
        overflow-x: hidden;
        font-family: var(--perfect-serif-font) !important;
        font-weight: 400;
        line-height: 1.62;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }

    body :where(h1, h2, h3, h4, h5, h6, p, a, span, li, button, input, textarea, select, label, small, strong, b, em, figcaption, blockquote, th, td),
    .elementor-heading-title,
    .elementor-button,
    .elementor-widget-text-editor,
    .elementor-icon-list-text,
    .elementor-counter-title,
    .elementor-counter-number-wrapper {
        font-family: var(--perfect-serif-font) !important;
    }

    body :where(h1, h2, h3, h4, h5, h6, .elementor-heading-title) {
        font-weight: 600 !important;
        line-height: 1.28 !important;
        letter-spacing: 0 !important;
    }

    .elementor-button,
    .elementor-button-text,
    .elementor-button-content-wrapper {
        line-height: 1.18 !important;
        align-items: center !important;
    }

    .elementor-button {
        display: inline-flex !important;
        justify-content: center !important;
        font-weight: 600 !important;
    }

    #ftMain,
    #ftMain :where(p, a, span, li, .elementor-heading-title) {
        line-height: 1.48 !important;
    }

    #ftMain .elementor-heading-title {
        font-weight: 600 !important;
    }

    @media (max-width: 1320px) {
        .tda-clinical-stats {
            margin-top: 0;
        }
    }

    .hieudm_progress-wrap.hieudm_active-progress {
        bottom: 127px;
    }

    html {
        font-family: var(--perfect-serif-font) !important;
    }

    @media screen and (max-width: 1199px) and (min-width: 769px) {

        .tda-breadcrumb,
        div.tda-cat-detail-container,
        [class^="tda-container-"],
        .tda-product-section,
        .tda-clinical-section,
        .tda-ingredient-section,
        .tda-faqs,
        .tda-news-section {
            max-width: 94%;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media screen and (max-width: 1366px) and (min-width: 1200px) {

        .tda-breadcrumb,
        div.tda-cat-detail-container,
        [class^="tda-container-"],
        .tda-product-section,
        .tda-clinical-section,
        .tda-ingredient-section,
        .tda-faqs,
        .tda-news-section {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media screen and (max-width: 1440px) and (min-width: 1367px) {

        .tda-breadcrumb,
        div.tda-cat-detail-container,
        [class^="tda-container-"],
        .tda-product-section,
        .tda-clinical-section,
        .tda-ingredient-section,
        .tda-faqs,
        .tda-news-section {
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media screen and (max-width: 1680px) and (min-width: 1441px) {

        .tda-breadcrumb,
        div.tda-cat-detail-container,
        [class^="tda-container-"],
        .tda-product-section,
        .tda-clinical-section,
        .tda-ingredient-section,
        .tda-faqs,
        .tda-news-section {
            max-width: 1320px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media screen and (max-width: 1919px) and (min-width: 1681px) {

        .tda-breadcrumb,
        div.tda-cat-detail-container,
        [class^="tda-container-"],
        .tda-product-section,
        .tda-clinical-section,
        .tda-ingredient-section,
        .tda-faqs,
        .tda-news-section {
            max-width: 1660px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media only screen and (min-width: 1921px) {

        .tda-container-danh-muc,
        div.tda-cat-detail-container,
        section.tda-page-parent-category {
            max-width: 1660px;
            margin-left: auto;
            margin-right: auto;
        }

        .tda-container-danh-muc {
            padding: 0 20px;
        }

        .tda-product-popup-swiper {
            margin: 0;
            padding: 0;
        }

        .tda-product-popup-next {
            right: 5px;
        }
    }

    @media only screen and (max-width: 1919px) {

        .tda-clinical-wrapper,
        .tda-faq-answer .tda-info-wrapper {
            gap: 30px;
        }

        .tda-clinical-wrapper {
            justify-content: space-between;
        }

        .tda-product-popup-swiper {
            margin: 0;
            padding: 0;
        }

        .tda-product-popup-next {
            right: 5px;
        }
    }

    @media only screen and (max-width: 600px) {
        .hieudm_progress-wrap {
            right: 30px !important;
            bottom: 120px !important;
        }
    }

    /* Active: màu chữ */
    .tda-danh-sach-menu a.tda-active-menu .elementor-icon-list-text {
        color: #3ea8e2 !important;
    }


    .tda-danh-sach-menu a.tda-active-menu .elementor-icon-list-icon svg path {
        fill: #3ea8e2 !important;
    }


    .tda-danh-sach-menu a.tda-active-menu::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -30px;
        height: 2px;
        background-color: #3ea8e2;
        z-index: 100;
    }


    @media screen and (max-width: 8000px) and (min-width: 2559px) {
        #home_s2 {
            max-width: 2200px;
        }

        body:not(.rtl) .elementor-15 .elementor-element.elementor-element-f281bad {
            left: 595px;
        }

        .elementor-93 #homeSlider .elementor-element.elementor-element-a08565a,
        .elementor-93 #homeSlider .elementor-element.elementor-element-a56bd16 {
            --min-height: 100vh;
        }

        .elementor-93 .elementor-element.elementor-element-7200419 {
            --min-height: 75vh;
        }
    }

    @media screen and (max-width: 1750px) and (min-width: 1681px) {
        body:not(.rtl) .elementor-15 .elementor-element.elementor-element-f281bad {
            left: 322px;
        }

        #homeSlider .elementor-swiper-button-prev {
            left: 6.4%;
        }

        #homeSlider .elementor-swiper-button-next {
            left: 6.9%;
        }

        #homeSlider.elementor-widget-n-carousel .swiper-pagination-bullets {
            left: 6%;
        }

        #home_s2 {
            max-width: 1320px;
        }

        .elementor-93 #homeSlider .elementor-element.elementor-element-a08565a,
        .elementor-93 #homeSlider .elementor-element.elementor-element-a56bd16 {
            --min-height: 100vh;
        }

        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-2ab0d70 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-2ab0d70 .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-8e4860d .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-8e4860d .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title a {
            font-size: 17px;
            line-height: 26px;
        }

        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-description {
            font-size: 15px;
        }

        .elementor-93 .elementor-element.elementor-element-9dc4853 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-02a18f8 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-9f925d6 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-26a8f36 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-2c2f7fc .elementor-heading-title {
            font-size: 16px;
            line-height: 22px;
        }

        #ctgS2 .elementor-45 .elementor-element.elementor-element-def5230 .elementor-heading-title {
            font-size: 28px;
            line-height: 34px;
        }

        #ctgS2 .elementor-45 .elementor-element.elementor-element-26e5014 .elementor-widget-container {
            font-size: 14px;
            line-height: 20px;
        }

        .elementor-93 .elementor-element.elementor-element-9499a81 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-c7e848a .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-e7d4e5b .elementor-heading-title {
            font-size: 56px;
            line-height: 65px;
        }

        .elementor-93 .elementor-element.elementor-element-135979a .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-67c74fb .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-553f4a3 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-b93b06f .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ff4da3b .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-f25b300 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-9813d7c .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-3301ba7 .elementor-heading-title {
            font-size: 36px;
            line-height: 44px;
        }

        .elementor-93 #homeSlider .elementor-element.elementor-element-c4e41b4,
        .elementor-93 #homeSlider .elementor-element.elementor-element-389c759,
        .elementor-93 .elementor-element.elementor-element-03fcdce,
        .elementor-93 .elementor-element.elementor-element-6cb8f9d,
        .elementor-93 .elementor-element.elementor-element-19917d2,
        .elementor-93 .elementor-element.elementor-element-76704a9,
        .elementor-93 .elementor-element.elementor-element-a52806f,
        .elementor-93 .elementor-element.elementor-element-04752a9,
        .elementor-93 .elementor-element.elementor-element-06360aa,
        .elementor-93 .elementor-element.elementor-element-a72fc4e,
        .elementor-93 .elementor-element.elementor-element-dab7281,
        .elementor-93 .elementor-element.elementor-element-f2f4305,
        .elementor-93 .elementor-element.elementor-element-b128758,
        .elementor-93 .elementor-element.elementor-element-97cf40b,
        .elementor-93 .elementor-element.elementor-element-99f1637,
        .elementor-93 .elementor-element.elementor-element-5e7b654 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ad5a218 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ad5a218 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-2e8ab78 .elementor-heading-title,
        .elementor-696 .elementor-element.elementor-element-7b5273d,
        .elementor-696 .elementor-element.elementor-element-9c73c04,
        .elementor-696 .elementor-element.elementor-element-c2b26f2,
        .elementor-696 .elementor-element.elementor-element-dc27293,
        .elementor-696 .elementor-element.elementor-element-fd9cbd6,
        .elementor-696 .elementor-element.elementor-element-d1d886e,
        .elementor-696 .elementor-element.elementor-element-ec575ba,
        .elementor-696 .elementor-element.elementor-element-4d645f3,
        .elementor-696 .elementor-element.elementor-element-d8b8f12,
        .elementor-696 .elementor-element.elementor-element-dcd4c42,
        .elementor-696 .elementor-element.elementor-element-e21626f,
        .elementor-696 .elementor-element.elementor-element-00a9b28,
        .elementor-696 .elementor-element.elementor-element-7afa0f8,
        .elementor-696 .elementor-element.elementor-element-3a04eb6 .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-696 .elementor-element.elementor-element-3a04eb6 .elementor-icon-list-item>a {
            font-size: 15px;
            line-height: 24px;
        }

        .elementor-696 .elementor-element.elementor-element-d1d7106 .swiper-pagination-bullet {
            --swiper-pagination-bullet-horizontal-gap: 60px;
            --swiper-pagination-bullet-vertical-gap: 60px;
        }
    }

    @media screen and (max-width: 1680px) and (min-width: 1441px) {
        body:not(.rtl) .elementor-15 .elementor-element.elementor-element-f281bad {
            left: 322px;
        }

        #homeSlider .elementor-swiper-button-prev {
            left: 6.4%;
        }

        #homeSlider .elementor-swiper-button-next {
            left: 6.9%;
        }

        #homeSlider.elementor-widget-n-carousel .swiper-pagination-bullets {
            left: 6%;
        }

        #home_s2 {
            max-width: 1320px;
        }

        .elementor-93 #homeSlider .elementor-element.elementor-element-a08565a,
        .elementor-93 #homeSlider .elementor-element.elementor-element-a56bd16 {
            --min-height: 98vh;
        }

        .elementor-93 .elementor-element.elementor-element-7200419 {
            --min-height: 580px;
        }

        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-2ab0d70 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-2ab0d70 .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-8e4860d .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-8e4860d .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title a {
            font-size: 17px;
            line-height: 26px;
        }

        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-description {
            font-size: 15px;
        }

        .elementor-93 .elementor-element.elementor-element-9dc4853 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-02a18f8 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-9f925d6 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-26a8f36 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-2c2f7fc .elementor-heading-title {
            font-size: 16px;
            line-height: 22px;
        }

        #ctgS2 .elementor-45 .elementor-element.elementor-element-def5230 .elementor-heading-title {
            font-size: 28px;
            line-height: 34px;
        }

        #ctgS2 .elementor-45 .elementor-element.elementor-element-26e5014 .elementor-widget-container {
            font-size: 14px;
            line-height: 20px;
        }

        .elementor-93 .elementor-element.elementor-element-9499a81 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-c7e848a .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-e7d4e5b .elementor-heading-title {
            font-size: 56px;
            line-height: 65px;
        }

        .elementor-93 .elementor-element.elementor-element-135979a .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-67c74fb .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-553f4a3 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-b93b06f .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ff4da3b .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-f25b300 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-9813d7c .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-3301ba7 .elementor-heading-title {
            font-size: 36px;
            line-height: 44px;
        }

        .elementor-93 #homeSlider .elementor-element.elementor-element-c4e41b4,
        .elementor-93 #homeSlider .elementor-element.elementor-element-389c759,
        .elementor-93 .elementor-element.elementor-element-03fcdce,
        .elementor-93 .elementor-element.elementor-element-6cb8f9d,
        .elementor-93 .elementor-element.elementor-element-19917d2,
        .elementor-93 .elementor-element.elementor-element-76704a9,
        .elementor-93 .elementor-element.elementor-element-a52806f,
        .elementor-93 .elementor-element.elementor-element-04752a9,
        .elementor-93 .elementor-element.elementor-element-06360aa,
        .elementor-93 .elementor-element.elementor-element-a72fc4e,
        .elementor-93 .elementor-element.elementor-element-dab7281,
        .elementor-93 .elementor-element.elementor-element-f2f4305,
        .elementor-93 .elementor-element.elementor-element-b128758,
        .elementor-93 .elementor-element.elementor-element-97cf40b,
        .elementor-93 .elementor-element.elementor-element-99f1637,
        .elementor-93 .elementor-element.elementor-element-5e7b654 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ad5a218 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ad5a218 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-2e8ab78 .elementor-heading-title,
        .elementor-696 .elementor-element.elementor-element-7b5273d,
        .elementor-696 .elementor-element.elementor-element-9c73c04,
        .elementor-696 .elementor-element.elementor-element-c2b26f2,
        .elementor-696 .elementor-element.elementor-element-dc27293,
        .elementor-696 .elementor-element.elementor-element-fd9cbd6,
        .elementor-696 .elementor-element.elementor-element-d1d886e,
        .elementor-696 .elementor-element.elementor-element-ec575ba,
        .elementor-696 .elementor-element.elementor-element-4d645f3,
        .elementor-696 .elementor-element.elementor-element-d8b8f12,
        .elementor-696 .elementor-element.elementor-element-dcd4c42,
        .elementor-696 .elementor-element.elementor-element-e21626f,
        .elementor-696 .elementor-element.elementor-element-00a9b28,
        .elementor-696 .elementor-element.elementor-element-7afa0f8,
        .elementor-696 .elementor-element.elementor-element-3a04eb6 .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-696 .elementor-element.elementor-element-3a04eb6 .elementor-icon-list-item>a {
            font-size: 15px;
            line-height: 24px;
        }

        .elementor-696 .elementor-element.elementor-element-d1d7106 .swiper-pagination-bullet {
            --swiper-pagination-bullet-horizontal-gap: 60px;
            --swiper-pagination-bullet-vertical-gap: 60px;
        }
    }

    @media screen and (max-width: 1440px) and (min-width: 1367px) {
        body:not(.rtl) .elementor-15 .elementor-element.elementor-element-f281bad {
            left: 310px;
        }

        #homeSlider .elementor-swiper-button-prev {
            left: 4.9%;
        }

        #homeSlider .elementor-swiper-button-next {
            left: 5.4%;
        }

        #homeSlider.elementor-widget-n-carousel .swiper-pagination-bullets {
            left: 4.4%;
        }

        #home_s2 {
            max-width: 1280px;
        }

        .elementor-93 #homeSlider .elementor-element.elementor-element-a08565a,
        .elementor-93 #homeSlider .elementor-element.elementor-element-a56bd16 {
            --min-height: 87vh;
        }

        .elementor-93 .elementor-element.elementor-element-7200419 {
            --min-height: 500px;
        }

        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-2ab0d70 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-2ab0d70 .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-8e4860d .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-8e4860d .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title a {
            font-size: 17px;
            line-height: 26px;
        }

        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-description {
            font-size: 15px;
        }

        .elementor-93 .elementor-element.elementor-element-9dc4853 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-02a18f8 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-9f925d6 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-26a8f36 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-2c2f7fc .elementor-heading-title {
            font-size: 16px;
            line-height: 22px;
        }

        #ctgS2 .elementor-45 .elementor-element.elementor-element-def5230 .elementor-heading-title {
            font-size: 28px;
            line-height: 34px;
        }

        #ctgS2 .elementor-45 .elementor-element.elementor-element-26e5014 .elementor-widget-container {
            font-size: 14px;
            line-height: 20px;
        }

        .elementor-93 .elementor-element.elementor-element-9499a81 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-c7e848a .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-e7d4e5b .elementor-heading-title {
            font-size: 56px;
            line-height: 65px;
        }

        .elementor-93 .elementor-element.elementor-element-135979a .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-67c74fb .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-553f4a3 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-b93b06f .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ff4da3b .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-f25b300 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-9813d7c .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-3301ba7 .elementor-heading-title {
            font-size: 36px;
            line-height: 44px;
        }

        .elementor-93 #homeSlider .elementor-element.elementor-element-c4e41b4,
        .elementor-93 #homeSlider .elementor-element.elementor-element-389c759,
        .elementor-93 .elementor-element.elementor-element-03fcdce,
        .elementor-93 .elementor-element.elementor-element-6cb8f9d,
        .elementor-93 .elementor-element.elementor-element-19917d2,
        .elementor-93 .elementor-element.elementor-element-76704a9,
        .elementor-93 .elementor-element.elementor-element-a52806f,
        .elementor-93 .elementor-element.elementor-element-04752a9,
        .elementor-93 .elementor-element.elementor-element-06360aa,
        .elementor-93 .elementor-element.elementor-element-a72fc4e,
        .elementor-93 .elementor-element.elementor-element-dab7281,
        .elementor-93 .elementor-element.elementor-element-f2f4305,
        .elementor-93 .elementor-element.elementor-element-b128758,
        .elementor-93 .elementor-element.elementor-element-97cf40b,
        .elementor-93 .elementor-element.elementor-element-99f1637,
        .elementor-93 .elementor-element.elementor-element-5e7b654 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ad5a218 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ad5a218 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-2e8ab78 .elementor-heading-title,
        .elementor-696 .elementor-element.elementor-element-7b5273d,
        .elementor-696 .elementor-element.elementor-element-9c73c04,
        .elementor-696 .elementor-element.elementor-element-c2b26f2,
        .elementor-696 .elementor-element.elementor-element-dc27293,
        .elementor-696 .elementor-element.elementor-element-fd9cbd6,
        .elementor-696 .elementor-element.elementor-element-d1d886e,
        .elementor-696 .elementor-element.elementor-element-ec575ba,
        .elementor-696 .elementor-element.elementor-element-4d645f3,
        .elementor-696 .elementor-element.elementor-element-d8b8f12,
        .elementor-696 .elementor-element.elementor-element-dcd4c42,
        .elementor-696 .elementor-element.elementor-element-e21626f,
        .elementor-696 .elementor-element.elementor-element-00a9b28,
        .elementor-696 .elementor-element.elementor-element-7afa0f8,
        .elementor-696 .elementor-element.elementor-element-3a04eb6 .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-696 .elementor-element.elementor-element-3a04eb6 .elementor-icon-list-item>a {
            font-size: 15px;
            line-height: 24px;
        }

        .elementor-696 .elementor-element.elementor-element-d1d7106 .swiper-pagination-bullet {
            --swiper-pagination-bullet-horizontal-gap: 60px;
            --swiper-pagination-bullet-vertical-gap: 60px;
        }
    }

    @media screen and (max-width: 1366px) and (min-width: 769px) {
        body:not(.rtl) .elementor-15 .elementor-element.elementor-element-f281bad {
            left: 285px;
        }

        #homeSlider .elementor-swiper-button-prev {
            left: 5.8%;
        }

        #homeSlider .elementor-swiper-button-next {
            left: 6.3%;
        }

        #homeSlider.elementor-widget-n-carousel .swiper-pagination-bullets {
            left: 5.4%;
        }

        #home_s2 {
            max-width: 1200px;
        }

        .elementor-93 #homeSlider .elementor-element.elementor-element-a08565a,
        .elementor-93 #homeSlider .elementor-element.elementor-element-a56bd16 {
            --min-height: 100vh;
        }

        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-title a,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-title,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-2ab0d70 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-2ab0d70 .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-8e4860d .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-8e4860d .elementor-icon-box-title a,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title,
        .elementor-696 .elementor-element.elementor-element-ad2a478 .elementor-icon-box-title a {
            font-size: 14px;
            line-height: 22px;
        }

        .elementor-93 #home_s2 .elementor-element.elementor-element-83628f3 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-3550346 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-2999df8 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-ff27ee1 .elementor-icon-box-description,
        .elementor-93 #home_s2 .elementor-element.elementor-element-4d46fba .elementor-icon-box-description {
            font-size: 14px;
        }

        .elementor-93 .elementor-element.elementor-element-9dc4853 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-02a18f8 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-9f925d6 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-26a8f36 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-2c2f7fc .elementor-heading-title {
            font-size: 16px;
            line-height: 22px;
        }

        #ctgS2 .elementor-45 .elementor-element.elementor-element-def5230 .elementor-heading-title {
            font-size: 28px;
            line-height: 34px;
        }

        #ctgS2 .elementor-45 .elementor-element.elementor-element-26e5014 .elementor-widget-container {
            font-size: 14px;
            line-height: 20px;
        }

        .elementor-93 .elementor-element.elementor-element-9499a81 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-c7e848a .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-e7d4e5b .elementor-heading-title {
            font-size: 42px;
            line-height: 40px;
        }

        .elementor-93 .elementor-element.elementor-element-135979a .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-67c74fb .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-553f4a3 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-b93b06f .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ff4da3b .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-f25b300 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-9813d7c .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-3301ba7 .elementor-heading-title {
            font-size: 34px;
            line-height: 42px;
        }

        .elementor-93 #homeSlider .elementor-element.elementor-element-c4e41b4,
        .elementor-93 #homeSlider .elementor-element.elementor-element-389c759,
        .elementor-93 .elementor-element.elementor-element-03fcdce,
        .elementor-93 .elementor-element.elementor-element-6cb8f9d,
        .elementor-93 .elementor-element.elementor-element-19917d2,
        .elementor-93 .elementor-element.elementor-element-76704a9,
        .elementor-93 .elementor-element.elementor-element-a52806f,
        .elementor-93 .elementor-element.elementor-element-04752a9,
        .elementor-93 .elementor-element.elementor-element-06360aa,
        .elementor-93 .elementor-element.elementor-element-a72fc4e,
        .elementor-93 .elementor-element.elementor-element-dab7281,
        .elementor-93 .elementor-element.elementor-element-f2f4305,
        .elementor-93 .elementor-element.elementor-element-b128758,
        .elementor-93 .elementor-element.elementor-element-97cf40b,
        .elementor-93 .elementor-element.elementor-element-99f1637,
        .elementor-93 .elementor-element.elementor-element-5e7b654 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ad5a218 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-ad5a218 .elementor-heading-title,
        .elementor-93 .elementor-element.elementor-element-2e8ab78 .elementor-heading-title,
        .elementor-696 .elementor-element.elementor-element-7b5273d,
        .elementor-696 .elementor-element.elementor-element-9c73c04,
        .elementor-696 .elementor-element.elementor-element-c2b26f2,
        .elementor-696 .elementor-element.elementor-element-dc27293,
        .elementor-696 .elementor-element.elementor-element-fd9cbd6,
        .elementor-696 .elementor-element.elementor-element-d1d886e,
        .elementor-696 .elementor-element.elementor-element-ec575ba,
        .elementor-696 .elementor-element.elementor-element-4d645f3,
        .elementor-696 .elementor-element.elementor-element-d8b8f12,
        .elementor-696 .elementor-element.elementor-element-dcd4c42,
        .elementor-696 .elementor-element.elementor-element-e21626f,
        .elementor-696 .elementor-element.elementor-element-00a9b28,
        .elementor-696 .elementor-element.elementor-element-7afa0f8,
        .elementor-696 .elementor-element.elementor-element-3a04eb6 .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-696 .elementor-element.elementor-element-3a04eb6 .elementor-icon-list-item>a {
            font-size: 15px;
            line-height: 24px;
        }

        .elementor-696 .elementor-element.elementor-element-d1d7106 .swiper-pagination-bullet {
            --swiper-pagination-bullet-horizontal-gap: 56px;
            --swiper-pagination-bullet-vertical-gap: 56px;
        }
    }

    @media screen and (min-width: 768px) {
        .woocommerce .elementor-1258 .elementor-element.elementor-element-68125ae .flex-control-thumbs {
            position: absolute;
            bottom: 20px;
            left: auto;
            right: 50%;
            transform: translate(50%, 0);
            display: flex;
            flex-wrap: nowrap;
            column-gap: 8px;
            margin: 0;
        }

        .woocommerce .elementor-1258 .elementor-element.elementor-element-68125ae .flex-control-thumbs li {
            padding: 0;
            width: 80px;
        }
    }
    </style>
    @stack('styles')
</head>

<body
    class="home wp-singular page-template-default page page-id-93 wp-custom-logo wp-theme-hello-elementor wp-child-theme-hello-elementor-child theme-hello-elementor woocommerce-no-js elementor-default elementor-kit-7 elementor-page elementor-page-93">

    <!-- Đoạn mã Google Tag Manager (noscript) được thêm bởi Site Kit -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLK3VS9C" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- Kết thúc đoạn mã Google Tag Manager (noscript) được thêm bởi Site Kit -->

    <a class="skip-link screen-reader-text" href="#content">Chuyển đến nội dung</a>

    <header data-elementor-type="header" data-elementor-id="15" class="elementor elementor-15 elementor-location-header"
        data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-c20186c e-flex e-con-boxed e-con e-parent" data-id="c20186c"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-bd76a4d elementor-widget elementor-widget-off-canvas"
                    data-id="bd76a4d" data-element_type="widget"
                    data-settings="{&quot;prevent_scroll&quot;:&quot;yes&quot;}" data-widget_type="off-canvas.default">
                    <div class="elementor-widget-container">
                        <div id="off-canvas-bd76a4d" class="e-off-canvas" role="dialog" aria-hidden="true"
                            aria-label="Search Modal" aria-modal="true" inert="" data-delay-child-handlers="true">
                            <div class="e-off-canvas__overlay"></div>
                            <div class="e-off-canvas__main">
                                <div class="e-off-canvas__content">
                                    <div class="elementor-element elementor-element-e4f1ad3 e-flex e-con-boxed e-con e-child"
                                        data-id="e4f1ad3" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-d39ba1c elementor-widget elementor-widget-shortcode"
                                                data-id="d39ba1c" data-element_type="widget"
                                                data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <div class="search-popup-wrapper">
                                                            <div class="search-bar-container">
                                                                <input type="text" id="custom-search-input"
                                                                    placeholder="Tìm kiếm..." />
                                                                <button id="custom-search-icon" class="search-icon">
                                                                    <span class="search-icon-svg"></span>
                                                                </button>
                                                            </div>
                                                            <div id="custom-search-popup" class="search-popup hidden">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-36c1430 elementor-widget elementor-widget-shortcode"
                                                data-id="36c1430" data-element_type="widget"
                                                data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <div class="tda-keyword-wrap">

                                                            <p class="tda-keyword-label">Được tìm kiếm nhiều</p>

                                                            <div class="tda-keyword-list">


                                                                <a class="tda-keyword-button"
                                                                    href="{{ route('sanpham') }}?s=tinh-chat">

                                                                    tinh chất
                                                                </a>


                                                                <a class="tda-keyword-button"
                                                                    href="{{ route('sanpham') }}?s=tinh-chat-ampoule">

                                                                    tinh chất ampou
                                                                </a>


                                                                <a class="tda-keyword-button"
                                                                    href="{{ route('sanpham') }}?s=kem-duong">

                                                                    kem dưỡng
                                                                </a>


                                                                <a class="tda-keyword-button"
                                                                    href="{{ route('sanpham') }}?s=mat-na">

                                                                    Mặt nạ
                                                                </a>


                                                                <a class="tda-keyword-button"
                                                                    href="{{ route('sanpham') }}?s=kem-chong-nang">

                                                                    kem chống nắng
                                                                </a>


                                                            </div>

                                                            <div class="tda-keyword-list tda-keyword-list-current">
                                                                <a class="tda-keyword-button"
                                                                    href="{{ route('serum') }}?s=Serum">
                                                                    Serum
                                                                </a>

                                                                <a class="tda-keyword-button"
                                                                    href="{{ route('vien-uong') }}?s=VIEN+UONG">
                                                                    VI&Ecirc;N U&#7888;NG
                                                                </a>

                                                                <a class="tda-keyword-button"
                                                                    href="{{ route('chi-tiet-san-pham.show', 'vc30-serum-vitamin-c') }}?s=SERUM+VITAMIN+C">
                                                                    SERUM VITAMIN C
                                                                </a>
                                                            </div>

                                                        </div>

                                                        <style>
                                                        .tda-keyword-wrap {

                                                            margin-top: 20px;

                                                        }

                                                        .tda-keyword-label {
                                                            font-size: 14px;
                                                            color: #252525;
                                                            margin-bottom: 15px;
                                                            font-weight: 500;
                                                            text-transform: uppercase;
                                                            opacity: 70%;
                                                        }

                                                        .tda-keyword-wrap>.tda-keyword-list:not(.tda-keyword-list-current) {
                                                            display: none;
                                                        }

                                                        .tda-keyword-list {
                                                            display: flex;
                                                            flex-wrap: wrap;
                                                            gap: 10px;
                                                        }

                                                        .tda-keyword-button {
                                                            display: inline-block;
                                                            padding: 6px 12px;
                                                            background: rgba(62, 168, 226, 0.10) !important;
                                                            border-radius: 3px;
                                                            font-size: 14px;
                                                            color: #3ea8e2 !important;
                                                            text-decoration: none !important;
                                                            font-weight: 600;
                                                            text-transform: uppercase;
                                                        }


                                                        .tda-keyword-button:hover {

                                                            background: rgba(62, 168, 226, 0.16) !important;

                                                        }
                                                        </style>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6365e0f elementor-absolute elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="6365e0f" data-element_type="widget"
                                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <a class="elementor-icon"
                                                            href="#elementor-action%3Aaction%3Doff_canvas%3Aclose%26settings%3DeyJpZCI6ImJkNzZhNGQiLCJkaXNwbGF5TW9kZSI6ImNsb3NlIn0%3D">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" viewBox="0 0 12 12" fill="none">
                                                                <path
                                                                    d="M0.342989 11.6575C0.196476 11.511 0.114166 11.3123 0.114166 11.1051C0.114166 10.8979 0.196476 10.6992 0.342989 10.5527L4.89454 6.00112L0.342104 1.44869C0.195591 1.30218 0.113281 1.10346 0.113281 0.896262C0.113282 0.689062 0.195592 0.490347 0.342104 0.343834C0.488617 0.197322 0.687331 0.115012 0.894531 0.115012C1.10173 0.115012 1.30045 0.197322 1.44696 0.343834L5.99939 4.89627L10.5518 0.343813C10.6984 0.1973 10.8971 0.11499 11.1043 0.11499C11.3115 0.11499 11.5102 0.1973 11.6567 0.343813C11.8032 0.490325 11.8855 0.68904 11.8855 0.89624C11.8855 1.10344 11.8032 1.30215 11.6567 1.44867L7.10424 6.00112L11.6558 10.5527C11.8023 10.6992 11.8846 10.8979 11.8846 11.1051C11.8846 11.3123 11.8023 11.511 11.6558 11.6575C11.5093 11.8041 11.3106 11.8864 11.1034 11.8864C10.8962 11.8864 10.6975 11.8041 10.551 11.6575L5.99939 7.10597L1.44784 11.6575C1.30133 11.804 1.10262 11.8863 0.895416 11.8863C0.688216 11.8863 0.489501 11.804 0.342989 11.6575Z"
                                                                    fill="#252525"></path>
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
                </div>
            </div>
        </div>
        <header class="elementor-element elementor-element-9e7d264 e-flex e-con-boxed e-con e-parent" data-id="9e7d264"
            data-element_type="container" id="hdMain"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;laptop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile_extra&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-c5f758b e-con-full e-flex e-con e-child"
                    data-id="c5f758b" data-element_type="container" id="header_hd">
                    <div class="elementor-element elementor-element-a1d750b e-con-full e-flex e-con e-child"
                        data-id="a1d750b" data-element_type="container">
                        <div class="elementor-element elementor-element-07df7aa elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                            data-id="07df7aa" data-element_type="widget" data-widget_type="theme-site-logo.default">
                            <div class="elementor-widget-container">
                                <a href="/">
                                    <img width="200" height="87" src="{{ asset('images/logo/logo1.png') }}"
                                        class="attachment-full size-full wp-image-26" alt="Perfect logo" /> </a>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-55be3e6 e-con-full e-flex e-con e-child"
                        data-id="55be3e6" data-element_type="container">
                        <div class="elementor-element elementor-element-8f6d17b e-full_width e-n-menu-layout-horizontal e-n-menu-tablet elementor-widget elementor-widget-n-menu"
                            data-id="8f6d17b" data-element_type="widget" id="cs-mega-menu"
                            data-settings="{&quot;menu_items&quot;:[{&quot;item_title&quot;:&quot;D\u01b0\u1ee3c M\u1ef9 Ph\u1ea9m&quot;,&quot;_id&quot;:&quot;18e4837&quot;,&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;http:\/\/perfectnhatban.com\/cham-soc-da-mat\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;96b0c24\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22taxonomy%22%2C%22taxonomy_id%22%3A%22150%22%7D\&quot;]&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;Ch\u0103m S\u00f3c T\u1ea1i Nh\u00e0&quot;,&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;_id&quot;:&quot;479caf3&quot;,&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;64078e9\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22taxonomy%22%2C%22taxonomy_id%22%3A%22134%22%7D\&quot;]&quot;},&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/perfectnhatban.com\/cham-soc-tai-nha\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;Spa\/ Clinic&quot;,&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;_id&quot;:&quot;5719767&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;Ph\u00e1c \u0110\u1ed3&quot;,&quot;item_dropdown_content&quot;:&quot;&quot;,&quot;_id&quot;:&quot;5228e88&quot;,&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;de9d7c9\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22taxonomy%22%2C%22taxonomy_id%22%3A%2231%22%7D\&quot;]&quot;},&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/perfectnhatban.com\/lieu-phap\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;Th\u01b0\u01a1ng Hi\u1ec7u&quot;,&quot;_id&quot;:&quot;f396eac&quot;,&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;500854c\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22post%22%2C%22post_id%22%3A%22696%22%7D\&quot;]&quot;},&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/perfectnhatban.com\/gioi-thieu\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_dropdown_content&quot;:&quot;no&quot;,&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;_id&quot;:&quot;ddbeb6d&quot;,&quot;item_title&quot;:&quot;Tin T\u1ee9c&quot;,&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;c6b9b2f\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22post%22%2C%22post_id%22%3A%22983%22%7D\&quot;]&quot;},&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/perfectnhatban.com\/tin-tuc\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_dropdown_content&quot;:&quot;no&quot;,&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;_id&quot;:&quot;7c2ba68&quot;,&quot;item_title&quot;:&quot;H\u1ee3p T\u00e1c&quot;,&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;01d8b4e\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22post%22%2C%22post_id%22%3A%22551%22%7D\&quot;]&quot;},&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/perfectnhatban.com\/lien-he\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_dropdown_content&quot;:&quot;no&quot;,&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;}],&quot;menu_item_title_distance_from_content&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;21&quot;,&quot;sizes&quot;:[]},&quot;menu_item_title_distance_from_content_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;21&quot;,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;full_width&quot;,&quot;item_layout&quot;:&quot;horizontal&quot;,&quot;open_on&quot;:&quot;hover&quot;,&quot;horizontal_scroll&quot;:&quot;disable&quot;,&quot;breakpoint_selector&quot;:&quot;tablet&quot;,&quot;menu_item_title_distance_from_content_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_item_title_distance_from_content_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_item_title_distance_from_content_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_item_title_distance_from_content_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                            data-widget_type="mega-menu.default">
                            <div class="elementor-widget-container">
                                <nav class="e-n-menu" data-widget-number="150" aria-label="Menu">
                                    <button class="e-n-menu-toggle" id="menu-toggle-150" aria-haspopup="true"
                                        aria-expanded="false" aria-controls="menubar-150" aria-label="Menu Toggle">
                                        <span class="e-n-menu-toggle-icon e-open">
                                            <svg class="e-font-icon-svg e-eicon-menu-bar" viewBox="0 0 1000 1000"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z">
                                                </path>
                                            </svg> </span>
                                        <span class="e-n-menu-toggle-icon e-close">
                                            <svg class="e-font-icon-svg e-eicon-close" viewBox="0 0 1000 1000"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z">
                                                </path>
                                            </svg> </span>
                                    </button>
                                    <div class="e-n-menu-wrapper" id="menubar-150" aria-labelledby="menu-toggle-150">
                                        <ul class="e-n-menu-heading">
                                            <li class="e-n-menu-item">
                                                <div id="e-n-menu-title-1501"
                                                    class="e-n-menu-title">
                                                    <a class="e-n-menu-title-container e-focus e-link"
                                                        href="{{ route('sanpham') }}"> <span
                                                            class="e-n-menu-title-text">
                                                            Sản phẩm </span>
                                                    </a> <button id="e-n-menu-dropdown-icon-1501"
                                                        class="e-n-menu-dropdown-icon e-focus" data-tab-index="1"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        aria-controls="e-n-menu-content-1501">
                                                        <span class="e-n-menu-dropdown-icon-opened">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M17.3234 15.8059C17.5786 16.0739 17.9832 16.0633 18.225 15.7783C18.4675 15.494 18.4566 15.0452 18.2007 14.7757L12.1387 8.39462C12.0162 8.26556 11.8573 8.20034 11.6997 8.20034C11.5421 8.20034 11.3838 8.26556 11.2613 8.39462L5.19925 14.7757C4.94335 15.0451 4.93252 15.494 5.17499 15.7783C5.41747 16.0633 5.8214 16.0746 6.07665 15.8059L11.6997 9.88641L17.3234 15.8059Z"
                                                                    fill="#1E1E1E"></path>
                                                            </svg> <span class="elementor-screen-only">Close Dược Mỹ
                                                                Phẩm</span>
                                                        </span>
                                                        <span class="e-n-menu-dropdown-icon-closed">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M6.67665 8.19406C6.4214 7.92607 6.01684 7.93668 5.77499 8.22171C5.53252 8.50605 5.54335 8.95483 5.79925 9.22428L11.8613 15.6054C11.9838 15.7344 12.1427 15.7997 12.3003 15.7997C12.4579 15.7997 12.6162 15.7344 12.7387 15.6054L18.8007 9.22428C19.0566 8.95486 19.0675 8.50605 18.825 8.22174C18.5825 7.93671 18.1786 7.92537 17.9234 8.19409L12.3003 14.1136L6.67665 8.19406Z"
                                                                    fill="#1E1E1E"></path>
                                                            </svg> <span class="elementor-screen-only">Open Dược Mỹ
                                                                Phẩm</span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="e-n-menu-content">
                                                    <div id="e-n-menu-content-1501" data-tab-index="1"
                                                        aria-labelledby="e-n-menu-dropdown-icon-1501"
                                                        class="elementor-element elementor-element-a817d1a e-flex e-con-boxed e-con e-child"
                                                        data-id="a817d1a" data-element_type="container"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="e-con-inner">
                                                            <div class="elementor-element elementor-element-b91a81d e-con-full e-flex e-con e-child"
                                                                data-id="b91a81d" data-element_type="container">
                                                                <div class="elementor-element elementor-element-dba446b e-con-full elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile e-flex e-con e-child"
                                                                    data-id="dba446b" data-element_type="container">
                                                                    <div class="elementor-element elementor-element-ff6e934 elementor-widget elementor-widget-heading"
                                                                        data-id="ff6e934" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                PERFECT</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-cac7513 elementor-widget elementor-widget-text-editor"
                                                                        data-id="cac7513" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p>được nghiên cứu trên nền tảng khoa học
                                                                                hiện đại, công nghệ sạch và triết lý
                                                                                nuôi dưỡng da từ gốc &#8211; phục hồi tự
                                                                                nhiên</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-8e1fefe e-con-full cs-child-menu-container e-flex e-con e-child"
                                                                    data-id="8e1fefe" data-element_type="container">
                                                                    <div class="elementor-element elementor-element-2a324ec e-con-full e-flex e-con e-child"
                                                                        data-id="2a324ec" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-90334ed cs-menu-heading elementor-widget elementor-widget-heading"
                                                                            data-id="90334ed" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    <a href="{{ route('vien-uong') }}">VIÊN
                                                                                        UỐNG</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="elementor-element elementor-element-03f76ad e-con-full e-flex e-con e-child"
                                                                        data-id="03f76ad" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-11f3c2b cs-menu-heading elementor-widget elementor-widget-heading"
                                                                            data-id="11f3c2b" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    <a
                                                                                        href="{{ route('serum') }}">SERUM</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="elementor-element elementor-element-03f76ad e-con-full e-flex e-con e-child"
                                                                        data-id="03f76ad" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-11f3c2b cs-menu-heading elementor-widget elementor-widget-heading"
                                                                            data-id="11f3c2b" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    <a href="{{ route('duong-toc') }}">DƯỠNG
                                                                                        TÓC</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="elementor-element elementor-element-0bfc685 e-con-full elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile e-flex e-con e-child"
                                                                        data-id="0bfc685" data-element_type="container">
                                                                        <div class="woocommerce elementor-element elementor-element-bc8abb1 elementor-grid-1 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-loop-grid"
                                                                            data-id="bc8abb1" data-element_type="widget"
                                                                            data-settings="{&quot;_skin&quot;:&quot;product&quot;,&quot;template_id&quot;:&quot;7008&quot;,&quot;columns&quot;:&quot;1&quot;,&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns_mobile&quot;:&quot;1&quot;,&quot;edit_handle_selector&quot;:&quot;[data-elementor-type=\&quot;loop-item\&quot;]&quot;,&quot;row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                                            data-widget_type="loop-grid.product">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-loop-container elementor-grid"
                                                                                    role="list">
                                                                                    <style id="loop-7008">
                                                                                    .cs-product-loop img {
                                                                                        width: 100%;
                                                                                        object-fit: cover;
                                                                                        height: auto;
                                                                                        aspect-ratio: 4 / 3.5;
                                                                                        display: block;
                                                                                    }

                                                                                    .cs-product-loop .elementor-button-wrapper {
                                                                                        display: flex;
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-06cc180 {
                                                                                        --display: flex;
                                                                                        --flex-direction: column;
                                                                                        --container-widget-width: 100%;
                                                                                        --container-widget-height: initial;
                                                                                        --container-widget-flex-grow: 0;
                                                                                        --container-widget-align-self: initial;
                                                                                        --flex-wrap-mobile: wrap;
                                                                                    }

                                                                                    .elementor-widget-theme-post-featured-image .widget-image-caption {
                                                                                        color: var(--e-global-color-text);
                                                                                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-dd2c523 img {
                                                                                        border-radius: 10px 10px 10px 10px;
                                                                                        transition: transform 0.3s ease;
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-dd2c523 .elementor-widget-container {
                                                                                        border-radius: 10px;
                                                                                        overflow: hidden;
                                                                                    }

                                                                                    .elementor-7008 .cs-product-loop:hover .elementor-element-dd2c523 img,
                                                                                    .elementor-7008 .elementor-element.elementor-element-dd2c523:hover img {
                                                                                        transform: scale(1.08);
                                                                                    }

                                                                                    body:not(.rtl) .elementor-7008 .elementor-element.elementor-element-962880c {
                                                                                        right: 16px;
                                                                                    }

                                                                                    body.rtl .elementor-7008 .elementor-element.elementor-element-962880c {
                                                                                        left: 16px;
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-962880c {
                                                                                        top: 16px;
                                                                                    }

                                                                                    .elementor-7008 .product-tag-container {
                                                                                        background-color: #3ea8e2 !important;
                                                                                        border-radius: 4px;
                                                                                        box-shadow: 0 4px 12px rgba(20, 92, 132, 0.18);
                                                                                    }

                                                                                    .elementor-7008 .product-tag {
                                                                                        color: #ffffff !important;
                                                                                        font-weight: 600 !important;
                                                                                    }

                                                                                    .elementor-widget-heading .elementor-heading-title {
                                                                                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                                                                                        font-size: var(--e-global-typography-primary-font-size);
                                                                                        font-weight: var(--e-global-typography-primary-font-weight);
                                                                                        color: var(--e-global-color-primary);
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-7efd07a>.elementor-widget-container {
                                                                                        padding: 15px 0px 5px 0px;
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-7efd07a .elementor-heading-title {
                                                                                        font-family: "Lexend Deca", sans-serif;
                                                                                        font-size: 16px;
                                                                                        font-weight: 600;
                                                                                        line-height: 1.3em;
                                                                                        color: var(--e-global-color-accent);
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-7efd07a .elementor-heading-title a {
                                                                                        transition: color 0.3s ease;
                                                                                    }

                                                                                    .elementor-7008 .cs-product-loop:hover .elementor-element-7efd07a .elementor-heading-title a,
                                                                                    .elementor-7008 .elementor-element.elementor-element-7efd07a .elementor-heading-title a:hover,
                                                                                    .elementor-7008 .elementor-element.elementor-element-7efd07a .elementor-heading-title a:focus {
                                                                                        color: #3ea8e2 !important;
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-2a2760f>.elementor-widget-container {
                                                                                        padding: 0px 0px 15px 0px;
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-2a2760f .elementor-heading-title {
                                                                                        font-family: "Lexend Deca", sans-serif;
                                                                                        font-size: 14px;
                                                                                        font-weight: 500;
                                                                                        color: #949494;
                                                                                    }

                                                                                    .elementor-widget-button .elementor-button {
                                                                                        background-color: var(--e-global-color-accent);
                                                                                        font-family: var(--e-global-typography-accent-font-family), Sans-serif;
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button {
                                                                                        background-color: #FFFFFF00;
                                                                                        font-family: "Lexend Deca", sans-serif;
                                                                                        text-decoration: underline !important;
                                                                                        text-underline-offset: 2px;
                                                                                        fill: #3ea8e2;
                                                                                        color: #3ea8e2 !important;
                                                                                        padding: 0px 0px 0px 0px;
                                                                                        transition: color 0.25s ease, fill 0.25s ease;
                                                                                    }

                                                                                    .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button-text {
                                                                                        color: #3ea8e2 !important;
                                                                                        transition: color 0.25s ease;
                                                                                    }

                                                                                    .elementor-7008 .cs-product-loop:hover .elementor-element-8aa38ce .elementor-button,
                                                                                    .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button:hover,
                                                                                    .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button:focus,
                                                                                    .elementor-7008 .cs-product-loop:hover .elementor-element-8aa38ce .elementor-button-text,
                                                                                    .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button:hover .elementor-button-text,
                                                                                    .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button:focus .elementor-button-text {
                                                                                        color: #3ea8e2 !important;
                                                                                        fill: #3ea8e2 !important;
                                                                                    }

                                                                                    @media(max-width:1700px) {
                                                                                        .elementor-widget-heading .elementor-heading-title {
                                                                                            font-size: var(--e-global-typography-primary-font-size);
                                                                                        }
                                                                                    }

                                                                                    @media(max-width:1024px) {
                                                                                        .elementor-widget-heading .elementor-heading-title {
                                                                                            font-size: var(--e-global-typography-primary-font-size);
                                                                                        }
                                                                                    }

                                                                                    @media(max-width:767px) {
                                                                                        .elementor-widget-heading .elementor-heading-title {
                                                                                            font-size: var(--e-global-typography-primary-font-size);
                                                                                        }
                                                                                    }
                                                                                    </style>
                                                                                    <div data-elementor-type="loop-item"
                                                                                        data-elementor-id="7008"
                                                                                        class="elementor elementor-7008 e-loop-item e-loop-item-4775 post-4775 product type-product status-publish has-post-thumbnail product_cat-kem-duong product_cat-da-kho-mong-yeu product_cat-phuc-hoi-duong-am product_cat-thai-doc-phuc-hoi product_tag-chuyen-gia product_tag-home-care first instock shipping-taxable purchasable product-type-simple"
                                                                                        data-elementor-post-type="elementor_library"
                                                                                        data-custom-edit-handle="1">
                                                                                        <div class="elementor-element elementor-element-06cc180 cs-product-loop e-flex e-con-boxed e-con e-parent"
                                                                                            data-id="06cc180"
                                                                                            data-element_type="container">
                                                                                            <div class="e-con-inner">
                                                                                                <div class="elementor-element elementor-element-dd2c523 elementor-widget elementor-widget-theme-post-featured-image elementor-widget-image"
                                                                                                    data-id="dd2c523"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="theme-post-featured-image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <a
                                                                                                            href="{{ route('chi-tiet-san-pham.show', 'perfect-lady') }}">
                                                                                                            <img data-lazyloaded="1"
                                                                                                                src="{{ asset('images/sanpham/perfect-lady/lady.webp') }}"
                                                                                                                loading="lazy"
                                                                                                                width="800"
                                                                                                                height="995"
                                                                                                                data-src="{{ asset('images/sanpham/perfect-lady/lady.webp') }}"
                                                                                                                class="attachment-large size-large wp-image-9204"
                                                                                                                alt="[Mã V1] Viên uống nội tiết tố nữ PERFECT LADY Nhật Bản hỗ trợ cân bằng nội tiết, đẹp da, giảm khô hạn 60 viên"
                                                                                                                data-srcset="{{ asset('images/sanpham/perfect-lady/lady.webp') }} 823w, {{ asset('images/sanpham/perfect-lady/lady.webp') }} 241w, {{ asset('images/sanpham/perfect-lady/lady.webp') }} 768w, {{ asset('images/sanpham/perfect-lady/lady.webp') }} 600w, {{ asset('images/sanpham/perfect-lady/lady.webp') }} 964w"
                                                                                                                data-sizes="auto" />
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-962880c elementor-absolute cs-product-tags elementor-widget elementor-widget-shortcode"
                                                                                                    data-id="962880c"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                                                    data-widget_type="shortcode.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-shortcode">
                                                                                                            <div
                                                                                                                class="product-tags-container-wrapper">
                                                                                                                <ul
                                                                                                                    class="product-tag-container-wrapper">
                                                                                                                    <li
                                                                                                                        class="product-tag-container">
                                                                                                                        <p
                                                                                                                            class="product-tag">
                                                                                                                            Chuyên
                                                                                                                            Gia
                                                                                                                        </p>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="product-tag-container">
                                                                                                                        <p
                                                                                                                            class="product-tag">
                                                                                                                            Tại
                                                                                                                            Nhà
                                                                                                                        </p>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-7efd07a elementor-widget elementor-widget-heading"
                                                                                                    data-id="7efd07a"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <h3
                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                            <a
                                                                                                                href="{{ route('chi-tiet-san-pham.show', 'perfect-lady') }}">[Mã
                                                                                                                V1] Viên
                                                                                                                uống nội
                                                                                                                tiết tố
                                                                                                                nữ
                                                                                                                PERFECT
                                                                                                                LADY
                                                                                                                Nhật Bản
                                                                                                                hỗ trợ
                                                                                                                cân bằng
                                                                                                                nội
                                                                                                                tiết,
                                                                                                                đẹp da,
                                                                                                                giảm khô
                                                                                                                hạn 60
                                                                                                                viên</a>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-2a2760f elementor-widget elementor-widget-heading"
                                                                                                    data-id="2a2760f"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <p
                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                            V1 - Viên
                                                                                                            uống nội
                                                                                                            tiết Perfect
                                                                                                            Lady</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-8aa38ce elementor-widget elementor-widget-button"
                                                                                                    data-id="8aa38ce"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-button-wrapper">
                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                href="{{ route('chi-tiet-san-pham.show', 'perfect-lady') }}">
                                                                                                                <span
                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                    <span
                                                                                                                        class="elementor-button-text">Khám
                                                                                                                        phá
                                                                                                                        ngay</span>
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
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-fd89e9f e-con-full elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile e-flex e-con e-child"
                                                                        data-id="fd89e9f" data-element_type="container">
                                                                        <div class="woocommerce elementor-element elementor-element-ab770de elementor-grid-1 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-loop-grid"
                                                                            data-id="ab770de" data-element_type="widget"
                                                                            data-settings="{&quot;_skin&quot;:&quot;product&quot;,&quot;template_id&quot;:&quot;7008&quot;,&quot;columns&quot;:&quot;1&quot;,&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns_mobile&quot;:&quot;1&quot;,&quot;edit_handle_selector&quot;:&quot;[data-elementor-type=\&quot;loop-item\&quot;]&quot;,&quot;row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                                            data-widget_type="loop-grid.product">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-loop-container elementor-grid"
                                                                                    role="list">
                                                                                    <div data-elementor-type="loop-item"
                                                                                        data-elementor-id="7008"
                                                                                        class="elementor elementor-7008 e-loop-item e-loop-item-4759 post-4759 product type-product status-publish has-post-thumbnail product_cat-sac-to-duong-sang product_cat-da-khong-deu-mau product_cat-nam-sac-to product_cat-serum product_cat-serum-essence product_tag-home-care  instock shipping-taxable purchasable product-type-simple"
                                                                                        data-elementor-post-type="elementor_library"
                                                                                        data-custom-edit-handle="1">
                                                                                        <div class="elementor-element elementor-element-06cc180 cs-product-loop e-flex e-con-boxed e-con e-parent"
                                                                                            data-id="06cc180"
                                                                                            data-element_type="container">
                                                                                            <div class="e-con-inner">
                                                                                                <div class="elementor-element elementor-element-dd2c523 elementor-widget elementor-widget-theme-post-featured-image elementor-widget-image"
                                                                                                    data-id="dd2c523"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="theme-post-featured-image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <a
                                                                                                            href="{{ route('chi-tiet-san-pham.show', 'perfect-beauty-white') }}">
                                                                                                            <img data-lazyloaded="1"
                                                                                                                src="{{ asset('images/sanpham/perfect-beauty-white/white.webp') }}"
                                                                                                                loading="lazy"
                                                                                                                width="800"
                                                                                                                height="995"
                                                                                                                data-src="{{ asset('images/sanpham/perfect-beauty-white/white.webp') }}"
                                                                                                                class="attachment-large size-large wp-image-9187"
                                                                                                                alt="V2 - Viên uống trắng da Perfect Beauty White"
                                                                                                                data-srcset="{{ asset('images/sanpham/perfect-beauty-white/white.webp') }} 823w, {{ asset('images/sanpham/perfect-beauty-white/white.webp') }} 241w, {{ asset('images/sanpham/perfect-beauty-white/white.webp') }} 768w, {{ asset('images/sanpham/perfect-beauty-white/white.webp') }} 600w, {{ asset('images/sanpham/perfect-beauty-white/white.webp') }} 964w"
                                                                                                                data-sizes="auto" />
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-962880c elementor-absolute cs-product-tags elementor-widget elementor-widget-shortcode"
                                                                                                    data-id="962880c"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                                                    data-widget_type="shortcode.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-shortcode">
                                                                                                            <div
                                                                                                                class="product-tags-container-wrapper">
                                                                                                                <ul
                                                                                                                    class="product-tag-container-wrapper">
                                                                                                                    <li
                                                                                                                        class="product-tag-container">
                                                                                                                        <p
                                                                                                                            class="product-tag">
                                                                                                                            Tại
                                                                                                                            Nhà
                                                                                                                        </p>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-7efd07a elementor-widget elementor-widget-heading"
                                                                                                    data-id="7efd07a"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <h3
                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                            <a
                                                                                                                href="{{ route('chi-tiet-san-pham.show', 'perfect-beauty-white') }}">[Mã
                                                                                                                V2] Viên
                                                                                                                uống
                                                                                                                trắng da
                                                                                                                PERFECT
                                                                                                                BEAUTY
                                                                                                                WHITE
                                                                                                                Nhật Bản
                                                                                                                hỗ trợ
                                                                                                                sáng da,
                                                                                                                mờ nám,
                                                                                                                chống
                                                                                                                lão hóa
                                                                                                                70
                                                                                                                viên</a>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-2a2760f elementor-widget elementor-widget-heading"
                                                                                                    data-id="2a2760f"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <p
                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                            V2 - Viên
                                                                                                            uống trắng
                                                                                                            da Perfect
                                                                                                            Beauty White
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-8aa38ce elementor-widget elementor-widget-button"
                                                                                                    data-id="8aa38ce"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-button-wrapper">
                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                href="{{ route('chi-tiet-san-pham.show', 'perfect-beauty-white') }}">
                                                                                                                <span
                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                    <span
                                                                                                                        class="elementor-button-text">Khám
                                                                                                                        phá
                                                                                                                        ngay</span>
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
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-a9839b7 e-con-full elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile e-flex e-con e-child"
                                                                        data-id="a9839b7" data-element_type="container">
                                                                        <div class="woocommerce elementor-element elementor-element-f5a8501 elementor-grid-1 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-loop-grid"
                                                                            data-id="f5a8501" data-element_type="widget"
                                                                            data-settings="{&quot;_skin&quot;:&quot;product&quot;,&quot;template_id&quot;:&quot;7008&quot;,&quot;columns&quot;:&quot;1&quot;,&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns_mobile&quot;:&quot;1&quot;,&quot;edit_handle_selector&quot;:&quot;[data-elementor-type=\&quot;loop-item\&quot;]&quot;,&quot;row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                                            data-widget_type="loop-grid.product">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-loop-container elementor-grid"
                                                                                    role="list">
                                                                                    <div data-elementor-type="loop-item"
                                                                                        data-elementor-id="7008"
                                                                                        class="elementor elementor-7008 e-loop-item e-loop-item-4755 post-4755 product type-product status-publish has-post-thumbnail product_cat-serum product_cat-da-kho-mong-yeu product_cat-phuc-hoi-duong-am product_cat-serum-essence product_cat-thai-doc-phuc-hoi product_tag-home-care last instock shipping-taxable purchasable product-type-simple"
                                                                                        data-elementor-post-type="elementor_library"
                                                                                        data-custom-edit-handle="1">
                                                                                        <div class="elementor-element elementor-element-06cc180 cs-product-loop e-flex e-con-boxed e-con e-parent"
                                                                                            data-id="06cc180"
                                                                                            data-element_type="container">
                                                                                            <div class="e-con-inner">
                                                                                                <div class="elementor-element elementor-element-dd2c523 elementor-widget elementor-widget-theme-post-featured-image elementor-widget-image"
                                                                                                    data-id="dd2c523"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="theme-post-featured-image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <a
                                                                                                            href="{{ route('chi-tiet-san-pham.show', 'p9') }}">
                                                                                                            <img data-lazyloaded="1"
                                                                                                                src="{{ asset('images/sanpham/perfect-skin-nano-250/p9.webp') }}"
                                                                                                                loading="lazy"
                                                                                                                width="800"
                                                                                                                height="995"
                                                                                                                data-src="{{ asset('images/sanpham/perfect-skin-nano-250/p9.webp') }}"
                                                                                                                class="attachment-large size-large wp-image-9217"
                                                                                                                alt="P9 - Perfect Skin Nano 250%"
                                                                                                                data-srcset="{{ asset('images/sanpham/perfect-skin-nano-250/p9.webp') }} 823w, {{ asset('images/sanpham/perfect-skin-nano-250/p9.webp') }} 241w, {{ asset('images/sanpham/perfect-skin-nano-250/p9.webp') }} 768w, {{ asset('images/sanpham/perfect-skin-nano-250/p9.webp') }} 600w, {{ asset('images/sanpham/perfect-skin-nano-250/p9.webp') }} 964w"
                                                                                                                data-sizes="auto" />
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-962880c elementor-absolute cs-product-tags elementor-widget elementor-widget-shortcode"
                                                                                                    data-id="962880c"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                                                    data-widget_type="shortcode.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-shortcode">
                                                                                                            <div
                                                                                                                class="product-tags-container-wrapper">
                                                                                                                <ul
                                                                                                                    class="product-tag-container-wrapper">
                                                                                                                    <li
                                                                                                                        class="product-tag-container">
                                                                                                                        <p
                                                                                                                            class="product-tag">
                                                                                                                            Tại
                                                                                                                            Spa/Clinic
                                                                                                                        </p>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-7efd07a elementor-widget elementor-widget-heading"
                                                                                                    data-id="7efd07a"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <h3
                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                            <a
                                                                                                                href="{{ route('chi-tiet-san-pham.show', 'p9') }}">[Mã
                                                                                                                P9]
                                                                                                                SERUM
                                                                                                                PEPTIDE
                                                                                                                PERFECT
                                                                                                                SKIN
                                                                                                                NANO
                                                                                                                Nhật Bản
                                                                                                                hỗ trợ
                                                                                                                phục hồi
                                                                                                                da, mờ
                                                                                                                sẹo rỗ,
                                                                                                                tăng
                                                                                                                sinh
                                                                                                                collagen</a>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-2a2760f elementor-widget elementor-widget-heading"
                                                                                                    data-id="2a2760f"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <p
                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                            Serum -
                                                                                                            Perfect Skin
                                                                                                            Nano 250%
                                                                                                            (8ML)</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-8aa38ce elementor-widget elementor-widget-button"
                                                                                                    data-id="8aa38ce"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-button-wrapper">
                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                href="{{ route('chi-tiet-san-pham.show', 'p9') }}">
                                                                                                                <span
                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                    <span
                                                                                                                        class="elementor-button-text">Khám
                                                                                                                        phá
                                                                                                                        ngay</span>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="e-n-menu-item">
                                                <div id="e-n-menu-title-1504"
                                                    class="e-n-menu-title <?php echo (request()->routeIs('lieu-phap') ? 'e-current' : ''); ?>">
                                                    <a class="e-n-menu-title-container e-focus e-link"
                                                        href="{{ route('lieu-phap') }}"> <span
                                                            class="e-n-menu-title-text">
                                                            Phác Đồ </span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="e-n-menu-item">
                                                <div id="e-n-menu-title-1505"
                                                    class="e-n-menu-title <?php echo (request()->routeIs('thuong-hieu') ? 'e-current' : ''); ?>">
                                                    <a class="e-n-menu-title-container e-focus e-link"
                                                        href="{{ route('thuong-hieu') }}"> <span
                                                            class="e-n-menu-title-text">
                                                            Thương Hiệu </span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="e-n-menu-item">
                                                <div id="e-n-menu-title-1506"
                                                    class="e-n-menu-title <?php echo (request()->routeIs('tin-tuc') ? 'e-current' : ''); ?>">
                                                    <a class="e-n-menu-title-container e-focus e-link"
                                                        href="{{ route('tin-tuc') }}"> <span
                                                            class="e-n-menu-title-text">
                                                            Tin Tức </span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="e-n-menu-item">
                                                <div id="e-n-menu-title-1507"
                                                    class="e-n-menu-title <?php echo (request()->routeIs('hop-tac') ? 'e-current' : ''); ?>">
                                                    <a class="e-n-menu-title-container e-focus e-link"
                                                        href="{{ route('hop-tac') }}"> <span
                                                            class="e-n-menu-title-text">
                                                            Hợp Tác </span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4799899 elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-view-default elementor-widget elementor-widget-icon"
                            data-id="4799899" data-element_type="widget" id="menu-back-button"
                            data-widget_type="icon.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-wrapper">
                                    <div class="elementor-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-left"
                                            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-28a8242 e-con-full e-flex e-con e-child"
                        data-id="28a8242" data-element_type="container">
                        <div class="elementor-element elementor-element-c1638b5 elementor-align-left search_btn_modal elementor-widget elementor-widget-button"
                            data-id="c1638b5" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                        href="#elementor-action%3Aaction%3Doff_canvas%3Aopen%26settings%3DeyJpZCI6ImJkNzZhNGQiLCJkaXNwbGF5TW9kZSI6Im9wZW4ifQ%3D%3D"
                                        id="cs-search">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path d="M17.5 17.5L22 22" stroke="#252525" stroke-opacity="0.6"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z"
                                                        stroke="#252525" stroke-opacity="0.6" stroke-width="1.5"
                                                        stroke-linejoin="round"></path>
                                                </svg> </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6154a98 cs-header-button elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-widget elementor-widget-button"
                            data-id="6154a98" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                        href="https://shop.perfectnhatban.com/" id="cs-shop-button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">PERFECT Shop</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </header>

    <main id="content" class="site-main post-93 page type-page status-publish has-post-thumbnail hentry">
        <div class="page-content">
            @yield('content')
        </div>

    </main>
    <style id="perfect-serif-font-override">
    html,
    body,
    body :where(h1, h2, h3, h4, h5, h6, p, a, span, li, button, input, textarea, select, label, small, strong, b, em, figcaption, blockquote, th, td),
    .elementor-heading-title,
    .elementor-button,
    .elementor-widget-text-editor,
    .elementor-icon-list-text,
    .elementor-counter-title,
    .elementor-counter-number-wrapper {
        font-family: var(--perfect-serif-font) !important;
    }

    body {
        font-weight: 400;
        line-height: 1.62;
    }

    body :where(h1, h2, h3, h4, h5, h6, .elementor-heading-title) {
        font-weight: 600 !important;
        line-height: 1.28 !important;
        letter-spacing: 0 !important;
    }

    .elementor-button,
    .elementor-button-text,
    .elementor-button-content-wrapper {
        line-height: 1.18 !important;
        align-items: center !important;
    }

    .elementor-button {
        display: inline-flex !important;
        justify-content: center !important;
        font-weight: 600 !important;
    }

    #ftMain,
    #ftMain :where(p, a, span, li, .elementor-heading-title) {
        line-height: 1.48 !important;
    }

    #ftMain {
        display: none !important;
    }

    .perfect-footer,
    .perfect-footer * {
        box-sizing: border-box;
        font-family: "Lexend Deca", sans-serif !important;
        letter-spacing: 0 !important;
    }

    .perfect-footer {
        background: #f5fbff !important;
        border-top: 1px solid rgba(62, 168, 226, 0.14);
        color: #050505;
    }

    .perfect-footer :where(h1, h2, h3, p, ul, li, a, span) {
        margin-top: 0 !important;
        min-height: 0 !important;
    }

    .perfect-footer__inner {
        width: min(1620px, calc(100% - 140px));
        margin: 0 auto;
        padding: 32px 0 30px;
        display: grid;
        grid-template-columns: minmax(300px, 3fr) minmax(175px, 2fr) minmax(235px, 2fr) minmax(390px, 4fr);
        column-gap: 58px;
        row-gap: 30px;
        align-items: start;
    }

    .perfect-footer__brand {
        max-width: 420px;
    }

    .perfect-footer__logo {
        display: inline-flex;
        width: min(292px, 100%);
        margin-bottom: 18px;
        background: transparent;
    }

    .perfect-footer__logo img {
        display: block;
        width: 100%;
        height: auto;
        max-height: 118px;
        object-fit: contain;
    }

    .perfect-footer__tagline {
        margin: 0 0 18px !important;
        font-size: 20px !important;
        line-height: 1.45 !important;
        font-weight: 400;
        color: #111;
    }

    .perfect-footer__flag-dot {
        display: inline-block;
        width: 8px;
        height: 8px;
        margin-left: 4px;
        border-radius: 999px;
        background: #ed1d3b;
        vertical-align: middle;
    }

    .perfect-footer__socials {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        align-items: center;
        justify-content: flex-start;
        margin: 0 !important;
    }

    .perfect-footer__social {
        width: 42px;
        height: 42px;
        border-radius: 999px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 42px;
        color: #fff !important;
        font-size: 0 !important;
        text-decoration: none !important;
        line-height: 1 !important;
        box-shadow: 0 8px 18px rgba(17, 24, 39, 0.12);
        transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease;
        vertical-align: middle;
    }

    .perfect-footer__social svg {
        display: block;
        width: 19px;
        height: 19px;
        color: currentColor;
        fill: currentColor;
        stroke: none;
        flex: 0 0 auto;
    }

    .perfect-footer__social--facebook svg {
        width: 11px;
        height: 21px;
    }

    .perfect-footer__social--youtube svg {
        width: 20px;
        height: 20px;
    }

    .perfect-footer__social--phone svg {
        width: 20px;
        height: 20px;
    }

    .perfect-footer__social--tiktok::before,
    .perfect-footer__social--phone::before,
    .perfect-footer__social--youtube::before {
        content: "";
        display: block;
        width: 20px;
        height: 20px;
        background: currentColor;
    }

    .perfect-footer__social--tiktok::before {
        -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath d='M14 3v11.2a3.2 3.2 0 1 1-1.4-2.65V6.8L7.4 8.1v8.1A3.2 3.2 0 1 1 6 13.55V6.3L14 4.2V3z'/%3E%3C/svg%3E") center / contain no-repeat;
        mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath d='M14 3v11.2a3.2 3.2 0 1 1-1.4-2.65V6.8L7.4 8.1v8.1A3.2 3.2 0 1 1 6 13.55V6.3L14 4.2V3z'/%3E%3C/svg%3E") center / contain no-repeat;
    }

    .perfect-footer__social--phone::before {
        -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.24.2 2.45.57 3.57a1 1 0 0 1-.24 1.02l-2.21 2.2z'/%3E%3C/svg%3E") center / contain no-repeat;
        mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.24.2 2.45.57 3.57a1 1 0 0 1-.24 1.02l-2.21 2.2z'/%3E%3C/svg%3E") center / contain no-repeat;
    }

    .perfect-footer__social--youtube::before {
        -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M21.58 7.19a2.64 2.64 0 0 0-1.86-1.87C18.08 4.88 11.5 4.88 11.5 4.88s-6.58 0-8.22.44a2.64 2.64 0 0 0-1.86 1.87A27.45 27.45 0 0 0 1 12.25a27.45 27.45 0 0 0 .42 5.06 2.64 2.64 0 0 0 1.86 1.87c1.64.44 8.22.44 8.22.44s6.58 0 8.22-.44a2.64 2.64 0 0 0 1.86-1.87A27.45 27.45 0 0 0 22 12.25a27.45 27.45 0 0 0-.42-5.06zM9.36 15.38V9.12l5.46 3.13-5.46 3.13z'/%3E%3C/svg%3E") center / contain no-repeat;
        mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M21.58 7.19a2.64 2.64 0 0 0-1.86-1.87C18.08 4.88 11.5 4.88 11.5 4.88s-6.58 0-8.22.44a2.64 2.64 0 0 0-1.86 1.87A27.45 27.45 0 0 0 1 12.25a27.45 27.45 0 0 0 .42 5.06 2.64 2.64 0 0 0 1.86 1.87c1.64.44 8.22.44 8.22.44s6.58 0 8.22-.44a2.64 2.64 0 0 0 1.86-1.87A27.45 27.45 0 0 0 22 12.25a27.45 27.45 0 0 0-.42-5.06zM9.36 15.38V9.12l5.46 3.13-5.46 3.13z'/%3E%3C/svg%3E") center / contain no-repeat;
    }

    .perfect-footer__social:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 24px rgba(17, 24, 39, 0.18);
        filter: saturate(1.05);
    }

    .perfect-footer__social:focus-visible {
        outline: 3px solid rgba(62, 168, 226, 0.28);
        outline-offset: 3px;
    }

    .perfect-footer__social--facebook {
        background: #315aa3;
    }

    .perfect-footer__social--tiktok {
        background: #050505;
    }

    .perfect-footer__social--phone {
        background: #3ea8e2 !important;
    }

    .perfect-footer__social--youtube {
        background: #cf2f28;
    }

    .perfect-footer__title {
        margin: 14px 0 22px !important;
        font-size: 26px !important;
        line-height: 1.18 !important;
        font-weight: 800;
        color: #050505;
        letter-spacing: 0;
    }

    .perfect-footer__list,
    .perfect-footer__contact {
        list-style: none;
        padding: 0 !important;
        margin: 0 !important;
        display: flex !important;
        flex-direction: column !important;
        gap: 20px !important;
        align-content: flex-start;
    }

    .perfect-footer__list li,
    .perfect-footer__contact li {
        margin: 0 !important;
        padding: 0 !important;
        min-height: 0 !important;
        font-size: 20px !important;
        line-height: 1.35 !important;
    }

    .perfect-footer__list li {
        display: block !important;
    }

    .perfect-footer__list a,
    .perfect-footer__contact a,
    .perfect-footer__contact span {
        color: #111 !important;
        text-decoration: none !important;
        font-size: 20px !important;
        line-height: 1.35 !important;
        font-weight: 400;
    }

    .perfect-footer__list a:hover,
    .perfect-footer__contact a:hover {
        color: #d52e52 !important;
    }

    .perfect-footer__contact li {
        display: grid;
        grid-template-columns: 22px 1fr;
        column-gap: 10px;
        align-items: start;
    }

    .perfect-footer__contact-icon {
        color: #df3566 !important;
        font-size: 18px !important;
        line-height: 1.45 !important;
        text-align: center;
    }

    .perfect-footer__copyright {
        background: #f5fbff;
        border-top: 1px solid rgba(5, 5, 5, 0.08);
        color: #050505;
        font-size: 15px;
        line-height: 1.5;
        padding: 14px 20px 18px;
        text-align: center;
    }

    .perfect-footer__copyright strong {
        font-weight: 800;
    }

    @media (max-width: 1200px) {
        .perfect-footer__inner {
            width: min(100% - 48px, 980px);
            grid-template-columns: 1fr 1fr;
            gap: 42px 56px;
        }
    }

    @media (max-width: 767px) {
        .perfect-footer__inner {
            width: min(100% - 32px, 520px);
            padding: 38px 0;
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .perfect-footer__logo {
            width: min(260px, 100%);
            margin-bottom: 18px;
        }

        .perfect-footer__tagline,
        .perfect-footer__list a,
        .perfect-footer__contact a,
        .perfect-footer__contact span {
            font-size: 17px;
        }

        .perfect-footer__title {
            margin: 0 0 16px;
            font-size: 22px;
        }
    }
    </style>

    <footer data-elementor-type="footer" data-elementor-id="65" class="elementor elementor-65 elementor-location-footer"
        data-elementor-post-type="elementor_library">
        <section class="perfect-footer" aria-label="Footer">
            <div class="perfect-footer__inner">
                <div class="perfect-footer__brand">
                    <a class="perfect-footer__logo" href="{{ route('home') }}" aria-label="PERFECT Nhật Bản">
                        <img src="{{ asset('images/banner/logo-chinh-1024x446.webp') }}" alt="PERFECT Made In Japan"
                            width="292" height="127" loading="lazy">
                    </a>
                    <p class="perfect-footer__tagline">Phân phối mỹ phẩm - thực phẩm bảo vệ sức khỏe nhập khẩu Nhật
                        Bản <span class="perfect-footer__flag-dot" aria-hidden="true"></span><br>Nâng tầm sức khỏe &amp;
                        sắc đẹp của bạn!</p>
                    <div class="perfect-footer__socials" aria-label="Mạng xã hội">
                        <a class="perfect-footer__social perfect-footer__social--facebook"
                            href="https://www.facebook.com/PecfectTuyendaily" target="_blank" rel="noopener nofollow"
                            aria-label="Facebook">
                            <svg viewBox="0 0 320 512" aria-hidden="true" focusable="false">
                                <path
                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg>
                        </a>
                        <a class="perfect-footer__social perfect-footer__social--tiktok"
                            href="https://www.tiktok.com/@perfect.nhatban" target="_blank" rel="noopener nofollow"
                            aria-label="TikTok">♪</a>
                        <a class="perfect-footer__social perfect-footer__social--phone" href="tel:0986001885"
                            aria-label="Gọi hotline" rel="nofollow">☎</a>
                        <a class="perfect-footer__social perfect-footer__social--youtube"
                            href="https://www.youtube.com/@phuongtokyoperfectnhatban" target="_blank"
                            rel="noopener nofollow" aria-label="YouTube">▶</a>
                    </div>
                </div>

                <nav class="perfect-footer__nav" aria-label="Về chúng tôi">
                    <h2 class="perfect-footer__title">Về chúng tôi</h2>
                    <ul class="perfect-footer__list">
                        <li><a href="{{ route('thuong-hieu') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('chinh-sach-bao-mat') }}">Chính sách bảo mật</a></li>
                        <li><a href="{{ route('chinh-sach-bao-mat') }}">Điều khoản sử dụng</a></li>
                        <li><a href="{{ route('chinh-sach-bao-mat') }}">Chính sách đổi trả</a></li>
                        <li><a href="{{ route('hop-tac') }}">Liên hệ</a></li>
                    </ul>
                </nav>

                <nav class="perfect-footer__nav" aria-label="Hỗ trợ khách hàng">
                    <h2 class="perfect-footer__title">Hỗ trợ khách hàng</h2>
                    <ul class="perfect-footer__list">
                        <li><a href="{{ route('sanpham') }}">Hướng dẫn mua hàng</a></li>
                        <li><a href="{{ route('hop-tac') }}">Hình thức thanh toán</a></li>
                        <li><a href="{{ route('hop-tac') }}">Chính sách vận chuyển</a></li>
                        <li><a href="{{ route('chinh-sach-bao-mat') }}">Đổi trả và hoàn tiền</a></li>
                        <li><a href="{{ route('tin-tuc') }}">Câu hỏi thường gặp</a></li>
                    </ul>
                </nav>

                <div class="perfect-footer__info">
                    <h2 class="perfect-footer__title">Thông tin liên hệ</h2>
                    <ul class="perfect-footer__contact">
                        <li><span class="perfect-footer__contact-icon" aria-hidden="true">📞</span><a href="tel:0986001885">Hotline:
                                0986.001.885</a></li>
                        <li><span class="perfect-footer__contact-icon" aria-hidden="true">✉️</span><a
                                href="mailto:cskhperfectnhatban@gmail.com">Email:
                                cskhperfectnhatban@gmail.com</a></li>
                        <li><span class="perfect-footer__contact-icon" aria-hidden="true">📍</span><span>59A Bờ Sông Sét, Tương Mai, Hà
                                Nội, Việt Nam</span></li>
                        <li><span class="perfect-footer__contact-icon" aria-hidden="true">🕒</span><span>08:00 - 17:00</span></li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="perfect-footer__copyright">
            © <strong>2017 - 2026 CÔNG TY TNHH ADHOME THỊNH VƯỢNG</strong><br>
            Số ĐKKD: 0107816175 do Sở KH và Đầu tư TPHN cấp ngày 21 tháng 4 năm 2021
        </div>
        <div class="elementor-element elementor-element-8b27600 e-flex e-con-boxed e-con e-parent" data-id="8b27600"
            data-element_type="container" id="ftMain"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-eec0bb0 e-con-full e-flex e-con e-child"
                    data-id="eec0bb0" data-element_type="container">
                    <div class="elementor-element elementor-element-d26b5b8 e-con-full e-flex e-con e-child"
                        data-id="d26b5b8" data-element_type="container">
                        <div class="elementor-element elementor-element-f7005ca elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                            data-id="f7005ca" data-element_type="widget" data-widget_type="theme-site-logo.default">
                            <div class="elementor-widget-container">
                                <a href="{{ route('home') }}">
                                    <img width="150" height="65" src="{{ asset('images/logo/logo1.png
                                    ') }}" class="attachment-full size-full wp-image-26" alt="Perfect logo" /> </a>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-77afa8c elementor-widget__width-initial elementor-widget-laptop__width-initial elementor-widget elementor-widget-heading"
                            data-id="77afa8c" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default"><a
                                        href="https://masothue.com/0107816175-cong-ty-tnhh-adhome-thinh-vuong">Chúng tôi
                                        luôn trân trọng và mong đợi nhận được mọi ý kiến đóng góp từ khách hàng để có
                                        thể nâng cấp trải nghiệm sản phẩm và dịch vụ tốt hơn nữa.</a></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6feff6b e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                            data-id="6feff6b" data-element_type="widget" data-widget_type="social-icons.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-social-icons-wrapper elementor-grid" role="list">
                                    <span class="elementor-grid-item" role="listitem">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-9f6eff0"
                                            href="https://www.facebook.com/messages/t/1081190525071692" target="_blank">
                                            <span class="elementor-screen-only">Facebook-f</span>
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook-f"
                                                viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                </path>
                                            </svg> </a>
                                    </span>
                                    <span class="elementor-grid-item" role="listitem">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-gsc elementor-repeater-item-354cc6f"
                                            href="https://zalo.me/3585587855118291388" target="_blank">
                                            <span class="elementor-screen-only">PERFECT</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_1336_55090)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.9338 0.580078H13.054C15.9658 0.580078 17.6674 1.00776 19.1779 1.81761C20.6884 2.62746 21.8804 3.8104 22.6812 5.32093C23.491 6.83145 23.9187 8.53305 23.9187 11.4449V13.556C23.9187 16.4678 23.491 18.1694 22.6812 19.6799C21.8713 21.1904 20.6884 22.3825 19.1779 23.1832C17.6674 23.9931 15.9658 24.4208 13.054 24.4208H10.9429C8.03104 24.4208 6.32945 23.9931 4.81893 23.1832C3.30844 22.3734 2.1164 21.1904 1.31565 19.6799C0.505797 18.1694 0.078125 16.4678 0.078125 13.556V11.4449C0.078125 8.53305 0.505797 6.83145 1.31565 5.32093C2.1255 3.8104 3.30844 2.61837 4.81893 1.81761C6.32037 1.00776 8.03104 0.580078 10.9338 0.580078Z"
                                                        fill="#0068FF"></path>
                                                    <path opacity="0.12" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M23.9201 13.207V13.5554C23.9201 16.4672 23.4925 18.1688 22.6826 19.6794C21.8728 21.1899 20.6898 22.3819 19.1793 23.1827C17.6688 23.9925 15.9672 24.4202 13.0554 24.4202H10.9443C8.56171 24.4202 6.98938 24.1338 5.66899 23.5861L3.49219 21.3445L23.9201 13.207Z"
                                                        fill="#0068FF"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M3.73431 21.4228C4.8493 21.5461 6.24332 21.2281 7.23313 20.7476C11.5312 23.1233 18.2498 23.0098 22.3167 20.4071C22.4744 20.1705 22.6218 19.9245 22.7585 19.6694C23.5714 18.1534 24.0006 16.4456 24.0006 13.5232V11.4044C24.0006 8.48192 23.5714 6.77413 22.7585 5.25811C21.9549 3.74209 20.7585 2.55485 19.2425 1.74204C17.7265 0.929235 16.0187 0.5 13.0962 0.5H10.9683C8.4793 0.5 6.86353 0.813322 5.50594 1.41149C5.43173 1.47794 5.35892 1.54553 5.28764 1.61425C1.30471 5.45374 1.00195 13.7765 4.37933 18.2975C4.3831 18.3042 4.38727 18.3109 4.39186 18.3177C4.91242 19.0849 4.41012 20.4274 3.62472 21.2128C3.49686 21.3315 3.54252 21.4046 3.73431 21.4228Z"
                                                        fill="#FAFAFA"></path>
                                                    <path
                                                        d="M9.86961 8.66016H5.20161V9.6611H8.44099L5.24707 13.6194C5.14699 13.765 5.07422 13.9015 5.07422 14.2108V14.4656H9.47831C9.69671 14.4656 9.87873 14.2836 9.87873 14.0652V13.5284H6.47553L9.47831 9.76118C9.52382 9.7066 9.60571 9.60652 9.64214 9.56102L9.66033 9.53371C9.83323 9.27892 9.86961 9.06052 9.86961 8.79667V8.66016Z"
                                                        fill="#0068FF"></path>
                                                    <path
                                                        d="M15.8132 14.4656H16.4775V8.66016H15.4766V14.1289C15.4766 14.311 15.6221 14.4656 15.8132 14.4656Z"
                                                        fill="#0068FF"></path>
                                                    <path
                                                        d="M12.3921 9.95215C11.1363 9.95215 10.1172 10.9713 10.1172 12.227C10.1172 13.4827 11.1363 14.5019 12.3921 14.5019C13.6478 14.5019 14.6669 13.4827 14.6669 12.227C14.676 10.9713 13.6569 9.95215 12.3921 9.95215ZM12.3921 13.5646C11.655 13.5646 11.0544 12.9641 11.0544 12.227C11.0544 11.49 11.655 10.8894 12.3921 10.8894C13.1291 10.8894 13.7297 11.49 13.7297 12.227C13.7297 12.9641 13.1382 13.5646 12.3921 13.5646Z"
                                                        fill="#0068FF"></path>
                                                    <path
                                                        d="M19.4337 9.91602C18.1688 9.91602 17.1406 10.9443 17.1406 12.2091C17.1406 13.4739 18.1688 14.5022 19.4337 14.5022C20.6985 14.5022 21.7267 13.4739 21.7267 12.2091C21.7267 10.9443 20.6985 9.91602 19.4337 9.91602ZM19.4337 13.5649C18.6875 13.5649 18.0869 12.9644 18.0869 12.2182C18.0869 11.472 18.6875 10.8715 19.4337 10.8715C20.1798 10.8715 20.7804 11.472 20.7804 12.2182C20.7804 12.9644 20.1798 13.5649 19.4337 13.5649Z"
                                                        fill="#0068FF"></path>
                                                    <path
                                                        d="M14.1386 14.4651H14.6755V10.0791H13.7383V14.0738C13.7383 14.2831 13.9202 14.4651 14.1386 14.4651Z"
                                                        fill="#0068FF"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1336_55090">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.5)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg> </a>
                                    </span>
                                    <span class="elementor-grid-item" role="listitem">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-gsc elementor-repeater-item-bbe0709"
                                            href="https://shopee.vn/perfectnhatban?categoryId=100001&entryPoint=ShopByPDP&itemId=53459409181&upstream=search"
                                            target="_blank">
                                            <span class="elementor-screen-only">PERFECT</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <path
                                                    d="M18.341 21.6895H5.65801C4.59001 21.6895 3.71001 20.85 3.66001 19.783L3.02401 6.21295C3.01051 5.92795 3.23801 5.68945 3.52351 5.68945H20.4755C20.761 5.68945 20.9885 5.92795 20.975 6.21295L20.339 19.783C20.289 20.85 19.409 21.6895 18.341 21.6895Z"
                                                    fill="#F4511E"></path>
                                                <path
                                                    d="M16.25 5.93945H15.25C15.25 3.87145 13.792 2.18945 12 2.18945C10.208 2.18945 8.75 3.87145 8.75 5.93945H7.75C7.75 3.32045 9.6565 1.18945 12 1.18945C14.3435 1.18945 16.25 3.32045 16.25 5.93945Z"
                                                    fill="#F4511E"></path>
                                                <path
                                                    d="M12.124 13.0336C10.7535 12.5326 9.92148 12.1621 9.92148 11.2451C9.92148 10.3196 10.8095 9.6476 12.0335 9.6476C12.876 9.6476 13.613 9.9776 13.9775 10.1736C14.0395 10.2071 14.2145 10.3121 14.3135 10.3786L14.3785 10.4221L14.8575 9.6431L14.779 9.5916C14.393 9.3311 13.352 8.7251 12.034 8.7251C10.3045 8.7251 9.00048 9.8081 9.00048 11.2446C9.00048 12.8731 10.492 13.4181 11.808 13.8991C13.343 14.4601 14.275 14.8866 14.275 16.0736C14.275 16.9876 13.2415 17.7306 11.9705 17.7306C10.5385 17.7306 9.30748 16.6781 9.29598 16.6681L9.23199 16.6091L8.70898 17.3801L8.76198 17.4236C9.11798 17.7121 10.4 18.6526 11.97 18.6526C13.7795 18.6526 15.197 17.5196 15.197 16.0736C15.1965 14.1561 13.564 13.5601 12.124 13.0336Z"
                                                    fill="#FAFAFA"></path>
                                            </svg> </a>
                                    </span>
                                    <span class="elementor-grid-item" role="listitem">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-tiktok"
                                            href="https://vt.tiktok.com/ZSxHRLHnu/?page=TikTokShop" target="_blank">

                                            <span class="elementor-screen-only">TikTok</span>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="#000000">

                                                <path
                                                    d="M19.589 6.686a4.793 4.793 0 0 1-3.77-4.228V2h-3.193v13.766c0 1.303-1.04 2.357-2.322 2.357s-2.323-1.054-2.323-2.357 1.04-2.357 2.323-2.357c.254 0 .499.041.728.116V10.27a5.507 5.507 0 0 0-.728-.05C7.064 10.22 4.5 12.817 4.5 16s2.564 5.78 5.804 5.78S16.108 19.183 16.108 16V9.984a7.95 7.95 0 0 0 4.392 1.36V8.182a4.79 4.79 0 0 1-.911-.496z" />
                                            </svg>

                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d764cf2 e-con-full e-flex e-con e-child"
                        data-id="d764cf2" data-element_type="container">
                        <div class="elementor-element elementor-element-bafb479 e-con-full e-flex e-con e-child"
                            data-id="bafb479" data-element_type="container">
                            <div class="elementor-element elementor-element-905c927 elementor-widget elementor-widget-heading"
                                data-id="905c927" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">DANH MỤC</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e17caec elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                data-id="e17caec" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="{{ route('sanpham') }}">

                                                <span class="elementor-icon-list-text">Sản phẩm</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="{{ route('lieu-phap') }}">

                                                <span class="elementor-icon-list-text">Phác đồ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-0f6196d e-con-full e-flex e-con e-child"
                        data-id="0f6196d" data-element_type="container">
                        <div class="elementor-element elementor-element-d9f4b9b e-con-full e-flex e-con e-child"
                            data-id="d9f4b9b" data-element_type="container">
                            <div class="elementor-element elementor-element-1238e51 elementor-widget elementor-widget-heading"
                                data-id="1238e51" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">VỀ CHÚNG TÔI</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a6cb2e0 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                data-id="a6cb2e0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="{{ route('thuong-hieu') }}">

                                                <span class="elementor-icon-list-text">Giới thiệu</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="{{ route('hop-tac') }}">

                                                <span class="elementor-icon-list-text">Hợp tác với Perfect Nhật
                                                    Bản</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="{{ route('chinh-sach-bao-mat') }}">

                                                <span class="elementor-icon-list-text">Chính sách bảo mật</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-e587a24 e-con-full elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile e-flex e-con e-child"
                        data-id="e587a24" data-element_type="container">
                        <div class="elementor-element elementor-element-1d3f71e e-con-full e-flex e-con e-child"
                            data-id="1d3f71e" data-element_type="container">
                            <div class="elementor-element elementor-element-d477fb9 elementor-widget elementor-widget-heading"
                                data-id="d477fb9" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">CHĂM SÓC KHÁCH HÀNG</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9845e89 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                data-id="9845e89" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="mailto:Cskhperfectnhatban@gmail.com">

                                                <span
                                                    class="elementor-icon-list-text">Cskhperfectnhatban@gmail.com</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="tel:0986001885">

                                                <span class="elementor-icon-list-text"><strong>Miền Bắc:</strong>
                                                    0986001885</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-f2f51d4 e-con-full e-flex e-con e-child"
                        data-id="f2f51d4" data-element_type="container">
                        <div class="elementor-element elementor-element-d811d29 e-con-full e-flex e-con e-child"
                            data-id="d811d29" data-element_type="container">
                            <div class="elementor-element elementor-element-8739237 elementor-widget elementor-widget-heading"
                                data-id="8739237" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">VĂN PHÒNG ĐẠI DIỆN</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-85ad584 elementor-list-item-link-inline elementor-widget__width-initial elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                data-id="85ad584" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-text"><b>Miền Bắc:</b> 59A Bờ Sông Sét ,
                                                Tương Mai Hoàng Mai Hà Nội</b>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-80c145b e-con-full e-flex e-con e-child"
                                data-id="80c145b" data-element_type="container">
                                <div class="elementor-element elementor-element-f84e395 elementor-widget elementor-widget-image"
                                    data-id="f84e395" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="#">
                                            <img data-lazyloaded="1"
                                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDQ4IDI0Ij48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                width="48" height="24"
                                                data-src="{{ asset('images/banner/banner2.webp') }}"
                                                class="attachment-full size-full wp-image-446" alt="" /> </a>
                                    </div>
                                </div>
                                <!-- <div class="elementor-element elementor-element-31b68cb elementor-widget elementor-widget-image"
                                    data-id="31b68cb" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="http://online.gov.vn/Home/WebDetails/57111">
                                            <img data-lazyloaded="1"
                                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3OSIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDc5IDI0Ij48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                width="79" height="24"
                                                data-src="{{ asset('images/banner/banner2.webp') }}"
                                                class="attachment-full size-full wp-image-447" alt="" /> </a>
                                    </div>
                                </div> -->
                            </div>
                            <div class="elementor-element elementor-element-9c10a0d e-con-full floating-contact-buttons e-transform e-transform e-flex e-con e-child"
                                data-id="9c10a0d" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;fixed&quot;,&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-50,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_laptop&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet_extra&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile_extra&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.8,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                                <div class="elementor-element elementor-element-4143dc5 e-con-full e-flex e-con e-child floating-contact-item floating-contact-facebook"
                                    data-id="4143dc5" data-element_type="container">
                                    <div class="elementor-element elementor-element-2da0dd3 elementor-widget elementor-widget-image"
                                        data-id="2da0dd3" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <a href="https://www.facebook.com/messages/t/1081190525071692">
                                                <img data-lazyloaded="1"
                                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                    width="40" height="40"
                                                    data-src="{{ asset('images/banner/banner2.webp') }}"
                                                    class="attachment-large size-large wp-image-9009" alt="" /> </a>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-009673c elementor-widget elementor-widget-heading"
                                        data-id="009673c" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Facebook</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-91a9e9d e-con-full e-flex e-con e-child floating-contact-item floating-contact-zalo"
                                    data-id="91a9e9d" data-element_type="container">
                                    <div class="elementor-element elementor-element-66855c4 elementor-widget elementor-widget-image"
                                        data-id="66855c4" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <a href="https://zalo.me/3585587855118291388">
                                                <img data-lazyloaded="1"
                                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                    width="40" height="40"
                                                    data-src="{{ asset('images/banner/banner2.webp') }}"
                                                    class="attachment-large size-large wp-image-9011" alt="" /> </a>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-e699431 elementor-widget elementor-widget-heading"
                                        data-id="e699431" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Zalo</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4408027 e-con-full e-flex e-con e-child floating-contact-item floating-contact-map"
                                    data-id="4408027" data-element_type="container">
                                    <div class="elementor-element elementor-element-5c003ca elementor-widget elementor-widget-image"
                                        data-id="5c003ca" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <a href="https://maps.app.goo.gl/fpe2e5nfPEwjZHXKA">
                                                <img data-lazyloaded="1"
                                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg=="
                                                    width="40" height="40"
                                                    data-src="{{ asset('images/banner/banner2.webp') }}"
                                                    class="attachment-large size-large wp-image-9010" alt="" /> </a>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d6cc334 elementor-widget elementor-widget-heading"
                                        data-id="d6cc334" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Map</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element e-con-full e-flex e-con e-child floating-contact-item floating-contact-tiktok"
                                    data-id="floating-tiktok" data-element_type="container">
                                    <div class="elementor-element elementor-widget elementor-widget-image"
                                        data-id="floating-tiktok-icon" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <a href="https://vt.tiktok.com/ZSxHRLHnu/?page=TikTokShop">
                                                <img data-lazyloaded="1"
                                                    src="{{ asset('images/logo/tiktok-6338432_960_720.webp') }}"
                                                    width="40" height="40"
                                                    data-src="{{ asset('images/logo/tiktok-6338432_960_720.webp') }}"
                                                    class="attachment-large size-large" alt="TikTok" /> </a>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-widget elementor-widget-heading"
                                        data-id="floating-tiktok-label" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">TikTok</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-779336f e-con-full e-flex e-con e-child"
                    data-id="779336f" data-element_type="container">
                    <div class="elementor-element elementor-element-9792272 elementor-widget elementor-widget-heading"
                        data-id="9792272" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">© 2017 - 2026 CÔNG TY TNHH ADHOME
                                THỊNH VƯỢNG<br>Số ĐKKD: 0107816175 do Sở KH và Đầu tư TPHN cấp ngày 21 tháng 4 năm 2021
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-ece71f4 e-flex e-con-boxed e-con e-parent" data-id="ece71f4"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-b711765 elementor-widget elementor-widget-html"
                    data-id="b711765" data-element_type="widget" data-widget_type="html.default">
                    <div class="elementor-widget-container">
                        <!-- back to top -->
                        <div class="hieudm_progress-wrap">
                            <svg class="hieudm_progress-circle svg-content" width="100%" height="100%"
                                viewBox="-1 -1 102 102">
                                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
                            </svg>
                        </div>
                        <!-- end back to top -->

                        <style>
                        .hieudm_progress-wrap {
                            position: fixed;
                            right: 30px;
                            bottom: 100px;
                            height: 46px;
                            width: 46px;
                            cursor: pointer;
                            display: block;
                            border-radius: 50px;
                            background: rgba(255, 255, 255, 0.95);
                            box-shadow: 0 6px 18px rgb(0 0 0 / 12%), inset 0 0 0 2px rgb(0 158 96 / 22%);
                            z-index: 99;
                            opacity: 0;
                            visibility: hidden;
                            transform: translateY(15px);
                            -webkit-transition: all 200ms linear;
                            transition: all 200ms linear;
                        }

                        .hieudm_progress-wrap:hover {
                            background-color: #ffffff;
                            box-shadow: 0 8px 22px rgb(0 0 0 / 16%), inset 0 0 0 2px rgb(0 158 96 / 42%);
                        }

                        .hieudm_progress-wrap.hieudm_active-progress {
                            opacity: 1;
                            visibility: visible;
                            transform: translateY(0);
                        }

                        .hieudm_progress-wrap::after {
                            position: absolute;
                            content: url('{{ asset("wp-content/uploads/2025/03/scroll-top.svg") }}');
                            text-align: center;
                            line-height: 40px;
                            font-family: monospace;
                            font-size: 20px;
                            color: var(--e-global-color-primary);
                            left: 0;
                            top: 0;
                            height: 46px;
                            width: 46px;
                            cursor: pointer;
                            display: block;
                            z-index: 1;
                            -webkit-transition: all 200ms linear;
                            transition: all 200ms linear;
                        }

                        .hieudm_progress-wrap svg.hieudm_progress-circle {
                            position: absolute;
                            top: 0;
                            right: 0
                        }

                        .hieudm_progress-wrap svg path {
                            fill: rgba(255, 255, 255, 0.88);
                        }

                        .hieudm_progress-wrap svg.hieudm_progress-circle path {
                            stroke: var(--e-global-color-primary);
                            stroke-width: 5;
                            box-sizing: border-box;
                            -webkit-transition: all 200ms linear;
                            transition: all 200ms linear;
                        }

                        @media only screen and (max-width: 600px) {
                            .hieudm_progress-wrap.hieudm_active-progress {
                                transform: translateY(0) scale(0.8);
                            }

                            .hieudm_progress-wrap {
                                right: 20px;
                                bottom: 50px
                            }
                        }
                        </style>

                        <script>
                        ! function(s) {
                            "use strict";
                            s(".switch").on("click", function() {
                                    s("body").hasClass("light") ? (s("body").removeClass("light"),
                                        s(".switch").removeClass("switched")) : (s("body").addClass("light"),
                                        s(".switch").addClass("switched"))
                                }),
                                s(document).ready(function() {
                                    var e = document.querySelector(".hieudm_progress-wrap path"),
                                        t = e.getTotalLength();
                                    e.style.transition = e.style.WebkitTransition = "none",
                                        e.style.strokeDasharray = t + " " + t,
                                        e.style.strokeDashoffset = t,
                                        e.getBoundingClientRect(),
                                        e.style.transition = e.style.WebkitTransition =
                                        "stroke-dashoffset 10ms linear";
                                    var o = function() {
                                        var o = s(window).scrollTop(),
                                            r = s(document).height() - s(window).height(),
                                            i = t - o * t / r;
                                        e.style.strokeDashoffset = i
                                    };
                                    o(),
                                        s(window).scroll(o);
                                    jQuery(window).on("scroll", function() {
                                            jQuery(this).scrollTop() > 50 ? jQuery(".hieudm_progress-wrap")
                                                .addClass("hieudm_active-progress") : jQuery(
                                                    ".hieudm_progress-wrap").removeClass(
                                                    "hieudm_active-progress")
                                        }),
                                        jQuery(".hieudm_progress-wrap").on("click", function(s) {
                                            return s.preventDefault(),
                                                jQuery("html, body").animate({
                                                    scrollTop: 0
                                                }, 0),
                                                !1
                                        })
                                })
                        }(jQuery);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="speculationrules">
        {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/hello-elementor-child/*","/wp-content/themes/hello-elementor/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
    <script>
    let stickyBarShouldShow = false;
    let lastStickyScrollTop = window.scrollY || document.documentElement.scrollTop || 0;

    const getStickyBars = () => document.querySelectorAll('.tda-sticky-bar');
    const isStickyBarBlocked = () => Boolean(document.querySelector(
        '.e-off-canvas[aria-hidden="false"], ' +
        '.tda-product-popup-overlay[style*="display: flex"], ' +
        '.tda-product-popup-overlay[style*="display: block"], ' +
        '.tda-popup-overlay[style*="display: flex"], ' +
        '.tda-popup-overlay[style*="display: block"]'
    ));

    const applyStickyBarState = () => {
        const blocked = isStickyBarBlocked();

        getStickyBars().forEach(el => {
            if (blocked) {
                el.classList.remove('show');
                el.style.display = 'none';
                return;
            }

            el.style.display = '';
            el.classList.toggle('show', stickyBarShouldShow);
        });
    };

    const toggleStickyBar = (shouldShow = !isStickyBarBlocked()) => {
        stickyBarShouldShow = shouldShow;
        applyStickyBarState();
    };

    window.addEventListener('wheel', event => {
        if (event.deltaY > 0) {
            toggleStickyBar(true);
        } else if (event.deltaY < 0) {
            toggleStickyBar(false);
        }
    }, {
        passive: true,
        capture: true
    });

    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY || document.documentElement.scrollTop || 0;

        if (currentScroll > lastStickyScrollTop) {
            toggleStickyBar(true);
        } else if (currentScroll < lastStickyScrollTop) {
            toggleStickyBar(false);
        }

        lastStickyScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    }, {
        passive: true
    });

    const bindOffCanvasLinks = () => {
        const links = document.querySelectorAll('a[aria-controls^="off-canvas-"]');
        if (!links.length) return false;

        links.forEach(link => {
            link.addEventListener('click', () => {
                toggleStickyBar();
                const targetId = link.getAttribute('aria-controls');
                document.querySelectorAll('.e-off-canvas').forEach(popup => {
                    const isOpen = popup.getAttribute('aria-hidden') === 'false';
                    if (isOpen && popup.id !== targetId) {
                        (popup.querySelector('.dialog-close-button') || popup.querySelector(
                            '.e-off-canvas__overlay'))?.click();
                    }
                });
            }, {
                passive: true
            });
        });

        // Theo dõi thay đổi aria-hidden trên từng off-canvas
        document.querySelectorAll('.e-off-canvas').forEach(el => {
            new MutationObserver(() => toggleStickyBar())
                .observe(el, {
                    attributes: true,
                    attributeFilter: ['aria-hidden']
                });
        });

        return true;
    };

    // Không chạy trong Elementor editor
    if (!(window.elementorFrontend && elementorFrontend.isEditMode())) {
        if (!bindOffCanvasLinks()) {
            const mo = new MutationObserver((mutations, obs) => {
                if (bindOffCanvasLinks()) obs.disconnect(); // dùng obs, không dùng this
            });
            mo.observe(document.body, {
                childList: true,
                subtree: true
            });
        }
    }
    </script>
    <div data-elementor-type="popup" data-elementor-id="8932" class="elementor elementor-8932 elementor-location-popup"
        data-elementor-settings="{&quot;prevent_scroll&quot;:&quot;yes&quot;,&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}"
        data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-7985b52 e-flex e-con-boxed e-con e-parent" data-id="7985b52"
            data-element_type="container" id="cooperate-form-popup"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-51069fd e-con-full e-flex e-con e-child"
                    data-id="51069fd" data-element_type="container">
                    <div class="elementor-element elementor-element-d6f4b3d elementor-widget elementor-widget-heading"
                        data-id="d6f4b3d" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">Hợp tác Kinh Doanh với PERFECT</p>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-19bf04a elementor-widget elementor-widget-text-editor"
                    data-id="19bf04a" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Khám phá giải pháp – sản phẩm – chính sách phù hợp với mô hình Kinh Doanh của bạn.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f53f5c1 elementor-widget__width-initial cs-popup-form-hide-label elementor-button-align-stretch elementor-widget elementor-widget-form"
                    data-id="f53f5c1" data-element_type="widget"
                    data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                    data-widget_type="form.default">
                    <div class="elementor-widget-container">
                        <form class="elementor-form" method="post" id="contact_popup" name="New Form"
                            action="{{ route('contact.submit') }}"
                            aria-label="New Form" novalidate="">
                            <input type="hidden" name="post_id" value="8932" />
                            <input type="hidden" name="form_id" value="f53f5c1" />
                            <input type="hidden" name="referer_title" value="PERFECT Chính Hãng" />

                            <input type="hidden" name="queried_id" value="93" />

                            <div class="elementor-form-fields-wrapper elementor-labels-above">
                                <div
                                    class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-50 elementor-sm-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-name" class="elementor-field-label">
                                        Họ và tên </label>
                                    <input size="1" type="text" name="form_fields[name]" id="form-field-name"
                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                        placeholder="Họ và tên" required="required">
                                </div>
                                <div
                                    class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_97b3fe1 elementor-col-50 elementor-sm-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-field_97b3fe1" class="elementor-field-label">
                                        Số điện thoại </label>
                                    <input size="1" type="tel" name="form_fields[field_97b3fe1]"
                                        id="form-field-field_97b3fe1"
                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                        placeholder="Số điện thoại" required="required" inputmode="tel"
                                        pattern="[0-9()#&amp;+*.=-]+"
                                        title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                </div>
                                <div
                                    class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_197f32a elementor-col-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-field_197f32a" class="elementor-field-label">
                                        Địa chỉ </label>
                                    <input size="1" type="text" name="form_fields[field_197f32a]"
                                        id="form-field-field_197f32a"
                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                        placeholder="Địa chỉ" required="required">
                                </div>
                                <div
                                    class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-message" class="elementor-field-label">
                                        Nhóm khách hàng </label>
                                    <div class="elementor-field elementor-select-wrapper remove-before ">
                                        <div class="select-caret-down-wrapper">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-eicon-caret-down"
                                                viewBox="0 0 571.4 571.4" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M571 393Q571 407 561 418L311 668Q300 679 286 679T261 668L11 418Q0 407 0 393T11 368 36 357H536Q550 357 561 368T571 393Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <select name="form_fields[message]" id="form-field-message"
                                            class="elementor-field-textual elementor-size-sm" required="required">
                                            <option value="">Lựa chọn dịch vụ</option>
                                            <option value="Khách hàng Cá Nhân">Khách hàng Cá Nhân</option>
                                            <option value="Spa/ TMV">Spa/ TMV</option>
                                            <option value="Đại lý/ NPP/ Kinh Doanh">Đại lý/ NPP/ Kinh Doanh</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-field_6f88e73 elementor-col-100">
                                    <label for="form-field-field_6f88e73" class="elementor-field-label">
                                        Nội dung </label>
                                    <textarea class="elementor-field-textual elementor-field  elementor-size-sm"
                                        name="form_fields[field_6f88e73]" id="form-field-field_6f88e73" rows="3"
                                        placeholder="Nội dung"></textarea>
                                </div>
                                <div
                                    class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                    <button class="elementor-button elementor-size-sm" type="submit">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Gửi thông tin ngay</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-elementor-type="popup" data-elementor-id="5222" class="elementor elementor-5222 elementor-location-popup"
        data-elementor-settings="{&quot;classes&quot;:&quot;tda-popup-5s&quot;,&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}"
        data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-67d6210 e-con-full e-flex e-con e-parent" data-id="67d6210"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-0e701c5 tda-img-5s elementor-widget elementor-widget-image"
                data-id="0e701c5" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('images/banner/bannerweb2.jpg') }}">
                        <img src="{{ asset('images/banner/mobileweb2.jpg') }}" width="1122" height="1402"
                            class="attachment-full size-full wp-image-6078" alt="Chăm sóc từ góc 2025_D" />
                    </picture>
                </div>
            </div>
            <div class="elementor-element elementor-element-db4ccd9 elementor-widget-tablet_extra__width-inherit tda-button-5s elementor-widget elementor-widget-button"
                data-id="db4ccd9" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                    <div class="elementor-button-wrapper">
                        <a class="elementor-button elementor-button-link elementor-size-sm"
                            href="{{ route('sanpham') }}">
                            <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text">Khám phá ngay</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-elementor-type="popup" data-elementor-id="5213" class="elementor elementor-5213 elementor-location-popup"
        data-elementor-settings="{&quot;open_selector&quot;:&quot;.tda-detail-danh-muc-banner-button&quot;,&quot;classes&quot;:&quot;tda-popup-contact&quot;,&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}"
        data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-ed6ee5e e-flex e-con-boxed e-con e-parent" data-id="ed6ee5e"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-b929035 elementor-widget elementor-widget-heading"
                    data-id="b929035" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="elementor-heading-title elementor-size-default">Nhận Tư Vấn Sản Phẩm</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-af2ff68 elementor-widget__width-initial cs-popup-form-hide-label elementor-button-align-stretch elementor-widget elementor-widget-form"
                    data-id="af2ff68" data-element_type="widget"
                    data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;50&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                    data-widget_type="form.default">
                    <div class="elementor-widget-container">
                        <form class="elementor-form" method="post" id="contact_popup" name="New Form"
                            action="{{ route('contact.submit') }}"
                            aria-label="New Form" novalidate="">
                            <input type="hidden" name="post_id" value="5213" />
                            <input type="hidden" name="form_id" value="af2ff68" />
                            <input type="hidden" name="referer_title" value="PERFECT Chính Hãng" />

                            <input type="hidden" name="queried_id" value="93" />

                            <div class="elementor-form-fields-wrapper elementor-labels-above">
                                <div
                                    class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-50 elementor-sm-50 elementor-field-required elementor-mark-required">
                                    <label for="form-field-name" class="elementor-field-label">
                                        Họ và tên </label>
                                    <input size="1" type="text" name="form_fields[name]" id="form-field-name"
                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                        placeholder="Họ và tên" required="required">
                                </div>
                                <div
                                    class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_97b3fe1 elementor-col-50 elementor-sm-50 elementor-field-required elementor-mark-required">
                                    <label for="form-field-field_97b3fe1" class="elementor-field-label">
                                        Số điện thoại </label>
                                    <input size="1" type="tel" name="form_fields[field_97b3fe1]"
                                        id="form-field-field_97b3fe1"
                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                        placeholder="Số điện thoại" required="required" inputmode="tel"
                                        pattern="[0-9()#&amp;+*.=-]+"
                                        title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                </div>
                                <div
                                    class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_197f32a elementor-col-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-field_197f32a" class="elementor-field-label">
                                        Địa chỉ </label>
                                    <input size="1" type="text" name="form_fields[field_197f32a]"
                                        id="form-field-field_197f32a"
                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                        placeholder="Địa chỉ" required="required">
                                </div>
                                <div
                                    class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_648c99d elementor-col-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-field_648c99d" class="elementor-field-label">
                                        Nhóm khách hàng </label>
                                    <div class="elementor-field elementor-select-wrapper remove-before ">
                                        <div class="select-caret-down-wrapper">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-eicon-caret-down"
                                                viewBox="0 0 571.4 571.4" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M571 393Q571 407 561 418L311 668Q300 679 286 679T261 668L11 418Q0 407 0 393T11 368 36 357H536Q550 357 561 368T571 393Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <select name="form_fields[field_648c99d]" id="form-field-field_648c99d"
                                            class="elementor-field-textual elementor-size-sm" required="required">
                                            <option value="Lựa chọn dịch vụ">Lựa chọn dịch vụ</option>
                                            <option value="Khách hàng cá nhân">Khách hàng cá nhân</option>
                                            <option value="Khách hàng SPA/ TMV">Khách hàng SPA/ TMV</option>
                                            <option value="Đại lý/ NPP/ Kinh Doanh">Đại lý/ NPP/ Kinh Doanh</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                    <label for="form-field-message" class="elementor-field-label">
                                        Nội dung </label>
                                    <textarea class="elementor-field-textual elementor-field  elementor-size-sm"
                                        name="form_fields[message]" id="form-field-message" rows="3"
                                        placeholder="Tìm hiểu thêm về....."></textarea>
                                </div>
                                <div
                                    class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_6f88e73 elementor-col-50">
                                    <a href="tel:0936372114">Gọi ngay</a>
                                </div>
                                <div
                                    class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-50 e-form__buttons">
                                    <button class="elementor-button elementor-size-sm" type="submit">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Tư vấn ngay</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="elementor-element elementor-element-2343535 elementor-widget-mobile__width-initial cs-popup-link elementor-widget elementor-widget-text-editor"
                    data-id="2343535" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>PERFECT sẽ liên hệ trong 8h với giải pháp tối ưu!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
    </script>

    <!-- Nút đăng nhập bằng Google đã được thêm bởi Site Kit -->
    <style>
    .googlesitekit-sign-in-with-google__frontend-output-button {
        max-width: 320px
    }
    </style>

    <!-- Nút đăng nhập bằng Google đã được thêm bởi Site Kit -->
    <script>
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='{{ asset("wp-content/plugins/woocommerce/assets/client/blocks/wc-blocksc6dc.css?ver=wc-9.7.2") }}'
        media='all' />
    <script id="woocommerce-js-extra">
    var woocommerce_params = {
        "ajax_url": "/wp-admin/admin-ajax.php",
        "wc_ajax_url": "/?wc-ajax=%%endpoint%%",
        "i18n_password_show": "Hi\u1ec3n th\u1ecb m\u1eadt kh\u1ea9u",
        "i18n_password_hide": "\u1ea8n m\u1eadt kh\u1ea9u"
    };
    //# sourceURL=woocommerce-js-extra
    </script>
    <script src="{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min716b.js?ver=9.7.2') }}"
        id="woocommerce-js" data-wp-strategy="defer"></script>
    <script src="{{ asset('wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min94a4.js?ver=8.4.5') }}"
        id="swiper-js-js"></script>
    <script id="tda-custom-mega-menu-js-extra">
    var tdacsMegaMenu = {
        "ajaxUrl": "/wp-admin/admin-ajax.php",
        "nonce": "1d94a6a071"
    };
    //# sourceURL=tda-custom-mega-menu-js-extra
    </script>
    <script src="{{ asset('wp-content/themes/hello-elementor-child/js/custom-mega-menuc946.js?ver=1766818553') }}"
        id="tda-custom-mega-menu-js" defer></script>
    <script id="custom-search-script-js-extra">
    var customSearchAjax = {
        "ajax_url": "/wp-admin/admin-ajax.php"
    };
    //# sourceURL=custom-search-script-js-extra
    </script>
    <script src="{{ asset('wp-content/themes/hello-elementor-child/js/custom-search.js?v=20260528') }}"
        id="custom-search-script-js" defer></script>
    <script>
    window.PERFECT_GOOGLE_SHEETS_WEB_APP_URL =
        'https://script.google.com/macros/s/AKfycbyTtWhwX0ilG1YWU0vkcj31Muy6_iu1Qy5rq9LtyNVIWMU6SXSu9wzZzUG_M_ocrEzj_w/exec';
    </script>
    <script src="{{ asset('wp-content/themes/hello-elementor-child/js/google-sheets-form.js?v=20260526-2') }}"
        id="perfect-google-sheets-form-js" defer></script>
    <script id="tda-search-script-js-extra">
    var tdaSearch = {
        "ajax_url": "/wp-admin/admin-ajax.php"
    };
    //# sourceURL=tda-search-script-js-extra
    </script>
    <script src="{{ asset('wp-content/themes/hello-elementor-child/js/tda-search.js') }}" id="tda-search-script-js" defer></script>
    <script src="{{ asset('wp-content/themes/hello-elementor/assets/js/hello-frontend.minb12b.js?ver=3.1.1') }}"
        id="hello-theme-frontend-js" defer></script>
    <script
        src="{{ asset('wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-consent-mode-bc2e26cfa69fcd4a8261.js') }}"
        id="googlesitekit-consent-mode-js"></script>
    <script id="elementor-common-js-before">
    window.elementorCommon = window.elementorCommon || {
        config: {
            editor_events: {
                isEditorOneActive: false,
                can_send_events: false
            }
        }
    };
    var elementorCommon = window.elementorCommon;
    //# sourceURL=elementor-common-js-before
    </script>
    <script src="{{ asset('wp-content/plugins/elementor/assets/js/webpack.runtime.min46ff.js?ver=3.34.3') }}"
        id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('wp-content/plugins/elementor/assets/js/frontend-modules.min46ff.js?ver=3.34.3') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3') }}" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Chia s\u1ebb tr\u00ean Facebook",
            "shareOnTwitter": "Chia s\u1ebb tr\u00ean Twitter",
            "pinIt": "Ghim n\u00f3",
            "download": "T\u1ea3i xu\u1ed1ng",
            "downloadImage": "T\u1ea3i h\u00ecnh \u1ea3nh",
            "fullscreen": "To\u00e0n m\u00e0n h\u00ecnh",
            "zoom": "Thu ph\u00f3ng",
            "share": "Chia s\u1ebb",
            "playVideo": "Ph\u00e1t video",
            "previous": "Quay v\u1ec1",
            "next": "Ti\u1ebfp theo",
            "close": "\u0110\u00f3ng",
            "a11yCarouselPrevSlideMessage": "Slide tr\u01b0\u1edbc",
            "a11yCarouselNextSlideMessage": "Slide ti\u1ebfp theo",
            "a11yCarouselFirstSlideMessage": "\u0110\u00e2y l\u00e0 slide \u0111\u1ea7u ti\u00ean",
            "a11yCarouselLastSlideMessage": "\u0110\u00e2y l\u00e0 slide cu\u1ed1i c\u00f9ng",
            "a11yCarouselPaginationBulletMessage": "\u0110i \u0111\u1ebfn slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Di \u0111\u1ed9ng d\u1ecdc",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Ch\u1ebf \u0111\u1ed9 ngang di \u0111\u1ed9ng",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet": {
                    "label": "M\u00e1y t\u00ednh b\u1ea3ng d\u1ecdc",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "M\u00e1y t\u00ednh b\u1ea3ng ngang",
                    "value": 1300,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": true
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1700,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": true
                },
                "widescreen": {
                    "label": "Trang r\u1ed9ng",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            },
            "hasCustomBreakpoints": true
        },
        "version": "3.34.3",
        "is_static": false,
        "experimentalFeatures": {
            "e_font_icon_svg": true,
            "additional_custom_breakpoints": true,
            "container": true,
            "theme_builder_v2": true,
            "hello-theme-header-footer": true,
            "nested-elements": true,
            "home_screen": true,
            "global_classes_should_enforce_capabilities": true,
            "e_variables": true,
            "cloud-library": true,
            "e_opt_in_v4_page": true,
            "e_interactions": true,
            "e_editor_one": false,
            "import-export-customization": true,
            "mega-menu": true,
            "e_pro_variables": true
        },
        "urls": {
            "assets": "https:\/\/gsccos.vn\/wp-content\/plugins\/elementor\/assets\/",
            "ajaxurl": "\/wp-admin\/admin-ajax.php",
            "uploadUrl": "\/wp-content\/uploads"
        },
        "nonces": {
            "floatingButtonsClickTracking": "c1fdb0826c"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet",
                "viewport_tablet_extra", "viewport_laptop"
            ],
            "viewport_laptop": 1700,
            "viewport_tablet_extra": 1300,
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description",
            "woocommerce_notices_elements": [],
            "hello_header_logo_type": "logo",
            "hello_header_menu_layout": "horizontal",
            "hello_footer_logo_type": "logo"
        },
        "post": {
            "id": 93,
            "title": "PERFECT%20Ch%C3%ADnh%20H%C3%A3ng",
            "excerpt": "",
            "featuredImage": "http://perfectnhatban.com/images/banner/banner2.webp"
        }
    };
    //# sourceURL=elementor-frontend-js-before
    </script>
    <script src="{{ asset('wp-content/plugins/elementor/assets/js/frontend.min46ff.js?ver=3.34.3') }}"
        id="elementor-frontend-js">
    </script>
    <script src="{{ asset('wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0') }}" id="imagesloaded-js"></script>
    <script src="{{ asset('wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min46ff.js?ver=3.34.3') }}"
        id="e-sticky-js"></script>
    <script src="{{ asset('wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min716b.js?ver=9.7.2') }}"
        id="sourcebuster-js-js"></script>
    <script id="wc-order-attribution-js-extra">
    var wc_order_attribution = {
        "params": {
            "lifetime": 1.0e-5,
            "session": 30,
            "base64": false,
            "ajaxurl": "/wp-admin/admin-ajax.php",
            "prefix": "wc_order_attribution_",
            "allowTracking": true
        },
        "fields": {
            "source_type": "current.typ",
            "referrer": "current_add.rf",
            "utm_campaign": "current.cmp",
            "utm_source": "current.src",
            "utm_medium": "current.mdm",
            "utm_content": "current.cnt",
            "utm_id": "current.id",
            "utm_term": "current.trm",
            "utm_source_platform": "current.plt",
            "utm_creative_format": "current.fmt",
            "utm_marketing_tactic": "current.tct",
            "session_entry": "current_add.ep",
            "session_start_time": "current_add.fd",
            "session_pages": "session.pgs",
            "session_count": "udata.vst",
            "user_agent": "udata.uag"
        }
    };
    //# sourceURL=wc-order-attribution-js-extra
    </script>
    <script
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min716b.js?ver=9.7.2') }}"
        id="wc-order-attribution-js"></script>
    <script id="googlesitekit-events-provider-woocommerce-js-before">
    window._googlesitekit.wcdata = window._googlesitekit.wcdata || {};
    window._googlesitekit.wcdata.products = [];
    window._googlesitekit.wcdata.add_to_cart = null;
    window._googlesitekit.wcdata.currency = "VND";
    window._googlesitekit.wcdata.eventsToTrack = ["add_to_cart", "purchase"];
    //# sourceURL=googlesitekit-events-provider-woocommerce-js-before
    </script>
    <script
        src="{{ asset('wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-events-provider-woocommerce-9717a4b16d0ac7e06633.js') }}"
        id="googlesitekit-events-provider-woocommerce-js" defer></script>
    <script src="{{ asset('wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min46ff.js?ver=3.34.3') }}"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="{{ asset('wp-includes/js/dist/hooks.minaf5f.js?ver=dd5603f07f9220ed27f1') }}" id="wp-hooks-js">
    </script>
    <script src="{{ asset('wp-includes/js/dist/i18n.min1cde.js?ver=c26c3dc7bed366793375') }}" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
    //# sourceURL=wp-i18n-js-after
    </script>
    <script id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {
        "ajaxurl": "\/wp-admin\/admin-ajax.php",
        "nonce": "7e427b8e04",
        "urls": {
            "assets": "https:\/\/gsccos.vn\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "https:\/\/gsccos.vn\/wp-json\/"
        },
        "settings": {
            "lazy_load_background_images": true
        },
        "popup": {
            "hasPopUps": true
        },
        "shareButtonsNetworks": {
            "facebook": {
                "title": "Facebook",
                "has_counter": true
            },
            "twitter": {
                "title": "Twitter"
            },
            "linkedin": {
                "title": "LinkedIn",
                "has_counter": true
            },
            "pinterest": {
                "title": "Pinterest",
                "has_counter": true
            },
            "reddit": {
                "title": "Reddit",
                "has_counter": true
            },
            "vk": {
                "title": "VK",
                "has_counter": true
            },
            "odnoklassniki": {
                "title": "OK",
                "has_counter": true
            },
            "tumblr": {
                "title": "Tumblr"
            },
            "digg": {
                "title": "Digg"
            },
            "skype": {
                "title": "Skype"
            },
            "stumbleupon": {
                "title": "StumbleUpon",
                "has_counter": true
            },
            "mix": {
                "title": "Mix"
            },
            "telegram": {
                "title": "Telegram"
            },
            "pocket": {
                "title": "Pocket",
                "has_counter": true
            },
            "xing": {
                "title": "XING",
                "has_counter": true
            },
            "whatsapp": {
                "title": "WhatsApp"
            },
            "email": {
                "title": "Email"
            },
            "print": {
                "title": "Print"
            },
            "x-twitter": {
                "title": "X"
            },
            "threads": {
                "title": "Threads"
            }
        },
        "woocommerce": {
            "menu_cart": {
                "cart_page_url": "http:\/\/perfectnhatban.com",
                "checkout_page_url": "http:\/\/perfectnhatban.com",
                "fragments_nonce": "8946b05626"
            }
        },
        "facebook_sdk": {
            "lang": "vi",
            "app_id": ""
        },
        "lottie": {
            "defaultAnimationUrl": "http:\/\/perfectnhatban.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
        }
    };
    //# sourceURL=elementor-pro-frontend-js-before
    </script>
    <script src="{{ asset('wp-content/plugins/elementor-pro/assets/js/frontend.min46ff.js?ver=3.34.3') }}"
        id="elementor-pro-frontend-js"></script>
    <script src="{{ asset('wp-content/plugins/elementor-pro/assets/js/elements-handlers.min46ff.js?ver=3.34.3') }}"
        id="pro-elements-handlers-js"></script>
    <script>
    jQuery(document).ready(function($) {
        // Listen for the Elementor form success event
        $(document).on('submit_success', function(event, response) {

            // Retrieve the Form ID to distinguish between different forms
            var formId = $(event.target).find('input[name="form_id"]').val();

            // Push to GTM DataLayer
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'elementor_form_submit', // This is the Trigger Name for GTM
                'form_id': formId, // Variable to identify which form
                'response_data': response // Optional: Full response object
            });

        });
    });
    </script>
    <style>
    html,
    body {
        overflow: visible !important;
    }
    </style>
    <script type="text/javascript">
    window.addEventListener('load', function() {
        function fadeupHd() {
            var animationHeight = window.innerHeight * 0.25;
            var ratio = Math.round((1 / animationHeight) * 10000) / 10000;

            var scrollAnimate1 = document.getElementById('scrollAnimate1');
            var scrollAnimate2 = document.getElementById('scrollAnimate2');
            var scrollAnimate3 = document.getElementById('scrollAnimate3');

            if (scrollAnimate1 && scrollAnimate2 && scrollAnimate3) {
                var objectTop1 = scrollAnimate2.getBoundingClientRect().top + window.scrollY;
                var objectTop2 = scrollAnimate3.getBoundingClientRect().top + window.scrollY;
                var windowBottom = window.scrollY + window.innerHeight;

                if (objectTop2 < windowBottom) {
                    scrollAnimate1.style.backgroundColor = 'rgb(153 199 179)';
                    scrollAnimate1.style.transform = 'translateY(-100px) scale(0.8)';
                    scrollAnimate2.style.backgroundColor = 'rgb(204 227 217)';
                    scrollAnimate2.style.transform = 'translateY(-50px) scale(0.9)';
                } else if (objectTop1 < windowBottom) {
                    scrollAnimate1.style.backgroundColor = 'rgb(204 227 217)';
                    scrollAnimate1.style.transform = 'translateY(-50px) scale(0.9)';
                    scrollAnimate2.style.backgroundColor = 'rgb(255 255 255)';
                    scrollAnimate2.style.transform = 'none';
                } else {
                    scrollAnimate1.style.backgroundColor = 'rgb(255 255 255)';
                    scrollAnimate1.style.transform = 'none';
                    scrollAnimate2.style.backgroundColor = 'rgb(255 255 255)';
                    scrollAnimate2.style.transform = 'none';
                }
            }
        }

        var scrollAnimate1 = document.getElementById('scrollAnimate1');
        var scrollAnimate2 = document.getElementById('scrollAnimate2');

        if (scrollAnimate1) {
            scrollAnimate1.style.backgroundColor = 'rgb(255 255 255)';
            scrollAnimate1.style.transform = 'none';
        }
        if (scrollAnimate2) {
            scrollAnimate2.style.backgroundColor = 'rgb(255 255 255)';
            scrollAnimate2.style.transform = 'none';
        }

        fadeupHd();
        window.addEventListener('scroll', fadeupHd);
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentUrl = window.location.pathname;
        const urlToMenuTextMap = {
            "/danh-muc-tong-quat/": "sản phẩm"
        };

        document.querySelectorAll(".tda-danh-sach-menu a").forEach(function(link) {
            const href = link.getAttribute("href");
            const text = link.querySelector(".elementor-icon-list-text")?.innerText.trim()
                .toLowerCase();

            if (href === currentUrl || (href !== "/" && currentUrl.startsWith(href))) {
                link.classList.add("tda-active-menu");
            }

            if (urlToMenuTextMap[currentUrl] && text === urlToMenuTextMap[currentUrl]) {
                link.classList.add("tda-active-menu");
            }
        });
    });
    </script>

    <style id="perfect-blue-theme-overrides">
    :root {
        --perfect-accent: #3ea8e2 !important;
        --perfect-accent-dark: #3ea8e2 !important;
        --perfect-accent-soft: rgba(62, 168, 226, 0.12) !important;
        --e-global-color-primary: #3ea8e2 !important;
        --e-global-color-accent: #3ea8e2 !important;
        --swiper-theme-color: #3ea8e2 !important;
    }

    html,
    body {
        accent-color: #3ea8e2 !important;
    }

    body a:hover,
    body a:focus,
    body button:hover,
    body button:focus,
    body .elementor-button:hover,
    body .elementor-button:focus,
    body .elementor-icon:hover,
    body .elementor-icon:focus,
    body .elementor-heading-title a:hover,
    body .elementor-heading-title a:focus,
    body .product-discover-now,
    body .product-discover-now:hover,
    body .product-category-link:hover,
    body .product-category-link:focus,
    body .tda-page-category-discover-btn:hover,
    body .tda-page-category-cat-link:hover,
    body .tda-ingredient-link a,
    body .tda-ingredient-btn,
    body .tda-news-link p,
    body .tda-keyword-button,
    body .custom-search-close:hover,
    body .search-filter-button.active,
    body .search-result-count strong,
    body .post-content-wrapper a,
    body .post-meta-dot + span,
    body .elementor-post-info__item,
    body .woocommerce-Price-amount,
    body .price,
    body .amount {
        color: #3ea8e2 !important;
    }

    body .elementor-button[type="submit"],
    body #cs-shop-button,
    body .tda-page-category-discover-btn,
    body .tda-page-category-cat-link,
    body .swiper-pagination-bullet-active,
    body .tda-ingredient-progress-bar,
    body .tda-news-progress-bar,
    body .tda-product-popup-submit,
    body .tda-product-popup-next:hover,
    body .tda-product-popup-prev:hover,
    body .elementor-widget-form .elementor-button[type="submit"],
    body .elementor-widget-form .e-form__buttons__wrapper__button-next,
    body .elementor-widget-form .e-form__buttons__wrapper__button-previous,
    body .hieudm_progress-wrap:hover,
    body .floating-contact-buttons,
    body .floating-contact-item:hover,
    body .tda-sticky-bar .elementor-button,
    body [style*="background:#0B9B5C" i],
    body [style*="background: #0B9B5C" i],
    body [style*="background-color:#0B9B5C" i],
    body [style*="background-color: #0B9B5C" i],
    body [style*="background:#007F48" i],
    body [style*="background: #007F48" i],
    body [style*="background-color:#007F48" i],
    body [style*="background-color: #007F48" i],
    body [style*="background:#0C8551" i],
    body [style*="background: #0C8551" i],
    body [style*="background-color:#0C8551" i],
    body [style*="background-color: #0C8551" i] {
        background: #3ea8e2 !important;
        background-color: #3ea8e2 !important;
    }

    body .tda-keyword-button,
    body .tda-keyword-button:hover,
    body .tda-product-subtitle,
    body .product-tag,
    body .product-tag-container,
    body .tda-ingredient-icon,
    body .search-tab,
    body .search-filter-button,
    body .custom-search-suggestion,
    body [style*="background:#f1f8f4" i],
    body [style*="background: #f1f8f4" i],
    body [style*="background-color:#f1f8f4" i],
    body [style*="background-color: #f1f8f4" i],
    body [style*="background:#f3faf7" i],
    body [style*="background: #f3faf7" i],
    body [style*="background-color:#f3faf7" i],
    body [style*="background-color: #f3faf7" i],
    body [style*="background:#e0f3eb" i],
    body [style*="background: #e0f3eb" i],
    body [style*="background-color:#e0f3eb" i],
    body [style*="background-color: #e0f3eb" i],
    body [style*="background-color:#CEF2DA" i],
    body [style*="background-color: #CEF2DA" i] {
        background: rgba(62, 168, 226, 0.12) !important;
        background-color: rgba(62, 168, 226, 0.12) !important;
    }

    body .tda-danh-sach-menu a.tda-active-menu .elementor-icon-list-text,
    body .tda-danh-sach-menu a.tda-active-menu .elementor-icon-list-icon,
    body .tda-danh-sach-menu a.tda-active-menu .elementor-icon-list-icon svg,
    body .tda-danh-sach-menu a.tda-active-menu .elementor-icon-list-icon svg path,
    body .active,
    body .is-active,
    body .current-menu-item > a,
    body .current_page_item > a,
    body input[type="checkbox"]:checked,
    body input[type="radio"]:checked,
    body [style*="#0B9B5C" i],
    body [style*="#007F48" i],
    body [style*="#027F48" i],
    body [style*="#0C8551" i],
    body [style*="rgba(11, 155, 92" i],
    body [style*="rgba(0, 127, 72" i],
    body [style*="rgba(2, 127, 72" i] {
        color: #3ea8e2 !important;
        border-color: #3ea8e2 !important;
        caret-color: #3ea8e2 !important;
        outline-color: #3ea8e2 !important;
    }

    body .tda-danh-sach-menu a.tda-active-menu::after,
    body .post-meta-dot,
    body .hieudm_progress-wrap svg.hieudm_progress-circle path,
    body .tda-image-compare__handle,
    body .elementor-field:focus,
    body input:focus,
    body textarea:focus,
    body select:focus,
    body .search-filter-button.active,
    body .tda-news-progress,
    body .tda-ingredient-progress {
        border-color: #3ea8e2 !important;
        stroke: #3ea8e2 !important;
    }

    body .tda-danh-sach-menu a.tda-active-menu::after,
    body .post-meta-dot,
    body .hieudm_progress-wrap svg.hieudm_progress-circle path,
    body .tda-image-compare__handle,
    body .tda-image-compare__handle::after {
        background: #3ea8e2 !important;
        background-color: #3ea8e2 !important;
    }

    body svg [fill="#0B9B5C" i],
    body svg [fill="#007F48" i],
    body svg [fill="#027F48" i],
    body svg [fill="#0C8551" i],
    body svg [stroke="#0B9B5C" i],
    body svg [stroke="#007F48" i],
    body svg [stroke="#027F48" i],
    body svg [stroke="#0C8551" i],
    body .safe-svg-cover svg,
    body .elementor-icon svg path,
    body .elementor-icon-list-icon svg path {
        fill: #3ea8e2 !important;
        stroke: #3ea8e2 !important;
    }

    body .tda-ingredient-progress,
    body .tda-news-progress {
        background: rgba(62, 168, 226, 0.28) !important;
    }

    body #scrollAnimate1,
    body #scrollAnimate2,
    body #scrollAnimate3 {
        background-color: rgba(62, 168, 226, 0.12) !important;
    }

    body .search-bar-container,
    body .custom-search-wrapper,
    body .custom-search-input,
    body #custom-search-input,
    body .tda-search-input,
    body .search-popup-wrapper input {
        border-color: #3ea8e2 !important;
        border-bottom-color: #3ea8e2 !important;
        outline-color: #3ea8e2 !important;
    }

    body .elementor-icon,
    body .elementor-icon *,
    body .elementor-swiper-button,
    body .elementor-swiper-button *,
    body .swiper-button-prev,
    body .swiper-button-next,
    body .swiper-button-prev *,
    body .swiper-button-next *,
    body .e-n-menu-dropdown-icon,
    body .e-n-menu-dropdown-icon *,
    body .elementor-button:not([type="submit"]):hover,
    body .elementor-button:not([type="submit"]):focus {
        color: #3ea8e2 !important;
        fill: #3ea8e2 !important;
        stroke: #3ea8e2 !important;
        border-color: #3ea8e2 !important;
    }

    body #cs-mega-menu .e-n-menu-title,
    body #cs-mega-menu .e-n-menu-title *,
    body #cs-mega-menu .e-n-menu-title-container,
    body #cs-mega-menu .e-n-menu-title-container * {
        color: #2d3748 !important;
        fill: #2d3748 !important;
        stroke: none !important;
        border-color: transparent !important;
        transition: color 0.22s ease, fill 0.22s ease !important;
    }

    body #cs-mega-menu .e-current,
    body #cs-mega-menu .e-current *,
    body #cs-mega-menu .e-n-menu-title:hover,
    body #cs-mega-menu .e-n-menu-title:hover *,
    body #cs-mega-menu .e-n-menu-title:focus-within,
    body #cs-mega-menu .e-n-menu-title:focus-within * {
        color: #3ea8e2 !important;
        fill: #3ea8e2 !important;
        stroke: #3ea8e2 !important;
        border-color: #3ea8e2 !important;
    }

    body .swiper-pagination-bullet {
        background: rgba(62, 168, 226, 0.28) !important;
        background-color: rgba(62, 168, 226, 0.28) !important;
    }

    body .swiper-pagination-progressbar,
    body .elementor-pagination-position-outside .swiper-pagination-progressbar,
    body .swiper-horizontal>.swiper-pagination-progressbar,
    body .swiper-pagination-progressbar.swiper-pagination-horizontal {
        background: rgba(62, 168, 226, 0.28) !important;
        background-color: rgba(62, 168, 226, 0.28) !important;
    }

    body .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: #3ea8e2 !important;
        background-color: #3ea8e2 !important;
    }

    body .swiper-pagination-bullet-active,
    body .swiper-pagination-bullet:hover,
    body .elementor-pagination .current,
    body .page-numbers.current,
    body .page-numbers:hover {
        background: #3ea8e2 !important;
        background-color: #3ea8e2 !important;
        border-color: #3ea8e2 !important;
        color: #ffffff !important;
    }

    body .elementor-button[type="submit"],
    body button[type="submit"],
    body .e-form__buttons button,
    body .e-form__buttons .elementor-button {
        background: #3ea8e2 !important;
        background-color: #3ea8e2 !important;
        border-color: #3ea8e2 !important;
        color: #ffffff !important;
    }

    body .elementor-button[type="submit"] *,
    body button[type="submit"] *,
    body .e-form__buttons button *,
    body .e-form__buttons .elementor-button * {
        color: #ffffff !important;
        fill: #ffffff !important;
        stroke: #ffffff !important;
    }

    body #cs-shop-button,
    body .tda-keyword-button,
    body .tda-keyword-button:hover,
    body .search-tab,
    body .search-tab:hover,
    body .search-tab.active,
    body .search-filter-button,
    body .search-filter-button:hover,
    body .search-filter-button.active,
    body .product-tag,
    body .product-tag-container,
    body .tda-product-subtitle,
    body .tda-page-category-discover-btn,
    body .tda-page-category-cat-link,
    body .tda-product-popup-submit,
    body .perfect-footer__social--phone,
    body .floating-contact-buttons,
    body .floating-contact-item:hover,
    body .elementor-pagination .current,
    body .page-numbers.current {
        background: #3ea8e2 !important;
        background-color: #3ea8e2 !important;
        border-color: #3ea8e2 !important;
        color: #ffffff !important;
    }

    body #cs-shop-button *,
    body .tda-keyword-button *,
    body .search-tab *,
    body .search-filter-button *,
    body .product-tag *,
    body .product-tag-container *,
    body .tda-product-subtitle *,
    body .tda-page-category-discover-btn *,
    body .tda-page-category-cat-link *,
    body .tda-product-popup-submit *,
    body .perfect-footer__social--phone *,
    body .floating-contact-buttons *,
    body .floating-contact-item:hover *,
    body .elementor-pagination .current *,
    body .page-numbers.current * {
        color: #ffffff !important;
        fill: #ffffff !important;
        stroke: #ffffff !important;
    }

    body .elementor-button[type="submit"] .elementor-button-content-wrapper,
    body .elementor-button[type="submit"] .elementor-button-text,
    body .elementor-button[type="submit"] .elementor-button-icon,
    body .elementor-button[type="submit"] .elementor-button-icon * {
        color: #ffffff !important;
        fill: #ffffff !important;
        stroke: #ffffff !important;
    }

    body .elementor .elementor-element .elementor-button[type="submit"] .elementor-button-content-wrapper,
    body .elementor .elementor-element .elementor-button[type="submit"] .elementor-button-text,
    body .elementor .elementor-element .elementor-button[type="submit"] .elementor-button-icon,
    body .elementor .elementor-element .elementor-button[type="submit"] .elementor-button-icon * {
        color: #ffffff !important;
        fill: #ffffff !important;
        stroke: #ffffff !important;
    }

    body .cs-product-loop .elementor-button,
    body .cs-product-loop .elementor-button:hover,
    body .cs-product-loop .elementor-button:focus,
    body .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button,
    body .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button:hover,
    body .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button:focus {
        display: inline-flex !important;
        align-items: center !important;
        width: auto !important;
        min-height: 0 !important;
        padding: 0 !important;
        background: transparent !important;
        background-color: transparent !important;
        border: 0 !important;
        border-radius: 0 !important;
        box-shadow: none !important;
        color: #3ea8e2 !important;
        text-decoration: underline !important;
        text-underline-offset: 4px !important;
        transform: none !important;
    }

    body .cs-product-loop .elementor-button *,
    body .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button *,
    body .elementor-7008 .elementor-element.elementor-element-8aa38ce .elementor-button-text {
        color: #3ea8e2 !important;
        fill: #3ea8e2 !important;
        stroke: #3ea8e2 !important;
        text-decoration: underline !important;
        text-underline-offset: 4px !important;
    }

    body #btnAbu .elementor-button {
        display: inline-flex !important;
        align-items: center !important;
        gap: 8px !important;
        padding: 12px 18px !important;
        background: #3ea8e2 !important;
        background-color: #3ea8e2 !important;
        border: 1px solid #3ea8e2 !important;
        border-radius: 4px !important;
        box-shadow: 0 10px 22px rgba(62, 168, 226, 0.20) !important;
        color: #ffffff !important;
        text-decoration: none !important;
    }

    body #btnAbu .elementor-button *,
    body #btnAbu .elementor-button-text,
    body #btnAbu .elementor-button-icon,
    body #btnAbu .elementor-button-icon *,
    body #btnAbu .elementor-button svg path {
        color: #ffffff !important;
        fill: #ffffff !important;
        stroke: #ffffff !important;
        text-decoration: none !important;
    }
    </style>

    <style id="perfect-nihon-aesthetic">
    /* ── Japanese aesthetic layer ─────────────────────────────────────
       Triết lý: Ma (khoảng trống), Wabi (đơn giản), Seijaku (tĩnh lặng)
       Palette: bầu trời Nhật (hanada blue) + trắng ngà + mực sumi
    ── */
    :root {
        --nihon-ink:        #1e2532;   /* sumi-ink: chữ chính */
        --nihon-muted:      #5a6475;   /* keshizumi: chữ phụ */
        --nihon-subtle:     #8c95a3;   /* nhạt hơn */
        --nihon-sky:        #3ea8e2;   /* hanada: xanh trời Nhật */
        --nihon-sky-soft:   rgba(62, 168, 226, 0.10);
        --nihon-washi:      #fafaf8;   /* giấy washi: nền trang */
        --nihon-warm:       #f5f3ef;   /* kem ấm nhẹ */
        --nihon-border:     rgba(62, 168, 226, 0.13);
        --nihon-shadow-sm:  0 2px 12px rgba(30, 37, 50, 0.06);
        --nihon-shadow-md:  0 8px 28px rgba(30, 37, 50, 0.09);
        --nihon-radius:     6px;
        --nihon-transition: 0.26s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* ── Body / nền trang ────────────────────────────────── */
    body {
        background-color: var(--nihon-washi) !important;
        color: var(--nihon-ink) !important;
        font-feature-settings: "kern" 1, "liga" 1;
        -webkit-font-smoothing: antialiased;
    }

    /* ── Header ─ mỏng, trong suốt như màn sương ──────────── */
    #hdMain {
        background-color: rgba(250, 250, 248, 0.94) !important;
        border-bottom: 1px solid var(--nihon-border) !important;
        box-shadow: 0 2px 18px rgba(30, 37, 50, 0.05) !important;
        backdrop-filter: saturate(140%) blur(16px) !important;
        -webkit-backdrop-filter: saturate(140%) blur(16px) !important;
    }

    /* ── Nav items: trạng thái mặc định ─ mực sumi ────────── */
    #cs-mega-menu .e-n-menu-title-text {
        font-size: 14.5px !important;
        font-weight: 500 !important;
        letter-spacing: 0.03em !important;
        color: var(--nihon-ink) !important;
        transition: color var(--nihon-transition) !important;
    }

    /* Underline trượt nhẹ khi hover nav item */
    #cs-mega-menu .e-n-menu-title {
        position: relative;
    }
    #cs-mega-menu .e-n-menu-title::after {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 50%;
        right: 50%;
        height: 1.5px;
        background: var(--nihon-sky);
        border-radius: 2px;
        transition: left var(--nihon-transition), right var(--nihon-transition);
    }
    #cs-mega-menu .e-n-menu-title:hover::after,
    #cs-mega-menu .e-n-menu-title:focus-within::after,
    #cs-mega-menu .e-n-menu-title.e-current::after {
        left: 0;
        right: 0;
    }

    /* ── Nút chính (CTA): bo góc nhẹ, tinh tế ───────────── */
    body .elementor-button[type="submit"],
    body #cs-shop-button,
    body .tda-page-category-discover-btn,
    body .tda-page-category-cat-link {
        border-radius: 4px !important;
        letter-spacing: 0.04em !important;
        font-weight: 500 !important;
        transition: background var(--nihon-transition),
                    box-shadow var(--nihon-transition),
                    transform var(--nihon-transition) !important;
    }

    body .elementor-button[type="submit"]:hover,
    body #cs-shop-button:hover,
    body .tda-page-category-discover-btn:hover,
    body .tda-page-category-cat-link:hover {
        background: #2d9fd8 !important;
        background-color: #2d9fd8 !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 22px rgba(62, 168, 226, 0.28) !important;
    }

    /* ── "Xem tất cả →" và "Khám phá ngay" — text links ─── */
    body .product-discover-now,
    body .product-category-link {
        position: relative;
        display: inline-flex !important;
        align-items: center !important;
        gap: 4px !important;
        font-weight: 500 !important;
        font-size: 13.5px !important;
        letter-spacing: 0.02em !important;
        color: #3ea8e2 !important;
        background: transparent !important;
        background-color: transparent !important;
        text-decoration: none !important;
        border-bottom: 1.5px solid rgba(62, 168, 226, 0.35) !important;
        padding-bottom: 1px !important;
        transition: color 0.22s ease,
                    border-color 0.22s ease,
                    transform 0.22s ease !important;
    }

    body .product-discover-now:hover,
    body .product-category-link:hover,
    body .product-discover-now:focus,
    body .product-category-link:focus {
        color: #1d91cf !important;
        border-color: #1d91cf !important;
        background: transparent !important;
        background-color: transparent !important;
        transform: translateX(3px) !important;
        text-decoration: none !important;
    }

    /* "Khám phá ngay" bên trong elementor button loop */
    body .cs-product-loop .elementor-button,
    body .elementor-7008 .elementor-element-8aa38ce .elementor-button {
        background: transparent !important;
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
        padding: 0 !important;
        color: #3ea8e2 !important;
        font-size: 13px !important;
        font-weight: 500 !important;
        text-decoration: none !important;
        border-bottom: 1.5px solid rgba(62, 168, 226, 0.35) !important;
        display: inline-flex !important;
        transition: color 0.22s ease,
                    border-color 0.22s ease,
                    transform 0.22s ease !important;
    }

    body .cs-product-loop .elementor-button:hover,
    body .elementor-7008 .elementor-element-8aa38ce .elementor-button:hover {
        color: #1d91cf !important;
        border-bottom-color: #1d91cf !important;
        background: transparent !important;
        background-color: transparent !important;
        transform: translateX(3px) !important;
        box-shadow: none !important;
    }

    /* ── Cards sản phẩm: shadow mềm kiểu washi ───────────── */
    .product-container,
    .service-container,
    .inner-product-item {
        border-radius: 12px !important;
        box-shadow: var(--nihon-shadow-sm) !important;
        transition: transform var(--nihon-transition),
                    box-shadow var(--nihon-transition) !important;
        border: none !important;
    }

    .product-container:hover,
    .service-container:hover,
    .inner-product-item:hover {
        transform: translateY(-4px) !important;
        box-shadow: var(--nihon-shadow-md) !important;
    }

    /* ── Image container: nền trung tính nhạt ─────────────── */
    .product-image-container,
    .service-image-box,
    .inner-product-img-box {
        background: #f4f6f9 !important;
        border-radius: 6px 6px 0 0 !important;
    }

    /* ── Footer ─ nền washi ấm ────────────────────────────── */
    .perfect-footer {
        background-color: var(--nihon-warm) !important;
        border-top: 1px solid var(--nihon-border) !important;
    }

    /* ── Swiper dots: nhỏ hơn, tinh tế ───────────────────── */
    .swiper-pagination-bullet {
        width: 6px !important;
        height: 6px !important;
        opacity: 0.35 !important;
        transition: opacity var(--nihon-transition),
                    transform var(--nihon-transition) !important;
    }
    .swiper-pagination-bullet-active {
        opacity: 1 !important;
        transform: scale(1.25) !important;
    }

    /* ── Scrollbar: mỏng kiểu Nhật ───────────────────────── */
    ::-webkit-scrollbar { width: 4px; height: 4px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb {
        background: rgba(62, 168, 226, 0.3);
        border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: rgba(62, 168, 226, 0.55);
    }

    /* ── Selection highlight ──────────────────────────────── */
    ::selection {
        background: rgba(62, 168, 226, 0.18);
        color: var(--nihon-ink);
    }
    </style>

    <style id="perfect-product-card-fix">
    /* ══ Product Loop Cards — cân đối lại toàn diện ═══════════════════
       Vấn đề: nền xanh Elementor + object-fit:cover cắt ảnh + tỉ lệ lệch
    ════════════════════════════════════════════════════════════════════ */

    /* 1. Card ngoài: bo góc mềm, không border, shadow cực nhẹ */
    .elementor-7008 .cs-product-loop,
    .elementor-7008.e-loop-item .elementor-element-06cc180 {
        background: #ffffff !important;
        background-color: #ffffff !important;
        background-image: none !important;
        border-radius: 16px !important;
        overflow: hidden !important;
        box-shadow: 0 4px 20px rgba(30, 50, 80, 0.08) !important;
        border: none !important;
        outline: none !important;
        transition: transform 0.28s cubic-bezier(0.4,0,0.2,1),
                    box-shadow 0.28s cubic-bezier(0.4,0,0.2,1) !important;
    }

    .elementor-7008 .cs-product-loop:hover,
    .elementor-7008.e-loop-item .elementor-element-06cc180:hover {
        transform: translateY(-5px) !important;
        box-shadow: 0 16px 36px rgba(30, 50, 80, 0.13) !important;
        border: none !important;
    }

    /* 2. Image widget container: full-bleed, không nền xám */
    .elementor-7008 .elementor-element-dd2c523 .elementor-widget-container {
        background: transparent !important;
        background-image: none !important;
        border-radius: 0 !important;
        overflow: hidden !important;
        padding: 0 !important;
        display: block !important;
        line-height: 0 !important;
    }

    /* 3. Ảnh sản phẩm: cover full-bleed, tỉ lệ 4:3.5 */
    .elementor-7008 .elementor-element-dd2c523 img,
    .cs-product-loop img {
        width: 100% !important;
        height: auto !important;
        aspect-ratio: 4 / 3.5 !important;
        object-fit: cover !important;
        object-position: center !important;
        padding: 0 !important;
        display: block !important;
        transition: transform 0.32s cubic-bezier(0.4,0,0.2,1) !important;
    }

    .elementor-7008 .cs-product-loop:hover .elementor-element-dd2c523 img,
    .elementor-7008 .elementor-element-dd2c523:hover img {
        transform: scale(1.05) !important;
    }

    /* 4. Phần text + nút bên dưới: padding nhất quán 16px hai bên */
    .elementor-7008 .e-con-inner {
        padding: 0 !important;
        gap: 0 !important;
    }

    /* Wrapper bọc toàn bộ text section (từ element title trở xuống) */
    .elementor-7008 .elementor-element-7efd07a,
    .elementor-7008 .elementor-element-2a2760f,
    .elementor-7008 .elementor-element-8aa38ce {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .elementor-7008 .elementor-element-7efd07a > .elementor-widget-container {
        padding: 14px 16px 5px 16px !important;
    }

    .elementor-7008 .elementor-element-7efd07a .elementor-heading-title {
        font-size: 14px !important;
        font-weight: 600 !important;
        line-height: 1.42 !important;
        color: #1e2532 !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        margin: 0 !important;
    }

    .elementor-7008 .elementor-element-7efd07a .elementor-heading-title a {
        color: #1e2532 !important;
    }

    .elementor-7008 .elementor-element-7efd07a .elementor-heading-title a:hover {
        color: #3ea8e2 !important;
    }

    .elementor-7008 .elementor-element-2a2760f > .elementor-widget-container {
        padding: 4px 16px 8px 16px !important;
    }

    .elementor-7008 .elementor-element-2a2760f .elementor-heading-title {
        font-size: 12px !important;
        color: #8c95a3 !important;
        font-weight: 400 !important;
        white-space: nowrap !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        margin: 0 !important;
    }

    .elementor-7008 .elementor-element-8aa38ce > .elementor-widget-container {
        padding: 0 16px 16px 16px !important;
    }

    /* 5. Tags (Chuyên Gia / Tại Nhà / Tại Spa): nhỏ gọn, tinh tế */
    .elementor-7008 .product-tag-container {
        background: rgba(62, 168, 226, 0.90) !important;
        backdrop-filter: blur(6px) !important;
        border-radius: 5px !important;
        padding: 3px 9px !important;
        box-shadow: 0 2px 8px rgba(30, 74, 104, 0.18) !important;
        margin-bottom: 4px !important;
    }

    .elementor-7008 .product-tag {
        font-size: 11px !important;
        font-weight: 600 !important;
        letter-spacing: 0.02em !important;
        color: #ffffff !important;
        line-height: 1.4 !important;
    }

    /* 6. Đảm bảo các background xanh Elementor bị ghi đè */
    .elementor-7008 .cs-product-loop > .e-con-inner,
    .elementor-7008 .elementor-element-06cc180.e-con {
        background: #ffffff !important;
        background-image: none !important;
    }

    /* Product listing cards: dong bo tat ca card san pham theo mau moi */
    main .products-swiper .swiper-slide,
    main .products-grid-container > * {
        height: auto !important;
    }

    main .product-container {
        display: flex !important;
        flex-direction: column !important;
        height: auto !important;
        min-height: 0 !important;
        padding: 0 0 16px !important;
        background: #ffffff !important;
        border: 0 !important;
        border-radius: 18px !important;
        box-shadow: 0 8px 24px rgba(30, 50, 80, 0.08) !important;
        overflow: hidden !important;
    }

    main .product-container .product-image-container {
        display: block !important;
        width: 100% !important;
        aspect-ratio: 1 / 1 !important;
        margin: 0 !important;
        border-radius: 18px 18px 0 0 !important;
        overflow: hidden !important;
        background: #eef7ff !important;
        position: relative !important;
    }

    main .product-container .product-image {
        width: 100% !important;
        height: 100% !important;
        display: block !important;
        object-fit: cover !important;
        object-position: center top !important;
    }

    main .product-container .product-tags-container-wrapper {
        display: none !important;
    }

    main .product-container hgroup {
        margin: 0 !important;
    }

    main .product-container .product-title {
        margin: 18px 0 0 !important;
        padding: 0 20px !important;
        min-height: 2.9em !important;
        color: #111827 !important;
        font-size: 16px !important;
        font-weight: 700 !important;
        line-height: 1.45 !important;
        letter-spacing: 0 !important;
        opacity: 1 !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
    }

    main .product-container .product-description {
        display: block !important;
        flex-grow: 0 !important;
        margin: 8px 0 0 !important;
        padding: 0 20px !important;
        color: #8a919c !important;
        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 1.45 !important;
        opacity: 1 !important;
        white-space: nowrap !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
    }

    main .product-container .product-discover-now {
        align-self: flex-start !important;
        margin: 8px 20px 0 !important;
        color: #3ea8e2 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        line-height: 1.25 !important;
        text-decoration: none !important;
        border-bottom: 1.5px solid rgba(62, 168, 226, 0.45) !important;
        background: transparent !important;
    }

    @media (max-width: 767px) {
        main .product-container {
            border-radius: 16px !important;
            padding-bottom: 14px !important;
        }

        main .product-container .product-image-container {
            border-radius: 16px 16px 0 0 !important;
        }

        main .product-container .product-title {
            margin-top: 16px !important;
            padding-inline: 16px !important;
            font-size: 15px !important;
        }

        main .product-container .product-description,
        main .product-container .product-discover-now {
            margin-top: 7px !important;
            padding-inline: 16px !important;
        }

        main .product-container .product-discover-now {
            margin-left: 16px !important;
            margin-right: 16px !important;
            padding-inline: 0 !important;
        }
    }

    /* 7. Mega menu: card can theo khung dropdown, khong bi cat le phai */
    #cs-mega-menu .e-n-menu-content > .e-con > .e-con-inner {
        max-width: min(1120px, calc(100vw - 48px)) !important;
        width: 100% !important;
        margin-inline: auto !important;
        overflow: visible !important;
    }

    #cs-mega-menu .cs-child-menu-container {
        grid-template-columns: minmax(132px, 176px) repeat(3, minmax(0, 1fr)) !important;
        gap: 10px 18px !important;
        max-width: 100% !important;
        margin-inline: auto !important;
        box-sizing: border-box !important;
    }

    #cs-mega-menu .cs-child-menu-container > .elementor-element:nth-child(n+4) {
        min-width: 0 !important;
        max-width: 100% !important;
        justify-self: stretch !important;
    }

    #cs-mega-menu .cs-child-menu-container > .elementor-element:nth-child(n+4),
    #cs-mega-menu .cs-child-menu-container > .elementor-element:nth-child(n+4) > .elementor-widget-container,
    #cs-mega-menu .cs-child-menu-container .elementor-loop-container,
    #cs-mega-menu .cs-child-menu-container .e-loop-item,
    #cs-mega-menu .cs-product-loop,
    #cs-mega-menu .cs-product-loop > .e-con-inner {
        width: 100% !important;
        min-width: 0 !important;
        box-sizing: border-box !important;
    }

    #cs-mega-menu .cs-product-loop {
        height: 100% !important;
        min-height: 0 !important;
        border-radius: 10px !important;
        display: flex !important;
    }

    #cs-mega-menu .cs-product-loop > .e-con-inner {
        display: flex !important;
        flex-direction: column !important;
        height: 100% !important;
    }

    #cs-mega-menu .cs-product-loop .elementor-element-dd2c523,
    #cs-mega-menu .cs-product-loop .elementor-element-dd2c523 > .elementor-widget-container,
    #cs-mega-menu .cs-product-loop .elementor-element-dd2c523 a {
        display: block !important;
        width: 100% !important;
        min-width: 0 !important;
        line-height: 0 !important;
    }

    #cs-mega-menu .cs-product-loop img,
    #cs-mega-menu .cs-product-loop .elementor-element-dd2c523 img {
        width: 100% !important;
        height: auto !important;
        aspect-ratio: 4 / 3.5 !important;
        object-fit: cover !important;
        object-position: center !important;
        display: block !important;
        border-radius: 10px 10px 0 0 !important;
    }

    #cs-mega-menu .cs-product-loop .elementor-element-962880c,
    #cs-mega-menu .cs-product-loop .cs-product-tags {
        top: 10px !important;
        right: 10px !important;
        max-width: calc(100% - 20px) !important;
    }

    #cs-mega-menu .cs-product-loop .product-tags-container-wrapper,
    #cs-mega-menu .cs-product-loop .product-tag-container-wrapper {
        max-width: 100% !important;
        align-items: flex-end !important;
    }

    #cs-mega-menu .cs-product-loop .product-tag-container {
        max-width: 100% !important;
        padding: 3px 8px !important;
    }

    #cs-mega-menu .cs-product-loop .product-tag {
        max-width: 100% !important;
        white-space: nowrap !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
    }

    #cs-mega-menu .cs-product-loop .elementor-element-7efd07a > .elementor-widget-container {
        padding: 12px 14px 4px !important;
    }

    #cs-mega-menu .cs-product-loop .elementor-element-7efd07a .elementor-heading-title {
        min-height: 2.84em !important;
        font-size: 13px !important;
        line-height: 1.42 !important;
    }

    #cs-mega-menu .cs-product-loop .elementor-element-2a2760f > .elementor-widget-container {
        padding: 3px 14px 2px !important;
    }

    #cs-mega-menu .cs-product-loop .elementor-element-2a2760f .elementor-heading-title {
        font-size: 12px !important;
        line-height: 1.4 !important;
    }

    #cs-mega-menu .cs-product-loop .elementor-element-8aa38ce {
        margin-top: 6px !important;
    }

    #cs-mega-menu .cs-product-loop .elementor-element-8aa38ce > .elementor-widget-container {
        padding: 0 14px 12px !important;
    }

    @media (max-width: 1100px) {
        #cs-mega-menu .e-n-menu-content > .e-con > .e-con-inner {
            max-width: calc(100vw - 32px) !important;
        }

        #cs-mega-menu .cs-child-menu-container {
            grid-template-columns: minmax(118px, 150px) repeat(3, minmax(0, 1fr)) !important;
            gap: 8px 12px !important;
        }

        #cs-mega-menu .cs-product-loop .elementor-element-7efd07a .elementor-heading-title {
            font-size: 12.5px !important;
        }

        #cs-mega-menu .cs-product-loop .elementor-element-2a2760f .elementor-heading-title {
            font-size: 11.5px !important;
        }
    }
    </style>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches || !("IntersectionObserver" in
                window)) {
            return;
        }

        document.documentElement.classList.add("perfect-motion-ready");

        const revealSelectors = [
            "main .e-con.e-parent",
            "main .product-category-container",
            "main .product-container",
            "main .service-container",
            "main .inner-product-item",
            "main .elementor-widget-heading",
            "main .elementor-widget-text-editor"
        ];
        const revealItems = document.querySelectorAll(revealSelectors.join(","));

        const revealObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add("perfect-visible");
                observer.unobserve(entry.target);
            });
        }, {
            rootMargin: "0px 0px -8% 0px",
            threshold: 0.12
        });

        revealItems.forEach(function(item, index) {
            if (item.closest(".elementor-location-popup") || item.closest("#hdMain")) {
                return;
            }

            item.classList.add("perfect-reveal");
            item.style.setProperty("--perfect-reveal-delay", (index % 5) * 45 + "ms");
            revealObserver.observe(item);
        });
    });
    </script>

    <script data-no-optimize="1">
    window.lazyLoadOptions = Object.assign({}, {
        threshold: 300
    }, window.lazyLoadOptions || {});
    ! function(t, e) {
        "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" ==
            typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self)
            .LazyLoad = e()
    }(this, function() {
        "use strict";

        function e() {
            return (e = Object.assign || function(t) {
                for (var e = 1; e < arguments.length; e++) {
                    var n, a = arguments[e];
                    for (n in a) Object.prototype.hasOwnProperty.call(a, n) && (t[n] = a[n])
                }
                return t
            }).apply(this, arguments)
        }

        function o(t) {
            return e({}, at, t)
        }

        function l(t, e) {
            return t.getAttribute(gt + e)
        }

        function c(t) {
            return l(t, vt)
        }

        function s(t, e) {
            return function(t, e, n) {
                e = gt + e;
                null !== n ? t.setAttribute(e, n) : t.removeAttribute(e)
            }(t, vt, e)
        }

        function i(t) {
            return s(t, null), 0
        }

        function r(t) {
            return null === c(t)
        }

        function u(t) {
            return c(t) === _t
        }

        function d(t, e, n, a) {
            t && (void 0 === a ? void 0 === n ? t(e) : t(e, n) : t(e, n, a))
        }

        function f(t, e) {
            et ? t.classList.add(e) : t.className += (t.className ? " " : "") + e
        }

        function _(t, e) {
            et ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\s+)" + e + "(\\s+|$)"),
                " ").replace(/^\s+/, "").replace(/\s+$/, "")
        }

        function g(t) {
            return t.llTempImage
        }

        function v(t, e) {
            !e || (e = e._observer) && e.unobserve(t)
        }

        function b(t, e) {
            t && (t.loadingCount += e)
        }

        function p(t, e) {
            t && (t.toLoadCount = e)
        }

        function n(t) {
            for (var e, n = [], a = 0; e = t.children[a]; a += 1) "SOURCE" === e.tagName && n.push(e);
            return n
        }

        function h(t, e) {
            (t = t.parentNode) && "PICTURE" === t.tagName && n(t).forEach(e)
        }

        function a(t, e) {
            n(t).forEach(e)
        }

        function m(t) {
            return !!t[lt]
        }

        function E(t) {
            return t[lt]
        }

        function I(t) {
            return delete t[lt]
        }

        function y(e, t) {
            var n;
            m(e) || (n = {}, t.forEach(function(t) {
                n[t] = e.getAttribute(t)
            }), e[lt] = n)
        }

        function L(a, t) {
            var o;
            m(a) && (o = E(a), t.forEach(function(t) {
                var e, n;
                e = a, (t = o[n = t]) ? e.setAttribute(n, t) : e.removeAttribute(n)
            }))
        }

        function k(t, e, n) {
            f(t, e.class_loading), s(t, st), n && (b(n, 1), d(e.callback_loading, t, n))
        }

        function A(t, e, n) {
            n && t.setAttribute(e, n)
        }

        function O(t, e) {
            A(t, rt, l(t, e.data_sizes)), A(t, it, l(t, e.data_srcset)), A(t, ot, l(t, e.data_src))
        }

        function w(t, e, n) {
            var a = l(t, e.data_bg_multi),
                o = l(t, e.data_bg_multi_hidpi);
            (a = nt && o ? o : a) && (t.style.backgroundImage = a, n = n, f(t = t, (e = e).class_applied), s(t, dt),
                n && (e.unobserve_completed && v(t, e), d(e.callback_applied, t, n)))
        }

        function x(t, e) {
            !e || 0 < e.loadingCount || 0 < e.toLoadCount || d(t.callback_finish, e)
        }

        function M(t, e, n) {
            t.addEventListener(e, n), t.llEvLisnrs[e] = n
        }

        function N(t) {
            return !!t.llEvLisnrs
        }

        function z(t) {
            if (N(t)) {
                var e, n, a = t.llEvLisnrs;
                for (e in a) {
                    var o = a[e];
                    n = e, o = o, t.removeEventListener(n, o)
                }
                delete t.llEvLisnrs
            }
        }

        function C(t, e, n) {
            var a;
            delete t.llTempImage, b(n, -1), (a = n) && --a.toLoadCount, _(t, e.class_loading), e
                .unobserve_completed && v(t, n)
        }

        function R(i, r, c) {
            var l = g(i) || i;
            N(l) || function(t, e, n) {
                N(t) || (t.llEvLisnrs = {});
                var a = "VIDEO" === t.tagName ? "loadeddata" : "load";
                M(t, a, e), M(t, "error", n)
            }(l, function(t) {
                var e, n, a, o;
                n = r, a = c, o = u(e = i), C(e, n, a), f(e, n.class_loaded), s(e, ut), d(n.callback_loaded,
                    e, a), o || x(n, a), z(l)
            }, function(t) {
                var e, n, a, o;
                n = r, a = c, o = u(e = i), C(e, n, a), f(e, n.class_error), s(e, ft), d(n.callback_error,
                    e, a), o || x(n, a), z(l)
            })
        }

        function T(t, e, n) {
            var a, o, i, r, c;
            t.llTempImage = document.createElement("IMG"), R(t, e, n), m(c = t) || (c[lt] = {
                backgroundImage: c.style.backgroundImage
            }), i = n, r = l(a = t, (o = e).data_bg), c = l(a, o.data_bg_hidpi), (r = nt && c ? c : r) && (a
                .style.backgroundImage = 'url("'.concat(r, '")'), g(a).setAttribute(ot, r), k(a, o, i)), w(t, e,
                n)
        }

        function G(t, e, n) {
            var a;
            R(t, e, n), a = e, e = n, (t = Et[(n = t).tagName]) && (t(n, a), k(n, a, e))
        }

        function D(t, e, n) {
            var a;
            a = t, (-1 < It.indexOf(a.tagName) ? G : T)(t, e, n)
        }

        function S(t, e, n) {
            var a;
            t.setAttribute("loading", "lazy"), R(t, e, n), a = e, (e = Et[(n = t).tagName]) && e(n, a), s(t, _t)
        }

        function V(t) {
            t.removeAttribute(ot), t.removeAttribute(it), t.removeAttribute(rt)
        }

        function j(t) {
            h(t, function(t) {
                L(t, mt)
            }), L(t, mt)
        }

        function F(t) {
            var e;
            (e = yt[t.tagName]) ? e(t): m(e = t) && (t = E(e), e.style.backgroundImage = t.backgroundImage)
        }

        function P(t, e) {
            var n;
            F(t), n = e, r(e = t) || u(e) || (_(e, n.class_entered), _(e, n.class_exited), _(e, n.class_applied), _(
                e, n.class_loading), _(e, n.class_loaded), _(e, n.class_error)), i(t), I(t)
        }

        function U(t, e, n, a) {
            var o;
            n.cancel_on_exit && (c(t) !== st || "IMG" === t.tagName && (z(t), h(o = t, function(t) {
                V(t)
            }), V(o), j(t), _(t, n.class_loading), b(a, -1), i(t), d(n.callback_cancel, t, e, a)))
        }

        function $(t, e, n, a) {
            var o, i, r = (i = t, 0 <= bt.indexOf(c(i)));
            s(t, "entered"), f(t, n.class_entered), _(t, n.class_exited), o = t, i = a, n.unobserve_entered && v(o,
                i), d(n.callback_enter, t, e, a), r || D(t, n, a)
        }

        function q(t) {
            return t.use_native && "loading" in HTMLImageElement.prototype
        }

        function H(t, o, i) {
            t.forEach(function(t) {
                return (a = t).isIntersecting || 0 < a.intersectionRatio ? $(t.target, t, o, i) : (e = t
                    .target, n = t, a = o, t = i, void(r(e) || (f(e, a.class_exited), U(e, n, a, t), d(a
                        .callback_exit, e, n, t))));
                var e, n, a
            })
        }

        function B(e, n) {
            var t;
            tt && !q(e) && (n._observer = new IntersectionObserver(function(t) {
                H(t, e, n)
            }, {
                root: (t = e).container === document ? null : t.container,
                rootMargin: t.thresholds || t.threshold + "px"
            }))
        }

        function J(t) {
            return Array.prototype.slice.call(t)
        }

        function K(t) {
            return t.container.querySelectorAll(t.elements_selector)
        }

        function Q(t) {
            return c(t) === ft
        }

        function W(t, e) {
            return e = t || K(e), J(e).filter(r)
        }

        function X(e, t) {
            var n;
            (n = K(e), J(n).filter(Q)).forEach(function(t) {
                _(t, e.class_error), i(t)
            }), t.update()
        }

        function t(t, e) {
            var n, a, t = o(t);
            this._settings = t, this.loadingCount = 0, B(t, this), n = t, a = this, Y && window.addEventListener(
                "online",
                function() {
                    X(n, a)
                }), this.update(e)
        }
        var Y = "undefined" != typeof window,
            Z = Y && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i
            .test(navigator.userAgent),
            tt = Y && "IntersectionObserver" in window,
            et = Y && "classList" in document.createElement("p"),
            nt = Y && 1 < window.devicePixelRatio,
            at = {
                elements_selector: ".lazy",
                container: Z || Y ? document : null,
                threshold: 300,
                thresholds: null,
                data_src: "src",
                data_srcset: "srcset",
                data_sizes: "sizes",
                data_bg: "bg",
                data_bg_hidpi: "bg-hidpi",
                data_bg_multi: "bg-multi",
                data_bg_multi_hidpi: "bg-multi-hidpi",
                data_poster: "poster",
                class_applied: "applied",
                class_loading: "litespeed-loading",
                class_loaded: "litespeed-loaded",
                class_error: "error",
                class_entered: "entered",
                class_exited: "exited",
                unobserve_completed: !0,
                unobserve_entered: !1,
                cancel_on_exit: !0,
                callback_enter: null,
                callback_exit: null,
                callback_applied: null,
                callback_loading: null,
                callback_loaded: null,
                callback_error: null,
                callback_finish: null,
                callback_cancel: null,
                use_native: !1
            },
            ot = "src",
            it = "srcset",
            rt = "sizes",
            ct = "poster",
            lt = "llOriginalAttrs",
            st = "loading",
            ut = "loaded",
            dt = "applied",
            ft = "error",
            _t = "native",
            gt = "data-",
            vt = "ll-status",
            bt = [st, ut, dt, ft],
            pt = [ot],
            ht = [ot, ct],
            mt = [ot, it, rt],
            Et = {
                IMG: function(t, e) {
                    h(t, function(t) {
                        y(t, mt), O(t, e)
                    }), y(t, mt), O(t, e)
                },
                IFRAME: function(t, e) {
                    y(t, pt), A(t, ot, l(t, e.data_src))
                },
                VIDEO: function(t, e) {
                    a(t, function(t) {
                        y(t, pt), A(t, ot, l(t, e.data_src))
                    }), y(t, ht), A(t, ct, l(t, e.data_poster)), A(t, ot, l(t, e.data_src)), t.load()
                }
            },
            It = ["IMG", "IFRAME", "VIDEO"],
            yt = {
                IMG: j,
                IFRAME: function(t) {
                    L(t, pt)
                },
                VIDEO: function(t) {
                    a(t, function(t) {
                        L(t, pt)
                    }), L(t, ht), t.load()
                }
            },
            Lt = ["IMG", "IFRAME", "VIDEO"];
        return t.prototype = {
            update: function(t) {
                var e, n, a, o = this._settings,
                    i = W(t, o); {
                    if (p(this, i.length), !Z && tt) return q(o) ? (e = o, n = this, i.forEach(function(t) {
                        -1 !== Lt.indexOf(t.tagName) && S(t, e, n)
                    }), void p(n, 0)) : (t = this._observer, o = i, t.disconnect(), a = t, void o
                        .forEach(function(t) {
                            a.observe(t)
                        }));
                    this.loadAll(i)
                }
            },
            destroy: function() {
                this._observer && this._observer.disconnect(), K(this._settings).forEach(function(t) {
                        I(t)
                    }), delete this._observer, delete this._settings, delete this.loadingCount, delete this
                    .toLoadCount
            },
            loadAll: function(t) {
                var e = this,
                    n = this._settings;
                W(t, n).forEach(function(t) {
                    v(t, e), D(t, n, e)
                })
            },
            restoreAll: function() {
                var e = this._settings;
                K(e).forEach(function(t) {
                    P(t, e)
                })
            }
        }, t.load = function(t, e) {
            e = o(e);
            D(t, e)
        }, t.resetStatus = function(t) {
            i(t)
        }, t
    }),
    function(t, e) {
        "use strict";

        function n() {
            e.body.classList.add("litespeed_lazyloaded")
        }

        function a() {
            console.log("[LiteSpeed] Start Lazy Load"), o = new LazyLoad(Object.assign({}, t.lazyLoadOptions || {}, {
                elements_selector: "[data-lazyloaded]",
                callback_finish: n
            })), i = function() {
                o.update()
            }, t.MutationObserver && new MutationObserver(i).observe(e.documentElement, {
                childList: !0,
                subtree: !0,
                attributes: !0
            })
        }
        var o, i;
        t.addEventListener ? t.addEventListener("load", a, !1) : t.attachEvent("onload", a)
    }(window, document);
    </script>
    <script id="perfect-lazy-image-fallback">
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("img[data-src]").forEach(function(img) {
            var source = img.getAttribute("data-src");
            var current = img.getAttribute("src") || "";

            if (!source) {
                return;
            }

            if (!current || current.indexOf("data:image/gif") === 0 || current.indexOf("data:image/svg") === 0) {
                img.setAttribute("src", source);
            }
        });

        document.querySelectorAll("img[data-srcset]").forEach(function(img) {
            if (!img.getAttribute("srcset")) {
                img.setAttribute("srcset", img.getAttribute("data-srcset"));
            }
        });
    });
    </script>

    <style id="perfect-product-price-card">
    body .elementor-element-c295bd2 {
        display: grid !important;
        grid-template-columns: minmax(0, 1fr) minmax(240px, 340px) !important;
        align-items: center !important;
        gap: 28px !important;
        width: 100% !important;
        margin: 28px 0 22px !important;
        padding: 24px !important;
        background: #ffffff !important;
        border: 1px solid rgba(17, 24, 39, 0.14) !important;
        border-radius: 12px !important;
        box-shadow: 0 12px 30px rgba(17, 24, 39, 0.06) !important;
    }

    body .elementor-element-c295bd2 .elementor-element-e77788f,
    body .elementor-element-c295bd2 .elementor-element-5655dba {
        width: 100% !important;
        min-width: 0 !important;
    }

    body .elementor-element-c295bd2 .elementor-element-e77788f {
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        justify-content: center !important;
        gap: 10px !important;
    }

    body .elementor-element-c295bd2 .elementor-element-39ee97d,
    body .elementor-element-c295bd2 .cs-single-product-price,
    body .elementor-element-c295bd2 .elementor-widget-container,
    body .elementor-element-c295bd2 .price {
        margin: 0 !important;
    }

    body .elementor-element-c295bd2 .elementor-element-39ee97d .elementor-heading-title {
        margin: 0 !important;
        color: #6b7280 !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        line-height: 1.35 !important;
    }

    body .elementor-element-c295bd2 .price,
    body .elementor-element-c295bd2 .price .amount,
    body .elementor-element-c295bd2 .price .woocommerce-Price-amount {
        color: #111827 !important;
        font-size: clamp(28px, 3vw, 36px) !important;
        font-weight: 700 !important;
        line-height: 1.1 !important;
        letter-spacing: 0 !important;
    }

    body .elementor-element-c295bd2 .woocommerce-Price-currencySymbol {
        color: inherit !important;
        font-size: 0.62em !important;
        font-weight: 700 !important;
        vertical-align: 0.16em !important;
        margin-left: 3px !important;
        text-decoration: underline !important;
    }

    body .elementor-element-c295bd2 .elementor-element-5655dba {
        display: flex !important;
        justify-content: flex-end !important;
        align-items: center !important;
    }

    body .elementor-element-c295bd2 .cs-buy-now {
        width: 100% !important;
        max-width: 340px !important;
    }

    body .elementor-element-c295bd2 .cs-buy-now > .elementor-widget-container {
        display: grid !important;
        grid-template-columns: repeat(auto-fit, minmax(145px, 1fr)) !important;
        gap: 12px !important;
        width: 100% !important;
    }

    body .elementor-element-c295bd2 .elementor-button-wrapper {
        width: 100% !important;
    }

    body .elementor-element-c295bd2 .elementor-button {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 100% !important;
        min-height: 52px !important;
        padding: 0 18px !important;
        border: 1.5px solid #3ea8e2 !important;
        border-radius: 8px !important;
        box-shadow: none !important;
        font-size: 15px !important;
        font-weight: 700 !important;
        line-height: 1.2 !important;
        text-align: center !important;
        white-space: nowrap !important;
        transition: background-color 0.18s ease, color 0.18s ease, border-color 0.18s ease, transform 0.18s ease !important;
    }

    body .elementor-element-c295bd2 .elementor-button-wrapper:first-child .elementor-button {
        background: #3ea8e2 !important;
        background-color: #3ea8e2 !important;
        color: #ffffff !important;
    }

    body .elementor-element-c295bd2 .elementor-button-wrapper:first-child .elementor-button * {
        color: #ffffff !important;
        fill: #ffffff !important;
        stroke: #ffffff !important;
    }

    body .elementor-element-c295bd2 .elementor-button-wrapper:not(:first-child) .elementor-button {
        background: #ffffff !important;
        background-color: #ffffff !important;
        color: #3ea8e2 !important;
    }

    body .elementor-element-c295bd2 .elementor-button:hover,
    body .elementor-element-c295bd2 .elementor-button:focus {
        transform: translateY(-1px) !important;
        border-color: #258fc9 !important;
    }

    body .elementor-element-c295bd2 .elementor-button-wrapper:not(:first-child) .elementor-button:hover,
    body .elementor-element-c295bd2 .elementor-button-wrapper:not(:first-child) .elementor-button:focus {
        background: rgba(62, 168, 226, 0.08) !important;
        background-color: rgba(62, 168, 226, 0.08) !important;
    }

    @media (max-width: 767px) {
        body .elementor-element-c295bd2 {
            grid-template-columns: 1fr !important;
            gap: 18px !important;
            margin: 22px 0 18px !important;
            padding: 20px !important;
        }

        body .elementor-element-c295bd2 .elementor-element-5655dba {
            justify-content: stretch !important;
        }

        body .elementor-element-c295bd2 .cs-buy-now {
            max-width: none !important;
        }

        body .elementor-element-c295bd2 .cs-buy-now > .elementor-widget-container {
            grid-template-columns: 1fr !important;
        }
    }
    </style>
    <script>
    (function() {
        var forms = document.querySelectorAll('.elementor-form[method="post"]');
        forms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                var btn = form.querySelector('button[type="submit"]');
                var origText = btn ? btn.innerText : '';
                if (btn) {
                    btn.disabled = true;
                    btn.querySelector('.elementor-button-text').innerText = 'Đang gửi...';
                }

                var data = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    },
                    body: data
                })
                .then(function(res) {
                    if (!res.ok) throw new Error('Server error');
                    return res.json ? res.json() : res.text();
                })
                .then(function() {
                    var wrapper = form.closest('.elementor-widget-container');
                    if (wrapper) {
                        wrapper.innerHTML = '<div style="text-align:center;padding:30px 20px;color:#1a3a5c;font-size:16px;font-weight:600;">Cảm ơn bạn đã gửi thông tin!<br><span style="font-weight:400;font-size:14px;color:#666;">PERFECT sẽ liên hệ trong thời gian sớm nhất.</span></div>';
                    }
                })
                .catch(function() {
                    if (btn) {
                        btn.disabled = false;
                        btn.querySelector('.elementor-button-text').innerText = origText;
                    }
                    alert('Có lỗi xảy ra, vui lòng thử lại sau.');
                });
            });
        });
    })();
    </script>
    <script>
    // Fix mega menu: block Elementor khỏi thêm e-active vào .e-con khi không hover
    (function() {
        var hoveringItem = null;

        function forceHideInnerCons() {
            document.querySelectorAll('#cs-mega-menu .e-n-menu-content > .e-con').forEach(function(con) {
                var item = con.closest('.e-n-menu-item');
                if (item && item !== hoveringItem) {
                    con.classList.remove('e-active');
                    con.style.setProperty('display', 'none', 'important');
                }
            });
        }

        function setupHover() {
            var items = document.querySelectorAll('#cs-mega-menu .e-n-menu-item');
            if (!items.length) return false;
            items.forEach(function(item) {
                item.addEventListener('mouseenter', function() {
                    hoveringItem = item;
                    var con = item.querySelector('.e-n-menu-content > .e-con');
                    if (con) {
                        con.classList.add('e-active');
                        con.style.removeProperty('display');
                    }
                });
                item.addEventListener('mouseleave', function() {
                    hoveringItem = null;
                    var con = item.querySelector('.e-n-menu-content > .e-con');
                    if (con) {
                        con.classList.remove('e-active');
                        con.style.setProperty('display', 'none', 'important');
                    }
                });
            });

            // MutationObserver: block Elementor khi add e-active vào .e-con không hover
            var observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(m) {
                    if (m.attributeName !== 'class') return;
                    var con = m.target;
                    if (!con.classList.contains('e-active')) return;
                    var item = con.closest('.e-n-menu-item');
                    if (item && item !== hoveringItem) {
                        con.classList.remove('e-active');
                        con.style.setProperty('display', 'none', 'important');
                    }
                });
            });
            document.querySelectorAll('#cs-mega-menu .e-n-menu-content > .e-con').forEach(function(con) {
                observer.observe(con, { attributes: true, attributeFilter: ['class'] });
            });

            forceHideInnerCons();
            return true;
        }

        var delays = [0, 100, 300, 600, 1000, 1500, 2500];
        function trySetup() {
            if (!setupHover()) setTimeout(trySetup, 200);
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                delays.forEach(function(d) { setTimeout(forceHideInnerCons, d); });
                trySetup();
            });
        } else {
            delays.forEach(function(d) { setTimeout(forceHideInnerCons, d); });
            trySetup();
        }
    })();
    </script>
</body>


</html>


<!-- Page cached by LiteSpeed Cache 7.7 on 2026-05-15 16:13:17 -->
