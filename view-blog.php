<!DOCTYPE html>
<?php
include './class/include.php';
$id = $_GET['id'];
$BLOG = new Blog($id);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $BLOG->title ?> || Nature Trails - Unawatuna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

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
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                        <div class="content container">
                            <h1 class="heading_primary"><?php echo $BLOG->title ?></h1>
                            <ul class="breadcrumbs ul-top-title" >
                                <li class="item"><a href="index.php">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item"><a href="blog.php">Blogs</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active"><?php echo $BLOG->title ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="row">
                        <main class="site-main col-sm-12 col-md-9 flex-first">
                            <div class="blog-single-content">
                                <article class="post clearfix">
                                    <div class="post-content">
                                        <div class="post-media">
                                            <img src="upload/blog/gallery/<?php echo $BLOG->image_name ?>" alt="<?php echo $BLOG->title ?>">
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
                                        <a href="view-blog.php?id=<?php echo $blog['id'] ?>"> <li><?php echo $blog['title'] ?></li></a>
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
        <script src="js/libs/gallery.min.js"></script><!-- gallery -->
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