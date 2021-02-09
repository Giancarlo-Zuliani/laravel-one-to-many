@extends('layouts.main-layout')


@section('content')

    <main>

        <form action="{{ route('task-update', $task -> id) }}" method="post">

            @csrf
            @method("POST")

            <br>
            <label for="title">Titolo</label>
            <input name="title" type="text" value="{{$task -> title }}">
            
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>
            <label for="description">Descrizione</label>
            <input name="description" type="text" value="{{$task -> description }}">
            
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>
            <label for="priority">Priorità</label>
            <input name="priority" type="number" value="{{$task -> priority }}">
            
            @error('priority')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <br>

            <label for="employee_id">Dipendente</label>
            <select name="employee_id">

                @foreach ($employees as $employee)

                    <option value="{{ $employee -> id }}"
                        @if ($task -> employee -> id == $employee -> id)
                            selected                        
                        @endif
                    >
                        {{ $employee -> name }} {{ $employee -> lastname }}
                    </option>

                @endforeach

            </select>

            <br>

            <label for="typologies[]">Tipologie</label> <br>

            @foreach ($typologies as $typology)

                <input name="typologies[]" type="checkbox" value="{{ $typology -> id }}"

                @foreach ($task -> typologies as $task_typology)
                        @if ($task_typology -> id == $typology -> id)
                            checked
                        @endif
                    @endforeach

                > 
                    {{ $typology -> name }}
                     
                <br>
            @endforeach

            @error('typologies')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>

            <br>

            <input type="submit" value="SALVA">

            <br><br>
            
        </form>

    </main>
    
@endsection