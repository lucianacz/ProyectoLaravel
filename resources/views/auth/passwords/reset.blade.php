@extends('layout')

@section('main')

<link rel="stylesheet" href="css/estiloscarga.css">

<main>
<section class="culturas">
  <div class="col-lg-6 col-md-8 col-10">
    <h4 style="color:grey;">OLVIDE CONTRASEÑA</h4>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                    {{!! csrf_field() !!}}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                            <br>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn boton btn-primary">
                                    {{ __('Enviar email') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</div>
</main>
@endsection
