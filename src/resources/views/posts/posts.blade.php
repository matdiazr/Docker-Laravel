@extends('base')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-lg-12 justify-content-center my-3 menu-tipo">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('filtrar.tipo', 'scout') }}">Scout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('filtrar.tipo', 'evento') }}">Evento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('filtrar.tipo', 'campamento') }}">Campamento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('filtrar.tipo', 'deporte') }}">Deportes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('filtrar.tipo', 'salud') }}">Salud</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('filtrar.tipo', 'criminal') }}">Criminal</a>
        </li>
      </ul>
    </div>  

    <div class="w-100 border mb-5"></div>

    @if ($respuesta)
        {{ $respuesta }}
    @endif

    @foreach ($all_posts as $post)
    <div class="col-lg-4 col-sm-6 col-12 mb-3">
      <div class="card" style="width: 18rem;">
        <a href="{{ route('noticias.detalle', $post) }}">
          <img src={{ asset("asset/imagen/imagen0.jpeg")}} class="card-img-top" alt="...">
          <div class="card-body">
          <p class="card-text">{{ $post->created_at }}</p>
            <h5 class="card-title">{{ $post->titulo }}</h5>
          {{-- <p class="card-text">{{ $post->bajada }}</p> --}}
            {{-- <a href="{{ route('noticias.detalle', $post) }}" class="btn btn-primary">Ver Más</a> --}}
          </div>
        </a>
      </div>
    </div>
    @endforeach
    <div class="w-100 border my-5"></div>
  </div>

  <div class="row justify-content-center mb-3">
    {{ $all_posts->links() }}
  </div>

</div>
@endsection