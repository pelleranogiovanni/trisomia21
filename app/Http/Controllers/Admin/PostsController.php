<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Post;
use App\Model\Web\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;

class PostsController extends Controller
{

    public function index(){

        $publicaciones = Post::orderBy('id', 'DESC')->get();
        
        return view('admin.post.index', compact('publicaciones'));

    }

    public function create(){

        return view('admin.post.create');

    }

    public function store(PostStoreRequest $request) {
        return $request;
    }
}
