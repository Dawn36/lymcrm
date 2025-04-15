 <style type="text/css">
     .ct-series-b .ct-slice-pie,
     .ct-series-b .ct-slice-donut-solid,
     .ct-series-b .ct-area {
         fill: #ffca5b !important;
     }

     .ct-series-a .ct-slice-pie,
     .ct-series-a .ct-slice-donut-solid,
     .ct-series-a .ct-area {
         fill: #6e96d7 !important;
     }

     .ct-label {
         font-weight: bold;
     }

     /*.progress-bar {
    background-color: #6e96d7 !important;
    }*/
 </style>
 <?php
<<<<<<< HEAD
=======
 $heading='Dashboard';
>>>>>>> 3bdb593 (Initial commit)
    //////// paid working processbar////////////////////////
    $totalRePaid = $totalRevenue[0]['rent_amount'] + $totalPaid[0]['amount'];
    if ($totalRePaid > 0) {
        $totalRevPaid = round(($totalRevenue[0]['rent_amount'] / $totalRePaid) * 100);
        $totaldepositPaid = round(($totalPaid[0]['amount'] / $totalRePaid) * 100);
    } else {
        $totalRevPaid = 0;
        $totaldepositPaid = 0;
    }
    //////// Unpaid working processbar////////////////////////
    $unPaidAmount = $totalRevenue[0]['rent_amount'] - $totalPaid[0]['amount'];
    $totalReUnpaid = $totalRevenue[0]['rent_amount'] + ($unPaidAmount);
    if ($totalReUnpaid > 0) {
        $totalRevUnPaid = round(($totalRevenue[0]['rent_amount'] / $totalReUnpaid) * 100);

        $totaldepositUnPaid = round(($unPaidAmount / $totalReUnpaid) * 100);
    } else {
        $totalRevUnPaid = 0;
        $totaldepositUnPaid = 0;
    }


    ?>

 <input type="hidden" id="totalRevenue" value="<?php echo $totalRevenue[0]['rent_amount'] ?>">
 <input type="hidden" id="paid" value="<?php echo $totalPaid[0]['amount'] ?> ">
 <input type="hidden" id="unPaid" value="<?php echo $totalRevenue[0]['rent_amount'] - $totalPaid[0]['amount'] ?>">
 <main id="js-page-content" role="main" class="page-content">
     <ol class="breadcrumb page-breadcrumb">
         <li class="breadcrumb-item"><a href="javascript:void(0);">Lym</a></li>

         <li class="breadcrumb-item active">Lym Dashboard</li>
         <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
     </ol>

     <div class="subheader">
         <h1 class="subheader-title">
             <i class='subheader-icon fal fa-chart-area'></i>Lym <span class='fw-300'>Dashboard</span>
         </h1>
         <div class="subheader-block d-lg-flex align-items-center">
             <span class="sparklines " sparkType="bar" sparkBarColor="#886ab5" sparkHeight="32px" sparkBarWidth="5px" values="3,4,3,6,7,3,3,6,2,6,4"></span>
         </div>
         <div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">

             <span class="sparklines " sparkType="bar" sparkBarColor="#fe6bb0" sparkHeight="32px" sparkBarWidth="5px" values="1,4,3,6,5,3,9,6,5,9,7"></span>
         </div>
     </div>
     <div class="row">

         <div class="col-sm-6 ">
             <div id="panel-6" class="panel">
                 <div class="panel-hdr">
                     <h2>Paid </h2>
                 </div>
                 <div class="panel-container show">
                     <div class="panel-content p-0 mb-g">

                     </div>
                     <div class="panel-content">
                         <div class="row  mb-g">
                             <div class="col-md-6 d-flex align-items-center">
                                 <div id="pieChart" class="ct-chart" style="width:100%; height:250px;"></div>
                             </div>
                             <div class="col-md-6 col-lg-5 mr-lg-auto">
                                 <div class="d-flex mt-2 mb-1 fs-xs text-primary">
                                     Total Revenue
                                 </div>
                                 <div class="progress progress-xs mb-3">
                                     <div class="progress-bar" role="progressbar" style="width: <?php echo $totalRevPaid ?>%;background-color: #6e96d7;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                                 <div class="d-flex mt-2 mb-1 fs-xs " style="color: #ffca5b;">
                                     Total Deposit
                                 </div>
                                 <div class="progress progress-xs mb-3">
                                     <div class="progress-bar bg-danger-500" role="progressbar" style="width: <?php echo $totaldepositPaid ?>%; background-color: #ffca5b;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-sm-6 ">
             <div id="panel-6" class="panel">
                 <div class="panel-hdr">
                     <h2>Unpaid</h2>
                 </div>
                 <div class="panel-container show">
                     <div class="panel-content p-0 mb-g">

                     </div>
                     <div class="panel-content">
                         <div class="row  mb-g">
                             <div class="col-md-6 d-flex align-items-center">
                                 <div id="pieChart2" class="ct-chart" style="width:100%; height:250px;"></div>
                             </div>
                             <div class="col-md-6 col-lg-5 mr-lg-auto">
                                 <div class="d-flex mt-2 mb-1 fs-xs text-primary">
                                     Total Revenue
                                 </div>
                                 <div class="progress progress-xs mb-3">
                                     <div class="progress-bar" role="progressbar" style="width: <?php echo $totalRevUnPaid ?>%; background-color: #6e96d7;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                                 <div class="d-flex mt-2 mb-1 fs-xs " style="color: #ffca5b;">
                                     Total Remaining
                                 </div>
                                 <div class="progress progress-xs mb-3">
                                     <div class="progress-bar bg-danger-500" role="progressbar" style="width: <?php echo $totaldepositUnPaid ?>%; background-color: #ffca5b;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <?php if ($this->session->userdata('role_id') == SUPER_ADMIN) { ?>
             <div class="col-sm-4 col-xl-4">
                 <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                     <div class="">
                         <h3 class="display-4 d-block l-h-n m-0 fw-500">
                             <?php echo number_format($subCount[0]['sub_admin_count']) ?>
                             <small class="m-0 l-h-n">Total number of Sub Admins</small>
                         </h3>
                     </div>
                     <i class="fal fa-user-tie position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                 </div>
             </div>
         <?php } ?>
         <div class="col-sm-4 col-xl-4">
             <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color: #d76e6e;">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($userCount[0]['users_count']) ?>
                         <small class="m-0 l-h-n">Total number of Users</small>
                     </h3>
                 </div>
                 <i class="fal fa-users position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
             </div>
         </div>
         <div class="col-sm-4 col-xl-4">
             <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($ownerCount[0]['owner_count']) ?>
                         <small class="m-0 l-h-n">Total number of Owners</small>
                     </h3>
                 </div>
                 <i class="fal fa-user-friends position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
             </div>
         </div>
         <div class="col-sm-4 col-xl-4">
             <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($tenantCount[0]['tenant_count']) ?>
                         <small class="m-0 l-h-n">Total number of Tenants</small>
                     </h3>
                 </div>
                 <i class="fal fa-user-friends position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
             </div>
         </div>
         <div class="col-sm-4 col-xl-4">
             <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($propertyCount[0]['property_count']) ?>
