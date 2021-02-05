@extends('layouts.main-layout')

@section('content')
    <form action="{{route('update-task', $task -> id)}}" method="POST">
        @csrf
     @method('post')
        <label for="title">title</label>
        <input type="text" name="title" value="{{$task -> title}}">
        <label for="description">description</label>
        <input type="text" name="description" value="{{$task -> description}}">
        <label for="priority">priority</label>
        <input type="number" name="priority" value="{{ $task -> priority}}">
        <label for="employee">employee</label>
        <select name="employee_id" id="">
            <option value="{{$task -> employee_id}}">{{$thisemp -> name}}</option>
            @foreach($empl as $emp)
            <option value="{{$emp -> id}}">{{$emp -> name}}</option>
            @endforeach
        </select>
        <button type="submit">submit</button>
    </form>

@endsection