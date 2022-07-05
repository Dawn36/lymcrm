<form class="needs-validation" name='addPropertyForm' id='addPropertyForm' method='post' action="complaint_update" novalidate enctype="multipart/form-data">

    <input type="hidden" name='complaint_id' value="<?= $complaintData[0]['record_id'] ?>" />
    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>
        <div class="col-md-12 mb-3 mt-3">
            <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select" onchange="GetCommunity()" name="building_id" id="building" required="">
                <option value="">Select Building</option>
            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Appartment #<span style="color: red">*</span></label>
            <select class="custom-select" name="apartment_id" id="appartment_no" required="" onchange="GetOwnerTenant()">
                <option value="">Select Appartment #</option>
            </select>
            <div class="invalid-feedback">
                Please Select Appartment Number.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Owner <span style="color: red">*</span></label>
            <select class="custom-select" name="owner_id" id="owner_id" required="">
                <option value="">Select Owner </option>
            </select>
            <div class="invalid-feedback">
                Please Select Owner.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Tenant <span style="color: red">*</span></label>
            <select class="custom-select" name="tenant_id" id="tenant_id" required="">
                <option value="">Select Tenant </option>
            </select>
            <div class="invalid-feedback">
                Please Select Tenant.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Complaint Image </label>
            <input class="form-control alphaonly mt-3" type="file" onchange="return fileValidation()" id='file_uploade' name='complaint_image[]' multiple>
            <div class="invalid-feedback">
                Please Select Tenant.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Status <span style="color: red">*</span></label>
            <select class="custom-select" name="complaint_status" id="complaint_status" required="">
                <option value="">Select Status </option>
                <option value="completed">Completed</option>
            </select>
            <div class="invalid-feedback">
                Please Select Status.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Maintenance cost</label>
            <input class="form-control" placeholder="Enter Maintenance cost" type="text" id='cost' name='cost' required>
            <div class="invalid-feedback">
                Please Enter Maintenance cost.
            </div>

        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label">Description<span style="color: red">*</span></label>
            <textarea class="summernote" id="saveToLocal" name="description"></textarea>
        </div>


    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' onclick="SubmitProperty()" class="btn btn-primary float-right mr-2" type="button">Update</button>
        </div>
    </div>
    </div>
</form>

