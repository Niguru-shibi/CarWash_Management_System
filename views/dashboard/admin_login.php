<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Shine Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      background: linear-gradient(135deg, #0a192f, #001f54);
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Quicksand', sans-serif;
      color: white;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.08);
      padding: 2.5rem;
      border-radius: 20px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(10px);
    }

    .login-container h2 {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 1.8rem;
    }

    .form-control {
      border-radius: 12px;
      padding: 12px;
      font-size: 1rem;
      background-color: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: #fff;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.2);
      border-color: #38bdf8;
      box-shadow: 0 0 8px #38bdf8;
      color: #fff;
    }

    .btn-login {
      width: 100%;
      padding: 12px;
      background: linear-gradient(to right, #0ea5e9, #2563eb);
      border: none;
      border-radius: 30px;
      color: #fff;
      font-weight: bold;
      font-size: 1.1rem;
      margin-top: 1rem;
      transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(14, 165, 233, 0.5);
    }

    .btn-login:hover {
      background: linear-gradient(to right, #2563eb, #0ea5e9);
      transform: translateY(-2px) scale(1.03);
      box-shadow: 0 8px 25px rgba(14, 165, 233, 0.7);
    }

    .form-text {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
      color: #cbd5e1;
    }

    .form-text a {
      color: #38bdf8;
      text-decoration: none;
    }

    .form-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="login-container">
    <h2>Admin Login</h2>
    <form action="../controller/authenticate.php?function=admin_login" method="POST" autocomplete="off">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="adminUsername" placeholder="Enter your username" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="adminPassword" placeholder="Enter your password" required>
      </div>

      <button type="submit" class="btn-login">Login</button>
    <div class="form-text">
      <a href="../route/route.php">Back to Home</a>
    </div>
  </div>

</body>
</html>
