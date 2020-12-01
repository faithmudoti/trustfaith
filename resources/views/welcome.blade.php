<!DOCTYPE html>
<html lang="en">


<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content=" width=device-width, initial-scale=1">
		<title>membership</title>
    <!-- Fonts -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CSZ PORTAL') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    <!-- CSS assets -->
		<link href="{{ asset('css/bootstrap.min.css" rel="stylesheet') }}">

		<!-- LOAD slick slider assets -->
		<link rel="stylesheet" type="text/css" href="{{ asset('addons/slick/slick.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('addons/slick/slick-theme.css') }}">
    <!-- Main theme stylesheet -->
    <link href="{{ asset('css/template.css') }}" rel="stylesheet" type="text/css">


	</head>

	<body>
		<div id="page_wrapper">
				<!-- Responsive menu start -->
                <ul class="mm__resMenu">
					<li class="mm__resMenu-back">
						<span class="mm__resMenu-backIcon glyphicon glyphicon-chevron-left"></span><a href="#" class="mm__resMenu-backLink">Back</a>
					</li>
					<li><a class="active" href="index.html"><span>Home</span></a></li>
					<li><a class="mm__menu-link" href="index.html#about"><span>About</span></a>

					<li><a class="" href="contact.html"><span>LOGIN</span></a></li>

				</ul>

                <header id="header" class="site-header header--sticky  header--not-sticked site-header--absolute">
					<div class="site-header-main-wrapper clearfix">
						<div class="container siteheader-container">
								<div class="flex-col flex-basis-auto">
									<div class="flex-row site-header-row site-header-main">
										<!-- left column - logo -->
										<div class="flex-col flex flex-start-x flex-center-y flex-basis-auto flex-grow-0 flex-sm-half site-header-col-left">
											<div class="logo-container">
													<div class="site-logo">
															<a href="index.html" class="site-logo-anch">
																	<img class="logo-img-sticky site-logo-img-sticky" src="img-assets/logo-landing2.png" alt="logo" title="membership">
																	<img class="logo-img site-logo-img" src="img-assets/logo-landing2.png" alt="logo" title="membership" width="196" height="36">
															</a>
													</div>
											</div>
										</div>

										<!-- right column - navigation menu -->
										<div class="flex-col flex flex-end-x flex-center-y flex-basis-auto flex-sm-half site-header-col-right site-header-main-right">
												<div class="main-menu-wrapper">
													<div class="sh-component menu-wrapper">

														 <div class="mm__menuWrapper">
															 <div class="mm__mainMenu-trigger">
																 <a href="#" class="mm__menuBurger">
																	 <span></span>
																	 <span></span>
																	 <span></span>
																 </a>
															 </div><!--/.mm__mainMenu-trigger-->

															 <ul class="mm__mainMenu clearfix">
																 <li><a class="mm__menu-link" href="index.html#home"><span>Home</span></a></li>
																 <li><a class="mm__menu-link" href="index.html#about"><span>About</span></a></li>

																 <li><a class="" href="{{ route('login') }}"><span>LOGIN</span></a></li>

															 </ul><!--/.mm__mainMenu-->

														 </div><!--/.mm__menuWrapper-->


													</div>
													<!--sign up button-->
													<div class="mm__ctaButton sh-component">
														 <a href="{{ route('register') }}" class="btn btn--round btn--fullblack"><span>Sign up</span></a>
												 	</div>


												</div>
										</div>
									</div>
								</div>
						</div>
					</div>
			</header>
			<div class="mm-subheader" id="home">

					<div class="custom-width-container custom-height-container container flex">
						<div class="row flex-center xs-flex-top">
									<div class="col-md-12 col-sm-12">
										<div class="title-block">
