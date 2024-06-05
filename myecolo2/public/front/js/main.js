(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);
// Pour mettre l'accent sue la section ou la page actuelle 

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


// Fin de la méthode

    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow');
            } else {
                $('.fixed-top').removeClass('shadow');
            }
        } else {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow').css('top', -55);
            } else {
                $('.fixed-top').removeClass('shadow').css('top', 0);
            }
        } 
    });

    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });


    // vegetable carousel
    $(".vegetable-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });



    // Product Quantity
    // $('.quantity button').on('click', function () {
    //     var button = $(this);
    //     var oldValue = button.parent().parent().find('input').val();
    //     if (button.hasClass('btn-plus')) {
    //         var newVal = parseFloat(oldValue) + 1;
    //     } else {
    //         if (oldValue > 0) {
    //             var newVal = parseFloat(oldValue) - 1;
    //         } else {
    //             newVal = 0;
    //         }
    //     }
    //     button.parent().parent().find('input').val(newVal);
    // });

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
    
        // Gestion des checkboxes de paiement pour n'en permettre qu'une seule à la fois
        $('.payment-checkbox').on('change', function() {
            $('.payment-checkbox').not(this).prop('checked', false);
        });
    
        // Met à jour les totaux au chargement de la page
        updateTotals();
    });
    
    
    

})(jQuery);

