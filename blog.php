<!DOCTYPE html>
<?php
$BANNER = new Banner(5);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Blog | Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo actual_link(); ?>images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="<?php echo actual_link(); ?>css/style.css"><!-- Style -->

    </head>
    <body class="blog archive">
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



                <div class=" container">
                    <div class="blog-content layout-grid">
                        <div  class="padd-header">
                            <h1 class="heading_primary text-center">Blog</h1> 
                        </div>
                        <div class="row">
                            <?php
                            $BLOG = new Blog(NULL);
                            foreach ($BLOG->all() as $blog) {
                                ?>
                                <article class="post col-sm-4 clearfix">
                                    <div class="post-content">
                                        <div class="post-media">
                                            <a href="<?php echo actual_link(); ?>blog/<?php echo str_replace(" ", "-", strtolower($blog['title'])) ?>/"><img src="<?php echo actual_link(); ?>upload/blog/<?php echo $blog['image_name'] ?>" alt="<?php echo $blog['title'] ?>"></a>
                                        </div>
                                        <div class="post-summary">
                                            <h4 class="post-title">
                                                <a href="<?php echo actual_link(); ?>blog/<?php echo str_replace(" ", "-", strtolower($blog['title'])) ?>/"><?php echo substr($blog['title'],0,40) ?>..</a>
                                            </h4>
                                            <p class="post-description text-justify" lang="zxx">
                                                <?php echo substr($blog['short_description'], 0, 100) ?>....
                                            </p>
                                            <a href="<?php echo actual_link(); ?>blog/<?php echo str_replace(" ", "-", strtolower($blog['title'])) ?>/" class="btn-icon">Read more</a>
                                        </div>
                                    </div>
                                </article> 
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include './footer.php'; ?>
            <!-- Footer -->
        </div> 

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