@extends('layouts.admin')

@section('content')
<div class="container" style="font-family: Arial, Helvetica, sans-serif;">
    <div class="row">
        {{-- TITOLO --}}
        <div class="d-flex justify-content-center p-4">
            <div class="col-12">
                <h1 class="my-2" style="color:#FF6700">I MIEI MESSAGGI</h1>
            </div>
        </div>

        {{-- CORPO PAGINA --}}
        <div class="card-body">
            <ul class="list-group" style="border-radius: 20px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
              @foreach ($messages as $message)
                <li class="list-group-item d-flex align-items-center border-0" style="background-color:rgba(191, 219, 247, 0.4);">

                    {{-- name --}}
                    <div class="col-2 d-flex flex-grow-1 p-2 fw-bold overflow-auto" style="min-width:150px;">
                        <div>{{ $message->name }}</div>
                    </div>
                    
                    {{-- email --}}
                    {{-- visibile solo in schermo lg e xl --}}
                    <div class="col-md-3 p-2 d-none d-lg-block d-xl-block">
                        <div>{{ $message->email }}</div>
                    </div>

                    {{-- data --}}
                    {{-- nascosto solo in schermo xs --}}
                    <div class="col-md-3 col-sm-4 p-2 d-none d-sm-block">
                        <small class="fst-italic">{{ $message->created_at }}</small>
                    </div>
                
                    {{-- BOTTONI --}}
                    <div class="col-3 ms-auto d-flex justify-content-end align-items-center">
                        {{-- <div class="p-2">
                            <button type="button" class="btn btn-info text-white">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div> --}}
                        <div class="p-2">
                            <button type="button" class="btn btn-danger text-white">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>
                </li>
                
                
                {{-- CONTENUTO MESSAGGIO --}}
                <div class="p-4" name="message" rows="10" >
                    {{ $message->text }}
                </div>
                
              @endforeach
            </ul>
        </div>

        {{-- paginate() in MessageController--}}
        <div class="d-flex justify-content-center">
            {!! $messages->links() !!}
        </div>
    </div>
</div>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style> 