@php
    use App\Category;
    use App\Country;
    $categories = Category::whereStep(0)->with('sub_categories')->orderBy('category_name', 'asc')->get();
    $countries = \App\Country::query()->orderBy('name', 'ASC')->get();

@endphp

    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{get_option('enable_rtl')? 'rtl' : 'auto'}}" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=author content=sbusinesslondon />
    <!-- <meta name="google-site-verification" content="2TiG8SPNgS10QQ24t7fMU2f7PiYUzzm9fP9q9cH4q-8" /> -->

    <meta name="CreativeLayers" content="ATFN">
   
     <?php if(isset($title)){ ?>
        <title>{{$title}}</title>
    <?php }else{ ?>
        <title>SBL</title>
    <?php }?>
    <?php if(isset($description)){ ?>
    <meta name=description content="{{$description}}"/>
    <?php } ?>
    <?php if(isset($keywords)){ ?>
    <meta name="keywords" content="{{$keywords}}">
    <?php } ?>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  @if( ! empty($title)) {{ $title }} | {{get_option('site_title')}}  @else {{get_option('site_title')}} @endif </title>

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
    <link href="{{theme_asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{theme_asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" /> -->

@yield('page-css')

<!-- style css -->
    <link rel="stylesheet" href="{{theme_asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{theme_asset('css/style.css')}}">
   
    <link rel="stylesheet" href="{{theme_asset('css/app.css')}}">
    <link rel="stylesheet" href="{{theme_asset('css/responsive.css')}}">
    

    <!-- modernizr css -->
    <!-- <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script> -->

    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">

@yield('page-css')

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

<!-- style css -->
    <link rel="stylesheet" href="{{theme_asset('css1/style.css')}}">
    <link rel="stylesheet" href="{{theme_asset('css1/pageloader.css')}}">

    <!-- modernizr css -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script type="text/javascript">
     
        window.pageData = @json(pageJsonData());
  
    </script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>


    <!-- Bootstrap -->
<script>
 $(window).load(function() {
        // Animate loader off screen
	$(".pageloader").fadeOut("slow");
    });
//paste this code under the head tag or in a separate js file.
	// Wait for window load

    </script>
</head>
<!-- <body class="{{get_option('enable_rtl')? 'rtl' : ''}}"> -->

<div class="wrapper">
<div class="pageloader hidden-xs">
  <div class=thecube>
    <div class="cube c1"></div>
    <div class="cube c2"></div>
    <div class="cube c4"></div>
    <div class="cube c3"></div>
  </div>
