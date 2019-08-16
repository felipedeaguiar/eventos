@extends('base')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Numero de pessoas</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $cliente)
          <tr>
            <th scope="row">{{$cliente->nome}}</th>
            <td>{{$cliente->cpf}}</td>
            <td>100</td>
            <td>
                <a href="/listas/clientes">Detalhes</a>
                <a href="#">Editar</a>
                <a href="#">Excluir</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endsection
