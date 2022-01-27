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
        <li class="breadcrumb-item">Building</li>
        <li class="breadcrumb-item">Building Add</li>
      
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Add Building</span></h1>
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
                      <label class="form-label">Building Name<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Building Name" type="text" id='building_name' name='building_name' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the Building Name.
                      </div>
                  </div>
                   <div class="col-md-6 mb-3">
                      <label class="form-label">Building Address<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Building Address" type="text" id='building_address' name='building_address' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter Building Address.
                      </div>
                  </div>
              </div>
                     <div class="form-row">
                 
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Building Contact<span class="text-danger">*</span></label>
                      <input class="form-control"   placeholder="Enter Building Contact" type="number" id='building_contact' name='building_contact' required="">
                      <div class="invalid-feedback">
                          Please Enter Building.
                      </div>
                      
                  </div>
                  
              </div>
              <div class="row">
              <div class="col-md-6">
              </div>
              <div class="demo col-md-6 pull-right">
                <a href="/building"  class="btn btn-primary btn-md float-right" type="button" ><i class="fas fa-times-circle mr4" ></i>Cancel</a>

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

  $("#building_contact").keypress(function(e){
   var keyCode = e.keyCode || e.which;
    var regex = /^[0-9 ]+$/;
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       return false
       }
    if( $("#building_contact").val().length >35 ) {
            return false;
       }
  });
  $("#building_name").keypress(function(e){
   var keyCode = e.keyCode || e.which;
    var regex = /^[A-Za-z0-9 ]+$/;
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       return false
       }
    if( $("#building_name").val().length >35 ) {
            return false;
       }
  });
   $("#building_address").keypress(function(e){
   var keyCode = e.keyCode || e.which;
    var regex = /^[A-Za-z0-9 ]+$/;
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       return false
       }
    if( $("#building_address").val().length >35 ) {
            return false;
       }
  });





    
   
</script>











                   
