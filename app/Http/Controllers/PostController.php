<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', [
            'categories' => $categories,
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function edit(Post $post)
    {
        if (auth()->user()->id != $post->user_id) {
            return abort(404);
        }
        
        $categories = Category::all();

        return view('posts.edit', [
            'post' => $post,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|numeric|exists:categories,id',
            'title'       => 'required|min:4',
            'slug'        => 'required|min:4|unique:posts,slug',
            'excerpt'     => 'required|min:4',
            'content'     => 'required|min:4',
            'image'       => 'required|image',
        ]);

        $data = $request->all();

        $path = $request->file('image')->store('public');

        $post = new Post();
        $post->user_id  = $request->user()->id;
        $post->category_id = $data['category_id'];
        $post->title    = $data['title'];
        $post->slug     = $data['slug'];
        $post->excerpt  = $data['excerpt'];
        $post->content  = $data['content'];
        $post->image    = trim($path, 'public/');
        $post->save();

        return redirect(route('blog'))
            ->with('status', 'Registrado correctamente.');
    }

    public function update(Request $request, Post $post)
    {
        if (auth()->user()->id != $post->user_id) {
            return abort(404);
        }

        $request->validate([
            'category_id' => 'required|numeric|exists:categories,id',
            'title'       => 'required|min:4',
            'slug'        => 'required|min:4|unique:posts,slug,' . $post->id,
            'excerpt'     => 'required|min:4',
            'content'     => 'required|min:4',
            'image'       => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->file('image')) {
            $path = $request->file('image')->store('public');
            $post->image    = trim($path, 'public/');
        }

        $post->category_id = $data['category_id'];
        $post->title    = $data['title'];
        $post->slug     = $data['slug'];
        $post->excerpt  = $data['excerpt'];
        $post->content  = $data['content'];
        $post->save();

        return redirect(route('posts.show', ['post' => $post->id]))
            ->with('status', 'Actualizado correctamente.');
    }

    public function destroy(Post $post)
    {
        if (auth()->user()->id != $post->user_id) {
            return abort(404);
        }
        
        $post->delete();
        return redirect(route('blog'))
            ->with('status', 'Eliminado correctamente.');
    }
}
