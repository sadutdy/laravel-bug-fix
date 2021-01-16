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
    </style>

<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Online Learning</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> How It Works </li>
                                <li class='breadcrumb-item active'> Online Learning </li>
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
                        <img src="{{theme_asset('images/SVG/ol-icon-1.svg')}}" alt="">


                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <h2>How does the Online Learning work at SBL?</h2>
                        <p>We at SBL follow a unique approach which differentiates us from other institutions. Indeed, we have taken distance education to a new phase where the support level is incredibly high. Nowadays, convenience, flexibility and user-friendliness
                            outweigh demands. Today, the transition from traditional classroom-based learning to online platforms is a significant result of these specifications. In this context, a crucial role played by online learning by leveraging
                            the opportunities for convenience and easier access. It benefits the people who want to enhance their career, life and education in parallel streams. SBL’s simplified online learning facilitates an individual to progress towards
                            the accomplishment of higher career growth without stress and dilemmas.
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <section class="gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
                        <div class="bl-content">
                            <h2>How will you study online?</h2>

                            <p>With the School of Business London, you can study wherever you are. You finish your program with the utmost flexibility. You will be provided with comprehensive tutor support online through SBL Support Desk portal.</p>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="{{theme_asset('images/SVG/ol-icon-2.svg')}}" alt="">

                    </div>



                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="{{theme_asset('images/SVG/ol-icon-3.svg')}}" alt="">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="bl-content">
                            <h2>How will you get tutor support online?</h2>
                            <p>School of Business London occupies a centralised tutor support desk portal, through which our support team liaise with both tutors and learners to provide guidance, assessment feedback, and any other study support adequately
                                and promptly. Once a learner raises a support request through the support desk portal (Be it for guidance, assessment feedback or any additional assistance), one of the support team members assign the relevant to request
                                to an allocated tutor. As soon as the support receive a response from the allocated tutor, it will be made available to the learner in the portal. The support desk system is in place to assist the learners adequately and
                                to streamline all the support process efficiently. Learners should expect to receive a response on queries like guidance and assistance within 1 - 2 working days. However, if the support request is for assessment feedback,
                                learners will receive the reply with feedback as per the time frame outlined in the Assessment Feedback Policy.</p>



                        </div>
                    </div>




                </div>
            </div>
        </section>
        <section class="gray">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="bl-content">
                            <h2>Comprehensive support throughout your studies</h2>
                            <p>At SBL, we ensure that you get the best possible start to your journey. We will make you apt with online learning and your qualification with an online induction and show you how to get the best from your time with us. You
                                will be allocated to an expert tutor to provide adequate academic guidance and advice and provide feedback on your assignments. You can contact your tutor online through SBL Support Desk Portal.</p>
                            <p>



                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="{{theme_asset('images/SVG/ol-icon-4.svg')}}" alt="">
                    </div>


                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="{{theme_asset('images/SVG/ol-icon-5.svg')}}" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="bl-content">
                            <h2>Committed Professionals and Quality learning materials</h2>
                            <p>Our experienced tutors and support team offer outstanding services, and you are contacted regularly and gather updates on your progress. Moreover, we respond to your queries and clarify your doubts daily to facilitate you in
                                accomplishing the deadline of the assignments.</p>
                            <p>Quality learning materials made by industry experts is a significant competitive edge of School of Business London. Quality learning materials comprised of structured lecture notes, study guides, practical applications which
                                includes real-world examples, and case studies that will enable you to apply your knowledge. Learning materials are provided in one of the three formats, such as PDF, PowerPoint, or Interactive Text Content on the learning
                                portal. </p>



                        </div>
                    </div>




                </div>
            </div>
        </section>
        <section class="gray">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="bl-content">
                            <h2>How are we different?</h2>
                            <p>At School of Business London, we deploy a cutting-edge learning management system where the learners are enabled to pursue accredited online education with a simplified process. We focus on conferring utmost flexibility on
                                you for schedules and accessibility and learner decides when and how to study. We offer advanced and proficient course portfolio, which meets the current global professional needs. Learners can accomplish their qualification
                                at their own pace, and they don't need to put their life on hold to get qualified.</p>
                            <p>



                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="{{theme_asset('images/SVG/ol-icon-6.svg')}}" alt="">
                    </div>


                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="{{theme_asset('images/SVG/ol-icon-7.svg')}}" alt="">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="bl-content">
                            <h2>Major steps that you need to follow once you decide to join us.</h2>
                            <h3>Select your course</h3>
                            <p>You choose the course that you decide to pursue but ensure you meet the entry requirements. </p>
                            <h3>Enrol</h3>
                            <p>Once the course is selected, you make an application via our website or via email admission@sbusinesslondon.ac.uk. You can make the payment online or bank transfer- either a single payment or easily monthly instalments. </p>

                            <h3>Access to Learning Portal </h3>
                            <p>You will be provided with the login credentials to access the learning portal, which will have all sorts of pathway learning materials to complete your programs successfully. The simplified materials are easy to understand
                                and would help you to work on your assignments.
                            </p>
                            <h3>Dedicated Tutor </h3>
                            <p>You will be allocated to a tutor and supported by our academic support team who will assist, and advice about your course and assignments. Once you accomplish your assignment, your allocated tutor will assess your work and
                                provides you with a formative feedback which will help you to improve your assignment prior to the final submission. </p>
                            <h3>Assessment of Assignments.</h3>
                            <p>Feedback is provided to you regularly when you improve your work. Once the final submission is made, marks and grades are published via the learning portal. </p>
                            <h3>Certification </h3>
                            <p>You will get your certificate once you complete the course successfully. You can then move on to your desired career with the help of the accredited certificate. You can enrol for a different course with us; if you want to
                                study more, Decision is yours.</p>






                        </div>
                    </div>




                </div>
            </div>
        </section>
       

 @endsection