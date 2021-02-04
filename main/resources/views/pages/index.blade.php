@extends('layouts.main-layout')

@section('content')

   @foreach($emp as $e)
   <a href="{{route('show' , $e -> id)}}">
        <h1>{{$e -> name}}</h1>
    </a>

        @foreach($e -> tasks as $t)
            
            <h3>{{$t -> title}}</h3>

        @endforeach
        
    @endforeach
@endsection
