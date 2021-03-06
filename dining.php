<!DOCTYPE html>
<?php
$BANNER = new Banner(3);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Nature Trails Fish Market Restaurant | Dining | Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo actual_link(); ?>images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="<?php echo actual_link(); ?>css/style.css"><!-- Style -->

    </head>
    <body class="events archive">
        <div id="preloading">
            <div class="loading-icon">
                <div class="sk-folding-cube">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div>
        </div>
        <!-- Wrapper content -->
        <div id="wrapper-container" class="content-pusher">
            <div class="overlay-close-menu"></div>

            <!-- Header -->
            <?php include './header.php'; ?>
            <!-- Header -->


            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo actual_link(); ?>upload/banner/<?php echo $BANNER->image_name ?>) ">


                    </div>
                </div> 

                <div class="site-content container">
                    <div class="events-content">
                        <div class="sc-events list-style"> 
                            <h2 style="font-size: 45px;">Nature Trails Fish Market Restaurant</h2>
                            <p class="text-justify">
                                Sri Lanka being an Island surrounded by the mighty Indian Ocean is one of the best places in the world
                                to taste different varieties of ocean fresh seafood ranging from small mussels to the large species of fish
                                such as yellow fin tuna and shark.
                            </p>

                            <p class="text-justify">
                                Nature Trails Fish Market Restaurant’s Seafood Menu offers a comprehensive array of signature dishes
                                each one having its own characteristic taste. Our Sri Lankan Breakfast and the Rice & Curry Lunch are
                                peppered with a host of truly authentic Sri Lankan delicacies offering distinct tastes.
                                We also offer a wide range of Western, Chinese and Continental dishes to suit the personal preferences
                                of our guests.
                            </p>
                            <p class="text-justify">
                                Here are some of the most favourite dishes from our Seafood Menu and Ala Carte Menu.
                            </p>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="happening" role="tabpanel">
                                    <?php
                                    $DINING_TYPE = new DiningType(NULL);
                                    foreach ($DINING_TYPE->all() as $dining_type) {
                                        ?>
                                        <div class="event">
                                            <div class="sc-heading style-04 text-center white-color">
                                                <h3 class="title" style="color: black"><?php echo $dining_type['title'] ?></h3> 
                                            </div>
                                            <div class="row tm-flex dining-row">
                                                <?php
                                                $DINING = new Dining(NULL);
                                                foreach ($DINING->getDiningByType($dining_type['id']) as $key => $dining) {
                                                    $key++;
                                                    ?> 

                                                    <div class="col-lg-3 col-md-3 dining-bottom" >
                                                        <div class="event-content dining-left" >
                                                            <h3 class="title"><a href="#"><?php echo $dining['title'] ?></a></h3>
                                                            <div class="meta">
                                                                <span class="time">NO: <?php echo $key ?> <i class="fa fa-arrow-circle-right"></i>Rs: <?php echo number_format($dining['price'], 2) ?></span>  
                                                            </div>
                                                            <div class="event-desc text-justify">
                                                                <?php echo $dining['short_description'] ?>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 img-padd" >
                                                        <div class="sc-gallery">

                                                            <div class="wrapper-gallery row" itemscope itemtype="http://schema.org/ItemList">
                                                                <div class="  filter-room filter-restaurant filter-swimming">
                                                                    <a href="<?php echo actual_link(); ?>upload/dining/gallery/<?php echo $dining['image_name'] ?>" class="gallery-popup">
                                                                        <img src="<?php echo actual_link(); ?>upload/dining/gallery/thumb/<?php echo $dining['image_name'] ?>" alt="<?php echo $dining['title'] ?>" class="img-thumbnail" ></a>
                                                                </div> 
                                                            </div> 
                                                        </div> 

<!--                                                        <div class="">
                                                            <a href="#"><img src="" alt=""></a>
                                                        </div>-->
                                                    </div>  

                                                <?php } ?> 
                                            </div> 
                                        </div> 
                                    <?php } ?>

                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include './footer.php'; ?>
        </div><!-- wrapper-container -->

        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>


        <!-- Scripts -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.min.js"></script><!-- jQuery -->
        <script src="<?php echo actual_link(); ?>js/libs/stellar.min.js"></script><!-- parallax -->

        <script src="<?php echo actual_link(); ?>js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="<?php echo actual_link(); ?>js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="<?php echo actual_link(); ?>js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="<?php echo actual_link(); ?>js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="<?php echo actual_link(); ?>js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="<?php echo actual_link(); ?>js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="<?php echo actual_link(); ?>js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="<?php echo actual_link(); ?>js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="<?php echo actual_link(); ?>js/theme-customs.js"></script><!-- Theme Custom -->
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

        <script type="text/javascript">
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
        </script> 
    </body>

</html>