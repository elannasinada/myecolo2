
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

		<!-- Site favicon -->

		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/style_assets/img/site/{{ get_settings()->site_favicon }}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />
        <link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
        <link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />
		<link rel="stylesheet" href="/extra-assets/ijabo/ijabo.min.css">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        @livewireStyles
        @stack('stylesheets')
	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="/">
						<img src="/style_assets/img/site/{{ get_settings()->site_logo }}" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>

                         @if ( !Route::is('admin.*') )

						 @if ( Route::is('seller.login') )
						      <li><a href="{{ route('seller.register') }}">S'inscrire</a></li>
						 @elseif ( Route::is('seller.register'))
						      <li><a href="{{ route('seller.login') }}">Se connecter</a></li>

                         @elseif ( Route::is('client.login') )
                                <li><a href="{{ route('client.register') }}">S'inscrire</a></li>
                         @elseif ( Route::is('client.register'))
                                <li><a href="{{ route('client.login') }}">Se connecter</a></li>

						 @endif

						@endif
					</ul>
				</div>
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="/style_assets/img/login-page.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
                        @yield('content')
					</div>
				</div>
			</div>
		</div>
		<!-- js -->
        <!-- Include ijaboCropTool JS -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/extra-assets/ijaboCropTool/ijaboCropTool.min.js"></script>
        <script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
        <script>
            if(navigiator.userAgent.indexOf("FireFox") != -1){
                history.pushState(null, null, document.URL);
                window.addEventListener('popstate', function() {
                history.pushState(null, null, document.URL);
                });
            }
        </script>
        <script src="/extra-assets/ijabo/ijabo.min.js"></script>
		<script src="/extra-assets/ijabo/jquery.ijaboViewer.min.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            @if(Session::has('message'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                }
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        </script>

        @livewireScripts
        @stack('scripts')
	</body>
</html>
