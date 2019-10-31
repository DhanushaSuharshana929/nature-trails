$(document).ready(function () {
    $('.booking_type').click(function () {
        var value = $(this).val();

        if (value == 'booking') {
            $('.type_booking').removeClass('hidden');
            $('.type_other').addClass('hidden');
        } else if (value == 'other') {
            $('.type_other').removeClass('hidden');
            $('.type_booking').addClass('hidden');

            $.ajax({
                url: "ajax/booking-type.php",
                type: "POST",
                data: {
                    option: 'GETRANDOMID'
                },
                async: false,
                dataType: 'json',
                success: function (result) {
                    $('.type_other #booking_id').val(result);
                    $('.type_other .form-line').addClass('focused');
                    
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});

