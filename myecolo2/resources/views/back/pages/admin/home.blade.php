@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Accueil Admin')
@section('content')

<div class="mobile-menu-overlay"></div>
        <div class="main-container">
            <div class="pd-ltr-20">
                <div class="card-box pd-20 height-100-p mb-30">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="/back/vendors/images/banner-img.png" alt="" />
                        </div>
                        <div class="col-md-8">
                            <h4 class="font-20 weight-500 mb-10 text-capitalize">
                                Bienvenue
                                <div class="weight-600 font-30 text-blue">admin</div>
                            </h4>
                            <p class="font-18 max-width-600">
                                Nous sommes ravis de vous accueillir dans notre portail. Ici, vous pouvez accéder à divers graphiques et tableaux de bord interactifs qui vous permettront de suivre et d'analyser les données importantes de manière efficace. Explorez les outils disponibles pour prendre des décisions éclairées et optimiser vos opérations. Nous espérons que vous trouverez cette plateforme utile et intuitive. Bonne exploration!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">50</div>
                                    <div class="weight-600 font-14">Vendeurs vérifés</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart2"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">400</div>
                                    <div class="weight-600 font-14">Clients (utilisateurs qui ont vendus)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart3"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">600</div>
                                    <div class="weight-600 font-14">Commandes terminées</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart4"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">10 300 Dhs</div>
                                    <div class="weight-600 font-14">Revenue</div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 mb-30">
                        <div class="card-box height-100-p pd-20">
                            <h2 class="h4 mb-20">Activité</h2>
                            <div id="chart5"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-30">
                        <div class="card-box height-100-p pd-20">
                            <h2 class="h4 mb-20">Objectif de leads</h2>
                            <div id="chart6"></div>
                        </div>
                    </div>
                </div>
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Meilleurs produits vendus</h2>
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Produit</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-plus">
                                    <img
                                        src="/front/frontend_imgs/1.png"
                                        width="70"
                                        height="70"
                                        alt=""
                                    />
                                </td>
                                <td>
                                    <h5 class="font-16">Fraises</h5>
                                    par Marjane
                                </td>
                                <td>5.95 Dhs</td>
                                <td>500 g</td>
                                <td>
                                    <div class="dropdown">
                                        <a
                                            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-toggle="dropdown"
                                        >
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div
                                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                        >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-eye"></i> Voir</a
                                            >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-edit2"></i> Modifier</a
                                            >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-delete-3"></i> Supprimer</a
                                            >
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">
                                    <img
                                    src="/front/frontend_imgs/pêche.png"
                                    width="70"
                                        height="70"
                                        alt=""
                                    />
                                </td>
                                <td>
                                    <h5 class="font-16">Pêches</h5>
                                    par Aswak Assalam
                                </td>
                                <td>12.95 Dhs</td>
                                <td>500 g</td>
                                <td>
                                    <div class="dropdown">
                                        <a
                                            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-toggle="dropdown"
                                        >
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div
                                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                        >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-eye"></i> Voir</a
                                            >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-edit2"></i> Modifier</a
                                            >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-delete-3"></i> Supprimer</a
                                            >
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">
                                    <img
                                        src="/front/frontend_imgs/7.png"
                                        width="70"
                                        height="70"
                                        alt=""
                                    />
                                </td>
                                <td>
                                    <h5 class="font-16">PERLY</h5>
                                    Supermarché Aziz
                                </td>
                                <td>18.85 Dhs</td>
                                <td>8 x 85g</td>
                                <td>
                                    <div class="dropdown">
                                        <a
                                            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-toggle="dropdown"
                                        >
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div
                                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                        >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-eye"></i> Voir</a
                                            >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-edit2"></i> Modifier</a
                                            >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-delete-3"></i> Supprimer</a
                                            >
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">
                                    <img
                                    src="/front/frontend_imgs//banane.png"
                                    width="70"
                                        height="70"
                                        alt=""
                                    />
                                </td>
                                <td>
                                    <h5 class="font-16">Banane Agadir</h5>
                                    par L'haj Ali
                                </td>
                                <td>10 Dhs</td>
                                <td>1kg</td>
                                <td>
                                    <div class="dropdown">
                                        <a
                                            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-toggle="dropdown"
                                        >
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div
                                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                        >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-eye"></i> Voir</a
                                            >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-edit2"></i> Modifier</a
                                            >
                                            <a class="dropdown-item" href="#"
                                                ><i class="dw dw-delete-3"></i> Supprimer</a
                                            >
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

@endsection
