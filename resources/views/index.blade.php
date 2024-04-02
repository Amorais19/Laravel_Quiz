@extends('layout')
@section('content')
    <div class="jumbotron">
        <p class="h1 text-center py-4"><strong>Quiz</strong> - O que você sabe sobre <strong>My Little Pony?</strong></p>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center imagem">
                <img src="{{asset('storage/imagem/logo.jpg')}}" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-6 text-center py-4">
                <p class="texto">
                    <h3>Este quiz tem o objetivo de medir o seu nível de sabedoria quanto a <strong>My Little Pony</strong></h3>
                </p>
                <div class="card-footer py-4 text-center">
                    <a href="/iniciar" class="btn btn-primary" role="button">Começar</a>
                </div>
            </div>
        </div>
    </div>
@endsection