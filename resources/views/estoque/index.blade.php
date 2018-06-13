@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Estoque</h1>
        <p>
            <a class="btn btn-info" href="{{route('estoque.create')}}">Adicionar</a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Endereço</th>

                </tr>
                </thead>
                <tbody>
                @foreach($estoque as $estoque)
                    <tr>
                        <th><a href="{{ route('estoque.show', $estoque->id  ) }}">
                                {{ $estoque->id }}
                            </a>
                        </th>

                        <td>{{ $estoque->nome }}</td>
                        <td>{{ $estoque->cidade }}</td>
                        <td>{{ $estoque->endereco }}</td>



                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
