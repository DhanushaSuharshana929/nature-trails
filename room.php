<!DOCTYPE html>
<?php
$BANNER = new Banner(2);
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Accommodations | Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo actual_link(); ?>images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="<?php echo actual_link(); ?>css/style.css"><!-- Style -->

    </head>
    <body class="room archive">
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
            <!-- nav.mobile-menu-container -->

            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo actual_link(); ?>upload/banner/<?php echo $BANNER->image_name ?>) ">


                    </div>
                </div> 

                <div class="container">  
                    <div class="sc-tourist style-02"> 
                        <div  class="padd-header">
                            <h1 class="heading_primary text-center">Room Types</h1> 
                        </div>
                        <div class="row">
                            <?php
                            $ROOM = new Room(NULL);
                            foreach ($ROOM->all() as $room) {
                                ?>
                                <div class="col-sm-4">
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
                                                <div class="title"><a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/"><?php echo substr($room['title'], 0, 28) ?></a></div> 
                                                 
                                                <p style="text-align: justify">
                                                    <?php echo substr($room['short_description'], 0, 120) ?>...
                                                </p>
                                            </div>

                                            <div class="review clearfix " >
                                                <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/">
                                                    <div class="time flot-r"><i class="ion-arrow-right-a"></i> View More</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Footer --> 
            <?php include './footer.php'; ?>
            <!-- nav.mobile-menu-container -->
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