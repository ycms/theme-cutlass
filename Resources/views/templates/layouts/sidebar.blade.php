@layout('templates.layouts.base')

@section('content')
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <!-- 边栏 start -->
                <div class="col-md-3 sidebar" role="complementary">
                    {{ '';dynamic_sidebar('sidebar-primary')  //否则会显示个1在页面里 }}
                </div>
                <!-- 边栏 end -->
                <!-- 内容 start-->
                <div class="col-md-9 single-post main-content">
                    @yield('page-content')
                </div>
                <!-- // 内容 end -->

            </div>
        </div>
    </div>  <!--//.content-->

@endsection

