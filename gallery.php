<!DOCTYPE html>
<?php
include './class/include.php';
$BANNER = new Banner(6);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Gallery -  Nature Trails - Unawatuna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

    </head>
    <body class="page">
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
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(upload/banner/<?php echo $BANNER->image_name ?>) ">
                    </div>
                    
                </div>


                <div class="site-content">
                    <div class="page-content">
                        <div class="container">
                            <div  class="padd-header">
                            <h1 class="heading_primary text-center">Gallery</h1> 
                        </div>
                            <div class="sc-gallery">
                                <ul class="filter-controls">
                                    <li><a href="#" class="filter active">All</a></li>
                                    <?php
                                    $PHOT_ALBUM = new PhotoAlbum(NULL);
                                    foreach ($PHOT_ALBUM->all()as $key => $album) {
                                        ?>

                                        <li><a href="javascript:;" class="filter" data-filter=".filter-<?php echo $album['id']; ?>"> <?php echo $album['title']; ?></a></li>

                                        <?php
                                    }
                                    ?>
                                </ul>
                                <div class="wrapper-gallery row" itemscope itemtype="http://schema.org/ItemList">
                                    <?php
                                    $ALBUM_PHOTO = new AlbumPhoto(NULL);
                                    foreach ($ALBUM_PHOTO->all() as $album_photo) {
                                        ?>
                                        <div class="col-sm-3 filter-<?php echo $album_photo['album']; ?>">
                                            <a href="upload/photo-album/gallery/<?php echo $album_photo['image_name'] ?>" class="gallery-popup">
                                                <img src="upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt=""></a>
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
            <!--Footer-->
        </div><!-- wrapper-container -->

        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>


        <!-- Scripts -->


        <script src="js/libs/jquery-1.12.4.min.js"></script><!-- jQuery -->
        <script src="js/libs/jquery.plugin.min.js"></script><!-- jQuery -->  
        <script src="js/libs/isotope.pkgd.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap --> 
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup --> 
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