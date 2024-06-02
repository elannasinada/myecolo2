<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Site favicon -->

	<link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="/style_assets/img/site/{{ get_settings()->site_favicon }}"
    />

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyEcolo - Acceuil</title>

	<!-- Tailwind -->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

	<!-- Alpine -->
	<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
	<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>

    <!-- AOS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom style -->
	<link rel="stylesheet" href="style_assets/css/myecolo.css" />

    <!-- Poppins font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
	<!-- navbar -->
	<div x-data="{ open: false }" class="w-full text-gray-700 bg-cream">
        <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
            <div class="flex flex-row items-center justify-between py-6">
                <div class="relative md:mt-8">
                    <a href="#" class="text-lg relative z-50 font-bold tracking-widest text-gray-900 rounded-lg focus:outline-none focus:shadow-outline">
                        <img src="style_assets/img/MyEcolo-logo-1.png" class="w-40">
                    </a>
                </div>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'transform md:transform-none': !open, 'h-full': open }" class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="#">Acceuil</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="#forwho">Pour Qui?</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="#objectifs">Nos Objectifs</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href= "#about">Qui sommes-nous?</a>
                <a class="px-10 py-3 mt-2 text-sm text-center bg-white text-gray-800 rounded-full md:mt-8 md:ml-4" href="#">Se connecter</a>
                <a class="px-10 py-3 mt-2 text-sm text-center bg-yellow-500 text-white rounded-full md:mt-8 md:ml-4" href="#">S'inscrire</a>
            </nav>
        </div>
    </div>
	<div class="bg-cream">
		<div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start">
			<!--Left Col-->
			<div class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
				<h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-darken">
					<span class="text-yellow-500">Se régaler</span> tout en préservant la planète !
				</h1>
				<p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8"> C'est désormais possible avec MyEcolo, votre allié éco-responsable pour une gestion intelligente des déchets alimentaires.</p>
				<div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
					<button class="lg:mx-0 bg-yellow-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
						Rejoignez gratuitement
					</button>
					<div class="flex items-center justify-center space-x-3 mt-5 md:mt-0 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
						<button class="bg-white w-14 h-14 rounded-full flex items-center justify-center">
							<svg class="w-5 h-5 ml-2" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22.5751 12.8097C23.2212 13.1983 23.2212 14.135 22.5751 14.5236L1.51538 27.1891C0.848878 27.5899 5.91205e-07 27.1099 6.25202e-07 26.3321L1.73245e-06 1.00123C1.76645e-06 0.223477 0.848877 -0.256572 1.51538 0.14427L22.5751 12.8097Z" fill="#23BDEE"/>
							</svg>
						</button>
						<span class="cursor-pointer">Comment ça marche?</span>
					</div>
				</div>
			</div>
			<!--Right Col-->
			<div class="w-full lg:w-6/12 lg:-mt-10 relative" id="man">
				<img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-20" src="style_assets/img/man-grocery.png" />
				<!-- alert -->
				<div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="absolute top-20 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4">
					<img class="bg-white bg-opacity-93 rounded-lg h-12 sm:h-16" src="style_assets/img/alert.png">
				</div>
				<!-- red -->
				<div data-aos="fade-up" data-aos-delay="400" data-aos-once="true" class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating">
					<svg class="h-16 sm:h-24" viewBox="0 0 149 149" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><rect x="40" y="32" width="69" height="69" rx="14" fill="#F3627C"/></g><rect x="51.35" y="44.075" width="47.3" height="44.85" rx="8" fill="white"/><path d="M74.5 54.425V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round"/><path d="M65.875 58.7375L65.875 78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round"/><path d="M83.125 63.9125V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round"/><defs><filter id="filter0_d" x="0" y="0" width="149" height="149" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dy="8"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.825 0 0 0 0 0.300438 0 0 0 0 0.396718 0 0 0 0.26 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
				</div>
				<!-- promo -->
				<div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-24 lg:-left-4 floating">
					<img class="bg-white bg-opacity-93 rounded-lg h-20 sm:h-28" src="style_assets/img/promo.png" alt="">
				</div>
				<!-- super -->
				<div data-aos="fade-up" data-aos-delay="600" data-aos-once="true" class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
					<img class="bg-white bg-opacity-93 rounded-lg h-12 sm:h-16" src="style_assets/img/super.png" alt="">
				</div>
			</div>
		</div>
		<div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
			<svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
				<path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" fill="currentColor"></path>
			</svg>
			<div class="bg-white w-full h-20 -mt-px"></div>
		</div>
	</div>

	<!-- container -->
	<div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">

        <!-- trusted by -->
        <div class="max-w-4xl mx-auto">
            <h1 class="text-center mb-3 text-gray-400 font-medium">Plusieurs entreprises agroalimentaires nous font confiance!</h1>
            <div class="grid grid-cols-3 lg:grid-cols-6 gap-4 justify-items-center">
                <img class="h-12 grayscale" src="style_assets/img/company/koutoubia.svg">
                <img class="h-12 grayscale" src="style_assets/img/company/tria.svg">
                <img class="h-12 grayscale" src="style_assets/img/company/jaouda.svg">
                <img class="h-12 grayscale" src="style_assets/img/company/knor.svg">
                <img class="h-12 grayscale" src="style_assets/img/company/henrys.svg">
                <img class="h-12 grayscale" src="style_assets/img/company/tonik.svg">
            </div>
        </div>

		<!-- Révolutionnons la gestion-->
		<div data-aos="flip-up" class="max-w-xl mx-auto text-center mt-24">
			<h1 class="font-bold text-darken my-3 text-2xl">Révolutionnons <span class="text-yellow-500">la gestion des déchets alimentaires!</span></h1>
			<p class="leading-relaxed text-gray-500">Chez MyEcolo, nous croyons qu'il est temps de repenser notre relation avec la nourriture et notre impact sur la planète.</p>
		</div>
		<!-- card -->
		<div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-20">
			<div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
				<div style="background: #5B72EE;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
					<img src="style_assets\img\plat.svg" alt="plat" width="35" height="35">
				</div>
				<h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Sauvez de la nourriture près de chez vous.</h1>
				<p class="px-4 text-gray-500">Connectez-vous aux commerces locaux pour récupérer des produits alimentaires de qualité avant qu'ils ne soient gaspillés.</p>
			</div>
			<div data-aos="fade-up" data-aos-delay="150" class="bg-white shadow-xl p-6 text-center rounded-xl">
				<div style="background: #F48C06;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
					<img src="style_assets\img\bartender.svg" alt="supermarket" width="35" height="35">
				</div>
				<h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Découvrir de nouveaux produits des supermarchés, cafés, boulangeries et restaurants locaux.</h1>
				<p class="px-4 text-gray-500">Parcourez une variété de produits frais provenant de supermarchés, cafés, boulangeries et restaurants de votre quartier.</p>
			</div>
			<div data-aos="fade-up" data-aos-delay="300" class="bg-white shadow-xl p-6 text-center rounded-xl">
				<div style="background: #29B9E7;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
					<img src="style_assets\img\money.svg" alt="supermarket" width="35" height="35">
				</div>
				<h1 class="font-medium text-xl mb-3 lg:px-14 text-darken lg:h-14 pt-3">Savourer des repas à prix réduits.</h1>
				<p class="px-4 text-gray-500">Profitez de délicieux repas et produits à moitié prix ou moins, tout en contribuant à réduire le gaspillage alimentaire.</p>
			</div>
		</div>

		<!-- lorem 3:2 images here -->
		<div id= "forwho" class="mt-28">
			<div data-aos="flip-down" class="text-center max-w-screen-md mx-auto">
				<h1 class="text-3xl font-bold mb-4">C’est pour qui <span class="text-yellow-500">MyEcolo?</span></h1>
				<p class="text-gray-500">Notre plateforme tout-en-un offre une approche novatrice pour gérer les déchets alimentaires, tout en encourageant une consommation plus consciente et durable.</p>
			</div>
			<div data-aos="fade-up" class="flex flex-col md:flex-row justify-center space-y-5 md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
				<div class="relative md:w-5/12">
					<img class="rounded-2xl" src="style_assets/img/seller.jpg" alt="">
					<div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
						<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
							<h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">Vendeur ou livreur?</h1>
                            <button class="rounded-full text-white border text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                                <a href="{{ route('seller.register') }}">Rejoindre aujourd'hui</a>
                            </button>
                                                    </div>
					</div>
				</div>
				<div class="relative md:w-5/12">
					<img class="rounded-2xl" src="style_assets/img/client.jpg" alt="">
					<div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
						<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
							<h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">Client?</h1>
							<button class="rounded-full text-white text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out" style="background: rgba(35, 189, 238, 0.9)">Bénéficiez de nos services</button>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div id="objectifs" class="mt-28">
            <div data-aos="flip-down" class="text-center max-w-screen-md mx-auto">
                <h1 class="text-3xl font-bold mb-4">Nos <span class="text-yellow-500">objectifs?</span></h1>
            </div>
        <div class="mt-28">

		<div class="sm:flex items-center sm:space-x-8 mt-36">
			<div data-aos="fade-right" class="sm:w-1/2 relative">
				<div class="bg-yellow-500 rounded-full absolute w-12 h-12 z-0 -left-4 -top-3 animate-pulse"></div>
				<h1 class="font-semibold text-2xl relative z-50 text-darken lg:pr-10">Lutter contre <span class="text-yellow-500">le Gaspillage Alimentaire</span></h1>
				<p class="py-5 lg:pr-32">Réduire le gaspillage alimentaire en permettant aux grandes surfaces et aux vendeurs de vendre leurs produits alimentaires proches de leur date de péremption à prix réduit, plutôt que de les jeter.</p>
			</div>
			<div data-aos="fade-left" class="sm:w-1/2 relative mt-10 sm:mt-0">
				<div style="background: #23BDEE;" class="floating w-24 h-24 absolute rounded-lg z-0 -top-3 -left-3"></div>
				<img class="rounded-xl z-40 relative" src="style_assets/img/gaspillage.jpg" alt="">
				<div class="bg-yellow-500 w-40 h-40 floating absolute rounded-lg z-10 -bottom-3 -right-3"></div>
			</div>
		</div>

		<div class="md:flex mt-40 md:space-x-10 items-start">
			<div data-aos="fade-down" class="md:w-7/12 relative">
				<div style="background: #33EFA0" class="w-32 h-32 rounded-full absolute z-0 left-4 -top-12 animate-pulse"></div>
				<div style="background: #33D9EF;" class="w-5 h-5 rounded-full absolute z-0 left-36 -top-12 animate-ping"></div>
				<img class="relative z-50 floating" src="style_assets/img/ecosystem.png" alt="">
				<div style="background: #5B61EB;" class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse"></div>
				<div style="background: #F56666;" class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"></div>
			</div>
			<div data-aos="fade-down" class="md:w-5/12 mt-20 md:mt-0 text-gray-500">
				<h1 class="text-2xl font-semibold text-darken lg:pr-40">Favoriser <span class="text-yellow-500">la collaboration </span>entre les acteurs de la chaîne alimentaire.</h1>
				<div class="flex items-center space-x-5 my-5">
					<div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
						<svg class="w-4 h-4" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="11.8182" height="11.8182" rx="2" fill="#2F327D"/>
							<rect y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#2F327D"/>
							<rect x="14.7727" width="11.8182" height="11.8182" rx="2" fill="#2F327D"/>
							<rect x="14.7727" y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#F48C06"/>
						</svg>
					</div>
					<p>En créant un écosystème où chaque acteur joue un rôle dans la réduction du gaspillage alimentaire.</p>
				</div>
				<div class="flex items-center space-x-5 my-5">
					<div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
						<svg class="w-4 h-4" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="8" y="6" width="20" height="20" rx="2" fill="#2F327D"/>
							<rect width="21.2245" height="21.2245" rx="2" fill="#F48C06"/>
						</svg>
					</div>
					<p>Une gamme de fonctionnalités, y compris la recherche et le filtrage, la gestion de l'inventaire et bien d'autres encore.</p>
				</div>
				<div class="flex items-center space-x-5 my-5">
					<div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
						<svg class="w-4 h-4" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.5 11.375C6.15469 11.375 7.5 9.91758 7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.33242 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9.91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25 7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.4375 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z" fill="#2F327D"/>
						</svg>
					</div>
					<p>Un espace dédié pour chaque utilisateur (consommateur, vendeur, livreur et administrateur).</p>
				</div>
			</div>
		</div>

		<!-- Optimisation des stocks -->
		<div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
			<div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
				<h1 class="text-darken font-semibold text-3xl lg:pr-56"><span class="text-yellow-500">Optimisation </span>des Stocks Alimentaires</h1>
				<p class="text-gray-500 my-4 lg:pr-32">Optimiser la gestion des stocks en permettant aux grandes surfaces et aux vendeurs de vendre les produits alimentaires excédentaires ou proches de leur date de péremption avant qu’ils ne soient jetés.</p>
			</div>
			<img data-aos="fade-left" class="md:w-1/2" src="style_assets/img/epicerie.png">
		</div>

		<!-- Assessments, Quizzes, Tests -->
		<div class="mt-20 flex flex-col-reverse md:flex-row items-center md:space-x-10">
			<div data-aos="fade-right" class="md:w-6/12">
				<img class="md:w-11/12" src="style_assets/img/secured.png">
			</div>
			<div data-aos="fade-left" class="md:w-6/12 md:transform md:-translate-y-20">
				<h1 class="font-semibold text-darken text-3xl lg:pr-64">Assurer <span class="text-yellow-500">la sécurité,la performance et la convivialité</span> de l’application</h1>
				<p class="text-gray-500 my-5 lg:pr-52">Pour une expérience utilisateur optimale!</p>
			</div>
		</div>

		<!-- Catégories -->
		<div class="mt-24 flex flex-col md:flex-row items-start md:space-x-10">
			<div data-aos="zoom-in-right" class="md:w-6/12">
				<img class="md:w-8/12 mx-auto" src="style_assets/img/categories.png">
			</div>
			<div data-aos="zoom-in-left" class="md:w-6/12">
				<div class="flex items-center space-x-20 mb-5">
					<span class="border border-gray-300 w-14 absolute"></span>
					<h1 class="text-gray-400 tracking-widest text-sm">Quatres catégories principales</h1>
				</div>
				<h1 class="font-semibold text-darken text-2xl lg:pr-40">10+ sous-catégories <span class="text-yellow-500">à explorer</span></h1>
				<p class="text-gray-500 my-5 lg:pr-20">Épicerie, Liquide, Crémerie, Fromagerie, Charcuterie & Saurisserie Surgelé, Fruits et légumes, Poissonnerie etc..</p>
				<button class="px-5 py-3 border border-yellow-500 text-yellow-500 font-medium my-4 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full">S'authentifier pour explorer nos produits</button>
			</div>
		</div>

		<!-- Qui sommes-nous? -->
		<div id="about" class="mt-24 flex flex-col-reverse md:flex-row items-start md:space-x-10">
			<div data-aos="zoom-in-right" class="md:w-5/12">
				<div class="flex items-center space-x-20 mb-5">
					<span class="border border-gray-300 w-14 absolute"></span>
					<h1 class="text-gray-400 tracking-widest text-sm">Qui sommes-nous?</h1>
				</div>
				<h1 class="font-semibold text-darken text-2xl lg:pr-40">EL ANNASI Nada</h1>
				<h1 class="font-semibold text-darken text-2xl lg:pr-40">YOUSFI Wiame</h1>
				<p class="text-gray-500 my-5 lg:pr-36">Deux jeunes étudiantes de première année de la filière Génie Logicile à l'ENSIAS.</p>
				<p class="text-gray-500 my-5 lg:pr-36">NB: Cette application web a été réalisé dans le cadre du projet fédérateur.</p>
			</div>
			<div data-aos="zoom-in-left" class="md:w-7/12">
				<img class="md:w-10/12 mx-auto" src="style_assets/img/nada_wiame.png">
			</div>
		</div>

	<!-- .Footer -->
	<footer class="mt-32" style="background-color: #123411;">
		<div class="max-w-lg mx-auto">
			<div class="flex py-12 justify-center text-white items-center px-20 sm:px-36">
				<div class="relative">
					<img src="style_assets/img/MyEcolo-dark.png" class="w-40">
				</div>
				<span class="border-l border-gray-500 text-sm pl-5 py-2 font-semibold">Minimize Waste, Maximize Taste</span>
			</div>
			<div class="text-center text-white">
				<div class="py-3 tracking-wide">
					<p>© 2024 MyEcolo Made With By EL ANNASI Nada & YOUSFI Wiame - All Rights Reserved<span class="font-semibold"></span></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- AOS init -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    	AOS.init();
    </script>
</body>
</html>
