<!-- Banner -->
<div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
  <h4 class="fw-bold text-gradient">📍 Branch Management</h4>
  <p class="text-muted-light">Add, update, and manage your Car Wash branches efficiently.</p>
</div>

<div class="container my-4">
  <!-- Add Location Form -->
  <div class="card shadow-sm p-4 mb-4">
    <h4 class="mb-3">Add New Branch</h4>
    <form id="addBranchLocationForm" >
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Branch Name</label>
          <input type="text" class="form-control" placeholder="Enter Branch Name" name="washPointName" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Branch Location</label>
          <input type="text" class="form-control" placeholder="Enter Branch location" name="washPointLocation" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Enter email address" name="washPointEmail" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Phone</label>
          <input type="text" class="form-control" placeholder="Enter phone number" name="washPointContact" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Map Link</label>
          <input type="text" class="form-control" placeholder="Enter Map Link" name="washPointMapLink" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary mt-3" id="addBranchBtn">Add Branch</button>
    </form>
  </div>

  <!-- Location Table -->
  <div class="card shadow-sm p-4">
    <h4 class="mb-3">Branch Locations</h4>
    <table class="table table-striped table-hover" id="locationTable">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Branch Name</th>
          <th>Brach Location</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Map Link</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
  
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
  font-family: 'Quicksand', sans-serif;
  background: linear-gradient(135deg, #0a192f, #001f54);
  color: #fff;
  min-height: 100vh;
  padding-top: 70px;
}


.logo {
  font-size: 1.5rem;
  font-weight: 700;
  background: linear-gradient(to right, #38bdf8, #0ea5e9, #1d4ed8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Glass Cards */
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

/* Gradient Text */
.text-gradient {
  background: linear-gradient(to right, #38bdf8, #0ea5e9, #1d4ed8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Table */
.table-gradient {
  background: linear-gradient(to right, #0ea5e9, #1d4ed8);
}
.table-dark {
  color: #fff;
}
.text-muted-light {
  color: #9ca3af;
}

/* Light Mode */
body.light {
  background: #f9fafb;
  color: #111;
}
body.light .card-glass {
  background: rgba(255, 255, 255, 0.9);
  color: #111;
}
</style>

<script>
  const themeToggle = document.getElementById("themeToggle");
  themeToggle.addEventListener("click", () => {
    document.body.classList.toggle("light");
    themeToggle.classList.toggle("bi-brightness-high");
    themeToggle.classList.toggle("bi-moon-stars");
  });

  // ✅ Add Branch AJAX
  $(function () {
    // Load branches on page load
    function loadBranches() {
      $.ajax({
        url: "../controller/location.php?action=getLocation",
        type: "GET",
        dataType: "json",
        success: function (res) {
          let rows = "";

          if (!res || res.length === 0) {
            rows = `<tr><td colspan="7" class="text-center text-muted">No branches found</td></tr>`;
          } else {
            res.forEach((branch, index) => {
              rows += `
                <tr>
                  <td>${index + 1}</td>
                  <td>${branch.washpoint_name}</td>
                  <td>${branch.washpoint_location}</td>
                  <td>${branch.washpoint_email}</td>
                  <td>${branch.washpoint_num}</td>
                  <td><a href="${branch.washpoint_map}" target="_blank">View Map</a></td>
                  <td>
                    <button class="btn btn-sm btn-warning editBranch" data-id="${branch.id}">Edit</button>
                    <button class="btn btn-sm btn-danger deleteBranch" data-id="${branch.id}">Delete</button>
                  </td>
                </tr>
              `;
            });
          }

          $("#locationTable tbody").html(rows);
        },
        error: function () {
          $("#locationTable tbody").html(
            `<tr><td colspan="7" class="text-center text-danger">⚠ Failed to load branches</td></tr>`
          );
        }
      });
    }

    // Initial load
    loadBranches();

    // Add new branch
    $(document).on("submit", "#addBranchLocationForm", function (e) {
      e.preventDefault();

      $("#addBranchBtn").prop("disabled", true).text("Adding...");

      $.ajax({
        url: "../controller/location.php?action=addLocation",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function (res) {
          if (res.status === "success") {
            alert(res.message);
            $("#addBranchLocationForm")[0].reset();
            loadBranches(); // reload table
          } else {
            alert("❌ " + res.message);
          }
          $("#addBranchBtn").prop("disabled", false).text("Add Branch");
        },
        error: function () {
          alert("⚠ Server error, please try again.");
          $("#addBranchBtn").prop("disabled", false).text("Add Branch");
        }
      });
    });
  });
</script>
