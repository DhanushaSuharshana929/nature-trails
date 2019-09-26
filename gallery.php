<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . './class/include.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Gallery - Nature Trails - Unawatuna</title>
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
                            <h1>Gallery</h1>
                            <h3>For Your Pleasure</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader close -->

            <!-- content begin -->
            <div class="container"> 
                <div  class="no-bottom">   
                    <div class="row" id="content">
                        <!-- gallery item -->
                        <?php
                        $ALBUM_PHOTO = new AlbumPhoto(NULL);
                        foreach ($ALBUM_PHOTO->getAlbumPhotosById(1) as $album_photo){
                        ?>
                        <div class="col-md-3" style="margin-bottom: 35px">
                            <div class="item furniture gallery">  
                                <a href="upload/photo-album/gallery/<?php echo $album_photo['image_name'] ?>" class="big ">
                                    <span class="overlay"><?php echo $album_photo['caption'] ?>  </span>
                                    <img src="upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt="<?php echo $album_photo['caption'] ?>" title="<?php echo $album_photo['caption'] ?>" />
                                </a> 
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
        <script src="js/simple-lightbox.min.js" type="text/javascript"></script>

        <script>
            $(function () {
                var $gallery = $('.gallery a').simpleLightbox();

                $gallery.on('show.simplelightbox', function () {
                    console.log('Requested for showing');
                })
                        .on('shown.simplelightbox', function () {
                            console.log('Shown');
                        })
                        .on('close.simplelightbox', function () {
                            console.log('Requested for closing');
                        })
                        .on('closed.simplelightbox', function () {
                            console.log('Closed');
                        })
                        .on('change.simplelightbox', function () {
                            console.log('Requested for change');
                        })
                        .on('next.simplelightbox', function () {
                            console.log('Requested for next');
                        })
                        .on('prev.simplelightbox', function () {
                            console.log('Requested for prev');
                        })
                        .on('nextImageLoaded.simplelightbox', function () {
                            console.log('Next image loaded');
                        })
                        .on('prevImageLoaded.simplelightbox', function () {
                            console.log('Prev image loaded');
                        })
                        .on('changed.simplelightbox', function () {
                            console.log('Image changed');
                        })
                        .on('nextDone.simplelightbox', function () {
                            console.log('Image changed to next');
                        })
                        .on('prevDone.simplelightbox', function () {
                            console.log('Image changed to prev');
                        })
                        .on('error.simplelightbox', function (e) {
                            console.log('No image found, go to the next/prev');
                            console.log(e);
                        });
            });
        </script>
    </body>

</html>