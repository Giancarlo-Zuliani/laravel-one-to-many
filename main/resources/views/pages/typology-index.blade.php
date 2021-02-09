@extends('layouts.main-layout')
@section('content')
@foreach($typo as $t)
    <h5>{{$t-> name}}</h5>
    @endforeach
@endsection