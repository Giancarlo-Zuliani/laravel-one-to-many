@extends('layouts.main-layout')


@section('content')

    <main>

        <form action="{{ route('typology-store') }}" method="post">

            @csrf
            @method("POST")

            <br>
            <label for="name">Nome</label>
            <input name="name" type="text">

            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>
            <label for="description">Descrizione</label>
            <input name="description" type="text">

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>

            <label for="tasks[]">Tasks:</label>

            <br>

            @foreach ($tasks as $task)
                <input type="checkbox" name="tasks[]" value="{{ $task -> id }}"> {{ $task -> title }} <br>
            @endforeach

            <br>

            <input type="submit" value="SALVA">

            <br><br>
            
        </form>

    </main>
    
@endsection