<br><br>
											<h1 class="home-heading">CSZ
												<br>
                                                 Membership
                                                  <br>
                                                 Portal
											</h1>

										</div>
										<a href="index.html#plan" class="btn btn--extralg btn--round btn--fullwhite">
											START NOW </a>
									</div>
							</div>
					</div>

			</div><!--end subheader-->




			<!--pricing section-->
			<section id="pricing" class="pricing-section page-section bg-color--white  pgt-150 pgb-150">
				<div class="rellax rellax-third" data-rellax-percentage="0.9" style="background-image: url('images/parallax-background.jpg');">
				</div>
				<div class="container custom_width flex-center">
					<div class="row">
						<div class=" col-md-12 col-sm-12 ">
							<div class="title-block">
								<h6 class="title--large txt-light txt-center pgb-100">Pick your plan</h6>
							</div>
						</div>
						<!-- start memebrship columns -->
						<div class="col-md-4 col-sm-4 border-right">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>550</h2>
									<h6 class="subtitle pgb-20 txt-center txt-light">Professional</h6>
								</div>
								<div class="pricing-description">
									<h6 class="pricing-description__item">A person to be elected to the grade of Professional shall have acquired an established reputation as a professional practitioner in the field of Information Processing and meets the following criteria:</h6>
									<h6 class="pricing-description__item">1. Agrees to undertake Continuing Professional Development</h6>
									<h6 class="pricing-description__item">2. Attends an admissions interview and provides oral proof of his suitability for acceptance as a Professional Member. </h6>
								</div>
								<div class="txt-center">
									<a href="membership-levels.html" class="btn btn--extralg btn--round btn--fullwhite">VIEW</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 border-right">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>220</h2>
									<h6 class="subtitle pgb-20 txt-center txt-light">Associate </h6>
								</div>
								<div class="pricing-description">
									<h6 class="pricing-description__item"> A person to be elected to the grade of Associate Member shall, at the time of application or nomination, satisfy the Membership Committee that he meets the following criteria:</h6>
									<h6 class="pricing-description__item">Is sponsored by two Members of the Society who will be asked to confirm their knowledge of the candidate   </h6>
									<h6 class="pricing-description__item">Has the requisite number of qualifying points for the grade of Associate Member</h6>
								</div>
								<div class="txt-center">
									<a href="membership-levels.html" class="btn btn--extralg btn--round btn--fullwhite">sign up today</a>
								</div>
							</div>

						</div>
						<div class="col-md-4 col-sm-4 ">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>399</h2>
									<h6 class="subtitle pgb-20 txt-center txt-light">Forever Membership</h6>
								</div>
								<div class="pricing-description">
									<h6 class="pricing-description__item">1 theme included.</h6>
									<h6 class="pricing-description__item">Unlimited theme updates & Support.</h6>
									<h6 class="pricing-description__item">20% off future purchases.</h6>
								</div>
								<div class="txt-center">
									<a href="membership-levels.html" class="btn btn--extralg btn--round btn--fullwhite">sign up today</a>
								</div>
							</div>

						</div>
					</div>
				</div>
            </section>
            <!--pricing section-->
			<section id="pricing" class="pricing-section page-section bg-color--white  pgt-150 pgb-150">
				<div class="rellax rellax-third" data-rellax-percentage="0.9" style="background-image: url('images/parallax-background.jpg');">
				</div>
				<div class="container custom_width flex-center">
					<div class="row">
						<div class=" col-md-12 col-sm-12 ">
							<div class="title-block">
								<h6 class="title--large txt-light txt-center pgb-100">Pick your plan</h6>
							</div>
						</div>
						<!-- start memebrship columns -->
						<div class="col-md-4 col-sm-4 border-right">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>550</h2>
									<h6 class="subtitle pgb-20 txt-center txt-light">Professional</h6>
								</div>
								<div class="pricing-description">
									<h6 class="pricing-description__item">A person to be elected to the grade of Professional shall have acquired an established reputation as a professional practitioner in the field of Information Processing and meets the following criteria:</h6>
									<h6 class="pricing-description__item">1. Agrees to undertake Continuing Professional Development</h6>
									<h6 class="pricing-description__item">2. Attends an admissions interview and provides oral proof of his suitability for acceptance as a Professional Member. </h6>
								</div>
								<div class="txt-center">
									<a href="membership-levels.html" class="btn btn--extralg btn--round btn--fullwhite">VIEW</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 border-right">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>220</h2>
									<h6 class="subtitle pgb-20 txt-center txt-light">Associate </h6>
								</div>
								<div class="pricing-description">
									<h6 class="pricing-description__item"> A person to be elected to the grade of Associate Member shall, at the time of application or nomination, satisfy the Membership Committee that he meets the following criteria:</h6>
									<h6 class="pricing-description__item">Is sponsored by two Members of the Society who will be asked to confirm their knowledge of the candidate   </h6>
									<h6 class="pricing-description__item">Has the requisite number of qualifying points for the grade of Associate Member</h6>
								</div>
								<div class="txt-center">
									<a href="membership-levels.html" class="btn btn--extralg btn--round btn--fullwhite">sign up today</a>
								</div>
							</div>

						</div>
						<div class="col-md-4 col-sm-4 ">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>399</h2>
									<h6 class="subtitle pgb-20 txt-center txt-light">Forever Membership</h6>
								</div>
								<div class="pricing-description">
									<h6 class="pricing-description__item">1 theme included.</h6>
									<h6 class="pricing-description__item">Unlimited theme updates & Support.</h6>
									<h6 class="pricing-description__item">20% off future purchases.</h6>
								</div>
								<div class="txt-center">
									<a href="membership-levels.html" class="btn btn--extralg btn--round btn--fullwhite">sign up today</a>
								</div>
							</div>

						</div>
					</div>
				</div>
            </section>

			<!-- Start footer -->
			<footer class="pgb-100 pgt-160  bg-color--dark">

					<div class="row">
						<div class=" col-md-12 col-sm-12">
							<p class="copyright">© 2020
								<a href="https://www.csz.org.zw/">CZS</a>
								 | ALL RIGHTS RESERVED
								<a href="https://www.csz.org.zw//"> CSZ.</a>
							</p>

							</p>
						</div>

				</div>

			</footer>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/plugins/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
        <!--isotope script-->
        <script src="{{ asset('addons/isotope/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('addons/slick/slick.min.js') }}"></script>
        <script src="{{ asset('addons/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('addons/rellax-master/rellax.min.js') }}"></script>
        <!--popup script-->
        <script src="{{ asset('addons/Magnific-Popup/jquery.magnific-popup.js') }}"></script>
        <!--count script-->
        <script src="{{ asset('addons/jquery.countTo.js') }}"></script>
        <script src="{{ asset('addons/jquery.smooth-scroll.min.js') }}"></script>
        <!-- Main template script -->
        <script src="{{ asset('js/script.js')}}"></script>


	</body>

<!-- Mirrored from demos.hogash.com/membership_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 08:29:32 GMT -->
</html>
