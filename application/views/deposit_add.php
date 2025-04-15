<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<<<<<<< HEAD
<form class="needs-validation" name='addDepositForm' id='addDepositForm' method='post' action="/deposit_verification" novalidate enctype="multipart/form-data">
    <input type="hidden" name="auto_send" id="auto_send" value="0">
=======
<form class="needs-validation" name='addDepositForm' id='addDepositForm' method='post' action="/deposit_verification" novalidate  enctype="multipart/form-data">
       <input type="hidden" name="auto_send" id="auto_send" value="0">
>>>>>>> 3bdb593 (Initial commit)
    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select required" name="building_id" id="building" onchange="GetApartment()" required="">
<<<<<<< HEAD
                <option value="">Select Building</option>
                <?php for ($i = 0; $i < count($buildingData); $i++) {
                ?>
                    <option value="<?php echo $buildingData[$i]['building_id'] ?>"><?php echo ucfirst($buildingData[$i]['building_name']) ?></option>
                <?php } ?>
=======
                <option value="">Select Building </option>
                <?php for ($i=0; $i <count($buildingData) ; $i++) { 
                  ?>
                   <option value="<?php echo $buildingData[$i]['building_id'] ?>"><?php echo ucfirst($buildingData[$i]['building_name']) ?></option>
               <?php } ?>
>>>>>>> 3bdb593 (Initial commit)
            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Appartment #<span style="color: red">*</span></label>
            <select class="custom-select required" onchange="GetTenant()" name="appartment_id" id="appartment_no" required="">
                <option value="">Select Appartment</option>
            </select>
            <div class="invalid-feedback">
                Please Select Appartment Number.
            </div>
        </div>
<<<<<<< HEAD
        <div class="col-md-12 mt-3">
            <label class="form-label">Tenant<span style="color: red">*</span></label>
            <select class="custom-select required" name="tenant_id" id="tenant" required="">
                <option value="">Select Tenant</option>

=======
         <div class="col-md-12 mt-3">
            <label class="form-label">Tenant<span style="color: red">*</span></label>
            <select class="custom-select required" name="tenant_id" id="tenant" required="">
                <option value="">Select Tenant</option>
                
>>>>>>> 3bdb593 (Initial commit)
            </select>
            <div class="invalid-feedback">
                Please Select Tenant Number.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Type<span style="color: red">*</span></label>
            <select class="custom-select required" name="type" id="type" onchange="GetCheque()" required="">
                <option value="">Select Cheque / Cash</option>
                <option value="cheque">Cheque</option>
                <option value="cash">Cash</option>
            </select>
            <div class="invalid-feedback">
                Please Select Type.
            </div>
        </div>

        <div class="col-md-12 mt-3  mb-3">
<<<<<<< HEAD
            <label class="form-label" id="cheque_cash">Cheque #<span style="color: red">*</span></label>
            <select class="custom-select required" name="cheque_no" id="cheque_no" onchange="GetPaymentDate(this.value)" required="">
                <option value="">Select Cheque / Cash</option>

=======
            <label class="form-label">Cheque #/ Cash<span style="color: red">*</span></label>
            <select class="custom-select required" name="cheque_no" id="cheque_no" onchange="GetPaymentDate(this.value)" required="">
                <option value="">Select Cheque / Cash</option>
                
>>>>>>> 3bdb593 (Initial commit)
            </select>
            <div class="invalid-feedback">
                Please Select Cheque Number.
            </div>
        </div>
        <div class="col-md-12  mb-3">
            <label class="form-label">Amount</label>
<<<<<<< HEAD
            <input class="form-control" placeholder="Amount" type="text" id="amount" disabled>
=======
            <input class="form-control" placeholder="Amount" type="text" id="amount"  disabled>
>>>>>>> 3bdb593 (Initial commit)

        </div>
        <div class="col-md-12  mb-3">
            <label class="form-label">Cheque / Cash Date</label>
