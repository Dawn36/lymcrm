<style type="text/css">
.mt{
    margin-top: 10px;
}
</style>
<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
       <li class="breadcrumb-item"><a href="javascript:void(0);">IC Portal</a></li>
        <li class="breadcrumb-item">Bed</li>
        
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
      
<div id="content">
  <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1> <span class="page-title txt-color-blueDark">Bed Show</span></h1>
    </div>
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
      <a href="/Bed/BedAdd" class="btn btn-primary float-right bg-brand-gradient"  type="button"><i class="fas fa-plus" style="margin-right: 4px"></i>Add Bed</a>
    </div>
  </div>
<section id="" class="">
  <div class="row">
    <!-- NEW WIDGET START -->
   <div class="col-lg-12 mt">
    <div id="panel-1" class="panel">
        <div class="panel-container show">
            <div class="panel-content">
            <table id="datatable_tabletools" class="table table-bordered table-hover table-striped w-100">
              <thead class="bg-primary-600 bg-brand-gradient">
                <tr>
                  <th nowrap><center>Ward No</center></th>
                  <th nowrap><center>Bed No</center></th>
                  <th nowrap><center>Status</center></th>
                  <th nowrap><center><center>Action</center></th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i=0; $i < count($bed) ; $i++) { 
                  
                 ?>
                  <tr style="cursor:pointer" onClick="">
                    <td><center><?php echo $bed[$i]['ward_no'] ." - ".$bed[$i]['ward_depart'] ?></center></td>
                    <td><center><?php echo $bed[$i]['bed_no'] ?></center></td>
                    <td><center><?php if($bed[$i]['bed_status']=='1'){echo "Active";}else{echo "InActive";}  ?></center></td>
                    <td style="padding:6px 12px;"><center>
                      <a href="/Bed/BedEdit/<?php echo $bed[$i]['bed_id'] ?>" class="btn btn-sm btn-primary bg-brand-gradient" title="Edit Bed"><i class="fal fa-edit"></i></a>&nbsp;

                      <button onclick=" deleted(<?php echo $bed[$i]['bed_id'] ?>)" class="btn btn-sm btn-primary bg-brand-gradient" title="Delete Bed"><i class="fal fa-times"></i></button>
                    </center></td>
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
  function deleted(aa){
 

    
 // var data = $("#").serialize();
 if(confirm("Are you sure you want to delete?"))
 {
// alert(aa);
 var data = { id: aa };
 $.ajax({
     url: baseurl + 'delete_bed',
     type: 'POST',
     data: data,
     success: function(result) {

         //var result = jQuery.parseJSON(result);
         if(result){
             var result = jQuery.parseJSON(result);
             console.log( result);
             if(result == 1)
             {
               alert("Delete Sucessfully")
               window.location.reload();
             }
            
           
         } 
      
         // $('#order_total_amount').text(Math.round(total_amount));

     },
     error: function(xhr, textStatus, errorThrown) {
         alert(xhr.responseText);
     }
 });

}
}

$( document ).ready(function() {
                // initialize datatable
        $('#datatable_tabletools').dataTable(
        {
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
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-sm'
                }
            ],
             
        });
});

</script>