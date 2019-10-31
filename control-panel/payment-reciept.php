<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$invoices = new Invoice();

$inv = $invoices->getById(1);

if ($inv) {
    $total = 0;
    $total = (float) $inv['total_amount'] + (float) $inv['fees_or_taxes'];

    $site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
    $subject = 'Web Invoice Copy | #' . $inv["id"];

    $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . $subject . '</title>
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
                            </style>
                        </head>
                        <body>
                            <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                <img src="http://' . $site . '/images/logo3.png" alt="Nature Trails" style="width:250px;"/><br/>
                                <span style="font-size: 20px; font-weight:900;">Web Invoice</span><br/>
                                <span style="font-size: 15px;"><a href="" style="text-decoration:none;color: #000;">144B, Matara Road, Unawatuna</a></span><br/>
                                <span style="font-size: 15px;">Email: info@naturetrailsunawatuna&#173;.com</span><br/>
                                <span style="font-size: 15px;">Phone: (+94) 77 711 8616</span>
                            </div>
                            ' . $msg . '
                            <ul>
                                <li><span class="bb">Status : </span>' . $stat . '<span></span></li>
                                <li><span class="bb">Web Invoice ID : </span>#' . $id . '<span></span></li>
                                <li><span class="bb">Customer : </span><span>' . $inv["full_name"] . '</span></li>
                                <li><span class="bb">Payment Reference No : </span>' . $recieptno . '<span></span></li>
                                <li><span class="bb">Date of Payment : </span>' . $inv["date"] . '<span></span></li>
                                <li><span class="bb">Total Amount : </span> ' . $inv["currency"] . ' ' . number_format($total, 2) . '<span></span></li>
                            </ul>
                            ' . $repay . '
                            
                        </body>
                    </html>';
    echo $html;
} else {
    return FALSE;
}
?>
