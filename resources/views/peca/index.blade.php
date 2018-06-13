@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Peças</h1>
        <p>
            <a class="btn btn-info" href="{{route('peca.create')}}">Adicionar</a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Fornecedor</th>
                    <th>Estoque</th>
                    <th>Marca</th>
                    <th>Valor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pecas as $peca)
                    <tr>
                        <th><a href="{{ route('fornecedor.show', $peca->id  ) }}">
                                {{ $peca->id }}
                            </a>
                        </th>

                        <td>{{ $peca->nome }}</td>
                        <td>
                            @foreach($fornecedores as $fornecedor)
                                @if ($fornecedor->id == $peca->id_fornecedor)
                                    {{ $fornecedor->nome }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($estoques as $estoque)
                                @if ($estoque->id == $peca->id_estoque)
                                    {{ $estoque->nome }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $peca->marca }}</td>
                        <td>{{ $peca->valor }}</td>



                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
