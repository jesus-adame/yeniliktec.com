<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
            'message' => 'required|min:4|max:250',
        ]);

        $comment = new Comment();
        $comment->user_id = $request->user()->id;
        $comment->post_id = $request->post_id;
        $comment->content = $request->message;
        $comment->save();
        
        return redirect(route('posts.show', [ $comment->post->slug ]))
            ->with('status', 'Registrado correctamente.');
    }

    public function edit(Comment $comment)
    {
        if (auth()->user()->id != $comment->user_id) {
            return abort(404);
        }

        return view('comments.edit', ['comment' => $comment]);
    }

    public function update(Request $request, Comment $comment)
    {
        if (auth()->user()->id != $comment->user_id) {
            return abort(404);
        }

        $request->validate([
            'message' => 'required|min:4|max:250',
        ]);

        $comment->content = $request->message;
        $comment->save();
        
        return redirect(route('posts.show', [$comment->post->slug]))
            ->with('status', 'Eliminado correctamente.');
    }

    public function destroy(Comment $comment)
    {
        if (auth()->user()->id != $comment->user_id) {
            return abort(404);
        }
        
        $comment->delete();
        return redirect(route('posts.show', [$comment->post->slug]))
            ->with('status', 'Eliminado correctamente.');
    }
}
