<!DOCTYPE HTML>
<html lang="es-gt">

<head>
    <title>Medicorp</title>
   	<?php include_once("include/head_metas.php"); ?>
   	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />
   	<script src="assets/js/modernizr.js"></script>

</head>
<body>

	<!-- Header -->
  <div class="logo"><a href="index.php"><img src="assets/img/logo.png" alt="medicorp"></a></div>
	<div class="wrapper_header">
		<header class="clearfix">
		<div class="container">
			
			<nav class="menu">
				<ul>
					<li class="active" ><a href="index.php"><span class="navcurrent_left"></span>portada<span class="navcurrent_right"></span></a></li>
					<li><a href=""><span class="navcurrent_left"></span>productos<span class="navcurrent_right"></span></a></li>
					<li><a href=""><span class="navcurrent_left"></span>servicios<span class="navcurrent_right"></span></a>
						<ul>
							<li><a href="#">servicios profecionales</a></li>
							<li><a href="#">Reparación de equipos</a></li>
							<li><a href="#">mantenimiento preventivo</a></li>
						</ul>
					</li>
					<li><a href=""><span class="navcurrent_left"></span>contacto<span class="navcurrent_right"></span></a></li>
				</ul>
			</nav>
		</div>
		</header>
	</div>

	<div class="franja"></div>


	<!-- Slider -->
    

  <div class="wrapper_slider">    
    <div class="flexslider">
        <ul class="slides">
          	<li><img src="assets/img/slide1.png" alt="img"/></li>
          	<li><img src="assets/img/slide2.png" alt="img"/></li>
          	<li><img src="assets/img/slide3.png" alt="img"/></li>
        </ul>
    </div>
   

    <div class="linealeft"></div>
    <div class="linearight"></div>
    <div class="header_end clearfix"></div>
  </div>

  <div class="container clearfix">
    <div class="title">Nuestros Servicios</div>
    <ul class="ch-grid">
          <li>
            <div class="ch-item ch-img-1">        
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-1"></div>
                  <div class="ch-info-back">
                    <h3>Reparación</h3>
                    <p><a href="#">Ver más...</a></p>
                  </div>  
                </div>
              </div>
            </div>
            <p class="icoinfo">Lorem ipsum gravida nibh vel velit auctor aliquet. Aeneanso, sit ecte lorem.</p>

          </li>
          <li>
            <div class="ch-item ch-img-2">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-2"></div>
                  <div class="ch-info-back">
                    <h3>Mantenimiento</h3>
                    <p><a href="#">Ver más...</a></p>
                  </div>
                </div>
              </div>
            </div>
            <p class="icoinfo">Lorem ipsum gravida nibh vel velit auctor aliquet. Aeneanso, sit ecte lorem.</p>

          </li>
          <li>
            <div class="ch-item ch-img-3">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-3"></div>
                  <div class="ch-info-back">
                    <h3>Equipos</h3>
                    <p><a href="#">Ver más...</a></p>
                  </div>
                </div>
              </div>
            </div>
            <p class="icoinfo">Lorem ipsum gravida nibh vel velit auctor aliquet. Aeneanso, sit ecte lorem.</p>
          </li>
        </ul>
  </div>
  <div class="footer clearfix">
    <br> <br> <br>
  </div>


    

	<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="assets/js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

</body>
</html>