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
                            <h4 class="breadcrumb_title">Online Library</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> Online Library </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection