$(function () {
    //-- Add Branch Location --//
    $(document).on('submit', '#addBranchLocationForm', function (e) {
        e.preventDefault();

        $('#addBranchBtn').prop('disabled', true).text("Please wait...");
        $('#inqueryMessage').empty();

        $.ajax({
            url: '../../CarWash_Management_System/controller/location.php',
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (res) {
                if (res.status === 'success') {
                    $('#inqueryMessage').html(`
                        <div class="cardinquery border-success shadow-sm mb-2" 
                             style="max-width: 400px; margin:auto; border:1px solid #0f0; color:#0f0;">
                          <div class="card-body text-center">
                            <small><strong>✔ Success:</strong> ${res.message}</small>
                          </div>
                        </div>
                    `);
                    $('#addBranchLocationForm')[0].reset();
                    loadLocation();      // 🔄 Refresh table
                    loadLocationCards(); // 🔄 Refresh cards
                } else {
                    $('#inqueryMessage').html(`
                        <div class="cardinquery border-danger shadow-sm mb-2" 
                             style="max-width: 400px; margin:auto; border:1px solid #f00; color:#f00;">
                          <div class="card-body text-center">
                            <small><strong>✖ Error:</strong> ${res.message}</small>
                          </div>
                        </div>
                    `);
                }
                $('#addBranchBtn').prop('disabled', false).text('Add Branch');
            },
            error: function () {
                $('#inqueryMessage').html(`
                    <div class="cardinquery border-warning shadow-sm mb-2" 
                         style="max-width: 400px; margin:auto;">
                      <div class="card-body p-2 text-warning text-center">
                        <small><strong>⚠ Server Error:</strong> Please try again later.</small>
                      </div>
                    </div>
                `);
                $('#addBranchBtn').prop('disabled', false).text('Add Branch');
            }
        });
    });


    //-- Get All Branch Locations (Table) --//
    function loadLocation() {
        $.ajax({
            url: '../../CarWash_Management_System/controller/location.php?action=getLocation',
            method: 'GET',
            dataType: 'json',
            cache: false,
            success: function (response) {
                console.table(response);

                let tableBody = "";
                let n = 1;

                if (response.length === 0) {
                    tableBody = `<tr><td colspan="8" class="text-center">No data found</td></tr>`;
                } else {
                    response.forEach(function (location) {
                        tableBody += `
                        <tr>
                          <td>${n++}</td>
                          <td>${location.washpoint_name}</td>
                          <td>${location.washpoint_location}</td>
                          <td>${location.washpoint_email}</td>
                          <td>${location.washpoint_num}</td>
                          <td><a href="${location.washpoint_map}" target="_blank">View Map</a></td>
                          <td>
                            <button class="btn btn-sm btn-warning" title="View Branch">👁</button>
                            <button class="btn btn-sm btn-primary" title="Edit Branch">✏️</button>
                            <button class="btn btn-sm btn-danger" data-id="${location.washpoint_id}" title="Delete Branch">🗑</button>
                          </td>
                        </tr>`;
                    });
                }

                $("#locationTable tbody").html(tableBody);
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", error);
                $("#locationTable tbody").html(`<tr><td colspan="8" class="text-danger text-center">⚠ Failed to load data</td></tr>`);
            }
        });
    }


    //-- Get All Branch Locations (Cards) --//
    function loadLocationCards() {
        $.ajax({
            url: "../../CarWash_Management_System/controller/location.php?action=getLocation",
            method: "GET",
            dataType: "json",
            cache: false,
            success: function (response) {
                console.log("Cards Response:", response);
                console.table(response);

                let html = "";

                if (!response || response.length === 0) {
                    html = `<div class="col-12 text-center">
                                <p class="text-muted">No branches available at the moment.</p>
                            </div>`;
                } else {
                    response.forEach(loc => {
                        html += `
                            <div class="col-md-3 mb-4" data-aos="fade-up-right">
                                <div class="location-card h-100">
                                    <h6 class="fs-4 text-center">${loc.washpoint_name}</h6>
                                    <h5 class="card-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        ${loc.washpoint_location}
                                    </h5>
                                    <p>Email: ${loc.washpoint_email}</p>
                                    <p>Contact: ${loc.washpoint_num}</p>
                                    <a href="${loc.washpoint_map}" target="_blank" class="btn">View Map</a>
                                </div>
                            </div>
                        `;
                    });
                }

                $("#locationContainer").html(html);
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", error);
                $("#locationContainer").html(
                    `<div class="col-12 text-danger text-center">⚠ Failed to load branches</div>`
                );
            }
        });
    }

    // Initial Load
    loadLocation();
    loadLocationCards();

});
