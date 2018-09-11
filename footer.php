<footer  style="background:#000">
            <div class="container">
                <div class="row align-items-center pb-5">
                    <div class="col-md-4 text-center text-md-left">
                        <img src="/images/<?=$informativos["logo"]?>" alt="" class="footer-logo "/>
                    </div>
                    <!-- //.col-md-8 -->
                    
                    <div class="col-md-8">
                        <ul class="footer-icon-social mb-0 mt-4 p-0 text-center text-md-right title-xs-small title-medium">
						
						
<?php if($informativos["facebook"]!=""){?><li class="list-inline-item">
                                <a href="<?=$informativos["facebook"]?>" class="text-gray-dark"><i class="fa fa-facebook"></i></a>
                            </li> <?php } ?>
							
<?php if($informativos["linkedin"]!=""){?><li class="list-inline-item">
                                <a href="<?=$informativos["linkedin"]?>" class="text-gray-dark"><i class="fa fa-linkedin"></i></a>
                            </li> <?php } ?>

<?php if($informativos["youtube"]!=""){?><li class="list-inline-item">
                                <a href="<?=$informativos["youtube"]?>" class="text-gray-dark"><i class="fa fa-youtube"></i></a>
                            </li> <?php } ?>

<?php if($informativos["instagram"]!=""){?><li class="list-inline-item">
                                <a href="<?=$informativos["instagram"]?>" class="text-gray-dark"><i class="fa fa-instagram"></i></a>
                            </li> <?php } ?>

<?php if($informativos["twitter"]!=""){?><li class="list-inline-item">
                                <a href="<?=$informativos["twitter"]?>" class="text-gray-dark"><i class="fa fa-twitter"></i></a>
                            </li> <?php } ?>

                        </ul>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <div class="row align-items-center ">
                    <div class="col text-center">
                        <span class="font-alt font-w-600 letter-spacing-1 text-gray-dark text-small text-uppercase">&copy; 2018 <?=$informativos["nombre_pagina"]?>. All rights reserved.</span>
                    </div>
                    <!-- //.col -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.container -->
        </footer>