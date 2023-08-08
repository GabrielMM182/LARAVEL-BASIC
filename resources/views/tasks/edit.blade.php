@extends('layouts.app')

@section('content')
    <h1>Editar Tarefa</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description" rows="3">{{ $task->description }}</textarea>

        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('tasks.index') }}">Voltar para a Lista</a>
@endsection
