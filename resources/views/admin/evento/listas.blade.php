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
            <th scope="col">Validade</th>
            <th scope="col">Numero de pessoas</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($listas as $lista)
          <tr>
            <th scope="row">{{$lista->nome_lista}}</th>
            <td>{{$lista->validade}}</td>
            <td>100</td>
            <td>
                <a href="#">Detalhes</a>
                <a href="#">Editar</a>
                <a href="#">Excluir</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endsection
