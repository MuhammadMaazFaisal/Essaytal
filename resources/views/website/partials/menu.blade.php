
						<div class="nav-menus-wrapper">
							<ul class="nav-menu">
							
								<li class="active"><a href="/">Home<span class="submenu-indicator"></span></a>
								</li>
								
								<li><a href="#">Services<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="#">Essay Services<span class="submenu-indicator"></span></a>
										</li>
										<li><a href="#"> Dissertation Services<span class="submenu-indicator"></span></a>
										</li>
										<li><a href="#"> Assignment Service<span class="submenu-indicator"></span></a>
										</li>
										<li><a href="#"> Admission Service<span class="submenu-indicator"></span></a>
										</li>
										<li><a href="#"> Coursework Service<span class="submenu-indicator"></span></a>
										</li>
										<li><a href="#"> CV Service<span class="submenu-indicator"></span></a>
										</li>
										<li><a href="#"> Copywriting Service<span class="submenu-indicator"></span></a>
										</li>
										<li><a href="#"> Editing Services<span class="submenu-indicator"></span></a>
										</li>
										<li><a href="#"> Proofreading Services<span class="submenu-indicator"></span></a>
										</li>
									</ul>
								</li>
									<li><a href="#">Price</a></li>
										<li><a href="#">Samples </a></li>
										<li><a href="#">Our Writers</a></li>
										<li><a href="#">Reviews</a></li>
										<li><a href="#">More<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="#">Discounts<span class="submenu-indicator"></span></a>
												</li>
												<li><a href="#"> Extras<span class="submenu-indicator"></span></a>
												</li>
												<li><a href="#"> Contact us<span class="submenu-indicator"></span></a>
												</li>
												<li><a href="#"> FAQ<span class="submenu-indicator"></span></a>
												</li>
												<li><a href="#"> How It Works<span class="submenu-indicator"></span></a>
												</li>
												
											</ul>
										</li>
							
							</ul>
							<ul class="nav-menu nav-menu-social align-to-right">
								@if (Route::has('login'))
								<li class="">
									@auth
									<a href="{{ url('/home') }}" class="alio_green">
										<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Home</span>
									</a>
									@else
									<a href="{{ route('login') }}" class="alio_green">
										<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Log in</span>
									</a>
								</li>
								<li class="">
								@if (Route::has('register'))
									<a href="{{ route('register') }}" class="alio_green">
										<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Register</span>
									</a>
								</li>
								@endif
								@endauth
								@endif
								<li class="add-listing theme-bg">
									<a href="/order" class="text-white" style="text-transform: uppercase;">Order Now</a>
								</li>
							</ul>
							
							
						</div>
					</nav>
				</div>
