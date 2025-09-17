$(function () {
    $(document).on('click', '#clientLoginBtn', function (e) {
        e.preventDefault();

        $('#clientLoginBtn').prop('disabled', true).text("Please wait...");
        $('#message').empty();

        $.ajax({
            url: '../../CarWash_Management_System/controller/authenticate.php',
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',

            success: function (res) {
                if (res.status === 'success') {
                    $('#message').html('<div class="alert success">' + res.message + "</div>");
                    setTimeout(() => (window.location.href = '../views/client_views.php'),2000);
                } else {
                    $('#message').html('<div class="alert error">' + res.message + "</div>");
                    $('#clientLoginBtn').prop('disabled', false).text('Login as Client');
                }
            },

            error: function () {
                $('#message').html('<div class="alert error">Server Error</div>');
                $('#clientLoginBtn').prop('disabled', false).text('Login as Client');
            }
        });
    });
});

