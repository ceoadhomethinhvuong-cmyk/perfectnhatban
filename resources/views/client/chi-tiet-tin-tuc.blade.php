@extends('client.layouts.app')

@section('title', $article['tieu_de'])
@section('seo_title', $article['meta_title'] ?? $article['tieu_de'])
@section('meta_description', $article['meta_description'] ?? $article['tom_tat'])

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700;800&family=Lato:wght@400;700&family=Manrope:wght@400;500;600;700;800&family=Merriweather:wght@400;700&family=Montserrat:wght@400;500;600;700;800&family=Noto+Sans:wght@400;500;600;700&family=Noto+Serif:wght@400;700&family=Nunito:wght@400;600;700;800&family=Open+Sans:wght@400;600;700;800&family=Oswald:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700;800&family=Poppins:wght@400;500;600;700;800&family=Raleway:wght@400;500;600;700;800&family=Roboto:wght@400;500;700;900&family=Source+Sans+3:wght@400;600;700;800&display=swap" rel="stylesheet">
@endpush

@section('content')
<style>
    .post-content-wrapper { max-width:860px; margin:0 auto; }
    .post-content-wrapper img { max-width:100%; height:auto; border-radius:8px; margin:20px 0; }
    .post-content-wrapper h1 { font-size:28px; font-weight:700; color:#252525; margin:30px 0 16px; line-height:1.3; }
    .post-content-wrapper h2 { font-size:22px; font-weight:700; color:#252525; margin:24px 0 12px; }
    .post-content-wrapper h3 { font-size:18px; font-weight:600; color:#333; margin:20px 0 10px; }
    .post-content-wrapper p { font-size:16px; line-height:1.8; color:#444; margin-bottom:16px; }
    .post-content-wrapper figure { margin:24px 0; text-align:center; }
    .post-content-wrapper figcaption { font-size:13px; color:#888; margin-top:8px; font-style:italic; }
    .post-content-wrapper ul,.post-content-wrapper ol { margin:12px 0 16px 24px; }
    .post-content-wrapper li { font-size:16px; line-height:1.8; color:#444; }
    .post-content-wrapper a { color:#3ea8e2; text-decoration:underline; }
    .post-content-wrapper blockquote { border-left:3px solid #3ea8e2; padding-left:16px; margin:20px 0; color:#666; font-style:italic; }
    .post-content-wrapper hr { border:0; border-top:1px solid #e5e7eb; margin:28px 0 24px; }
    .post-content-wrapper table { border-collapse:collapse; display:block; margin:22px 0; max-width:100%; overflow-x:auto; width:100%; -webkit-overflow-scrolling:touch; }
    .post-content-wrapper table thead,
    .post-content-wrapper table tbody,
    .post-content-wrapper table tfoot { display:table; min-width:680px; width:100%; }
    .post-content-wrapper table th,
    .post-content-wrapper table td { border:1px solid #cfd4dc; color:#1f2933; font-size:15px; line-height:1.6; padding:12px 14px; text-align:left; vertical-align:top; word-break:normal; overflow-wrap:normal; }
    .post-content-wrapper table th { background:#f8fafc; font-weight:800; }
    .post-content-wrapper .wp-caption { max-width:100% !important; }
    .post-content-wrapper .aligncenter { display:block; margin-left:auto; margin-right:auto; }
    .post-meta-dot { width:4px; height:4px; border-radius:50%; background:#3ea8e299; display:inline-block; margin:0 8px; vertical-align:middle; }
    .post-toc { background:#fff; border:1px solid #e0e0e0; border-radius:6px; color:#333; display:inline-block; margin:0 0 28px; max-width:560px; padding:20px 24px 22px; }
    .post-toc strong { color:#111; display:block; font-size:17px; font-weight:800; letter-spacing:.5px; line-height:1.3; margin-bottom:14px; text-transform:uppercase; }
    .post-content-wrapper .post-toc-list { counter-reset: toc2; list-style:none; margin:0; padding:0; }
    .post-toc-list li { color:#333; font-size:15px; line-height:1.6; margin:4px 0; display:flex; align-items:baseline; gap:6px; }
    .post-toc-list a { color:inherit; font-weight:400; text-decoration:none; flex:1; }
    .post-toc-list a:hover { color:#258fe5; }
    .post-toc-list .toc-level-2 { counter-increment: toc2; counter-reset: toc3; }
    .post-toc-list .toc-level-3 { counter-increment: toc3; counter-reset: toc4; font-size:14px; padding-left:28px; }
    .post-toc-list .toc-level-4 { counter-increment: toc4; font-size:13px; padding-left:48px; }
    .post-toc-list .toc-level-2 .toc-number { min-width:26px; color:#555; }
    .post-toc-list .toc-level-3 .toc-number { min-width:40px; color:#555; }
    .post-toc-list .toc-level-4 .toc-number { min-width:54px; color:#555; }
    .post-toc-list .toc-level-2 .toc-number::before { content: counter(toc2); }
    .post-toc-list .toc-level-3 .toc-number::before { content: counter(toc2) "." counter(toc3); }
    .post-toc-list .toc-level-4 .toc-number::before { content: counter(toc2) "." counter(toc3) "." counter(toc4); }
    .post-faq { margin:42px 0 0; }
    .post-faq h2 { color:var(--faq-color, #258fe5); font-size:28px; font-weight:800; line-height:1.25; margin:0 0 14px; }
    .post-faq details { background:#fff; border:1px solid #e1e5ea; border-radius:8px; margin:12px 0; overflow:hidden; }
    .post-faq summary { color:var(--faq-color, #1f5598); cursor:pointer; font-size:17px; font-weight:800; list-style:none; padding:18px 48px 18px 18px; position:relative; }
    .post-faq summary::-webkit-details-marker { display:none; }
    .post-faq summary::after { border:solid var(--faq-color, #1f5598); border-width:0 1.5px 1.5px 0; content:""; height:8px; position:absolute; right:22px; top:50%; transform:translateY(-65%) rotate(45deg); transition:transform .2s ease; width:8px; }
    .post-faq details[open] summary::after { transform:translateY(-35%) rotate(225deg); }
    .post-faq-answer { border-top:1px solid #eef1f5; color:#4d5562; font-size:15px; line-height:1.75; padding:0 18px 18px; }
    .post-faq-answer p:last-child { margin-bottom:0; }
    @media (max-width: 575px) {
        .post-toc { max-width:100%; padding:16px; }
        .post-toc-list li { font-size:14px; }
        .post-faq h2 { font-size:24px; }
        .post-faq summary { font-size:15px; }
    }
</style>

<main id="content" class="site-main">
    <div class="page-content">
        <div style="background:#f9f9f9;padding:16px 0;">
            <div style="max-width:1200px;margin:0 auto;padding:0 20px;">
                <nav style="font-size:14px;color:#666;">
                    <a href="/" style="color:#666;text-decoration:none;">Trang chủ</a> &gt;
                    <a href="/tin-tuc" style="color:#666;text-decoration:none;">Tin tức</a> &gt;
                    <span style="color:#3ea8e2;">{{ $article['tieu_de'] }}</span>
                </nav>
            </div>
        </div>

        <div style="max-width:1200px;margin:40px auto;padding:0 20px;">
            <div class="post-content-wrapper">
                <h1>{{ $article['tieu_de'] }}</h1>

                <div style="display:flex;align-items:center;gap:14px;margin-bottom:28px;flex-wrap:wrap;">
                    <span style="font-size:14px;color:#888;">{{ date('d/m/Y', strtotime($article['ngay_dang'])) }}</span>
                    <span class="post-meta-dot"></span>
                    <a href="/tin-tuc?danh_muc={{ $article['danh_muc'] }}" style="font-size:13px;color:#3ea8e2;text-decoration:none;background:#3ea8e20D;padding:4px 10px;border-radius:4px;font-weight:600;">
                        {{ $article['danh_muc_ten'] ?? $article['danh_muc'] }}
                    </a>
                </div>

                @if(!empty($article['anh']))
                <img src="{{ $article['anh'] }}" alt="{{ $article['tieu_de'] }}" style="width:100%;border-radius:12px;margin-bottom:30px;">
                @endif

                @if(!empty($article['toc_items']))
                <div class="post-toc">
                    <strong>Mục lục</strong>
                    <ol class="post-toc-list">
                        @foreach($article['toc_items'] as $item)
                            @php
                                $tocLevel = min(4, max(2, (int) ($item['level'] ?? 2)));
                            @endphp
                            <li class="toc-level-{{ $tocLevel }}"><a href="#{{ $item['anchor'] }}"><span class="toc-number"></span>{{ $item['title'] }}</a></li>
                        @endforeach
                    </ol>
                </div>
                @endif

                {!! $article['noi_dung'] !!}

                @if(!empty($article['faq_items']))
                @php
                    $faqTitle = $article['faq_title'] ?? 'Câu hỏi thường gặp';
                    $faqColor = preg_match('/^#[0-9A-Fa-f]{6}$/', $article['faq_color'] ?? '') ? $article['faq_color'] : '#258fe5';
                    $faqSchema = [
                        '@context' => 'https://schema.org',
                        '@type' => 'FAQPage',
                        'mainEntity' => collect($article['faq_items'])->map(fn ($faq) => [
                            '@type' => 'Question',
                            'name' => $faq['question'],
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => $faq['answer'],
                            ],
                        ])->values()->all(),
                    ];
                @endphp
                <section class="post-faq" style="--faq-color: {{ $faqColor }};">
                    <h2>{{ $faqTitle }}</h2>
                    @foreach($article['faq_items'] as $faq)
                        <details>
                            <summary>{{ $faq['question'] }}</summary>
                            <div class="post-faq-answer">
                                {!! nl2br(e($faq['answer'])) !!}
                            </div>
                        </details>
                    @endforeach
                </section>
                <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
                @endif

                <div style="margin-top:40px;padding-top:24px;border-top:1px solid #eee;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;">
                    <a href="/tin-tuc" style="display:inline-flex;align-items:center;gap:8px;color:#3ea8e2;font-weight:600;text-decoration:none;font-size:15px;">
                        <svg width="16" height="16" viewBox="0 0 14 14" fill="none"><path opacity="0.4" d="M9.22 3.53A.6.6 0 0 0 8.6 3.03L4.78 6.46a.6.6 0 0 0 0 .5l3.82 3.43a.6.6 0 0 0 .62.01.6.6 0 0 0 .17-.51L5.68 6.71 9.22 3.53Z" fill="#252525"/></svg>
                        Quay lại
                    </a>
                    <a href="/tin-tuc" style="display:inline-block;padding:8px 20px;border:1px solid #3ea8e266;border-radius:6px;color:#3ea8e2;font-weight:600;text-decoration:none;font-size:14px;">Xem tất cả</a>
                </div>
            </div>

            @if(count($related) > 0)
            <div style="margin-top:56px;">
                <h3 style="font-size:20px;font-weight:700;color:#252525;margin-bottom:8px;">Có thể bạn quan tâm</h3>
                <p style="font-size:14px;color:#888;margin-bottom:24px;">Khám phá thêm các bài viết liên quan</p>
                <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:24px;">
                    @foreach($related as $item)
                    <a href="/tin-tuc/{{ $item['slug'] }}" style="text-decoration:none;color:inherit;">
                        <div style="border-radius:12px;overflow:hidden;box-shadow:0 3px 20px rgba(0,0,0,0.1);background:#fff;transition:transform 0.2s;">
                            @if(!empty($item['anh']))
                            <img src="{{ $item['anh'] }}" alt="{{ $item['tieu_de'] }}" style="width:100%;aspect-ratio:16/10;object-fit:cover;">
                            @endif
                            <div style="padding:16px;">
                                <div style="font-size:11px;color:#3ea8e2;font-weight:600;margin-bottom:6px;text-transform:uppercase;">{{ $item['danh_muc_ten'] ?? $item['danh_muc'] }}</div>
                                <h4 style="font-size:15px;font-weight:600;color:#252525;line-height:1.4;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;margin-bottom:8px;">{{ $item['tieu_de'] }}</h4>
                                <p style="font-size:12px;color:#999;">{{ date('d/m/Y', strtotime($item['ngay_dang'])) }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</main>
@endsection
