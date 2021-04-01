<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>{{ config('app.name') }}</title>
  <link href="{{asset('/')}}vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{asset('/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{asset('/')}}css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    @error('email')
                    <div class="alert alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                    @error('password')
                    <div class="alert alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                    <div class="form-group">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="Confirm Password">
                    </div>
                    <hr>
                    <div class="form-group">
                      <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                      <a href="/" class="btn btn-sm btn-secondary btn-block mt-3"><i class="fas fa-home"></i> Home</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="{{asset('/')}}vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/')}}vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{asset('/')}}js/ruang-admin.min.js"></script>

</body>

</html>
