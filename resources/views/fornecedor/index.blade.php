@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Fornecedores</h1>
        <p>
            <a class="btn btn-info" href="{{route('fornecedor.create')}}">Adicionar</a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Endereço</th>
                    <th>Contato</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fornecedores as $fornecedor)
                    <tr>
                        <th><a href="{{ route('fornecedor.show', $fornecedor->id  ) }}">
                                {{ $fornecedor->id }}
                            </a>
                        </th>

                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->cidade }}</td>
                        <td>{{ $fornecedor->endereco }}</td>
                        <td>{{ $fornecedor->contato }}</td>



                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
