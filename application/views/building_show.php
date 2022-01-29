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
                <button  class="btn btn-primary float-right bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Add Building" type="button" onclick="AddBuilding()"><i
                        class="fas fa-plus" style="margin-right: 4px"></i>Add Building</button>
            </div>
        </div>
        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <table id="datatable_tabletools_building"
                                    class="table table-bordered table-hover table-striped w-100">
                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Building Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Building Address</center>
                                            </th>
                                            <th nowrap>
                                                <center>Building Contact#</center>
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
                                      
                                        <tr style="cursor:pointer" >

                                            <td>
                                                <center>dasd</center>
                                            </td>
                                            <td>
                                                <center>56</center>
                                            </td>
                                            <td>
                                                <center>51</center>
                                            </td>
                                            
                                            <td>
                                                <center>active
                                                   
                                                </center>
                                            </td>

                                            <td nowrap>
                                                <center>
                                                    <a href="/apartment"
                                                        class="btn btn-sm btn-primary bg-brand-gradient"
                                                        data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Add Apartment"
                                                        ><i class="fas fa-plus"></i></a>&nbsp;

                                                    <button onclick="EditBuilding(1)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Edit Building"><i class="fal fa-edit"></i></button>&nbsp;

                                                    <button class="btn btn-sm btn-primary bg-brand-gradient"
                                                    onclick="DeleteBuilding(1)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Delete Building"
                                                        ><i class="fal fa-times"></i></button>
                                                </center>
                                            </td>
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
      function EditBuilding(id) {
        var value = {
            id: id
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
                 title: '<?= $heading; ?>',
                titleAttr: 'Generate PDF',
                className: 'btn-outline-danger btn-sm mr-1'
            },
            {
                extend: 'excelHtml5',
                text: 'Excel',
                 title: '<?= $heading; ?>',
                titleAttr: 'Generate Excel',
                className: 'btn-outline-success btn-sm mr-1'
            },
            {
                extend: 'csvHtml5',
                text: 'CSV',
                 title: '<?= $heading; ?>',
                titleAttr: 'Generate CSV',
                className: 'btn-outline-primary btn-sm mr-1'
            },
            {
                extend: 'copyHtml5',
                text: 'Copy',
                 title: '<?= $heading; ?>',
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
        ],

    });
});
</script>