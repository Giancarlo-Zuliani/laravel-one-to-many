@extends('layouts.main-layout')

@section('content')

    <main>

        <h1>DETTAGLIO DIPENDENTE CON TASKS ASSOCIATE</h1>

        <h3>
            ID: [{{ $employee -> id}}] <br>
            NOME: {{ $employee -> name }} <br>
            COGNOME: {{ $employee -> lastname }} <br>
            DATA DI NASCITA: {{ date("d-m-Y", strtotime($employee -> dateOfBirth))}} {{-- TEST CAMBIO FORMATO DATA --}}
            <br><br>
            ELENCO TASKS:
            <ul>
                @if (count($employee -> tasks) == 0)

                    <span>NON CI SONO TASKS PRESENTI</span>
                
                @else

                    @foreach ($employee -> tasks as $task)
                        <li> 
                            [ID: {{ $task -> id }}] {{ $task -> title }} 
                            <br>
                            Tipologie: 
                            @foreach ($task -> typologies as $typology)
                                {{ $typology  -> name}}
                            @endforeach
                        </li>
                    @endforeach

                @endif
            </ul>
        </h3>

        <a href="{{ route('employees-index')}}">Go back</a>
        
    </main>
    
@endsection


