<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #f4f7fb;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 950px;
      margin: 40px auto;
      background: #fff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 26px;
      font-weight: 700;
      color: #1e293b;
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }

    label {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 6px;
      display: block;
      color: #334155;
    }

    input, select {
      width: 100%;
      padding: 12px 14px;
      border-radius: 10px;
      border: 1px solid #cbd5e1;
      font-size: 14px;
      box-sizing: border-box;
      background: #fff;
      transition: border 0.2s, box-shadow 0.2s;
    }

    input:focus, select:focus {
      outline: none;
      border-color: #0072ff;
      box-shadow: 0 0 0 3px rgba(0,114,255,0.15);
    }

    .form-actions {
      margin-top: 30px;
      display: flex;
      justify-content: flex-end;
      gap: 14px;
    }

    .btn {
      padding: 12px 20px;
      font-size: 14px;
      font-weight: 600;
      border-radius: 10px;
      border: none;
      cursor: pointer;
      transition: all 0.25s ease;
    }

    .btn-cancel {
      background: #f3f4f6;
      color: #374151;
    }
    .btn-cancel:hover {
      background: #e2e8f0;
    }

    .btn-save {
      background: linear-gradient(90deg,#00c6ff,#0072ff);
      color: white;
      box-shadow: 0 3px 10px rgba(0,114,255,0.25);
    }
    .btn-save:hover {
      opacity: 0.9;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Edit Account</h1>
    <form id="editAccountForm">
      <div class="form-grid">
        <div>
          <label>Username</label>
          <input type="text" name="username" placeholder="Enter username" required>
        </div>
        <div>
          <label>Email</label>
          <input type="email" name="email" placeholder="Enter email" required>
        </div>
        <div>
          <label>Last Name</label>
          <input type="text" name="lname" placeholder="Enter last name" required>
        </div>
        <div>
          <label>First Name</label>
          <input type="text" name="fname" placeholder="Enter first name" required>
        </div>
        <div>
          <label>Middle Name</label>
          <input type="text" name="mname" placeholder="Enter middle name">
        </div>
        <div>
          <label>Contact</label>
          <input type="text" name="contact" placeholder="09XXXXXXXXX" required>
        </div>
        <div>
          <label>Province</label>
          <select name="province" id="provinceSelect">
            <option>Select Province</option>
            <option>Cebu</option>
            <option>Bohol</option>
            <option>Davao del Sur</option>
          </select>
        </div>
        <div>
          <label>Municipality</label>
          <select name="municipality" id="municipalitySelect">
            <option>Select Municipality</option>
          </select>
        </div>
        <div>
          <label>Barangay</label>
          <select name="barangay" id="barangaySelect">
            <option>Select Barangay</option>
          </select>
        </div>
        <div>
          <label>Street</label>
          <input type="text" name="street" placeholder="Enter street">
        </div>
      </div>

      <div class="form-actions">
        <button type="button" class="btn btn-cancel" onclick="window.location.href='dashboard.html'">Cancel</button>
        <button type="submit" class="btn btn-save">Save Changes</button>
      </div>
    </form>
  </div>

  <script>
    // Example dropdown data
    const municipalities = {
      "Cebu": ["Cebu City", "Mandaue", "Lapu-Lapu"],
      "Bohol": ["Tagbilaran", "Panglao", "Tubigon"],
      "Davao del Sur": ["Digos", "Santa Cruz", "Bansalan"]
    };

    const barangays = {
      "Cebu City": ["Lahug", "Mabolo", "Guadalupe"],
      "Mandaue": ["Centro", "Banilad", "Tipolo"],
      "Lapu-Lapu": ["Pusok", "Basak", "Gun-ob"],
      "Tagbilaran": ["Cogon", "Bool", "Dao"]
    };

    document.getElementById("provinceSelect").addEventListener("change", function() {
      let muniSelect = document.getElementById("municipalitySelect");
      muniSelect.innerHTML = "<option>Select Municipality</option>";
      if (municipalities[this.value]) {
        municipalities[this.value].forEach(m => {
          muniSelect.innerHTML += `<option>${m}</option>`;
        });
      }
    });

    document.getElementById("municipalitySelect").addEventListener("change", function() {
      let brgySelect = document.getElementById("barangaySelect");
      brgySelect.innerHTML = "<option>Select Barangay</option>";
      if (barangays[this.value]) {
        barangays[this.value].forEach(b => {
          brgySelect.innerHTML += `<option>${b}</option>`;
        });
      }
    });

    // Form submit (SweetAlert success message)
    document.getElementById("editAccountForm").addEventListener("submit", function(e) {
      e.preventDefault();

      Swal.fire({
        icon: 'success',
        title: 'Saved Successfully!',
        text: 'Your account details have been updated.',
        showConfirmButton: false,
        timer: 2000
      });
    });
  </script>