</div>
   <!-- Main Header Nav -->
   <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu" style="padding: 0cm;">
            <div class="header_top home2" style="padding: 0 50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ht_left_widget home2 float-left">
                                <ul>
                                    <!-- <li class="list-inline-item">
                                        <div class="logo-widget">
                                            <img class="img-fluid" src="images/header-logo.png" alt="header-logo.png">
                                            <span>EDUMY</span>
                                        </div>
                                    </li> -->
                                    <li class="list-inline-item">
                                        <div class="header_top_lang_widget">
                                            <div class="ht-widget-container">
                                                <div class="vertical-wrapper">
                                                    <h2 class="title-vertical">
                                                        <span class="text-title">Category</span> <i class="fa fa-angle-down show-down" aria-hidden="true"></i>
                                                    </h2>
                                                    <div class="content-vertical">
                                                        <ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
                                                         
                                                         

                                                         @foreach($categories as $category)
                                                            <li>
                                                                <a href="{{route('category_view', $category->slug)}}" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">{{$category->category_name}} <b class="caret"></b></a>
                                                                <div class="dropdown-menu vertical-megamenu" style="width: 600px;">
                                                                    <div class="dropdown-menu-inner">
                                                                        <div class="element-inner">
                                                                            <div class="element-section-wrap">
                                                                                <div class="element-container">
                                                                                    <div class="element-row">
                                                                                        <div class="col-lg-7">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-12">
                                                                                                    <div class="element-wrapper">
                                                                                                        <div class="title-wrapper">
                                                                                                            <div class="element-wrapper-title">Sub Category</div>
                                                                                                        </div>
                                                                                                        <div class="widget-nav-menu">
                                                                                                            <div class="element-list-wrapper wn-menu">

                                                                                                             @if($category->sub_categories->count())
                                                                                                                <ul class="element-menu-list">
                                                                                                                @foreach($category->sub_categories as $subCategory)
                                                                                                                <li><a href="{{route('category_view', $subCategory->slug)}}">{{$subCategory->category_name}}</a></li>
                                                                                                                   
                                                                                                                    @endforeach
                                                                                                                </ul>

                                                                                                                @endif
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="element-warapper-btn">
                                                                                                            <a href="#">
                                                                                                                <div class="element-wrapper-sub-title">See All <i class="flaticon-right-arrow-1"></i></div>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- <div class="col-lg-6">
                                                                                                    <div class="element-wrapper">
                                                                                                        <div class="title-wrapper">
                                                                                                            <div class="element-wrapper-title">Popular</div>
                                                                                                        </div>
                                                                                                        <div class="widget-nav-menu">
                                                                                                            <div class="element-list-wrapper wn-menu">
                                                                                                                <ul class="element-menu-list">
                                                                                                                    <li><a href="#">Color</a></li>
                                                                                                                    <li><a href="#">Digital Painting</a></li>
                                                                                                                    <li><a href="#">Drawing</a></li>
                                                                                                                    <li><a href="#">Illustration</a></li>
                                                                                                                    <li><a href="#">Logo Design</a></li>
                                                                                                                    <li><a href="#">User Experience</a></li>
                                                                                                                    <li><a href="#">Web Design</a></li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="element-warapper-btn">
                                                                                                            <a href="#">
                                                                                                                <div class="element-wrapper-sub-title">See All <i class="flaticon-right-arrow-1"></i></div>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div> -->
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- <div class="col-lg-5 p0">
                                                                                            <div class="element-img-widget-wrapper">
                                                                                                <div class="element-widget-thumb">
                                                                                                    <a href="#"><img class="img-fluid" src="images/resource/1.png" alt="1.png"></a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="ht_search_widget">
                                            <div class="header_search_widget home2">
                                                <form class="form-inline mailchimp_form">
                                                    <input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2" placeholder="Search for the software or skills you want to learn">
                                                    <button type="submit" class="btn btn-primary mb-2"><span class="flaticon-magnifying-glass"></span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ht_right_widget float-right">
                                <ul class="text-right">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-phone-square">&nbsp&nbsp&nbsp+44 20 3637 8765</i></a></li>
                                    <li class="list-inline-item">
                                        <div class="header_top_lang_widget">
                                    
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="padding: 0 50px;">
          
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" src="{{theme_asset('images/header-logo.png')}}" alt="header-logo.png">
                        <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
                    </div>
                    <a href="#" class="navbar_brand float-left dn-smd">
                        <img class="logo1 img-fluid" src="{{theme_asset('images/sbl.png')}}" alt="header-logo.png" style="width: 200px;">
                        <img class="logo2 img-fluid" src="{{theme_asset('images/sbl.png')}}" alt="header-logo2.png" style="width: 200px;">

                        <!-- <object data="https://sbusinesslondon.ac.uk/images/sbl.svg" type="image/svg+xml"> 
                        </object>-->
                    </a>
                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal" >
                        <li>
                            <a href="/"><span class="title">Home</span></a>
                           
                        </li>
                        <li>
                            <a href="/courses"><span class="title" >Courses</span></a>
                            <!-- Level Two-->
                           
                        </li>
                        <li>
                            <a href="/accreditations"><span class="title" >Accreditations</span></a>
                           
                        </li>
                        <li>
                            <a href="#"><span class="title" >Study Mode</span></a>
                            <ul> 
                                        <li><a href="/blended-learning" >Blended Learning</a></li>
                                        <li><a href="/online-learning" >Online Learning</a></li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="#"><span class="title" >About us</span></a>
                            <ul> 
                                        <li><a href="/about" >About SBL</a></li>
                                        <li><a href="/sbl" >Why Choose SBL</a></li>
                                        <li><a href="/faq" >FAQ</a></li>
                                        <li><a href="/contact_us" >Contact Us</a></li>
                                        <li><a href="/Regional-Access-Points" >RAP Partners</a></li>
                                        <li><a href="https://www.sbusinesslondon.ac.uk/blog/" >Career Guides</a></li>
                            </ul>
                        </li>
                        <!-- <li class="last">
                            <a href="page-contact.html"><span class="title" >Contact</span></a>
                        </li> -->
                     
                    </ul>
                    <ul class="sign_up_btn pull-right dn-smd mt20">

                      @if (Auth::guest())
                        <li class="list-inline-item list_s" >
                            <a href="{{route('register')}}" class="btn flaticon-user" data-toggle="modal" data-target="#loginFormModal"> <span class="dn-lg">Login/Register</span></a>
                        </li>
                     @else
                     <!-- <li class="nav-item main-nav-right-menu nav-item-user-profile">
                            <a class="nav-link profile-dropdown-toogle" href="javascript:;">
                                <span class="top-nav-user-name">
                                    {!! $auth_user->get_photo !!}
                                </span>
                            </a>
                            <div class="profile-dropdown-menu pt-0">

                                <div class="profile-dropdown-userinfo bg-light p-3">
                                    <p class="m-0">{{ $auth_user->name }}</p>
                                    <small>{{$auth_user->email}}</small>
                                </div>

                                @include(theme('dashboard.sidebar-menu'))
                            </div>
                        </li> -->

                        <!-- <li class="list-inline-item list_s">
                         <a href="#" class="btn flaticon-user" > <span class="title dn-lg">{{ $auth_user->name }}</span></a>
                                <ul>
                                    <li><a href="page-dashboard.html">{{$auth_user->email}}</a></li>
                                    <li><a href="page-dashboard.html">Logout</a></li>
                                </ul>
                        </li> -->
                         <!-- <li class="list-inline-item list_s">
                         <a href="#" class="btn flaticon-user dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="dn-lg">{{ $auth_user->name }}</span></a>
                         
    
                        </li>
                         -->


 <li class="list-inline-item list_s">

