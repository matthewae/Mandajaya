<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            ['name' => 'Consultation', 'icon' => 'consultation.png', 'description' => 'Expert advice for your construction needs.'],
            ['name' => 'Building', 'icon' => 'building.png', 'description' => 'High-quality construction services.'],
            ['name' => 'Renovations', 'icon' => 'renovations.png', 'description' => 'Transform your space with our expertise.'],
            ['name' => 'Interior', 'icon' => 'interior.png', 'description' => 'Stylish interior designs tailored for you.']
        ];
        return view('index', compact('services'));
    }

    public function about()
    {
        return view('about');
    }
    
    public function consultation()
    {
        return view('consultation');
    }

    public function building()
    {
        return view('building');
    }

    public function renovation()
    {
        return view('renovation');
    }

    public function interior()
    {
        return view('interior');
    }
}
