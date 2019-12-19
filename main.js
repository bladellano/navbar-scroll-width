(function(doc, win) {

    'use strict';

    const nav = doc.querySelector('#nav');

    win.onscroll = () => {
        if (win.pageYOffset > 100) {
            nav.style.position = 'fixed';
            nav.style.top = 0;
            nav.style.opacity = '0.9';
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
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0}s`;
                }
            });
            //Burger Animation
            burger.classList.toggle('toggle');
        });


    }
    navSlide();

})(document, window);