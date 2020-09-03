<!-- Sidebar -->
<style>
    .navbar-nav .nav-item.active .nav-link {
        color: #039be5;
        background: white;
    }
    .sidebar .nav-item .nav-link {
        color: #ffffff;
    }
    .dropdown-header {
        color: #28a745;
    }
    .dropdown-item > hover {
        background:#28a745;
    }
</style>

<ul class="sidebar navbar-nav" style="background-color: #2c4031;">
    <?php
    if($page == 'dashboard'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="<?= base_url('Dashboard'); ?>" >
                <i class="fas fa-fw fa-tachometer-alt" ></i>
                <span>Dashboard</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Dashboard'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu Patient List - start -->

    <?php
    if($page == 'patientlist'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="#" >
                <i class="fa fa-user-md" ></i>
                <span>User List</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="#" >
                <i class="fa fa-user-md" ></i>
                <span>User List</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu Patient List - end -->

    <!-- SideMenu Department - start -->

    <?php
    if($page == 'category'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="<?= base_url('Category'); ?>" >
                <i class="fa fa-building-o" ></i>
                <span>Category</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Category'); ?>" >
                <i class="fa fa-building-o" ></i>
                <span>Category</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu Department - end -->

    <!-- SideMenu Department - start -->

    <?php
    if($page == 'city'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="<?= base_url('City'); ?>" >
                <i class="fa fa-building-o" ></i>
                <span>City</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('City'); ?>" >
                <i class="fa fa-building-o" ></i>
                <span>City</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu Department - end -->

    <!-- SideMenu User - start -->

    <?php
    if($page == 'user'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="<?= base_url('Users'); ?>" >
                <i class="fa fa-user" ></i>
                <span>User</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Users'); ?>" >
                <i class="fa fa-user" ></i>
                <span>User</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu User - end -->

</ul>