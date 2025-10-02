<!-- Banner -->
<section class="banner">
  <h1 class="fw-bold text-gradient">Welcome to Admin Home</h1>
  <p class="text-muted-light">Manage your website’s main information here.</p>
</section>

<div class="container my-5">
  <!-- Home Settings Table -->
  <div class="card-glass p-4">
    <h4 class="mb-3 text-gradient">🌐 Website Information</h4>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0">
        <thead class="table-gradient text-white">
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Opening Hours</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="homeHeader"></td>
            <td id="homeDesc"></td>
            <td id="homeLocation"></td>
            <td id="homeEmail"></td>
            <td id="homeNumber"></td>
            <td>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHomeModal" id="editBtn">
                <i class="bi bi-pencil-square"></i> Edit
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editHomeModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content card-glass">
      <div class="modal-header table-gradient text-white">
        <h5 class="modal-title fw-bold">✏️ Edit Website Information</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form id="editHomeForm">
        <div class="modal-body">
          <input type="hidden" id="crsl_id" name="crsl_id">

          <div class="mb-3">
            <label class="form-label fw-bold">Website Title</label>
            <input type="text" class="form-control" id="crsl_header" name="crsl_header">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Description</label>
            <textarea class="form-control" rows="3" id="crsl_desc" name="crsl_desc"></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Opening Hours</label>
            <input type="text" class="form-control" id="crsl_location" name="crsl_location">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Email</label>
            <input type="email" class="form-control" id="crsl_email" name="crsl_email">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Contact</label>
            <input type="text" class="form-control" id="crsl_number" name="crsl_number">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Save Changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ✅ jQuery (only once) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- ✅ Bootstrap 5 Bundle (includes Popper + Modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function() {
    // 🔹 Load existing info into the table + modal
    $.ajax({
      url: "../controller/update_home.php",
      type: "GET",
      dataType: "json",
      success: function(res) {
        if (res.status === "success") {
          $("#homeHeader").text(res.data.crsl_header);
          $("#homeDesc").text(res.data.crsl_desc);
          $("#homeLocation").text(res.data.crsl_location);
          $("#homeEmail").text(res.data.crsl_email);
          $("#homeNumber").text(res.data.crsl_number);

          // Pre-fill modal
          $("#crsl_id").val(res.data.crsl_id);
          $("#crsl_header").val(res.data.crsl_header);
          $("#crsl_desc").val(res.data.crsl_desc);
          $("#crsl_location").val(res.data.crsl_location);
          $("#crsl_email").val(res.data.crsl_email);
          $("#crsl_number").val(res.data.crsl_number);
        }
      },
      error: function(xhr, status, error) {
        console.error("⚠ Error loading info:", error);
      }
    });

    // 🔹 Save changes (no page reload)
    $("#editHomeForm").submit(function(e) {
      e.preventDefault();

      $.ajax({
        url: "../controller/update_home.php",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(res) {
          if (res.status === "success") {
            // Update live table
            $("#homeHeader").text($("#crsl_header").val());
            $("#homeDesc").text($("#crsl_desc").val());
            $("#homeLocation").text($("#crsl_location").val());
            $("#homeEmail").text($("#crsl_email").val());
            $("#homeNumber").text($("#crsl_number").val());

            // ✅ Safely close modal (Bootstrap 5)
            let modalEl = document.getElementById("editHomeModal");
            let modal = bootstrap.Modal.getInstance(modalEl);
            if (!modal) {
              modal = new bootstrap.Modal(modalEl);
            }
            modal.hide();
          } else {
            alert("❌ Error: " + res.message);
          }
        },
        error: function(xhr, status, error) {
          console.error("⚠ Error updating:", error);
        }
      });
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