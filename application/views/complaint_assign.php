<form class="needs-validation" name='addPropertyForm' id='addPropertyForm' method='post' action="assigned_complaint" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>
        <div class="col-md-12 mb-3 mt-3">
            <input hidden name='complaint_id' value="<?php echo $complaintId ?>" />
            <label class="form-label">Company Name<span style="color: red">*</span></label>
            <select class="custom-select" name="company_id" id="company_id" required="" onchange="getCompany()">
                <option value="">Select Company Name</option>
                <?php for ($i = 0; $i < count($company); $i++) {
                ?>
                    <option value="<?php echo $company[$i]['record_id'] ?>"><?php echo ucfirst($company[$i]['name']) ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
                Please Select Company Name.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Company Email</label>
            <input class="form-control" placeholder="" type="text" id='company_email' name='company_email' readonly>
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
    aa = JSON.parse('<?= $companyjson ?>');

    function getCompany() {
        companyId = $('#company_id').val();
        for (var i = 0; i < aa.length; i++) {
            if (aa[i].record_id == companyId) {
                $("#company_email").val(aa[i].email);
            }
            if (companyId == '') {
                $("#company_email").val('');
            }
        }
    }

    function SubmitProperty() {

        var form = $("#addPropertyForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#company_id').val() == '') {
            var value = 'Company Name is required';
            Toast(value);
            return false;
        }

        Swal.fire({
            title: "Are you sure you want to assign?",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, assign it!",
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