@extends('front.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title')
@section('content')
<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-secondary">Aliments 100% frais</h4>
                <h1 class="mb-5 display-3 text-primary">Savourez un repas à prix réduit</h1>
                <div class="position-relative mx-auto">
                    <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Rechercher">
                    <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Rechercher</button>
                </div>
            </div>

            <div class="col-md-12 col-lg-5">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded">
                            <img src="front/frontend_imgs/fruits-et-légumes.png" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Fruits et Légumes</a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="front/frontend_imgs/produits-laitiers.png" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Produits Laitiers</a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="front/frontend_imgs/boulangerie.png" class="img-fluid w-100 h-100 rounded" alt="Third slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Boulangerie</a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="front/frontend_imgs/épicerie.png" class="img-fluid w-100 h-100 rounded" alt="Third slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Épicerie</a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="front/frontend_imgs/boissons.png" class="img-fluid w-100 h-100 rounded" alt="Third slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Boissons et Liquides</a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="front/frontend_imgs/boulangerie.png" class="img-fluid w-100 h-100 rounded" alt="Third slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Biscuiterie et confiserie</a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="front/frontend_imgs/charcuterie.png" class="img-fluid w-100 h-100 rounded" alt="Third slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Charcuterie et Saurisserie</a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="front/frontend_imgs/viandes.png" class="img-fluid w-100 h-100 rounded" alt="Third slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Boucherie</a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="front/frontend_imgs/poissons.png" class="img-fluid w-100 h-100 rounded" alt="Third slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded">Poissonnerie</a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivant</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Featurs Section Start -->
<div class="container-fluid featurs py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-car-side fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Livraison gratuite</h5>
                        <p class="mb-0">Gratuite pour les commandes de plus de 200 DH</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-user-shield fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Paiement sécurisé</h5>
                        <p class="mb-0">Paiement sécurisé à 100%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-exchange-alt fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Retour gratuit</h5>
                        <p class="mb-0">Retour gratuit sous 30 jours</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fa fa-phone-alt fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Support 24/7</h5>
                        <p class="mb-0">Assistance rapide à tout moment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featurs Section End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <div class="tab-class text-center">
            <div class="row g-4">
                <div class="col-lg-4 text-start">
                    <h1>Nos Produits</h1>
                </div>
                <div class="col-lg-8 text-end">
                    <ul class="nav nav-pills d-inline-flex text-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 130px;">Tous les produits</span>
                            </a>
                        </li>

                        @if ( count(get_categories()) > 0)

                            @foreach ( get_categories() as $category)
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 130px;">{{$category->category_name}}</span>
                                </a>
                            </li>
                        {{-- <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 130px;">Fruits</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 130px;">Produits Laitiers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 130px;">Boulangerie</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 130px;">Épicerie</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 130px;">Boissons et Liquides</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 130px;">Biscuiterie et confiserie</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 130px;">Charcuterie et Saurisserie</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 130px;">Boucherie</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 130px;">Possennerie</span>
                            </a>
                        </li> --}}
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/pêche.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Pêches</h4>
                                            <p>500 g</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">12.95 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/ainsaiss.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Boissons</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>AÏN SAÏSS 1,5L</h4>
                                            <p>PACK 6 / 1.5L</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">27.00 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/1.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Fraises</h4>
                                            <p>500 g</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">5.95 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/4.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Épicerie</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>LESIEUR</h4>
                                            <p>Huile de table trois graines 0.5L</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">9.20 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/11.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Produits Laitiers</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>YAOS - Nestlé</h4>
                                            <p>Yaourt Grec Mangue et fruit de passion 4 x 110g</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">23.00 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/3.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Charcuterie et Saurisserie</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Koutoubia</h4>
                                            <p> Koutoubia Salami de dinde cuit fumé - 600g </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">24.95 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/7.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Produits Laitiers</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>PERLY</h4>
                                            <p>Fromage frais sucré 8 x 85g - PERLY</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">18.85 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/5.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Biscuiterie et Confiserie</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>M&M's</h4>
                                            <p>Chocolat aux Cacahuètes 400g - M&M's</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">54.90 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/9.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Produits Laitiers</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>SALIM</h4>
                                            <p>Lait stérilisé UHT entier 1L</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">9.00 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/6.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Biscuiterie et Confiserie</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>NESQUICK</h4>
                                            <p>Barres de céréales - 150 g</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">32.95 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/2.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Biscuiterie et Confiserie</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Kinder</h4>
                                            <p>Pack Kinder délice 10 x 39g</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">37.50 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img border-product-description">
                                            <img src="front/frontend_imgs/10.png" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Boulangerie</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>BIMBO</h4>
                                            <p>Mini Tortillas Rapiditas 8 x 168g</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">14.95 Dhs</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End-->


