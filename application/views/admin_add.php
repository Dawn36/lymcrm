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
      
                    <div class="card mb-g">
                        <form class="needs-validation" method="post" id='adminaddform' name='adminaddform' action="/admin_verification" novalidate >
                             
                  <div class="col-md-12 mb-12 mt-3 mb-3">
                      <label class="form-label">Name<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Name" type="text" id='admin_name' name='admin_name' required="">
                       
                      <div class="invalid-feedback">
                          Please Enter the Name.
                      </div>
                  </div>
                   <div class="col-md-12 mb-12 mb-3">
                      <label class="form-label">Email<span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="Enter Email" type="text" id='email_name' name='email_name' required="" onblur="CheckValidEmail(this.id),CheckEmailExit(this.value)">
                       
                      <div class="invalid-feedback">
                          Please Enter the Email.
                      </div>
                  </div>
                  <div class="col-md-12 mb-12 mb-3">
                      <label class="form-label">Phone Number</label>
                      <input class="form-control" placeholder="Enter Email" type="text" id='contact_name' name='contact_number' >
                       
                      <div class="invalid-feedback">
                          Please Enter the Contact number.
                      </div>
                  </div>
                 
                  <div class="col-md-12 mb-12  mb-3">
                      <label class="form-label">New Password<span class="text-danger">*</span></label>
                      <input class="form-control"   placeholder="New Password" type="Password" id='admin_password' name='admin_password' required=""><i id="show_password" class="fal fa-eye eye"></i>
                      <div class="invalid-feedback">
                          Please Enter Password.
                      </div>
                      
                  </div>
                  <div class="col-md-12 mb-12 mb-3">
                      <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
                      <input class="form-control"   placeholder="Confirm Password" type="Password" id='confirm_password' name='confirm_password' required=""><i id="show_confirm_password" class="fal fa-eye eye"></i>
                      <div class="invalid-feedback">
                          Please Enter Password.
                      </div>
                      
                  </div>
                  </div>
                  <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='adminaddformsubmit' onclick="AddAdmin()" class="btn btn-primary float-right mr-2" type="submit">Add</button>
        </div>
    </div>
             
          </form>
      </div>
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
<script type="text/javascript">
    function CheckEmailExit(email){
    
 var data = { email: email, table_name:'users' };
 $.ajax({
     url: baseurl + 'email_exit',
     type: 'POST',
     data: data,
     success: function(result) {

         //var result = jQuery.parseJSON(result);
         if(result){
             var result = jQuery.parseJSON(result);
             console.log( result);
             if(result.length >= 1)
             {
                var value='Email Already Exit';
                Toast(value);
                $('#email_name').val('');
             }
            
           
         } 

     },
     error: function(xhr, textStatus, errorThrown) {
         alert(xhr.responseText);
     }
 });


}
      function CheckFromAdmin(){

        var form = $("#adminaddform")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#admin_name').val() == '') {
            var value='Admin name is required';
            Toast(value);
            $('#admin_name').focus();
            return false;
        }
        if ($('#email_name').val() == '') {
            var value='Email is required';
            Toast(value);
            $('#email_name').focus();
            return false;
        }
        if ($('#admin_password').val() == '') {
             var value='Password is required';
            Toast(value);
            $('#admin_password').focus();
            return false;
        }
        if ($('#confirm_password').val() == '') {
            var value='Comfirm is required';
            Toast(value);
             $('#confirm_password').focus();
            return false;
        }
         if($('#confirm_password').val() != $('#admin_password').val())
        {
            var value='Password not match';
            Toast(value);
            $('#confirm_password').val('');
            $('#admin_password').val('');
            return false;
        }
        return true;

}
function AddAdmin()
    {
        check=CheckFromAdmin();
        if(check == true)
        {
             Swal.fire(
                    {
                        title: "Are you sure you want to add?",
                        text: "You won't be able to revert this!",
                        type: "warning",
                        confirmButtonColor: '#437dd0',
                        showCancelButton: true,
                        confirmButtonText: "Yes, Add it!",
                    }).then(function(result)
                    {
                        if (result.value)
                        {
                            $("#adminaddform").submit();
                           // var value='Update Sucessfully';
                            //DeleteToast(value);
                            Swal.fire("Added!", "added Sucessfully.", "success");
                        }
                    });
            // if(confirm("Are you sure do you want to add?"))
            // {
            //      $("#adminaddform").submit();
            //       var value='Add Sucessfully';
            //     DeleteToast(value);
            // }
        }
    }
  $("#admin_name").keypress(function(e){
   var keyCode = e.keyCode || e.which;
    var regex = /^[A-Za-z0-9 ]+$/;
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       return false
       }
    if( $("#admin_name").val().length >35 ) {
            return false;
       }
  });

  $("#show_password").click(function(){
 
    var x = document.getElementById("admin_password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });
   $("#show_confirm_password").click(function(){
 
    var x = document.getElementById("confirm_password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
  });

   
</script>











                   
