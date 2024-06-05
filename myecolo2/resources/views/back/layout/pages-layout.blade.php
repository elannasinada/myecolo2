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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="/back/vendors/styles/icon-font.min.css"
        />

        <link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css"/>

        <link
            rel="stylesheet"
            type="text/css"
            href="/back/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css"
        />
        <link>


    <link rel="stylesheet" type="text/css" href="back/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="back/src/plugins/datatables/css/responsive.bootstrap4.min.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href="/extra-assets/ijabo/ijabo.min.css">
    <link rel="stylesheet" href="/extra-assets/ijaboCropTool/ijaboCropTool.min.css">
    <link rel="stylesheet" href="/extra-assets/jquery-ui-1.13.2/jquery-ui.min.css">
    <link rel="stylesheet" href="/extra-assets/jquery-ui-1.13.2/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="/extra-assets/jquery-ui-1.13.2/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="/extra-assets/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
    .swal2-popup{
        font-size: 0.78em;
    }
    </style>

    @livewireStyles
    @stack('stylesheets')
</head>
    <body>
        @if (!Route::is('client.*'))
            <div class="header">
                <div class="header-left">
                    <div class="menu-icon bi bi-list"></div>
                    <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
                </div>
                <div class="header-right">
                    @livewire('admin-seller-header-profile-info')
                </div>
            </div>
        @endif


    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="/">
                <img src="/style_assets/img/site/{{ get_settings()->site_logo }}" alt="" class="dark-logo" />
                <img
                    src="/style_assets/img/site/{{ get_settings()->site_logo }}"
                    alt=""
                    class="light-logo"
                />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">

                    @if (Route::is('admin.*'))
                    <li>
                        <a href="{{ route('admin.home') }}" class="dropdown-toggle no-arrow {{ Route::is('admin.home') ? 'active' : '' }}">
                            <span class="micon fa fa-home"></span
                            ><span class="mtext">Accueil</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.manage-categories') }}" class="dropdown-toggle no-arrow {{ Route::is('admin.manage-categories') ? 'active' : '' }}">
                            <span class="micon dw dw-align-left3"></span
                            ><span class="mtext">Gérer les catégories</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.manage-sellers') }}" class="dropdown-toggle no-arrow {{ Route::is('admin.manage-sellers') ? 'active' : '' }}">
                            <span class="micon ion ion-ios-person"></span
                            ><span class="mtext">Gérer les vendeurs</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.manage-clients') }}" class="dropdown-toggle no-arrow {{ Route::is('admin.manage-clients') ? 'active' : '' }}">
                            <span class="micon ion ion-android-people"></span
                            ><span class="mtext">Voir les clients</span>
                        </a>
                    </li>

                    {{-- <li>
                        <a href="invoice.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span
                            ><span class="mtext">Factures</span>
                        </a>
                    </li> --}}
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Paramètres</div>
                    </li>

                    <li>
                        <a
                            href="{{route('admin.profile')}}"
                            class="dropdown-toggle no-arrow {{ Route::is('admin.profile') ? 'active' : '' }}"
                            >
                            <span class="micon fa fa-user"></span>
                            <span class="mtext"
                                    >Profil</span>
                                    </span>
                            </a>
                        </li>
                        <li>
							<a
								href="{{ route('admin.settings') }}"

								class="dropdown-toggle no-arrow {{ Route::is('admin.settings') ? 'active' : '' }}"
							>
								<span class="micon icon-copy fi-widget"></span>
								<span class="mtext"
									>Paramètres
									</span>
							</a>
						</li>
                    @else
                    <li>
                        <a href="{{ route('seller.home') }}" class="dropdown-toggle no-arrow {{ Route::is('seller.home') ? 'active' : '' }}">
                            <span class="micon fa fa-home"></span
                            ><span class="mtext">Acceuil</span>
                        </a>
                    </li>

                    {{-- <li>
                        <a href="invoice.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span
                            ><span class="mtext">Factures</span>
                        </a>
                    </li> --}}.

                    @php
                        $seller = Auth::user();
                    @endphp

                    @if ($seller->status == 'Active')
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle {{ Route::is('seller.product.*') ? 'active' : '' }}">
                                <span class="micon bi bi-bag"></span><span class="mtext">Gestion des produits</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="{{ route('seller.product.all-products') }}" class="{{ Route::is('seller.product.all-products') ? 'active' : '' }}">Tous les produits</a></li>
                                <li><a href="{{ route('seller.product.add-product') }}" class="{{ Route::is('seller.product.add-product') ? 'active' : '' }}">Ajouter un produit</a></li>
                            </ul>
                        </li>
                    @endif


                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Paramètres</div>
                    </li>

                    <li>
                        <a
                                href="{{ route('seller.profile') }}"

                                class="dropdown-toggle no-arrow {{ Route::is('seller.profile') ? 'active' : '' }}"
                            >
                                <span class="micon fa fa-user"></span>
                                <span class="mtext"
                                    >Profile
                                    </span>
                            </a>
                        </li>
                        @endif


                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>

        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <div>
                        @yield('content')
                    </div>
                </div>

                {{-- <div class="footer-wrap pd-20 mb-20 card-box">
                    chi haja hnaya
                </div> --}}
            </div>
        </div>

        <!-- js -->
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
    <script src="/extra-assets/ijaboCropTool/ijaboCropTool.min.js"></script>
    <script src="/extra-assets/jquery-ui-1.13.2/jquery-ui.min.js"></script>
    <script src="/extra-assets/summernote/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.summernote').summernote({
                height:200
            });
        });
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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


        <script src="back/src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>


        <script src="back/src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
		<script src="back/src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>

		<script src="back/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
		<script src="back/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <script src="back/src/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="back/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="back/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="back/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="back/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <script src="back/vendors/scripts/dashboard.js"></script>
        <script src="back/vendors/scripts/dashboard2.js"></script>
        <script src="back/vendors/scripts/dashboard3.js"></script>


        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->




        @livewireScripts
        @stack('scripts')
    </body>
</html>
