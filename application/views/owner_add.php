<style type="text/css">
<<<<<<< HEAD
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
=======
.mt{
    margin-top: 10px;
}
.eye{
    float: right; 
margin-top: -26px;
margin-right: 6px;

}
.mr4{
     margin-right: 4px;
}

>>>>>>> 3bdb593 (Initial commit)
</style>
<!-- <main id="js-page-content" role="main" class="page-content"> -->


<!--     <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Owner</li>
        <li class="breadcrumb-item">Owner Add</li>
      
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol> -->
<<<<<<< HEAD
<!--  
=======
   <!--  
>>>>>>> 3bdb593 (Initial commit)
    <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Add Owner</span></h1>
    </div>
    
  </div> -->
<!--   <div class="row mt">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-container show"> -->
<<<<<<< HEAD
<div class="card mb-g">
    <form class="needs-validation" method="post" action="/add" id='owneaddform' name='owneaddform'>
        <input type="hidden" name="table_name" value="owner">
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Name<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Name" type="text" id='owner_name' name='name' required="">

            <div class="invalid-feedback">
                Please Enter the Name.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Email<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Email" type="text" id='owner_email' name='email' required="" onblur="CheckValidEmail(this.id) ">

            <div class="invalid-feedback">
                Please Enter the Email.
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
=======
                    <div class="card mb-g">
                        <form class="needs-validation" method="post" action="/add" id='owneaddform' name='owneaddform' enctype="multipart/form-data">
                        <input type="hidden" name="table_name" value="owner">
                  <div class="col-md-12 mt-3 mb-3">
                      <label class="form-label">Name<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Name" type="text" id='owner_name' name='name' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the Name.
                      </div>
                  </div>
                   <div class="col-md-12 mb-3">
                      <label class="form-label">Email<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Email" type="text" id='owner_email' name='email' required=""  onblur="CheckValidEmail(this.id)">
                       
                      <div class="invalid-feedback">
                          Please Enter the Email.
                      </div>
                  </div>
         
                 
                 
                  <div class="col-md-12 mb-3">
                      <label class="form-label">Contact</label>
                      <input class="form-control"   placeholder="Enter Contact" type="text" id='contact' name='contact' >
                      <div class="invalid-feedback">
                          Please Enter Contact.
                      </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <label class="form-label">Emirates ID Available</label>
                    <select class="custom-select" name="emirates_available" id="emirates_available" onchange="showHideEmiratesAvailable()">
                        <option value="Yes">Yes</option>
                        <option value="No" selected>No</option>
                    </select>
                    <div class="invalid-feedback">
                        Please Select Emirates ID Available.
                    </div>
                </div>
            <div id="show" >
                <div class="col-md-12 mb-3">
                    <label class="form-label">EID Number</label>
                    <input class="form-control"   placeholder="Enter EID Number" type="number" id='eid_number' name='eid_number' required="" >
                    <div class="invalid-feedback">
                        Please Enter EID Number.
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">EID date of issue</label>
                    <input class="form-control"   placeholder="Enter EID date of issue" type="date" id='eid_date_issue' name='eid_date_issue' required="" >
                    <div class="invalid-feedback">
                        Please Enter EID date of issue.
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Expiry Date</label>
                    <input class="form-control"   placeholder="Enter Expiry Date" type="date" id='expiry_date' name='expiry_date' required="" >
                    <div class="invalid-feedback">
                        Please Enter Expiry Date.
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Upload EID Image</label>
                    <input class="form-control"   placeholder="Enter Upload EID Image" type="file" id='eid_image' name='eid_image' required="" >
                    <div class="invalid-feedback">
                        Please Enter Upload EID Image.
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Passport Number</label>
                    <input class="form-control"   placeholder="Enter Passport Number" type="number" id='passport_number' name='passport_number' required="" >
                    <div class="invalid-feedback">
                        Please Enter Passport Number.
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Passport date of issue</label>
                    <input class="form-control"   placeholder="Enter Passport date of issue" type="date" id='passport_date_issue' name='passport_date_issue' required="" >
                    <div class="invalid-feedback">
                        Please Enter Passport date of issue.
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Passport Date</label>
                    <input class="form-control"   placeholder="Enter Passport Date" type="date" id='passport_expiry_date' name='passport_expiry_date' required="" >
                    <div class="invalid-feedback">
                        Please Enter Passport Date.
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Upload Passport Image</label>
                    <input class="form-control"   placeholder="Enter Upload Passport Image" type="file" id='passport_image' name='passport_image' required="" >
                    <div class="invalid-feedback">
                        Please Enter Upload Passport Image.
                    </div>
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

