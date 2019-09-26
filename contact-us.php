<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact us - Nature Trails - Unawatuna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta name="author" content="">

        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div id="preloader"></div>
        <div id="wrapper">

            <!-- header info begin -->
            <?php include './header.php'; ?>
            <!-- header info close -->


            <!-- subheader -->
           <section id="subheader"  >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Contact Us</h1>
                            <h3>For Your Pleasure</h3>
                        </div>
                    </div>
                </div>
            </section> 
            <!-- subheader close -->

            <!-- content begin -->
            <div id="content">
                <div class="container">
                    <div class="row">

                        <div class="form-container">
                            <div class="col-md-6">
                                <div class="lt-form">
                                    <div name="contactForm" id='contact_form' method="post" action=''>
                                        <div class="label">
                                            <i class="fa fa-user"></i>Name
                                            <div id='name_error'  class='fa fa-exclamation-circle error-icon' ></div> 
                                        </div>
                                        <input type='text' name="txtFullName" id="txtFullName" class="form-control" >
                                        <div class="col-lg-12">
                                            <span id="spanFullName"></span>
                                        </div>


                                        <div class="label">
                                            <i class="fa fa-envelope"></i>Email
                                            <div id='email_error' class='fa fa-exclamation-circle error-icon'></div>
                                        </div>
                                        <input type='text' name="txtEmail" id="txtEmail" class="form-control">
                                        <div class="col-lg-12">
                                            <span id="spanEmail"></span>
                                        </div>

                                        <div class="label">
                                            <i class="fa fa-ticket"></i>Subject 
                                            <div id='email_error' class='fa fa-exclamation-circle error-icon'></div>
                                        </div>
                                        <input type='text' name='txtSubject' id='txtSubject' class="form-control">
                                        <div class="col-lg-12">
                                            <span id="spanSubject"></span>
                                        </div>

                                        <div class="label">
                                            <i class="fa fa-comment"></i>Additional Messages
                                            <div id='message_error' class='fa fa-exclamation-circle error-icon'></div>
                                        </div>
                                        <textarea name='txtMessage' id='txtMessage' class="form-control" rows="5"></textarea>
                                        <div class="col-lg-12">
                                            <span id="spanMessage"></span>
                                        </div>

                                        <div class="col-lg-4" style="padding-left: 0px;">
                                            <label for="comment">Security Code:</label>
                                            <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                            <span id="capspan" ></span>
                                        </div>
                                        <div class="col-lg-4" style="margin-top: -10px;">
                                            <?php include("./contact-form/captchacode-widget.php"); ?>
                                        </div>  
                                        <div class="col-md-12"> 
                                            <input type='submit' id='btnSubmit' value='Submit' class="btn-custom">
                                        </div> 
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15871.30932094826!2d80.248005!3d6.018429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf82e4e1180a2380d!2sNature+Trails+Boutique+Hotel!5e0!3m2!1sen!2s!4v1480572074037" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer begin -->
            <?php include './footer.php'; ?>
            <!-- footer close -->

        </div>

        <!-- Javascript Files
    ================================================== -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jpreloader.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/easing.js"></script>
        <script src="js/jquery.ui.totop.js"></script>
        <script src="js/ender.js"></script>
        <script src="js/jquery.scrollto.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/video.resize.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.stellar.js"></script>
        <script src="js/jquery.plugin.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/exotheme.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/validation_reservation.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="js/map.js"></script>

        <script src="contact-form/scripts.js" type="text/javascript"></script>
    </body>

</html>