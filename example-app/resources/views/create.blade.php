<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create New User</title>

  <!-- Bootstrap 5 CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
 
  <div class="card shadow" style="width: 380px;">
    <div class="card-body p-4">
      <h4 class="text-center mb-4">Create New User</h4>

      <form method="POST" action=" {{route('users.store') }}" novalidate>
       @csrf 
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
        </div>

        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>

        <div class="mb-4">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" name="Password_Confirmation" placeholder="Confirm password">
        </div>

        <button type="submit" class="btn btn-primary w-100">
          Create User
        </button>
      </form>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
