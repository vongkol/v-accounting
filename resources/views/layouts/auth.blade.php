<html lang="{{ env('APP_LOCALE') }}">
    @include('partials.auth.head')

    <body class="hold-transition login-page">
        @stack('body_start')

        <div class="login-box">
            @stack('login_box_start')

            <div class="login-logo">
                <img src="{{ asset('public/img/akaunting-logo-white.png') }}" alt="V-Accounting" />
            </div>
            <!-- /.login-logo -->

            <div class="login-box-body">
                <p class="login-box-msg"><strong>@yield('message')</strong></p>

                @include('flash::message')

                @stack('login_content_start')

                @yield('content')

                @stack('login_content_end')
            </div>
            <!-- /.login-box-body -->

            <div class="login-box-footer">
               Powered By <u><a href="http://vdoo.biz" target="_blank">Vdoo Freelance Team</a></u>
            </div>
            <!-- /.login-box-footer -->

            @stack('login_box_end')
        </div>

        @stack('body_end')
    </body>
</html>
