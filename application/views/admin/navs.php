<?php
$username =  $this->session->userdata("nama_adm");
$nama = $this->db->query("SELECT nama FROM admin WHERE username = '" . $username . "'")->result_array();

?>


<div class="navbar-fixed">
    <nav class="col-purple">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo logo-nav-adm-mhs">AI</a>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?= site_url("loginadm/logout"); ?>">Logout<i class="material-icons right">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<ul id="slide-out" class="sidenav sidenav-fixed">
    <div class="jarak col-purple" style="height: 64px;"></div>
    <li>
        <div class="user-view">
            <div class="background">
                <img src="<?= base_url("asset/img/dsktp.png"); ?>">
            </div>
            <a href="#user"><img class="circle" src="<?= base_url("asset/img/logo.png"); ?>"></a>
            <a href="#name"><span class="white-text name"><?php print_r($nama[0]["nama"]); ?></span></a>
            <a href="#email"><span class="white-text email"><?= $username; ?></span></a>
        </div>
    </li>
    <li><a href="<?= site_url("admin"); ?>"><i class="material-icons">dashboard</i>Dashboard</a></li>
    <li><a href="<?= site_url("admin/datamhs"); ?>"><i class="material-icons">folder</i>Mahasiswa</a></li>
</ul>
<!-- <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->