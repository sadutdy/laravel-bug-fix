
@extends('layouts.theme')
@section('content')

    @php
        $path = request()->path();
      
       
    @endphp
 

    <section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Courses</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> {{__t('courses')}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="courses-list2 pb40">
            <div class="container">
            <form action="" id="course-filter-form" method="get">
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="row courses_list_heading style2">
                            <div class="col-xl-4 p0">
                                <div class="instructor_search_result style2">
                                    <!-- <p class="mt10 fz15"><span class="color-dark pr10">85 </span> results <span class="color-dark pr10">1,236</span> Video Tutorials</p> -->
                                </div>
                            </div>
                            <div class="col-xl-8 text-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/courses" class="btn btn-thm2 "> <i class="fa fa-th-large"></i> </a>
                                    <a href="/courses-list" class="btn btn-thm2 "> <i class="fa fa-list" aria-hidden="true"></i></a>

                                </div>
                            </div>

                        </div>
                        @if($courses->count())
                        <p class="text-muted mb-3"> Showing {{$courses->count()}} from {{$courses->total()}} results </p>
                        <div class="row courses_container courses_group style2">

                        @foreach($courses as $course)
                            
                            <div class="col-lg-12 p0">
                                <div class="courses_list_content">
                                    <div class="top_courses list">
                                        <div class="thumb">
                                        <img class="img-whp" src="{{$course->thumbnail_url}}" alt="{{$course->thumbnail_url}}">
                                            <div class="overlay">
                                            <button class="course-card-add-wish btn btn-link btn-sm p-0" data-course-id="{{$course->id}}" >
                                            @if($auth_user && in_array($course->id, $auth_user->get_option('wishlists', []) ))
                                                <i class="la la-heart"></i>
                                            @else
                                                <i class="la la-heart-o"></i>
                                            @endif
                                            </button>
                                                <!-- <a class="tc_preview_course" href="#">Preview Course</a> -->
                                            </div>
                                        </div>
                                        <div class="details">
                                            <div class="tc_content">
                                                <p>{{$course['subcategory']->category_name}}</p>
                                                <h5 class="smlcourse-block_img-wrap--course-name" title="{{$course->title}}">{{$course->title}} </h5>
                                              
                                                <p>  <?php echo $out = strlen($course->short_description) > 70 ? substr($course->short_description,0,70)."..." : $course->short_description; ?></p>
                                            </div>
                                            <div class="tc_footer">
                                                <!-- <ul class="tc_meta float-left fn-414">
                                                    <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                    <li class="list-inline-item"><a href="#">1548</a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                    <li class="list-inline-item"><a href="#">25</a></li>
                                                </ul> -->
                                                <div class="tc_price float-right fn-414">${{$course->sale_price}}</div>
                                                <div class="btn-cover pt-3">
                                               
                                        


                                                @if($auth_user && in_array($course->id, $auth_user->get_option('enrolled_courses', []) ))
                         
                         <a href="{{route('course', $course->slug)}}" class="btn dbxshad  btn-thm float-right add-to-cart-btn">{{__t('enrolled')}}</a>
                         @else
                         <?php
                         $in_cart = cart($course->id)
                         ?>
                             <button type="button" class="btn dbxshad  btn-thm float-right add-to-cart-btn"  data-course-id="{{$course->id}}" {{$in_cart? 'disabled="disabled"' : ''}}>
                                                    @if($in_cart)
                                                        {{__t('in_cart')}}
                                                    @else
                                                        {{__t('add_to_cart')}}
                                                    @endif
                                                </button>
                         @endif




                                                <a href="{{route('course', $course->slug)}}" class="btn dbxshad  btn-thm float-right mr-3">Read more</a>
                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                        @else
                            {!! no_data() !!}
                        @endif

                        {!! $courses->links() !!}


                            <!-- <div class="col-lg-12 p0">
                                <div class="courses_list_content">
                                    <div class="top_courses list">
                                        <div class="thumb">
                                            <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                            <div class="overlay">
                                                <div class="icon"><span class="flaticon-like"></span></div>
                                                <a class="tc_preview_course" href="#">Preview Course</a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <div class="tc_content">
                                                <p>Ali TUFAN</p>
                                                <h5>Introduction Web Design with HTML <span class="tag">Best Seller</span></h5>
                                                <p>Learn how to build prototypes in Sketch. Find out how to prototype an image carousel for a website or mobile app, with these Sketch prototyping tips.</p>
                                            </div>
                                            <div class="tc_footer">
                                                <ul class="tc_meta float-left fn-414">
                                                    <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                    <li class="list-inline-item"><a href="#">1548</a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                    <li class="list-inline-item"><a href="#">25</a></li>
                                                </ul>
                                                <div class="tc_price float-right fn-414">$69.95</div>
                                                <div class="btn-cover pt-3"><button type="button" class="btn dbxshad  btn-thm float-right ">Buy Now</button><button type="button" class="btn dbxshad  btn-thm float-right mr-3">Read more</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  -->
                            
                           
                            
                           
                            
                           
                      
                        <!-- <div class="row">
                            <div class="col-lg-12 mt50">
                                <div class="mbp_pagination">
                                    <ul class="page_navigation">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next <span class="flaticon-right-arrow-1"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-4 col-xl-3">

                    
                    <div class="selected_filter_widget style2 mb30">
                                <div class="list-inline-item">
                                    <div class="candidate_revew_search_box course mb30 fn-520">
                                        <form class="form-inline my-2 my-lg-0">
                                        
                                            <input class="form-control " id="listSearch" type="search" placeholder="Search course" aria-label="Search">
                                            <!-- <button class="btn" id="listSearchBtn" type="button"><span class="flaticon-magnifying-glass"></span></button> -->

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="course-filter-form-group selected_filter_widget style2 mb30">
                                <div id="accordion" class="panel-group">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#panelBodyfilter" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Selected Filters</a>
                                            </h4>
                                        </div>
                                        <div id="panelBodyfilter" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <div class="tags-bar style2">
                                                @foreach($details as $detail)
                                                <?php if($detail!=''){?>
                                                    <span><?php echo $detail ?><i class="close-tag"></i></span>
                                                <?php
                                                }
                                                ?>
                                                @endforeach
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(request('q'))
                                <input type="hidden" name="q" value="{{request('q')}}">
                            @endif

                            @php
                                $old_cat_id = request('category');
                                $old_topic_id = request('topic');
                                $old_level = (array) request('level');
                                $old_awarding_body = request('awarding_body');
                                $old_price = (array) request('price');
                            @endphp
                            @if($categories->count())
                            <div class="course-filter-form-group selected_filter_widget style2 mb30">
                                <div id="accordion" class="panel-group">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{__t('category')}}</a>
                                            </h4>
                                        </div>

                                        <div id="panelBodySoftware" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                            <select name="category" id="course_category" class="form-control select2">
                                            <option value="">{{__t('select_category')}}</option>
                                            @foreach($categories as $category)
                                                <optgroup label="{{$category->category_name}}">
                                                    @if($category->sub_categories->count())
                                                        @foreach($category->sub_categories as $sub_category)
                                                            <option value="{{$sub_category->id}}" {{selected($sub_category->id, $old_cat_id)}} >{{$sub_category->category_name}}</option>
                                                        @endforeach
                                                    @endif
                                                </optgroup>
                                            @endforeach
                                        </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- <div class="selected_filter_widget style2 mb30">
                                <div id="accordion" class="panel-group">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{__t('topic')}}</a>
                                            </h4>
                                        </div>

                                        <div id="panelBodySoftware" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                            <select name="topic" id="course_topic" class="form-control select2">
                                            <option value="">{{__t('select_topic')}}</option>

                                            @foreach($topics as $topic)
                                                <option value="{{$topic->id}}" {{selected($topic->id, $old_topic_id)}}>
                                                    {{$topic->category_name}}
                                                </option>
                                            @endforeach
                                        </select>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div> -->


                            @endif
                            <div class="course-filter-form-group selected_filter_widget style2 mb30">
                                <div id="accordion" class="panel-group">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Awarding bodies</a>
                                            </h4>
                                        </div>

                                        <div id="panelBodySoftware" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                            <select name="awarding_body" id="awarding_body" class="form-control select2">
                                            <option value="">Select awarding body</option>
                                            
                                            @foreach(awarding_bodies() as $key => $awarding_body)
                                                <option value="{{$key}}"  {{selected($key, $old_awarding_body)}}>
                                                    {{$awarding_body}}
                                                </option>
                                            @endforeach

                                          

                                        </select>
                                        </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        
                      
                            <div class="course-filter-form-group selected_filter_widget style2">
                                <div id="accordion" class="panel-group">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#panelBodyAuthors" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{__t('course_level')}}</a>
                                            </h4>
                                        </div>
                                        <div id="panelBodyAuthors" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <div class="cl_skill_checkbox">
                                                    <div class="content ui_kit_checkbox style2 text-left">

                                                @foreach(course_levels() as $key => $level)
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="level[]" value="{{$key}}" {{in_array($key, $old_level) ? 'checked="checked"' : ''}} >
                                            <span class="custom-control-label">{{$level}}</span>
                                        </label>
                                                @endforeach
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        
                      
                        <!-- <div class="selected_filter_widget style2">
                            <span class="float-left"><img class="mr20" src="images/resource/2.png" alt="2.png"></span>
                            <h4 class="mt15 fz20 fw500">Not sure?</h4>
                            <br>
                            <p>Every course comes with a 30-day money-back guarantee</p>
                        </div> -->
                    </div>
                </div>
            </div>
            </form>
        </section>

        @endsection