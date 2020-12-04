@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <br/>
    @foreach($posts as $post)
      @if($post->id == $id)
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            @foreach($categories as $category)
              @if($category->id == $post->category_id)
              <strong class="d-inline-block mb-2 text-success">{{ $category->name }}</strong>
              @endif
            @endforeach
          </h3>

          <div class="blog-post content">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <blockquote>
              <p>{{ $post->summary }}</p>
              @if($post->created_at != $post->updated_at )
                <p class="mb-1 text-muted">Postado em: {{ date('d/m/Y H:i:s', strtotime($post->created_at)) }}</p>
                <p class="mb-1 text-muted">Editado em: {{ date('d/m/Y H:i:s', strtotime($post->updated_at)) }}</p>
              @else
                <p class="mb-1 text-muted">Postado em: {{ date('d/m/Y H:i:s', strtotime($post->created_at)) }}</p>
              @endif
            </blockquote>
            <hr>
            <blockquote>
              <article>
                <?php
                  $paragrafos = [];
                  $paragrafos[] = $post->text;
                  foreach( $paragrafos as $paragrafo){
                    echo "<p>".$paragrafo."</p>";
                  }
                ?>
                
              </article>	
            </blockquote>
            
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->
          @endif
        @endforeach
        
        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic center">Outras notícias:</h4>
            <br>
            <main role="main">
                <div class="album p bg-light">
                @foreach($posts as $post)
                  @if($post->id != $id)
                    <div class="container">
                        <div>
                            <div class="col-md">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="https://esportemaniasite.000webhostapp.com/images/E.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">{{ $post->title }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                              <a href="{{ route('artigo', ['id' => $post->id]) }}"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                            </div>
                                        </div>  
                                        <small class="text-muted">
                                          @foreach($categories as $category)
                                            @if($category->id == $post->category_id)
                                            <strong class="d-inline-block mb-2 text-success">{{ $category->name }}</strong>
                                            @endif
                                          @endforeach
                                        </small>
                                    </div>  
                                  </div>
                            </div>
                          </div>
                      </div>
                  @endif
                @endforeach
                  </div>   
            </main>          
          </div>

        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
</div>
      

<footer class="text-muted p-3 mb-3 bg-light rounded">
      <div class="container" align='center'>
        <p>
          <a href="#">Voltar ao topo</a>
        </p>
      </div>
</footer>
@endsection