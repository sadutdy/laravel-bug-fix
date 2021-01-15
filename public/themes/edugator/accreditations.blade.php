@extends('layouts.theme')
@section('content')

    @php
        $path = request()->path();
       
@endphp
<style>
        .course_wrapper {
            display: inline-block;
            width: 100%;
            position: relative;
            margin: 0px;
            padding: 0px;
        }
        
        .course_block {
            box-shadow: 0 0px 0px 0px #e5e5e5 margin-bottom: 30px;
            padding: 20px;
            float: left;
            width: 100%;
            position: relative;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
        }
        
        .course_block:hover .img_wrap img {
            filter: brightness(50%);
        }
        
        .course_info {
            float: none;
            overflow: hidden;
            text-align: left;
            padding-left: 20px;
        }
        
        .course_info h4 {
            text-align: left;
            color: #3b4351;
            font-size: 17px;
            font-weight: 600;
            margin: 0px auto 10px;
            text-transform: uppercase;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
        
        .course_info p {
            text-align: left;
            margin: 0px;
            overflow: hidden;
            height: 50px;
        }
        
        .course_block .science,
        .course_block .accounts,
        .course_block .business,
        .course_block .psychology,
        .course_block .food,
        .course_block .arts,
        .course_block .icon,
        .course_block .course_count span,
        .course_block .course_price span {
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            padding: 10px;
        }
        
        .course_block .science .icon i {
            color: #e91e63;
        }
        
        .course_block .accounts .icon i {
            color: #f8c331;
        }
        
        .course_block .business .icon i {
            color: #45aef4;
        }
        
        .course_block .psychology .icon i {
            color: #10c45c;
        }
        
        .course_block .food .icon i {
            color: #00bfa5;
        }
        
        .course_block .arts .icon i {
            color: #fc5f42;
        }
        
        .course_block:hover .icon i {
            color: #fff;
        }
        
        .course_block:hover .science .icon {
            background-color: #e91e63;
        }
        
        .course_block:hover .accounts .icon {
            background-color: #f8c331;
        }
        
        .course_block:hover .business .icon {
            background-color: #45aef4;
        }
        
        .course_block:hover .psychology .icon {
            background-color: #10c45c;
        }
        
        .course_block:hover .food .icon {
            background-color: #00bfa5;
        }
        
        .course_block:hover .arts .icon {
            background-color: #fc5f42;
        }
        
        .course_block .course_count_wrap {
            border-top: 1px solid #e5e5e5;
            margin: 5px auto -5px;
            padding: 15px 0px 0px;
            display: inline-block;
            width: 100%;
        }
        
        .course_block .course_count,
        .course_block .course_price {
            color: #bfc5ca;
            text-transform: uppercase;
        }
        
        .course_block:hover .science .course_count,
        .course_block:hover .science .course_price {
            color: #e91e63;
        }
        
        .course_block:hover .accounts .course_count,
        .course_block:hover .accounts .course_price {
            color: #f8c331;
        }
        
        .course_block:hover .business .course_count,
        .course_block:hover .business .course_price {
            color: #45aef4;
        }
        
        .course_block:hover .psychology .course_count,
        .course_block:hover .psychology .course_price {
            color: #10c45c;
        }
        
        .course_block:hover .food .course_count,
        .course_block:hover .food .course_price {
            color: #00bfa5;
        }
        
        .course_block:hover .arts .course_count,
        .course_block:hover .arts .course_price {
            color: #fc5f42;
        }
        
        .course_block .course_count span,
        .course_block .course_price span {
            color: #f1594f;
        }
        
        .course_block .course_count {
            float: left;
        }
        
        .course_block .course_price {
            float: right;
        }
        /** List View **/
        
        .sbl_course_list .img_wrap {
            width: 24.4%;
            float: left;
            margin: 0px;
            /* Custom, iPhone Retina */
            /* Extra Small Devices, Phones */
            /* Small Devices, Tablets */
        }
        
        @media only screen and (max-width: 320px) {
            .sbl_course_list .img_wrap {
                width: 100%;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .sbl_course_list .img_wrap {
                width: 100%;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .sbl_course_list .img_wrap {
                width: 100%;
            }
        }
    </style>
<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Accreditations</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> Accreditations</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container sbl_course_list">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block text-center ">
                            <h2>Accreditation &amp; Partners</h2>
                            <p>School of Business London is dedicated to offering students worldwide with the qualifications they can fully trust. SBL is accredited and recognised by several UK Government regulated awarding bodies and deliver over hundred
                                and twenty qualifications in various categories such as Business Management, Management and Leadership, Hospitality and Tourism, Accounting and Finance, Health and Social Care, Education and Training, Project Management,
                                Marketing etc. Besides, SBL promote some degree programs delivered by a few reputed UK Universities. The courses offered at SBL are from recognised professional bodies and universities and are fully accredited. It emphasises
                                our commitment to the sustained improvement of the quality of our offerings, delivering opportunity and peace of mind to you.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="CMI" src="{{theme_asset('img/CMI.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                        <h2>CMI – Chartered Management Institute</h2>
                                        <span class="more">
                                        CMI is royal charter and a UK Government (Ofqual.gov.uk) regulated awarding body.
Chartered Management Institute established over 60 years ago as the British Institute of
Management back then; it had developed the UK’s very first diploma in management
studies. In the years that followed, CMI has consistently been at the forefront of all aspects
of management and leadership. Today CMI is the only chartered professional awarding body
committed to offering the highest standards in management and leadership excellence.
Presently over 100,000 managers use its unique services daily. CMI qualifications aim for
managers and leaders at any level, and it remains the only Awarding Body which can award
Chartered Manager status - the ultimate management accolade. Employers highly value the
qualifications awarded by CMI, and hence it boosts your career prospects.
                                        </span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:100px" src="{{theme_asset('img/cmi.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary" href="/courses" role="button">View all CMI courses</a><a class="btn btn-danger" href="https://www.managers.org.uk/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Science" src="{{theme_asset('img/Qualifi.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                        <h2>QUALIFI</h2>
                                        <span class="more">
                                        Qualifi is a UK Government (Ofqual.gov.uk) regulated awarding organisation and has
developed a reputation for supporting relevant skills in a range of job roles and industries
including Leadership, Enterprise and Management, Hospitality &amp; Catering, Health and Social
Care, Business Process Outsourcing and Public Services.Qualifi is also a signatory to BIS international commitments of quality.
                                        </span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:200px" src="{{theme_asset('img/Unknown_sgu1e9.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary" href="/courses" role="button">View all QUALIFI courses</a><a class="btn btn-danger" href="https://qualifi.net/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="BCS" src="{{theme_asset('img/BCS.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                        <h2>British Computer Society (The Chartered Institute for IT)</h2>
                                        <span class="more">
                                        British Computer Society is a royal charter and a UK Government (Ofqual.gov.uk) regulated
awarding organisation and been over 60 years in the forefront of computing evolution.
Currently there are 68000 BCS members and Chartered IT Professionals across the world
and a broader community of business leaders, educators, practitioners and policy-makers all
committed to our mission. BCS ensure the digital journey is positive and safe for everyone
by enhancing the standards of conduct and competence throughout the IT industry.
                                        </span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:200px" src="{{theme_asset('img/BCS.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary" href="/courses" role="button">View all BCS courses</a><a class="btn btn-danger" href="https://www.bcs.org/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="NCC" src="{{theme_asset('img/NCC.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                        <h2>NCC Education </h2>
                                        <span class="more">
                                        NCC Education is a UK Government (Ofqual.gov.uk) regulated awarding organisation and
worldwide provider of British Education. NCC Education was originally part of National
Computing Centre established as a computing initiative by the British Government in 1966
and became independent from the British government and established as an awarding
organisation of British qualifications in 1967. NCC Education higher education portfolio
includes IT, Business, English Language and Foundation Levels Qualifications. NCC partner
with many universities to provide students with an affordable pathway to obtain a UK
university degree or masters qualification in the areas of Business and Computing.
                                        </span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:80px" src="{{theme_asset('img/NCCEdu_Logos-03.jpg')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary" href="/courses" role="button">View all NCC courses</a><a class="btn btn-danger" href="https://www.bcs.org/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="IBT" src="{{theme_asset('img/IBT.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                        <h2>Institute of Business and Technology </h2>
                                        <span class="more">
                                        School of Business London is the Accredited Centre of Institute of Business and Technology (IBT). IBT is an awarding organisation, which develops various high-quality vocational qualifications. IBT Programmes are guaranteed to conform to a high standard since they recognise, monitor and audit our accredited centre to ensure that they are functioning legitimately and reliably. Moreover, IBT takes necessary measures to assure that centres are provided comprehensive supports to facilitate them to provide the best service possible to the learners. 
                                        </span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:200px" src="{{theme_asset('img/ibt.svg')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary" href="/courses" role="button">View all IBT courses</a><a class="btn btn-danger" href="https://www.associationofprofessionalsales.com/" role="button"
                                        target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>
                    -




                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Sage" src="{{theme_asset('img/SAGE.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                        <h2>Sage Qualifications</h2>
                                        <span class="more">
                                        Sage Qualifications provide a range of accredited qualifications in partnership with various 
awarding and professional bodies including CIMA, ICAEW, ICB, OCR and Skillsfirst. The qualifications developed by Sage Qualifications offer great development opportunities. With a course from Sage Qualifications Besides the qualifications you can develop your skills and gain qualifications in digital accounting and payroll. 

                                        </span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:200px" src="{{theme_asset('img/sage-logo.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary" href="/courses" role="button">View all ARU courses</a><a class="btn btn-danger" href="https://www.sagequalifications.com/

" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Anglia-Ruskin-University" src="{{theme_asset('img/Anglia-Ruskin-University.jpg')}}">

                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                        <h2>Anglia Ruskin University </h2>
                                        <span class="more">
                                        Anglia Ruskin University began in 1858 as the Cambridge School of Art founded by William Beaumont. It was then merged with the Cambridge shire College of Arts and Technology and the Essex Institute of Higher Education and was renamed Anglia Polytechnic. It was then given university status in 1992 and renamed Anglia Ruskin University in 2005. The university has campuses in UK (Cambridge, Chelmsford, London and Peterborough), as well as they are partnered with institutions around the world including Berlin, Budapest, Trinidad, Singapore and Kuala Lumpur. SBL work in partnership with Chestnut Education Group to promote the programs awarded by the Anglia Ruskin University.  

                                        </span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:200px" src="{{theme_asset('img/ARU.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary" href="/courses" role="button">View all ARU courses</a><a class="btn btn-danger" href="https://aru.ac.uk/

" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>




                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Science" src="{{theme_asset('img/UCLAN imavge.jpg')}}">

                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                        <h2>University of Central Lancashire (UCLAN)</h2>
                                        <span class="more">
                                        Founded in 1828, the University of Central Lancashire is a public university based in the city of Preston, Lancashire, England. Today UCLAN is one of the largest in the United Kingdom with a student and staff community nearly 38,000. At present the University has academic partners in all regions of the globe, and it is on a world stage that the first-class quality of its education was first recognised. In 2010 UCLAN has become the first UK modern Higher Education institution to appear in the QS World University Rankings. In 2018, the Centre for World University Rankings estimated Central Lancashire to be in the top 3.7 percent of all global universities, highlighting the growth the university has made in offering students with real-world learning experiences and reflecting the university's extensive pool of academic talent. 

                                        </span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><object data="{{theme_asset('img/uclan.svg')}}" type="image/svg+xml" class="mob" width="200">
          </object>
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary" href="/courses" role="button">View all UCLAN courses</a><a class="btn btn-danger" href="https://aru.ac.uk/

" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>

        <!-- Our Footer -->
       

 @endsection