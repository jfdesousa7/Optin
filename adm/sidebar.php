<div id="sidebar" class="sidebar sidebar-inverse">
			<!-- BEGIN scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- BEGIN nav -->
				<ul class="nav">
					<li class="nav-header">Navegaci&oacute;n</li>
					<li class="active"><a href="home.php"><i class="ti-hand-open"></i><span>Bienvenidos</span></a></li>
					<li class="active"><a target="_blank" href="../index.php"><i class="ti-new-window"></i><span>Ir a la web</span></a></li>
					<li class="nav-divider"></li>
					<li class="nav-header">Configuraci&oacute;n</li>
					<li><a href="configuracion.php"><i class="ti-settings"></i><span>Configuraci&oacute;n B&aacute;sica</span></a></li>
				<li class="nav-divider"></li>
					
					
				 <?php $sidebar=mysqli_fetch_array(mysqli_query($link,"select * from home where id=1"));
         $si="<i class='ti-control-record' style='color:#72c02c'></i>";
		 $no="<i class='ti-control-record' style='color:#C00'></i>";

				 ?>	
					 
					
					
					<li class="has-sub">
						<a href="javascript:;">
						    <span class="caret caret-right pull-right"></span>
							<i class="ti-home"></i> 
							<span>Home <span class="notification">Bloques</span></span>
						</a>
						<ul class="sub-menu">
						    <li><a href="bloque0.php">Portada</a></li>
<li><a href="bloque1.php"><?php if($sidebar["hide_bloque_1"]=="no"){echo $si;}else{echo $no;}?> Bloque 1</a></li>
						    <li><a href="bloque2.php"><?php if($sidebar["hide_bloque_2"]=="no"){echo $si;}else{echo $no;}?> Bloque 2</a></li>
							
							
							
							<li class="has-sub">
								<a href="javascript:;">
						            <b class="caret caret-right pull-right"></b>
						            <?php if($sidebar["hide_bloque_3"]=="no"){echo $si;}else{echo $no;}?> Bloque 3
						        </a>
								<ul class="sub-menu" style="">
									<li><a href="bloque3.php"  >Bloque 3</a></li>
									<li><a href="bloque_3_items.php">Items</a></li>
									
								</ul>
							</li>
							
							<li class="has-sub">
								<a href="javascript:;">
						            <b class="caret caret-right pull-right"></b>
						            <?php if($sidebar["hide_bloque_4"]=="no"){echo $si;}else{echo $no;}?> Bloque 4
						        </a>
								<ul class="sub-menu" style="">
									<li><a href="bloque4.php"  >Bloque 4</a></li>
									<li><a href="bloque_4_items.php">Items</a></li>
									
								</ul>
							</li>
							<li><a href="bloque5.php"><?php if($sidebar["hide_bloque_5"]=="no"){echo $si;}else{echo $no;}?> Bloque 5</a></li>
							<li><a href="bloque6.php"><?php if($sidebar["hide_bloque_6"]=="no"){echo $si;}else{echo $no;}?> Bloque 6</a></li>
							<li class="has-sub">
								<a href="javascript:;">
						            <b class="caret caret-right pull-right"></b>
						            <?php if($sidebar["hide_bloque_7"]=="no"){echo $si;}else{echo $no;}?> Bloque 7
						        </a>
								<ul class="sub-menu" style="">
									<li><a href="bloque7.php"  >Bloque 7</a></li>
									<li><a href="bloque_7_items.php">Items</a></li>
									
								</ul>
							</li>
							<li><a href="bloque8.php"><?php if($sidebar["hide_bloque_8"]=="no"){echo $si;}else{echo $no;}?> Bloque 8</a></li>
							<li><a href="bloque9.php"><?php if($sidebar["hide_bloque_9"]=="no"){echo $si;}else{echo $no;}?> Bloque 9</a></li>
							<li><a href="bloque10.php"><?php if($sidebar["hide_bloque_10"]=="no"){echo $si;}else{echo $no;}?> Bloque 10</a></li>
							<li class="has-sub">
								<a href="javascript:;">
						            <b class="caret caret-right pull-right"></b>
						            <?php if($sidebar["hide_bloque_11"]=="no"){echo $si;}else{echo $no;}?> Bloque 11
						        </a>
								<ul class="sub-menu" style="">
									<li><a href="bloque11.php"  >Bloque 11</a></li>
									<li><a href="bloque_11_items.php">Items</a></li>
									
								</ul>
							</li>
							<li><a href="bloque12.php"><?php if($sidebar["hide_bloque_12"]=="no"){echo $si;}else{echo $no;}?> Bloque 12</a></li>
							<li><a href="bloque13.php"><?php if($sidebar["hide_bloque_13"]=="no"){echo $si;}else{echo $no;}?> Bloque 13</a></li>
						</ul>
					</li>
					
						
			
					
				
					<li class="nav-divider"></li>
					
					<li><a href="usuarios.php"><span>Usuarios</span></a></li>
					
					
					
					
					
					<li class="nav-divider"></li>
						<li class="nav-copyright">&copy; <?=date("Y")?> <?=$informativos["nombre_pagina"]?></li>
				</ul>
				<!-- END nav -->
			</div>
			<!-- END scrollbar -->
		</div>