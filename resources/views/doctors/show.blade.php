{{-- @extends('') --}}
<div class="container">
    <div class="row">
        <div class="card">
            <img src="{{$doctor->photo}}" alt="">
            <h2>{{$doctor->name}} {{$doctor->surname}}</h2>
            <div class="info">
                <p>Email: {{$doctor->email}}</p>
                <p>Indirizzo: {{$doctor->address}}</p>
                <p>Città: {{$doctor->city}}</p>
                <p>Numero di Telefono: {{$doctor->number}}</p>
                <p>Servizi Medici: {{$doctor->medicalService}}</p>
            </div>

            <div class="CV">
                {{$doctor->curriculum}}
            </div>
        </div>
    </div>
</div>