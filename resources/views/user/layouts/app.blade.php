<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!--========== STYLE ==========-->
        @stack('top-style')
        @include('user.includes.style')
        @stack('bottom-style')
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        @include('user.includes.navbar')
        <!--========== END HEADER ==========-->
        

        <!--========== PAGE CONTENT ==========-->
        @yield('content-user')

        <!--========== FOOTER ==========-->
        @include('user.includes.footer')
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>
        
        <!--========== SCRIPT ==========-->
        @stack('top-script')
        @include('user.includes.script')
        @stack('bottom-script')
    </body>
    <!-- END BODY -->
</html>