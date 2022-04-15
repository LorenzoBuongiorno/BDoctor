@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex">
              Modifica dati profilo
          </div>

          <div class="card-body">

            <form action="{{ route('doctors.update', $doctor->id) }}" method="post">
              @csrf
              @method("patch")

              <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                  placeholder="Inserisci il nome" value="{{ old('name', $doctor->name) }}" required>
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label>Cognome</label>
                <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror"
                  placeholder="Inserisci il cognome" value="{{ old('name', $doctor->surname) }}" required>
                @error('surname')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              {{-- <div class="form-group row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('choose your specialization') }}</label>
                <div class="col-md-6">
                    <select name="specialization" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>{{old('element_id', $doctor->specialization)}}</option>
                        @foreach ($type as $element)
                        <option value="{{ $element->id }}" @if (old('element_id')=== $element->id) selected @endIf>
                            {{ $element->specialization }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div> --}}

              <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                  placeholder="Inserisci l'email" value="{{ old('email', $doctor->email) }}" required>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label>Telefono</label>
                <input type="text" name="number" class="form-control @error('number') is-invalid @enderror"
                  placeholder="Numero di telefono" value="{{ old('number', $doctor->number ?? null) }}" >
                @error('number')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label>Indirizzo</label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                  placeholder="Inserisci l'indirizzo"
                  value="{{ old('address', $doctor->address ?? null) }}">
                @error('address')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label>Città</label>
                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"
                  placeholder="Inserisci la città"
                  value="{{ old('city', $doctor->city ?? null) }}">
                @error('city')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label>Foto profilo</label>
                <input type="text" name="photo" class="form-control @error('photo') is-invalid @enderror"
                  placeholder="Inserisci URL della foto"
                  value="{{ old('photo', $doctor->photo ?? null) }}">
                @error('photo')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              
              <div class="mb-3">
                <label>Prestazioni</label>
                <input type="text" name="medicalService" class="form-control @error('medicalService') is-invalid @enderror"
                  placeholder="Inserisci le prestazioni"
                  value="{{ old('medicalService', $doctor->medicalService ?? null) }}">
                @error('medicalService')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>


              <div class="form-group row mb-3">
                <label for="curriculum" class="col-md-4 col-form-label text-md-right">{{ __('curriculum') }}</label>

                <div class="col-md-6">
                    <textarea name="curriculum" rows="8" class="form-control dark-theme 
                        @error('curriculum') is-invalid @enderror">
                        {{ old('curriculum', $doctor->curriculum) }}
                    </textarea>          
                    @error('curriculum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



              <div class="form-group">
                <a href="{{ route('doctors.show', $doctor->id) }}" class="btn orange">Annulla</a>
                <button type="submit" class="btn btn-primary">Salva</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection