

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
        <tbody>
          <tr>
            <td>Basic Wash</td>
            <td>Exterior wash with tire cleaning and air dry.</td>
            <td>₱199</td>
            <td>30 mins</td>
            <td>
              <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editServiceModal">Edit</button>
            </td>
          </tr>
          <tr>
            <td>Premium Wash</td>
            <td>Exterior & interior wash, tire & rim cleaning, wax coating.</td>
            <td>₱399</td>
            <td>1 hr</td>
            <td>
              <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editServiceModal">Edit</button>
            </td>
          </tr>
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
      <form>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Service Name</label>
            <input type="text" class="form-control" placeholder="Enter service name">
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="3" placeholder="Enter service description"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" placeholder="₱0.00">
          </div>
          <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" class="form-control" placeholder="e.g. 45 mins">
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
      <form>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Service Name</label>
            <input type="text" class="form-control" value="Basic Wash">
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="3">Exterior wash with tire cleaning and air dry.</textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" value="₱199">
          </div>
          <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" class="form-control" value="30 mins">
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

/* Cards */
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
.text-muted-light {
  color: #9ca3af;
}

/* Table */
.table-gradient {
  background: linear-gradient(to right, #0ea5e9, #1d4ed8);
}
.table-dark {
  color: #fff;
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
</script>
