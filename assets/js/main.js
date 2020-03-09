       
(function(doc, win) {

    'use strict';

    $('#nome_inscrito').val('Caio Dellano');
    $('#email').val('bladellano@yahoo.com.br');
    $('#cpf').val('83202919253');
    $('#telefone').val('(91) 9 9999-9999'); 

    /* MASCARA PARA O CAMPO TELEFONE */
    $('input[name="telefone"],#input-telefone').mask('(00) 00000-0000');

    /* VALIDAÇÃO/INSERÇÃO DE DADOS DO FORMULÁRIO DE INSCRIÇÃO */

    $('#form-inscricao').submit(function(e) {
        e.preventDefault();
        const data = $(this).serializeArray();

        $('#form-inscricao :input').attr('disabled',true);
        $('button[name="btn-inscricao"]').text('Processando...'); 
        //INSERINDO DADOS NA TABELA
        $.ajaxSetup({async: false});  
        $.post('inserindo-inscricao', data, function(r) {
            let resp = JSON.parse(r);
            if(resp.success){
                data.push({
                    name:'n_inscricao', 
                    value:String(resp.n_inscricao)
                });         
                // return alertify.success(resp.msg); 
                return alertify.alert('PARABÉNS!',resp.msg + ', por favor anote.', function(){
                    alertify.message('OK');
                    $('button span[aria-hidden=true]').trigger('click');/*FECHA MODAL*/
                }); 
            }
            return alertify.error(resp.msg);   
        });

        //ENVIANDO E-MAIL COM DADOS DA INSCRIÇÃO
        $.post("send-mail-inscricao.php",data, function(r){
            let resp = JSON.parse(r);
            if(resp.success){
                alertify.success(resp.msg);
            } else {
                alertify.error(resp.msg);
            }

            $('button[name="btn-inscricao"]').text('Salvar');               
            $('#form-inscricao :input').attr('disabled',false);
        });

        $(this)[0].reset();/*LIMPA CAMPOS DO FORMULÁRIO*/
    });

    /* VALIDAÇÃO DE FORMULÁRIO DE CONTATO */
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
            if(status == "success"){
                $('.form-contato :input').attr('disabled',false);
                $('button[type="submit"]').text('ENVIAR');
                alertify.success('E-mail enviado com sucesso!');
            }
        });
        return $(this)[0].reset();

    });

    /* FIXA O NAVBAR */
    const navbar = doc.querySelector('#nav');
    win.onscroll = () => {
        if (win.pageYOffset > 100) {
            navbar.style.position = 'fixed';
            navbar.style.top = 0;
                // nav.style.opacity = '0.9';
            } else {
                navbar.style.position = 'relative';
            }
        }

        /* MENU MOBILE */
        const burger = doc.querySelector('.burger');
        const nav = doc.querySelector('.nav-links');
        const navLinks = doc.querySelectorAll('.nav-links li');

        doc.addEventListener("click", function(e) {
            let click = new Event("click");
            let fora = !burger.contains(e.target);
            if(fora && nav.classList.contains('nav-active'))
             burger.dispatchEvent(click);                

     });

        const navSlide = () => {                    

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

        /*Scroll suave entre links internos.*/
        $('.nav-links li a[href^="#"]').click(function(e){
            e.preventDefault();
            let id = $(this).attr('href');
            let url = window.location.href.split('/');
            url.pop();

            if(typeof $(id).offset()  == 'undefined'){
                let urlAtual = url.join('/')+"/"+id;
                return location.replace(urlAtual);
            }

            let targetOffset = $(id).offset().top; 
            $('html, body').animate({ 
                scrollTop: targetOffset - 100
            }, 1000);
        });

        /*Botão que surge no rodapé p/ ir até o topo.*/
        $(window).scroll(function(e) {
            if($(this).scrollTop() > 0){
                $('.topo').fadeIn();
            } else {
                $('.topo').fadeOut();
            }
        });

        /*BOTÃO TOPO DO SITE.*/
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