<<<<<<< HEAD
            <input class="form-control" placeholder="Cheque / Cash Date" type="text" id="payment_date" disabled>

        </div>
        <div class="col-md-12 mb-3">
            <input class="form-control alphaonly mt-3" type="file" onchange="return fileValidation()" id='file_uploade' name='deposit[]' multiple>
=======
            <input class="form-control" placeholder="Cheque / Cash Date" type="text" id="payment_date"  disabled>

        </div>
        <div class="col-md-12 mb-3">
           <input class="form-control alphaonly mt-3" type="file" onchange="return fileValidation()" id='file_uploade' name='deposit[]' multiple>
>>>>>>> 3bdb593 (Initial commit)
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-3 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' id='depositaddformsubmit' onclick="SubmitFrom()" class="btn btn-primary float-right mr-2" type="button">Add</button>
        </div>
    </div>
    </div>
</form>

<script>
<<<<<<< HEAD
    function fileValidation() {
=======
 function fileValidation() {
>>>>>>> 3bdb593 (Initial commit)
        var fileInput = document.getElementById('file_uploade');

        var filePath = fileInput.value;

        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;

<<<<<<< HEAD
        if (!allowedExtensions.exec(filePath)) {
            // alert('Invalid file type only png file is accepted!');
            value = 'Invalid file type only png, jpg, jpeg, gif file is accepted!';
            Toast(value);
            fileInput.value = '';
            return false;
        } else {
            return true;
        }
    }
    var checkArray = '';

    function GetPaymentDate(val) {
        if (val == 1) {
            $("#payment_date").val("No Date Found");
            $("#amount").val("No Date Found");
        }
        if (val == "") {
            $("#payment_date").val("Cheque / Cash Date");
            $("#amount").val("Amount");
        } else {
            var id = $("#cheque_no").find(':selected').data('record_id');
            for (var i = 0; i < checkArray.length; i++) {

                if (checkArray[i].record_id == id) {
                    paymentDate = checkArray[i].payment_date.split(" ");
                    $("#payment_date").val(paymentDate[0]);
                    $("#amount").val(checkArray[i].amount);

                }
            }
        }

    }

    function GetCheque() {
        var type = $("#type").val();
        var tenantId = $("#tenant").val();
        $("#cheque_cash").text(type.toUpperCase());
        var data = {
            type: type,
            tenantId: tenantId
        };
        $.ajax({
            url: baseurl + 'deposit_cheque',
            type: 'POST',
            data: data,
            success: function(result) {
                checkArray = JSON.parse(result);
                resulta = JSON.parse(result);
                console.log(resulta);
                if (resulta.length >= 1) {
                    $('#cheque_no').html('');
                    var option = document.createElement("option");
                    option.text = "Select " + type;
                    option.value = "";
                    var select = document.getElementById("cheque_no");
                    select.appendChild(option);

                    for (var i = 0; i < resulta.length; i++) {
                        var option = document.createElement("option");
                        option.text = resulta[i].cheque_no;
                        option.value = resulta[i].record_id;
                        option.setAttribute('data-record_id', resulta[i].record_id);
                        var select = document.getElementById("cheque_no");
                        select.appendChild(option);
                    }
                } else {
                    $('#cheque_no').html('<option value="">No ' + type + ' Found</option>');
                    GetPaymentDate('1');
                }


            }
        });
    }

    function GetTenant() {
        var appartmentId = $("#appartment_no").val();
        //alert(appartmentId);
        var data = {
            appartmentId: appartmentId
        };
        $.ajax({
            url: baseurl + 'deposit_tenant',
            type: 'POST',
            data: data,
            success: function(result) {
                resulta = JSON.parse(result);
                if (resulta.length >= 1) {
                    $('#tenant').html('');
                    //  var option = document.createElement("option");
                    // option.text = "Select Tenant";
                    // option.value = "";
                    // var select = document.getElementById("tenant");
                    // select.appendChild(option);

                    for (var i = 0; i < resulta.length; i++) {
                        var option = document.createElement("option");
                        option.text = resulta[i].name;
                        option.value = resulta[i].record_id;
                        var select = document.getElementById("tenant");
                        select.appendChild(option);
                    }
                } else {
                    $('#tenant').html('<option value="">No Tenant Found</option>');
                }


            }
        });
    }

    function GetApartment() {
        var building = $("#building").val();
        var data = {
            building: building
        };
        $.ajax({
            url: baseurl + 'deposit_apartment',
            type: 'POST',
            data: data,
            success: function(result) {
                resulta = JSON.parse(result);

                if (resulta.length >= 1) {
                    $('#appartment_no').html('');
                    var option = document.createElement("option");
                    option.text = "Select Appartment";
                    option.value = "";
                    var select = document.getElementById("appartment_no");
                    select.appendChild(option);

                    for (var i = 0; i < resulta.length; i++) {
                        var option = document.createElement("option");
                        option.text = resulta[i].apartment_number;
                        option.value = resulta[i].apartment_id;
                        var select = document.getElementById("appartment_no");
                        select.appendChild(option);
                    }
                } else {
                    $('#appartment_no').html('<option value="">No Apartment Found</option>');
                }


            }
        });
    }

=======
        // if (!allowedExtensions.exec(filePath)) {
        //   // alert('Invalid file type only png file is accepted!');
        //     value='Invalid file type only png, jpg, jpeg, gif file is accepted!';
        //     Toast(value);
        //     fileInput.value = '';
        //     return false;
        // } else {
        //     return true;
        // }
        return true;
    }
     function GetCheque()
    {
        var type=$("#type").val();
        var tenantId=$("#tenant").val();
        var data = {
        type: type,
        tenantId: tenantId
    };
    $.ajax({
        url: baseurl + 'deposit_cheque',
        type: 'POST',
        data: data,
        success: function(result) {
           checkArray = JSON.parse(result);
            resulta = JSON.parse(result);
          
          if(resulta.length >= 1)
          {
            $('#cheque_no').html('');
             var option = document.createElement("option");
            option.text = "Select "+type;
            option.value = "";
            var select = document.getElementById("cheque_no");
            select.appendChild(option);

            for(var i = 0; i < resulta.length ; i++){
             var option = document.createElement("option");
            option.text = resulta[i].cheque_no;
            option.value = resulta[i].record_id;
            option.setAttribute('data-record_id', resulta[i].record_id);
            var select = document.getElementById("cheque_no");
            select.appendChild(option);
            }
          }
          else
          {
            $('#cheque_no').html('<option value="">No '+type+' Found</option>');
            GetPaymentDate('1');
          }
            

        }
    });
    }
       var checkArray='';
    function GetPaymentDate(val) {
        if(val == 1)
        {
            $("#payment_date").val("No Date Found");
            $("#amount").val("No Date Found");
        }
        if(val == "")
        {
            $("#payment_date").val("Cheque / Cash Date");
            $("#amount").val("Amount");
        }
        else
        {
           var id = $("#cheque_no").find(':selected').data('record_id');
        for (var i = 0; i < checkArray.length; i++) {
            if (checkArray[i].record_id == id) {
                paymentDate=checkArray[i].payment_date.split(" ");
                $("#payment_date").val(paymentDate[0]);
                $("#amount").val(checkArray[i].amount);
            }
        } 
        }
        
    }
    function GetTenant()
    {
        var appartmentId=$("#appartment_no").val();
        //alert(appartmentId);
        var data = {
        appartmentId: appartmentId
    };
    $.ajax({
        url: baseurl + 'deposit_tenant',
        type: 'POST',
        data: data,
        success: function(result) {
           resulta=JSON.parse(result);
          debugger;
          if(resulta.length >= 1)
          {
            $('#tenant').html('');
             var option = document.createElement("option");
            option.text = "Select Tenant";
            option.value = "";
            var select = document.getElementById("tenant");
            select.appendChild(option);

            for(var i = 0; i < resulta.length ; i++){
             var option = document.createElement("option");
            option.text = resulta[i].name;
            option.value = resulta[i].record_id;
            var select = document.getElementById("tenant");
            select.appendChild(option);
            }
          }
          else
          {
            $('#tenant').html('<option value="">No Tenant Found</option>');
          }
            

        }
    });
    }
    function GetApartment()
    {
        var building=$("#building").val();
        var data = {
        building: building
    };
    $.ajax({
        url: baseurl + 'deposit_apartment',
        type: 'POST',
        data: data,
        success: function(result) {
           resulta=JSON.parse(result);
          
          if(resulta.length >= 1)
          {
            $('#appartment_no').html('');
             var option = document.createElement("option");
            option.text = "Select Appartment";
            option.value = "";
            var select = document.getElementById("appartment_no");
            select.appendChild(option);

            for(var i = 0; i < resulta.length ; i++){
             var option = document.createElement("option");
            option.text = resulta[i].apartment_number;
            option.value = resulta[i].apartment_id;
            var select = document.getElementById("appartment_no");
            select.appendChild(option);
            }
          }
          else
          {
            $('#appartment_no').html('<option value="">No Apartment Found</option>');
          }
            

        }
    });
    }
