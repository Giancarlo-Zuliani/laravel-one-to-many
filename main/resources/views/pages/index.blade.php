@extends('layouts.main-layout')

@section('content')
    <a href="{{route('create-task')}}">create</a>

   @foreach($emp as $e)
   <a href="{{route('show' , $e -> id)}}">
        <h1>{{$e -> name}}</h1>
    </a>
    
    @foreach($e -> tasks as $t)
    
        <a href="{{route('edit-task' , $t -> id)}}">edit</a>
            <h3>{{$t -> title}}</h3>

        @endforeach
        
    @endforeach
@endsection
