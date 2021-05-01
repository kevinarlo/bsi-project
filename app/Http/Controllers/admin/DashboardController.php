<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Message::all()->count();
        return view('pages.admin.dashboard', [
            'items' => $items
        ]);
    }
}
