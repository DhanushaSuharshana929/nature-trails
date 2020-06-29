<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
$status = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $BOOKINGS = new Booking($id);
    $ROOM = new Room($BOOKINGS->room);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" >
        <title>View Booking || WEB SITE CONTROL PANEL</title>
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
                <!-- Manage tour -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    View  Booking - ( <?php  echo $ROOM->title   ?> )
                                </h2>
                            </div>
                            <div class="body tablebody">
                                <!-- <div class="table-responsive">-->
                                <table class="table table-bordered table-striped table-hover viewtable">
                                    <tr>
                                        <th width="260">Room Name </th>
                                        <td><?php  echo $ROOM->title   ?></td>
                                    </tr>
                                    <tr>
                                        <th width="260">Name </th>
                                        <td><?php echo $BOOKINGS->name ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $BOOKINGS->email ?></td>
                                    </tr>
                                    <tr>
                                        <th>Contact Number</th>
                                        <td><?php echo $BOOKINGS->contact_number ?></td>
                                    </tr>


                                    <tr>
                                        <th>Check in Date</th>
                                        <td><?php echo $BOOKINGS->check_in ?></td>
                                    </tr>
                                    <tr>
                                        <th>Check out Date</th>
                                        <td><?php echo $BOOKINGS->check_out ?></td>
                                    </tr>

                                    <tr>
                                        <th>Adults</th>
                                        <td><?php echo $BOOKINGS->adults ?></td>
                                    </tr>
                                    <tr>
                                        <th>Children</th>
                                        <td><?php echo $BOOKINGS->child ?></td>
                                    </tr>

                                    <tr>
                                        <th>Description</th>
                                        <td><?php echo $BOOKINGS->message ?></td>
                                    </tr>


                                </table>
                                <a href="manage-booking.php"><span class="btn btn-info">Back</span></a>
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

