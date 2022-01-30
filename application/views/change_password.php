<div class="col-xl-12">
                <form class="needs-validation" method="post" action="/change_password" id='changepasswordform' name='changepasswordform' >
                     <div class="form-row">
          <div class="col-md-6 mb-3">
              <label class="form-label">Old Password<span class="text-danger">*</span></label>
              <input class="form-control" placeholder="Enter Old Password" type="Password" id='old_passworda' name='old_password' onblur="ChangePasswordExit(this.value)" required=""><i id="old_password" class="fal fa-eye eye"></i>
              <div class="invalid-feedback">
                  Please Enter the Old Password.
              </div>
          </div>
          
      </div>
      <div class="form-row">
             <div class="col-md-6 mb-3">
              <label class="form-label">New Password<span class="text-danger">*</span></label>
              <input class="form-control"   placeholder="New Password" type="Password" id='new_passwordaa' name='new_password' required=""><i id="new_password" class="fal fa-eye eye"></i>
              <div class="invalid-feedback">
                  Please Enter Password.
              </div>
              
          </div> 
          <div class="col-md-6 mb-3">
              <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
              <input class="form-control"   placeholder="confirm" type="Password" id='confirm' name='confirm' required=""><i id="confirm_password" class="fal fa-eye eye"></i>
              <div class="invalid-feedback">
                  Please Enter Password.
              </div>
              
          </div>                                                   
          
      </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right " data-dismiss="modal">Close</button>
            <button id='js-save-btn' class="btn btn-primary float-right mr-2" onclick="ChangePassworda()" type="button">Change Password</button>
        </div>
    </div>
      
  </form>
</div>
<script>
    $("#old_password").click(function(){
 
    var x = document.getElementById("old_passworda");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });
   $("#new_password").click(function(){
 
    var x = document.getElementById("new_passwordaa");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });
   $("#confirm_password").click(function(){
 
    var x = document.getElementById("confirm");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });

 function ChangePasswordExit(oldpass) {
        var value = {
            oldpass: oldpass,
        };
        
            $.ajax({
                url: baseurl + 'admin_password_exit',
                type: 'POST',
                data: value,
                success: function(result) {
                    var result=JSON.parse(result);
                    debugger;
                    if(result == '')
                    {

                        var value='Old password do not match';
                    Toast(value);
                    $('#old_passworda').val('');
                    }
                    
                   // window.location.reload();
                    // redirect('HiringRequests/viewhiringrequest');
                   // window.location = baseurl + 'user_show';

                }
            });
         
    }

function CheckFromOwner()
{
        var form = $("#changepasswordform")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#old_passworda').val() == '') {
            var value='Old password is required';
            Toast(value);
            return false;
        }
        if ($('#new_passwordaa').val() == '') {
            var value='New password is required';
            Toast(value);
            return false;
        }
        if ($('#confirm').val() == '') {
            var value='Confirm password is required';
            Toast(value);
            return false;
        }
        
        if($('#confirm').val() != $('#new_passwordaa').val())
        {
            var value='Password not match';
            Toast(value);
            $('#confirm').val('');
            $('#new_passwordaa').val('');
            return false;
        }
        return true;
   }
    function ChangePassworda()
    {
        check=CheckFromOwner();
        if(check == true)
        {
            if(confirm("Are you sure do you want to change password?"))
            {
             
                 $("#changepasswordform").submit();
                  var value='Password Change Sucessfully';
                DeleteToast(value);
            }
        }
    }
</script>