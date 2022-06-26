<form class="needs-validation" name='addPropertyForm' id='addPropertyForm' method='post' action="#" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>
        <div class="col-md-12 mb-3 mt-3">
            <label class="form-label">Company Name<span style="color: red">*</span></label>
            <select class="custom-select" name="building_id" id="building" required="">
                <option value="">Select Company Name</option>
            </select>
            <div class="invalid-feedback">
                Please Select Company Name.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Company Email</label>
            <input class="form-control" placeholder="" type="text" id='cost' name='cost'>
            <div class="invalid-feedback">
                Please Enter Company Email.
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' onclick="SubmitProperty()" class="btn btn-primary float-right mr-2" type="button">Add</button>
        </div>
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
            title: "Are you sure you want to add?",
            text: "You won't be able to revert this!",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, Add it!",
        }).then(function(result) {
            if (result.value) {
                $("#addPropertyForm").submit();
                // var value='Update Sucessfully';
                //DeleteToast(value);
                Swal.fire("Added!", "added Sucessfully.", "success");
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
    $('#saveToLocal').summernote({
        placeholder: 'Email Content',
        tabsize: 10,
        height: 200
    });
</script>