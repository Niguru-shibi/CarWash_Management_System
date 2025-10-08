<!-- Header (same style as Branch Management) -->
<div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
  <h4 class="fw-bold text-gradient">ℹ️ About Section Management</h4>
  <p class="text-muted-light">Manage and update your website’s About Section here.</p>
</div>

<div class="container my-4">
  <!-- About Section Table -->
  <div class="card-glass p-4">
    <h4 class="mb-3 text-gradient">🌐 About Section Information</h4>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0">
        <thead class="table-gradient text-white">
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Mission</th>
            <th>Vision</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>About Urban Shine</td>
            <td>Urban Shine Car Wash provides professional, eco-friendly, and affordable car wash services with a smile.</td>
            <td>To deliver convenient and top-quality car wash services for every customer.</td>
            <td>To be the most trusted car wash service in the community.</td>
            <td>
              <button class="btn btn-cyan btn-sm" data-bs-toggle="modal" data-bs-target="#editAboutModal">
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
<div class="modal fade" id="editAboutModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content card-glass">
      <div class="modal-header table-gradient text-white">
        <h5 class="modal-title fw-bold">✏️ Edit About Section</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-bold">About Title</label>
            <input type="text" class="form-control" value="About Urban Shine">
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Description</label>
            <textarea class="form-control" rows="3">Urban Shine Car Wash provides professional, eco-friendly, and affordable car wash services with a smile.</textarea>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Mission</label>
            <textarea class="form-control" rows="2">To deliver convenient and top-quality car wash services for every customer.</textarea>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Vision</label>
            <textarea class="form-control" rows="2">To be the most trusted car wash service in the community.</textarea>
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

<!-- ✅ Styles -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
  font-family: 'Quicksand', sans-serif;
  background: linear-gradient(135deg, #0a192f, #001f54);
  color: #fff;
  min-height: 100vh;
  padding-top: 70px;
}

/* Reusable Glass Card */
.card-glass {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(14, 165, 233, 0.2);
  backdrop-filter: blur(15px);
  color: #fff;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
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

/* Muted Text */
.text-muted-light {
  color: #9ca3af;
}

/* Table Gradient */
.table-gradient {
  background: linear-gradient(to right, #0ea5e9, #1d4ed8);
}
.table-dark {
  color: #fff;
}

/* Buttons */
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
.btn-success {
  background: linear-gradient(to right, #10b981, #059669);
  border: none;
  font-weight: 600;
}
.btn-success:hover {
  opacity: 0.9;
}
</style>
