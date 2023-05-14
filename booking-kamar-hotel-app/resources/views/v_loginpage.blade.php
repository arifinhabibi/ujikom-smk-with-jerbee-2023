<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/cashier/css/animate.css">
    
    <link rel="stylesheet" href="./assets/cashier/css/style.css">
</head>
<body class="bg-primary">
    
    <main class="content py-4">
        <div class="container">
            <h1 class="my-5 text-center text-white">LogoCompany</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Login</h5>
                                @if ($error = Session::get('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                  </div>
                                @endif
                                <form action="{{ route('login-processing') }}" method="POST">
                                    @csrf
                                <div class="form-group mb-4">
                                    <label for="username" class="mb-2">Username</label>
                                    <input type="text" name="username" class="form-control" autofocus>
                                </div>
                                    <div class="form-group mb-4">
                                        <label for="username" class="mb-2">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>

  <script src="./assets/cashier/js/bootstrap.min.js"></script>
  <script src="./assets/cashier/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
</body>
</html>