
<?php
include './class/include.php';
$PAGE = new Page(1);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>About us -  Nature Trails - Unawatuna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->  
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

    </head>
    <body>

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

            <div id="main-content" class="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">

                    </div>
                </div> 
                <div id="home-main-content" class="home-main-content home-4"> 
                    <div class="container about-i"> 
                        <div class="sc-heading">
                            <div class="content container" style="padding: 23px 30px 0px;">
                                <h1 class="heading_primary text-center">About Us</h1>

                            </div>
                            <h3 class="second-title">Our Story</h3>
                        </div>
                        <div class="about-info row">
                            <div class="col-sm-6">  
                                <?php echo $PAGE->description ?>
                            </div>                         
                            <div class="col-sm-6 col-md-6 hidden-mobile" style="margin-top: -71px;"> 
                                <div class="sc-video style-02">
                                    <div class="background-video">
                                        <div class="cover-image"></div>
                                        <div class="content ">
                                            <i class="video-play ion-ios-play"></i>
                                            <h4 class="title-video"> Nature Trails Unawatuna</h4>
                                        </div>
                                        <video loop="" class="full-screen-video" data-autoplay="">
                                            <source src="images/home/hotel.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div> 
                            </div>                      
                        </div> 
                    </div> 

                    <div class="empty-space hidden-empty-space"></div>
                    <div class="h4-bg-reason">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-8">
                                    <div class="sc-reason">
                                        <h3 class="title">CORE VALUES</h3>
                                        <ul class="list-reason">
                                            <li> 
                                                <p class="text-justify">
                                                    We are steadfastly committed to creating an internal culture in which THINK CUSTOMERS permeates at every level.   
                                                </p>


                                            </li>
                                            <li>  
                                                <p class="text-justify">
                                                    We relentlessly focus on exceeding customer expectations in quality and customer service as a way of cultivating long lasting relationships with our internal and external customers.
                                                </p>

                                            </li>
                                            <li>  
                                                <p class="text-justify">
                                                    We actively promote the preservation of the environment and the diffusion of a culture that uplifts quality of life in order to contribute our might towards sustainable development.
                                                </p> 
                                            </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <!-- Footer --> 
            <?php include './footer.php'; ?>
            <!-- Footer -->
        </div><!-- wrapper-container -->

        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>


        <!-- Scripts -->
        <script src="js/libs/jquery-1.12.4.min.js"></script><!-- jQuery -->
        <script src="js/libs/jquery.plugin.min.js"></script><!-- jQuery -->
        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="js/libs/stellar.min.js"></script><!-- parallax -->
        <script src="js/libs/moment.min.js"></script><!-- moment -->
        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="js/libs/jquery.countdown.min.js"></script><!-- coming soon -->
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