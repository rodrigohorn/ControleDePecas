@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Peças</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('peca.index') }}">Peças</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('peca.update', $peca) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $peca->nome }}">
                </div>
                <div class="form-group">
                    <label for="fornecedorSelect">Fornecedor</label>
                    <select name="id_fornecedor" class="form-control" id="fornecedorSelect">
                        <option value="empty">Selecione um fornecedor</option>
                        @foreach($fornecedores as $fornecedor)
                            @if($peca->id_fornecedor == $fornecedor->id)
                                <option value="{{ $fornecedor->id }}" selected>{{ $fornecedor->nome }}</option>
                            @else
                                <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="estoqueSelect">Estoque</label>
                    <select name="id_estoque" class="form-control" id="estoqueSelect">
                        <option value="empty">Selecione um estoque</option>
                        @foreach($estoques as $estoque)
                            @if($peca->id_estoque == $estoque->id)
                                <option value="{{ $estoque->id }}" selected>{{ $estoque->nome }}</option>
                            @else
                                <option value="{{ $estoque->id }}">{{ $estoque->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="text">Marca</label>
                    <input type="text" class="form-control" name="marca" placeholder="Marca" value="{{ $peca->marca }}">
                </div>
                <div class="form-group">
                    <label for="text">Valor</label>
                    <input type="text" class="form-control" name="valor" placeholder="Valor" value="{{ $peca->valor }}">
                </div>
                <button class="btn btn-info">Editar</button>
            </form>
        </div>
    </div>
@endsection
