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
</style>
<form class="needs-validation" name='addUserForm' id='addUserForm' method='post' action="/user_verification" novalidate>
    <input type="hidden">
    <input type="hidden" name="email_id" id='email_id' value="">
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

</style>
<form class="needs-validation" name='addUserForm' id='addUserForm' method='post' action="/user_verification" novalidate>
    <input type="hidden" >
    <input type="hidden" name="email_id" id='email_id' value="" >
>>>>>>> 3bdb593 (Initial commit)
    <div class="card mb-g">
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Select User Type<span style="color: red">*</span></label>
            <select class="custom-select" onchange="GetOwnerTenant(this.value)" name="user_type" id="user_type" required="">
                <option value="">Select User Type</option>
                <option value="<? echo OWNER ?>">Owner</option>
                <option value="<? echo TENANT ?>">Tenant</option>
            </select>
            <div class="invalid-feedback">
                Please Select User Type.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Email<span style="color: red">*</span></label>
            <select class="custom-select" name="email" id="user_email" required="" onchange="GetFullName()">
                <option value="">Select Email</option>
<<<<<<< HEAD

=======
                
>>>>>>> 3bdb593 (Initial commit)
            </select>
            <div class="invalid-feedback">
                Please Select Email.
            </div>
        </div>
        <div class="col-md-12  mb-3">
            <label class="form-label">Full Name<span class="text-danger">*</span></label>
<<<<<<< HEAD
            <input class="form-control" placeholder="Enter Full Name" type="text" id="user_name" name="name" required="">
=======
            <input class="form-control" placeholder="Enter Full Name" type="text" id="user_name" name="name" required="">            
>>>>>>> 3bdb593 (Initial commit)
            <div class="invalid-feedback">
                Please Enter Full Name.
            </div>

        </div>
<<<<<<< HEAD

        <div class="col-md-12 mb-3">
            <label class="form-label">Phone Number</label>
            <input class="form-control" placeholder="Enter Phone Number" type="text" id='user_contact' name='contact'>
=======
        
        <div class="col-md-12 mb-3">
            <label class="form-label">Phone Number</label>
            <input class="form-control" placeholder="Enter Phone Number" type="text" id='user_contact' name='contact' >
>>>>>>> 3bdb593 (Initial commit)

            <div class="invalid-feedback">
                Please Enter Phone Number.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">New Password<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Password" type="password" id='new_pass' name='new_pass' required=""><i id="show_passworda" class="fal fa-eye eye"></i>

            <div class="invalid-feedback">
                Please Enter Password.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Confirm Password" type="password" id='confirm_pass' name='confirm_pass' required=""><i id="comfirmp_password" class="fal fa-eye eye"></i>

            <div class="invalid-feedback">
                Please Enter Confirm Password.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' class="btn btn-primary float-right mr-2" onclick="AddUsers()" type="button">Add</button>
        </div>
    </div>
    </div>
</form>

