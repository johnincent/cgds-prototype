<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CGDS | Login</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles [Bootstrap] -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  <div class="row mt-5">
    <div class="col-md-4 offset-md-4">
      <div class="login-form bg-info mt-4 p-4">
        <form action="" method="" class="row g-3">
          <h4><b>CGDS</b> | Login</h4>
          <div class="col-12">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
          </div>
          <div class="col-12">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="rememberMe">
              <label class="form-check-label" for="rememberMe"> Remember me</label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-dark float-end">Login</button>
          </div>
        </form>
        <hr class="mt-4">
        <div class="col-12">
          <p class="text-center mb-0">Have not account yet? <a href="">Signup</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>