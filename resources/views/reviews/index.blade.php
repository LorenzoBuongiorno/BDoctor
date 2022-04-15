@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Le tue recensioni</h1>
    @foreach($reviews as $key => $value)
    <div class="card mb-4 p-4">
        <div class="d-flex justify-content-between">
            <h2>Paziente: {{$value->name}}</h2>
            <a class="btn btn-primary" href="{{route('reviews.show', $reviews->first()->id )}}">Maggiori informazioni</a>
        </div>
        {{-- <span>Voto: {{$value->vote}}</span>
        <p>Recensione: {{$value->text}}</p> --}}
    </div>
    @endforeach
</div>
@endsection