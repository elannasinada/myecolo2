<!DOCTYPE html>
<html>
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8" />
        <title>@yield('title')</title>

        <!-- Site favicon -->
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/back/vendors/images/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/back/vendors/images/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/back/vendors/images/favicon-16x16.png"
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
                <div class="dashboard-setting user-notification">
                    <div class="dropdown">
                        <a
                            class="dropdown-toggle no-arrow"
                            href="javascript:;"
                            data-toggle="right-sidebar"
                        >
                            <i class="dw dw-settings2"></i>
                        </a>
                    </div>
                </div>
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
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="notification-list mx-h-350 customscroll">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/img.jpg" alt="" />
                                            <h3>John Doe</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed...
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/photo1.jpg" alt="" />
                                            <h3>Lea R. Frith</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed...
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/photo2.jpg" alt="" />
                                            <h3>Erik L. Richards</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed...
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/photo3.jpg" alt="" />
                                            <h3>John Doe</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed...
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/photo4.jpg" alt="" />
                                            <h3>Renee I. Hansen</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed...
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/back/vendors/images/img.jpg" alt="" />
                                            <h3>Vicki M. Coleman</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed...
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                @if (Auth::guard('admin')->check())
                    <div class="user-info-dropdown">
                        <div class="dropdown">
                            <a
                                class="dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                <span class="user-icon">
                                    <img src="/back/vendors/images/photo1.jpg" alt="" />
                                </span>
                                <span class="user-name">Ross C. Lopez</span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                            >
                                <a class="dropdown-item" href="profile.html"
                                    ><i class="dw dw-user1"></i> Profil</a
                                >
                                <a class="dropdown-item" href="profile.html"
                                    ><i class="dw dw-settings2"></i> Paramètres</a
                                >
                                <a class="dropdown-item" href="faq.html"
                                    ><i class="dw dw-help"></i> Aide</a
                                >
                                <a class="dropdown-item" href="{{ route('admin.logout_handler') }}"
                                    onclick="event.preventDefault();document.getElementById('adminLogoutForm').submit();"><i class="dw dw-logout"></i> Déconnexion</a
                                >
                                <form action="{{route('admin.logout_handler')}}" id ="adminLogoutForm" method="POST">@csrf</form>
                            </div>
                        </div>
                    </div>

                @elseif( Auth::guard('seller')->check())
                    <div class="user-info-dropdown">
                        <div class="dropdown">
                            <a
                                class="dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                <span class="user-icon">
                                    <img src="/back/vendors/images/photo1.jpg" alt="" />
                                </span>
                                <span class="user-name">Ross C. Lopez</span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                            >
                                <a class="dropdown-item" href="profile.html"
                                    ><i class="dw dw-user1"></i> Profil</a
                                >
                                <a class="dropdown-item" href="profile.html"
                                    ><i class="dw dw-settings2"></i> Paramètres</a
                                >
                                <a class="dropdown-item" href="faq.html"
                                    ><i class="dw dw-help"></i> Aide</a
                                >
                                <a class="dropdown-item" href="{{ route('admin.logout_handler') }}"
                                    onclick="event.preventDefault();document.getElementById('adminLogoutForm').submit();"><i class="dw dw-logout"></i> Déconnexion</a
                                >
                            </div>
                        </div>
                    </div>

                @endif


                <div class="github-link">
                    <a href="https://github.com/dropways/deskapp" target="_blank"
                        ><img src="/back/vendors/images/github.svg" alt=""
                    /></a>
                </div>
			</div>
		</div>
    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Paramètres de mise en page
                <span class="btn-block font-weight-400 font-12"
                    >Paramètres de l'interface utilisateur</span
                >
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Arrière-plan de l'en-tête</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a
                        href="javascript:void(0);"
                        class="btn btn-outline-primary header-white active"
                        >Blanc</a
                    >
                    <a
                        href="javascript:void(0);"
                        class="btn btn-outline-primary header-dark"
                        >Sombre</a
                    >
                </div>

                <h4 class="weight-600 font-18 pb-10">Arrière-plan de la barre latérale</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a
                        href="javascript:void(0);"
                        class="btn btn-outline-primary sidebar-light"
                        >Blanc</a
                    >
                    <a
                        href="javascript:void(0);"
                        class="btn btn-outline-primary sidebar-dark active"
                        >Sombre</a
                    >
                </div>

                <h4 class="weight-600 font-18 pb-10">Icône de menu déroulant</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input
                            type="radio"
                            id="sidebaricon-1"
                            name="menu-dropdown-icon"
                            class="custom-control-input"
                            value="icon-style-1"
                            checked=""
                        />
                        <label class="custom-control-label" for="sidebaricon-1"
                            ><i class="fa fa-angle-down"></i
                        ></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input
                            type="radio"
                            id="sidebaricon-2"
                            name="menu-dropdown-icon"
                            class="custom-control-input"
                            value="icon-style-2"
                        />
                        <label class="custom-control-label" for="sidebaricon-2"
                            ><i class="ion-plus-round"></i
                        ></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input
                            type="radio"
                            id="sidebaricon-3"
                            name="menu-dropdown-icon"
                            class="custom-control-input"
                            value="icon-style-3"
                        />
                        <label class="custom-control-label" for="sidebaricon-3"
                            ><i class="fa fa-angle-double-right"></i
                        ></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">Icône de la liste de menu</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input
                            type="radio"
                            id="sidebariconlist-1"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-1"
                            checked=""
                        />
                        <label class="custom-control-label" for="sidebariconlist-1"
                            ><i class="ion-minus-round"></i
                        ></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input
                            type="radio"
                            id="sidebariconlist-2"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-2"
                        />
                        <label class="custom-control-label" for="sidebariconlist-2"
                            ><i class="fa fa-circle-o" aria-hidden="true"></i
                        ></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input
                            type="radio"
                            id="sidebariconlist-3"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-3"
                        />
                        <label class="custom-control-label" for="sidebariconlist-3"
                            ><i class="dw dw-check"></i
                        ></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input
                            type="radio"
                            id="sidebariconlist-4"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-4"
                            checked=""
                        />
                        <label class="custom-control-label" for="sidebariconlist-4"
                            ><i class="icon-copy dw dw-next-2"></i
                        ></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input
                            type="radio"
                            id="sidebariconlist-5"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-5"
                        />
                        <label class="custom-control-label" for="sidebariconlist-5"
                            ><i class="dw dw-fast-forward-1"></i
                        ></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input
                            type="radio"
                            id="sidebariconlist-6"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-6"
                        />
                        <label class="custom-control-label" for="sidebariconlist-6"
                            ><i class="dw dw-next"></i
                        ></label>
                    </div>
                </div>

                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">
                        Réinitialiser les paramètres
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="/back/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
                <img
                    src="/back/vendors/images/deskapp-logo-white.svg"
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
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-house"></span
                            ><span class="mtext">Accueil</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="index.html">Tableau de bord style 1</a></li>
                            <li><a href="index2.html">Tableau de bord style 2</a></li>
                            <li><a href="index3.html">Tableau de bord style 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-textarea-resize"></span
                            ><span class="mtext">Formulaires</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="form-basic.html">Formulaire de base</a></li>
                            <li>
                                <a href="advanced-components.html">Composants avancés</a>
                            </li>
                            <li><a href="form-wizard.html">Assistant de formulaire</a></li>
                            <li><a href="html5-editor.html">Éditeur HTML5</a></li>
                            <li><a href="form-pickers.html">Sélecteurs de formulaire</a></li>
                            <li><a href="image-cropper.html">Recadrage d'image</a></li>
                            <li><a href="image-dropzone.html">Zone de dépôt d'image</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-table"></span
                            ><span class="mtext">Tables</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="basic-table.html">Tables de base</a></li>
                            <li><a href="datatable.html">DataTables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-calendar4-week"></span
                            ><span class="mtext">Calendrier</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-archive"></span
                            ><span class="mtext">Éléments d'interface utilisateur</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="ui-buttons.html">Boutons</a></li>
                            <li><a href="ui-cards.html">Cartes</a></li>
                            <li><a href="ui-cards-hover.html">Cartes survol</a></li>
                            <li><a href="ui-modals.html">Modales</a></li>
                            <li><a href="ui-tabs.html">Onglets</a></li>
                            <li>
                                <a href="ui-tooltip-popover.html">Info-bulle et Popover</a>
                            </li>
                            <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-timeline.html">Chronologie</a></li>
                            <li><a href="ui-progressbar.html">Barre de progression</a></li>
                            <li><a href="ui-typography.html">Typographie</a></li>
                            <li><a href="ui-list-group.html">Groupe de listes</a></li>
                            <li><a href="ui-range-slider.html">Curseur de plage</a></li>
                            <li><a href="ui-carousel.html">Carrousel</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-command"></span
                            ><span class="mtext">Icônes</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="bootstrap-icon.html">Icônes Bootstrap</a></li>
                            <li><a href="font-awesome.html">Icônes FontAwesome</a></li>
                            <li><a href="foundation.html">Icônes Foundation</a></li>
                            <li><a href="ionicons.html">Icônes Ionicons</a></li>
                            <li><a href="themify.html">Icônes Themify</a></li>
                            <li><a href="custom-icon.html">Icônes personnalisées</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-pie-chart"></span
                            ><span class="mtext">Graphiques</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="highchart.html">Highchart</a></li>
                            <li><a href="knob-chart.html">jQuery Knob</a></li>
                            <li><a href="jvectormap.html">jvectormap</a></li>
                            <li><a href="apexcharts.html">Apexcharts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-file-earmark-text"></span
                            ><span class="mtext">Pages supplémentaires</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="video-player.html">Lecteur vidéo</a></li>
                            <li><a href="login.html">Connexion</a></li>
                            <li><a href="forgot-password.html">Mot de passe oublié</a></li>
                            <li><a href="reset-password.html">Réinitialiser le mot de passe</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-bug"></span
                            ><span class="mtext">Pages d'erreur</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="400.html">400</a></li>
                            <li><a href="403.html">403</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="500.html">500</a></li>
                            <li><a href="503.html">503</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-back"></span
                            ><span class="mtext">Pages supplémentaires</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="blank.html">Vide</a></li>
                            <li><a href="contact-directory.html">Répertoire de contacts</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-detail.html">Détail du blog</a></li>
                            <li><a href="product.html">Produit</a></li>
                            <li><a href="product-detail.html">Détail du produit</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="profile.html">Profil</a></li>
                            <li><a href="gallery.html">Galerie</a></li>
                            <li><a href="pricing-table.html">Tableaux de tarification</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-hdd-stack"></span
                            ><span class="mtext">Menu multi-niveaux</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="javascript:;">Niveau 1</a></li>
                            <li><a href="javascript:;">Niveau 1</a></li>
                            <li><a href="javascript:;">Niveau 1</a></li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <span class="micon fa fa-plug"></span
                                    ><span class="mtext">Niveau 2</span>
                                </a>
                                <ul class="submenu child">
                                    <li><a href="javascript:;">Niveau 2</a></li>
                                    <li><a href="javascript:;">Niveau 2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Niveau 1</a></li>
                            <li><a href="javascript:;">Niveau 1</a></li>
                            <li><a href="javascript:;">Niveau 1</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="sitemap.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-diagram-3"></span
                            ><span class="mtext">Plan du site</span>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-chat-right-dots"></span
                            ><span class="mtext">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoice.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span
                            ><span class="mtext">Facture</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Supplémentaire</div>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-file-pdf"></span
                            ><span class="mtext">Documentation</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="introduction.html">Introduction</a></li>
                            <li><a href="getting-started.html">Pour commencer</a></li>
                            <li><a href="color-settings.html">Paramètres de couleur</a></li>
                            <li>
                                <a href="third-party-plugins.html">Plugins tiers</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a
                            href="https://dropways.github.io/deskapp-free-single-page-website-template/"
                            target="_blank"
                            class="dropdown-toggle no-arrow"
                        >
                            <span class="micon bi bi-layout-text-window-reverse"></span>
                            <span class="mtext"
                                    >Page d'accueil</span>
                                    <img src="/back/vendors/images/coming-soon.png" alt="" width="25"
                                /></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>

        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="title">
                                    <h4>blank</h4>
                                </div>
                                <nav aria-label="breadcrumb" role="navigation">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Accueil</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            blank
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <div class="dropdown">
                                    <a
                                        class="btn btn-primary dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-toggle="dropdown"
                                    >
                                        Janvier 2018
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Exporter la liste</a>
                                        <a class="dropdown-item" href="#">Politiques</a>
                                        <a class="dropdown-item" href="#">Voir les actifs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30"></div>
                    @yield('content')
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
                });|
            }
        </script>
        @stack('scripts')
    </body>
</html>
