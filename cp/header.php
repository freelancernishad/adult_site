<?php
session_start();

/* if(! isset($_SESSION["login"])){
	header('location:../');
} */

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GraphicCutOut | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
  <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/css/tempusdominus-bootstrap-4.min.css">
	  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/css/select2.min.css">
  <link rel="stylesheet" href="plugins/css/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/css/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/css/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="plugins/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/css/daterangepicker.css">

	<link rel="stylesheet" href="plugins/css/dataTables.bootstrap4.min.css">
	<script src="plugins/js/jquery.min.js"></script>

<style>ul.pagination {
    float: right;
}
img.ProfilePiture {
    width: 40px;
    border-radius: 50%;
}

div#dataTable_length label select {
    /* display: block; */
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    float: left;
}
div#dataTable_length {
    width: 50%;
    float: left;
}

div#dataTable_filter {
    width: 50%;
    float: right;
}
div#dataTable_length label {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: space-around;
    justify-content: center;
    align-items: center;
    width: 212px;
}
div#dataTable_info {
    width: 50%;
    float: left;
}

div#dataTable_paginate {
    width: 50%;
    float: right;
}

div#dataTable_paginate span a {
    background: #3a2b2b;
    padding: 4px 13px;
    font-size: 19px;
    color: white;
    border-radius: 3px;
}
a#dataTable_previous {
    background: #3a2b2b;
    padding: 4px 13px;
    font-size: 19px;
    color: white;
    border-radius: 3px;
    margin-right: 3px;
}

a#dataTable_next {
    background: #3a2b2b;
    padding: 4px 13px;
    font-size: 19px;
    color: white;
    border-radius: 3px;
    margin-left: 3px;
}
div#dataTable_paginate a {
    cursor: pointer;
}
.accountImage img {
    border-radius: 50%;
}
label.AccountImage {
    background: #007bff;
    margin: 0;
    padding: 10px;
    border-radius: 3px;
    color: white;
    cursor: pointer;
    margin-top: 20px;
}
textarea.form-control.fontSize {
    font-size: 12px;
}th {
    font-size: 12px !important;
}li.nav-item.submenu.menu-open {
    background: #ababab30;
}li.dropdown.user.user-menu {
    display: flex;
    flex-direction: row;
    align-content: flex-end;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
				<li class="dropdown user user-menu">
            <a href="#" style='color: #020202;' class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php  if(isset($_SESSION["login"])){
	echo $_SESSION["login"];
}?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="float-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="float-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Company name</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">



                <!-- Sidebar Menu -->
                <nav class="mt-2">
		
				
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php" class="nav-link menuList">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>
                        </li>
						
		
						
         <li class="nav-item toggolMenu">
            <a href="#" class="nav-link menuList">
              <i class="fas fa-map-marker-alt"></i> &nbsp;
              <p>
              Location Settings
                <i class="fas fa-angle-left right"></i>
          
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item submenu">
                <a href="country_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Counters</p>
                </a>
              </li>
              <li class="nav-item submenu">
                <a href="states_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>States</p>
                </a>
              </li>
              <li class="nav-item submenu">
                <a href="cities_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cities</p>
                </a>
              </li>
             
           
            
           
            </ul>
          </li>






												
                        <li class="nav-item">
            <a href="models_account_list.php" class="nav-link menuList">
              <i class="fas fa-user-plus"></i> &nbsp;
              <p>
              Models Accounts
               
          
              </p>
            </a>
     
          </li>
			
                        <li class="nav-item">
                            <a href="escort_profile.php" class="nav-link menuList">
                                <i class="fas fa-user-friends"></i> &nbsp;
                                <p>
                                   Escort Profiles
                                </p>
                            </a>
                        </li>
						
			
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link menuList">
                                <i class="fas fa-user-cog"></i> &nbsp;
                                <p>
                                   User Accounts
                                </p>
                            </a>
                        </li>
						
			
                        <li class="nav-item toggolMenu">
            <a href="#" class="nav-link menuList">
              <i class="fab fa-paypal"></i> &nbsp;
              <p>
              Prizing Plan
                <i class="fas fa-angle-left right"></i>
          
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item submenu">
                <a href="Prizing_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Prizing Plan</p>
                </a>
              </li>
              <li class="nav-item submenu">
                <a href="Regions_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Regions</p>
                </a>
              </li>
           
             
           
            
           
            </ul>
          </li>
						
			
                        <li class="nav-item">
                            <a href="live_cams_profile.php" class="nav-link menuList">
                                <i class="fas fa-user-shield"></i> &nbsp;
                                <p>
                                   Live Cams Profiles
                                </p>
                            </a>
                        </li>
						
	
			
                        <li class="nav-item">
                            <a href="E-mail.php" class="nav-link menuList">
                                <i class="fas fa-envelope"></i> &nbsp;
                                <p>
                                   Email
                                </p>
                            </a>
                        </li>
				
	
			
                        <li class="nav-item">
                            <a href="bulk_sms.php" class="nav-link menuList">
                                <i class="far fa-comment-alt"></i> &nbsp;
                                <p>
                                   Bulk SMS
                                </p>
                            </a>
                        </li>
						
	
			
                        <li class="nav-item">
                            <a href="seo_settings.php" class="nav-link menuList">
                                <i class="fas fa-cogs"></i> &nbsp;
                                <p>
                                   SEO Settings
                                </p>
                            </a>
                        </li>
						
	
			
                        <li class="nav-item">
                            <a href="system.php" class="nav-link menuList">
                                <i class="fas fa-sync-alt"></i> &nbsp;
                                <p>
                                   System
                                </p>
                            </a>
                        </li>
						
	
			
                        <li class="nav-item">
                            <a href="account_setting.php" class="nav-link menuList">
                                <i class="fas fa-cog"></i> &nbsp;
                                <p>
                                   Account Settings
                                </p>
                            </a>
                        </li>
						
	
			
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link menuList">
                                <i class="fas fa-sign-out-alt"></i> &nbsp;
                                <p>
                                   Logout
                                </p>
                            </a>
                        </li>
						

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>