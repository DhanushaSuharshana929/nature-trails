<!DOCTYPE html>
<?php
$BANNER = new Banner(4);
$PAGE_E = new Page(4);
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Excursions | Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
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
            <!-- Header -->

            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo actual_link(); ?>upload/banner/<?php echo $BANNER->image_name ?>) ">

                    </div>
                </div>

                <div class="container">
                    <div class="rooms-content layout-grid style-01">
                        <div  class="padd-header">
                            <h1 class="heading_primary text-center">Excursions</h1> 
                        </div>
                        <div class="row"> 
                            <div class="col-md-1"> 
                            </div>
                            <div class="room col-md-10 clearfix">
                                <div class="room-item">
                                    <div class="room-media">
                                        <a href="#"><img src="<?php echo actual_link(); ?>images/jungle_beach.jpg" alt=""></a>
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-md-1">  </div> 
                        </div> 
                        <div class="row " style="margin-top: -58px;padding-bottom: 50px;"> 
                            <div class="col-md-2">
                            </div>
                            <div class="room-summary col-md-8" style="background-color: white;padding: 20px;">
                                <h3 class="room-title">
                                    <a href="#"> <?php echo $PAGE_E->title;?> </a>
                                </h3>
                                <p class="room-description text-justify">
                                     <?php echo $PAGE_E->description;?>
                                </p>
                            </div>

                            <div class="col-md-2"> 
                            </div> 
                        </div> 
                        <div class="row">

                            <?php
                            $ATTRACTION = new Attraction(NULL);
                            foreach ($ATTRACTION->all() as $attraction) {
                                if ($attraction['id'] != 7) {
                                    ?>
                                    <div class="room col-sm-4 clearfix">
                                        <div class="room-item">
                                            <div class="room-media">
                                                <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($attraction['title'])) ?>/"><img src="<?php echo actual_link(); ?>upload/attraction/<?php echo $attraction['image_name'] ?>" alt="<?php echo $attraction['title'] ?>"></a>
                                            </div>
                                            <div class="room-summary">
                                                <h3 class="room-title">
                                                    <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($attraction['title'])) ?>/"><?php echo $attraction['title'] ?></a>
                                                </h3>

                                                <p class="room-description text-justify">
                                                    <?php echo substr($attraction['short_description'], 0, 150) ?>... 
                                                </p>

                                                <div class="room-meta clearfix">
                                                    <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($attraction['title'])) ?>/"> <div class="rating"> <i class="ion-arrow-right-a"></i> View More</div></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>                   
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