<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<?php
// print_r($buildingInfo);
// print_r($tenantInfo);
// echo '<pre>';
<<<<<<< HEAD
=======
// print_r($tenancyInfo);
>>>>>>> 3bdb593 (Initial commit)
$endDate = date("d/M/Y", strtotime($tenancyInfo[0]['end_date']));
?>
<form class="needs-validation" name='tenancy_submit' id='tenancy_submit' method='post' action="/tenancy_renew_submit" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>
        <input id="record_id" name="record_id" value="<?php echo $tenancyInfo[0]['record_id']; ?>" hidden required>

        <div class="col-md-12 mt-3">
            <label class="form-label">Tenancy #<span style="color: red">*</span></label>
<<<<<<< HEAD
            <input class="form-control" placeholder="Add tenancy #" id="tenancy_no" name="tenancy_no" value="<?php echo $tenancyInfo[0]['tenancy_no']; ?>" required>
=======
            <input class="form-control" placeholder="Add tenancy #" id="tenancy_no" name="tenancy_no" value="<?php echo $tenancyInfo[0]['tenancy_no']; ?>" readonly required>
>>>>>>> 3bdb593 (Initial commit)
            <div class="invalid-feedback">
                Please Select Tenancy.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select required" name="building" id="building" readonly required="">
                <?php for ($i = 0; $i < count($tenancyInfo); $i++) { ?>
                    <option selected readonly value="<?php echo $tenancyInfo[$i]['building_id']; ?>"><?php echo ucfirst($tenancyInfo[$i]['building_name']); ?></option>
                <?php } ?>

            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">apartment #<span style="color: red">*</span></label>
            <select class="custom-select required" name="apartment_no" id="apartment_no" readonly required="">
                <?php for ($i = 0; $i < count($tenancyInfo); $i++) { ?>
                    <option selected readonly value="<?php echo $tenancyInfo[$i]['apartment_id']; ?>"><?php echo $tenancyInfo[$i]['apartment_number']; ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
                Please Select Apartment Number.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Tenant for Tenancy<span style="color: red">*</span></label>
            <select class="custom-select required" name="tenant" id="tenant" readonly required="">
<<<<<<< HEAD
                <?php for ($i = 0; $i < count($tenantInfo); $i++) {
                    if ($tenancyInfo[0]['tenant_id'] == $tenantInfo[$i]['record_id']) {

                ?>
                        <option selected readonly value="<?php echo $tenantInfo[$i]['record_id']; ?>"><?php echo ucfirst($tenantInfo[$i]['name']); ?></option>
                <?php }
                } ?>
=======
                <?php for ($i = 0; $i < count($tenantInfo); $i++) { 
                    if($tenancyInfo[0]['tenant_id'] == $tenantInfo[$i]['record_id'])
                    {

                    ?>
                    <option selected readonly value="<?php echo $tenantInfo[$i]['record_id']; ?>"><?php echo ucfirst($tenantInfo[$i]['name']); ?></option>
                <?php }
                    } ?>
>>>>>>> 3bdb593 (Initial commit)
            </select>
            <div class="invalid-feedback">
                Please Select Tenant.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Start And End Date<span style="color: red">*</span></label>
            <div class="input-group">
                <input type="text" class="form-control" type="text" readonly="" id="daterange" name="daterange" placeholder="Select date" style="background: white;" required>
                <div class="input-group-append">
                    <span class="input-group-text fs-xl">
                        <i class="fal fa-calendar-alt"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Rent Amount<span style="color: red">*</span></label>
            <input class="form-control" placeholder=" Add Rent Amount" type="text" id="rent_amount" name="rent_amount" required>
            <div class="invalid-feedback">
                Please Add Rent Amount.
            </div>
        </div>
        <div class="col-md-12 mt-3 mb-3">
            <label class="form-label">No of Payments<span style="color: red">*</span></label>
            <input class="form-control" placeholder="Add no of payments" id="no_of_payments" name="no_of_payments" required>
            <div class="invalid-feedback">
                Please Add No Of Payments.
            </div>
        </div>
    </div>

    <!-- <div class="card mb-g">
    <div class="col-md-12 mt-3" style="display: none;">
        <input type="text" style="display: none;">
    </div>
    <div class="col-md-12 mt-3">
        <label class="form-label">Select Payment Type:<span style="color: red">*</span></label>
        <select class="custom-select required" name="payment_type" id="payment_type" required="">
            <option value="">Select payment type</option>
            <option value="cash">cash</option>
            <option value="cheque">cheque</option>
        </select>
        <div class="invalid-feedback">
            Please Select Building.
        </div>
    </div>
    <div class="col-md-12 mt-3">
        <label class="form-label">Date<span style="color: red">*</span></label>
        <div class="input-group">
            <input type="text" class="form-control " readonly="" placeholder="Select date" id="date" name="date[]">
            <div class="input-group-append">
                <span class="input-group-text fs-xl">
                    <i class="fal fa-calendar-alt"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-3" id="cheque_no_div">
        <label class="form-label">Cheque #<span style="color: red">*</span></label>
        <input class="form-control" placeholder=" Add Cheque No" type="number" id="cheque_no" name="cheque_no" required>
        <div class="invalid-feedback">
            Please Add Cheque No.
        </div>
    </div>
    <div class="col-md-12 mt-3 mb-3">
        <label class="form-label">Amount<span style="color: red">*</span></label>
        <input class="form-control" placeholder="Add Amount" id="amount" name="amount" required>
        <div class="invalid-feedback">
            Please Add Amount.
        </div>
    </div>
</div> -->
    <div id="appendrow">
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
    function SubmitFrom() {

        var form = $("#tenancy_submit")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');


        if ($('#tenancy_no').val() == '') {
            var value = 'Tenancy # is required';
            Toast(value);
            $('#tenancy_no').focus();
            return false;
        }
        if ($('#building').val() == '') {
            var value = 'Building name is required';
            Toast(value);
            $('#building').focus();
            return false;
        }
        if ($('#apartment_no').val() == '') {
            var value = 'apartment no is required';
            Toast(value);
            $('#apartment_no').focus();
            return false;
        }
        if ($('#tenant').val() == '') {
            var value = 'Tenant Name is required';
            Toast(value);
            $('#tenant').focus();
            return false;
        }
        if ($('#daterange').val() == '') {
            var value = 'Start Date and End Date is required';
            Toast(value);
            $('#daterange').focus();
            return false;
        }
        if ($('#rent_amount').val() == '') {
            var value = 'Rent Amount is required';
            Toast(value);
            $('#rent_amount').focus();
            return false;
        }
        if ($('#no_of_payments').val() == '') {
            var value = 'No of payments are is required';
            Toast(value);
            $('#no_of_payments').focus();
            return false;
        }

        if ($('.payment_type').val() == '') {
            var value = 'payment type is required';
            Toast(value);
            $('#payment_type').focus();
            return false;
        }

        var rentAmount = $('#rent_amount').val();
        var amountCount = document.querySelectorAll('#amount').length;
        var amount = document.querySelectorAll('#amount');
        var total = 0;
        for (let index = 0; index < amountCount; index++) {
            total += parseFloat(amount[index].value);
        }

        if (rentAmount != total) {
            var value = 'Rent amount does not match the amounts in payments';
            Toast(value);
            return false;
        }

        if ($('.cheque_no:visible').length > 0) {

            for (let i = 0; i < $(".cheque_no:visible").length; i++) {
                for (let j = i + 1; j < $(".cheque_no:visible").length; j++) {

                    if ($('.cheque_no:visible')[i].value == $('.cheque_no:visible')[j].value) {
                        var value = 'duplicate cheque no';
                        Toast(value);
                        $('.cheque_no:visible')[i].focus();
                        $('.cheque_no:visible')[j].focus();
                        return false;
                        break;
                    }

                }
            }

        }
        Swal.fire({
            title: "Are you sure you want to add?",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, Add it!",
        }).then(function(result) {
            if (result.value) {
                $("#tenancy_submit").submit();
                Swal.fire("Added!", "Added Sucessfully.", "success");
            }
        });

        // if (confirm("Do you want to add tenancy?")) {
        //     $("#tenancy_submit").submit();
        //     var value = 'Add Sucessfully';
        //     DeleteToast(value);
        //     return true;
        // } else {
        //     return false;
        // }

    }

    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        drops: 'up',
        minDate: new Date('<?= $endDate ?>'),
        locale: {
            format: 'DD/MMM/YYYY'
        }

    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('DD-MMM-YYYY') + ' to ' + end.format('DD-MMM-YYYY'));
    });



    $("#no_of_payments").keyup(function() {


        $('#appendrow').children().remove();
        var count = $("#no_of_payments").val();
        var rowIdx = 0;
        for (let index = 0; index < count; index++) {

            $('#appendrow').append(` <div id="drow${++rowIdx}">
        
                            <div class="card mb-g">
                        <div class="col-md-12 mt-3" style="display: none;">
                            <input type="text" style="display: none;">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="form-label">Select Payment Type:<span style="color: red">*</span></label>
                            <select class="custom-select required payment_type" name="payment_type[]" id="payment_type" required="">
                                <option value="">Select payment type</option>
                                <option value="cash">Cash</option>
                                <option value="cheque">Cheque</option>
                            </select>
                            <div class="invalid-feedback">
                                Please Select Building.
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="form-label">Date<span style="color: red">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control datepicker" readonly="" placeholder="Select date" id="date" name="date[]" style="background: white;">
                                <div class="input-group-append">
                                    <span class="input-group-text fs-xl">
                                        <i class="fal fa-calendar-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3" id="cheque_no_div">
                            <label class="form-label">Cheque #<span style="color: red">*</span></label>
<<<<<<< HEAD
                            <input class="form-control cheque_no" placeholder=" Add Cheque No" type="text" id="cheque_no" name="cheque_no[]" value="" autocomplete="off" required>
=======
                            <input class="form-control cheque_no" placeholder=" Add Cheque No" type="text" id="cheque_no" autocomplete="off" name="cheque_no[]" value="" required>
>>>>>>> 3bdb593 (Initial commit)
                            <div class="invalid-feedback">
                                Please Add Cheque No.
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 mb-3">
                            <label class="form-label">Amount<span style="color: red">*</span></label>
                            <input class="form-control amount" placeholder="Add Amount" id="amount" name="amount[]" required>
                            <div class="invalid-feedback">
                                Please Add Amount.
                            </div>
                        </div>
                    </div>
            </div>`);
        }

        $('.datepicker').datepicker({
            format: 'd/M/yyyy',
            autoclose: 'true'
        }).datepicker("setDate", 'now');

        $('#appendrow').on('focus', ".datepicker", function() {
            $(this).datepicker();
        });

        $(".cheque_no").keypress(function(e) {
            var keyCode = e.keyCode || e.which;
            var regex = /^[0-9 ]+$/;
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                return false
            }
            if ($(".contact").val().length > 10) {
                return false;
            }
        });
    });



    $("#appendrow").on("change", "select", function() {

        var payment_type = $(this).val();

        if (payment_type == 'cash') {
            $(this).parent().parent().find('#cheque_no_div').hide()
        }
        if (payment_type == 'cheque') {
            $(this).parent().parent().find('#cheque_no_div').show()
        }
    });


    $('#building').change(function() {
        var buildingid = $('#building').val();

        var value = {
            buildingid: buildingid
        }

        $.ajax({
            url: baseurl + 'tenancy_apartment',
            type: 'POST',
            data: value,
            success: function(result) {
                apartments = JSON.parse(result);

                if (apartments.length >= 1) {
                    $('#apartment_no').html('');
                    var option = document.createElement("option");
                    option.text = "Select apartment";
                    option.value = "";
                    var select = $("#apartment_no");
                    select.append(option);

                    for (var i = 0; i < apartments.length; i++) {
                        var option = document.createElement("option");
                        option.text = apartments[i].apartment_number;
                        option.value = apartments[i].record_id;
                        var select = $("#apartment_no");
                        select.append(option);
                    }
                } else {
                    $('#apartment_no').html('<option value="">No apartments</option>');
                }

            }
        });

    });

    function ToFindDuplicates(cheque) {
        let toMap = {};
        let resultToReturn = false;
        for (let i = 0; i < cheque.length; i++) {

            if (toMap[cheque[i]]) {
                resultToReturn = true;
                // terminate the loop
                break;
            }

            toMap[cheque[i]] = true;
        }

        if (resultToReturn) {
            console.log('Duplicate elements exist');
            return false
        } else {
            console.log('Duplicates dont exist ');
            return true;
        }
    }

    $(".cheque_no").keypress(function(e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[0-9 ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            return false
        }
        if ($(".contact").val().length > 10) {
            return false;
        }
    });
</script>