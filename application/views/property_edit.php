<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<form class="needs-validation" name='editPropertyForm' id='editPropertyForm' method='post' action="/hiringrequests/addhiringrequest" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-1">
        <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select" name="building" id="building" required="">
                <option value="a">Building A</option>
                <option value="b">Building B</option>
            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>
        <div class="col-md-12 mt-3 mb-3">
        <label class="form-label">Appartment #<span style="color: red">*</span></label>
            <select class="custom-select" name="appartment_no" id="appartment_no" required="">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <div class="invalid-feedback">
                Please Select Appartment Number.
            </div>
        </div>

        

        <div class="col-md-12 mb-3">
            <label class="form-label">Community<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Community" type="text" id="community" name="community" value="Community A" required="">
            <div class="invalid-feedback">
                Please Enter Community.
            </div>
        </div>

        <div class="col-md-12 mb-3">
        <label class="form-label">Owner<span style="color: red">*</span></label>
            <select class="custom-select" name="owner" id="owner" required="">
                <option value="a">Owner A</option>
                <option value="b">Owner B</option>
            </select>
            <div class="invalid-feedback">
                Please Select Owner.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' class="btn btn-primary float-right mr-2" type="submit" onclick="PropertyFrom()">Update</button>
        </div>
    </div>
    </div>
</form>

<script>
    function PropertyFrom()
{
        var form = $("#editPropertyForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#building').val() == '') {
            var value='Building is required';
            Toast(value);
            return false;
        }
        if ($('#appartment_no').val() == '') {
            var value='Appartment number is required';
            Toast(value);
            return false;
        }
        
        if ($('#Community').val() == '') {
            var value='Community is required';
            Toast(value);
            return false;
        }
        if ($('#owner').val() == '') {
            var value='Owner name is required';
            Toast(value);
            return false;
        }
        if (confirm("Do you want to edit property?")) {
            return true;
        } else {
            return false;
        }
}
 $("#community").keypress(function(e){
   var keyCode = e.keyCode || e.which;
    var regex = /^[A-Za-z0-9 ]+$/;
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       return false
       }
    if( $("#community").val().length >35 ) {
            return false;
       }
  });
</script>