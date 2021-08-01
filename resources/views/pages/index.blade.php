@extends('layout')
@section('content')
<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h1 class="h1-large">Team management mobile application</h1>
                    <p class="p-large">Start getting things done together with your team based on Pavo's revolutionary team management features</p>
                    <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                    <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="{{URL::asset('frontend/images/header-smartphone.png')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Introduction -->
<div class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Team management mobile apps don’t get better than Pavo. It’s probably the best app in the world for this purpose. Don’t hesitate to give it a try today and you will fall in love with it</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of introduction -->


<!-- Features -->
<div id="features" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{URL::asset('frontend/images/features-icon-1.svg')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Platform Integration</h5>
                        <p>You sales force can use the app on any smartphone platform without compatibility issues</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{URL::asset('frontend/images/features-icon-2.svg')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Easy On Resources</h5>
                        <p>Works smoothly even on older generation hardware due to our optimization efforts</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{URL::asset('frontend/images/features-icon-3.svg')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Great Performance</h5>
                        <p>Optimized code and innovative technology insure no delays and ultra-fast responsiveness</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{URL::asset('frontend/images/features-icon-4.svg')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Multiple Languages</h5>
                        <p>Choose from one of the 40 languages that come pre-installed and start selling smarter</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{URL::asset('frontend/images/features-icon-5.svg')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Free Updates</h5>
                        <p>Don't worry about future costs, pay once and receive all future updates at no extra cost</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{URL::asset('frontend/images/features-icon-6.svg')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Community Support</h5>
                        <p>Register the app and get acces to knowledge and ideas from the Pavo online community</p>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of features -->


<!-- Details 1 -->
<div id="details" class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="text-container">
                    <h2>Results driven ground breaking technology</h2>
                    <p>Based on our team's extensive experience in developing line of business applications and constructive customer feedback we reached a new level of revenue.</p>
                    <p>We enjoy helping small and medium sized tech businesses take a shot at established Fortune 500 companies</p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{URL::asset('frontend/images/details-1.jpg')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of details 1 -->


<!-- Details 2 -->
<div class="basic-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{URL::asset('frontend/images/details-2.jpg')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-5">
                <div class="text-container">
                    <h2>Instant results for the marketing department</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-chevron-right"></i>
                            <div class="media-body">Features that will help you and your marketers</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-chevron-right"></i>
                            <div class="media-body">Smooth learning curve due to the knowledge base</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-chevron-right"></i>
                            <div class="media-body">Ready out-of-the-box with minor setup settings</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Lightbox</a>
                    <a class="btn-outline-reg" href="article.html">Details</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of details 2 -->


<!-- Details Lightbox -->
<!-- Lightbox -->
<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <div class="image-container">
                <img class="img-fluid" src="{{URL::asset('frontend/images/details-lightbox.jpg')}}" alt="alternative">
            </div> <!-- end of image-container -->
        </div> <!-- end of col -->
        <div class="col-lg-4">
            <h3>Goals Setting</h3>
            <hr>
            <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
            <h4>User Feedback</h4>
            <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
            <ul class="list-unstyled li-space-lg">
                <li class="media">
                    <i class="fas fa-chevron-right"></i><div class="media-body">Splash screen panel</div>
                </li>
                <li class="media">
                    <i class="fas fa-chevron-right"></i><div class="media-body">Statistics graph report</div>
                </li>
                <li class="media">
                    <i class="fas fa-chevron-right"></i><div class="media-body">Events calendar layout</div>
                </li>
                <li class="media">
                    <i class="fas fa-chevron-right"></i><div class="media-body">Location details screen</div>
                </li>
                <li class="media">
                    <i class="fas fa-chevron-right"></i><div class="media-body">Onboarding steps interface</div>
                </li>
            </ul>
            <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->
<!-- end of details lightbox -->


<!-- Details 3 -->
<div class="basic-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="text-container">
                    <h2>Platform integration and life time free updates</h2>
                    <p>Get a glimpse of what this app can do for your marketing automation and understand why current users are so excited when using Pavo together with their teams.</p>
                    <p>We will promptly answer any questions and honor your requests based on the service level agreement</p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{URL::asset('frontend/images/details-3.jpg')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-4 -->
<!-- end of details 3 -->


<!-- Statistics -->
<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Counter -->
                <div id="counter">
                    <div class="cell">
                        <div class="counter-value number-count" data-count="231">1</div>
                        <p class="counter-info">Happy Users</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="385">1</div>
                        <p class="counter-info">Issues Solved</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="159">1</div>
                        <p class="counter-info">Good Reviews</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="127">1</div>
                        <p class="counter-info">Case Studies</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="211">1</div>
                        <p class="counter-info">Orders Received</p>
                    </div>
                </div>
                <!-- end of counter -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of counter -->
<!-- end of statistics -->


<!-- Testimonials -->
<div class="slider-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">What do users think about Pavo</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">
                            
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="{{URL::asset('frontend/images/testimonial-1.jpg')}}" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">It's been so fun to work with Pavo, I've managed to integrate it properly into my business flow and it's great</p>
                                        <p class="testimonial-author">Jude Thorn - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
    
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="{{URL::asset('frontend/images/testimonial-2.jpg')}}" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">We were so focused on launching as many campaigns as possible that we've forgotten to target our loyal customers</p>
                                        <p class="testimonial-author">Roy Smith - Developer</p>
                                    </div>
                                </div>        
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
    
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="{{URL::asset('frontend/images/testimonial-3.jpg')}}" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">I've been searching for a tool like Pavo for so long. I love the reports it generates and the amazing high accuracy</p>
                                        <p class="testimonial-author">Marsha Singer - Marketer</p>
                                    </div>
                                </div>        
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
    
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="{{URL::asset('frontend/images/testimonial-4.jpg')}}" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">We've been waiting for a powerful piece of software that can help businesses manage their marketing projects</p>
                                        <p class="testimonial-author">Tim Shaw - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
    
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="{{URL::asset('frontend/images/testimonial-5.jpg')}}" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">Searching for a great prototyping and layout design app was difficult but thankfully I found app suite quickly</p>
                                        <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                    </div>
                                </div>        
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
    
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="{{URL::asset('frontend/images/testimonial-6.jpg')}}" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">The app support team is amazing. They've helped me with some issues and I am so grateful to the entire team</p>
                                        <p class="testimonial-author">Ann Blake - Developer</p>
                                    </div>
                                </div>        
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
                        
                        </div> <!-- end of swiper-wrapper -->
    
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->
    
                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of testimonials -->


<!-- Pricing -->
<div id="pricing" class="cards-2">
    <div class="decoration-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Pricing options for all budgets</h2>
                <p class="p-heading">Our pricing plans are setup in such a way that any user can start enjoying Pavo without worrying so much about costs. They are flexible and work for any type of industry</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">STANDARD</div>
                        <div class="price"><span class="currency">$</span><span class="value">29</span></div>
                        <div class="frequency">monthly</div>
                        <p>This basic package covers the marketing needs of small startups</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">List building and relations</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">Seamless platform integration</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">Great performance on devices</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">ADVANCED</div>
                        <div class="price"><span class="currency">$</span><span class="value">39</span></div>
                        <div class="frequency">monthly</div>
                        <p>This is a more advanced package suited for medium companies</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">List building and relations</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">Seamless platform integration</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">Great performance on devices</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">COMPLETE</div>
                        <div class="price"><span class="currency">$</span><span class="value">49</span></div>
                        <div class="frequency">monthly</div>
                        <p>This is a comprehensive package designed for big organizations</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">List building and relations</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">Seamless platform integration</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">Great performance on devices</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body">Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of pricing -->


<!-- Conclusion -->
<div id="download" class="basic-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="{{URL::asset('frontend/images/conclusion-smartphone.png')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="text-container">
                    <p>Team management mobile applications don’t get much better than Pavo. Download it today</p>
                    <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                    <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-5 -->
<!-- end of conclusion -->
@endsection
