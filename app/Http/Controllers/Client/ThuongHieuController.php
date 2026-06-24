<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThuongHieuController extends Controller
{
    public function index()
    {
        return view('client.thuong-hieu');
    }
}
