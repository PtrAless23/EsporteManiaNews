@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-5">
        <div class="col-4 offset-4">   
            <div class="text-center mb-4">
                    <img src="https://esportemaniasite.000webhostapp.com/images/E.jpg" alt="Logo" width="72" height="72">
            </div>
            <h1 class="text-center">Login:</h1>
            <p class="text-center mb-4">Atenção: Esse login é apenas para administradores.</p> 
            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite o email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite a senha">
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-success">Entrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
