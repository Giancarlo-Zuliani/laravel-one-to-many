@extends('layouts.main-layout')

@section('content')
    <form action="{{route('employee-store')}}" method="POST">
        @csrf
        @method('POST')
        
        <label for="name">Name : </label>
        <input type="text" name="name">
        <br>
        <label for="lastname">Last name : </label>
        <input type="text" name="lastname">
        <br>
        <label for="birth">Date of birth : </label>
        <input type="date" name="dateOfBirth">
        <br>
        <input type="submit" value="store">
    </form>
@endsection