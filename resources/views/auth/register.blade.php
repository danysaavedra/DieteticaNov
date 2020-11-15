@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="background-color: #597aa6;
                  color: white;" class="card-header"><h4>{{ __('- REGISTRATE -') }}</h4></div>

                <div class="card-body">
                    <form name="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name" class="col-form-label text-md-left">{{ __('Nombre *') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname" class="col-form-label text-md-left">{{ __('Apellido *') }}</label>
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-left">{{ __('E-Mail *') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname" class="col-form-label text-md-left">{{ __('Domicilio *') }}</label>
                                <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" autocomplete="domicilio" autofocus>

                                @error('domicilio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nro" class="col-form-label text-md-left">{{ __('Nro') }}</label>
                                <input id="nro" type="number" class="form-control @error('nro') is-invalid @enderror" name="nro" value="{{ old('nro') }}" autocomplete="nro" autofocus>

                                @error('nro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="dto" class="col-form-label text-md-left">{{ __('Dpto.') }}</label>
                                <input id="dto"  class="form-control @error('dto') is-invalid @enderror" name="dto" value="{{ old('dto') }}" autocomplete="dto" autofocus>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="piso" class="col-form-label text-md-left">{{ __('Piso.') }}</label>
                                <input id="piso" type="number" class="form-control @error('piso') is-invalid @enderror" name="piso" value="{{ old('piso') }}" autocomplete="piso" autofocus>

                                @error('piso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="localidad" class="col-form-label text-md-left">{{ __('Localidad *') }}</label>
                                <input id="localidad" type="text" class="form-control @error('localidad') is-invalid @enderror" name="localidad" value="{{ old('localidad') }}" autocomplete="localidad" autofocus>

                                @error('localidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="partido" class="col-form-label text-md-left">{{ __('Partido *') }}</label>
                                <input id="partido" type="text" class="form-control @error('partido') is-invalid @enderror" name="partido" value="{{ old('partido') }}" autocomplete="partido" autofocus>

                                @error('partido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="calle1" class="col-form-label text-md-left">{{ __('Entre calle 1 *') }}</label>
                                <input id="calle1" type="text" class="form-control @error('calle1') is-invalid @enderror" name="calle1" value="{{ old('calle1') }}" autocomplete="calle1" autofocus>

                                @error('calle1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="calle2" class="col-form-label text-md-left">{{ __('Entre Calle 2 *') }}</label>
                                <input id="calle2" type="text" class="form-control @error('calle2') is-invalid @enderror" name="calle2" value="{{ old('calle2') }}" autocomplete="calle2" autofocus>

                                @error('calle2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel1" class="col-form-label text-md-left">{{ __('teléfono 1 *') }}</label>
                                <input id="tel1" type="number" class="form-control @error('tel1') is-invalid @enderror" name="tel1" value="{{ old('tel1') }}" autocomplete="tel1" autofocus>

                                @error('tel1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel2" class="col-form-label text-md-left">{{ __('teléfono 2 *') }}</label>
                                <input id="tel2" type="number" class="form-control @error('tel2') is-invalid @enderror" name="tel2" value="{{ old('tel2') }}" autocomplete="tel2" autofocus>

                                @error('tel2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-left">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password-confirm" class="col-form-label text-md-left">{{ __('Confirmar contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                              <label for="foto">Subir imagen:</label>

                              <input type="file" id="foto" name="foto" class="form-control @error('foto') is-invalid @enderror">
                              @error('foto')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Registrarme') }}
                                </button>


                            </div>
                        </div>

                     <!--   <div class="col-12">
                            <div class="col-sm-6">
                                <a href="/login/facebook" class="btn btn-info">Ingresar con Facebook</a>
                            </div>
                        </div>
                    -->
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
