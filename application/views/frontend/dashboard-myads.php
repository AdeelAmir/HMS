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
			<h1>My Ads</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li class="tg-active">My Ads</li>
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
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-dashboardbox">
									<div class="tg-dashboardboxtitle">
										<h2>My Ads</h2>
									</div>
									<div class="tg-dashboardholder">
										<nav class="tg-navtabledata">
											<ul>
												<!-- <li class="tg-active"><a href="_.php">All Ads (50)</a></li> -->
												<!-- <li><a href="_.php">Featured (12)</a></li> -->
												<li><a href="javascript:void(0);" data-category="active">Active (<?php echo count($Ads);  ?>)</a></li>
												<!-- <li><a href="javascript:void(0);" data-category="inactive">Inactive (03)</a></li>
												<li><a href="javascript:void(0);" data-category="sold">Sold (02)</a></li>
												<li><a href="javascript:void(0);" data-category="expired">Expired (01)</a></li>
												<li><a href="javascript:void(0);" data-category="deleted">Deleted (03)</a></li> -->
											</ul>
										</nav>
										<table id="tg-adstype" class="table tg-dashboardtable tg-tablemyads">
											<thead>
												<tr>
													<th>
														<span class="tg-checkbox">
															<input id="tg-checkedall" type="checkbox" name="myads" value="checkall">
															<label for="tg-checkedall"></label>
														</span>
													</th>
													<th>Photo</th>
													<th>Product Name</th>
													<th>Product Price</th>
													<th>Category</th>
													<th>City</th>
												</tr>
											</thead>
											<tbody>
												<?php
													foreach($Ads as $ads)
													{
												?>
														<tr data-category="active">
															<td data-title="">
																<span class="tg-checkbox">
																	<input id="tg-adone" type="checkbox" name="myads" value="myadone">
																	<label for="tg-adone"></label>
																</span>
															</td>
															<td data-title="Photo"><img style="width:100px;height:100px;" src="<?php echo assets_url('uploads/'.$ads->ad_picture); ?>" alt="image description"></td>
															<td data-title="Product Name">
																<h3><?php echo $ads->product_name; ?></h3>
															</td>
															<td data-title="Product Price"><span class="tg-adcategories"><?php echo $ads->product_price; ?></span></td>
															<td data-title="Category"><?php echo $ads->CategoryTitle; ?></td>
															<td data-title="City"><?php echo $ads->CityTitle; ?></td>
														</tr>
												<?php
													}
												?>
											</tbody>
										</table>
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
	<?php include 'includes/footer_links.php'; ?>
</body>
</html>