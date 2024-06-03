@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Ajout Catégorie')
@section('content')
    <div class="row">
        <div class="col-md-12">
                <div class="pd-20 card-box mb-30">
                        <div class="clearfix">
                                <div class="pull-left">
                                        <h4 class="text-dark">Ajouter une catégorie</h4>
                                </div>
                                <div class="pull-right">
                                        <a href="{{ route('admin.manage-categories') }}" class="btn btn-primary btn-sm">
                                         <i class="ion-arrow-left-a"></i> Retour à la liste des catégories
                                        </a>
                                </div>
                        </div>
                        <hr>
                        <form action="{{ route('admin.manage-categories.store-category') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                                @csrf
                                @if (Session::get('success'))
                                        <div class="alert alert-success">
                                                <strong><i class="dw dw-checked"></i></strong>
                                                {!! Session::get('success') !!}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                @endif
                                @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                        <strong><i class="dw dw-checked"></i></strong>
                                        {!! Session::get('fail') !!}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        @endif
                        <div class="row">
                                <div class="col-md-7">
                                        <div class="form-group">
                                                <label for="">Nom Catégorie</label>
                                                <input type="text" class="form-control" name="category_name" placeholder="Entrez le nom de la catégorie" value="{{ old('category_name') }}">
                                                @error('category_name')
                                                        <span class="text-danger ml-2">
                                                                {{ $message }}
                                                        </span>
                                                @enderror
                                        </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary">CRÉER</button>
                        </form>
                </div>
        </div>
    </div>
@endsection
