@extends('layouts.main-layout')


@section('content')

    <main>

        <h2>EDIT TYPOLOGY</h2>

        <form action="{{ route('typology-update', $typology -> id) }}" method="post">

            @csrf
            @method("POST")

            <br>
            <label for="name">Nome</label>
            <input name="name" type="text" value="{{$typology -> name }}">
            
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>
            <label for="description">Descrizione</label>
            <input name="description" type="text" value="{{$typology -> description }}">

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>
            <label for="tasks[]">Tasks</label> <br>

            @foreach ($tasks as $task)
                <input type="checkbox" name="tasks[]" value="{{ $task -> id }}"
                
                    @foreach ($task -> typologies as $task_typology)

                        @if ($task_typology -> id == $typology -> id)
                            checked
                        @endif

                    @endforeach

                > 

                    {{ $task -> title }}     
                
                    <br>
            @endforeach

            <input type="submit" value="SALVA">

            <br><br>
            
        </form>

    </main>
    
@endsection