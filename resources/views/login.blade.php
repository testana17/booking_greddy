<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking Greddy - Login</title>
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100%;
            padding: 20px;
        }
        .card {
            /* width: 100%; */
            /* max-width: 450px; */
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="col-lg-10 col-md-12">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                        </div>

                        <!-- Tambahkan kode ini untuk menampilkan pesan error -->
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Gagal!</strong> {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form class="user" action="{{ route('login_post') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control form-control-user"
                                    aria-describedby="emailHelp" placeholder="Enter Email Address...">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control form-control-user"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>
</body>
</html>