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

/* Payment Code */
$data = DefaultData::getDetailsByCurrency();
foreach ($data as $details) {
    foreach ($details as $currency) {
        if ($currency['currency'] === $inv["currency"]) {
            $apiPassword = $currency['API_password'];
            $apiUsername = $currency['API_username'];
            $merchant = $currency['merchant_ID'];
        }
    }
}

if (!isset($_SESSION)) {
    session_start();
}

$_SESSION['order_id'] = $inv["id"];

$curlData = array(
    'apiOperation' => 'CREATE_CHECKOUT_SESSION',
    'apiPassword' => $apiPassword,
    'interaction.operation' => 'PURCHASE',
    'interaction.returnUrl' => 'https://www.naturetrailsunawatuna.com/order_response.php',
    'interaction.cancelUrl' => 'https://www.naturetrailsunawatuna.com/booking-invoice-pay.php?id=' . $inv["id"] . '&error',
    'apiUsername' => $apiUsername,
    'merchant' => $merchant,
    'order.id' => 'NTBI' . $inv["id"],
    'order.amount' => $total,
    'order.currency' => $inv["currency"]
);

$curlDataSt = http_build_query($curlData); //echo $curlDataSt; exit;

$options = array(
    CURLOPT_URL => "https://cbcmpgs.gateway.mastercard.com/api/nvp/version/52",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $curlDataSt,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false
);

$curl = curl_init();
curl_setopt_array($curl, $options);
$response = curl_exec($curl);
curl_close($curl);
$items = explode("&", $response);
foreach ($items as $key => $item) {
    if ($key == '2') {
        $a = explode("=", $item);
        $id1 = $a[1];
    }
}
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Pro Forma Invoice Invoice | Unawatuna Hotels | Hotels in Unawatuna | Nature Trails Boutique Hotel</title>
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
        <input type="hidden" value="<?php echo $id1; ?>" id="session_id" />
        <input type="hidden" value="<?php echo $inv["id"]; ?>" id="order_id" />
        <script src=" https://cbcmpgs.gateway.mastercard.com/checkout/version/52/checkout.js"
                data-error="errorCallback"
                data-cancel="cancelCallback">
        </script>
        <script src="js/libs/jquery-1.12.4.min.js"></script><!-- jQuery -->
        <script src="js/libs/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">

                    function errorCallback(error) {
                        console.log(JSON.stringify(error));
                    }
                    function cancelCallback() {
                        console.log('Payment cancelled');
                    }
                    var session_id = $('#session_id').val();
                    var order_id = $('#order_id').val();
                    Checkout.configure({

                        session: {
                            id: session_id
                        },
                        order: {
                            description: 'Booking.com Invoice - #' + order_id
                        },
                        interaction: {
                            merchant: {
                                name: 'Nature Trails Boutique Hotel',
                                address: {
                                    line1: '144B',
                                    line2: 'Matara Road',
                                    line3: 'Unawatuna'
                                }
                            }
                        }

                    });
        </script>
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
                                                                <td class="bdr-top right"><b>Invoice Amount (<?php echo $inv["currency"]; ?>):</b></td>
                                                                <td class="bdr bdr-top right"><b><?php echo number_format($inv["total_amount"], 2); ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bdr-top right"><b>Fees or Taxes (<?php echo $inv["currency"]; ?>):</b></td>
                                                                <td class="bdr bdr-top right"><b><?php echo number_format($inv["fees_or_taxes"], 2); ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bdr-top right total-amount"><b>Total Amount (<?php echo $inv["currency"]; ?>):</b></td>
                                                                <td class="bdr bdr-top right total-amount"><b><?php echo number_format($total, 2); ?></b></td>
                                                            </tr>
                                                        </table>
                                                        <!--                                                        <ul>
                                                                                                                    <li><span class="bb">Fees or Taxes: </span><span><?php echo $inv["currency"] . ' ' . $inv["fees_or_taxes"]; ?></span></li>
                                                                                                                    <li><span class="bb">Total Amount: </span><span><?php echo $inv["currency"] . ' ' . number_format($total, 2); ?></span></li>
                                                                                                                </ul>-->
                                                        <div class="terms-of-the-condition">
                                                            <h6>The Terms of the Transaction</h6>
                                                            <p>Thank you for your business. Please send your payment before due date.</p>
                                                        </div>
                                                        <div style="text-align: center; margin: 35px 0px;">

                                                            <!-- Payment Gateway Form Start-->
                                                            <?php
                                                            $date_now = date("Y-m-d"); // this format is string comparable
                                                            ?>
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
                                                                <button type="submit" id="btnPay" name="btnPay" act="<?php echo $act; ?>" class="btn pay-btn invoice-btn-pay" onclick="Checkout.showPaymentPage();">PAY NOW</button>
                                                                <?php
                                                            }
                                                            ?>
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