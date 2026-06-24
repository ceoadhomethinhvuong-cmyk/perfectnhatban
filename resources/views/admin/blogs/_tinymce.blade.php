@php
    $tinymceApiKey = config('services.tinymce.api_key', 'no-api-key') ?: 'no-api-key';
    $tinymceUploadUrl = route('admin.blogs.upload_image');
@endphp

<script src="https://cdn.tiny.cloud/1/{{ $tinymceApiKey }}/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    var perfectTinyUploadUrl = @json($tinymceUploadUrl);
    var perfectEditorFontsUrl = 'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700;800&family=Lato:wght@400;700&family=Manrope:wght@400;500;600;700;800&family=Merriweather:wght@400;700&family=Montserrat:wght@400;500;600;700;800&family=Noto+Sans:wght@400;500;600;700&family=Noto+Serif:wght@400;700&family=Nunito:wght@400;600;700;800&family=Open+Sans:wght@400;600;700;800&family=Oswald:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700;800&family=Poppins:wght@400;500;600;700;800&family=Raleway:wght@400;500;600;700;800&family=Roboto:wght@400;500;700;900&family=Source+Sans+3:wght@400;600;700;800&display=swap';

    function perfectSlugify(text) {
        return text
            .toString()
            .trim()
            .toLowerCase()
            .replace(/\u0111/g, 'd')
            .replace(/\u0110/g, 'd')
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .replace(/^-|-$/g, '');
    }

    function perfectUploadEditorImage(file, progressCallback) {
        return new Promise(function (resolve, reject) {
            var xhr = new XMLHttpRequest();
            var formData = new FormData();
            var csrf = document.querySelector('meta[name="csrf-token"]');

            xhr.open('POST', perfectTinyUploadUrl);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            if (csrf) {
                xhr.setRequestHeader('X-CSRF-TOKEN', csrf.getAttribute('content'));
            }

            xhr.upload.onprogress = function (event) {
                if (event.lengthComputable && typeof progressCallback === 'function') {
                    progressCallback(event.loaded / event.total * 100);
                }
            };

            xhr.onload = function () {
                var json;

                if (xhr.status < 200 || xhr.status >= 300) {
                    reject('Upload anh that bai. Vui long thu lai.');
                    return;
                }

                try {
                    json = JSON.parse(xhr.responseText);
                } catch (error) {
                    reject('May chu tra ve du lieu upload khong hop le.');
                    return;
                }

                if (!json || typeof json.location !== 'string') {
                    reject('Khong lay duoc duong dan anh sau khi upload.');
                    return;
                }

                resolve(json.location);
            };

            xhr.onerror = function () {
                reject('Khong the ket noi toi may chu upload anh.');
            };

            formData.append('file', file);
            xhr.send(formData);
        });
    }

    function perfectEditorHtml() {
        if (window.tinymce && tinymce.get('content')) {
            return tinymce.get('content').getContent();
        }

        var textarea = document.querySelector('.admin-editor');
        return textarea ? textarea.value : '';
    }

    function perfectSelectedTableCells(editor) {
        var node = editor.selection.getNode();
        var dom = editor.dom;
        var cells = Array.prototype.slice.call(dom.select('td[data-mce-selected], th[data-mce-selected]'));
        var currentCell;

        if (cells.length) {
            return cells;
        }

        currentCell = dom.getParent(node, 'td,th');
        if (currentCell) {
            return [currentCell];
        }

        return [];
    }

    function perfectSelectedBackgroundTargets(editor) {
        var cells = perfectSelectedTableCells(editor);
        var dom = editor.dom;
        var blocks = [];
        var block;

        if (cells.length) {
            return cells;
        }

        if (editor.selection.getSelectedBlocks) {
            blocks = Array.prototype.slice.call(editor.selection.getSelectedBlocks());
        }

        blocks = blocks.filter(function (target) {
            return ['TABLE', 'THEAD', 'TBODY', 'TFOOT', 'TR', 'TD', 'TH'].indexOf(target.nodeName) === -1;
        });

        if (!blocks.length) {
            block = dom.getParent(editor.selection.getNode(), 'p,h1,h2,h3,h4,h5,h6,blockquote,li,div,section,article,pre');
            if (block) {
                blocks = [block];
            }
        }

        return blocks.filter(function (target) {
            return target && target.nodeType === 1 && target !== editor.getBody() && target.isConnected;
        });
    }

    function perfectApplyTableCellBackground(editor, color, targetCells) {
        var targets = (targetCells && targetCells.length ? targetCells : perfectSelectedBackgroundTargets(editor))
            .filter(function (target) {
                return target && target.isConnected;
            });

        if (!targets.length) {
            editor.windowManager.alert('Hãy đặt con trỏ vào bảng hoặc khung chữ cần tô màu.');
            return;
        }

        editor.undoManager.transact(function () {
            targets.forEach(function (cell) {
                if (color) {
                    editor.dom.setStyle(cell, 'background-color', color);
                } else {
                    editor.dom.setStyle(cell, 'background-color', null);
                }
            });
        });

        editor.nodeChanged();
        editor.save();
    }

    function perfectFillTocFromContent(onlyWhenEmpty) {
        var rows = document.querySelectorAll('.toc-builder-row');
        if (!rows.length) {
            return;
        }

        if (onlyWhenEmpty) {
            var hasManualValue = Array.prototype.some.call(rows, function (row) {
                var input = row.querySelector('input');
                return input && input.value.trim();
            });

            if (hasManualValue) {
                return;
            }
        }

        var parser = new DOMParser();
        var doc = parser.parseFromString(perfectEditorHtml(), 'text/html');
        var headings = Array.prototype.slice.call(doc.querySelectorAll('h2, h3, h4'));

        while (headings.length > rows.length) {
            perfectAddTocRow(false);
            rows = document.querySelectorAll('.toc-builder-row');
        }

        rows.forEach(function (row, index) {
            var titleInput = row.querySelector('input[name$="[title]"]');
            var anchorInput = row.querySelector('input[name$="[anchor]"]');
            var levelInput = row.querySelector('select[name$="[level]"]');
            var heading = headings[index];

            if (!titleInput || !anchorInput) {
                return;
            }

            titleInput.value = heading ? heading.textContent.trim() : '';
            anchorInput.value = heading ? (heading.id || perfectSlugify(heading.textContent)) : '';

            if (levelInput) {
                levelInput.value = heading ? heading.tagName.replace('H', '') : '2';
            }
        });

        perfectRenumberTocRows();
        perfectQueueBlogDraftSave();
    }

    var perfectTocIsGenerating = false;

    function perfectSetTocAuto(enabled) {
        var autoToc = document.getElementById('toc_auto');

        if (!autoToc) {
            return;
        }

        autoToc.checked = !!enabled;
        autoToc.dispatchEvent(new Event('change', { bubbles: true }));
    }

    function perfectMarkTocManual() {
        if (perfectTocIsGenerating) {
            return;
        }

        perfectSetTocAuto(false);
    }

    function perfectTocRows() {
        return Array.prototype.slice.call(document.querySelectorAll('.toc-builder-row'));
    }

    function perfectUpdateTocNumbers() {
        var counters = {
            2: 0,
            3: 0,
            4: 0
        };

        perfectTocRows().forEach(function (row) {
            var titleInput = row.querySelector('input[name$="[title]"]');
            var levelInput = row.querySelector('select[name$="[level]"]');
            var numberEl = row.querySelector('.toc-row-number');
            var title = titleInput ? titleInput.value.trim() : '';
            var level = levelInput ? parseInt(levelInput.value, 10) : 2;
            var number = '';

            if (!numberEl) {
                return;
            }

            if (!title) {
                numberEl.textContent = '';
                numberEl.classList.add('is-empty');
                return;
            }

            if (level === 2) {
                counters[2]++;
                counters[3] = 0;
                counters[4] = 0;
                number = counters[2] + '.';
            } else if (level === 3) {
                if (!counters[2]) {
                    counters[2] = 1;
                }
                counters[3]++;
                counters[4] = 0;
                number = counters[2] + '.0.' + counters[3] + '.';
            } else {
                if (!counters[2]) {
                    counters[2] = 1;
                }
                if (!counters[3]) {
                    counters[3] = 1;
                }
                counters[4]++;
                number = counters[2] + '.0.' + counters[3] + '.' + counters[4] + '.';
            }

            numberEl.textContent = number;
            numberEl.classList.remove('is-empty');
        });
    }

    function perfectRenumberTocRows() {
        perfectTocRows().forEach(function (row, index) {
            var titleInput = row.querySelector('input[name$="[title]"]');
            var anchorInput = row.querySelector('input[name$="[anchor]"]');
            var levelInput = row.querySelector('select[name$="[level]"]');

            row.dataset.tocIndex = index;

            if (titleInput) {
                titleInput.name = 'toc_items[' + index + '][title]';
            }

            if (anchorInput) {
                anchorInput.name = 'toc_items[' + index + '][anchor]';
            }

            if (levelInput) {
                levelInput.name = 'toc_items[' + index + '][level]';
            }
        });

        perfectUpdateTocNumbers();
    }

    function perfectAddTocRow(shouldFocus) {
        var builder = document.querySelector('.toc-builder');
        var rows = perfectTocRows();
        var source = rows[rows.length - 1] || rows[0];
        var clone;
        var titleInput;
        var anchorInput;
        var levelInput;

        if (!builder || !source) {
            return null;
        }

        clone = source.cloneNode(true);
        clone.classList.remove('is-dragging', 'is-drop-target');
        titleInput = clone.querySelector('input[name$="[title]"]');
        anchorInput = clone.querySelector('input[name$="[anchor]"]');
        levelInput = clone.querySelector('select[name$="[level]"]');

        if (titleInput) {
            titleInput.value = '';
        }

        if (anchorInput) {
            anchorInput.value = '';
        }

        if (levelInput) {
            levelInput.value = '2';
        }

        builder.appendChild(clone);
        perfectRenumberTocRows();

        if (shouldFocus !== false && titleInput) {
            titleInput.focus();
            perfectMarkTocManual();
        }

        perfectQueueBlogDraftSave();

        return clone;
    }

    function perfectRemoveTocRow(row) {
        if (!row) {
            return;
        }

        var titleInput = row.querySelector('input[name$="[title]"]');
        var anchorInput = row.querySelector('input[name$="[anchor]"]');
        var levelInput = row.querySelector('select[name$="[level]"]');

        if (perfectTocRows().length <= 1) {
            if (titleInput) {
                titleInput.value = '';
            }

            if (anchorInput) {
                anchorInput.value = '';
            }

            if (levelInput) {
                levelInput.value = '2';
            }
        } else {
            row.remove();
        }

        perfectRenumberTocRows();
        perfectMarkTocManual();
        perfectQueueBlogDraftSave();
    }

    var perfectBlogDraftKey = 'perfect:admin-blog-draft:' + window.location.pathname;
    var perfectBlogDraftTimer = null;
    var perfectBlogDraftSubmitting = false;

    function perfectBlogDraftForm() {
        var editor = document.querySelector('textarea.admin-editor');
        return editor ? editor.form : null;
    }

    function perfectBlogDraftStatus() {
        var form = perfectBlogDraftForm();
        var status;

        if (!form) {
            return null;
        }

        status = form.querySelector('.js-blog-draft-status');
        if (!status) {
            status = document.createElement('div');
            status.className = 'admin-draft-status js-blog-draft-status';
            status.setAttribute('role', 'status');
            status.textContent = 'Dang tu dong luu ban nhap tren trinh duyet.';
            form.insertBefore(status, form.firstChild);
        }

        return status;
    }

    function perfectSetBlogDraftStatus(message, state) {
        var status = perfectBlogDraftStatus();

        if (!status) {
            return;
        }

        status.classList.remove('is-saved', 'is-restored', 'is-warning');

        if (state) {
            status.classList.add(state);
        }

        status.textContent = message;
    }

    function perfectBlogDraftHasContent(fields) {
        return Object.keys(fields).some(function (name) {
            var value = fields[name];

            if (['category_id', 'status', 'toc_auto', 'faq_color'].indexOf(name) !== -1) {
                return false;
            }

            if (typeof value === 'boolean') {
                return false;
            }

            return String(value || '').replace(/<[^>]*>/g, '').trim() !== '';
        });
    }

    function perfectCollectBlogDraft() {
        var form = perfectBlogDraftForm();
        var fields = {};

        if (!form) {
            return null;
        }

        if (window.tinymce) {
            tinymce.triggerSave();
        }

        Array.prototype.slice.call(form.elements).forEach(function (field) {
            var type = (field.type || '').toLowerCase();

            if (!field.name || field.disabled || ['button', 'submit', 'reset', 'file', 'hidden'].indexOf(type) !== -1) {
                return;
            }

            if (type === 'checkbox' || type === 'radio') {
                fields[field.name] = field.checked;
                return;
            }

            fields[field.name] = field.value;
        });

        return {
            fields: fields,
            updatedAt: Date.now(),
            url: window.location.pathname,
            version: 1
        };
    }

    function perfectSaveBlogDraft() {
        var draft;
        var savedAt;

        if (perfectBlogDraftSubmitting) {
            return;
        }

        draft = perfectCollectBlogDraft();
        if (!draft) {
            return;
        }

        if (!perfectBlogDraftHasContent(draft.fields)) {
            localStorage.removeItem(perfectBlogDraftKey);
            perfectSetBlogDraftStatus('Ban nhap chua co noi dung can luu.', 'is-warning');
            return;
        }

        try {
            localStorage.setItem(perfectBlogDraftKey, JSON.stringify(draft));
            savedAt = new Date(draft.updatedAt).toLocaleTimeString('vi-VN', {
                hour: '2-digit',
                minute: '2-digit'
            });
            perfectSetBlogDraftStatus('Da tu dong luu ban nhap luc ' + savedAt + '.', 'is-saved');
        } catch (error) {
            perfectSetBlogDraftStatus('Trinh duyet khong the luu ban nhap tu dong.', 'is-warning');
        }
    }

    function perfectQueueBlogDraftSave() {
        window.clearTimeout(perfectBlogDraftTimer);
        perfectBlogDraftTimer = window.setTimeout(perfectSaveBlogDraft, 500);
    }

    function perfectClearBlogDraft() {
        localStorage.removeItem(perfectBlogDraftKey);
    }

    function perfectCssEscape(value) {
        if (window.CSS && typeof window.CSS.escape === 'function') {
            return window.CSS.escape(value);
        }

        return String(value).replace(/(["\\\[\].:#])/g, '\\$1');
    }

    function perfectRestoreBlogDraft() {
        var raw = localStorage.getItem(perfectBlogDraftKey);
        var form = perfectBlogDraftForm();
        var draft;
        var maxAge = 1000 * 60 * 60 * 24 * 14;

        if (!raw || !form) {
            return;
        }

        try {
            draft = JSON.parse(raw);
        } catch (error) {
            localStorage.removeItem(perfectBlogDraftKey);
            return;
        }

        if (!draft.updatedAt || Date.now() - draft.updatedAt > maxAge || !draft.fields) {
            localStorage.removeItem(perfectBlogDraftKey);
            return;
        }

        if (!window.confirm('Tim thay ban nhap chua luu tren trinh duyet. Khoi phuc du lieu vua dien?')) {
            return;
        }

        Object.keys(draft.fields).forEach(function (name) {
            var match = name.match(/^toc_items\[(\d+)\]/);
            var index = match ? parseInt(match[1], 10) : -1;

            while (index >= perfectTocRows().length) {
                perfectAddTocRow(false);
            }
        });

        Object.keys(draft.fields).forEach(function (name) {
            var fields = Array.prototype.slice.call(form.querySelectorAll('[name="' + perfectCssEscape(name) + '"]'));

            fields.forEach(function (field) {
                var type = (field.type || '').toLowerCase();

                if (type === 'checkbox' || type === 'radio') {
                    field.checked = !!draft.fields[name];
                } else {
                    field.value = draft.fields[name];
                }

                field.dispatchEvent(new Event('input', { bubbles: true }));
                field.dispatchEvent(new Event('change', { bubbles: true }));
            });
        });

        perfectSetBlogDraftStatus('Da khoi phuc ban nhap tu trinh duyet.', 'is-restored');
    }

    function perfectInstallBlogDraftAutosave() {
        var form = perfectBlogDraftForm();

        if (!form) {
            return;
        }

        perfectBlogDraftStatus();
        form.addEventListener('input', perfectQueueBlogDraftSave);
        form.addEventListener('change', perfectQueueBlogDraftSave);
        window.addEventListener('beforeunload', perfectSaveBlogDraft);
    }

    document.addEventListener('input', function (event) {
        if (event.target.closest('.toc-builder-row')) {
            perfectMarkTocManual();
            perfectUpdateTocNumbers();
        }
    });

    document.addEventListener('change', function (event) {
        if (event.target.closest('.toc-builder-row')) {
            perfectMarkTocManual();
            perfectUpdateTocNumbers();
        }
    });

    var perfectDraggedTocRow = null;

    document.addEventListener('click', function (event) {
        var addTocButton = event.target.closest('.js-add-toc-row');
        var removeTocButton = event.target.closest('.toc-remove-row');

        if (addTocButton) {
            event.preventDefault();
            perfectAddTocRow(true);
            return;
        }

        if (removeTocButton) {
            event.preventDefault();
            perfectRemoveTocRow(removeTocButton.closest('.toc-builder-row'));
            return;
        }

        if (event.target.closest('.js-generate-toc')) {
            if (window.tinymce) {
                tinymce.triggerSave();
            }
            perfectTocIsGenerating = true;
            perfectFillTocFromContent(false);
            perfectSetTocAuto(true);
            perfectTocIsGenerating = false;
        }
    });

    document.addEventListener('dragstart', function (event) {
        var handle = event.target.closest('.toc-drag-handle');
        var row = handle ? handle.closest('.toc-builder-row') : null;

        if (!row) {
            return;
        }

        perfectDraggedTocRow = row;
        row.classList.add('is-dragging');
        event.dataTransfer.effectAllowed = 'move';
        event.dataTransfer.setData('text/plain', 'toc-row');
    });

    document.addEventListener('dragover', function (event) {
        var targetRow = event.target.closest('.toc-builder-row');
        var builder = event.target.closest('.toc-builder');
        var rect;
        var placeAfter;

        if (!perfectDraggedTocRow || !targetRow || !builder || targetRow === perfectDraggedTocRow) {
            return;
        }

        event.preventDefault();
        rect = targetRow.getBoundingClientRect();
        placeAfter = event.clientY > rect.top + rect.height / 2;
        builder.insertBefore(perfectDraggedTocRow, placeAfter ? targetRow.nextSibling : targetRow);
    });

    document.addEventListener('drop', function (event) {
        if (!perfectDraggedTocRow) {
            return;
        }

        event.preventDefault();
        perfectDraggedTocRow.classList.remove('is-dragging');
        perfectDraggedTocRow = null;
        perfectRenumberTocRows();
        perfectMarkTocManual();
        perfectQueueBlogDraftSave();
    });

    document.addEventListener('dragend', function () {
        if (perfectDraggedTocRow) {
            perfectDraggedTocRow.classList.remove('is-dragging');
            perfectDraggedTocRow = null;
        }

        perfectRenumberTocRows();
    });

    document.querySelectorAll('form').forEach(function (form) {
        form.addEventListener('submit', function () {
            perfectBlogDraftSubmitting = true;
            perfectClearBlogDraft();

            if (window.tinymce) {
                tinymce.triggerSave();
            }

            var autoToc = document.getElementById('toc_auto');
            if (autoToc && autoToc.checked) {
                perfectFillTocFromContent(true);
            }
        });
    });

    perfectRestoreBlogDraft();
    perfectInstallBlogDraftAutosave();
    perfectRenumberTocRows();

    if (typeof tinymce === 'undefined') {
        console.warn('TinyMCE CDN is not available. Falling back to textarea.');
    } else {
        tinymce.init({
            selector: 'textarea.admin-editor',
            height: 620,
            menubar: 'file edit view insert format tools table help',
            branding: false,
            promotion: false,
            convert_urls: false,
            content_css: [perfectEditorFontsUrl],
            plugins: 'advlist anchor autolink autosave charmap code codesample directionality emoticons fullscreen help hr image insertdatetime link lists media nonbreaking pagebreak preview quickbars save searchreplace table visualblocks visualchars wordcount',
            toolbar_mode: 'wrap',
            toolbar: [
                'undo redo restoredraft | blocks fontfamily fontsize | bold italic underline strikethrough subscript superscript | forecolor perfecttablecellbg removeformat',
                'alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | ltr rtl | lineheight',
                'link unlink anchor image media table codesample charmap emoticons insertdatetime nonbreaking hr pagebreak blockquote | searchreplace visualblocks visualchars | preview fullscreen code help'
            ],
            menu: {
                file: { title: 'File', items: 'newdocument restoredraft | preview' },
                edit: { title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall | searchreplace' },
                view: { title: 'View', items: 'code | visualaid visualchars visualblocks | preview fullscreen' },
                insert: { title: 'Insert', items: 'image link media codesample inserttable | charmap emoticons | hr pagebreak nonbreaking anchor insertdatetime' },
                format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | blocks fontfamily fontsize align lineheight | forecolor backcolor | removeformat' },
                tools: { title: 'Tools', items: 'code wordcount' },
                table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
                help: { title: 'Help', items: 'help' }
            },
            color_map: [
                '1f2937', 'Dark text',
                '4b5563', 'Muted text',
                'd32f2f', 'Red',
                'c7954e', 'Gold',
                '1f9d7a', 'Green',
                '1d4ed8', 'Blue',
                '7c3aed', 'Purple',
                'ffffff', 'White'
            ],
            font_size_formats: '10px 12px 13px 14px 15px 16px 18px 20px 22px 24px 28px 32px 36px 42px 48px',
            font_family_formats: 'Arial=arial,helvetica,sans-serif;Be Vietnam Pro=Be Vietnam Pro,Arial,sans-serif;Inter=Inter,Arial,sans-serif;Manrope=Manrope,Arial,sans-serif;Roboto=Roboto,Arial,sans-serif;Open Sans=Open Sans,Arial,sans-serif;Montserrat=Montserrat,Arial,sans-serif;Poppins=Poppins,Arial,sans-serif;Lato=Lato,Arial,sans-serif;Nunito=Nunito,Arial,sans-serif;Raleway=Raleway,Arial,sans-serif;Source Sans 3=Source Sans 3,Arial,sans-serif;Oswald=Oswald,Arial,sans-serif;Merriweather=Merriweather,Georgia,serif;Playfair Display=Playfair Display,Georgia,serif;Noto Serif=Noto Serif,Georgia,serif;Noto Sans=Noto Sans,Arial,sans-serif;Times New Roman=times new roman,times,serif;Georgia=georgia,palatino,serif;Courier New=courier new,courier,monospace',
            line_height_formats: '1 1.15 1.3 1.5 1.75 2 2.5 3',
            quickbars_selection_toolbar: 'bold italic underline | forecolor perfecttablecellbg | link blockquote quicktable',
            quickbars_insert_toolbar: 'quickimage quicktable media codesample',
            contextmenu: 'link image table',
            table_toolbar: 'perfecttablecellbg tablecellprops tablerowprops tableprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol | tabledelete',
            table_advtab: true,
            table_cell_advtab: true,
            table_row_advtab: true,
            table_appearance_options: true,
            block_formats: 'Paragraph=p; Heading 2=h2; Heading 3=h3; Heading 4=h4',
            style_formats: [
                { title: 'Doan van noi bat', block: 'p', classes: 'lead' },
                { title: 'Canh bao / luu y', block: 'blockquote' },
                { title: 'Nut link xanh', selector: 'a', classes: 'btn-link-blue' },
                { title: 'Anh bo goc', selector: 'img', styles: { borderRadius: '12px' } }
            ],
            content_style: 'body{font-family:Manrope,Arial,sans-serif;font-size:16px;line-height:1.75;color:#252525} h2{font-size:26px;line-height:1.35} h3{font-size:22px;line-height:1.4} h4{font-size:18px;line-height:1.45} hr{border:0;border-top:1px solid #e5e7eb;margin:28px 0 24px} img{max-width:100%;height:auto}',
            image_caption: true,
            image_title: true,
            image_advtab: true,
            object_resizing: true,
            link_title: true,
            link_target_list: [
                { title: 'Cung tab', value: '' },
                { title: 'Tab moi', value: '_blank' }
            ],
            automatic_uploads: true,
            images_reuse_filename: false,
            images_file_types: 'jpg,jpeg,png,webp,gif',
            file_picker_types: 'image',
            file_picker_callback: function (callback, value, meta) {
                if (meta.filetype !== 'image') {
                    return;
                }

                var input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/jpeg,image/png,image/webp,image/gif';

                input.addEventListener('change', function () {
                    var file = input.files && input.files[0];

                    if (!file) {
                        return;
                    }

                    perfectUploadEditorImage(file).then(function (url) {
                        callback(url, { alt: file.name, title: file.name });
                    }).catch(function (message) {
                        alert(message);
                    });
                });

                input.click();
            },
            images_upload_handler: function (blobInfo, progress) {
                return perfectUploadEditorImage(blobInfo.blob(), progress);
            },
            setup: function (editor) {
                var lastTableCellColor = '#EAF4FF';

                function openTableCellColorPicker() {
                    var input = document.createElement('input');
                    input.type = 'color';
                    input.value = lastTableCellColor;
                    input.style.position = 'fixed';
                    input.style.left = '-1000px';
                    input.style.top = '-1000px';
                    document.body.appendChild(input);

                    input.addEventListener('input', function () {
                        lastTableCellColor = input.value;
                        perfectApplyTableCellBackground(editor, input.value);
                    });

                    input.addEventListener('change', function () {
                        lastTableCellColor = input.value;
                        perfectApplyTableCellBackground(editor, input.value);
                        input.remove();
                    });

                    input.click();
                }

                editor.ui.registry.addIcon('perfect-table-cell-color', '<svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m5.6 12.4 6.8-6.8 4.6 4.6-6.8 6.8H5.6v-4.6Zm1.8.8v2h2l5.1-5.1-2-2-5.1 5.1Z"/><path fill="currentColor" d="M4 19h16v2H4v-2Z"/><path fill="currentColor" d="M17.7 13.4c1.2 1.2 1.8 2.1 1.8 2.9a1.8 1.8 0 0 1-3.6 0c0-.8.6-1.7 1.8-2.9Z"/></svg>');

                editor.ui.registry.addSplitButton('tablecellbg', {
                    icon: 'perfect-table-cell-color',
                    tooltip: 'Tô màu nền ô bảng',
                    onAction: openTableCellColorPicker,
                    onItemAction: openTableCellColorPicker,
                    fetch: function (callback) {
                        callback([
                            {
                                type: 'choiceitem',
                                text: 'Chọn màu...',
                                value: 'custom'
                            }
                        ]);
                    }
                });

                var lastTableCellTargets = [];
                var tableCellColorPanel = null;
                var tableCellColorOutsideHandler = null;
                var themeColorRows = [
                    ['ffffff', '000000', 'eeece1', '1f4e79', '0f608b', '4f81bd', 'f79646', '9bbb59', '00b050', '4bacc6', '8064a2', 'c0504d'],
                    ['f2f2f2', '7f7f7f', 'ddd9c3', 'cfe2f3', 'd9ead3', 'd9e2f3', 'fce4d6', 'e2f0d9', 'd9ead3', 'd9eaf7', 'eadcf8', 'f4cccc'],
                    ['d9d9d9', '595959', 'c4bd97', '9fc5e8', 'b6d7a8', 'b4c6e7', 'f8cbad', 'c5e0b4', 'b6d7a8', 'b7dde8', 'd9b8f3', 'ea9999'],
                    ['bfbfbf', '404040', '948a54', '6fa8dc', '93c47d', '8eaadb', 'f4b183', 'a9d18e', '93c47d', '76a5af', 'b085d6', 'e06666'],
                    ['a6a6a6', '262626', '7c6f2f', '3d85c6', '6aa84f', '5b9bd5', 'c65911', '70ad47', '38761d', '31859b', '7030a0', 'cc0000'],
                    ['808080', '000000', '5f5424', '0b5394', '38761d', '2f5597', '833c0c', '548235', '274e13', '134f5c', '4c1d95', '990000']
                ];
                var standardColors = ['c00000', 'ff0000', 'ffc000', 'ffff00', '92d050', '00b050', '00b0f0', '0070c0', '002060', '7030a0'];

                function perfectConnectedCells(cells) {
                    return (cells || []).filter(function (cell) {
                        return cell && cell.isConnected;
                    });
                }

                function rememberTableCellTargets() {
                    var cells = perfectConnectedCells(perfectSelectedBackgroundTargets(editor));

                    if (cells.length) {
                        lastTableCellTargets = cells;
                    }
                }

                function currentTableCellTargets() {
                    var cells = perfectConnectedCells(perfectSelectedBackgroundTargets(editor));

                    if (cells.length) {
                        lastTableCellTargets = cells;
                        return cells;
                    }

                    return perfectConnectedCells(lastTableCellTargets);
                }

                function closeTableCellColorPanel() {
                    if (tableCellColorOutsideHandler) {
                        document.removeEventListener('mousedown', tableCellColorOutsideHandler, true);
                        tableCellColorOutsideHandler = null;
                    }

                    if (tableCellColorPanel) {
                        tableCellColorPanel.remove();
                        tableCellColorPanel = null;
                    }
                }

                function applyTableCellColor(color, targetCells) {
                    if (color) {
                        lastTableCellColor = color;
                    }

                    perfectApplyTableCellBackground(editor, color, targetCells);
                    closeTableCellColorPanel();
                }

                function openNativeTableCellColorPicker(targetCells) {
                    var input = document.createElement('input');
                    input.type = 'color';
                    input.value = lastTableCellColor;
                    input.style.position = 'fixed';
                    input.style.left = '-1000px';
                    input.style.top = '-1000px';
                    document.body.appendChild(input);

                    input.addEventListener('input', function () {
                        lastTableCellColor = input.value;
                        perfectApplyTableCellBackground(editor, input.value, targetCells);
                    });

                    input.addEventListener('change', function () {
                        lastTableCellColor = input.value;
                        perfectApplyTableCellBackground(editor, input.value, targetCells);
                        input.remove();
                    });

                    input.addEventListener('blur', function () {
                        setTimeout(function () {
                            if (input.isConnected) {
                                input.remove();
                            }
                        }, 250);
                    });

                    closeTableCellColorPanel();
                    input.click();
                }

                function makeTableColorSwatch(color, targetCells) {
                    var button = document.createElement('button');
                    var value = '#' + color;
                    button.type = 'button';
                    button.className = 'perfect-color-swatch';
                    button.style.backgroundColor = value;
                    button.title = value.toUpperCase();
                    button.setAttribute('aria-label', value.toUpperCase());

                    if (color === 'ffffff') {
                        button.classList.add('is-light');
                    }

                    button.addEventListener('click', function () {
                        applyTableCellColor(value, targetCells);
                    });

                    return button;
                }

                function appendColorTitle(panel, text) {
                    var title = document.createElement('div');
                    title.className = 'perfect-color-title';
                    title.textContent = text;
                    panel.appendChild(title);
                }

                function appendColorSeparator(panel) {
                    var separator = document.createElement('div');
                    separator.className = 'perfect-color-separator';
                    panel.appendChild(separator);
                }

                function normalizeCustomHexColor(value) {
                    var color = String(value || '').trim();

                    if (color.charAt(0) !== '#') {
                        color = '#' + color;
                    }

                    if (/^#[0-9a-fA-F]{3}$/.test(color)) {
                        color = '#' + color.charAt(1) + color.charAt(1) + color.charAt(2) + color.charAt(2) + color.charAt(3) + color.charAt(3);
                    }

                    return /^#[0-9a-fA-F]{6}$/.test(color) ? color.toUpperCase() : '';
                }

                function openTableCellColorPanel() {
                    var targetCells = currentTableCellTargets();
                    var panel;
                    var themeGrid;
                    var standardGrid;
                    var anchor;
                    var rect;
                    var top;
                    var left;
                    var noColorButton;
                    var moreColorButton;
                    var customColorInput;
                    var customColorRow;
                    var customColorText;
                    var customColorApply;
                    var applyCustomColorText;

                    if (!targetCells.length) {
                        editor.windowManager.alert('H\u00e3y \u0111\u1eb7t con tr\u1ecf v\u00e0o b\u1ea3ng ho\u1eb7c khung ch\u1eef c\u1ea7n t\u00f4 m\u00e0u.');
                        return;
                    }

                    closeTableCellColorPanel();

                    panel = document.createElement('div');
                    panel.className = 'perfect-table-color-panel';
                    panel.setAttribute('role', 'menu');

                    appendColorTitle(panel, 'M\u00e0u Ch\u1ee7 \u0111\u1ec1');

                    themeGrid = document.createElement('div');
                    themeGrid.className = 'perfect-color-theme-grid';
                    themeColorRows.forEach(function (row) {
                        var rowElement = document.createElement('div');
                        rowElement.className = 'perfect-color-row';
                        row.forEach(function (color) {
                            rowElement.appendChild(makeTableColorSwatch(color, targetCells));
                        });
                        themeGrid.appendChild(rowElement);
                    });
                    panel.appendChild(themeGrid);

                    appendColorSeparator(panel);
                    appendColorTitle(panel, 'M\u00e0u Chu\u1ea9n');

                    standardGrid = document.createElement('div');
                    standardGrid.className = 'perfect-color-standard-grid';
                    standardColors.forEach(function (color) {
                        standardGrid.appendChild(makeTableColorSwatch(color, targetCells));
                    });
                    panel.appendChild(standardGrid);

                    appendColorSeparator(panel);

                    noColorButton = document.createElement('button');
                    noColorButton.type = 'button';
                    noColorButton.className = 'perfect-color-action perfect-color-action--none';
                    noColorButton.innerHTML = '<span class="perfect-color-none-icon"></span><span>Kh\u00f4ng M\u00e0u</span>';
                    noColorButton.addEventListener('click', function () {
                        applyTableCellColor('', targetCells);
                    });
                    panel.appendChild(noColorButton);

                    appendColorSeparator(panel);

                    moreColorButton = document.createElement('label');
                    moreColorButton.className = 'perfect-color-action perfect-color-action--picker';
                    moreColorButton.innerHTML = '<span class="perfect-color-wheel-icon"></span><span>Xem th\u00eam M\u00e0u...</span>';
                    customColorInput = document.createElement('input');
                    customColorInput.type = 'color';
                    customColorInput.value = lastTableCellColor;
                    customColorInput.className = 'perfect-custom-color-input';
                    customColorInput.setAttribute('aria-label', 'Xem th\u00eam M\u00e0u');
                    customColorInput.addEventListener('input', function () {
                        lastTableCellColor = customColorInput.value;
                        perfectApplyTableCellBackground(editor, customColorInput.value, targetCells);
                    });
                    customColorInput.addEventListener('change', function () {
                        lastTableCellColor = customColorInput.value;
                        perfectApplyTableCellBackground(editor, customColorInput.value, targetCells);
                        closeTableCellColorPanel();
                    });
                    moreColorButton.appendChild(customColorInput);
                    panel.appendChild(moreColorButton);

                    customColorRow = document.createElement('div');
                    customColorRow.className = 'perfect-custom-color-row';
                    customColorText = document.createElement('input');
                    customColorText.type = 'text';
                    customColorText.className = 'perfect-custom-color-text';
                    customColorText.value = lastTableCellColor.toUpperCase();
                    customColorText.placeholder = '#258FE5';
                    customColorText.setAttribute('aria-label', 'Nh\u1eadp m\u00e3 m\u00e0u');
                    customColorApply = document.createElement('button');
                    customColorApply.type = 'button';
                    customColorApply.className = 'perfect-custom-color-apply';
                    customColorApply.textContent = 'OK';

                    applyCustomColorText = function () {
                        var color = normalizeCustomHexColor(customColorText.value);

                        if (!color) {
                            customColorText.classList.add('is-invalid');
                            customColorText.focus();
                            customColorText.select();
                            return;
                        }

                        customColorText.classList.remove('is-invalid');
                        applyTableCellColor(color, targetCells);
                    };

                    customColorText.addEventListener('input', function () {
                        customColorText.classList.remove('is-invalid');
                    });
                    customColorText.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            event.preventDefault();
                            applyCustomColorText();
                        }
                    });
                    customColorApply.addEventListener('click', applyCustomColorText);
                    customColorRow.appendChild(customColorText);
                    customColorRow.appendChild(customColorApply);
                    panel.appendChild(customColorRow);

                    document.body.appendChild(panel);
                    tableCellColorPanel = panel;

                    anchor = document.activeElement && document.activeElement.closest('.tox-tbtn');
                    if (!anchor) {
                        anchor = editor.getContainer();
                    }

                    rect = anchor.getBoundingClientRect();
                    top = rect.bottom + window.scrollY + 6;
                    left = rect.left + window.scrollX;
                    left = Math.min(left, window.scrollX + window.innerWidth - panel.offsetWidth - 12);
                    left = Math.max(window.scrollX + 8, left);

                    panel.style.top = top + 'px';
                    panel.style.left = left + 'px';

                    tableCellColorOutsideHandler = function (event) {
                        if (!panel.contains(event.target)) {
                            closeTableCellColorPanel();
                        }
                    };

                    setTimeout(function () {
                        document.addEventListener('mousedown', tableCellColorOutsideHandler, true);
                    }, 0);
                }

                editor.ui.registry.addIcon('perfect-table-cell-palette', '<svg width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M6.5 12.5 12 7l5.5 5.5-4.7 4.7H6.5v-4.7Z"/><path fill="currentColor" d="M5 19h12v2H5v-2Z"/><path fill="currentColor" d="M18.5 14 15.5 10.5h6L18.5 14Z"/><path fill="currentColor" d="M18 14.2c1 1 1.5 1.8 1.5 2.4a1.5 1.5 0 0 1-3 0c0-.6.5-1.4 1.5-2.4Z"/></svg>');

                editor.ui.registry.addButton('perfecttablecellbg', {
                    icon: 'perfect-table-cell-palette',
                    tooltip: 'T\u00f4 m\u00e0u n\u1ec1n b\u1ea3ng / khung ch\u1eef',
                    onAction: openTableCellColorPanel
                });

                editor.ui.registry.addContextToolbar('perfect-table-mini-toolbar', {
                    predicate: function (node) {
                        return !!editor.dom.getParent(node, 'td,th');
                    },
                    items: 'fontfamily fontsize | bold italic underline strikethrough | forecolor perfecttablecellbg | bullist numlist | alignleft aligncenter alignright alignjustify | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
                    position: 'node',
                    scope: 'node'
                });

                editor.on('contextmenu', function (event) {
                    var cell = editor.dom.getParent(event.target, 'td,th');
                    var selectedCells;

                    if (cell) {
                        selectedCells = perfectConnectedCells(Array.prototype.slice.call(editor.dom.select('td[data-mce-selected], th[data-mce-selected]')));
                        lastTableCellTargets = selectedCells.length && selectedCells.indexOf(cell) !== -1 ? selectedCells : [cell];

                        if (!selectedCells.length || selectedCells.indexOf(cell) === -1) {
                            editor.selection.setCursorLocation(cell, 0);
                        }

                        setTimeout(function () {
                            editor.nodeChanged();
                        }, 0);
                    }
                });

                editor.on('NodeChange Click KeyUp MouseUp SetContent', rememberTableCellTargets);

                editor.on('change keyup undo redo', function () {
                    editor.save();
                    perfectQueueBlogDraftSave();
                });
            }
        });
    }
</script>
