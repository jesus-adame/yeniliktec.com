<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke()
    {
        return view('blog', [ "title" => "blog" ]);
    }
}
