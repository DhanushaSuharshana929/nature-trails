<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$id;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$invoices = new Order();
$inv = $invoices->getById($id);

$total = 0;
$total = (float) $inv['total_amount'] + (float) $inv['fees_or_taxes'];
$site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
//$site = str_replace("www.", "", $_SERVER['HTTP_HOST']) . '/nature-trails/';

if ($inv['status'] === '0') {
    $stat = 'Not Successful.';
} elseif ($inv['status'] === '1') {
    $stat = 'Successful';
} elseif ($inv['status'] === '2') {
    $stat = 'Refund';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Web Invoice Copy | #<?php echo $inv["id"]; ?></title>
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
            ul {
                font-size: 18px;
                list-style-type: square;
                margin: 0px 20px 30px 10%;
            }
            li {
                padding: 5px;
            }
            img {
                width: 120px;
                margin: 0px auto;
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
            @media (max-width: 450px) {
                ul { font-size: 14px; }
                td { font-size: 12px; }
            }
            body {
                margin-left: 25%;
                margin-right: 25%;
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
            <img src="http://<?php echo $site; ?>/images/logo3.png" alt="Nature Trails" style="width:250px;"/><br/>
            <span style="font-size: 20px; font-weight:900;">Pro Forma Invoice</span><br/>
            <span style="font-size: 15px;"><a href="" style="text-decoration:none;color: #000;">144B, Matara Road, Unawatuna</a></span><br/>
            <span style="font-size: 15px;">Email: info@naturetrailsunawatuna&#173;.com</span><br/>
            <span style="font-size: 15px;">Phone: (+94) 77 711 8616</span>
        </div>
        <ul>
            <li><span class="bb">Status : </span><span><?php echo $stat; ?></span></li>
            <li><span class="bb">Booking.com Invoice ID : </span><span>#<?php echo $inv["id"]; ?></span></li>
            <li><span class="bb">Customer : </span><span><?php echo $inv["full_name"]; ?></span></li>
            <li><span class="bb">Payment Reference No : </span><span><?php echo $inv["reference"]; ?></span></li>
            <li><span class="bb">Date of Payment : </span><span><?php echo $inv["date"]; ?></span></li>
            <li><span class="bb">Total Amount : </span><span><?php echo $inv["currency"] . ' ' . number_format($total, 2); ?></span></li>
        </ul> 

        <script src="plugins/jquery/jquery.min.js"></script>
        <script>

            $(document).ready(function () {
                myFunction();
            });

            function myFunction() {
                window.print();
            }
        </script>
    </body>
</html>