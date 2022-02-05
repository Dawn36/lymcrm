<form class="needs-validation" novalidate method="post" action="buildingCsv" name="uploadBuildingForm" id="uploadBuildingForm" enctype='multipart/form-data'>
    <input type="hidden" name="tablename" value="building">
    <div class="col-md-12 mb-3">
        <input class="form-control alphaonly mt-3" type="file" onchange="return fileValidation()" id='building_csv' name='building_csv' required>
        <span class='error' id='usererror' name='usererror'></span>
        <div class="invalid-feedback">
            Please Upload a Building CSV File.
        </div>
        <a href="/building.csv" download="Sample_building">
            <button type="button" class="btn btn-sm btn-success mt-2" data-original-title="Edit"><i class="fas fa-download mr-2"></i>Sample Sheet</button>
        </a>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary float-right mr-2" id="upload" onclick="CheckUpload()" value='upload'>Upload</button>
        </div>
    </div>
</form>

<script>
    function CheckUpload() {
        var form = $("#uploadBuildingForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#building_csv').val() == '') {
            var value = 'Please Upload a CSV File';
            Toast(value);
            return false;
        } else {
            var value = 'File Uploaded Sucessfully';
            DeleteToast(value);
        }
    }

    function fileValidation() {
        var fileInput = document.getElementById('building_csv');

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
</script>