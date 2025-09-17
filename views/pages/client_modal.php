<!-- client_modal.php -->

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&display=swap" rel="stylesheet">

<style>
    /* Modal Container */
    .modal {
        display: none;
        position: fixed;
        z-index: 2000;
        inset: 0;
        background: rgba(0, 0, 0, 0.85);
        justify-content: center;
        align-items: center;
        font-family: 'Quicksand', sans-serif;
    }

    /* Modal Content */
    .modal-content {
        background: #121212;
        border: 1px solid #0ff;
        padding: 35px 30px;
        border-radius: 14px;
        max-width: 420px; /* Fixed width, not full */
        width: 90%;
        position: relative;
        animation: fadeInUp 0.4s ease;
        box-shadow: 0 0 20px rgba(0, 255, 255, 0.4);
        color: #f2f2f2;
    }

    @keyframes fadeInUp {
        from { transform: translateY(30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    /* Close Button */
    .close {
        position: absolute;
        top: 12px;
        right: 16px;
        font-size: 1.5rem;
        cursor: pointer;
        color: #0ff;
        transition: 0.3s;
    }
    .close:hover {
        color: #00c9c9;
        transform: scale(1.2);
    }

    /* Title */
    .modal-content h2 {
        text-align: center;
        font-size: 1.6rem;
        color: #0ff;
        margin-bottom: 10px;
    }

    /* Info Text */
    .modal-content p {
        font-size: 0.9rem;
        text-align: center;
        margin-bottom: 20px;
        color: #bbb;
    }

    /* Floating Labels */
    .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .form-group input {
        width: 100%;
        padding: 14px 12px;
        border: 1px solid #2a2a2a;
        border-radius: 8px;
        outline: none;
        font-size: 0.95rem;
        background: #1b1b1b;
        color: #fff;
        transition: 0.3s;
    }

    .form-group input:focus {
        border-color: #0ff;
        box-shadow: 0 0 8px #0ff;
    }

    .form-group label {
        position: absolute;
        top: 50%;
        left: 12px;
        transform: translateY(-50%);
        font-size: 0.9rem;
        color: #888;
        pointer-events: none;
        transition: 0.3s ease;
        background: #121212;
        padding: 0 5px;
    }

    .form-group input:focus + label,
    .form-group input:not(:placeholder-shown) + label {
        top: -8px;
        left: 10px;
        font-size: 0.75rem;
        color: #0ff;
    }

    /* Buttons */
    .btn-submit {
        width: 100%;
        padding: 12px;
        background: #0ff;
        color: #000;
        font-weight: bold;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
    }
    .btn-submit:hover {
        background: #00c9c9;
        transform: scale(1.03);
    }

    /* Links */
    .register-link {
        display: block;
        text-align: center;
        margin-top: 12px;
        font-size: 0.9rem;
        color: #0ff;
        cursor: pointer;
        transition: 0.3s;
    }
    .register-link:hover {
        text-decoration: underline;
        color: #00c9c9;
    }

    /* Extra Card Style */
    .cardclient {
        background: #1f1f1f;
        border-left: 3px solid #0ff;
        border-radius: 10px;
        padding: 10px;
        font-size: 0.85rem;
        margin-bottom: 12px;
        color: #ccc;
    }
</style>

<!-- Modal -->
<div class="modal" id="clientModal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Welcome Back</h2>
        <p>Only registered users can book a service. Please log in or create an account.</p>

        <div id="message"></div>

        <!-- Login Form -->
        <form action="../controller/authenticate.php?function=client_login" method="POST" autocomplete="off">
            <div class="form-group">
                <input type="email" id="clientEmail" name="clientEmail" placeholder=" " required>
                <label for="clientEmail">Email</label>
            </div>
            <div class="form-group">
                <input type="password" id="clientPassword" name="clientPassword" placeholder=" " required>
                <label for="clientPassword">Password</label>
            </div>
            <button type="submit" class="btn-submit" id="clientLoginBtn">Login</button>
            <span class="register-link" id="showRegister">New? Register here</span>
        </form>

        <!-- Register Form -->
        <form id="clientRegisterModal" style="display: none;">
            <div class="form-group">
                <input type="text" id="username" placeholder=" " required>
                <label for="username">Username</label>
            </div>
            <div class="form-group">
                <input type="email" id="email" placeholder=" " required>
                <label for="email">Email</label>
            </div>
            <div class="form-group">
                <input type="password" id="passwordReg" placeholder=" " required>
                <label for="passwordReg">Password</label>
            </div>
            <div class="form-group">
                <input type="password" id="conPasswordReg" placeholder=" " required>
                <label for="conPasswordReg">Confirm Password</label>
            </div>
            <button type="submit" class="btn-submit">Register</button>
            <span class="register-link" id="backToLogin">Already have an account? Login</span>
        </form>
    </div>
</div>

<script src="../../CarWash_Management_System/assets/js/client_login.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const modal = document.getElementById("clientModal");
        const openModalBtns = document.querySelectorAll(".openModal");
        const closeModalBtn = document.getElementById("closeModal");

        const loginForm = document.getElementById("clientLoginModal");
        const registerForm = document.getElementById("clientRegisterModal");
        const showRegister = document.getElementById("showRegister");
        const backToLogin = document.getElementById("backToLogin");

        // Open modal
        openModalBtns.forEach(btn => {
            btn.addEventListener("click", () => modal.style.display = "flex");
        });

        // Close modal
        closeModalBtn.addEventListener("click", () => modal.style.display = "none");

        // Close when clicking outside
        window.addEventListener("click", (e) => {
            if (e.target === modal) modal.style.display = "none";
        });

        // Switch to Register
        showRegister.addEventListener("click", () => {
            loginForm.style.display = "none";
            registerForm.style.display = "block";
        });

        // Switch to Login
        backToLogin.addEventListener("click", () => {
            registerForm.style.display = "none";
            loginForm.style.display = "block";
        });
    });
</script>
