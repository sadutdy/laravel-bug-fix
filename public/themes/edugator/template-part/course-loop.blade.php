<?php
$gridClass = $grid_class ? $grid_class : 'col-md-3';
$status_flag = '';
use App\Enroll;
if($auth_user){

$user = Auth::user();
 $user_id = $user->id;

$status_flag = '';
// whereIn('status', ['pending', 'onhold'])
 $courses_status_details = Enroll::where('user_id',$user_id)->where('course_id',$course->id)->get();

 if(count($courses_status_details)){
    if($courses_status_details[0]['status']=="pending"){
        $status_flag ="Pending";
    }else if($courses_status_details[0]['status']=="onhold"){
        $status_flag ="Onhold";
    }else if($courses_status_details[0]['status']=="success"){
        $status_flag ="Success";
    }
 }
}

?>


                            <div class="col-lg-6 col-xl-4">
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
                                            <!-- <a class="tc_preview_course" href="{{route('course', $course->slug)}}">Preview Course</a> -->
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                        <div class="tc_footer p-0" style="border: 0;">

                                                <div class="tc_price float-right" style="position:absolute;right:0;">${{$course->sale_price}}</div>

                                            </div>
                                            <!-- <p>{{$course['subcategory']->category_name}}</p> -->
                                            <p><?php echo $out = strlen($course['maincategory']->category_name) > 20? substr($course['maincategory']->category_name,0,20)."..." : $course['maincategory']->category_name; ?></p>
                                        <!-- <p>{{$course['maincategory']->category_name}}</p> -->
                                        <!-- <p>{{awarding_bodies($course->awarding_body)}}</p> -->
                                        <!-- <p>{{course_levels($course->level)}}</p> -->
                                        
                                       
                                            <h5 class="smlcourse-block_img-wrap--course-name" title="{{$course->title}}"> <?php echo $out = strlen($course->title) > 45? substr($course->title,0,45)."..." : $course->title; ?></h5>
                                            <!-- <h5 class="smlcourse-block_img-wrap--course-name" title="{{$course->title}}"> <?php echo $course->title; ?></h5> -->
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
                                            <img class="img-whp" src="{{theme_asset($awarding_img)}}" alt="{{theme_asset('images/logo/Qualifi.png')}}">
                                            <div class="btn-cover pt-3">
                                            <a  href="{{route('course', $course->slug)}}" class="btn dbxshad  btn-thm ">Read more</a>
                                            <?php 
// print_R($auth_user->get_option('enrolled_courses', []) );die;
//print_R($auth_user->get_option('pending_courses', []) );die;
                                                ?>
                                            @if($auth_user && in_array($course->id, $auth_user->get_option('enrolled_courses', []) ))
                         
                                            <a href="{{route('course', $course->slug)}}" class="btn dbxshad  btn-thm float-right add-to-cart-btn" disabled>{{__t('enrolled')}}</a>
                                           
                                            @else
                                           
                                                @if($status_flag=="Pending")
                                                <a href="{{route('course', $course->slug)}}" disabled class="btn dbxshad  btn-thm float-right add-to-cart-btn"><i class="la la-play-circle"></i>Pending</a>
                                                @elseif($status_flag=="Onhold")
                                                <a href="{{route('course', $course->slug)}}" disabled class="btn dbxshad  btn-thm float-right add-to-cart-btn"><i class="la la-play-circle"></i>On Hold</a>
                                                @elseif($status_flag=="Declined")
                                                <a href="{{route('course', $course->slug)}}" disabled class="btn dbxshad  btn-thm float-right add-to-cart-btn"><i class="la la-play-circle"></i>Declined</a>
                                                @elseif($status_flag=="Success")
                                                <a href="{{route('course', $course->slug)}}" disabled class="btn dbxshad  btn-thm float-right add-to-cart-btn"><i class="la la-play-circle"></i>Enrolled</a>
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
                                              
                                            @endif
                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </div>

                   
                       

<!-- 


 <div class="{{$gridClass}} course-card-grid-wrap ">
    <div class="course-card mb-5">

        <div class="course-card-img-wrap">
            <a href="{{route('course', $course->slug)}}">
                <img src="{{$course->thumbnail_url}}" class="img-fluid" />
            </a>

            <button class="course-card-add-wish btn btn-link btn-sm p-0" data-course-id="{{$course->id}}">
                @if($auth_user && in_array($course->id, $auth_user->get_option('wishlists', []) ))
                    <i class="la la-heart"></i>
                @else
                    <i class="la la-heart-o"></i>
                @endif
            </button>
        </div>

        <div class="course-card-contents">
            <a href="{{route('course', $course->slug)}}">
                <h4 class="course-card-title mb-3">{{$course->title}}</h4>
                <p class="course-card-short-info mb-2 d-flex justify-content-between">
                    <span><i class="la la-play-circle"></i> {{$course->total_lectures}} {{__t('lectures')}}</span>
                    <span><i class="la la-signal"></i> {{course_levels($course->level)}}</span>
                </p>
            </a>

            <div class="course-card-info-wrap">
                <p class="course-card-author d-flex justify-content-between">
                    <span>
                        <i class="la la-user"></i> by <a href="{{route('profile', $course->user_id)}}">{{$course->author->name}}</a>
                    </span>
                    @if($course->category)
                        <span>
                            <i class="la la-folder"></i> in <a href="{{route('category_view', $course->category->slug)}}">{{$course->category->category_name}}</a>
                        </span>
                    @endif
                </p>
                @if($course->rating_count)
                    <div class="course-card-ratings">
                        <div class="star-ratings-group d-flex">
                            {!! star_rating_generator($course->rating_value) !!}
                            <span class="star-ratings-point mx-2"><b>{{$course->rating_value}}</b></span>
                            <span class="text-muted star-ratings-count">({{$course->rating_count}})</span>
                        </div>
                    </div>
                @endif
            </div>

            <div class="course-card-footer mt-3">
                <div class="course-card-cart-wrap d-flex justify-content-between">
                    {!! $course->price_html(false, false) !!}

                    <div class="course-card-btn-wrap">
                        @if($auth_user && in_array($course->id, $auth_user->get_option('enrolled_courses', []) ))
                            <a href="{{route('course', $course->slug)}}">{{__t('enrolled')}}</a>
                        @else
                            @php($in_cart = cart($course->id))
                            <button type="button" class="btn btn-sm btn-theme-primary add-to-cart-btn"  data-course-id="{{$course->id}}" {{$in_cart? 'disabled="disabled"' : ''}}>
                                @if($in_cart)
                                    <i class='la la-check-circle'></i> {{__t('in_cart')}}
                                @else
                                    <i class="la la-shopping-cart"></i> {{__t('add_to_cart')}}
                                @endif
                            </button>
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>  -->




