<?php
                $profilePicture = $this->session->userdata('profile_picture') ? $this->session->userdata('profile_picture') : '/assets/dist/img/demo/avatars/avatar-m.png'
                ?>
<style type="text/css">
.mt{
    margin-top: 10px;
}
.eye{
    float: right; 
margin-top: -26px;
margin-right: 6px;

}
.mr4{
     margin-right: 4px;
}

</style>
                <!-- BEGIN Left Aside -->
                <aside class="page-sidebar">
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="/assets/dist/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">Lym Crm</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                           
                        </a>
                    </div>
                    <!-- BEGIN PRIMARY NAVIGATION -->
                    <nav id="js-primary-nav" class="primary-nav" role="navigation">
                      
                        <div class="info-card">
                            <img id='OpenImgUpload' src="<?php echo $profilePicture ?>" class="profile-image rounded-circle" alt="upload picture">
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
                        <?php if($this->session->userdata('role_id') == SUPER_ADMIN || $this->session->userdata('role_id') == SUB_ADMIN) { ?>
                        <ul id="js-nav-menu" class="nav-menu">
                            <li>
                                <a href="/dashboard" title="Dashboard" data-filter-tags="Dashboard"><i class="fas fa-analytics"></i>
                                    <span class="nav-link-text" data-i18n="nav.dashboard">Dashboard</span>
                                </a>
                            </li>
                            <?php if($this->session->userdata('role_id') == SUPER_ADMIN)  { ?>
                            <li>
                                <a href="/admin" title="Admin Management" data-filter-tags="Admin Management"><i class="fas fa-user-secret"></i>
                                    <span class="nav-link-text" data-i18n="nav.Admin Management">Admin Management</span>
                                </a>
                            </li>
                        <?php } ?>
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
                                <a href="/deposit" title="Deposit Slip" data-filter-tags="Deposit Slip"><i class="fas fa-money-check-edit-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.Deposit Slip">Deposit Slip</span>
                                </a>
                            </li>
                            <li>
                                <a href="/tenant" title="Tenant" data-filter-tags="Tenant"><i class="fas fa-user-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.Tenant">Tenant</span>
                                </a>
                            </li>
                            <li>
                                <a href="/tenancy" title="Tenancy" data-filter-tags="Tenancy"><i class="fas fa-handshake"></i>
                                    <span class="nav-link-text" data-i18n="nav.Tenancy">Tenancy</span>
                                </a>
                            </li>
                            <li>
                                <a href="/tenancy_renew" title="Renew Tenancy" data-filter-tags="Renew Tenancy"><i class="fas fa-file-contract"></i>
                                    <span class="nav-link-text" data-i18n="nav.Tenancy">Renew Tenancy</span>
                                </a>
                            </li>
                        </ul>
                        <?php } if($this->session->userdata('role_id') == OWNER)  { ?>
                        <ul id="js-nav-menu" class="nav-menu">
                            <li>
                                <a href="/owner_property" title="Property" data-filter-tags="Property"><i class="fas fa-building"></i>
                                    <span class="nav-link-text" data-i18n="nav.Property">Property</span>
                                </a>
                            </li>
                            <li>
                                <a href="/owner_tenant" title="Tenant" data-filter-tags="Tenant"><i class="fas fa-user-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.Tenant">Tenant</span>
                                </a>
                            </li>
                        </ul>
                    <?php } ?>
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
                                    <img src="<?php echo $profilePicture ?>" class="profile-image rounded-circle" alt="">
                                    <!-- you can also add username next to the avatar with the codes below:
                                    <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
                                    <i class="ni ni-chevron-down hidden-xs-down"></i> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                        <div class="d-flex flex-row align-items-center mt-1 mb-1 ">
                                            <span class="mr-2">
                                                <img src="<?php echo $profilePicture ?>" class="rounded-circle profile-image" alt="">
                                            </span>
                                            <div class="info-card-text">
                                                <div class="fs-lg text-truncate text-truncate-lg " style="color: white;"><?php echo strtoupper($this->session->userdata('name')); ?></div>
                                                <span class="text-truncate text-truncate-md opacity-80 "style="color: white;"><?php echo strtoupper($this->session->userdata('email')); ?></span>
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
                                   <a href="#" type="button"  class="dropdown-item" onclick="OpenChangePasswordModal()">Change Password</a>

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
                    
                    <script>
                         function AddUser() {
                               
                            }
                        $('#OpenImgUpload').click(function() {
                            // $('#imgupload').trigger('click');
                             $.ajax({
                                    url: baseurl + 'profile_img',
                                    success: function(result) {
                                        $('#modal-title-small').html('Upload Profile');
                                        $('#modal-body-center-small').html(result);
                                        // $('#modal-body').children()[0][0].value = id;
                                        $('#myModalCenterSmall').modal();
                                    }
                                });
                        });

                        function fileValidation() {
                            var fileInput = document.getElementById('profile');

                            var filePath = fileInput.value;

                            var allowedExtensions =
                                /(\.jpg|\.jpeg|\.png|\.gif)$/i;

                            if (!allowedExtensions.exec(filePath)) {
                                alert('Invalid file type');
                                fileInput.value = '';
                                return false;
                            } else {
                                
                                return true;
                            }
                        }
                    </script>