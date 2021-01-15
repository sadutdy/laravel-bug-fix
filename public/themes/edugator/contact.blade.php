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
                            <h4 class="breadcrumb_title">Contact Us</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> Contact Us </li>
                               
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
        
        .bg-deep {
            background-color: #f1f1f1 !important;
        }
        
        .p-30 {
            padding: 30px !important;
        }
        
        .mb-20 {
            margin-bottom: 20px !important;
        }
    </style>
        <section>

<div class="container">

    <div class="row pt-0">

        <div class="col-md-4">

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="icon-box left media bg-deep p-30 mb-20">
                        <div class="media-body">
                            <p><strong>LONDON, UNITED KINGDOM </strong></p>
                            <p>
                                <i class="fa fa-map-marker"></i> 44 Broadway , Stratford <br> E15 1XH <br> London , United Kingdom
                            </p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +44 20 3637 8765</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +44 20 8133 7653</p>
                        </div>
                    </div>


                    <div class="icon-box left media bg-deep p-30 mb-20">
                        <div class="media-body">
                            <p><strong>Admission Enquiries </strong></p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +44 20 3637 8765</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> admission@sbusinesslondon.ac.uk</p>
                        </div>
                    </div>

                    <div class="icon-box left media bg-deep p-30 mb-20">
                        <div class="media-body">
                            <p><strong>Support Enquiries </strong></p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +44 20 8133 7653</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> support@sbusinesslondon.ac.uk</p>
                        </div>
                    </div>

                    <div class="icon-box left media bg-deep p-30 mb-20">
                        <div class="media-body">
                            <p><strong>LMS Enquiries (Virtual Learning Platform)</strong></p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +44 20 8133 7653</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> support@sbusinesslondon.ac.uk</p>
                        </div>
                    </div>

                    <div class="icon-box left media bg-deep p-30 mb-20">
                        <div class="media-body">
                            <p><strong>Accounts &amp; Finance</strong></p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +44 20 3637 8765</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> accounts@sbusinesslondon.ac.uk</p>
                        </div>
                    </div>

                    <div class="icon-box left media bg-deep p-30 mb-20">
                        <div class="media-body">
                            <p><strong>Partnership Enquiries </strong></p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +44 20 3637 8765</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> jabir@sbusinesslondon.ac.uk</p>
                        </div>
                    </div>


                </div>


            </div>

        </div>

        <div class="col-md-8 wow fadeInLeft mt-10 pr-30" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;" data-wow-duration="1s" data-wow-delay="0.3s">
          <h2 class="line-bottom text-center mt-0 mb-20">Register <span class="text-theme-color-2"> Your Interest!</span></h2>

           
            <div>
                <form method="get" style="padding:10px" id="coure_intrest" action="{{route('add_request')}}">

                    <fieldset>
                        <legend><span class="number">1</span>Your basic info</legend>

                        <input type="text" id="fname" name="fname" class="regElment" required placeholder="First Name">

                        <!-- <input type="text" id="lname" name="lname" class="regElment" required placeholder="Last Name"> -->

                        <input type="email" id="email" name="email" class="regElment" required placeholder="Email">

                        <input type="text" id="phone" name="phone" class="regElment" required placeholder="Phone Number">

                        <legend><span class="number">2</span>Courses</legend>

                                     <select class="custom-select form-control regElment" id="course" name="course">
                    <option selected value="" data-course-level="">Choose Course</option>
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
        

                        <textarea id="msg" name="msg" class="regElment" placeholder="Message"></textarea>

                        <p></p>
                        <p><div class="g-recaptcha" data-sitekey="6LcFlqMZAAAAALAVFsSI-iO9yaTtaS_6x-6XdDpB"></div>  </p>
               <div class="error" id="captcha_error"></div>
                      

                        <button type="submit" id="request_info" name="request_info">Request Information</button>
                    </fieldset>

                </form>
            </div>

            <br>

            
               

            <!-- <script type="text/javascript">
                $(document).ready(function() {
                    $("#request_info").click(function() {
                        $("#coure_intrest").validate();
                        if ($('#coure_intrest').valid()) {

                            if ($('textarea[id="g-recaptcha-response"]').val() == "") {
                                $("#captcha_error").html("Captcha Required");
                            } else {
                                $("#request_info").prop('disabled', true);
                                $.ajax({
                                    type: "POST",
                                    url: "register-action.php", //Relative or absolute path to response.php file
                                    data: {
                                        "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val(),
                                        "fname": $("#fname").val(),
                                        "lname": $("#fname").val(),
                                        "phone": $("#phone").val(),
                                        "email": $("#email").val(),
                                        "course": $("#course").val(),
                                        "message": $("#msg").val(),
                                    },
                                    dataType: "json",
                                    success: function(result) {
                                        window.location.assign("https://www.sbusinesslondon.ac.uk/success.php");
                                    },
                                    error: function(error) {
                                        window.location.assign("https://www.sbusinesslondon.ac.uk/success.php");
                                    }
                                });
                            }
                        }
                    });
                });
            </script> -->


        </div>

        <br>
        <br>

        <div class="col-md-8 wow fadeInLeft" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; padding-top: 50px;" data-wow-duration="1s" data-wow-delay="0.3s">



        </div>

    </div>

    <div class="row pt-0">
        <div class="col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.485532987308!2d-0.0011839843915616547!3d51.540995316067516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a64a518edca7%3A0x4e2386125e5e4a74!2sSchool%20of%20Business%20London!5e0!3m2!1sen!2sin!4v1583213787618!5m2!1sen!2sin"
                style="border:0;" allowfullscreen="" width="600" height="300" frameborder="0"></iframe>
        </div>

        <div class="col-md-4">
            <iframe src="https://www.youtube.com/embed/SIZSfip6Uic" width="100%" height="300"></iframe>
        </div>

    </div>

</div>

</section>
     


 @endsection