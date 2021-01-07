@extends('layouts.navFootHomeandVerify')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DieteticaNov') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesión!') }}

                    <div class="verMas">
<a href="/"> <button type="button" class="btnon"> Ir al Home</button></a>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
