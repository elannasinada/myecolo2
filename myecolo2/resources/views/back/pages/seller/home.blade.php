@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Tableau de bord vendeur')
@section('content')

@if(Auth::user()->status == 'Active')
    {{-- <div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Tableau de bord</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">
										Tableau de bord
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
									Mai 2024
								</a>

							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix progress-box">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial1"
									value="80"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#1b00ff"
									data-angleOffset="180"
									readonly
								/>
                                <h5 class="text-blue padding-top-10 h5">Mes gains</h5>
								<span class="d-block"
									>80% en moyenne <i class="fa fa-line-chart text-blue"></i
								></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial2"
									value="70"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#00e091"
									data-angleOffset="180"
									readonly
								/>
                                <h5 class="text-light-green padding-top-10 h5">
                                    Activité commerciale capturée
                                </h5>
								<span class="d-block"
									>75% en moyenne <i class="fa text-light-green fa-line-chart"></i
								></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial3"
									value="90"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#f56767"
									data-angleOffset="180"
									readonly
								/>
                                <h5 class="text-light-orange padding-top-10 h5">
                                    Clients satistaits
								</h5>
								<span class="d-block"
									>90% en moyenne <i class="fa text-light-orange fa-line-chart"></i
								></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial4"
									value="65"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#a683eb"
									data-angleOffset="180"
									readonly
								/>
								<h5 class="text-light-purple padding-top-10 h5">
									Commandes en attente
								</h5>
								<span class="d-block"
									>65% en moyenne <i class="fa text-light-purple fa-line-chart"></i
								></span>
							</div>
						</div>
					</div>
				</div>






				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 pt-10 height-100-p">
                            <h2 class="mb-30 h4">Visites par navigateur</h2>
							<div class="browser-visits">
								<ul>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="back/vendors//images/chrome.png" alt="" />
										</div>
										<div class="browser-name">Google Chrome</div>
										<div class="visit">
											<span class="badge badge-pill badge-primary">50%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="back/vendors//images/firefox.png" alt="" />
										</div>
										<div class="browser-name">Mozilla Firefox</div>
										<div class="visit">
											<span class="badge badge-pill badge-secondary">40%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="back/vendors//images/safari.png" alt="" />
										</div>
										<div class="browser-name">Safari</div>
										<div class="visit">
											<span class="badge badge-pill badge-success">40%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="back/vendors//images/edge.png" alt="" />
										</div>
										<div class="browser-name">Microsoft Edge</div>
										<div class="visit">
											<span class="badge badge-pill badge-warning">20%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="back/vendors//images/opera.png" alt="" />
										</div>
										<div class="browser-name">Opera Mini</div>
										<div class="visit">
											<span class="badge badge-pill badge-info">20%</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

                    <div class="col-lg-7 col-md-12 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
                            <div class="content">
                                <h4 class="mb-30 h4">Atteignez un public plus large avec nos services premium</h3>
                            </div>
                            <div class="img pb-30">
								<img src="back/vendors/images/paper-map-cuate.svg" alt="" />
							</div>

                        </div>
					</div>
				</div>
			</div>
	</div> --}}
@else
    <h4 class="mb-30 h4" style="color:red"> Votre compte est inactif. </h4>
    <br> <br>
    <h4 class="mb-30 h4">attendre la validation de votre document d'exploitation commerciale par l'administrateur.
    </h4>
@endif


@endsection
