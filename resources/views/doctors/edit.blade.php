@extends('layouts.app')

@section('content')

<Form action="{{ route('doctors.update', $doctor->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" value="{{$doctor->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-3">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>
    
                                <div class="col-md-6">
                                    <input id="surname" type="text" value="{{$doctor->surname}}" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
    
                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-3">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="address" type="text" value="{{$doctor->address}}" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
    
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
    
                                <div class="col-md-6">
                                    <input id="city" type="text" value="{{$doctor->city}}" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
    
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('choose your specialization') }}</label>
                                <div class="col-md-6">
                                    <select name="specialization" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Choose different Specialization</option>
                                        @foreach ($type as $element)
                                        <option value="{{ $element->id }}" @if (old('element_id')=== $element->id) selected @endIf>
                                            {{ $element->specialization }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('photo') }}</label>
    
                                <div class="col-md-6">
                                    <input id="photo" type="text" value="{{$doctor->photo}}" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" autocomplete="photo" autofocus>
    
                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('number') }}</label>
    
                                <div class="col-md-6">
                                    <input id="number" type="text" value="{{$doctor->number}}" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" autocomplete="number" autofocus>
    
                                    @error('number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="medicalService" class="col-md-4 col-form-label text-md-right">{{ __('medicalService') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="medicalService" type="text" value="{{$doctor->number}}" class="form-control @error('medicalService') is-invalid @enderror" name="medicalService" value="{{ old('medicalService') }}" autocomplete="medicalService" autofocus>
                                    
                                    @error('medicalService')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="curriculum" class="col-md-4 col-form-label text-md-right">{{ __('curriculum') }}</label>
        
                                    <div class="col-md-6">
                                        <textarea name="curriculum" rows="8" value="{{$doctor->curriculum}}" class="form-control dark-theme 
                                            @error('curriculum') is-invalid @enderror"
                                            placeholder="Inizia a scrivere qualcosa...">
                                            {{ old('curriculum') }}
                                        </textarea>          
                                        @error('curriculum')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('edit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Form>

@endsection