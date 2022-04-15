@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">

            {{-- <img src="{{$profile->photo}}" alt=""> --}}
            <h2>{{$profile->name}} {{$profile->surname}}</h2>
            <div class="info">
                <p>Email: {{$profile->email}}</p>
                <p>Indirizzo: {{$profile->address}}</p>
                <p>Città: {{$profile->city}}</p>
                <p>Numero di Telefono: {{$profile->number}}</p>
                <p>Servizi Medici: {{$profile->medicalService}}</p>
            </div>

            <div class="CV">
                {{$profile->curriculum}}
            </div>
        </div>
    </div>
</div>
@endsection
