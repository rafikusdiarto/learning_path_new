<!-- <a class="logo" href="<?=base_url('dashboard')?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a> -->

<!-- <a href="<?=base_url('dashboard')?>" class="logo">
    <span class="logo-mini"><b>OES</b></span>
    <span class="logo-lg">Learning Path System</span>
</a> -->

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" data-toggle="push-menu">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, <?=$user->first_name?></span>
            <p>Member Since <?=date('M, Y', $user->created_on)?></p>
            <img class="img-profile rounded-circle"
                src="<?=base_url()?>assets/dist/img/usersys-min.png">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?=base_url()?>users/edit/<?=$user->id?>">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                <?=$this->ion_auth->is_admin() ? "Edit Profile" : "Change Password" ?>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?=base_url('logout')?>"" id="logout">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>