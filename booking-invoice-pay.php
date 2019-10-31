<!DOCTYPE html>
<?php
include './class/include.php';
$BANNER = new Banner(1);
if (!isset($_SESSION)) {
    session_start();
}
if ($_GET['id']) {
    $ref = '';
    if (isset($_GET['ref'])) {
        $ref = 'Reference: #' . $_GET['ref'];
    }
    $id = (int) $_GET['id'];
    $order = new Order();
    $inv = $order->getById($id);

    if ($inv['status'] == 1) {
        $status = 'Paid';
    } else {
        $status = 'Unpaid';
    }
}
$total = 0;
$total = (float) $inv['total_amount'] + (float) $inv['fees_or_taxes'];
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Booking.com Payment Order Invoice | Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Welcome to Nature Trails Boutique Hotel. We are located on the other side of the Rumassala mountain by which the bay-like Unawatuna Beach is surrounded. ">
        <meta name="keywords" content="unawatuna hotels, best hotel in unawatuna, unawatuna resorts, hotels in unawatuna">
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link href="css/libs/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/revolution/settings.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/invoice.css" rel="stylesheet" type="text/css"/>
        <link href="css/libs/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="demo-3 home">

        <!-- Wrapper content -->
        <div id="wrapper-container" class="content-pusher">
            <div class="overlay-close-menu"></div>

            <!-- Header -->
            <?php include './header.php'; ?>
            <!--End Header -->

            <!-- Main Content -->
            <div id="main-content" class="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(upload/banner/<?php echo $BANNER->image_name ?>) ">

                    </div>
                </div> 
                <div id="home-main-content" class="home-main-content home-1">
                    <section class="hg_section sec1">
                        <!--<div class="container">-->
                        <div class="container">
                            <div class="booking-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-form invoice-section">
                                            <div class="row">

                                                <?php
                                                if ($_GET['id'] && $inv) {
                                                    ?>
                                                    <div class="row col-md-12 invoice-alert-section">
                                                        <?php
                                                        $pay = '';
                                                        if (isset($_GET['pay'])) {
                                                            $pay = $_GET['pay'];

                                                            if ($pay == 'error') {
                                                                ?>
                                                                <div class="alert alert-danger col-md-9"><b>Sorry! Your transaction was not successful.</b></div>
                                                                <?php
                                                            } elseif ($pay == 'success') {
                                                                ?>
                                                                <div class="alert alert-success col-md-9"><b>Your payment has been successfully processed. Thank you!.  <?php echo $ref; ?></b></div>
                                                                <?php
                                                            }
                                                        } elseif ($inv["status"] == 1) {
                                                            ?>
                                                            <div class="alert alert-warning col-md-9"><b>We have already received the payment for this invoice .</b></div>
                                                            <?php
                                                        } elseif (isset($_GET['error'])) {
                                                            ?>
                                                            <div class="alert alert-danger col-md-9"><b>Your payment process has been canceled.</b></div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 main-section" style="background-color: #ffffff; width: 100%;">
                                                        <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                                            <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                                            <img src="images/logo3.png" alt="Nature Trails"/><br/>
                                                            <span>144B, Matara Road, Unawatuna.</span><br/>
                                                            <span>Email: info@naturetrailsunawatuna.com</span><br/>
                                                            <span>Phone: (+94) 77 711 8616</span>
                                                        </div>
                                                        <ul>
                                                            <li><span class="bb">Booking.com Invoice Status : </span><?php echo $status; ?><span></span></li>
                                                            <li><span class="bb">Booking.com Invoice ID : </span>#<?php echo $inv["id"]; ?><span></span></li>
                                                            <li><span class="bb">Date of Booking.com Invoice : </span><?php echo $inv["date"]; ?><span></span></li>
                                                            <li><span class="bb">Customer Name : </span><span><?php echo $inv["full_name"]; ?></span></li>
                                                            <li><span class="bb">Customer Email: </span><span><?php echo $inv["email"]; ?></span></li>
                                                            <li><span class="bb">Customer Address: </span><span><?php echo $inv["address"]; ?></span></li>
                                                            <li><span class="bb">Customer City: </span><span><?php echo $inv["city"]; ?></span></li>
                                                            <li><span class="bb">Customer Country: </span><span><?php echo $inv["country"]; ?></span></li>
                                                            <li><span class="bb">Customer Contact Number: </span><span><?php echo $inv["contact"]; ?></span></li>
                                                        </ul>
                                                        <table width="80%" class="desc-table">
                                                            <tr>
                                                                <th width="100%" colspan="2">Description</th> 
                                                            </tr>
                                                            <tr>
                                                                <td  colspan="2"><?php echo $inv["description"]; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bdr-top right"><b>Invoice Amount:</b></td>
                                                                <td class="bdr bdr-top right"><b><?php echo $inv["currency"] . ' ' . number_format($inv["total_amount"], 2); ?></b></td>
                                                            </tr>
                                                        </table>
                                                        <ul>
                                                            <li><span class="bb">Fees or Taxes: </span><span><?php echo $inv["currency"] . ' ' . $inv["fees_or_taxes"]; ?></span></li>
                                                            <li><span class="bb">Total Amount: </span><span><?php echo $inv["currency"] . ' ' . number_format($total, 2); ?></span></li>
                                                        </ul>
                                                        <div class="terms-of-the-condition">
                                                            <h6>The Terms of the Transaction</h6>
                                                            <p>Thank you for your business. Please send your payment before due date.</p>
                                                        </div>
                                                        <div style="text-align: center; margin: 35px 0px;">

                                                            <!-- Payment Gateway Form Start-->
                                                            <?php
                                                            $date_now = date("Y-m-d"); // this format is string comparable
                                                            ?>
                                                            <form id="invoice-pay" action="order-payment.php" method="post" accept-charset="UTF-8">
                                                                <input type="hidden" name="order.id" value="<?php echo $inv["id"]; ?>"/>
                                                                <input type="hidden" name="order.amount" value="<?php echo $total; ?>"/>
                                                                <input type="hidden" name="order.currency" value="<?php echo $inv["currency"]; ?>"/>

                                                                <?php
                                                                if ($inv['status'] == 0) {
                                                                    ?>
                                                                    <div class="row">
                                                                        <div class="col-xs-12 formpading checkbox-section">  
                                                                            <label class="checkbox-container"><p>Click here to indicate that you have read and agree to the company <a href="<?php echo actual_link(); ?>terms-and-conditions/<?php echo $inv["terms_and_conditions"]; ?>/" target="_blank" class="text-primary">terms and conditions</a>.</p>
                                                                                <input type="checkbox" name="agree" id="agree">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <img src="images/payment-logo/payment-logos.jpg" alt=""/>
                                                                    <button type="submit" id="btnPay" name="btnPay" act="<?php echo $act; ?>" class="btn pay-btn invoice-btn-pay">PAY NOW</button>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </form>
                                                            <!-- Payment Gateway Form End-->                                                            
                                                        </div>
                                                    </div>

                                                    <?php
                                                } else {
                                                    echo 'Wrong try!';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> 
            </div>
            <!-- Footer -->
            <?php include './footer.php'; ?>
        </div><!-- wrapper-container -->

        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>


        <!-- Scripts -->
        <script src="js/libs/jquery-1.12.4.min.js"></script><!-- jQuery -->
        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/stellar.min.js"></script><!-- counter -->
        <script src="js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="js/libs/moment.min.js"></script><!-- moment -->
        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="js/theme-customs.js"></script><!-- Theme Custom -->
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/checked.js" type="text/javascript"></script>
        <script src="js/libs/sweetalert.min.js" type="text/javascript"></script>

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