<footer>
    <div class="container">
        <div class="row"> 
            <div class="col-md-3 col-sm-12 f-widget">
                <img src="images/logo-2.png" alt=""><br>
                <div class="bottom-div"> 
                    <ul class="header-contact" ​ id="btn-padd">
                        <li class="icon_location marging-bt"><a href="" id="f-icion">144B, Matara Road, Unawatuna</a></li>
                        <li class="icon_phone marging-bt"><a href="tel:+94 91 494 6666"  id="f-icion"> +94 91 494 6666</a></li>
                        <li class="icon_email marging-bt" ><a href="mailto: info@naturetrailsunawatuna.com" id="f-icion-2"> info@naturetrailsunawatuna.com</a></li> 
                    </ul>

                </div>

                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                </div> 
            </div>



            <div class="col-md-3 col-sm-12 f-widget">
                <h3> Tours</h3>
                <ul class="header-contact"  id="btn-padd">
                    <?php
                    $TOURS_PACKAGES = new TourPackage(NULL);
                    foreach ($TOURS_PACKAGES->all() as $tour_package) {
                        ?>
                        <li  class=" marging-bt "> <a href="view-tour.php?id=<?php echo $tour_package['id'] ?>" class="f-color"><i class="fa fa-arrow-right m-top" ></i> <span class="color-w"><?php echo $tour_package['title'] ?></span></a></li>
                    <?php } ?> 
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 f-widget">
                <h3> Things to do</h3>
                <ul class="header-contact"  id="btn-padd">
                    <?php
                    $ATTRACTION = new Attraction(NULL);
                    foreach ($ATTRACTION->all() as $attraction) {
                        ?>
                        <li  class=" marging-bt "> <a href="view-excursion.php=id=<?php  echo $attraction['id']?>" class="f-color"><i class="fa fa-arrow-right m-top" ></i> <span class="color-w"><?php  echo $attraction['title']?></span></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-md-3 col-sm-12 f-widget">
                <h3>Top Destination</h3>

                <div class="subscribe">
                    <ul    style="list-style: none;margin-left: -34px;">
                        <li  class=" marging-bt " style="float: left;margin-right: 15px;"> 
                            <div class="gallery-item">
                                <a class="preview" href="images/des1-b.jpg" title=""> 				
                                    <img src="images/des1.jpg" style="width:70px" >
                                </a>
                            </div>
                        </li> 
                        <li  class=" marging-bt " style="float: left;margin-right: 15px;">  
                            <div class="gallery-item">
                                <a class="preview" href="images/des2-b.jpg" title=""> 				
                                    <img src="images/des2.jpg"  style="width:70px" >
                                </a>
                            </div>
                        </li> 
                        <li  class=" marging-bt " style="float: left;margin-right: 15px;">

                            <div class="gallery-item">
                                <a class="preview" href="images/des3-b.jpg" title=""> 				
                                    <img src="images/des3.jpg"  style="width:70px" >
                                </a>
                            </div>

                        </li> 
                        <li  class=" marging-bt " style="float: left;margin-right: 15px;"> 
                            <div class="gallery-item">
                                <a class="preview" href="images/des4-b.jpg" title=""> 				
                                    <img src="images/des4.jpg"  style="width:70px" >
                                </a>
                            </div>
                        </li> 
                        <li  class=" marging-bt " style="float: left;margin-right: 15px;"> <a href=""  >

                                <a class="preview" href="images/des5-b.jpg" title=""> 				
                                    <img src="images/des5.jpg"  style="width:70px" >
                                </a>

                            </a>
                        </li> 
                        <li  class=" marging-bt " style="float: left;margin-right: 15px;"> 
                            <div class="gallery-item">
                                <a class="preview" href="images/des6-b.jpg" title=""> 				
                                    <img src="images/des6.jpg"  style="width:70px" >
                                </a>
                            </div>
                        </li> 



                    </ul>
                </div>
            </div>

        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
                <p> Copyright Nature Trails - Unawatuna @  <?php echo date('Y') ?>.  </p>
            </div>
            <div class="col-md-6">
                <p class="pull-right"> 
                    <i class="fa fa-hand-o-right text-primary heart"  style="color:white;margin-top: 5px;"></i>   Website By:   <a href="https://www.synotec.lk/"  target="_blank" style="color:white;">   Synotec Holdings (Pvt) Ltd. </a>
                </p>
            </div>
        </div>
    </div>

</footer>