@extends('client.layouts.app')

@section('seo_title', 'Chính sách bảo mật thông tin | PERFECT Nhật Bản')
@section('meta_description', 'Chính sách bảo mật thông tin của PERFECT Nhật Bản, mô tả cách thu thập, sử dụng và bảo vệ dữ liệu khách hàng.')

@section('title', 'Chinh sach bao mat')

@section('content')
<main id="content" class="site-main">
    <section class="perfect-policy-page">
        <div class="perfect-policy-inner">
            <p class="perfect-policy-kicker">PERFECT Nhat Ban</p>
            <h1>Chinh sach bao mat thong tin</h1>
            <p>
                PERFECT Nhat Ban cam ket bao mat thong tin khach hang khi khach hang de lai thong tin tu van,
                mua hang hoac lien he hop tac tren website.
            </p>

            <h2>Thong tin chung toi thu thap</h2>
            <p>
                Chung toi co the thu thap ho ten, so dien thoai, dia chi, nhu cau tu van va noi dung lien he
                ma khach hang chu dong gui qua bieu mau tren website.
            </p>

            <h2>Muc dich su dung</h2>
            <p>
                Thong tin duoc su dung de lien he tu van, xac nhan nhu cau, ho tro dich vu va cai thien trai
                nghiem khach hang. Chung toi khong ban hoac chia se thong tin ca nhan cho ben thu ba vi muc
                dich thuong mai trai phep.
            </p>

            <h2>Lien he</h2>
            <p>
                Neu can cap nhat hoac yeu cau xoa thong tin, vui long lien he qua email
                <a href="mailto:Cskhperfectnhatban@gmail.com">Cskhperfectnhatban@gmail.com</a>
                hoac so dien thoai <a href="tel:0986001885">0986001885</a>.
            </p>
        </div>
    </section>
</main>

<style>
    .perfect-policy-page {
        background: #fbfdff;
        padding: 96px 20px;
    }

    .perfect-policy-inner {
        max-width: 920px;
        margin: 0 auto;
        color: #161b22;
    }

    .perfect-policy-kicker {
        margin: 0 0 12px;
        color: #3ea8e2;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }

    .perfect-policy-inner h1 {
        margin: 0 0 28px;
        font-size: 44px;
        line-height: 1.15;
        letter-spacing: 0;
    }

    .perfect-policy-inner h2 {
        margin: 36px 0 12px;
        font-size: 24px;
        line-height: 1.3;
        letter-spacing: 0;
    }

    .perfect-policy-inner p {
        margin: 0 0 16px;
        color: #4d5865;
        font-size: 17px;
        line-height: 1.75;
    }

    .perfect-policy-inner a {
        color: #3ea8e2;
        font-weight: 700;
    }

    @media (max-width: 767px) {
        .perfect-policy-page {
            padding: 64px 18px;
        }

        .perfect-policy-inner h1 {
            font-size: 32px;
        }
    }
</style>
@endsection
