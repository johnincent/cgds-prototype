<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CGDS | Sign Up</title>
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
            margin-top: 50px;
        }

        .sigUpLink {
            text-decoration: none;
        }
    </style>
</head>

<body class="antialiased">

    <div class="container bg-white vh-100">
        <div class="row">
            <div class="col-7 d-flex justify-content-center">
                <img class="logo-image" src="https://upload.wikimedia.org/wikipedia/en/4/44/Saint_Mary%27s_University_logo.png" alt="smu">
            </div>
            <div class="col-5 bg-white my-auto">
                <form action="">
                    <div class="box container bg-white vh-100">
                        <form>
                            <label class="fs-1" for=""><b>CGDS </b> | Sign Up</label>
                            <div class="form-floating mt-3 mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="row">
                                <div class="col-6 ">
                                    <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                                        <label for="floatingInput">First Name</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                                        <label for="floatingInput">Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mt-3 mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="xxxxxxxx">
                                <label for="floatingInput">ID Number</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select" id="data1" name="datalist">
                                    <option> --- </option>
                                    <option> School of Engineering, Architecture, and Information Technology </option>
                                    <option> School of Accountancy and Business </option>
                                    <option> School of Health and Natural Sciences </option>
                                    <option> School of Teacher Education and Humanities </option>
                                    <option> School of Graduate Studies </option>
                                    <option> Collage of Law </option>
                                </select>
                                <label for="data1" class="form-label"> Select School: </label>
                            </div>
                            <div class="form-floating mt-3 mb-3">
                                <input type="password" class="form-control" id="floatingPassword1" placeholder="Password">
                                <label for="floatingPassword1">Password</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword2" placeholder="Confirm Password">
                                <label for="floatingPassword2">Confirm Password</label>
                            </div>
                            <div class="mt-2">
                                <a href="{{ URL::to('dashboard') }}"><button type="button" class="btn btn-primary float-end">Sign Up</button></a>
                            </div>

                        </form>
                        <br><br><br><br>
                        <div class="d-">
                            <label class="position-relative top-50 start-50 translate-middle" for="">Already has an account? <a href="{{ URL::to('dashboard') }}" class="sigUpLink">Login</a></label>
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