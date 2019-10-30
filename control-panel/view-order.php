<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
$status = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $order = Order::getById($id);
}
if (isset($_GET["status"])) {
    if ($_GET["status"] == 1) {
        $status = 'Paid';
    } elseif ($_GET["status"] == 2) {
        $status = 'Refund';
    } elseif ($_GET["status"] == 0) {
        $status = 'Unsuccessfull';
    }
}
$total = 0;
$total = (float) $order['total_amount'] + (float) $order['fees_or_taxes'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" >
        <title>View Order || WEB SITE CONTROL PANEL</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" >
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" >
        <!-- Bootstrap Core Css -->
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet" >
        <!-- Waves Effect Css -->
        <link href="plugins/node-waves/waves.css" rel="stylesheet" >
        <!-- Animation Css -->
        <link href="plugins/animate-css/animate.css" rel="stylesheet">
        <!-- JQuery DataTable Css -->
        <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet"  >
        <!-- Custom Css -->
        <link href="css/style.css" rel="stylesheet" >
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="css/themes/all-themes.css" rel="stylesheet"  >
        <link href="plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="theme-red">
        <?php
        include './navigation-and-header.php';
        ?>
        <section class="content">
            <div class="container-fluid">
                <?php
                $vali = new Validator();

                $vali->show_message();
                ?>
                <!-- Manage tour -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    View Order - (#<?php echo $id; ?>)
                                </h2>
                            </div>
                            <div class="body tablebody">
                                <!-- <div class="table-responsive">-->
                                <table class="table table-bordered table-striped table-hover viewtable">
                                    <tr>
                                        <th width="260">Date </th>
                                        <td><?php echo $order['date']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Booking ID</th>
                                        <td><?php echo $order['booking_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Full Name</th>
                                        <td><?php echo $order['full_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $order['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td><?php echo $order['address']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td><?php echo $order['city'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td><?php echo $order['country'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Contact Number</th>
                                        <td><?php echo $order['contact']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td><?php echo $order['description']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Invoice Amount</th>
                                        <td><?php echo $order['currency'] . ' ' . $order['total_amount']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Other Fees or Taxes</th>
                                        <td><?php echo $order['currency'] . ' ' . $order['fees_or_taxes']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Total Amount</th>
                                        <td><?php echo $order['currency'] . ' ' . number_format($total,2) ; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><?php echo $status; ?></td>
                                    </tr>
                                    <?php
                                    if ($order['status'] == 1) {
                                        ?>
                                        <tr>
                                            <th>Reference No.</th>
                                            <td><?php echo $order['reference']; ?></td>
                                        </tr>
                                        <?php
                                    } elseif ($order['status'] == 2) {
                                        ?>
                                        <tr>
                                            <th>Reference No.</th>
                                            <td><?php echo $order['reference']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Refund Amount</th>
                                            <td><?php echo $order['currency'] . ' ' . $order['refund_amount']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Refund Date</th>
                                            <td><?php echo $order['refund_date']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Refund Reason</th>
                                            <td><?php echo $order['refund_reason']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                                <a href="manage-orders.php?status=<?php echo $_GET["status"]; ?>"><span class="btn btn-info">Back</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Manage District -->
        </section>
        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="plugins/bootstrap/js/bootstrap.js"></script>
        <!-- Select Plugin Js -->
        <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <!-- Slimscroll Plugin Js -->
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- Waves Effect Plugin Js -->
        <script src="plugins/node-waves/waves.js"></script>
        <!-- Jquery DataTable Plugin Js -->
        <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
        <script src="plugins/sweetalert/sweetalert.min.js"></script>
        <!-- Custom Js -->
        <script src="js/admin.js"></script>
        <script src="js/pages/tables/jquery-datatable.js"></script>
        <!-- Demo Js -->
        <script src="js/demo.js"></script>
        <script src="delete/js/user.js" type="text/javascript"></script>
    </body>
</html>

