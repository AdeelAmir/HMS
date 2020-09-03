<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buy and Sell Multan</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/dashboard_header_links.php'; ?>
</head>
<body>
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<?php include 'includes/dashboard_header.php'; ?>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
			<h1>Profile Settings</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li class="tg-active">Profile Setting</li>
			</ol>
		</div>
		<!--************************************
				Dashboard Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Section Start
			*************************************-->
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
					<form class="tg-formtheme tg-formdashboard">
						<fieldset>
							<!--************************************
									Approved Ads Start
							*************************************-->
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
								<div class="tg-dashboardbox">
									<div class="tg-dashboardboxtitle">
										<h2>Profile Detail</h2>
									</div>
									<div class="tg-dashboardholder">
										<div class="form-group">
											<strong>I’m a:</strong>
											<div class="tg-selectgroup">
												<span class="tg-radio">
													<input id="tg-mail" type="radio" name="gender" value="mail" checked>
													<label for="tg-mail">mail</label>
												</span>
												<span class="tg-radio">
													<input id="tg-femail" type="radio" name="gender" value="femail">
													<label for="tg-femail">femail</label>
												</span>
												<span class="tg-radio">
													<input id="tg-company" type="radio" name="gender" value="company">
													<label for="tg-company">Company</label>
												</span>
											</div>
										</div>
										<div class="form-group">
											<input type="text" name="username" class="form-control" placeholder="Username">
										</div>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Email*">
										</div>
										<div class="form-group">
											<input type="text" name="firstname" class="form-control" placeholder="First Name*">
										</div>
										<div class="form-group">
											<input type="text" name="lastname" class="form-control" placeholder="Last Name*">
										</div>
										<div class="form-group">
											<input type="text" name="phonenumber" class="form-control" placeholder="Phone Number*">
										</div>
										<div class="form-group">
											<label class="tg-fileuploadlabel" for="tg-photogallery">
												<span>Drop files anywhere to upload</span>
												<span>Or</span>
												<span class="tg-btn">Select File</span>
												<input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
											</label>
										</div>
										<button class="tg-btn" type="button">Update</button>
									</div>
								</div>
							</div>
							<!--************************************
									Approved Ads End
							*************************************-->
							<!--************************************
									Approved Ads Start
							*************************************-->
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
								<div class="tg-dashboardbox">
									<div class="tg-dashboardboxtitle">
										<h2>Change Password</h2>
									</div>
									<div class="tg-dashboardholder">
										<div class="form-group">
											<input type="password" name="currentpassword" class="form-control" placeholder="Current Password">
										</div>
										<div class="form-group">
											<input type="password" name="newpassword" class="form-control" placeholder="New Password">
										</div>
										<div class="form-group">
											<input type="password" name="confirmpassword" class="form-control" placeholder="Confirm New Password">
										</div>
										<button class="tg-btn" type="button">Change Now</button>
									</div>
								</div>
							</div>
							<!--************************************
									Approved Ads End
							*************************************-->
						</fieldset>
					</form>
				</div>
			</section>
			<!--************************************
					Section End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<nav class="tg-footernav">
				<ul>
					<li><a href="javascript:void(0);">Listing Policy</a></li>
					<li><a href="javascript:void(0);">Terms of Use</a></li>
					<li><a href="javascript:void(0);">Privacy Policy</a></li>
				</ul>
			</nav>
			<span class="tg-copyright">2017 All Rights Reserved &copy; Classified PRO</span>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<?php include 'includes/footer_links.php'; ?>
</body>
</html>