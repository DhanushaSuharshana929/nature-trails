<!DOCTYPE html>
<?php
$BANNER = new Banner(5);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $BLOG->title ?> | Blog | Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo actual_link(); ?>images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="<?php echo actual_link(); ?>css/style.css"><!-- Style -->

    </head>
    <body class="single single-post">
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

                <div class="site-content container">
                    <div class="row">
                        <main class="site-main col-sm-12 col-md-9 flex-first">
                            <div class="blog-single-content">
                                <article class="post clearfix">
                                    <div class="post-content">
                                        <div class="post-media">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php
                                                    $BLOG_PHOTO = new BlogPhoto(NULL);
                                                    foreach ($BLOG_PHOTO->getBlogPhotosById($id) as $key => $blog_photo) {

                                                        if ($key == 0) {
                                                            ?>
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="<?php echo actual_link(); ?>upload/blog/gallery/<?php echo $blog_photo['image_name'] ?>" alt="First slide">
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?php echo actual_link(); ?>upload/blog/gallery/<?php echo $blog_photo['image_name'] ?>" alt="Second slide">
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

                                        <div class="post-summary">
                                            <h2 class="post-title"><?php echo $BLOG->title ?></h2>

                                            <div class="post-description text-justify">
                                                <p>
                                                    <?php echo $BLOG->description ?>        
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </main>
                        <aside id="secondary" class="widget-area col-sm-12 col-md-3 sticky-sidebar">

                            <div class="wd wd-categories">
                                <h3 class="wd-title">Other Blogs</h3>

                                <ul>
                                    <?php
                                    $BLOG = new Blog(NULL);
                                    foreach ($BLOG->all() as $blog) {
                                        ?>
                                        <a href="<?php echo actual_link(); ?>blog/<?php echo str_replace(" ", "-", strtolower($blog['title'])) ?>/"> <li><?php echo $blog['title'] ?></li></a>
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
        <script src="<?php echo actual_link(); ?>js/libs/gallery.min.js"></script><!-- gallery -->
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