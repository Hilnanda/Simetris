<!DOCTYPE html>
<html lang="en">
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
        @include('admin.includes.style')
        @stack('bottom-style')
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>
        <div class="page-wrapper">
        <!--========== SIDEBAR ==========-->
        @include('admin.includes.sidebar')
        <!--========== END SIDEBAR ==========-->
        
        <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!--========== HEADER ==========-->
                @include('admin.includes.navbar')
                <!--========== END HEADER ==========-->

                <!--========== PAGE CONTENT ==========-->
                @yield('content-admin')
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--========== SCRIPT ==========-->
        @stack('top-script')
        @include('admin.includes.script')
        @stack('bottom-script')
    </body>
    <!-- END BODY -->
</html>