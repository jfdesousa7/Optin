<?php session_start(); include "../conex.php" ;
include "guardar_foto.php" ;
$hide="hide";$hide2="hide"; $sms="";


	
$RUTA="../images/";

if (isset($_POST["btn_foto"])){

if($_FILES['foto']['name']!=""){ 
	         
$ext=extension($_FILES['foto']['name']);
if($ext!=""){		
			 	            $actual_image_name ="fotoB".date("H_i_s").".".strtolower($ext);
							$tmp = $_FILES['foto']['tmp_name'];
							if(move_uploaded_file($tmp, $RUTA.$actual_image_name))
								{
mysqli_query($link,"update _informativos set fotoB='".$actual_image_name."'  where id=1") or die ("error subir foto ");	$hide2="";
								  }
}else{
	$hide=""; $sms="Imagen invalida, solo formatos .jpg o .png";
	}								  
								  
								  
								  
} // FIN FILE 


}



$informativos=mysqli_fetch_array(mysqli_query($link,"select * from _informativos where id=1")); 
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Home :: Administrador</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/loader/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- BEGIN #page-container -->
	<div id="page-container" class="page-header-fixed page-sidebar-fixed">
		<!-- BEGIN #header -->
		<?php  include "header.php";  ?>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<?php  include "sidebar.php"; ?>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="content">
			<!-- BEGIN page-header -->
			<h1 class="page-header">
				Bienvenidos, <small> Por favor seleccione una opci&oacute;n del menu izquierdo</small>
			</h1>
			<!-- END page-header -->
			 <div class="alert alert-danger alert-dark <?=$hide?>">
							<button type="button" class="close" data-dismiss="alert">cerrar</button>
							<strong>Error!</strong>   <?=$sms?>
                        </div>
                         <div class="alert alert-success alert-dark <?=$hide2?>">
							<button type="button" class="close" data-dismiss="alert">cerrar</button>
							<strong>Perfecto!</strong> Se ha guardado &eacute;xitosamente.
						</div>
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-6 -->
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN widget -->
					<div class="widget widget-card widget-card-rowspan2 dynamic-xs inverse-mode">
						<!-- BEGIN widget-card-cover -->
						<div class="widget-card-cover">
							<div class="cover-bg"></div>
							
							<?php if($informativos["fotoB"]==''){?>
							
							<img src="assets/img/landing-cover.jpg" alt="" />
							 
							
							<?php }else{?>
							
							<img src="../images/<?=$informativos["fotoB"]?>" alt="" />
							<?php } ?>
							
							
						</div>
						<!-- END widget-card-cover -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content">
							<a href="#" class="widget-title-link"></a>
							<h4 class="widget-title"><b></b></h4>
						</div>
						<!-- END widget-card-content -->
						<!-- BEGIN widget-card-content -->
						<div class="widget-card-content bottom p-b-5">
							<div class="text-center">
								<h3 class="m-b-0"></h3>
								<p class="opacity-7"></p>
							</div>
							<!-- BEGIN row -->
							<div class="row">
								<!-- BEGIN col-6 -->
								<div class="col-xs-6">
									<!-- BEGIN widget -->
									<ul class="widget widget-list m-b-0 no-bg inverse-mode">
										<li>
											<!-- BEGIN widget-list-container -->
											<a href="#" class="widget-list-container">
												<div class="widget-list-media icon p-l-0">
													<i class="ti-pencil bg-gradient-blue"></i>
												</div>
												<div class="widget-list-content">
													<h4 class="widget-title">
													
													
												<a href="#full-cover-modal" data-toggle="modal" >Cambiar imagen de inicio sesi&oacute;n</a>	
													</h4>
													<div class="widget-desc hidden-xs"></div>
												</div>
											</a>
											
										</li>
										
										
									</ul>
									
								</div>
								 
							</div>
							 
						</div>
						 
					</div>
					 
				</div>
				
				
				
			</div>
			
			
		
			
		</div>
		<!-- END #content -->
		<!-- BEGIN modal -->
							<div class="modal modal-cover fade" id="full-cover-modal">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="text-purple"><button class="close" data-dismiss="modal">&times;</button>Cambiar imagen!</h3>
											<p>
												Cambiar Imagen de Fondo de inicio de sesi&oacute;n
											</p>
										</div>
										<div class="modal-body">
										<form method="post" action="<?=$_SERVER["PHP_SELF"]?>" enctype="multipart/form-data" >
											<div class="row">
												<div class="col-md-9 ">
<input type="file" class="form-control input-lg" name="foto" id="foto">
												</div>
												<div class="col-md-3">
													<button type="submit" name="btn_foto" class="btn btn-purple btn-lg btn-block">Aceptar</button>
												</div>
											</div>
											</form>
										</div>
										<div class="modal-footer">
										</div>
									</div>
								</div>
							</div>
							
							
							
							
							
							<!-- END modal -->
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="ti-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #page-container -->
	
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/cookie/js/js.cookie.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/scrollbar/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/chart/chart-js/Chart.min.js"></script>
	<script src="assets/js/page/dashboard.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>

</body>
</html>
