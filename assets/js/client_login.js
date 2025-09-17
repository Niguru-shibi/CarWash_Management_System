$(function () {

    //----------------------  Client Login  ------------------------------//
   $(document).on('submit', '#clientLoginModal', function (e) {
    e.preventDefault();

    let $btn = $('#clientLoginBtn');
    let $form = $(this);
    let $message = $('#message');

    $btn.prop('disabled', true).text("Please wait...");
    $message.empty();

    $.ajax({
        url: '../../CarWash_Management_System/controller/authenticate.php',
        type: 'POST',
        data: $form.serialize(),
        dataType: 'json',

        success: function (res) {
            if (res.status === 'success') {
                $message.html(`
                    <div class="cardclient border-success shadow-sm mb-2" 
                         style="max-width: 320px; margin:auto; border:1px solid #0f0; color:#0f0;">
                        <div class="card-body text-center">
                            <small><strong>✔ Success:</strong> ${res.message}</small>
                        </div>
                    </div>
                `);
                setTimeout(() => {
                    window.location.href = '../views/client_views.php';
                }, 1500);
            } else {
                $message.html(`
                    <div class="cardclient border-danger shadow-sm mb-2" 
                         style="max-width: 320px; margin:auto; border:1px solid #f00; color:#f00;">
                        <div class="card-body text-center">
                            <small><strong>✖ Error:</strong> ${res.message}</small>
                        </div>
                    </div>
                `);
                $btn.prop('disabled', false).text('Login as Client');
            }
        },

        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error);
            $message.html(`
                <div class="cardclient border-warning shadow-sm mb-2" style="max-width: 320px; margin:auto;">
                    <div class="card-body p-2 text-warning text-center">
                        <small><strong>⚠ Server Error:</strong> Please try again later.</small>
                    </div>
                </div>
            `);
            $btn.prop('disabled', false).text('Login as Client');
        }
    });
});




    //----------------------  Client Register  ------------------------------//
    $(document).on('submit', '#clientRegisterModal', function (e) {
        e.preventDefault();
    
        $('#clientRegisterBtn').prop('disabled', true).text("Please wait...");
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
                    $('#clientRegisterBtn').prop('disabled', false).text('Register');
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
                $('#clientRegisterBtn').prop('disabled', false).text('Register');
            }
        });
    });    

});
