@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Profil')
@section('content')

{{--
<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Profil</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('client.home') }}">Acceuil</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Profil
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div> --}}

@livewire('client.client-profile')

@endsection
@push('scripts')
    <script>
        $('input[type="file"][name="clientProfilePictureFile"][id="clientProfilePictureFile"]').ijaboCropTool({
          preview : '#clientProfilePicture',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP','QUIT'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{ route("client.change-profile-picture") }}',
          withCSRF:['_token','{{ csrf_token() }}'],
       });
    </script>
@endpush
