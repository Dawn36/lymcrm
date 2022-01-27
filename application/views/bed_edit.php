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
        <li class="breadcrumb-item">Bed</li>
        <li class="breadcrumb-item">Edit Bed</li>
      
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Edit Bed</span></h1>
    </div>
    
  </div>
  <div class="row mt">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-container show">
                    <div class="panel-content">
                        <form class="needs-validation" method="post" action="/Bed/UpadteBed" id='adduserform' name='adduserform' >
                            <input type="hidden" name="id" value="<?php echo $bed[0]['bed_id'] ?>">
                             <div class="form-row">
                  <div class="col-md-6 mb-3">
                     
                      <label class="form-label">Ward No<span class="text-danger">*</span></label>
                      <select class="custom-select" name="ward_no"
                                                id="ward_no" required="true">
                                                <option <?php echo ($bed[0]['ward_no'] == '' ? 'selected' : '' ) ?>  value="0">Select </option>
                                                <?php  foreach ($ward as $key => $value) {?>
                                                    
                                                    <option  <?php echo ($bed[0]['ward_no'] == $value['ward_no'] ? 'selected' : '' ) ?>  value="<?php echo $value['ward_no'] ?>"><?php echo $value['ward_no'] .'-'. $value['ward_depart'] ; ?></option>
                                               <?php } ?>
                                            </select>
                      <div class="invalid-feedback">
                          Please Enter the Ward No.
                      </div>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Bed No<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Bed No" type="text" id='bed_no' name='bed_no' value="<?php echo $bed[0]['bed_no'] ?>" required="true">
                       
                      <div class="invalid-feedback">
                          Please Enter the Bed No.
                      </div>
                      
                  </div>
              </div>
              
              <div class="row">
              <div class="col-md-6">
              </div>
              <div class="demo col-md-6 pull-right">
                <a href="/bed"  class="btn btn-primary btn-md float-right" type="button" ><i class="fas fa-times-circle mr4" ></i>Cancel</a>

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












                   
