<form class="needs-validation" novalidate method="post" action="tenantCsv" name="uploadTenantForm" id="uploadTenantForm" enctype='multipart/form-data'>
    <input type="hidden" name="tablename" value="tenant">
    <div class="col-md-12 mb-3">
        <input class="form-control alphaonly mt-3" type="file" onchange="return fileValidation()" id='tenant_csv' name='tenant_csv' required>
        <span class='error' id='usererror' name='usererror'></span>
        <div class="invalid-feedback">
            Please Upload a Tenant CSV File.
        </div>
        <a href="/tenant.csv" download="Sample_tenant">
            <button type="button" class="btn btn-sm btn-success mt-2" data-original-title="Edit"><i class="fas fa-download mr-2"></i>Sample Sheet</button>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button class="btn btn-primary float-right mr-2" id="upload" onclick="CheckUpload()" value='upload'>Upload</button>
        </div>
    </div>

</form>
<script type="text/javascript">
    function CheckUpload() {
        var form = $("#uploadTenantForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#tenant_csv').val() == '') {
            var value = 'Please Upload a CSV File';
            Toast(value);
            return false;
        } else {
            var value = 'File Uploaded Sucessfully';
            DeleteToast(value);
        }
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

    function DownloadFile() {

        $.ajax({
            url: baseurl + 'download_file',
            success: function(result) {

            }
        });


    }
</script>