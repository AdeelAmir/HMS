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
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<?php 
				foreach($AdsDetail as $ads)
				{
			?>
					<div class="container">
						<div class="row">
							<div id="tg-twocolumns" class="tg-twocolumns">
								<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
									<aside id="tg-sidebar" class="tg-sidebar">
										<div class="tg-pricebox">
											<div class="tg-priceandlastupdate">
												<span><?= $ads->product_price; ?>rps</span>
												<span>Last Updated: <?= date($ads->created_at) ?></span>
											</div>
										</div>
										<div class="tg-sellercontactdetail">
											<div class="tg-sellertitle"><h1>Seller Contact Detail</h1></div>
											<div class="tg-sellercontact">
												<div class="tg-memberinfobox">
													<div class="tg-memberinfo">
														<h3><a href="javascript:void(0);"><?= $ads->UserName; ?></a></h3>
													</div>
												</div>
												<a class="tg-btnphone" href="javascript:void(0);">
													<i class="icon-phone-handset"></i>
													<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="<?= $ads->PhoneNumber; ?>">
														<em>Show Phone No.</em>
														<span>Click To Show Number</span>
													</span>
												</a>
											</div>
										</div>
									</aside>
								</div>
								<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
									<div id="tg-content" class="tg-content">
										<div class="tg-ad tg-verifiedad tg-detail tg-addetail">
											<div class="tg-adcontent">
												<ul class="tg-pagesequence">
													<li><a href="javascript:void(0);"><?= $ads->CategoryTitle; ?></a></li>
												</ul>
												<div class="tg-adtitle">
													<h2><?= $ads->product_name; ?></h2>
												</div>
												<ul class="tg-admetadata">
													<li><i class="icon-earth"></i><address><?= $ads->CityTitle; ?></address></li>
												</ul>
											</div>
											<div class="tg-description">
												<div class="tg-video">
													<figure>
													<video width="800" height="500" controls>
														<source src="<?php echo assets_url('uploads/'.$ads->ad_video); ?>" type=video/mp4>
													</video>
													</figure>
												</div>
												<div class="tg-fullimg">
													<figure>
													<img style="width:840px;height:500px;" src="<?php echo assets_url('uploads/'.$ads->ad_picture); ?>" alt="image description">
													</figure>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
			<?php
				}
			?>
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
										<li><a href="javascript:void(0);">-  Mobile</a></li>
										<li><a href="javascript:void(0);">-  Bike</a></li>
										<li><a href="javascript:void(0);">-  Accessories</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<div class="tg-widget tg-widgettext">
								<div class="tg-widgetcontent">
									<strong class="tg-logo"><a href="javascript:void(0);"><img src="<?php echo assets_url('assets_2/images/ads/img-14.jpg'); ?>" alt="image description"></a></strong>
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