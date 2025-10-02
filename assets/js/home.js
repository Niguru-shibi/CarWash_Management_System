$(function () {
    // 🔹 Load info on page load
    function loadHomeInfo() {
        $.ajax({
            url: "../controller/update_home.php",
            type: "GET",
            dataType: "json",
            success: function (res) {
                if (res.status === "success" && res.data) {
                    // Fill data in both home.php and admin_home.php
                    $("#homeHeader").text(res.data.crsl_header);
                    $("#homeDesc").html(res.data.crsl_desc);
                    $("#homeLocation").text(res.data.crsl_location);
                    $("#homeEmail").text(res.data.crsl_email);
                    $("#homeNumber").text(res.data.crsl_number);

                    // Also put values into form (for admin)
                    $("#crsl_id").val(res.data.crsl_id);
                    $("#crsl_header").val(res.data.crsl_header);
                    $("#crsl_desc").val(res.data.crsl_desc);
                    $("#crsl_location").val(res.data.crsl_location);
                    $("#crsl_email").val(res.data.crsl_email);
                    $("#crsl_number").val(res.data.crsl_number);
                }
            },
            error: function (xhr, status, err) {
                console.error("⚠ Error loading info:", err);
            }
        });
    }

    loadHomeInfo(); // call on first load

    // 🔹 Save updated info (admin modal)
    $("#editHomeForm").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            url: "../controller/update_home.php",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function (res) {
                if (res.status === "success") {
                    alert("✅ Info updated successfully!");
                    $("#editHomeModal").modal("hide");
                    loadHomeInfo(); // refresh values
                } else {
                    alert("⚠ Failed to update: " + (res.message || "Unknown error"));
                }
            },
            error: function (xhr, status, err) {
                console.error("⚠ Error updating:", err);
                alert("⚠ Something went wrong while saving changes.");
            }
        });
    });
});
