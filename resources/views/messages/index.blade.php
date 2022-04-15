@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- INTESTAZIONE --}}
        <div class="d-flex justify-content-center p-4">
            <div class="col-12">
                <h1 class="mb-4" style="color:#FF6700">I MIEI MESSAGGI</h1>
            </div>
        </div>

        {{-- CORPO PAGINA --}}
        <div class="card-body">
            <ul class="list-group" style="border-radius: 20px">
              @foreach ($data as $message)
                <li class="list-group-item d-flex align-items-center" style="background-color:rgba(163, 206, 241, 0.5);">
                    <div class="col-3 px-2 py-3  fw-bold overflow-auto">
                        <div>{{ $message->name }}</div>
                    </div>
                    
                    <div class="col-3 px-2 overflow-auto" style="min-width:200px;">
                        <div>{{ $message->email }}</div>
                    </div>
                    
                    <div class="col-3 px-2">
                        <small class="fst-italic">{{ $message->created_at }}</small>
                    </div>
                
                    <div class="d-flex justify-content-end flex-grow-1">
                        <div class="px-2">
                            <button type="button" class="btn btn-info text-white">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                        <div class="px-2">
                            <button type="button" class="btn btn-danger text-white">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>
                </li>
              @endforeach
            </ul>
        </div>

        {{-- PAGINATION --}}
        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
    </div>
</div>
@endsection