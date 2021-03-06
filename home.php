<!DOCTYPE html>
<?php
$PAGE = new Page(3);
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Welcome to Nature Trails Boutique Hotel. We are located on the other side of the Rumassala mountain by which the bay-like Unawatuna Beach is surrounded. ">
        <meta name="keywords" content="hotels in unawatuna , boutique hotels in unawatuna , luxury hotels in unawatuna , accommodation in unawatuna , boutique villas in unawatuna , luxury villas in unawatuna , guest houses in unawatuna , hotels in galle , hotels in southern sri lanka , seafood restaurants in unawatuna , restaurants in unawatuna , fine dining restaurants in unawatuna , best hotel in unawatuna">
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo actual_link(); ?>images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="css/libs/revolution/settings.css">
        <link rel="stylesheet" href="<?php echo actual_link(); ?>css/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Style -->
    </head>
    <body class="demo-3 home">

        <!--        <div id="preloading" class="color2">
                    <div class="loading-icon">
                        <div class="sk-folding-cube">
                            <div class="sk-cube1 sk-cube"></div>
                            <div class="sk-cube2 sk-cube"></div>
                            <div class="sk-cube4 sk-cube"></div>
                            <div class="sk-cube3 sk-cube"></div>
                        </div>
                    </div>
                </div>-->

        <!-- Wrapper content -->
        <div id="wrapper-container" class="content-pusher">
            <div class="overlay-close-menu"></div>

            <!-- Header -->
            <?php include './header.php'; ?>
            <!--End Header -->

            <!-- Main Content -->
            <div id="main-content" class="main-content">
                <div id="home-main-content" class="home-main-content home-1">


                    <!--REVOLUTION SLIDER -->
                    <?php include './slider.php'; ?>
                    <!-- END REVOLUTION SLIDER -->

                    <div class="empty-space"></div>
                    <div class="container" style="margin-top: -30px;">
                        <div class="sc-heading">

                            <h3 class="second-title">Welcome</h3>
                        </div>
                        <div class="sc-info about-info row">
                            <div class="col-sm-12 col-xs-12 col-md-9">
                                <?php echo $PAGE->description ?>
                                <a href="<?php echo actual_link(); ?>about-us/" class="btn-icon">Read More</a>
                            </div>
                            <div class="col-sm-4 col-md-3 hidden-mobile" style="margin-top: -71px;"> 

                                <div class="sc-hb-rooms-search style-01">
                                    <div class="hotel-booking-search style-01 layout-columns">
                                        <img src="<?php echo actual_link(); ?>images/bg/about.JPG" alt="Nature Trails Hotel Unawatuna" class="img-responsive img-thumbnail" style="border-radius: 4px;margin-top: 70px;"/>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="sc-content-overlay  hidden-mobile " style="margin-top: 10px;">
                        <div class="container">
                            <div class="row"> 
                                <div class="col-md-12 hidden-sm">
                                    <div class="sc-testimonials style-02"> 
                                        <div class="testimonial-slider2 owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-3 img-padd-4" >
                                                        <img src="<?php echo actual_link(); ?>images/enchanting.jpg" class="img-responsive img-thumbnail" alt="Nature Trails Hotel Unawatuna"/>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="content">
                                                            <h3 class="test-h">Enchanting Beauty</h3>
                                                            <p class="div-color test-p text-justify"  >
                                                                The property is built to the highest standards combining the Sri Lankan heritage with contemporary architectural designing to strike a balance between luxury and nature. 
                                                            </p>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-3 img-padd-4">
                                                        <img src="<?php echo actual_link(); ?>images/luxuring.jpg" class="img-responsive img-thumbnail" alt="Nature Trails Hotel Unawatuna"/>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="content">
                                                            <h3 class="test-h">Luxurious Comfort</h3>
                                                            <p  class="div-color test-p"  >
                                                                Nature trails consists of 10 well appointed bedrooms built and furnished to 5 star standards. Each room has a large balcony that opens to the swimming pool and a beautifully landscaped garden with the picturesque Rumassala Mountain at the backdrop.
                                                            </p>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-3 img-padd-4">
                                                        <img src="<?php echo actual_link(); ?>images/staning.jpg" class="img-responsive img-thumbnail" alt="Nature Trails Hotel Unawatuna"/>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="content">
                                                            <h3 class="test-h">Stunning Nature</h3>
                                                            <p  class="div-color test-p" >
                                                                Guests staying in our hotel can embark on a nature walk to climb the picturesque Rumassala
                                                                Mountain and reach the Jungle Beach of Unawatuna, one of the most beautiful natural beaches of Southern Sri Lanka.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-3 img-padd-4">
                                                        <img src="<?php echo actual_link(); ?>images/shedule.jpg" class="img-responsive img-thumbnail" alt="Nature Trails Hotel Unawatuna"/>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="content">
                                                            <h3 class="test-h">Succulent Food</h3>
                                                            <p  class="div-color test-p"  >
                                                                Nature Trails Fish Market Restaurant is very popular among local and foreign guests as a much sought after casual and fine dining restaurant. We offer an exclusive Seafood Menu with over 25 signature dishes of different varieties of Seafood ranging from small mussels to the large Yellow Fin Tuna.  
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div style="height: 60px"></div>
                    <div class="sc-travel style-02">
                        <div class="sc-content-overlay"> 
                            <div class="container">
                                <div class="empty-space"></div>
                                <div class="sc-heading style-04 text-center white-color">
                                    <h3 class="title">Accommodation</h3> 
                                </div> 
                                <div class="slides">
                                    <div class="travel-slider owl-theme owl-carousel">
                                        <?php
                                        $ROOM = new Room(NULL);
                                        foreach ($ROOM->all() as $room) {
                                            ?>
                                            <div class="item">
                                                <div class="image">
                                                    <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/"><img src="<?php echo actual_link(); ?>upload/room/<?php echo $room['image_name'] ?>" alt="<?php echo $room['title'] ?>"></a>
                                                    <?php
                                                    if ($room['discount'] != 0) {
                                                        ?>
                                                        <div class="meta-img">
                                                            <span class="price">UP TO <?php echo $room['discount'] ?> % OFF</span>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="inner">
                                                    <div class="content">
                                                        <div class="title"><a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/"><?php echo substr($room['title'], 0, 20) ?></a></div>

                                                        <div class=" r-top">
                                                            <p>  
                                                                <?php echo substr($room['short_description'], 0, 60) ?>...
                                                            </p> 
                                                        </div>
                                                    </div>
                                                    <div class="review clearfix">                                                    
                                                        <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/">
                                                            <div class="time"><i class="ion-arrow-right-a"></i> View More</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> 
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="view-all text-center">
                                    <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/" class="btn-radius">Accommodation</a>
                                </div>
                            </div>
                            <div class="empty-space"></div>
                        </div>
                    </div>

                    <div class="sc-content-overlay">
                        <div class="container"> 
                            <div class="sc-heading style-01 text-center" style="margin-top: 40px;">
                                <h3 class="title" style="color: black">Special Offer</h3>
                            </div>
                            <div class="sc-posts style-01 auto-height">
                                <div class="item row">
                                    <?php
                                    $ROOM = new Room(NULL);
                                    foreach ($ROOM->all() as $room) {
                                        ?>

                                        <div class="post col-sm-6 col-md-6">
                                            <div class="inner">

                                                <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/">
                                                    <div class="thumbnail"> 
                                                        <div class="ribbon2" style="border-top-left-radius: 4px;height: 75px;
                                                             border-bottom-left-radius: 4px;position: absolute;z-index: 999;width: 160px;">
                                                            <i ><span style="font-size: 20px;"><span class="upto">Full Board</span> Rs <?php echo number_format($room['price'], 0) ?>  /=</span></i>
                                                        </div>
                                                        <img src="<?php echo actual_link(); ?>upload/room/<?php echo $room['image_name'] ?>" alt="<?php echo $room['title'] ?>"> 

                                                    </div>
                                                </a>

                                                <div class="content">
                                                    <h3 class="title" style="margin-top: -150px;"> 

                                                        <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/"><?php echo $room['title'] ?></a></h3>
                                                    <div class="short-text"> </div>
                                                    <div class="summary  "> 
                                                        <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/" style="color: white"> 
                                                            <?php echo substr($room['short_description'], 0, 150) ?>... 
                                                        </a>
                                                        <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/" class="read-more" style="margin-top: -8px">More Info</a>
                                                    </div>
                                                </div>

                                            </div> 

                                        </div>
                                        <?php
                                    }
                                    ?>   

                                </div>
                                <div class="view-all text-center">
                                    <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/" class="btn-radius">Accommodation</a>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <section id="section-facilities-2" class="section-facilities-2" style="padding-top: 0px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sc-heading style-01 text-center">
                                        <h2 style="border-bottom: solid 1px #ddd;">Key Facilities And Services</h2>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 ">

                                </div>
                                <div class="col-md-8 col-xs-12"> 
                                    <div class="row"> 
                                        <div class="col-md-6">
                                            <div class="f_box left">
                                                <div class="desc">
                                                    <h3>Tea / Coffee </h3>
                                                    <p class="text-justy"  >
                                                        Each Room has a tea / coffee making facility with complementary tea / coffee
                                                    </p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-coffee"></i>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="f_box left">
                                                <div class="desc">
                                                    <h3>Dining</h3>
                                                    <p class="text-justy"  >
                                                        We offer an excluive seafood menu and anala carte menu with local and international cousine. Resturant is open daily from 7.30 A.M to 10.00 P.M
                                                    </p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-cutlery "></i>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>


                                            <div class="f_box left">
                                                <div class="desc">
                                                    <h3>Satellite  TV</h3>
                                                    <p class="text-justy" >
                                                        Each room is provided with a high definition flat screen television loaded with over 100 local and international Satellite channels.
                                                    </p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-television"></i>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="f_box right">
                                                <div class="icon">
                                                    <i class="fa fa-signal"></i>
                                                </div>
                                                <div class="desc">
                                                    <h3>Free Wifi</h3>

                                                    <p class="text-justy" >
                                                        Entire hotel is cover with high speed internet offered free of charge in house geasts.
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="f_box right">
                                                <div class="icon">
                                                    <i class="fa fa-shower "></i>
                                                </div>
                                                <div class="desc">
                                                    <h3>Swimming Pool</h3>
                                                    <p class="text-justy" >
                                                        Hotel swimming pool is the nestled in the centre of a beautifully landscaped graden. Pool is open for use from 8.00 A.M to 8.00 P.M
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="f_box right">
                                                <div class="icon">
                                                    <i class="fa fa-camera"></i>
                                                </div>
                                                <div class="desc">
                                                    <h3>24 / 7 Security</h3>
                                                    <p class="text-justy" >
                                                        Hotel greate a 24 / 7 security service that included a CCTV and intrude detection system in our Nature Trails Unawatuna Hotel. 
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> 

                    <div class="group-destination" style="background-image: url('<?php echo actual_link(); ?>images/home/h1-bg-destinations.jpg');">
                        <div class="sc-content-overlay">
                            <div class="container">
                                <div class="empty-space"></div>
                                <div class="sc-heading style-01 text-center">
                                    <h3 class="title">Excursions</h3>
                                </div>
                                <div class="sc-posts style-01 auto-height">
                                    <div class="item row">
                                        <?php
                                        $ATTRACTION = new Attraction(NULL);
                                        foreach ($ATTRACTION->all() as $key => $attraction) {
                                            $key++;
                                            if ($key < 7) {
                                                ?>

                                                <div class="post col-sm-6 col-md-4">
                                                    <div class="inner">
                                                        <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($attraction['title'])) ?>/">
                                                            <div class="thumbnail">
                                                                <img src="<?php echo actual_link(); ?>upload/attraction/<?php echo $attraction['image_name'] ?>" alt="<?php echo $attraction['title'] ?>"> 
                                                            </div>
                                                        </a>

                                                        <div class="content">
                                                            <h3 class="title" style="margin-bottom: 40px;"> <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($attraction['title'])) ?>/"><?php echo $attraction['title'] ?></a></h3>
                                                            <div class="short-text"> </div>
                                                            <div class="summary  "> 
                                                                <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($attraction['title'])) ?>/" style="color: white"> 
                                                                    <?php echo substr($attraction['short_description'], 0, 90) ?>... 
                                                                </a>
                                                                <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($attraction['title'])) ?>/" class="read-more" style="margin-top: -8px">More Info</a>
                                                            </div>
                                                        </div>

                                                    </div> 

                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>   

                                    </div>
                                    <div class="view-all text-center">
                                        <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/" class="btn-radius">View All Excursion</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                    <div class="empty-space"></div>

                    <div class="container">  
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title color-black" style="color: black">Guest Reviews</h3>
                        </div> 
                        <div class="sc-quote style-04 text-center"> 
                            <div class="row res-t">
                                <div class="col-sm-12  test-boarder">
                                    <div class="sc-testimonial style-04">
                                        <div class="slider owl-carousel owl-theme">
                                            <?php
                                            $COMMENT = new Comments(NULL);
                                            foreach ($COMMENT->activeComments() as $comment) {
                                                ?>
                                                <div class="item">
                                                    <div class="description color-black test-p" style="                                                        
                                                         font-family: 'Libre Baskerville', serif;
                                                         font-size: 16px;
                                                         line-height: 1.6em;
                                                         letter-spacing: 0;
                                                         color: var(--body-font-color-1);
                                                         text-transform: none;
                                                         font-weight: 400;
                                                         font-style: normal;
                                                         margin-right: 30px;
                                                         "> 
                                                             <?php echo $comment['comment'] ?>
                                                    </div>

                                                    <div class="author clearfix">
                                                        <img src="<?php echo actual_link(); ?>upload/comments/<?php echo $comment['image_name'] ?>" alt="Nature Trails Hotel Unawatuna">
                                                        <div class="info">
                                                            <div class="name "><?php echo $comment['name'] ?></div>
                                                            <div class="regency"><?php echo $comment['country'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="view-all text-center" style="margin-bottom: 20px">
                                        <a href="<?php echo actual_link(); ?>feedback/" class="btn-radius">Guest Reviews</a>
                                    </div>
                                </div>                                
                            </div> 
                        </div>
                    </div>            
                    <div class="empty-space"></div>
                </div> 
            </div>


            <!-- Footer -->
            <?php include './footer.php'; ?>
        </div><!-- wrapper-container -->

        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>


        <!-- Scripts -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery-1.12.4.min.js"></script><!-- jQuery -->
        <script src="<?php echo actual_link(); ?>js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="<?php echo actual_link(); ?>js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="<?php echo actual_link(); ?>js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="<?php echo actual_link(); ?>js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="<?php echo actual_link(); ?>js/libs/stellar.min.js"></script><!-- counter -->
        <script src="<?php echo actual_link(); ?>js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="<?php echo actual_link(); ?>js/libs/moment.min.js"></script><!-- moment -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="<?php echo actual_link(); ?>js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="<?php echo actual_link(); ?>js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="<?php echo actual_link(); ?>js/theme-customs.js"></script><!-- Theme Custom -->

        <!-- REVOLUTION JS FILES -->
        <script  src="<?php echo actual_link(); ?>js/libs/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo actual_link(); ?>js/libs/revolution/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="<?php echo actual_link(); ?>js/libs/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script src="<?php echo actual_link(); ?>js/libs/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script src="<?php echo actual_link(); ?>js/libs/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="<?php echo actual_link(); ?>js/libs/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?php echo actual_link(); ?>js/libs/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script src="<?php echo actual_link(); ?>js/libs/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script src="<?php echo actual_link(); ?>js/libs/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script src="<?php echo actual_link(); ?>js/libs/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?php echo actual_link(); ?>js/libs/revolution/extensions/revolution.extension.video.min.js"></script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script type="text/javascript">
            $(function () {
                $(".datepicker").datepicker({
                    dateFormat: 'yy-mm-dd',
                    minDate: 'today'
                });
            });

            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
            }

            $('.translation-links a').click(function () {

                var lang = $(this).data('lang');
                var $frame = $('.goog-te-menu-frame:first');
                if (!$frame.size()) {
                    alert("Error: Could not find Google translate frame.");
                    return false;
                }
                $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
                return false;
            });

            function setREVStartSize(e) {
                try {
                    e.c = jQuery(e.c);
                    var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                    if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                        var u = (e.c.width(), jQuery(window).height());
                        if (void 0 != e.fullScreenOffsetContainer) {
                            var c = e.fullScreenOffsetContainer.split(",");
                            if (c)
                                jQuery.each(c, function (e, i) {
                                    u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                        }
                        f = u
                    } else
                        void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                    e.c.closest(".rev_slider_wrapper").css({height: f})
                } catch (d) {
                    console.log("Failure at Presize of Slider:" + d)
                }
            }
            ;

            var revapi2,
                    tpj;
            (function () {
                if (!/loaded|interactive|complete/.test(document.readyState))
                    document.addEventListener("DOMContentLoaded", onLoad);
                else
                    onLoad();

                function onLoad() {
                    if (tpj === undefined) {
                        tpj = jQuery;
                        if ("off" == "on")
                            tpj.noConflict();
                    }
                    if (tpj("#rev_slider_2_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_2_1");
                    } else {
                        revapi2 = tpj("#rev_slider_2_1").show().revolution({
                            sliderType: "standard",
                            sliderLayout: "fullscreen",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                mouseScrollReverse: "default",
                                onHoverStop: "off",
                                arrows: {
                                    style: "zeus",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: false,
                                    tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 20,
                                        v_offset: 0
                                    }
                                }
                                ,
                                bullets: {
                                    enable: true,
                                    hide_onmobile: false,
                                    style: "hermes",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 60,
                                    space: 25,
                                    tmp: ''
                                }
                            },
                            viewPort: {
                                enable: true,
                                outof: "wait",
                                visible_area: "80%",
                                presize: false
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [690, 690, 500, 400],
                            lazyType: "none",
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            sliderLayout: 'fullwidth',
                            autoHeight: 'on',
                            fullScreenAutoWidth: "on",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                    ;
                    /* END OF revapi call */

                }
                ;
                /* END OF ON LOAD FUNCTION */
            }());
            /* End OF WRAPPING FUNCTION */



        </script>

    </body>
</html>