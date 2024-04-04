<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musico</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{ url('frontend/css/responsive.css')}}"> -->
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
                                            <li><a href="track">tracks</a></li>
                                            <li><a  href="tours">tours</a></li>
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
                                            <li><a class="active" href="contact">Contact</a></li>
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
                        <h3>contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="{{url('/contact')}}" method="post"  novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email"  type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="adress" type="adress" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter  address'" placeholder = 'Enter  address'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="phoneNumber"  type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phoneNumber'" placeholder = 'Enter phoneNumber'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4 boxed-btn">Send Message</button>
              
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

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


  <!-- JS here -->
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
  <script src="{{ url('frontend/js/scrollIt.js')}}"></script>
  <script src="{{ url('frontend/js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{ url('frontend/js/wow.min.js')}}"></script>
  <script src="{{ url('frontend/js/nice-select.min.js')}}"></script>
  <script src="{{ url('frontend/js/jquery.slicknav.min.js')}}"></script>
  <script src="{{ url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ url('frontend/js/plugins.js')}}"></script>
  <script src="{{ url('frontend/js/gijgo.min.js')}}"></script>

  <!--contact js-->
  <script src="{{ url('frontend/js/contact.js')}}"></script>
  <script src="{{ url('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{ url('frontend/js/jquery.form.js')}}"></script>
  <script src="{{ url('frontend/js/jquery.validate.min.js')}}"></script>
  <script src="{{ url('frontend/js/mail-script.js')}}"></script>

  <script src="{{ url('frontend/js/main.js')}}"></script>
</body>

</html>