<search class="e-filter" role="search" data-base-url="{{ route('tin-tuc') }}" data-page-num="1">
    <a class="e-filter-item" href="{{ route('tin-tuc', array_filter(['s' => $search ?? null])) }}" aria-pressed="{{ empty($activeCategory) ? 'true' : 'false' }}">
        Tất cả
    </a>
    @foreach(($categories ?? []) as $category)
        <a class="e-filter-item" href="{{ route('tin-tuc', array_filter(['danh_muc' => $category['slug'], 's' => $search ?? null])) }}" aria-pressed="{{ ($activeCategory ?? null) === $category['slug'] ? 'true' : 'false' }}">
            {{ $category['name'] }}
            @if(isset($category['posts_count']))
                <span class="news-filter-count">{{ $category['posts_count'] }}</span>
            @endif
        </a>
    @endforeach
</search>
