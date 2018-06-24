@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Peças</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('peca.index') }}">Peças</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>

        <div class="panel-body">
            <p><b>Id: </b>{{ $peca->id }}</p>
            <p><b>Nome: </b>{{ $peca->nome }}</p>
            @foreach($fornecedores as $fornecedor)
                @if($fornecedor->id == $peca->id_fornecedor)
                    <p><b>Fornecedor: </b>{{ $fornecedor->nome }}</p>
                @endif
            @endforeach
            @foreach($estoques as $estoque)
                @if($estoque->id == $peca->id_estoque)
                    <p><b>Estoque: </b>{{ $estoque->nome }}</p>
                @endif
            @endforeach
            <p><b>Marca: </b>{{ $peca->marca }}</p>
            <p><b>Valor: </b>{{ $peca->valor }}</p>

        </div>
        <a href="{{ route('peca.index') }}">Voltar</a>
    </div>
@endsection
