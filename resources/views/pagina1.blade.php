@extends('layout')
@section('content')

<div class="card border container">
    <div class="card-body">
        <form action="{{route('dadosPagina1')}}" method="POST">
            @csrf
            <div class="form-group py-4">
                <label for="pergunta">
                    <h2><strong>1. Qual o nome do vilão que possui as partes do corpo de diferentes animais?</strong></h2>
                </label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                    <label for="pergunta" class="form-check-label">
                        <h4>Rei Sombra</h4>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                    <label for="pergunta" class="form-check-label">
                        <h4>Lorde Tirek</h4>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                    <label for="pergunta" class="form-check-label">
                        <h4>Discórdia</h4>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                    <label for="pergunta" class="form-check-label">
                        <h4>Rainha Chrysalis</h4>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.href='/';" type="button" class="btn btn-danger btn-sm">Desistir</button>
        </form>
    </div>
</div>
@endsection