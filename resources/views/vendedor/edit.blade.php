@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Vendedores</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('vendedor.index') }}">Vendedores</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('vendedor.update', $vendedor) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $vendedor->nome }}">
                </div>

                <div class="form-group">
                    <label for="estoqueSelect">Fornecedor</label>
                    <select name="id_estoque" class="form-control" id="estoqueSelect">
                        <option value="empty">Selecione um fornecedor</option>
                        @foreach($fornecedores as $fornecedor)
                            @if($vendedor->id_fornecedor == $fornecedor->id)
                                <option value="{{ $fornecedor->id }}" selected>{{ $fornecedor->nome }}</option>
                            @else
                                <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="text">Contato</label>
                        <input type="text" class="form-control" name="contato" placeholder="Contato" value="{{ $vendedor->contato }}">
                    </div
                </div>


                <button class="btn btn-info">Salvar</button>
            </form>
        </div>
    </div>
@endsection
