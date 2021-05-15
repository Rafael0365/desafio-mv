@extends('layout.principal')
@section('conteudo')
    </br>
    <h2>Listagem de colaboradores <a href={{route('participante.formulario')}}><i class="bi bi-plus-circle-fill"></i></a></h2>
    <table class="table">
        @foreach($participantes as $c)
            <tr>
            <td>Colaborador: {{$c->nome}}</td>
            <td>CPF: {{$c->cpf}}</td>
            <td>Prato que será trazido para o café da manhã: {{$c->prato}}</td>
            <td><a href="{{route('participante.formulario.edit',['id'=>$c->id])}}"><i class="bi bi-pencil-square"></i></a></td>
            </tr>
        @endforeach
    </table>
@endsection
