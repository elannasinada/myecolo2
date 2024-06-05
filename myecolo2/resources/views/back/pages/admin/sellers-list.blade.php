@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Gestion des vendeurs')
@section('content')

@livewire('admin-sellers-list')

@endsection
