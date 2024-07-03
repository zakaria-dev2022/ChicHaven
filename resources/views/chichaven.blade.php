<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChicHaven | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../resources/css/chichaven/css/bootstrap.min.css" type="text/css">
   
    <link rel="stylesheet" href="../resources/css/chichaven/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../resources/css/chichaven/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../resources/css/chichaven/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../resources/css/chichaven/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../resources/css/chichaven/css/slick.css" type="text/css">
    <link rel="stylesheet" href="../resources/css/chichaven/css/style.css" type="text/css">
    <link rel="stylesheet" href="../resources/css/chichaven/css/app2.css" >
    <!-- <link rel="stylesheet" href="css2/bootstrap.min.css" > -->
    <link rel="stylesheet" href="../resources/css/chichaven/css2/style.css">
    <link rel="stylesheet" href="../resources/css/chichaven/css2/tiny-slider.css">

    <style>
        .fs3{
            font-size: 1.5rem;
            color: rgb(0, 0, 0)
        }
        .fs1{
            font-size: 2.5rem;
        }
        .textdanger{
            color: #CF5700;
        }
    </style>
</head>

<body>
   
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <!-- <a href="#"><img src="" alt=""></a> -->
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <span>Call us for any questions</span>
            <h4>+01 123 456 789</h4>
             
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__loo pt-0 mt-0">
                        {{-- <a href="#"><img src="../resources/img/img/ChicHaven.jpg" alt="" width="200px" height="70px"></a> --}}
                        <span class="ms-1 fs3 font-weight-bold"><span class="fs1 textdanger">C</span>HIC<span class="fs1 textdanger">H</span>AVEN</span><span class="fs1 textdanger">.</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="">Home</a></li>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#about">About</a></li>
                            {{-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./Project-details.html">Project Details</a></li>
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./services.html">Services</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__widget textdanger">
                        <!-- <span>Call us for any questions</span> -->
                        <!-- <h4>+01 123 456 789</h4> -->
                        <!-- <a class="btn btn-warnning"></button> -->
                            <a href="{{route('call_expert.create')}}" class="btn mx-4 textdanger">call expert</a>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
        @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section id="section_origin" class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="../resources/img/img/hero/AK1-1.jpg">
                <div class="hero__text">
                    <h2>Quality is not only our standard.</h2>
                    <a href="#" class="primary-btn">See Project</a>
                    <a href="#" class="more_btn">Discover more</a>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="../resources/img/img/hero/ZZ.jpg">
                <div class="hero__text">
                    <h2>Quality is not only our standard.</h2>
                    <a href="#" class="primary-btn">See Project</a>
                    <a href="#" class="more_btn">Discover more</a>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="slide-num" id="snh-1"></div> -->
        <!-- <div class="slider__progress"><span></span></div> -->
    </section>
    <!-- Hero Section End -->


     <!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="shop.html" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="../resources/img/img/about-pic.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<!-- <img src="img/about-pic.jpg" class="img-fluid"> -->
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="../resources/img/img/about-pic.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="../resources/img/img/about-pic.jpg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="../resources/img/img/about-pic.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<!-- <img src="img/about-pic.jpg" class="img-fluid"> -->
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>who are we</span>
                            <h2>We propose and discuss design rules</h2>
                        </div>
                        <div class="about__para__text">
                            <p>Metasurfaces are generally designed by placing scatterers in periodic or pseudo-periodic
                                grids. We propose and discuss design rules for functional metasurfaces with randomly
                            placed.</p>
                            <p>Anisotropic elements that randomly sample. Quisque sit amet nisl ante. Fusce lacinia non
                            tellus id gravida. Cras neque dolor, volutpat et hendrerit et.</p>
                        </div>
                        <a href="#" class="primary-btn normal-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="about__pic__inner">
                            <img src="../resources/img/img/dd.jpeg" alt="">
                           
                        </div>
                    
                        
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- About Section End -->
     

    <!-- Project Section Begin -->
    <section class="project">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our works</span>
                        <h2>Latest projects</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="project__slider__item set-bg" data-setbg="../resources/img/img/project/project-1.jpg">
                            <div class="project__slider__item__hover">
                                <span>interiors</span>
                                <h5>Lower River Street Astoria</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="project__slider__item set-bg" data-setbg="../resources/img/img/project/project-2.jpg">
                            <div class="project__slider__item__hover">
                                <span>interiors</span>
                                <h5>Lower River Street Astoria</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="project__slider__item set-bg" data-setbg="../resources/img/img/project/project-3.jpg">
                            <div class="project__slider__item__hover">
                                <span>interiors</span>
                                <h5>Lower River Street Astoria</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="project__slider__item set-bg" data-setbg="../resources/img/img/project/project-4.jpg">
                            <div class="project__slider__item__hover">
                                <span>interiors</span>
                                <h5>Lower River Street Astoria</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="project__slider__item set-bg" data-setbg="../resources/img/img/project/project-2.jpg">
                            <div class="project__slider__item__hover">
                                <span>interiors</span>
                                <h5>Lower River Street Astoria</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our specialization</span>
                        <h2>What we do</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="../resources/img/img/services/services-1.png" alt="">
                        <h4>Interior Design</h4>
                        <p>As you might expect of a company that began as a high-end interiors contractor, we pay strict
                        attention.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="../resources/img/img/services/services-2.png" alt="">
                        <h4>Office Design</h4>
                        <p>Our commitment to exceptional quality has never wavered. To day ranks as one of the most
                        highly-regarded construction.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="../resources/img/img/services/services-3.png" alt="">
                        <h4>Home Design</h4>
                        <p>Interdisciplinary architectural studio with cultural, residential and commercial projects
                        built worldwide.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="../resources/img/img/services/services-4.png" alt="">
                        <h4>Design drawing</h4>
                        <p>Creating architectural and creative solutions to help people realize their vision and make
                        them a reality.</p>
                    </div>
                </div>
            </div>
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="count">85</h2>
                            </div>
                            <div class="counter__item__text">
                                <h5>Projects<br /> Completed</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="count">127</h2>
                            </div>
                            <div class="counter__item__text">
                                <h5>Happy<br /> Clients</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="count">36</h2>
                            </div>
                            <div class="counter__item__text">
                                <h5>Awards<br /> Received</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="count">74</h2>
                            </div>
                            <div class="counter__item__text">
                                <h5>Cups Of<br /> Coffee</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg="../resources/img/img/testimonial/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What your clients say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial__carousel">
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <p>“1. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <p>“2. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <p>“3. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <p>“4. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-9">
                                    <p>“5. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-7 col-sm-10 ">
                    <div class="testimonial__client">
                        <div class="testimonial__client__item add">
                            <div class="testimonial__client__pic">
                                <img src="../resources/img/img/testimonial/ta-1.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                            <div class="testimonial__client__pic">
                                <img src="../resources/img/img/testimonial/ta-2.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                            <div class="testimonial__client__pic">
                                <img src="../resources/img/img/testimonial/ta-3.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                            <div class="testimonial__client__pic">
                                <img src="../resources/img/img/testimonial/ta-4.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                            <div class="testimonial__client__pic">
                                <img src="../resources/img/img/testimonial/ta-5.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo__carousel owl-carousel">
                        <div class="logo__carousel__item">
                            <a href="#"><img src="../resources/img/img/logo/logo-1.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="../resources/img/img/logo/logo-2.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="../resources/img/img/logo/logo-3.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="../resources/img/img/logo/logo-4.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="../resources/img/img/logo/logo-5.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="../resources/img/img/logo/logo-3.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>Meet our team</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team__btn">
                        <a href="#" class="primary-btn normal-btn">View All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" data-setbg="../resources/img/img/team/team-1.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h5>Dolores Webster</h5>
                                <span>CEO & Founder</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                            <div class="team__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" data-setbg="../resources/img/img/team/team-2.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h5>Dana Vaughn</h5>
                                <span>Architect</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                            <div class="team__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" data-setbg="../resources/img/img/team/team-3.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h5>Jonathan Mcdaniel</h5>
                                <span>Architect</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                            <div class="team__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="../resources/img/img/call-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="callto__text">
                        <span>Why choose us?</span>
                        <h2>Our Ability To Deliver Outstanding Results For Our Clients Starts With Our Team Of Smart.
                        </h2>
                        <a href="#" class="primary-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Latest Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Latest News</span>
                        <h2>From our blog</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="latest__btn">
                        <a href="#" class="primary-btn normal-btn">View All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src="../resources/img/img/blog/latest-1.jpg" alt="">
                        </div>
                        <div class="latest__item__text">
                            <span>Architecture</span>
                            <h4>Target and Amazon Shopping List for Home Stagers</h4>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src="../resources/img/img/blog/latest-2.jpg" alt="">
                        </div>
                        <div class="latest__item__text">
                            <span>Interior</span>
                            <h4>6 Ideas for Team Building and Employee Appreciation for Home Stagers</h4>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src="../resources/img/img/blog/latest-3.jpg" alt="">
                        </div>
                        <div class="latest__item__text">
                            <span>Planning</span>
                            <h4>How to Find the Best Price Structure for Your Home Staging Services</h4>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="footer__top__text">
                            <h2>Ready To Work With Us?</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer__top__newslatter">
                            <form action="#">
                                <input type="text" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="../resources/img/img/logo.png" alt=""></a>
                        </div>
                        <p>7176 Blue Spring Lane <br />Santa Monica, CA 90403</p>
                        <ul>
                            <li>Info.colorlib@gmail.com</li>
                            <li>+84 123 456 789</li>
                        </ul>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Our Works</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Services</h6>
                        <ul>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Exterior Design</a></li>
                            <li><a href="#">Planning</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h6>Get In Touch</h6>
                        <p>7176 Blue Spring Lane <br />Santa Monica, CA 90403</p>
                        <ul>
                            <li>Info.colorlib@gmail.com</li>
                            <li>+84 123 456 789</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="copyright__text">
                            <p>Copyright © <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="copyright__widget">
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="../resources/js/js/jquery-3.3.1.min.js"></script>
<script src="../resources/js/js/bootstrap.min.js"></script>
<script src="../resources/js/js/jquery.slicknav.js"></script>
<script src="../resources/js/js/owl.carousel.min.js"></script>
<script src="../resources/js/js/slick.min.js"></script>
<script src="../resources/js/js/main.js"></script>

<!-- 2 JS -->
<script type="text/javascript" src="style/js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="style/js/bootstrap.js"></script> 
<script type="text/javascript" src="style/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="style/js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="style/js/jquery.isotope.js"></script> 
<script type="text/javascript" src="style/js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="style/js/contact_me.js"></script> 
<script type="text/javascript" src="style/js/main.js"></script>
</body>

</html>