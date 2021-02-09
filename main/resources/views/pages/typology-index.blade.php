@extends('layouts.main-layout')
@section('content')
@foreach($typo as $t)
    <a href="{{route('typology-show' , $t -> id)}}">{{$t-> name}}</a>
    <br>
    @endforeach
@endsection