
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="{{ route('dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{ route('dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset($CompanyInformation->company_logo)}}" alt="" height="32">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset($CompanyInformation->company_logo)}}" alt="" height="27">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('dashboard') }}" da role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->

						<li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('companySettings.edit', 1) }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-settings-2-line"></i> <span data-key="t-dashboards">Company Settings</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('category1.index') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-menu-2-line"></i> <span data-key="t-dashboards">Category Configuration</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('product.index') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-folder-2-line"></i> <span data-key="t-dashboards">Product</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('customer-order.index') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-record-circle-line"></i> <span data-key="t-dashboards">Order</span>
                            </a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link menu-link" href="{{ route('userLogout') }}" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="mdi mdi-logout"></i> <span data-key="t-dashboards">Signout</span>
                           </a>
                        </li>




                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
