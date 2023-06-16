<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <link rel="icon" href="<?= base_url() ?>app-assets/images/favicon.ico" type="image/png" sizes="16x16">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Yashuss Unlimited Business Solution Private Limited.">
    <meta name="keywords" content="yashuss unlimited, YU, dashboard, YU Grid, YU Component Library, User Access, RPA, Custom Build">
    <meta name="author" content="YASHUSS UNLIMITED">
    <title>Yashuss Unlimited</title>
    <!-- <link rel="apple-touch-icon" href="<?= base_url() ?>/app-assets/images/ico/apple-icon-120.png"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>app-assets/images/ico/favicon.ico">
    <script src="<?= base_url() ?>app-assets/js/jquery.js"></script>

    <!-- chat css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/pages/app-chat.css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/editors/summernote.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/editors/codemirror.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/editors/theme/monokai.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/components.css">
    <!-- END: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/fonts/mobiriseicons/24px/mobirise/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/plugins/pickers/daterange/daterange.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/fonts/mobiriseicons/24px/mobirise/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/calendars/fullcalendar.min.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/app-assets/css/style.css">
    <!-- END: Custom CSS-->
 

    <!-- dashboard links -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/app-assets/vendors/css/charts/c3.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/app-assets/css/plugins/charts/c3-chart.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/standard-table.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/jquery-ui.css">





    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">   -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/custom-dashboard.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/plugins/extentions/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/plugins/extentions/dropzone.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/pages/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/pages/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/dropzone.min.css">

    <!-- Toastr JS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/plugins/toastr/toastr.min.css">
    <!-- End Toastr JS -->

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/plugins/confirm_js/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/plugins/custom_file_uploader/uploadfile.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/plugins/jquery.multiselect.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/extensions/datedropper.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/extensions/timedropper.min.css">

    <!-- report view graph css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/charts/d3.css">

    <!-- Select with Search -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/forms/selects/selectivity-full.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/css/plugins/forms/selectivity/selectivity.css">

    <!-- summernotes css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/editors/summernote.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/editors/codemirror.css">


</head>
<!-- END: Head-->


<style>
    @font-face {
        font-family: 'selawk';
        src: url('webfont.eot');
        /* IE9 Compat Modes */
        src: url('webfont.eot?#iefix') format('embedded-opentype'),
            /* IE6-IE8 */
            url('././app-assets/fonts/selawk.ttf') format('truetype'),
            /* Super Modern Browsers */
            url('././app-assets/fonts/selawk.ttf') format('truetype'),
            /* Pretty Modern Browsers */
            url('././app-assets/fonts/selawk.ttf') format('truetype'),
            /* Safari, Android, iOS */
            /* url('webfont.svg#svgFontName') format('svg') Legacy iOS */
    }

    body {
        font-family: 'selawk', sans-serif !important;
    }

    /* overview chart font style */
    .c3 text {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-family: 'selawk', sans-serif !important;
        font-size: 14px;
    }

    /*Remove Spinner Arrow in Input Type Number*/
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    ::placeholder {
      color: #B4BADD;
      opacity: 1; /* Firefox */
    }
</style>