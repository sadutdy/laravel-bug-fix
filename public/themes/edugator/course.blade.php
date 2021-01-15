@extends('layouts.theme')

@section('content')

    @php
        $contine_url = $course->continue_url;
    @endphp
    <style>
   .cs_row_three ul{
        list-style-type: initial;
    }
    

.cs_row_three p {
    font-family: 'Cabin', sans-serif;
    font-weight: 400;
    text-transform: inherit!important;
    margin: 20px 0;
    line-height: 30px;
    letter-spacing: 1px;
    color: #333;
    /* //font-size: 1.6rem; */
    text-align: justify;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}


    </style>
    <section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h1 style="color:white">{{clean_html($course->title)}}</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'>{{clean_html($course->title)}}</li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="our-team pb40">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="courses_single_container">
                                    <div class="cs_row_one">
                                        <div class="cs_ins_container">
                                            <div class="cs_instructor">
                                                <ul class="cs_instrct_list float-left mb0">
                                                    <?php
                                                 
                                                            if($course->awarding_body==1){
                                                                $awarding_name = "CMI";
                                                                $awarding_img = "images/logo/cmi-logo-icon.png";
                                                                $about = "<p>Chartered Management Institute established over 60 years ago as the British Institute of Management back then; it has developed the UK’s very first diploma in management studies. In the years that followed CMI has consistently been at the forefront of all aspects of management and leadership. Today CMI is the only chartered professional awarding body committed to offering the highest standards in management and leadership excellence.
                                                                 Presently over 100,000 managers use its unique services daily. CMI qualifications aim for managers and leaders at any level, and it remains the only Awarding Body which can award Chartered Manager status – the ultimate management accolade. Employers highly value the qualifications awarded by CMI, and boost your career prospects.<p>";
                                                             
                                                            }else if($course->awarding_body==2){
                                                                $awarding_name = "QUALIFY";
                                                                $awarding_img = "images/logo/Qualifi.png";
                                                                $about = "<p>QUALIFI, recognised by Ofqual awarding organisation has assembled a reputation for maintaining significant skills in a wide range of job roles and industries which comprises Leadership, Hospitality & Catering, Health and Social Care, Enterprise and Management, Process Outsourcing and Public Services.
                                                                 They are liable for awarding organisations and thereby ensuring quality assurance in Wales and Northern Ireland.</p>";
                                                               
                                                            }else if($course->awarding_body==3){
                                                                $awarding_name = "IBT";
                                                                $awarding_img = "images/logo/ibt_icon.png";
                                                      
                                                                $about = "<p>Institute of Business and Technology (IBT) is an awarding body which offers high-quality diploma and degree programs to students seeking vocational 
                                                                qualification. IBT ensures the quality of the programs by ensuring conformance to high standards in courses offered by the organisation. In addition, through 
                                                                regular monitoring and audit of accredited centres, IBT ensures legitimate and reliable functioning of the approved centres.
                                                                 Furthermore, IBT provides comprehensive support to the accredited centres for delivering the best possible service to learners.</p>
                                                                 <p>IBT qualifications assist a learner in pursuing high-quality professional vocational education delivered in a flexible and customer-focused learning environment. All the qualifications offered by IBT are regularly updated to recognise and meet the changing needs of colleges, training providers, and employers.
                                                                  Moreover, the qualifications offered by IBT facilitate progression to higher education and career development opportunities.</p>";
                                                               
                                                            } else if($course->awarding_body==4){
                                                                $awarding_name = "NCC";
                                                                $awarding_img = "images/logo/nccNew.png";
                                                                $about = "<p>NCC Education is an awarding organization and global provider of British education. Originally part of the National Computing Centre, NCC Education was established as a computing initiative by the British Government in 1966. NCC Education is committed to providing every learner with a quality British qualification,
                                                                 offering them an affordable route to obtain a UK university degree and access to British education without leaving their home country.</p><p>NCC Education qualifications are recognized by universities, professional bodies and employers worldwide. We have built our reputation as a quality education provider and awarding organization through developing stringent quality assurance processes to ensure that our qualifications,
                                                                  Accredited Partner Centers and services are of the same high-quality standard throughout the world.</p>";
                                                               
                                                            } else if($course->awarding_body==5){
                                                                $awarding_name = "Anglia Ruskin University";
                                                                $awarding_img = "images/logo/aru-logo.jpg";
                                                                $about = "";
                                                              
                                                            } else if($course->awarding_body==6){
                                                                $awarding_name = "UCLAN";
                                                                $awarding_img = "images/logo/Uclan-logo.jpg";
                                                                $about = "";
                                                            
                                                            }else if($course->awarding_body==7){
                                                                $awarding_name = "Sage Qualifications";
                                                                $awarding_img = "images/logo/sage-logo.jpg";
                                                                $about = "";
                                                                
                                                            }else if($course->awarding_body==8){
                                                                $awarding_name = "University of Chichester";
                                                                $awarding_img = "images/logo/chichester-logo.png";
                                                                $about = "";
                                                              
                                                            }else if($course->awarding_body==9){
                                                                $awarding_name = "Open University of Switzerland";
                                                                $awarding_img = "images/logo/switzerland-logo.jpg";
                                                                $about = "";
                                                               
                                                            } 
                                                    ?>
                                                    
                                                  <li class="list-inline-item"><a href="#">{{$course['category']->category_name}}</a></li>
                                                  <!-- <li class="list-inline-item"><a href="#">{{$awarding_name}}</a></li> -->
                                                  
                                                </ul>
                                                <ul class="cs_watch_list float-right mb0">
                                               
                                                    <!-- <li class="list-inline-item"><a href="#"><span class="flaticon-share"> Share</span></a></li> -->
                                                    <li class="list-inline-item"><button class="course-card-add-wish" data-course-id="{{$course->id}}" >
                                                    @if($auth_user && in_array($course->id, $auth_user->get_option('wishlists', []) ))
                                                        <i class="la la-heart"></i>
                                                    @else
                                                        <i class="la la-heart-o"></i>
                                                    @endif
                                                    </button></li>
                                                   
                                                   
                                                </ul>
                                            </div>
                                            <h3 class="cs_title">{{clean_html($course->title)}}</h3>
                                            <ul class="cs_review_seller">
                                                <li class="list-inline-item"><a href="#"><span>{{course_levels($course->level)}}</span></a></li>
                                                
                                            </ul>
                                           
                                        <?php if($course->video_src!=''){ ?>
                                            <div class="courses_big_thumb">
                                                <div class="thumb">
                                                    <iframe class="iframe_video" src="//www.youtube.com/embed/57LQI8DKwec" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        <?php }?>

                                        </div>
                                    </div>

                                    <div class="shortcode_widget_tab" >
                                            <!-- <h4>Tabs</h4> -->
                                            <div class="ui_kit_tab mt30">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color:#0e53a0">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Overview</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " id="content-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Structure</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="services-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Services</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="awarding-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">{{$awarding_name}}</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="home-tab" style="padding: 0;">
                                                        <div class="cs_row_two">
                                                            <div class="cs_overview">
                                                             
                                                                <h4 class="subtitle">Course Description</h4>
                                                                {!! $course->description !!}
                                                                @if($course->benefits)
                                                                <h4 class="subtitle">What you'll learn</h4>
                                                                <ul class="list_requiremetn">
                                                                {!! $course->benefits !!}
                                                                </ul>
                                                                @endif
                                                                <!-- @if($course->entry_requirements)
                                                                <h4 class="subtitle">Requirements</h4>
                                                                <ul class="list_requiremetn">
                                                                {!! $course->entry_requirements !!}
                                                                </ul>
                                                                @endif -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="content-tab" style="padding: 0;">
                                                        <div class="cs_row_three">
                                                            <div class="course_content">
                                                                <div class="cc_headers">
                                                                    <h4 class="title">Structure</h4>
                                                                    <!-- <ul class="course_schdule float-right">
                                                                        <li class="list-inline-item"><a href="#">92 Lectures</a></li>
                                                                        <li class="list-inline-item"><a href="#">10:56:11</a></li>
                                                                    </ul> -->
                                                                </div>
                                                                <br>
                                                              @foreach($units as $unit)
                                                             
                                                                <div class="details">
                                                                    <div id="accordion" class="panel-group cc_tab">
                                                                        <div class="panel">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a href="#panelBody{{$unit->id }}" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">{{$unit->subject_name}}</a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="panelBody{{$unit->id}}" class="panel-collapse collapse">
                                                                                <div class="panel-body">
                                                                                <p>Credit : {{$unit->credit}} || TQT : {{$unit->TQT}}</p>
                                                                                <p>{{$unit->unit_description}}</p>
                                                                                    <!-- <ul class="cs_list mb0">
                                                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.2 Exercise: Your first design challenge <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.3 How to solve the previous exercise <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.4 Find out why smart objects are amazing <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.5 How to use text layers effectively <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                                                    </ul> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            @endforeach
                                                            </div>
                                                        </div>

                                                        <div class="cs_row_two">
                                                            <div class="cs_overview">
                                                             
                                                               
                                                               
                                                                 @if($course->entry_requirements)
                                                                <h4 class="subtitle">Requirements</h4>
                                                                <ul class="list_requiremetn">
                                                                {!! $course->entry_requirements !!}
                                                                </ul>
                                                                @endif
                                                                @if($course->assessment)
                                                                <h4 class="subtitle">Assessment</h4>
                                                                <ul class="list_requiremetn">
                                                                {!! $course->assessment !!}
                                                                </ul>
                                                                @endif
                                                                @if($course->progression)
                                                                <h4 class="subtitle">Progression</h4>
                                                                <ul class="list_requiremetn">
                                                                {!! $course->progression !!}
                                                                </ul>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="services-tab" style="padding: 0;">
                                                        <div class="cs_row_two">
                                                            <div class="cs_overview">
                                                            
                                                                @if($course->online_workshops)
                                                                <h4 class="subtitle">Online Workshops</h4>
                                                                <ul class="list_requiremetn">
                                                                {!! $course->online_workshops !!}
                                                                </ul>
                                                                @endif
                                                              
                                                                <h4 class="subtitle">Delivery Methods</h4>
                                                                <!-- <ul class="list_requiremetn"> -->
                                                                <p>School of Business London provides various flexible delivery methods to its learners which include blended learning and online learning. 
                                                            Thus, learners can choose the mode of study as per their choice and convenience. 
                                                            The program is self-paced and accomplished through our cutting-edge Learning Management System. 
                                                            Learners can interact with tutors by messaging through the SBL Support Desk Portal System to discuss the course materials,
                                                            get guidance and assistance and request assessment feedbacks on assignments.</p>
                                                        <p>We at SBL offer outstanding support and infrastructure for both online and blended learning. We indeed pursue a smart learning approach where the traditional regular classroom-based learning is replaced by web-based learning and the support level is incredibly high. Learners enrolled at SBL are allocated a dedicated tutor whether it is online or blended learning, who provide learners with comprehensive guidance and support from start to finish of the course.</p>
                                                        <p>The significant difference between blended and online learning methods at SBL is the Block Delivery of Online Live Classes. Learners enrolled at SBL on blended learning are offered a block delivery of online live classes which can be booked in advance on their convenience at additional cost.</p>
                                                                <!-- </ul> -->

                                                                <h4 class="subtitle">Resources and Support</h4>
                                                                <p>School of Business London is dedicated to offering excellent support on every step of your learning journey. School of Business London occupies a centralised tutor support desk portal,
                                                            through which our support team liaise with both tutors and learners to provide guidance, assessment feedback, and any other study support adequately and promptly. Once a learner raises a support request through the support desk portal (Be it for guidance, assessment feedback or any additional assistance), one of the support team members assign the relevant to request to an allocated tutor. As soon as the support receive a response from the allocated tutor, it will be made available to the learner in the portal. The support desk system is in place to assist the learners adequately and to streamline all the support process efficiently.</p>
                                                        <p>Quality learning materials made by industry experts is a significant competitive edge of School of Business London. Quality learning materials comprised of structured lecture notes,
                                                         study guides, practical applications which includes real-world examples, and case studies that will enable you to apply your knowledge. Learning materials are provided in one of the three formats, such as PDF, PowerPoint, or Interactive Text Content on the learning portal.</p>
                                                             

                                                                <h4 class="subtitle">What is Included</h4>
                                                                <ul class="list_requiremetn">
                                                                <li>Outstanding tutor support that gives you supportive guidance all through the course accomplishment through SBL Support Desk Portal.</li>
                                                           <li>Access to our cutting-edge learning management platform where you will be able to access vital learning resources and communicate with support desk team.</li>
                                                           <li>Quality learning materials such as structured lecture notes, study guides, practical applications which includes real-world examples, and case studies that will enable you to apply your knowledge. Learning materials are provided in one of the three formats, such as PDF, PowerPoint, or Interactive Text Content on the learning portal.</li>
                                                           <li>Formative assessment feedback will be provided by the tutors to improve the learners’ achievements.</li>
                                                           <li>Assessment materials are accessible through our online learning platform</li>
                                                           <li>Supervision for all modules</li>
                                                           <li>Multiplatform accessibility through online learning platform. This facilitates SBL in providing learners with course materials directly through smartphone, laptop, tablets or desktop offering students’ opportunity to study as per their convenience.</li>
                                                           <li>Live Classes (for Blended Learning Students only).</li>
                                                                </ul>

                                                                 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="awarding-tab" style="padding: 0;">
                                                        <div class="cs_row_two">
                                                            <div class="cs_overview">
                                                             
                                                               
                                                                @if($about )
                                                                <h4 class="subtitle">About Awarding Body</h4>
                                                                {!! $about   !!}
                                                                @endif
                                                                @if($course->y_gain_qualification)
                                                                <h4 class="subtitle">Why gain a {{$awarding_name}} Qualification</h4>
                                                                {!! $course->y_gain_qualification   !!}
                                                                @endif
                                                                <!-- @if($course->entry_requirements)
                                                                <h4 class="subtitle">Requirements</h4>
                                                                <ul class="list_requiremetn">
                                                                {!! $course->entry_requirements !!}
                                                                </ul>
                                                                @endif -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                 
                                   
                                 
                                   
                                </div>
                            </div>
                        </div>
                      
                        @if($related_courses->count()>0)
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="r_course_title">Related Courses</h3>
                            </div>
                            @foreach($related_courses as $course1)
                                    {!! course_card($course1, 'col-md-4') !!}
                            @endforeach
                           
                           
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-4 col-xl-3">
                      <div class="feature_course_widget">
                            <ul class="list-group">
                                <h4 class="title">Awarded by</h4>
                                <li class="d-flex justify-content-between align-items-center">
                                <img src="{{theme_asset($awarding_img)}}" alt="logo">
                                </li>
                                   
                                </li>
                                
                               
                            </ul>
                        </div>
                        <div class="instructor_pricing_widget">
                          
                                <h4 class="title">Payment Options</h4>
                                <?php
                                                            if($course->awarding_body==1){
                                                                $awarding_name = "CMI";
                                                                if(strpos($course->title,'Extended') !== false){
                                                                   
                                                                    $month = 10;
                                                                    $blended_hours = 10;
                                                                }
                                                                elseif(strpos($course->title,'Diploma') !== false) {
                                                                    $month = 9;
                                                                    $blended_hours = 8;
                                                                }elseif(strpos($course->title,'Award') !== false){
                                                                    $month = 3;
                                                                    $blended_hours = 3;
                                                                }elseif(strpos($course->title,'Certificate') !== false){
                                                                    $month = 5;
                                                                    $blended_hours = 6;
                                                                }else{
                                                                   
                                                                    $month = 9;
                                                                    $blended_hours = 8;
                                                                }
                                                             $payment_flag="ok";
                                                            }else if($course->awarding_body==2){
                                                                $awarding_name = "QUALIFY";
                                                                if (strpos($course->title,'Diploma') !== false || strpos($course->title,'diploma') !== false ||strpos($course->title,'DIPLOMA') !== false) {
                                                                    $month = 9;
                                                                    $blended_hours = 8;
                                                                }elseif(strpos($course->title,'Award') !== false){
                                                                    $month = 3;
                                                                    $blended_hours = 3;
                                                                }elseif(strpos($course->title,'Certificate') !== false){
                                                                    $month = 5;
                                                                    $blended_hours = 6;
                                                                }elseif(strpos($course->title,'Extended') !== false){
                                                                    $month = 10;
                                                                    $blended_hours = 10;
                                                                }else{
                                                                    $month = 9;
                                                                    $blended_hours = 8; 
                                                                }
                                                                $payment_flag="ok";
                                                            }else if($course->awarding_body==3){
                                                                $awarding_name = "IBT";
                                                                if (strpos($course->title,'Diploma') !== false) {
                                                                    $month = 9;
                                                                    $blended_hours = 8;
                                                                }elseif(strpos($course->title,'Award') !== false){
                                                                    $month = 3;
                                                                    $blended_hours = 3;
                                                                }elseif(strpos($course->title,'Certificate') !== false){
                                                                    $month = 5;
                                                                    $blended_hours = 6;
                                                                }elseif(strpos($course->title,'Extended') !== false){
                                                                    $month = 10;
                                                                    $blended_hours = 10;
                                                                }else{
                                                                    $month = 9;
                                                                    $blended_hours = 8; 
                                                                }
                                                                $payment_flag="ok";
                                                            } else if($course->awarding_body==4){
                                                                $awarding_name = "NCC";
                                                                if (strpos($course->title,'Diploma') !== false) {
                                                                    $month = 9;
                                                                    $blended_hours = 8;
                                                                }elseif(strpos($course->title,'Award') !== false){
                                                                    $month = 3;
                                                                    $blended_hours = 3;
                                                                }elseif(strpos($course->title,'Certificate') !== false){
                                                                    $month = 5;
                                                                    $blended_hours = 6;
                                                                }elseif(strpos($course->title,'Extended') !== false){
                                                                    $month = 10;
                                                                    $blended_hours = 10;
                                                                }else{
                                                                    $month = 9;
                                                                    $blended_hours = 8;
                                                                }
                                                                $payment_flag="not_ok";
                                                            } else if($course->awarding_body==5){
                                                                $awarding_name = "Anglia Ruskin University";
                                                                $payment_flag="not_ok";
                                                               
                                                            } else if($course->awarding_body==6){
                                                                $awarding_name = "UCLAN";
                                                                $payment_flag="not_ok";
                                                            
                                                            }else if($course->awarding_body==7){
                                                                $awarding_name = "Sage Qualifications";
                                                                $payment_flag="not_ok";
                                                                
                                                            }else if($course->awarding_body==8){
                                                                $awarding_name = "University of Chichester";
                                                                $payment_flag="not_ok";
                                                            }else if($course->awarding_body==9){
                                                                $awarding_name = "Open University of Switzerland";
                                                                $payment_flag="not_ok";
                                                               
                                                            } 
                                                    ?>
                                            
                                <?php if($payment_flag=="ok"){ ?>
                                <div class="ui_kit_radiobox">
                                    <div class="radio active">
                                        <input id="radio_one" value="true" name="tax" type="radio"  data-toggle="collapse" data-target="#collapseOne" checked="checked">
                                        <label for="radio_one"><span class="radio-label"></span> Online</label>
                                    </div>
                                    <?php if($course->blended==1){ ?>
                                    <div class="radio">
                                        <input id="radio_two" value="false" name="tax" type="radio" data-toggle="collapse" data-target="#collapseTwo">
                                        <label for="radio_two"><span class="radio-label"></span> Blended</label>
                                    </div>
                                    <?php }?>   
                                </div>
                                <div class="selected_filter_widget  mb30 panel-collapse collapse show" id="collapseOne" aria-expanded="true">
                                 
                                    <div id="accordion " class="panel-group">
                                        <div class="panel">
                                        
                                        <div class="panel-body">
                                      
                                            <u> <h4><i class="fa fa-dot-circle-o"></i>&nbsp Single Payment</h4></u>
                                            <?php 
                                            $total_fee = $course->sale_price + $course->rfee;
                                            $discount = $discounts[0]->one_time_discount;
                                            $after_discount =($total_fee * ($discount)/100);
                                            $fee =  $total_fee - $after_discount;
                                            $online_t_fee = $fee+($fee * 20/100);
                                            $t_course_fee = $course->sale_price + $course->rfee;
                                            ?>

                                        <div class="course-landing-page-price-wrap">
                                           <div class='price-html-wrap current-price-left'>
                                            <span class='current-price'>{{round($online_t_fee,2)}}</span>
                                            <span class='old-price'><s>{{$course->sale_price + $course->rfee}}</s></span>
                                            <span class='discount-text mr-2'>{{$discounts[0]->one_time_discount}}%</span>
                                            </div>
                                        </div>




                                        @if( $isEnrolled)
                                                <p class="text-muted"><strong>Enrolled At</strong> : {{date('F d, Y', strtotime($isEnrolled->enrolled_at))}} </p>

                                                <a href="{{$contine_url}}" class="cart_btnss"><i class="la la-play-circle"></i>Enrolled</a>
                                        
                                            @else
                                                @if($status_flag=="Pending")
                                                <a href="{{$contine_url}}" disabled class="cart_btnss"><i class="la la-play-circle"></i>Pending</a>
                                                @elseif($status_flag=="Onhold")
                                                <a href="{{$contine_url}}" disabled class="cart_btnss"><i class="la la-play-circle"></i>On Hold</a>
                                                @elseif($status_flag=="Declined")
                                                <a href="{{$contine_url}}" disabled class="cart_btnss"><i class="la la-play-circle"></i>Declined</a>
                                                @elseif($course->paid)

                                            <!-- <div class="course-landing-page-price-wrap">
                                                {!! $course->price_html(false, true) !!}
                                            </div> -->

                                            <form action="{{route('add_to_cart')}}" class="add_to_cart_form" method="post">
                                                @csrf

                                                <input type="hidden" name="course_id" value="{{$course->id}}">
                                                <input type="hidden" name="payment_type" id="payment_type" value="online_single">
                                                <input type="hidden" name="course_amount" id="course_amount" value="{{round($online_t_fee,2)}}">

                                                <div class="enroll-box-btn-group mt-3">

                                                    <?php
                                                    $in_cart = cart($course->id)

                                                    ?>
                                                    <a href="#" class="add-to-cart-btn cart_btnss" data-payment-type="online_single" data-course-id="{{$course->id}}" name="cart_btn" value="add_to_cart" {{$in_cart? 'disabled="disabled"' : ''}} >
                                                        @if($in_cart)
                                                            <i class='la la-check-circle'></i> Added to cart
                                                        @else
                                                            <i class="la la-shopping-cart"></i> Add to cart
                                                        @endif
                                                    </a>
                                                    <button type="submit" class="btn-block cart_btnss_white" name="cart_btn" style="border-radius: 27px;line-height: 1.2" value="buy_now">Buy now</button>
                                                </div>
                                            </form>

                                        @elseif($course->free)
                                            <div class="course-landing-page-price-wrap">
                                                {!! $course->price_html(false, true) !!}
                                            </div>
                                            
                                            <form action="{{route('free_enroll')}}" class="course-free-enroll" method="post">
                                                @csrf
                                                <input type="hidden" name="course_id" value="{{$course->id}}">
                                                <button type="submit" class="btn btn-warning btn-lg btn-block">{{__t('enroll_now')}}</button>
                                            </form>
                                    
                                        @endif
                                    @endif

                                            <!-- <table>
                                            <tr>
                                        <td>Course Fee</td> <td>{{$course->sale_price}}</td>
                                            </tr>
                                            <tr>
                                        <td>Registration Fee</td> <td>{{$course->rfee}}</td>
                                            </tr>
                                            <tr>
                                        <td> Total Course Fee</td> <td>{{$course->sale_price + $course->rfee}}</td>
                                            </tr>
                                            <tr> 
                                        <td>Discount</td> <td>{{$discounts[0]->one_time_discount}}%</td>
                                            </tr>
                                            <tr> 
                                        <td>Final Cost</td> <td>{{round($online_t_fee,2)}}</td>
                                            </tr>
                                        </table> -->
                                        
                                            <!-- <p>Course Fee        : {{$course->sale_price}}</p>
                                            <p>Registration Fee  : {{$course->rfee}}</p>
                                            <p>Total Course Fee  : {{$course->sale_price + $course->rfee}}</p>
                                            <p>Discount  :  {{$discounts[0]->one_time_discount}}%</p> -->
                                        
                                        
                                            <!-- <strong><p>Final Cost : {{$online_t_fee}}</p></strong> -->
                                            </div>
                                        <br>
                                            <div class="panel-body">
                                            
                                            <?php 
                                            $total_fee = $course->sale_price + $course->rfee;
                                            $discount = $discounts[0]->monthly_discount;
                                            $discount_value =($total_fee * ($discount)/100);
                                            $fee_after_discount =  $total_fee - $discount_value;
                                            $fee_afee_total = $fee_after_discount + $course->afee;
                                            $vat = 20;
                                            $total_course_fee = $fee_afee_total + ($fee_afee_total * 20/100);
                                            $initial_deposit =  $total_course_fee * 35/100;
                                        
                                        
                                            $balance_fee = $total_course_fee-$initial_deposit;
                                        
                                            $monthly_installment = $balance_fee/$month;
                                            ?>
                                         
                                         <h4><i class="fa fa-dot-circle-o"></i>&nbsp; Monthly Payment</h4>

                                       
                                            <table>
                                            <tr><th>Monthly Payment</th></tr>
                                            <tr>
                                            <td>Course Fee</td>
                                            <td>{{$course->sale_price}}</td>
                                            </tr>
                                            <tr> <td>Registration Fee</td><td>{{$course->rfee}}</td>  </tr>
                                            <tr> <td>Total Course Fee</td><td>{{$course->sale_price + $course->rfee}}</td>  </tr>
                                            <tr> <td>Discount</td><td>{{$discounts[0]->monthly_discount}}%</td>  </tr>
                                            <tr> <td>Final Cost</td><td>{{$total_course_fee}}</td>  </tr>
                                            <tr> <td>Initial Deposit (including Registration)</td><td>{{$initial_deposit}}</td>  </tr>
                                            <tr> <td>{{$month}} Monthly Instalments</td><td>{{round($monthly_installment,2)}}</td>  </tr>
                                            </table>

                                            @if( $isEnrolled)
                                                <p class="text-muted"><strong>Enrolled At</strong> : {{date('F d, Y', strtotime($isEnrolled->enrolled_at))}} </p>

                                                <a href="{{$contine_url}}" class="cart_btnss"><i class="la la-play-circle"></i>Enrolled</a>
                                        
                                            @else
                                                @if($status_flag=="Pending")
                                                <a href="{{$contine_url}}" disabled class="cart_btnss"><i class="la la-play-circle"></i>Pending</a>
                                                @elseif($status_flag=="Onhold")
                                                <a href="{{$contine_url}}" disabled class="cart_btnss"><i class="la la-play-circle"></i>On Hold</a>
                                                @elseif($status_flag=="Declined")
                                                <a href="{{$contine_url}}" disabled class="cart_btnss"><i class="la la-play-circle"></i>Declined</a>
                                                @elseif($course->paid)

                                            <!-- <div class="course-landing-page-price-wrap">
                                                {!! $course->price_html(false, true) !!}
                                            </div> -->

                                            <form action="{{route('add_to_cart')}}" class="add_to_cart_form" method="post">
                                                @csrf

                                                <input type="hidden" name="course_id" value="{{$course->id}}">
                                              

                                                <div class="enroll-box-btn-group mt-3">

                                                    <?php
                                                    $in_cart = cart($course->id)

                                                    ?>
                                                    <a href="#"  class=" add-to-cart-btn cart_btnss" data-course-id="{{$course->id}}" data-payment-type="online_monthly" name="cart_btn" value="add_to_cart" {{$in_cart? 'disabled="disabled"' : ''}} >
                                                        @if($in_cart)
                                                            <i class='la la-check-circle'></i> Added to cart
                                                        @else
                                                            <i class="la la-shopping-cart"></i> Add to cart
                                                        @endif
                                                    </a>
                                                    <button type="submit" class="btn-block cart_btnss_white" name="cart_btn" style="border-radius: 27px;line-height: 1.2" value="buy_now">Buy now</button>
                                                </div>
                                            </form>

                                        @elseif($course->free)
                                            <!-- <div class="course-landing-page-price-wrap">
                                                {!! $course->price_html(false, true) !!}
                                            </div> -->
                                            
                                            <form action="{{route('free_enroll')}}" class="course-free-enroll" method="post">
                                                @csrf
                                                <input type="hidden" name="course_id" value="{{$course->id}}">
                                                <button type="submit" class="btn btn-warning btn-lg btn-block">{{__t('enroll_now')}}</button>
                                            </form>
                                    
                                        @endif
                                    @endif

                                        
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="selected_filter_widget  mb30 panel-collapse collapse" id="collapseTwo">
                                    <div id="accordion" class="panel-group">
                                        <div class="panel">

                                            <div class="panel-body">
                                            <?php   
                                                $online_course_fee = $course->sale_price + ($blended_hours*75);
                                                $online_total_course_fee = $online_course_fee + $course->rfee;
                                                $discount = $discounts[0]->one_time_discount;
                                                $online_after_discount =($online_total_course_fee * ($discount)/100);
                                                $online_fee =  $online_total_course_fee - $online_after_discount;
                                                $online_fee_total = $online_fee + ($online_fee * 20/100);
                                            
                                            ?>
                                            <u> <h4><i class="fa fa-dot-circle-o"></i>&nbsp Single Payment</h4></u>

                                            <table>
                                            <tr><td>Course Fee</td><td>{{$online_course_fee}}</td></tr>
                                            <tr><td>Registration Fee</td><td>{{$course->rfee}}</td></tr>
                                            <tr><td>Total Course Fee</td><td>{{$online_total_course_fee}}</td></tr>
                                            <tr><td>Discount</td><td>{{$discount}}%</td></tr>
                                            <tr><td>Final Cost </td><td>{{$online_fee_total}}</td></tr>
                                            </table>

                                                <!-- 
                                            <p>Course Fee        : {{$online_course_fee}}</p>
                                            <p>Registration Fee  : {{$course->rfee}}</p>
                                            <p>Total Course Fee  : {{$online_total_course_fee}}</p>
                                            <p>Discount  :  {{$discount}}%</p>
                                            <strong><p>Final Cost : {{$online_fee_total}}</p></strong> -->
                                            </div>

                                            <div class="panel-body">
                                            <?php   
                                                $online_monthly_course_fee = $course->sale_price + ($blended_hours*75);
                                                $online_monthly_total_course_fee = $online_monthly_course_fee + $course->rfee;
                                                $monthly_discount = $discounts[0]->monthly_discount;
                                                $online_monthly_after_discount =($online_monthly_total_course_fee * ($monthly_discount)/100);
                                                $monthly_fee_after_discount =  $online_monthly_total_course_fee - $online_monthly_after_discount;
                                                $online_monthly_fee_afee_total = $monthly_fee_after_discount + $course->afee;
                                                $vat = 20;

                                            $online_monthly_vat = $online_monthly_fee_afee_total + ($online_monthly_fee_afee_total * 20/100);
                                            $online_initial_deposit =  $online_monthly_vat * 35/100;

                                            $online_monthly_balance_fee = $online_monthly_vat-$online_initial_deposit;
                                            $online_monthly_installment = $online_monthly_balance_fee/$month;
                                            ?>
                                            <u> <h4><i class="fa fa-dot-circle-o"></i>&nbsp Monthly Payment</h4></u>

                                            <table>
                                            <tr><td>Course Fee</td><td>{{$online_monthly_course_fee}}</td></tr>
                                            <tr><td>Registration Fee</td><td> {{$course->rfee}}</td></tr>
                                            <tr><td>Total Course Fee</td><td>{{$online_monthly_total_course_fee}}</td></tr>
                                            <tr><td>Discount</td><td> {{$monthly_discount}}%</td></tr>
                                            <tr><td>Administration Fee</td><td> {{$course->afee}}</td></tr>
                                            <tr><td>Final Cost</td><td> {{$online_monthly_vat}}</td></tr>
                                            <tr><td>Initial Deposit (including Registration)</td><td> {{$online_initial_deposit}}</td></tr>
                                            <tr><td>{{$month}} Monthly Instalments</td><td>{{round($online_monthly_installment,2)}} </td></tr>
                                            </table>



                                            <!-- <p>Course Fee        : {{$online_monthly_course_fee}}</p>
                                            <p>Registration Fee  : {{$course->rfee}}</p>
                                            <p>Total Course Fee  : {{$online_monthly_total_course_fee}}</p>
                                            <p>Discount  :  {{$monthly_discount}}%</p>
                                            <p>Administration Fee  : {{$course->afee}}</p>
                                            <p>Final Cost : {{$online_monthly_vat}}</p>
                                            <strong><p>Initial Deposit (including Registration)	 : {{$online_initial_deposit}}</p></strong>
                                            <p>{{$month}} Monthly Instalments : {{$online_monthly_installment}}</p>
                                            <p></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }else{ ?>   

                            <h5 class="subtitle">To know about the course fee, please get in touch with us at:
                                admission@sbusinesslondon.ac.uk</h5>
                            <?php } ?> 
                               
                           
                        </div>
                        <div class="instructor_pricing_widget">
                            <!-- <div class="price"><span>Price</span> $49.00 <small>$69.00</small></div>
                            <a href="#" class="cart_btnss">Add To Cart</a>
                            <a href="#" class="cart_btnss_white">Buy Now</a> -->
                                           
                                
                            
                          
                                         <!-- @if( $isEnrolled)
                                                <p class="text-muted"><strong>Enrolled At</strong> : {{date('F d, Y', strtotime($isEnrolled->enrolled_at))}} </p>

                                                <a href="{{$contine_url}}" class="cart_btnss"><i class="la la-play-circle"></i>Enrolled</a>
                                        
                                            @else
                                                @if($status_flag=="Pending")
                                                <a href="{{$contine_url}}" disabled class="cart_btnss"><i class="la la-play-circle"></i>Pending</a>
                                                @elseif($status_flag=="Onhold")
                                                <a href="{{$contine_url}}" disabled class="cart_btnss"><i class="la la-play-circle"></i>On Hold</a>
                                                @elseif($status_flag=="Declined")
                                                <a href="{{$contine_url}}" disabled class="cart_btnss"><i class="la la-play-circle"></i>Declined</a>
                                                @elseif($course->paid)

                                            <div class="course-landing-page-price-wrap">
                                                {!! $course->price_html(false, true) !!}
                                            </div>

                                            <form action="{{route('add_to_cart')}}" class="add_to_cart_form" method="post">
                                                @csrf

                                                <input type="hidden" name="course_id" value="{{$course->id}}">

                                                <div class="enroll-box-btn-group mt-3">

                                                    <?php
                                                    $in_cart = cart($course->id)

                                                    ?>
                                                    <a href="#"  class=" add-to-cart-btn cart_btnss" data-course-id="{{$course->id}}" name="cart_btn" value="add_to_cart" {{$in_cart? 'disabled="disabled"' : ''}} >
                                                        @if($in_cart)
                                                            <i class='la la-check-circle'></i> Added to cart
                                                        @else
                                                            <i class="la la-shopping-cart"></i> Add to cart
                                                        @endif
                                                    </a>
                                                    <button type="submit" class="btn-block cart_btnss_white" name="cart_btn" style="border-radius: 27px;line-height: 1.2" value="buy_now">Buy now</button>
                                                </div>
                                            </form>

                                        @elseif($course->free)
                                            <div class="course-landing-page-price-wrap">
                                                {!! $course->price_html(false, true) !!}
                                            </div>
                                            
                                            <form action="{{route('free_enroll')}}" class="course-free-enroll" method="post">
                                                @csrf
                                                <input type="hidden" name="course_id" value="{{$course->id}}">
                                                <button type="submit" class="btn btn-warning btn-lg btn-block">{{__t('enroll_now')}}</button>
                                            </form>
                                    
                                        @endif
                                    @endif -->


                                                             <?php
                                                            if($course->awarding_body==1){
                                                                $awarding_name = "CMI";
                                                                if (strpos($course->title,'Diploma') !== false) {
                                                                    $month_1 = 9;
                                                                  
                                                                }elseif(strpos($course->title,'Award') !== false){
                                                                    $month_1 = 4;
                                                                  
                                                                }elseif(strpos($course->title,'Certificate') !== false){
                                                                    $month_1 = 6;
                                                                  
                                                                }elseif(strpos($course->title,'Extended') !== false){
                                                                    $month_1 = 11;
                                                                   
                                                                }else{
                                                                    $month_1 = 9;
                                                                }
                                                          
                                                            }else if($course->awarding_body==2){
                                                                $awarding_name = "QUALIFY";
                                                                if (strpos($course->title,'Diploma') !== false) {
                                                                    $month_1 = 9;
                                                                  
                                                                }elseif(strpos($course->title,'Award') !== false){
                                                                    $month_1 = 4;
                                                                  
                                                                }elseif(strpos($course->title,'Certificate') !== false){
                                                                    $month_1 = 6;
                                                                  
                                                                }elseif(strpos($course->title,'Extended') !== false){
                                                                    $month_1 = 11;
                                                                   
                                                                }else{
                                                                    $month_1 = 9;
                                                                }
                                                            }else if($course->awarding_body==3){
                                                                $awarding_name = "IBT";
                                                                if (strpos($course->title,'Diploma') !== false) {
                                                                    $month_1 = 9;
                                                                  
                                                                }elseif(strpos($course->title,'Award') !== false){
                                                                    $month_1 = 4;
                                                                  
                                                                }elseif(strpos($course->title,'Certificate') !== false){
                                                                    $month_1 = 6;
                                                                  
                                                                }elseif(strpos($course->title,'Extended') !== false){
                                                                    $month_1 = 11;
                                                                   
                                                                }else{
                                                                    $month_1 = 9;
                                                                }
                                                            } else if($course->awarding_body==4){
                                                                $awarding_name = "NCC";
                                                                $month_1 ="contact us";
                                                            } else if($course->awarding_body==5){
                                                                $awarding_name = "Anglia Ruskin University";
                                                                $month_1 ="contact us";
                                                               
                                                            } else if($course->awarding_body==6){
                                                                $awarding_name = "UCLAN";
                                                                $month_1 ="contact us";
                                                            
                                                            }else if($course->awarding_body==7){
                                                                $awarding_name = "Sage Qualifications";
                                                                $month_1 ="contact us";
                                                                
                                                            }else if($course->awarding_body==8){
                                                                $awarding_name = "University of Chichester";
                                                                $month_1 ="contact us";
                                                            }else if($course->awarding_body==9){
                                                                $awarding_name = "Open University of Switzerland";
                                                                $month_1 ="contact us";
                                                               
                                                            } 
                                                    ?>



                            <h5 class="subtitle text-left">Includes</h5>
                            <ul class="price_quere_list text-left">
                                <li>
                                <a href="#"><i class="fa fa-calendar-check-o"></i> Accreditation</a>
                                <a href="#" style="float:right"> Ofqual.Gov.UK</a></li>
                                <li>
                                <li>
                                <a href="#"><i class="fa fa-calendar-check-o"></i> Delivery</a>
                                <a href="#" style="float:right"> Online / Blended</a></li>
                                <li>
                                <li>
                                <a href="#"><i class="fa fa-calendar-check-o"></i> Assessments</a>
                                <a href="#" style="float:right"> Assignments Only</a></li>
                                <li>
                                <li>
                                <a href="#"><i class="fa fa-calendar-check-o"></i> Starts</a>
                                <a href="#" style="float:right"> Every Month</a></li>
                                <li>
                                <a href="#"><i class="fa fa-calendar-check-o"></i> Duration</a>
                               
                                <a href="#" style="float:right"> {{$month_1}} Months</a>
                                </li>
                                <li>
                                <a href="#"><i class="fa fa-calendar-check-o"></i> Course Materials</a>
                                <a href="#" style="float:right"> Well Structured</a></li>
                                <li>
                                <li>
                                <a href="#"><i class="fa fa-calendar-check-o"></i>All Inclusive Fees</a>
                                <a href="#" style="float:right">Yes</a></li>
                                <li>
                                
                            </ul>
                            <a href="#popup-2" data-toggle="modal" class="cart_btnss">Request Info</a>
                            <a href="#popup-1" data-toggle="modal" class="cart_btnss_white">Payment Plan</a>
                        </div>
                      
                        <div class="blog_tag_widget">
                            <h4 class="title">Tags</h4>
                            <ul class="tag_list">
                           
                             <li class="list-inline-item"><a href="#info-1" data-toggle="modal">{{course_levels($course->level)}}</a></li>
                            <li class="list-inline-item"><a href="#info-1" data-toggle="modal">{{$awarding_name}}</a></li>
                            <li class="list-inline-item"><a href="#info-1" data-toggle="modal">{{$course['category']->category_name}}</a></li>
                                
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>






    <!-- <div class="page-header-jumborton py-5">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-header-left">
                        <h1>{{clean_html($course->title)}}</h1>
                        @if($course->short_description)
                            <p class="page-header-subtitle m-0">{{clean_html($course->short_description)}}</p>
                        @endif

                        <p class="mt-3 course-head-meta-wrap">
                            <span><i class="la la-signal"></i> {{course_levels($course->level)}} </span>
                        </p>

                        <p>
                            <span class="created-by mr-3">
                                <i class="la la-user"></i> {{__t('created_by')}} {{$course->author->name}}
                            </span>

                            <span class="last-updated-at">
                                <i class="la la-clock"></i>
                                {{__t('last_updated')}} {{$course->last_updated_at->format(date_time_format())}}
                            </span>
                        </p>

                    </div>
                </div>

                <div class="col-md-4">

                    <div class="page-header-right-enroll-box p-3 mt-sm-4 mt-md-0 bg-white shadow">

                        @if( $isEnrolled)
                            <p class="text-muted"><strong>Enrolled At</strong> : {{date('F d, Y', strtotime($isEnrolled->enrolled_at))}} </p>

                            <a href="{{$contine_url}}" class="btn btn-info btn-lg btn-block"><i class="la la-play-circle"></i> Continue course</a>

                        @else
                            @if($course->paid)

                                <div class="course-landing-page-price-wrap">
                                    {!! $course->price_html(false, true) !!}
                                </div>

                                <form action="{{route('add_to_cart')}}" class="add_to_cart_form" method="post">
                                    @csrf

                                    <input type="hidden" name="course_id" value="{{$course->id}}">

                                    <div class="enroll-box-btn-group mt-3">

                                        <?php
                                        $in_cart = cart($course->id)

                                        ?>
                                        <button type="button" class="btn btn-lg btn-theme-primary btn-block mb-3 add-to-cart-btn" data-course-id="{{$course->id}}" name="cart_btn" value="add_to_cart" {{$in_cart? 'disabled="disabled"' : ''}} >
                                            @if($in_cart)
                                                <i class='la la-check-circle'></i> Added to cart
                                            @else
                                                <i class="la la-shopping-cart"></i> Add to cart
                                            @endif
                                        </button>
                                        <button type="submit" class="btn btn-lg btn-outline-dark btn-block" name="cart_btn" value="buy_now">Buy now</button>
                                    </div>
                                </form>

                            @elseif($course->free)
                                <div class="course-landing-page-price-wrap">
                                    {!! $course->price_html(false, true) !!}
                                </div>
                                <form action="{{route('free_enroll')}}" class="course-free-enroll" method="post">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{$course->id}}">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block">{{__t('enroll_now')}}</button>
                                </form>
                            @endif
                        @endif

                    </div>

                </div>

            </div>
        </div>

    </div>  -->

