<?php
$heading = "Property";
?>
<style type="text/css">
.mt {
    margin-top: 10px;
}
</style>
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Lymcrm</a></li>
        <li class="breadcrumb-item">Tenancy</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>

    <div id="content">
        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <table id="datatable_tabletools_owner"
                                    class="table table-bordered table-hover table-striped w-100">
                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Owner Name</center>
                                            </th>
                                             <th nowrap>
                                                <center>Owner Email</center>
                                            </th>
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
                                                <center>Appartement #</center>
                                            </th>
                                            <th nowrap>
                                                <center>Start Date</center>
                                            </th>
                                             <th nowrap>
                                                <center>End Date</center>
                                            </th>
                                            <th nowrap>
                                                <center>Number Of payment</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php for ($i=0; $i <count($getTenantTenancy);$i++) { 
                                        
                                     ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['name'] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['email'] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['building_name'] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['building_address'] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['building_community'] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['apartment_number'] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['start_date'] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['end_date'] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['no_of_payments'] ?></center>
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