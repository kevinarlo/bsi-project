<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'g-recaptcha-response' => 'required|captcha'
    ]);

        Message::create($data);

        return redirect()->route('landingpage');
    }
}
