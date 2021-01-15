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

                    <div class="col-md-7">
                    <p><a href="/book-and-enrol-on-our-level-7-strategic-management-and-leadership-courses.php">Book And Enrol On Our Level 7 Strategic Management And Leadership Courses</a> - 18th November 2019</p>
                        <p><a href="/try-our-professional-business-administration-courses-online.php">Try Our Professional Business Administration Courses Online</a> - 11th November 2019</p>
                        <p><a href="/enrol-in-our-chartered-management-institute-level-5-course-online.php">Enrol In Our Chartered Management Institute Level 5 Course Online</a> - 4th November 2019</p>
                        <p><a href="/cmi-level-7-in-strategic-management-and-leadership.php">CMI Level 7 In Strategic Management And Leadership</a> - 28th October 2019</p>
                        <p><a href="/find-the-perfect-diploma-in-management-and-leaderships-online.php">Find The Perfect Diploma In Management And Leadership Online</a> - 21st October 2019</p>
                        <p><a href="/enrol-on-the-cmi-management-and-leadership-course.php">Enrol On The CMI Management And Leadership Course</a> - 14th October 2019</p>
                        <p><a href="/how-to-get-a-diploma-in-management-and-leadership.php">How To Get A Diploma In Management And Leadership</a> - 7th October 2019</p>
                        <p><a href="/invest-in-our-cmi-management-training-for-your-future.php">Invest In Our CMI Management Training For Your Future</a> - 23rd September 2019</p>
                        <p><a href="/cmi-leadership-and-management-level-5.php">CMI Leadership And Management Level 5</a> - 2nd September 2019</p>
                        <p><a href="/trust-our-business-management-courses-and-enrol-today.php">Trust Our Business Management Courses And Enrol Today</a> - 12th August 2019</p>
                        <p><a href="/enrol-on-our-cmi-leadership-and-management-level-5-course.php">Enrol On Our CMI Leadership And Management Level 5 Course</a> - 5th August 2019</p>
                        <p><a href="/why-choose-our-cmi-qualifications-for-your-business-career.php">Why Choose Our CMI Qualifications For Your Business Career</a> - 29th July 2019</p>
                        <p><a href="/looking-to-undertake-a-cmi-course.php">Looking To Undertake A CMI Course?</a> - 22nd July 2019</p>
                        <p><a href="/key-benefits-of-choosing-our-cmi-level-6-management-and-leadership-course.php">Key Benefits Of Choosing Our CMI Level 6 Management and Leadership Course</a> - 15th July 2019</p>
                        <p><a href="/discover-our-cmi-level-7-strategic-management-and-leadership-course.php">Discover Our CMI Level 7 Strategic Management And Leadership Course</a> - 15th July 2019</p>
                        <p><a href="/four-reasons-to-choose-our-cmi-level-5-in-management-and-leadership-course.php">Four Reasons To Choose Our CMI Level 5 In Management And Leadership Course</a> - 8th July 2019</p>
                        <p><a href="/enrol-on-our-cmi-level-management-and-leadership-course-today.php">Enrol On Our CMI Level Management And Leadership Course Today</a> - 8th July 2019</p>
                        <p><a href="/enrol-on-our-business-management-diploma-today.php">Enrol On Our Business Management Diploma Today</a> - 1st July 2019</p>
                        <p><a href="/get-yourself-an-mba-master-of-business-administration-with-sbl.php">Get Yourself An MBA (Master of Business Administration) With SBL</a> - 24th June 2019</p>
                        <p><a href="/find-a-diploma-in-management-and-leadership-online.php">Find A Diploma In Management And Leadership Online</a> - 10th June 2019</p>
                       
                    </div>

                    <div class="col-sm-5 col-xs-12 bg-reg">

                        <h3 class="mt-20 line-bottom mb-10">Register <span class="text-theme-color-2"> Your Interest!</span></h3>



                        <div class="pageloader hidden-xs" style="display: none;">
                            <div class="thecube">
                                <div class="cube c1"></div>
                                <div class="cube c2"></div>
                                <div class="cube c4"></div>
                                <div class="cube c3"></div>
                            </div>
                        </div>

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
                                    <select id="course" name="course" required="" class="regElment">
                                    <option selected value="" data-course-level="">Choose Course</option>
                     <?php
                      foreach($courses as $c)
                          {
                            ?>
                            <option value="<?php echo $c->id;?>"><?php echo $c->title;?></option>
                            <?php
                          }
                          ?>
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