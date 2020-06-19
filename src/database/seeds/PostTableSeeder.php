<?php

use App\Categoria;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User();
        $user->name = "matias";
        $user->email = "matitroll@gmail.com";
        $user->password = "finoyvulgar";

        Categoria::truncate();

        $categoria = new Categoria();
        $categoria->nombre = "Evento";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Campamento";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Reunion";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Curso";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Actividades";
        $categoria->save();
    
        Post::truncate();

        $post = new Post();
        $post->estado = true;
        $post->titulo = "noticia numero 1";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([1,2,3]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "noticia numero 2";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([1]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "noticia numero 3";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([1,2,5]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "noticia numero 4";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([1,3,4]);
        
    
    }
}
