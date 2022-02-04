 <style type="text/css">
     .ct-series-b .ct-slice-pie, .ct-series-b .ct-slice-donut-solid, .ct-series-b .ct-area {
    fill: #ffca5b !important;
}
.ct-series-a .ct-slice-pie, .ct-series-a .ct-slice-donut-solid, .ct-series-a .ct-area {
    fill: #6e96d7 !important;
}
/*.progress-bar {
    background-color: #6e96d7 !important;
    }*/
 </style>
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
                                        <h2 >Paid </h2>
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
                                                        <div class="progress-bar" role="progressbar" style="width: 70%;background-color: #6e96d7;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="d-flex mt-2 mb-1 fs-xs " style="color: #ffca5b;">
                                                        Total Deposit
                                                    </div>
                                                    <div class="progress progress-xs mb-3">
                                                        <div class="progress-bar bg-danger-500" role="progressbar" style="width: 15%; background-color: #ffca5b;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <h2 >Unpaid</h2>
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
                                                        <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #6e96d7;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="d-flex mt-2 mb-1 fs-xs "  style="color: #ffca5b;">
                                                        Total Deposit
                                                    </div>
                                                    <div class="progress progress-xs mb-3">
                                                        <div class="progress-bar bg-danger-500" role="progressbar" style="width: 15%; background-color: #ffca5b;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xl-3">
                                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            3
                                            <small class="m-0 l-h-n">Total number of owner</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xl-3">
                                <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            12 
                                            <small class="m-0 l-h-n">Total number of property</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xl-3">
                                <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            1
                                            <small class="m-0 l-h-n">Total number of tenants</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xl-3">
                                <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            3 
                                            <small class="m-0 l-h-n">Paid</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xl-6">
                                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            3
                                            <small class="m-0 l-h-n">Unpaid</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-6">
                                <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            12 
                                            <small class="m-0 l-h-n">Total revenue</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                </div>
                            </div>
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

                                <table id="datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
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
                                            <tr>
                                                <td>
                                                    <center>sadsa</center>
                                                </td>
                                                <td>
                                                    <center>3</center>
                                                </td>
                                                <td>
                                                    <center>asdsa</center>
                                                </td>
                                                <td>
                                                    <center>asdsa</center>
                                                </td>
                                                
                                                <td nowrap>
                                                    <center>
                                                        <button onclick="aaaa()" class="btn btn-sm btn-primary bg-brand-gradient" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-original-title="Reset Password"><i class="fas fa-key"></i></button>&nbsp;
                                                        
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

                                <table id="datatable_tabletools" class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline">
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
                                            <th nowrap>
                                                <center>Status</center>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>
                                                    <center>aa</center>
                                                </td>
                                                <td>
                                                    <center>asd</center>
                                                </td>
                                                <td>
                                                    <center>asdsa</center>
                                                </td>
                                                <td>
                                                    <center>asdsa</center>
                                                </td>
                                                 <td>
                                                    <center>asdsa</center>
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
                    
                    </main>
<script type="text/javascript">
            /* Activate smart panels */
            // $('#js-page-content').smartPanel();

        </script>
        <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
        
                    <script>
                         var pieChart = function()
            {
                var data = {
                    series: [15, 3]
                };

                var sum = function(a, b)
                {
                    return a + b
                };

                new Chartist.Pie('#pieChart', data,
                {
                    labelInterpolationFnc: function(value)
                    {
                        return Math.round(value / data.series.reduce(sum) * 100) + '%';
                    }
                });
            }
                var pieChart2 = function()
            {
                var data = {
                    series: [5, 36]
                };

                var sum = function(a, b)
                {
                    return a + b
                };

                new Chartist.Pie('#pieChart2', data,
                {
                    labelInterpolationFnc: function(value)
                    {
                        return Math.round(value / data.series.reduce(sum) * 100) + '%';
                    }
                });
            }
          



            $(document).ready(function()
            {
                //$('#js-page-content').smartPanel(); 

                //

                  /* defined datas */
                   pieChart();
                   pieChart2();

            });

            
        </script>