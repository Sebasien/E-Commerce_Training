@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verification de votre email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Le mail a bien été envoyé.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, verifier le lien envoyé a votre adresse.') }}
                    {{ __('Si vous n\'avez rien recus') }}, <a href="{{ route('verification.resend') }}">{{ __('cliquer ici pour une autre demande') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
