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
         <li class="breadcrumb-item"><a href="javascript:void(0);">IC Portal</a></li>
        <li class="breadcrumb-item">Users Management</li>
        <li class="breadcrumb-item">Users Edit</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Edit User</span></h1>
    </div>
    
  </div>
  <div class="row mt">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-container show">
                    <div class="panel-content">
                        <form class="needs-validation" method="post" action="/Users/UsersEditVerify" id='edituserform' name='edituserform' >
                            <input type="hidden" name="id" value="<?php echo $edit[0]['user_id']; ?>">
                             <div class="form-row">
                  <div class="col-md-6 mb-3">
                      <label class="form-label">User Name<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="User Name" type="text" id='user_name' name='user_name' value="<?php echo $edit[0]['user_name'] ?>" required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the User Name.
                      </div>
                  </div>
                  <div class="col-md-6 mb-3"> 
                    <label class="form-label">Users Role<span class="text-danger">*</span></label>
                    <select class="custom-select"  name="users_role" id="users_role">
                      <option value="">Select Users Role</option>
                       <?php for ($i=0; $i < count($role) ; $i++) { 
                          if($role[$i]['role_code'] == $edit[0]['user_role_id']){
                      ?>
                      <option selected="" value="<?php echo $role[$i]['role_code']; ?>"><?php echo $role[$i]['role_name']; ?></option>
                  <?php }else {?>
                      <option  value="<?php echo $role[$i]['role_code']; ?>"><?php echo $role[$i]['role_name']; ?></option>
                  <?php }}?>
                      </select>
                  </div>
              </div>
             
              <div class="row">
              <div class="col-md-6">
              </div>
              <div class="demo col-md-6 pull-right">
                <a href="/Users"  class="btn btn-primary btn-md float-right" type="button" ><i class="fas fa-times-circle mr4" ></i>Cancel</a>

                <button  id="js-add-btn" class="btn btn-primary btn-md float-right" type="submit" ><i class="fas fa-user-edit mr4"></i>Update</button>
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
    function showpass()
    {
        var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }

    }
</script>











                   
