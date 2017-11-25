<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user8-128x128.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Sigit</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>                
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Ubah Profil</span>
                </a>                
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-key"></i> <span>Ubah Kata Sandi</span>
                </a>                
            </li>
			<li class="treeview">
                <a href="<?php echo site_url('auth/logout') ?>">
                    <i class="fa fa-windows"></i><span>Keluar</span>
                </a>                
            </li>            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">