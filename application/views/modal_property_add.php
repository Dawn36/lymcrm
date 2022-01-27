<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<form class="needs-validation" name='addPropertyForm' id='addPropertyForm' method='post' action="/hiringrequests/addhiringrequest" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3 mb-3">
        <label class="form-label">Appartment #<span style="color: red">*</span></label>
            <select class="custom-select" name="appartment_no" id="appartment_no" required="">
                <option value="">Select Appartment #</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <div class="invalid-feedback">
                Please Select Appartment Number.
            </div>
        </div>

        <div class="col-md-12 mb-3">
        <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select" name="building" id="building" required="">
                <option value="">Select Building</option>
                <option value="a">Building A</option>
                <option value="b">Building B</option>
            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label">Community<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Community" type="text" id="community" name="community" required="">
            <div class="invalid-feedback">
                Please Enter Community.
            </div>
        </div>

        <div class="col-md-12 mb-3">
        <label class="form-label">Owner<span style="color: red">*</span></label>
            <select class="custom-select" name="owner" id="owner" required="">
                <option value="">Select Owner</option>
                <option value="a">Owner A</option>
                <option value="b">Owner B</option>
            </select>
            <div class="invalid-feedback">
                Please Select Owner.
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
    $("#addPropertyForm").submit(function() {

        var form = $("#addPropertyForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#appartment_no').val() == '') {
            alert('Appartment number is required');
            return false;
        }
        if ($('#building').val() == '') {
            alert('Building is required');
            return false;
        }
        if ($('#Community').val() == '') {
            alert('Community is required');
            return false;
        }
        if ($('#owner').val() == '') {
            alert('owner name is required');
            return false;
        }
        if (confirm("Do you want to add property?")) {
            return true;
        } else {
            return false;
        }

    });
</script>