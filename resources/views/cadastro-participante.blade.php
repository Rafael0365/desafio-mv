@extends('layout.principal')
@section('conteudo')
@if(empty($participante))
    <form action="{{route('insere')}}" method="POST">
@else
    <form action="{{route('participante.edicao',['id'=>$participante->id])}}" method="POST"> 
@endif 
    @csrf
    <label>Nome</label>
    <input type="text" name="nome" maxlength="150" @isset($participante) value="{{$participante->nome}}" @endisset>
    </br>
    <label>CPF</label>
    <input type="text" name="cpf" maxlength="150" @isset($participante) value="{{$participante->cpf}}" @endisset>
    </br>
    <label>Prato</label>
    <input type="text" name="prato" maxlength="150" @isset($participante) value="{{$participante->prato}}" @endisset>
    </br>
    @if(empty($participante))
    <button type="submit">Salvar</button>
    @else
    <button type="submit">Editar</button>
    <a href={{route('participante.lista')}}>Cancelar</a>
    @endif
</form>
@if(!empty($participante))
    <form action="{{route('participante.exclusao',['id'=>$participante->id])}}" method="POST"> 
    @csrf
    <button type="submit">Excluir</button>
    </form>
@endif
@endsection