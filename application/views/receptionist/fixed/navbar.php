<style>
    .bg-dark{
        background: #03a9f4;
    }
</style>

<a class="navbar-brand mr-1" href="<?= base_url('Dashboard'); ?>">Ali Hospital</a>
<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle">
    <i class="fas fa-bars"></i>
</button>
<!-- Navbar Search -->
<div class="d-md-inline-block ml-auto"></div>
<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0" style="color:#404E67" >
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" style="color:#ffffff" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>Receptionist</span>
            <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?= base_url('Authentification/ChangePassword'); ?>">
                <i class="fa fa-user-o"></i>
                Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fa fa-sign-out"></i>
                Logout
            </a>
        </div>
    </li>
</ul>