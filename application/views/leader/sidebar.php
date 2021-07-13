<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">LokerBee</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'index.php/leaderctl' ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'index.php/leaderctl/tugasSaya' ?>">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Daftar Tugas</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'index.php/leaderctl/daftarNotulensi' ?>">
            <i class="fas fa-sticky-note"></i>
            <span>Daftar Notulensi</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'index.php/leaderctl/profile' ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Profile</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'index.php/accountctl/logout' ?>">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            <span>LogOut</span></a>
    </li>
</ul>