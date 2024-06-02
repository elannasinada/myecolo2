@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Modification mot de passe')
@section('content')

<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Modification mot de passe</h2>
    </div>
    <h6 class="mb-20">Entrez votre nouveau mot de passe, confirmez et soumettez</h6>
    <form action="{{ route('seller.reset-password-handler') }}" method="POST">
        @csrf
        <x-alert.form-alert/>
        <input type="hidden" name="token" value="{{ request()->token }}">
        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" placeholder="Nouveau mot de passe" name="new_password" value="{{ old('new_password') }}">
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
        </div>
        @error('new_password')
            <span class="text-danger" style="margin-top:-25px;margin-bottom:5px;">{{ $message }}</span>
        @enderror
        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" placeholder="Confirmez" name="confirm_new_password" value="{{ old('confirm_new_password') }}">
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
        </div>
        @error('confirm_new_password')
        <span class="text-danger" style="margin-top: -25px;margin-bottom:5px;">{{ $message }}</span>
    @enderror
        <div class="row align-items-center">
            <div class="col-5">
                <div class="input-group mb-0">

                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">


                </div>
            </div>
        </div>
    </form>
</div>

@endsection
