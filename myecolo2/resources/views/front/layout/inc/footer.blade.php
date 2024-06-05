<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5);">
            <div class="row g-4">
                <div class="col-lg-3">

                    <a href="#">
                        <a href="index.html" class="navbar-brand"><h1 class="text-primary display-6 d-inline">MyEcolo</h1></a>
                        <p class="text-secondary mb-0">Gestion des déchets alimentaires</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex justify-content-end pt-3">
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Pourquoi les gens nous aiment !</h4>

                    {{-- <p class="mb-4">Chez MyEcolo, nous sommes passionnés par la réduction du gaspillage alimentaire tout en offrant des produits de haute qualité.</p>
                    <p class="mb-4">Rejoignez notre communauté et faites la différence avec nous. Ensemble, nous pouvons créer un avenir plus sain et plus durable.</p> --}}

                    <p class="mb-4">{{ get_settings()->site_meta_description }}</p>

                    <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">En savoir plus</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Infos Boutique</h4>
                    <a class="btn-link" href="">À propos de nous</a>
                    <a class="btn-link" href="">Contactez-nous</a>
                    <a class="btn-link" href="">Politique de confidentialité</a>
                    <a class="btn-link" href="">Conditions générales</a>
                    <a class="btn-link" href="">Politique de retour</a>
                    <a class="btn-link" href="">FAQs & Aide</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Compte</h4>
                    <a class="btn-link" href="">Mon compte</a>
                    <a class="btn-link" href="">Détails de la boutique</a>
                    <a class="btn-link" href="">Panier</a>
                    <a class="btn-link" href="">Liste de souhaits</a>
                    <a class="btn-link" href="">Historique des commandes</a>
                    <a class="btn-link" href="">Commandes internationales</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Contact</h4>
                    <p>Adresse : {{get_settings()->site_address}}</p>
                    <p>Email : {{ get_settings()->site_email }}</p>
                    <p>Téléphone : {{ get_settings()->site_phone }}</p>
                    <p>Nous acceptons les paiements</p>
                    <img src="front/frontend_imgs/payment.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
