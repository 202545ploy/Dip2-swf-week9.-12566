<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    function about()
    {
        $title= "About page";
        return view('pages.about',compact('title'));
    }

    function contact()
    {
        $title= "Contact page";
        return view('pages.contact',compact('title'));
    }
}
