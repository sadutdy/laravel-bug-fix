
<style>
    header.header-nav.menu_style_home_one ul.sign_up_btn {
        margin-right: 29px;
    }
    
    header.header-nav.menu_style_home_one {
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        background: #fff;
    }
    
    header.header-nav.menu_style_home_one .ace-responsive-menu li a {
        color: #000;
        font-family: 'Nunito', sans-serif;
    }
    
    .sign_up_btn .btn {
        color: #000;
    }
    
    header.header-nav.menu_style_home_seven .sign_up_btn .btn:hover,
    .sign_up_btn .btn:hover {
        color: #000;
    }
</style>
<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Login</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> Login </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <!-- Our LogIn Register -->
  <section class="our-log bgc-fa">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 offset-lg-3">
                        <div class="login_form inner_page">
                        @include('inc.flash_msg')
                        <?php echo csrf_field();die; ?>
<form method="POST" action="{{ route('login') }}">
    @csrf
                                <div class="heading">
                                    <h3 class="text-center">Login to your account</h3>
                                    <p class="text-center">Don't have an account? <a class="text-thm" href="/register">Sign Up!</a></p>
                                </div>
                                <div class="form-group">
                                    <!-- <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email Address"> -->
                                    <input id="email" type="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <!-- <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password"> -->
                                    <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

@if ($errors->has('password'))
    <span class="invalid-feedback">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                               
                                    <!-- <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }} -->
                                           
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                    <label class="custom-control-label" for="exampleCheck3">Remember me</label>



                                        <a class="btn btn-link tdu btn-fpswd float-right" href="{{ route('forgot_password') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>

                                    <!-- <a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a> -->
                                </div>

                                <button type="submit" class="btn btn-primary btn-log btn-block btn-thm2">
                                            {{ __('Login') }}
                                        </button>

                                <!-- <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button> -->
                                <!-- <div class="divide">
                                    <span class="lf_divider">Or</span>
                                    <hr>
                                </div> -->
                                <!-- <div class="row mt40">
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                    </div>
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-8">

                            @include('inc.flash_msg')

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <div class="form-group">
                                  
                                        <input id="email" type="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                               

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        <a class="btn btn-link" href="{{ route('forgot_password') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>

                        </div>

                      <div class="col-md-4">

                            <div class="social-login-wrap mb-4 text-center">
                                @if(get_option('social_login.facebook.enable'))
                                    <a href="{{ route('facebook_redirect') }}" class="social-login-item btn-facebook">
                                        <i class="la la-facebook"></i> Facebook
                                    </a>
                                @endif

                                @if(get_option('social_login.google.enable'))
                                    <a href="{{ route('google_redirect') }}" class="social-login-item btn-google">
                                        <i class="la la-google"></i> Google
                                    </a>
                                @endif

                                @if(get_option('social_login.twitter.enable'))
                                    <a href="{{ route('twitter_redirect') }}" class="social-login-item btn-twitter">
                                        <span class="hidden-xs"><i class="la la-twitter"></i> Twitter</span>
                                    </a>
                                @endif

                                @if(get_option('social_login.linkedin.enable'))

                                    @if(get_option('social_login.twitter.enable'))
                                        <a href="{{ route('linkedin_redirect') }}" class="social-login-item btn-linkedin">
                                            <span class="hidden-xs"><i class="la la-linkedin-square"></i> LinkedIn</span>
                                        </a>
                                    @endif
                                @endif

                            </div>

                        </div> 

                    </div>

                </div>
            </div>
        </div>
    </div>


    @if(config('app.is_demo'))
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="demo-credential-box-wrapper">
                    <h4 class="my-4">Demo Login Credential:</h4>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Admin</strong>
                                </div>
                                <div class="card-body">
                                    <p class="m-0">E-Mail: <code>admin@demo.com</code></p>
                                    <p class="m-0">Password: <code>123456</code></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Instructor</strong>
                                </div>
                                <div class="card-body">
                                    <p class="m-0">E-Mail: <code>instructor@demo.com</code></p>
                                    <p class="m-0">Password: <code>123456</code></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Student</strong>
                                </div>
                                <div class="card-body">
                                    <p class="m-0">E-Mail: <code>student@demo.com</code></p>
                                    <p class="m-0">Password: <code>123456</code></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div> -->
