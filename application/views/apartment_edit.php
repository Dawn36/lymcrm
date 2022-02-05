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

<!-- 
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Building</li>
        <li class="breadcrumb-item">Building Edit</li>
      
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Edit Building</span></h1>
    </div>
    
  </div> -->
 <!--  <div class="row mt">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-container show"> -->

                    <div class="card mb-g">
                        <input type="hidden" >
                       
                        <form class="needs-validation" method="post" action="/apartment_update" id='editapartment' name='editapartment' >
                            <input type="hidden" name="buildingId" value="<? echo $apartmentInfo[0]['building_id'] ?>">
                       <input type="hidden" name="record_id" value="<? echo $apartmentInfo[0]['record_id'] ?>">
                  <div class="col-md-12  mt-3 mb-3">
                      <label class="form-label">Apartment #<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Apartment Number" type="text" id='apartment_num0' value="<?php echo $apartmentInfo[0]['apartment_number']?>" name='apartment_num' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter Apartment Number.
                      </div>
                  </div>
                  <div id='dynamic-row'>
                      
                  </div>
                  </form>
              </div>

               <div class="row">
        <div class="col-md-12 mb-3">
             <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
              
           
            <button id='adminaddformsubmit' onclick="EditFromApartment()" class="btn btn-primary float-right mr-2" type="button">Edit</button>
        </div>
    </div>
          

  <!-- </div>
</div>
</div>
</div> -->

<!-- </main> -->
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
<script type="text/javascript">
     function EditFromApartment()
    {
        check=CheckApartment();
        if(check == true)
        {
            if(confirm("Are you sure do you want to update?"))
            {
                 $("#editapartment").submit();
                  var value='Update Sucessfully';
                DeleteToast(value);
            }
        }
    
    }
     function CheckApartment()
     {
       
            var supportingLisn = document.getElementById('apartment_num0').value;
            if (supportingLisn == '' || supportingLisn == 0) {
            var value='Apartment number is required';
            Toast(value);
            document.getElementById('apartment_num0').focus();

            return false;
            }

        
       return true;
     }
     // var count = 0;
   
     //    function EditFromApartment() {
     //       var form = $("#editapartment")

     //    if (form[0].checkValidity() === false) {
     //        event.preventDefault()
     //        event.stopPropagation()
     //    }
     //    form.addClass('was-validated');
     //    var supportingLisn = document.getElementById('apartment_num'+ count).value;
     //    if (supportingLisn == '' || supportingLisn == 0) {
     //        var value='Apartment number is required';
     //        Toast(value);
     //         document.getElementById('apartment_num'+ count).focus();

     //        return false;
     //    } 
            
     //    }

  $("#apartment_num").keypress(function(e){
   var keyCode = e.keyCode || e.which;
    var regex = /^[A-Za-z0-9 ]+$/;
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       return false
       }
    if( $("#apartment_num").val().length >35 ) {
            return false;
       }
  });
 
</script>











                   
