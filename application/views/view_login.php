<?php if ($this->session->flashdata('invalid_user')) {
    $user_msg = $this->session->flashdata('invalid_user');
} ?>
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
        LYM CRM - log in
    </title>
    <meta name="description" content="Login">
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
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="/assets/dist/img/favicon/apple-touch-icon.png"> -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/dist/img/logo-2.png">
    <link rel="mask-icon" href="/assets/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <!-- Optional: page related CSS-->
    <link rel="stylesheet" media="screen, print" href="/assets/dist/css/fa-brands.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/dist/css/style.css">
</head>

<body style="font-family: Arial">
    <div class="page-wrapper">
        <div class="page-inner" style="background-color: #001529;">
            <div class="row">
                <div class="col col-md-4 col-lg-4">
                    <div class="col-lg-10 ml-5" style="margin: 10%; padding: 5%;">

                        <img src="assets/dist/img/logo-2.png">
                        <h2 class="fs-xxl fw-900 ml-5" style="color: #007bff;">
                            Log in
                        </h2>
                        <?php
                        if (!empty($success_msg)) {
                            echo '<p class="status-msg success">' . $success_msg . '</p>';
                        } elseif (!empty($error_msg)) {
                            echo '<p class="status-msg error">' . $error_msg . '</p>';
                        }
                        ?>
                        <form id="js-login" method="post" novalidate="" action="/auth">
                            <div class="form-group">
                                <label class="form-label text-white" for="username">Email</label>
                                <input style="background-color: white; border-radius: 50px;" type="text" id="user_name" name="user_name" class="bg-white form-control form-control-lg" placeholder="Email" required="">
                                <div class="invalid-feedback">No, you missed this one.</div>
                                <?php echo form_error('email', '<p class="help-block">', '</p>'); ?>

                                <!-- <div class="help-block">Your unique user name</div> -->
                            </div>
                            <div class="form-group">
                                <label class="form-label text-white" for="password">Password</label>
                                <input style="border-radius: 50px;" type="password" id="password" name="password" class="bg-white form-control form-control-lg" placeholder="Password" required="">
                                <div class="invalid-feedback">Sorry, you missed this one.</div>
                                <?php echo form_error('password', '<p class="help-block">', '</p>'); ?>

                                <!-- <div class="help-block">Your password</div> -->
                            </div>
                            <div class="form-group">
                                <button id="js-login-btn" style="background-color: #007bff; border-radius: 50px;" name="loginSubmit" type="submit" class="text-white btn btn-block btn-lg">login</button>
                            </div>
                    </div>
                    </form>
                </div>
                <div class="col col-md-8 col-lg-8">
                    <img src="assets/dist/img/backgrounds/bg-login.jpg" style="display: flex; height: 100%; width: 90%; float: right;">

                    <div class="login-content">
                        <h1>LYM CRM</h1>
                        <p> <a href="https://www.lymrealestate.com">Visit Our Website</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN Color profile -->
        <!-- this area is hidden and will not be seen on screens or screen readers -->
        <!-- we use this only for CSS color refernce for JS stuff -->
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
        <script src="/assets/dist/js/vendors.bundle.js"></script>
        <script src="/assets/dist/js/app.bundle.js"></script>
        <script src="/assets/dist/js/jquery.js"></script>
        <script src="/assets/dist/js/custom.js"></script>
        <script>
            $(document).ready(function() {
                <?php if ($user_msg) { ?>
                    var element = document.getElementById("remove")
                    element.classList.remove("d-none");
                    document.getElementById("alert").innerHTML = "Invalid";
                    document.getElementById("text").innerHTML = "<?php echo $user_msg; ?>";

                <?php } ?>

            });

            $("#js-login-btn").click(function(event) {

                // Fetch form to apply custom Bootstrap validation
                var form = $("#js-login")

                if (form[0].checkValidity() === false) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
                // Perform ajax submit here...
            });
            $("#user_name").keypress(function(e) {
                var keyCode = e.keyCode || e.which;
                var regex = /^[A-Za-z ]+$/;
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    return false
                }
                if ($("#user_name").val().length > 35) {
                    return false;
                }
            });

            // function UserLogin() {
            //     var element = document.getElementById("remove");
            //     element.classList.add("d-none");
            //     var userName = document.getElementById('user_name').value;
            //     if (userName == "") {
            //         var element = document.getElementById("remove")
            //         element.classList.remove("d-none");
            //         document.getElementById("alert").innerHTML = "Please Enter User Id!";
            //         document.getElementById("text").innerHTML = "User <strong>Id</strong> must be <strong>Filled</strong>.";

            //         // alert('Please Enter User Id!');

            //         $("#user_name").focus();
            //         return false;
            //     }
            //     var password = document.getElementById('password').value;
            //     if (password == "") {
            //         var element = document.getElementById("remove")
            //         element.classList.remove("d-none");
            //         document.getElementById("alert").innerHTML = "Please Enter Password!";
            //         document.getElementById("text").innerHTML = "User <strong>Password</strong> must be <strong>Filled</strong>.";

            //         $("#password").focus();
            //         return false;
            //     }
            //     return true;
            //     $("#js-login").submit();
            // }
        </script>
</body>

</html>