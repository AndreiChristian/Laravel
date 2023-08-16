<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function list(){
        return "all users";
    }

    public function create(){
        return "create method";
    }

    public function store(){
        return "store method";
    }

    public function edit($post){
        return "edit method";
    }

    public function update($post){
        return "update method";
    }

    public function destroy($post){
        return "delete function";
    }
}
