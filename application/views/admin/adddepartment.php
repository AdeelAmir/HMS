<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Dashboard | Add Category</title>

    <?php include 'fixed/links.php'; ?>
</head>

<body id="page-top">
<nav class="navbar navbar-expand navbar-dark  static-top" style="background: #0277bd;">
    <?php include 'fixed/navbar.php'; ?>
</nav>
<div id="wrapper">
    <?php
        $page = 'category';
        include 'fixed/sidebar.php';
    ?>

    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                   <b>Category</b>
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
                                <label for="_dept">Title:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building-o" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="text" class="form-control req-field" placeholder="Category Name" name="_dept" id="_dept" value="" />
                                </div>
                                <div id="resp1" style="display: none; margin-top: -10px; margin-bottom: 10px;"></div>
                            </div>
                            <div class="col-md-12">
                                <label for="_desc">Description:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-file-text" style="color: #0277bd;"></i></span>
                                    </div>
                                    <textarea class="form-control" id="_desc" rows="4" placeholder="Description"></textarea>
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
        $("#_dept").on("keyup", function(){
            checkDepartmentName();
        });
    });
    //Checking department name...
    function checkDepartmentName()
    {
        let dept_name = $('#_dept').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('Category/CheckCategoryName')?>",
            data: { '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', DepartmentName : dept_name }
        }).done(function(data){
            if(jQuery.trim(data) === "Success")
            {
                $("#resp1").html("Department name already exists!").css({"color": "red", "display": "block"});
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
        if(formValidator("#addDepartment") === 0){
            $("#confirmActionSpinner").css('display', '');
            let title = $("#_dept").val();
            let description = $("#_desc").val();
            $.ajax({
                url:'<?php echo base_url() . 'Category/AddCategory' ?>',
                method: 'post',
                data: { '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', Title : title, Description : description },
                success: function(response){
                    if(jQuery.trim(response) === "Success"){
                        $("#confirmActionSpinner").css('display', 'none');
                        setTimeout(function () {
                            window.location.replace('<?= base_url('Category/'); ?>');
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