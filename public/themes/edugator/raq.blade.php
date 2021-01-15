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
                            <h4 class="breadcrumb_title">Regional Access Points</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> Regional Access Points</li>
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
                        <div class="course_block ">
                        <h2>Regional Access Partners </h2>
						<p>In the recent times, the educational market has advanced significantly, where technological platforms and hybrid teaching support with flexible study mode has become the key to success. Regional Access Points are built around the concept of blended learning, a structured study option that uses a combination of support elements from the academic team of School of Business London and its partners. School of Business London has built Regional Access Partners (RAP) network globally which removes boundaries to the education and enables us to provide our qualifications across the world. We are an IT-driven education establishment, and we rely on a comprehensive quality control process which is managed by our qualified and experienced academic and admin team at SBL</p>
						
					    <p>Regional Access Points (RAP) are authorised to promote and recruit learners for the courses delivered by School of Business London. RAP act as a representative of SBL
                        for initial face-to-face contact and document collection from prospective students, and to provide all required information to all potential students, staff members and
                        other stakeholders accurately and transparently. Regional Access Partners are just meant to promote and recruit students and must not engage in the delivery of the courses
                        or any associated workshops without approval from the relevant awarding organisation. Every Reginal Access Points (RAP) goes through a rigorous quality check and undergoes
                        a probation period of six months.</p></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="tamkeen" src="{{theme_asset('images/rap/Tamkeen.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                    <h2>Tamkeen Education </h2>
											<span class="more">
											Tamkeen Education is the trading name of Tamkeen Consultancy Centre, specialising in education and training consultancy. Tamkeen Education is the exclusive Regional Access Partner in the UAE, located in Sharjah. Being the regional centre of School of Business London (SBL), Tamkeen Education recruits students to SBL for various accredited business, marketing, accounting & IT qualifications at an affordable cost. In addition, they also recruit students to other universities in different countries for many distance and online learning programs. Besides for those who are looking to study overseas, Tamkeen Education provides comprehensive service that guides students every step of the way, no matter what level of education they are seeking.
											</span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:100px" src="{{theme_asset('images/rap/Tamkeen.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Sharjah, UAE</a><a class="btn btn-danger"  href="https://www.managers.org.uk/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Global-Merit-Mangt" src="{{theme_asset('images/rap/Global-Merit-Mangt.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                    <h2>Global Merit Management Ltd </h2>
											<span class="more">
											Global Merit Management Ltd is our RAP in Hong Kong, located at Silvercorp International Tower, 707-713 Nathan Road, Mong Kok, Kowloon, Hong Kong. Global Merit Management Ltd was established in 2008 in Hong Kong with a presence in a few Asian cities to serve the educational institutions and the public in the fields of international program consulting, institutional development, training & development, project management and investment analysis & market research. By offering online and traditional classroom-based educational services, workshops, and seminars, GMM places quality continuing professional education within the financial and physical reach of millions of individuals.
											</span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:200px" src="{{theme_asset('images/rap/gmmgt.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group"><a class="btn btn-primary"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Hong Kong</a><a class="btn btn-danger"  href="https://qualifi.net/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="BCS" src="{{theme_asset('images/rap/InfoEra.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                    <h2>InfoEra Academy  </h2>
											<span class="more">
											Infoera Academy is a RAP of SBL in Malaysia. Infoera was established in 2001 to provide continuing education for working adults. It has since grown from only five students back in 2002 to an active student body of more than 500 students' population now in the head office at Penang, Malaysia. To date, Infoera Academy has trained more than 3,000 students from different background at different levels, and they are now serving in various capacities both locally and globally. They are located at 26 Jalan Prai Jaya, Penang, 13700, Malaysia.
											</span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:200px" src="{{theme_asset('images/rap/infoera.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group">
                               
                                <a class="btn btn-primary"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Malaysia</a>
                                <a class="btn btn-danger"  href="http://www.infoera.edu.my/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Qiyi Consultancy Ltd – China British Education Centre" src="{{theme_asset('images/rap/CEBEC.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                    <h2>Qiyi Consultancy Ltd – China British Education Centre   </h2>
											<span class="more">
											Qiyi Consultancy Ltd, trading as China Britain Education Centre (CBEC) is our Regional Access Partner in Beijing, China. CBEC is a group of dedicated professional consultants offering top quality consultants in overseas study, immigration and investment. The consultancy is located at 1501-66, 17th Floor, U Tang International Plaza, Chaoyang City, Beijing, China. 
											</span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:80px" src="{{theme_asset('images/rap/CBEC.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group">
                                <a class="btn btn-primary"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Beijing, China</a>
                                <a class="btn btn-danger"  href="https://www.cbecuk.com/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Douglas Business School" src="{{theme_asset('images/rap/Douglas-Business-School.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                    <h2>Douglas Business School   </h2>
											<span class="more">
											Douglas Business School (DBS) provide a range of online and blended learning academic qualifications in Marketing, Business and Management.    DBS also provide accredited diploma, advanced diploma and postgraduate diploma qualifications from UK awarding bodies.   These diplomas act as pathway courses towards the various internationally recognised Bachelor’s, Master’s and MBA top-up programmes that are awarded by our well-ranked overseas partners.
											</span>
                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:200px" src="{{theme_asset('images/rap/DBS.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group">
                                <a class="btn btn-primary"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Singapore</a><a class="btn btn-danger"  href="https://www.douglas.hk/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>
                    -




                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="course_block">
                            <div class="img_wrap">
                                <img alt="Sage" src="{{theme_asset('images/rap/IIMTS.jpg')}}">


                            </div>
                            <div class="info_wrap">
                                <div class="science">
                                    <div class="course_info">
                                    <h2>International Institute of Management and Technology Studies -IIMTS   </h2>
											<span class="more">
											International Institute of Management and Technology Studies (IIMTS), a division of Genius Group Global is our Regional Access Partner (RAP) in Oman and Qatar. IIMTS is committed to offering them a wide array of academic programs consistent with a rigorous approach to higher education. In Qatar, they are based at 1st floor, 3rd Block, Ali Bin Jabor and Sons Complex, Near Gulf Cinema Signal, Doha, Qatar.
											</span>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12"><img style="width:200px" src="{{theme_asset('images/rap/IIMTS.png')}}" alt="School of Business London">
                                <div class="btn-group pull-right" role="group">
                                <a class="btn btn-primary"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Qatar</a><a class="btn btn-danger"  href="http://www.iimts.com/" role="button" target="_blank">Visit partner site</a></div>
                            </div>
                        </div>


                    </div>


                  


                  




                   

                </div>
            </div>
        </section>

        <!-- Our Footer -->
       

 @endsection