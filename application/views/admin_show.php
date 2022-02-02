<?php
$heading = "All Admin";
?>
<style type="text/css">
    .mt {
        margin-top: 10px;
    }
</style>
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Admin Management</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>

    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1> <span class="page-title txt-color-blueDark">Admin Management</span></h1>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                <button onclick="AddAdminScreen()" class="btn btn-primary float-right bg-brand-gradient" type="button" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Add Admin"><i class="fas fa-plus" style="margin-right: 4px"></i>Add Admin</button>
            </div>
        </div>
        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <table id="datatable_tabletools1" class="table table-bordered table-hover table-striped w-100">
                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Admin Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Admin Email</center>
                                            </th>
                                            <th nowrap>
                                                <center>Admin Contact#</center>
                                            </th>
                                            <th nowrap>
                                                <center>Admin Password</center>
                                            </th>
                                            <th nowrap>
                                                <center>Admin Role</center>
                                            </th>
                                            <th nowrap>
                                                <center>Admin Status</center>
                                            </th>
                                            <th nowrap>
                                                <center>
                                                    <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < count($adminInfo); $i++) {
                                            $ownerTenantId = $adminInfo[$i]['owner_tenant_id'];
                                            $usersType = $adminInfo[$i]['role_id'];
                                            $roleName = '';
                                            if ($usersType == SUB_ADMIN) {
                                                $roleName = 'Sub Admin';
                                            } else if ($usersType == OWNER || $usersType == SUPER_ADMIN || $usersType == TENANT) {
                                                continue;
                                            }
                                            $userId = $adminInfo[$i]['record_id'];
                                        ?>

                                            <tr style="cursor:pointer" onClick="">

                                                <td>
                                                    <center><?php echo ucwords($adminInfo[$i]['name']) ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($adminInfo[$i]['email']) ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($adminInfo[$i]['phone_number']) ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo base64_decode($adminInfo[$i]['password']) ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $roleName; ?></center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo ucwords($adminInfo[$i]['status']) ?>
                                                    </center>
                                                </td>

                                                <td nowrap>
                                                    <center>
                                                        <button onclick="ResetUser(<?php echo $userId ?>)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Reset Password"><i class="fas fa-key"></i></button>&nbsp;
                                                        <button onclick="EditAdmin(<?php echo $userId ?>)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Edit Admin"><i class="fal fa-edit"></i></button>&nbsp;
                                                        <button onclick="DeleteAdmin(<?php echo $userId ?>)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Delete Admin"><i class="fal fa-times"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                        <? } ?>


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

        $('#datatable_tabletools1').dataTable({
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
                    title: '<?php echo $heading; ?>',
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

    function AddAdminScreen(id) {
        $.ajax({
            url: baseurl + 'admin_add',
            success: function(result) {
                $('.modal-title').html('Add Admin');
                $('#modal-body').html(result);
                // $('#modal-body').children()[0][0].value = id;
                $('#myModal').modal();
            }
        });
    }

    function EditAdmin(userId) {
        var value = {
            userId: userId,
        };
        $.ajax({
            url: baseurl + 'admin_edit',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Edit Admin');
                $('#modal-body').html(result);
                // $('#modal-body').children()[0][0].value = id;
                $('#myModal').modal();
            }
        });
    }

    function DeleteAdmin(userId) {
        //alert(userId);
        var value = {
            userId: userId,
        };
        if (confirm('Are you sure you want to delete admin?')) {
            $.ajax({
                url: baseurl + 'admin_delete',
                type: 'POST',
                data: value,
                success: function(result) {
                    var value = 'Delete Sucessfully';
                    DeleteToast(value);
                    window.location.reload();

                }
            });
        }
    }
</script>