<div class="cart_btn">
      <ul class="cart">
           <li>
              <a href="#" class="btn cart_btn  flaticon-user"></a>
              <ul class="dropdown_content">
              <li ><a href="#">Hello {{ $auth_user->name }}</a></li>
              <li ><a href="/dashboard">Profile</a></li>
              <li ><a href="/logout">Logout</a></li>
              </ul>
          </li>
         </ul>
  </div>
</li>




                     @endif

                     @php($cart = cart())
                        
                        <li class="list-inline-item list_s">

                          <div class="cart_btn">
                                <ul class="cart">
                                     <li>
                                        <!-- <a href="#" class="btn cart_btn  flaticon-shopping-bag">
                                        @if($cart->count)
                                    <span>{{$cart->count}}</span>
                                            @endif
                                       
                                        </a> -->
                                        <!-- <ul class="dropdown_content"> -->
                                           
                                            <li class="nav-item dropdown  mini-cart-item">
                        {!! view_template_part('template-part.minicart') !!}
                    </li>
                                           
                                        <!-- </ul> -->
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>
                        <li class="list-inline-item list_s">
                            <div class="search_overlay">
                                <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                    <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- Button trigger modal -->
                </nav>
            </div>
        </header>

 <!-- Modal -->
 <div class="sign_up_modal modal fade" id="loginFormModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="login_form">
                            @include('inc.flash_msg')
                                <form method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="heading">
                                        <h3 class="text-center">Login to your account</h3>
                                        <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Email Address" required autofocus>
                                        <!-- <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus> -->
                                        @if ($errors->has('email'))
                                             <span class="invalid-feedback">
                                             <strong>{{ $errors->first('email') }}</strong>
                                             </span>
                                        @endif
                                    </div> 

                                    <div class="form-group">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Password" name="password" required>

                                    @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                        <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                        <a class="tdu btn-fpswd float-right" href="{{ route('forgot_password') }}">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                                    <!-- <hr> -->
                                    <!-- <div class="row mt40">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                        </div>
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                        </div>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="sign_up_form">
                                <div class="heading">
                                    <h3 class="text-center">Create New Account</h3>
                                    <p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
                                </div>
                                <form role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                    <div class="form-group">   
                                    <input type="text" id="name" class="form-control" name="name"  placeholder="Enter your full name" required autofocus>
                                   
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif

                                    </div>
                                    <div class="form-group">
                                        <input type="date" id="date_of_birth" class="form-control" name="date_of_birth" placeholder="Date of Birth" required>

                                        @if ($errors->has('date_of_birth'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('date_of_birth') }}</strong>
                                            </span>
                                        @endif


                                    </div>
                                    <div class="form-group">
                                        <input type="tel" id="phone" class="form-control" name="phone" placeholder="Contact Number" required>

                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                        @endif


                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                        @endif


                                    </div>
                                    <div class="form-group row">
                                    <div class="col-md-6">
                                    <input type="text" id="address" class="form-control" name="address"  placeholder="Address " required autofocus>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="text" id="address_2" class="form-control" name="address_2"placeholder="Street"  required>
                                    </div>
                                                @if ($errors->has('address'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                                @if ($errors->has('address_2'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('address_2') }}</strong>
                                                    </span>
                                                @endif

                                    </div>
                                      <div class="form-group row">
                                            <div class="col-md-6">
                                            <input type="text" class="form-control" id="city" placeholder="City" name="city" required>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" class="form-control" id="postcode" placeholder="Postcode" name="postcode" required>
                                            </div>
                                        

                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('city') }}</strong>
                                                    </span>
                                            @endif
                                            @if ($errors->has('postcode'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('postcode') }}</strong>
                                                    </span>
                                            @endif

                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="country" id="country" required>
                                            <option value="">Choose a Country</option>
                                            @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                    
                                            @endforeach
                                        </select>

                                            @if ($errors->has('country'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                            @endif

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                            @endif

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password-confirm" placeholder="Confirm Password" name="password_confirmation" required>
                                    </div>
                                    <!-- <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="user_as" name="user_as">
                                        <label class="custom-control-label" for="exampleCheck2">Want to become an instructor?</label>
                                    </div> -->
                                    <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                                    <hr>
                                    <div class="row mt40">
                                        <div class="col-lg">
                                            <!-- <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button> -->
                                        </div>
                                        <div class="col-lg">
                                            <!-- <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search Button Bacground Overlay -->
        <div class="search_overlay dn-992">
            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
                <div id="mk-fullscreen-search-wrapper">
                    <form method="get" id="mk-fullscreen-searchform">
                        <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
                        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Header Nav For Mobile -->
        <!-- <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="main_logo_home2">
                        <img class="logo1 img-fluid" src="{{theme_asset('images/header-logo.png')}}" alt="header-logo.png" style="width: 200px;">

                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item">
                            <div class="search_overlay">
                                <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                    <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                                </a>
                                <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                                    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
                                    <div id="mk-fullscreen-search-wrapper2">
                                        <form method="get" id="mk-fullscreen-searchform2">
                                            <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
                                            <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div> -->
            <!-- /.mobile-menu -->
            <!-- <nav id="menu" class="stylehome1">
                <ul>
                    <li><span>Home</span>
                        <ul>
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index2.html">Home 2</a></li>
                            <li><a href="index3.html">Home 3</a></li>
                            <li><a href="index4.html">Home 4</a></li>
                            <li><a href="index5.html">Home 5</a></li>
                            <li><a href="index6.html">Home - University</a></li>
                            <li><a href="index7.html">Home College</a></li>
                            <li><a href="index8.html">Home Kindergarten</a></li>
                        </ul>
                    </li>
                    <li><span>Courses</span>
                        <ul>
                            <li><span>Courses List</span>
                                <ul>
                                    <li><a href="page-course-v1.html">Courses v1</a></li>
                                    <li><a href="page-course-v2.html">Courses v2</a></li>
                                    <li><a href="page-course-v3.html">Courses v3</a></li>
                                </ul>
                            </li>
                            <li><span>Courses Single</span>
                                <ul>
                                    <li><a href="page-course-single-v1.html">Single V1</a></li>
                                    <li><a href="page-course-single-v2.html">Single V2</a></li>
                                    <li><a href="page-course-single-v3.html">Single V3</a></li>
                                </ul>
                            </li>
                            <li><a href="page-instructors.html">Instructors</a></li>
                            <li><a href="page-instructors-single.html">Instructor Single</a></li>
                        </ul>
                    </li>
                    <li><span>Events</span>
                        <ul>
                            <li><a href="page-event.html">Event List</a></li>
                            <li><a href="page-event-single.html">Event Single</a></li>
                        </ul>
                    </li>
                    <li><span>Pages</span>
                        <ul>
                            <li><span>Shop Pages</span>
                                <ul>
                                    <li><a href="page-shop.html">Shop</a></li>
                                    <li><a href="page-shop-single.html">Shop Single</a></li>
                                    <li><a href="page-shop-cart.html">Cart</a></li>
                                    <li><a href="page-shop-checkout.html">Checkout</a></li>
                                    <li><a href="page-shop-order.html">Order</a></li>
                                </ul>
                            </li>
                            <li><span>User Admin</span>
                                <ul>
                                    <li><a href="page-dashboard.html">Dashboard</a></li>
                                    <li><a href="page-my-courses.html">My Courses</a></li>
                                    <li><a href="page-my-order.html">My Order</a></li>
                                    <li><a href="page-my-message.html">My Message</a></li>
                                    <li><a href="page-my-review.html">My Review</a></li>
                                    <li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
                                    <li><a href="page-my-listing.html">My Listing</a></li>
                                    <li><a href="page-my-setting.html">My Setting</a></li>
                                </ul>
                            </li>
                            <li><a href="page-about.html">About Us</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                            <li><a href="page-faq.html">Faq</a></li>
                            <li><a href="page-login.html">LogIn</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-pricing.html">Membership</a></li>
                            <li><a href="page-error.html">404 Page</a></li>
                            <li><a href="page-terms.html">Terms and Conditions</a></li>
                            <li><a href="page-become-instructor.html">Become an Instructor</a></li>
                            <li><a href="page-ui-element.html">UI Elements</a></li>
                        </ul>
                    </li>
                    <li><span>Blog</span>
                        <ul>
                            <li><a href="page-blog-v1.html">Blog List 1</a></li>
                            <li><a href="page-blog-grid.html">Blog List 2</a></li>
                            <li><a href="page-blog-list.html">Blog List 3</a></li>
                            <li><a href="page-blog-single.html">Single Post</a></li>
                        </ul>
                    </li>
                    <li><a href="page-contact.html">Contact</a></li>
                    <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
                    <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
                </ul>
            </nav> -->
        <!-- </div> -->


    