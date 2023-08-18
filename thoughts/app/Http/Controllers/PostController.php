<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function list()
    {

        $posts = Post::orderByDesc('created_at')->get();


        return view('list',[
            'posts'=> $posts
        ]);
    }

    public function create()
    {
        return "create method";
    }

    public function store()
    {
        return "store method";
    }

    public function edit($post)
    {
        return "edit method";
    }

    public function update($post)
    {
        return "update method";
    }

    public function destroy($post)
    {
        return "delete function";
    }
}
