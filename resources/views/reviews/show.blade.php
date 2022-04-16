@extends('layouts.admin')
@section('content')
    <div class="container">
        <a href="{{route('reviews.index')}}" class="btn btn-success mb-4">Torna alle tue recensioni</a>
        <div class="card p-4">
            <h1>{{$review->name}}</h1>
            <span><strong>Voto :</strong> {{$review->vote}}</span>
            <p><strong>Recensione :</strong> {{$review->text}}</p>
        </div>
    </div>
    
@endsection