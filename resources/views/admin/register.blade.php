<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center  " >
                        <img class="img-fluid mt-4 mb-10" src="{{asset('assets/img/logo_spices.png') }}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="/register" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" value="{{ old('FirstName') }}" id="FirstName"
                                            placeholder="First Name"  name="FirstName">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="LastName"  name="LastName"
                                            placeholder="Last Name" value="{{ old('LastName') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" 
                                        placeholder="Email Address" value="{{ old('email') }}" >
                                    @error('email')
                                    <div class="invalid-feedback">{{$message}}
                                      </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password">
                                </div>
                                <hr>
                                
                                <button type="submit" class="btn btn-google btn-user btn-block mt-3">
                                    DAFTAR AKUN
                                </button>
                                <a href="index.html" class="btn btn-primary btn-user btn-block">
                                     MASUK
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>