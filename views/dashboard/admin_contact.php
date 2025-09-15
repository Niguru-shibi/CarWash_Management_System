
<!-- Banner -->
<div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
  <h4 class="fw-bold text-gradient">📨 Admin Contacts</h4>
  <p class="text-muted-light">Manage and reply to client inquiries efficiently.</p>
</div>

<div class="px-3 mb-5">
  <!-- Contact Messages Table -->
  <div class="card-glass p-4">
    <h5 class="fw-bold text-gradient mb-3 text-center">💬 Client Messages</h5>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0">
        <thead class="table-gradient text-white">
          <tr>
            <th>#</th>
            <th>Client Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date Received</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example Messages -->
          <tr>
            <td>1</td>
            <td>Juan Dela Cruz</td>
            <td>juan@email.com</td>
            <td>How much for premium wash?</td>
            <td>2025-09-10</td>
            <td>
              <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#replyModal" 
                      onclick="setReply('Juan Dela Cruz', 'juan@email.com')">Reply</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Maria Santos</td>
            <td>maria@email.com</td>
            <td>Do you offer home service?</td>
            <td>2025-09-09</td>
            <td>
              <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#replyModal" 
                      onclick="setReply('Maria Santos', 'maria@email.com')">Reply</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Reply Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content card-glass">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-gradient">✉️ Reply to Client</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Client Name</label>
            <input type="text" class="form-control" id="clientName" readonly>
          </div>
          <div class="mb-3">
            <label class="form-label">Client Email</label>
            <input type="email" class="form-control" id="clientEmail" readonly>
          </div>
          <div class="mb-3">
            <label class="form-label">Your Reply</label>
            <textarea class="form-control" rows="4" placeholder="Type your response here..." required></textarea>
          </div>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Send Reply</button>
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

  function setReply(name, email) {
    document.getElementById('clientName').value = name;
    document.getElementById('clientEmail').value = email;
  }
</script>
