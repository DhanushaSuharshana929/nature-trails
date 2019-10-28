$(document).ready(function () {

    $('#create').click(function () {
        tinyMCE.triggerSave();
        var date = $('#invoice_date').val();
        var fullName = $('#full_name').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var city = $('#city').val();
        var country = $('#country').val();
        var contactNumber = $('#contact_number').val();
        var goodsOrServices = $('#goods_or_services').val();
        var feesOrTaxes = $('#fees_or_taxes').val();
        var currency = $('#currency').val();
        var totalAmount = $('#total_amount').val();
        var dueDate = $('#due_date').val();
        $.ajax({

            url: "ajax/add-invoice.php",
            type: 'POST',
            data: {
                date: date,
                fullName: fullName,
                email: email,
                address: address,
                city: city,
                country: country,
                contactNumber: contactNumber,
                goodsOrServices: goodsOrServices,
                feesOrTaxes: feesOrTaxes,
                currency: currency,
                totalAmount: totalAmount,
                dueDate: dueDate
            },
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 2) {
                    $('.to-clear').val('');
                    tinyMCE.activeEditor.setContent('');
                    swal(
                            'Success...',
                            'Successfully Created Invoice!',
                            'success'
                            );
                } else if (returndata.status === 1) {
                    $('.to-clear').val('');
                    swal(
                            'Error...',
                            'Error Sending Email BUT Invoice was Created!',
                            'error'
                            );
                } else {
                    swal(
                            'Error...',
                            'Error Creating Invoice!',
                            'error'
                            );
                }

            }

        });

    });

});