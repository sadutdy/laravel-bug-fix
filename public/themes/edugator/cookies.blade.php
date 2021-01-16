@extends('layouts.theme')
@section('content')

    @php
        $path = request()->path();
       
@endphp
<style>
.sbl_course_list ul li{
    list-style: initial;
}
.sbl_course_list {
    line-height: 1.8;
    font-size: 16px;
    text-align: justify;
}
</style>
<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Cookie Policy</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'>Cookie Policy</li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container sbl_course_list">
            <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>Cookies Policy</h3>
            <p>Cookies are a piece of data that web browser keeps in the system in which the user is working. This is done for identifying the device and provides web services in an efficient manner. This is intended for delivering the services and to use them in a reliable and convenient way. The majority of the cookies play a significant role in the functioning of our website, where others are not. For example, the authentication cookies are used to check whether the user is logged into a site so that security information like passwords, OTP can be sent. This is essential as it is concerned with the safety of the data on the web. Thus choosing the method to block some cookies can affect the functionality of the website. Advertising cookies are not placed in your device or system. We use the cookies on our site to make you feel comfortable to work online. The prime objectives of using the cookies on our site are firstly, to make proper functioning of our website and to make use of the services we offer reliably. Secondly, to make you remember your preferences and finally to collect data regarding how you use the system. These factors help to improve our services.</p>
            <h3>Types of Cookies</h3>
            <p>First party cookies are those which are placed on your computer or system by us. Other cookies are provided and set by other parties or websites known as third party cookies. We keep a track on the pages and websites you visit with the support of Google Analytics. It can track the visitors to our website too. Google Analytics does this by setting up three cookies in your browser. These ensure privacy and do not store any information that could reveal your identity.</p>
            </div>
            </div>
            </div>
        </section>
        @endsection