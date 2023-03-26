<!DOCTYPE html>
<html lang="en">

<!-- renovation-and-painting43:34-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Boldman &#8211; Handyman &amp; Renovation Services HTML Template" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Boldman &#8211; Handyman &amp; Renovation Services</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <!--Color Switcher Mockup-->
    <link rel="stylesheet" type="text/css" href="css/color-switcher.css">

    <!--Color Themes-->
    <link id="switcher-color" href="css/colors/default-color.css" rel="stylesheet">

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />


</head>

<body>

    <!--page start-->
    <div class="page sidebar-true">

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-classic">
            <!-- ttm-topbar-wrapper -->
            @include('Layouts.top_menu')
            <!-- ttm-topbar-wrapper end -->

            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index-2.html" title="Boldman" rel="home">
                                        <img id="logo-img" class="img-center" src="images/logo-img.png" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                @include('Layouts.nav')
                                <!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div>
            <!--ttm-header-wrap end -->
        </header>
        <!--header end-->


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Renovation And Painting</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index-2.html"><i class="ti ti-home"></i></a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span><span>Renovation And Painting</span></span>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">

            <!-- sidebar -->
            <div class="sidebar ttm-sidebar-left ttm-bgcolor-grey break-991-colum clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">

                        <div class="col-lg-12 content-area ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-wight">
                            <!-- ttm-service-single-content-are -->
                            <div class="ttm-service-single-content-area ttm-col-bgcolor-yes ttm-bgcolor-wight">
                                <div class="row pb-10">
                                    <div class="col-sm-8">
                                        <div class="ttm-service-description">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="booking-doc-info">
                                                        <a href="doctor-profile.html" class="booking-doc-img">
                                                            <img src="images/11.png" alt="User Image" />
                                                        </a>
                                                        <div class="booking-info">
                                                            <h4>
                                                                <a href="doctor-profile.html">{{$services->name}}</a>
                                                            </h4>
                                                            <div class="rating" style="font: normal normal normal 14px/1 FontAwesome;color: #fda12b;">
                                                                <i class="fas fa-star "></i>
                                                                <i class="fas fa-star "></i>
                                                                <i class="fas fa-star "></i>
                                                                <i class="fas fa-star "></i>
                                                                <i class="fas fa-star"></i>
                                                                <span class="d-inline-block average-rating">35</span>
                                                            </div>
                                                            <p class="text-muted mb-0">
                                                                <i class="fas fa-map-marker-alt"></i> Newyork, USA
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ttm-service-description pt-10">
                                        <!-- Schedule Widget -->
                                        <div class="card booking-schedule schedule-widget">
                                            <!-- Schedule Header -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <!-- Day Slot -->

                                                        <!-- /Day Slot -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- Day Slot -->

                                                        <!-- /Day Slot -->
                                                    </div>
                                                </div>

                                            <!-- /Schedule Header -->


                                        </div>
                                        <!-- /Schedule Widget -->

                                    </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="ttm-service-description">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ttm-pf-single-detail-box res-991-mt-30">
                                                        <div class="ttm-portfolio-title">
                                                            <h2 class="ttm-pf-detailbox-title"></h2>
                                                        </div>
                                                        <div class="ttm-pf-detailbox">
                                                            <ul class="ttm-pf-detailbox-list">
                                                                <li class="ttm-pf-details-date">
                                                                    <i class="fa fa-briefcase"></i>
                                                                    <span class="ttm-pf-left-details">Project Name </span>
                                                                    <span class="ttm-pf-right-details">Heating System Tune-Up, Manham</span>
                                                                </li>
                                                                <li class="ttm-pf-details-date">
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="ttm-pf-left-details">Client </span>
                                                                    <span class="ttm-pf-right-details">TThemeForest Envato</span>
                                                                </li>
                                                                <li class="ttm-pf-details-date">
                                                                    <i class="fa fa-bookmark-o"></i>
                                                                    <span class="ttm-pf-left-details">Category </span>
                                                                    <span class="ttm-pf-right-details">Plumbing</span>
                                                                </li>
                                                                <li class="ttm-pf-details-date">
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="ttm-pf-left-details">Date </span>
                                                                    <span class="ttm-pf-right-details">April 04, 2019</span>
                                                                </li>
                                                                <li class="ttm-pf-details-date">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span class="ttm-pf-left-details">Duration  </span>
                                                                    <span class="ttm-pf-right-details">1 Months</span>
                                                                </li>
                                                                <li class="ttm-pf-details-date">
                                                                    <i class="fa fa-map-marker"></i>
                                                                    <span class="ttm-pf-left-details">Location </span>
                                                                    <span class="ttm-pf-right-details">Bulls Stadium, Califorina</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{-- 
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="ttm-service-description">
                                        <!-- Schedule Widget -->
                                        <div class="card booking-schedule schedule-widget">
                                            <!-- Schedule Header -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <!-- Day Slot -->

                                                        <!-- /Day Slot -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- Day Slot -->

                                                        <!-- /Day Slot -->
                                                    </div>
                                                </div>

                                            <!-- /Schedule Header -->


                                        </div>
                                        <!-- /Schedule Widget -->

                                    </div>
                                    <!-- Submit Section -->
                                    <div class="submit-section text-right pt-10">
                                            <a href="checkout.html" class="btn btn-primary submit-btn">Proceed to Pay</a>
                                        </div>
                                        <!-- /Submit Section -->

                                </div>

                            </div> --}}
                            <!-- ttm-service-single-content-are end -->
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </div>
            <!-- sidebar end -->


        </div>
        <!--site-main end-->

        <!--footer start-->

        @include('Layouts.footer')

        <!--footer end-->

    </div><!-- page end -->


    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery-waypoints.js"></script>
    <script src="js/jquery-validate.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min6959.js?ver=4.9.3"></script>
    <script src="js/main.js"></script>

    <!-- Javascript end-->

</body>

<!-- renovation-and-painting43:59-->

</html>
