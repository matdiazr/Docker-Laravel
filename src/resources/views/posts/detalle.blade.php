@extends('base')

@section('content')
<div class="container my-4">
  <div class="row bg-white p-4">
    <div class="offset-lg-1 col-lg-7 mb-3">
      <img src={{ asset("asset/imagen/imagen0.jpeg")}} width="600" class="img-fluid" alt="...">
      <div class="mt-3">
        <h2>{{ $post->titulo }}</h2>
        <h5>Fecha: {{ date('d-m-Y', strtotime($post->created_at ))}} / Autor: {{ $post->autor }}</h5>
        <div class="w-100 border my-3"></div>
        <h4>{{ $post->bajada }}</h4>
        <div class="w-100 border my-3"></div>
        <p>{{ $post->descripcion }}</p>
      </div>
    </div>
    
    <div class="col-lg-4 ">
      <h2 class="pl-3">Relacionadas:<br>{{ $post->tipo }}</h2>
      <div>
        @foreach ($post_type as $last_posts)
        <div class="col-lg-4 col-sm-6 col-12 mb-3">
          <div class="card" style="width: 18rem;">
            <a href="{{ route('noticias.detalle', $last_posts) }}">
              <img src={{ asset("asset/imagen/imagen0.jpeg")}} class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text">Fecha: {{ date('d-m-Y', strtotime($last_posts->created_at ))}}</p>
                <h5 class="card-title">{{ $last_posts->titulo }}</h5>
              {{-- <p class="card-text">{{ $post->bajada }}</p> --}}
                {{-- <a href="{{ route('noticias.detalle', $post) }}" class="btn btn-primary">Ver Más</a> --}}
              </div>
            </a>
          </div>
        </div>            
        @endforeach
      </div>
    </div>

  </div>
</div>
@endsection
