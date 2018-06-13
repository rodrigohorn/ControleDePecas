@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Peças</h1>
        <div class="table-responsive">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('message.index') }}">Peças</a></li>
                <li class="breadcrumb-item active">Relatório</li>
            </ol>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>

                    <th>Quantidade de peças</th>
                </tr>
                </thead>
                <tbody>
                @foreach($relatorio as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->count }}</td>
                    </tr>
                @endforeach
                </tbody>
                <div align="center">
                    {!! $relatorio->links() !!}
                </div>
            </table>
        </div>
    </div>

@endsection
