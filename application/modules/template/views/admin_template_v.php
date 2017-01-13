<?php
if ($this->lib->login() != "")
$username = ($this->session->userdata['username']);
  {

  }


?>
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 1.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Javice</title>

  <!-- Favicons-->
  <link rel="icon" href="<?php echo base_url(); ?>assets3/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets3/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets3/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->

  <link href="<?php echo base_url(); ?>assets3/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets3/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url(); ?>assets3/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets3/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets3/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="<?php echo base_url(); ?>assets3/images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                      <!--  <li class="bold">
                             <a href="#" class="waves-effect waves-cyan"> Saldo</a>
                        </li>
                        <li>
                              <a href="#" class="waves-effect waves-cyan">  <i class="material-icons">shopping_cart</i></a>
                        </li>
                        <li class="bold">
                             <a href="#" class="waves-effect waves-cyan">Login</a>
                        </li> -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->



  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
              <li class="user-details cyan darken-2">
                  <div class="row">
                      <div class="col col s4 m4 l4">
                          <img src="<?php echo base_url(); ?>assets3/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                      </div>
                      <div class="col col s8 m8 l8">
                          <ul id="profile-dropdown" class="dropdown-content">
                              <li><a href="<?php echo base_url(); ?>login/profile"><i class="mdi-action-face-unlock"></i> Profile</a>
                              </li>
                              <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="<?php echo base_url();?>login/logout"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                              </li>
                          </ul>
                          <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $username;?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                          <p class="user-roal">Administrator</p>
                      </div>
                  </div>
              </li>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">

                    <!--home -->
                    <li class="bold"><a href="<?php echo base_url(); ?>dashboard"><i class="mdi-action-home"></i>Home</a>
                    </li>

                    <!--Kategori -->

                      <li class="li-hover"><div class="divider"></li>
                      <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-hardware-keyboard-arrow-down"></i>Kategori</a>
                          <div class="collapsible-body">
                              <ul>

                                <?php
                                foreach ($query->result() as $row):
                                  $url_category = base_url().'c/'.$row->slug;

                                ?>
                                <li>
                                  <?php echo  anchor($url_category, $row->category);?>

                                <?php endforeach;
                                ?>
                              </li>
                              </ul>
                          </div>
                      </li>

                  </ul>

              </li>

              <!--buka toko/service-->

              <li class="li-hover"><div class="divider"></div></li>

              <li class="bold"><a href="<?php echo base_url(); ?>products/bukatoko"><i class="mdi-action-store"></i> Buka Toko</a>
                  <li class="bold"><a href="<?php echo base_url(); ?>bukaservis"><i class="material-icons">build</i> Buka Service</a>
              </li>



              <li class="li-hover"><div class="divider"></li>
              <li>
              <a href="<?php echo base_url(); ?>cart" class="waves-effect waves-cyan"><i class="material-icons">shopping_cart</i>Keranjang</a>
            </li>
                <li class="li-hover"><div class="divider"></li>
            <li>
            <a href="<?php echo base_url(); ?>sell_transactions" class="waves-effect waves-cyan"><i class="material-icons">redo</i>Transaksi Jual</a>
          </li>
          <li>
          <a href="<?php echo base_url();?>buy_transactions" class="waves-effect waves-cyan"><i class="material-icons">undo</i>Transaksi Beli</a>
        </li>
                              <li class="bold"><a href="<?php echo base_url(); ?>products/me"><i class="material-icons">local_atm</i>products ku</a>
                                  <li class="li-hover"><div class="divider"></li>

              <!--halaman about & bantuan -->

              <li class="li-hover"><div class="divider"></div></li>
              <li class="li-hover">
                  <li class="bold"><a href="<?php echo base_url(); ?>bantuan"><i class="material-icons">info_outline</i> Bantuan</a>
                      <li class="li-hover"><div class="divider"></li>
              </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->



      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <ol class="breadcrumb">

                    <li><a href="<?php echo base_url(); ?>dashboard">Jual Beli</a></li>
                    <li><a href="<?php echo base_url(); ?>service/">Servis</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->

        <div class="container">
          <div class="section">
              <?php $this->load->view($content_view);?>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

          </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->



  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets3/js/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets3/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets3/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets3/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets3/js/plugins/chartist-js/chartist.min.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets3/js/plugins.js"></script>

</body>

</html>
