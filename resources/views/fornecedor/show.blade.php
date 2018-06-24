@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Fornecedores</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('fornecedor.index') }}">Fornecedores</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>

        <div class="panel-body">
            <p><b>Id: </b>{{ $fornecedor->id }}</p>
            <p><b>Nome: </b>{{ $fornecedor->nome }}</p>
            <p><b>Cidade: </b>{{ $fornecedor->nome }}</p>
            <p><b>Endereço: </b>{{ $fornecedor->nome }}</p>
            <p><b>Contato: </b>{{ $fornecedor->nome }}</p>

        </div>
        <a href="{{ route('fornecedor.index') }}">Voltar</a>    {{--volta para compo fornecedores--}}
    </div>
@endsection