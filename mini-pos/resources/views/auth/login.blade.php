<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
</head>

<style>
    body  {
      background-image: url("{{asset('template')}}/img/bg.png");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      font-family: 'Poppins';
    }
  </style>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <span class="brand-text font-weight-light">Mini<b>POS</b> KP</span>
  </div>
  <!-- /.login-logo -->
  <div class="card" >
    <div class="card-body" style="border-radius: 60%">
      <p class="login-box-msg">Login Admin</p>
      <form action="{{route('login')}}" method="post">
        @csrf

        <div class="input-group mb-3">
          <input type="login" value="{{ old('login') }}" name="login" id="login" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        @error('password')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
        @enderror    
        @error('login')
          <div class="text-danger mt-2">
              {{$message}}
          </div>
        @enderror 
           
        <br>
        <div class="row">
          <div class="col-8">
            <div class="icheck-dark">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ingat saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-dark btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.min.js"></script>
</body>
</html>