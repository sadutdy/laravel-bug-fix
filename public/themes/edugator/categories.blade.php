@extends('layouts.theme')

@php
    $categories = \App\Category::parent()->whereStatus(1)->get();
    $categoriesWithCourses = \App\Category::parent()->has('courses')->whereStatus(1)->get();
@endphp

@section('content')

  
    <section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">{{__t('topics')}}</h4>
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'>{{__t('topics')}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <div class="categories-wrap my-5">

        <div class="container">
            <div class="row">

                @foreach($categories as $category)
                    <div class="col-md-4">
                        <div class="category-item-name">

                            <a href="{{route('category_view', $category->slug)}}" style="background-color: {{$category->bg_color}};" class="py-4 d-block text-center text-white mb-3 ">
                                <i class="la {{$category->icon_class}}"></i> {{$category->category_name}}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>


    @if($categoriesWithCourses->count())
        <div class="categories-courses-wrapper">
            <div class="container">
                @foreach($categoriesWithCourses as $category)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header-wrap">
                                <h4 class="section-title"> <span class="text-muted">{{__t('new_arrival_in')}}</span>
                                    <a href="{{route('category_view', $category->id)}}">
                                        <i class="la {{$category->icon_class}}"></i> {{$category->category_name}}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="category-courses-cards-wrap mt-3">
                        <div class="row">
                            @foreach($category->courses()->take(4)->get() as $course)
                                {!! course_card($course) !!}
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @else

        {!! no_data() !!}

    @endif

@endsection
