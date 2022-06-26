<?php
$heading = "Complaint";

?>
<style type="text/css">
    .mt {
        margin-top: 10px;
    }
</style>
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Complaint</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>

    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1> <span class="page-title txt-color-blueDark">Complaint</span></h1>
            </div>
            <?php if ($this->session->userdata('role_id') != OWNER) { ?>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                    <button onclick="AddComplaint()" class="btn btn-primary float-right bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Add Complaint" type="button"><i class="fas fa-plus" style="margin-right: 4px"></i>Add Complaint</button>
                </div>
            <?php } ?>
        </div>
        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <table id="datatable_tabletools_owner" class="table table-bordered table-hover table-striped w-100">
                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Complaint #</center>
                                            </th>
                                            <th nowrap>
                                                <center>Tenant</center>
                                            </th>
                                            <th nowrap>
                                                <center>Building</center>
                                            </th>
                                            <th nowrap>
                                                <center>Appartment </center>
                                            </th>
                                            <th nowrap>
                                                <center>Owner</center>
                                            </th>
                                            <th nowrap>
                                                <center>Complaint Date</center>
                                            </th>
                                            <th nowrap>
                                                <center>Complaint Status</center>
                                            </th>
                                            <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>

                                                <th nowrap>
                                                    <center>Cost</center>
                                                </th>
                                                <th nowrap>
                                                    <center>Assign to</center>
                                                </th>
                                                <th nowrap>
                                                    <center>Assign Date</center>
                                                </th>
                                            <?php } ?>

                                            <th nowrap>
                                                <center>Complaint Message</center>
                                            </th>
                                            <?php if ($this->session->userdata('role_id') != OWNER) { ?>
                                                <th nowrap>
                                                    <center>Action</center>
                                                </th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr style="cursor:pointer">

                                            <td>
                                                <center>1</center>
                                            </td>
                                            <td>
                                                <center>Abudla</center>
                                            </td>
                                            <td>
                                                <center>aaa</center>
                                            </td>
                                            <td>
                                                <center>12

                                                </center>
                                            </td>
                                            <td>
                                                <center>Dawn

                                                </center>
                                            </td>
                                            <td>
                                                <center>12/09/2022

                                                </center>
                                            </td>
                                            <td>
                                                <center>pending

                                                </center>
                                            </td>
                                            <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>

                                                <td>
                                                    <center>
                                                        100
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>

                                                    </center>
                                                </td>
                                                <td>
                                                    <center>

                                                    </center>
                                                </td>

                                            <?php } ?>

                                            <td>
                                                <center>pani nhi ahraha

                                                </center>
                                            </td>
                                            <?php if ($this->session->userdata('role_id') != OWNER) { ?>

                                                <td nowrap>
                                                    <center>
                                                        <button onclick="EditComplaint('1')" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Edit Complaint"><i class="fal fa-edit"></i></button>&nbsp;
                                                        <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>
                                                            <button onclick="AssignComplaint('1')" class="btn btn-sm btn-primary bg-brand-gradient " data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Assign Complaint"><i class="fal fa-align-left"></i></button>
                                                            <button onclick="DeleteComplaint('1')" class="btn btn-sm btn-primary bg-brand-gradient " data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Delete Complaint"><i class="fal fa-times"></i></button>
                                                        <? } ?>
                                                    </center>
                                                </td>
                                            <?php } ?>

                                        </tr>

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
    function EditComplaint(id) {
        var data = {
            id: id,
            tablename: 'owner'
        };
        $.ajax({
            url: baseurl + 'complaint_edit',
            type: 'POST',
            data: data,
            success: function(result) {
                $('.modal-title').html('Edit Complaint');
                $('#modal-body').html(result);
                // $('#modal-body').children()[0][0].value = id;
                $('#myModal').modal();
            }
        });

    }

    function AssignComplaint(id) {
        var data = {
            id: id,
            tablename: 'owner'
        };
        $.ajax({
            url: baseurl + 'assign_complaint',
            type: 'POST',
            data: data,
            success: function(result) {
                $('.modal-title').html('Assign Company');
                $('#modal-body').html(result);
                // $('#modal-body').children()[0][0].value = id;
                $('#myModal').modal();
            }
        });

    }

    function DeleteComplaint(id) {

        Swal.fire({
            title: "Are you sure want to delete?",
            text: "You won't be able to revert this!",
            type: "warning",
            confirmButtonColor: '#437dd0',
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
        }).then(function(result) {
            if (result.value) {
                var data = {
                    id: id,
                    tablename: 'owner'
                };
                $.ajax({
                    url: baseurl + 'delete',
                    type: 'POST',
                    data: data,
                    success: function(result) {
                        //   var value='Delete Sucessfully';
                        //   DeleteToast(value);
                        window.location.reload();
                    }
                });
                // var value='Update Sucessfully';
                //DeleteToast(value);
                Swal.fire("Deleted!", "Deleted Sucessfully.", "success");
            }
        });

    }

    function AddComplaint() {
        $.ajax({
            url: baseurl + 'complaint_add',
            success: function(result) {

                $('.modal-title').html('Add Complaint');
                $('#modal-body').html(result);
                // $('#modal-body').children()[0][0].value = id;
                $('#myModal').modal();
            }
        });

    }

    $(document).ready(function() {
        // initialize datatable
        $('#datatable_tabletools_owner').dataTable({
            responsive: true,
            lengthChange: false,
            dom:
                /*  --- Layout Structure 
                  --- Options
                  l - length changing input control
                  f - filtering input
                  t - The table!
                  i - Table information summary
                  p - pagination control
                  r - processing display element
                  B - buttons
                  R - ColReorder
                  S - Select

                  --- Markup
                  < and >       - div element
                  <"class" and >    - div with a class
                  <"#id" and >    - div with an ID
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
                    title: '<?php echo $heading; ?>',
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
            ],

        });
    });
</script>