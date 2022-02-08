<style type="text/css">
    .mt {
        margin-top: 10px;
    }
</style>
    <div id="content">

        <section id="" class="">
            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 mt">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content" style="overflow:auto">
                                <table id="deposit" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">

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
                                        <?php for ($i = 0; $i < count($getdeposit); $i++) {
                                        ?>
                                            <tr>
                                                <td nowrap>
                                                    <center><?php echo $i + 1 ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo ucfirst($getdeposit[$i]['payment_type']) ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo $getdeposit[$i]['cheque_no'] ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo date('d-M-Y', strtotime($getdeposit[$i]['payment_date'])); ?></center>
                                                </td>
                                                <td nowrap>
                                                    <center><?php echo $getdeposit[$i]['amount'] ?></center>
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
