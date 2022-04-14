@extends('layouts.app')
    @section('content')
    {{-- <h1>doctor.index</h1>
    

    @foreach($data as $item)

    <h2> {{$item->name}} {{$item->surname}} </h2>

     --}}  
    {{-- @endforeach --}}


<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center p-4">
            <div class="col-6 text-center">
                <h1 class="mb-4">Advance Search</h1>
                <input type="text" class="col-12">
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="mt-4 col-9">
            @foreach($data as $item)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{$item->photo}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">{{$item->curriculum}}</p>
                        <p class="card-text"><small class="text-muted">{{$item->updated_at}}</small></p>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection