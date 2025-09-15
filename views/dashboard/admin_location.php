

<!-- Banner -->
<div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
  <h4 class="fw-bold text-gradient">📍 Branch Management</h4>
  <p class="text-muted-light">Add, update, and manage your Car Wash branches efficiently.</p>
</div>

<div class="px-3 mb-5">
  <!-- Add Location Form -->
  <div class="card-glass p-4 mb-4">
    <h5 class="fw-bold text-gradient mb-3">➕ Add New Branch</h5>
    <form>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Branch Name</label>
          <input type="text" class="form-control" placeholder="Enter branch name" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Location</label>
          <input type="text" class="form-control" placeholder="Enter location" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Phone</label>
          <input type="text" class="form-control" placeholder="Enter phone number" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Enter email address" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Add Branch</button>
    </form>
  </div>

  <!-- Location Table -->
  <div class="card-glass p-4">
    <h5 class="fw-bold text-gradient mb-3 text-center">🏢 Branch Locations</h5>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0">
        <thead class="table-gradient text-white">
          <tr>
            <th>#</th>
            <th>Branch Name</th>
            <th>Location</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Main Branch</td>
            <td>Downtown City</td>
            <td>+63 912 345 6789</td>
            <td>mainbranch@carwash.com</td>
            <td>
              <button class="btn btn-sm btn-warning">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>North Branch</td>
            <td>North Avenue</td>
            <td>+63 987 654 3210</td>
            <td>northbranch@carwash.com</td>
            <td>
              <button class="btn btn-sm btn-warning">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
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
</script>
