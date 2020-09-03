<?php

use App\Categoria;
use App\Post;
use App\User;
use App\Staff;
use App\Curso;
use App\Rama;
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
        // User::truncate();

        $user = new User();
        $user->name = "matias";
        $user->email = "mat.diazr@gmail.com";
        $user->password = bcrypt("matias");
        $user->save();

        // Categoria::truncate();

        $categoria = new Categoria();
        $categoria->nombre = "evento";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "campamento";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "reunion";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "curso";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "actividades";
        $categoria->save();
    
        // Post::truncate();

        $post = new Post();
        $post->estado = true;
        $post->titulo = "aniversario scout";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([1,2,3]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "dia del pañolin";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([1]);

        $post = new Post();
        $post->estado = false;
        $post->titulo = "campamento de verano";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([1,2,5]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "muere joven scout apuñalado";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([1,3,4]);

        $post = new Post();
        $post->estado = false;
        $post->titulo = "cumpleaños de lord baden powell";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([4]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "campamento distrital";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([2,5]);

        $post = new Post();
        $post->estado = false;
        $post->titulo = "mejor patruya del distrito";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([3]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "olimpiadas distritles";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([2]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "curso de formacion";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([4,5]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "aprende estos nudos";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([3]);

        $post = new Post();
        $post->estado = true;
        $post->titulo = "fiesta scout";
        $post->portada = "default.jpg";
        $post->bajada = "la bajada de la noticia no varia";
        $post->autor_id = 1;
        $post->descripcion = "una descripción muy explicita a mi parecer";
        $post->save();

        $post->categoria()->attach([4]);
        
        $curso = new Curso();
        $curso->nombre = "ninguno";
        $curso->save();

        $curso = new Curso();
        $curso->nombre = "básico";
        $curso->save();

        $curso = new Curso();
        $curso->nombre = "medio";
        $curso->save();

        $curso = new Curso();
        $curso->nombre = "avanzado";
        $curso->save();

        $curso = new Curso();
        $curso->nombre = "formación";
        $curso->save();

        $rama = new Rama();
        $rama->nombre = "lobatos";
        $rama->save();

        $rama = new Rama();
        $rama->nombre = "golondrinas";
        $rama->save();

        $rama = new Rama();
        $rama->nombre = "scouts";
        $rama->save();

        $rama = new Rama();
        $rama->nombre = "guias";
        $rama->save();

        $rama = new Rama();
        $rama->nombre = "pioneros";
        $rama->save();

        $rama = new Rama();
        $rama->nombre = "caminantes";
        $rama->save();

        $staff = new Staff();
        $staff->estado = true;
        $staff->nombre = "matias";
        $staff->avatar = "avatar.png";
        $staff->edad = 24;
        $staff->curso_id = 2;
        $staff->rama_id = 5;
        $staff->descripcion = "joven amante del aprendizaje";
        $staff->save();

        $staff = new Staff();
        $staff->estado = false;
        $staff->nombre = "emerson";
        $staff->avatar = "avatar.png";
        $staff->edad = 20;
        $staff->curso_id = 3;
        $staff->rama_id = 1;
        $staff->descripcion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non porttitor ante. Fusce blandit sed velit at dapibus. Duis porta convallis odio vel feugiat. Integer gravida ex est,";
        $staff->save();

        $staff = new Staff();
        $staff->estado = true;
        $staff->nombre = "jose";
        $staff->avatar = "avatar.png";
        $staff->edad = 23;
        $staff->curso_id = 4;
        $staff->rama_id = 4;
        $staff->descripcion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non porttitor ante. Fusce blandit sed velit at dapibus. Duis porta convallis odio vel feugiat. Integer gravida ex est,";
        $staff->save();

        $staff = new Staff();
        $staff->estado = true;
        $staff->nombre = "pacheco";
        $staff->avatar = "avatar.png";
        $staff->edad = 64;
        $staff->curso_id = 4;
        $staff->rama_id = 2;
        $staff->descripcion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non porttitor ante. Fusce blandit sed velit at dapibus. Duis porta convallis odio vel feugiat. Integer gravida ex est,";
        $staff->save();

        $staff = new Staff();
        $staff->estado = false;
        $staff->nombre = "alfredo";
        $staff->avatar = "avatar.png";
        $staff->edad = 38;
        $staff->curso_id = 1;
        $staff->rama_id = 1;
        $staff->descripcion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non porttitor ante. Fusce blandit sed velit at dapibus. Duis porta convallis odio vel feugiat. Integer gravida ex est,";
        $staff->save();

        $staff = new Staff();
        $staff->estado = true;
        $staff->nombre = "roberto";
        $staff->avatar = "avatar.png";
        $staff->edad = 40;
        $staff->curso_id = 2;
        $staff->rama_id = 2;
        $staff->descripcion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non porttitor ante. Fusce blandit sed velit at dapibus. Duis porta convallis odio vel feugiat. Integer gravida ex est,";
        $staff->save();

        $staff = new Staff();
        $staff->estado = false;
        $staff->nombre = "tania";
        $staff->avatar = "avatar.png";
        $staff->edad = 40;
        $staff->curso_id = 2;
        $staff->rama_id = 2;
        $staff->descripcion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non porttitor ante. Fusce blandit sed velit at dapibus. Duis porta convallis odio vel feugiat. Integer gravida ex est,";
        $staff->save();

        $staff = new Staff();
        $staff->estado = true;
        $staff->nombre = "rigoberto";
        $staff->avatar = "avatar.png";
        $staff->edad = 20;
        $staff->curso_id = 1;
        $staff->rama_id = 4;
        $staff->descripcion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non porttitor ante. Fusce blandit sed velit at dapibus. Duis porta convallis odio vel feugiat. Integer gravida ex est,";
        $staff->save();

        $staff = new Staff();
        $staff->estado = true;
        $staff->nombre = "alexander";
        $staff->avatar = "avatar.png";
        $staff->edad = 32;
        $staff->curso_id = 4;
        $staff->rama_id = 1;
        $staff->descripcion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non porttitor ante. Fusce blandit sed velit at dapibus. Duis porta convallis odio vel feugiat. Integer gravida ex est,";
        $staff->save();
    
    }
}
