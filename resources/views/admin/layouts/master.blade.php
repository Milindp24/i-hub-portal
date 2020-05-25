<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>I-Hub Admin dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        @include('admin.layouts.head')
    </head>
<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
    <div id="wrapper">
        @include('admin.layouts.header')
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                @include('admin.layouts.sidebar')
                @yield('content')
            </div>
            @include('admin.layouts.footer')  
        </div>
    </div>
    @include('admin.layouts.footer-script')  
</body>
</html>