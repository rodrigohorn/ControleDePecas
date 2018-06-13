@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Vendedores</h1>
        <p>
            <a class="btn btn-info" href="{{route('vendedor.create')}}">Adicionar</a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Fornecedor</th>
                    <th>Contato</th>

                </tr>
                </thead>
                <tbody>
                @foreach($vendedor as $vendedor)
                    <tr>
                        <th><a href="{{ route('vendedor.show', $vendedor->id  ) }}">
                                {{ $vendedor->id }}
                            </a>
                        </th>

                        <td>{{ $vendedor->nome }}</td>
                        <td>{{ $vendedor->id_fornecedor }}</td>
                        <td>{{ $vendedor->contato}}</td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection