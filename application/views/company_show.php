<?php
$heading = "Company";

?>
<style type="text/css">
    .mt {
        margin-top: 10px;
    }
</style>
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Company</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>

    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1> <span class="page-title txt-color-blueDark">Company</span></h1>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                <button onclick="AddCompany()" class="btn btn-primary float-right bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Add Company" type="button"><i class="fas fa-plus" style="margin-right: 4px"></i>Add Company</button>
            </div>
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
                                                <center>Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Email</center>
                                            </th>
                                            <th nowrap>
                                                <center>Contact#</center>
                                            </th>
                                            <th nowrap>
                                                <center>Address</center>
                                            </th>
                                            <th nowrap>
                                                <center>Created By</center>
                                            </th>
                                            <th nowrap>
                                                <center>Updated By</center>
                                            </th>
                                            <th nowrap>
                                                <center>
                                                    <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php for ($i = 0; $i < count($companyData); $i++) {
                                            $companyId = $companyData[$i]['record_id'];
                                        ?>
                                            <tr style="cursor:pointer">

                                                <td>
                                                    <center><?php echo  ucwords($companyData[$i]['name']) ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $companyData[$i]['email'] ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $companyData[$i]['phone_number'] ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($companyData[$i]['address']) ?>

                                                    </center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($companyData[$i]['created_name']) ?>

                                                    </center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($companyData[$i]['updated_name']) ?>

                                                    </center>
                                                </td>

                                                <td nowrap>
                                                    <center>
                                                        <button onclick="EditCompany(<?php echo $companyId ?>)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Edit Company"><i class="fal fa-edit"></i></button>&nbsp;
                                                        <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>
                                                            <button onclick="DeleteCompany(<?php echo $companyId ?>)" class="btn btn-sm btn-primary bg-brand-gradient " data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Delete Company"><i class="fal fa-times"></i></button>
                                                        <? } ?>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php  } ?>

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
    //     if(location.href.split('=')[1].split('=')[0] == '1')
    // {
    //     Message("File Uploaded Sucessfully");
    // }

    // if(location.href.split('=')[1].split('=')[0] == '0')
    // {
    //     Message("Header not match"); 
    // }


    function EditCompany(id) {
        var data = {
            id: id,
            tablename: 'company'
        };
        $.ajax({
            url: baseurl + 'company_edit',
            type: 'POST',
            data: data,
            success: function(result) {
                $('.modal-title').html('Edit Company');
                $('#modal-body').html(result);
                // $('#modal-body').children()[0][0].value = id;
                $('#myModal').modal();
            }
        });

    }

    function DeleteCompany(id) {

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
                    tablename: 'company'
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



    function Message(message) {
        var value = message;
        DeleteToast(value);
    }

    function AddCompany() {
        $.ajax({
            url: baseurl + 'company_add',
            success: function(result) {

                $('.modal-title').html('Add Company');
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