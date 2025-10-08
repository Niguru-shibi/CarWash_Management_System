$(function () {
    const baseUrl = "../controller/services.php";

    function loadServices() {
        $.ajax({
            url: `${baseUrl}?action=getServices`,
            type: "GET",
            dataType: "json",
            success: function (services) {
                const tbody = $("#servicesTableBody");
                const preview = $("#publicServicesPreview");
                tbody.empty();
                preview.empty();

                if (services.length === 0) {
                    tbody.html(`<tr><td colspan="6" class="text-center text-danger">No services found.</td></tr>`);
                    return;
                }

                services.forEach(service => {
                    // Table row
                    let row = `
                        <tr>
                            <td><i class="${service.services_icon}"></i></td>
                            <td>${service.services_title}</td>
                            <td>${service.services_subtitle}</td>
                            <td>${service.services_description}</td>
                            <td>${service.services_status}</td>
                            <td>
                                <button class="btn btn-sm btn-primary editServiceBtn" data-id="${service.services_id}">Edit</button>
                                <button class="btn btn-sm btn-danger deleteServiceBtn" data-id="${service.services_id}">Delete</button>
                            </td>
                        </tr>
                    `;
                    tbody.append(row);

                    // Live preview card
                    let listItems = service.services_list_items.split(",").map(i => `<li>${i.trim()}</li>`).join("");
                    let card = `
                        <div class="service-card">
                            <i class="${service.services_icon}"></i>
                            <h2>${service.services_title}</h2>
                            <p>${service.services_subtitle}</p>
                            <ul>${listItems}</ul>
                        </div>
                    `;
                    preview.append(card);
                });
            },
            error: function () {
                $("#servicesTableBody").html(`<tr><td colspan="6" class="text-center text-danger">Failed to load services.</td></tr>`);
                console.log("Error: Could not fetch services.");
            }
        });
    }

    loadServices();

    // Add service
    $("#addServiceBtn").click(function () {
        $("#editServiceForm")[0].reset();
        $("#services_id").val("");
        $("#editServiceModal .modal-title").text("✏️ Add New Service");
    });

    // Edit service
    $(document).on("click", ".editServiceBtn", function () {
        const id = $(this).data("id");
        $.getJSON(`${baseUrl}?action=getService&id=${id}`, function (service) {
            $("#services_id").val(service.services_id);
            $("#services_icon").val(service.services_icon);
            $("#services_title").val(service.services_title);
            $("#services_subtitle").val(service.services_subtitle);
            $("#services_description").val(service.services_description);
            $("#services_list_items").val(service.services_list_items);
            $("#services_status").val(service.services_status);

            $("#editServiceModal .modal-title").text("✏️ Edit Service");
            const modalEl = document.getElementById("editServiceModal");
            const modal = new bootstrap.Modal(modalEl);
            modal.show();
        });
    });

    // Delete service
    $(document).on("click", ".deleteServiceBtn", function () {
        const id = $(this).data("id");
        if (confirm("Are you sure you want to delete this service?")) {
            $.post(`${baseUrl}?action=deleteService`, { serviceId: id }, function (res) {
                alert(res.message);
                loadServices();
            }, "json");
        }
    });

    // Submit add/edit form
    $("#editServiceForm").submit(function (e) {
        e.preventDefault();
        $.post(`${baseUrl}?action=saveService`, $(this).serialize(), function (res) {
            if (res.status === "success") {
                loadServices();
                const modalEl = document.getElementById("editServiceModal");
                const modal = bootstrap.Modal.getInstance(modalEl);
                if (modal) modal.hide();
                alert(res.message);
            } else {
                alert("❌ " + res.message);
            }
        }, "json");
    });
});
