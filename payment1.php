<html>
    <head>
        <script src="https://test-gateway.mastercard.com/checkout/version/52/checkout.js"
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

            Checkout.configure({
                
            session: { 
                      id: $id
                }

            });
        </script>
    </head>
    <body>
        ...
        <input type="button" value="Pay with Lightbox" onclick="Checkout.showLightbox();" />
        <input type="button" value="Pay with Payment Page" onclick="Checkout.showPaymentPage();" />
        ...
    </body>
</html>

