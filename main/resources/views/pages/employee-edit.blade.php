@extends('layouts.main-layout')


@section('content')

    <main>

        <form action="{{ route('employee-update', $employee -> id ) }}" method="post">

            @csrf
            @method("POST")

            <br>
            <label for="name">Nome</label>
            <input name="name" type="text" value="{{$employee -> name }}">
            
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>
            <label for="lastname">Cognome</label>
            <input name="lastname" type="text" value="{{$employee -> lastname }}">
            
            @error('lastname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror         

            <br>
            <label for="dateOfBirth">Data di nascita</label>
            <input name="dateOfBirth" type="date" value="{{$employee -> dateOfBirth }}">
            
            @error('dateOfBirth')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>

            <input type="submit" value="SALVA">

            <br><br>
            
        </form>

    </main>
    
@endsection