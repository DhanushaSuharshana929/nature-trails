$(document).ready(function () {

    $('#create').click(function () {
        tinyMCE.triggerSave();
        var date = $('#invoice_date').val();
        var bookingID = $('#booking_id').val();
        var fullName = $('#full_name').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var city = $('#city').val();
        var country = $('#country').val();
        var contactNumber = $('#contact_number').val();
        var description = $('#description').val();
        var feesOrTaxes = $('#fees_or_taxes').val();
        var currency = $('#currency').val();
        var totalAmount = $('#total_amount').val();
        var terms_and_conditions = $('#terms_and_conditions').val();
        $.ajax({

            url: "ajax/add-booking-invoice.php",
            type: 'POST',
            data: {
                date: date,
                bookingID: bookingID,
                fullName: fullName,
                email: email,
                address: address,
                city: city,
                country: country,
                contactNumber: contactNumber,
                description: description,
                feesOrTaxes: feesOrTaxes,
                currency: currency,
                totalAmount: totalAmount,
                terms_and_conditions: terms_and_conditions
            },
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 1) {
//                    $('.to-clear').val('');
//                    tinyMCE.activeEditor.setContent('');
//                    swal(
//                            'Success...',
//                            'Successfully Created Invoice!',
//                            'success'
//                            );

                    window.location.replace('../booking-invoice-pay.php?id=' + returndata.id);
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