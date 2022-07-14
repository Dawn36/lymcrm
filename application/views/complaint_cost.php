<form class="needs-validation" name='addPropertyForm' id='addPropertyForm' method='post' action="complaint_cost_update" novalidate>

    <input type="hidden" name='complaint_id' value="<?= $id ?>" />
    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label" style="margin-top: 14px;">Maintenance cost<span style="color: red">*</span></label>
            <input class="form-control" placeholder="Enter Maintenance cost" type="text" id='cost' name='cost' required>
            <div class="invalid-feedback">
                Please Enter Maintenance cost.
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' onclick="SubmitProperty()" class="btn btn-primary float-right mr-2" type="button">Update</button>
        </div>
    </div>
</form>

<script>
    function SubmitProperty() {

        var form = $("#addPropertyForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');


        if ($('#cost').val() == '') {
            var value = 'Cost is required';
            Toast(value);
            return false;
        }
        Swal.fire({
            title: "Are you sure you want to add cost?",
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
</script>