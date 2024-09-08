<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Sign In</title>
</head>
<body class="h-100 bg-white">

<div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
  <div class="w-100" style="max-width: 360px;">
    <img class="d-block mx-auto mb-4" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" height="40">
    <h2 class="text-center mb-4 fw-bold">Sign in to your account</h2>

    <form class="needs-validation" novalidate>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class="invalid-feedback">
          Please enter a valid email address.
        </div>
      </div>

      <div class="mb-3">
        <div class="d-flex justify-content-between align-items-center">
          <label for="password" class="form-label">Password</label>
          <a href="#" class="text-decoration-none text-primary">Forgot password?</a>
        </div>
        <input type="password" class="form-control" id="password" name="password" required>
        <div class="invalid-feedback">
          Please enter your password.
        </div>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </form>

    <p class="text-center mt-4">
      Not a member? <a href="#" class="text-primary">Start a 14 day free trial</a>
    </p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
