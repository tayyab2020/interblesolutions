<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function About()
    {
        return view('about');
    }

    public function ContactUs()
    {
        return view('contact-us');
    }

    public function Resume()
    {
        return view('resume');
    }

    public function CustomerSupport()
    {
        return view('customer_support');
    }

    public function WebDevelopment()
    {
        return view('web_development');
    }
}
