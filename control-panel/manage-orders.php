<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$status = '';
if (isset($_GET["status"])) {
    if ($_GET["status"] == 0) {
        $status = 'Unsuccessfull';
    } elseif ($_GET["status"] == 1) {
        $status = 'Paid';
    } elseif ($_GET["status"] == 2) {
        $status = 'Refund';
    }
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Manage <?php echo $status; ?> Orders</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
        <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="theme-red">
        <?php
        include './navigation-and-header.php';
        ?>
        <section class="content">
            <div class="container-fluid"> 
                <!-- Manage Brand -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Manage <?php echo $status; ?> Orders
                                </h2>
                                <ul class="header-dropdown">
                                    <li>
                                        <a href="create-invoice.php">
                                            <i class="material-icons">add</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <!--                                <div class="table-responsive">-->
                                <div>
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Date</th>                               
                                                <th>Booking ID</th>                               
                                                <th>Customer</th>                               
                                                <th>Email</th>                               
                                                <th>Amount</th>                             
                                                <th>Status</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Date</th>  
                                                <th>Booking ID</th>        
                                                <th>Customer</th>                               
                                                <th>Email</th>                               
                                                <th>Amount</th>                              
                                                <th>Status</th>
                                                <th>Option</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php
                                            if ($_GET["status"] == 1) {
                                                $ORDERS = Order::getPaidOrders();
                                            } elseif ($_GET["status"] == 2) {
                                                $ORDERS = Order::getRefundOrders();
                                            } elseif ($_GET["status"] == 0) {
                                                $ORDERS = Order::getUnsuccessfulOrders();
                                            }
                                            foreach ($ORDERS as $key => $order) {
                                                ?>
                                                <tr id="row_<?php echo $order['id']; ?>">
                                                    <td><?php echo $order['id']; ?></td> 
                                                    <td><?php echo $order['date']; ?></td> 
                                                    <td><?php echo $order['booking_id']; ?></td> 
                                                    <td><?php echo $order['full_name']; ?></td> 
                                                    <td><?php echo $order['email']; ?></td> 
                                                    <td><?php echo $order['total_amount']; ?></td> 
                                                    <td><?php echo $status; ?></td> 


                                                    <td> 
                                                        <a href="view-order.php?id=<?php echo $order['id']; ?>&status=<?php echo $_GET["status"]; ?>" class="op-link btn btn-sm btn-default"><i class="glyphicon glyphicon-eye-open"></i></a>

                                                        <?php
                                                        if ($order['status'] == 1) {
                                                            ?>
                                                            | <a href="#" class="resend-payment-receipt btn btn-sm btn-warning" data-id="<?php echo $order['id']; ?>" status="<?php echo $order['status']; ?>" receipt_no="<?php echo $order['reference']; ?>"title="Resend Payment Receipt">
                                                                <i class="waves-effect glyphicon glyphicon-send" data-type="cancel"></i>
                                                            </a> |   
                                                            <a href="#" class="mark-as-refund btn btn-sm btn-danger" inv-id="<?php echo $order['id']; ?>" title="Mark as Refund">
                                                                <i class="waves-effect glyphicon glyphicon-forward" data-type="cancel"></i>
                                                            </a>
                                                            <?php
                                                        } elseif ($order['status'] == 0) {
                                                            ?>
                                                            | <a href="#" class="delete-order btn btn-sm btn-danger" data-id="<?php echo $order['id']; ?>"  title="Delete Invoice">
                                                                <i class="waves-effect glyphicon glyphicon-trash" data-type="cancel"></i>
                                                            </a>
                                                            <?php
                                                        } 
                                                        ?>

                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" style="padding: 20px 35px;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><b>Order Refund Confirmation</b></h4>
                            </div>
                            <div class="modal-body">
                                <p>Amount ($):</p> <input class="form-control" type="text" id="ref-amount" name="ref-amount" value=""/>
                                <p>Reason:</p> <input class="form-control" type="text" id="ref-reason" name="ref-reason" value=""/>
                                <p>Date:</p> <input class="form-control" type="text" id="ref-date" name="ref-date" value="<?php echo date("Y-m-d"); ?>"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" id="do-refund" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Manage brand -->

            </div>
        </section>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script>
        <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/pages/tables/jquery-datatable.js"></script>
        <script src="js/demo.js"></script>
        <script src="plugins/sweetalert/sweetalert.min.js"></script>
        <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>
        <script src="js/pages/ui/dialogs.js"></script>
        <script src="js/demo.js"></script>
        <script src="delete/js/order.js" type="text/javascript"></script>
        <script src="js/booking-invoice.js" type="text/javascript"></script>
        <script>
            $("#ref-date").datepicker({
                dateFormat: "yy-mm-dd"
            });
        </script>
    </body>

</html> 