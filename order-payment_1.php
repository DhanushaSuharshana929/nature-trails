<?php
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['order_id'] = $_POST["order_id"];
$curlData = array(
    'apiOperation' => 'CREATE_CHECKOUT_SESSION',
    'apiPassword' => '09c456deceaf384a641b89600b74b07a',
    'interaction.operation' => 'PURCHASE',
    'interaction.returnUrl' => 'https://www.naturetrailsunawatuna.com/order_response.php',
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
?>
<html>
    <head>
    </head>
    <body>

        <input type="hidden" value="<?php echo $id; ?>" id="session_id" />
        <script src=" https://cbcmpgs.gateway.mastercard.com/checkout/version/52/checkout.js"
                data-error="errorCallback"
                data-cancel="cancelCallback">
        </script>
        <script src="js/libs/jquery-1.12.4.min.js"></script><!-- jQuery -->
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
        ...
        <input type="button" value="Pay with Lightbox" onclick="Checkout.showLightbox();" />
        <input type="button" value="Pay with Payment Page" onclick="Checkout.showPaymentPage();" />
        ...
    </body>
</html>

