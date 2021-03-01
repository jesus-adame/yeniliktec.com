<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke()
    {
        $posts = Post::orderByDesc('created_at')->paginate(3);

        return view('blog', [
            'title' => 'blog',
            'posts' => $posts,
        ]);
    }
}
