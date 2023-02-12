<div class="app-menu navbar-menu sidebar-d">
    <div class="navbar-brand-box sidebar-logo-d">
        <a href="<?php echo $base_url_dashboard; ?>" class="logo logo-light">
            <span class="logo-sm"><img src="<?php echo $base_url; ?>/img/logo-sm.png" alt="<?php echo $base_name; ?>" title="<?php echo $base_name; ?>" class="sb-sm-logo"></span>
            <span class="logo-lg"><img src="<?php echo $base_url; ?>/img/logo.png" alt="<?php echo $base_name; ?>" title="<?php echo $base_name; ?>" class="sb-bg-logo"></span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <div id="sb-mb-logo-div">
                <a href="<?php echo $base_url_dashboard; ?>">
                    <img src="<?php echo $base_url; ?>/img/logo.png" alt="<?php echo $base_name; ?>" title="<?php echo $base_name; ?>">
                </a>
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a <?php if ($pg == "dashboard") { ?>id="sb-active"<?php } ?> class="nav-link menu-link sb-menu-d" href="<?php echo $base_url_dashboard; ?>">
                        <i class="ri-dashboard-2-line"></i><span>Dashboards</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a <?php if ($pg == "sp") { ?>id="sb-active"<?php } ?> class="nav-link menu-link sb-menu-d" href="<?php echo $base_url_dashboard; ?>/service-package.php">
                        <i class="ri-tools-fill"></i><span>Services & Packages</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a <?php if ($pg == "os") { ?>id="sb-active"<?php } ?> class="nav-link menu-link sb-menu-d" href="#sb-menu1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sb-menu1">
                        <i class="ri-building-2-line"></i><span>Outlet Setup</span>
                    </a>
                    <div class="collapse menu-dropdown sb-menu-d <?php if ($pg == "os"){ echo "show"; } ?>" id="sb-menu1">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a <?php if ($subpg == "cse") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/outlet-setup-cse.php" class="nav-link">CSE Module</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if ($subpg == "outlet") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/outlet-setup-outlet.php" class="nav-link">Outlet Module</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if ($subpg == "manager") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/outlet-setup-manager.php" class="nav-link">Outlet Manager Module</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if ($subpg == "sales") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/outlet-setup-sales.php" class="nav-link">Sales Advisor Module</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if ($subpg == "cashier") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/outlet-setup-cashier.php" class="nav-link">Cashier Module</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if ($subpg == "operation") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/outlet-setup-operation.php" class="nav-link">Operation Manager Module</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a <?php if ($pg == "sub") { ?>id="sb-active"<?php } ?> class="nav-link menu-link sb-menu-d" href="<?php echo $base_url_dashboard; ?>/sub-admin.php">
                        <i class="ri-team-line"></i><span>Sub Admin Module</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a <?php if ($pg == "cc") { ?>id="sb-active"<?php } ?> class="nav-link menu-link sb-menu-d" href="#sb-menu2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sb-menu2">
                        <i class="ri-customer-service-2-line"></i><span>Call Center</span>
                    </a>
                    <div class="collapse menu-dropdown sb-menu-d <?php if ($pg == "cc"){ echo "show"; } ?>" id="sb-menu2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a <?php if ($subpg == "customer") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/cc-customer.php" class="nav-link">Customer Enquiry</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if ($subpg == "appointment") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/cc-appointment.php" class="nav-link">New Customer Appointment</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if ($subpg == "after") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/cc-after-sales.php" class="nav-link">After Sales Enquiry</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if ($subpg == "status") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/cc-car-status.php" class="nav-link">Car Status Enquiry</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a <?php if ($pg == "report") { ?>id="sb-active"<?php } ?> class="nav-link menu-link sb-menu-d" href="#sb-menu3" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sb-menu3">
                        <i class="ri-line-chart-line"></i><span>Reporting Module</span>
                    </a>
                    <div class="collapse menu-dropdown sb-menu-d <?php if ($pg == "report"){ echo "show"; } ?>" id="sb-menu3">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a <?php if ($subpg == "customer_report") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/report-customer.php" class="nav-link">Customer Enquiry Report</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if ($subpg == "appointment_report") { ?>id="sb-sub-active"<?php } ?> href="<?php echo $base_url_dashboard; ?>/report-appointment.php" class="nav-link">Customer Appointment Report</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>