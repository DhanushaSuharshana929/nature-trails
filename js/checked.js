$(document).ready(function () {

    $('#btnPay').click(function (e) {
        e.preventDefault();
         if ($('#agree').is(":checked") === false) {
            swal({
                title: "Error!",
                text: "Please accept the company's terms & conditions by clicking the checkbox!.",
                type: 'error',
                timer: 4000,
                showConfirmButton: false
            });
            return false;
        } else {
            $("#invoice-pay").submit();
        }
    });
});