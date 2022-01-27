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
        <li class="breadcrumb-item">Lovs</li>
        <li class="breadcrumb-item">Edit Lovs</li>
      
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Edit Lovs</span></h1>
    </div>
    
  </div>
  <div class="row mt">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-container show">
                    <div class="panel-content">
                        <form class="needs-validation" method="post" action="/Bed/UpadteLovs" id='editlovsform' name='editlovsform' >
                            <input type="hidden" name="id" value="<?php echo $lovs[0]['lov_id'] ?>">
                             <div class="form-row">
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Organism Name<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Organism Name" type="text" id='organism_name' name='organism_name' value="<?php echo $lovs[0]['organism_name'] ?>" required="">
                      
                      <div class="invalid-feedback">
                          Please Enter the Lovs Name.
                      </div>
                  </div>
                  
              </div>
              <div class="form-row">
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Antibiotic class 1<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Antibiotic class 1" type="text" id='antibiotic_class_1' name='antibiotic_class_1' value="<?php echo $lovs[0]['antibiotic_class_1'] ?>" required="">
                                  
                                  <div class="invalid-feedback">
                                      Please Enter Antibiotic class 1.
                                  </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Antibiotic class 2<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Antibiotic class 2" type="text" id='antibiotic_class_2' name='antibiotic_class_2' value="<?php echo $lovs[0]['antibiotic_class_2'] ?>" >
                                  
                                  <div class="invalid-feedback">
                                      Please Enter the Antibiotic class 2.
                                  </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Antibiotic class 3<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Antibiotic class 3" type="text" id='antibiotic_class_3' name='antibiotic_class_3' value="<?php echo $lovs[0]['antibiotic_class_3'] ?>" >
                                  
                                  <div class="invalid-feedback">
                                      Please Enter the Antibiotic class 3.
                                  </div>
                              </div>
                              
                            </div>
                             <div class="form-row">
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Antibiotic class 4<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Antibiotic class 4" type="text" id='antibiotic_class_4' name='antibiotic_class_4' value="<?php echo $lovs[0]['antibiotic_class_4'] ?>" >
                                  
                                  <div class="invalid-feedback">
                                      Please Enter Antibiotic class 4.
                                  </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Antibiotic class 5<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Antibiotic class 5" type="text" id='antibiotic_class_5' name='antibiotic_class_5' value="<?php echo $lovs[0]['antibiotic_class_5'] ?>" >
                                  
                                  <div class="invalid-feedback">
                                      Please Enter the Antibiotic class 5.
                                  </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Antibiotic class 6<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Antibiotic class 6" type="text" id='antibiotic_class_6' name='antibiotic_class_6' value="<?php echo $lovs[0]['antibiotic_class_6'] ?>" >
                                  
                                  <div class="invalid-feedback">
                                      Please Enter the Antibiotic class 6.
                                  </div>
                              </div>
                              
                            </div>
                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Antibiotic class 7<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Antibiotic class 7" type="text" id='antibiotic_class_7' name='antibiotic_class_7' value="<?php echo $lovs[0]['antibiotic_class_7'] ?>" >
                                  
                                  <div class="invalid-feedback">
                                      Please Enter Antibiotic class 7.
                                  </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Antibiotic class 8<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Antibiotic class 8" type="text" id='antibiotic_class_8' name='antibiotic_class_8' value="<?php echo $lovs[0]['antibiotic_class_8'] ?>" >
                                  
                                  <div class="invalid-feedback">
                                      Please Enter the Antibiotic class 8.
                                  </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Antibiotic class 9<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter Antibiotic class 9" type="text" id='antibiotic_class_9' name='antibiotic_class_9' value="<?php echo $lovs[0]['antibiotic_class_9'] ?>" >
                                  
                                  <div class="invalid-feedback">
                                      Please Enter the Antibiotic class 9.
                                  </div>
                              </div>
                              
                            </div>
                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">MBR Name<span class="text-danger">*</span></label>
                                  <input class="form-control" placeholder="Enter MBR Name" type="text" id='mbr_name' name='mbr_name' value="<?php echo $lovs[0]['mbr_name'] ?>" >
                                  
                                  <div class="invalid-feedback">
                                      Please Enter the MBR Name.
                                  </div>
                              </div>
                              
                            </div>
              
              <div class="row">
              <div class="col-md-6">
              </div>
              <div class="demo col-md-6 pull-right">
                <a href="/Bed/Lovs"  class="btn btn-primary btn-md float-right" type="button" ><i class="fas fa-times-circle mr4" ></i>Cancel</a>

                <button  id="js-add-btn" class="btn btn-primary btn-md float-right" type="submit" ><i class="fas fa-user-edit mr4"></i>Upadte</button>
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












                   
