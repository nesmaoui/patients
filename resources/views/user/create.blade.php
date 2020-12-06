@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-success">
                <div class="card-header">{{ __('Créer un nouveau compte') }}</div>

                <div class="card-body">
                    <form action="{{ url('users')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="from-group row">
                            <label for="is_admin" class="col-md-4 col-form-label text-md-right">{{ __('Rôle *') }}</label>

                            <div class="col-md-6">
                                <div class="input-group-append">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_admin" id="0" value="0" checked="">
                                            <i class="far fa-user fa-2x"></i>Utilisateur &nbsp;&nbsp; &nbsp;&nbsp;
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_admin" id="1" value="1">
                                             <i class="fas fa-user-tie fa-2x"></i>&nbsp;&nbsp; Admin 
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
<br/>
                        <div class="from-group row">
                            <label for="is_admin" class="col-md-4 col-form-label text-md-right">{{ __('Type *') }}</label>

                            <div class="col-md-6">
                                <div class="input-group-append">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_med" id="0" value="0" checked="">
                                            <i class="fas fa-user-injured fa-2x"></i></i>Patient &nbsp;&nbsp; &nbsp;&nbsp;
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_med" id="1" value="1">
                                            <i class="fas fa-user-md fa-2x"></i>&nbsp;&nbsp;&nbsp; Medecin 
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br/>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom *') }}</label>

                            <div class="col-md-6">
                                <div class="input-group-append">
                                         <span class="input-group-text"><i class="fas fa-user"></i></span>
                                         <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email *') }}</label>

                            <div class="col-md-6">
                                    <div class="input-group-append">
                                            <span class="input-group-text"><i class="far fa-paper-plane"></i></span>  
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe *') }}</label>

                            <div class="col-md-6">
                                    <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation Mot de passe *') }}</label>

                            <div class="col-md-6">
                                    <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cin" class="col-md-4 col-form-label text-md-right">{{ __('CIN *') }}</label>

                            <div class="col-md-6">
                                <div class="input-group-append">
                                         <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                         <input id="cin" type="text" class="form-control{{ $errors->has('cin') ? ' is-invalid' : '' }}" name="cin" value="{{ old('cin') }}" required autofocus>
                                </div>
                                @if ($errors->has('cin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adr" class="col-md-4 col-form-label text-md-right">{{ __('Adresse *') }}</label>

                            <div class="col-md-6">
                                <div class="input-group-append">
                                         <span class="input-group-text"><i class="fas fa-home"></i></span>
                                         <textarea id="adr" type="text" class="form-control{{ $errors->has('adr') ? ' is-invalid' : '' }}" name="adr" value="{{ old('adr') }}" required autofocus></textarea>
                                </div>
                                @if ($errors->has('adr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="num" class="col-md-4 col-form-label text-md-right">{{ __('Telephone *') }}</label>

                            <div class="col-md-6">
                                <div class="input-group-append">
                                         <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                         <input id="num" type="text" class="form-control{{ $errors->has('num') ? ' is-invalid' : '' }}" name="num" value="{{ old('num') }}" pattern="[0-9]{10}" required autofocus>
                                </div>
                                @if ($errors->has('num'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('num') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="from-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sexe *') }}</label>

                            <div class="col-md-6">
                                <div class="input-group-append">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="sex" id="F" value="F" checked="">
                                            <i class="fas fa-female"></i> Femme &nbsp;&nbsp;
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="sex" id="M" value="M">
                                            <i class="fas fa-male"></i>Homme
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance *') }}</label>

                            <div class="col-md-6">
                                <div class="input-group-append">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    <input class="form-control" type="date" name="birth" id="example-date-input">
                                </div>
                            </div>
                        </div>
                        

                        <br/>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-warning">
                                        <i class="fas fa-sign-in-alt"></i> &nbsp;&nbsp;
                                    {{ __('Créer compte') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection