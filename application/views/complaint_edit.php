<form class="needs-validation" name='editPropertyForm' id='editPropertyForm' method='post' action="#" novalidate>
    <input type="hidden">
    <div class="card mb-g">
        <div class="col-md-12 mt-1">
            <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select" onchange="GetApartmentS()" name="building" id="building" required="">

            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Appartment #<span style="color: red">*</span></label>
            <select class="custom-select" name="appartment_no" id="appartment_no" required="">
            </select>
            <div class="invalid-feedback">
                Please Select Appartment Number.
            </div>
        </div>
        <div class="col-md-12  mb-3">
            <label class="form-label">Owner<span style="color: red">*</span></label>
            <select class="custom-select" name="appartment_no" id="appartment_no" required="">
            </select>
            <div class="invalid-feedback">
                Please Select Owner.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Tenant <span style="color: red">*</span></label>
            <select class="custom-select" name="Tenant_id" id="Tenant_id" required="">
                <option value="">Select Tenant </option>
            </select>
            <div class="invalid-feedback">
                Please Select Tenant.
            </div>
        </div>
        <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>
            <div class="col-md-12 mb-3">
                <label class="form-label">Status <span style="color: red">*</span></label>
                <select class="custom-select" name="Tenant_id" id="Tenant_id" required="">
                    <option value="">Select Status </option>
                    <option value="done">Done</option>
                </select>
                <div class="invalid-feedback">
                    Please Select Status.
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label class="form-label">Maintenance cost</label>
                <input class="form-control" placeholder="Enter Maintenance cost" type="text" id='cost' name='cost'>
                <div class="invalid-feedback">
                    Please Enter Maintenance cost.
                </div>

            </div>
        <?php } ?>
        <div class="col-md-12 mb-3">
            <textarea class="summernote" id="saveToLocal" name="email_send"></textarea>
        </div>




    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' class="btn btn-primary float-right mr-2" type="submit" onclick="PropertyFromUpdate()">Update</button>
        </div>
    </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('.summernote').summernote();
        $('.note-toolbar .note-insert').remove();
    });
    $('#saveToLocal').summernote({
        placeholder: 'Email Content',
        tabsize: 10,
        height: 200
    });

    function PropertyFromUpdate() {
        var form = $("#editPropertyForm")

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

        if ($('#Community').val() == '') {
            var value = 'Community is required';
            Toast(value);
            return false;
        }
        if ($('#owner').val() == '') {
            var value = 'Owner name is required';
            Toast(value);
            return false;
        }

        Swal.fire({
            title: "Are you sure you want to update?",
            text: "You won't be able to revert this!",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, update it!",
        }).then(function(result) {
            if (result.value) {
                $("#editPropertyForm").submit();
                // var value='Update Sucessfully';
                //DeleteToast(value);
                Swal.fire("Updated!", "Update Sucessfully.", "success");
            }
        });
        // if (confirm("Do you want to Update property?")) {
        //       $("#editPropertyForm").submit();
        //           var value='Update Sucessfully';
        //         DeleteToast(value);

        // } else {
        //     return false;
        // }
    }
</script>