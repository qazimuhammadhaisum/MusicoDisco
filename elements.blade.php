<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Musico</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
	<link rel="stylesheet" href="{{ url('frontend/css/animate.css')}}">
	<link rel="stylesheet" href="{{ url('frontend/css/slicknav.css')}}">
	<link rel="stylesheet" href="{{ url('frontend/css/style.css')}}">
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->
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
                                            <li><a href="user">home</a></li>
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
                                                     <li><a class="active" href="elements">elements</a></li>
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
                        <h3>elements</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
			<h3 class="text-heading">Text Sample</h3>
			<p class="sample-text">
				Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary,
				or short
				film to show off their creative prowess. Many have great ideas and want to “wow”
				the<sup>Superscript</sup> scene,
				or video renters with their big project. But once you have the<sub>Subscript</sub> “in the can” (no easy
				feat), how
				do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked
				hand-written title
				inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC
				barcodes
				and polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project
				replicated.
				Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is
				certainly a
				helpful option to ensure a professional end result, but to help with your DVD replication project, here
				are 4 easy
				steps to follow for good DVD replication results:

			</p>
		</div>
	</section>
	<!-- End Sample Area -->

	
	
	<!-- End Button -->

	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h3 class="mb-30">Left Aligned</h3>
				<div class="row">
					<div class="col-md-3">
						<img src="{{ url('frontend/img/elements/d.jpg')}}" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
						<p>Recently, the US Federal government banned online casinos from operating in America by making
							it illegal to
							transfer money to them through any US bank or payment system. As a result of this law, most
							of the popular
							online casino networks such as Party Gaming and PlayTech left the United States. Overnight,
							online casino
							players found themselves being chased by the Federal government. But, after a fortnight, the
							online casino
							industry came up with a solution and new online casinos started taking root. These began to
							operate under a
							different business umbrella, and by doing that, rendered the transfer of money to and from
							them legal. A major
							part of this was enlisting electronic banking systems that would accept this new
							clarification and start doing
							business with me. Listed in this article are the electronic banking systems that accept
							players from the United
							States that wish to play in online casinos.</p>
					</div>
				</div>
			</div>
			<div class="section-top-border text-right">
				<h3 class="mb-30">Right Aligned</h3>
				<div class="row">
					<div class="col-md-9">
						<p class="text-right">Over time, even the most sophisticated, memory packed computer can begin
							to run slow if we
							don’t do something to prevent it. The reason why has less to do with how computers are made
							and how they age and
							more to do with the way we use them. You see, all of the daily tasks that we do on our PC
							from running programs
							to downloading and deleting software can make our computer sluggish. To keep this from
							happening, you need to
							understand the reasons why your PC is getting slower and do something to keep your PC
							running at its best. You
							can do this through regular maintenance and PC performance optimization programs</p>
						<p class="text-right">Before we discuss all of the things that could be affecting your PC’s
							performance, let’s
							talk a little about what symptoms</p>
					</div>
					<div class="col-md-3">
						<img src="{{ url('frontend/img/elements/d.jpg')}}" alt="" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="section-top-border">
				<h3 class="mb-30">Definition</h3>
				<div class="row">
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Definition 01</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by
								making it illegal to
								transfer money to them through any US bank or payment system. As a result of this law,
								most of the popular
								online casino networks</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Definition 02</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by
								making it illegal to
								transfer money to them through any US bank or payment system. As a result of this law,
								most of the popular
								online casino networks</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Definition 03</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by
								making it illegal to
								transfer money to them through any US bank or payment system. As a result of this law,
								most of the popular
								online casino networks</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-top-border">
				<h3 class="mb-30">Block Quotes</h3>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
							“Recently, the US Federal government banned online casinos from operating in America by
							making it illegal to
							transfer money to them through any US bank or payment system. As a result of this law, most
							of the popular
							online casino networks such as Party Gaming and PlayTech left the United States. Overnight,
							online casino
							players found themselves being chased by the Federal government. But, after a fortnight, the
							online casino
							industry came up with a solution and new online casinos started taking root. These began to
							operate under a
							different business umbrella, and by doing that, rendered the transfer of money to and from
							them legal. A major
							part of this was enlisting electronic banking systems that would accept this new
							clarification and start doing
							business with me. Listed in this article are the electronic banking”
						</blockquote>
					</div>
				</div>
			</div>
			<div class="section-top-border">
				<h3 class="mb-30">Table</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Countries</div>
							<div class="visit">Visits</div>
							<div class="percentage">Percentages</div>
						</div>
						<div class="table-row">
							<div class="serial">01</div>
							<div class="country"> <img src="{{ url('frontend/img/elements/f1.jpg')}}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-1" role="progressbar" style="width: 80%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">02</div>
							<div class="country"> <img src="{{ url('frontend/img/elements/f2.jpg')}}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-2" role="progressbar" style="width: 30%"
										aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">03</div>
							<div class="country"> <img src="{{ url('frontend/img/elements/f3.jpg')}}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-3" role="progressbar" style="width: 55%"
										aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">04</div>
							<div class="country"> <img src="{{ url('frontend/img/elements/f4.jpg')}}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-4" role="progressbar" style="width: 60%"
										aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">05</div>
							<div class="country"> <img src="{{ url('frontend/img/elements/f5.jpg')}}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-5" role="progressbar" style="width: 40%"
										aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">06</div>
							<div class="country"> <img src="{{ url('frontend/img/elements/f6.jpg')}}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-6" role="progressbar" style="width: 70%"
										aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">07</div>
							<div class="country"> <img src="{{ url('frontend/img/elements/f7.jpg')}}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-7" role="progressbar" style="width: 30%"
										aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">08</div>
							<div class="country"> <img src="{{ url('frontend/img/elements/f8.jpg')}}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-8" role="progressbar" style="width: 60%"
										aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-top-border">
				<h3>Image Gallery</h3>
				<div class="row gallery-item">
					<div class="col-md-4">
						<a href="{{ url('frontend/img/elements/g1.jpg')}}" class="img-pop-up">
							<div class="single-gallery-image" style="background:url({{ url('frontend/img/elements/g1.jpg')}});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ url('frontend/img/elements/g2.jpg')}}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ url('frontend/img/elements/g2.jpg')}});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ url('frontend/img/elements/g3.jpg')}}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ url('frontend/img/elements/g3.jpg')}});"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="{{ url('frontend/img/elements/g4.jpg')}}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ url('frontend/img/elements/g4.jpg')}});"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="{{ url('frontend/img/elements/g5.jpg')}}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ url('frontend/img/elements/g5.jpg')}});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ url('frontend/img/elements/g6.jpg')}}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ url('frontend/img/elements/g6.jpg')}});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ url('frontend/img/elements/g7.jpg')}}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ url('frontend/img/elements/g7.jpg')}});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ url('frontend/img/elements/g8.jpg')}}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ url('frontend/img/elements/g8.jpg')}});"></div>
						</a>
					</div>
				</div>
			</div>
		
		
		</div>
	</div>
	<!-- End Align Area -->

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
                                <li><a href="#">Musico@support.com
                                    </a></li>
                                <li><a href="#">+10 873 672 6782
                                    </a></li>
                                <li><a href="#">600/D, green road, Kings Garden Karachi-6732</a></li>
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
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>
</body>
</html>