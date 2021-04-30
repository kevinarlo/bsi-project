<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use App\Message;

class HomeController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Bumi Sukasari Indah');
        SEOMeta::setDescription('Hunian Masa Depan Anda');
        SEOMeta::setCanonical('https://bumisukasariindah.com/');
        return view('pages.home');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'g-recaptcha-response' => 'required|captcha'
    ]);

        $data = $request->all();
        
        Message::create($data);

        return redirect()->route('landingpage');
    }
}
