@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Titre de la page ici')
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Nouveau produit</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('seller.home') }}">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Nouveau produit
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <a href="{{ route('seller.product.all-products') }}" class="btn btn-primary">Voir tous les produits</a>
        </div>
    </div>
</div>

<form action="{{route('seller.product.create-product')}}" method="POST" enctype="multipart/form-data" id="addProductForm" >
    @csrf
    <div class="row pd-10">
        <div class="col-md-8 mb-20">
            <div class="card-box height-100-p pd-20" style="position: relative">
                <div class="form-group">
                    <label for=""><b>Nom du produit :</b></label>
                    <input type="text" class="form-control" name="name" placeholder="Entrez le nom du produit">
                    <span class="text-danger error-text name_error"></span>
                </div>
                <div class="form-group">
                    <label for=""><b>Résumé du produit :</b></label>
                    <textarea  id="summary" class="form-control summernote" cols="30" rows="10"></textarea>
                    <span class="text-danger error-text summary_error"></span>
                </div>
                <div class="form-group">
                    <label for=""><b>Image du produit :</b><small>Doit être carrée et avoir une dimension maximale de (1080x1080)</small></label>
                    <input type="file" name="product_image" class="form-control">
                    <span class="text-danger error-text product_image_error"></span>
                </div>
                <div class="d-block mb-3" style="max-width: 250px;">
                  <img src="" class="img-thumbnail" id="image-preview" data-ijabo-default-img="">
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-20">
            <div class="card-box min-height-120px pd-20 mb-20">
                <div class="form-group">
                    <label for=""><b>Catégorie :</b></label>
                    <select name="category" id="category" class="form-control">
                        <option value="" selected>Non défini</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger error-text category_error"></span>
                </div>


            </div>
            <div class="card-box min-height-120px pd-20 mb-20">
                <div class="form-group">
                    <label for=""><b>Prix :</b><small>En dirhams marocains (Dhs)</small></label>
                    <input type="text" name="price" class="form-control" placeholder="Ex: 13.99">
                    <span class="text-danger error-text price_error"></span>
                </div>
                <div class="form-group">
                    <label for=""><b>Prix de comparaison :</b><small>Optionnel</small></label>
                    <input type="text" name="compare_price" class="form-control" placeholder="Ex: 19.99">
                    <span class="text-danger error-text compare_price_error"></span>
                </div>
            </div>
            <div class="card-box min-height-120px pd-20">
               <div class="form-gr oup">
                 <label for=""><b>Visibilité :</b></label>
                 <select name="visibility" id="" class="form-control">
                    <option value="1" selected>Publique</option>
                    <option value="0">Privé</option>
                 </select>
               </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Créer le produit</button>
    </div>
</form>

@endsection

@push('scripts')
    <script>
        //Preview selected product image
        $('input[type="file"][name="product_image"]').ijaboViewer({
            preview:'img#image-preview',
            imageShape:'square',
            allowedExtensions:['png','jpg','jpeg'],
            onErrorShape:function(message, element){
                alert(message);
            },
            onInvalidType:function(message, element){
                alert(message);
            },
            onSuccess:function(message, element){}
        });

        //SUBMIT PRODUCT FORM
        $('#addProductForm').on('submit', function(e){
           e.preventDefault();
           var summary = $('textarea.summernote').summernote('code');
           var form = this;
           var formdata = new FormData(form);
               formdata.append('summary',summary);

           $.ajax({
              url:$(form).attr('action'),
              method:$(form).attr('method'),
              data:formdata,
              processData:false,
              dataType:'json',
              contentType:false,
              beforeSend:function(){
                toastr.remove();                // but I have  aproblem with toastr
                $(form).find('span.error-text').text('');
              },
              success:function(response){
                  toastr.remove();
                  if( response.status == 1 ){
                    $(form)[0].reset();
                    $('textarea.summernote').summernote('code','');
                    $('select#subcategory').find('option').not(':first').remove();
                    $('img#image-preview').attr('src','');
                    toastr.success(response.msg);
                  }else{
                    toastr.error(response.msg);
                  }
              },
              error:function(response){
                toastr.remove();
                $.each( response.responseJSON.errors, function(prefix,val){
                    $(form).find('span.'+prefix+'_error').text(val[0]);
                } );
              }
           });
        });
    </script>

@endpush
