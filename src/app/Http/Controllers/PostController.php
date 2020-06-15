<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_posts = Post::latest()->paginate(6);
        // return $all_posts;
        return view('posts.posts', compact('all_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_posts = Post::latest()->paginate(5);
        return view('admin.posts.create', compact('all_posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //retorna todo el contenido del formulario
        // return $request->all();

        //retorna los datos del autor
        // return auth()->user();

        $request->validate([
            'titulo' => 'required',
            'bajada' => 'required',
            'descripcion' => 'required'
        ]);

        $postNuevo = new Post;
        $postNuevo->estado = true;
        $postNuevo->autor = auth()->user()->name;
        $postNuevo->tipo = $request->tipo;
        $postNuevo->titulo = $request->titulo;
        $postNuevo->bajada = $request->bajada;
        $postNuevo->descripcion = $request->descripcion;

        $postNuevo->save();

        //nos devuelve a la misma pagina
        return back()->with('respuesta', 'Post Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.detalle', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postUpdate = Post::findOrFail($id);
        $postUpdate->titulo = $request->titulo;
        $postUpdate->bajada = $request->bajada;
        $postUpdate->descripcion = $request->descripcion;
        $postUpdate->tipo = $request->tipo;
        $postUpdate->autor = auth()->user()->name;

        $postUpdate->save();
        
        return back()->with('respuesta', 'Post Modificado' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
