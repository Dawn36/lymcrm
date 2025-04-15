<?php
$heading = "Property";
?>
<style type="text/css">
<<<<<<< HEAD
    .mt {
        margin-top: 10px;
    }
=======
.mt {
    margin-top: 10px;
}
>>>>>>> 3bdb593 (Initial commit)
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
<<<<<<< HEAD
                                <table id="datatable_tabletools_owner" class="table table-bordered table-hover table-striped w-100">
=======
                                <table id="datatable_tabletools_owner"
                                    class="table table-bordered table-hover table-striped w-100">
>>>>>>> 3bdb593 (Initial commit)
                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Owner Name</center>
                                            </th>
<<<<<<< HEAD
                                            <!--  <th nowrap>
                                                <center>Owner Email</center>
                                            </th> -->
=======
                                            <!-- <th nowrap>-->
                                            <!--    <center>Owner Email</center>-->
                                            <!--</th>-->
>>>>>>> 3bdb593 (Initial commit)
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
<<<<<<< HEAD
                                            <th nowrap>
=======
                                             <th nowrap>
>>>>>>> 3bdb593 (Initial commit)
                                                <center>End Date</center>
                                            </th>
                                            <th nowrap>
                                                <center>Number Of payment</center>
                                            </th>
                                            <th nowrap>
                                                <center>Active</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
<<<<<<< HEAD
                                        <?php for ($i = 0; $i < count($getTenantTenancy); $i++) {
                                            $tenancyId = $getTenantTenancy[$i]['tenancyId'];
                                        ?>
                                            <tr>
                                                <td>
                                                    <center><?php echo $getTenantTenancy[$i]['name'] ?></center>
                                                </td>
                                                <!--  <td>
                                                <center><?php echo $getTenantTenancy[$i]['email'] ?></center>
                                            </td> -->
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
                                                    <center><?php echo date('Y-m-d', strtotime($getTenantTenancy[$i]['start_date'])); ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo date('Y-m-d', strtotime($getTenantTenancy[$i]['end_date'])); ?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $getTenantTenancy[$i]['no_of_payments'] ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center> <button onclick="ViewPayments(<?php echo $tenancyId; ?>)" class="btn btn-sm btn-primary bg-brand-gradient payment" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="View Payments"><i class="fal fa-eye"></i></button>
                                                        <button onclick="ViewPaymentsDeposit(<?php echo $tenancyId; ?>)" class="btn btn-sm btn-primary bg-brand-gradient payment" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="View Payments Deposit"><i class="fas fa-money-check-edit-alt"></i></button>
                                                        <button onclick="ViewDepositAttr(<?php echo $tenancyId; ?>)" class="btn btn-sm btn-primary bg-brand-gradient " data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="View Deposit Attachment "><i class="fal fa-camera"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>
=======
                                     <?php for ($i=0; $i <count($getTenantTenancy);$i++) { 
                                         $tenancyId=$getTenantTenancy[$i]['tenancyId'] ;
                                     ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['name'] ?></center>
                                            </td>
                                            <!--<td>-->
                                            <!--    <center><?php echo $getTenantTenancy[$i]['email'] ?></center>-->
                                            <!--</td>-->
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
                                                <center><?php echo date('Y-m-d', strtotime($getTenantTenancy[$i]['start_date'])) ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo date('Y-m-d', strtotime($getTenantTenancy[$i]['end_date'])) ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $getTenantTenancy[$i]['no_of_payments'] ?></center>
                                            </td>
                                            <td nowrap>
                                                <center> <button onclick="ViewPayments(<?php echo $tenancyId; ?>)" class="btn btn-sm btn-primary bg-brand-gradient payment"
                                                data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="View Payments" ><i class="fal fa-eye"></i></button>
                                                    <button onclick="ViewPaymentsDeposit(<?php echo $tenancyId; ?>)" class="btn btn-sm btn-primary bg-brand-gradient payment" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="View Payments Deposit" ><i class="fas fa-money-check-edit-alt"></i></button>
                                                    <button onclick="ViewDepositAttr(<?php echo $tenancyId; ?>)" class="btn btn-sm btn-primary bg-brand-gradient " data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="View Deposit Attachment " ><i class="fal fa-camera"></i></button>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
>>>>>>> 3bdb593 (Initial commit)
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
=======
function ViewDepositAttr(tenancyId) {
         var value = {
            tenancyId: tenancyId,
        };
        $.ajax({
            url: baseurl + 'tenant_deposit_image',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Attachments');
                //  $('#modal-body').html(``);
                $('#modal-body').html(result);
                $('#myModal').modal();
>>>>>>> 3bdb593 (Initial commit)

            }
        });
    }
<<<<<<< HEAD

    function ViewDepositAttr(tenancyId) {
        var value = {
            tenancyId: tenancyId,
        };
        $.ajax({
            url: baseurl + 'tenant_deposit_image',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('Attachments');
                //  $('#modal-body').html(``);
                $('#modal-body').html(result);
                $('#myModal').modal();
=======
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
>>>>>>> 3bdb593 (Initial commit)

            }
        });
    }
<<<<<<< HEAD

    function ViewPaymentsDeposit(tenancyId) {
=======
     function ViewPaymentsDeposit(tenancyId) {
>>>>>>> 3bdb593 (Initial commit)
        var value = {
            tenancyId: tenancyId
        };
        $.ajax({
            url: baseurl + 'tenancy_payments_deposit',
            type: 'POST',
            data: value,
            success: function(result) {
                $('.modal-title').html('View Payments Deposit');
                $('#modal-body-center').html(result);
                $('#myModalCenter').modal();

            }
        });
    }

<<<<<<< HEAD
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
=======
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
>>>>>>> 3bdb593 (Initial commit)
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

<<<<<<< HEAD
        });
    });
=======
    });
});
>>>>>>> 3bdb593 (Initial commit)
</script>