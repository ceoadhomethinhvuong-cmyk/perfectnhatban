<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $latestBlogs = Blog::where('status', 'published')
            ->latest('published_at')
            ->limit(8)
            ->get();

        return view('client.home', compact('latestBlogs'));
    }
}
