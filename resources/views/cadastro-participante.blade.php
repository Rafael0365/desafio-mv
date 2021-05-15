@extends('layout.principal')
@section('conteudo')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(empty($participante))
    <form action="{{route('insere')}}" method="POST">
@else
    <form action="{{route('participante.edicao',['id'=>$participante->id])}}" method="POST"> 
@endif 
    @csrf
    </br>
    <label class="form-label">Nome</label>
    <input class="form-control" type="text" name="nome" maxlength="150" @isset($participante) value="{{$participante->nome}}" @endisset>
    </br>
    <label class="form-label">CPF</label>
    <input class="form-control" type="text" name="cpf" maxlength="150" @isset($participante) value="{{$participante->cpf}}" @endisset>
    </br>
    <label class="form-label">Prato</label>
    <input class="form-control" type="text" name="prato" maxlength="150" @isset($participante) value="{{$participante->prato}}" @endisset>
    </br>
    @if(empty($participante))
    <button class="btn btn-primary" type="submit">Salvar</button>
    @else
    <button class="btn btn-primary" type="submit">Editar</button>
    <a class="btn btn-secondary" href={{route('participante.lista')}}>Cancelar</a>
    @endif
</form>
@if(!empty($participante))
    <form action="{{route('participante.exclusao',['id'=>$participante->id])}}" method="POST"> 
    @csrf
    <button class="btn btn-danger" type="submit">Excluir</button>
    </form>
@endif
@endsection