<script>
    function fileValidation() {
        var fileInput = document.getElementById('file_uploade');

        var filePath = fileInput.value;

        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if (!allowedExtensions.exec(filePath)) {
            // alert('Invalid file type only png file is accepted!');
            value = 'Invalid file type only png, jpg, jpeg, gif file is accepted!';
            Toast(value);
            fileInput.value = '';
            return false;
        } else {
            return true;
        }
    }
    GetBuilding();
    var buildingArr = '';

    function GetBuilding() {

        $.ajax({
            url: baseurl + 'building_get',

            success: function(result) {

                $('#building').html('');
                buildingArr = JSON.parse(result);
                var option = document.createElement("option");
                option.text = "Select Building";
                option.value = "";
                var select = document.getElementById("building");
                select.appendChild(option);
                for (var i = 0; i < buildingArr.length; i++) {
                    var option = document.createElement("option");
                    option.text = buildingArr[i].building_name.replace(/(\w)(\w*)/g,
                        function(g0, g1, g2) {
                            return g1.toUpperCase() + g2.toLowerCase();
                        });
                    option.value = buildingArr[i].record_id;
                    if (buildingArr[i].record_id == "<?php echo $complaintData[0]['building_id'] ?>") option.defaultSelected =
                        true;
                    var select = document.getElementById("building");
                    select.appendChild(option);
                }
                GetCommunity();
            }
        });
    }

    function GetCommunity() {
        var id = $("#building").val();
        var data = {
            id: id
        };
        $.ajax({
            url: baseurl + 'building_apartments',
            type: 'POST',
            data: data,
            success: function(result) {
                resulta = JSON.parse(result);

                if (resulta.length >= 1) {
                    $('#appartment_no').html('');
                    var option = document.createElement("option");
                    option.text = "Select Appartment";
                    option.value = "";
                    var select = document.getElementById("appartment_no");
                    select.appendChild(option);

                    for (var i = 0; i < resulta.length; i++) {
                        var option = document.createElement("option");
                        option.text = resulta[i].apartment_number;
                        option.value = resulta[i].record_id;
                        if (resulta[i].record_id == "<?php echo $complaintData[0]['apartment_id'] ?>") option.defaultSelected =
                            true;
                        var select = document.getElementById("appartment_no");
                        select.appendChild(option);
                    }
                    GetOwnerTenant();
                }


            }
        });

    }

    function GetOwnerTenant() {
        var building_id = $("#building").val();
        var apartment_id = $("#appartment_no").val();
        var data = {
            building_id: building_id,
            apartment_id: apartment_id,
        };
        $.ajax({
            url: baseurl + 'get_owner_tenant',
            type: 'POST',
            data: data,
            success: function(result) {
                resulta = JSON.parse(result);

                if (resulta.owner.length >= 1) {
                    $('#owner_id').html('');
                    for (var i = 0; i < resulta.owner.length; i++) {
                        var option = document.createElement("option");
                        option.text = resulta.owner[i].name;
                        option.value = resulta.owner[i].record_id;
                        if (resulta.owner[i].record_id == "<?php echo $complaintData[0]['owner_id'] ?>") option.defaultSelected =
                            true;
                        var select = document.getElementById("owner_id");
                        select.appendChild(option);
                    }

                } else {
                    $('#owner_id').html('');
                    var option = document.createElement("option");
                    option.text = "Select Owner";
                    option.value = "";
                    var select = document.getElementById("owner_id");
                    select.appendChild(option);


                }
                if (resulta.tenant.length >= 1) {
                    $('#tenant_id').html('');
                    for (var i = 0; i < resulta.tenant.length; i++) {
                        var option = document.createElement("option");
                        option.text = resulta.tenant[i].name;
                        option.value = resulta.tenant[i].record_id;
                        if (resulta.tenant[i].record_id == "<?php echo $complaintData[0]['tenant_id'] ?>") option.defaultSelected =
                            true;
                        var select = document.getElementById("tenant_id");
                        select.appendChild(option);
                    }
                } else {
                    $('#tenant_id').html('');
                    var option = document.createElement("option");
                    option.text = "Select Tenant";
                    option.value = "";
                    var select = document.getElementById("tenant_id");
                    select.appendChild(option);
                }


            }
        });

    }

    function SubmitProperty() {

        var form = $("#addPropertyForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#building').val() == '') {
            var value = 'Building is required';
            Toast(value);
            return false;
        }
        if ($('#appartment_no').val() == '') {
            var value = 'Appartment number is required';
            Toast(value);
            return false;
        }

        if ($('#owner_id').val() == '') {
            var value = 'Owner is required';
            Toast(value);
            return false;
        }
        if ($('#tenant_id').val() == '') {
            var value = 'Tenant name is required';
            Toast(value);
            return false;
        }
        if ($('#complaint_status').val() == '') {
            var value = 'Status is required';
            Toast(value);
            return false;
        }
        if ($('#cost').val() == '') {
            var value = 'Cost is required';
            Toast(value);
            return false;
        }
        Swal.fire({
            title: "Are you sure you want to update?",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, Update it!",
        }).then(function(result) {
            if (result.value) {
                $("#addPropertyForm").submit();
                // var value='Update Sucessfully';
                //DeleteToast(value);
                Swal.fire("Updated!", "updated Sucessfully.", "success");
            }
        });
        // if(confirm("Are you sure do you want to add?"))
        //    {
        //         $("#addPropertyForm").submit();
        //          var value='Add Sucessfully';
        //        DeleteToast(value);
        //    }

    }
    $(document).ready(function() {
        $('.summernote').summernote();
        $('.note-toolbar .note-insert').remove();
    });
    $('#saveToLocal').summernote('code', '<?= $complaintData[0]['description'] ?>')
    $('#saveToLocal').summernote({
        placeholder: 'Content',
        tabsize: 10,
        height: 200
    });
</script>