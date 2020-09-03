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

    <!-- SideMenu Student - start -->

    <?php
    if($page == 'student'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="<?= base_url('StudentType/StudentTypeList'); ?>" >
                <i class="fa fa-graduation-cap" ></i>
                <span>Student Type</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('StudentType/StudentTypeList'); ?>" >
                <i class="fa fa-graduation-cap" ></i>
                <span>Student Type</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu Student - end -->

    <!-- SideMenu Country - start -->

    <?php
    if($page == 'country'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="<?= base_url('Country/CountryList'); ?>" >
                <i class="fa fa-flag" ></i>
                <span>Country</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Country/CountryList'); ?>" >
                <i class="fa fa-flag" ></i>
                <span>Country</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu Country - end -->

    <!-- SideMenu City - start -->

    <?php
    if($page == 'city'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="<?= base_url('City/CityList'); ?>" >
                <i class="fas fa-city" ></i>
                <span>City</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('City/CityList'); ?>" >
                <i class="fas fa-city" ></i>
                <span>City</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu City - end -->

    <!-- SideMenu Year - start -->

    <?php
    if($page == 'year'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="<?= base_url('Year/YearList'); ?>" >
                <i class="fa fa-calendar" ></i>
                <span>Year</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Year/YearList'); ?>" >
                <i class="fa fa-calendar" ></i>
                <span>Year</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu Year - end -->

    <!-- SideMenu Filter - start -->

    <?php
    if($page == 'filter'){
        ?>
        <li class="nav-item active" >
            <a class="nav-link" href="<?= base_url('Filter'); ?>" >
                <i class="fa fa-filter" ></i>
                <span>Filter</span>
            </a>
        </li>
        <?php
    }
    else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Filter'); ?>" >
                <i class="fa fa-filter" ></i>
                <span>Filter</span>
            </a>
        </li>
        <?php
    }
    ?>

    <!-- SideMenu Filter - end -->

</ul>