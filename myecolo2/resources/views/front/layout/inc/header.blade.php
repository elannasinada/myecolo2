<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">{{get_settings()->site_address}}</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">{{ get_settings()->site_email }}</a></small>
            </div>
            <div class="top-link pe-2">
                <a href="#" class="text-white"><small class="text-white mx-2">Politique de confidentialité</small>/</a>
                <a href="#" class="text-white"><small class="text-white mx-2">Conditions d'utilisation</small>/</a>
                <a href="#" class="text-white"><small class="text-white ms-2">Ventes et remboursements</small></a>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            {{-- <div class="brand-logo">
                <a href="">
                    <img src="style_assets/img/site/{{ get_settings()->site_logo }}" alt="">
                </a>
            </div> --}}
            <img src="{{ asset('style_assets/img/MyEcolo-logo-square-removebg.png')}}" alt='Logo' style="height:40px; margin-right:10px;"/>
            <a href="{{route('client.home')}}" class="navbar-brand"><h1 class="text-primary display-6 d-inline">MyEcolo</h1></a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{route('client.home')}}" class="nav-item nav-link {{ Request::is('client') ? 'active' : '' }}">Accueil</a>
                    <a href="{{route('client.shop')}}" class="nav-item nav-link {{ Request::is('client/shop') ? 'active' : '' }}">Boutique</a>
                    <a href="shop-detail.html" class="nav-item nav-link">Détails de la boutique</a>
                    <a href="testimonial.html" class="nav-item nav-link">Témoignages</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            <a href="cart.html" class="dropdown-item">Panier</a>
                            <a href="chackout.html" class="dropdown-item">Paiement</a>
                            <a href="testimonial.html" class="dropdown-item">Témoignages</a>
                            <a href="404.html" class="dropdown-item">Page 404</a>
                        </div>
                    </div> --}}
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fas fa-search text-primary"></i>
                    </button>
                    <a href="{{route('client.cart')}}" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                        <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                    </a>
                    <a href="{{route('client.profile')}}" class="my-auto me-4">
                        <i class="fas fa-user fa-2x"></i>
                    </a>
                    <a class="my-auto" href="{{route('client.logout')}}" onclick= "event.preventDefault();document.getElementById('clientLogoutForm').submit();">
                        <i class="fas fa-power-off fa-2x"></i>
                    </a>
                    <form action="{{route('client.logout')}}" method="POST" id="clientLogoutForm">
                        @csrf
                    </form>
                </div>

            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rechercher par mot clé</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="mots-clés" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->
