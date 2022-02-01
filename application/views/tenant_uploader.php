<form class="needs-validation" novalidate method="post" action="tenantCsv" name="uploadTenantForm" id="uploadTenantForm" enctype='multipart/form-data'>
        <input type="hidden" name="tablename" value="tenant">
        <div class="col-md-12 mb-3">
            <input class="form-control alphaonly mt-3" type="file" onchange="return fileValidation()" id='tenant_csv' name='tenant_csv' required>
            <span class='error' id='usererror' name='usererror'></span>
            <div class="invalid-feedback">
                Please Upload a Tenant CSV File.
            </div>
        </div>
       <!--  <div class="col-md-12 mb-3">
            <button type="button" onclick="DownloadFile()" class="btn btn-primary float-right mr-2" id="upload" >Download simple file</button>
            
        </div> -->

        <div class="row">
            <div class="col-md-12 mb-3">
                <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
                <button class="btn btn-primary float-right mr-2" id="upload" onclick="OwnerUploaderSubmit()" value='upload'>Upload</button>
            </div>
        </div>

</form>
<script type="text/javascript">
    function OwnerUploaderSubmit(){
                var value='File Uploaded Sucessfully';
                 DeleteToast(value);
    }
                         function fileValidation() {
        var fileInput = document.getElementById('tenant_csv');

        var filePath = fileInput.value;

        var allowedExtensions =
            /(\.csv)$/i;

        if (!allowedExtensions.exec(filePath)) {
            alert('Invalid file type only CSV file is accepted!');
            fileInput.value = '';
            return false;
        } else {
            return true;
        }
    }
    function DownloadFile()
    {
     
       $.ajax({
            url: baseurl + 'download_file',
            success: function(result) {

            }
        });

     
    }
</script>