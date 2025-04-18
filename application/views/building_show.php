<?php
$heading = "Building";
?>
<style type="text/css">
    .mt {
        margin-top: 10px;
    }
</style>
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Building</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>

    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1> <span class="page-title txt-color-blueDark">Building</span></h1>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                <button class="btn btn-primary float-right bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Add Building" type="button" onclick="AddBuilding()"><i class="fas fa-plus" style="margin-right: 4px"></i>Add Building</button>
                <button type="button" onclick="ImportBuildings()" data-trigger="hover" data-placement="top" title="" data-original-title="Import Building" class="btn btn-primary float-right bg-brand-gradient mr-3" data-original-title="Edit"><i class="fas fa-file-import mr-2"></i>Import Building</button>
            </div>
        </div>
        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <table id="datatable_tabletools_building" class="table table-bordered table-hover table-striped w-100">
                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Building Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Building Address</center>
                                            </th>
                                            <th nowrap>
                                                <center>Community</center>
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
                                                <center>
                                                    <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < count($buildingInfo); $i++) {
                                            $buildingId = $buildingInfo[$i]['record_id'];
                                        ?>
                                            <tr style="cursor:pointer">

                                                <td>
                                                    <center><?php echo ucwords($buildingInfo[$i]['building_name']) ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($buildingInfo[$i]['building_address']) ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($buildingInfo[$i]['building_community']) ?></center>
                                                </td>

                                                <td>
                                                    <center><?php echo ucwords($buildingInfo[$i]['created_name']) ?>

                                                    </center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($buildingInfo[$i]['updated_name']) ?>

                                                    </center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($buildingInfo[$i]['status']) ?>

                                                    </center>
                                                </td>

                                                <td nowrap>
                                                    <center>
                                                        <a href="/apartment/<?php echo $buildingId ?>" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Add Apartment"><i class="fas fa-plus"></i></a>&nbsp;

                                                        <button onclick="EditBuilding(<?php echo $buildingId ?>)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Edit Building"><i class="fal fa-edit"></i></button>&nbsp;
                                                        <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>
                                                            <button class="btn btn-sm btn-primary bg-brand-gradient" onclick="DeleteBuilding(<?php echo $buildingId ?>)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Delete Building"><i class="fal fa-times"></i></button>
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
<<<<<<< HEAD
    function DeleteBuilding(buildingId) {
         Swal.fire(
                    {
                        title: "Are you sure want to delete?",
                        text: "You won't be able to revert this!",
=======
   function DeleteBuilding(buildingId) {
         Swal.fire(
                    {
                        title: "Are you sure want to delete?",
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
                              var data = {
                                    id: buildingId,
                                    tablename: 'building'
                                };
                                $.ajax({
                                    url: baseurl + 'delete',
                                    type: 'POST',
                                    data: data,
                                    success: function(result) {
<<<<<<< HEAD
                                        var value = 'Delete Sucessfully';
                                        DeleteToast(value);
                                        window.location.reload();
                                    }
                                });
=======
                                       // var value = 'Delete Sucessfully';
                                      //  DeleteToast(value);
                                      //  window.location.reload();
                                    }
                                });
                                window.location.reload();
>>>>>>> 3bdb593 (Initial commit)
                           // var value='Update Sucessfully';
                            //DeleteToast(value);
                            Swal.fire("Deleted!", "Deleted Sucessfully.", "success");
                        }
                    });
            // var data = {
            //     id: buildingId,
            //     tablename: 'building'
            // };
            // $.ajax({
            //     url: baseurl + 'delete',
            //     type: 'POST',
            //     data: data,
            //     success: function(result) {
            //         var value = 'Delete Sucessfully';
            //         DeleteToast(value);
            //         window.location.reload();
            //     }
            // });
        
    }

    function EditBuilding(id) {
        var value = {
            bilding_id: id
        };
        $.ajax({
            url: baseurl + 'building_edit',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Edit Building');
                //  $('#modal-body').html(``);
                $('#modal-body').html(result);
                $('#myModal').modal();

            }
        });
    }

    function AddBuilding(id) {
        var value = {
            id: id
        };
        $.ajax({
            url: baseurl + 'building_add',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Add Building');
                //  $('#modal-body').html(``);
                $('#modal-body').html(result);
                $('#myModal').modal();

            }
        });
    }

    function ImportBuildings() {
        $.ajax({
            url: baseurl + 'building_import',
            success: function(result) {
                $('#modal-title-small').html('Upload Building CSV');
                $('#modal-body-center-small').html(result);
                $('#myModalCenterSmall').modal();

            }
        });
    }

    $(document).ready(function() {
        // initialize datatable
        $('#datatable_tabletools_building').dataTable({
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
                    text: 'PDF',
                    title: '<?php echo $heading; ?>',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    title: '<?php echo $heading; ?>',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    title: '<?php echo $heading; ?>',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    title: '<?php echo $heading; ?>',
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