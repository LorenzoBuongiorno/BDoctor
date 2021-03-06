@extends('layouts.admin')

@section('content')


<div class="container">
  <div class="row justify-content-center">
    {{-- TITOLO --}}
    <h2 class="fw-bold text-white p-3 mt-2 mb-4" style="background-color:#ff6600b3;">Il tuo profilo</h2>

    {{-- SHOW PROFILE --}}
    <div class="card mb-3 col-10 col-md-8">
      <div class="row g-0">
        <div class="col-md-4 d-flex align-self-center">
          <img src="{{ asset('storage/' . $doctor->photo) }}" class="img-fluid" alt="..." style="vertical-align:middle;">
        </div>

        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title"> {{$doctor->name}} {{$doctor->surname}}</h3>
  
            <table class="table">
              <tbody>
                <tr>
                  <td>specializzazioni:</td>
                  <td>
                    <ul class="list-group">
                      @foreach($specializations as $element)
                        @if ($doctor->specialization->contains($element))
                        <li class="">
                          {{$element->specialization}}
                        </li>
                        @endif
                      @endforeach
                      </ul>
                  </td>
                </tr>

                <tr>
                  <td>email:</td>
                  <td>{{$doctor->email}}</td>
                </tr>

                <tr>
                  <td>telefono:</td>
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
            <a class="btn btn-primary" href="{{route('doctors.edit', $doctor->id)}}">Modifica</a>    
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
  
@endsection
