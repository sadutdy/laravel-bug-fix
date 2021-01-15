@extends('layouts.theme')
@section('content')

    @php
        $path = request()->path();
       
    @endphp

    <!-- <section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Courses</h4>
                            <ol class="breadcrumb">
                            <li class='breadcrumb-item'>
                                <a href='{{route('home')}}'>
                                    <i class='la la-home'></i>  {{__t('home')}}
                                </a>
                            </li>
                            @if($path === 'courses')
                                <li class='breadcrumb-item active'> {{__t('courses')}}</li>
                            @elseif($path === 'popular-courses')
                                <li class='breadcrumb-item active'> <i class="la la-bolt"></i> {{__t('popular_courses')}}</li>
                            @elseif($path === 'featured-courses')
                                <li class='breadcrumb-item active'> <i class="la la-bookmark"></i> {{__t('featured_courses')}}</li>
                            @endif
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    <!-- <div class="page-header-wrapper bg-light-sky py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <nav aria-label="breadcrumb">
                        <ol class='breadcrumb mb-0'>
                            <li class='breadcrumb-item'>
                                <a href='{{route('home')}}'>
                                    <i class='la la-home'></i>  {{__t('home')}}
                                </a>
                            </li>
                            @if($path === 'courses')
                                <li class='breadcrumb-item active'> {{__t('courses')}}</li>
                            @elseif($path === 'popular-courses')
                                <li class='breadcrumb-item active'> <i class="la la-bolt"></i> {{__t('popular_courses')}}</li>
                            @elseif($path === 'featured-courses')
                                <li class='breadcrumb-item active'> <i class="la la-bookmark"></i> {{__t('featured_courses')}}</li>
                            @endif
                        </ol>
                    </nav>
                   
                </div>

            </div>
        </div>

    </div> -->

    <section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Courses</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                @if($path === 'courses')
                                <li class='breadcrumb-item active'> {{__t('courses')}}</li>
                            @elseif($path === 'popular-courses')
                                <li class='breadcrumb-item active'> <i class="la la-bolt"></i> {{__t('popular_courses')}}</li>
                            @elseif($path === 'featured-courses')
                                <li class='breadcrumb-item active'> <i class="la la-bookmark"></i> {{__t('featured_courses')}}</li>
                            @endif
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      <!-- Our Team Members -->
      <section class="our-team pb40">
      <form action="" id="course-filter-form" method="get">
            <div class="container">
          
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="row">
                            <div class="col-xl-4">
                                <!-- <div class="instructor_search_result style2">
                                    <p class="mt10 fz15"><span class="color-dark pr10">85 </span> results <span class="color-dark pr10">1,236</span> Video Tutorials</p>
                                </div> -->
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

                            <div class="row courses_group">
                                @foreach($courses as $course)
                              
                                    {!! course_card($course, 'col-md-4') !!}
                                @endforeach
                              
                            </div>
                        @else
                            {!! no_data() !!}
                        @endif

                        {!! $courses->links() !!}
                          
                       
                    </div>
                        <div class="col-lg-4 col-xl-3">

                            <div class="selected_filter_widget style2 mb30">
                                <div class="list-inline-item">
                                    <div class="candidate_revew_search_box course mb30 fn-520">
                                        <form class="form-inline my-2 my-lg-0">
                                        
                                            <input class="form-control" id="listSearch" type="search" placeholder="Search course" aria-label="Search" >
                                            
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
                                                <a href="#panelBodyAwarding" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Awarding bodies</a>
                                            </h4>
                                        </div>

                                        <div id="panelBodyAwarding" class="panel-collapse collapse show">
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
                            
                           
                            
                        </div>
              </div>
             
         </div>
         </form>
      </section>      
        @endsection
       