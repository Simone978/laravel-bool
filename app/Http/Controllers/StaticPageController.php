<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function chisiamo()
    {
        return view('home.chisiamo');
    }
    public function contatti()
    {
        return view('home.contatti');
    }
}
