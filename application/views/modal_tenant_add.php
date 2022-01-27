<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<form class="needs-validation" name='addTenantForm' id='addTenantForm' method='post' action="/hiringrequests/addhiringrequest" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Tenant Name<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Tenant Name" type="text" id="name" name="name" required="">
            <div class="invalid-feedback">
                Please Enter Tenant Name.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Tenant Email<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Tenant Email" type="email" id="email" name="email" required="">
            <div class="invalid-feedback">
                Please Enter Tenant Email.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Mobile<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Mobile Number" type="number" id="contact" name="contact" required="">
            <div class="invalid-feedback">
                Please Enter Mobile Number.
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
    $("#addTenantForm").submit(function() {

        var form = $("#addTenantForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#name').val() == '') {
            alert('Name Type is required');
            return false;
        }
        if ($('#email').val() == '') {
            alert('Email is required');
            return false;
        }
        if ($('#contact').val() == '') {
            alert('Mobile number is required');
            return false;
        }
        if (confirm("Do you want to add tenant?")) {
            return true;
        } else {
            return false;
        }

    });
</script>