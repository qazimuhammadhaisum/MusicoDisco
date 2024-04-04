<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musico</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->


    <!-- Css Styles videos-->
    <link rel="stylesheet" href="{{ url('frontend/css@2/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css@2/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css@2/barfiller.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css@2/nowfont.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css@2/rockville.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css@2/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css@2/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css@2/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css@2/style.css')}}" type="text/css">


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
    <!-- <link rel="stylesheet" href="{{ url('frontend/css/responsive.css"')}}> -->
</head>

<body>
   

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
                                            <li><a class="active" href="videos">videos</a></li>
                                            <li><a href="track">tracks</a></li>
                                            <li><a href="tours">tours</a></li>

                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog">blog</a></li>
                                                    <li><a href="singleblog">singleblog</a></li>
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

    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>My Videos</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- music_area end  -->


<!-- Video Section Begin -->
<section class="videos spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <h2>YOutube feed</h2>
                    <h1>Latest videos</h1>
                </div>
                <div class="videos__large__item set-bg" data-setbg="{{ url('frontend/img@2/videos/large-item.jpg')}}">
                    <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    <div class="videos__large__item__text">
                        <h4>Martin Garrix & Pierce Fulton feat. Mike Shinoda - Waiting For Tomorrow (Official Video)
                        </h4>
                        <ul>
                            <li>02:35:18</li>
                            <li>Dec 17, 2019</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="videos__slider owl-carousel">
                        @foreach($uvr as $pro)
                        <div class="col-lg-3">
                            <div class="videos__item">
                                <video class="videos__item__pic set-bg " src="{{'video/'.$pro->video}}"  controls>
                                    {{-- <video class="videos__item__pic set-bg  play-btn " src="{{'video/'.$pro->video}}" width="250" height="200" controls></video> --}}
                                    {{-- <img src="{{'image/'.$emps->image}}" width="250"> --}}

                                    {{-- <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a> --}}
                                </video>
                                <div class="videos__item__text">
                                    <h5>{{$pro->name}}</h5>
                                    <ul>
                                        <li>02:35:18</li>
                                        <li>Dec 17, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- music video_area end --}}



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

    <!-- contact_Musico-->
    <div class="contact_rsvp">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text text-center">
                        <h3>Contact For Musico</h3>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
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


      <!-- Js Plugins videos page -->
      <script src="{{ url('frontend/js@2/jquery-3.3.1.min.js')}}"></script>
      <script src="{{ url('frontend/js@2/bootstrap.min.js')}}"></script>
      <script src="{{ url('frontend/js@2/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{ url('frontend/js@2/jquery.nicescroll.min.js')}}"></script>
      <script src="{{ url('frontend/js@2/jquery.barfiller.js')}}"></script>
      <script src="{{ url('frontend/js@2/jquery.countdown.min.js')}}"></script>
      <script src="{{ url('frontend/js@2/jquery.slicknav.js')}}"></script>
      <script src="{{ url('frontend/js@2/owl.carousel.min.js')}}"></script>
      <script src="{{ url('frontend/js@2/main.js')}}"></script>
  
    <!--contact js-->
    <script src="{{ url('frontend/js/contact.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.form.js')}}"></script>
    <script src="{{ url('frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{ url('frontend/js/mail-script.js')}}"></script>

    <script src="{{ url('frontend/js/main.js')}}"></script>
    
       <!-- Music Plugin -->
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