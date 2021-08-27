<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Tell the browser to be responsive to screen width -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
     <meta name="description"
          content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
     <meta name="robots" content="noindex,nofollow">
     <title>Students Care School And Teaching Centre</title>
     <link rel="canonical" href="" />

     <!-- Custom CSS -->
     <link href="../Admin/css/chartist.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../Admin/css/chartist-plugin-tooltip.css">
     <!-- Custom CSS -->
     <link href="../Admin/css/style.css" rel="stylesheet">
     <link href="../Admin/css/style.min.css" rel="stylesheet">
     <link href="../Admin/css/bootstrap.min.css" rel="stylesheet">

<body>


     <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
          data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

          <header class="topbar" data-navbarbg="skin5">
               <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin6">

                         <a class="navbar-brand" href="dashbord">
                              <!-- Logo icon -->
                              <b class="logo-icon">
                                   <!-- Dark Logo icon -->
                                   <img src="../Admin/img/logo-icon.png" alt="homepage" />
                              </b>
                              <!--End Logo icon -->
                              <!-- Logo text -->

                              <span class="logo-text">
                                   <!-- dark Logo text -->

                                   <img src="../Admin/img/title_icon.jpg" alt="homepage" />
                              </span>
                         </a>

                         <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                              href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    </div>

                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                         <ul class="navbar-nav d-none d-md-block d-lg-none">
                              <li class="nav-item">
                                   <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                              </li>
                         </ul>

                         <ul class="navbar-nav ml-auto d-flex align-items-center">


                              <li class=" in">
                                   <form role="search" class="app-search d-none d-md-block mr-3">
                                        <input type="text" placeholder="Search..." class="form-control mt-0">
                                        <a href="" class="active">
                                             <i class="fa fa-search"></i>
                                        </a>
                                   </form>
                              </li>

                              <li>
                                   <a class="profile-pic" href="#">
                                        <img src="../../Admin/img/user.jpg" alt="user-img" width="36"
                                             class="img-circle"><span class="text-white font-medium">

                                             <?php
                                             if (!empty(session()->get('user'))) {
                                                  echo session()->get('user');
                                             }
                                             ?>

                                        </span></a>
                              <li><a style="color:white;margin-right:10px" href="<?= base_url('admin/logout') ?>">
                                        <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                                   </a></li>
                              </li>

                         </ul>
                    </div>
               </nav>
          </header>

          <aside class="left-sidebar" data-sidebarbg="skin6">
               <!-- Sidebar scroll-->
               <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                         <ul id="sidebarnav" style="background: #2F323E">
                              <!-- User Profile-->
                              <li class="sidebar-item pt-2">
                                   <a style="cursor: none;" class="sidebar-link waves-effect waves-dark sidebar-link"
                                        aria-expanded="false">
                                        <i style="color:#FFFFFF" class="far fa-meh" aria-hidden="true"></i>
                                        <span style="color:#FFF" class="hide-menu"><?php
                                                                                          if (!empty(session()->get('name'))) {
                                                                                               echo session()->get('name');
                                                                                          }
                                                                                          ?>/<?php if (session()->get('level') == 1) {
                                                                                                    echo "Admin";
                                                                                               } else {
                                                                                                    echo "User";
                                                                                               } ?></span>
                                   </a>
                              </li>
                              <li class="sidebar-item pt-2">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/dashbord') ?> " aria-expanded="false">
                                        <i style="color:#FFFFFF" class="far fa-clock" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Dashboard</span>
                                   </a>
                              </li>
                              <?php if (session()->get('level') == 1) { ?>
                                  <li class="sidebar-item">
                                      <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                         href="<?php echo base_url('admin/feerecipt'); ?>" aria-expanded="false">
                                          <i style="color:#FFFFFF" class=" fas fa-dollar-sign" aria-hidden="true"></i>
                                          <span style="color:#FFFFFF" class="hide-menu">Fee Recepit</span>
                                      </a>
                                  </li>
                              <li class=" sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/admitstudent'); ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class="fa fa-user" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Admission Student</span>
                                   </a>
                              </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/admissionfee'); ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class=" fas fa-dollar-sign" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Admission Fee Info</span>
                                   </a>
                              </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/payment'); ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class="fab fa-cc-mastercard" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Student Payment</span>
                                   </a>
                              </li>
                                  <li class="sidebar-item">
                                      <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                         href="<?php echo base_url('admin/studentreg')  ?>" aria-expanded="false">
                                          <i style="color:#FFFFFF" class="fas fa-desktop" aria-hidden="true"></i>
                                          <span style="color:#FFFFFF" class="hide-menu">Student Portal</span>
                                      </a>
                                  </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/tidcard') ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class="fas fa-id-card-alt" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Teacher ID Card</span>
                                   </a>
                              </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/idcard')  ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class="fas fa-id-card-alt" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Student ID Card</span>
                                   </a>
                              </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/notice')  ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class="fas fa-desktop" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Notice</span>
                                   </a>
                              </li>

                              <?php } ?>
                              <li class=" sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/teacher')  ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class="fa fa-user" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Teacher</span>
                                   </a>
                              </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/gallery') ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class=" fas fa-image" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Gallery</span>
                                   </a>
                              </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/course') ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class=" fas fa-list-alt" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Course</span>
                                   </a>
                              </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/admitcard') ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class="fas fa-font" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Admit Card</span>
                                   </a>
                              </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/registration') ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class="far fa-registered" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Registration</span>
                                   </a>
                              </li>
                              <li class="sidebar-item">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="<?php echo base_url('admin/attendence'); ?>" aria-expanded="false">
                                        <i style="color:#FFFFFF" class=" fab fa-autoprefixer" aria-hidden="true"></i>
                                        <span style="color:#FFFFFF" class="hide-menu">Attendence</span>
                                   </a>
                              </li>

                         </ul>

                    </nav>
                    <!-- End Sidebar navigation -->
               </div>
               <!-- End Sidebar scroll-->
          </aside>