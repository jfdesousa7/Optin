<?php session_start(); include "../conex.php" ;
include "guardar_foto.php" ;
$hide="hide";$hide2="hide"; $sms="";


$RUTA="../images/";

if (!isset($_SESSION["id_usuario_ADM"])){  header("location:index.php");}$hide="hide";$hide2="hide";$sms="";
if (isset($_POST["btn_editar"])){
	
	if( $_POST["hide_bloque_12"]==""){$estatus="si";}else{$estatus="no";}

		$update=mysqli_query($link,"update home set 
		bloque_12_texto1='".mysqli_real_escape_string($link,$_POST["bloque_12_texto1"])."',
		bloque_12_texto2='".mysqli_real_escape_string($link,$_POST["bloque_12_texto2"])."',
		bloque_12_texto3='".mysqli_real_escape_string($link,$_POST["bloque_12_texto3"])."',
		bloque_12_texto4='".mysqli_real_escape_string($link,$_POST["bloque_12_texto4"])."',
		bloque_12_texto5='".mysqli_real_escape_string($link,$_POST["bloque_12_texto5"])."',
		hide_bloque_12='".$estatus."'
		
		where id=".$_POST["id"]."
		")or die ("Error Editar ".mysqli_error($link));	
		
  
		$hide2="";
} // FIN EDITAR

 

?>



<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Bloque 12</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/plugins/form/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />
	<link href="assets/plugins/form/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
	<link href="assets/plugins/form/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
	<link href="assets/plugins/form/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
	<link href="assets/plugins/form/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
	<link href="assets/plugins/form/bootstrap-slider/css/bootstrap-slider.css" rel="stylesheet" />
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
			<!-- BEGIN breadcrumb -->
			<ul class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li class="active">Bloque 12</li>
			</ul>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			 <div class="alert alert-danger alert-dark <?=$hide?>">
							<button type="button" class="close" data-dismiss="alert">cerrar</button>
							<strong>Error!</strong>   <?=$sms?>
                        </div>
                         <div class="alert alert-success alert-dark <?=$hide2?>">
							<button type="button" class="close" data-dismiss="alert">cerrar</button>
							<strong>Perfecto!</strong> Se ha guardado &eacute;xitosamente.
						</div>
			<!-- END page-header -->
			<!-- BEGIN wizard -->
			<div id="rootwizard" class="wizard wizard-full-width">
				<!-- BEGIN wizard-header -->
				<div class="wizard-header">
					<ul class="nav nav-pills">
						<li class="active"><a href="#tab1" data-toggle="tab">Bloque 12</a></li>
						
					</ul>
				</div>
				<!-- END wizard-header -->
				<!-- BEGIN wizard-form -->
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" onSubmit="$('#btn_editar').html('Editando ...')" name="wizard_form"> <?php 
                                
                                $sql1=mysqli_query($link,"select * from  home");
                                  while($row1=mysqli_fetch_array($sql1)){ 
                                 
?><input type="hidden" name="id" value="1">
					<!-- BEGIN wizard-content -->
					<div class="wizard-content tab-content">
						<!-- BEGIN tab-pane -->
						<div class="tab-pane active" id="tab1">
							<!-- BEGIN row -->
							<div class="row">
								<!-- BEGIN col-6 -->
								<div class="col-md-11 col-md-offset-1">
									<p class="desc m-b-20">Formulario</p>
									
									
	Visualizar?								
<div class="form-group">
	<?php  if ($row1["hide_bloque_12"]=='no'){?>   <div class="switcher switcher-success">
	<input type="checkbox" name="hide_bloque_12" id="hide_bloque_12" checked="" value="no" />
	<label for="hide_bloque_12"></label>
	</div>  <?php }else{ ?>
	 <div class="switcher switcher-success">
	<input type="checkbox" name="hide_bloque_12" id="hide_bloque_12"  value="si" />
	<label for="hide_bloque_12"></label>
	</div> <?php } ?>	
</div>		
									
							
									<div class="form-group">
										<label class="control-label">bloque_12_texto1</label>
										<input type="text" class="form-control" required name="bloque_12_texto1" value="<?=$row1["bloque_12_texto1"]?>" />
									</div>
									
									<div class="form-group">
										<label class="control-label">bloque_12_texto2</label>
										<input type="text" class="form-control" required name="bloque_12_texto2" value="<?=$row1["bloque_12_texto2"]?>" />
									</div>
									
									<div class="form-group">
										<label class="control-label">bloque_12_texto3</label>
										<textarea type="text" class="form-control" required name="bloque_12_texto3" rows="4" ><?=$row1["bloque_12_texto3"]?></textarea>
									</div>
									
									<div class="form-group">
										<label class="control-label">bloque_12_texto4</label>
										<input type="text" class="form-control" required name="bloque_12_texto4" value="<?=$row1["bloque_12_texto4"]?>" />
									</div>
									
									
									<div class="form-group">
										<label class="control-label">bloque_12_texto5</label>
										<input type="text" class="form-control" required name="bloque_12_texto5" value="<?=$row1["bloque_12_texto5"]?>" />
									</div>
									
								</div>
								<!-- END col-6 -->
							</div>
							<!-- END row -->
						</div>
						
						<!-- BEGIN wizard-footer -->
						<div class="wizard-footer">
							
							
<button style="float:right" type="submit" class="btn btn-primary  btn-rounded" name="btn_editar" id="btn_editar" >Editar <i class="ti-pencil"></i> </button>
						</div>
						<!-- END wizard-footer -->
					</div>
					<!-- END wizard-content -->
					
					  <?php   }  ?>
				</form>
				<!-- END wizard-form -->
			</div>
			<!-- END wizard -->
		</div>
		<!-- END #content -->
		
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
	<script src="assets/plugins/form/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/plugins/form/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/plugins/form/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/plugins/form/bootstrap-typeahead/js/bootstrap-typeahead.min.js"></script>
	<script src="assets/plugins/form/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
	<script src="assets/plugins/form/bootstrap-slider/js/bootstrap-slider.min.js"></script>
	<script src="assets/plugins/form/bootstrap-select/js/bootstrap-select.min.js"></script>
	<script src="assets/plugins/form/masked-input/js/masked-input.min.js"></script>
	<script src="assets/plugins/form/pwstrength/js/pwstrength.js"></script>
	<script src="assets/js/page/form-plugins.demo.min.js"></script>
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/form/bootstrap-wizard/js/bootstrap-wizard.min.js"></script>
	<script src="assets/js/page/form-wizards.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			FormWizards.init();FormPlugins.init();
		});
	</script>

</body>
</html>
