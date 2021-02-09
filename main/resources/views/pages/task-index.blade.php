@extends('layouts.main-layout')

@section('content')
    @foreach($tsk as $t)

    <h5>{{$t-> title}}</h5>
    @endforeach
    @endsection