<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Change Password</title>
    <?php include 'fixed/links.php'; ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#cnp").on("keyup", function(){
                checkPass();
            });
            $("#np").on("keyup", function(){
                checkPass();
            });

            $("#op").on("keyup", function(){
                checkOldPass();
            });
        });

        //Checking new and confirm password code...
        function checkPass()
        {
            if($("#np").val() === $("#cnp").val())
            {
                $("#resp").html("Password Matched").css("color", "green");
                $("#btn_submit").prop("disabled", false);
            }
            else
            {
                $("#resp").html("Password not Matched").css("color", "red");
                $("#btn_submit").prop("disabled", true);
            }
        }

        //Checking old password code...
        function checkOldPass()
        {
            let pass = $('#op').val();
            let role = 'admin';
            $.ajax({
                type: "POST",
                url: "<?= base_url('Authentification/CheckOldPassword')?>",
                data: { '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', password : pass }
            }).done(function(data){
                if(jQuery.trim(data) === "Matched")
                {
                    $("#resp1").html("Password Matched").css({"color": "green", "display": "block"});
                    $("#btn_submit").prop("disabled", false);
                }
                else
                {
                    $("#resp1").html("Password Not Matched").css({"color": "red", "display": "block"});
                    $("#btn_submit").prop("disabled", true);
                }
            });
        }

        //Change Password code...
        function changePass()
        {
            let pass = $('#np').val();

            if(pass.length < 7){
                alert('Length of password must be minimum 8 characters!');
                $('#np').val('').focus();
                $('#cnp').val('');
                return;
            }

            let check = confirm('Are you sure, you want to change your password?');
            if(check){
                $.ajax
                ({
                    type: "POST",
                    url: "<?= base_url('Authentification/UpdatePassword')?>",
                    data: { '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', Password : pass }
                }).done(function(data){
                    if(jQuery.trim(data) === 'Success'){
                        $("#success-alert").html("<div class='col-md-12 alert alert-success' style='font-size: 19px;'><strong>Message:&nbsp;&nbsp;</strong>&nbsp;Password updated and saved</div>");
                        window.setTimeout(function(){
                            window.location.replace("<?= base_url('Authentification')?>");
                        },1500);
                    }
                    else{
                        $("#success-alert").html("<div class='col-md-12 alert alert-danger' style='font-size: 19px;'><strong>Message:&nbsp;&nbsp;</strong> An unhandled error occurred</div>");
                    }
                });
            }
        }
    </script>
</head>
<body id="page-top">
<nav class="navbar navbar-expand navbar-dark  static-top" style="background: #0277bd;">
    <?php include 'fixed/navbar.php'; ?>
</nav>
<div id="wrapper">
    <?php
        $page = 'changePass';
        include 'fixed/sidebar.php';
    ?>

    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <b>  <a href="<?= base_url('Dashboard'); ?>" style="color: #0277bd">Dashboard</a> </b>
                </li>
                <li class="breadcrumb-item active status">Change Password</li>
            </ol>
            <!-- Success Alert -->
            <div id="success-alert"></div>
            <div class="row">
                <!-- Change password form -->
                <div class="col-md-3"></div>
                <form action="#" method="POST" enctype="multipart/form-data" id="myform" class="col-md-6">
                    <!-- Old Password start here -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" style="color: #0277bd;" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Old Password" name="oldpass" id="op" required />
                    </div>
                    <div id="resp1" style="display: none; margin-top: -10px; margin-bottom: 10px;"></div>
                    <!-- Old Password end here -->
                    <!-- New Password start here -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" style="color: #0277bd;" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="New Password" name="newpass" minlength="8" id="np" required />
                    </div>
                    <!-- New Password end here -->
                    <!-- Confirm Password start here -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"style="color: #0277bd;" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Confirm New Password" name="cnewpass" minlength="8" id="cnp" required />
                    </div>
                    <div id="resp" style="margin-top: -10px; margin-bottom: 10px;"></div>
                    <!-- Confirm Password end here -->
                    <div style="text-align: center;">
                        <input type="button" value="Save" name="btn_submit" id="btn_submit" class="save-btn" onclick="changePass();" />
                    </div>
                </form>
                <!-- Password Change Ends here -->
                <div class="col-md-3"></div>
            </div>
        </div>
        <?php include 'fixed/footer_2.php'; ?>
    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<?php include 'fixed/logoutModel.php'; ?>

<script src="<?= assets_url('assets/js/sb-admin.min.js'); ?>"></script>
</body>
</html>