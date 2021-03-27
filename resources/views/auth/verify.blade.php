@extends('layouts.navFootHomeandVerify')

@section('contenido')
<div class="container-fluid vermail">
    <div class="row justify-content-center">
        <div class="col-md-8 vermail-caja">
            <div class="card">
                <h4>{{ __('Verifique su dirección de correo electrónico') }}</h4>
                <hr>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('
Antes de continuar, consulte su correo electrónico para ver si hay un enlace de verificación.') }}
                    {{ __('Si no recibió el correo electrónico') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('
haga clic aquí para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
