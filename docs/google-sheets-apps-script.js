function doPost(e) {
  const spreadsheet = SpreadsheetApp.openById('1NSMuALUIU5Kv9ijvPInXf_9QLQPmZI9PQUqpfAo1tN4');
  const sheet = spreadsheet.getSheets()[0];
  const data = e.parameter || {};

  if (sheet.getLastRow() === 0) {
    sheet.appendRow([
      'Thời gian nhận',
      'Họ tên',
      'Số điện thoại',
      'Địa chỉ',
      'Dịch vụ',
      'Nội dung',
      'Form ID',
      'Trang gửi',
      'Thời gian từ website'
    ]);
  }

  sheet.appendRow([
    new Date(),
    data.name || '',
    data.phone || '',
    data.address || '',
    data.service || '',
    data.message || '',
    data.form_id || '',
    data.page_url || '',
    data.submitted_at || ''
  ]);

  return ContentService
    .createTextOutput(JSON.stringify({ ok: true }))
    .setMimeType(ContentService.MimeType.JSON);
}
