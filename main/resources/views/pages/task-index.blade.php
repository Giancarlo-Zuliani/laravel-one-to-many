@extends('layouts.main-layout')

@section('content')

    <main>

        <h1>ELENCO TASKS:</h1>
        
        <a href="{{ route('task-create') }}">CREA TASK</a>
        
        <ul>

            @foreach ($tasks as $task)
                <li>
                    <a href="{{ route('task-show', $task -> id ) }}">
                        {{ $task -> title }}
                    </a>

                    <a href="{{ route('task-edit', $task -> id )}}">EDIT</a>

                </li>
            @endforeach

        </ul>

    </main>
    
@endsection