<?php   if($home["hide_bloque_2"]=="no"){?>
<section id="" class="bg-cover bg-gray " style="background-image: url(assets/images/background.jpg);padding:0% 0% 0% 0%">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-7 texto_alig" ><div style="padding-top:8%">
                        <span class="formato_texto1_block_2"><strong><?=$home["bloque_2_texto1"]?>&nbsp;</strong></span><br>
                        <span style="color: rgb(163, 43, 59);"><span class="formato_texto2_block_2"  ><strong><?=$home["bloque_2_texto2"]?></strong></span></span>
						<br><br>
						<div class="lp-element lp-pom-text nlh" id="lp-pom-text-1376" style="height: auto;">
<p style="text-align: justify; line-height: 26px;font-family: Raleway; font-weight: 400; font-style: normal; font-size: 16px; color: rgb(35, 31, 32);">
<?=$home["bloque_2_texto3"]?>
</p>
<a data-toggle="modal" data-target="#solicitar_presupuesto"  class="page-scroll btn btn-base-color btn-large btn-shadow mr-0 mt-4" style="border-radius:35px;padding:1.5%;text-shadow: 1px 1px black;letter-spacing: .0rem;color:#FFF"><?=$home["bloque_2_texto4"]?></a>
</div> </div></div>
					<div class="col-lg-5 espacio" align="center" >
                        <img src="/images/<?=$home["bloque_2_imagen"]?>" class="img-responsive ocultar_movil" style="width:370px;height:526px" />
                    </div>
                    <!-- //.col-lg-9 -->
                </div>
                <!-- //.row -->
              </div>
            <!-- //.container -->
        </section> 
<?php   } ?>