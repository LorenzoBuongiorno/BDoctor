@extends('layouts.app')
@section('content')


    
    <h1> doctor.edit </h1>

    <h3>{{$doctor->name}} {{ $doctor->surname }}</h3>
    <h4>id: {{$doctor->id}}</h4>

    @dd($doctor)
    
    
@endsection