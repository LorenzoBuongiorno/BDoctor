@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        {{-- TITOLO --}}
        <h2 class="fw-bold text-white p-3 mt-2 mb-4" style="background-color:#ff6600b3;">Le tue recensioni</h2>

        @foreach($reviews as $key => $value)
        <div class="card mb-4 p-4">
            <div class="d-flex justify-content-between">
                <h2>Paziente: {{$value->name}}</h2>
                <a class="btn btn-primary d-flex align-items-center" href="{{route('reviews.show', $value->id )}}">Maggiori informazioni</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection