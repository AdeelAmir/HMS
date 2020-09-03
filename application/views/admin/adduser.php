<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Dashboard | Add User</title>

    <?php include 'fixed/links.php'; ?>
</head>

<body id="page-top">
<nav class="navbar navbar-expand navbar-dark  static-top" style="background: #0277bd;">
    <?php include 'fixed/navbar.php'; ?>
</nav>
<div id="wrapper">
    <?php
        $page = 'user';
        include 'fixed/sidebar.php';
    ?>

    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                   <b>User</b>
                </li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row" style="margin-top: 10vh;">
                <!-- Start of Form -->
                <div class="col-xs-12 col-md-3"></div>
                <div class="col-xs-12 col-md-6">
                    <form action="#" id="addDepartment" method="post">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <label for="_dept">Name:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="text" class="form-control req-field" placeholder="Full Name" name="_name" id="_name" value="" />
                                </div>
                                <div id="resp1" style="display: none; margin-top: -10px; margin-bottom: 10px;"></div>
                            </div>

                            <div class="col-md-12">
                                <label for="_dept">Phone:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="text" class="form-control req-field" placeholder="Phone" name="_phone" id="_phone" value="" />
                                </div>
                                <div id="resp1" style="display: none; margin-top: -10px; margin-bottom: 10px;"></div>
                            </div>

                            <div class="col-md-12">
                                <label for="_dept">Email:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="email" class="form-control req-field" placeholder="Email" name="_email" id="_email" value="" />
                                </div>
                                <div id="resp1" style="display: none; margin-top: -10px; margin-bottom: 10px;"></div>
                            </div>

                            <div class="col-md-12">
                                <label for="_dept">Password:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="password" class="form-control req-field" placeholder="Password" name="_pass" id="_pass" value="" />
                                </div>
                                <div id="resp1" style="display: none; margin-top: -10px; margin-bottom: 10px;"></div>
                            </div>

                            <div class="col-md-12">
                                <label for="_dept">Confirm Password:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="password" class="form-control req-field" placeholder="Confirm Password" name="_confirmpass" id="_confirmpass" value="" />
                                </div>
                                <div id="resp1" style="display: none; margin-top: -10px; margin-bottom: 10px;"></div>
                            </div>
                            <div id="resp" style="margin-top: -10px; margin-bottom: 10px;"></div>
                            
                            <div class="col-md-12 text-center">
                                <input type="button" value="Add" name="add_btn" id="add_btn" class="btn btn-md save-btn" onclick="Add();" />
                            </div>
                            <div class="col-md-12 mt-5 ml-4">
                                <div class="spinner mt-5" style="display: none;" id="confirmActionSpinner"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End of Form -->
            </div>
        </div>

        <!-- /.container-fluid -->
        <?php include 'fixed/footer_2.php'; ?>
    </div>
    <!-- /.content-wrapper -->
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<?php include 'fixed/logoutModel.php'; ?>

<script src="<?= assets_url('assets/js/sb-admin.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
        $("#_pass").on("keyup", function(){
            checkPass();
        });
        $("#_confirmpass").on("keyup", function(){
            checkPass();
        });
    });

    //Checking new and confirm password code...
    function checkPass()
    {
        if($("#_pass").val() === $("#_confirmpass").val())
        {
            $("#resp").html("Password Matched").css("color", "green");
            $("#add_btn").prop("disabled", false);
        }
        else
        {
            $("#resp").html("Password not Matched").css("color", "red");
            $("#add_btn").prop("disabled", true);
        }
    }

    function Add(){
        if(formValidator("#addDepartment") === 0){
            $("#confirmActionSpinner").css('display', '');
            let name     = $("#_name").val();
            let phone    = $("#_phone").val();
            let email    = $("#_email").val();
            let password = $("#_pass").val();
            $.ajax({
                url:'<?php echo base_url() . 'Users/AddUsers' ?>',
                method: 'post',
                data: { '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', Name : name, Phone : phone, Email : email, Password : password },
                success: function(response){
                    if(jQuery.trim(response) === "Success"){
                        $("#confirmActionSpinner").css('display', 'none');
                        setTimeout(function () {
                            window.location.replace('<?= base_url('Users/'); ?>');
                        }, 1000);
                    }
                    else{
                        $.alert('An unhandled error occurred');
                    }
                }
            });
        }
    }

</script>
</body>
</html>