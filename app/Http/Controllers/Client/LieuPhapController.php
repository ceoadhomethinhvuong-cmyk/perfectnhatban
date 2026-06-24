<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LieuPhapController extends Controller
{
    public function index()
    {
        return view('client.lieu-phap');
    }
}
