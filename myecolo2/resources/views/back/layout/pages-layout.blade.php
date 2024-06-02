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


    @livewireStyles
    @stack('stylesheets')
    </head>
    <body>
        <div class="header">
            <div class="header-left">
                <div class="menu-icon bi bi-list"></div>
                <div
                    class="search-toggle-icon bi bi-search"
                    data-toggle="header_search"
                ></div>
                <div class="header-search">
                    <form>
                        <div class="form-group mb-0">
                            <i class="dw dw-search2 search-icon"></i>
                            <input
                                type="text"
                                class="form-control search-input"
                                placeholder="Rechercher ici"
                            />
                            <div class="dropdown">
                                <a
                                    class="dropdown-toggle no-arrow"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                >
                                    <i class="ion-arrow-down-c"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label"
                                            >De</label
                                        >
                                        <div class="col-sm-12 col-md-10">
                                            <input
                                                class="form-control form-control-sm form-control-line"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">À</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input
                                                class="form-control form-control-sm form-control-line"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label"
                                            >Sujet</label
                                        >
                                        <div class="col-sm-12 col-md-10">
                                            <input
                                                class="form-control form-control-sm form-control-line"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary">Rechercher</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="header-right">
                <div class="user-notification">
                    <div class="dropdown">
                        <a
                            class="dropdown-toggle no-arrow"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <i class="icon-copy dw dw-notification"></i>
                            <span class="badge notification-active"></span>
                        </a>
                        {{-- <div class="dropdown-menu dropdown-menu-right">
                            <div class="notification-list mx-h-350 customscroll">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/img.jpg" alt="" />
                                            <h3>John Doe</h3>
                                            <p>
                                                Ce vendeur a été vérifé
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/photo1.jpg" alt="" />
                                            <h3>Lea R. Frith</h3>
                                            <p>
                                                Ce vendeur a été vérifé
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/photo2.jpg" alt="" />
                                            <h3>Erik L. Richards</h3>
                                            <p>
                                                Ce vendeur a été vérifé
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/photo3.jpg" alt="" />
                                            <h3>John Doe</h3>
                                            <p>
                                                Ce vendeur a été vérifé
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/photo4.jpg" alt="" />
                                            <h3>Renee I. Hansen</h3>
                                            <p>
                                                Ce vendeur a été vérifé
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/img.jpg" alt="" />
                                            <h3>Vicki M. Coleman</h3>
                                            <p>
                                                Ce vendeur a été vérifé
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>

                @livewire('admin-seller-header-profile-info')

			</div>
		</div>


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
                        <a href="invoice.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span
                            ><span class="mtext">Factures</span>
                        </a>
                    </li>
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

                    <li>
                        <a href="invoice.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span
                            ><span class="mtext">Factures</span>
                        </a>
                    </li>
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

                <div class="footer-wrap pd-20 mb-20 card-box">
                    chi haja hnaya
                </div>
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
