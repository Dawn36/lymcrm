<?php
$heading = "Deposit Slip";
?>
<style type="text/css">
    .mt {
        margin-top: 10px;
    }
</style>
    <div id="content">
        <!-- <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1> <span class="page-title txt-color-blueDark"><?= $heading ?></span></h1>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                <button onclick="DepositAdd()" class="btn btn-primary float-right bg-brand-gradient" type="button"><i class="fas fa-plus" style="margin-right: 4px"></i>Add Deposit Slip</button>
            </div>
        </div> -->
 
        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content" style="overflow: auto;">
                                <table id='example1'  class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">

                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap hidden>
                                                <center>#</center>
                                            </th>
                                            <th nowrap>
                                                <center>Building Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Apartment #</center>
                                            </th>
                                            <th nowrap>
                                                <center>Owner Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Owner Email</center>
                                            </th>
                                            <th nowrap>
                                                <center>Payment Type</center>
                                            </th>
                                            <th nowrap>
                                                <center>Payment Date</center>
                                            </th>
                                            <th nowrap>
                                                <center>Cheque #</center>
                                            </th>
                                            <th nowrap>
                                                <center>Cheque Amount</center>
                                            </th>
                                            <th nowrap>
                                                <center>Created By</center>
                                            </th>
                                            <th nowrap>
                                                <center>Created At</center>
                                            </th>
                                            <th nowrap>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i=0; $i< count($depositSlip); $i++){ ?>
                                        <tr id="1">
                                            <td nowrap hidden> 
                                               <?php echo $depositSlip[$i]['installment'] ?>
                                            </td>
                                            <td nowrap>
                                                <?php echo ucwords($depositSlip[$i]['building_name']) ?>
                                            </td>
                                            <td nowrap>
                                               <?php echo $depositSlip[$i]['apartment_number'] ?>
                                            </td>
                                            <td nowrap>
                                               <?php echo ucwords($depositSlip[$i]['name']) ?>
                                            </td>
                                            <td nowrap>
                                               <?php echo $depositSlip[$i]['email'] ?>
                                            </td>
                                            <td nowrap>
                                                <?php echo ucwords($depositSlip[$i]['type']) ?>
                                            </td>
                                            <td nowrap>
                                                <?php echo date("Y-m-d" ,strtotime($depositSlip[$i]['payment_date'])) ?>
                                            </td>
                                            <td nowrap>
                                                <center><?php echo $depositSlip[$i]['cheque_no'] ?></center>
                                            </td>
                                            <td nowrap>
                                                <center><?php echo number_format($depositSlip[$i]['amount']) ?></center>
                                            </td>
                                            <td nowrap>
                                                <center><?php echo ucwords($depositSlip[$i]['created_name']) ?></center>
                                            </td>
                                            <td nowrap>
                                                <center><?php echo date("Y-m-d",strtotime($depositSlip[$i]['created_at'])) ?></center>
                                            </td>
                                            <td nowrap>
                                                <center>
                                                    <button onclick="LoadDepositImage(<?php echo $depositSlip[$i]['record_id'] ?>)"  type="button" class="btn btn-sm btn-primary bg-brand-gradient"  title="Attachment"><i class="fal fa-camera"></i></button>&nbsp;
                                                    <button onclick="DepositEmail(<?php echo $depositSlip[$i]['record_id'] ?>)" class="btn btn-sm btn-primary bg-brand-gradient" ><i class="fal fa-envelope"></i></button>&nbsp;
                                                    <!-- <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>
                                                    <button type="button" onclick="DeleteDepositSlip('<?php echo $depositSlip[$i]['record_id'] ?>','<?php echo $depositSlip[$i]['payment_id'] ?>')"class="btn btn-sm btn-primary bg-brand-gradient" title="Delete Property"><i class="fal fa-times"></i></button>
                                                <?php } ?> -->
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end widget content -->
                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->
                </div>
            </div>
        </section>
    </div>
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<script type="text/javascript">
    

    $(document).ready(function() {

        $('#example1').dataTable({
            responsive: true,
            lengthChange: false,
            scrollX: false,
            dom:
                /*  --- Layout Structure 
                    --- Options
                    l   -   length changing input control
                    f   -   filtering input
                    t   -   The table!
                    i   -   Table information summary
                    p   -   pagination control
                    r   -   processing display element
                    B   -   buttons
                    R   -   ColReorder
                    S   -   Select

                    --- Markup
                    < and >             - div element
                    <"class" and >      - div with a class
                    <"#id" and >        - div with an ID
                    <"#id.class" and >  - div with an ID and a class

                    --- Further reading
                    https://datatables.net/reference/option/dom
                    --------------------------------------
                 */
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                /*{
                    extend:    'colvis',
                    text:      'Column Visibility',
                    titleAttr: 'Col visibility',
                    className: 'mr-sm-3'
                },*/
                {
                    extend: 'pdfHtml5',
                    title: '<?= $heading; ?>',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    title: '<?= $heading; ?>',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                },
                {
                    extend: 'csvHtml5',
                    title: '<?= $heading; ?>',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    title: '<?= $heading; ?>',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    title: '<?= $heading; ?>',
                    customize: function(win) {
                        $(win.document.body).find('h1').css('text-align', 'center');
                        $(win.document.body).css('font-size', '9px');
                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    },
                    className: 'btn-outline-primary btn-sm'
                }
            ]
        });
    });

 
    // function DeleteDepositSlip(depositId,paymentId) {
    //     var value = {
    //         depositId: depositId,
    //         paymentId: paymentId,
    //     };
    //     $.ajax({
    //         url: baseurl + 'deposit_delete',
    //         type: 'POST',
    //         data: value,
    //         success: function(result) {
    //             var value='Delete Sucessfully';
    //             DeleteToast(value);
    //             window.location.reload();
    //         }
    //     });
    // }

    // Modal For Edit User
    // function DepositEdit(id) {
    //     var value = {
    //         id: id
    //     };
    //     $.ajax({
    //         url: baseurl + 'deposit_edit',
    //         type: 'POST',
    //         data: value,
    //         success: function(result) {
    //             $('.modal-title').html('Edit Deposit');
    //             //  $('#modal-body').html(``);
    //             $('#modal-body').html(result);
    //             $('#myModal').modal();

    //         }
    //     });
    // }
    var installment='';
    var ownerEmail='';
    var ownerName='';
    var apartmentNo='';
    var buildingName='';
   $(document).ready(function() {
    var table = $('#example').DataTable();
     
    $('#example tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        installment=ordinal_suffix_of(parseInt(data[0]));
        ownerEmail=data[4];
        ownerName=data[3];
        apartmentNo=data[2];
        buildingName=data[1];
        
    } );
} );
  
    // Modal For Edit User
    function ordinal_suffix_of(i) {
    var j = i % 10,
        k = i % 100;
    if (j == 1 && k != 11) {
        return i + "st";
    }
    if (j == 2 && k != 12) {
        return i + "nd";
    }
    if (j == 3 && k != 13) {
        return i + "rd";
    }
    return i + "th";
}
    function DepositEmail(depositId) {
 var subject="Deposit Slip for [[INSTALLMENT]] Installment";
        var value = {
        installment:installment,
        depositId:depositId,
        ownerEmail:ownerEmail,
        ownerName:ownerName,
        apartmentNo:apartmentNo,
        buildingName:buildingName,
        };
        $.ajax({
            url: baseurl + 'deposit_email',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Email Deposit Slip');
                //  $('#modal-body').html(``);
                $('#modal-body').html(result);
                $('#myModal').modal();
                str="<p>Dear [[OWNERNAME]],<br>Attached herewith is a deposit slip for the [[INSTALLMENT]] installment against <br> the rent of your apartment [[APARTMENTNO]],[[BUILDINGNAME]] Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>";
    
       subject=subject.replaceAll("[[INSTALLMENT]]",installment);
       str=str.replaceAll("[[OWNERNAME]]",ownerName);
       str=str.replaceAll("[[INSTALLMENT]]",installment);
       str=str.replaceAll("[[APARTMENTNO]]",apartmentNo);
       str=str.replaceAll("[[BUILDINGNAME]]",buildingName);
        $('#saveToLocal').summernote('code',str)

                $('#to').val(ownerEmail);
                $('#subject').val(subject);
                $('#depositId').val(depositId);
                $('#installment').val(installment);
                $('#ownerEmail').val(ownerEmail);
                $('#ownerName').val(ownerName);
                $('#apartmentNo').val(apartmentNo);
                $('#buildingName').val(buildingName);
            }
        });
    }

    function LoadDepositImage(id) {
        var value = {
            id: id,
        };
        $.ajax({
            url: baseurl + 'deposit_image',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Attachments');
                //  $('#modal-body').html(``);
                $('#modal-body').html(result);
                $('#myModal').modal();

            }
        });
    }

    // Delete User
    // function DeleteDepositSlip(depositId,paymentId) {
    //     var value = {
    //         depositId: depositId,
    //         paymentId: paymentId,
    //     };
    //     Swal.fire(
    //                 {
    //                     title: "Are you sure want to delete?",
    //                     // text: "You won't be able to revert this!",
    //                     type: "warning",
    //                     confirmButtonColor: '#437dd0',
    //                     showCancelButton: true,
    //                     confirmButtonText: "Yes, delete it!",
    //                 }).then(function(result)
    //                 {
    //                     if (result.value)
    //                     {
    //                         $.ajax({
    //                                 url: baseurl + 'deposit_delete',
    //                                 type: 'POST',
    //                                 data: value,
    //                                 success: function(result) {
    //                                  //   var value='Delete Sucessfully';
    //                                  //   DeleteToast(value);
    //                                     window.location.reload();
    //                                 }
    //                             });
    //                        // var value='Update Sucessfully';
    //                         //DeleteToast(value);
    //                         Swal.fire("Deleted!", "Deleted Sucessfully.", "success");
    //                     }
    //                 });
    //     // $.ajax({
    //     //     url: baseurl + 'deposit_delete',
    //     //     type: 'POST',
    //     //     data: value,
    //     //     success: function(result) {
    //     //         var value='Delete Sucessfully';
    //     //         DeleteToast(value);
    //     //         window.location.reload();
    //     //     }
    //     // });
    // }

</script>