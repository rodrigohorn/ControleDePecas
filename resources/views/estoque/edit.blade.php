@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Estoques</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('estoque.index') }}">Estoques</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('estoque.update', $estoque) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $estoque->nome }}">
                </div>
                </div>
                <div class="form-group">
                    <label for="text">Cidade</label>
                    <input type="text" class="form-control" name="cidade" placeholder="Cidade" value="{{ $estoque->cidade }}">
                </div>
                <div class="form-group">
                    <label for="text">Endereço</label>
                    <input type="text" class="form-control" name="endereco" placeholder="Endereco" value="{{ $estoque->endereco }}">
                </div>
                <button class="btn btn-info">Salvar</button>
            </form>
        </div>
    </div>
@endsection