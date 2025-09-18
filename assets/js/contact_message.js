$(function () {
    $(document).on('submit', '#sendContactForm', function (e) {
        e.preventDefault();

        $('#sendContactBtn').prop('disabled', true).text("Please wait...");
        $('#contactMessage').empty();

        $.ajax({
            url: '../../CarWash_Management_System/controller/contact.php',
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (res) {
                if (res.status === 'success') {
                    $('#contactMessage').html(`
                        <div class="cardcontact border-success shadow-sm mb-2" 
                             style="max-width: 400px; margin:auto; border:1px solid #0f0; color:#0f0;">
                            <div class="card-body text-center">
                                <small><strong>✔ Success:</strong> ${res.message}</small>
                            </div>
                        </div>
                    `);

                    // ✅ Reset form after success
                    $('#sendContactForm')[0].reset();

                } else {
                    $('#contactMessage').html(`
                        <div class="cardcontact border-danger shadow-sm mb-2" 
                             style="max-width: 400px; margin:auto; border:1px solid #f00; color:#f00;">
                            <div class="card-body text-center">
                                <small><strong>✖ Error:</strong> ${res.message}</small>
                            </div>
                        </div>
                    `);
                }

                // ✅ Re-enable button
                $('#sendContactBtn').prop('disabled', false).text('Send ');
            },
            error: function () {
                $('#contactMessage').html(`
                    <div class="cardcontact border-warning shadow-sm mb-2" 
                         style="max-width: 400px; margin:auto;">
                        <div class="card-body p-2 text-warning text-center">
                            <small><strong>⚠ Server Error:</strong> Please try again later.</small>
                        </div>
                    </div>
                `);
                $('#sendContactBtn').prop('disabled', false).text('Send ');
            }
        });
    });
    
});