<<<<<<< HEAD
                         <small class="m-0 l-h-n">Total number of Propertys</small>
=======
                         <small class="m-0 l-h-n">Total number of Properties</small>
>>>>>>> 3bdb593 (Initial commit)
                     </h3>
                 </div>
                 <i class="fal fa-home position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
             </div>
         </div>
         <div class="col-sm-4 col-xl-4">
             <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color: #3cbb58;">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($renewCount[0]['renew_count']) ?>
                         <small class="m-0 l-h-n">Total number of Renews</small>
                     </h3>
                 </div>
                 <i class="fal fa-file-contract position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
             </div>
         </div>

         <div class="col-sm-4 col-xl-4">
             <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color: #ffb270;">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($totalPaid[0]['amount']) ?>
                         <small class="m-0 l-h-n">Paid</small>
                     </h3>
                 </div>
                 <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
             </div>
         </div>

         <div class="col-sm-4 col-xl-4">
             <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color: #6d7ea5;">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($totalRevenue[0]['rent_amount'] - $totalPaid[0]['amount']) ?>
                         <small class="m-0 l-h-n">Unpaid</small>
                     </h3>
                 </div>
                 <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
             </div>
         </div>
         <div class="col-sm-4 col-xl-4">
             <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color: #88b1b5;">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($totalRevenue[0]['rent_amount']) ?>
                         <small class="m-0 l-h-n">Total revenue</small>
                     </h3>
                 </div>
                 <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
             </div>
         </div>
