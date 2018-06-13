@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Peças</h1>
        <p>
            <a class="btn btn-info" href="{{route('message.create')}}">Adicionar</a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Usuario</th>

                    <th>Peça</th>

                    <th>Ações</th>

                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <th><a href="{{ route('message.show', $message->id  ) }}">
                            {{ $message->id }}
                            </a>
                        </th>

                        <td>{{ $message->user->name }}</td>
                        <td>{{ $message->text }}</td>

                        <td>
                            @if($message->user_id == \Auth::user()->id)
                                <form action="{{ route('message.destroy', $message->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" onclick="return confirm('Deseja mesmo excluir?')">
                                        Apagar
                                    </button>
                                </form>
                                <form action="{{ route('message.edit', $message->id) }}" method="POST">

                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="GET">
                                    <button class="btn btn-info">
                                        Editar
                                    </button>
                                </form>
                            @endif
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <div align="center">
                {!! $messages->links() !!}
            </div>
        </div>
    </div>

@endsection
