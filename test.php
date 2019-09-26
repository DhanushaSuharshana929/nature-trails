<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HOTEL HTML TEMPLATE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="css/libs/revolution/settings.css">
        <link rel="stylesheet" href="css/libs/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

    </head>
    <body class="demo-4 home">

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
                        <div class="content container">
                            <h1 class="heading_primary">About Us</h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="index.php">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="home-main-content" class="home-main-content home-4"> 
                    <div class="container">
                        <div class="empty-space"></div>
                        <div class="sc-heading">
                            <p class="first-title">Nature Trails Unawatuna</p>
                            <h3 class="second-title">Ayubowan</h3>
                        </div>
                        <div class="about-info row">
                            <div class="col-sm-7">
                                <p class="text-justify">  
                                    Welcome to Nature Trails Boutique Hotel. We are located on the other side of the Rumassala mountain by which the bay-like Unawatuna Beach is surrounded. The hotel land extends right up to the summit of the mountain and as the name Nature Trails implies, guests staying in our hotel can embark on a nature walk through the mountain to reach the picturesque Jungle Beach of Unawatuna.
                                </p>
                                <p class="text-justify">  
                                    For nature lovers and others looking to escape the hustle and bustle of the city but still want to be at walking distance to the beach, there is no better secluded hideaway in the area than the Nature Trails Boutique Hotel.                                      
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <img src="images/ab.jpg" class="img-responsive" alt=""/>
                            </div>
                        </div> 
                    </div> 

                    <div class="empty-space"></div>
                    <div class="h4-bg-reason">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-8">
                                    <div class="sc-reason">
                                        <h3 class="title">Why Choose Us !</h3>
                                        <ul class="list-reason">
                                            <li> 
                                                We are steadfastly committed to creating an internal culture in which THINK CUSTOMERS permeates at every level.
                                            </li>
                                            <li>  
                                                We relentlessly focus on exceeding customer expectations in quality and customer service as a way of cultivating long lasting relationships with our internal and external customers.
                                            </li>
                                            <li>  
                                                We actively promote the preservation of the environment and the diffusion of a culture that uplifts quality of life.
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
        <script>
            // countdown each
            var counts = $('.tq-counter');
            for (var i = 0; i < counts.length; i++) {
                var time = $(counts[i]).attr('data-time');
                time = new Date(time);

                var current_time = new Date(time);

                $(counts[i]).countdown({
                    until: current_time,
                    padZeroes: true,
                });
            }
        </script>

        <!-- REVOLUTION JS FILES -->
        <script  src="js/libs/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="js/libs/revolution/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="js/libs/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.video.min.js"></script>





    </body>
</html>