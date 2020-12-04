@extends('partials.layout')

@section('content')
@include('partials.privmenu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>EsporteManiaNews - Cadastro de Categorias</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            @include('partials.errors')

            @if($post->id)
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
            {{ method_field('PUT') }}
            @else
            <form action="{{ route('posts.store') }}" method="POST">
            @endif

                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Digite o título do texto" value="{{ $post->title }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="summary">Resumo</label>
                        <textarea name="summary" id="summary" rows="2" class="form-control" placeholder="Digite o resumo do texto">{{ $post->summary }}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="text">Texto</label>
                        <textarea name="text" id="text" rows="5" class="form-control" placeholder="Digite o texto">{{ $post->text }}</textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="category_id">Categoria</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="0">Selecione uma categoria</option>
                                @foreach($categories as $category)
                                    @if($category->id == $post->category_id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                            <div class="custom-control custom-switch">
                                @if($post->active)
                                <input type="checkbox" name="active" id="active" class="custom-control-input" value="S" checked>
                                @else
                                <input type="checkbox" name="active" id="active" class="custom-control-input" value="S">
                                @endif
                                <label for="active" class="custom-control-label">Ativo</label>
                            </div>   
                    </div>
                </div> 

                <button type="submit" class="btn btn-primary form-row mt-3">Salvar</button>

            </form>
        </div>
    </div>
</div>
@endsection