<form class="needs-validation" name='editPropertyForm' id='editPropertyForm' method='post' action="/property_update" novalidate>
    <input type="hidden" >
    <input type="hidden" name="record_id" value="<?php echo $propertyInfo[0]['record_id'] ?>">
    <input type="hidden" name="apartmentIdOld" id="apartmentIdOld" value="<?php echo $apartmentId ?>">
    <div class="card mb-g">
        <div class="col-md-12 mt-1">
        <label class="form-label">Building<span style="color: red">*</span></label>
            <select class="custom-select" onchange="GetApartmentS()" name="building" id="building" required="">
               <?php for ($i=0; $i <count($buildingData) ; $i++) { ?>
                <option value="<?php echo $buildingData[$i]['record_id'] ?>" <?php echo $buildingData[$i]['record_id']==$propertyInfo[0]['building_id'] ? 'selected' : "" ?> ><?php echo $buildingData[$i]['building_name'] ?></option>
                 
             <?   } ?>
            </select>
            <div class="invalid-feedback">
                Please Select Building.
            </div>
        </div>
        <div class="col-md-12 mt-3 mb-3">
        <label class="form-label">Appartment #<span style="color: red">*</span></label>
            <select class="custom-select" name="appartment_no" id="appartment_no" required="">
            </select>
            <div class="invalid-feedback">
                Please Select Appartment Number.
            </div>
        </div>

        

        <div class="col-md-12 mb-3">
            <label class="form-label">Community<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter Community" type="text" id="community" name="community" value="<? echo $propertyInfo[0]['community_building'] ?>" required="">
            <div class="invalid-feedback">
                Please Enter Community.
            </div>
        </div>

        <div class="col-md-12 mb-3">
        <label class="form-label">Owner<span style="color: red">*</span></label>
            <select class="custom-select" name="owner" id="owner" required="">
                <!-- <option value="">Select Owner</option> -->
                <?php for ($i=0; $i <count($ownerData) ; $i++) { ?>
                <option value="<?php echo $ownerData[$i]['record_id'] ?>" <?php echo $ownerData[$i]['record_id']==$propertyInfo[0]['owner_id'] ? 'selected' : "" ?> ><?php echo $ownerData[$i]['name'] ?></option>
                 
             <?   } ?>
            </select>
            <div class="invalid-feedback">
                Please Select Owner.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
            <button id='js-save-btn' class="btn btn-primary float-right mr-2" type="submit" onclick="PropertyFromUpdate()">Update</button>
        </div>
    </div>
    </div>
</form>

<script>
    GetApartmentS();
    function GetApartmentS()
    {
        var id=$("#building").val();
        var apartmentIdOld=$("#apartmentIdOld").val();
        var data = {
        id: id
    };
    $.ajax({
        url: baseurl + 'building_apartment_edit',
        type: 'POST',
        data: data,
        success: function(result) {
           resulta=JSON.parse(result);
          
          if(resulta.length >= 1)
          {
            $('#appartment_no').html('');
            for(var i = 0; i < resulta.length ; i++){
                if(resulta[i].record_id == apartmentIdOld && resulta[i].is_owner == 'yes')
                {
                     var option = document.createElement("option");
                    option.text = resulta[i].apartment_number;
                    option.value = resulta[i].record_id;
                    option.setAttribute('selected',true);
                    var select = document.getElementById("appartment_no");
                    select.appendChild(option);
                }
                 if(resulta[i].is_owner == 'no')
                {
                     var option = document.createElement("option");
                    option.text = resulta[i].apartment_number;
                    option.value = resulta[i].record_id;
                    var select = document.getElementById("appartment_no");
                    select.appendChild(option);
                }
            
            }
          }
          else
          {
            $('#appartment_no').html('<option value="">All apartment already added in list</option>');
          }
        }
    });

    }
    function PropertyFromUpdate()
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
        
                 Swal.fire(
                    {
                        title: "Are you sure you want to update?",
<<<<<<< HEAD
                        text: "You won't be able to revert this!",
=======
                        // text: "You won't be able to revert this!",
>>>>>>> 3bdb593 (Initial commit)
                        type: "warning",
                        confirmButtonColor: '#437dd0',
                        showCancelButton: true,
                        confirmButtonText: "Yes, update it!",
                    }).then(function(result)
                    {
                        if (result.value)
                        {
                           $("#editPropertyForm").submit();
                           // var value='Update Sucessfully';
                            //DeleteToast(value);
<<<<<<< HEAD
                            Swal.fire("Updated!", "Update Sucessfully.", "success");
=======
                            Swal.fire("Updated!", "Updated Sucessfully.", "success");
>>>>>>> 3bdb593 (Initial commit)
                        }
                    });
        // if (confirm("Do you want to Update property?")) {
        //       $("#editPropertyForm").submit();
        //           var value='Update Sucessfully';
        //         DeleteToast(value);
           
        // } else {
        //     return false;
        // }
}
<<<<<<< HEAD
=======

>>>>>>> 3bdb593 (Initial commit)
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