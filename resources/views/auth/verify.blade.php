@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica la tua email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link di verifica è stato inviato al tuo indirizzo email.') }}
                        </div>
                    @endif

                    {{ __('Prima di procedere, controlla la tua casella di posta.') }}
                    {{ __('Se non hai ricevuto il link') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clicca qui per rinviare il link di verifica') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
