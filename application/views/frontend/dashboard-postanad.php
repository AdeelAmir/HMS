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
				<li class="tg-active">Post an Ad</li>
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
					<?php
						if(isset($success)){
					?>
							<div class="alert alert-success" role="alert">
							 	<?php echo $success; ?>
							</div>
					<?php
						}
					?>
					<form class="tg-formtheme tg-formdashboard" method="POST" action="<?php echo base_url('Ads/createAds'); ?>" enctype='multipart/form-data'>
						<fieldset>
							<div class="tg-postanad">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Ads Post</h2>
										</div>
										<div class="tg-dashboardholder">
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Product Name">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
											</div>
											<div class="form-group">
												<input type="number" name="price" class="form-control" placeholder="product Price">
											</div>
											<div class="form-group">
												<select name="category" id="category" class="form-control">
												<?php
													foreach($Category as $cat)
													{
													?>
														<option value="<?php echo $cat->id; ?>"><?php echo $cat->title; ?></option>
													<?php
													}
												?>
												</select>
											</div>
											<div class="form-group">
												<select name="city" id="city" class="form-control">
												<?php
													foreach($City as $cat)
													{
													?>
														<option value="<?php echo $cat->id; ?>"><?php echo $cat->title; ?></option>
													<?php
													}
												?>
												</select>
											</div>
											<div class="form-group">
												<label class="tg-fileuploadlabel" for="tg-photogallery">
													Choose Ads Image
													<input type="file" name="file" />
												</label>
											</div>
											<div class="form-group">
												<label class="tg-fileuploadlabel" for="tg-photogallery">
													Choose Video of 10sec
													<input type="file" name="advideofile" accept="video/mp4,video/x-m4v,video/*" />
												</label>
											</div>
											<button class="tg-btn" type="submit">Add Post</button>
										</div>
									</div>
								</div>
							</div>
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
	<!--************************************
			Theme Modal Box Start
	*************************************-->
	<!--************************************
			Theme Modal Box End
	*************************************-->
	<?php include 'includes/footer_links.php'; ?>
</body>
</html>