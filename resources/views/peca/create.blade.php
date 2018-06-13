@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Criar Peça</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('peca.index') }}">Peças</a></li>
            <li class="breadcrumb-item active">Criar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('peca.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="fornecedorSelect">Fornecedor</label>
                    <select name="id_fornecedor" class="form-control" id="fornecedorSelect">
                        <option value="empty">Selecione um fornecedor</option>
                        @foreach($fornecedores as $fornecedor)
                            <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="estoqueSelect">Estoque</label>
                    <select name="id_estoque" class="form-control" id="estoqueSelect">
                        <option value="empty">Selecione um estoque</option>
                        @foreach($estoques as $estoque)
                            <option value="{{ $estoque->id }}">{{ $estoque->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="text">Marca</label>
                    <input type="text" class="form-control" name="marca" placeholder="Marca">
                </div>
                <div class="form-group">
                    <label for="text">Valor</label>
                    <input type="text" class="form-control" name="valor" placeholder="Valor">
                </div>
                <button class="btn btn-info">Enviar</button>
            </form>
        </div>

    </div>
@endsection
