@extends('back.layout.pages-layout')

@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Profil')
@section('content')

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
