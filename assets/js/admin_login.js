$(function () {
    $(document).on('submit', '#adminLoginModal', function (e) {
        e.preventDefault();

        // disable button properly
        $('#adminLoginBtn').prop('disabled', true).text("Please wait...");

        $('#message').empty();

        $.ajax({
            url: '../../CarWashManagementSystem/controller/authenticate.php',
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',

            success: function (res) {
                if (res.status === 'success') {
                    $('#message').html('<div class="alert success">' + res.message + "</div>");
                    setTimeout(() => (window.location.href = '../views/admin_views.php'),2000);
                } else {
                    $('#message').html('<div class="alert error">' + res.message + "</div>");
                    $('#adminLoginBtn').prop('disabled', false).text('Login as Admin');
                }
            },

            error: function () {
                $('#message').html('<div class="alert error">Server Error</div>');
                $('#adminLoginBtn').prop('disabled', false).text('Login as Admin');
            }
        });
    });
});

