<form class="needs-validation" name='addPropertyForm' id='addPropertyForm' method='post' action="complaint_cost_update" novalidate>

    <input type="hidden" name='complaint_id' value="<?= $id ?>" />
    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>
        <div class="col-md-12 mb-3 mt-3">
            <label class="form-label">Currency<span style="color: red">*</span></label>
            <select class="custom-select" name="currency" id="currency" required="">
                <option value="">Select currency</option>
                <option value="ALL Lek">ALL Lek</option>
                <option value="AFN ؋">AFN ؋</option>
                <option value="ARS $">ARS $</option>
                <option value="AWG ƒ">AWG ƒ</option>
                <option value="AUD $">AUD $</option>
                <option value="AZN ₼">AZN ₼</option>
                <option value="BSD $">BSD $</option>
                <option value="BBD $">BBD $</option>
                <option value="BYN	Br">BYN Br</option>
                <option value="BZD	BZ$">BZD BZ$</option>
                <option value="BMD	$">BMD $</option>
                <option value="BOB	$b">BOB $b</option>
                <option value="BAM	KM">BAM KM</option>
                <option value="BWP	P">BWP P</option>
                <option value="BGN	лв">BGN лв</option>
                <option value="BRL	R$">BRL R$</option>
                <option value="BND	$">BND $</option>
                <option value="KHR	៛">KHR ៛</option>
                <option value="CAD	$">CAD $</option>
                <option value="KYD	$">KYD $</option>
                <option value="CLP	$">CLP $</option>
                <option value="CNY	¥">CNY ¥</option>
                <option value="COP	$">COP $</option>
                <option value="CRC	₡">CRC ₡</option>
                <option value="HRK	kn">HRK kn</option>
                <option value="CUP	₱">CUP ₱</option>
                <option value="CZK	Kč">CZK Kč</option>
                <option value="DKK	kr">DKK kr</option>
                <option value="DOP	RD$">DOP RD$</option>
                <option value="XCD	$">XCD $</option>
                <option value="EGP	£">EGP £</option>
                <option value="SVC	$">SVC $</option>
                <option value="EUR	€">EUR €</option>
                <option value="FKP	£">FKP £</option>
                <option value="FJD	$">FJD $</option>
                <option value="GHS	¢">GHS ¢</option>
                <option value="GIP	£">GIP £</option>
                <option value="GTQ	Q">GTQ Q</option>
                <option value="GGP	£">GGP £</option>
                <option value="GYD	$">GYD $</option>
                <option value="HNL	L">HNL L</option>
                <option value="HKD	$">HKD $</option>
                <option value="HUF	Ft">HUF Ft</option>
                <option value="ISK	kr">ISK kr</option>
                <option value="INR	₹">INR ₹</option>
                <option value="DR	Rp">DR Rp</option>
                <option value="IRR	﷼">IRR ﷼</option>
                <option value="IMP	£">IMP £</option>
                <option value="ILS	₪">ILS ₪</option>
                <option value="JMD	J$">JMD J$</option>
                <option value="JPY	¥">JPY ¥</option>
                <option value="JEP	£">JEP £</option>
                <option value="KZT	лв">KZT лв</option>
                <option value="KPW	₩">KPW ₩</option>
                <option value="KRW	₩">KRW ₩</option>
                <option value="KGS	лв">KGS лв</option>
            </select>
            <div class="invalid-feedback">
                Please Select Currency.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" style="margin-top: 14px;">Maintenance cost<span style="color: red">*</span></label>
            <input class="form-control" placeholder="Enter Maintenance cost" type="text" id='cost' name='cost' required>
            <div class="invalid-feedback">
                Please Enter Maintenance cost.
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" style="margin-top: 14px;">Remarks<span style="color: red">*</span></label>
            <textarea class="form-control" placeholder="Enter Remarks cost" type="text" id='remarks' name='remarks' required></textarea>
            <div class="invalid-feedback">
                Please Enter Remarks cost.
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' onclick="SubmitProperty()" class="btn btn-primary float-right mr-2" type="button">Update</button>
        </div>
    </div>
</form>

<script>
    function SubmitProperty() {

        var form = $("#addPropertyForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#currency').val() == '') {
            var value = 'Currency is required';
            Toast(value);
            return false;
        }
        if ($('#cost').val() == '') {
            var value = 'Cost is required';
            Toast(value);
            return false;
        }
        if ($('#remarks').val() == '') {
            var value = 'remarks is required';
            Toast(value);
            return false;
        }
        Swal.fire({
            title: "Are you sure you want to add cost?",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, Update it!",
        }).then(function(result) {
            if (result.value) {
                $("#addPropertyForm").submit();
                // var value='Update Sucessfully';
                //DeleteToast(value);
                Swal.fire("Updated!", "updated Sucessfully.", "success");
            }
        });
        // if(confirm("Are you sure do you want to add?"))
        //    {
        //         $("#addPropertyForm").submit();
        //          var value='Add Sucessfully';
        //        DeleteToast(value);
        //    }

    }
</script>