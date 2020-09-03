<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Dashboard | Edit Lab Test</title>

    <?php include 'fixed/links.php'; ?>
</head>

<body id="page-top">
<nav class="navbar navbar-expand navbar-dark  static-top" style="background: #0277bd;">
    <?php include 'fixed/navbar.php'; ?>
</nav>
<div id="wrapper">
    <?php
        $page = 'labtest';
        include 'fixed/sidebar.php';
    ?>

    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                   <b>Doctor</b>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row" style="margin-top: 10vh;">
                <!-- Start of Form -->
                <div class="col-xs-12 col-md-3"></div>
                <div class="col-xs-12 col-md-6">
                    <form action="#" id="editLabTest" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="_test">Test:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="text" class="form-control req-field" placeholder="Test" name="_test" id="_test" value="<?= $title; ?>" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_rate">Rate:</label>
					            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" style="color: #0277bd;"></i></span>
                                    </div>
                                    <input type="text" class="form-control req-field" placeholder="Rate" name="_rate" id="_rate" value="<?= $rate; ?>" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_file">Template:</label>
                                <br/>
					            <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-file" style="color: #0277bd;"></i></span>
                                        </div>
                                        <input type="file" accept=".doc, .docx" class="form-control" name="_file" id="_file" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="button" value="Edit" name="edit_btn" id="edit_btn" class="btn btn-md save-btn" onclick="Edit();" />
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
    function Edit(){
        if(formValidator("#editLabTest") === 0){
            $("#confirmActionSpinner").css('display', '');
            let id = '<?= $id; ?>';
            let title = $("#_test").val();
            let rate = $("#_rate").val();
            let file = $("#_file").prop('files')[0];
            let oldFile = '<?= $file; ?>';
            
            // Start of Form Data
            let formData = new FormData();
            formData.append('<?php echo $this->security->get_csrf_token_name(); ?>', '<?php echo $this->security->get_csrf_hash(); ?>');
            formData.append('Id', id);
            formData.append('Title', title);
            formData.append('Rate', rate);
            formData.append('file', file);
            formData.append('oldFile', oldFile);
            
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('LabTest/EditLabTest2'); ?>",
                processData: false,
                contentType: false,
                dataType : 'script',
                data: formData
            }).done(function(data){
                if(jQuery.trim(data) === 'Success'){
                    $("#confirmActionSpinner").css('display', 'none');
                    setTimeout(function () {
                        window.location.replace('<?= base_url('LabTest/'); ?>');
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