<?php

// echo '<pre>';
// print_r($tenancyInfo);

$heading = "Tenancy";
?>
<style type="text/css">
    .mt {
        margin-top: 10px;
    }
</style>
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">LymCrm</a></li>
        <li class="breadcrumb-item">Tenancy</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>

    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1> <span class="page-title txt-color-blueDark"><?= $heading ?></span></h1>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                <button onclick="AddTenancy()" class="btn btn-primary float-right bg-brand-gradient" type="button"><i class="fas fa-plus" style="margin-right: 4px"></i>Add Tenancy</button>
            </div>
        </div>
        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <table id="<?= str_replace(' ', '', $heading) ?>_datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">

                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Tenancy #</center>
                                            </th>
                                            <th nowrap>
                                                <center>Building Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Apartment #</center>
                                            </th>
                                            <th nowrap>
                                                <center>Tenant Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Start Date</center>
                                            </th>
                                            <th nowrap>
                                                <center>End Date</center>
                                            </th>
                                            <th nowrap>
                                                <center>Rent Amount</center>
                                            </th>
                                            <th nowrap>
                                                <center># Of Payments</center>
                                            </th>
                                            <th nowrap>
                                                <center>Created By</center>
                                            </th>
                                            <th nowrap>
                                                <center>Created At</center>
                                            </th>
                                            <!-- <th nowrap>
                                                <center>Updated At</center>
                                            </th> -->
                                            <th nowrap>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < count($tenancyInfo); $i++) {
                                            if (strtotime((new DateTime())->format("Y-m-d H:i:s")) > strtotime($tenancyInfo[$i]['end_date'])) {
                                                continue;
                                            }
                                            $recordId = $tenancyInfo[$i]['record_id'];
                                        ?>
                                            <tr id="<?php echo $recordId; ?>" <?php if ($tenancyInfo[$i]['from_renew'] == 'yes') { ?> style="background-color: #d1d9e5;" <? } ?>>
                                                <td nowrap>
                                                    <center><?php echo $tenancyInfo[$i]['tenancy_no'] ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo ucfirst($tenancyInfo[$i]['building_name']); ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo $tenancyInfo[$i]['apartment_number'] ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo ucfirst($tenancyInfo[$i]['name']) ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo date('d-M-Y', strtotime($tenancyInfo[$i]['start_date'])); ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo date('d-M-Y', strtotime($tenancyInfo[$i]['end_date'])); ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo $tenancyInfo[$i]['rent_amount'] ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo $tenancyInfo[$i]['no_of_payments'] ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo ucfirst($tenancyInfo[$i]['created_name']) ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo date('d-M-Y', strtotime($tenancyInfo[$i]['created_at'])); ?></center>
                                                </td>
                                                <!-- <td nowrap>
                                                    <center><?php echo date('d-M-Y', strtotime($tenancyInfo[$i]['updated_at'])); ?></center>
                                                </td> -->
                                                <td nowrap>
                                                    <center>
                                                        <button onclick="ViewPayments(<?php echo $recordId; ?>)" class="btn btn-sm btn-primary bg-brand-gradient payment" title="View Payments"><i class="fal fa-eye"></i></button>
                                                        <button onclick="EditTenancy(<?php echo $recordId; ?>)" class="btn btn-sm btn-primary bg-brand-gradient edit" title="Edit Tenancy"><i class="fal fa-edit"></i></button>
                                                        <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>
                                                            <button type="button" onclick="DeleteTenancy(<?php echo $recordId; ?>,<?php echo $tenancyInfo[$i]['apartment_id'] ?>,<?php echo $tenancyInfo[$i]['tenancy_no'] ?>)" data-id="<?php echo $i; ?>" class="btn btn-sm btn-primary bg-brand-gradient delete" title="Delete Tenancy"><i class="fal fa-times"></i></button>
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

        $('#<?= str_replace(' ', '', $heading) ?>_datatable_tabletools').dataTable({
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

    // add modal
    function AddTenancy(id) {
        $.ajax({
            url: baseurl + 'tenancy_add',
            success: function(result) {
                $('.modal-title').html('Add New Tenancy');
                $('#modal-body').html(result);
                $('#modal-body').children()[0][0].value = id;
                $('#myModal').modal();
            }
        });
    }


    // Modal For Edit Tenancy
    function EditTenancy(recordId) {
        var value = {
            recordId: recordId
        };
        $.ajax({
            url: baseurl + 'tenancy_edit',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Edit Tenancy');
                $('#modal-body').html(result);
                $('#myModal').modal();

            }
        });
    }
    // Modal For Edit Tenancy
    function EmailTenancy(id) {
        var value = {
            id: id
        };
        $.ajax({
            url: baseurl + 'Tenancy_email',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Email Tenancy Slip');
                //  $('#modal-body').html(``);
                $('#modal-body').html(result);
                $('#myModal').modal();

            }
        });
    }

    function ImageTenancy(id) {
        var value = {
            id: id
        };
        $.ajax({
            url: baseurl + 'Tenancy_image',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Image Tenancy');
                //  $('#modal-body').html(``);
                $('#modal-body').html(result);
                $('#myModal').modal();

            }
        });
    }

    // Delete Tenancy
    function DeleteTenancy(tenancyId, apartmentId) {
        var value = {
            tenancyId: tenancyId,
            apartmentId: apartmentId,
        };
        Swal.fire({
            title: "Are you sure want to delete?",
            text: "You won't be able to revert this!",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    url: baseurl + 'tenancy_delete',
                    type: 'POST',
                    data: value,
                    success: function(result) {
                        // var value = 'Delete Sucessfully';
                        //   DeleteToast(value);
                        //  window.location.reload();
                        $('#' + tenancyId).next('tr.child').remove();
                        $('#' + tenancyId).remove();
                    }
                });
                // var value='Update Sucessfully';
                //DeleteToast(value);
                Swal.fire("Deleted!", "Deleted Sucessfully.", "success");
            }
        });
        // if (confirm('Are you sure you want to delete Tenancy?')) {
        //     $.ajax({
        //         url: baseurl + 'tenancy_delete',
        //         type: 'POST',
        //         data: value,
        //         success: function(result) {
        //             var value = 'Delete Sucessfully';
        //             DeleteToast(value);
        //             //  window.location.reload();
        //             $('#' + tenancyId).next('tr.child').remove();
        //             $('#' + tenancyId).remove();
        //         }
        //     });
        //     return false;
        // } else {
        //     return false;
        // }
    }

    function ViewPayments(tenancyId) {
        var value = {
            tenancyId: tenancyId
        };
        $.ajax({
            url: baseurl + 'tenancy_load_payments',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('View Payments');
                $('#modal-body-center').html(result);
                $('#myModalCenter').modal();

            }
        });
    }
</script>