@extends('layout')
@section('content')

<div class="card border container">
    <div class="card-body">
        <form action="{{route('dadosPagina4')}}" method="POST">
            @csrf
            <div class="form-group py-4">
                <label for="pergunta">
                    <h2><strong>4. Porque a princesa Luna se tornou vilã?</strong></h2>
                </label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                    <label for="pergunta" class="form-check-label">
                        <h4>Ela não concordava com as decisões de Celestia para Equestria</h4>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                    <label for="pergunta" class="form-check-label">
                        <h4>Ela nunca foi uma vilã, a vilã era a Celestia tomada para raiva</h4>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                    <label for="pergunta" class="form-check-label">
                        <h4>Ela não se tornou vilã, apenas era contra Celestia</h4>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                    <label for="pergunta" class="form-check-label">
                        <h4>Ela sentiu inveja por não ser tão apreciada como a irmã princesa Celestia</h4>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.href='/';" type="button" class="btn btn-danger btn-sm">Desistir</button>
        </form>
    </div>
</div>
@endsection