<<<<<<< HEAD
         <!--   <div class="col-sm-3 col-xl-3">
                                <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            1
                                            <small class="m-0 l-h-n">Total number of tenants</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                                </div>
                            </div> -->
=======
           <div class="col-sm-4 col-xl-4" onclick="GetDepositSlipNotSend()" style="cursor: pointer;">
                <div class="p-3 bg-success-900 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        <?php echo number_format($depositEmailNotSend[0]['email_not_send']) ?>
                            <small class="m-0 l-h-n">Total number of deposit slips email not send</small>
                        </h3>
                    </div>
                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                </div>
            </div>
>>>>>>> 3bdb593 (Initial commit)
         <!--  <div class="col-sm-3 col-xl-3">
                                <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            3 
                                            <small class="m-0 l-h-n">Paid</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                </div>
                            </div> -->
     </div>
<<<<<<< HEAD
     <div class="subheader">
=======
      <div class="subheader">
>>>>>>> 3bdb593 (Initial commit)
         <h1 class="subheader-title">
             <i class='subheader-icon fas fa-bell'></i>Lym <span class='fw-300'>Complaint</span>
         </h1>
     </div>
     <div class="row">
         <div class="col-sm-4 col-xl-4">
             <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color: #e31717;">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($complaint[0]['pending']) ?>
                         <small class="m-0 l-h-n">Total number of Complaint Pending</small>
                     </h3>
                 </div>
                 <i class="fal fa-bell-exclamation position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
             </div>
         </div>
         <div class="col-sm-4 col-xl-4">
             <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g" style="background-color: #6e3232;">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($complaint[0]['assigned']) ?>
                         <small class="m-0 l-h-n">Total number of Complaint Assigned</small>
                     </h3>
                 </div>
                 <i class="fal fa-address-card position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
             </div>
         </div>
         <div class="col-sm-4 col-xl-4">
             <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                 <div class="">
                     <h3 class="display-4 d-block l-h-n m-0 fw-500">
                         <?php echo number_format($complaint[0]['complete']) ?>
                         <small class="m-0 l-h-n">Total number of Complaint Completed</small>
                     </h3>
                 </div>
                 <i class="fal fa-check-double position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
             </div>
         </div>
     </div>
     <div class="row">

         <div class="col-lg-12 mt">
             <div id="panel-1" class="panel">
                 <div class="panel-hdr">
                     <h2>
                         Manually /<span class="fw-300"><i>Send by self</i></span>
                     </h2>
                 </div>
                 <div class="panel-container show">
                     <div class="panel-content">

<<<<<<< HEAD
                         <table id="datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
=======
                         <table id="datatable_tabletools" class="table table-bordered table-hover aa table-striped w-100 dataTable dtr-inline">
