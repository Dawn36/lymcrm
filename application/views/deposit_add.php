<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<form class="needs-validation" name='addDepositForm' id='addDepositForm' method='post' action="/deposit_verification" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select required" name="building_id" id="building" onchange="GetApartment()" required="">
                <option value="">Select Building</option>
                <?php for ($i = 0; $i < count($buildingData); $i++) {
                ?>
                    <option value="<?php echo $buildingData[$i]['building_id'] ?>"><?php echo ucfirst($buildingData[$i]['building_name']) ?></option>
                <?php } ?>
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
        <div class="col-md-12 mt-3">
            <label class="form-label">Tenant<span style="color: red">*</span></label>
            <select class="custom-select required" name="tenant_id" id="tenant" required="">
                <option value="">Select Tenant</option>

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
            <label class="form-label" id="cheque_cash">Cheque #<span style="color: red">*</span></label>
            <select class="custom-select required" name="cheque_no" id="cheque_no" required="">
                <option value="">Select Cheque / Cash</option>

            </select>
            <div class="invalid-feedback">
                Please Select Cheque Number.
            </div>
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
                resulta = JSON.parse(result);

                if (resulta.length >= 1) {
                    $('#cheque_no').html('');
                    var option = document.createElement("option");
                    option.text = "Select "+type;
                    option.value = "";
                    var select = document.getElementById("cheque_no");
                    select.appendChild(option);

                    for (var i = 0; i < resulta.length; i++) {
                        var option = document.createElement("option");
                        option.text = resulta[i].cheque_no;
                        option.value = resulta[i].record_id;
                        var select = document.getElementById("cheque_no");
                        select.appendChild(option);
                    }
                } else {
                    $('#cheque_no').html('<option value="">No '+type+' Found</option>');
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
                debugger;
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
            title: "Are you sure you want to add?",
            text: "You won't be able to revert this!",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, Add it!",
        }).then(function(result) {
            if (result.value) {
                $("#addDepositForm").submit();
                // var value='Update Sucessfully';
                //DeleteToast(value);
                Swal.fire("Added!", "added Sucessfully.", "success");
            }
        });
        // if (confirm("Do you want to add Deposit Slip?")) {
        //    $("#addDepositForm").submit();
        //     var value = 'Add Sucessfully';
        //     DeleteToast(value);
        //     return true;
        // } else {
        //     return false;
        // }

    }
</script>