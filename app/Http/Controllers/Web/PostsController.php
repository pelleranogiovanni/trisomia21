<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Post;
use App\Model\Web\Mensaje;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

    public function store(Request $request) {

        $etiquetas = explode(',', $request->tags);

        // Post::create($request->all());
        Post::create($request->all());
        dd($request);
        // $publicacion = new Post;

        // $publicacion->titulo = $request->titulo;
        // $publicacion->contenido = $request->contenido;
        // $publicacion->user_create_id = Auth::user()->id;
        // $publicacion->slug = Str::slug($request->titulo);
        // $publicacion->likes = 0;
        // $publicacion->dislikes = 0;
        // $publicacion->extracto = $request->extracto;
        // if ($request->estado == "on"){
        //     $publicacion->estado = "PUBLISHED";
        // }else{
        //     $publicacion->estado = "DRAFT";
        // }
        //$publicacion->imagen->ruta_imagen = $request->ruta_imagen;

        // if ($imagen = Post::setImagen($request->request)) {
        //     return $request;
        // }
        //$publicacion->save();

        return redirect('admin/home')->with('status', 'Profile updated!');
    }

    public function destroy($id) {
        return "Publicación eliminada con éxito";
    }
}
