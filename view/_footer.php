<div id="footer"> 
  <div class="container-fluid"> 
    <div class="row">      
     <div class="col-md-3">      
      <h3><img src="assets/img/logo_1.svg" alt=""></h3>

      <p>Contato:<br/>
        <i class="fas fa-phone"></i> (91) 9 8360 4463 | William Borralho<br/>
        <i class="fas fa-phone"></i> (91) 9 8208 4651 | Rosangela Santos<br/>
        <i class="fas fa-phone"></i> (91) 9 8176 9979 | <i class="fab fa-whatsapp"></i><br/>
        Horário de Funcionamento: Comercial<br/>
      Responsável pela empresa: Rosangela Santos e William Borralho</p>
      <p><i class="fas fa-envelope"></i> contato@paideiaeducacional.com</p>
      <!-- <p>Rua Lorem Ipsum is Simply, 488 - Conj. 205 Centro Cívico - Bacurau - MA (41) 0000-0000</p> -->
      <!-- <p>Av. Lorem Ipsum is Simply - São Bento - SP (11) 9999-9999</p> -->
      <a href="" class="icon-socials">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="icon-socials">
        <i class="fab fa-instagram"></i>
      </a> 
    </div>
    <div class="col-md-3">
      <h3>Notícias</h3>
      <ul>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>

      </ul>
    </div>
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
      </ul></div>
      <div class="col-md-3">      
        <h3>Ligamos para você</h3>
        <p>Deixe seu nome e número de telefone que ligamos para você.</p>
        <form action="">           
          <input type="text" class="form-control form-control-sm" placeholder="Nome:">
          <input type="email" class="form-control form-control-sm" placeholder="E-mail:">
          <input type="text" class="form-control form-control-sm" placeholder="Telefone:"> 
          <button class="btn btn-outline-primary btn-block btn-sm">Enviar</button> 
        </form>
      </div>
    </div>   
  </div>
</div>

<div id="assign">
  <div class="container">
    © FireFly. 2019 Paideia Educacional. Todos os direitos reservados.
    <br/>Desenvolvimento by <a href="https://api.whatsapp.com/send?phone=5591982650277" target="_blank">
      <img data-toggle="tooltip" data-placement="top" title="Contato: (91) 98265-0277" src="assets/img/fire-logo.png" alt="Logo FireFly">
    </a></div>
  </div>

</section>

<div class="topo">    
  <i class="fas fa-arrow-up"></i>
</div>

<script src="lib/jquery/jquery.js"></script>

<script src="https://unpkg.com/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="lib/owl-carousel/owl.carousel.min.js"></script>

<script src="https://unpkg.com/scrollreveal"></script>

<script src="lib/slick/slick.min.js"></script>

<script src="assets/js/main.js"></script>

<script>
  $(document).ready(function() {

    $('.slick-eventos').slick({
     slidesToShow: 3,
     slidesToScroll: 1,
     // dots: true,
     // infinite: true,
     // speed: 500,
     // fade: true,
     // cssEase: 'linear'
   });

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });

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