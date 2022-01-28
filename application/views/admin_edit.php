<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
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



<!-- 
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Admin Management</li>
        <li class="breadcrumb-item">Admin Add</li>
      
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol> -->
    <!-- 
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Add Admin</span></h1>
    </div>
    
  </div> -->
 <!--  <div class="card mb-g">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-container show"> -->
                    <div class="card mb-g">
                        <form class="needs-validation" method="post" id='adminaddform' name='adminaddform' action="/hiringrequests/addhiringrequest" novalidate >
                             
                  <div class="col-md-12 mb-12 mt-3 mb-3">
                      <label class="form-label">Name<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Name" type="text" id='admin_name' name='admin_name' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the Name.
                      </div>
                  </div>
                   <div class="col-md-12 mb-12 mb-3">
                      <label class="form-label">Email<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Email" type="text" id='email_name' name='email_name' required="" onblur="CheckValidEmail(this.id)">
                       
                      <div class="invalid-feedback">
                          Please Enter the Email.
                      </div>
                  </div>
             
            
                 
                  <div class="col-md-12 mb-12  mb-3">
                      <label class="form-label">New Password<span class="text-danger">*</span></label>
                      <input class="form-control"   placeholder="New Password" type="Password" id='admin_password' name='admin_password' required=""><i id="show_password" class="fal fa-eye eye"></i>
                      <div class="invalid-feedback">
                          Please Enter Password.
                      </div>
                      
                  </div>
                  <div class="col-md-12 mb-12 mb-3">
                      <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
                      <input class="form-control"   placeholder="Confirm Password" type="Password" id='confirm_password' name='confirm_password' required=""><i id="show_confirm_password" class="fal fa-eye eye"></i>
                      <div class="invalid-feedback">
                          Please Enter Password.
                      </div>
                      
                  </div>
                  </div>
                  <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='adminaddformsubmit' onclick="SubmitFrom()" class="btn btn-primary float-right mr-2" type="submit">Update</button>
        </div>
    </div>
             
          </form>
      </div>
  <!-- </div>
</div>
</div>
</div> -->


<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
<script type="text/javascript">
      function SubmitFrom(){

        var form = $("#adminaddform")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#admin_name').val() == '') {
            var value='Admin name is required';
            Toast(value);
            $('#admin_name').focus();
            return false;
        }
        if ($('#email_name').val() == '') {
            var value='Email is required';
            Toast(value);
            $('#email_name').focus();
            return false;
        }
        if ($('#admin_password').val() == '') {
             var value='Password is required';
            Toast(value);
            $('#admin_password').focus();
            return false;
        }
        if ($('#confirm_password').val() == '') {
            var value='Comfirm is required';
            Toast(value);
             $('#confirm_password').focus();
            return false;
        }
        if (confirm("Do you want to add user?")) {
            return true;
        } else {
            return false;
        }

}

  $("#admin_name").keypress(function(e){
   var keyCode = e.keyCode || e.which;
    var regex = /^[A-Za-z0-9 ]+$/;
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       return false
       }
    if( $("#admin_name").val().length >35 ) {
            return false;
       }
  });

  $("#show_password").click(function(){
 
    var x = document.getElementById("admin_password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });
   $("#show_confirm_password").click(function(){
 
    var x = document.getElementById("confirm_password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });

   
</script>











                   
