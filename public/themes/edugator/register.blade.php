@php
    use App\Category;
    use App\Country;
    $categories = Category::whereStep(0)->with('sub_categories')->orderBy('category_name', 'asc')->get();
    $countries = \App\Country::query()->orderBy('name', 'ASC')->get();

@endphp
<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Register</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> Register </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-log bgc-fa">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 offset-lg-3">
                        <div class="login_form inner_page">
                        @include('inc.flash_msg')

                        <form role="form" method="POST" action="{{ route('register') }}">
    @csrf
                                <div class="heading">
                                    <h3 class="text-center">Register an account</h3>
                                    <p class="text-center">Have an account? <a class="text-thm" href="/login">Sign in!</a></p>
                                </div>
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
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

