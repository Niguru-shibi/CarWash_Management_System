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
            <td id="homeHeader">Loading...</td>
            <td id="homeDesc">Loading...</td>
            <td id="homeLocation">Loading...</td>
            <td id="homeEmail">Loading...</td>
            <td id="homeNumber">Loading...</td>
            <td>
              <button class="btn btn-cyan btn-sm" data-bs-toggle="modal" data-bs-target="#editHomeModal" id="editBtn">
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

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/home.js"></script>


<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
  font-family: 'Quicksand', sans-serif;
  background: linear-gradient(135deg, #0a192f, #001f54);
  color: #fff;
}

/* Banner */
.banner {
  background: linear-gradient(135deg, #0ea5e9, #1d4ed8);
  color: white;
  border-radius: 0.8rem;
  padding: 2rem 1.5rem;
  margin: 1rem auto 2rem auto;
  text-align: center;
  box-shadow: 0 10px 25px rgba(14, 165, 233, 0.25);
}
.banner h1 {
  font-weight: 700;
}
.text-muted-light {
  color: #cbd5e1;
}

/* Cards */
.card-glass {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  backdrop-filter: blur(12px);
  box-shadow: 0 8px 20px rgba(14, 165, 233, 0.2);
  color: #fff;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-glass:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(14, 165, 233, 0.35);
}

/* Gradient Header */
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
.btn-cyan {
  background: linear-gradient(90deg, #06b6d4, #3b82f6);
  border: none;
  color: #fff;
  font-weight: 600;
  transition: 0.3s;
}
.btn-cyan:hover {
  opacity: 0.9;
}
</style>
