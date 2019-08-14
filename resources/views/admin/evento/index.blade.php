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
            <th scope="col">Data</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($eventos as $evento)
          <tr>
            <th scope="row">{{$evento->nome}}</th>
            <td>{{$evento->data_evento}}</td>
            <td>
                <a href="/eventos/{{$evento->id}}/listas">Listas</a>
                <a href="#">Editar</a>
                <a href="#">Excluir</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endsection
