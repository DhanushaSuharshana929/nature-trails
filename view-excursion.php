<!DOCTYPE html>
<?php
include './class/include.php';
$id = $_GET['id'];
$ATTRACTION = new Attraction($id);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $ATTRACTION->title ?>  -  Nature Trails - Unawatuna</title>
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
            <!-- Header --> 

            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                        <div class="content container">
                            <h1 class="heading_primary"><?php echo $ATTRACTION->title ?></h1>
                            <ul class="breadcrumbs ul-top-title" >
                                <li class="item"><a href="index.php">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item"><a href="excursion.php">Excursions</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active"><?php echo $ATTRACTION->title ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="room-single row">
                        <main class="site-main col-sm-12 col-md-9 flex-first">
                            <div class="room-wrapper">
                                <div class="room_gallery clearfix">
                                    <div class="camera_wrap camera_emboss" id="camera_wrap">
                                        <?php
                                        $ATTRACTION_PHOTO = new AttractionPhoto(NULL);
                                        foreach ($ATTRACTION_PHOTO->getAttractionPhotosById($id) as $attraction_photo) {
                                            ?>
                                            <div  data-src="upload/attraction/gallery/<?php echo $attraction_photo['image_name'] ?>" ></div> 
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="title-share clearfix">
                                    <h2 class="title"><?php echo $ATTRACTION->title ?></h2> 
                                </div>

                                <div class="description text-justify">
                                    <?php echo $ATTRACTION->description ?> 
                                </div> 
                            </div>
                        </main>
                        <aside id="secondary" class="widget-area col-sm-12 col-md-3 sticky-sidebar">
                            <div class="wd wd-check-room">
                                <h3 class="title">Other Excursions</h3>
                                <ul class="form-table">
                                    <?php
                                    $ATTRACTION = new Attraction(NULL);
                                    foreach ($ATTRACTION->all() as $key => $attraction) {
                                        ?>
                                        <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>" <li class="form-field">
                                                <?php echo $attraction['title'] ?>
                                            </li> 
                                        </a>
                                        <hr>
                                    <?php } ?>
                                </ul> 
                            </div>
                        </aside>
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