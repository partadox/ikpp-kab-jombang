<?= $this->extend('layout/main') ?>
<?= $this->section('nav') ?>
<nav class="navbar-custom">
    <ul class="navbar-right list-inline float-right mb-0">

        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
            <div id="clock"></div>
        </li>
        
        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
            <a href="javascript:void(0);"> Halo, <?= session()->get('nama') ?> </a>
        </li>

        <li class="dropdown notification-list list-inline-item">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i style="color:#D49414; font-size: 30px;" class="fa fa-user-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <a class="dropdown-item text-danger" href="#" id="logout"><i class="mdi mdi-power text-danger"></i> Keluar</a>
                </div>
            </div>
        </li>

    </ul>

    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>

    </ul>

</nav>
<?= $this->endSection('nav') ?>


<?= $this->section('menu') ?>
<li class="menu-title">Dashboard</li>
<li>
    <a href="<?= base_url('auth/dashboard') ?>" class="waves-effect">
        <i class="icon-accelerator"></i> <span> Dashboard </span>
    </a>
</li>

<li class="menu-title">Menu</li>
<li>
    <a href="<?= base_url('auth/ikpp') ?>" class="waves-effect">
        <i class="mdi  mdi-file-document"></i> <span> IKPP </span>
    </a>
</li>
<li>
    <a href="<?= base_url('auth/ikm') ?>" class="waves-effect">
        <i class="mdi mdi-file-document"></i> <span> API IKM </span>
    </a>
</li>
<li>
    <a href="<?= base_url('auth/user') ?>" class="waves-effect">
        <i class="mdi mdi-account"></i> <span> User Management </span>
    </a>
</li>

<?= $this->endSection('menu') ?>