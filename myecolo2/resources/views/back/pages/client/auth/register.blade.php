@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Inscription')
@section('content')

   <div class="login-box bg-white box-shadow border-radius-10">
      <div class="login-title">
            <h2 class="text-center text-primary">Inscription Client</h2>
      </div>
      <form action="{{ route('client.create') }}" method="POST">
        @csrf
        <x-alert.form-alert/>

        <div class="form-group">
            <label for="name">Nom complet</label>
            <input type="text" class="form-control" id="name" name="name"
            placeholder="Entrez votre prénom" value="{{ old('name') }}">
            @error('name')
               <span class="text-danger ml-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="username" name="username"
            placeholder="Entrez votre nom" value="{{ old('username') }}">
            @error('username')
               <span class="text-danger ml-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" class="form-control" id="email" name="email"
            placeholder="Entrez votre adresse email" value="{{ old('email') }}">
            @error('email')
               <span class="text-danger ml-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" class="form-control" id="password" name="password"
            placeholder="Entrez votre mot de passe">
            @error('password')
               <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmer le mot de passe:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
            placeholder="Confirmer votre mot de passe">
            @error('password_confirmation')
               <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="input-group mb-0">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Inscription</button>
                </div>
                <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373" style="color:rgb(112,115,115);">Ou</div>
                <div class="input-group mb-0">
                    <a href="{{ route('client.login') }}" class="btn btn-outline-primary btn-lg btn-block">Se connecter</a>
                </div>
            </div>
        </div>
      </form>
   </div>

@endsection
