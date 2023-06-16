<!-- BEGIN: Body-->

<body class="vertical-layout vertical-compact-menu 2-columns fixed-navbar padding-top-fixed-navbar pace-done menu-open pr-1" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns" style="padding-top:0rem;">

    <div class="unsupported-browser"></div>

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row" style="margin-top:-13px;">
                    <li class="nav-item mobile-menu d-md-none mr-auto nav-h"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1" style="color:var(--iconColorNav)"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" id="logo_to_hide">
                            <img class="brand-logo" alt="YashussUnlimited" src="<?= base_url() ?>app-assets/images/yu_logo.png">
                        </a>
                    </li>
                    <li class="nav-item d-md-none nav-h"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile" style="height:55px;">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs margin-adjust" href="#"><i class="ft-menu" style="color:var(--iconColorNav)"></i></a></li>
                        <li class="nav-item d-none d-md-block">
                            <a class="navbar-brand">
                                <img style="margin-top: -5px; height: 31px;" class="brand-logo company-logo" alt="YashussUnlimited" src="<?= base_url() ?>app-assets/images/yu_logo.png">
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item" style="margin-right: 10px">
                            <a class="nav-link nav-link-label bell_icon_adjustment" href="#" data-toggle="dropdown">
                                <i class="ficon ft-bell mt-0" style="color:var(--iconColorNav)"></i>
                                <span class="badge badge-pill badge-danger badge-up badge-glow"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0">
                                        <span class="grey darken-2">Notifications</span>
                                    </h6>
                                    <span class="notification-tag badge badge-danger float-right m-0">0 New</span>
                                </li>
                            </ul>
                        </li>

                        <li class="mr-1" style="margin-top:13px;">
                            <a hrefs="<?= base_url() ?>calendar/Calendar_controller/calendar_view"><i class="mbri-calendar ficon" style="color:var(--iconColorNav)" data-toggle="tooltip" title="Calendar"></i><span class="menu-title" data-i18n="nav.templates.main" style="color:var(--iconColorNav)"></span></a>
                        </li>
                        <li class="">
                            <a href="#">
                                <!-- <img class="brand_logo_3" src="<?= base_url() ?>app-assets/images/yu_logo_fire.png" alt="YashussUnlimited"> -->
                                <!-- <img class="brand_logo_3" src="<?= base_url() ?>app-assets/images/wechecked_logo.png" alt="YashussUnlimited"> -->
                            </a>
                        </li>
                        <!-- <li class="mr-1" style="margin-top:20px;">
                            <a href="<?= base_url() ?>client/Client_controller/dashboard">Client Flow</a>

                        </li> -->
                        <!-- <i class="ft-help-circle mr-1 cursor-pointer" style="color:var(--iconColorNav);margin-top:15px;font-size:20px"></i> -->
                        <li class="dropdown dropdown-user nav-item d-flex align-items-center">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="navbar-brand mr-0" id="">
                                    <img style="margin-right:15px;" class="brand-logo company-logo" alt="YashussUnlimited" src="<?= base_url() ?>app-assets/images/yu_logo.png">
                                </span>
                                <span class="avatar avatar-online"><img src="<?= base_url() ?>app-assets/images/purushothaman_tr.png"><i></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?= base_url() ?>vendor/Vendor_onboarding/vendor_onboarding_dashboard"><i class="ft-user"></i>Edit Profile</a>
                                <a class="dropdown-item" href="<?= base_url() ?>authentication/Authenticate/change_password"><i class="ft-lock"></i> Change Password</a>
                                <a class="dropdown-item" href="<?= base_url() ?>authentication/Authenticate/change_theme"><i class="ft-layers"></i> Change Theme</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" onclick="logout_session()"><i class="ft-power"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="float-container">
        <a href="<?= base_url() ?>/help/help_controller/help" class="ft-help-circle one">Help</a>
    </div>

    <!-- END: Header-->
    <style>
        .brand_logo_3 {
            height: 53px;
            width: 58px;
        }

        .wechecked_logo {
            height: 53px;
            width: 58px;
        }

        .float-container {
            position: fixed;
            top: 24%;
            right: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;

            /*width: 100px;*/
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            z-index: 1;
        }

        .float-container a {
            border-bottom-left-radius: 25px !important;
            border-top-left-radius: 25px !important;
            z-index: 99;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 80px;
            height: 30px;
            margin-right: -50px;
            margin-bottom: 10px;
            padding: 10px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            /* text-decoration: none; */
            color: white !important;
            border-color: #46b8da;
            border-radius: 5px 0 0 5px;
            background-color: #eb690b;
            -webkit-box-shadow: 0 2px 4px #7d7d7d;
            box-shadow: 0 2px 4px #7d7d7d;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .float-container a:hover {
            margin-right: 0;
            background-color: #c45100;
            -webkit-box-shadow: 0 2px 4px #7d7d7d;
            box-shadow: 0 2px 4px #7d7d7d;
        }

        /* Icon settings - remove if not needed*/
        .float-container .ft-help-circle:before {
            margin-right: 10px;
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
        }
    </style>
    <style>
        @media only screen and (min-width: 768px) {
            #logo_to_hide {
                display: none;
            }
        }

        @media (min-width: 768px) and (max-width: 1199px) {
            .bell_icon_adjustment {
                margin-top: 34px;
                height: 38px !important;
            }

            .flag_icon_adjustment {
                margin-top: 18px;
            }

            /* .header-navbar .navbar-container{
            height:44px !important;
        } */

        }

        .header-navbar {
            background: var(--baseColor) !important
        }

        @media (min-width: 1200px) {
            #export_all_button {
                margin-top: 7px;
            }

            .bell_icon_adjustment {
                margin-top: 15px;
                height: 50px !important;
            }

            .flag_icon_adjustment {
                margin-top: 8px;
            }
        }

        .collapse:not(.show) {
            height: 44px;
        }

        /* .header-navbar .navbar-container{
            height:55px !important;
        } */
        .margin-adjust {
            margin-left: 12px;
            /* margin-top: 22px; */
        }

        .avatar {
            margin-bottom: 10px;
        }

        .navbar-light {
            height: 55px;
        }

        @media (max-width: 767.98px) {

            .navbar-light {
                height: 44px;
            }
        }

        .header-navbar .navbar-header .navbar-brand .brand-logo {
            width: 100px;
            height: 46px;
            margin-top: -20px;
        }

        .dropdown-color {
            position: relative;


        }

        .dropdown-color ul li a {
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .dropdown-color ul {
            display: none;
        }

        .dropdown-color:hover ul {
            display: block;
            margin-top: 40px;
            position: absolute;
            z-index: 100;
            background: #fff;
            padding: 6px;
            border-radius: 10px;

        }

        .dropdown-color ul li a:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .hov {
            position: relative;
        }

        .hov::after {
            content: '';
            position: absolute;
            width: 0px;
            height: 3px;
            background-color: var(--baseColor);
            bottom: 0;
            left: 50%;
            transition: all 500ms ease;
        }

        .hov:hover::after {
            left: 0%;
            width: 100%;

        }
    </style>
    <style>
        .legend_table th,
        .legend_table td {
            border: 1px solid #c5c5c5;
        }

        .heading {
            background-color: #003B7E;
            color: white
        }

        .csv_icon {
            font-size: 1.5rem;
        }

        .excel_icon {
            font-size: 1.5rem;
        }

        .red {
            color: Red;
        }

        .green {
            color: green
        }

        .orange {
            color: orange;
        }

        .sign {
            background-color: #d5e1e7;
        }

        .discription {
            width: 152px;
        }

        /* search dropdown with select */
        .search_dropdown_div {
            position: relative;
        }

        .search_dropdown_div .selectivity-input {
            border: 1.2px solid #BABFC7 !important;
            /* width: 99%; */
            border-radius: 0.25rem !important;
        }

        .form-control {
            border: 1px solid #BABFC7 !important;
            /* color: #3B4781; */
        }

        .selectivity-input {
            border: 1.2px solid #BABFC7 !important;
            /* width: 99%; */
            border-radius: 0.25rem !important;
        }

        .selectivity-input:focus {
            border-color: #00517cf5;
        }


        .search_dropdown_div .selectivity-single-select {
            border-radius: 0.25rem !important;
        }

        .search_dropdown_div .selectivity-load-more.highlight,
        .selectivity-result-item.highlight {
            background: #566269 !important;
        }

        .selectivity-multiple-input-container {
            background: #0000;
        }

        .selectivity-multiple-input-container input {
            width: 150px !important;
        }

        .selectivity-input .selectivity-multiple-selected-item {
            background: #566269 !important;
            border-color: #566269 !important;
        }

        .selectivity-placeholder {
            color: #B4BADD;
        }

        .dropzone.dz-clickable .dz-message,
        .dropzone.dz-clickable .dz-message * {
            cursor: pointer;
            background: none;
            border: none;
            color: #0a5881;
        }

        .date_time_background {
            background-color: #fff !important;
        }

        ::placeholder {
            color: #B4BADD;
            opacity: 1;
            /* Firefox */
        }
    </style>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>
            <div class="content-body">
                <script>
                </script>