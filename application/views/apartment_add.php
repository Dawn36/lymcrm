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

                   <div class="row">
                     <button  class="btn btn-primary btn-sm" type="button" onclick="CreateNewElement()" style="margin-left: 78%;"><i class="fas fa-plus" style="margin-right: 4px"></i>Add More</button>
                   </div>
                    <div class="card mb-g">
                        <form class="needs-validation" method="post" action="/" id='addapartment' name='addapartment' >
                      <input type="hidden">
                      <input type="hidden" name="building_id" value="<?php echo $buildingId ?>">
                  <div class="col-md-12  mt-3 mb-3">
                      <label class="form-label">Apartment #<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Apartment Number" type="text" id='apartment_num0' name='apartment_num[]' required="">
                       
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
              
           
            <button id='adminaddformsubmit' onclick="AddFromApartment()" class="btn btn-primary float-right mr-2" type="submit">Add</button>
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
    function AddFromApartment()
    {
        check=CheckApartment();
        if(check == true)
        {
            if(confirm("Are you sure do you want to add?"))
            {
                 $("#addapartment").submit();
                  var value='Add Sucessfully';
                DeleteToast(value);
            }
        }
    
    }
     function CheckApartment()
     {
        debugger;
        for (var i=0; i <= count; i++) {
            var supportingLisn = document.getElementById('apartment_num'+ i).value;
            if (supportingLisn == '' || supportingLisn == 0) {
            var value='Apartment number is required';
            Toast(value);
            document.getElementById('apartment_num'+ i).focus();

            return false;
        }
    }
        if(count == 0)
        {
            var supportingLisn = document.getElementById('apartment_num'+ count).value;
            if (supportingLisn == '' || supportingLisn == 0) {
            var value='Apartment number is required';
            Toast(value);
            document.getElementById('apartment_num'+ count).focus();

            return false;
            }

        }
       return true;
     }

     var count = 0;
   
        function CreateNewElement() {
           var form = $("#addapartment")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');
        var supportingLisn = document.getElementById('apartment_num'+ count).value;
        if (supportingLisn == '' || supportingLisn == 0) {
            var value='Apartment number is required';
            Toast(value);
             document.getElementById('apartment_num'+ count).focus();

            return false;
        } 
            count++;
            var txtNewInputBox = document.createElement("div");
            txtNewInputBox.id = "newcheck" + count;
            txtNewInputBox.innerHTML = '<div class="row"><div class="col-md-10 mt-3 mb-3" style="margin-left: 14px;">'+
                      '<label class="form-label">Apartment #<span class="text-danger">*</span></label>'+
                      '<input class="form-control" placeholder="Enter Apartment Number" type="text" id="apartment_num'+count+'" name="apartment_num[]" required="">'+
                      '<div class="invalid-feedback">'+
                          'Please Enter Apartment Number.'+
                      '</div>'+
                  '</div><div class="col-md-2" style="margin-left: -15px"><button type="button" class="btn btn-danger" style=" margin-top: 40px; " onclick="delrows('+ count +');" type="button" ><i class="fal fa-times"></i>&nbsp</button></div>' +

                '</div></div>';

            document.getElementById("dynamic-row").appendChild(txtNewInputBox);
        }
  

    function delrows(count) {
        if (confirm("Are you sure you want to Delete?")) {
            var el = count;
            $('#newcheck' + el).remove();
            countDec();
        }

    }

    function countDec() {
        count--;
    }
  

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











                   
