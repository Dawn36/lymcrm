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
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Admin Management</li>
        <li class="breadcrumb-item">Admin Add</li>
      
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Add Admin</span></h1>
    </div>
    
  </div>
  <div class="row mt">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-container show">
                    <div class="panel-content">
                        <form class="needs-validation" method="post" action="/Users/UsersAddVerify" id='adduserform' name='adduserform' >
                             <div class="form-row">
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Name<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Name" type="text" id='admin_name' name='admin_name' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the Name.
                      </div>
                  </div>
                   <div class="col-md-6 mb-3">
                      <label class="form-label">Email<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Email" type="text" id='email_name' name='email_name' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the Email.
                      </div>
                  </div>
              </div>
                     <div class="form-row">
                 
                  <div class="col-md-6 mb-3">
                      <label class="form-label">New Password<span class="text-danger">*</span></label>
                      <input class="form-control"   placeholder="New Password" type="Password" id='admin_password' name='admin_password' required=""><i id="show_password" class="fal fa-eye eye"></i>
                      <div class="invalid-feedback">
                          Please Enter Password.
                      </div>
                      
                  </div>
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
                      <input class="form-control"   placeholder="Confirm Password" type="Password" id='confirm_password' name='confirm_password' required=""><i id="show_confirm_password" class="fal fa-eye eye"></i>
                      <div class="invalid-feedback">
                          Please Enter Password.
                      </div>
                      
                  </div>
              </div>
              <div class="row">
              <div class="col-md-6">
              </div>
              <div class="demo col-md-6 pull-right">
                <a href="/admin"  class="btn btn-primary btn-md float-right" type="button" ><i class="fas fa-times-circle mr4" ></i>Cancel</a>

                <button  id="js-add-btn" class="btn btn-primary btn-md float-right" type="submit" ><i class="fas fa-plus mr4"></i>Add</button>
              </div>
            </div> 
          </form>
      </div>
  </div>
</div>
</div>
</div>

</main>
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
<script type="text/javascript">

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

  $("#email_name").blur(function(){
email = document.getElementById('email_name').value;
    var emailregex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (emailregex.test(email) == false) {
       Swal.fire({
          title: 'Warning',
          text : 'Wrong Email! (Hint:abc@gmail.com)',
          icon : 'error',
          confirmButtonColor: '#3085d6',
      })
       // .then((result) => { location.replace('https://lymcrm.com/property/all-admin.php') })
      document.getElementById('email_name').value='';
      return false;
    }
 });

    
   
</script>











                   
