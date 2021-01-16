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
                            <h4 class="breadcrumb_title">Individual Learning Plan</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'>Individual Learning Plan</li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
<div class="about">
<div class="col-sm-12 col-xs-12">
<div class="about_us_contnt">
    <script type="text/javascript" src="https://form.jotform.com/jsform/200973470925358"></script>
</div>
</div>

</div>
</div>
@endsection