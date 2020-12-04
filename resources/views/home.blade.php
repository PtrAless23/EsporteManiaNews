@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
      <br/>
      <?php
        $count = 0;
      ?>
      @foreach($posts as $post)
      <?php
        $count++;
      ?>
        @if($count == 1)
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
          <div class="col-md-6 px-0" >
            @foreach($categories as $category)
              @if($category->id == $post->category_id)
              <strong class="d-inline-block mb-2 text-success">{{ $category->name }}</strong>
              @endif
            @endforeach
            <h1 class="display-4 font-italic">{{ $post->title }}</h1>
            @if($post->created_at != $post->updated_at )
              <div class="mb-1 text-muted">Postado em: {{ $post->created_at }}</div>
              <div class="mb-1 text-muted">Editado em: {{ $post->updated_at }}</div>
            @else
              <div class="mb-1 text-muted">Postado em: {{ $post->created_at }}</div>
            @endif
            <p class="lead my-3">{{ $post->summary }}</p>
            <p class="lead mb-0"><a href="{{ route('artigo', ['id' => $post->id]) }}" class="text-white font-weight-bold">Continue lendo...</a></p>
          </div>
        </div>
        <div class="row mb-2">
        @else

          <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                @foreach($categories as $category)
                  @if($category->id == $post->category_id)
                <strong class="d-inline-block mb-2 text-primary">{{ $category->name }}</strong>
                  @endif
                @endforeach
                <h3 class="mb-0">
                  <a class="text-dark" href="#">{{ $post->title }}</a>
                </h3>
                @if($post->created_at != $post->updated_at )
                  <div class="mb-1 text-muted">Postado em: {{ date('d/m/Y H:i:s', strtotime($post->created_at)) }}</div>
                  <div class="mb-1 text-muted">Editado em: {{ date('d/m/Y H:i:s', strtotime($post->updated_at)) }}</div>
                @else
                  <div class="mb-1 text-muted">Postado em: {{ $post->created_at }}</div>
                @endif
                <p class="card-text mb-auto">{{ $post->summary }}</p>
                <a href="{{ route('artigo', ['id' => $post->id]) }}">Continue lendo</a>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" src="https://esportemaniasite.000webhostapp.com/images/E.jpg" alt="Card image cap">
            </div>
          </div>
        @endif
      @endforeach
      </div>

    </div>
</div>
@endsection
