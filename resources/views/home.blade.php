@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
      <br/>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0" >
          <h1 class="display-4 font-italic">Título mais longo para um post destacado</h1>
          <p class="lead my-3">Várias linhas formando uma introdução, informando novos leitores rápido e eficientemente sobre o que é mais interessante, neste post.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue lendo...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Mundo</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post destacado</a>
              </h3>
              <div class="mb-1 text-muted">12 de Nov</div>
              <p class="card-text mb-auto">Este é um card maior com suporte à texto, em baixo, como uma introdução mais natural ao conteúdo adicional.</p>
              <a href="#">Continue lendo</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="https://esportemaniasite.000webhostapp.com/images/E.jpg" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Título do post</a>
              </h3>
              <div class="mb-1 text-muted">11 de Nov</div>
              <p class="card-text mb-auto">Este é um card maior com suporte à texto em baixo, como uma introdução mais natural ao conteúdo adicional.</p>
              <a href="#">Continue lendo</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="https://esportemaniasite.000webhostapp.com/images/E.jpg" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
