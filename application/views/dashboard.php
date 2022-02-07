<style type="text/css">
    .ml35 {
        margin-left: 35px
    }

    .fs30 {
        font-size: 30px
    }

    .colorblue {
        color: #0f9ad3
    }

    .colorred {
        color: #0f9ad3
    }

    .colorr {
        color: #69aa95
    }
</style>

<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
        <li class="breadcrumb-item">category_1</li>
        <li class="breadcrumb-item">category_2</li>
        <li class="breadcrumb-item active">Page Titile</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span><?php echo date("d F Y") ?></span></li>
    </ol>

    <div class="row">
        <div class="col-sm-3 col-xl-3">

            <div class="p-3 text-black mb-g">
                <u>
                    <h3 class="m-0 l-h-n">Total Visitors</h3>
                </u>
                <h3 class="display-4 d-block l-h-n m-0 fw-500"><i class='fas fa-users fs30 colorblue'></i>
                    124
                </h3>
                <i class="" style="font-size:6rem"></i>
            </div>

            <div class="p-3 text-black mb-g">
                <div class="">
                    <u>
                        <h3 class="m-0 l-h-n">Average Visit Duration</h3>
                    </u>
                    <h3 class="display-4 d-block l-h-n m-0 fw-500"><i class="fas fa-watch fs30 colorred"></i>
                        26min
                        <small class="m-0 l-h-n"></small>
                    </h3>
                </div>
                <i class="" style="font-size: 6rem;"></i>
            </div>
        </div>
        <div class="col-sm-3 col-xl-3">
            <div id="panel-21">
                <h2>
                    <u>Returning <span class="fw-300"><i>Customers</i></span></u>

                </h2>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div id="donutFill" class="ct-chart" style="width:100%; height:200px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xl-3">
            <div class="p-3 text-black mb-g">
                <u>
                    <h3 class="m-0 l-h-n">New</h3>
                </u>
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    40%
                </h3>
            </div>
            <div class="p-3  text-black mb-g">
                <u>
                    <h3 class="m-0 l-h-n">Returning</h3>
                </u>
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    60%
                </h3>
            </div>
        </div>
        <div class="col-sm-3 col-xl-3">
            <div class="p-2 text-black mb-g">

                <u>
                    <h3 class="m-0 l-h-n">Peak Hour </h3>
                </u>
                <h3 class="display-4 d-block l-h-n m-0 fw-500"><i class="fas fa-chart-line fs30 colorblue"></i>
                    12 PM
                </h3>
                <samll>43 Visitors</samll>

            </div>
            <div class="p-3  text-black mb-g">

                <u>
                    <h3 class="m-0 l-h-n">Lowest Hours</h3>
                </u>
                <h3 class="display-4 d-block l-h-n m-0 fw-500"><i class='fas fa-chart-line-down fs30 colorr'></i>
                    9AM
                    <small class="m-0 l-h-n">3 Visitors</small>
                </h3>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-xl-6">
            <div id="panel-5" class="panel" style="height: 282px">
                <div class="panel-hdr">
                    <h2>
                        Duration
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="form-group">
                            <label class="form-label" for="addon-wrapping-left"><samp class="ml35">
                                    <15min </samp></label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class=""><i class="fas fa-running fs30 colorr"></i></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-xl-12">
                                    <div class="demo-v-spacing">
                                        <div class="progress progress-lg">
                                            <div class="progress-bar bg-success " role="progressbar" style="width: 18%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">18%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="addon-wrapping-left"> <samp class="ml35"> 15 - 30min </samp></label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class=""><i class="fas fa-walking fs30 colorr"></i></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-xl-12">
                                    <div class="demo-v-spacing">
                                        <div class="progress progress-lg">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 53%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">53%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="addon-wrapping-left"><samp class="ml35">>30min </samp></label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class=""><i class="fas fa-blind fs30 colorr"></i>
                                </div>
                                <div class="col-sm-12 col-md-12 col-xl-12">
                                    <div class="demo-v-spacing">
                                        <div class="progress progress-lg">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 29%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">29%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-xl-6">
            <!-- Line Chart -->
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Outside <span class="fw-300"><i>Opportunity</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div id="lineChartArea" class="ct-chart" style="width:100%; height:200px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-10" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Hourly <span class="fw-300"><i>Trend</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div id="barlineCombine">
                            <canvas style="width:100%; height:300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
<script>
    /* line chart area */
    var lineChartArea = function() {
        new Chartist.Line('#lineChartArea', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8],
            series: [
                [5, 9, 7, 8, 5, 3, 5, 4, ]

            ]

        }, {

            low: 0,
            showArea: true,
            fullWidth: true
        });
    }




    var donutFill = function() {
        new Chartist.Pie('#donutFill', {
                series: [20, 80],

            },

            {

                donut: true,
                donutWidth: 30,
                donutSolid: true,
                startAngle: 270,
                showLabel: true
            });
    }
    /* donut fill -- end */
    var barlineCombine = function() {
        var barlineCombineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                    type: 'line',
                    label: 'Dataset 1',
                    borderColor: '#e3c022',
                    pointBackgroundColor: '#e3c022',
                    pointBorderColor: '#e3c022',
                    pointBorderWidth: 1,
                    borderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 5,
                    fill: false,
                    data: [
                        10,
                        16,
                        72,
                        93,
                        29,
                        74,
                        64
                    ]
                },
                {
                    type: 'bar',
                    label: 'Dataset 3',
                    backgroundColor: '#2ea4e5',
                    borderColor: '#afe4e7',
                    data: [
                        10,
                        16,
                        72,
                        93,
                        29,
                        74,
                        64
                    ],
                    borderWidth: 1
                }
            ]

        };
        var config = {
            type: 'bar',
            data: barlineCombineData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Bar Chart'
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: '6 months forecast'
                        },
                        gridLines: {
                            display: true,
                            color: "#f2f2f2"
                        },
                        ticks: {
                            beginAtZero: true,
                            fontSize: 11
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Profit margin (approx)'
                        },
                        gridLines: {
                            display: true,
                            color: "#f2f2f2"
                        },
                        ticks: {
                            beginAtZero: true,
                            fontSize: 11
                        }
                    }]
                }
            }
        }
        new Chart($("#barlineCombine > canvas").get(0).getContext("2d"), config);
    }


    $(document).ready(function() {

        donutFill();
        lineChartArea();
        barlineCombine();

    });
</script>