<?php

/**
 * Description of Invoice
 *
 * @author U s E r ¨
 */
class Invoice {

    public function add($data) {

        $db = new Database();

        $query = "INSERT INTO `invoice` ("
                . "`date`,"
                . "`full_name`,"
                . "`email`,"
                . "`address`,"
                . "`city`,"
                . "`country`,"
                . "`contact`,"
                . "`goods_or_services`,"
                . "`fees_or_taxes`,"
                . "`currency`,"
                . "`total_amount`,"
                . "`due_date`,"
                . "`status`,"
                . "`payment_date`,"
                . "`refund_amount`,"
                . "`refund_date`,"
                . "`refund_reason`,"
                . "`reference`) VALUES("
                . "'" . mysql_real_escape_string($_POST['date']) . "', "
                . "'" . mysql_real_escape_string($_POST['fullName']) . "', "
                . "'" . mysql_real_escape_string($_POST['email']) . "', "
                . "'" . mysql_real_escape_string($_POST['address']) . "', "
                . "'" . mysql_real_escape_string($_POST['city']) . "', "
                . "'" . mysql_real_escape_string($_POST['country']) . "', "
                . "'" . mysql_real_escape_string($_POST['contactNumber']) . "', "
                . "'" . mysql_real_escape_string($_POST['goodsOrServices']) . "', "
                . "" . $_POST['feesOrTaxes'] . ", "
                . "'" . mysql_real_escape_string($_POST['currency']) . "', "
                . "" . $_POST['totalAmount'] . ", "
                . "'" . mysql_real_escape_string($_POST['dueDate']) . "', "
                . "'0', "
                . "'0000-00-00', "
                . "'0', "
                . "'0000-00-00', "
                . "'', "
                . "'')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function update($data) {

        $db = new Database();

        $query = "UPDATE `invoice` SET "
                . "`date` = '" . mysql_real_escape_string($_POST['date']) . "',"
                . "`full_name` = '" . mysql_real_escape_string($_POST['full_name']) . "',"
                . "`email`= '" . mysql_real_escape_string($_POST['email']) . "',"
                . "`address` = '" . mysql_real_escape_string($_POST['address']) . "',"
                . "`city` = '" . mysql_real_escape_string($_POST['city']) . "',"
                . "`country` = '" . mysql_real_escape_string($_POST['country']) . "',"
                . "`contact` = '" . mysql_real_escape_string($_POST['contactNumber']) . "',"
                . "`goods_or_services` = '" . mysql_real_escape_string($_POST['goodsOrServices']) . "',"
                . "`fees_or_taxes` = '" . mysql_real_escape_string($_POST['feesOrTaxes']) . "',"
                . "`total_amount` = '" . mysql_real_escape_string($_POST['totalAmount']) . "',"
                . "`due_date` = '" . mysql_real_escape_string($_POST['dueDate']) . "'"
                . "WHERE `id` = " . $_POST['id'];

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateStatus($id, $ref) {

        $db = new Database();
        $id = (int) $id;
        $date = date("Y-m-d");
        $query = "UPDATE `invoice` SET `payment_date` = '" . $date . "', `reference` = '" . mysql_real_escape_string($ref) . "', `status` = 1 WHERE `id` = " . $id;

        $result = $db->readQuery($query);

        return $result;
    }

    public function refund($data) {

        $db = new Database();

        $query = "UPDATE `invoice` SET "
                . "`refund_amount` = '" . mysql_real_escape_string($_POST['amount']) . "',"
                . "`refund_date` = '" . mysql_real_escape_string($_POST['date']) . "',"
                . "`refund_reason`= '" . mysql_real_escape_string($_POST['reason']) . "',"
                . "`status` = 2 "
                . "WHERE `id` = " . $_POST['id'];

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getAll() {

        $db = new Database();

        $query = "SELECT * FROM `invoice` ORDER BY `id` DESC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getPendingInvoices() {

        $db = new Database();

        $query = "SELECT * FROM `invoice` WHERE `due_date` > '" . date('Y-m-d') . "' AND `status` = '0' ORDER BY `id` ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getPaidInvoices() {

        $db = new Database();

        $query = "SELECT * FROM `invoice` WHERE `status` = '1' ORDER BY `id` ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getRefundInvoices() {

        $db = new Database();

        $query = "SELECT * FROM `invoice` WHERE `status` = '2' ORDER BY `id` ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getExpiredInvoices() {

        $db = new Database();

        $query = "SELECT * FROM `invoice` WHERE `due_date` < '" . date('Y-m-d') . "' AND `status` = '0' ORDER BY `id` ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getById($id) {

        $db = new Database();

        $query = "SELECT * FROM `invoice` WHERE `id` = '" . $id . "' LIMIT 1";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function delete($id) {

        $db = new Database();

        $query = "DELETE FROM `invoice` WHERE `id` = '" . $id . "' LIMIT 1";

        if ($db->readQuery($query)) {
            $row = TRUE;
        } else {
            $row = FALSE;
        }

        return $row;
    }

    public function sendMail($id) {

        $invoices = new Invoice();

        $inv = $invoices->getById($id);

        if ($inv) {

            $site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
            $subject = 'Nature Trails Hotel | Web Invoice | #' . $inv["id"];

            $from = 'info@naturetrailsunawatuna.com';
            $email = $inv['email'];
            $amount = $inv['total_amount'];
            $repaly = 'info@naturetrailsunawatuna.com';

            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $repaly . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

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
                            <ul>
                                <li><span class="bb">Web Invoice ID : </span>#' . $inv["id"] . '<span></span></li>
                                <li><span class="bb">Date of Web Invoice : </span>' . $inv["date"] . '<span></span></li>
                                <li><span class="bb">Due Date : </span>' . $inv["due_date"] . '<span></span></li>
                                <li><span class="bb">Customer Full Name : </span><span>' . $inv["full_name"] . '</span></li>
                                <li><span class="bb">Customer Email: </span><span>' . $inv["email"] . '</span></li>
                                <li><span class="bb">Customer Address: </span><span>' . $inv["address"] . '</span></li>
                                <li><span class="bb">Customer City: </span><span>' . $inv["city"] . '</span></li>
                                <li><span class="bb">Customer Country: </span><span>' . $inv["country"] . '</span></li>
                                <li><span class="bb">Customer Contact Number: </span><span>' . $inv["contact"] . '</span></li>
                            </ul>
                            <table width="80%" style="margin: 0px auto; font-size: 15px; font-family: sans-serif; padding: 0;">
                                <tr>
                                    <th width="100%"  colspan="2">Goods or Services</th> 
                                </tr>
                                <tr>
                                    <td colspan="2">' . $inv["goods_or_services"] . '</td> 
                                </tr>
                                <tr>
                                    <td class="bdr-top"><b>Total Amount</b></td>
                                    <td class="bdr bdr-top right"><b> ' . $inv["currency"] . ' ' . $inv["total_amount"] . '</b></td>
                                </tr>
                            </table>
                            <div style="margin-top: 20px;">
                                <h6>The Terms of the Transaction</h6>
                                <p>Thank you for your business. Please send your payment within 7 days of receiving this invoice.</p>
                            </div>
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://' . $site . '/invoice-pay.php?id=' . $inv["id"] . '" style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>
                        </body>
                    </html>';
            if (mail($email, $subject, $html, $headers)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function sendMailToHotel($id) {

        $invoices = new Invoice();

        $inv = $invoices->getById($id);

        if ($inv) {

            $site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
            $subject = 'Web Invoice Copy | #' . $inv["id"];

            $from = 'info@naturetrailsunawatuna.com';
            $repaly = $inv['email'];
            $amount = $inv['total_amount'];

            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $repaly . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

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
                            <ul>
                                <li><span class="bb">Web Invoice ID : </span>#' . $inv["id"] . '<span></span></li>
                                <li><span class="bb">Date of Web Invoice : </span>' . $inv["date"] . '<span></span></li>
                                <li><span class="bb">Due Date : </span>' . $inv["due_date"] . '<span></span></li>
                                <li><span class="bb">Customer Full Name : </span><span>' . $inv["full_name"] . '</span></li>
                                <li><span class="bb">Customer Email: </span><span>' . $inv["email"] . '</span></li>
                                <li><span class="bb">Customer Address: </span><span>' . $inv["address"] . '</span></li>
                                <li><span class="bb">Customer City: </span><span>' . $inv["city"] . '</span></li>
                                <li><span class="bb">Customer Country: </span><span>' . $inv["country"] . '</span></li>
                                <li><span class="bb">Customer Contact Number: </span><span>' . $inv["contact"] . '</span></li>
                            </ul>
                            <table width="80%" style="margin: 0px auto; font-size: 15px; font-family: sans-serif; padding: 0;">
                                <tr>
                                    <th width="100%"  colspan="2">Goods or Services</th> 
                                </tr>
                                <tr>
                                    <td colspan="2">' . $inv["goods_or_services"] . '</td> 
                                </tr>
                                <tr>
                                    <td class="bdr-top"><b>Total Amount</b></td>
                                    <td class="bdr bdr-top right"><b> ' . $inv["currency"] . ' ' . $inv["total_amount"] . '</b></td>
                                </tr>
                            </table>
                            <div style="margin-top: 20px;">
                                <h6>The Terms of the Transaction</h6>
                                <p>Thank you for your business. Please send your payment within 7 days of receiving this invoice.</p>
                            </div>
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://' . $site . '/invoice-pay.php?id=' . $inv["id"] . '" style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>
                        </body>
                    </html>';
            $email1 = 'info@naturetrailsunawatuna.com';
            if (mail($email1, $subject, $html, $headers)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function sendConfirmationMail($status, $id, $recieptno) {

        $invoices = new Invoice();

        $inv = $invoices->getById($id);

        if ($inv) {

            $site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
            $subject = 'Payment Status | Web Invoice | #' . $id;

            $from = 'info@naturetrailsunawatuna.com';
            $email = $inv['email'];
            $amount = $inv['total_amount'];

            $repaly = 'info@naturetrailsunawatuna.com';

            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $repaly . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if ($status === 'error') {
                $repay = '<div>
                                <h3>Your transaction was NOT successful. Please  follow the payment process again. </h3>
                            </div>
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://' . $site . '/invoice-pay.php?id=' . $id . '" style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>';
            } else {
                $repay = '';
            }
            if ($status === 'success') {
                $msg = '<div style="font-size:16px; font-weight:600; margin-left:10%;">
                                Thank you for making an online payment with Nature Trails Boutique Hotel.
                          </div>';
            } else {
                $msg = '';
            }

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
                                <li><span class="bb">Status : </span>' . $status . '<span></span></li>
                                <li><span class="bb">Web Invoice ID : </span>#' . $id . '<span></span></li>
                                <li><span class="bb">Customer : </span><span>' . $inv["full_name"] . '</span></li>
                                <li><span class="bb">Payment Reference No : </span>' . $recieptno . '<span></span></li>
                                <li><span class="bb">Date of Payment : </span>' . $inv["date"] . '<span></span></li>
                                <li><span class="bb">Amount : </span> ' . $inv["currency"] . ' ' . $inv["total_amount"] . '<span></span></li>
                            </ul>
                            ' . $repay . '
                            
                        </body>
                    </html>';

            if (mail($email, $subject, $html, $headers)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function sendConfirmationMailToHotel($status, $id, $recieptno) {

        $invoices = new Invoice();

        $inv = $invoices->getById($id);

        if ($inv) {

            $site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
            $subject = 'Payment Status';

            $from = 'info@naturetrailsunawatuna.com';
            $repaly = $inv['email'];
            $amount = $inv['total_amount'];


            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $repaly . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if ($status === 'error') {
                $repay = '<div>
                                <h3>Your transaction was NOT successful. Please  follow the payment process again. </h3>
                            </div>
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://' . $site . '/invoice-pay.php?id=' . $id . '" style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>';
            } else {
                $repay = '';
            }

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
                            <ul>
                                <li><span class="bb">Status : </span>' . $status . '<span></span></li>
                                <li><span class="bb">Web Invoice ID : </span>#' . $id . '<span></span></li>
                                <li><span class="bb">Customer : </span><span>' . $inv["full_name"] . '</span></li>
                                <li><span class="bb">Payment Reference No : </span>' . $recieptno . '<span></span></li>
                                <li><span class="bb">Date of Payment : </span>' . $inv["date"] . '<span></span></li>
                                <li><span class="bb">Amount : </span>' . $inv["currency"] . ' ' . $inv["total_amount"] . '<span></span></li>
                            </ul>
                            ' . $repay . '
                            
                        </body>
                    </html>';

            $email1 = 'info@naturetrailsunawatuna.com';
            if (mail($email1, $subject, $html, $headers)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function invoicesCountByDate($date) {

        $query = "SELECT count(1) FROM `invoice` WHERE (`payment_date` = '" . $date . "') AND (`status` = 1) ";
        $db = new Database();
        $result = $db->readQuery($query);

        $row = mysql_fetch_array($result);

        $total = $row[0];

        return $total;
    }

}
