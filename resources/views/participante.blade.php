@extends('layout.principal')
@section('conteudo')
    <h2>Listagem de colaboradores <a href={{route('participante.formulario')}}>novo colaborador</a></h2>
    <table>
        @foreach($participantes as $c)
            <tr>
            <td>Colaborador: {{$c->nome}}</td>
            </tr>
            <tr>
            <td>CPF: {{$c->cpf}}</td>
            </tr>
            <tr>
            <td>Prato que será trazido para o café da manhã: {{$c->prato}}</td>
            </tr>
            <tr>
            <td><a href="{{route('participante.formulario.edit',['id'=>$c->id])}}">editar</a></td>
            </tr>
        @endforeach
    </table>
@endsection
