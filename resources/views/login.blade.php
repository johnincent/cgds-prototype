<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CGDS | Login</title>
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/4/44/Saint_Mary%27s_University_logo.png" type="image/x-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles [Bootstrap] -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
      margin: 0px;
      padding: 0px;
    }

    .logo-image {
      width: 280px;
      height: 280px;
      margin-top: 230px;
    }

    .box {
      margin-top: 220px;
    }

    .sigUpLink {
      text-decoration: none;
    }
  </style>
</head>

<body class="antialiased">

  <div class="container bg-white vh-100">
    <div class="row">
      <div class="col-8 d-flex justify-content-center">
        <img class="logo-image" src="https://upload.wikimedia.org/wikipedia/en/4/44/Saint_Mary%27s_University_logo.png" alt="smu">
      </div>
      <div class="col-4 bg-white my-auto">
        <form action="">
          <div class="box container bg-white vh-100">
            <form>
              <label class="fs-1" for=""><b>CGDS </b> | Login</label>
              <div class="form-floating mt-3 mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-group form-check mt-2">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
              </div>
              <a href="{{ URL::to('dashboard') }}"><button type="button" class="btn btn-primary float-end">Login</button></a>
            </form>
            <br><br><br><br>
            <div class="d-">
              <label class="position-relative top-50 start-50 translate-middle" for="">Don't have an account? <a href="{{ URL::to('dashboard') }}" class="sigUpLink">Sign Up</a></label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script type="javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"></script>
</body>

</html>