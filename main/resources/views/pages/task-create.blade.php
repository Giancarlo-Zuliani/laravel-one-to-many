@extends('layouts.main-layout')

@section('content')

    <main>

        <br>

        <form action="{{ route('task-store') }}" method="post">

            @csrf
            @method("POST")

            <label for="title">Titolo</label>
            <input type="text" name="title">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>

            <label for="description">Descrizione</label>
            <input type="text" name="description">

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>

            <label for="priority">Priorità</label>
            <input type="text" name="priority">

            @error('priority')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <br>

            <label for="employee_id">Dipendente</label>
            <select name="employee_id">
                @foreach ($employees as $employee)
                    <option value="{{ $employee -> id }}">{{ $employee -> name }} {{ $employee -> lastname }}</option>
                @endforeach
            </select>

            <br><br>

            <label for="typologies[]">Tipologie</label> <br>

            @foreach ($typologies as $typology)
                <input name="typologies[]" type="checkbox" value="{{ $typology -> id }}"> {{ $typology -> name }} <br>
            @endforeach

            <br><br>

            <input type="submit" value="SALVA">

        </form>

        <br>

    </main>
    
@endsection