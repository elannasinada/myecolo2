@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Titre de la page ici')
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Mes produits</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('seller.home') }}">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Mes produits
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <a href="{{ route('seller.product.add-product') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Ajouter un nouveau produit</a>
        </div>
    </div>
</div>

@livewire('seller.products')

@endsection
@push('stylesheets')
    <style>
        .swal2-popup{
            font-size: .87em;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).on('click','a#deleteProductBtn', function(e){
             e.preventDefault();
             var url = "{{ route('seller.product.delete-product') }}";
             var token = "{{ csrf_token() }}";
             var product_id = $(this).data('id');
             swal.fire({
                title:'Êtes-vous sûr(e) ?',
                html:'Voulez-vous supprimer ce produit ?',
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Annuler',
                confirmButtonText:'Oui, Supprimer',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
             }).then(function(result){
                if( result.value ){
                    $.post(url,{ _token:token, product_id:product_id }, function(response){
                         toastr.remove();
                         if( response.status == 1 ){
                            Livewire.dispatch('refreshProductsList');
                            toastr.success(response.msg);
                         }else{
                            toastr.error(response.msg);
                         }
                    },'json');
                }
             });
        });
    </script>
@endpush
