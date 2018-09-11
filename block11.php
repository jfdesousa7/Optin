<?php   if($home["hide_bloque_11"]=="no"){?>
<section id="" class="" style="background-color:#FFF;padding:5% 0% 0% 0%">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12"   align="center">
                      <h2 style="font-size: 36px; font-family: raleway; line-height: 42px;">
<span style="color:#000000;"><strong><?=$home["bloque_11_texto1"]?></span>
</h2>
					</div>
				 </div>
				<br><br>
				<div class="row ">
				<?php  $cad=mysqli_query($link,"select * from bloque_11_items");
                           while($row=mysqli_fetch_assoc($cad)){?>
<div class="col-lg-3 " align="center"><img src="/images/<?=$row["foto"]?>" class="img-responsive"><br><br>
                      
<h3 style="color: rgb(51, 51, 51); font-size: 17px; font-weight: 600; line-height: 1.4; font-family: raleway; text-align: center;"><?=$row["nombre"]?></h3>

<p style="color: #333; font-family:'Raleway'; font-size: 15px; line-height: 22.5px; text-align: center;font-weight:400"><?=$row["texto"]?></p>
					</div>
						    <?php  }  ?>
                   </div>
				</div>	
	</section>
<?php  } ?>