@extends('layouts.app')
@section('content')

    <h1>ciaoooo</h1>
    @foreach ($doctors as $item => $value)
        {{$value->id}}
    @endforeach
    {{-- @dd($doctors) --}}
@endsection