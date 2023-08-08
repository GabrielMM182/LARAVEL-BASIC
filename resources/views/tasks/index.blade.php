@extends('layouts.app')

@section('content')
    <h1>Lista de Tarefas</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }}</li>
        @endforeach
    </ul>

    <a href="{{ route('tasks.create') }}">Nova Tarefa</a>
@endsection