<!-- 
    <div class="container my-4">

        <div class="row">
            <div class="col-md-10 offset-md-1">


                <div class="course-details-wrap">


                    <div class="course-intro-stats-wrapper mb-4">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="course-whats-included-box course-widget p-4">
                                    <h4 class="mb-4">{{__t('whats_included')}}</h4>

                                    @php
                                        $lectures_count = $course->lectures->count();
                                        $assignments_count = $course->assignments->count();
                                        $attachments_count = $course->contents_attachments->count();
                                    @endphp

                                    <ul>
                                        @if($course->total_video_time)
                                            <li> <i class="la la-video"></i> {{seconds_to_time_format($course->total_video_time)}} {{__t('on_demand_video')}} </li>
                                        @endif

                                        <li> <i class="la la-book"></i> {{$lectures_count}} {{__t('lectures')}} </li>
                                        @if($assignments_count)
                                            <li> <i class="la la-tasks"></i> {{$assignments_count}} {{__t('assignments')}}</li>
                                        @endif
                                        @if($attachments_count)
                                            <li> <i class="la la-file-download"></i> {{$attachments_count}} downloadable resources </li>
                                        @endif

                                        <li> <i class="la la-mobile"></i> Access on tablet and phone </li>
                                        <li> <i class="la la-certificate"></i> Certificate of completion </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="col-md-6">

                                @if($course->video_info())
                                    @include(theme('video-player'), ['model' => $course, 'video_caption' => __t('preview')])
                                @else
                                    <img src="{{media_image_uri($course->thumbnail_id)->image_md}}" class="img-fluid" />
                                @endif


                            </div>
                        </div>

                    </div>



                    @if($course->benefits_arr)
                        <div class="course-widget mb-4 p-4">
                            <h4 class="mb-4">{{__t('what_learn')}}</h4>

                            <div class="content-expand-wrap">
                                <div class="content-expand-inner">
                                    <ul class="benefits-items row">
                                        @foreach($course->benefits_arr as $benefit)
                                            <li class="col-6 benefit-item d-flex mb-2">
                                                <i class="la la-check-square"></i>
                                                <span class="benefit-item-text ml-2">{{$benefit}}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($course->sections->count())

                        <div class="course-curriculum-header d-flex mt-5">
                            <h4 class="mb-4 course-curriculum-title flex-grow-1">{{__t('course_curriculum')}}</h4>

                            <p id="expand-collapse-all-sections">
                                <a href="javascript:;" data-action="expand">Expand all</a>
                                <a href="javascript:;" data-action="collapse" style="display: none;">Collapse all</a>
                            </p>

                            <p class="ml-3 course-total-lectures-info">{{$course->total_lectures}} {{__t('lectures')}}</p>
                            <p class="ml-3 mr-3 course-runtime-info">{{seconds_to_time_format($course->total_video_time)}}</p>
                        </div>

                        <div class="course-curriculum-wrap mb-4">

                            @foreach($course->sections as $section)

                                <div id="course-section-{{$section->id}}" class="course-section bg-white border mb-2">

                                    <div class="course-section-header bg-light p-3 border-bottom d-flex">
                                        <span class="course-section-name flex-grow-1 ml-2">
                                            <strong>
                                                <i class="la la-{{$loop->first ? 'minus' : 'plus'}}"></i>
                                                {{$section->section_name}}
                                            </strong>
                                        </span>

                                        <span class="course-section-lecture-count">
                                            {{$section->items->count()}} {{__t('lectures')}}
                                        </span>
                                    </div>

                                    <div class="course-section-body" style="display: {{$loop->first ? 'block' : 'none'}};">

                                        @if($section->items->count())
                                            @foreach($section->items as $item)
                                                <div class="course-curriculum-item border-bottom pl-4 d-flex">
                                                    <p class="curriculum-item-title m-0 flex-grow-1">

                                                        <a href="{{route('single_'.$item->item_type, [$course->slug, $item->id ] )}}">
                                                            <span class="curriculum-item-icon mr-2">
                                                                {!! $item->icon_html !!}
                                                            </span>
                                                            <span class="curriculum-item-title">
                                                                {{clean_html($item->title)}}
                                                            </span>
                                                        </a>
                                                    </p>

                                                    <p class="course-section-item-details d-flex m-0">
                                                        <span class="section-item-preview flex-grow-1">
                                                            @if($item->is_preview)
                                                                <a href="{{route('single_lecture', [$course->slug, $item->id ] )}}">
                                                                 <i class="la la-eye"></i> {{__t('preview')}}
                                                             </a>
                                                            @endif
                                                        </span>

                                                        @if($item->attachments->count())
                                                            <span class="section-item-attachments mr-3" data-toggle="tooltip" title="{{__t('dl_resource_available')}}">
                                                                <i class="la la-paperclip"></i>
                                                            </span>
                                                        @endif

                                                        <span class="section-item-duration ml-auto">
                                                            {{$item->runtime}}
                                                        </span>
                                                    </p>

                                                </div>
                                            @endforeach
                                        @endif

                                    </div>

                                </div>
                            @endforeach

                        </div>
                    @endif

                    @if($course->requirements_arr)
                        <h4 class="mb-4">{{__t('requirements')}}</h4>

                        <div class="course-widget mb-4 p-4">
                            <ul class="benefits-items row">
                                @foreach($course->requirements_arr as $requirement)
                                    <li class="col-6 benefit-item d-flex mb-2">
                                        <i class="la la-info-circle"></i>
                                        <span class="benefit-item-text ml-2">{{$requirement}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($course->description)
                        <div class="course-description mt-4 mb-5">
                            <h4 class="mb-4 course-description-title">{{__t('description')}}</h4>

                            <div class="content-expand-wrap">
                                <div class="content-expand-inner">
                                    {!! $course->description !!}
                                </div>
                            </div>
                        </div>
                    @endif


                    <div id="course-instructors-wrap" class="my-5">

                        <h4 class="mb-4">{{__t('instructors')}}</h4>

                        @foreach($course->instructors as $instructor)
                            @php
                                $courses_count = $instructor->courses()->publish()->count();
                                $students_count = $instructor->student_enrolls->count();
                                $instructor_rating = $instructor->get_rating;
                            @endphp

                            <div class="course-single-instructor-wrap mb-4 d-flex">

                                <div class="instructor-stats">
                                    <div class="profile-image mb-4">
                                        <a href="{{route('profile', $instructor->id)}}">
                                            {!! $instructor->get_photo !!}
                                        </a>
                                    </div>

                                    @if($instructor_rating->rating_count)
                                        <div class="profile-rating-wrap d-flex">
                                            {!! star_rating_generator($instructor_rating->rating_avg) !!}
                                            <p class="m-0 ml-2">({{$instructor_rating->rating_avg}})</p>
                                        </div>
                                    @endif

                                    <p class="instructor-stat-value mb-1">
                                        <i class="la la-play-circle"></i>
                                        <strong>{{$courses_count}}</strong> {{__t('courses')}}
                                    </p>
                                    <p class="instructor-stat-value mb-1">
                                        <i class="la la-user-circle"></i>
                                        <strong>{{$students_count}}</strong> {{__t('students')}}
                                    </p>
                                    <p class="instructor-stat-value mb-1">
                                        <i class="la la-comments"></i>
                                        <strong>{{$instructor_rating->rating_count}} </strong> {{__t('reviews')}}
                                    </p>
                                </div>

                                <div class="instructor-details">
                                    <a href="{{route('profile', $instructor->id)}}">
                                        <h4 class="instructor-name">{{$instructor->name}}</h4>
                                    </a>

                                    @if($instructor->job_title)
                                        <h5 class="instructor-designation">{{$instructor->job_title}}</h5>
                                    @endif

                                    @if($instructor->about_me)
                                        <div class="profle-about-me-text mt-4">
                                            <div class="content-expand-wrap">
                                                <div class="content-expand-inner">
                                                    {!! nl2br($instructor->about_me) !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                            </div>

                        @endforeach
                    </div>


                    @if($course->reviews->count())
                        <div id="course-ratings-wrap">
                            <h4 class="mb-4">{{__t('student_feedback')}}</h4>

                            <div id="course-rating-stats-wrap" class="my-4 d-flex">
                                <div class="rating-stats-avg mr-5">
                                    <p class="rating-avg-big m-0">{{$course->rating_value}}</p>
                                    {!! star_rating_generator($course->rating_value) !!}
                                    <p class="number-of-reviews mt-3">
                                        {{sprintf(__t('from_amount_reviews'), $course->rating_count)}}
                                    </p>
                                </div>

                                <div class="star-rating-reviews-bar-wrap flex-grow-1">
                                    @foreach($course->get_ratings('stats') as $rateKey => $rating)
                                        <div class="rating-percent-wrap d-flex">
                                            <div class="star-rating-bar-bg">
                                                <div class="star-rating-bar-fill" style="width: {{array_get($rating, 'percent')}}%"></div>
                                            </div>

                                            <div class="star-rating-percent-wrap">
                                                {!! star_rating_generator($rateKey) !!}
                                            </div>
                                            <p class="rating-percent-text m-0">{{array_get($rating, 'percent')}}%</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="reviews-list-wrap">
                                @foreach($course->reviews as $review)
                                    <div class="single-review border-top d-flex my-3 py-3">
                                        <div class="reviewed-user d-flex">
                                            <div class="reviewed-user-photo">
                                                <a href="{{route('profile', $review->user->id)}}">
                                                    {!! $review->user->get_photo !!}
                                                </a>
                                            </div>
                                            <div class="reviewed-user-name">
                                                <p class="mb-1">
                                                    <a href="{{route('review', $review->id)}}" class="text-muted " >{{$review->created_at->diffForHumans()}}</a>
                                                </p>
                                                <a href="{{route('profile', $review->user->id)}}">{!! $review->user->name !!}</a>
                                            </div>
                                        </div>

                                        <div class="review-details">
                                            {!! star_rating_generator($review->rating) !!}
                                            @if($review->review)
                                                <div class="review-desc mt-3">
                                                    {!! nl2br($review->review) !!}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

            </div>

        </div>

    </div> -->
    <div class="request_modal modal fade" id="popup-2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>


                    <div>
                        <div class="sign_up_form">
                            <div class="heading">
                                <h3 class="text-center">Request Info</h3>

                            </div>
                            <form id="request_info" action="{{route('add_request')}}">
                                <input class="form-control" placeholder="Your Name..." name="fname" id="info_name" type="text">
                                <input class="form-control" placeholder="Email Addrress..." name="email" id="info_email" type="email" required="">
                                <input type="text" name="phone" id="info_phone" class="form-control" placeholder="Contact Number" minlength="8" maxlength="12">
                                <textarea class="form-control" rows="7" placeholder="Message..." name="message" id="info_messages"></textarea>
                               
                                <input class="form-control"  name="course" id="info_course" type="hidden" value="{{$course->id}}">
                                <div class="g-recaptcha" data-sitekey="6LcFlqMZAAAAALAVFsSI-iO9yaTtaS_6x-6XdDpB"></div>  

                                <!-- <button type="button" name="send_request_info" id="send_request_info" value="Send Message" class="btn btn_subscribe" style="margin-top:15px">Send Message <i class="fa fa-share"></i></button> -->

                                <button type="submit" class="btn btn-log btn-block btn-thm2" id="send_request_info">Send Message <i class="fa fa-share"></i></button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="payment-modal modal fade" id="popup-1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content module-content-2">
                    <div class="modal-header">
                    <h3 style="font-size: 18px;">Fees & Funding</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="p-5">
                       
<?php if($payment_flag=="ok"){ ?>

   

                        <p>The fees details provided below are for online learning only. If you would like to opt blended learning, please contact us to find out the fees information. The total cost is subjected to 20% VAT.</p>
                       
                       
                       
                        <div class="ui_kit_radiobox row">
                                <div class="col-md-6" >
                                <button type="button"style="float:right" id="online_toggle" class="btn btn-danger" data-toggle="collapse" data-target="#collapseThree">Online Learning</button>
                                    <!-- <input id="online" value="true" name="online_radio" type="radio" data-toggle="collapse" data-target="#collapseThree" > -->
                                    <!-- <label for="online"><span class="radio-label"></span> Online</label> -->
                                </div>
                                <?php if($course->blended==1){ ?>
                                    <div class="col-md-6">
                                <button type="button" id="blended_toggle" class="btn btn-danger" data-toggle="collapse" data-target="#collapseFour">Blended Learning</button>
                                    <!-- <input id="blended" value="false" name="online_radio" type="radio" data-toggle="collapse" data-target="#collapseFour">
                                    <label for="blended"><span class="radio-label"></span> Blended</label> -->
                                </div>
                                <?php }?>   
                            </div>
                            <hr>
                        <div class="selected_filter_widget  mb30 panel-collapse collapse" id="collapseThree" aria-expanded="true">
                           <div class="module-pricing pt-5">
                            <div class="price-head">
                                <h2>{{$course->title}}</h2>
                                <span class="level-badge">level 2</span> </div>
                                
                            <div class="price-body">
                                <div class="body-head">
                                    <div class="inner-body">
                                    
                                        <div class="wp"> <span class="price-title">Single Payment</span> </div>
                                        <?php 
                                         $total_fee = $course->sale_price + $course->rfee;
                                         $discount = $discounts[0]->one_time_discount;
                                         $after_discount =($total_fee * ($discount)/100);
                                         $fee =  $total_fee - $after_discount;
                                         $online_t_fee = $fee+($fee * 20/100);
                                         ?>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="span-left">Course Fee</td>
                                                    <td><span class="course_cfee">£{{$course->sale_price}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Registration Fee</td>
                                                    <td><span class="course_cfee">£{{$course->rfee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Total Course Fee</td>
                                                    <td><span class="course_cfee">£{{$course->sale_price + $course->rfee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Discount</td>
                                                    <td><span class="course_cfee">{{$discounts[0]->one_time_discount}}%</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Final Cost</td>
                                                    <td><strong><span class="course_cfee">£{{round($online_t_fee,2)}}</span></strong></td>
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="price-body">
                                <div class="body-head">
                                    <div class="inner-body">
                                    
                                        <div class="wp"> <span class="price-title">Monthly Payment</span> </div>
                                        <?php 
                                         $total_fee = $course->sale_price + $course->rfee;
                                         $discount = $discounts[0]->monthly_discount;
                                         $discount_value =($total_fee * ($discount)/100);
                                         $fee_after_discount =  $total_fee - $discount_value;
                                         $fee_afee_total = $fee_after_discount + $course->afee;
                                         $vat = 20;
                                         $total_course_fee = $fee_afee_total + ($fee_afee_total * 20/100);
                                         $initial_deposit =  $total_course_fee * 35/100;
                                         $balance_fee = $total_course_fee-$initial_deposit;
                                         $monthly_installment = $balance_fee/$month;
                                         ?>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="span-left">Course Fee</td>
                                                    <td><span class="course_cfee">£{{$course->sale_price}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Registration Fee</td>
                                                    <td><span class="course_cfee">£{{$course->rfee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Total Course Fee</td>
                                                    <td><span class="course_cfee">£{{$course->sale_price + $course->rfee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Discount</td>
                                                    <td><span class="course_cfee">{{$discounts[0]->monthly_discount}}%</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Final Cost</td>
                                                    <td><strong><span class="course_cfee">£{{round($total_course_fee,2)}}</span></strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Initial Deposit (including Registration)</td>
                                                    <td><strong><span class="course_cfee">£{{$initial_deposit}}</span></strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">{{$month}} Monthly Instalments</td>
                                                    <td><strong><span class="course_cfee">£{{round($monthly_installment,2)}}</span></strong></td>
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>

                    <!-- blended Learning -->
                    <div class="selected_filter_widget  mb30 panel-collapse collapse" id="collapseFour" aria-expanded="true">
                           <div class="module-pricing pt-5">
                            <div class="price-head">
                                <h2>Certificate in Computerised Accounting for Business</h2>
                                <span class="level-badge">level 2</span> </div>
                                
                            <div class="price-body">
                                <div class="body-head">
                                    <div class="inner-body">
                                    
                                        <div class="wp"> <span class="price-title">Single Payment</span> </div>
                                        <?php   
                                            $online_course_fee = $course->sale_price + ($blended_hours*75);
                                            $online_total_course_fee = $online_course_fee + $course->rfee;
                                            $discount = $discounts[0]->one_time_discount;
                                            $online_after_discount =($online_total_course_fee * ($discount)/100);
                                            $online_fee =  $online_total_course_fee - $online_after_discount;
                                            $online_fee_total = $online_fee + ($online_fee * 20/100);
                                          
                                        ?>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="span-left">Course Fee</td>
                                                    <td><span class="course_cfee">£{{$online_course_fee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Registration Fee</td>
                                                    <td><span class="course_cfee">£{{$course->rfee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Total Course Fee</td>
                                                    <td><span class="course_cfee">£{{$online_total_course_fee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Discount</td>
                                                    <td><span class="course_cfee">{{$discount}}%</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Final Cost</td>
                                                    <td><strong><span class="course_cfee">£{{round($online_fee_total,2)}}</span></strong></td>
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="price-body">
                                <div class="body-head">
                                    <div class="inner-body">
                                    
                                        <div class="wp"> <span class="price-title">Monthly Payment</span> </div>
                                        <?php   
                                            $online_monthly_course_fee = $course->sale_price + ($blended_hours*75);
                                            $online_monthly_total_course_fee = $online_monthly_course_fee + $course->rfee;
                                            $monthly_discount = $discounts[0]->monthly_discount;
                                            $online_monthly_after_discount =($online_monthly_total_course_fee * ($monthly_discount)/100);
                                            $monthly_fee_after_discount =  $online_monthly_total_course_fee - $online_monthly_after_discount;
                                            $online_monthly_fee_afee_total = $monthly_fee_after_discount + $course->afee;
                                            $vat = 20;

                                        $online_monthly_vat = $online_monthly_fee_afee_total + ($online_monthly_fee_afee_total * 20/100);
                                        $online_initial_deposit =  $online_monthly_vat * 35/100;

                                         $online_monthly_balance_fee = $online_monthly_vat-$online_initial_deposit;
                                         $online_monthly_installment = $online_monthly_balance_fee/$month;
                                        ?>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="span-left">Course Fee</td>
                                                    <td><span class="course_cfee">£{{$online_monthly_course_fee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Registration Fee</td>
                                                    <td><span class="course_cfee">£{{$course->rfee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Total Course Fee</td>
                                                    <td><span class="course_cfee">£{{$online_monthly_total_course_fee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Discount</td>
                                                    <td><span class="course_cfee">{{$monthly_discount}}%</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Administration Fee</td>
                                                    <td><strong><span class="course_cfee">£{{$course->afee}}</span></strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Final Cost</td>
                                                    <td><strong><span class="course_cfee">£{{$online_monthly_vat}}</span></strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">Initial Deposit (including Registration)</td>
                                                    <td><strong><span class="course_cfee">£{{$online_initial_deposit}}</span></strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="span-left">{{$month}} Monthly Instalments</td>
                                                    <td><strong><span class="course_cfee">£{{round($online_monthly_installment,2)}}</span></strong></td>
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>


                          <?php }else{ ?>

                            <p>To know about the course fee, please get in touch with us at: admission@sbusinesslondon.ac.uk</p>
                              
                          <?php } ?>
                    </div>

                </div>
            </div>
        </div>
  
@endsection

