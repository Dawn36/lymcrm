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
<!-- <main id="js-page-content" role="main" class="page-content"> -->


<!--     <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Owner</li>
        <li class="breadcrumb-item">Owner Add</li>
      
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol> -->
   <!--  
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Add Owner</span></h1>
    </div>
    
  </div> -->
<!--   <div class="row mt">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-container show"> -->
                    <div class="card mb-g">
                        <form class="needs-validation" method="post" action="/Users/UsersAddVerify" id='owneeditform' name='owneeditform' >
                             
                  <div class="col-md-12 mt-3 mb-3">
                      <label class="form-label">Name<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Name" type="text" id='owner_name' name='owner_name' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the Name.
                      </div>
                  </div>
                   <div class="col-md-12 mb-3">
                      <label class="form-label">Email<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Email" type="text" id='owner_email' name='owner_email' required=""  onblur="CheckValidEmail(this.id)">
                       
                      <div class="invalid-feedback">
                          Please Enter the Email.
                      </div>
                  </div>
         
                 
                 
                  <div class="col-md-12 mb-3">
                      <label class="form-label">Contact<span class="text-danger">*</span></label>
                      <input class="form-control"   placeholder="Enter Contact" type="number" id='contact' name='contact' required="">
                      <div class="invalid-feedback">
                          Please Enter Contact.
                      </div>
                      
                  </div>
            
          </div>
             <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='adminaddformsubmit' onclick="UpdateFromOwner()" class="btn btn-primary float-right mr-2" type="submit">Update</button>
        </div>
    </div>
          </form>
 <!--      </div>
  </div>
</div>
</div>
</div>

</main> -->
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
<script type="text/javascript">
    function UpdateFromOwner()
    {
        var form = $("#owneeditform")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#owner_name').val() == '') {
            var value='Owner name is required';
            Toast(value);
            $('#owner_name').focus();
            return false;
        }
        if ($('#owner_email').val() == '') {
            var value='Email is required';
            Toast(value);
            $('#owner_email').focus();
            return false;
        }
        if ($('#contact').val() == '') {
             var value='contact is required';
            Toast(value);
            $('#contact').focus();
            return false;
        }
        if (confirm("Do you want to add user?")) {
            return true;
        } else {
            return false;
        }
    }

  $("#contact").keypress(function(e){
   var keyCode = e.keyCode || e.which;
    var regex = /^[0-9 ]+$/;
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       return false
       }
    if( $("#contact").val().length >35 ) {
            return false;
       }
  });

   
</script>











                   
