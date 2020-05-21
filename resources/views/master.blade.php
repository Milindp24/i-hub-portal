<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive bootstrap landing template">
    <meta name="author" content="Themesbrand">

    <link rel="shortcut icon" href="images/favicon.ico">

    <title>i-HUB – A Government of Gujarat Initiative</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/mobiriseicons.css') }}" rel="stylesheet">

    <!--Magnific popup -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/magnific-popup.css') }}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.transitions.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

    <!--Template Color-->
    <link href="{{ URL::asset('css/colors/default.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.materialdesignicons.com/5.2.45/css/materialdesignicons.min.css">

</head>

<body>
    <header id="topnav" class="defaultscroll fixed-top sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo text-uppercase">
                    <img src="images/logo-light.png" alt="" class="logo-light" height="38" />
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="38" />
                </a>
            </div>
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="index.php">i-Hub</a>

                    </li>
                    <li class="">
                        <a href="#features">features</a>
                    </li>

                    <li class="">
                        <a href="contact.php">Contact</a>
                    </li>

                    <li class="">
                        <a href="login.php" class="btn-custom btn-rounded">For Grantee</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content');

    <!-- Footer -->
    <section class="bg-dark footer" id="contact">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-3">
                    <h5 class="text-white footer-title ">Supported by</h5>
                    <div class="mt-4">
                        <a href="http://ssipgujarat.in/"><img src="http://ihubgujarat.in/wp-content/uploads/2019/09/logo.png" class="image wp-image-2859  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" scale="0" width="203" height="83"></a>
                    </div>

                </div>
                <div class="col-lg-3">
                    <h5 class="text-white footer-title">Contact</h5>
                    <div class="mt-4">
                        <div class="textwidget custom-html-widget"><span class="glyphicon glyphicon-envelope"></span>&nbsp;
                            <a href="mailto:office-ihub@gujarat.gov.in" target="_top" rel="noopener noreferrer">office-ihub@gujarat.gov.in</a>
                            <br><br>
                            <span style="text-align:left;">
                                <span class="glyphicon glyphicon-earphone"></span>&nbsp;
                            079-26308210</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-white footer-title">Social links</h5>
                    <div class="mt-4">
                        <div class="mt-4">
                            <ul class="list-unstyled text-white footer-social list-inline">
                                <li class="list-inline-item"><a href="https://www.facebook.com/ihubgujarat/?modal=admin_todo_tour"><i class="mdi mdi-facebook facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/ihubgujarat"><i class="mdi mdi-twitter twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/company/26659341/admin/"><i class="mdi mdi-linkedin linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-white footer-title">Address</h5>
                    <div class="mt-4">
                        <div class="textwidget custom-html-widget text-center"><span class="glyphicon glyphicon-map-marker"></span><br>
                            Pragna Puram, KCG Campus, Opp. PRL, <br>
                            Nr. L.D College of Engineering,<br>
                        Navrangpura, Ahmedabad - 380015.</div>
                    </div>
                </div>
            </div>
            <div class="footer-border"></div>
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="float-right pull-none">
                        <p class="mb-0">i-Hub © Copyright 2020. All Rights Reserved.</p>
                    </div>
                    <div class="float-left pull-none">
                        <p class="footer-terms"><a href="#">Terms</a> & <a href="#">Privacy Policy </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer end --> 
    <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/owl.carousel.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/waypoints.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
        <!--common script for all pages-->
        <script src="{{ URL::asset('js/jquery.app.js') }}"></script>
        <script src="{{ URL::asset('js/custom.js') }}"></script>
        
    </body>
</html>