<script>
<<<<<<< HEAD
    $("#show_passworda").click(function() {

        var x = document.getElementById("new_pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    });
    $("#comfirmp_password").click(function() {

        var x = document.getElementById("confirm_pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    });
    var resulta = '';

    function GetFullName() {
        var id = $("#user_email").find(':selected').data('record_id');
        for (var i = 0; i < resulta.length; i++) {
            if (resulta[i].record_id == id) {
=======
    $("#show_passworda").click(function(){
 
    var x = document.getElementById("new_pass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });
   $("#comfirmp_password").click(function(){
 
    var x = document.getElementById("confirm_pass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });
    var  resulta='';
    function GetFullName()
    {
        var id=$("#user_email").find(':selected').data('record_id');
        for(var i = 0; i < resulta.length ; i++){
            if(resulta[i].record_id == id)
            {
>>>>>>> 3bdb593 (Initial commit)
                $("#user_name").val(resulta[i].name);
                $("#user_contact").val(resulta[i].phone_number);
            }
        }
    }
<<<<<<< HEAD

    function GetOwnerTenant(id) {
        var data = {
            id: id
        };
        $.ajax({
            url: baseurl + 'owner_tenant_email',
            type: 'POST',
            data: data,
            success: function(result) {
                resulta = JSON.parse(result);

                if (resulta.length >= 1) {
                    $('#user_email').html('');
                    var option = document.createElement("option");
                    option.text = "Select Email";
                    option.value = "";
                    var select = document.getElementById("user_email");
                    select.appendChild(option);

                    for (var i = 0; i < resulta.length; i++) {
                        var option = document.createElement("option");
                        option.text = resulta[i].email;
                        option.value = resulta[i].email;
                        option.setAttribute('data-record_id', resulta[i].record_id);
                        var select = document.getElementById("user_email");
                        select.appendChild(option);
                    }
                } else {
                    $('#user_email').html('<option value="">All user already added in list</option>');
                }


            }
        });

    }

    function CheckFromOwner() {
=======
    
function GetOwnerTenant(id)
{
    var data = {
        id: id
    };
    $.ajax({
        url: baseurl + 'owner_tenant_email',
        type: 'POST',
        data: data,
        success: function(result) {
           resulta=JSON.parse(result);
          
          if(resulta.length >= 1)
          {
            $('#user_email').html('');
             var option = document.createElement("option");
            option.text = "Select Email";
            option.value = "";
            var select = document.getElementById("user_email");
            select.appendChild(option);

            for(var i = 0; i < resulta.length ; i++){
             var option = document.createElement("option");
            option.text = resulta[i].email;
            option.value = resulta[i].email;
            option.setAttribute('data-record_id', resulta[i].record_id);
            var select = document.getElementById("user_email");
            select.appendChild(option);
            }
          }
          else
          {
            $('#user_email').html('<option value="">All user already added in list</option>');
          }
            

        }
    });

}
function CheckFromOwner()
{
>>>>>>> 3bdb593 (Initial commit)
        var form = $("#addUserForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#user_type').val() == '') {
<<<<<<< HEAD
            var value = 'User Type is required';
=======
            var value='User Type is required';
>>>>>>> 3bdb593 (Initial commit)
            Toast(value);
            return false;
        }
        if ($('#user_email').val() == '') {
<<<<<<< HEAD
            var value = 'Email is required';
=======
            var value='Email is required';
>>>>>>> 3bdb593 (Initial commit)
            Toast(value);
            return false;
        }
        if ($('#user_name').val() == '') {
<<<<<<< HEAD
            var value = 'Name Full is required';
            Toast(value);
            return false;
        }


=======
            var value='Name Full is required';
            Toast(value);
            return false;
        }
        
        
>>>>>>> 3bdb593 (Initial commit)
        // if ($('#user_contact').val() == '') {
        //      var value='Phone number is required';
        //     Toast(value);
        //     return false;
        // }
        if ($('#new_pass').val() == '') {
<<<<<<< HEAD
            var value = 'New password is required';
=======
            var value='New password is required';
>>>>>>> 3bdb593 (Initial commit)
            Toast(value);
            return false;
        }
        if ($('#confirm_pass').val() == '') {
<<<<<<< HEAD
            var value = 'Confirm password is required';
            Toast(value);
            return false;
        }
        if ($('#confirm_pass').val() != $('#new_pass').val()) {
            var value = 'Password not match';
=======
            var value='Confirm password is required';
            Toast(value);
            return false;
        }
        if($('#confirm_pass').val() != $('#new_pass').val())
        {
            var value='Password not match';
>>>>>>> 3bdb593 (Initial commit)
            Toast(value);
            $('#confirm_pass').val('');
            $('#new_pass').val('');
            return false;
        }
        return true;
<<<<<<< HEAD
    }

    function AddUsers() {
        check = CheckFromOwner();
        if (check == true) {
            Swal.fire({
                title: "Are you sure you want to add?",
                text: "You won't be able to revert this!",
                type: "warning",
                confirmButtonColor: '#437dd0',
                showCancelButton: true,
                confirmButtonText: "Yes, Add it!",
            }).then(function(result) {
                if (result.value) {
                    var recordId = $("#user_email").find(':selected').data('record_id');
                    $('#email_id').val(recordId);
                    $("#addUserForm").submit();
                    Swal.fire("Added!", "added Sucessfully.", "success");
                }
            });
=======
   }
    function AddUsers()
    {
        check=CheckFromOwner();
        if(check == true)
        {
             Swal.fire(
                    {
                        title: "Are you sure you want to add?",
                        // text: "You won't be able to revert this!",
                        type: "warning",
                        confirmButtonColor: '#437dd0',
                        showCancelButton: true,
                        confirmButtonText: "Yes, Add it!",
                    }).then(function(result)
                    {
                        if (result.value)
                        {
                           var recordId=$("#user_email").find(':selected').data('record_id');
                $('#email_id').val(recordId);
                 $("#addUserForm").submit();
                            Swal.fire("Added!", "Added Sucessfully.", "success");
                        }
                    });
>>>>>>> 3bdb593 (Initial commit)
            // if(confirm("Are you sure do you want to add?"))
            // {
            //     var recordId=$("#user_email").find(':selected').data('record_id');
            //     $('#email_id').val(recordId);
            //      $("#addUserForm").submit();
            //       var value='Add Sucessfully';
            //     DeleteToast(value);
            // }
        }
    }
</script>