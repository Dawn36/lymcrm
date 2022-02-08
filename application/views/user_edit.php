<style type="text/css">
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
<form class="needs-validation" name='editUserForm' id='editUserForm' method='post' action="/user_update" novalidate>

    <div class="card mb-g">
        <input type="hidden" >
        <input type="hidden" name="user_type" value="<?php echo $usersType ?>">
        <input type="hidden" name="user_id" value="<?php echo $userInfo[0]['record_id'] ?>">
        <input type="hidden" name="owner_tenant_id" value="<?php echo $ownerTenantId ?>">
    <!--     <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Select User Type<span style="color: red">*</span></label>
            <select class="custom-select" onchange="GetOwnerTenant(this.value)" name="user_type" id="user_type" required="">
                <option value="">Select User Type</option>
                <option value="<? echo OWNER ?>" <?echo $usersType == OWNER ? 'selected': '' ?>>Owner</option>
                <option value="<? echo TENANT ?>" <?echo $usersType == TENANT ? 'selected': '' ?>>Tenant</option>
            </select>
            <div class="invalid-feedback">
                Please Select User Type.
            </div>
 onchange="GetFullName()"
        </div> -->

        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Email<span style="color: red">*</span></label>
            <input class="form-control" placeholder="Enter Full Name" type="text" id="user_email" name="user_email" value="<?php echo $userInfo[0]['email'] ?>" required="">  
            <div class="invalid-feedback">
                Please Select Email.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Full Name<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Full Name" type="text" id="user_name" name="user_name" value="<?php echo $userInfo[0]['name'] ?>" required="">            
            <div class="invalid-feedback">
                Please Enter Full Name.
            </div>

        </div>
        
        <div class="col-md-12 mb-3">
            <label class="form-label">Phone Number</label>
            <input class="form-control" placeholder="Enter Phone Number" type="text" id='user_contact' name='user_contact' value="<?php echo $userInfo[0]['phone_number'] ?>" required="">

            <div class="invalid-feedback">
                Please Enter Phone Number.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">New Password<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Password" type="password" id='new_pass' name='new_pass' value="<?php echo base64_decode($userInfo[0]['password']) ?>" required=""><i id="showss_password" class="fal fa-eye eye"></i>

            <div class="invalid-feedback">
                Please Enter Password.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Confirm Password" type="password" id='confirm_passaa' name='confirm_pass' value="<?php echo base64_decode($userInfo[0]['password']) ?>" required=""><i id="confirm_pass" class="fal fa-eye eye"></i>

            <div class="invalid-feedback">
                Please Enter Confirm Password.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' class="btn btn-primary float-right mr-2" onclick="EditUsers()" type="button">Update</button>
        </div>
    </div>
    </div>
</form>

<script>
//     GetOwnerTenant(<? echo $usersType ?>);
//      var  resulta='';
//     function GetFullName()
//     {
//         var id=$("#user_email").find(':selected').data('record_id');
//         for(var i = 0; i < resulta.length ; i++){
//             if(resulta[i].record_id == id)
//             {
//                 $("#user_name").val(resulta[i].name);
//                 $("#user_contact").val(resulta[i].phone_number);
//             }
//         }
//     }
//     function GetOwnerTenant(id)
// {
//     var data = {
//         id: id
//     };
//     $.ajax({
//         url: baseurl + 'owner_tenant_email',
//         type: 'POST',
//         data: data,
//         success: function(result) {
//            resulta=JSON.parse(result);
          
//           if(resulta.length >= 1)
//           {
//             $('#user_email').html('');
//              var option = document.createElement("option");
//             option.text = "Select Email";
//             option.value = "";
//             var select = document.getElementById("user_email");
//             select.appendChild(option);

//             for(var i = 0; i < resulta.length ; i++){
//              var option = document.createElement("option");
//             option.text = resulta[i].email;
//             option.value = resulta[i].email;
//             option.setAttribute('data-record_id', resulta[i].record_id);
//             var select = document.getElementById("user_email");
//             select.appendChild(option);
//             }
//           }
//           else
//           {
//             $('#user_email').html('<option value="">All user already added in list</option>');
//           }
            

//         }
//     });

// }
  $("#showss_password").click(function(){
 
    var x = document.getElementById("new_pass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });
   $("#confirm_pass").click(function(){
 
    var x = document.getElementById("confirm_passaa");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });

function CheckFromOwner()
{

        var form = $("#editUserForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#user_name').val() == '') {
            var value='Full Name is required';
            Toast(value);
            return false;
        }
        // if ($('#user_type').val() == '') {
        //     alert('User Type is required');
        //     return false;
        // }
        if ($('#user_email').val() == '') {
           // alert('Email is required');
            var value='Email is required';
            Toast(value);
            return false;
        }
        // if ($('#user_contact').val() == '') {
        //     var value='Phone number is required';
        //     Toast(value);
        //     return false;
        // }
        if ($('#new_pass').val() == '') {
            var value='New password is required';
            Toast(value);
            return false;
        }
        if ($('#confirm_passaa').val() == '') {
             var value='Confirm password is required';
            Toast(value);
            return false;
        }
         if($('#confirm_passaa').val() != $('#new_pass').val())
        {
            var value='Password not match';
            Toast(value);
            $('#confirm_passaa').val('');
            $('#new_pass').val('');
            return false;
        }
        return true;
   }
   function EditUsers()
    {
        check=CheckFromOwner();
        if(check == true)
        {
            
                 Swal.fire(
                    {
                        title: "Are you sure you want to update?",
                        text: "You won't be able to revert this!",
                        type: "warning",
                        confirmButtonColor: '#437dd0',
                        showCancelButton: true,
                        confirmButtonText: "Yes, update it!",
                    }).then(function(result)
                    {
                        if (result.value)
                        {
                             $("#editUserForm").submit();
                           // var value='Update Sucessfully';
                            //DeleteToast(value);
                            Swal.fire("Updated!", "Update Sucessfully.", "success");
                        }
                    });
            // if(confirm("Are you sure do you want to update?"))
            // {
            
            //     $("#editUserForm").submit();
            //       var value='Update Sucessfully';
            //     DeleteToast(value);
            // }
        }
    }
</script>