@extends('layout.principal')
@section('conteudo')
    <h2>Listagem de colaboradores</h2>
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
        @endforeach
    </table>
@endsection
