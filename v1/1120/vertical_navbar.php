<!-- BEGIN: Main Menu-->
<style>
    @media (max-width: 767.98px) {
        .main-menu.menu-fixed {
            top: 3.2rem;
            width: auto !important;
        }

        .drag-target {
            width: 1px !important;
        }
    }

    @media (min-width: 768px) {
        .main-menu.menu-fixed {
            top: 3.2rem;
            width: 100px !important;
        }
    }

    .nav-item-height {
        height: 95px;
    }

    .nav-item-height a {
        height: 95px;
    }

    .active-color {
        border-right: 5px solid var(--baseColor);
    }

    .vertical-compact-menu .main-menu .navigation>li>a {
        border-bottom: none;
    }
</style>



<!-- BEGIN: Main Menu-->
<style>
    @media (max-width: 767.98px) {
        .main-menu.menu-fixed {
            top: 3.2rem;
            width: auto !important;
        }

        .drag-target {
            width: 1px !important;
        }
    }

    @media (min-width: 768px) {
        .main-menu.menu-fixed {
            top: 3.2rem;
            width: 100px !important;
        }
    }

    .nav-item-height {
        height: 95px;
    }

    .nav-item-height a {
        height: 95px;
    }

    .active-color {
        border-right: 5px solid var(--activeColor) !important;
    }

    .navigation {
        background: var(--navColor) !important;
        height: 100%;
        overflow-y: scroll
    }

    .main-menu {
        background: var(--navColor) !important
    }

    .client-icon {
        color: #4285f4;
    }

    .account-icon {
        color: #ea4335;
    }

    .site-icon {
        color: orange;
    }

    .vendor-icon {
        color: #00b8ff !important;
    }

    .vendor-master-icon {
        color: #34a853 !important;
    }

    .dashboard-icon {
        color: #607d8b !important;
    }

    .cluster-icon {
        color: #9c27b0 !important;
    }

    .document-icon {
        color: #2945c7 !important;
    }

    .audit-icon {
        color: #42ce20 !important;
    }

    .report-icon {
        color: #795548 !important;
    }

    .checklist-icon {
        color: #12bbd8 !important;
    }

    .user-icon {
        color: #c3bf0e !important;
    }

    .master-icon {
        color: #e40707 !important;
    }

    .notification-icon {
        color: #42ce20 !important
    }
</style>
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" style="height: 100%;">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" nav-item nav-item-height" id="li_user_master_view"><a href="<?= base_url() ?>access-control/access_controller/access_control"><i class="mbri-user user-icon" style="color:var(--iconColor)"></i><span class="menu-title character_length_count" data-i18n="nav.category.admin-panels" style="color:var(--iconColor)">UAM</span></a></li>

            <li class=" nav-item nav-item-height" id=""></li>

            <!-- <li class=" nav-item nav-item-height" id="li_audit_report_view"><a href="<?= base_url() ?>audit-report/audit_controller/report_table"><i class="mbri-growing-chart" style="color:var(--iconColor)"></i><span class="menu-title" data-i18n="nav.category.admin-panels"style="color:var(--iconColor)">Masters</span></a></li> -->
        </ul>
    </div>
</div>

<!-- END: Main Menu-->

<script type="text/javascript">
    $(document).ready(function() {
        var value = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
        if (value == "dashboard_view") {
            $("#li_dashboard").addClass("active-color");
        } else if (value == "department" || value == "roles" || value == "users" || value == "role1" || value == "user_specific_access") {
            $("#li_user_master_view").addClass("active-color");
        }
        // else if (value == "site_list" || value=="audit_history")
        // {
        //     $("#li_site").addClass("active-color");
        // }
        else if (value == "calendar") {
            $("#li_calendar").addClass("active-color");
        } else if (value == "document_view" || value == "document_unclassified" || value == "licence_tracker_document") {
            $("#li_document").addClass("active-color");
        } else if (value == "audit_table" || value == "audit_form" || value == "audit_form_view") {
            $("#li_audit_form_view").addClass("active-color");
        } else if (value == "tabs" || value == "section") {
            $("#li_form_view").addClass("active-color");
        } else if (value == "report_table_view" || value == "report_region" || value == "vendor_compliance" || value == "vendor_original" || value == "vendor_remediation" || value == "report" || value == "report_view") {
            $("#li_audit_report_view").addClass("active-color");
        } else if (value == "client_main_list_view" || value == "kyc_client" || value == "list_view" || value == "grid_view" || value == "my_form" || value == "my_account" || value == "client_user" || value == "my_license") {
            $("#li_client").addClass("active-color");
        } else if (value == "account_main_list_view" || value == "service_selection" || value == "services") {
            $("#li_account").addClass("active-color");
        } else if (value == "site_main_list_view" || value == "site_kyc" || value == "site_escalation" || value == "site_license") {
            $("#li_site").addClass("active-color");
        } else if (value == "vendor_main_list_view") {
            $("#li_vendor").addClass("active-color");
        } else if (value == "checklist_master" || value == "checklist_preview" || value == "checklist_preview_edit") {
            $("#li_checklist").addClass("active-color");
        } else if (value == "cluster_master") {
            $("#li_cluster").addClass("active-color");
        } else if (value == "notification") {
            $("#li_notification").addClass("active-color");
        } else if (value == "vendor_master" || value == "add_vendor_landing_page" || value == "escalation" || value == "vendor_list_view" || value == "vendor_grid_view" || value == "vendor_kyc" || value == "account" || value == "my_team" || value == "escalation" || value == "my_license_tracker") {
            $('#li_vendor_master').addClass("active-color");
        }
    });
    /* $('.character_length_count').each(function() {
        var title = $(this).text();
        if(title.length >12){
            var new_title = title.split(" ");
            console.log(new_title);
        }
        
    }) */
</script>
<style>
    @media (max-width: 767.98px) {
        .nav-item-height {
            height: 50px;
        }

    }
</style>