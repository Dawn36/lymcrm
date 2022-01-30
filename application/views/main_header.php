<!DOCTYPE html>
<!-- 
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.4.1
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        LYMCRM </title>
    <meta name="description" content="Page Titile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/vendors.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/app.bundle.css">
    <!-- Place favicon.ico in the root directory -->
    <link id="mytheme" rel="stylesheet" href="/assets/dist/css/themes/cust-theme-3.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/dist/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/dist/img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="/assets/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/datagrid/datatables/datatables.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/formplugins/select2/select2.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/miscellaneous/reactions/reactions.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/miscellaneous/fullcalendar/fullcalendar.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/miscellaneous/jqvmap/jqvmap.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/notifications/sweetalert2/sweetalert2.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/formplugins/summernote/summernote.css">
</head>

<body class="mod-bg-1 ">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div id='modal-body' class="modal-body">

                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
      <div class="modal fade" id="myModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 id="modal-title-center" class="modal-title"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                </button>
                            </div>
                            <div id="modal-body-center" class="modal-body">
                                
 
                            </div>
                            <!-- <div class="modal-footer">
                                
                                <button type="button" class="btn btn-primary">Change Password</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div> -->
                        </div>
                    </div>
                </div>
    <p id="js-color-profile" class="d-none">
        <span class="color-primary-50"></span>
        <span class="color-primary-100"></span>
        <span class="color-primary-200"></span>
        <span class="color-primary-300"></span>
        <span class="color-primary-400"></span>
        <span class="color-primary-500"></span>
        <span class="color-primary-600"></span>
        <span class="color-primary-700"></span>
        <span class="color-primary-800"></span>
        <span class="color-primary-900"></span>
        <span class="color-info-50"></span>
        <span class="color-info-100"></span>
        <span class="color-info-200"></span>
        <span class="color-info-300"></span>
        <span class="color-info-400"></span>
        <span class="color-info-500"></span>
        <span class="color-info-600"></span>
        <span class="color-info-700"></span>
        <span class="color-info-800"></span>
        <span class="color-info-900"></span>
        <span class="color-danger-50"></span>
        <span class="color-danger-100"></span>
        <span class="color-danger-200"></span>
        <span class="color-danger-300"></span>
        <span class="color-danger-400"></span>
        <span class="color-danger-500"></span>
        <span class="color-danger-600"></span>
        <span class="color-danger-700"></span>
        <span class="color-danger-800"></span>
        <span class="color-danger-900"></span>
        <span class="color-warning-50"></span>
        <span class="color-warning-100"></span>
        <span class="color-warning-200"></span>
        <span class="color-warning-300"></span>
        <span class="color-warning-400"></span>
        <span class="color-warning-500"></span>
        <span class="color-warning-600"></span>
        <span class="color-warning-700"></span>
        <span class="color-warning-800"></span>
        <span class="color-warning-900"></span>
        <span class="color-success-50"></span>
        <span class="color-success-100"></span>
        <span class="color-success-200"></span>
        <span class="color-success-300"></span>
        <span class="color-success-400"></span>
        <span class="color-success-500"></span>
        <span class="color-success-600"></span>
        <span class="color-success-700"></span>
        <span class="color-success-800"></span>
        <span class="color-success-900"></span>
        <span class="color-fusion-50"></span>
        <span class="color-fusion-100"></span>
        <span class="color-fusion-200"></span>
        <span class="color-fusion-300"></span>
        <span class="color-fusion-400"></span>
        <span class="color-fusion-500"></span>
        <span class="color-fusion-600"></span>
        <span class="color-fusion-700"></span>
        <span class="color-fusion-800"></span>
        <span class="color-fusion-900"></span>
    </p>
    <!-- DOC: script to save and load page settings -->
    <script src="/assets/dist/js/vendors.bundle.js"> </script>
    <script>
        var baseurl = "<?php echo base_url(); ?>";
    </script>
    <!--<script src="/assets/dist/js/vendors.bundle.js"></script>-->
    <script src="/assets/dist/js/app.bundle.js"></script>
    <script src="/assets/dist/js/statistics/chartist/chartist.js"></script>
    <script src="/assets/dist/js/statistics/chartjs/chartjs.bundle.js"></script>
    <script src="/assets/dist/js/dependency/moment/moment.js"></script>
    <script src="/assets/dist/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="/assets/dist/js/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
    <script src="/assets/dist/js/formplugins/select2/select2.bundle.js"></script>
    <script src="/assets/dist/js/dependency/moment/moment.js"></script>
    <script src="/assets/dist/js/miscellaneous/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="/assets/dist/js/statistics/sparkline/sparkline.bundle.js"></script>
    <script src="/assets/dist/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="/assets/dist/js/statistics/flot/flot.bundle.js"></script>
    <script src="/assets/dist/js/miscellaneous/jqvmap/jqvmap.bundle.js"></script>
    <script src="/assets/dist/js/holder.js"></script>
    <script src="/assets/dist/js/datagrid/datatables/datatables.bundle.js"></script>
    <script src="/assets/dist/js/datagrid/datatables/datatables.export.js"></script>
    <script src="/assets/dist/js/notifications/sweetalert2/sweetalert2.bundle.js"></script>
    <script src="/assets/dist/js/notifications/toastr/toastr.js"></script>
    <script src="/assets/dist/js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
    <script src="/assets/dist/js/formplugins/summernote/summernote.js"></script>
    <script src="/assets/dist/js/formplugins/summernote/summernote-ext-print.js"></script>


    <script>
        function OpenChangePasswordModal()
        {
             $.ajax({
            url: baseurl + 'admin_change_password_modal',
            success: function(result) {
                $('#modal-title-center').html('Change Password');
                $('#modal-body-center').html(result);
                // $('#modal-body').children()[0][0].value = id;
                $('#myModalCenter').modal();
            }
        });
        }

        function ResetUser(userId) {
        var value = {
            userId: userId,
        };
        if (confirm('Are you sure you want to rest Password?')) {
            $.ajax({
                url: baseurl + 'user_reset',
                type: 'POST',
                data: value,
                success: function(result) {
                    var value='Password Rest Sucessfully New password Is 1234';
                    DeleteToast(value);
                   // window.location.reload();
                    // redirect('HiringRequests/viewhiringrequest');
                   // window.location = baseurl + 'user_show';

                }
            });
        } 
    }
   
        function Toast(value) {
            Command: toastr["warning"](value)

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "showDuration": 300,
                "hideDuration": 100,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        }
        function DeleteToast(value)
        {
            Command: toastr["success"](value)

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": 300,
  "hideDuration": 100,
  "timeOut": 5000,
  "extendedTimeOut": 1000,
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
        }

        function CheckValidEmail(id) {
            email = document.getElementById(id).value;
            var emailregex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (emailregex.test(email) == false) {

                var value = 'Wrong Email! (Hint:abc@gmail.com)';
                Toast(value);
                // .then((result) => { location.replace('https://lymcrm.com/property/all-admin.php') })
                document.getElementById(id).value = '';
                return false;
            }
        }
        /**
         *	This script should be placed right after the body tag for fast execution 
         *	Note: the script is written in pure javascript and does not depend on thirdparty library
         **/
        'use strict';

        var classHolder = document.getElementsByTagName("BODY")[0],
            /** 
             * Load from localstorage
             **/
            themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {},
            themeURL = themeSettings.themeURL || '',
            themeOptions = themeSettings.themeOptions || '';
        /** 
         * Load theme options
         **/
        if (themeSettings.themeOptions) {
            classHolder.className = themeSettings.themeOptions;
            console.log("%c✔ Theme settings loaded", "color: #148f32");
        } else {
            console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
        }
        if (themeSettings.themeURL && !document.getElementById('mytheme')) {
            var cssfile = document.createElement('link');
            cssfile.id = 'mytheme';
            cssfile.rel = 'stylesheet';
            cssfile.href = themeURL;
            document.getElementsByTagName('head')[0].appendChild(cssfile);
        }
        /** 
         * Save to localstorage 
         **/
        var saveSettings = function() {
            themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
                return /^(nav|header|mod|display)-/i.test(item);
            }).join(' ');
            if (document.getElementById('mytheme')) {
                themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
            };
            localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
        }
        /** 
         * Reset settings
         **/
        var resetSettings = function() {
            localStorage.setItem("themeSettings", "");
        }
    </script>

    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">