<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pastel.index');
    }

    public function about()
    {
      return view('pastel.about-us');
    }

    public function project()
    {
        return view('pastel.project');
    }

    public function service()
    {
        return view('pastel.service');
    }

    public function contact()
    {
        return view('pastel.contact');
    }
}
