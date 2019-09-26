<!DOCTYPE html>
<?php
include './class/include.php';
$id = $_GET['id'];
$TOUR_PACKAGE = new TourPackage($id);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $TOUR_PACKAGE->title ?> -  Nature Trails - Unawatuna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">
        <link rel="stylesheet" href="css/libs/jquery-ui/jquery-ui.min.css">
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

    </head>
    <body class="room single">
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
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                        <div class="content container">
                            <h1 class="heading_primary"><?php echo $TOUR_PACKAGE->title ?></h1>
                            <ul class="breadcrumbs ul-top-title" >
                                <li class="item"><a href="index.php">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item"><a href="tour.php">Tour Packages</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active"><?php echo $TOUR_PACKAGE->title ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="room-single row">
                        <main class="site-main col-sm-12 col-md-12 flex-first">
                            <div class="room-wrapper">                                 
                                <div class="title-share clearfix">
                                    <h2 class="title"><?php echo $TOUR_PACKAGE->title ?></h2>
                                </div>

                                <div class="description text-justify">
                                    <?php echo $TOUR_PACKAGE->description ?>
                                </div>
                            </div>
                            <?php
                            $TOUR_DATE = new TourDate(NULL);
                            foreach ($TOUR_DATE->getTourDatesById($TOUR_PACKAGE->id) as $tour_date) {
                                ?>
                                <div class="room_additinal">
                                    <h3 class="title style-01">AMENITIES AND SERVICES</h3>
                                    <div class="sc-gallery">

                                        <div class="wrapper-gallery row" itemscope itemtype="http://schema.org/ItemList">
                                            <?php
                                            $TOUR_DATE_PHOTO = new TourDatePhoto(NULL);
                                            foreach ($TOUR_DATE_PHOTO->getTourDatePhotosById($tour_date['id']) as $tour_date_photo) {
                                                ?>
                                                <div class="col-sm-3 filter-room filter-restaurant filter-swimming">
                                                    <a href="upload/photo-album/gallery/<?php echo $tour_date_photo['image_name'] ?>" class="gallery-popup">
                                                        <img src="upload/photo-album/gallery/thumb/<?php echo $tour_date_photo['image_name'] ?>" alt=""></a>
                                                </div> 
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="room_additinal">
                                <h3 class="title style-01">Other Tour Packages</h3>
                                <div class="sc-about-slides row">
                                    <ul class="slides owl-theme owl-carousel sc-tourist style-02">
                                        <?php
                                        $TOUR_PACKAGE = new TourPackage(NULL);
                                        foreach ($TOUR_PACKAGE->all() as $tour_package) {
                                            ?>
                                            <li>
                                                <div class="item">
                                                    <div class="image">
                                                        <a href="view-tour.php??id=<?php echo $tour_package['id'] ?>"><img src="upload/tour-package/<?php echo $tour_package['image_name'] ?>" alt="<?php echo $room['title'] ?>"></a>
                                                        <div class="meta-img">
                                                            <span class="price">$<?php echo $tour_package['price'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="inner">
                                                        <div class="content">
                                                            <div class="title"><a href="view-tour.php??id=<?php echo $tour_package['id'] ?>"><?php echo $tour_package['title'] ?></a></div> 
                                                            <?php echo substr($tour_package['short_description'], 0, 100) ?> ...
                                                        </div>

                                                        <div class="review clearfix " >
                                                            <a href="view-tour.php?id=<?php echo $tour_package['id'] ?>">
                                                                <div class="time flot-r"><i class="ion-arrow-right-a"></i> View More</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div
                            </div>
                    </div>
                    </main>


                </div>
            </div>

        </div>
        <!-- Footer -->
        <?php include './footer.php'; ?>
        <!--footer-->
    </div><!-- wrapper-container -->

    <div id="back-to-top">
        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
    </div>


    <!-- Scripts -->
    <script src="js/libs/jquery-1.12.4.min.js"></script><!-- jquery -->
    <script src="js/libs/stellar.min.js"></script><!-- parallax -->


    <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
    <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
    <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
    <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
    <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
    <script src="js/libs/counter-box.min.js"></script><!-- counter -->
    <script src="js/libs/jquery.flexslider-min.js"></script><!-- flexslider -->
    <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
    <script src="js/libs/gallery.min.js"></script><!-- gallery -->
    <script src="js/libs/moment.min.js"></script><!-- moment -->
    <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
    <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
    <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
    <script src="js/theme-customs.js"></script><!-- Theme Custom -->

</body>
</html>