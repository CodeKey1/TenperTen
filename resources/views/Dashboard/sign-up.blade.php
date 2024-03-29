<!doctype html>
<html class="no-js " lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

  <title>:: Aero Bootstrap4 Admin :: Sign Up</title>
  <!-- Favicon-->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- Custom Css -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

  <div class="authentication">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <form class="card auth_form" method="POST" action="{{ route('register') }}">
              @csrf
            <div class="header">
              <img class="logo" src="assets/images/logo.svg" alt="">
              <h5>Sign Up</h5>
              <span>Register a new membership</span>
            </div>
            <div class="body">
              <div class="input-group mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name ">
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                  <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                </div>
              </div>
              <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                  <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                </div>
              </div>
              <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your Paswword">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror <div class="input-group-append">
                  <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                </div>
              </div>
              <div class="input-group mb-3">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Paswword">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                </div>
              </div>
              <div class="checkbox">
                <input id="remember_me" type="checkbox">
                <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of usage</a></label>
              </div>
              <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
              </button>
              
            </div>
          </form>
          <div class="copyright text-center">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>,
            <span><a href="templatespoint.net">Templates Point</a></span>
          </div>
        </div>
        <div class="col-lg-8 col-sm-12">
          <div class="card">
            <img src="assets/images/signup.svg" alt="Sign Up" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jquery Core Js -->
  <script src="assets/bundles/libscripts.bundle.js"></script>
  <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
</body>


</html>