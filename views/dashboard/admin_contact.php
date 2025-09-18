<!-- Banner -->
<div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
  <h4 class="fw-bold text-gradient">💬 Admin Contacts</h4>
  <p class="text-muted-light">Manage and reply to client inquiries efficiently.</p>
</div>

<div class="px-3 mb-5">
  <!-- Messages Table Card -->
  <div class="card-glass p-4">
    <h5 class="fw-bold text-gradient mb-3 text-center">📨 Client Messages</h5>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0" id="inquiryTable">
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
          <!-- Populated dynamically via AJAX -->
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Reply Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content card-glass">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Reply to Client</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="replyForm">
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
            <textarea class="form-control" rows="4" id="replyMessage" placeholder="Type your response here..." required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Send Reply</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function loadInquiries() {
    $.ajax({
        url: '../../CarWash_Management_System/controller/contact.php?action=getcontact',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            let tableBody = "";
            let n = 1;

            if (!response || response.length === 0) {
                tableBody = `<tr><td colspan="6" class="text-center">No data found</td></tr>`;
            } else {
                response.forEach(function(inq) {
                    tableBody += `
                        <tr>
                          <td>${n++}</td>
                          <td>${inq.contact_name}</td>
                          <td>${inq.contact_email}</td>
                          <td>${inq.contact_message}</td>
                          <td>${inq.contact_date}</td>
                          <td>
                            <button class="btn btn-sm btn-primary replyBtn" 
                                    data-name="${inq.contact_name}" 
                                    data-email="${inq.contact_email}">Reply</button>
                            <button class="btn btn-sm btn-danger deleteBtn" 
                                    data-id="${inq.id}">Delete</button>
                          </td>
                        </tr>
                    `;
                });
            }

            $("#inquiryTable tbody").html(tableBody);
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error:", error);
            $("#inquiryTable tbody").html(`<tr><td colspan="6" class="text-center text-danger">Failed to load data</td></tr>`);
        }
    });
}

// Load immediately
loadInquiries();
setInterval(loadInquiries, 5000);

$(document).on('click', '.replyBtn', function() {
    $('#clientName').val($(this).data('name'));
    $('#clientEmail').val($(this).data('email'));
    $('#replyModal').modal('show');
});

$(document).on('click', '.deleteBtn', function() {
    const id = $(this).data('id');
    if (confirm("Are you sure you want to delete this message?")) {
        $.post('../../CarWash_Management_System/controller/contact.php', { deleteId: id }, function(res) {
            alert(res.message);
            loadInquiries();
        }, 'json');
    }
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

/* Glass Cards */
.card-glass {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(14, 165, 233, 0.2);
  backdrop-filter: blur(15px);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  color: #fff;
  margin-bottom: 20px;
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
</style>
