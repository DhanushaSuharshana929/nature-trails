 

<div class="call-to-action text-light xs-text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-9 xs-mb-30">
                <a href="contact.php" class="btn-border-light pull-right" style="float: left;">'HOSPITALITY IS OUR BUSINESS'</a>
                <h2 style="color: white"></h2>
            </div>
            <div class="col-md-3 ">
                <a href="contact.php" class="btn-border-light pull-right">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<footer id="colophon" class="site-footer footer_v2">

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="widget-menu">
                        <div class="widget-text">
                            <img src="images/logo-2.png" alt="">
                            <div class="footer-location">
                                <ul class="info">
                                    <li class="clearfix"><i class="fa fa-phone"></i><a href="tel:0777118616">(+94) 77 711 8616</a></li>
                                    <li class="clearfix"><i class="fa fa-envelope"></i><a href="mailto:info@naturetrailsunawatuna.com">info@naturetrailsunawatuna.com</a></li>
                                    <li class="address clearfix"><i class="fa fa-map-marker"></i> <a href="#"> 144B, Matara Road, Unawatuna.</a></li>
                                </ul>
                            </div>
                            <ul class="social-link square" style="margin-top: 30px;">
                                <li><a class="facebook" href="https://www.facebook.com/naturetrailshotel/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/trailsnature" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="tripadvisor" href="https://www.tripadvisor.com/Hotel_Review-g644047-d6206595-Reviews-Nature_Trails_Boutique_Hotel-Unawatuna_Galle_District_Southern_Province.html" target="_blank"><i class="fa fa-tripadvisor"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2 hidden-sm">
                    <div class="widget-menu">
                        <h3 class="widget-title"> Links</h3>
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="room.php">Accommodation</a></li>
                            <li><a href="excursion.php">Excursions</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="widget-menu">
                        <h3 class="widget-title">Top Excursion </h3>
                        <ul class="menu">
                            <?php
                            $ATTRACTION = new Attraction(NULL);
                            foreach ($ATTRACTION->all() as $key => $attraction) {
                                $key++;
                                if ($key < 7) {
                                    ?>
                                    <li><a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"><?php echo $attraction['title'] ?></a></li>
                                    <?php
                                }
                            }
                            ?> 
                        </ul> 
                    </div>
                </div>
                <div class="col-sm-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15871.30932094826!2d80.248005!3d6.018429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf82e4e1180a2380d!2sNature+Trails+Boutique+Hotel!5e0!3m2!1sen!2s!4v1480572074037" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="copyright-content">
                    <div class="copyright-text col-sm-7 ">
                        <p>Copyright naturetrailsunawatuna © <?php echo date('Y') ?> || Web Site By   <a href="https://www.synotec.lk/"  target="_blank"  > <i class="fa fa-hand-o-right text-primary heart"  ></i>   Synotec Holdings (Pvt) Ltd. </a></p>
                    </div>
                    <div class="copyright-menu col-sm-5">
                        <ul class="menu">
                            <li>  <div id="google_translate_element" ></div>  </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="container-fluid w-1192 feed-main back-color hidden-search">
    <div class="sc-travel-search">
        <div class="travel-search back-color">
            <div class="row">
                <div class="col-md-4 hidden-sm filter-room filter-restaurant filter-swimming">
                    <div class="sc-gallery"> 
                        <div class="wrapper-gallery " itemscope itemtype="http://schema.org/ItemList">
                            <a href="images/certificate/tripadvisor.jpg" >
                                <img src="images/certificate/trip.png" alt="" class="pull-right   border-r" />  
                            </a>

                            <a href="images/certificate/Booking.com-letter.jpg"  >
                                <img src="images/certificate/booking.png" alt="" class="pull-right  border-r" style="margin-right: 10px;" />  
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-8 col-sm-12">
                    <form action="" class="search-form clearfix hb-form-table clearfix">
                        <div class="col-md-12 col-sm-12">
                            <li class="form-field guest check-padd-li">
                                <input name="chech-in" required type="text"    class="guest datepicker" placeholder="Check-in date" value="" style="color: white"/>
                            </li>             
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <li class="form-field guest check-padd-li ">
                                <input name="check-out" required type="text"   class="guest datepicker" placeholder="Check-out date" value="" style="color: white"/>
                            </li>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <li class="form-field guest  check-padd-li"> 
                                <button type="submit" class="submit avg-button  ">Check Availability</button> 
                            </li>
                        </div>
                    </form> 
                </div> 
            </div> 
        </div>
    </div>
</div>