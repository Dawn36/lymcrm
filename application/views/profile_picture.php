 <form class="needs-validation" novalidate method="post" action="profile" name="uploadProfileForm" id="uploadProfileForm" enctype='multipart/form-data'>
    <div class="col-md-12 mb-3">
        <input class="form-control alphaonly mt-3" type="file" onchange="return fileValidation()" id='profile' name='profile' required>
        <span class='error' id='usererror' name='usererror'></span>
        <div class="invalid-feedback">
            Please Upload a Profile Picture.
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button onclick="FileUploaded()" class="btn btn-primary float-right mr-2" id="upload" value='upload'>Upload</button>
        </div>
    </div>
</form>
<script type="text/javascript">
    function FileUploaded(){
    var value='File Uploaded Sucessfully';
                                DeleteToast(value);
                            }
</script>