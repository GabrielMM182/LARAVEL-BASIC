@extends('layouts.app')

@section('content')
    <h1>Nova Tarefa</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description" rows="3"></textarea>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('tasks.index') }}">Voltar para a Lista</a>
@endsection
