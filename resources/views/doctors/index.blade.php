@extends('layouts.app')
@section('content')
    <h1>doctor.index</h1>
    

    @foreach($data as $item)

    <h2> {{$item->name}} {{$item->surname}} </h2>

    
        
    @endforeach

@endsection