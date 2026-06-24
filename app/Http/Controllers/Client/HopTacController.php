<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HopTacController extends Controller
{
    public function index()
    {
        return view('client.hop-tac');
    }
}
