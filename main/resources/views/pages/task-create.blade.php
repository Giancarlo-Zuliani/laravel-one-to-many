@extends('layouts.main-layout')

@section('content')
    <form action="{{route('task-store')}}" method="post">
        @csrf
        @method('POST')
        <label for="title" name="title">Title : </label>
        <input type="text" name="title">
        <br>
        <label for="description">description : </label>
        <input type="text" name="description">
        <br>
        <label for="priority">Priority : </label>
        <select name="priority">
            @for($i = 1 ; $i <= 5 ; $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
        <br>
        <label for="employee_id">Employee : </label>
        <select name="employee_id">
            @foreach($emp as $e)
            <option value="{{$e -> id}}"> {{$e -> name}}  {{$e -> lastname}}</option>
            @endforeach
        </select>
        <label for="typologies[]">Typologies : </label>
        <br>
        @foreach ($typo as $t)
        <input type="checkbox" name="typologies[]" value="{{$t -> id}}"> {{ $t-> name }} <br>
        @endforeach
        <input type="submit" value="Submit"> 
    </form>
    @endsection