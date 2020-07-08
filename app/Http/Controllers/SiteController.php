<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $data = '<h2 style="background:red;"> How to print HTML data from controller to view. Just use "{!!$data!!}" syntex to view.</h2>';

        return view('site.home', compact('data'));
    }

    public function aboutsite()
    {
        return view('site.aboutsite');
    }

    public function contactsite()
    {
        return view('site.contactsite');
    }

    public function extra()
    {
        return view('site.extra');
    }

    public function dontshow()
    {
        return view('site.dontshow');
    }
}
