<!--************************************
				Header Start
*************************************-->
<header id="tg-header" class="tg-header tg-haslayout">
    <?php
    if ($UserId) {
        ?>
        <div class="tg-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="dropdown tg-themedropdown tg-userdropdown">
                            <a href="javascript:void(0);" id="tg-adminnav" class="tg-btndropdown"
                               data-toggle="dropdown">
                                <span class="tg-userdp">
                                    <img src="<?php echo assets_url('assets_2/images/user.png'); ?>"
                                         alt="image description" class="img-responsive" style="width: 40px;">
                                </span>
                                <span class="tg-name"><?= $UserName; ?></span>
                                <span class="tg-role">User</span>
                            </a>
                            <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-adminnav">
                                <li>
                                    <a href="<?php echo base_url('Seller/postads'); ?>">
                                        <i class="icon-layers"></i>
                                        <span>Dashboard Post Ad</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Authentification/logout2') ?>">
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
        <?php
    }
    ?>
    <div class="tg-navigationarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <strong class="tg-logo"><a href="index.php"><img
                                    src="<?php echo assets_url('assets_2/images/logo.png'); ?>" alt="company logo here"></a></strong>
                    <a class="tg-btn" href="<?php echo base_url('Seller/postads'); ?>">
                        <i class="icon-bookmark"></i>
                        <span>post an ad</span>
                    </a>
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#tg-navigation" aria-expanded="false">
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

                                <?php
                                if (!$UserId) {
                                    ?>
                                    <li>
                                        <a href="<?php echo base_url('BuySell/login_signup'); ?>">Login/SignUp</a>
                                    </li>
                                    <?php
                                }
                                ?>
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
    <figure class="item" data-vide-bg="poster: <?php echo assets_url('assets_2/images/img-01.jpg'); ?>"
            data-vide-options="position: 50% 50%">
        <figcaption>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-bannercontent">
                            <h1>World’s Largest Marketplace</h1>
                            <h2>Awesome Verified Ads!</h2>
                            <form class="tg-formtheme tg-formbannersearch">
                                <!-- <fieldset>
                                    <div class="form-group tg-inputwithicon">
                                        <i class="icon-location"></i>
                                        <div class="tg-select">
                                            <select>
                                                <option value="none" disabled selected>Select City</option>
                                                <?php
                                                    // foreach($City as $city){
                                                ?>
                                                        <option value="<?php echo $city->id; ?>"><?php echo $city->title; ?></option>
                                                <?php
                                                    // }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group tg-inputwithicon">
                                        <i class="icon-layers"></i>
                                        <div class="tg-select">
                                            <select>
                                                <option value="none">Select Category</option>
                                                <?php
                                                    // foreach($Category as $cat){
                                                ?>
                                                        <option value="<?php echo $cat->id; ?>"><?php echo $cat->title; ?></option>
                                                <?php
                                                    // }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="tg-btn" type="button">Search Now</button>
                                </fieldset> -->
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