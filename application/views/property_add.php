<form class="needs-validation" name='addPropertyForm' id='addPropertyForm' method='post' action="/property_verification" novalidate>

    <div class="card mb-g">
        <div class="col-md-12 mt-3" style="display: none;">
            <input type="text" style="display: none;">
        </div>
        <div class="col-md-12 mb-3 mt-3">
            <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select" onchange="GetCommunity()" name="building_id" id="building" required="">
                <option value="">Select Building</option>
            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Appartment #<span style="color: red">*</span></label>
            <select class="custom-select" name="apartment_id" id="appartment_no" required="">
                <option value="">Select Appartment #</option>
            </select>
            <div class="invalid-feedback">
                Please Select Appartment Number.
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label">Community<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Community" type="text" id="community" name="community" required="">
            <div class="invalid-feedback">
                Please Enter Community.
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label">Owner<span style="color: red">*</span></label>
            <select class="custom-select" name="owner_id" id="owner" required="">
                <option value="">Select Owner</option>
                <?php for ($i = 0; $i < count($ownerData); $i++) {  ?>
                    <option value="<?php echo $ownerData[$i]['record_id'] ?>"><?php echo ucfirst($ownerData[$i]['name']) ?></option>
                <?php
                } ?>
            </select>
            <div class="invalid-feedback">
                Please Select Owner.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' onclick="SubmitProperty()" class="btn btn-primary float-right mr-2" type="button">Add</button>
        </div>
    </div>
    </div>
</form>

<script>
    GetBuilding();
    var buildingArr = '';

    function GetBuilding() {

        $.ajax({
            url: baseurl + 'building_get',

            success: function(result) {

                $('#building').html('');
                buildingArr = JSON.parse(result);
                var option = document.createElement("option");
                option.text = "Select Building";
                option.value = "";
                var select = document.getElementById("building");
                select.appendChild(option);
                for (var i = 0; i < buildingArr.length; i++) {
                    var option = document.createElement("option");
                    option.text = buildingArr[i].building_name.replace(/(\w)(\w*)/g,
                        function(g0, g1, g2) {
                            return g1.toUpperCase() + g2.toLowerCase();
                        });
                    option.value = buildingArr[i].record_id;
                    var select = document.getElementById("building");
                    select.appendChild(option);
                }
            }
        });
    }

    function GetCommunity() {
        var id = $("#building").val();
        for (var i = 0; i < buildingArr.length; i++) {
            if (buildingArr[i].record_id == id) {
                $("#community").val(buildingArr[i].building_community);
            }
        }

        var data = {
            id: id
        };
        $.ajax({
            url: baseurl + 'building_apartment',
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
                        option.value = resulta[i].record_id;
                        var select = document.getElementById("appartment_no");
                        select.appendChild(option);
                    }
                } else {
                    $('#appartment_no').html('<option value="">All apartment already added in list</option>');
                }


            }
        });

    }

    function SubmitProperty() {

        var form = $("#addPropertyForm")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');

        if ($('#building').val() == '') {
            var value = 'Building is required';
            Toast(value);
            return false;
        }
        if ($('#appartment_no').val() == '') {
            var value = 'Appartment number is required';
            Toast(value);
            return false;
        }

        if ($('#Community').val() == '') {
            var value = 'Community is required';
            Toast(value);
            return false;
        }
        if ($('#owner').val() == '') {
            var value = 'Owner name is required';
            Toast(value);
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
                $("#addPropertyForm").submit();
                // var value='Update Sucessfully';
                //DeleteToast(value);
                Swal.fire("Added!", "added Sucessfully.", "success");
            }
        });
        // if(confirm("Are you sure do you want to add?"))
        //    {
        //         $("#addPropertyForm").submit();
        //          var value='Add Sucessfully';
        //        DeleteToast(value);
        //    }

    }
    $("#community").keypress(function(e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[A-Za-z0-9 ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            return false
        }
        if ($("#community").val().length > 35) {
            return false;
        }
    });
</script>