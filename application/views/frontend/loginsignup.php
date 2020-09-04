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
        <div class="container">
            <div class="row">
                <div id="tg-content" class="tg-content">
                    <div class="tg-loginsignup">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-logingarea">
                                <h2>Login Now</h2>
                                <form class="tg-formtheme tg-formloging">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="_username" id="_username" class="form-control"
                                                       placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="password" name="password" id="_password" class="form-control"
                                                       placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="loginResponse" style="color: red; margin-top: -10px;margin-bottom: 10px; opacity: 0.6;"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="tg-btn" type="button" onclick="Login();">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <div class="tg-logingarea">
                                <h2>Register Now</h2>
                                <form class="tg-formtheme tg-formregister" id="registerUserForm" style="padding: 20px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-pencil"></i>
                                                <input type="text" class="form-control req-field"
                                                       placeholder="Full Name" name="_name" id="_name" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-phone"></i>
                                                <input type="text" class="form-control req-field" placeholder="Phone"
                                                       name="_phone" id="_phone" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-envelope"></i>
                                                <input type="email" class="form-control req-field" placeholder="Email"
                                                       name="_email" id="_email" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-lock"></i>
                                                <input type="password" class="form-control req-field"
                                                       placeholder="Password" name="_pass" id="_pass" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-lock"></i>
                                                <input type="password" class="form-control req-field"
                                                       placeholder="Confirm Password" name="_confirmpass"
                                                       id="_confirmpass" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="resp" style="margin-top: -10px; margin-bottom: 10px;"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="tg-btn" type="button" style="background: #00CC67 !important;"
                                                    onclick="Add();">Register
                                            </button>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 15px;">
                                            <div class="alert alert-success" id="success-alert-register"
                                                 style="display: none;">
                                                <strong>Message</strong>&nbsp;&nbsp;<span>User registered successfully</span>
                                            </div>
                                            <div class="alert alert-danger" id="error-alert-register"
                                                 style="display: none;">
                                                <strong>Message</strong>&nbsp;&nbsp;<span>User registered failed</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <strong class="tg-logo"><a href="javascript:void(0);"><img
                                                src="<?php echo assets_url('assets_2/images/logof.png'); ?>"
                                                alt="image description"></a></strong>
                                <div class="tg-description">
                                    <p>Ads your product and sell online</p>
                                </div>
                                <div class="tg-followus">
                                    <strong>Follow Us:</strong>
                                    <ul class="tg-socialicons">
                                        <li class="tg-facebook"><a href="javascript:void(0);"><i
                                                        class="fa fa-facebook"></i></a></li>
                                        <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        <li class="tg-linkedin"><a href="javascript:void(0);"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        <li class="tg-googleplus"><a href="javascript:void(0);"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a>
                                        </li>
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
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
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
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
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
                        <span class="tg-iconseprator"><i><img
                                        src="<?php echo assets_url('assets_2/images/icons/img-36.png'); ?>"
                                        alt="image description"></i></span>
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
<script type="text/javascript">
    $(document).ready(function () {
        $("#_pass").on("keyup", function () {
            checkPass();
        });

        $("#_confirmpass").on("keyup", function () {
            checkPass();
        });

        $("#_password").on("keypress", function (e) {
            if (e.which === 13) {
                Login();
            }
        });
    });

    //Checking new and confirm password code...
    function checkPass() {
        if ($("#_pass").val() === $("#_confirmpass").val()) {
            $("#resp").html("Password Matched").css("color", "green");
            $("#add_btn").prop("disabled", false);
        } else {
            $("#resp").html("Password not Matched").css("color", "red");
            $("#add_btn").prop("disabled", true);
        }
    }

    function Add() {
        if (formValidator("#registerUserForm") === 0) {
            let name = $("#_name").val();
            let phone = $("#_phone").val();
            let email = $("#_email").val();
            let password = $("#_pass").val();
            $.ajax({
                url: '<?php echo base_url() . 'Frontend/AddUsers' ?>',
                method: 'post',
                data: {
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                    Name: name,
                    Phone: phone,
                    Email: email,
                    Password: password
                },
                success: function (response) {
                    if (jQuery.trim(response) === "Success") {
                        $("#success-alert-register").show();
                        setTimeout(function () {
                            $("#success-alert-register").hide();
                            window.location.reload();
                        }, 2000);
                    } else {
                        $("#error-alert-register").show();
                        setTimeout(function () {
                            $("#error-alert-register").hide();
                            window.location.reload();
                        }, 2000);
                    }
                }
            });
        }
    }

    function Login() {
        let NotifyMessage = '<div id="notify" class="alert alert-danger" ><a href="#" class="close" data-dismiss="alert">&times;</a> <div class="message">Invalid Username or Password!</div></div>';
        let user = $("#_username").val().toLowerCase();
        let pass = $('#_password').val();
        let Remember = "false";
        $.ajax({
            type: 'POST',
            url: '<?= base_url('Authentification/checkLogin2'); ?>',
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                userName: user,
                passWord: pass,
                remember_me: Remember
            },
            success: function (data) {
                if (jQuery.trim(data) === 'Success') {
                    window.location.href = '<?= base_url('/'); ?>';
                } else {
                    $("#loginResponse").html(NotifyMessage);
                }
            }
        });
    }
</script>
</body>
</html>