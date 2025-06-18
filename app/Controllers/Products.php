<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Products extends Controller
{
    public function __construct()
    {
        helper('url');
    }

    public function neutralGroundingResistor()
    {
        return view('neutral-grounding-resistor');
    }

    public function loadBank()
    {
        return view('load-bank');
    }

    public function harmonicFilterResistor()
    {
        return view('harmonic-filter-resistor');
    }

    public function switchDisconnector()
    {
        return view('switch-disconnector');
    }

    public function dynamicBreakingResistor()
    {
        return view('dynamic-breaking-resistor');
    }

    public function products()
    {
        return view('products');
    }

    public function clients()
    {
        return view('clients');
    }

    public function compactSubstation()
    {
        return view('compact_substation');
    }
}
