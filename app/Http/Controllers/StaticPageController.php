<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index()
    {
        return view('staticpage.home');
    }
    public function chisiamo()
    {
        return view('staticpage.home.chisiamo');
    }
    public function contatti()
    {
        return view('staticpage.home.contatti');
    }
}
