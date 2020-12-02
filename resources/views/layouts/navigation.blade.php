
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
