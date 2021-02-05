@extends('layouts.main-layout')

@section('content')
    <form action="{{route('store-task')}}" method="POST">
        @csrf
     @method('post')
        <label for="title">title</label>
        <input type="text" name="title" placeholder="title">
        <label for="description">description</label>
        <input type="text" name="description" placeholder="description">
        <label for="priority">priority</label>
        <input type="number" name="priority">
        <label for="employee">employee</label>
        <select name="employee_id" id="">
            @foreach($empl as $emp)
            <option value="{{$emp -> id}}">{{$emp -> name}}</option>
            @endforeach
        </select>
        <button type="submit">submit</button>
    </form>

@endsection