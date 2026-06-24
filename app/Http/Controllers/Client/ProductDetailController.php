<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class ProductDetailController extends Controller
{
    public function show(string $slug)
    {
        $slug = trim($slug, '/');
        $key = Str::lower($slug);
        $view = $this->views()[$key] ?? null;

        if ($view && View::exists("client.chi-tiet-san-pham.{$view}")) {
            return view("client.chi-tiet-san-pham.{$view}");
        }

        $product = $this->catalog()[$key] ?? [
            'title' => Str::of($slug)->replace(['-', '_'], ' ')->title()->toString(),
            'description' => 'Thông tin chi tiết sản phẩm đang được cập nhật.',
            'image' => null,
        ];

        return view('client.chi-tiet-san-pham.generic', [
            'product' => $product,
            'slug' => $slug,
        ]);
    }

    private function views(): array
    {
        return [
            'perfectlady' => 'perfect-lady',
            'perfect-lady' => 'perfect-lady',
            'perfectbeatywhite' => 'perfect-beauty-white',
            'perfect-beauty-white' => 'perfect-beauty-white',
            'nmn' => 'nmn',
            'p9' => 'p9',
            'vc30' => 'vc30',
            'vc30-serum-vitamin-c' => 'vc30',
        ];
    }

    private function catalog(): array
    {
        return [
            'nattokinase' => [
                'title' => 'Viên uống ngừa đột quỵ Nattokinase',
                'description' => 'Sản phẩm hỗ trợ chăm sóc sức khỏe tim mạch và tuần hoàn.',
                'image' => 'images/sanpham/nattokinase.webp',
            ],
            'spualene' => [
                'title' => 'Viên uống Spualene 900',
                'description' => 'Sản phẩm hỗ trợ chăm sóc sức khỏe từ bên trong.',
                'image' => 'images/sanpham/spualene.webp',
            ],
            'vien_nghe' => [
                'title' => 'V14 - Viên uống tinh chất nghệ cao cấp Nhật Bản',
                'description' => 'Sản phẩm đang được cập nhật thông tin chi tiết.',
                'image' => 'images/sanpham/v14.webp',
            ],
            'p5' => [
                'title' => 'P5 - Perfect Skin Nano 205%',
                'description' => 'Serum chăm sóc da chuyên sâu thuộc dòng Perfect Skin Nano.',
                'image' => 'images/sanpham/p5.webp',
            ],
            'p6' => [
                'title' => 'P6 - Perfect Skin Nano 230%',
                'description' => 'Serum chăm sóc da chuyên sâu thuộc dòng Perfect Skin Nano.',
                'image' => 'images/sanpham/p6.webp',
            ],
            'p7' => [
                'title' => 'P7 - Perfect Peptide Nano (500ML)',
                'description' => 'Sản phẩm peptide chăm sóc da chuyên sâu.',
                'image' => 'images/sanpham/p7.webp',
            ],
            'vc30-serum-vitamin-c' => [
                'title' => 'VC30 - Serum Vitamin C',
                'description' => 'Serum Vitamin C hỗ trợ chăm sóc và làm sáng da.',
                'image' => 'images/sanpham/vc30.webp',
            ],
        ];
    }
}
