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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $publicaciones = Post::orderBy('id', 'DESC')->get();
        
        return view('admin.post.index', compact('publicaciones'));

    }

    public function create(){

        return view('admin.post.create');

    }

    public function store(Request $request) {

        $etiquetas = explode(',', $request->tags);

        $publicacion = new Post;

        $publicacion->titulo = $request->titulo;
        $publicacion->contenido = $request->contenido;
        $publicacion->user_create_id = Auth::user()->id;
        $publicacion->slug = Str::slug($request->titulo);
        $publicacion->extracto = $request->extracto;
        if ($request->estado == "on"){
            $publicacion->estado = "PUBLISHED";
        }else{
            $publicacion->estado = "DRAFT";
        }
        $publicacion->ruta_imagen = Post::setImagen($request->ruta_imagen);

        $publicacion->save();

        return redirect('admin/home')->with('status', 'Profile updated!');
    }

    public function destroy($id) {
        return "Publicación eliminada con éxito";
    }

    public function publicados(){
        return Post::where('estado', 'PUBLISHED')->paginate(10);
    }
}
