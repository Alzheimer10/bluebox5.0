<!doctype html>
<html class="no-js" ang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> {{ config('app.name', 'Laravel') }} </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <!-- Theme initialization -->
        <link rel="stylesheet" id="theme-style" href="{{ asset('css/app-blue.css') }}">
    </head>
    <body>
        <div class="container h-100">
          <div class="row h-100 justify-content-center align-items-center">
            <div class="auth-box">
                <!-- header -->
                <header class="auth-header">
                    <img src="{{ asset('img/bluebox/bluebox-logo-white.svg') }} " alt="logo-bluebox" height="60px">
                </header>

                        <!-- form -->
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}" AUTOCOMPLETE="OFF">
                            {{ csrf_field() }}

                            <!-- email -->
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control underlined" name="email" id="email"  placeholder="Your email" AUTOCOMPLETE="OFF">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!-- email-end -->
                            
                            <!-- password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required autocomplete="off" autocorrect="off" auto="" capitalize="off" spellcheck="false" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!-- password-end -->

                            
                            <!-- remember -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span  for="remember">Remember me</span>
                                </label>
                                <a href="reset.html" class="forgot-btn pull-right">Forgot password?</a>
                            </div>
                            <!-- remember-end -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                        </form>
                        <!-- form-end --> 
                    </div>
                </div>
          </div>
        </div>

    </body>
</html>

<style>
    body{
        background: #3A4651
    }
    .auth-box{
        padding: 50px;
        background: #ffffff0d;
    }
    input {
      background: transparent !important;
      color: white !important;
      padding-left: 5px;
    }
    label{
        font-size: .9rem;
    }
    header{
        text-align: center;
        border-bottom: 1px solid white;
        margin-bottom: 10px;
        padding-bottom: 10px;
    }
    b, strong{
        color: red;
        font-size: .8rem;
        font-weight: 500;}
    label, .control-label{
        color: white;
    }
    input:valid ~ label {
      top: 0;
      font: 700 22px Roboto;
      color: rgba(255, 255, 255, 0.5);
    }
    input:focus {
      outline: none;
    }
    input:focus ~ label {
      top: 0;
      font: 700 22px Roboto;
      color: #2196f3;
    }
    input:focus ~ .bar:before {
      transform: translateX(0);
    }
    input:-webkit-autofill {
      -webkit-box-shadow: 0 0 0px 1000px #444F5A inset !important;
      -webkit-text-fill-color: white !important;
    }
    .bar {
      background: rgba(255, 255, 255, 0.5);
      content: '';
      width: 550px;
      height: 3.6666666667px;
      transition: .3s ease;
      position: relative;
    }
    .bar:before {
      content: '';
      position: absolute;
      width: 100%;
      height: 150%;
      background: #2196f3;
      transform: translateX(-100%);
    }
    ::selection {
      background: rgba(33, 150, 243, 0.3);
    }

</style>