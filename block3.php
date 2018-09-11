<?php   if($home["hide_bloque_3"]=="no"){?>
<section id="" class="bg-cover bg-gray bg-overlay-black-8" style="background-image: url(assets/images/background.jpg);padding:3% 0% 0% 0%">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-lg-12">
                        <p style="line-height: 35px; text-align: center;">
<span style="font-weight: 400; font-family: Raleway; font-size: 32px; color: rgb(255, 255, 255);"><strong><strong><?=$home["bloque_3_texto1"]?></strong></strong></span><span style="font-weight: 400; font-family: Raleway; font-size: 32px; color: rgb(244, 172, 54);"><strong><strong>&nbsp;<?=$home["bloque_3_texto2"]?></strong></strong></span>
</p>
					</div>
                </div>
					<div class="row">
					<?php  $cad=mysqli_query($link,"select * from bloque_3_items");
                           while($row=mysqli_fetch_assoc($cad)){?>
						   
						   <div class="col-md-3" align="center"><img src="/images/<?=$row["foto"]?>" class="img-respnsive" /><br><br>
						<h3 style="color: rgb(51, 51, 51); font-size: 17px; font-weight: 600; line-height: 1.4; font-family: raleway; text-align: center;">
<span style="color: rgb(255, 255, 255);">"<?=$row["nombre"]?>"</span>
</h3></div>
					<?php } ?>
					</div>
            </div>
 </section>
<?php   } ?>