@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Vendedores</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('peca.index') }}">Peças</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>

        <div class="panel-body">
            <p><b>Id: </b>{{ $vendedor->id }}</p>
            <p><b>Nome: </b>{{ $vendedor->nome }}</p>
            <p><b>Contato: </b>{{ $peca->marca }}</p>
            <p><b>Forncededor: </b>{{ $peca->valor }}</p>
        </div>
        <a href="{{ route('forncededor.index') }}">Voltar</a>
    </div>
@endsection
