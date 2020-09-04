<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buy and Sell Multan</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php include 'includes/header_links.php'; ?>

	<style>
		.tg-formbannersearch fieldset {
    		background: #fff;
    		overflow: hidden;
    		border-radius: 5px;
    		padding: 0 0px 0 0 !important;
		}
		.tg-formtheme fieldset {
			margin: 0;
			border: 0;
			padding: 0;
			width: 85% !important;
			float: left;
			position: relative;
		}
		.tg-formtheme fieldset {
			margin: 0;
			border: 0;
			padding: 0;
			width: 85% !important;
			float: left;
			position: relative;
			margin-left: 80px !important;
		}
		.tg-formbannersearch .form-group {
			margin: 0;
			float: left;
			width: 40.33% !important;
			padding: 0 0 0 60px;
			border-left: 1px solid #dbdbdb;
		}
	</style>
</head>
<body class="tg-home tg-homeone">

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<?php include 'includes/header.php'; ?>
		<!--************************************
				Header End
		*************************************-->

						<div class="col-xs-12 col-md-2"></div>
						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
							<div id="tg-content" class="tg-content">
								<div class="tg-ads">
									<div class="row">
										
										<?php
											foreach($AllAds as $ads)
											{
										?>
												<div class="col-xs-6 col-sm-12 col-md-6 col-lg-4 tg-verticaltop">
													<div class="tg-ad tg-verifiedad">
														<figure>
															<span class="tg-themetag tg-featuretag">featured</span>
															<a href="<?php echo base_url('BuySell/adDetails/'.$ads->id); ?>"><img style="height:200px;width:280px;" src="<?php echo assets_url('uploads/'.$ads->ad_picture); ?>" alt="image description"></a>
														</figure>
														<div class="tg-adcontent">
															<ul class="tg-productcagegories">
																<li><a href="javascript:void(0);"><?= $ads->CategoryTitle; ?></a></li>
															</ul>
															<div class="tg-adtitle">
																<h3><a href="javascript:void(0);"><?= $ads->product_name; ?></a></h3>
															</div>
															<div class="tg-adprice"><h4><?= $ads->product_price; ?>rps</h4></div>
															<div class="tg-phonelike">
																<a class="tg-btnphone" href="javascript:void(0);">
																	<i class="icon-phone-handset"></i>
																	<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="<?= $ads->PhoneNumber; ?>"><em>Show Phone No.</em></span>
																</a>
																<span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
															</div>
														</div>
													</div>
												</div>
										<?php
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					About Us End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="tg-footerinfo">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
							<div class="tg-widget tg-widgetsearchbylocations">
								<div class="tg-widgettitle">
									<h3>Search By Category:</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<?php
											foreach($Category as $cat){
										?>
												<li><a href="javascript:void(0);">-  <?= $cat->title; ?></a></li>
										<?php
											}
										?>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<div class="tg-widget tg-widgettext">
								<div class="tg-widgetcontent">
									<strong class="tg-logo"><a href="javascript:void(0);"><img src="<?php echo assets_url('assets_2/images/logof.png'); ?>" alt="image description"></a></strong>
									<div class="tg-description">
										<p>Ads your product and sell online</p>
									</div>
									<div class="tg-followus">
										<strong>Follow Us:</strong>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
											<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
									<span class="tg-copyright">2020 All Rights Reserved &copy; Ads</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
	<div id="tg-modalselectcurrency" class="modal fade tg-thememodal tg-modalselectcurrency" tabindex="-1" role="dialog">
		<div class="modal-dialog tg-thememodaldialog" role="document">
			<button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<div class="modal-content tg-thememodalcontent">
				<div class="tg-title">
					<strong>Change Currency</strong>
				</div>
				<form class="tg-formtheme tg-formselectcurency">
					<fieldset>
						<div class="form-group">
							<div id="tg-flagstrapone" class="tg-flagstrap" data-input-name="country"></div>
						</div>
						<div class="form-group">
							<button class="tg-btn" type="button">Change Now</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div id="tg-modalpriceconverter" class="modal fade tg-thememodal tg-modalpriceconverter" tabindex="-1" role="dialog">
		<div class="modal-dialog tg-thememodaldialog" role="document">
			<button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<div class="modal-content tg-thememodalcontent">
				<div class="tg-title">
					<strong>Currency Converter</strong>
				</div>
				<form class="tg-formtheme tg-formcurencyconverter">
					<fieldset>
						<div class="form-group">
							<div id="tg-flagstraptwo" class="tg-flagstrap" data-input-name="country"></div>
							<div class="tg-curencyrateetc">
								<span>120<sup>$</sup></span>
								<p>1 USD = 0.784769 GBP</p>
							</div>
						</div>
						<div class="form-group">
							<span class="tg-iconseprator"><i><img src="<?php echo assets_url('assets_2/images/icons/img-36.png'); ?>" alt="image description"></i></span>
						</div>
						<div class="form-group">
							<div id="tg-flagstrapthree" class="tg-flagstrap" data-input-name="country"></div>
							<div class="tg-curencyrateetc">
								<span>94.1723<sup>£</sup></span>
								<p>1 GBP = 1.27426 USD</p>
							</div>
						</div>
						<div class="form-group">
							<span class="tg-lastupdate">Last update on <time datetime="2017-08-08">2017-06-12 12:35 local time</time></span>
						</div>
						<div class="form-group">
							<button class="tg-btn" type="button">Convert Now</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<!--************************************
			Theme Modal Box End
	*************************************-->
	<?php include 'includes/footer_links.php'; ?>
</body>
</html>