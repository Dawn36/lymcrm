                <!-- BEGIN Left Aside -->
                <aside class="page-sidebar">
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="/assets/dist/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">IC Portal</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                           
                        </a>
                    </div>
                    <!-- BEGIN PRIMARY NAVIGATION -->
                    <nav id="js-primary-nav" class="primary-nav" role="navigation">
                      
                        <div class="info-card">
                            <img src="/assets/dist/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                            <div class="info-card-text">
                                <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        <?php echo strtoupper($this->session->userdata('name')); ?>
                                    </span>
                                </a>
                                <span class="d-inline-block text-truncate text-truncate-sm"> <?php echo strtoupper($this->session->userdata('role_name')); ?></span>
                            </div>
                            <img src="/assets/dist/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
                        </div>
                        <?php if($this->session->userdata('role_code') == ADMIN_ROLE) { ?>
                        <ul id="js-nav-menu" class="nav-menu">
                            <li>
                                <a href="/dashboard" title="Dashboard" data-filter-tags="Dashboard"><i class="fas fa-analytics"></i>
                                    <span class="nav-link-text" data-i18n="nav.dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin" title="Admin Management" data-filter-tags="Admin Management"><i class="fas fa-user-secret"></i>
                                    <span class="nav-link-text" data-i18n="nav.Admin Management">Admin Management</span>
                                </a>
                            </li>
                             <li>
                                <a href="/user" title="Users Management" data-filter-tags="Users Management"><i class="fas fa-users"></i>
                                    <span class="nav-link-text" data-i18n="nav.Users Management">Users Management</span>
                                </a>
                            </li>
                            <li>
                                <a href="/owner" title="Owner" data-filter-tags="Owner"><i class="fas fa-user-tie"></i>
                                    <span class="nav-link-text" data-i18n="nav.Owner">Owner</span>
                                </a>
                            </li>
                            <li>
                                <a href="/building" title="Building" data-filter-tags="Building"><i class="fas fa-building"></i>
                                    <span class="nav-link-text" data-i18n="nav.Building">Building</span>
                                </a>
                            </li>
                            <li>
                                <a href="/property" title="Property" data-filter-tags="Property"><i class="fas fa-cubes"></i>
                                    <span class="nav-link-text" data-i18n="nav.Property">Property</span>
                                </a>
                            </li>
                            <li>
                                <a href="/" title="Deposit Slip" data-filter-tags="Deposit Slip"><i class="fas fa-money-check-edit-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.Deposit Slip">Deposit Slip</span>
                                </a>
                            </li>
                            <li>
                                <a href="/tenant" title="Tenant" data-filter-tags="Tenant"><i class="fas fa-user-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.Tenant">Tenant</span>
                                </a>
                            </li>
                            <li>
                                <a href="/" title="Tenancy" data-filter-tags="Tenancy"><i class="fas fa-handshake"></i>
                                    <span class="nav-link-text" data-i18n="nav.Tenancy">Tenancy</span>
                                </a>
                            </li>
                            <li>
                                <a href="/infection" title="Surveillance Form" data-filter-tags="Infection"><i class="fas fa-files-medical"></i>
                                    <span class="nav-link-text" data-i18n="nav.infectiom_report">Surveillance Form</span>
                                </a>
                            </li>
                          
                            <li>
                                <a href="/users" title="Users" data-filter-tags="Users"><i class="fas fa-users-cog"></i>
                                    <span class="nav-link-text" data-i18n="nav.dashboard">Users Management</span>
                                </a>
                            </li>
                            <li>
                                <a href="/users/usersrole" title="Role" data-filter-tags="roles"><i class="fas fa-users-class"></i>
                                    <span class="nav-link-text" data-i18n="nav.role">Role Management</span>
                                </a>
                            </li>
                             <li>
                                <a href="/bed" title="Bed" data-filter-tags="Bed"><i class="fas fa-clinic-medical"></i>
                                    <span class="nav-link-text" data-i18n="nav.bed">Bed</span>
                                </a>
                            </li>
                            <li>
                                <a href="/Ward" title="ward" data-filter-tags="ward"><i class="fal fa-tag"></i>
                                    <span class="nav-link-text" data-i18n="nav.ward">Ward</span>
                                </a>
                            </li>
                            <li>
                                <a href="/bed/lovs" title="Lov" data-filter-tags="Lovs"><i class="fas fa-list-ul"></i>
                                    <span class="nav-link-text" data-i18n="nav.bed">Lovs</span>
                                </a>
                            </li>
                            <li>
                                <a href="/source" title="Lov" data-filter-tags="source Lov"><i class="fas fa-list-ul"></i>
                                    <span class="nav-link-text" data-i18n="nav.sourcelov">Source Lov</span>
                                </a>
                            </li>
                             <!-- <li>
                                <a href="#" title="Change Password" data-filter-tags="password change">
                                    <i class="fal fa-tag"></i>
                                    <span class="nav-link-text" data-i18n="nav.package_info">Change Password</span>
                                </a>
                                
                            </li>
                           <li>
                                <a href="#" title="Users" data-filter-tags="package info">
                                    <i class="fal fa-tag"></i>
                                    <span class="nav-link-text" data-i18n="nav.package_info">Users</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#" title="Listing" data-filter-tags="package info documentation">
                                            <span class="nav-link-text" data-i18n="nav.package_info_documentation">Listing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Active / Deactive" data-filter-tags="package info product licensing">
                                            <span class="nav-link-text" data-i18n="nav.package_info_product_licensing">Active / Deactive</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="LOV" data-filter-tags="package info">
                                    <i class="fal fa-tag"></i>
                                    <span class="nav-link-text" data-i18n="nav.package_info">Lov</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#" title="Documentation" data-filter-tags="package info documentation">
                                            <span class="nav-link-text" data-i18n="nav.package_info_documentation">User Role</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Other" data-filter-tags="package info product licensing">
                                            <span class="nav-link-text" data-i18n="nav.package_info_product_licensing">Other</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                        <?php } if($this->session->userdata('role_code') == CONTROLLER_ROLE) { ?>
                            <ul id="js-nav-menu" class="nav-menu">
                            <li>
                                <a href="/dashboard" title="Dashboard" data-filter-tags="Dashboard"><i class="fas fa-analytics"></i>
                                    <span class="nav-link-text" data-i18n="nav.dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="/infection" title="Surveillance Form" data-filter-tags="Infection"><i class="fas fa-files-medical"></i>
                                    <span class="nav-link-text" data-i18n="nav.infectiom_report">Surveillance Form</span>
                                </a>
                            </li>
                        </ul>
                        <?php }?>
                        <div class="filter-message js-filter-message bg-success-600"></div>
                    </nav>
                    <!-- END PRIMARY NAVIGATION -->
                    <!-- NAV FOOTER -->
                    <div class="nav-footer shadow-top">
                        <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
                            <i class="ni ni-chevron-right"></i>
                            <i class="ni ni-chevron-right"></i>
                        </a>
                        <ul class="list-table m-auto nav-footer-buttons">
                           
                        </ul>
                    </div> <!-- END NAV FOOTER -->
                </aside>
                <!-- END Left Aside -->
                 <div class="modal fade" id="default-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Change Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-xl-12">
            
                                    <form class="needs-validation" method="post" action="" id='changepasswordform' name='changepasswordform' >
                                         <div class="form-row">
                              <div class="col-md-6 mb-3">
                                  <label class="form-label">Old Password<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Old Password" type="Password" id='old_password' name='old_password' required="">
                                  <div class="invalid-feedback">
                                      Please Enter the Old Password.
                                  </div>
                              </div>
                              
                          </div>
                          <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                  <label class="form-label">New Password<span class="text-danger">*</span></label>
                                  <input class="form-control"   placeholder="New Password" type="Password" id='new_password' name='new_password' required="">
                                  <div class="invalid-feedback">
                                      Please Enter Password.
                                  </div>
                                  
                              </div> 
                              <div class="col-md-6 mb-3">
                                  <label class="form-label">Confirm<span class="text-danger">*</span></label>
                                  <input class="form-control"   placeholder="confirm" type="Password" id='confirm' name='confirm' required="">
                                  <div class="invalid-feedback">
                                      Please Enter Password.
                                  </div>
                                  
                              </div>                                                   
                              
                          </div>
                          
                      </form>
                  </div>
 
                            </div>
                            <div class="modal-footer">
                                
                                <button type="button" class="btn btn-primary">Change Password</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    <header class="page-header" role="banner">
                        <!-- we need this logo when user switches to nav-function-top -->
                        <div class="page-logo">
                            <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                                <img src="/assets/dist/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                                <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                                
                            </a>
                        </div>
                        <!-- DOC: nav menu layout change shortcut -->
                        <div class="hidden-md-down dropdown-icon-menu position-relative">
                            <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                                <i class="ni ni-menu"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                        <i class="ni ni-minify-nav"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                                        <i class="ni ni-lock-nav"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- DOC: mobile button appears during mobile width -->
                        <div class="hidden-lg-up">
                            <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                                <i class="ni ni-menu"></i>
                            </a>
                        </div>
                           <div class="ml-auto d-flex">
                            <!-- app user menu -->
                            <div>
                                <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                    <img src="/assets/dist/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                                    <!-- you can also add username next to the avatar with the codes below:
                                    <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
                                    <i class="ni ni-chevron-down hidden-xs-down"></i> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                        <div class="d-flex flex-row align-items-center mt-1 mb-1 ">
                                            <span class="mr-2">
                                                <img src="/assets/dist/img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                            </span>
                                            <div class="info-card-text">
                                                <div class="fs-lg text-truncate text-truncate-lg " style="color: white;">Dr. Codex Lantern</div>
                                                <span class="text-truncate text-truncate-md opacity-80 "style="color: white;">drlantern@gotbootstrap.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                        <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                        <i class="float-right text-muted fw-n">F11</i>
                                    </a>
                                    <a href="#" class="dropdown-item" data-action="app-print">
                                        <span data-i18n="drpdwn.print">Print</span>
                                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                                    </a>
                                   <a href="#" type="button"  class="dropdown-item" data-toggle="modal" data-target="#default-example-modal-lg">Change Password</a>

                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item fw-500 pt-3 pb-3" href="/logout">
                                        <span data-i18n="drpdwn.page-logout">Logout</span>
                                        <span class="float-right fw-n"></span>
                                    </a>
                                </div>
                                  
                            </div>
                        </div>
                    </header>
                    <!-- END Page Header -->
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->