@extends('layout')
@section('content')

<div class="card border container">
    <div class="card-body">
        <form action="{{route('dadosPagina3')}}" method="POST">
            @csrf
            <div class="form-group py-4">
                <label for="pergunta">
                    <h2><strong>3. Porque a Twilitgh possui asas?</strong></h2>
                </label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                    <label for="pergunta" class="form-check-label">
                        <h4>A princesa Celestia lhe deu asas após concluir uma missão da amizade</h4>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                    <label for="pergunta" class="form-check-label">
                        <h4>Fez um feitiço que lhe deu asas e se tornou discípula de Celestia</h4>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                    <label for="pergunta" class="form-check-label">
                        <h4>Sua magia aumentou até que criou asas e se tornou princesa</h4>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                    <label for="pergunta" class="form-check-label">
                        <h4>Por nada, ela sempre teve asas</h4>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.href='/';" type="button" class="btn btn-danger btn-sm">Desistir</button>
        </form>
    </div>
</div>
@endsection