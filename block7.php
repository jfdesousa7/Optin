<?php   if($home["hide_bloque_7"]=="no"){?>
<section id="" class="" style="background-color:#FFF;padding:5% 0% 0% 0%">
            <div class="container">
                <div class="row " class="">
                    <div class="col-lg-6 extracolumn1 texto_alig">
                        <p style="color: rgb(0, 0, 0); font-family: Raleway; font-size: 15px; line-height: 22.5px;"><?=$home["bloque_7_texto1"]?></p>
						<div class="lp-element lp-pom-text nlh" id="lp-pom-text-116" style="height: auto;">
<h2 style="font-size: 36px; font-family: raleway; line-height: 42px;font-weight:800">
<span style="color: rgb(35, 31, 32);"><strong><?=$home["bloque_7_texto2"]?></strong></span>
</h2>
</div>
</div>
				 </div>
				<br>
				 <div class="row ">
<?php  $cad=mysqli_query($link,"select * from bloque_7_items");
                           while($row=mysqli_fetch_assoc($cad)){?>
  <div class="col-lg-6 texto_alig">
<div class="row">
					<div class="col-md-3" align="center"><img src="/images/<?=$row["foto"]?>" style="" class="img-responsive"></div>
					<div class="col-md-7"><p style="margin-top:25px;color:#000; font-family: 'Raleway'; font-size: 15px; line-height:22.5px;font-weight:400;"><?=$row["nombre"]?></p></div>
				 </div>
</div>	 
<?php  } ?>
				 </div>
            </div>
           </section>
<?php  } ?>