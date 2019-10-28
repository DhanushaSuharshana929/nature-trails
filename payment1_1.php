<?php
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['order_id'] = $_POST["order_id"];
$curlData = array(
    'apiOperation' => 'CREATE_CHECKOUT_SESSION',
    'apiPassword' => '09c456deceaf384a641b89600b74b07a',
    'interaction.operation' => 'PURCHASE',
    'interaction.returnUrl' => 'https://www.naturetrailsunawatuna.com/invoice_response.php',
    'interaction.cancelUrl' => 'https://www.naturetrailsunawatuna.com/?error',
    'apiUsername' => 'merchant.TESTNATURETRALKR',
    'merchant' => 'TESTNATURETRALKR',
    'order.id' => $_POST["order_id"],
    'order.amount' => $_POST["order_amount"],
    'order.currency' => 'LKR'
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
        $id = $a[1];
    }
}
include './class/include.php';
$BANNER = new Banner(1);
?>
<html>
    <head>
        <link href="css/libs/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <input type="hidden" value="<?php echo $id; ?>" id="session_id" />
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
                    Checkout.configure({

                        session: {
                            id: session_id
                        },
                        order: {
                            description: 'Ordered goods'
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
                                    <div class="col-md-12 text-center">
                                        <input type="button" value="Pay with Lightbox" class="btn btn-primary btn-sm" onclick="Checkout.showLightbox();" />
                                        <input type="button" value="Pay with Payment Page"  class="btn btn-primary btn-sm" onclick="Checkout.showPaymentPage();" />
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

