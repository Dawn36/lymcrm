<?php

// echo '<pre>';
// print_r($tenancyInfo);
// echo '<pre>';
// print_r($paymentInfo);

$heading = "Tenancy";
?>
<style type="text/css">
    .mt {
        margin-top: 10px;
    }
</style>
<main id="js-page-content" role="main" class="page-content">


    <div id="content">

        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content" style="overflow:auto">
                                <table id="<?= str_replace(' ', '', $heading) ?>_datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">

                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Tenancy #</center>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < count($tenancyInfo); $i++) {
                                        ?>
                                            <tr>
                                                <td nowrap>
                                                    <center><?php echo $tenancyInfo[$i]['tenancy_no'] ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo $tenancyInfo[$i]['name'] ?></center>
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
    <div id="content">

        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content" style="overflow:auto">
                                <table id="<?= str_replace(' ', '', $heading) ?>_datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">

                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>#</center>
                                            </th>
                                            <th nowrap>
                                                <center>Payment Type</center>
                                            </th>
                                            <th nowrap>
                                                <center>Cheque #</center>
                                            </th>
                                            <th nowrap>
                                                <center>Date</center>
                                            </th>
                                            <th nowrap>
                                                <center>Amount</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < count($paymentInfo); $i++) {
                                        ?>
                                            <tr>
                                                <td nowrap>
                                                    <center><?php echo $i + 1 ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo $paymentInfo[$i]['payment_type'] ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo $paymentInfo[$i]['cheque_no'] ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo date('d-M-Y', strtotime($paymentInfo[$i]['payment_date'])); ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo $paymentInfo[$i]['amount'] ?></center>
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

</script>