>>>>>>> 3bdb593 (Initial commit)
    function SubmitFrom() {

        var form = $("#addDepositForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#building').val() == '') {
            var value = 'Building name is required';
            Toast(value);
            $('#building').focus();
            return false;
        }
        if ($('#appartment_no').val() == '') {
            var value = 'Appartment no is required';
            Toast(value);
            $('#appartment_no').focus();
            return false;
        }
        if ($('#tenant').val() == '') {
            var value = 'Tenant is required';
            Toast(value);
            $('#tenant').focus();
            return false;
        }
        if ($('#type').val() == '') {
            var value = 'Type is required';
            Toast(value);
            $('#type').focus();
            return false;
        }
        if ($('#cheque_no').val() == '') {
            var value = 'Cheque no is required';
            Toast(value);
            $('#cheque_no').focus();
            return false;
        }
        Swal.fire({
<<<<<<< HEAD
            title: "Do you want to send Email?",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Send it now",
            cancelButtonText: "Send it later"
        }).then(function(result) {
            if (result.dismiss == 'cancel') {
                $('#auto_send').val('0');
                $("#addDepositForm").submit();
                Swal.fire("Added!", "added Sucessfully.", "success");
            }
            if (result.value) {

                $('#auto_send').val('1');
                var addDepositForm = document.getElementById('addDepositForm');
                var formData = new FormData(addDepositForm);
                $.ajax({

                    url: baseurl + 'deposit_verification',
                    type: 'POST',
                    data: formData,
                    success: function(result) {
                        $('.modal-title').html('Email Deposit Slip');
                        //  $('#modal-body').html(``);
                        $('#modal-body').html(result);
                        $('#myModal').modal();

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });

                // var value='Update Sucessfully';
                //DeleteToast(value);

            }
        });

    }
=======
                    title: "Do you want to send Email?",
                    type: "warning",
                    confirmButtonColor: '#437dd0',
                    showCancelButton: true,
                    confirmButtonText: "Send it now",
                    cancelButtonText: "Send it later"
                }).then(function(result) {
                     if(result.dismiss == 'cancel')
                        {
                            $('#auto_send').val('0');
                            $("#addDepositForm").submit();
                            Swal.fire("Added!", "added Sucessfully.", "success");
                        }
                    if (result.value) {
                       
                        $('#auto_send').val('1');
                         var addDepositForm = document.getElementById('addDepositForm');
                            var formData = new FormData(addDepositForm); 
                        $.ajax({
                             
                            url: baseurl + 'deposit_verification',
                            type: 'POST',
                            data: formData,
                            success: function(result) {
                                $('.modal-title').html('Email Deposit Slip');
                                //  $('#modal-body').html(``);
                                $('#modal-body').html(result);
                                $('#myModal').modal();

                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                        
                        // var value='Update Sucessfully';
                        //DeleteToast(value);
                        
                    }
                });
        

    }

    
>>>>>>> 3bdb593 (Initial commit)
</script>