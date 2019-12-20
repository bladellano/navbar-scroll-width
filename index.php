<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Navbar Scroll</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

  <link href="lib/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
  <link href="lib/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<style>
  #owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
  }
</style>

<body>
  <div class="head">
    <div class="title">
     <!-- <h1><img src="img/logo.svg" alt=""></h1> -->
     
     <div class="row">
       <div class="col-md-3 text-center">
         <img src="img/logo_paideia.svg" alt="">
       </div>
       <div class="col-md-3">
         <div class="custom">
          <i class="fas fa-phone"></i>
          <h3>TELEFONES DE CONTATO</h3>
          <h4>91 98208-4651 / 91 98360-4463</h4>
        </div>
      </div>
      <div class="col-md-3">
       <div class="custom">
         <i class="fas fa-envelope"></i>
         <h3>E-MAIL PARA CONTATO</h3>
         <h4>contato@paideiaeducacional.com</h4>
       </div>
     </div>
     <div class="col-md-2">
       <div class="custom">
        <i class="fas fa-map-marker-alt"></i>
        <h3>ENDEREÇO</h3>
        <h4>Av. Gentil Bittencourt 1144.</h4>
      </div>
    </div>
    <div class="col-md-1">
      <a href="" class="icon-socials">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="icon-socials">
        <i class="fab fa-instagram"></i>
      </a> 

    </div>
  </div>
</div>
<div class="nav-menu" id="nav">
  <div class="logo-mobile"><img src="img/logo_pb_.svg"></div>

  <ul class="nav-links">
    <li class="active-menu_">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
      <a href="#">Home</a>
      <i class="fa fa-chevron-down" aria-hidden="true"></i>

      <div class="sub-menu">
        <ul>
          <li><a href="">Missão</a></li>
          <li><a href="">Visão</a></li>
          <li><a href="">Equipe</a></li>
        </ul>
      </div>       


    </li>
    <li>
      <a href="#">Blog</a>
    </li>
    <li>
      <a href="#">Video</a>
    </li>
    <li>
     <i class="fa fa-chevron-left" aria-hidden="true"></i>
     <a href="#">Contact</a>
     <i class="fa fa-chevron-down" aria-hidden="true"></i>

     <div class="sub-menu">
      <ul>
        <li><a href="">Missão</a></li>
        <li><a href="">Visão</a></li>
        <li><a href="">Equipe</a></li>
      </ul>
    </div>   

  </li>
  <li>
    <a href="#">About</a>
  </li>
</ul>



<div class="burger">
  <div class="line1"></div>
  <div class="line2"></div>
  <div class="line3"></div>
</div>
</div><!--nav-->
</div>

<!-- carousel -->
<div id="owl-demo" class="owl-carousel owl-theme">

  <div class="item"><img src="img/student1.jpg" alt=""></div>
  <div class="item"><img src="img/student2.jpg" alt=""></div>
  <div class="item"><img src="img/student3.jpg" alt=""></div>
  <div class="item"><img src="img/student4.jpg" alt=""></div>

</div>
<!-- End carousel -->

<section>
  <!-- section-1 -->
  <div id="information">
    <div class="container">        
     <div class="row">
       <div class="col-md 4">
         <p>61348 <small>Stadium Capacity</small></p>
       </div> 
       <div class="col-md 4">
         <p>2010 <small>Founded</small></p>
       </div>
       <div class="col-md 4">
         <p>7th <small>Eastern Conference</small></p>
       </div>           
     </div>
   </div>
 </div>

 <div id="links-services">
  <h2>Serviços</h2>
  <hr>
  <div class="container">        
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-4 col-6">
        <a href="#">
          <i class="fas fa-book-open"></i>
          <p>MATERIAL<br/>DIDÁTICO</p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-6">
        <a href="#">
         <i class="fas fa-tv"></i>
         <p>LOUSA<br/>DIGITAL</p>
       </a>
     </div>
     <div class="col-lg-2 col-md-4 col-sm-4 col-6">
      <a href="#">
        <i class="fas fa-vr-cardboard"></i>
        <p>AULAS<br/>3D</p>
      </a>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
      <a href="#">
        <i class="fab fa-pagelines"></i>
        <p>PARQUE DE<br/>ED. AMBIENTAL</p>
      </a>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
      <a href="#">
        <i class="fas fa-photo-video"></i>
        <p>BIBLIOTECA<br/>DIGITAL</p>
      </a>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
      <a href="#">
        <i class="fas fa-search"></i>
        <p>MAIS<br/>SERVIÇOS</p>
      </a>
    </div>
  </div>
</div>
</div>


<div id="about">
  <h2>Sobre a Empresa</h2>
  <hr>
  <div class="container">        
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis corporis possimus perferendis unde voluptates doloremque porro eligendi reprehenderit adipisci eveniet aliquam ipsa deleniti nemo, eius provident optio distinctio tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis corporis possimus perferendis unde voluptates doloremque porro eligendi reprehenderit adipisci eveniet aliquam ipsa deleniti nemo, eius provident optio distinctio tenetur.</p>
  </div>
</div>

<div id="services">
  <div class="container">        
   <div class="row">
     <div class="col-md-6">
      <h2>Criação de Sites Responsivos e Mobiles</h2>
      <p>Criação de sites mobiles e responsivos. Sites que se adaptam a qualquer resolução de tela, sem criar barra de rolagem.</p>
      <p>Em 2016, o acesso à internet via dispositivos móvel (ou mobile) ultrapassou os acessos via desktop.</p>
      <button class="btn btn-outline-primary">SOLICITAR ORÇAMENTO</button>
      <br/><br/>
    </div>
    <div class="col-md-6">
      <img class="img-fluid" src="img/carl-heyerdahl.jpg" alt="">
    </div>
  </div>
</div>
</div>

<div id="location">
  <div class="container">    
    <h2>Localização</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, delectus sunt architecto iusto fugit saepe! Fuga eos nesciunt cupiditate, quo architecto illum, placeat, maxime nemo voluptatibus cumque explicabo reprehenderit et. orem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, delectus sunt architecto iusto fugit saepe! Fuga eos nesciunt cupiditate, quo architecto illum, placeat, maxime nemo voluptatibus cumque explicabo reprehenderit et.
    </p>
  </div>
</div>
<div id="footer"> 
  <div class="container-fluid"> 
    <div class="row">      
     <div class="col-md-3">      <h3>Institucional</h3>
        <ul>
          <li><a href="#">Inicial</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Portfólio</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Orçamento</a></li>
          <li><a href="#">Fale Conosco</a></li>
        </ul></div>
     <div class="col-md-3">
        <h3>Institucional</h3>
        <ul>
          <li><a href="#">Inicial</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Portfólio</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Orçamento</a></li>
          <li><a href="#">Fale Conosco</a></li>
        </ul>
     </div>
     <div class="col-md-3">      <h3>Institucional</h3>
        <ul>
          <li><a href="#">Inicial</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Portfólio</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Orçamento</a></li>
          <li><a href="#">Fale Conosco</a></li>
        </ul></div>
     <div class="col-md-3">      <h3>Institucional</h3>
        <ul>
          <li><a href="#">Inicial</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Portfólio</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Orçamento</a></li>
          <li><a href="#">Fale Conosco</a></li>
        </ul></div>
   </div>   
 </div>

</section>

<script src="lib/jquery/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="lib/owl-carousel/owl.carousel.min.js"></script>
<script src="main.js"></script>
<script>
  $(document).ready(function() {

    $("#owl-demo").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      navigation:false,
      autoPlay:true
    });

  });
</script>
</body>

</html>