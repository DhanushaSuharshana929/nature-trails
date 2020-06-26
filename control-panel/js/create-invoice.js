$(document).ready(function () {

    $('#create').click(function () {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!$('#invoice_date').val() || $('#invoice_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the invoice date",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#due_date').val() || $('#due_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the due date",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#full_name').val() || $('#full_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the name",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the email address for the first email field.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!re.test($('#email').val())) {
            swal({
                title: "Error!",
                text: "Please enter a valid email address for the first email field.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if ($('#email2').val() && !re.test($('#email2').val())) {
            swal({
                title: "Error!",
                text: "Please enter a valid email address for the second email field",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the address",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#city').val() || $('#city').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the city",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#country').val() || $('#country').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the country",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#contact_number').val() || $('#currency').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the contact number",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if ($('#currency').val() == 0) {
            swal({
                title: "Error!",
                text: "Please select the currency",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#total_amount').val() || $('#total_amount').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the total amount",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#fees_or_taxes').val() || $('#fees_or_taxes').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the total amount",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if ($('#terms_and_conditions').val() == 0) {
            swal({
                title: "Error!",
                text: "Please select the terms and conditions",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else {


            tinyMCE.triggerSave();
            var date = $('#invoice_date').val();
            var fullName = $('#full_name').val();
            var email = $('#email').val();
            var email2 = $('#email2').val();
            var address = $('#address').val();
            var city = $('#city').val();
            var country = $('#country').val();
            var contactNumber = $('#contact_number').val();
            var goodsOrServices = $('#goods_or_services').val();
            var feesOrTaxes = $('#fees_or_taxes').val();
            var currency = $('#currency').val();
            var totalAmount = $('#total_amount').val();
            var terms_and_conditions = $('#terms_and_conditions').val();
            var dueDate = $('#due_date').val();
            $.ajax({

                url: "ajax/add-invoice.php",
                type: 'POST',
                data: {
                    date: date,
                    fullName: fullName,
                    email: email,
                    email2: email2,
                    address: address,
                    city: city,
                    country: country,
                    contactNumber: contactNumber,
                    goodsOrServices: goodsOrServices,
                    feesOrTaxes: feesOrTaxes,
                    currency: currency,
                    totalAmount: totalAmount,
                    terms_and_conditions: terms_and_conditions,
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
        }

    });

});