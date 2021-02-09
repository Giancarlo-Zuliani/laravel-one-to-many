@extends('layouts.main-layout')
@section('content')
    <ul>
        <li>{{$typo -> name}}</li>
        <li>{{$typo -> description}}</li>
    </ul>
@endsection