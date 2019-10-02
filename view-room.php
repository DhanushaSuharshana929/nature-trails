<!DOCTYPE html>
<?php
include './class/include.php';
$id = $_GET['id'];
$ROOM = new Room($id);
$BANNER = new Banner(2);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $ROOM->title ?> -  Nature Trails - Unawatuna</title>
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
            <!-- nav.mobile-menu-container -->

            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(upload/banner/<?php echo $BANNER->image_name ?>) ">

                    </div>
                </div>

                <div class="site-content container">
                    <div class="room-single row">
                        <main class="site-main col-sm-12 col-md-9 flex-first">
                            <div class=" ">
                                <div class="room_gallery clearfix">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                            $ROOM_PHOTO = new RoomPhoto(NULL);
                                            foreach ($ROOM_PHOTO->getRoomPhotosById($id) as $key => $room_photo) {
                                                if ($key == 0) {
                                                    ?>
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="upload/room/gallery/<?php echo $room_photo['image_name'] ?>" alt="First slide">
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="upload/room/gallery/<?php echo $room_photo['image_name'] ?>" alt="Second slide">
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
                                <div class="title-share clearfix">
                                    <h2 class="title"><?php echo $ROOM->title ?></h2>
                                </div>
                                <div class="room_price">
                                    <span class="price_value price_min">$<?php echo $ROOM->price ?></span>
                                    <span class="unit">Night</span>
                                </div>
                                <?php echo $ROOM->features ?>
                                <div class="description text-justify">
                                    <?php echo $ROOM->description ?>
                                </div>
                            </div>



                            <div class="room_additinal">
                                <h3 class="title style-01">AMENITIES AND SERVICES</h3>
                                <?php echo $ROOM->amenities ?>
                            </div>
                            <div class="room_additinal">
                                <h3 class="title style-01">Other Rooms</h3>
                                <div class="sc-about-slides row">
                                    <ul class="slides owl-theme owl-carousel sc-tourist style-02">
                                        <?php
                                        $ROOM = new Room(NULL);
                                        foreach ($ROOM->all() as $room) {
                                            ?>
                                            <li>
                                                <div class="item">
                                                    <div class="image">
                                                        <a href="view-room.php?id=<?php echo $room['id'] ?>"><img src="upload/room/<?php echo $room['image_name'] ?>" alt="<?php echo $room['title'] ?>"></a>
                                                        <div class="meta-img">
                                                            <span class="price">$<?php echo $room['price'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="inner">
                                                        <div class="content">
                                                            <div class="title"><a href="view-room.php?id=<?php echo $room['id'] ?>"><?php echo $room['title'] ?></a></div> 

                                                            <ul class="meta r-top-2">
                                                                <li>Start From <span class="price-color" >  $12 </span> / Night  </li>
                                                            </ul>

                                                            <?php echo substr($room['short_description'], 0, 100) ?> ...
                                                        </div>

                                                        <div class="review clearfix " >
                                                            <a href="view-room.php?id=<?php echo $room['id'] ?>">
                                                                <div class="time flot-r"><i class="ion-arrow-right-a"></i> View More</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div
                            </div>
                    </div>
                    </main>

                    <aside id="secondary" class="widget-area col-sm-12 col-md-3 sticky-sidebar">
                        <div class="wd wd-book-room">
                            <a href="#" class="book-room">Book This Room</a>
                            <div id="form-popup-room" class="form-popup-room">
                                <div class="popup-container">
                                    <a href="#" class="close-popup"><i class="ion-android-close"></i></a>
                                    <form id="hotel-popup-results" name="hb-search-single-room" class="hotel-popup-results">
                                        <div class="room-head">
                                            <h3 class="room-title">Classic Room</h3>
                                            <p class="description">Please enter the information to complete the book this room.</p>
                                        </div>
                                        <div class="search-room-popup">
                                            <ul class="form-table clearfix">
                                                <li class="form-field">
                                                    <input type="text" name="name" id="name" required class="name" placeholder="Your Name*">
                                                </li>
                                                <li class="form-field">
                                                    <input type="email" name="email" id="email" required class="email" placeholder="Your Email*">
                                                </li>
                                                <li class="form-field">
                                                    <input type="tel" name="phone" id="phone" required class="phone" placeholder="Your Phone*">
                                                </li>
                                                <li class="form-field">
                                                    <input type="text" name="add" id="add" required class="add" placeholder="Your Address*">
                                                </li>
                                                <li class="form-field">
                                                    <input type="text" name="check_in_date" id="popup_check_in_date" required class="check_in_date" placeholder="Arrival Date">
                                                </li>
                                                <li class="form-field">
                                                    <input type="text" name="check_out_date" id="popup_check_out_date" required class="check_out_date " placeholder="Departure Date">
                                                </li>

                                                <li class="form-field room-submit">
                                                    <button id="check_date" class="submit" type="submit">Book Now</button>
                                                </li>
                                            </ul>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="wd wd-check-room">
                            <h3 class="title">CHECK AVAILABILITY</h3>
                            <form name="search-rooms" class="wd-search-room datepicker" action="http://html.thimpress.com/hotelwp/rooms-search.html">
                                <ul class="form-table">
                                    <li class="form-field">
                                        <input type="text" name="check_in_date" id="check_in_date" required class="check_in_date" placeholder="Check in">
                                    </li>
                                    <li class="form-field">
                                        <input type="text" name="check_out_date" id="check_out_date" required class="check_out_date " placeholder="Check out">
                                    </li>
                                    <li class="select-field">
                                        <select name="adults_capacity" required>
                                            <option value="">Guest</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </li>
                                </ul>
                                <div class="room-submit">
                                    <button class="submit" type="submit">Check Availability</button>
                                </div>
                            </form>
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