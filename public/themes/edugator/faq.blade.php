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
                            <h4 class="breadcrumb_title">Articles</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> Articles </li>
                               
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
        
        form {
            max-width: 300px;
            margin: 10px auto;
            padding: 10px 20px;
            /*background: #f4f7f8;*/
            border-radius: 8px;
        }
        
        h1 {
            margin: 0 0 30px 0;
            text-align: center;
        }
        
        .regElment {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            font-size: 16px;
            height: auto;
            margin: 0;
            outline: 0;
            padding: 15px;
            width: 100%;
            background-color: #e8eeef;
            color: #8a97a0;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
            margin-bottom: 30px;
            font-family: 'GT Walsheim', sans-serif !important;
        }
        
        input[type="radio"],
        input[type="checkbox"] {
            margin: 0 4px 8px 0;
        }
        
        input::placeholder {
            color: red;
            font-family: 'GT Walsheim', sans-serif !important;
        }
        
        button {
            padding: 19px 39px 18px 39px;
            color: #FFF;
            background-color: #c80b0b;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            border-radius: 5px;
            /*width: 100%;*/
            border: 1px solid #c80b0b;
            border-width: 1px 1px 3px;
            box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
            margin-bottom: 10px;
            font-family: 'GT Walsheim', sans-serif !important;
        }
        
        fieldset {
            margin-bottom: 30px;
            border: none !important;
        }
        
        legend {
            font-size: 1.4em;
            margin-bottom: 10px;
            font-family: 'GT Walsheim', sans-serif !important;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-family: 'GT Walsheim', sans-serif !important;
        }
        
        label.light {
            font-weight: 300;
            display: inline;
        }
        
        .number {
            background-color: #c80b0b;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
            border-radius: 100%;
            font-family: 'GT Walsheim', sans-serif !important;
        }
        
        @media screen and (min-width: 480px) {
            form {
                max-width: 480px;
            }
        }
        
        .bg-reg {
            background: white;
            border: 1px solid #dedde1;
            border-bottom-color: rgb(222, 221, 225);
            border-bottom-style: solid;
            border-bottom-width: 1px;
            border-bottom: 5px solid #dedde1;
            padding: 0;
            margin-bottom: 40px;
        }
        
        .sbl-faq .panel-title>a {
            font-weight: 700;
            padding-left: 10px;
        }
        
        .sbl-faq .panel-title>a:before {
            float: right !important;
            font-family: FontAwesome;
            content: "\f068";
            padding-right: 5px;
        }
        
        .sbl-faq .panel-title>a.collapsed:before {
            float: right !important;
            content: "\f067";
        }
        
        .sbl-faq .panel-title>a:hover,
        .sbl-faq .panel-title>a:active,
        .sbl-faq .panel-title>a:focus {
            text-decoration: none;
        }
        
        .sbl-faq .panel-group .panel-title a::after {
            color: #E51E25;
            content: "\f059";
            font-family: fontawesome;
            font-size: 14px;
            left: -15px;
            padding: 10px 14px;
            position: absolute;
            top: 0;
            margin-top: 8px !important;
            margin-left: 10px !important;
        }
        
        .sbl-faq .panel-body h3 {
            color: #333
        }
        /* .panel-group .panel-title a {
            background: #f8f8f8;
            display: block;
            font-size: 15px;
            font-weight: 700;
            padding: 10px 15px 10px 15px;
            white-space: normal;
            color: #45469d;
        } */
        
        .panel-group .panel-title a {
            background: #f8f8f8;
            display: block;
            font-size: 15px;
            font-weight: 700;
            padding: 17px 15px 5px 30px;
            white-space: normal;
            color: #45469d;
        }
        
        .panel-title a:hover,
        .panel-title a:focus {
            color: #076db1;
        }
        
        .card-header {
            padding: 0;
            margin-bottom: 0;
            color: inherit;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125) !important;
        }
        
        .card-body a {
            color: #0E53A0
        }
        
        .card-body li {
            list-style-type: disc !important;
        }
    </style>
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-md-9 sbl-faq">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                    How does the Online Learning work at SBL?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                    <div class="card-body">We at SBL follow a unique approach which differentiates us from other institutions. Indeed, we have taken distance education to a new phase where the support level is incredibly high.Now a days, convenience, flexibility
                                        and user-friendliness outweigh demands. Today, the transition from traditional classroom-based learning to online platforms is a significant result of these specifications. In this context, a crucial role played
                                        by online learning by leveraging the opportunities for convenience and easier access. It benefits the people who want to enhance their career, life and education in parallel streams. SBL’s simplified online learning
                                        facilitates an individual to progress towards the accomplishment of higher career growth without stress and dilemmas.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How will you study online?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                    <div class="card-body">With the School of Business London, you can study wherever you are. You finish your program with the utmost flexibility. You will be provided with comprehensive tutor support online through SBL Support Desk portal.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How will I get tutor support online?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                    <div class="card-body">School of Business London occupies a centralised tutor support desk portal, through which our support team liaise with both tutors and learners to provide guidance, assessment feedback, and any other study support adequately
                                        and promptly. Once a learner raises a support request through the support desk portal (Be it for guidance, assessment feedback or any additional assistance), one of the support team members assign the relevant to
                                        request to an allocated tutor. As soon as the support receive a response from the allocated tutor, it will be made available to the learner in the portal. The support desk system is in place to assist the learners
                                        adequately and to streamline all the support process efficiently. Learners should expect to receive a response on queries like guidance and assistance within 1 - 2 working days. However, if the support request is
                                        for assessment feedback, learners will receive the reply with feedback as per the time frame outlined in the Assessment Feedback Policy.</div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings4">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses4" aria-expanded="false" aria-controls="collapse4">
                                    What is the difference between online learning and blended learning at SBL?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings4" aria-expanded="false">
                                    <div class="card-body">
                                        <p>We at SBL offer outstanding support and infrastructure for both online and blended learning. We indeed pursue a smart learning approach where the traditional regular classroom-based learning is replaced by web-based
                                            learning and the support level is incredibly high. Learners enrolled at SBL are allocated a dedicated tutor whether it is online or blended learning, who provide learners with comprehensive guidance and support
                                            from start to finish of the course. </p>
                                        <p>The significant difference between blended and online learning at SBL is the Block Delivery of Online Live Classes. Learners enrolled at SBL on blended learning are offered a block delivery of online live classes
                                            which can be booked in advance on their convenience most of the time. In addition to the Online Live Classes, students will also receive all the standard benefits offered to Online Learning students. </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings5">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses5" aria-expanded="false" aria-controls="collapses5">
                                    How does the Blended Learning work at SBL?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings5" aria-expanded="false">
                                    <div class="card-body">
                                        <p>SBL strategically and conveniently employ Blended Learning, where web-based learning using hybrid-teaching technology coupled with a block delivery of live workshops (classes) replaces the traditional regular classroom-based
                                            learning. The live classes are provided online using Apps like GoToMeeting, Zoom or Skype. In addition to the live classes, blended learning students will receive comprehensive tutor support through our support
                                            desk portal like online learning students. </p>
                                        <p>This mode of study is treated as a Full-time study, not as Online learning. School of Business London understands that choosing the right education institution is as important as the qualifications you gain. Thus,
                                            SBL always takes a genuine interest in the needs of our students and believe that we can drive positive change for their future.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="heading20">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                    Does TQT and GLH denotes the same?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                    <div class="card-body">
                                        <p>Total Qualification Time (TQT) denotes the minimum timeframe a learner takes or requires to complete their qualification.It comprises of the GL (Hours) plus all other time taken in preparation,study or research
                                            or any other form of participation in education or training, however no direct supervision of a lecturer or tutor is required. TQT is a terminology mostly used within the qualifications regulated by Ofqual as
                                            part of the Regulated Qualification Framework (RQF). When calculating TQT, Awarding bodies take into account similar qualifications to ensure that both the quality and the requirement is met. We also consider
                                            the views and expectations of the learners of our qualifications during the development process leading to the attainment of qualification. Our learners will see TQT expressed in two ways within the qualification
                                            specifications.
                                        </p>
                                        <p>Guided Learning hours are designed in a way that the learner need to complete the activities/ presentations under the instruction, guidance or supervision of a lecturer, tutor or supervisor either by physical presence
                                            or electronic means such as prepared lecture slides or learning material. Where a qualification follows a unitised structure, each unit will be allocated a GL(hours) value but where a qualification does not
                                            follow a unitised structure, GL (hours) will be allocated to the qualification as a whole. We at School of Business London provide well precise and detailed learning materials, prepared by qualified and approved
                                            tutors in line with the specifications detailed by the awarding body. Besides, learners are given constructive formative feedback for each unit emphasising for learning and development.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="heading21">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                    Do i have access to books and journals?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21" aria-expanded="false">
                                    <div class="card-body">
                                        <p>We at SBL offer comprehensive learning materials to the learners made by qualified and approved tutors. In order to accomplish the qualification, learners are needed to undertake further research and readings to
                                            achieve the learning outcomes. Thus for further research and readings learners may need to access a number of books and/or journals ,articles from external sources such as libraries or online libraries when
                                            and where required. . If you are studying a CMI qualification, you will be provided with access to CMI Management Direct portal where you will have access to several eBooks, Journals and videos etc.</p>
                                    </div>
                                </div>
                            </div>




                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings6">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses6" aria-expanded="false" aria-controls="collapses6">
                                    Is the fee structure for online learning and blended learning same?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings6" aria-expanded="false">
                                    <div class="card-body">
                                        <p>The course fee for online learning and blended learning are different. The fee details provided in the ‘fees and funding section’ of each course is meant for online learning only. If you want to know the fee details
                                            for a blended learning program, please speak to our admission team or email at admission@sbusinesslondon.ac.uk.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings7">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses7" aria-expanded="false" aria-controls="collapses7">
                                    What comprehensive supports do I get with Blended Learning?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings7" aria-expanded="false">
                                    <div class="card-body">
                                        <p>SBL continuously innovates and provides high-quality education to transform the skills, knowledge and understanding of our students to enhance their employability and enable them to compete successfully in the dynamic
                                            and ever-changing business world. Blended Learning students at SBL will receive the following benefits.</p>
                                        <ul style="list-style: disc;margin-left: 15px;">
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
                            </div>



                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings8">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses8" aria-expanded="false" aria-controls="collapses8">
                                    How many hours live classes will I receive with blended learning option?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings8" aria-expanded="false">
                                    <div class="card-body">
                                        <p>The number of hours of live classes offered for blended learning students varies according to the course level they enrolled. Please see the illustrative examples below.</p>
                                        <ul>
                                            <li>Award Level - 3 Hours </li>
                                            <li>Certificate Level- 6 Hours</li>
                                            <li>Diploma Level- 10 Hours </li>
                                            <li>Extended Diploma – 13 Hours </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings9">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses9" aria-expanded="false" aria-controls="collapses9">
                                    What makes you different from other providers?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings9" aria-expanded="false">
                                    <div class="card-body">
                                        <p>At School of Business London, we deploy a cutting-edge learning management system where the learners are enabled to pursue accredited online education with a simplified process. We focus on conferring utmost flexibility
                                            on you for schedules and accessibility and learner decide when and how to study. We offer advanced and proficient course portfolio, which meets the current global professional needs. Learners can accomplish
                                            their qualification at their own pace, and they don't need to put their life on hold to get qualified.
                                        </p>

                                    </div>
                                </div>
                            </div>




                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings10">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses10" aria-expanded="false" aria-controls="collapses10">
                                   What does the allocated tutor provide to me ?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings10" aria-expanded="false">
                                    <div class="card-body">


                                        <ul>
                                            <li>Provide you with comprehensive guidance and support from start to finish of your course through the support desk portal.</li>
                                            <li>Offer constructive formative feedback on your assignments, which you can then revise.</li>
                                            <li>Offer guidance on the proposed structure.</li>
                                            <li>Discuss the progress of your works with you during the course.</li>
                                            <li>Advise you about matters of presentation, such as the title page, contents page, pagination, footnoting and Harvard Referencing.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings11">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses11" aria-expanded="false" aria-controls="collapses11">
                                    Do you provide learning materials?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings11" aria-expanded="false">
                                    <div class="card-body">
                                        <p>Quality learning materials made by industry experts is a significant competitive edge of School of Business London. Quality learning materials comprised of structured lecture notes, study guides, practical applications
                                            which includes real-world examples, and case studies that will enable you to apply your knowledge. Learning materials are provided in one of the three formats, such as PDF, PowerPoint, or Interactive Text Content
                                            on the learning portal.
                                        </p>
                                    </div>
                                </div>
                            </div>




                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings12">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses12" aria-expanded="false" aria-controls="collapses12">
                                    Do I have to purchase any book?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings12" aria-expanded="false">
                                    <div class="card-body">
                                        We at SBL offer comprehensive learning materials to the learners made by the industry experts. However, some courses may require textbooks to be bought by the student though it is not essential. If you are studying a CMI qualification, you will be provided
                                        with access to CMI Management Direct portal where you will have access to several eBooks, Journals and videos etc.

                                    </div>
                                </div>
                            </div>



                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings13">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses13" aria-expanded="false" aria-controls="collapses13">
                                    How are the assessments conducted?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings13" aria-expanded="false">
                                    <div class="card-body">
                                        <p>Assessments are conducted through assignments and exams. Most of the courses offered at SBL do to come with exams but only assignments. To find out whether your course requires exams, please visit the relevant course
                                            details page on our website and check the assessment section. </p>

                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings14">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses14" aria-expanded="false" aria-controls="collapses14">
                                    Can I interchange units?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings14" aria-expanded="false">
                                    <div class="card-body">
                                        <p>Being an approved centre, School of Business London reserve the right to preselect units to deliver each qualification. For every course, SBL has preselected units (modules) as per the criteria among the various
                                            units listed in the course specification provided by the awarding body. The preselected units are shown in the details page of every course on our website.</p>
                                        <p>Learners must request before enrolment to interchange unit(s) other than the preselected units shown in the SBL website because we need to make sure the availability of learning materials for the requested unit(s).
                                            SBL will reject an application if the learning materials for the requested interchange unit(s) are unavailable.</p>
                                        <p>Learners are not allowed to make any request to interchange unit(s) once enrolment is complete.</p>

                                    </div>
                                </div>
                            </div>



                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings15">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses15" aria-expanded="false" aria-controls="collapses15">
                                      What are the payment methods?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings15" aria-expanded="false">
                                    <div class="card-body">
                                        <p>The fee can be paid in either of the following methods:</p>

                                        <ol>
                                            <li>Debit / Credit Card </li>
                                            <li>PayPal </li>
                                            <li>Bank Transfer </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings16">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses16" aria-expanded="false" aria-controls="collapses16">
                                    What is the URL for the payment page?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings16" aria-expanded="false">
                                    <div class="card-body">
                                        <a href="https://www.sbusinesslondon.ac.uk/pay-here.php/">https://www.sbusinesslondon.ac.uk/pay-here.php/</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings17">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses17" aria-expanded="false" aria-controls="collapses17">
                                     Do I have to pay full payment in advance?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings17" aria-expanded="false">
                                    <div class="card-body">
                                        <p>The fee can be paid in two ways; either it can be made with a single payment or monthly instalments as specified in the course details page. Students who make a single amount will get an extra discount. </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings18">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses18" aria-expanded="false" aria-controls="collapses17">
                                     Can I have a customised payment plan?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings18" aria-expanded="false">
                                    <div class="card-body">
                                        <p>Both monthly and single payment details for online learning are given on our site. However, if you want to have a customised payment plan, please speak to our admission team or email at <a href="admission@sbusinesslondon.ac.uk">admission@sbusinesslondon.ac.uk</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="card-header" role="tab" id="headings19">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapses19" aria-expanded="false" aria-controls="collapses17">
                                     What are the significant steps that I need to follow once I decide to join with you?
                                    </a>
                                    </h4>

                                </div>
                                <div id="collapses19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings19" aria-expanded="false">
                                    <div class="card-body">
                                        <p><strong>Select your course</strong></p>
                                        <p>You choose the course that you decide to pursue but ensure you meet the entry requirements. </p>

                                        <p><strong>Enrol</strong></p>
                                        <p>Once the course is selected, you make an application via our website and contact us via email admission@sbusinesslondon.ac.uk. You can make the payment online or bank transfer- either a single payment or easily
                                            monthly instalments.</p>

                                        <p><strong>Access to Learning Portal </strong></p>
                                        <p>You will be provided with the login credentials to access the learning portal, which will have all sorts of pathway learning materials to complete your programs successfully. The simplified materials are easy to
                                            understand and would help you to work on your assignments. </p>

                                        <p><strong>Dedicated Tutor</strong></p>
                                        <p>You will be allocated to a tutor and supported by our academic support team who will assist, and advice about your course and assignments. Once you accomplish your assignment, your allocated tutor will assess your
                                            work and provides you with formative feedback which will help you to improve your assignment prior to the final submission.
                                        </p>
                                        <p><strong>Assessment of Assignments.</strong></p>
                                        <p>Feedback is provided to you regularly when you improve your work. Once the final submission is made, marks and grades are published via the learning portal.
                                        </p>
                                        <p><strong>Certification </strong></p>
                                        <p>You will get your certificate once you completed the course successfully. You can then move on to your desired career with the help of the accredited certificate. You can enrol for a different course with us; if
                                            you want to study more, Decision is yours.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 bg-reg">

                        <h3 class="mt-20 line-bottom mb-10">Register <span class="text-theme-color-2"> Your Interest!</span></h3>

                       
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
                        <link rel="stylesheet" type="text/css" href="../register/css/style.css">
                        <div>
                            <form method="get" style="padding:10px" action="{{route('add_request')}}">

                                <fieldset>
                                    <legend><span class="number">1</span>Your basic info</legend>

                                    <input type="text" id="fname" name="fname" class="regElment" required="" placeholder="First Name">

                                    <input type="text" id="lname" name="lname" class="regElment" required="" placeholder="Last Name">

                                    <input type="email" id="mail" name="email" class="regElment" required="" placeholder="Email">

                                    <input type="text" id="phone" name="phone" class="regElment" required="" placeholder="Phone Number">

                                    <!-- </fieldset>
                                
                               
                                <fieldset> -->
                                    <legend><span class="number">2</span>Courses</legend>

                                    <label for="course">Select Course:</label>
                                 <select class="custom-select form-control regElment" required="" id="course" name="course">
                                    <option value="">Choose Course</option>

                                    @foreach(awarding_bodies() as $key => $awarding_body)
                                        <optgroup label="{{$awarding_body}}">
                                        @foreach($courses as $course)
                                        @if($course->awarding_body==$key)
                                        <option value="{{$course->id}}" >{{$course->title}}</option>
                                        @endif
                                        @endforeach
                                        </optgroup>                      
                                        @endforeach     
                      
                                        </select>

                 
                                 
                                    <label for="msg">Message:</label>
                                    <textarea id="msg" name="msg" class="regElment"></textarea>

                                    <!-- <input name="captcha_code2" type="text" class="regElment captcha-input2" required="" minlength="6" maxlength="6"> -->
                                    <button type="submit" id="reg" name="reg">Request Information</button>

                                </fieldset>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </section>


 @endsection