<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
<script type="text/javascript">
    showHideEmiratesAvailable();
    function showHideEmiratesAvailable()
    {
        if($('#emirates_available').val() == 'Yes')
            $('#show').show();
        else
            $('#show').hide();
    }
>>>>>>> 3bdb593 (Initial commit)
    var emailCheck;
    function  CheckEmailExit(email){
        var data = {
            email: email,
            table_name: 'owner'
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
                         $('#owner_email').val('');
                       
                    }
                    else
                    {
                        Swal.fire({
                title: "Are you sure you want to add?",
<<<<<<< HEAD
                text: "You won't be able to revert this!",
=======
                // text: "You won't be able to revert this!",
>>>>>>> 3bdb593 (Initial commit)
                type: "warning",
                confirmButtonColor: '#437dd0',
                showCancelButton: true,
                confirmButtonText: "Yes, Add it!",
            }).then(function(result) {
                if (result.value) {
                   
                    $("#owneaddform").submit();
                    // var value='Update Sucessfully';
                    //DeleteToast(value);
<<<<<<< HEAD
                    Swal.fire("Added!", "added Sucessfully.", "success");
=======
                    Swal.fire("Added!", "Added Sucessfully.", "success");
>>>>>>> 3bdb593 (Initial commit)
                }
            });
                        
                    }
                }
            },
        });

}

    function CheckFromOwner() {

        // alert(emailCheck);
        var form = $("#owneaddform")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#owner_name').val() == '') {
            var value = 'Owner name is required';
            Toast(value);
            $('#owner_name').focus();
            return false;
        }
        if ($('#owner_email').val() == '') {
            var value = 'Email is required';
            Toast(value);
            $('#owner_email').focus();
            return false;
        }
<<<<<<< HEAD
=======
        if ($('#emirates_available').val() == 'Yes') {
            if ($('#eid_number').val() == '') {
                var value = 'EID is required';
                Toast(value);
                $('#eid_number').focus();
                return false;
            }

            if ($('#eid_date_issue').val() == '') {
                var value = 'EID date is required';
                Toast(value);
                $('#eid_date_issue').focus();
                return false;
            }

            if ($('#expiry_date').val() == '') {
                var value = 'Expiry date is required';
                Toast(value);
                $('#expiry_date').focus();
                return false;
            }

            if ($('#eid_image').val() == '') {
                var value = 'EID image is required';
                Toast(value);
                $('#eid_image').focus();
                return false;
            }

            if ($('#passport_number').val() == '') {
                var value = 'Passport number is required';
                Toast(value);
                $('#passport_number').focus();
                return false;
            }

            if ($('#passport_date_issue').val() == '') {
                var value = 'Passport date issue is required';
                Toast(value);
                $('#passport_date_issue').focus();
                return false;
            }

            if ($('#passport_expiry_date').val() == '') {
                var value = 'Passport expiry date is required';
                Toast(value);
                $('#passport_expiry_date').focus();
                return false;
            }

            if ($('#passport_image').val() == '') {
                var value = 'Passport image is required';
                Toast(value);
                $('#passport_image').focus();
                return false;
            }
        }
>>>>>>> 3bdb593 (Initial commit)
        if (emailCheck == "") {
            var value = 'Email Already Exit';
            Toast(value);
            $('#owner_email').focus();
            return false;
        }
        return true;

    }

    function SubmitFromOwner() {
        check = CheckFromOwner();
        
        if (check == true) {
             email=$("#owner_email").val();
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
<<<<<<< HEAD
</script>
=======
</script>











                   
>>>>>>> 3bdb593 (Initial commit)
