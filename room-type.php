<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . './class/include.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Room Type - Nature Trails - Unawatuna</title>
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
                            <h1>Room Types</h1>
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
                        <!-- room item -->
                        <?php
                        $ROOMS = new Room(NULL);
                        foreach ($ROOMS->all() as $room) {
                            ?>
                            <div class="carousel-item mb30">
                                <div class="custom-box">
                                    <div class="inner">
                                        <div class="row">
                                            <a href="view-room.php?id=<?php echo $room['id'] ?>"> 
                                                <div class="col-md-5">
                                                    <img src="upload/room/<?php echo $room['image_name'] ?>" class="img-responsive" alt="<?php echo $room['title'] ?>">
                                                </div>
                                            </a>
                                            <div class="col-md-7">
                                                <h3><?php echo $room['title'] ?></h3>                                           
                                                <span class="text-justify" style="margin-bottom:  10px">  
                                                    <?php echo substr($room['description'], 0, 300) ?>
                                                </span> 
                                                <a href="view-room.php" class="btn-slider">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

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