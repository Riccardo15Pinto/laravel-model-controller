<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $test = 'test01';
        return view('home', compact('test'));
    }
}
