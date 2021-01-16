@extends('layouts.theme')
@section('content')

    @php
        $path = request()->path();
       
@endphp
<style>
        .bl-icon {
            width: 30rem;
            height: 30rem;
            position: absolute;
        }
        
        .gray {
            background-color: #f0f0f0;
        }
        
        .sbl-list {
            margin-left: 15px;
        }
        
        .sbl-list li {
            color: #000;
            list-style: disc;
            margin-bottom: 10px;
            font-size: 1rem;
            text-align: justify;
        }
    </style>
<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Blended Learning</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> How It Works </li>
                                <li class='breadcrumb-item active'> Blended Learning </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="{{theme_asset('images/SVG/bl-icon-1.svg')}}" alt="">

                       
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <h2>How does the Blended Learning work at SBL?</h2>
                        <p>SBL strategically and conveniently employ Blended Learning, where web-based learning using hybrid-teaching technology coupled with live workshops (classes) replaces the traditional regular classroom-based learning. The significant
                            difference between blended and online learning at SBL is the Block Delivery of <strong>Online Live Classes</strong>. Learners enrolled at SBL on blended learning are offered a block delivery of online live classes which can
                            be booked in advance on their convenience most of the time. In addition to the Online Live Classes, students will also receive all the standard benefits offered to Online Learning students. The live classes are provided online
                            using Apps like GoToMeeting, Zoom or Skype. In addition to the live classes, blended learning students will receive comprehensive tutor support through our support desk portal like online learning students. This mode of study
                            is treated as a Full-time study, not as Online learning. School of Business London understands that choosing the right education institution is as important as the qualifications you gain. Thus, SBL always takes a genuine interest
                            in the needs of our students and believe that we can drive positive change for their future.</p>
                    </div>
                </div>

            </div>
        </section>
        <section class="gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="bl-content">
                            <h2>What comprehensive support you will get with Blended Learning?</h2>


                            <p>SBL continuously innovates and provides high-quality education to transform the skills, knowledge and understanding of our students to enhance their employability and enable them to compete successfully in the dynamic and ever-changing
                                business world. Blended Learning students at SBL will receive the following support.</p>
                            <ul class="sbl-list">
                                <li>Allocated Supervisor/tutor</li>
                                <li>Comprehensive Tutor Support through tutor support desk portal.</li>
                                <li>Live Workshops (Classes)</li>
                                <li>Virtual Learning Environment Platform</li>
                                <li>Assessment Resources</li>
                                <li>Assessment Guidelines</li>
                                <li>Comprehensive Module Guidelines</li>
                                <li>Evaluation Samples</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                        <img src="{{theme_asset('images/SVG/bl-icon-2.svg')}}" alt="">

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">

                        <img src="{{theme_asset('images/SVG/bl-icon-3.svg')}}" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="bl-content &amp;bg-red">
                            <h2>What does the allocated tutor provide to you?</h2>
                            <ul class="sbl-list">
                                <li>Provide you with comprehensive guidance and support from start to finish of your course through the support desk portal.</li>
                                <li>Offer constructive formative feedback on your assignments, which you can then revise.</li>
                                <li>Offer guidance on the proposed structure.</li>
                                <li>Offer feedback on some of your drafts, which you can then revise.</li>
                                <li>Discuss the progress of your works with you during the course.</li>
                                <li>Advise you about matters of presentation, such as the title page, contents page, pagination, footnoting and Harvard Referencing.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="bl-content ">
                            <h2>How many hours live classes will you receive with blended learning option?</h2>
                            <p>The number of hours of live classes offered for blended learning students varies according to the course level they enrolled. Please see the illustrative examples below.</p>
                            <ul class="sbl-list">
                                <li>Award Level - 3 Hours </li>
                                <li>Certificate Level- 6 Hours</li>
                                <li>Diploma Level- 8 Hours </li>
                                <li>Extended Diploma – 10 Hours </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
                        <img src="{{theme_asset('images/SVG/bl-icon-4.svg')}}" alt="">
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container">


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="{{theme_asset('images/SVG/bl-icon-5.svg')}}" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
                        <div class="bl-content &amp;bg-red">

                            <h2>The significant advantages of our Blended Learning programs?</h2>

                            <ul class="sbl-list">
                                <li>Online Live Classes</li>
                                <li> Treated as a full-time study, not Online or Distance learning. Therefore, learners get full-time study certificates.</li>
                                <li> Greater flexibility, freedom and convenience.</li>
                                <li> Learners are more likely to interact with the supervisor since there are several opportunities to do so through face to face workshops, Live Webinar, Live Chat, Email. As an outcome of this, learners develop themselves
                                    as they carry out extensive research as part of the course.</li>
                                <li> Learners get access to unlimited up-to-date resources available in the Learning Management Platform.</li>
                                <li> Highest level of students’ success compared to traditional face-to-face and online learning.</li>
                                <li> Learners often develop or enhance skills in time management, critical thinking, and problem-solving.</li>
                                <li> Students enjoy increased success as measured by fewer course withdrawals and somewhat higher grades.</li>
                                <li> Learners have more time to reflect and refer to the relevant course and other research materials when working and writing, which significantly improves the research skills of students.</li>
                                <li> Learners get typically have 24/7 access to course materials.</li>
                                <li>Students always receive more feedback and more frequent feedback from their supervisors.Get in touch with SBL and reap the essential benefits of Blended Learning.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
     

 @endsection