@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Mensagens</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('message.index') }}">Mensagens</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('message.update', $message) }}">
                {{ csrf_field() }}

                {{ method_field('PUT') }}
                <div class="form-group  {{ $errors->has('text') ? 'has-error' : '' }}">
                    <label for="text">Mensagem</label>
                    <input type="text" name="text" class="form-control" placeholder="Texto"   value="{{ $message->text }}">

                    @if($errors->has('text'))
                        <span class="help-block">
                            <strong>{{ $errors->first('text') }}</strong>
                        </span>
                    @endif

                </div>
                <button class="btn btn-info">Enviar</button>
            </form>
        </div>
    </div>
@endsection