<!-- Vesitable Shop Start-->
<div class="container-fluid vesitable py-5">
    <div class="container py-5">
        <h1 class="mb-0">Produits en Promotion</h1>
        <div class="owl-carousel vegetable-carousel justify-content-center">
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="front/frontend_imgs/president.png" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Produits Laitiers</div>
                <div class="p-4 rounded-bottom">
                    <h4>PRÉSIDENT</h4>
                    <p>Crème UHT Whipping Cream 1L</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0"><del>19.95 Dhs</del> <span class="text-danger">16.95 Dhs</span></p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                    </div>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="front/frontend_imgs/chocolat.png" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Biscuiterie et Confiserie</div>
                <div class="p-4 rounded-bottom">
                    <h4>Lindt</h4>
                    <p>Excellence Cherry Intense 100g</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0"><del>35.85 Dhs</del> <span class="text-danger">23.00 Dhs</span></p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                    </div>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="front/frontend_imgs/le petit moulé.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Produits Laitiers</div>
                <div class="p-4 rounded-bottom">
                    <h4>LE PETIT MOULÉ</h4>
                    <p>Fromage Nature 150g</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0"><del>28.95 Dhs</del> <span class="text-danger">15.50 Dhs</span></p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                    </div>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="front/frontend_imgs/lotus spread.png" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Épicerie</div>
                <div class="p-4 rounded-bottom">
                    <h4>Lotus</h4>
                    <p>Pâte à tartiner Biscoff 400g</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0"><del>71.95 Dhs</del> <span class="text-danger">61.95 Dhs</span></p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="front/frontend_imgs/filet de boeuf.png" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Boucherie</div>
                <div class="p-4 rounded-bottom">
                    <h4>Viande</h4>
                    <p>Filet de bœuf 500g - FILIÈRE M </p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0"><del>99.90 Dhs</del> <span class="text-danger">61.95 Dhs</span></p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                    </div>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="front/frontend_imgs/banane.png" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Fruits et Légumes</div>
                <div class="p-4 rounded-bottom">
                    <h4>Banane</h4>
                    <p>Banane Agadir 1Kg</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0"><del>18.50 Dhs</del> <span class="text-danger">10.00 Dhs</span></p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="front/frontend_imgs/nutella.png" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Épicerie</div>
                <div class="p-4 rounded-bottom">
                    <h4>NUTELLA</h4>
                    <p>Pâte à tartiner 750g</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0"><del>79.95 Dhs</del> <span class="text-danger">67.95 Dhs</span></p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="front/frontend_imgs/nescafé.png" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Épicerie</div>
                <div class="p-4 rounded-bottom">
                    <h4>NESCAFÉ</h4>
                    <p>Café soluble gold 95g</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0"><del>63.95 Dhs</del> <span class="text-danger">40.00 Dhs</span></p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vesitable Shop End -->


<!-- Banner Section Start-->
<div class="container-fluid banner bg-secondary my-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="py-4">
                    <h1 class="display-3 text-white">Fruits Frais</h1>
                    <p class="fw-normal display-3 text-dark mb-4">Chez MyEcolo</p>
                    <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">Acheter maintenant!</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="front/frontend_imgs/baner-1.png" class="img-fluid w-100 rounded" alt="">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                        <h1 style="font-size: 100px;">7</h1>
                        <div class="d-flex flex-column">
                            <span class="h2 mb-0">Dhs</span>
                            <span class="h4 text-muted mb-0">kg</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->


