<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<?php

$endDate = date("d/M/Y", strtotime($tenancyInfo[0]['end_date']));

?>
<form class="needs-validation"  novalidate>
    <div class="card mb-g">
        <input hidden id="tenancyId" value="<?php echo $tenancyId; ?>" />
        <input hidden id="apartmentId" value="<?php echo $apartmentId; ?>" />
        <!-- <div class="col-md-12 mt-3">
            <label class="form-label">Tenancy #<span style="color: red">*</span></label>
            <input class="form-control" placeholder="Add tenancy #" id="tenancy_no" name="tenancy_no" value="<?php echo $tenancyInfo[0]['tenancy_no']; ?>" readonly required>
            <div class="invalid-feedback">
                Please Select Tenancy.
            </div>
        </div> -->
        <div class="col-md-12 mt-3">
            <label class="form-label">End Date<span style="color: red">*</span></label>
            <div class="input-group">
                    <input style="background-color: white;" value="<?php echo $endDate ?>"  class="form-control" id="datepicker-2" readonly>
                    <input type="hidden" name="daterange" id="datepicker-3" value="">
                    <div class="input-group-append aa">
                        <span class="input-group-text fs-xl" id="calicon">
                            <i class="fal fa-calendar-alt"></i>
                        </span>
                    </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' id='depositaddformsubmit' onclick="terminate()" class="btn btn-primary float-right mr-2" type="button">Terminate</button>
        </div>
    </div>
    </div>
</form>

<script>
 $(document).ready(function() {
    $('#datepicker-2').datepicker({
         autoclose: true,
    // startDate: new Date('<?php echo $endDate ?>'),
    format: "d/M/yyyy",
    orientation: "bottom left"
        });
    });

    $('.date').datepicker({
        format: 'dd/M/yyyy',
        autoclose: 'true'
    });
    function terminate() {
        tenancyId=$('#tenancyId').val();
        apartmentId=$('#apartmentId').val();
        endDate=$('#datepicker-2').val();
        var value = {
            tenancyId: tenancyId,
            apartmentId: apartmentId,
            endDate: endDate,
        };
        Swal.fire({
            title: "Are you sure want to Terminate?",
            // text: "You won't be able to revert this!",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, terminate it!",
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    url: baseurl + 'tenancy_renew_delete',
                    type: 'POST',
                    data: value,
                    success: function(result) {
                       window.location.reload();
                    }
                });
                Swal.fire("Terminate!", "Terminated Sucessfully.", "success");
            }
        });
    }
</script>