<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'form_fields.name' => 'required|string|max:255',
        ], [
            'form_fields.name.required' => 'Vui lòng nhập họ và tên.',
        ]);

        \Log::info('Contact form submitted', $request->all());

        if ($request->expectsJson()) {
            return response()->json(['message' => 'success']);
        }

        return back()->with('success', 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất.');
    }
}
