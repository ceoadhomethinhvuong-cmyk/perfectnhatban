(function () {
    const SHEETS_URL = window.PERFECT_GOOGLE_SHEETS_WEB_APP_URL || '';
    const TARGET_FORM_IDS = ['6588bbb', 'f53f5c1', 'af2ff68'];

    function getField(form, name) {
        return form.querySelector(`[name="${name}"]`)?.value?.trim() || '';
    }

    function getFormId(form) {
        return getField(form, 'form_id');
    }

    function getPayload(form) {
        const formId = getFormId(form);
        const isCooperatePageForm = formId === '6588bbb';
        const address = isCooperatePageForm ?
            getField(form, 'form_fields[field_7eea49b]') :
            getField(form, 'form_fields[field_197f32a]');
        const service = isCooperatePageForm ?
            getField(form, 'form_fields[field_197f32a]') :
            getField(form, 'form_fields[field_648c99d]') || getField(form, 'form_fields[message]');
        const message =
            getField(form, 'form_fields[field_6f88e73]') ||
            form.querySelector('textarea[name="form_fields[message]"]')?.value?.trim() ||
            '';

        return {
            submitted_at: new Date().toISOString(),
            page_url: window.location.href,
            form_id: formId,
            form_name: form.getAttribute('name') || '',
            name: getField(form, 'form_fields[name]'),
            phone: getField(form, 'form_fields[field_97b3fe1]'),
            address,
            service,
            message,
        };
    }

    function findButton(form) {
        return form.querySelector('button[type="submit"], .elementor-button[type="submit"]');
    }

    function setStatus(form, text, type) {
        let status = form.querySelector('.perfect-sheets-form-status');

        if (!status) {
            status = document.createElement('p');
            status.className = 'perfect-sheets-form-status';
            form.querySelector('.e-form__buttons')?.after(status) || form.append(status);
        }

        status.textContent = text;
        status.dataset.type = type;
    }

    function setLoading(form, isLoading) {
        const button = findButton(form);
        const buttonText = button?.querySelector('.elementor-button-text');

        if (!button) {
            return;
        }

        button.disabled = isLoading;
        button.classList.toggle('is-loading', isLoading);

        if (buttonText) {
            if (!buttonText.dataset.originalText) {
                buttonText.dataset.originalText = buttonText.textContent.trim();
            }

            buttonText.textContent = isLoading ? 'Đang gửi...' : buttonText.dataset.originalText;
        }
    }

    function postWithHiddenForm(payload) {
        const iframeName = `perfect_sheets_iframe_${Date.now()}`;
        const iframe = document.createElement('iframe');
        const submitForm = document.createElement('form');

        iframe.name = iframeName;
        iframe.style.display = 'none';
        iframe.setAttribute('aria-hidden', 'true');

        submitForm.method = 'POST';
        submitForm.action = SHEETS_URL;
        submitForm.target = iframeName;
        submitForm.style.display = 'none';

        Object.entries(payload).forEach(([key, value]) => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = key;
            input.value = value || '';
            submitForm.appendChild(input);
        });

        document.body.appendChild(iframe);
        document.body.appendChild(submitForm);
        submitForm.submit();

        window.setTimeout(() => {
            submitForm.remove();
            iframe.remove();
        }, 5000);
    }

    function postToSheets(payload) {
        const body = new URLSearchParams();

        Object.entries(payload).forEach(([key, value]) => {
            body.append(key, value || '');
        });

        if (!window.fetch) {
            postWithHiddenForm(payload);
            return Promise.resolve();
        }

        return fetch(SHEETS_URL, {
            method: 'POST',
            mode: 'no-cors',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
            },
            body,
        }).catch(() => {
            postWithHiddenForm(payload);
        });
    }

    async function submitToSheets(form) {
        if (!SHEETS_URL) {
            setStatus(form, 'Chưa cấu hình Google Sheets URL.', 'error');
            return;
        }

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        setLoading(form, true);
        setStatus(form, 'Đang gửi thông tin...', 'loading');

        try {
            await postToSheets(getPayload(form));

            window.setTimeout(() => {
                form.reset();
                setStatus(form, 'Đã gửi thông tin. PERFECT sẽ liên hệ lại sớm.', 'success');
                setLoading(form, false);
            }, 1200);
        } catch (error) {
            setStatus(form, 'Chưa gửi được thông tin. Vui lòng thử lại hoặc liên hệ trực tiếp.', 'error');
            setLoading(form, false);
        }
    }

    function bindForms() {
        document.querySelectorAll('form.elementor-form').forEach((form) => {
            const formId = getFormId(form);

            if (!TARGET_FORM_IDS.includes(formId) || form.dataset.sheetsBound === 'true') {
                return;
            }

            form.dataset.sheetsBound = 'true';
            form.setAttribute('action', 'javascript:void(0)');
            form.setAttribute('data-perfect-sheets-form', 'true');
            form.addEventListener('submit', (event) => {
                event.preventDefault();
                event.stopPropagation();
                event.stopImmediatePropagation();
                submitToSheets(form);
            }, true);
        });
    }

    document.addEventListener('submit', (event) => {
        const form = event.target;

        if (!(form instanceof HTMLFormElement) || form.dataset.perfectSheetsForm !== 'true') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();
        event.stopImmediatePropagation();
        submitToSheets(form);
    }, true);

    document.addEventListener('DOMContentLoaded', bindForms);
    new MutationObserver(bindForms).observe(document.documentElement, {
        childList: true,
        subtree: true,
    });
})();
