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
    <form class="needs-validation" method="post" action="/add_company" id='companyaddform' name='companyaddform'>
        <input type="hidden" name="table_name" value="company">
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Name<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Name" type="text" id='company_name' name='name' required="">

            <div class="invalid-feedback">
                Please Enter the Name.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Email<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Email" type="text" id='company_email' name='email' required="" onblur="CheckValidEmail(this.id) ">

            <div class="invalid-feedback">
                Please Enter the Email.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Address</label>
            <input class="form-control" placeholder="Enter address" type="text" id='address' name='address'>
            <div class="invalid-feedback">
                Please Enter address.
            </div>

        </div>


        <div class="col-md-12 mb-3">
            <label class="form-label">Contact</label>
            <input class="form-control" placeholder="Enter Contact" type="text" id='contact' name='contact'>
            <div class="invalid-feedback">
                Please Enter Contact.
            </div>

        </div>

</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
        <button id='adminaddformsubmit' onclick="SubmitFromOwner()" class="btn btn-primary float-right mr-2" type="button">Add</button>
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
    var emailCheck;

    function CheckEmailExit(email) {
        var data = {
            email: email,
            table_name: 'company'
        };
        $.ajax({
            url: baseurl + 'email_exit',
            type: 'POST',
            data: data,
            success: function(result) {

                //var result = jQuery.parseJSON(result);
                if (result) {
                    var result = jQuery.parseJSON(result);
                    console.log(result);
                    if (result.length >= 1) {
                        var value = 'Email Already Exit';
                        Toast(value);
                        $('#company_email').val('');

                    } else {
                        Swal.fire({
                            title: "Are you sure you want to add?",
                            type: "warning",
                            confirmButtonColor: '#437dd0',
                            showCancelButton: true,
                            confirmButtonText: "Yes, Add it!",
                        }).then(function(result) {
                            if (result.value) {

                                $("#companyaddform").submit();
                                // var value='Update Sucessfully';
                                //DeleteToast(value);
                                Swal.fire("Added!", "added Sucessfully.", "success");
                            }
                        });

                    }
                }
            },
        });

    }

    function CheckFromOwner() {

        // alert(emailCheck);
        var form = $("#companyaddform")

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
        if (emailCheck == "") {
            var value = 'Email Already Exit';
            Toast(value);
            $('#company_email').focus();
            return false;
        }
        return true;

    }

    function SubmitFromOwner() {
        check = CheckFromOwner();

        if (check == true) {
            email = $("#company_email").val();
            CheckEmailExit(email);

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