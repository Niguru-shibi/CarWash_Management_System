$(function() {
    function loadServices() {
        $.ajax({
            url: '/Guerrero/CarWash_Management_System/controller/services.php?action=getServices',
            type: 'GET',
            dataType: 'json',
            success: function(services) {
                $('#servicesTableBody').empty();

                services.forEach(function(service) {
                    let row = `
                        <tr>
                            <td>${service.washplan_name}</td>
                            <td>${service.washplan_description}</td>
                            <td>₱${service.washplan_price}</td>
                            <td>${service.washplan_duration}</td>
                            <td>
                                <button class="btn btn-sm btn-primary editServiceBtn" data-id="${service.washplan_id}">Edit</button>
                                <button class="btn btn-sm btn-danger deleteServiceBtn" data-id="${service.washplan_id}">Delete</button>
                            </td>
                        </tr>
                    `;
                    $('#servicesTableBody').append(row);
                });
            },
            error: function() {
                $('#servicesTableBody').html(`
                    <tr><td colspan="5" class="text-center text-danger">Failed to load services.</td></tr>
                `);
            }
        });
    }

    // Initial load
    loadServices();

    // Handle Delete button click
    $(document).on('click', '.deleteServiceBtn', function() {
        const serviceId = $(this).data('id');
        if(confirm('Are you sure you want to delete this service?')) {
            $.post('/Guerrero/CarWash_Management_System/controller/services.php?action=deleteService', { serviceId }, function(res) {
                alert(res.message);
                loadServices();
            }, 'json');
        }
    });

    // Handle Edit button click
    $(document).on('click', '.editServiceBtn', function() {
        const serviceId = $(this).data('id');
        // You can fetch service details and fill the edit modal
        // Then show: $('#editServiceModal').modal('show');
    });

    // Optional: handle Add Service form submission
});
