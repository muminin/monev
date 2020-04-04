<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("assets/"); ?>assets/img/favicon.ico" />
    <link href="<?php echo base_url("assets/"); ?>assets/css/loader.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo base_url("assets/"); ?>fonts/XRXV3I6Li01BKofINeaB.woff2" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/"); ?>fonts/XRXW3I6Li01BKofA6sKUYevI.woff2" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/"); ?>fonts/XRXW3I6Li01BKofAjsOUYevI.woff2" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url("assets/"); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/"); ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo base_url("assets/"); ?>plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/"); ?>assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url("assets/"); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                <i data-feather="menu"></i>
            </a>
            <ul class="navbar-item flex-row">
                <li class="nav-item align-self-center page-heading">
                    <div class="page-header">
                        <div class="page-title">
                            <h3><?php echo !empty($head) ? $head : ""; ?></h3>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="navbar-item flex-row search-ul">&nbsp;</ul>

            <ul class="navbar-item flex-row navbar-dropdown">
                <li class="nav-item dropdown language-dropdown more-dropdown">&nbsp;</li>

                <li class="nav-item dropdown message-dropdown">&nbsp;</li>

                <li class="nav-item dropdown notification-dropdown">&nbsp;</li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="user"></i>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="user_profile.html">
                                    <i data-feather="user"></i> My Profile
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="auth_login.html">
                                    <i data-feather="log-out"></i> Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url("assets/") ?>assets/img/logo.svg" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="<?php echo base_url(); ?>" class="nav-link"> MONEV </a>
                    </li>
                    <li class="nav-item toggle-sidebar">
                        <i data-feather="arrow-left" class="sidebarCollapse"></i>
                    </li>
                </ul>
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu active">
                        <a href="<?php echo base_url(); ?>" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading">
                            <i data-feather="circle"></i>
                            <span>Settings</span>
                        </div>
                    </li>

                    <li class="menu">
                        <a href="#administrasi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="cpu"></i>
                                <span>Administrasi</span>
                            </div>
                            <div>
                                <i data-feather="chevron-right"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="administrasi" data-parent="#accordionExample">
                            <li><a href="component_tabs.html"> User</a></li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#master_data" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="box"></i>
                                <span>Master Data</span>
                            </div>
                            <div>
                                <i data-feather="chevron-right"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="master_data" data-parent="#accordionExample">
                            <li><a href="component_tabs.html"> Urusan</a></li>
                            <li><a href="component_tabs.html"> Bidang</a></li>
                            <li><a href="component_tabs.html"> Program</a></li>
                            <li><a href="component_tabs.html"> Kegiatan</a></li>
                            <li><a href="component_tabs.html"> OPD</a></li>
                            <li><a href="component_tabs.html"> Sub OPD</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <?php
            if (isset($_view) && $_view)
                $this->load->view($_view);

            if (isset($_view2) && $_view2)
                $this->load->view($_view2);
            ?>

            <div class="footer-wrapper">
                <div class="footer-section f-section-1">&nbsp;</div>
                <div class="footer-section f-section-2">&nbsp;</div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url("assets/") ?>assets/js/loader.js"></script>

    <script src="<?php echo base_url("assets/") ?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url("assets/") ?>bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url("assets/") ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url("assets/") ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url("assets/") ?>assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo base_url("assets/") ?>assets/js/custom.js"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo base_url("assets/") ?>plugins/apex/apexcharts.min.js"></script>
    <script src="<?php echo base_url("assets/") ?>assets/js/dashboard/dash_1.js"></script>

    <script src="<?php echo base_url("assets/") ?>plugins/font-icons/feather/feather.min.js"></script>
    <script type="text/javascript">
        feather.replace();
    </script>

    <?php
    if (isset($_js) && $_js)
        $this->load->view($_js);

    if (isset($_js2) && $_js2)
        $this->load->view($_js2);
    ?>
</body>

</html>