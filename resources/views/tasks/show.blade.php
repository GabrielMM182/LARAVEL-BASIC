@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>

    <p>{{ $task->description }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}">Editar</a>

    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Excluir</button>
    </form>

    <a href="{{ route('tasks.index') }}">Voltar para a Lista</a>
@endsection
