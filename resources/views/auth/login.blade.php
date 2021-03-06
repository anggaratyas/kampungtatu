<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Kampoeng Tatu App</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
        
  <link rel="icon" href="{{url('/assets/favicon.ico')}}" type="image/x-icon" />
  <!-- END META SECTION -->
        
  <!-- CSS INCLUDE -->        
  <link rel="stylesheet" type="text/css" id="theme" href="{{url('/assets/css/theme-default.css')}}"/>
  <!-- EOF CSS INCLUDE -->                                    


</head>
<body>

<div class="login-container">
        
        <div class="login-box animated fadeInDown">
            <div class="login-logo"></div>
            <div class="login-body">
                <div class="login-title"><strong>Welcome</strong>, Please login</div>
                <form action="{{ route('login') }}" class="form-horizontal" method="post">
                @csrf
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="name" type="text" class="form-control" placeholder="Username"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="password" type="password" class="form-control" placeholder="Password"/>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="form-group">
                    <!-- <div class="col-md-6">
                        <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                    </div> -->
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-block">
                        {{ __('Login') }}
                        </button>
                    </div>
                </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="pull-left">
                    &copy; 2019 BUMDES Jaya Makmur | METATU
                </div>
                <div class="pull-right">
                    <a href="#">About</a> |
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
