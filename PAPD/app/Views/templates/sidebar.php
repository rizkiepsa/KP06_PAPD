<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PAPD</sup></div>
    </a>

    <?php if (in_groups('admin')) : ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User Management
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>User List</span></a>
        </li>

        <!-- Nav Item - Approved List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/approve'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Approved List</span></a>
        </li>

        <!-- Nav Item - Unapproved List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/unapprove'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Unapproved List</span></a>
        </li>

        <!-- Nav Item - Subdomain List-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/subdomain'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Subdomain</span></a>
        </li>

        <!-- Nav Item - Form Subdomain-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/formSubdomain'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Form Subdomain</span></a>
        </li>

    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>

    <!-- Nav Item - User Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>User Profile</span></a>
    </li>

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/edit'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <!-- Nav Item - Form 1 -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/form1'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Form 1</span></a>
    </li>

    <!-- Nav Item - Form 2 -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/form2'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Form 2</span></a>
    </li>

    <!-- Nav Item - Form 3 -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/form3'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Form 3</span></a>
    </li>

    <!-- Nav Item - Tampil Form -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/tampil'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Data Form</span></a>
    </li>

    <!-- Nav Item - Tampil Form 2 -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/tampil2'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Data Form opsi 2</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>