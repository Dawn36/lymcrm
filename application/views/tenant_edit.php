<form class="needs-validation" name='editTenantForm' id='editTenantForm' method='post' action="/edit" novalidate>
    <input type="hidden">
    <input type="hidden" name="table_name" value="tenant">
    <input type="hidden" name="record_id" value="<?php echo $tenantData[0]['record_id'] ?>">

    <div class="card mb-g">
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Tenant Name<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Tenant Name" type="text" id="name" name="name" value="<?php echo $tenantData[0]['name'] ?>" required="">
            <div class="invalid-feedback">
                Please Enter Tenant Name.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Tenant Email<span class="text-danger">*</span></label>
            <input class="form-control" onblur="CheckValidEmail(this.id)" placeholder="Enter Tenant Email" type="email" id="email" name="email" value="<?php echo $tenantData[0]['email'] ?>" required="">
            <div class="invalid-feedback">
                Please Enter Tenant Email.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Contact#</label>
            <input class="form-control" placeholder="Enter Mobile Number" type="text" id="contact" name="contact" value="<?php echo $tenantData[0]['phone_number'] ?>">
            <div class="invalid-feedback">
                Please Enter Mobile Number.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' class="btn btn-primary float-right mr-2" onclick="UpdateFromOwner()" type="button">Update</button>
        </div>
    </div>
    </div>
</form>

<script>
    function CheckUpdateOwner() {

        var form = $("#editTenantForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#name').val() == '') {
            var value = 'Name Type is required';
            Toast(value);
            return false;
        }
        if ($('#email').val() == '') {
            var value = 'Email is required';
            Toast(value);

            return false;
        }
        return true;
        // if ($('#contact').val() == '') {
        //      var value='Mobile number is required';
        //     Toast(value);
        //     return false;
        // }
    }

    function UpdateFromOwner() {
        check = CheckUpdateOwner();
        if (check == true) {
            Swal.fire({
                title: "Are you sure you want to update?",
                text: "You won't be able to revert this!",
                type: "warning",
                confirmButtonColor: '#437dd0',
                showCancelButton: true,
                confirmButtonText: "Yes, update it!",
            }).then(function(result) {
                if (result.value) {
                    $("#editTenantForm").submit();
                    // var value='Update Sucessfully';
                    //DeleteToast(value);
                    Swal.fire("Updated!", "Update Sucessfully.", "success");
                }
            });
            // if(confirm("Are you sure do you want to Update?"))
            // {
            //      $( "#editTenantForm" ).submit();
            //       var value='Update Sucessfully';
            //     DeleteToast(value);
            // }
        }
    }
</script>