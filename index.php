<?php session_start(); include "conex.php"; $informativos=mysqli_fetch_array(mysqli_query($link,"select * from _informativos where id=1"));$home=mysqli_fetch_array(mysqli_query($link,"select * from home where id=1"));require_once 'Mobile_Detect.php'; $detect = new Mobile_Detect();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$informativos["nombre_pagina"]?></title>
        <meta name="description" content="<?=$informativos["descripcion_meta_generico"]?>"/>
        <meta name="keywords" content="<?=$informativos["palabras_claves"]?>"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Font Awesome CSS -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Include all css plugins (below), or include individual files as needed -->
        <link href="assets/css/flickity.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
        <!-- BG Video - YouTube -->
        <link href="assets/css/jquery.mb.YTPlayer.min.css" rel="stylesheet" type="text/css">
        <!-- Theme CSS -->
        <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200,100italic' rel='stylesheet' type='text/css'>
<!-- Color Scheme CSS -->
<link href="assets/css/color_pink.css" rel="stylesheet" type="text/css">
</head>
<body id="page-top">

<div class="modal fade" id="solicitar_presupuesto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background:url(/assets/images/background.jpg)">
	 
	 <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
     
           <div class="row">
		      <div class="col-md-6" style="padding-left:3%;">
			  
			  <img src="/assets/images/fact3.png" class="img-responsive ocultar_movil" style="width:450px">
			  
			  </div>
			  
<?php  if ( $detect->isMobile()) {?>			  
<div class="col-md-6" style="padding-left:10%;padding-top:5%;padding-right:10%;padding-bottom:4%;">
<?php  }else{?>
<div class="col-md-6" style="padding-left:4%;padding-top:2%;padding-right:4%;">
<?php } ?>


<?php  if ( $detect->isMobile()) {?>
<center>
<p style="line-height: 35px;">
<span style="font-weight: 400; font-family: Raleway; font-size: 38px; color: rgb(35, 31, 32);"><strong>DÉJANOS TUS</strong></span><span style="color: rgb(35, 31, 32);"><strong><span style="font-size: 38px;"><br></span></strong></span><span style="color: rgb(163, 43, 59);"><span style="font-weight: 400; font-family: Raleway; font-size: 22px;"><strong>DATOS DE CONTACTO</strong></span></span>
</p>
</center>
<?php  }else{?>

<p style="line-height: 35px;">
<span style="font-weight: 400; font-family: Raleway; font-size: 48px; color: rgb(35, 31, 32);"><strong>DÉJANOS TUS</strong></span><span style="color: rgb(35, 31, 32);"><strong><span style="font-size: 48px;"><br></span></strong></span><span style="color: rgb(163, 43, 59);"><span style="font-weight: 400; font-family: Raleway; font-size: 32px;"><strong>DATOS DE CONTACTO</strong></span></span>
</p>

<?php } ?>

<p style="text-align: justify; line-height: 26px;">
<span style="font-family: Raleway; font-weight: 400; font-style: normal; font-size: 16px; color: rgb(35, 31, 32);">Y uno de nuestros asesores se estará contactando contigo en las próximas 24 horas hábiles.</span>
</p>
<form action="/" method="post">
<b style="font-size:14px">Nombre *</b><br>
<input name="name" type="text" class="form-control" required>

<b  style="font-size:14px">Apellido *</b><br>
<input name="lastname" type="text" class="form-control" required>

<b  style="font-size:14px">Email Corporativo *</b><br>
<input name="email" type="email" class="form-control" required>

<b  style="font-size:14px">Número teléfonico *</b><br>
<input name="phone" type="text" class="form-control" required>

<b style="font-size:14px">¿Qué tipo de reto estás enfrentando? *</b><br>
<textarea name="comment" type="text" class="form-control" rows="3" required></textarea>

<center>
<button type="submit"  name="btn_enviar" class="page-scroll btn btn-base-color btn-large btn-shadow mr-0 mt-4" style="border-radius:35px;padding:3%;text-shadow: 1px 1px black;color:#FFF"><?=$home["bloque_0_texto3"]?></button>
</form>
</center>
</div>

		   </div>
		
    </div>
	 
  </div>
</div>



        <!-- Header Start -->
       <?php   include "header.php"; ?>
        <!-- //Header End -->
        <!-- Section - Home Start -->
       <?php  include "video_home.php"; ?>
        <!-- //Section - Home End -->
        <?php  include "block1.php"; ?>
		<?php  include "block2.php"; ?>
        <?php  include "block3.php"; ?>
		<?php  include "block4.php"; ?>
		<?php  include "block5.php"; ?>
		<?php  include "block6.php"; ?>
		<?php  include "block7.php"; ?>
		<?php  include "block8.php"; ?>
		<?php  include "block9.php"; ?>
		<?php  include "block10.php"; ?>
		<?php  include "block11.php"; ?>
		<?php  include "block12.php"; ?>
		<?php  include "block13.php"; ?>
		<!-- Footer Start -->
        <?php  include "footer.php"; ?>
        <!-- //Footer End -->
        <!-- Scroll to top -->
        <a href="#page-top" class="page-scroll scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- Main JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Include all js plugins (below) -->
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/flickity.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
         <!-- BG Video - YouTube -->
        <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- Theme JS -->
        <script src="assets/js/theme.js"></script>
    </body>
</html>