<!-- Bestsaler Product Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-4">Nos Partenaires les plus Fidèles !</h1>
            <p>MyEcolo collabore avec une variété de producteurs et entreprises agroalimenatires</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-xl-4">
                <div class="p-4 rounded bg-light">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <img src="front/frontend_imgs/danone.png" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="col-6">
                            <a href="#" class="h5">Danone</a>
                            <div class="d-flex my-3">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <!-- <h4 class="mb-3">3.12 $</h4>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="p-4 rounded bg-light">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <img src="front/frontend_imgs/Carrefour.png" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="col-6">
                            <a href="#" class="h5">Organic Tomato</a>
                            <div class="d-flex my-3">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <!-- <h4 class="mb-3">3.12 $</h4>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="p-4 rounded bg-light">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <img src="front/frontend_imgs/Jaouda.png" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="col-6">
                            <a href="#" class="h5">Organic Tomato</a>
                            <div class="d-flex my-3">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <!-- <h4 class="mb-3">3.12 $</h4>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="p-4 rounded bg-light">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <img src="front/frontend_imgs/Nestlé.png" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="col-6">
                            <a href="#" class="h5">Organic Tomato</a>
                            <div class="d-flex my-3">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <!-- <h4 class="mb-3">3.12 $</h4>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="p-4 rounded bg-light">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <img src="front/frontend_imgs/marjane.png" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="col-6">
                            <a href="#" class="h5">Marjane</a>
                            <div class="d-flex my-3">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <!-- <h4 class="mb-3">3.12 $</h4>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="p-4 rounded bg-light">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <img src="front/frontend_imgs/bimo.jpeg" class="img-fluid rounded-circle w-100" alt="">
                        </div>
                        <div class="col-6">
                            <a href="#" class="h5">BIMO</a>
                            <div class="d-flex my-3">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bestsaler Product End -->


<!-- Fact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="bg-light p-5 rounded">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>clients satisfaits</h4>
                        <h1>400</h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>qualité de service</h4>
                        <h1>99%</h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>certificats de qualité</h4>
                        <h1>33</h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>Produits disponibles</h4>
                        <h1>789</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact Start -->


<!-- Tastimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="testimonial-header text-center">
            <h4 class="text-primary">Nos témoignages</h4>
            <h1 class="display-5 mb-5 text-dark">Ce que disent nos clients !</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                    <div class="mb-4 pb-4 border-bottom border-secondary">
                        <p class="mb-0">MyEcolo m'a beaucoup aidé comme étudiant. Des produits de qualité à prix réduits. Je le recommande vivement !
                        </p>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="bg-secondary rounded">
                            <img src="front/frontend_imgs/Ali.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="ms-4 d-block">
                            <h4 class="text-dark">Ali</h4>
                            <p class="m-0 pb-3">Étudiant</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                    <div class="mb-4 pb-4 border-bottom border-secondary">
                        <p class="mb-0">Grâce à MyEcolo, j'ai pu adopter un mode de vie plus responsable sans me ruiner. Des articles de qualité et des prix imbattables, merci MyEcolo !</p>
                        </p>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="bg-secondary rounded">
                            <img src="front/frontend_imgs/Ahmed.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="ms-4 d-block">
                            <h4 class="text-dark">Ahmed</h4>
                            <p class="m-0 pb-3">Professeur</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                    <div class="mb-4 pb-4 border-bottom border-secondary">
                        <p class="mb-0">J'ai découvert MyEcolo il y a peu et je suis déjà totalement accro. Des produits de qualité, une démarche écologique et des prix imbattables, que du bonheur !</p>
                        </p>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="bg-secondary rounded">
                            <img src="front/frontend_imgs/Marieme.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="ms-4 d-block">
                            <h4 class="text-dark">Marieme</h4>
                            <p class="m-0 pb-3">Étudiante</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tastimonial End -->
@endsection
