@extends('layouts.main-layout')

@section('content')

    <main>

        <h1>ELENCO DIPENDENTI:</h1>
        <a href="{{ route('employee-create') }}">CREA EMPLOYEE</a>
        <ul>

            @foreach ($emp as $employee)
                <li>
                    <a href="{{ route('employee-show', $employee -> id) }}">
                        {{ $employee -> name }}
                    </a>

                    <a href="{{ route('employee-edit', $employee -> id) }}">EDIT</a>

                </li>
            @endforeach

        </ul>

    </main>
    
@endsection