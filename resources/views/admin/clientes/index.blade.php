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
            <th scope="col">Telefone</th>
            <th scope="col">Cidade</th>
            <th scope="col">Promotor</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $cliente)
          <tr>
            <th scope="row">{{$cliente->nome}}</th>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->cidade}}</td>
            <td>Promotor</td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endsection
