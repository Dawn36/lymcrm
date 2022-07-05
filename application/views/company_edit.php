<style type="text/css">
    .mt {
        margin-top: 10px;
    }

    .eye {
        float: right;
        margin-top: -26px;
        margin-right: 6px;

    }

    .mr4 {
        margin-right: 4px;
    }
</style>

<div class="card mb-g">
    <form class="needs-validation" method="post" action="edit_company" id='companyeditforms' name='companyeditforms'>
        <input type="hidden" name="table_name" value="company">
        <input type="hidden" name="record_id" value="<?php echo $companyData[0]['record_id'] ?>">
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Name<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Name" type="text" id='company_name' name='name' value="<?php echo $companyData[0]['name'] ?>" required="">

            <div class="invalid-feedback">
                Please Enter the Name.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Email<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Email" type="text" id='company_email' name='email' value="<?php echo $companyData[0]['email'] ?>" required="" onblur="CheckValidEmail(this.id)">

            <div class="invalid-feedback">
                Please Enter the Email.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Address</label>
            <input class="form-control" placeholder="Enter address" type="text" id='address' name='address' value="<?php echo $companyData[0]['address'] ?>">
            <div class="invalid-feedback">
                Please Enter address.
            </div>

        </div>


        <div class="col-md-12 mb-3">
            <label class="form-label">Contact<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Contact" type="text" id='contact' name='contact' value="<?php echo $companyData[0]['phone_number'] ?>">
            <div class="invalid-feedback">
                Please Enter Contact.
            </div>

        </div>

</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
        <button id='adminaddformsubmit' onclick="UpdateFromCompany()" class="btn btn-primary float-right mr-2" type="button">Update</button>
    </div>
</div>
</form>
<!--      </div>
  </div>
</div>
</div>
</div>

</main> -->
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
<script type="text/javascript">
    function CheckUpdateCompany() {
        var form = $("#companyeditforms")
        // debugger;
        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#company_name').val() == '') {
            var value = 'Company name is required';
            Toast(value);
            $('#company_name').focus();
            return false;
        }
        if ($('#company_email').val() == '') {
            var value = 'Email is required';
            Toast(value);
            $('#company_email').focus();
            return false;
        }
        if ($('#address').val() == '') {
            var value = 'Address is required';
            Toast(value);
            $('#address').focus();
            return false;
        }
        if ($('#contact').val() == '') {
            var value = 'contact is required';
            Toast(value);
            $('#contact').focus();
            return false;
        }
        return true;
    }

    function UpdateFromCompany() {
        check = CheckUpdateCompany();
        if (check == true) {

            Swal.fire({
                title: "Are you sure you want to update?",
                type: "warning",
                confirmButtonColor: '#437dd0',
                showCancelButton: true,
                confirmButtonText: "Yes, update it!",
            }).then(function(result) {
                if (result.value) {
                    $("#companyeditforms").submit();
                    // var value='Update Sucessfully';
                    //DeleteToast(value);
                    Swal.fire("Updated!", "Update Sucessfully.", "success");
                }
            });
            // if(confirm("Are you sure do you want to Update?"))
            // {
            //      $( "#companyeditforms" ).submit();
            //       var value='Update Sucessfully';
            //     DeleteToast(value);
            // }
        }
    }

    $("#contact").keypress(function(e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[0-9 ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            return false
        }
        if ($("#contact").val().length > 35) {
            return false;
        }
    });
</script>