>>>>>>> 3bdb593 (Initial commit)
                             <thead class="bg-primary-600 bg-brand-gradient">
                                 <tr>
                                     <th nowrap>
                                         <center>Owner Name</center>
                                     </th>
                                     <th nowrap>
                                         <center>Count</center>
                                     </th>
                                     <th nowrap>
                                         <center>Date & Time</center>
                                     </th>
                                     <th nowrap>
                                         <center>Send By</center>
                                     </th>
                                     <th nowrap>
                                         <center>Action</center>
                                     </th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php for ($i = 0; $i < count($emailSelf); $i++) {

                                    ?>
                                     <tr>
                                         <td>
                                             <center><?php echo ucwords($emailSelf[$i]['owner_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo $emailSelf[$i]['ccount'] ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo date("Y-m-d", strtotime($emailSelf[$i]['created_at'])) ?><br> <?php echo date("h:i A", strtotime($emailSelf[$i]['created_at'])) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucwords($emailSelf[$i]['created_name']) ?></center>
                                         </td>

                                         <td nowrap>
                                             <center>
                                                 <button onclick="GetHistory(<?php echo $emailSelf[$i]['deposit_id'] ?>)" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="History"><i class="fal fa-eye"></i></button>&nbsp;

                                             </center>
                                         </td>
                                     </tr>
                                 <?php }  ?>

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
     <div class="row">

         <div class="col-lg-12 mt">
             <div id="panel-1" class="panel">
                 <div class="panel-hdr">
                     <h2>
                         Auto Generated /<span class="fw-300"><i>System email</i></span>
                     </h2>
                 </div>
                 <div class="panel-container show">
                     <div class="panel-content">

<<<<<<< HEAD
                         <table id="datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
=======
                         <table id="datatable_tabletools1" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
>>>>>>> 3bdb593 (Initial commit)
                             <thead class="bg-primary-600 bg-brand-gradient">
                                 <tr>
                                     <th nowrap>
                                         <center>Tenant Name</center>
                                     </th>
                                     <th nowrap>
                                         <center>30 Days</center>
                                     </th>
                                     <th nowrap>
                                         <center>60 Days</center>
                                     </th>
                                     <th nowrap>
                                         <center>90 Days</center>
                                     </th>
<<<<<<< HEAD
                                     <th nowrap>
                                         <center>Status</center>
                                     </th>
=======
                                     <!--<th nowrap>-->
                                     <!--    <center>Status</center>-->
                                     <!--</th>-->
>>>>>>> 3bdb593 (Initial commit)

                                 </tr>
                             </thead>
                             <tbody>
<<<<<<< HEAD
                                 <?php
                                    for ($i = 0; $i < count($emailInfo); $i++) {

                                        $sendDate = explode(",", $emailInfo[$i]['end_date_group']);
                                        $check = explode(",", $emailInfo[$i]['check']);
                                        $dateDate['30'] = '';
                                        $dateDate['60'] = '';
                                        $dateDate['90'] = '';
                                        for ($j = 0; $j < count($check); $j++) {
                                            $dateDate[$check[$j]] = $sendDate[$j];
                                        }

                                        $sendCount = count($sendDate);
                                        if ($sendCount == '3') {
                                            $status = 'Complete';
                                        } else {
                                            $status = 'Pending';
                                        }

                                    ?>
=======
                                 <?php 
                                 for ($i=0; $i <count($emailInfo) ; $i++) { 
                                  
                                    $sendDate= explode(",", $emailInfo[$i]['end_date_group']);
                                    $check= explode(",", $emailInfo[$i]['check']);
                                    $dateDate['30']='';
                                    $dateDate['60']='';
                                    $dateDate['90']='';
                                    for ($j=0; $j < count($check) ; $j++) { 
                                        $dateDate[$check[$j]]=$sendDate[$j];
                                    }
                                    
                                    $sendCount=count($sendDate);
                                    if($sendCount == '3')
                                    {
                                        $status='Complete';
                                    }
                                    else
                                    {
                                        $status='Pending';
                                    }
                                    
                                  ?>
>>>>>>> 3bdb593 (Initial commit)
                                     <tr>
                                         <td>
                                             <center><?php echo ucfirst($emailInfo[$i]['tenant_name']) ?></center>
                                         </td>
                                         <td>
<<<<<<< HEAD
                                             <center><?php
                                                        if ($dateDate[30] != "") {
                                                            echo date("Y-m-d", strtotime($dateDate[30]));
                                                        } ?></center>
                                         </td>
                                         <td>
                                             <center><?php
                                                        if ($dateDate[60] != "") {
                                                            echo date("Y-m-d", strtotime($dateDate[60]));
                                                        } ?></center>
                                         </td>
                                         <td>
                                             <center><?php
                                                        if ($dateDate[90] != "") {
                                                            echo date("Y-m-d", strtotime($dateDate[90]));
                                                        } ?></center>
                                         </td>
                                         <td>
                                             <center><?= $status ?></center>
                                         </td>
=======
                                             <center><?php 
                                             if($dateDate[30] != "")
                                             {
                                                echo date("Y-m-d",strtotime($dateDate[30]));
                                             } ?></center>
                                         </td>
                                         <td>
                                             <center><?php 
                                             if($dateDate[60] != "")
                                             {
                                                echo date("Y-m-d",strtotime($dateDate[60]));
                                             } ?></center>
                                         </td>
                                          <td>
                                             <center><?php 
                                             if($dateDate[90] != "")
                                             {
                                                echo date("Y-m-d",strtotime($dateDate[90]));
                                             } ?></center>
                                         </td>
                                         <!--<td>-->
                                         <!--    <center><?=$status?></center>-->
                                         <!--</td>-->
>>>>>>> 3bdb593 (Initial commit)

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
     <div class="row">

         <div class="col-lg-12 mt">
             <div id="panel-1" class="panel">
                 <div class="panel-hdr">
                     <h2>
                         Complaint Pending /<span class="fw-300"><i>email send</i></span>
                     </h2>
                 </div>
                 <div class="panel-container show">
                     <div class="panel-content">

<<<<<<< HEAD
                         <table id="datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
=======
                         <table id="complaint_pending" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
>>>>>>> 3bdb593 (Initial commit)
                             <thead class="bg-primary-600 bg-brand-gradient">
                                 <tr>
                                     <th nowrap>
                                         <center>Complaint #</center>
                                     </th>
                                     <th nowrap>
                                         <center>Tenant</center>
                                     </th>
                                     <th nowrap>
                                         <center>Building</center>
                                     </th>
                                     <th nowrap>
                                         <center>Appartment</center>
                                     </th>
                                     <th nowrap>
                                         <center>Owner</center>
                                     </th>
                                     <th nowrap>
                                         <center>Complaint Status</center>
                                     </th>
                                     <th nowrap>
                                         <center>Email Send Date</center>
                                     </th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    for ($i = 0; $i < count($complaintEmailPending); $i++) {
                                    ?>
                                     <tr>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailPending[$i]['complaint_id']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailPending[$i]['tenant_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailPending[$i]['building_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailPending[$i]['appartment_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailPending[$i]['owner_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailPending[$i]['complaint_status']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo Date("Y-m-d h:i a", strtotime($complaintEmailPending[$i]['created_at'])) ?></center>
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
     <div class="row">

         <div class="col-lg-12 mt">
             <div id="panel-1" class="panel">
                 <div class="panel-hdr">
                     <h2>
                         Complaint Assigned /<span class="fw-300"><i>email send</i></span>
                     </h2>
                 </div>
                 <div class="panel-container show">
                     <div class="panel-content">

<<<<<<< HEAD
                         <table id="datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
=======
                         <table id="complaint_assigned" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
>>>>>>> 3bdb593 (Initial commit)
                             <thead class="bg-primary-600 bg-brand-gradient">
                                 <tr>
                                     <th nowrap>
                                         <center>Complaint #</center>
                                     </th>
                                     <th nowrap>
                                         <center>Tenant</center>
                                     </th>
                                     <th nowrap>
                                         <center>Building</center>
                                     </th>
                                     <th nowrap>
                                         <center>Appartment</center>
                                     </th>
                                     <th nowrap>
                                         <center>Owner</center>
                                     </th>
                                     <th nowrap>
                                         <center>Assign to</center>
                                     </th>
                                     <th nowrap>
                                         <center>Complaint Status</center>
                                     </th>
                                     <th nowrap>
                                         <center>Email Send Date</center>
                                     </th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    for ($i = 0; $i < count($complaintEmailAssigned); $i++) {
                                    ?>
                                     <tr>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailAssigned[$i]['complaint_id']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailAssigned[$i]['tenant_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailAssigned[$i]['building_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailAssigned[$i]['appartment_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailAssigned[$i]['owner_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailAssigned[$i]['assign_to']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailAssigned[$i]['complaint_status']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo Date("Y-m-d h:i a", strtotime($complaintEmailAssigned[$i]['created_at'])) ?></center>
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
     <div class="row">

         <div class="col-lg-12 mt">
             <div id="panel-1" class="panel">
                 <div class="panel-hdr">
                     <h2>
                         Complaint Completed /<span class="fw-300"><i>email send</i></span>
                     </h2>
                 </div>
                 <div class="panel-container show">
                     <div class="panel-content">

<<<<<<< HEAD
                         <table id="datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
=======
                         <table id="complaint_completed" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
>>>>>>> 3bdb593 (Initial commit)
                             <thead class="bg-primary-600 bg-brand-gradient">
                                 <tr>
                                     <th nowrap>
                                         <center>Complaint #</center>
                                     </th>
                                     <th nowrap>
                                         <center>Tenant</center>
                                     </th>
                                     <th nowrap>
                                         <center>Building</center>
                                     </th>
                                     <th nowrap>
                                         <center>Appartment</center>
                                     </th>
                                     <th nowrap>
                                         <center>Owner</center>
                                     </th>
                                     <th nowrap>
                                         <center>Complaint Status</center>
                                     </th>
                                     <th nowrap>
                                         <center>Email Send Date</center>
                                     </th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    for ($i = 0; $i < count($complaintEmailCompleted); $i++) {
                                    ?>
                                     <tr>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailCompleted[$i]['complaint_id']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailCompleted[$i]['tenant_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailCompleted[$i]['building_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailCompleted[$i]['appartment_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailCompleted[$i]['owner_name']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo ucfirst($complaintEmailCompleted[$i]['complaint_status']) ?></center>
                                         </td>
                                         <td>
                                             <center><?php echo Date("Y-m-d h:i a", strtotime($complaintEmailCompleted[$i]['created_at'])) ?></center>
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
<<<<<<< HEAD
=======

>>>>>>> 3bdb593 (Initial commit)
 </main>
 <script type="text/javascript">
     /* Activate smart panels */
     // $('#js-page-content').smartPanel();
 </script>
 <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->

 <script>
<<<<<<< HEAD
=======
 $(document).ready(function() {
    $('#complaint_completed').dataTable({
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
    $('#complaint_assigned').dataTable({
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
    $('#complaint_pending').dataTable({
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
         $('#datatable_tabletools').dataTable({
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
    // initialize datatable
    $('#datatable_tabletools1').dataTable({
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
>>>>>>> 3bdb593 (Initial commit)
     var totalRevenue = parseInt($('#totalRevenue').val());
     var paid = parseInt($('#paid').val());
     var unPaid = parseInt($('#unPaid').val());
     var pieChart = function() {
         var data = {
             series: [totalRevenue, paid]
         };

         var sum = function(a, b) {
             return a + b
         };


         new Chartist.Pie('#pieChart', data, {
             labelInterpolationFnc: function(value) {
                 return Math.round(value / data.series.reduce(sum) * 100) + '%';
             }
         });
     }
     var pieChart2 = function() {
         var data = {
             series: [totalRevenue, unPaid]
         };

         var sum = function(a, b) {
             return a + b
         };

         new Chartist.Pie('#pieChart2', data, {
             labelInterpolationFnc: function(value) {
                 return Math.round(value / data.series.reduce(sum) * 100) + '%';
             }
         });
     }




     $(document).ready(function() {
         //$('#js-page-content').smartPanel(); 

         //

         /* defined datas */
         pieChart();
         pieChart2();

     });

     function GetHistory(depositId) {
         var value = {
             depositId: depositId,

         };
         $.ajax({
             url: baseurl + 'get_all_email',
             type: 'POST',
             data: value,
             success: function(result) {
                 $('#modal-title-center').html('Email Self History');
                 $('#modal-body-center').html(result);
                 $('#myModalCenter').modal();

             }
         });
     }
<<<<<<< HEAD
=======
     function GetDepositSlipNotSend(depositId) {
         var value = {
             depositId: depositId,

         };
         $.ajax({
             url: baseurl + 'deposit_slip_not_send',
             type: 'POST',
             data: value,
             success: function(result) {
                 $('#modal-title-center').html('Deposit slip not send');
                 $('#modal-body-center').html(result);
                 $('#myModalCenter').modal();

             }
         });
     }
>>>>>>> 3bdb593 (Initial commit)
 </script>