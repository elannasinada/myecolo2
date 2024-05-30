@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Réinitialiser le mot de passe')
@section('content')
<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Réinitialiser le mot de passe</h2>
    </div>
    <h6 class="mb-20" style="text-align: center">Entrez votre nouveau mot de passe, confirmez et soumettez</h6>
    <form action ="{{route('admin.reset-password-handler', ['token'=>request()->token])}}" method = "POST">
        @csrf
        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" placeholder="Nouveau mot de passe"
            name="new_password" value = "{{old('new_password')}}">
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
        </div>

        @error('new_password')
            <div class="d-block text-danger" style ="margin-top:-25px;margin-bottom=15px">{{ $message }}
        </div>
        @enderror

        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" placeholder="Confirmez le nouveau mot de passe"
            name = "new_password_confirmation" value = "{{old('new_password_confirmation')}}">
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
        </div>

        @error('new_password_confirmation')
            <div class="d-block text-danger" style ="margin-top:-25px;margin-bottom=15px">{{ $message }}
        </div>
        @enderror

        <div class="row align-items-center">
            <div class="col-5">
                <div class="input-group mb-0">
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Soumettre">

                    {{-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Soumettre</a> --}}
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
