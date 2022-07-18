<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //public finction 
    public function index()
    {
        return view('pages.about');
    }
}
