@extends('front.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'MyEcolo - Boutique')
@section('content')

 <!-- Fruits Shop Start-->
 <div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4">Magasin de produits alimenatires</h1>
        <p class="text-muted">Engagé contre le gaspillage alimentaire</p>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="Mot Clé" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between align-items-center mb-4 filter-container">
                            <label for="fruits" class="large-text mb-0">Filtrer par :</label>
                            <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light large-select" form="fruitform">
                                <option value="volvo">Alphabétique</option>
                                <option value="saab">Prix: du plus élevé au plus cher</option>
                                <option value="opel">Prix: du plus cher au plus bas</option>
                                <option value="audi">Pertinence</option>
                                <option value="audi">Les mieux noté</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Catégories</h4>
                                    <ul class="list-unstyled fruite-categorie">
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="shop.html" class="section-link active-section"><i class="me-2"></i>Tous les Produits</a>
                                                <span>(251)</span>
                                            </div>
                                        </li>

                                        @if ( count(get_categories()) > 0)

                                            @foreach ( get_categories() as $category)

                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="fruits.html" class="section-link"><i class="me-2"></i>{{$category->category_name}}</a>
                                                    <!--<span>(20)</span> here im doing the number of products in that category-->
                                                </div>
                                            </li>

                                        {{-- <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="fruits.html" class="section-link"><i class="me-2"></i>Fruits</a>
                                                <span>(20)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="légumes.html" class="section-link"><i class="me-2"></i>Légumes</a>
                                                <span>(20)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="produits-laitiers.html" class="section-link"><i class="me-2"></i>Produits Laitiers</a>
                                                <span>(35)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="boulangerie.html" class="section-link"><i class="me-2"></i>Boulangerie</a>
                                                <span>(15)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="épicerie.html" class="section-link"><i class="me-2"></i>Épicerie</a>
                                                <span>(37)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="boissons-liquides.html" class="section-link"><i class="me-2"></i>Boissons et Liquides</a>
                                                <span>(17)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="biscuiterie-confiserie.html" class="section-link"><i class="me-2"></i>Biscuiterie et Confiserie</a>
                                                <span>(38)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="charcuterie-saurisserie.html" class="section-link"><i class="me-2"></i>Charcuterie et Saurisserie</a>
                                                <span>(49)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="boucherie.html" class="section-link"><i class="me-2"></i>Boucherie</a>
                                                <span>(10)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="poissonnerie.html" class="section-link"><i class="me-2"></i>Poissonnerie</a>
                                                <span>(10)</span>
                                            </div>
                                        </li> --}}
                                        @endforeach
                                    @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4 class="mb-2">Prix</h4>
                                    <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value + ' Dhs'">
                                    <output id="amount" name="amount" min-velue="0" max-value="500" for="rangeInput">0 Dhs</output>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Supplémentaire</h4>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-1" name="Categories-1" value="Beverages">
                                        <label for="Categories-1">Bio</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-2" name="Categories-1" value="Beverages">
                                        <label for="Categories-2">Frais</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-3" name="Categories-1" value="Beverages">
                                        <label for="Categories-3">Ventes</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-4" name="Categories-1" value="Beverages">
                                        <label for="Categories-4">Réduction</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-5" name="Categories-1" value="Beverages">
                                        <label for="Categories-5">Expiré</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="mb-3">Nos Meilleurs Ventes</h4>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('front/frontend_imgs/nutella.png')}}"
                                        class="img-fluid rounded"
                                        alt=""
                                        loading="lazy">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">NUTELLA</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2 text-decoration-line-through">79.95 Dhs</h5>
                                            <h5 class="text-danger">67.95 Dhs</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('front/frontend_imgs/jebli.webp')}}" class="img-fluid rounded" alt="" loading="lazy">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">JEBLI</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2 text-decoration-line-through">12.00 Dhs</h5>
                                            <h5 class="text-danger">9.00 Dhs</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('front/frontend_imgs/lotus spread.png')}}" class="img-fluid rounded" alt="" loading="lazy">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Lotus</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2 text-decoration-line-through">71.95 Dhs</h5>
                                            <h5 class="text-danger">61.95 Dhs</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-4">
                                    <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row g-4 justify-content-center">

                            {{-- @if ( count(get_products()) > 0)

                                            @foreach ( get_products() as $product)
                                            <div class="col-md-6 col-lg-6 col-xl-4">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img border-product-description">
                                                        <img  src="{{$product->product_image}}"
                                                        class="img-fluid w-100 rounded-top"
                                                        alt=""
                                                        >
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{$product->category}}</div>
                                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                        <h4>{{$product->name}}</h4>
                                                        <p>{!!$product->summary!!}</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">{{$product->price}} Dhs</p>
                                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}


                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img border-product-description">
                                        <img src="{{ asset('front/frontend_imgs/1.png')}}" class="img-fluid w-100 rounded-top" alt="" loading="lazy">
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
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img border-product-description">
                                        <img src="{{ asset('front/frontend_imgs/12.png')}}" class="img-fluid w-100 rounded-top" alt="" loading="lazy">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Boissons et Liquides</div>
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
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img border-product-description">
                                        <img src="{{ asset('front/frontend_imgs/4.png')}}" class="img-fluid w-100 rounded-top" alt="" loading="lazy">
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
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img border-product-description">
                                        <img src="{{ asset('front/frontend_imgs/7.png')}}" class="img-fluid w-100 rounded-top" alt="" loading="lazy">
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
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img border-product-description">
                                        <img src="{{ asset('front/frontend_imgs/3.png')}}" class="img-fluid w-100 rounded-top" alt="" loading="lazy">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Charcuterie et Saurisserie</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Koutoubia</h4>
                                        <p>Koutoubia Salami de dinde cuit fumé - 600g</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">24.95 Dhs</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img border-product-description">
                                        <img src="{{ asset('front/frontend_imgs/10.png')}}" class="img-fluid w-100 rounded-top" alt="" loading="lazy">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Boulangerie</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>BIMBO</h4>
                                        <p>Mini Tortillas Rapiditas <br>8 x 168g</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">14.95 Dhs</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img border-product-description">
                                        <img src="{{ asset('front/frontend_imgs/9.png')}}" class="img-fluid w-100 rounded-top" alt="" loading="lazy">
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
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img border-product-description">
                                        <img src="{{ asset('front/frontend_imgs/lotus spread.png')}}" class="img-fluid w-100 rounded-top" alt="" loading="lazy">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Épicerie</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Lotus</h4>
                                        <p>Pâte à tartiner Biscoff 400g</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0"><del>71.95 Dhs</del> <span class="text-danger">61.95 Dhs</span></p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img border-product-description">
                                        <img src="{{ asset('front/frontend_imgs/chocolat.png')}}" class="img-fluid w-100 rounded-top" alt="" loading="lazy">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Biscuiterie et Confiserie</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Lindt</h4>
                                        <p>Excellence Cherry Intense 100g</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0"><del>35.85 Dhs</del> <span class="text-danger">23.00 Dhs</span></p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au Panier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- @endforeach
                        @endif --}}

                            <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">
                                    <a href="#" class="rounded">&laquo;</a>
                                    <a href="#" class="active rounded">1</a>
                                    <a href="#" class="rounded">2</a>
                                    <a href="#" class="rounded">3</a>
                                    <a href="#" class="rounded">4</a>
                                    <a href="#" class="rounded">5</a>
                                    <a href="#" class="rounded">6</a>
                                    <a href="#" class="rounded">&raquo;</a>
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
@endsection
