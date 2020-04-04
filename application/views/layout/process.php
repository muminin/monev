<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo5/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Apr 2020 03:31:10 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("assets/"); ?>assets/img/favicon.ico" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo base_url("assets/"); ?>fonts/XRXV3I6Li01BKofINeaB.woff2" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/"); ?>fonts/XRXW3I6Li01BKofA6sKUYevI.woff2" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/"); ?>fonts/XRXW3I6Li01BKofAjsOUYevI.woff2" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url("assets/"); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/"); ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/"); ?>assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>assets/css/forms/switches.css">
</head>

<body class="form">


    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Log In <a href="index.html"><span class="brand-name">MONEV</span></a></h1>
                        <p class="signup-link">Silahkan isi username dan password</p>

                        <form class="text-left">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <i data-feather="user"></i>
                                    <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <i data-feather="lock"></i>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Lihat Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url("assets/") ?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url("assets/") ?>bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url("assets/") ?>bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url("assets/") ?>assets/js/authentication/form-1.js"></script>
    <script src="<?php echo base_url("assets/") ?>plugins/font-icons/feather/feather.min.js"></script>
    <script type="text/javascript">
        feather.replace();
    </script>

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo5/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Apr 2020 03:31:10 GMT -->

</html>