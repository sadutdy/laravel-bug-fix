@extends('layouts.theme')


@section('content')

<div class="home1-mainslider">
<div class="container-fluid p0">
<!-- <script type="text/javascript" src="{{theme_asset('js/santa.js')}}"></script>
<div id="animatedImage" style="position: relative;">
 <img src="{{theme_asset('images/santa.gif')}}" alt="animatedImage" />
</div>       -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-banner-wrapper">
                       
                            <div class="banner-style-one owl-theme owl-carousel">
                                <div class="slide slide-one" style="background-image: url({{theme_asset('images/SBL-20slide-1.jpg')}}); height: 95vh;">
                                    <div class="container">
                                        <div class="row home-content">
                                            <div class="col-lg-12 text-center p0">
                                                <h3 class="banner-title">"Management is doing things right;<br>leadership is doing the right things."</h3>
                                                <p>-Peter F. Drucker</p>
                                                <p>Accomplish an accredited Management and Leadership qualification with us at your own pace and boost your career opportunities.</p>
                                                <div class="btn-block"><a href="/courses" class="banner-btn">Ready to get Started?</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide slide-one" style="background-image: url({{theme_asset('images/slider-2.jpg')}});height: 95vh;">
                                    <div class="container">
                                        <div class="row home-content">
                                            <div class="col-lg-12 text-center p0">
                                                <h3 class="banner-title">Become a Chartered Manager:The Ultimate Management Accolade</h3>
                                                <p>Gain a CMI qualification and becomea Chartered Manager. Employers highly valuethe qualifications awarded by CMI, and boost your career prospects.</p>
                                                <div class="btn-block"><a href="/courses" class="banner-btn">Ready to get Started?</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide slide-one" style="background-image: url({{theme_asset('images/slider-1.webp')}});height: 95vh;">
                                    <div class="container">
                                        <div class="row home-content">
                                            <div class="col-lg-12 text-center p0">
                                                <h3 class="banner-title">“If you don't appreciate your customers, someone else will.”</h3>
                                                <p>-Jason Langella</p>
                                                <p>Study a professional sales qualification with us and transform the complex to the simple.</p>
                                                <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-btn-block banner-carousel-btn">
                                <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i> <span class="left">PREV</span></span>
                                <span class="carousel-btn right-btn"><span class="right">NEXT</span> <i class="flaticon-right-arrow-1 right"></i></span>
                            </div>
                            <!-- /.carousel-btn-block banner-carousel-btn -->
                        </div>
                        <!-- /.main-banner-wrapper -->
                    </div>
                </div>
            </div>
            <!-- <div class="container home_iconbox_container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="home_icon_box">
                                    <div class="icon"><img src="images/hicon1.png" alt="hicon1.png"></div>
                                    <p>Learn From The Experts</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="home_icon_box">
                                    <div class="icon mt15"><img src="images/hicon2.png" alt="hicon2.png"></div>
                                    <p>Book Library & Store</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="home_icon_box">
                                    <div class="icon"><img src="images/hicon3.png" alt="hicon3.png"></div>
                                    <p>Worldwide Recognize</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="home_icon_box">
                                    <div class="icon"><img src="images/hicon4.png" alt="hicon4.png"></div>
                                    <p>Best Industry Leaders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    
        <section id="top-courses" class="top-courses pb30">
            <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                        <a href="#top-courses">
                            <div class="mouse_scroll" style="top:19px">
                                <div class="icon"><span class="flaticon-download-arrow"></span></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">Browse Our Top Courses</h3>
                            <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="options" class="alpha-pag full">
                            <div class="option-isotop">
                                <ul id="filter" class="option-set" data-option-key="filter">
                                @foreach($categories as $category)
                            <li class="list-inline-item "><a href="#{{$category->slug}}" data-option-value=".{{$category->slug}}" >{{$category->category_name}}</a></li>
                                @endforeach
                                    <!-- <li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">Degree</a></li> -->
                                    <!-- <li class="list-inline-item"><a href="#business" data-option-value=".degree">Degree</a></li>
                                    <li class="list-inline-item"><a href="#design" data-option-value=".master-degree">Master Degree</a></li> -->
                                    <!-- <li class="list-inline-item"><a href="#web" data-option-value=".web">Web</a></li>
                                    <li class="list-inline-item"><a href="#marketing" data-option-value=".marketing">Marketing</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- FILTER BUTTONS -->
                        <div class="emply-text-sec">
                            <div class="row" id="masonry_abc">
                            <?php $i =0; ?>

                            @foreach($new_courses as $course)
                        
                            <div class="col-md-6 col-lg-4 col-xl-3 {{$course['maincategory']->slug}}">
                                <div class="top_courses">
                                    <div class="thumb">
                                    <img class="img-whp" src="{{$course->thumbnail_url}}" alt="{{$course->thumbnail_url}}">
                                        <div class="overlay">
                                            <div class="icon">
                                            <button class="course-card-add-wish btn btn-link btn-sm p-0" data-course-id="{{$course->id}}" >
                                            @if($auth_user && in_array($course->id, $auth_user->get_option('wishlists', []) ))
                                                <i class="la la-heart"></i>
                                            @else
                                                <i class="la la-heart-o"></i>
                                            @endif
                                            </button>
                                                <!-- @if($auth_user && in_array($course->id, $auth_user->get_option('wishlists', []) ))
                                                <span class="la-heart">s</span>
                                                @else
                                                <span class="la-heart-o">o</span>
                                                @endif -->
                                            </div>
                                            <a class="tc_preview_course" href="{{route('course', $course->slug)}}">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                        <div class="tc_footer p-0" style="border: 0;">

                                                <div class="tc_price float-right" style="position:absolute;right:0;">${{$course->sale_price}}</div>

                                            </div>
                                            <p><?php echo $out = strlen($course['category']->category_name) > 20? substr($course['category']->category_name,0,20)."..." : $course['category']->category_name; ?></p>
                                        <!-- <p>{{$course['category']->category_name}}</p> -->
                                        <!-- <p>{{awarding_bodies($course->awarding_body)}}</p> -->
                                        <!-- <p>{{course_levels($course->level)}}</p> -->
                                        
                                       
                                            <h5 class="smlcourse-block_img-wrap--course-name" title="{{$course->title}}"> <?php echo $out = strlen($course->title) > 45? substr($course->title,0,45)."..." : $course->title; ?></h5>
                                            
                                            <!-- <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul> -->
                                           
                                        </div>
                                      

                                        <!-- <div class="tc_footer">
                                        <div class="tc_price float-right">{{$course->sale_price}}</div>
                                      
                                            </div> -->

                                        <div class="tc_footer">
                                        <?php if($course->awarding_body==1){
                                                 $awarding_img = "images/logo/cmi-logo-icon.png";
                                                }
                                                else if($course->awarding_body==2){
                                                    $awarding_img = "images/logo/Qualifi.png";
                                                }
                                                else if($course->awarding_body==3){
                                                    $awarding_img = "images/logo/ibt_icon.png";
                                                }
                                                else if($course->awarding_body==4){
                                                    $awarding_img = "images/logo/nccNew.png";
                                                }
                                                else if($course->awarding_body==5){
                                                    $awarding_img = "images/logo/aru-logo.jpg";
                                                }
                                                else if($course->awarding_body==6){
                                                    $awarding_img = "images/logo/Uclan-logo.jpg";
                                                }
                                                else if($course->awarding_body==7){
                                                    $awarding_img = "images/logo/sage-logo.jpg";
                                                }
                                                else if($course->awarding_body==8){
                                                    $awarding_img = "images/logo/chichester-logo.png";
                                                }
                                                else if($course->awarding_body==9){
                                                    $awarding_img = "images/logo/switzerland-logo.jpg";
                                                }
                                          ?>
                                       
                                            <p>Awarded by</p>
                                            <img class="img-whp" src="{{theme_asset($awarding_img)}}" alt="{{theme_asset($awarding_img)}}">
                                            <div class="btn-cover pt-3">
                                            <a  href="{{route('course', $course->slug)}}" class="btn dbxshad  btn-thm ">Read more</a>
                                            @if($auth_user && in_array($course->id, $auth_user->get_option('enrolled_courses', []) ))
                         
                                            <a href="{{route('course', $course->slug)}}" class="btn dbxshad  btn-thm float-right add-to-cart-btn">{{__t('enrolled')}}</a>
                                            @else
                                          
                                                @php($in_cart = cart($course->id))
                                                <button type="button" class="btn dbxshad  btn-thm float-right add-to-cart-btn"  data-course-id="{{$course->id}}" {{$in_cart? 'disabled="disabled"' : ''}}>
                                                    @if($in_cart)
                                                        {{__t('in_cart')}}
                                                    @else
                                                        {{__t('add_to_cart')}}
                                                    @endif
                                                </button>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                           
                            @endforeach

                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="divider_home2 parallax bg-img2" data-stellar-background-ratio="0.3">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <a href="#our-courses">
                            <div class="mouse_scroll">
                                <div class="icon"><span class="flaticon-download-arrow"></span></div>
                            </div>
                        </a>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="color-white mt0">Our Achievements</h3>
                            <!-- <p class="color-white">Here you can review some statistics about our Education Center</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 row">
                        <div class="col-sm-6 col-lg-4 text-center">
                            <div class="funfact_one">
                                <div class="icon"><span class="flaticon-student-3"></span></div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item">
                                            <div class="timer">65</div>
                                        </li>
                                        <li class="list-inline-item"><span>m+</span></li>
                                    </ul>
                                    <h5>Students learning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 text-center">
                            <div class="funfact_one">
                                <div class="icon"><span class="flaticon-cap"></span></div>
                                <div class="details">
                                    <div class="timer">58263</div>
                                    <h5>Graduates</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 text-center">
                            <div class="funfact_one">
                                <div class="icon"><span class="flaticon-jigsaw"></span></div>
                                <div class="details">
                                    <div class="timer">896673</div>
                                    <h5>Free courses</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 text-center">
                            <div class="funfact_one">
                                <div class="icon"><span class="flaticon-online-learning"></span></div>
                                <div class="details">
                                    <div class="timer">8570</div>
                                    <h5>Active courses</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 text-center">
                            <div class="funfact_one">
                                <div class="icon"><span class="flaticon-cap"></span></div>
                                <div class="details">
                                    <div class="timer">58263</div>
                                    <h5>Graduates</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 text-center">
                            <div class="funfact_one">
                                <div class="icon"><span class="flaticon-jigsaw"></span></div>
                                <div class="details">
                                    <div class="timer">896673</div>
                                    <h5>Free courses</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SIZSfip6Uic" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                        </div>
                        <div class="head_part pt-3">
                            <h2>Offering the best in education to the world</h2>
                            <p style="margin-bottom:0">Develop your career with School of Business London. You can pursue your ambitions, reach your full potential and boost your career with our outstanding support. We are with you all through your journey whether you are taking
                                the first steps towards your career or to develop your own business.</p>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        
           <!-- School Category Courses -->
           <section id="our-courses" class="our-courses pt90 pt650-992">
            <div class="container">

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">Categories</h3>
                            <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-7.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Marketing</h5>
                                    <p>Over 800 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-2.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Business</h5>
                                    <p>Over 1,400 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-4.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>IT</h5>
                                    <p>Over 350 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-3.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Accounting</h5>
                                    <p>Over 640 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-5.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Public Relation</h5>
                                    <p>Over 740 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-9.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Health and Social care</h5>
                                    <p>Over 120 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-13.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Tourism</h5>
                                    <p>Over 200 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-14.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Consulting</h5>
                                    <p>Over 100 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-6.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Teaching</h5>
                                    <p>Over 150 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-10.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Hotel Management</h5>
                                    <p>Over 120 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-8.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Design</h5>
                                    <p>Over 130 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{theme_asset('images/background/course-categories-11.jpg')}})">
                            <div class="overlay">
                                <div class="details">
                                    <h5>Mentoring</h5>
                                    <p>Over 90 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                        <div class="courses_all_btn text-center">
                            <a class="btn btn-transparent" href="/courses">View All Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Divider -->
        <!-- <section class="divider_home1 bg-img2 parallax" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="divider-one">
                            <p class="color-white">STARTING ONLINE LEARNING</p>
                            <h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1>
                            <a class="btn btn-transparent divider-btn" href="#">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
  <!-- Our Testimonials -->
  <section id="our-testimonials" class="our-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">What People Say</h3>
                            <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="testimonialsec">
                        <ul class="tes-nav">
                                <li>
                                    <img class="img-fluid" src="{{theme_asset('images/testimonial/1.jpg')}}" alt="1.jpg" />
                                </li>
                                <li>
                                    <img class="img-fluid" src="{{theme_asset('images/testimonial/2.jpg')}}" alt="2.jpg" />
                                </li>
                                <li>
                                    <img class="img-fluid" src="{{theme_asset('images/testimonial/3.jpg')}}" alt="3.jpg" />
                                </li>
                                <li>
                                    <img class="img-fluid" src="{{theme_asset('images/testimonial/4.jpg')}}" alt="4.jpg" />
                                </li>
                            </ul>
                            <ul class="tes-for">
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>PETER OKWARE</h5>
                                            <span class="small text-thm">Client</span>
                                            <p> “The skills and knowledge obtained through attending are crucial for both my current role and future career. I thank the management of the School of Business London.”</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>SM</h5>
                                            <span class="small text-thm">Client</span>
                                            <p>“I liked the delivery of training and the assigned support officer. Well organised. Communication with the tutor needs some improvements. On the whole, I’ll give 8/10 for the whole course. Thankyou SBL.”</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Ricky Miller</h5>
                                            <span class="small text-thm">Client</span>
                                            <p>“When I started Anglia Ruskin University MBA through SBL, I already had an interesting position and significant experience behind me. The MBA helped to fill the gaps and see the same activities from a different perspective.”</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Sarah M</h5>
                                            <span class="small text-thm">Client</span>
                                            <p>“I am so glad to say that the Level-5 Business Management Diploma helped me to boost my career. The flexible schedules and relevant modules of the course have significantly facilitated me in completing my course.”</p>
                                        </div>
                                    </div> 
                                </li> 
                                <!-- <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>James Anderson</h5>
                                            <span class="small text-thm">Client</span>
                                            <p>“The IT Qualification I received through School of Business London has helped me a lot to first of all give me an orientation of what I would like to do and secondly, the blended learning approach followed by them, provided me with valuable information helping me every day in my professional career.”</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Yasmin</h5>
                                            <span class="small text-thm">Client</span>
                                            <p>“My schedule does not allow me to physically attend college and the Blended program at SBL of LSM enabled me to obtain a master’s degree in Business without ever having to be on campus. The ARU MBA helped to get 8 papers direct exception in my CIMA programme.”</p>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Blog -->
        <section class="our-blog news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">Latest News And Events</h3>
                            <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="blog_slider_home1">
                            <div class="item">
                                <div class="blog_post one">
                                    <div class="thumb">
                                        <div class="post_title">Events</div>
                                        <img class="img-fluid w100" src="{{theme_asset('images/news.jpg')}}" alt="{{theme_asset('images/sub-news.jpg')}}">
                                        <a class="post_date" href="#"><span>28 <br> March</span></a>
                                    </div>
                                    <div class="details">
                                        <div class="post_meta">
                                            <ul>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                            </ul>
                                        </div>
                                        <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog_post one">
                                    <div class="thumb">
                                        <div class="post_title">Events</div>
                                        <img class="img-fluid w100" src="{{theme_asset('images/news.jpg')}}" alt="1a.jpg">
                                        <a class="post_date" href="#"><span>28 <br> March</span></a>
                                    </div>
                                    <div class="details">
                                        <div class="post_meta">
                                            <ul>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                            </ul>
                                        </div>
                                        <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog_post one">
                                    <div class="thumb">
                                        <div class="post_title">Events</div>
                                        <img class="img-fluid w100" src="{{theme_asset('images/news.jpg')}}" alt="1b.jpg">
                                        <a class="post_date" href="#"><span>28 <br> March</span></a>
                                    </div>
                                    <div class="details">
                                        <div class="post_meta">
                                            <ul>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                            </ul>
                                        </div>
                                        <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- @foreach($posts as $post)
                   
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="blog_post">
                            <div class="thumb">
                                <img class="img-fluid w100" src="{{$post->thumbnail_url->image_lg}}" alt="2.jpg">
                                <a class="post_date" href="#">{{$post->published_time}}</a>
                            </div>
                            <div class="details">
                                <h5>{{$post->title}}</h5>
                                <h4>{{ strip_tags( $post->post_content ) }}</h4>
                            </div>
                        </div>
                    </div>

                    @endforeach -->
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="blog_post">
                            <div class="thumb">
                                <img class="img-fluid w100" src="{{theme_asset('images/sub-news.jpg')}}" alt="2.jpg">
                                <a class="post_date" href="#">July 21, 2019</a>
                            </div>
                            <div class="details">
                                <h5>Marketing</h5>
                                <h4>A Solution Built for Teachers</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="blog_post">
                            <div class="thumb">
                                <img class="img-fluid w100" src="{{theme_asset('images/sub-news-2.jpg')}}" alt="3.jpg">
                                <a class="post_date" href="#">July 21, 2019</a>
                            </div>
                            <div class="details">
                                <h5>Business</h5>
                                <h4>An Overworked Newspaper Editor</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt50">
                    <div class="col-lg-12">
                        <div class="read_more_home text-center">
                            <!-- <h4>Like what you see? <a href="#">See more posts<span class="flaticon-right-arrow pl10"></span></a></h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-partners" class="our-partners divider_home3 parallax bg-img3" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">Our Clients</h3>
                            <p>Our clients make us who we are. We feel so fortunate to have enrolled learners from such outstanding organisations.</p>

                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="custom-col">
                        <div class="p-logo-2"><img src="{{theme_asset('images/logos/logo-1.png')}}" alt=""></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo-2"><img src="{{theme_asset('images/logos/logo-2.png')}}" alt=""></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo-2"><img src="{{theme_asset('images/logos/logo-3.png')}}" alt=""></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo-2"><img src="{{theme_asset('images/logos/logo-4.png')}}" alt=""></div>
                    </div>
                    <!-- <div class="custom-col">
                      <div class="p-logo-2"><img src="../img/isdc-logo.jpg" alt="isdc"></div>
                    </div> -->
                    <div class="custom-col">
                        <div class="p-logo-2"><img src="{{theme_asset('images/logos/logo-6.png')}}" alt=""></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo-2"><img src="{{theme_asset('images/logos/logo-7.png')}}" alt=""></div>
                    </div>

                </div>
            </div>
        </section>

    <section id="our-partners" class="our-partners" style="background-color: #eee">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">Accreditations &amp; Partners</h3>

                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/CMI-logo.jpg')}}" alt="CMI"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/NCC-logo.jpg')}}" alt="NCC Education"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/chestnut-logo.jpg')}}" alt="chestnut"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/Qualifi-logo.jpg')}}" alt="Qualifi"></div>
                    </div>
                    <!-- <div class="custom-col">
                      <div class="p-logo"><img src="../img/isdc-logo.jpg" alt="isdc"></div>
                    </div> -->
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/ibt-logo.jpg')}}" alt="ibt"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/qp.jpg')}}" alt="Qualifi Endorsed"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/sage-logo.jpg')}}" alt="Sage"></div>
                    </div>
                    <!-- <div class="custom-col">
                      <div class="p-logo"><img src="../img/aps-logo.jpg" alt="APS"></div>
                    </div>-->
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/bcs-logo.jpg')}}" alt="BCS"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/aru-logo.jpg')}}" alt="ARU"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/iso-logo.jpg')}}" alt="ARU"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/Uclan-logo.jpg')}}" alt="UD"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/UD.jpg')}}" alt="UD"></div>
                    </div>
                    <div class="custom-col">
                        <div class="p-logo"><img src="{{theme_asset('images/logo/ukrlp.jpg')}}" alt="UD"></div>
                    </div>
                </div>
            </div>
        </section>


       

@endsection
