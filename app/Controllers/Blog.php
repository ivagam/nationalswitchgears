<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Blog extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function blog()
    {
        return view('blog');
    }

    public function neutral_grounding_resistor()
    {
        return view('neutral-blog');
    }

    public function load_bank()
    {
        return view('load-blog');
    }

    public function harmonic_filter_resistor()
    {
        return view('harmonic-blog');
    }

    public function switch_disconnector()
    {
        return view('switch-blog');
    }

    public function dynamic_breaking_resistor()
    {
        return view('dynamic-blog');
    }
}
