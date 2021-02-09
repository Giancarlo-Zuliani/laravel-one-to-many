@extends('layouts.main-layout')
@section('content')
    <ul>
        <li>{{$emp -> name}}</li>
        <li>{{$emp -> lastname}}</li>
        <li>{{$emp -> dateOfBirth}}</li>
    </ul>
@endsection