@extends('layouts.admin')

@section('content')


<div class="container">
    <div class="row justify-content-center">

        <div class="card mb-3 col-10 col-md-8">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{$doctor->photo}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title"> {{$doctor->name}} {{$doctor->surname}}</h3>
        
                  {{-- <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">e-mail:</li>
                    <li class="list-group-item">{{$doctor->email}}</li>
                  </ul>
                  <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">numero:</li>
                    <li class="list-group-item">{{$doctor->number}}</li>
                  </ul>
                  <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">indirizzo:</li>
                    <li class="list-group-item">{{$doctor->address}}, {{$doctor->city}}</li>
                  </ul>
                  <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">prestazioni:</li>
                    <li class="list-group-item">{{$doctor->medicalService}}</li>
                  </ul>
                  <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">curriculum:</li>
                    <li class="list-group-item">{{$doctor->curriculum}}</li>
                  </ul> --}}

                <table class="table">
                    <tbody>
                      <tr>
                        <td>email:</td>
                        <td>{{$doctor->email}}</td>
                      </tr>
                      <tr>
                        <td>numero:</td>
                        <td>{{$doctor->number}}</td>
                      </tr>
                      <tr>
                        <td>indirizzo:</td>
                        <td>{{$doctor->address}}, {{$doctor->city}}</td>
                      </tr>
                      <tr>
                        <td>prestazioni:</td>
                        <td>{{$doctor->medicalService}}</td>
                      </tr>
                      <tr>
                        <td>curriculum:</td>
                        <td>{{$doctor->curriculum}}</td>
                      </tr>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{route('doctors.edit')}}">Modifica</a>    
                </div>
              </div>
            </div>
          </div>

    </div>
</div>
  
@endsection
