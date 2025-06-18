<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function __construct()
    {
        error_reporting(-1);
        ini_set('display_errors', '1');
        
        helper('url');    
    }

    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about_us');
    }

    public function contactUs()
    {
        return view('contact_us');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function certificates()
    {
        return view('certificate');
    }

    public function reports()
    {
        return view('reports');
    }

    public function infrastructure()
    {
        return view('infrastructure');
    }

    public function overseas()
    {
        return view('contact-region');
    }

    public function blog()
    {
        return view('blog');
    }
}
