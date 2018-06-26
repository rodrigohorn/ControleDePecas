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
            @foreach($fornecedores as $fornecedor)
                @if($fornecedor->id == $vendedor->id_fornecedor)
                    <p><b>Fornecedor: </b>{{ $fornecedor->nome }}</p>
                @endif
            @endforeach
            <p><b>Contato: </b>{{ $vendedor->contato }}</p>
        </div>
        <a href="{{ route('vendedor.index') }}">Voltar</a>
    </div>
@endsection
