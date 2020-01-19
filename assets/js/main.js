    (function(doc, win) {

        'use strict';

        /* Mascara para o campo telefone */
        $('input[name="telefone"]').mask('(00) 00000-0000');

        /* Formulário de Contato */
     /*   $('input[name="nome"]').val('Camilo Pesanha Silva');
        $('input[name="email"]').val('camilopesanha1988@gmail.com');
        $('input[name="telefone"]').val('(91)98265-0277');
        $('textarea[name="mensagem"]').val(`LoremIpsum360 ° é um gerador on-line falso texto livre. Ele oferece um simulador de texto completo para gerar texto de substituição ou texto alternativo para seus modelos. Possui textos aleatórios diferentes em latim e cirílico para gerar exemplos de textos em diferentes línguas.

        LoremIpsum360 ° também lhe dá a capacidade de adicionar marcas de pontuação, acentos e caracteres especiais, para estar mais perto dos idiomas francês ou outras. Além disso, se você quiser ver os resultados em diferentes tipos de letra, você vai encontrar muitos recursos para definir como font-family, font-size, text-align ou line-heigh.`);*/

        $('.form-contato').submit(function(e) {
            e.preventDefault();

            const data = $(this).serializeArray();

            const pattEmail = /^[a-z0-9.|_]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/g;
            const pattName = /\D\w/g;

            const email    = $('input[name="email"]').val();
            const name     = $('input[name="nome"]').val();
            const telefone = $('input[name="telefone"]').val();
            const mensagem = $('textarea[name="mensagem"]').val();

            if(!pattName.test(name))
                return alertify.error('Preencha o corretamente o campo nome.');
            if(!pattEmail.test(email))
                return alertify.error('Preencha o corretamente o campo e-mail.');
            if(telefone.length ==0)
                return alertify.error('Preencha corretamente o campo telefone');
            if(mensagem.length ==0)
                return alertify.error('Preencha o campo mensagem.');

            $('.form-contato :input').attr('disabled','disabled');
            $('button[type="submit"]').text('ENVIANDO...');

            $.post("send-mail.php",data, function(data, status){
                // console.log("data", data);
                if(status == "success"){
                    $('.form-contato :input').attr('disabled',false);
                    $('button[type="submit"]').text('ENVIAR');
                    alertify.success('E-mail enviado com sucesso!');
                }
            });
            return $(this)[0].reset();

        });


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