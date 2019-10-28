<!DOCTYPE html>
<?php
include './class/include.php';
$BANNER = new Banner(1);
if ($_GET['id']) {
    $ref = '';
    if (isset($_GET['ref'])) {
        $ref = 'Reference: #' . $_GET['ref'];
    }
    $id = (int) $_GET['id'];
    $invoices = new Invoice();
    $inv = $invoices->getById($id);

    if ($inv['status'] == 1) {
        $status = 'Paid';
    } else {
        if ($inv['due_date'] < date('Y-m-d')) {
            $status = 'Expired';
        } else {
            $status = 'Unpaid';
        }
    }
}
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Web Invoice | Nature Trails Boutique Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Welcome to Nature Trails Boutique Hotel. We are located on the other side of the Rumassala mountain by which the bay-like Unawatuna Beach is surrounded. ">
        <meta name="keywords" content="unawatuna hotels, best hotel in unawatuna, unawatuna resorts, hotels in unawatuna">
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="css/libs/revolution/settings.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Style -->
        <style type="text/css">
            table {
                border: 1px solid #d0d0d0;
            }
            th {
                border-bottom: 1px solid #d0d0d0;
                padding: 15px 10px 10px 25px;
                text-align: left;
                margin: 0px;
            }
            td {
                padding: 10px 10px 5px 10px;
                text-align: left;
                margin: 0px;
            }
            .contact-form ul {
                font-size: 18px;
                list-style-type: square;
                margin: 0px 20px 30px 10%;
            }
            .contact-form ul li {
                padding: 5px;
            }
            .bdr {
                border-left: 1px solid #d0d0d0;
            }
            .bdr-top {
                border-top: 1px solid #d0d0d0;
            }
            .bb {
                font-weight: bold;
            }
            .right {
                text-align: right;
            }
            .terms-of-the-condition {
                margin-top: 20px;
            }
            @media (max-width: 450px) {
                ul { font-size: 14px; }
                td { font-size: 12px; }
            }
        </style>
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
                                        <div class="contact-form">
                                            <div class="row">

                                                <?php
                                                if ($_GET['id'] && $inv) {

//                                                    if ($_GET['pay'] == 'error') {
                                                    ?>
                                                                <!--<div class="alert alert-danger"><b>Sorry! Your transaction was not successful. <?php echo $ref; ?></b></div>-->
                                                    <?php
//                                                    } elseif ($_GET['pay'] == 'success') {
                                                    ?>
                                                                <!--<div class="alert alert-success"><b>Your payment has been successfully processed. Thank you!.  <?php echo $ref; ?></b></div>-->
                                                    <?php
//                                                    } elseif ($inv["status"] == 1) {
                                                    ?>
                                                    <!--<div class="alert alert-warning"><b>We have already received the payment for this invoice .</b></div>-->
                                                    <?php
//                                                    }
                                                    ?>
                                                    <div class="col-xs-12" style="background-color: #ffffff; width: 100%;">
                                                        <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                                            <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                                            <img src="images/logo3.png" alt="Nature Trails"/><br/>
                                                            <span>144B, Matara Road, Unawatuna.</span><br/>
                                                            <span>Email: info@naturetrailsunawatuna.com</span><br/>
                                                            <span>Phone: (+94) 77 711 8616</span>
                                                        </div>
                                                        <ul>
                                                            <li><span class="bb">Web Invoice Status : </span><?php echo $status; ?><span></span></li>
                                                            <li><span class="bb">Web Invoice ID : </span>#2500<?php echo $inv["id"]; ?><span></span></li>
                                                            <li><span class="bb">Date of Web Invoice : </span><?php echo $inv["date"]; ?><span></span></li>
                                                            <li><span class="bb">Due Date : </span><?php echo $inv["due_date"]; ?><span></span></li>
                                                            <li><span class="bb">Customer Name : </span><span><?php echo $inv["full_name"]; ?></span></li>
                                                            <li><span class="bb">Customer Email: </span><span><?php echo $inv["email"]; ?></span></li>
                                                            <li><span class="bb">Customer Address: </span><span><?php echo $inv["address"]; ?></span></li>
                                                            <li><span class="bb">Customer City: </span><span><?php echo $inv["city"]; ?></span></li>
                                                            <li><span class="bb">Customer Country: </span><span><?php echo $inv["country"]; ?></span></li>
                                                            <li><span class="bb">Customer Contact Number: </span><span><?php echo $inv["contact"]; ?></span></li>
                                                            <li><span class="bb">Fees or Taxes: </span><span><?php echo $inv["fees_or_taxes"]; ?></span></li>
                                                        </ul>
                                                        <table width="80%" style="margin: 0px auto; font-size: 15px; font-family: sans-serif; padding: 0;">
                                                            <tr>
                                                                <th width="100%" colspan="2">Goods or Services</th> 
                                                            </tr>
                                                            <tr>
                                                                <td  colspan="2"><?php echo $inv["goods_or_services"]; ?></td>
                                                            </tr>
    <!--                                                            <tr style="height: 70px;"> 
                                                                <td class="bdr" colspan="2"></td>
                                                            </tr>-->
                                                            <tr>
                                                                <td class="bdr-top right"><b>Requested Advance:</b></td>
                                                                <td class="bdr bdr-top right"><b>$ <?php echo $inv["total_amount"]; ?></b></td>
                                                            </tr>
                                                        </table>
                                                        <div class="terms-of-the-condition">
                                                            <h6>The Terms of the Transaction</h6>
                                                            <p>Thank you for your business. Please send your payment within 7 days of receiving this invoice.</p>
                                                        </div>
                                                        <div style="text-align: center; margin: 35px 0px;">

                                                            <!-- Payment Gateway Form Start-->
                                                            <?php
                                                            $payAmount = str_replace('.', '', $inv["total_amount"]);

                                                            $date_now = date("Y-m-d"); // this format is string comparable

                                                            if ($date_now <= $inv["due_date"]) {
                                                                $act = 1;
                                                            } else {
                                                                $act = 0;
                                                            }
                                                            ?>
                                                            <form id="invoice-pay" action="payments-old/PHP_VPC_3Party_Order_DO.php" method="post" accept-charset="UTF-8">
                                                                <input type="hidden" name="Title" value = "PHP VPC 3 Party Transacion">
                                                                <input type="hidden" name="virtualPaymentClientURL" size="65" value="https://migs.mastercard.com.au/vpcpay" maxlength="250"/>
                                                                <input type="hidden" name="vpc_Version" value="1" size="20" maxlength="8"/>
                                                                <input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16"/>
                                                                <input type="hidden" name="vpc_MerchTxnRef" value="<?php echo str_replace(':', 'a', str_replace(' ', '', date("Y-m-d H:i:s"))); ?>" size="20" maxlength="40"/>
                                                                <input type="hidden" name="vpc_Merchant" value="TESTNATURETRAUSD" size="20" maxlength="16"/>
                                                                <!--<input type="hidden" name="vpc_AccessCode" value="" size="20" maxlength="8"/>-->
                                                                <input type="hidden" name="vpc_OrderInfo" value="<?php echo $inv["id"]; ?>" size="20" maxlength="34"/>
                                                                <input type="hidden" name="vpc_Amount" value="<?php echo $payAmount; ?>" maxlength="10"/>
                                                                <input type="hidden" name="vpc_ReturnURL" size="65" value="http://<?php echo str_replace("www.", "", $_SERVER['HTTP_HOST']); ?>/invoice_response.php" maxlength="250"/>
                                                                <input type="hidden" name="vpc_Locale" value="en_US" maxlength="10"/>
                                                                <input type="hidden" name="vpc_Currency" value="USD" maxlength="10"/>


                                                                <?php
                                                                if ($inv['status'] == 0) {
                                                                    ?>
                                                                    <button type="submit" id="btnPay" name="btnPay" act="<?php echo $act; ?>" style="font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px; padding: 10px 20px; font-size: 15px;">PAY NOW</button>
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