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
                        <p>School of Business London is dedicated to offering higher and professional education courses for students worldwide via, Blended and Online Learning. We deliver programs and transform careers around the world. SBL is one of the leading accredited centre of Chartered Management Institute (CMI) and offers various levels of Management and Leadership programs. Besides, we are accredited by other leading Ofqual.gov.uk regulated awarding bodies such as QUALIFI, NCC, British Computer Society to provide numerous Diploma in Business Management, Hospitality, Health and Social Care, Law, Computing Programs. Moreover, School of Business London is partnering with Chestnut Education Group to promote a number of British Degree programs awarded by the University of Central Lancashire and Anglia Ruskin University. Furthermore, SBL is an approved training provider of Sage Qualifications.</p>
                    </div>

                </div>

            </div>
        </section>
        <section class="d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                        <h2>Global Reach</h2>
	<i>“Learning Without Boundaries”</i>
<p>Based in the United Kingdom, we provide a global outlook by delivering Great British
Qualifications and transform careers around the world. We have regional access
centres in the United Arab Emirates, Malaysia, Singapore, Hong Kong and Beijing,
through which SBL’s programs are promoted.</p>
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
                        <h2>Our Mission and Vision</h2>
	<h3>SBL’s Mission</h3>

	<p>SBL&#39;s mission is to inspire innovation, transform lives and connect communities
through the power of education. With the help of Blended Learning and Online
Programmes SBL aims to offer high-quality education to transform the skills,
knowledge and understanding of our students to enhance their employability and
enable them to compete successfully in the dynamic and ever-changing business
world.</p>								
<h3>SBL’s Vision</h3>

<p>Our vision is to be the most personally connected learning organisation globally -a
catalyst for individual, organisational and community transformation.</p>
<h3>Our Values</h3>

	<p>The following unwavering values guide our commitment to students and their
success:</p>				

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
                        <h2>Online and Blended Learning</h2>
	<p>The programs offered at SBL are delivered by not only just classroom-based
learning but also via blended, distance learning and Online. SBL embraces cutting-
edge learning management system (LMS) to implement Blended, Distance and
Online Learning.</p>		

                        </div>
                    </div>




                </div>



                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="about-content" style="padding-top: 160px;">
                        <h2>Diverse &amp; Wide-ranges of programs</h2>
	<p>We offer diverse and wide ranges of programs by accredited awarding bodies and
universities, and the programs are recognised across the world. The courses areas
include Management &amp; Leadership, Business Management, Project Management,
Hospitality &amp; Tourism, Health &amp; Social Care, Law, Accounting &amp; Finance etc.</p>		
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
                        <h2>Accredited Qualifications</h2>
	<p>The qualifications offered at SBL are fully UK accredited and international recognised.
Whether you are studying online or blended our programs are a viable option for all
learners.</p>		
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
                        <h2>Global Reach</h2>
	<i>“Learning Without Boundaries”</i>
<p>Based in the United Kingdom, we provide a global outlook by delivering Great British
Qualifications and transform careers around the world. We have regional access
centres in the United Arab Emirates, Malaysia, Singapore, Hong Kong and Beijing,
through which SBL’s programs are promoted.</p>
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
                        <h2>Our Mission and Vision</h2>
	<h3>SBL’s Mission</h3>

	<p>SBL&#39;s mission is to inspire innovation, transform lives and connect communities
through the power of education. With the help of Blended Learning and Online
Programmes SBL aims to offer high-quality education to transform the skills,
knowledge and understanding of our students to enhance their employability and
enable them to compete successfully in the dynamic and ever-changing business
world.</p>								
<h3>SBL’s Vision</h3>

<p>Our vision is to be the most personally connected learning organisation globally -a
catalyst for individual, organisational and community transformation.</p>
<h3>Our Values</h3>

	<p>The following unwavering values guide our commitment to students and their
success:</p>					
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
                        <h2>Online and Blended Learning</h2>
	<p>The programs offered at SBL are delivered by not only just classroom-based
learning but also via blended, distance learning and Online. SBL embraces cutting-
edge learning management system (LMS) to implement Blended, Distance and
Online Learning.</p>		

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
                        <h2>Diverse &amp; Wide-ranges of programs</h2>
	<p>We offer diverse and wide ranges of programs by accredited awarding bodies and
universities, and the programs are recognised across the world. The courses areas
include Management &amp; Leadership, Business Management, Project Management,
Hospitality &amp; Tourism, Health &amp; Social Care, Law, Accounting &amp; Finance etc.</p>									
										
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
                        <h2>Accredited Qualifications</h2>
	<p>The qualifications offered at SBL are fully UK accredited and international recognised.
Whether you are studying online or blended our programs are a viable option for all
learners.</p>					
                        </div>
                    </div>




                </div>



              








            </div>


        </section>

        </section>
        

 @endsection