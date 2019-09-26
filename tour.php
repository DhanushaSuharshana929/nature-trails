<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . './class/include.php');
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tour Packages  -  Nature Trails - Unawatuna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

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
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                        <div class="content container">
                            <h1 class="heading_primary">Tour Packages</h1>
                            <ul class="breadcrumbs  ul-top-title" >
                                <li class="item"><a href="index.php">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active">Tour Packages</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="events-content">
                        <div class="sc-events grid-style">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="happening" role="tabpanel">
                                    <div class="row clearfix">
                                        <?php
                                        $TOUR_PACKAGE = new TourPackage(NULL);
                                        foreach ($TOUR_PACKAGE->all() as $tour_package) {
                                            ?>
                                            <div class="event col-sm-4">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href=""><img src="upload/tour-package/<?php echo $tour_package['image_name'] ?>" alt="<?php echo $tour_package['title'] ?>"></a>
                                                    </div>
                                                    <div class="content">
                                                        <div class="  clearfix">
                                                            <h3  style="padding: 15px 0px 0px 0px;" ><a href=""><?php echo $tour_package['title'] ?></a></h3>
                                                        </div>
                                                        <div class="event-desc ">
                                                            <p lang="zxx" class="text-justify">
                                                                <?php echo substr($tour_package['short_description'], 0, 120) ?>...
                                                            </p>
                                                        </div>
                                                        <div class="read-more">
                                                            <a href="" class="btn-read_more"><i class="ion-arrow-right-c"></i>Read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
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

    </body>
</html>