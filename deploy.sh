#!/bin/bash
# Deploy script cho perfectnhatban.com
# Chạy: bash deploy.sh

SERVER="xuonhfke@business65.web-hosting.com"
PHP="php8.4"
SERVER_PATH="/home/xuonhfke/perfectnhatban.com"

echo ""
echo "========================================="
echo "  DEPLOY perfectnhatban.com"
echo "========================================="

# 1. Hiển thị những gì sẽ deploy
echo ""
echo "📦 COMMITS SẼ ĐƯỢC DEPLOY:"
git log origin/main..HEAD --oneline 2>/dev/null
if [ $? -ne 0 ] || [ -z "$(git log origin/main..HEAD --oneline 2>/dev/null)" ]; then
    echo "  (không có commit mới chưa push)"
fi

echo ""
echo "📝 FILES THAY ĐỔI:"
git diff --name-only HEAD 2>/dev/null
git diff --cached --name-only 2>/dev/null

# 2. Push lên GitHub
echo ""
echo "-----------------------------------------"
echo "⬆️  BƯỚC 1: Push code lên GitHub..."
echo "-----------------------------------------"
git add -A
git status --short
echo ""
read -p "Nhập commit message (Enter để bỏ qua nếu không có thay đổi): " MSG
if [ -n "$MSG" ]; then
    git commit -m "$MSG"
    git push origin main
    echo "✅ Push GitHub xong!"
else
    echo "⏭️  Bỏ qua commit."
fi

# 3. Deploy lên server
echo ""
echo "-----------------------------------------"
echo "🚀 BƯỚC 2: Deploy lên server Namecheap..."
echo "-----------------------------------------"
ssh $SERVER "
    cd $SERVER_PATH

    echo '--- Git pull ---'
    git fetch origin main
    git reset --hard origin/main

    echo ''
    echo '--- Clear cache Laravel ---'
    php8.4 artisan config:clear
    php8.4 artisan cache:clear
    php8.4 artisan view:clear
    php8.4 artisan route:clear

    echo ''
    echo '--- Run migrations ---'
    php8.4 artisan migrate --force

    echo ''
    echo '✅ Deploy xong!'
    echo 'URL: https://perfectnhatban.com'
"

echo ""
echo "========================================="
echo "  ✅ HOÀN TẤT DEPLOY"
echo "========================================="
