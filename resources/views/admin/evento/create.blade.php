<!-- Stored in resources/views/child.blade.php -->

@extends('base')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="/eventos">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o nome do evento">          </div>
          <div class="form-group">
            <label for="data">Data</label>
            <input type="date" class="form-control" name="data" id="data">
          </div>
          <div class="form-group">
            <label for="casa_noturna">Casa Noturna</label>
            <select class="form-control" name="id_casa" id="casa_notoruna">
                @foreach ($casas as $item)
                  <option value="{{$item->id}}">{{$item->nome}}</option>
                @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
