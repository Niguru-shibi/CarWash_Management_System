$(function () {
    // === Load Home Info when page is ready ===
    loadHomeInfo();

    function loadHomeInfo() {
        $.ajax({
            url: 'controller/update_home.php', // unified GET + POST
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                if (res.status === 'success' && res.data) {
                    let row = `
                        <tr>
                            <td>${res.data.crsl_header}</td>
                            <td>${res.data.crsl_desc}</td>
                            <td>${res.data.crsl_location}</td>
                            <td>${res.data.crsl_email}</td>
                            <td>${res.data.crsl_number}</td>
                            <td>
                                <button class="btn btn-cyan btn-sm btn-edit" 
                                    data-id="${res.data.crsl_id}"
                                    data-header="${res.data.crsl_header}"
                                    data-desc="${res.data.crsl_desc}"
                                    data-location="${res.data.crsl_location}"
                                    data-email="${res.data.crsl_email}"
                                    data-number="${res.data.crsl_number}"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editHomeModal">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </button>
                            </td>
                        </tr>
                    `;
                    $("#homeTableBody").html(row);
                } else {
                    $("#homeTableBody").html("<tr><td colspan='6'>⚠ No data found</td></tr>");
                }
            },
            error: function (xhr, status, error) {
                console.error("⚠ Failed to load website info:", error);
                $("#homeTableBody").html("<tr><td colspan='6'>⚠ Error loading data</td></tr>");
            }
        });
    }

    // === Fill Edit Modal when Edit button clicked ===
    $(document).on("click", ".btn-edit", function () {
        $("#crsl_id").val($(this).data("id"));
        $("#crsl_header").val($(this).data("header"));
        $("#crsl_desc").val($(this).data("desc"));
        $("#crsl_location").val($(this).data("location"));
        $("#crsl_email").val($(this).data("email"));
        $("#crsl_number").val($(this).data("number"));
    });

    // === Handle Edit Form Submit ===
    $("#editHomeForm").on("submit", function (e) {
        e.preventDefault();

        let formData = {
            crsl_id: $("#crsl_id").val(),
            crsl_header: $("#crsl_header").val(),
            crsl_desc: $("#crsl_desc").val(),
            crsl_location: $("#crsl_location").val(),
            crsl_email: $("#crsl_email").val(),
            crsl_number: $("#crsl_number").val()
        };

        $.ajax({
            url: 'controller/update_home.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (res) {
                if (res.status === 'success') {
                    alert("✅ Home info updated successfully!");

                    // Hide modal properly in Bootstrap 5
                    let modalEl = document.getElementById('editHomeModal');
                    let modal = bootstrap.Modal.getInstance(modalEl);
                    modal.hide();

                    loadHomeInfo(); // refresh table
                } else {
                    alert("⚠ Update failed: " + res.message);
                }
            },
            error: function (xhr, status, error) {
                console.error("⚠ Update error:", error);
                alert("⚠ Something went wrong.");
            }
        });
    });
});
