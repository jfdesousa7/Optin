<?php session_start(); include "../conex.php"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Blog  nuevo</title>
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
	<!-- ================== BEGIN PAGE CSS STYLE ================== -->
	<link href="assets/plugins/form/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
	<link href="assets/plugins/form/summernote/summernote.css" rel="stylesheet" />
	<!-- ================== END PAGE CSS STYLE ================== -->
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
				<li><a href="blog.php">Blog </a></li>
				<li class="active">Blog  [Nuevo]</li>
			</ul>
			
			<div id="rootwizard" class="wizard wizard-full-width">
				<!-- BEGIN wizard-header -->
				<div class="wizard-header">
					<ul class="nav nav-pills">
						<li class="active"><a href="#tab1" data-toggle="tab">Blog  - NUEVO</a></li>
						
					</ul>
				</div>
				
<form action="blog.php" method="post" enctype="multipart/form-data" onSubmit="$('#btn_guardar').html('Guardando ...')" name="wizard_form">
                              
					<!-- BEGIN wizard-content -->
					<div class="wizard-content tab-content">
						<!-- BEGIN tab-pane -->
						<div class="tab-pane active" id="tab1">
							<!-- BEGIN row -->
							<div class="row">
								<!-- BEGIN col-6 -->
								<div class="col-md-7 col-md-offset-3">
									<p class="desc m-b-20">Blog  [Nuevo].</p>
									
							
		
									
<ul class="nav nav-tabs" id="nav-tabs">
								<li class="active"><a href="#es" data-toggle="tab" aria-expanded="true">Datos</a></li>
								
</ul>

								<div class="tab-content tab-content-bordered">
								<!-- BEGIN tab-pane -->
								<div class="tab-content tab-content-bordered">
								<!-- BEGIN tab-pane -->
								<div class="tab-pane fade active in" id="es">
								




<div class="form-group">
										<label class="control-label"><span style="color:red">Titulo</span></label>
<input required type="text" name="titulo" id="titulo" class="form-control" value="">
</div>	


	
<div class="form-group">
										<label class="control-label">Contenido</label>
<textarea type="text" name="contenido" id="contenido" class="form-control summernote" rows="6" ></textarea>
									</div>
	


<div class="form-group">
										<label class="control-label">Imágen Principal</label>
										<input type="file" name="foto" > 
</div>	


<div class="modal modal-cover fade" id="modal1">
								<div class="modal-dialog">
									<div class="modal-content">
										 
										<div class="modal-body">
										<center><h3>Espere por favor ...</h3></center>
										</div>
										<div class="modal-footer">
										</div>
									</div>
								</div>
							</div>

	

								</div>
								
								
								
							</div>	
									
								</div>
								<!-- END col-7 -->
							</div>
								
							</div>
							
						</div>
						
						<!-- BEGIN wizard-footer -->
						<div class="wizard-footer">
							
<button style="float:right" type="submit" class="btn btn-primary  btn-rounded" name="btn_guardar" id="btn_guardar" >Guardar <i class="ti-pencil"></i> </button>
						</div>
						<!-- END wizard-footer -->
					</div>
					<!-- END wizard-content -->
				
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
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/form/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
	<script src="assets/plugins/form/summernote/summernote.min.js"></script>
	<script src="assets/js/page/email-compose.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();EmailCompose.init();
			FormWizards.init();FormPlugins.init();
		});
	</script>

</body>
</html>
