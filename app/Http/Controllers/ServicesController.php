<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __invoke()
    {
        return view('services', [ "title" => "servicios" ]);
    }

    public function marketing()
    {
        return view('marketing', [ "title" => "marketing digital" ]);
    }

    public function websites()
    {
        return view('websites', [ "title" => "sitios web" ]);
    }
}
