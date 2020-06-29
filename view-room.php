<!DOCTYPE html>
<?php
$BANNER = new Banner(2);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $ROOM->title ?> | Accommodations | Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo actual_link(); ?>images/icons/favicon.png">
        <link rel="stylesheet" href="<?php echo actual_link(); ?>css/libs/jquery-ui/jquery-ui.min.css">
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="<?php echo actual_link(); ?>css/style.css"><!-- Style -->

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
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo actual_link(); ?>upload/banner/<?php echo $BANNER->image_name ?>) ">

                    </div>
                </div>

                <div class="site-content container">
                    <div class="room-single row">
                        <main class="site-main col-sm-12 col-md-12 flex-first">
                            <div class=" ">
                                <div class="room_gallery clearfix">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                            $ROOM_PHOTO = new RoomPhoto(NULL);
                                            foreach ($ROOM_PHOTO->getRoomPhotosById($ROOM->id) as $key => $room_photo) {
                                                if ($key == 0) {
                                                    ?>
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo actual_link(); ?>upload/room/gallery/<?php echo $room_photo['image_name'] ?>" alt="<?php echo $room_photo['caption'] ?>">
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo actual_link(); ?>upload/room/gallery/<?php echo $room_photo['image_name'] ?>" alt="<?php echo $room_photo['caption'] ?>">
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="title-share clearfix">
                                            <h2 class="title"><?php echo $ROOM->title ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="view-all text-center">
                                            <a href="<?php echo actual_link(); ?>accommodation-booking/<?php echo str_replace(" ", "-", strtolower($ROOM->title)) ?>/" class="btn-radius">Book Now</a>
                                        </div>
                                    </div>
                                </div>


                                <?php echo $ROOM->features ?>
                                <div class="description text-justify">
                                    <?php echo $ROOM->description ?>
                                </div>
                            </div>



                            <div class="room_additinal">
                                <h3 class="title style-01">AMENITIES AND SERVICES</h3>
                                <?php echo $ROOM->amenities ?>
                            </div>
                            <div class="room_additinal">
                                <h3 class="title style-01">Other Rooms</h3>
                                <div class="sc-about-slides row">
                                    <ul class="slides owl-theme owl-carousel sc-tourist style-02">
                                        <?php
                                        $ROOM = new Room(NULL);
                                        foreach ($ROOM->all() as $room) {
                                            ?>
                                            <li>
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
                                                            <div class="title"><a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/"><?php echo $room['title'] ?></a></div> 


                                                            <p class="text-justify">
                                                                <?php echo substr($room['short_description'], 0, 100) ?> ...
                                                            </p>

                                                        </div>

                                                        <div class="review clearfix " >
                                                            <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/<?php echo str_replace(" ", "-", strtolower($room['title'])) ?>/">
                                                                <div class="time flot-r"><i class="ion-arrow-right-a"></i> View More</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
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
        <script src="<?php echo actual_link(); ?>js/libs/jquery-1.12.4.min.js"></script><!-- jquery -->
        <script src="<?php echo actual_link(); ?>js/libs/stellar.min.js"></script><!-- parallax -->


        <script src="<?php echo actual_link(); ?>js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="<?php echo actual_link(); ?>js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="<?php echo actual_link(); ?>js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="<?php echo actual_link(); ?>js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="<?php echo actual_link(); ?>js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.flexslider-min.js"></script><!-- flexslider -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="<?php echo actual_link(); ?>js/libs/gallery.min.js"></script><!-- gallery -->
        <script src="<?php echo actual_link(); ?>js/libs/moment.min.js"></script><!-- moment -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="<?php echo actual_link(); ?>js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="<?php echo actual_link(); ?>js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
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