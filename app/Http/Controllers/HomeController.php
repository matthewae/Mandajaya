<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


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

    

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

    public function team()
    {
        return view('team');
    }

    public function project()
    {
        return view('project');
    }

    public function client()
    {
        return view('client');
    }

    public function vision()
    {
        return view('vision');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
