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
                            <h4 class="breadcrumb_title">About SBL</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> About Us </li>
                    
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
        .bl-icon {
            width: 30rem;
            height: 30rem;
            position: absolute;
        }
        
        .gray {
            background-color: #f0f0f0;
        }
        
        .about-content {
            background: #0E53A0;
            padding: 40px 104px 40px 104px;
            min-height: 503px;
            color: #fff;
        }
        
        .about-content h2,
        h3 {
            color: #fff;
        }
        
        .about-content h3 {
            font-size: 1.2rem;
        }
        
        .sbl-bg {
            min-height: 503px;
        }
        
        .about-content i {
            color: #fff;
            margin: 0;
        }
        
        .rate {
            width: 33.333333%;
            float: left;
        }
        
        .rate .rate-icon,
        .rate-pre,
        .rate-pass,
        .text {
            display: block;
            text-align: center;
            color: #fff;
        }
        
        .rate-icon {
            padding: 10px;
            font-size: 5rem
        }
        
        .rate-pre {
            font-size: 3rem;
            font-weight: 700;
        }
    </style>
        
        <section>
            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>Why Choose SBL?</h2>
                        <p>SBL continuously innovates and provides high-quality education to transform the skills, knowledge and understanding of our students to enhance their employability and enable them to compete successfully in the dynamic and ever-changing
                            business world. SBL is committed to providing an infrastructure and strategically and conveniently employ Blended, Distance and Online Learning through its cutting-edge Virtual Learning Platform where a portion of the traditional
                            face-to-face instruction is replaced by web-based learning using hybrid-teaching technology, all of which are necessary for meaningful, sustainable, disruptive transformation.</p>
                    </div>

                </div>

            </div>
        </section>
        <section class="d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                            <h2>Online and Blended Learning</h2>

                            <p>The programs offered at SBL are delivered by not only just classroom-based learning but also via blended, distance learning and Online. SBL embraces cutting- edge learning management system (LMS) to implement Blended, Distance
                                and Online Learning.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0" style="background-image: url('{{theme_asset('images/bg-1.jpg')}}'); background-size:cover">
                        <div class="sbl-bg">

                        </div>
                    </div>



                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0" style="background-image: url('{{theme_asset('images/bg-5.jpg')}}'); background-size:cover">
                        <div class="sbl-bg">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content bg-red" style="padding-top: 160px;">

                            <h2>Diverse &amp; Wide-ranges of programs</h2>


                            <p>We offer diverse and wide ranges of programs by accredited awarding bodies and universities, and the programs are recognised across the world. The courses areas include Management &amp; Leadership, Business Management, Project
                                Management, Hospitality &amp; Tourism, Health &amp; Social Care, Law, Accounting &amp; Finance, Coaching and Mentoring, Professional Consulting, Computing etc.</p>



                        </div>
                    </div>




                </div>





                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                            <h2>Accredited Qualifications</h2>



                            <p>The qualifications offered at SBL are fully UK accredited and international recognised. Whether you are studying online or blended our programs are a viable option for all learners.
                            </p>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0" style="background-image: url('{{theme_asset('images/bg-2.jpg')}}'); background-size:cover">
                        <div class="sbl-bg">

                        </div>
                    </div>


                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0" style="background-image: url('{{theme_asset('images/bg-3.jpg')}}'); background-size:cover">
                        <div class="sbl-bg">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content bg-red" style="padding-top: 160px;">
                            <h2>One to One Tutor Support</h2>
                            <p>We will provide you with comprehensive support throughout your program. The tutor support offers guidance on the proposed structure and learning outcome, discuss the progress your assessments and provide your formative feedback
                                on your papers.</p>

                        </div>
                    </div>




                </div>



                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                            <h2>Cutting Edge Learning Platform</h2>
                            <p>Our learning management system with an intuitive design and functions make learning an enjoyable experience. Our goal is to offer simplified education and that is why we are always innovating through our platform.</p>

                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0" style="background-image: url('{{theme_asset('images/bg-4.jpg')}}'); background-size:cover">
                        <div class="sbl-bg">

                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0" style="background-image: url('{{theme_asset('images/bg-5.jpg')}}'); background-size:cover">
                        <div class="sbl-bg">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content bg-red" style="padding-top: 160px;">
                            <h2>91% Success and 94% Completion</h2>
                            <p>SBL maintain a pass rate of 91% on all our courses while 94% of students accomplish their courses, which is significantly high compared to the industry standards.</p>

                        </div>
                    </div>




                </div>



                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                            <h2>Flexible Schedules</h2>
                            <p>Flexible intake schedules enable the students to enrol at any time. At SBL unlike many other institutions, students do not need to wait for any specific intake. The flexible learning method facilitates the students to complete.</p>

                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0" style="background-image: url('{{theme_asset('images/bg-4.jpg')}}'); background-size:cover">
                        <div class="sbl-bg">

                        </div>
                    </div>

                </div>









            </div>
        </section>


        <!--mobile-->


        <section class="sbl-about d-block d-md-block d-sm-block d-lg-none">



            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="sbl-bg" style="background-image: url('{{theme_asset('images/bg-5.jpg')}}'); background-size:cover">

                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                            <h2>Online and Blended Learning</h2>

                            <p>The programs offered at SBL are delivered by not only just classroom-based learning but also via blended, distance learning and Online. SBL embraces cutting- edge learning management system (LMS) to implement Blended, Distance
                                and Online Learning.</p>
                        </div>
                    </div>




                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="sbl-bg" style="background-image: url('{{theme_asset('images/bg-5.jpg')}}'); background-size:cover">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content bg-red" style="padding-top: 160px;">

                            <h2>Diverse &amp; Wide-ranges of programs</h2>


                            <p>We offer diverse and wide ranges of programs by accredited awarding bodies and universities, and the programs are recognised across the world. The courses areas include Management &amp; Leadership, Business Management, Project
                                Management, Hospitality &amp; Tourism, Health &amp; Social Care, Law, Accounting &amp; Finance, Coaching and Mentoring, Professional Consulting, Computing etc.</p>



                        </div>
                    </div>




                </div>





                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="sbl-bg" style="background-image: url('{{theme_asset('images/bg-2.jpg')}}'); background-size:cover">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                            <h2>Accredited Qualifications</h2>



                            <p>The qualifications offered at SBL are fully UK accredited and international recognised. Whether you are studying online or blended our programs are a viable option for all learners.
                            </p>

                        </div>
                    </div>




                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="sbl-bg" style="background-image: url('{{theme_asset('images/bg-5.jpg')}}'); background-size:cover">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content bg-red" style="padding-top: 160px;">
                            <h2>One to One Tutor Support</h2>
                            <p>We will provide you with comprehensive support throughout your program. The tutor support offers guidance on the proposed structure and learning outcome, discuss the progress your assessments and provide your formative feedback
                                on your papers.</p>

                        </div>
                    </div>




                </div>



                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="sbl-bg" style="background-image: url('{{theme_asset('images/bg-4.jpg')}}'); background-size:cover">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                            <h2>Cutting Edge Learning Platform</h2>
                            <p>Our learning management system with an intuitive design and functions make learning an enjoyable experience. Our goal is to offer simplified education and that is why we are always innovating through our platform.</p>

                        </div>
                    </div>




                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="sbl-bg" style="background-image: url('{{theme_asset('images/bg-5.jpg')}}'); background-size:cover">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content bg-red" style="padding-top: 160px;">
                            <h2>91% Success and 94% Completion</h2>
                            <p>SBL maintain a pass rate of 91% on all our courses while 94% of students accomplish their courses, which is significantly high compared to the industry standards.</p>

                        </div>
                    </div>




                </div>



                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="sbl-bg" style="background-image: url('{{theme_asset('images/bg-4.jpg')}}'); background-size:cover">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                            <h2>Flexible Schedules</h2>
                            <p>Flexible intake schedules enable the students to enrol at any time. At SBL unlike many other institutions, students do not need to wait for any specific intake. The flexible learning method facilitates the students to complete.</p>

                        </div>
                    </div>




                </div>









            </div>


        </section>


        
 @endsection