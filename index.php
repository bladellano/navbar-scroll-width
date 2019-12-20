<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Navbar Scroll</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
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
     <img src="img/logo.svg" alt="">
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

  <div class="item"><img src="img/car1.jpg" alt="The Last of us"></div>
  <div class="item"><img src="img/car2.jpg" alt="GTA V"></div>
  <div class="item"><img src="img/car3.jpg" alt="Mirror Edge"></div>

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

 <div id="about">
  <h2>Contato</h2>
  <hr>
  <div class="container">        
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis corporis possimus perferendis unde voluptates doloremque porro eligendi reprehenderit adipisci eveniet aliquam ipsa deleniti nemo, eius provident optio distinctio tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis corporis possimus perferendis unde voluptates doloremque porro eligendi reprehenderit adipisci eveniet aliquam ipsa deleniti nemo, eius provident optio distinctio tenetur.</p>
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