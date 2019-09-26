<!DOCTYPE html>
<?php
include './class/include.php';
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Excursions - Nature Trails - Unawatuna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

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
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                        <div class="content container">
                            <h1 class="heading_primary">Excursions</h1>
                            <ul class="breadcrumbs ul-top-title" >
                                <li class="item"><a href="index-2.html">Home</a></li>
                                <li class="item"><span class="separator"></span></li> 
                                <li class="item active">Excursions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="rooms-content layout-grid style-01">
                        <div class="row">
                            <?php
                            $ATTRACTION = new Attraction(NULL);
                            foreach ($ATTRACTION->all() as $attraction) {
                                ?>
                                <div class="room col-sm-4 clearfix">
                                    <div class="room-item">
                                        <div class="room-media">
                                            <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="<?php echo $attraction['title'] ?>"></a>
                                        </div>
                                        <div class="room-summary">
                                            <h3 class="room-title">
                                                <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"><?php echo $attraction['title'] ?></a>
                                            </h3>

                                            <p class="room-description text-justify">
                                                <?php echo substr($attraction['short_description'], 0, 150) ?>... 
                                            </p>

                                            <div class="room-meta clearfix">
                                                <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"> <div class="rating"> <i class="ion-arrow-right-a"></i> View More</div></a>
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
        <script src="js/libs/jquery.min.js"></script><!-- jQuery -->
        <script src="js/libs/stellar.min.js"></script><!-- parallax -->

        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="js/theme-customs.js"></script><!-- Theme Custom -->
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