<!-- Settings Header -->
<div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
  <h4 class="fw-bold text-gradient">⚙️ Settings</h4>
  <p class="text-muted-light">Manage your account and application preferences here.</p>
</div>

<!-- Settings Section -->
<section class="px-3 mb-5">
  <div class="card-glass p-4">
    <h5 class="mb-3 fw-bold text-gradient">Profile Settings</h5>
    <form>
      <div class="mb-3">
        <label class="form-label">Admin Name</label>
        <input type="text" class="form-control bg-dark text-white border-0" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control bg-dark text-white border-0" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control bg-dark text-white border-0" placeholder="Enter new password">
      </div>
      <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Save Changes</button>
    </form>
  </div>

  <div class="card-glass p-4 mt-4">
    <h5 class="mb-3 fw-bold text-gradient">Application Preferences</h5>
    <form>
      <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="darkModeSwitch" checked>
        <label class="form-check-label" for="darkModeSwitch">Enable Dark Mode</label>
      </div>
      <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="notificationsSwitch" checked>
        <label class="form-check-label" for="notificationsSwitch">Enable Notifications</label>
      </div>
      <button type="submit" class="btn btn-success"><i class="bi bi-check2-circle me-1"></i> Apply</button>
    </form>
  </div>
</section>

<!-- Styles -->
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
