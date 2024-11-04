<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function home()
    {
        $data = ['title' => 'Home'];
        return view('home', $data);
    }
}
