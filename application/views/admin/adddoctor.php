<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Dashboard | Add Doctor</title>

    <?php include 'fixed/links.php'; ?>
</head>

<body id="page-top">
<nav class="navbar navbar-expand navbar-dark  static-top" style="background: #0277bd;">
    <?php include 'fixed/navbar.php'; ?>
</nav>
<div id="wrapper">
    <?php
        $page = 'doctor';
        include 'fixed/sidebar.php';
    ?>

    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                   <b>Doctor</b>
                </li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row" style="margin-top: 10vh;">
                <!-- Start of Form -->
                <div class="col-xs-12 col-md-3"></div>
                <div class="col-xs-12 col-md-6">
                    <form action="#" id="addDoctor" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="_name">Name:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="text" class="form-control req-field" placeholder="Doctor Name" name="_name" id="_name" value="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_email">Email:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="email" class="form-control req-field" placeholder="Email" name="_email" id="_email" value="" />
                                </div>
                                <div id="resp1" style="display: none; margin-top: -10px; margin-bottom: 10px;"></div>
                            </div>
                            <div class="col-md-12">
                                <label for="_pass">Password:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="password" class="form-control req-field" placeholder="*******" name="_pass" id="_pass" value="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_address">Address:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="text" class="form-control req-field" placeholder="Address" name="_address" id="_address" value="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_address">Phone:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="text" class="form-control req-field" placeholder="Phone" name="_phone" id="_phone" value="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_profile">Profile:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-users" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="text" class="form-control req-field" placeholder="Profile" name="_profile" id="_profile" value="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_dept">Department:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building-o" style="color: #0277bd;"></i></span>
                                    </div>
                                    <select id="_dept" class="form-control req-field" name="_dept">
                                        <?php
                                            echo '<option value="" selected disabled>Select Department</option>';
                                            foreach ($Departments as $department){
                                                echo '<option value="' . $department->id . '">' . $department->title . '</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="_dept">Picture:</label>
                                <div>
                                    <img id="uploadImage" src="<?= assets_url('assets/img/doctor/doctor_dummy.jpg'); ?>" width="150" height="150" />
                                </div>
                                <br/>
					            <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-file" style="color: #0277bd;"></i></span>
                                        </div>
                                        <input type="file" accept="image/gif, image/jpeg, image/png" class="form-control req-field" name="_pic" id="_pic" onchange="readURL(this);" />
                                    </div>
                                </div>
                            </div>
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
        $("#_email").on("keyup", function(){
            checkDoctorEmail();
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#uploadImage')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function checkDoctorEmail()
    {
        let email = $('#_email').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('Doctor/CheckDoctorEmail')?>",
            data: { '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', Email : email }
        }).done(function(data){
            if(jQuery.trim(data) === "Success")
            {
                $("#resp1").html("Email already exists!").css({"color": "red", "display": "block"});
                $("#add_btn").prop("disabled", true);
            }
            else
            {
                $("#resp1").html("");
                $("#add_btn").prop("disabled", false);
            }
        });
    }

    function Add(){
        if(formValidator("#addDoctor") === 0){
            $("#confirmActionSpinner").css('display', '');
            let name = $("#_name").val();
            let email = $("#_email").val();
            let password = $("#_pass").val();
            let address = $("#_address").val();
            let phone = $("#_phone").val();
            let profile = $("#_profile").val();
            let department = $("#_dept option:selected").val();
            let picture = $("#_pic").prop('files')[0];
            
            // Start of Form Data
            let formData = new FormData();
            formData.append('<?php echo $this->security->get_csrf_token_name(); ?>', '<?php echo $this->security->get_csrf_hash(); ?>');
            formData.append('Name', name);
            formData.append('Email', email);
            formData.append('Password', password);
            formData.append('Address', address);
            formData.append('Phone', phone);
            formData.append('Profile', profile);
            formData.append('Department', department);
            formData.append('file', picture);
            
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Doctor/AddDoctor'); ?>",
                processData: false,
                contentType: false,
                dataType : 'script',
                data: formData
            }).done(function(data){
                if(jQuery.trim(data) === 'Success'){
                    $("#confirmActionSpinner").css('display', 'none');
                    setTimeout(function () {
                        window.location.replace('<?= base_url('Doctor/'); ?>');
                    }, 1000);
                }
                else{
                    $.alert('An unhandled error occurred!');
                }
            });
        }
    }

</script>
</body>
</html>