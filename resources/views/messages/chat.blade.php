@extends('layouts.admin')

@section('content')
<div class="container mt-2 py-4">
        
    <div class="d-flex" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.6);">
        <aside id="sidebar" class="col-md-4 d-none d-md-block p-4">
            <ul class="list-group">

                {{-- TITOLO --}}
                <div class="d-flex justify-content-center pb-2">
                    <div class="col-12">
                        <h2 style="color:#FF6700">I tuoi messaggi</h2>
                    </div>
                </div>

                {{-- INPUT SEARCH --}}
                {{-- <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" name="search" id="search" class="form-control" placeholder="Cerca contatto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div> --}}

                @foreach ($messages as $message)
                    <li class="list-group-item d-flex align-items-center">
                        <span class="col-lg-6 col-md-12 fs-5" role="button">{{$message->name}}</span>
                        <span class="col-lg-6 d-none d-lg-block text-end text-secondary"
                            style="font-size: 10px;"
                        >
                            {{$message->created_at->format("d-m-Y H:i")}}
                        </span>
                    </li>

                @endforeach
            </ul>
        </aside>
    
        <main class="col-12 col-md-8 col-xl-8 bg-info">
            
        </main>
    </div>
</div>

<style>
#sidebar,
main {
    height: 80vh;
}
</style>

@endsection