<style type="text/css">
.mt{
    margin-top: 10px;
}
.mr4{
     margin-right: 4px;
}

</style>
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">IC Portal</a></li>
        <li class="breadcrumb-item">Ward</li>
        <li class="breadcrumb-item">Add Ward</li>
      
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Add Ward</span></h1>
    </div>
    
  </div>
  <div class="row mt">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-container show">
                    <div class="panel-content">
                        <form class="needs-validation" method="post" action="/Ward/WardAddVerify" id='addwardform' name='addwardform' >
                            
                             <div class="form-row">
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Ward No<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Ward No" type="text" id='ward_no' name='ward_no' required="" onblur="checkName(this)">
                       
                      <div class="invalid-feedback">
                          Please Enter the Ward No.
                      </div>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Ward Department<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Ward Department" type="text" id='ward_depart' name='ward_depart'  required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the Ward Department.
                      </div>
                      
                  </div>
              </div>
              
              <div class="row">
              <div class="col-md-6">
              </div>
              <div class="demo col-md-6 pull-right">
                <a href="/Ward"  class="btn btn-primary btn-md float-right" type="button" ><i class="fas fa-times-circle mr4" ></i>Cancel</a>

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
<script>
    function checkName(val) {

var id = val.getAttribute('id');
var value = val.value;

var data = {
    ward_no: value
};
$.ajax({
    url: baseurl + 'check_ward',
    type: 'POST',
    data: data,
    success: function(result) {

        //var result = jQuery.parseJSON(result);
        if (result) {
            var result = jQuery.parseJSON(result);
            //console.log(result);
            if(result != 2)
            {
                alert("The Ward No Already Added");
                document.getElementById("ward_no").value="";
               // alert("You Can Add Ward No");
            }
           
        }

    },
    error: function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    }
});

}
</script>











                   
