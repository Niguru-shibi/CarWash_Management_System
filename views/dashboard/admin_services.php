<!-- Page Banner -->
<div class="card-glass text-center mt-5 mx-3 p-4">
  <h2 class="fw-bold text-gradient">✨ Manage Services</h2>
  <p class="text-muted-light">Update, add, or edit the services offered by your car wash.</p>
</div>

<!-- Services Table -->
<section class="px-3 my-4">
  <div class="card-glass p-4">
    <h5 class="mb-3 text-center fw-bold text-gradient">🛠 Services Information</h5>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0">
        <thead class="table-gradient text-white">
          <tr>
            <th>Service Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="servicesTableBody">
          <!-- Dynamic content will load here -->
        </tbody>
      </table>
    </div>

    <!-- Add Service Button -->
    <div class="text-center mt-3">
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addServiceModal">+ Add New Service</button>
    </div>
  </div>
</section>

<!-- Add Service Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Add New Service</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form id="addServiceForm">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Service Name</label>
            <input type="text" class="form-control" name="serviceName" placeholder="Enter service name" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Enter service description" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price" placeholder="₱0.00" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" class="form-control" name="duration" placeholder="e.g. 45 mins" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Add Service</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Service Modal -->
<div class="modal fade" id="editServiceModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Service</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form id="editServiceForm">
        <input type="hidden" name="id" id="editServiceId">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Service Name</label>
            <input type="text" class="form-control" name="serviceName" id="editServiceName" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="editServiceDescription" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="editServicePrice" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" class="form-control" name="duration" id="editServiceDuration" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(function() {
    function loadServices() {
      $.ajax({
        url: '../../CarWash_Management_System/controller/services.php?action=getServices',
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
          $('#servicesTableBody').html('<tr><td colspan="5" class="text-center text-danger">Failed to load services.</td></tr>');
        }
      });
    }

    loadServices(); // initial load

    // Add Service
    $('#addServiceForm').on('submit', function(e) {
      e.preventDefault();
      const data = $(this).serialize();
      $.post('../../CarWash_Management_System/controller/services.php?action=addService', data, function(res) {
        alert(res.message);
        if (res.status === 'success') {
          $('#addServiceModal').modal('hide');
          $('#addServiceForm')[0].reset();
          loadServices();
        }
      }, 'json');
    });

    // Delete Service
    $(document).on('click', '.deleteServiceBtn', function() {
      const serviceId = $(this).data('id');
      if (confirm('Are you sure you want to delete this service?')) {
        $.post('/Guerrero/CarWash_Management_System/controller/services.php?action=deleteService', {
            serviceId
          },
          function(res) {
            alert(res.message);
            if (res.status === 'success') loadServices();
          },
          'json');
      }
    });

    // Edit Service
    $(document).on('click', '.editServiceBtn', function() {
      const serviceId = $(this).data('id');
      $.get('/Guerrero/CarWash_Management_System/controller/services.php?action=getServices', function(services) {
        const service = services.find(s => s.washplan_id == serviceId);
        if (service) {
          $('#editServiceId').val(service.washplan_id);
          $('#editServiceName').val(service.washplan_name);
          $('#editServiceDescription').val(service.washplan_description);
          $('#editServicePrice').val(service.washplan_price);
          $('#editServiceDuration').val(service.washplan_duration);
          $('#editServiceModal').modal('show');
        }
      }, 'json');
    });


    // Save Edit
    $('#editServiceForm').on('submit', function(e) {
      e.preventDefault();
      const data = $(this).serialize();
      $.post('../../CarWash_Management_System/controller/services.php?action=updateService', data, function(res) {
        alert(res.message);
        if (res.status === 'success') {
          $('#editServiceModal').modal('hide');
          loadServices();
        }
      }, 'json');
    });
  });
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
  font-family: 'Quicksand', sans-serif;
  background: linear-gradient(135deg, #0a192f, #001f54);
  color: #fff;
  min-height: 100vh;
  padding-top: 70px;
}

/* Gradient Text */
.text-gradient {
  background: linear-gradient(to right, #38bdf8, #0ea5e9, #1d4ed8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Muted text */
.text-muted-light {
  color: #9ca3af;
}

/* Glass card */
.card-glass {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(14, 165, 233, 0.2);
  backdrop-filter: blur(15px);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  color: #fff;
}
.card-glass:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(14, 165, 233, 0.35);
}

/* Table Gradient (if needed) */
.table-gradient {
  background: linear-gradient(to right, #0ea5e9, #1d4ed8);
}
.table-dark {
  color: #fff;
}

/* Inputs */
.form-control {
  border-radius: 10px;
  padding: 10px;
}
.form-control:focus {
  outline: none;
  box-shadow: 0 0 8px rgba(14, 165, 233, 0.6);
  border: 1px solid #0ea5e9;
}

/* Buttons */
.btn-primary {
  background: linear-gradient(to right, #0ea5e9, #1d4ed8);
  border: none;
  font-weight: 600;
}
.btn-primary:hover {
  opacity: 0.9;
}
.btn-success {
  background: linear-gradient(to right, #10b981, #059669);
  border: none;
  font-weight: 600;
}
.btn-success:hover {
  opacity: 0.9;
}

/* Switches */
.form-check-input:checked {
  background-color: #0ea5e9;
  border-color: #0ea5e9;
}
</style>
