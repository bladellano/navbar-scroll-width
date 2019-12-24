(function(doc, win) {

    'use strict';

    const nav = doc.querySelector('#nav');

    win.onscroll = () => {
        if (win.pageYOffset > 100) {
            nav.style.position = 'fixed';
            nav.style.top = 0;
            // nav.style.opacity = '0.9';
        } else {
            nav.style.position = 'relative';
        }
    }

    const navSlide = () => {
        const burger = doc.querySelector('.burger');
        const nav = doc.querySelector('.nav-links');
        const navLinks = doc.querySelectorAll('.nav-links li');

        burger.addEventListener('click', () => {
            //Toggle Nav
            nav.classList.toggle('nav-active');

            //Animate Links
            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.1s ease forwards ${index / 7 + 0}s`;
                }
            });
            //Burger Animation
            burger.classList.toggle('toggle');
        });


    }
    navSlide();

    //Scroll suave links internos.
    $('.nav-links li a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;            
        $('html, body').animate({ 
            scrollTop: targetOffset - 100
        }, 1000);
    });

    //Botão topo do site.
    $(window).scroll(function(e) {
        if($(this).scrollTop() > 0){
            $('.topo').fadeIn();
        } else {
            $('.topo').fadeOut();
        }
    });

    $('.topo').click(function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500)
    });



    window.sr = ScrollReveal({reset: true});
    sr.reveal('#footer .container-fluid .row .col-md-3', {
        delay: 400,
        scale: 0
    });
    sr.reveal('#information .container .row .col-md-4', {
        delay: 400,
        scale: 0
    });   
    sr.reveal('#links-services .container .row .col-lg-2 a', {
        delay: 400,
        scale: 0
    });  
    sr.reveal('.embed-responsive', {
        delay: 400,
        scale: 0
    });

})(document, window);