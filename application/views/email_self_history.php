<?php
$heading = "Email History";
?>

            <div class="row">
                <!-- NEW WIDGET START -->
                <div class="col-lg-12 ">
                    <div id="panel-1" class="panel">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <table id="datatable_tabletools12" class="table table-bordered table-hover table-striped w-100">
                                    <thead class="bg-primary-600 bg-brand-gradient">
                                        <tr>
                                            <th nowrap>
                                                <center>Owner Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Owner Email</center>
                                            </th>
                                            <th nowrap>
                                                <center>Installment</center>
                                            </th>
                                            <th nowrap>
                                                <center>Building Name</center>
                                            </th>
                                            <th nowrap>
                                                <center>Apartment No</center>
                                            </th>
                                            <th nowrap>
                                                <center>Send by</center>
                                            </th>
                                             <th nowrap>
                                                <center>Send At</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < count($emailHistory); $i++) {
                                        ?>

                                            <tr >

                                                <td>
                                                    <center><?php echo ucwords($emailHistory[$i]['owner_name'])?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $emailHistory[$i]['owner_email']?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $emailHistory[$i]['installment']?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo ucwords($emailHistory[$i]['building_name'])?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $emailHistory[$i]['apartment_no']?></center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo ucwords($emailHistory[$i]['created_name'])?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center> <center><?php echo date("Y-m-d",strtotime($emailHistory[$i]['created_at']))?><br> <?php echo date("h:i A",strtotime($emailHistory[$i]['created_at']))?></center></center>
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
        




<script type="text/javascript">
    $(document).ready(function() {

        $('#datatable_tabletools12').dataTable({
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

  
  
   
</script>