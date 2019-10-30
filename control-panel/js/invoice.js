$(document).ready(function () {
    $('.resend-payment-receipt').click(function () {

        var id = $(this).attr("data-id");
        var status = $(this).attr("status");
        var receipt_no = $(this).attr("receipt_no");

        swal({
            title: "Are you sure?",
            text: "Are you really want to resend payment receipt?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Resend it!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "ajax/invoice.php",
                type: "POST",
                data: {
                    id: id, 
                    status: status, 
                    receipt_no: receipt_no, 
                    option: 'resend-payment-receipt'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Resent!",
                            text: "Payment Receipt has been resent successfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });

                    }
                }
            });
        });
    });
    $('.resend-invoice').click(function () {

        var id = $(this).attr("data-id");

        swal({
            title: "Are you sure?",
            text: "Are you really want to resend invoice?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Resend it!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "ajax/invoice.php",
                type: "POST",
                data: {
                    id: id, 
                    option: 'resend-invoice'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Resent!",
                            text: "Invoice has been resent successfully.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });

                    }
                }
            });
        });
    });
    $('.mark-as-refund').click(function () {

        $('#do-refund').attr('inv-id', $(this).attr('inv-id'));
        $('#inv-currency').text($(this).attr('inv-currency'));
        $("#myModal").modal('show');

    });
    $('#do-refund').click(function () {

        var id = $(this).attr('inv-id');
        var amount = $('#ref-amount').val();
        var reason = $('#ref-reason').val();
        var date = $('#ref-date').val();

        $("#myModal").modal('hide');

        $.ajax({

            url: "ajax/refund-invoice.php",
            type: 'POST',
            data: {
                id: id,
                amount: amount,
                reason: reason,
                date: date
            },
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 1) {
                    $('#status-' + returndata.id).text('');
                    $('#status-' + returndata.id).html('<span class="text-warning">Refund</span> <span class="btn btn-danger pull-right delete-inv" inv-id="' + returndata.id + '"><i class="fa fa-trash" aria-hidden="true"></i></span><span class="btn btn-info pull-right refund-view" inv-id="' + returndata.id + '" style="margin-right: 2px;"><i class="fa fa-info-circle" aria-hidden="true"></i></span>');
                    $('#ref-amount, #ref-date, #ref-reason').val('');

                    swal(
                            'Success...',
                            'Successfully Marked Refund!',
                            'success'
                            );
                    
                    $('#row_' + id).remove();
                } else {
                    swal(
                            'Error...',
                            'Marking Refund Unsuccessfull!',
                            'error'
                            );
                }

            }

        });

    });
});