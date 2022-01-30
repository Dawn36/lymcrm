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
                        <form class="needs-validation" method="post" action="/building_verification" id='addbuilding' name='addbuilding' >
                      
                  <div class="col-md-12  mt-3 mb-3">
                      <label class="form-label">Building Name<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Building Name" type="text" id='building_name' onblur="CheckExitBuilding(this.value)" name='building_name' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the Building Name.
                      </div>
                  </div>
                   <div class="col-md-12 mb-3">
                      <label class="form-label">Building Address<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Building Address" type="text" id='building_address' name='building_address' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter Building Address.
                      </div>
                  </div>
             
                 
                  <div class="col-md-12 mb-3">
                      <label class="form-label">Community<span class="text-danger">*</span></label>
                      <input class="form-control"   placeholder="Enter Community" type="text" id='community' name='community' required="">
                      <div class="invalid-feedback">
                          Please Enter Community.
                      </div>
                      
                  </div>
                  
              </div>
               <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='adminaddformsubmit' onclick="AddFromBuilding()" class="btn btn-primary float-right mr-2" type="submit">Add</button>
        </div>
    </div>
          </form>
      </div>
  <!-- </div>
</div>
</div>
</div> -->

<!-- </main> -->
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
<script type="text/javascript">
    function CheckExitBuilding(buldingName) {
        //alert(buldingName);
        var value = {
            buldingName: buldingName
        };
        $.ajax({
            url: baseurl + 'building_exit',
            type: 'POST',
            data: value,
            success: function(result) {
               var result= JSON.parse(result);
               if(result != '')
               {
                var value='Building name Already Exit';
                Toast(value);
                $("#building_name").val('');
               }

            }
        });
    }
    function AddFromBuilding()
    {
        check=BuildingFrom();
        if(check == true)
        {
            if(confirm("Are you sure do you want to add?"))
            {
                 $("#addbuilding").submit();
                  var value='Add Sucessfully';
                DeleteToast(value);
            }
        }
    }
     function BuildingFrom(){

        var form = $("#addbuilding")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#building_name').val() == '') {
            var value='Building name is required';
            Toast(value);
            $('#building_name').focus();
            return false;
        }
        if ($('#building_address').val() == '') {
            var value='Building Address is required';
            Toast(value);
            $('#building_address').focus();
            return false;
        }
        if ($('#community').val() == '') {
             var value='Community is required';
            Toast(value);
            $('#community').focus();
            return false;
        }
       return true;

}

  $("#community").keypress(function(e){
   var keyCode = e.keyCode || e.which;
    var regex = /^[A-Za-z0-9 ]+$/;
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       return false
       }
    if( $("#community").val().length >35 ) {
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











                   
