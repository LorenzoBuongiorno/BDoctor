@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        {{-- TITOLO --}}
        <h2 class="fw-bold text-white p-3 mt-2 mb-4" style="background-color:#ff6600b3;">I tuoi messaggi</h2>

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
                    <div class="col-md-3 col-sm-4 p-2 d-none d-sm-block text-secondary">
                        <small class="fst-italic">{{$message->created_at->format("d-m-Y H:i")}}</small>
                    </div>
                
                    {{-- BOTTONI --}}
                    <div class="col-3 ms-auto d-flex justify-content-end align-items-center">
                        {{-- <div class="p-2">
                            <button type="button" class="btn btn-info text-white">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div> --}}
                        <div class="p-2">
                            @include('partials.deleteBtn', [
                                'id' => $message->id,
                                'route' => 'messages.destroy',
                            ])
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
        {{-- <div class="d-flex justify-content-center">
            {!! $messages->links() !!}
        </div> --}}
    </div>
</div>
@endsection