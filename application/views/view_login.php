<?php if($this->session->flashdata('invalid_user')){
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
            Login - IC Portal
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
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/dist/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/dist/img/favicon/favicon-32x32.png">
        <link rel="mask-icon" href="/assets/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <!-- Optional: page related CSS-->
        <link rel="stylesheet" media="screen, print" href="/assets/dist/css/fa-brands.css">
    </head>
    <body>
        <div class="page-wrapper">
            <div class="page-inner bg-brand-gradient">
                <div class="page-content-wrapper bg-transparent m-0">
                    <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                        <div class="d-flex align-items-center container p-0">
                            <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                    <img src="/assets/dist/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                    <span class="page-logo-text mr-1">IC Web Portal</span>
                                </a>
                            </div>
                           <!--  <a href="page_register.html" class="btn-link text-white ml-auto">
                                Create Account
                            </a> -->
                        </div>
                    </div>
                    <div class="flex-1" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                            <div class="row">
                                <div class="col col-md-6 col-lg-7 hidden-sm-down">
                                    <h2 class="fs-xxl fw-500 mt-4 text-white">
                                       IC Web Portal
                                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                                            Presenting you with the next level of innovative solution.  Everywhere you go!
                                        </small>
                                    </h2>
                                    <a href="#" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
                                    <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                                        <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                                            Find us on social media
                                        </div>
                                        <div class="d-flex flex-row opacity-70">
                                            <a href="#" class="mr-2 fs-xxl text-white">
                                                <i class="fab fa-facebook-square"></i>
                                            </a>
                                            <a href="#" class="mr-2 fs-xxl text-white">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                            <a href="#" class="mr-2 fs-xxl text-white">
                                                <i class="fab fa-google-plus-square"></i>
                                            </a>
                                            <a href="#" class="mr-2 fs-xxl text-white">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                                    <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                        Secure login

                                    </h1>
                                    <div class="card p-4 rounded-plus bg-faded">
                                        <form id="js-login" method="post" novalidate="" action="/auth" onsubmit="return UserLogin()">
                                            <div class="form-group">
                                                <label class="form-label" for="username">Username  </label>
                                                <input type="text" id="user_name" name="user_name" class="form-control form-control-lg" placeholder="Enter Your Username" value="ICADMIN" required>
                                                <div class="invalid-feedback">No, you missed this one.</div>
                                                <div class="help-block">Your unique user name</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter Your Password" value="aa" required>
                                                <div class="invalid-feedback">Sorry, you missed this one.</div>
                                                <div class="help-block">Your password</div>
                                            </div>
                                            <div class="row no-gutters " >
                                                 <div class="col-lg-12 d-none" id='remove'>
                                                <div class="alert bg-warning-500 alert-dismissible fade show">
                                                    <div class="d-flex align-items-center">
                                                        <div class="alert-icon">
                                                            <span class="icon-stack icon-stack-sm">
                                                                <i class="base-7 icon-stack-3x color-fusion-200"></i>
                                                                <i class="base-7 icon-stack-2x color-fusion-500"></i>
                                                                <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1" >
                                                            <span class="h5" id='alert'></span>
                                                            <br>
                                                            <p id='text'>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-lg-6 pr-lg-1 my-2">
                                                    
                                                </div>
                                                <div class="col-lg-6 pl-lg-1 my-2">
                                                    <button  id="js-login-btn" onclick="UserLogin()"  type="submit" class="btn btn-danger btn-block btn-lg">Secure login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
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
<script>

    $( document ).ready(function() {
        <?php if($user_msg){ ?>
            var element= document.getElementById("remove")
            element.classList.remove("d-none");
            document.getElementById("alert").innerHTML = "Invalid";
            document.getElementById("text").innerHTML = "<?php echo $user_msg; ?>";

       <?php } ?>
        
    });
       
    $("#js-login-btn").click(function(event)
    {

        // Fetch form to apply custom Bootstrap validation
        var form = $("#js-login")

        if (form[0].checkValidity() === false)
        {
            event.preventDefault()
            event.stopPropagation()
        }

        form.addClass('was-validated');
        // Perform ajax submit here...
    });
    $("#user_name").keypress(function(e){
        var keyCode = e.keyCode || e.which;
        var regex = /^[A-Za-z ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
           return false
           }
        if( $("#user_name").val().length >35 ) {
                return false;
           }
    });
    
    function UserLogin()
    {
    var element = document.getElementById("remove");
    element.classList.add("d-none");
    var userName = document.getElementById('user_name').value;
      if(userName=="")
      {
        var element= document.getElementById("remove")
        element.classList.remove("d-none");
        document.getElementById("alert").innerHTML = "Please Enter User Id!";
        document.getElementById("text").innerHTML = "User <strong>Id</strong> must be <strong>Filled</strong>.";
      
       // alert('Please Enter User Id!');
        
        $("#user_name").focus();
        return false;
      }
      var password = document.getElementById('password').value;
      if(password=="")
      {
        var element= document.getElementById("remove")
        element.classList.remove("d-none");
        document.getElementById("alert").innerHTML = "Please Enter Password!";
        document.getElementById("text").innerHTML = "User <strong>Password</strong> must be <strong>Filled</strong>.";
        
        $("#password").focus();
        return false;
      }
      return true;
    }




</script>
</body>
</html>
