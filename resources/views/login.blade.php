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
              <label class="fs-1" for=""><b>INIBA KO NA </b> | Login</label>
              <div class="form-group mb-2 mt-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
              </div>

            </form>

            <a href="{{ URL::to('dashboard') }}"><button type="button" class="btn btn-primary float-end">Login</button></a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script type="javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"></script>
</body>

</html>