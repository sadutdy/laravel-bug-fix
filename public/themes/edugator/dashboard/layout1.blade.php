@include(theme('header1'))
<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title"></h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"></li>
                             
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<div class="dashboard-wrap">

    <div class="container py-4">
        <div class="row">
            <div class="col-3 dashboard-menu-col">
                @include(theme('dashboard.sidebar-menu'))
            </div>

            <div class="col-9">
                @include('inc.flash_msg')
                @yield('content')
            </div>

        </div>
    </div>

</div>

@include(theme('footer1'))
