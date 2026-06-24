@php
    $isEdit = isset($blog);
    $blog = $blog ?? [
        'id' => null,
        'title' => '',
        'slug' => '',
        'category_id' => data_get($categories, '0.id'),
        'category' => data_get($categories, '0.name', ''),
        'summary' => '',
        'content' => '',
        'status' => 'published',
        'thumbnail_alt' => '',
        'meta_title' => '',
        'meta_description' => '',
        'focus_keyword' => '',
        'canonical_url' => '',
        'toc_auto' => true,
        'toc_items' => [
            ['title' => '', 'anchor' => '', 'level' => 2],
            ['title' => '', 'anchor' => '', 'level' => 2],
            ['title' => '', 'anchor' => '', 'level' => 2],
        ],
        'faq_title' => 'Câu hỏi thường gặp',
        'faq_color' => '#258fe5',
        'faq_items' => [
            ['question' => '', 'answer' => ''],
            ['question' => '', 'answer' => ''],
            ['question' => '', 'answer' => ''],
        ],
    ];
    $tocItems = old('toc_items', $blog['toc_items'] ?? []);
    $faqItems = old('faq_items', $blog['faq_items'] ?? []);
@endphp

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Nội dung bài viết</strong>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Tiêu đề bài viết</label>
                    <input id="title" type="text" name="title" class="form-control" value="{{ old('title', $blog['title']) }}" placeholder="Nhập tiêu đề có chứa từ khóa chính" required>
                    <small class="form-text text-muted">Nên rõ ý, tự nhiên, khoảng 55-65 ký tự.</small>
                </div>
                <div class="form-group">
                    <label for="slug">Slug URL</label>
                    <input id="slug" type="text" name="slug" class="form-control" value="{{ old('slug', $blog['slug']) }}" placeholder="slug-bai-viet-ngan-gon" data-seo-source="url">
                </div>
                <div class="form-group">
                    <label for="summary">Tóm tắt mở đầu</label>
                    <textarea id="summary" name="summary" class="form-control" placeholder="Tóm tắt ngắn hiển thị ngoài danh sách và làm gợi ý meta description">{{ old('summary', $blog['summary']) }}</textarea>
                </div>
                <div class="form-group mb-0">
                    <label for="content">Nội dung</label>
                    <textarea id="content" name="content" class="form-control admin-editor" placeholder="Nên dùng các heading H2/H3 rõ ràng để tạo mục lục tốt">{{ old('content', $blog['content']) }}</textarea>
                    <div class="admin-editor-hints">
                        <small class="form-text text-muted">Gợi ý: mỗi ý lớn dùng H2, các ý con dùng H3/H4 để mục lục dễ quét.</small>
                        <a class="btn btn-outline-primary btn-sm" href="#toc-builder-card">
                            <i class="fa fa-list mr-1"></i> Chỉnh mục lục
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" id="toc-builder-card">
            <div class="card-header admin-table-toolbar">
                <strong class="card-title">Mục lục bài viết</strong>
            </div>
            <div class="card-body">
                <div class="toc-auto-panel">
                    <div>
                        <strong>Tự động tạo mục lục từ H2/H3/H4</strong>
                        <p>Soạn bài bằng Heading 2 cho mục lớn, Heading 3/4 cho mục con. Khi lưu, hệ thống tự quét heading, tự gắn anchor và lưu mục lục dạng JSON.</p>
                    </div>
                    <div class="toc-auto-actions">
                        <button type="button" class="btn btn-primary btn-sm js-generate-toc">
                            <i class="fa fa-magic mr-1"></i> Tạo mục lục ngay
                        </button>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="toc_auto" value="0">
                            <input type="checkbox" class="custom-control-input" id="toc_auto" name="toc_auto" value="1" @checked((bool) old('toc_auto', $blog['toc_auto']))>
                            <label class="custom-control-label" for="toc_auto">Bật tự động khi lưu</label>
                        </div>
                    </div>
                </div>
                <p class="text-muted mb-3">Bảng bên dưới chỉ là phần xem trước/chỉnh thủ công. Nếu bật tự động khi lưu, bạn không cần tự điền anchor.</p>
                <div class="toc-builder-tools">
                    <button type="button" class="btn btn-light btn-sm js-add-toc-row">
                        <i class="fa fa-plus mr-1"></i> Thêm dòng
                    </button>
                    <span class="admin-soft-note"><i class="fa fa-arrows mr-1"></i> Giữ biểu tượng kéo ở đầu dòng để đổi vị trí.</span>
                </div>
                <div class="toc-builder">
                    <div class="toc-builder-head">
                        <span></span>
                        <span>Số</span>
                        <span>Tiêu đề mục</span>
                        <span>Anchor</span>
                        <span>Cấp</span>
                        <span></span>
                    </div>
                    @for ($i = 0; $i < 8; $i++)
                        <div class="toc-builder-row">
                            <button type="button" class="toc-drag-handle" draggable="true" aria-label="Kéo đổi vị trí" title="Kéo đổi vị trí">
                                <i class="fa fa-arrows"></i>
                            </button>
                            <span class="toc-row-number"></span>
                            <input type="text" name="toc_items[{{ $i }}][title]" class="form-control" value="{{ old("toc_items.$i.title", data_get($tocItems, "$i.title")) }}" placeholder="Ví dụ: Thành phần nổi bật">
                            <input type="text" name="toc_items[{{ $i }}][anchor]" class="form-control" value="{{ old("toc_items.$i.anchor", data_get($tocItems, "$i.anchor")) }}" placeholder="thanh-phan-noi-bat">
                            <select name="toc_items[{{ $i }}][level]" class="form-control">
                                @foreach ([2 => 'H2', 3 => 'H3', 4 => 'H4'] as $levelValue => $levelLabel)
                                    <option value="{{ $levelValue }}" @selected((int) old("toc_items.$i.level", data_get($tocItems, "$i.level", 2)) === $levelValue)>{{ $levelLabel }}</option>
                                @endforeach
                            </select>
                            <button type="button" class="toc-remove-row" aria-label="Xóa dòng" title="Xóa dòng">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header admin-table-toolbar">
                <strong class="card-title">Câu hỏi thường gặp</strong>
                <span class="admin-soft-note">Hiển thị dạng accordion ở cuối bài viết</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="faq_title">Tiêu đề khu FAQ</label>
                            <input id="faq_title" type="text" name="faq_title" class="form-control" value="{{ old('faq_title', $blog['faq_title'] ?? 'Câu hỏi thường gặp') }}" placeholder="Ví dụ: Câu hỏi thường gặp về phục hồi sau laser CO2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="faq_color">Màu FAQ</label>
                            <div class="admin-color-field">
                                <input id="faq_color" type="color" name="faq_color" class="form-control admin-color-input" value="{{ old('faq_color', $blog['faq_color'] ?? '#258fe5') }}">
                                <input type="text" class="form-control admin-color-text" value="{{ old('faq_color', $blog['faq_color'] ?? '#258fe5') }}" data-color-sync="#faq_color" placeholder="#258fe5">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-muted mb-3">Nhập câu hỏi và câu trả lời ngắn gọn. Dòng nào bỏ trống sẽ không hiển thị ngoài website.</p>
                <div class="faq-builder">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="faq-builder-row">
                            <label>Câu hỏi {{ $i + 1 }}</label>
                            <input type="text" name="faq_items[{{ $i }}][question]" class="form-control" value="{{ old("faq_items.$i.question", data_get($faqItems, "$i.question")) }}" placeholder="Ví dụ: Sau laser CO2 bao lâu thì bôi được serum?">
                            <textarea name="faq_items[{{ $i }}][answer]" class="form-control" rows="3" placeholder="Nhập câu trả lời ngắn gọn, dễ hiểu">{{ old("faq_items.$i.answer", data_get($faqItems, "$i.answer")) }}</textarea>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Xuất bản</strong>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="category">Danh mục</label>
                    <select id="category" name="category_id" class="form-control" required>
                        @if (empty($categories))
                            <option value="">Bạn cần tạo danh mục trước</option>
                        @endif
                        @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}" @selected((int) old('category_id', $blog['category_id'] ?? null) === (int) $category['id'])>{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Trạng thái</label>
                    <select id="status" name="status" class="form-control">
                        <option value="published" @selected(old('status', $blog['status']) === 'published')>Đang hiển thị</option>
                        <option value="draft" @selected(old('status', $blog['status']) === 'draft')>Bản nháp</option>
                        <option value="pending" @selected(old('status', $blog['status']) === 'pending')>Chờ duyệt</option>
                        <option value="scheduled" @selected(old('status', $blog['status']) === 'scheduled')>Đã lên lịch</option>
                        <option value="archived" @selected(old('status', $blog['status']) === 'archived')>Lưu trữ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ảnh đại diện</label>
                    <div class="custom-file">
                        <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                        <label class="custom-file-label" for="thumbnail">{{ $isEdit ? 'Chọn tệp mới' : 'Chọn tệp' }}</label>
                    </div>
                    <small class="form-text text-muted">Nên dùng ảnh ngang, nhẹ, có alt text phù hợp.</small>
                </div>
                <div class="form-group">
                    <label for="thumbnail_alt">Alt ảnh đại diện</label>
                    <input id="thumbnail_alt" type="text" name="thumbnail_alt" class="form-control" value="{{ old('thumbnail_alt', $blog['thumbnail_alt'] ?? '') }}" placeholder="Mô tả ngắn của ảnh">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fa fa-save mr-1"></i> {{ $isEdit ? 'Cập nhật bài viết' : 'Lưu bài viết' }}
                </button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-light btn-block">Quay lại</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <strong class="card-title">SEO bài viết</strong>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="focus_keyword">Từ khóa chính</label>
                    <input id="focus_keyword" type="text" name="focus_keyword" class="form-control" value="{{ old('focus_keyword', $blog['focus_keyword'] ?? '') }}" placeholder="Ví dụ: viên uống PERFECT">
                </div>
                <div class="form-group">
                    <label for="meta_title">SEO title</label>
                    <input id="meta_title" type="text" name="meta_title" class="form-control js-count-field" maxlength="255" value="{{ old('meta_title', $blog['meta_title'] ?? '') }}" placeholder="Tiêu đề hiển thị trên Google" data-seo-source="title" data-counter="#meta_title_count">
                    <small class="form-text text-muted"><span id="meta_title_count">0</span>/255 ký tự</small>
                </div>
                <div class="form-group">
                    <label for="meta_description">Meta description</label>
                    <textarea id="meta_description" name="meta_description" class="form-control js-count-field" maxlength="320" placeholder="Mô tả ngắn có từ khóa, đủ hấp dẫn để người đọc bấm vào" data-seo-source="description" data-counter="#meta_description_count">{{ old('meta_description', $blog['meta_description'] ?? '') }}</textarea>
                    <small class="form-text text-muted"><span id="meta_description_count">0</span>/320 ký tự</small>
                </div>
                <div class="form-group">
                    <label for="canonical_url">Canonical URL</label>
                    <input id="canonical_url" type="url" name="canonical_url" class="form-control" value="{{ old('canonical_url', $blog['canonical_url'] ?? '') }}" placeholder="https://perfectnhatban.com/tin-tuc/slug" data-seo-source="canonical">
                </div>

                <div class="seo-preview">
                    <span class="seo-preview-url" data-seo-preview="url">{{ old('canonical_url', $blog['canonical_url'] ?? '') ?: url('/tin-tuc/' . ($blog['slug'] ?: 'slug-bai-viet')) }}</span>
                    <strong data-seo-preview="title">{{ old('meta_title', $blog['meta_title'] ?? '') ?: (old('title', $blog['title']) ?: 'Tiêu đề SEO của bài viết') }}</strong>
                    <p data-seo-preview="description">{{ old('meta_description', $blog['meta_description'] ?? '') ?: (old('summary', $blog['summary']) ?: 'Mô tả ngắn của bài viết sẽ hiển thị tại đây.') }}</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Checklist SEO</strong>
            </div>
            <div class="card-body">
                <ul class="admin-check-list">
                    <li><i class="fa fa-check"></i> Tiêu đề có từ khóa chính.</li>
                    <li><i class="fa fa-check"></i> Meta description khoảng 140-160 ký tự.</li>
                    <li><i class="fa fa-check"></i> Slug ngắn, không dấu, dễ đọc.</li>
                    <li><i class="fa fa-check"></i> Nội dung có H2/H3 để tạo mục lục.</li>
                    <li><i class="fa fa-check"></i> Ảnh đại diện nhẹ và đúng ngữ cảnh.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
