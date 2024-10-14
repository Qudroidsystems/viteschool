<!DOCTYPE html>
<html>



<!-- Mirrored from icra-html.codervex.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 17:39:36 GMT -->
<head>
    <meta charset="utf-8">
    <!-- Google Web Fonts
  ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,700|Julius+Sans+One|Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <!-- Basic Page Needs
  ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trinity Comprehensive Intl School</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicons
	================================================== -->
    <link rel="shortcut icon" href="{{asset('website/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('website/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('website/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('website/images/apple-touch-icon-114x114.png')}}">
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/css/scrolling-nav.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/css/color.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/css/layout.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/css/fontello.css')}}" />
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('website/js/owl/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/js/owl/css/owl.theme.default.min.css')}}">
    <!-- LayerSlider style files -->
    <link rel="stylesheet" href="{{ asset('website/js/layerslider/css/layerslider.css')}}" />

    <link rel="stylesheet" href="{{ asset('website/js/fancybox/jquery.fancybox.css')}}" />
    <!--    <link rel="stylesheet" href="{{ asset('website/css/color.css')}}" />-->
    <!-- HTML5 Shiv
	================================================== -->
    <script src="{{ asset('website/js/jquery.modernizr.js')}}"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Preloader -->
    {{-- <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div> --}}
    <!-- Preloader -->
    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
    <nav id="header" class="navbar navbar-default navbar-fixed-top transparent" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="xs-menu-bar"></span> <span class="xs-menu-bar"></span> <span class="xs-menu-bar"></span> </button>
                <h1 id="logo">
                    <a class="navbar-brand page-scroll" href="#page-top"><img alt="" class="ls-bg" src="{{asset('website/images/logo.png')}}"></a>
                </h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse navigation">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li><a href="#page-top" class="page-scroll">Home</a></li>
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#team" class="page-scroll">Professor</a></li>
                    <li><a href="#gallery" class="page-scroll">Gallery</a></li>
                    <li class="dropdown"><a href="#course" class="page-scroll" data-toggle="dropdown" class="dropdown-toggle">Course <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="courses-single.html" class="page-scroll">Course Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{ route('login') }}" class="page-scroll" data-toggle="dropdown" class="dropdown-toggle">School Portal </a>
                       
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
    <div id="wrapper">
        <!--  Layerslider  -->
        <section id="slider" class="page">
            <section class="section padding-off">
                <div id="layerslider-container">
                    <div id="layerslider">
                        <div class="ls-slide" style="slidedirection: left; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;"> <img alt="" class="ls-bg" src="{{ asset('website/images/layerslider/slider-1.jpg')}}">
                            <h1 class="ls-s2 align-center" style="top: 43%; left: 130px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;">
                                Welcome To Trinity comprehensive 
                            </h1>
                            <h1 class="ls-s2 align-center" style="top: 57%; left: 380px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;">
                               International School
                            </h1>
                        </div>
                        <!--/ .ls-layer-->
                        <div class="ls-slide" style="slidedirection: right; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;"> <img alt="" class="ls-bg" src="{{ asset('website/images/layerslider/slider-2.jpg')}}">
                            <h1 class="ls-s2 align-center" style="top: 43%; left: 180px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;">
                                We really love
                            </h1>
                            <h1 class="ls-s2 align-center" style="top: 57%; left: 260px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;">
                                what we do
                            </h1>
                        </div>
                        <!--/ .ls-layer-->
                        <div class="ls-slide" style="slidedirection: right; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;"> <img alt="" class="ls-bg" src="{{ asset('website/images/layerslider/slider-3.jpg')}}">
                            <h1 class="ls-s2 align-center" style="top: 43%; left: 360px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;">
                                and do
                            </h1>
                            <h1 class="ls-s2 align-center" style="top: 57%; left: 170px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;">
                                what we love!
                            </h1>
                        </div>
                        <!--/ .ls-layer-->
                    </div>
                    <!--/ #layerslider-->
                </div>
                <!--/ #layerslider-container-->
            </section>
            <!--/ .section-->
        </section>
        <!--  end Layerslider  -->

        <!--  About   -->
        <section id="about" class="page">
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="slogan align-center opacity ">
                                <h1>Welcome <span>ICRA University</span> </h1>
                                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                    <div class="row">
                        <div class="col-md-7 opacity ">
                            <p> <img src="{{ asset('website/images/temp/university.jpg')}}" alt="" /> </p>
                        </div>
                        <!--/ .col-md-6-->
                        <div class="col-md-5">
                            <p class="opacity"> Lorem ipsum dolor amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer neque lementum posuere purus. Nam convallis ipsum. Maecenas a vulputate ipsum. </p>
                            <ul class="list circle-list opacity">
                                <li>Organises lectures, seminars and lab work.</li>
                                <li>Provides a wide range of resources for teaching</li>
                                <li>learning in the form of libraries</li>
                                <li>Admits and supervises graduate students, and examines theses.</li>
                                <li>Provides administrative services and centrally managed student services such as counselling and careers.</li>
                            </ul>
                            <!--/ .list--><a role="button" id="togglable-a" data-toggle="collapse" href="#more-about-university" aria-expanded="false" aria-controls="collapseExample" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
                        <!--/ .col-md-5-->
                    </div>
                    <!--/ .row-->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="collapse more-about-university" id="more-about-university">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor. In hac habitasse platea dictumst. Donec nunc nunc, interdum sed aliquet quis, conditum vitae enim. Quisque molestie consectetur urna quis scelerisque. Morbi at lectus sapien. Donec fgiat arcu in mi placerat ullamcorper.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
            <section class="section parallax parallax-bg-1 bg-turquoise-color">
                <div class="full-bg-image"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12" id="demos">
                            <div id="testiminial-slider" class="owl-carousel owl-theme">
                                <div class="item align-center">
                                    <blockquote class="quote-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet leo sapien bibendum Aenean sit amet tempor augue</p>
                                    </blockquote>
                                    <div class="quote-image"><img alt="Jack Black" src="{{asset('website/images/testimonials/jack-70x70.jpg')}}"></div>
                                    <div class="quote-author"><span>Jack Black, Physics Professor</span></div>
                                </div>
                                <div class="item align-center">
                                    <blockquote class="quote-text">
                                        <p>Consecetur adipiscing donec ipsum, loboris convallis rutrum culis. Aliquam vitae odio elit nullam condimentum varius. Consecetur adipiscing donec ipsum, loboris. </p>
                                    </blockquote>
                                    <div class="quote-image"><img alt="Jack Black" src="{{asset('website/images/testimonials/amanda-70x70.jpg')}}"></div>
                                    <div class="quote-author"><span>Amanda Black, Chemistry Professor</span></div>
                                </div>
                            </div>
                            <!--/ .quotes-->
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
        </section>
        <!--  end About   -->

        <!--  Professor   -->
        <section id="team" class="page">
            <section class="section bg-gray-color">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title">meet our <span>Professor</span></h1>
                                <h2>We are great Professor in a university</h2>
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
                <section class="team-member">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="team-slider" class="owl-carousel owl-theme team-contents clearfix">
                                    <div class="item scale">
                                        <div class="contents clearfix">
                                            <div class="team-info">
                                                <div class="team-image">
                                                    <a class="single-image team-plus-icon" href="#team-1"><img src="{{asset('website/images/testimonials/ann-252x270.jpg')}}" alt="" /></a>
                                                </div>
                                                <hgroup class="team-group">
                                                    <h2 class="team-title">Ann Nagell</h2>
                                                    <h5 class="team-position">Accounting</h5>
                                                </hgroup>
                                            </div>
                                            <!--/ .team-info-->
                                        </div>
                                        <!--/ .contents-->
                                    </div>
                                    <div class="item scale">
                                        <div class="contents clearfix">
                                            <div class="team-info">
                                                <div class="team-image">
                                                    <a class="single-image team-plus-icon" href="#"><img src="{{asset('website/images/testimonials/jack-252x270.jpg')}}" alt="" /></a>
                                                </div>
                                                <hgroup class="team-group">
                                                    <h2 class="team-title">Jack Nagell</h2>
                                                    <h5 class="team-position">Economics</h5>
                                                </hgroup>
                                            </div>
                                            <!--/ .team-info-->
                                        </div>
                                        <!--/ .contents-->
                                    </div>
                                    <div class="item scale">
                                        <div class="contents clearfix">
                                            <div class="team-info">
                                                <div class="team-image">
                                                    <a class="single-image team-plus-icon" href="#"><img src="{{asset('website/images/testimonials/ingrid-252x270.jpg')}}" alt="" /></a>
                                                </div>
                                                <hgroup class="team-group">
                                                    <h2 class="team-title">Ingrid Grant</h2>
                                                    <h5 class="team-position">Finance</h5>
                                                </hgroup>
                                            </div>
                                            <!--/ .team-info-->
                                        </div>
                                        <!--/ .contents-->
                                    </div>
                                    <div class="item scale">
                                        <div class="contents clearfix">
                                            <div class="team-info">
                                                <div class="team-image">
                                                    <a class="single-image team-plus-icon" href="#"><img src="{{asset('website/images/testimonials/mike-252x270.jpg')}}" alt="" /></a>
                                                </div>
                                                <hgroup class="team-group">
                                                    <h2 class="team-title">Mike Rains</h2>
                                                    <h5 class="team-position">Technologies</h5>
                                                </hgroup>
                                            </div>
                                            <!--/ .team-info-->
                                        </div>
                                        <!--/ .contents-->
                                    </div>
                                </div>
                                <!--/ .team-contents-->
                            </div>
                        </div>
                        <!--/ .row-->
                    </div>
                    <!--/ .container-->
                </section>
                <!--/ .team-member-->
            </section>
            <!--/ .section-->
            <section class="section parallax parallax-bg-2">
                <div class="full-bg-image"></div>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h2>our top priorities</h2>
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="counter-box">
                                <div data-from="0" data-to="256" data-speed="1300" class="counter opacity"> <span class="count"></span>
                                    <h4 class="details">FOREIGN FOLLOWERS</h4>
                                </div>
                                <!--/ .counter-->
                                <div data-from="0" data-to="478" data-speed="1300" class="counter opacity"> <span class="count"></span>
                                    <h4 class="details">CLASSES COMPLETE</h4>
                                </div>
                                <!--/ .counter-->
                                <div data-from="0" data-to="28" data-speed="1300" class="counter opacity"> <span class="count"></span>
                                    <h4 class="details">STUDENTS ENROLLED</h4>
                                </div>
                                <!--/ .counter-->
                                <div data-from="0" data-to="759" data-speed="1300" class="counter opacity"> <span class="count"></span>
                                    <h4 class="details">CERTIFIED TEACHERS</h4>
                                </div>
                                <!--/ .counter-->
                            </div>
                            <!--/ .counter-box-->
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
        </section>
        <!--  end Professor   -->

        <!--  Gallery   -->
        <section id="gallery" class="page">
            <section class="section padding-bottom-off">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title">Our<span>Gallery</span></h1>
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
                <ul id="gallery-items" class="portfolio-items">
                    <li class="video mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-1.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">Petit</h2>
                                        <h6 class="extra-category">Video</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-1.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    <li class="branding mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-2.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">Isabela Rodrigues</h2>
                                        <h6 class="extra-category">Branding</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-2.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    <li class="logo mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-3.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">Illegal Burger ®</h2>
                                        <h6 class="extra-category">Logo</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-3.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    <li class="photo mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-4.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">Mercado Negro</h2>
                                        <h6 class="extra-category">Photo</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-4.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    <li class="logo mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-5.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">Kate & Julia</h2>
                                        <h6 class="extra-category">Logo</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-5.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    <li class="video mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-6.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">No Doubt</h2>
                                        <h6 class="extra-category">Video</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-6.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    <li class="branding mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-7.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">AM1000 Studios</h2>
                                        <h6 class="extra-category">Branding</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-7.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    <li class="logo mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-1.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">Market Decor</h2>
                                        <h6 class="extra-category">Logo</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-1.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    <li class="photo mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-2.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">Spicemode</h2>
                                        <h6 class="extra-category">Photo</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-2.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    <li class="logo mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{asset('website/images/gallery/gallery-sm-3.jpg')}}" alt="" />
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">Alfa Studios</h2>
                                        <h6 class="extra-category">Logo</h6>
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{asset('website/images/gallery/gallery-sm-3.jpg')}}"></a>
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                </ul>
                <!--/ .portfolio-items-->
            </section>
            <!--/ .section-->
        </section>
        <!--  end Gallery   -->

        <!--  Course   -->
        <section id="course" class="page course-wrap">
            <section class="section course-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title">Our <span>Course</span></h1>
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                    <div class="row">
                        <div class="course_tab_wrap">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
                                <li role="presentation"><a href="#accounting" aria-controls="accounting" role="tab" data-toggle="tab">Accounting</a></li>
                                <li role="presentation"><a href="#economics" aria-controls="economics" role="tab" data-toggle="tab">Economics</a></li>
                                <li role="presentation"><a href="#finance" aria-controls="finance" role="tab" data-toggle="tab">Finance</a></li>
                                <li role="presentation"><a href="#technologies" aria-controls="technologies" role="tab" data-toggle="tab">Technologies</a></li>
                                <li role="presentation"><a href="#management" aria-controls="management" role="tab" data-toggle="tab">Management </a></li>
                                <li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">Other</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
            </section>
            <!--/ .section-->
            <section class="section course-body">
                <div class="container">
                    <div class="row">
                        <div class="course_tab_des">
                            <div class="col-md-12">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- All COURSES -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="all">
                                        <div class="row margin-bottom">
                                            <!-- COURSES 1 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-2.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-2.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Real Estate Law</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 1 -->
                                            <!-- COURSES 2 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">The Secrets of Economic</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 2 -->
                                            <!-- COURSES 3 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-3.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-3.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Networking Management</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 3 -->
                                        </div>
                                    </div>
                                    <!--  ACCOUNTING -->
                                    <div role="tabpanel" class="tab-pane fade" id="accounting">
                                        <div class="row margin-bottom">
                                            <!-- COURSES 1 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">The Secrets of Economic</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 1 -->
                                            <!-- COURSES 2 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-2.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-2.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Real Estate Law</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 2 -->
                                            <!-- COURSES 3 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-3.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-3.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Networking Management</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 3 -->
                                        </div>
                                    </div>
                                    <!--  ECONOMICS -->
                                    <div role="tabpanel" class="tab-pane fade" id="economics">
                                        <div class="row margin-bottom">
                                            <!-- COURSES 1 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-3.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-3.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Networking Management</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 1 -->
                                            <!-- COURSES 2 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">The Secrets of Economic</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 2 -->
                                            <!-- COURSES 3 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-2.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-2.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Real Estate Law</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 3 -->
                                        </div>
                                    </div>
                                    <!--  FINANCE -->
                                    <div role="tabpanel" class="tab-pane fade" id="finance">
                                        <div class="row margin-bottom">
                                            <!-- COURSES 1 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-3.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-3.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Networking Management</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 1 -->
                                            <!-- COURSES 2 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">The Secrets of Economic</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 2 -->
                                            <!-- COURSES 3 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-2.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-2.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Real Estate Law</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 3 -->
                                        </div>
                                    </div>
                                    <!--  TECHNOLOGIES -->
                                    <div role="tabpanel" class="tab-pane fade" id="technologies">
                                        <div class="row margin-bottom">
                                            <!-- COURSES 1 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">The Secrets of Economic</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 1 -->
                                            <!-- COURSES 2 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-3.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-3.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Networking Management</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 2 -->
                                            <!-- COURSES 3 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-2.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-2.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Real Estate Law</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 3 -->
                                        </div>
                                    </div>
                                    <!--  MANAGEMENT -->
                                    <div role="tabpanel" class="tab-pane fade" id="management">
                                        <div class="row margin-bottom">
                                            <!-- COURSES 1 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-3.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-3.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Networking Management</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 1 -->
                                            <!-- COURSES 2 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">The Secrets of Economic</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 2 -->
                                            <!-- COURSES 3 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-2.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-2.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Real Estate Law</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 3 -->
                                        </div>
                                    </div>
                                    <!--  OTHER -->
                                    <div role="tabpanel" class="tab-pane fade" id="other">
                                        <div class="row margin-bottom">
                                            <!-- COURSES 1 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">The Secrets of Economic</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 1 -->
                                            <!-- COURSES 2 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-3.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-3.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Networking Management</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 2 -->
                                            <!-- COURSES 3 -->
                                            <div class="col-md-4">
                                                <div class="course_cur_wrap">
                                                    <div class="work-item"> <img src="{{asset('website/images/courses/cur-wrap-2.jpg')}}" alt="">
                                                        <div class="image-extra">
                                                            <div class="extra-content">
                                                                <div class="inner-extra">
                                                                    <a class="single-image link-icon" href="courses-single.html"></a>
                                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/courses/cur-wrap-2.jpg')}}"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des"> <span>$20</span>
                                                        <h2 class="entry-title"><a href="#">Real Estate Law</a></h2>
                                                        <div class="entry-meta"> <span class="date">Dec 27, 2015</span> <span class="comments">Jan 27, 2016</span> </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor.</p>
                                                        </div>
                                                    </div>
                                                    <div class="course_cur_des_ft">
                                                        <ul class="course-meta desc">
                                                            <li>
                                                                <h6>1 year</h6> <span> Course</span> </li>
                                                            <li>
                                                                <h6>25</h6> <span> Class Size</span> </li>
                                                            <li>
                                                                <h6><span class="course-time">7:00 - 10:00</span></h6> <span> Class Duration</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EDU COURSES 3 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ .row-->
                    </div>
                    <!--/ .row-->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="align-center opacityRun view-more-wrap"> <a class="button large default" href="#">View More</a> </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ .section-->
        </section>
        <!--  end Course   -->

        <!--  Blog   -->
        <section id="blog" class="page">
            <section class="section bg-gray-color">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title">the <span>Blog</span></h1>
                                <h2>Keep on track of latest news and updates</h2> </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 slideRight">
                            <article class="entry">
                                <div class="entry-image">
                                    <div class="work-item"> <img src="{{asset('website/images/blog/latest-blog-1.jpg')}}" alt="" />
                                        <div class="image-extra">
                                            <div class="extra-content">
                                                <div class="inner-extra">
                                                    <a class="single-image link-icon" href="blog-single.html"></a>
                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/blog/latest-blog-1.jpg')}}"></a>
                                                </div>
                                                <!--/ .inner-extra-->
                                            </div>
                                            <!--/ .extra-content-->
                                        </div>
                                        <!--/ .image-extra-->
                                    </div>
                                    <!--/ .work-item-->
                                </div>
                                <!--/ .entry-image-->
                                <div class="entry-meta"> <span class="date"><a href="#">15.11.2013</a></span> <span class="comments">0 Comments</span> </div>
                                <!--/ .entry-meta-->
                                <h2 class="entry-title">
                                    <a href="blog-single.html">Post With Image</a>
                                </h2>
                                <!--/ .entry-title-->
                                <div class="entry-body">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer eu feugiat neque, elementum posuere purus. </p>
                                </div>
                                <!--/ .entry-body-->
                            </article>
                            <!--/ .entry-->
                        </div>
                        <div class="col-sm-6 col-lg-4 slideUp">
                            <article class="entry">
                                <div class="entry-image">
                                    <div class="work-item"> <img src="{{asset('website/images/blog/latest-blog-2.jpg')}}" alt="" />
                                        <div class="image-extra">
                                            <div class="extra-content">
                                                <div class="inner-extra">
                                                    <a class="single-image link-icon" href="blog-single.html"></a>
                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/blog/latest-blog-2.jpg')}}"></a>
                                                </div>
                                                <!--/ .inner-extra-->
                                            </div>
                                            <!--/ .extra-content-->
                                        </div>
                                        <!--/ .image-extra-->
                                    </div>
                                    <!--/ .work-item-->
                                </div>
                                <!--/ .entry-image-->
                                <div class="entry-meta"> <span class="date"><a href="#">15.11.2013</a></span> <span class="comments">0 Comments</span> </div>
                                <!--/ .entry-meta-->
                                <h2 class="entry-title">
                                    <a href="blog-single.html">Gallery Post Format</a>
                                </h2>
                                <!--/ .entry-title-->
                                <div class="entry-body">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer eu feugiat neque, elementum posuere purus. </p>
                                </div>
                                <!--/ .entry-body-->
                            </article>
                            <!--/ .entry-->
                        </div>
                        <div class="col-sm-6 col-lg-4 slideLeft">
                            <article class="entry">
                                <div class="entry-image">
                                    <div class="work-item"> <img src="{{asset('website/images/blog/latest-blog-3.jpg')}}" alt="" />
                                        <div class="image-extra">
                                            <div class="extra-content">
                                                <div class="inner-extra">
                                                    <a class="single-image link-icon" href="blog-single.html"></a>
                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/blog/latest-blog-3.jpg')}}"></a>
                                                </div>
                                                <!--/ .inner-extra-->
                                            </div>
                                            <!--/ .extra-content-->
                                        </div>
                                        <!--/ .image-extra-->
                                    </div>
                                    <!--/ .work-item-->
                                </div>
                                <!--/ .entry-image-->
                                <div class="entry-meta"> <span class="date"><a href="#">15.11.2013</a></span> <span class="comments">0 Comments</span> </div>
                                <!--/ .entry-meta-->
                                <h2 class="entry-title">
                                    <a href="blog-single.html">Video Post Format</a>
                                </h2>
                                <!--/ .entry-title-->
                                <div class="entry-body">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer eu feugiat neque, elementum posuere purus. </p>
                                </div>
                                <!--/ .entry-body-->
                            </article>
                            <!--/ .entry-->
                        </div>
                    </div>
                    <!--/ .row-->
                    <div class="col-xs-12">
                        <div class="align-center opacity"> <a href="blog.html" class="button large default">View All Posts</a> </div>
                    </div>
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
            <section class="section parallax parallax-bg-3 bg-dark-color">
                <div class="full-bg-image"></div>
                <div class="parallax-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="tweet opacity" data-timeout="6000"></div>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
            <section class="section border">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h2>Meet our partner</h2> </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="partner-slider" class="owl-carousel owl-theme clients-items">
                                <div class="item opacity2x">
                                    <a href="#"><img src="{{asset('website/images/clients/client-1.jpg')}}" alt="" /></a>
                                </div>
                                <div class="item opacity2x">
                                    <a href="#"><img src="{{asset('website/images/clients/client-2.jpg')}}" alt="" /></a>
                                </div>
                                <div class="item opacity2x">
                                    <a href="#"><img src="{{asset('website/images/clients/client-3.jpg')}}" alt="" /></a>
                                </div>
                                <div class="item opacity2x">
                                    <a href="#"><img src="{{asset('website/images/clients/client-4.jpg')}}" alt="" /></a>
                                </div>
                                <div class="item opacity2x">
                                    <a href="#"><img src="{{asset('website/images/clients/client-5.jpg')}}" alt="" /></a>
                                </div>
                                <div class="item opacity2x">
                                    <a href="#"><img src="{{asset('website/images/clients/client-6.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                            <!--/ .clients-items-->
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
        </section>
        <!-- end Blog   -->

        <!--  News & Event   -->
        <section id="news" class="page news_wrap">
            <section class="section border bg-gray-color">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title">News & <span>Event</span></h1> </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                    <div class="row">
                        <!-- News & Event item 1-->
                        <div class="col-md-6 ">
                            <div class="news_des left">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 col-sm-6">
                                        <div class="event_des">
                                            <ul class="post-option">
                                                <li>By <a href="#"> Admin</a></li>
                                                <li> 03/12/2015 </li>
                                                <li><a href="#"> 21 Comments</a></li>
                                            </ul>
                                        </div>
                                        <div class="event_des ">
                                            <div class="event-date"> <span>24</span>
                                                <h4>Dec</h4> </div>
                                            <div class="event-info">
                                                <p>Lorem Lipsum Proin Gravide Nibh Vel Velit</p> <a href="#" class="readmore">read more<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-sm-6 thumb">
                                        <div class="work-item"> <img src="{{asset('website/images/news/news1.jpg')}}" alt="" />
                                            <div class="image-extra">
                                                <div class="extra-content">
                                                    <div class="inner-extra">
                                                        <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/news/news1.jpg')}}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- News & Event item 1-->
                        <!-- News & Event item 2-->
                        <div class="col-md-6">
                            <div class="news_des right">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 col-sm-6 thumb">
                                        <div class="work-item"> <img src="{{asset('website/images/news/news2.jpg')}}" alt="" />
                                            <div class="image-extra">
                                                <div class="extra-content">
                                                    <div class="inner-extra">
                                                        <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/news/news2.jpg')}}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-sm-6">
                                        <div class="event_des">
                                            <ul class="post-option">
                                                <li>By <a href="#"> Admin</a></li>
                                                <li> 03/12/2015 </li>
                                                <li><a href="#"> 21 Comments</a></li>
                                            </ul>
                                        </div>
                                        <div class="event_des text-right">
                                            <div class="event-date"> <span>24</span>
                                                <h4>Dec</h4> </div>
                                            <div class="event-info">
                                                <p>Lorem Lipsum Proin Gravide Nibh Vel Velit</p> <a href="#" class="readmore">read more<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- News & Event item 2-->
                        <!-- News & Event item 3-->
                        <div class="col-md-6">
                            <div class="news_des left">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 col-sm-6">
                                        <div class="event_des">
                                            <ul class="post-option">
                                                <li>By <a href="#"> Admin</a></li>
                                                <li> 03/12/2015 </li>
                                                <li><a href="#"> 21 Comments</a></li>
                                            </ul>
                                        </div>
                                        <div class="event_des ">
                                            <div class="event-date"> <span>24</span>
                                                <h4>Dec</h4> </div>
                                            <div class="event-info">
                                                <p>Lorem Lipsum Proin Gravide Nibh Vel Velit</p> <a href="#" class="readmore">read more<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-sm-6 thumb">
                                        <div class="work-item"> <img src="{{asset('website/images/news/news3.jpg')}}" alt="" />
                                            <div class="image-extra">
                                                <div class="extra-content">
                                                    <div class="inner-extra">
                                                        <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/news/news3.jpg')}}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- News & Event item 3-->
                        <!-- News & Event item 4-->
                        <div class="col-md-6">
                            <div class="news_des right">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 col-sm-6 thumb">
                                        <div class="work-item"> <img src="{{asset('website/images/news/news4.jpg')}}" alt="" />
                                            <div class="image-extra">
                                                <div class="extra-content">
                                                    <div class="inner-extra">
                                                        <a class="single-image plus-icon" data-fancybox-group="blog" href="{{asset('website/images/news/news4.jpg')}}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-sm-6">
                                        <div class="event_des">
                                            <ul class="post-option">
                                                <li>By <a href="#"> Admin</a></li>
                                                <li> 03/12/2015 </li>
                                                <li><a href="#"> 21 Comments</a></li>
                                            </ul>
                                        </div>
                                        <div class="event_des text-right">
                                            <div class="event-date"> <span>24</span>
                                                <h4>Dec</h4> </div>
                                            <div class="event-info">
                                                <p>Lorem Lipsum Proin Gravide Nibh Vel Velit</p> <a href="#" class="readmore">read more<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- News & Event item 4-->
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
        </section>
        <!-- end News & Event   -->

        <!--  Contact   -->
        <section id="contacts" class="page">
            <section class="section padding-bottom-off">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title">Contact <span>Us</span></h1>
                                <h2>We are looking forward to hear from you</h2>
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
            <section class="section padding-off">
                <div class="google_map"></div>
            </section>
            <!--/ .section-->
        </section>
        <!--  end Contact   -->

        <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
        <footer id="footer">
            <section class="section parallax parallax-bg-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 opacity">
                            <!-- START CONTACT FORM DESIGN AREA -->
                            <div class="inner contact">
                                <!-- Form Area -->
                                <div class="contact-form">
                                    <!-- Form -->
                                    <form id="contact-us" method="post" action="#">
                                        <div class="row">
                                            <!-- Left Inputs -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInLeft" data-wow-delay=".5s">
                                                <!-- Name -->
                                                <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                                <!-- Email -->
                                                <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                                                <!-- Subject -->
                                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" /> </div>
                                            <!-- End Left Inputs -->
                                            <!-- Right Inputs -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInRight" data-wow-delay=".5s">
                                                <!-- Message -->
                                                <textarea name="message" id="message" class="form textarea" placeholder="Message"></textarea>
                                            </div>
                                            <!-- End Right Inputs -->
                                        </div>
                                        <div class="row">
                                            <!-- Bottom Submit -->
                                            <div class="relative fullwidth col-xs-12 col-sm-12 col-md-12 text-center">
                                                <!-- Send Button -->
                                                <button type="submit" id="submit" name="submit" class="button turquoise large opacityRun">Send Message</button>
                                            </div>
                                            <!-- End Bottom Submit -->
                                        </div>
                                        <!-- Clear -->
                                        <div class="clear"></div>
                                    </form>
                                </div>
                                <!-- End Contact Form Area -->
                            </div>
                            <!-- / END CONTACT FORM DESIGN AREA -->
                        </div>
                    </div>
                </div>
                <!--/ .container-->
            </section>
            <!--/ .section-->
            <div class="bottom-footer clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="copyright"> Copyright © 2017. <a target="_blank" href="http://zwebtheme.com/">zwebtheme</a>. All rights reserved </div>
                            <!--/ .cppyright-->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 ">
                            <div class="widget widget_social ">
                                <ul class="social-icons">
                                    <li class="twitter"><a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="icon-twitter"></i>Twitter</a></li>
                                    <li class="facebook"><a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="icon-facebook"></i>Facebook</a></li>
                                    <li class="linkedin"><a href="#" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="icon-linkedin"></i>LinkedIn</a></li>
                                    <li class="pinterest"><a href="#" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="icon-pinterest-circled"></i>Pinterest</a></li>
                                    <li class="rss"><a href="#" data-toggle="tooltip" data-placement="top" title="rss"><i class="icon-rss"></i>Rss</a></li>
                                    <li class="gplus"><a href="#" data-toggle="tooltip" data-placement="top" title="gplus"><i class="icon-gplus"></i>Gplus</a></li>
                                    <li class="youtube"><a href="#" data-toggle="tooltip" data-placement="top" title="youtube"><i class="icon-youtube"></i>Youtube</a></li>
                                    <li class="instagram"><a href="#" data-toggle="tooltip" data-placement="top" title="instagram"><i class="icon-instagramm"></i>Instagram</a></li>
                                </ul>
                                <!--/ .social-icons-->
                            </div>
                            <!--/ .widget-->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 text-right">
                            <div class="developed"> Developed by <a target="_blank" href="http://zwebtheme.com/">zwebtheme</a> </div>
                            <!--/ .developed-->
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </div>
            <!--/ .bottom-footer-->
        </footer>
        <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->
    </div>
    <!-- - - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - - -->

    <!--Scroll to top-->
    <div class="scroll-to-top"></div>

    <!-- Script -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAZ_gB5ISNkZ4DvI6Luar3clZ1rW70tnok"></script>
    <script src="{{ asset('website/js/jquery.min.js')}}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('website/js/scrolling-nav.js')}}"></script>
    <script src="{{ asset('website/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('website/js/jquery.easing.min.js')}}"></script>
    <!-- LayerSlider script files -->
    <script src="{{ asset('website/js/layerslider/js/greensock.js')}}" type="text/javascript"></script>
    <script src="{{ asset('website/js/layerslider/js/layerslider.transitions.js')}}" type="text/javascript"></script>
    <script src="{{ asset('website/js/layerslider/js/layerslider.kreaturamedia.jquery.js')}}" type="text/javascript"></script>
    <!-- Google Map -->

    <script src="{{ asset('website/js/jquery.gmap.min.js')}}"></script>
    <script src="{{ asset('website/js/jquery.mixitup.js')}}"></script>
    <script src="{{ asset('website/js/fancybox/jquery.fancybox.pack.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('website/js/owl/js/owl.carousel.js')}}"></script>
    <script src="{{ asset('website/js/counter.js')}}"></script>
    <script src="{{ asset('website/js/script.js')}}"></script>
    <!-- Initializing the slider -->
</body>

</html>
