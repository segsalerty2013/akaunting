<html lang="{{ app()->getLocale() }}">
    @include('partials.auth.head')

    <body class="hold-transition login-page">
        @stack('body_start')

        <div class="login-box">
            @stack('login_box_start')

            <div class="login-logo">
                <i class="fa-2x fa fa-lock"></i>
            </div>
            <!-- /.login-logo -->

            <div class="login-box-body">
                <p class="login-box-msg">@yield('message')</p>

                @include('flash::message')

                @stack('login_content_start')

                @yield('content')

                @stack('login_content_end')
            </div>
            <!-- /.login-box-body -->

            <div class="login-box-footer">
                <a href="{{ config('app.url') }}" target="_blank"><<< back to main store</a>
            </div>
            <!-- /.login-box-footer -->

            @stack('login_box_end')
        </div>

        @stack('body_end')
    </body>
</html>
