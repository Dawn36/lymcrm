<?php
$heading = "Apartment";
?>
<style type="text/css">
    .mt {
        margin-top: 10px;
    }
</style>
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">LymCrm</a></li>
        <li class="breadcrumb-item" ><a href="/building">Building</a></li>
        <li class="breadcrumb-item">Apartment</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1> <span class="page-title txt-color-blueDark"><?php echo $heading ?></span></h1>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                <button onclick="AddApartment(<?php echo $buildingId ?>)" class="btn btn-primary float-right bg-brand-gradient" type="button" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Add Apartment"><i class="fas fa-plus" style="margin-right: 4px"></i>Add Apartment</button>
            </div>
        </div>
        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <table id="<?php echo str_replace(' ', '', $heading) ?>_datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">

                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Apartment#</center>
                                            </th>
                                            <th nowrap>
                                                <center>Created By</center>
                                            </th>
                                            <th nowrap>
                                                <center>Updated By</center>
                                            </th>
                                            <th nowrap>
                                                <center>Status</center>
                                            </th>
                                            <th nowrap>
                                                    <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i=0; $i <count($apartmentInfo); $i++) { 
                                       $apartmentId=$apartmentInfo[$i]['record_id'];
                                     ?>
                                            <tr>
                                                <td>
                                                    <center><?php echo ucwords($apartmentInfo[$i]['apartment_number'] )?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($apartmentInfo[$i]['created_name'] )?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($apartmentInfo[$i]['updated_name'] )?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($apartmentInfo[$i]['status'] )?></center>
                                                </td>
                                                <td nowrap>
                                                    <center>
                                                        <button onclick="EditApartment(<?php echo $apartmentId ?>)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Edit Apartment"
                                                        ><i class="fal fa-edit"></i></button>&nbsp;
                                                        <?php if($this->session->userdata('role_id') == SUPER_ADMIN) { ?>
                                                        <button type="button" onclick="DeleteApartment(<?php echo $apartmentId ?>)" class="btn btn-sm btn-primary bg-brand-gradient"data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Delete Apartment"><i class="fal fa-times"></i></button>
                                                    <?php } ?>
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


</main>
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<script type="text/javascript">

    $(document).ready(function() {

        $('#<?php echo str_replace(' ', '', $heading) ?>_datatable_tabletools').dataTable({
            responsive: true,
            lengthChange: false,
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
                    title: '<?php echo $heading; ?>',
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
                    title: '<?php echo $heading; ?>',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    title: '<?php echo $heading; ?>',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    title: '<?php echo $heading; ?>',
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

    // add modal
    function AddApartment(id) {
        var value = {
            building_id: id
        };
        $.ajax({
            type: 'POST',
            data: value,
            url: baseurl + 'apartment_add',
            success: function(result) {
                $('.modal-title').html('Add Apartment');
                $('#modal-body').html(result);
                // $('#modal-body').children()[0][0].value = id;
                $('#myModal').modal();
            }
        });
    }


    // Modal For Edit User
    function EditApartment(id) {
        var value = {
            id: id
        };
        $.ajax({
            url: baseurl + 'apartment_edit',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Edit Apartment');
                //  $('#modal-body').html(``);
                $('#modal-body').html(result);
                $('#myModal').modal();

            }
        });
    }

        // Delete User
        function DeleteApartment(id) {
        var value = {
            id: id
        };
        Swal.fire(
                    {
                        title: "Are you sure want to delete?",
<<<<<<< HEAD
                        text: "You won't be able to revert this!",
=======
                        // text: "You won't be able to revert this!",
>>>>>>> 3bdb593 (Initial commit)
                        type: "warning",
                        confirmButtonColor: '#437dd0',
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!",
                    }).then(function(result)
                    {
                        if (result.value)
                        {
                             $.ajax({
                                url: baseurl + 'apartment_delete',
                                type: 'POST',
                                data: value,
                                success: function(result) {
                                   // location.reload();
<<<<<<< HEAD
                                    var value='Delete Sucessfully';
                                    DeleteToast(value);
=======
                                  //  var value='Delete Sucessfully';
                                  //  DeleteToast(value);
>>>>>>> 3bdb593 (Initial commit)
                                    window.location.reload();

                                }
                            });
                                           // var value='Update Sucessfully';
                            //DeleteToast(value);
                            Swal.fire("Deleted!", "Deleted Sucessfully.", "success");
                        }
                    });
        // if (confirm('Are you sure you want to delete apartment?')) {
        //     $.ajax({
        //         url: baseurl + 'apartment_delete',
        //         type: 'POST',
        //         data: value,
        //         success: function(result) {
        //            // location.reload();
        //             var value='Delete Sucessfully';
        //             DeleteToast(value);
        //             window.location.reload();

        //         }
        //     });
        // } 
    }

   

    
</script>