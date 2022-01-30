<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<form class="needs-validation" name='addDepositForm' id='addDepositForm' method='post' action="" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>

        <div class="col-md-12 mt-3">
            <label class="form-label">Tenancy #<span style="color: red">*</span></label>
            <input class="form-control" placeholder="Add tenancy #" id="tenancy_no" name="tenancy_no" required>
            <div class="invalid-feedback">
                Please Select Tenancy.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select required" name="building" id="building" required="">
                <option value="">Select Building</option>
                <option value="a">Building A</option>
                <option value="b">Building B</option>
            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Appartment #<span style="color: red">*</span></label>
            <select class="custom-select required" name="appartment_no" id="appartment_no" required="">
                <option value="">Select Appartment</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <div class="invalid-feedback">
                Please Select Apartment Number.
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <label class="form-label">Tenant for Tenancy<span style="color: red">*</span></label>
            <select class="custom-select required" name="tenant" id="tenant" required="">
                <option value="">Select Tenant</option>
                <option value="1">1</option>
                <option value="2">2</option>
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

        var form = $("#addDepositForm")

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
        if ($('#appartment_no').val() == '') {
            var value = 'Appartment no is required';
            Toast(value);
            $('#appartment_no').focus();
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
        var count = document.querySelectorAll('#amount').length;
        var a = document.querySelectorAll('#amount');
        var total = 0;
        for (let index = 0; index < count; index++) {
            total += parseInt(a[index].value);
        }

        if (rentAmount != total) {
            debugger;
            var value = 'Rent amount does not match the amounts in payments';
            Toast(value);
            for (let index = 0; index < count; index++) {
                a[index].focus();
            }
            return false;
        }

        if (confirm("Do you want to add tenancy?")) {
            return true;
        } else {
            return false;
        }

    }

    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        drops: 'up',
        minDate: new Date()

    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('DD-MM-YYYY') + ' to ' + end.format('DD-MM-YYYY'));
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
                                <input type="text" class="form-control date" readonly="" placeholder="Select date" id="date" name="date[]" style="background: white;">
                                <div class="input-group-append">
                                    <span class="input-group-text fs-xl">
                                        <i class="fal fa-calendar-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3" id="cheque_no_div">
                            <label class="form-label">Cheque #<span style="color: red">*</span></label>
                            <input class="form-control" placeholder=" Add Cheque No" type="text" id="cheque_no" name="cheque_no[]" value="" required>
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

        $('.date').datepicker({
            format: 'dd/mm/yyyy',
            startDate: '0',
            autoclose: 'true'
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
</script>