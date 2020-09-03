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
												<li><a href="javascript:void(0);" data-category="active">Active (42)</a></li>
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
													<th>Title</th>
													<th>Category</th>
													<th>Featured</th>
													<th>Ad Status</th>
													<th>Price &amp; Location</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr data-category="active">
													<td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adone" type="checkbox" name="myads" value="myadone">
															<label for="tg-adone"></label>
														</span>
													</td>
													<td data-title="Photo"><img src="images/thumbnail/img-06.jpg" alt="image description"></td>
													<td data-title="Title">
														<h3>A+ HP probook 6560b core i3 2nd generation</h3>
														<span>Ad ID: ng3D5hAMHPajQrM</span>
													</td>
													<td data-title="Category"><span class="tg-adcategories">Laptops &amp; PCs</span></td>
													<td data-title="Featured">Yes</td>
													<td data-title="Ad Status"><span class="tg-adstatus tg-adstatusactive">active</span></td>
													<td data-title="Price &amp; Location">
														<h3>$200</h3>
														<address>location  44-46 Morningside North Road Edinburgh, Scotland, EH10 4BF</address>
													</td>
													<td data-title="Date">
														<time datetime="2017-08-08">Jun 27, 2017</time>
														<span>Published</span>
													</td>
													<td data-title="Action">
														<div class="tg-btnsactions">
															<a class="tg-btnaction tg-btnactionview" href="javascript:void(0);"><i class="fa fa-eye"></i></a>
															<a class="tg-btnaction tg-btnactionedit" href="javascript:void(0);"><i class="fa fa-pencil"></i></a>
															<a class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr data-category="active">
													<td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adfive" type="checkbox" name="myads" value="myadfive">
															<label for="tg-adfive"></label>
														</span>
													</td>
													<td data-title="Photo"><img src="images/thumbnail/img-10.jpg" alt="image description"></td>
													<td data-title="Title">
														<h3>A+ HP probook 6560b core i3 2nd generation</h3>
														<span>Ad ID: ng3D5hAMHPajQrM</span>
													</td>
													<td data-title="Category">Laptops &amp; PCs</td>
													<td data-title="Featured">Yes</td>
													<td data-title="Ad Status"><span class="tg-adstatus tg-adstatusactive">active</span></td>
													<td data-title="Price &amp; Location">
														<h3>$200</h3>
														<address>location  44-46 Morningside North Road Edinburgh, Scotland, EH10 4BF</address>
													</td>
													<td data-title="Date">
														<time datetime="2017-08-08">Jun 27, 2017</time>
														<span>Published</span>
													</td>
													<td data-title="Action">
														<div class="tg-btnsactions">
															<a class="tg-btnaction tg-btnactionview" href="javascript:void(0);"><i class="fa fa-eye"></i></a>
															<a class="tg-btnaction tg-btnactionedit" href="javascript:void(0);"><i class="fa fa-pencil"></i></a>
															<a class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
														</div>
													</td>
												</tr>
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