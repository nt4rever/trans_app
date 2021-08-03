<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Dịch thuật Minh Tuệ</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="{{URL::asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontend/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontend/css/swiper.css')}}" rel="stylesheet">
	<link href="{{URL::asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{URL::asset('frontend/css/styles.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontend/css/custom.css')}}" rel="stylesheet">
	<script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
	<!-- Favicon  -->
    <link rel="icon" href="{{URL::asset("frontend/images/favicon.png")}}">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Pavo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="{{URL::to('/')}}"><img src="{{URL::asset('frontend/custom/nmt-logo.png')}}" alt="alternative"></a> 

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll <?php if(isset($home)) echo "active" ?>" href="{{URL::to('/')}}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll <?php if(isset($service)) echo "active" ?>" href="{{URL::to('/service')}}">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll <?php if(isset($price)) echo "active" ?>" href="{{URL::to('/price')}}">Báo giá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll <?php if(isset($post)) echo "active" ?>" href="{{URL::to('/post')}}">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll <?php if(isset($contact)) echo "active" ?>" href="{{URL::to('/contact')}}">Liên hệ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Khác</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="{{URL::to('/library')}}">Thư viện</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="{{URL::to('/about')}}">Giới thiệu</a>
                        </div>
                    </li>
                </ul>
                <span class="nav-item app-store-icons">
                    <a href="#your-link">
                        <i class="fab">vi</i>
                    </a>
                    <a href="#your-link">
                        <i class="fab">en</i>
                    </a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    @yield('content')
    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Liên hệ với chúng tôi khi bạn cần hỗ trợ dịch thuật <a class="purple" href="mailto:email@domain.com">email@domain.com</a></h4>
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span> 
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg p-small">
                        <li><a href="article.html">Article Details</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <p class="p-small statement">Copyright © <a href="#your-link">Văn phòng dịch thuật Minh Tuệ</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="{{URL::asset('frontend/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{URL::asset('frontend/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{URL::asset('frontend/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{URL::asset('frontend/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{URL::asset('frontend/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{URL::asset('frontend/js/scripts.js')}}"></script> <!-- Custom scripts -->
    @stack('custom-scripts')
</body>
</html>