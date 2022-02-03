<form class="needs-validation" id='emailsentform' name='emailsentform' method='post' action="/email_send">
    <div class="form-row">
        <div class="col-md-12 mb-3">

            <label class="form-label">To<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter to" type="text" id="to" name="to" required="">
            <div class="invalid-feedback">
                Please Enter to.
            </div>
        </div>
    </div>
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
</form>


<script type="text/javascript">
     function fileValidation() {
        var fileInput = document.getElementById('file_uploade');

        var filePath = fileInput.value;

        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if (!allowedExtensions.exec(filePath)) {
            alert('Invalid file type only png file is accepted!');
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