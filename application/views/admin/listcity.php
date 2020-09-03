<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Dashboard | City List</title>

    <?php include 'fixed/links.php'; ?>
</head>

<body id="page-top">
<nav class="navbar navbar-expand navbar-dark  static-top" style="background: #0277bd;">
    <?php include 'fixed/navbar.php'; ?>
</nav>
<div id="wrapper">
    <?php
        $page = 'city';
        include 'fixed/sidebar.php';
    ?>

    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                   <b>City</b>
                </li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-md-12 mt-3">
                    <button type="button" class="btn btn-outline-success float-right" onclick="window.location.href='<?= base_url('City/NewCity'); ?>'"><i class="fa fa-plus" aria-hidden="true"></i> Add City</button>
                </div>
                <div class="col-md-12 text-center">
                    <div class="table-responsive">
                    <table class="table" id="doctorList">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">City Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="spinner" style="display: none;" id="confirmActionSpinner"></div>
                </div>
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
</body>
<script>
    let DoctorTable = null;
    $(document).ready(function () {
        if(DoctorTable !== null){
            DoctorTable.destroy();
        }
        DoctorTable = $("#doctorList").DataTable({
            "processing": true,
            "serverSide": true,
            "paging": true,
            "bPaginate": true,
            "lengthChange": true,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "deferRender": true,
            ajax: {
                "url": "<?php echo site_url("City/CityList") ?>",
                "type": "POST",
                "data": { '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' }
            },
            "columnDefs": [
                {
                    "target" : [0],
                    "orderable" : false,
                }
            ]
        });
        //Removing Searching Option
        $("#doctorList_filter").css('display', 'none');
        //Left align 'showing entries' line
        $("#doctorList_info").css('text-align', 'left').css('padding-top', '0.425em');
        //Leveling pagination buttons
        $("#doctorList_length").css('text-align', 'left');
    });

    function Edit(id) {
        let values = id.split('_');

        let form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "<?= base_url('City/EditCity'); ?>");

        let hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "<?php echo $this->security->get_csrf_token_name(); ?>");
        hiddenField.setAttribute("value", "<?php echo $this->security->get_csrf_hash(); ?>");
        form.appendChild(hiddenField);

        hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "Id");
        hiddenField.setAttribute("value", values[1]);
        form.appendChild(hiddenField);

        document.body.appendChild(form);
        form.submit();
    }

    function Delete(id) {
        let values = id.split('_');
        $("#confirmActionSpinner").css('display', '');
        $.ajax({
            url:'<?php echo base_url() . 'City/DeleteCity' ?>',
            method: 'post',
            data: { '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', Id : values[1] },
            success: function(response){
                if(jQuery.trim(response) === "Success"){
                    $("#confirmActionSpinner").css('display', 'none');
                    DoctorTable.draw();
                }
                else{
                    $.alert('An unhandled error occurred');
                }
            }
        });
    }
</script>
</html>