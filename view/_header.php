<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- GLOBAL SITE TAG (GTAG.JS) - GOOGLE ANALYTICS -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156612719-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-156612719-1');
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>.: Paideia Educacional :.</title>

  <meta name="author" content="FireFly Desenvolvimento">
  <meta name="description" content="Acessória e Consultoria em Projetos Educacionais e Empresariais, Promoções de eventos educacionais e Assessoramento e Acompanhamento de estudos em aulas Particulares.">
  <meta name="keywords" content="belém, pará, cursos, eventos, consultoria, assessoria, empresa, aulas particulares, negócio, escolas, educação básica, educação infantil, ensino fundamental, escolas profissionalizante, escolas técnicas, acadêmicos, mercado.">
  <meta name="copyright" content="© 2019 Paideia Educacional" />

  <link href="lib/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="lib/fontawesome/all.min.css" rel="stylesheet">
  <link href="lib/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
  <link href="lib/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
  <link href="lib/slick/slick.css" rel="stylesheet" type="text/css">
  <link href="lib/slick/slick-theme.scss" rel="stylesheet" type="text/css">

  <link href="assets/css/redes-socials.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  <script src="lib/angularjs/angular.min.js"></script>
</head> 

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>

<body>




  <!-- MODAL -->
  <div class="modal fade" id="modalInscricao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Formulário de Inscrição</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="form-inscricao">
          <div class="modal-body">

           <div class="form-group">
            <label for="nome_inscrito">Nome Completo</label>
            <input type="text" class="form-control" id="nome_inscrito" name="nome_inscrito" placeholder="Digite seu nome completo" required>
          </div>

          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
          </div>

          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" maxlength="11" name="cpf" placeholder="Digite seu cpf" required>
          </div>

          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
          </div>
          
          <label for="nome_evento">Evento</label>
          <select class="form-control" name="nome_evento" id="nome_evento">
            <option value="VENDAS_PODEROSAS_02_04_2020">VENDAS PODEROSAS 02/04/2020 - KOTARO TUJI</option>
          </select>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary" name="btn-inscricao">Salvar</button>
          <!-- <button type="button" class="btn btn-primary" onclick="postdata()"> Salvar</button> -->
        </div>
      </form>
    </div>
  </div>
</div>
<!-- FIM MODAL -->



<div class="container-fluid">
  <div class="row linha-top">
    <div class="col-md-12 text-right"><a class="d-none d-sm-block" href="http://webmail.umbler.com/" target="_blank">Webmail</a></div>
  </div>
  <div class="row title">
    <div class="col-md-3 text-left">
     <a href="./"><img src="assets/img/logo_2.svg" alt=""></a>
   </div>  
   <div class="col-md-1">
 <!--       <div class="custom">
        <i class="fas fa-map-marker-alt"></i>
        <h3>ENDEREÇO</h3>
        <h4>Av. Gentil Bittencourt 0000.</h4>
      </div> -->
    </div>
    <div class="col-md-3">
     <div class="custom">
      <i class="fas fa-phone"></i>
      <h3>TELEFONES DE CONTATO</h3>
      <h4>91 98360-4463 / 91 98208-4651</h4>
    </div>
  </div>
  <div class="col-md-3">
   <div class="custom">
     <i class="fas fa-envelope"></i>
     <h3>E-MAIL PARA CONTATO</h3>
     <h4>diretor@paideiaeducacional.com</h4>
   </div>
 </div>

 <div class="col-md-2 text-right">
  <a href="https://www.facebook.com/paideiaeducacionalpa/" target="_blank" class="icon-socials">
    <i class="fab fa-facebook-f"></i>
  </a>
  <a href="https://www.instagram.com/paideiaeducacional/" target="_blank" class="icon-socials">
    <i class="fab fa-instagram"></i>
  </a> 
  <a href="https://www.youtube.com/channel/UCENeiT9xC9E6REBOzli7a7A" target="_blank" class="icon-socials">
    <i class="fab fa-youtube"></i>
  </a> 

</div>
</div>
</div>

<div class="rede">  
  <div id="whatsapp"><a href="https://api.whatsapp.com/send?phone=5591981769979" target="_blank" class="fab fa-whatsapp"></a></div>
</div>

<div class="head"> 
  <div class="nav-menu" id="nav">
   <div class="logo-mobile"><img src="assets/img/logo_1.svg"></div>   
   <ul class="nav-links">
    <li class="efeito-hr"><a href="./">Home<hr></a></li>
    <li class="efeito-hr"><a href="#sobre-nos">Sobre nós<hr></a></li>
    <li>
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
      <a href="#">Serviços</a>
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
      <div class="sub-menu">
        <ul>
          <li class="efeito-hr"><a href="assessoria">Assessoria<hr></a></li>
          <li class="efeito-hr"><a href="consultoria">Consultoria<hr></a></li>
          <li class="efeito-hr"><a href="cursos-on-line">Cursos on-line<hr></a></li>
        </ul> 
      </div>
    </li>
    <li class="efeito-hr"><a href="#eventos">Eventos<hr></a></li>
    <li class="efeito-hr"><a href="#depoimentos">Depoimentos<hr></a></li>
    <li class="efeito-hr"><a href="#fale-conosco">Fale Conosco<hr></a></li>
    <!-- <li><a class="btn btn-success" href="#" data-toggle="modal" data-target="#modalExemplo">CONSULTE-NOS</a></li> -->
    <li><a class="btn btn-success" href="#fale-conosco">CONSULTE-NOS</a></li>
  </ul>

  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</div><!--NAV-->
</div>