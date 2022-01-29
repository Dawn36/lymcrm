<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<form class="needs-validation" name='addUserForm' id='addUserForm' method='post' action="/hiringrequests/addhiringrequest" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Full Name<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Full Name" type="text" id="name" name="name" required="">            
            <div class="invalid-feedback">
                Please Enter Full Name.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Select User Type<span style="color: red">*</span></label>
            <select class="custom-select" name="user_type" id="user_type" required="">
                <option value="">Select User Type</option>
                <option value="owner">Owner</option>
                <option value="tenant">Tenant</option>
            </select>
            <div class="invalid-feedback">
                Please Select User Type.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Email<span style="color: red">*</span></label>
            <select class="custom-select" name="email" id="email" required="">
                <option value="">Please Select User Type</option>
                <option value="owner">Owner</option>
                <option value="tenant">Tenant</option>
            </select>
            <div class="invalid-feedback">
                Please Select Email.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Phone Number<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Phone Number" type="number" id='contact' name='contact' required="">

            <div class="invalid-feedback">
                Please Enter Phone Number.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">New Password<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Password" type="password" id='new_pass' name='new_pass' required="">

            <div class="invalid-feedback">
                Please Enter Password.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Confirm Password" type="password" id='confirm_pass' name='confirm_pass' required="">

            <div class="invalid-feedback">
                Please Enter Confirm Password.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' class="btn btn-primary float-right mr-2" type="submit">Add</button>
        </div>
    </div>
    </div>
</form>

<script>
    $("#addUserForm").submit(function() {

        var form = $("#addUserForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#name').val() == '') {
            alert('Name Type is required');
            return false;
        }
        if ($('#user_type').val() == '') {
            alert('User Type is required');
            return false;
        }
        if ($('#email').val() == '') {
            alert('Email is required');
            return false;
        }
        if ($('#contact').val() == '') {
            alert('Phone number is required');
            return false;
        }
        if ($('#new_pass').val() == '') {
            alert('New password is required');
            return false;
        }
        if ($('#confirm_pass').val() == '') {
            alert('Confirm password is required');
            return false;
        }
        if (confirm("Do you want to add user?")) {
            return true;
        } else {
            return false;
        }

    });
</script>