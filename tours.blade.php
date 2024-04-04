<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musico</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/audioplayer.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->


     <!-- Css Bye Ticket Section -->
     <link rel="stylesheet" href="{{ url('frontend/css@2/bootstrap.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ url('frontend/css@2/font-awesome.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ url('frontend/css@2/barfiller.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ url('frontend/css@2/nowfont.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ url('frontend/css@2/rockville.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ url('frontend/css@2/magnific-popup.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ url('frontend/css@2/owl.carousel.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ url('frontend/css@2/slicknav.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ url('frontend/css@2/style.css')}}" type="text/css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="userindex">
                                        <img src="{{ url('frontend/img/logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="userindex">home</a></li>
                                            <li><a href="about">About</a></li>
                                            <li><a href="videos">videos</a></li>
                                            <li><a href="track">tracks</a></li>
                                            <li><a class="active" href="tours">tours</a></li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog">blog</a></li>
                                                    <li><a href="singleblog">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                     <li><a href="elements">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="social_icon text-right">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                        <li>  
       
                                            <form action="{{route('logout')}}" method="post">
                                            @csrf 
                                            <button title="Log out" class="icon"><i class="fa fa-sign-out"></i></button> 
                                             {{-- <span>Log out</span> --}}
                                          </form>
                                          </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    
    <div class="slider_area ">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2  ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="countdown__texting">
                            <h1 >Tomorrowland 2024</h1>
                            <h4>Music festival start in</h4>
                        </div>
                        <div class="countdown__timer" id="countdown-time">
                            <div class="countdown__item">
                                <span>20</span>
                                <p>days</p>
                            </div>
                            <div class="countdown__item">
                                <span>45</span>
                                <p>hours</p>
                            </div>
                            <div class="countdown__item">
                                <span>18</span>
                                <p>minutes</p>
                            </div>
                            <div class="countdown__item">
                                <span>09</span>
                                <p>seconds</p>
                            </div>
                        </div>
                        <div class="buy__tickets">
                            <a href="tours" class="primary-btn">Buy tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- music_area  -->
    {{-- <div class="music_area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="{{ url('frontend/img/music_man/1.png')}}" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <h4>Frando Kally</h4>
                                                        <p>10 November, 2019</p>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                                <source src="https://www.w3schools.com/html/horse.mp3">
                                                            </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                            <a href="#" class="boxed-btn">buy albam</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- music_area end  -->

    <!-- about_area  -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="{{ url('frontend/img/about/about_1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <h3>Jack Kalib</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable projecting expression enim ad minim veniam quis nostrud exercitation we have supported programmes to help alleviate human suffering through animal welfare when people might depend.</p>
                        <div class="signature">
                            <img src="{{ url('frontend/img/about/signature.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_area  -->

    <!-- youtube_video_area  -->
    <div class="youtube_video_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{ url('frontend/img/video/1.png')}}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8"> 
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{ url('frontend/img/video/2.png')}}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8"> 
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{ url('frontend/img/video/3.png')}}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8"> 
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{ url('frontend/img/video/4.png')}}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8"> 
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / youtube_video_area  -->

 <!-- Tours Section Begin -->
 <section class="tours spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-1">
                <div class="tours__item__text">
                    <h2>Untold Festival 2020</h2>
                    <div class="tours__text__widget">
                        <ul>
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <span>8:00pm</span>
                                <span>Dec 15, 2019</span>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Funkhaus Berlin, Berlin, Germany
                            </li>
                        </ul>
                        <div class="price">$ 35.00</div>
                    </div>
                    <div class="tours__text__desc">
                        <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                            hosts an impressive roster of techno artists worthy.</p>
                        <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                            of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                    </div>
                    <a href="tours" class="primary-btn border-btn">Buy tickets</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2">
                <div class="tours__item__pic">
                    <img src="{{ url('frontend/img@2/tours/tour-1.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-4">
                <div class="tours__item__text tours__item__text--right">
                    <h2>Untold Festival 2020</h2>
                    <div class="tours__text__widget">
                        <ul>
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <span>8:00pm</span>
                                <span>Dec 15, 2019</span>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Funkhaus Berlin, Berlin, Germany
                            </li>
                        </ul>
                        <div class="price">$ 35.00</div>
                    </div>
                    <div class="tours__text__desc">
                        <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                            hosts an impressive roster of techno artists worthy.</p>
                        <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                            of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                    </div>
                    <a href="tours" class="primary-btn border-btn">Buy tickets</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-3">
                <div class="tours__item__pic tours__item__pic--left">
                    <img src="{{ url('frontend/img@2/tours/tour-2.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-5">
                <div class="tours__item__text">
                    <h2>Untold Festival 2020</h2>
                    <div class="tours__text__widget">
                        <ul>
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <span>8:00pm</span>
                                <span>Dec 15, 2019</span>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Funkhaus Berlin, Berlin, Germany
                            </li>
                        </ul>
                        <div class="price">$ 35.00</div>
                    </div>
                    <div class="tours__text__desc">
                        <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                            hosts an impressive roster of techno artists worthy.</p>
                        <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                            of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                    </div>
                    <a href="tours" class="primary-btn border-btn">Buy tickets</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-6">
                <div class="tours__item__pic tours__item__pic--last">
                    <img src="{{ url('frontend/img@2/tours/tour-3.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tours Section End -->

    <!-- music_area  -->
    <div class="music_area music_gallery">
        <div class="container">
                <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-65">
                                <h3>Latest Tracks</h3>
                            </div>
                        </div>
                    </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="{{ url('frontend/img/music_man/1.png')}}" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <h4>Frando Kally</h4>
                                                        <p>10 November, 2019</p>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                                <source src="{{ url('frontend/img/music_man/WhatsApp Audio 2024-04-01 at 12.23.54_836a8694.mp3')}}">
                                                            </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                            <a href="#" class="boxed-btn">buy albam</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="{{ url('frontend/img/music_man/2.png')}}" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <h4>Frando Kally</h4>
                                                        <p>10 November, 2019</p>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                                <source src="{{ url('frontend/img/music_man/WhatsApp Audio 2024-04-01 at 12.23.55_46bb3c93.mp3')}}">
                                                            </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                            <a href="#" class="boxed-btn">buy albam</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="{{ url('frontend/img/music_man/3.png')}}" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <h4>Frando Kally</h4>
                                                        <p>10 November, 2019</p>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                                <source src="{{ url('frontend/img/music_man/WhatsApp Audio 2024-04-01 at 12.23.54_c562278c.mp3')}}">
                                                            </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                            <a href="#" class="boxed-btn">buy albam</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->

    <!-- gallery -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Image Galleries</h3>
                    </div>
                </div>
            </div>
            <div class="row grid">
                    <div class="col-xl-5 col-lg-5 grid-item cat1 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="{{ url('frontend/img/gallery/1.png')}}" alt="">
                                </div>
                                <div class="gallery_hover">
                                    <a  class="popup-image"  href="{{ url('frontend/img/gallery/1.png')}}" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 grid-item cat3 cat4 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="{{ url('frontend/img/gallery/2.png')}}" alt="">
                                </div>
                                <div class="gallery_hover">
                                        <a class="popup-image" href="{{ url('frontend/img/gallery/2.png')}}" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat4 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="{{ url('frontend/img/gallery/3.png')}}" alt="">
                                </div>
                                <div class="gallery_hover">
                                        <a class="popup-image" href="{{ url('frontend/img/gallery/3.png')}}" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="{{ url('frontend/img/gallery/4.png')}}" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="{{ url('frontend/img/gallery/4.png')}}" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="{{ url('frontend/img/gallery/5.png')}}" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="{{ url('frontend/img/gallery/5.png')}}" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!--/ gallery -->

    <!-- contact_rsvp -->
    <div class="contact_rsvp">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text text-center">
                        <h3>Contact For MUSICO</h3>
                        <a class="boxed-btn3" href="contact.html">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ contact_rsvp -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                            Services
                                    </h3>
                                <div class="subscribe-from">
                                        <form action="#">
                                                <input type="text" placeholder="Enter your mail">
                                                <button type="submit" >Subscribe</button>
                                            </form>
                                </div>
                                <p class="sub_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.</p>
                                </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                                <h3 class="footer_title">
                                        Contact Me
                                </h3>
                            <ul>
                                <li><a href="#">conbusi@support.com
                                    </a></li>
                                <li><a href="#">+10 873 672 6782
                                    </a></li>
                                <li><a href="#">600/D, Green road, Kings Garden NewYork-6732</a></li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class=" fa fa-facebook "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-7 col-md-6">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">tracks</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->


    <!-- link that opens popup -->

    <!-- JS here -->
        <script src="{{ url('frontend/https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous">
    </script>
    <script src="{{ url('frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ url('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ url('frontend/js/popper.min.js')}}"></script>
    <script src="{{ url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ url('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ url('frontend/js/ajax-form.js')}}"></script>
    <script src="{{ url('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ url('frontend/js/audioplayer.js')}}"></script>
    <script src="{{ url('frontend/js/scrollIt.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ url('frontend/js/wow.min.js')}}"></script>
    <script src="{{ url('frontend/js/nice-select.min.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ url('frontend/js/plugins.js')}}"></script>
    <script src="{{ url('frontend/js/gijgo.min.js')}}"></script>
    <script src="{{ url('frontend/js/slick.min.js')}}"></script>
    <!--contact js-->
    <script src="{{ url('frontend/js/contact.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.form.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{ url('frontend/js/mail-script.js')}}"></script>

    <script src="{{ url('frontend/js/main.js')}}"></script>

     <!-- Js Plugins By Ticket Section -->
     <script src="{{ url('frontend/js@2/jquery-3.3.1.min.js')}}"></script>
     <script src="{{ url('frontend/js@2/bootstrap.min.js')}}"></script>
     <script src="{{ url('frontend/js@2/jquery.magnific-popup.min.js')}}"></script>
     <script src="{{ url('frontend/js@2/jquery.nicescroll.min.js')}}"></script>
     <script src="{{ url('frontend/js@2/jquery.barfiller.js')}}"></script>
     <script src="{{ url('frontend/js@2/jquery.countdown.min.js')}}"></script>
     <script src="{{ url('frontend/js@2/jquery.slicknav.js')}}"></script>
     <script src="{{ url('frontend/js@2/owl.carousel.min.js')}}"></script>
     <script src="{{ url('frontend/js@2/main.js')}}"></script>
 
     <!-- Music Plugin By ticket section-->
     <script src="{{ url('frontend/js@2/jquery.jplayer.min.js')}}"></script>
     <script src="{{ url('frontend/js@2/jplayerInit.js')}}"></script>
    
		<script>
                $(function() {
                    $('audio').audioPlayer({

                    });
                });
            </script>
</body>

</html>