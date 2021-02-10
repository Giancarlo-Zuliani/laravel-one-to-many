@extends('layouts.main-layout')
@section('content')
<form action="" method="POST">
    @method('POST')
    <label for="name">Name : </label>
    <input type="text" name="name">
    <br>
    <label for="description">Description : </label>
    <input type="text" name="description">
    <input type="submit" value="Submit">
</form>
@endsection