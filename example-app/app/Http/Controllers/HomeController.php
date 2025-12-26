<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        return view('home', ['now' => $now]);
    }
    public function about(){
        return 'About Page';
    }
}
