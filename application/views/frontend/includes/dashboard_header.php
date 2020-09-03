<!--************************************
				Header Start
		*************************************-->
		<header id="tg-dashboardheader" class="tg-dashboardheader tg-haslayout">
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
			<div id="tg-sidebarwrapper" class="tg-sidebarwrapper">
				<span id="tg-btnmenutoggle" class="tg-btnmenutoggle">
					<i class="fa fa-angle-left"></i>
					
				</span>
				<div id="tg-verticalscrollbar" class="tg-verticalscrollbar">
					<strong class="tg-logo"><a href="javascript:void(0);"><img src="<?php echo assets_url('assets_2/images/logod.png'); ?>" alt="image description"></a></strong>
					<div class="tg-user">
						<figure>
							<span class="tg-bolticon"><i class="fa fa-bolt"></i></span>
							<a href="javascript:void(0);"><img src="<?php echo assets_url('assets_2/images/author/img-07.jpg'); ?>" alt="image description"></a>
						</figure>
						<div class="tg-usercontent">
							<h3>Hi! Angelena</h3>
							<h4>Administrator</h4>
						</div>
						<a class="tg-btnedit" href="javascript:void(0);"><i class="icon-pencil"></i></a>
					</div>
					<nav id="tg-navdashboard" class="tg-navdashboard">
						<ul>
							<li class="tg-active">
								<a href="<?php echo base_url('Seller/profilesetting'); ?>">
									<i class="icon-cog"></i>
									<span>Profile Settings</span>
								</a>
							</li>
							<li class="tg-active">
								<a href="<?php echo base_url('Seller/myads'); ?>">
									<i class="icon-cog"></i>
									<span>All Ads</span>
								</a>
							</li>
							<li class="tg-active">
								<a href="<?php echo base_url('Seller/postads'); ?>">
									<i class="icon-cog"></i>
									<span>Create Ads</span>
								</a>
							</li>
							<li class="tg-active">
								<a href="<?php echo base_url('Authentification/logout2') ?>">
									<i class="icon-cog"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->