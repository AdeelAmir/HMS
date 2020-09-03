<!--************************************
				Header Start
*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="dropdown tg-themedropdown tg-userdropdown">
								<a href="javascript:void(0);" id="tg-adminnav" class="tg-btndropdown" data-toggle="dropdown">
									<span class="tg-userdp"><img src="<?php echo assets_url('assets_2/images/author/img-01.jpg'); ?>" alt="image description"></span>
									<span class="tg-name">Hi! Angelena</span>
									<span class="tg-role">Administrator</span>
								</a>
								<ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-adminnav">
									<li>
										<a href="dashboard-profile-setting.php">
											<i class="icon-cog"></i>
											<span>Profile Settings</span>
										</a>
									</li>
									<li>
										<a href="dashboard-postanad.php">
											<i class="icon-layers"></i>
											<span>Dashboard Post Ad</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="icon-exit"></i>
											<span>Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="index.php"><img src="<?php echo assets_url('assets_2/images/logo.png'); ?>" alt="company logo here"></a></strong>
							<a class="tg-btn" href="<?php echo base_url('Seller/postads'); ?>">
								<i class="icon-bookmark"></i>
								<span>post an ad</span>
							</a>
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li>
											<a href="<?php echo base_url('BuySell/home'); ?>">Home</a>
										</li>
										<li>
											<a href="<?php echo base_url('BuySell/adlisting'); ?>">Ads</a>
										</li>
										<li>
											<a href="<?php echo base_url('BuySell/aboutus'); ?>">About Us</a>
										</li>
										<li>
											<a href="<?php echo base_url('BuySell/contactus'); ?>">Contact Us</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div id="tg-homebanner" class="tg-homebanner tg-haslayout">
			<figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-bannercontent">
									<h1>World’s Largest Marketplace</h1>
									<h2>Awesome Verified Ads!</h2>
									<form class="tg-formtheme tg-formbannersearch">
										<fieldset>
											<div class="form-group tg-inputwithicon">
												<i class="icon-location"></i>
												<div class="tg-select">
													<select>
														<option value="none">Select City</option>
														<option value="none">Mobiles</option>
														<option value="none">Electronics</option>
														<option value="none">Vehicles</option>
														<option value="none">Bikes</option>
														<option value="none">Animals</option>
														<option value="none">Furniture</option>
														<option value="none">toys</option>
													</select>
												</div>
											</div>
											<div class="form-group tg-inputwithicon">
												<i class="icon-layers"></i>
												<div class="tg-select">
													<select>
														<option value="none">Select Category</option>
														<option value="none">Mobiles</option>
														<option value="none">Electronics</option>
														<option value="none">Vehicles</option>
														<option value="none">Bikes</option>
														<option value="none">Animals</option>
														<option value="none">Furniture</option>
														<option value="none">toys</option>
													</select>
												</div>
											</div>
											<button class="tg-btn" type="button">Search Now</button>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</figcaption>
			</figure>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->