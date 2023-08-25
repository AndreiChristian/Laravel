<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Nette\Utils\Strings;

class CommentController extends Controller
{
    public function store(Request $request,  Post $post)
    {

        $request->validate(['body' => 'required']);

        $post->comments()->create([
            'body' => $request->body,
        ]);

        return back();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back();
    }
}
