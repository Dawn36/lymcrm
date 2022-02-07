 <form class="needs-validation" novalidate method="post" action="profile" name="uploadProfileForm" id="uploadProfileForm" enctype='multipart/form-data'>
    <div class="col-md-12 mb-3">
            <label class="form-label">Name<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Full Name" type="text" id="name" name="uname" value="<?php echo $this->session->userdata('user_name');?>" required="">            
            <div class="invalid-feedback">
                Please Enter Full Name.
            </div>

        </div>
    <div class="col-md-12 mb-3">
            <label class="form-label">Profile Picture<span class="text-danger">*</span></label>
        <input class="form-control alphaonly" type="file" onchange="return fileValidation()" id='profile' name='profile' >
        <span class='error' id='usererror' name='usererror'></span>
        <div class="invalid-feedback">
            Please Upload a Profile Picture.
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button onclick="FileUploaded()" class="btn btn-primary float-right mr-2" id="upload" value="upload" type="button">Update</button>
        </div>
    </div>
</form>
<script type="text/javascript">

function FileUploaded()
{
        var form = $("#uploadProfileForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#name').val() == '') {
            var value='User Name is required';
            Toast(value);
            return false;
        }
        var value='User Info Successfully Updated';
                                DeleteToast(value);

                                          $("#uploadProfileForm").submit();

                            
    }


</script>