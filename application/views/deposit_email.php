<style type="text/css">
    .context-menu {cursor: context-menu;}
</style>
<form class="needs-validation" id='emailsentform' name='emailsentform' method='post' action="/email_send" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-12 mb-3">

            <label class="form-label">To<span class="text-danger">*</span></label>
<<<<<<< HEAD
            <input class="form-control context-menu" placeholder="Enter to" type="text" id="to" name="to" required="">
=======
            <input class="form-control context-menu" readonly style="background-color: #fff;" placeholder="Enter to" type="text" id="to" name="to" required="">
>>>>>>> 3bdb593 (Initial commit)
            <div class="invalid-feedback">
                Please Enter to.
            </div>
        </div>
    </div>
    <input type="hidden" id="depositId" name="depositId" >
    <input type="hidden" id="installment" name="installment" >
    <input type="hidden" id="ownerEmail" name="ownerEmail" >
    <input type="hidden" id="ownerName" name="ownerName" >
    <input type="hidden" id="apartmentNo" name="apartmentNo" >
    <input type="hidden" id="buildingName" name="buildingName" >
    
    <div class="form-row">
        <div class="col-md-12 mb-3">

            <label class="form-label">Subject<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter subject" type="text" id="subject" name="subject" required="">
            <div class="invalid-feedback">
                Please Enter subject.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <textarea class="summernote" id="saveToLocal" name="email_send"></textarea> 
        </div>
        <div class="col-md-12 mb-3">
           <input class="form-control alphaonly mt-3" type="file" onchange="return fileValidation()" id='file_uploade' name='deposit[]' required multiple>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="demo col-md-6 pull-right">
            <button id="js-add-btn" onclick="SendMail()" class="btn btn-primary btn-md float-right" type="button" data-dismiss="modal"><i class="fal fa-paper-plane" style="margin-right: 4px"></i>Send Email</button>
        </div>
    </div>
<<<<<<< HEAD
    
=======
>>>>>>> 3bdb593 (Initial commit)
</form>
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-container show">
                <div class="panel-content">
                    <div id="js-lightgallery">
                        <?php for ($i=0; $i <count($depositImg) ; $i++) { 
                          
                        ?>
                        <a href="<?php echo $depositImg[$i]['file_path'] ?>" target="_blank"><img class="img-responsive" src="<?php echo $depositImg[$i]['file_path'] ?>" alt="image" style="height: 118px; width: 118px"></a>
                            
                       <?php }  ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
<script type="text/javascript">
     function fileValidation() {
=======

<script type="text/javascript">
      function fileValidation() {
>>>>>>> 3bdb593 (Initial commit)
        var fileInput = document.getElementById('file_uploade');

        var filePath = fileInput.value;

        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if (!allowedExtensions.exec(filePath)) {
           // alert('Invalid file type only png file is accepted!');
            value='Invalid file type only png, jpg, jpeg, gif file is accepted!';
            Toast(value);
            fileInput.value = '';
            return false;
        } else {
            return true;
        }
    }

    $(document).ready(function() {
        $('.summernote').summernote();
          $('.note-toolbar .note-insert').remove();
    });
    $('#saveToLocal').summernote({
        placeholder: 'Email Content',
        tabsize: 10,
        height: 200
    });
    function SendMail(){
        
        $("#emailsentform").submit();
          var value='Sent Sucessfully';
        DeleteToast(value);
    }
</script>