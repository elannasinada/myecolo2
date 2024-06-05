@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Gestion des clients')
@section('content')

@livewire('admin-clients-list')

@endsection
