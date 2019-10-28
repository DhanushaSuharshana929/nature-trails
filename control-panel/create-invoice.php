<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Web Invoice</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
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
                <!-- Vertical Layout -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>Create New Web Invoice</h2>
                                <ul class="header-dropdown">
                                    <li class="">
                                        <a href="#">
                                            <i class="material-icons">list</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <form class="form-horizontal"  method="post"  id="form-data">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="invoice_date" class="form-control to-clear"  autocomplete="off" name="invoice_date" required="true">
                                                <label class="form-label">Invoice Date</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="full_name" class="form-control to-clear" autocomplete="off" name="full_name" required="true">
                                                <label class="form-label">Customer Full Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="email" class="form-control to-clear" autocomplete="off" name="email" required="true">
                                                <label class="form-label">Customer Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="address" class="form-control to-clear" autocomplete="off" name="address" required="true">
                                                <label class="form-label">Customer Address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="city" class="form-control to-clear" autocomplete="off" name="city" required="true">
                                                <label class="form-label">Customer City</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="country" class="form-control to-clear" autocomplete="off" name="country" required="true">
                                                <label class="form-label">Customer Country</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="contact_number" class="form-control to-clear" autocomplete="off" name="contact_number" required="true">
                                                <label class="form-label">Customer Contact Number</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="goods_or_services">List of Goods or Services</label>
                                        <div class="form-line">
                                            <textarea id="goods_or_services" name="goods_or_services" class="form-control to-clear" rows="5"></textarea> 
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="fees_or_taxes" class="form-control to-clear" autocomplete="off" name="fees_or_taxes" required="true">
                                                <label class="form-label">Fees or Taxes</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label class="form-label">Currency</label>
                                                <select class="form-control to-clear" id="currency" name="currency">
                                                    <option>--Please Select--</option>
                                                    <?php
                                                    $data = DefaultData::getDetailsByCurrency();
                                                    foreach ($data as $details) {
                                                        foreach ($details as $currency) {
                                                            ?>
                                                            <option value="<?php echo $currency['currency']; ?>"><?php echo $currency['currency']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="total_amount" class="form-control to-clear" autocomplete="off" name="total_amount" required="true">
                                                <label class="form-label">Total Amount</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="due_date" class="form-control to-clear" autocomplete="off" name="due_date" required="true">
                                                <label class="form-label">Due Date</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12"> 
                                        <span id="create" class="btn btn-primary m-t-15 waves-effect">Create </span>
                                    </div>
                                </form>
                                <div class="row clearfix">  </div>
                                <hr/>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- #END# Vertical Layout -->

            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script> 
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/demo.js"></script>
        <script src="plugins/sweetalert/sweetalert.min.js"></script>
        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
        <script src="js/create-invoice.js" type="text/javascript"></script>
        <script>
            tinymce.init({
                selector: "#goods_or_services",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });

        </script>
        <script type="text/javascript">
            $(function () {
                $("#invoice_date").datepicker({
                    dateFormat: "yy-mm-dd"
                });
                $("#due_date").datepicker({
                    dateFormat: "yy-mm-dd", minDate: 0
                });
            });

        </script>
    </body>

</html>