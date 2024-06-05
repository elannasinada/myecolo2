@extends('front.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title')
@section('content')
<!-- Cart Page Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7">
                <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Produits</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Total</th>
                        <th scope="col">Supression</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('front/frontend_imgs/10.png')}}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">Mini Tortillas Rapiditas 8 x 168g - BIMBO</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 price" data-price="14.95">14.95 Dhs</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 total">14.95 Dhs </p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4 btn-remove" >
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('front/frontend_imgs/confiture.png')}}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">Confiture de fruits rouges 540g - AÏCHA</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 price" data-price="13.95">13.95 Dhs</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 total">13.95 Dhs</p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4 btn-remove" >
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('front/frontend_imgs/kiri lait.png')}}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">Lait UHT entier 1L</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 price" data-price="7.50">7.50 Dhs</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 total">7.50 Dhs</p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4 btn-remove">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('front/frontend_imgs/lotus spread.png')}}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">Pâte à tartiner Biscoff 400g - Lotus</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 price" data-price="61.95">61.95 Dhs</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 total">61.95 Dhs</p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4 btn-remove" >
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('front/frontend_imgs/ain atlas.png')}}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">Aïn Atlas Pack 6/ 1.5L</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 price" data-price="33.00">33.00 Dhs</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4 total">33.00 Dhs</p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4 btn-remove" >
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-5">

            <div class="card bg-primary text-white rounded-3">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <h5 class="mb-0">Détails de la carte</h5>
                </div>

                <p class="small mb-2">Type de carte</p>
                <a href="#!" type="submit" class="text-white"><i
                    class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                <a href="#!" type="submit" class="text-white"><i
                    class="fab fa-cc-visa fa-2x me-2"></i></a>
                <a href="#!" type="submit" class="text-white"><i
                    class="fab fa-cc-amex fa-2x me-2"></i></a>
                <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                <form class="mt-4">
                  <div data-mdb-input-init class="form-outline form-white mb-4">
                    <label class="form-label" for="typeText">Nom </label>
                    <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                      placeholder="Nom du titulaire de la carte" />
                  </div>

                  <div data-mdb-input-init class="form-outline form-white mb-4">
                    <label class="form-label" for="typeText">Numéro de la carte</label>
                    <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                      placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-6">
                      <div data-mdb-input-init class="form-outline form-white">
                        <label class="form-label" for="typeExp">Expiration</label>
                        <input type="text" id="typeExp" class="form-control form-control-lg"
                          placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div data-mdb-input-init class="form-outline form-white">
                        <label class="form-label" for="typeText">Cvv</label>
                        <input type="password" id="typeText" class="form-control form-control-lg"
                          placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                      </div>
                    </div>
                  </div>
                </form>

                <hr class="my-4">

                <div class="d-flex justify-content-between">
                  <p class="mb-2">Sous-total</p>
                  <p class="mb-2" id="subtotal">0.00 Dhs</p>
                </div>

                <div class="d-flex justify-content-between">
                  <p class="mb-2">Livraison</p>
                  <p class="mb-2">5.99 Dhs</p>
                </div>

                <div class="d-flex justify-content-between mb-4">
                  <p class="mb-2">Total</p>
                  <p class="mb-2" id="total">0.00 Dhs</p>
                </div>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-block btn-lg" style="background-color:#2F327D;color:white;">
                  <div class="d-flex justify-content-between">
                    <span>Valider le paiement</span>
                  </div>
                </button>
    </div>
    </div>
</div>
<!-- Cart Page End -->

@endsection

@push('scripts')
<script>
     $(document).ready(function() {
        // Fonction pour mettre à jour les totaux
        function updateTotals() {
            let subtotal = 0;
            const deliveryFee = 5.99;

            // Met à jour le total pour chaque produit
            $('tbody tr').each(function() {
                const quantity = $(this).find('.quantity input').val();
                const price = parseFloat($(this).find('.price').data('price'));
                const total = quantity * price;
                $(this).find('.total').text(total.toFixed(2) + ' Dhs');
                subtotal += total;
            });

            // Met à jour le sous-total et le total
            $('#subtotal').text(subtotal.toFixed(2) + ' Dhs');
            const total = subtotal + deliveryFee;
            $('#total').text(total.toFixed(2) + ' Dhs');

            // Met à jour le nombre de produits dans le panier
            updateCartCount();
        }

        // Fonction pour mettre à jour le nombre de produits dans le panier
        function updateCartCount() {
            let cartCount = 0;

            // Compte le nombre total de produits dans le panier
            $('tbody tr').each(function() {
                const quantity = parseInt($(this).find('.quantity input').val());
                cartCount += isNaN(quantity) ? 0 : quantity;
            });

            // Met à jour le badge avec le nombre de produits
            $('#cart-count').text(cartCount);
        }

        // Événement pour augmenter la quantité
        $(document).on('click', '.btn-plus', function() {
            const $input = $(this).closest('.quantity').find('input');
            let value = parseInt($input.val());
            value = isNaN(value) ? 1 : value + 1;
            $input.val(value);
            updateTotals();
        });

        // Événement pour diminuer la quantité
        $(document).on('click', '.btn-minus', function() {
            const $input = $(this).closest('.quantity').find('input');
            let value = parseInt($input.val());
            value = isNaN(value) ? 0 : value - 1;
            value = value < 1 ? 1 : value; // Empêcher la quantité d'aller en dessous de 1
            $input.val(value);
            updateTotals();
        });

        // Événement pour supprimer un produit
        $(document).on('click', '.btn-remove', function() {
            $(this).closest('tr').remove();
            updateTotals();
        });

        // Met à jour les totaux au chargement de la page
        updateTotals();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll(".section-link");

    // Fonction pour enlever la classe active de tous les liens
    function removeActiveClass() {
        links.forEach(link => {
            link.classList.remove("active-section");
        });
    }

    // Ajouter un gestionnaire de clic à chaque lien
    links.forEach(link => {
        link.addEventListener("click", function() {
            removeActiveClass();
            this.classList.add("active-section");
        });
    });

    // Vérifier l'URL actuelle pour ajouter la classe active à la section correspondante
    const currentPath = window.location.pathname.split("/").pop();
    links.forEach(link => {
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active-section");
        }
    });
});
</script>

@endpush
