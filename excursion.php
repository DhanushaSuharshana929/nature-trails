<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . './class/include.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Excursion - Nature Trails - Unawatuna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta name="author" content="">

        <link rel="stylesheet" href="css/main.css" type="text/css">
    </head>

    <body>
        <div id="preloader"></div>
        <div id="wrapper">

            <!-- header begin -->
            <?php include './header.php'; ?>
            <!-- header close -->



            <!-- subheader -->             
            <section id="subheader"  >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Excursion</h1>
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
                        <div class="room-tab">
                            <?php
                            $ATTRACTION = new Attraction(NULL);
                            foreach ($ATTRACTION->all() as $attraction) {
                                ?>
                                <div class="col-md-4 col-xs-6 room-item">
                                    <div class="inner">                                     
                                        <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"> 
                                            <img src="upload/attraction/<?php echo $attraction['image_name'] ?>" class="img-responsive" alt="<?php echo $attraction['title'] ?>"/>
                                        </a>
                                        <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"> 
                                            <h3><?php echo $attraction['title'] ?></h3> 
                                        </a>
                                        <div class="teaser text-justify">
                                            <?php echo $attraction['short_description'] ?>  

                                        </div>
                                        <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>" class="btn-detail">View Details</a>
                                    </div>
                                </div> 
                            <?php } ?>
                        </div> 
                        <div id="room-preview">
                            <div class="load-here">
                            </div>
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


    </body>

</html>