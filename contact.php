<!DOCTYPE html>
<?php
$BANNER = new Banner(7);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Contact Us | Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo actual_link(); ?>images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="<?php echo actual_link(); ?>css/style.css"><!-- Style -->
        <link href="<?php echo actual_link(); ?>contact-form/style.css" rel="stylesheet" type="text/css"/>
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
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo actual_link(); ?>upload/banner/<?php echo $BANNER->image_name ?>) ">

                    </div>
                </div>

                <div class=" no-padding">
                    <div class="page-content">
                        <div class="container"> 
                            <div  class="padd-header">
                                <h1 class="heading_primary text-center">Contact Us</h1> 
                            </div>
                            <div class="row tm-flex">
                                <div class="col-sm-7">
                                    <div class="sc-heading">
                                        <p class="first-title">Contact </p>
                                        <h3 class="second-title">With Us</h3>
                                    </div>

                                    <div class="sc-contact-form">
                                        <div   id="ajaxform"  class="form"> 
                                            <div class="col-md-12">
                                                <label>Name *</label>
                                                <input type="text" name="txtFullName" id="txtFullName"  placeholder="Your Name*">
                                                <div class="col-lg-12">
                                                    <span id="spanFullName"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Email *</label>
                                                <input type="email" name="txtEmail" id="txtEmail"  placeholder="Your Email*">
                                                <div class="col-lg-12">
                                                    <span id="spanEmail"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Subject *</label>
                                                <input type="text" name='txtSubject' id='txtSubject'  placeholder="Your Subject*">
                                                <div class="col-lg-12">
                                                    <span id="spanSubject"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Message *</label>
                                                <textarea name='txtMessage' id='txtMessage' cols="30" rows="10"  placeholder="Your message*"></textarea>
                                                <div class="col-lg-12">
                                                    <span id="spanMessage"></span>
                                                </div>
                                            </div>
                                            <div class="row" >
                                                <div class="col-md-4"  >
                                                    <label>Security Code:</label>
                                                    <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                                    <div class="col-lg-12">
                                                        <span id="capspan" ></span>
                                                    </div>

                                                </div>
                                                <div class="col-md-4"  >
                                                    <?php include("./contact-form/captchacode-widget.php"); ?>
                                                </div> 
                                                <div class="col-md-4"  > 
                                                    <input type="submit" id='btnSubmit' class="submit" value="Send message">          
                                                </div>
                                            </div>
                                            <div id="dismessage" class="msg-success"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15871.30932094826!2d80.248005!3d6.018429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf82e4e1180a2380d!2sNature+Trails+Boutique+Hotel!5e0!3m2!1sen!2s!4v1480572074037" height="800" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div> 
                        </div> 
                        <div class="empty-space"></div>
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
        <script src="<?php echo actual_link(); ?>js/libs/jquery.min.js"></script><!-- jQuery -->
        <script src="<?php echo actual_link(); ?>js/libs/stellar.min.js"></script><!-- parallax -->


        <script src="<?php echo actual_link(); ?>js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="<?php echo actual_link(); ?>js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="<?php echo actual_link(); ?>js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="<?php echo actual_link(); ?>js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="<?php echo actual_link(); ?>js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="<?php echo actual_link(); ?>js/libs/moment.min.js"></script><!-- moment -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="<?php echo actual_link(); ?>js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="<?php echo actual_link(); ?>js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="<?php echo actual_link(); ?>js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider --> 
        <script src="<?php echo actual_link(); ?>js/theme-customs.js"></script><!-- Theme Custom --> 
        <script src="contact-form/scripts.js" type="text/javascript"></script>
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