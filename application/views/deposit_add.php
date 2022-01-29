<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<form class="needs-validation" name='addDepositForm' id='addDepositForm' method='post' action="" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select required" name="building" id="building" required="">
                <option value="">Select Building</option>
                <option value="a">Building A</option>
                <option value="b">Building B</option>
            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Appartment #<span style="color: red">*</span></label>
            <select class="custom-select required" name="appartment_no" id="appartment_no" required="">
                <option value="">Select Appartment</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <div class="invalid-feedback">
                Please Select Appartment Number.
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <label class="form-label">Cheque #<span style="color: red">*</span></label>
            <select class="custom-select required" name="cheque_no" id="cheque_no" required="">
                <option value="">Select Cheque</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <div class="invalid-feedback">
                Please Select Cheque Number.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-3 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' id='depositaddformsubmit' onclick="SubmitFrom()" class="btn btn-primary float-right mr-2" type="button">Add</button>
        </div>
    </div>
    </div>
</form>

<script>
    function SubmitFrom() {

        var form = $("#addDepositForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#building').val() == '') {
            var value = 'Building name is required';
            Toast(value);
            $('#building').focus();
            return false;
        }
        if ($('#appartment_no').val() == '') {
            var value = 'Appartment no is required';
            Toast(value);
            $('#appartment_no').focus();
            return false;
        }
        if ($('#cheque_no').val() == '') {
            var value = 'Cheque no is required';
            Toast(value);
            $('#cheque_no').focus();
            return false;
        }
        if (confirm("Do you want to add Deposit Slip?")) {
            return true;
        } else {
            return false;
        }

    }
</script>