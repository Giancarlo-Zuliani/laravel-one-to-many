@extends('layouts.main-layout')
@section('content')
    <ul>
        <li>{{$tsk -> title}}</li>
        <li>{{$tsk -> description}}</li>
        <li>{{$tsk -> priority}}</li>
    </ul>
@endsection