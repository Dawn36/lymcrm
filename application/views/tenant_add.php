
<form class="needs-validation" name='addTenantForm' id='addTenantForm' method='post' action="/add" novalidate>

    <div class="card mb-g">
        <input type="hidden" >
        <input type="hidden" name="table_name" value="tenant">
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">Tenant Name<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Tenant Name" type="text" id="tenant_name" name="name" value="" required="">
            <div class="invalid-feedback">
                Please Enter Tenant Name.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Tenant Email<span class="text-danger">*</span></label>
            <input class="form-control"onblur="CheckValidEmail(this.id) ,CheckEmailExit(this.value)" placeholder="Enter Tenant Email" type="email" id="tenant_email" name="email" required="">
            <div class="invalid-feedback">
                Please Enter Tenant Email.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Contact<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Mobile Number" type="text" id="contact" name="contact" >
            <div class="invalid-feedback">
                Please Enter Contact Number.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' class="btn btn-primary float-right mr-2" onclick="SubmitFromOwner()" type="button">Add</button>
        </div>
    </div>
    </div>
</form>

<script>
        function CheckEmailExit(email){
    
 var data = { email: email, table_name:'tenant' };
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
                $('#tenant_email').val('');
             }
            
           
         } 

     },
     error: function(xhr, textStatus, errorThrown) {
         alert(xhr.responseText);
     }
 });


}
   function CheckFromOwner()
    {
        var form = $("#addTenantForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#tenant_name').val() == '') {
             var value='Name Type is required';
            Toast(value);
            return false;
        }
        if ($('#tenant_email').val() == '') {
             var value='Email is required';
            Toast(value);
            
            return false;
        }
         return true;
   }
     function SubmitFromOwner()
    {
        check=CheckFromOwner();
        if(check == true)
        {
            if(confirm("Are you sure do you want to add?"))
            {
                 $( "#addTenantForm" ).submit();
                  var value='Add Sucessfully';
                DeleteToast(value);
            }
        }
    }
</script>