<?php
// Make sure user is logged in as admin
?>

<div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
  <h4 class="fw-bold text-gradient">🛠 Admin Services</h4>
  <p class="text-muted-light">Manage your website’s services here.</p>
</div>

<div class="container my-5">
  <!-- Services Table -->
  <div class="card-glass p-4">
    <h4 class="mb-3 text-gradient">🌟 Services List</h4>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0">
        <thead class="table-gradient text-white">
          <tr>
            <th>Icon</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="servicesTableBody"></tbody>
      </table>
    </div>
    <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#editServiceModal" id="addServiceBtn">
      <i class="bi bi-plus-lg"></i> Add Service
    </button>
  </div>

  <!-- Live Preview -->
  <div class="card-glass p-4 mt-5">
    <h4 class="text-gradient mb-3">Live Preview</h4>
    <div class="services-grid" id="publicServicesPreview"></div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editServiceModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content card-glass">
      <div class="modal-header table-gradient text-white">
        <h5 class="modal-title fw-bold">✏️ Edit Service</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form id="editServiceForm">
        <div class="modal-body">
          <input type="hidden" id="services_id" name="services_id">

          <div class="mb-3">
            <label class="form-label fw-bold">Icon (Font Awesome)</label>
            <input type="text" class="form-control" id="services_icon" name="services_icon" placeholder="e.g., fas fa-shower">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Title</label>
            <input type="text" class="form-control" id="services_title" name="services_title">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Subtitle</label>
            <input type="text" class="form-control" id="services_subtitle" name="services_subtitle">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Description</label>
            <textarea class="form-control" rows="3" id="services_description" name="services_description"></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">List Items (comma separated)</label>
            <input type="text" class="form-control" id="services_list_items" name="services_list_items">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Status</label>
            <select class="form-control" id="services_status" name="services_status">
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
            </select>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Save Service</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/services.js"></script>



<!-- 🎨 Styles -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
  font-family: 'Quicksand', sans-serif;
  background: linear-gradient(135deg, #0a192f, #001f54);
  color: #fff;
  min-height: 100vh;
  padding-top: 70px;
}

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

.text-gradient {
  background: linear-gradient(to right, #38bdf8, #0ea5e9, #1d4ed8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.table-gradient {
  background: linear-gradient(to right, #0ea5e9, #1d4ed8);
}

.text-muted-light {
  color: #9ca3af;
}

.form-control,
.form-select {
  border-radius: 10px;
  padding: 10px;
}

.form-control:focus,
.form-select:focus {
  box-shadow: 0 0 8px rgba(14, 165, 233, 0.6);
  border: 1px solid #0ea5e9;
}

.btn-success {
  background: linear-gradient(to right, #10b981, #059669);
  border: none;
  font-weight: 600;
}

.btn-primary {
  background: linear-gradient(to right, #0ea5e9, #1d4ed8);
  border: none;
  font-weight: 600;
}

.btn-primary:hover,
.btn-success:hover {
  opacity: 0.9;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 2.5rem;
}

.service-card {
  background: rgba(255, 255, 255, 0.9);
  border-radius: 16px;
  padding: 2.5rem 2rem;
  text-align: center;
  color: #000;
  transition: all 0.4s ease;
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.service-card:hover {
  transform: translateY(-15px) scale(1.03);
  box-shadow: 0 15px 35px rgba(56,189,248,0.4);
}

.service-card i {
  font-size: 3.2rem;
  color: #0ea5e9;
  margin-bottom: 1rem;
  transition: transform 0.4s ease;
}

.service-card:hover i {
  transform: rotate(10deg) scale(1.2);
}

.service-card h2 {
  font-size: 2.2rem;
  margin: 0.5rem 0;
  font-weight: 700;
  color: #000;
}

.service-card p {
  font-size: 1.1rem;
  color: #333;
  margin-bottom: 1.2rem;
}

.service-card ul {
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 1rem;
  color: #222;
}

.service-card ul li {
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.service-card ul li::before {
  content: "✔";
  color: #0ea5e9;
  font-weight: bold;
}
</style>
