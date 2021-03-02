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

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

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
            'title'       => 'required|min:4|unique:posts,title',
            'excerpt'     => 'required|min:4|max:200',
            'content'     => 'required|min:4',
            'image'       => 'required|image',
        ]);

        $data = $request->all();

        $path = $request->file('image')->store('public');

        $post = new Post();
        $post->user_id  = $request->user()->id;
        $post->category_id = $data['category_id'];
        $post->title    = $data['title'];
        $post->slug     = $this->toUrlFormat($data['title']);
        $post->excerpt  = $data['excerpt'];
        $post->content  = $data['content'];
        $post->image    = $path;
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
            'title'       => 'required|min:4|unique:posts,title,' . $post->id,
            'content'     => 'required|min:4',
            'image'       => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->file('image')) {
            $path = $request->file('image')->store('public');
            $post->image    = $path;
        }

        $post->category_id = $data['category_id'];
        $post->title    = $data['title'];
        $post->slug     = $this->toUrlFormat($data['title']);
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

    public function toUrlFormat($string)
    {
        $string = trim($string);
 
        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );
    
        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );
    
        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );
    
        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );
    
        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );
    
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
    
        //Esta parte se encarga de eliminar cualquier caracter extraño
        $string = str_replace(
            array("º", "-", "~", "\\", '¨',
                "#", "@", "|", "!", '"',
                "·", "$", "%", "&", "/",
                "(", ")", "?", "'", "¡",
                "¿", "[", "^", "<code>", "]",
                "+", "}", "{", "¨", "´",
                ">", "< ", ";", ",", ":",
                "."),
            '',
            $string
        );

        $string = str_replace(' ', '-', $string);
 
        return strtolower($string);
    }
}
