$(function () {
    $(document).on('submit', '#clientLoginModal', function (e) {
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
                    $('#message').html(`
                        <div class="cardclient border-success shadow-sm mb-2" style="max-width: 320px; margin:auto; border:1px solid #0f0; color:#0f0;">
                                    <div class="card-body text-center">
                                        <small><strong>✔ Success:</strong> ${res.message}</small>
                                    </div>
                                </div>
                    `);
                    setTimeout(() => (window.location.href = '../views/client_views.php'), 1500);
                } else {
                    $('#message').html(`
                        <div class="cardclient border-danger shadow-sm mb-2" style="max-width: 320px; margin:auto; border:1px solid #f00; color:#f00;">
                                    <div class="card-body text-center">
                                        <small><strong>✖ Error:</strong> ${res.message}</small>
                                    </div>
                                </div>
                    `);
                    $('#clientLoginBtn').prop('disabled', false).text('Login as Client');
                }
            },

            error: function () {
                $('#message').html(`
                    <div class="cardclient border-warning shadow-sm mb-2" style="max-width: 320px; margin:auto;">
                        <div class="card-body p-2 text-warning text-center">
                            <small><strong>⚠ Server Error:</strong> Please try again later.</small>
                        </div>
                    </div>
                `);
                $('#clientLoginBtn').prop('disabled', false).text('Login as Client');
            }
        });
    });
});
