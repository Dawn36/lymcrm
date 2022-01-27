 <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">IC Portal</a></li>
                            
                            <li class="breadcrumb-item active">Infection Dashboard</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>

                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-chart-area'></i> Infection <span class='fw-300'>Dashboard</span>
                            </h1>
                            <div class="subheader-block d-lg-flex align-items-center">
                                <!-- <div class="d-inline-flex flex-column justify-content-center mr-3">
                                    <span class="fw-300 fs-xs d-block opacity-50">
                                        <small>EXPENSES</small>
                                    </span>
                                    <span class="fw-500 fs-xl d-block color-primary-500">
                                        $47,000
                                    </span>
                                </div> -->
                                <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#886ab5" sparkHeight="32px" sparkBarWidth="5px" values="3,4,3,6,7,3,3,6,2,6,4"></span>
                            </div>
                            <div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                                <!-- <div class="d-inline-flex flex-column justify-content-center mr-3">
                                    <span class="fw-300 fs-xs d-block opacity-50">
                                        <small>MY PROFITS</small>
                                    </span>
                                    <span class="fw-500 fs-xl d-block color-danger-500">
                                        $38,500
                                    </span>
                                </div> -->
                                <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#fe6bb0" sparkHeight="32px" sparkBarWidth="5px" values="1,4,3,6,5,3,9,6,5,9,7"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            3
                                            <small class="m-0 l-h-n">Number of patients requiring TBP </small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            ICU1: 0 ICU2: 1 ICU3: 2 
                                            <small class="m-0 l-h-n">Number of MDR unit wise </small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            1
                                            <small class="m-0 l-h-n">Number of HAI </small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            3 (in 2021)
                                            <small class="m-0 l-h-n">Needle stick injury incident </small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-6 ">
                         <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Phlebitis
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                          
                                            <div id="flot-line-alt" style="width:100%; height:300px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6 ">
                         <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            CLABSI
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                          
                                            <div id="flot-line-alt1" style="width:100%; height:300px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 ">
                         <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            CAUTI
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                          
                                            <div id="flot-line-alt2" style="width:100%; height:300px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6 ">
                         <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            HAP
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                          
                                            <div id="flot-line-alt3" style="width:100%; height:300px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 ">
                         <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            VAP
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                          
                                            <div id="flot-line-alt4" style="width:100%; height:300px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6 ">
                         <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            SSI
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                          
                                            <div id="flot-line-alt5" style="width:100%; height:300px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 ">
                         <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            MDRO
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                          
                                            <div id="flot-line-alt6" style="width:100%; height:300px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6 ">
                              <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2 >Total No Of Patients </h2>
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
                                                        Total 
                                                    </div>
                                                    <div class="progress progress-xs mb-3">
                                                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="d-flex mt-2 mb-1 fs-xs text-danger">
                                                        Transmission Based Precautions
                                                    </div>
                                                    <div class="progress progress-xs mb-3">
                                                        <div class="progress-bar bg-danger-500" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- News -->
                        <div class="row">
                            <div class="col-md-12">
                             <div id="panel-4" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        News 
                                    </h2>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-interval="10000">
                                                    <img class="d-block w-100" src="about:blank" data-src="holder.js/1700x400?auto=yes&bg=ffd274&fg=333333&text=SIDH and RC Hand Hygiene Day celebrated on 28th October " alt="First slide">
                                                </div>
                                                <div class="carousel-item" data-interval="2000">
                                                    <img class="d-block w-100" src="about:blank" data-src="holder.js/1700x400?auto=yes&bg=ffca5b&fg=000000&text=World Antimicrobial Awareness Week (WAAW) 18-24 November" alt="Second slide">
                                                </div>
                                                <!-- <div class="carousel-item">
                                                    <img class="d-block w-100" src="about:blank" data-src="holder.js/1700x400?auto=yes&bg=ffc241&fg=000000&text=News" alt="Third slide">
                                                </div> -->
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hostpital acquired -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Hospital Acquired Infections
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content bg-subtlelight-fade">
                                            <div id="js-checkbox-toggles" class="d-flex mb-3">
                                                <div class="custom-control custom-switch mr-2">
                                                    <input type="checkbox" class="custom-control-input" name="gra-0" id="gra-0" checked="checked">
                                                    <label class="custom-control-label" for="gra-0">MDRO Rate</label>
                                                </div>
                                                <div class="custom-control custom-switch mr-2">
                                                    <input type="checkbox" class="custom-control-input" name="gra-1" id="gra-1" checked="checked">
                                                    <label class="custom-control-label" for="gra-1">Acquired Infections</label>
                                                </div>
                                              
                                            </div>
                                            <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                               
                        </div>


                        <div class="row">
                            <!-- <div class="col-md-6">
                                <div class="card mb-g border shadow-0">
                                    <div class="card-header bg-white">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <span class="h6 font-weight-bold text-uppercase">Staff Disease Status</span>
                                            </div>
                                            <div class="col d-flex">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header bg-white p-0">
                                        <div class="row no-gutters row-grid align-items-stretch">
                                            <div class="col-12 col-md">
                                                <div class="text-uppercase text-muted py-2 px-3">Title</div>
                                            </div>
                                            <div class="col-sm-12 col-md-5 col-xl-1 hidden-md-down">
                                                <div class="text-uppercase text-muted py-2 px-3">Status</div>
                                            </div>
                                            <div class="col-sm-6 col-md-3 hidden-md-down">
                                                <div class="text-uppercase text-muted py-2 px-3">Last posts</div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row no-gutters row-grid">
                                         
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base base-2 icon-stack-3x opacity-100 color-info-800"></i>
                                                                    <i class="base base-3 icon-stack-2x opacity-100 color-info-500"></i>
                                                                    <i class="fal fa-user-md icon-stack-1x opacity-100 color-white"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Vaccinated
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-5 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">72 <i>Cases</i></span>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                           
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base base-7 icon-stack-3x opacity-100 color-success-800"></i>
                                                                    <i class="base base-4 icon-stack-2x opacity-100 color-success-600"></i>
                                                                    <i class="fal fa-medkit icon-stack-1x opacity-100 color-white"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Unvaccinated
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-5 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">99 <i>Cases</i></span>
                                                        </div>
                                                    </div>
                                                 
                                                </div>
                                            </div>
                                          
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base base-15 icon-stack-3x opacity-100 color-success-800"></i>
                                                                    <i class="base base-10 icon-stack-2x opacity-100 color-success-600"></i>
                                                                    <i class="fal fa-dollar-sign icon-stack-1x opacity-100 color-white"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Unknown.
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-5 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">88 <i>Cases</i></span>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                       
                                        </div>
                                    </div>
                                </div> 
                            </div> -->
                             <div class="col-md-12">
                                <div class="card mb-g border shadow-0">
                                    <div class="card-header bg-white">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <span class="h6 font-weight-bold text-uppercase">For HCW </span>
                                            </div>
                                            <div class="col d-flex">
                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header bg-white p-0">
                                        <div class="row no-gutters row-grid align-items-stretch">
                                            <div class="col-12 col-md">
                                                <div class="text-uppercase text-muted py-2 px-3">Title</div>
                                            </div>
                                            <div class="col-sm-12 col-md-5 col-xl-1 hidden-md-down">
                                                <div class="text-uppercase text-muted py-2 px-3">Status</div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row no-gutters row-grid">
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base base-2 icon-stack-3x opacity-100 color-info-800"></i>
                                                                    <i class="base base-3 icon-stack-2x opacity-100 color-info-500"></i>
                                                                    <i class="fal fa-crutches icon-stack-1x opacity-100 color-white"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        COVID vaccine
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-5 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">250+ <i>Cases</i></span>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base base-7 icon-stack-3x opacity-100 color-success-800"></i>
                                                                    <i class="base base-4 icon-stack-2x opacity-100 color-success-600"></i>
                                                                    <i class="fal fa-medkit icon-stack-1x opacity-100 color-white"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Hep B vaccine
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-5 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">250 <i>Cases</i></span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                     <i class="base base-7 icon-stack-3x opacity-100 color-success-800"></i>
                                                                    <i class="base base-4 icon-stack-2x opacity-100 color-success-600"></i>
                                                                    <i class="fal fa-syringe icon-stack-1x opacity-100 color-white"></i>

                                                                    
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Measle/ chicken pox vaccine
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-5 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted"> <i>unknown</i></span>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="row">
                           
                        </div>
                        
                        <!-- Policie And Learning Materials -->
                        <div class="row">
                            <div class="col-xl-6">
                         <div id="panel-5" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Standard Precautions Policy
                                    </h2>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="accordion accordion-hover" id="js_demo_accordion-5">
                                            <div class="card">
                                                <div class="card-header">
                                                    <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_demo_accordion-5a" aria-expanded="true">
                                                        <i class="fal fa-cog width-2 fs-xl"></i>
                                                        IC Policies
                                                        <span class="ml-auto">
                                                            <span class="collapsed-reveal">
                                                                <i class="fal fa-chevron-up fs-xl"></i>
                                                            </span>
                                                            <span class="collapsed-hidden">
                                                                <i class="fal fa-chevron-down fs-xl"></i>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div id="js_demo_accordion-5a" class="collapse show" data-parent="#js_demo_accordion-5">
                                                    <div class="card-body">
                                                         <ul>
                                                            <li>Standard Precautions Policy</li>
                                                            <li>Transmission Based Precautions Policy</li>
                                                            <li>Surveillance Policy</li>
                                                            <li>Waste Management Policy</li>
                                                            <li>Hospital Acquired Infection Prevention Policy</li>
                                                            <li>Pest Control Policy</li>
                                                        </ul></div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header">
                                                    <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-5g" aria-expanded="false">
                                                        <i class="fal fa-code-merge width-2 fs-xl"></i>
                                                        Learning Resources 
                                                        <span class="ml-auto">
                                                            <span class="collapsed-reveal">
                                                                <i class="fal fa-chevron-up fs-xl"></i>
                                                            </span>
                                                            <span class="collapsed-hidden">
                                                                <i class="fal fa-chevron-down fs-xl"></i>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div id="js_demo_accordion-5g" class="collapse" data-parent="#js_demo_accordion-5">
                                                    <div class="card-body">
                                                        <a href="https://www.youtube.com/channel/UCUDEREhR4eAeaTeQOutKnSg" target="_blank">Learning Resources Click Me</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    series: [5, 3]
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

          



            $(document).ready(function()
            {
                //$('#js-page-content').smartPanel(); 

                //

                  /* defined datas */
                   pieChart();

            var dataTargetProfit = [
                [1354586000000, 153],
                [1364587000000, 658],
                [1374588000000, 198],
                [1384589000000, 663],
                [1394590000000, 801],
                [1404591000000, 1080],
                [1414592000000, 353],
                [1424593000000, 749],
                [1434594000000, 523],
                [1444595000000, 258],
                [1454596000000, 688],
                [1464597000000, 364]
            ]
            var dataProfit = [
                [1354586000000, 53],
                [1364587000000, 65],
                [1374588000000, 98],
                [1384589000000, 83],
                [1394590000000, 980],
                [1404591000000, 808],
                [1414592000000, 720],
                [1424593000000, 674],
                [1434594000000, 23],
                [1444595000000, 79],
                [1454596000000, 88],
                [1464597000000, 36]
            ]
            var dataSignups = [
                [1354586000000, 647],
                [1364587000000, 435],
                [1374588000000, 784],
                [1384589000000, 346],
                [1394590000000, 487],
                [1404591000000, 463],
                [1414592000000, 479],
                [1424593000000, 236],
                [1434594000000, 843],
                [1444595000000, 657],
                [1454596000000, 241],
                [1464597000000, 341]
            ]
            var dataSet1 = [
                [0, 10],
                [100, 8],
                [200, 7],
                [300, 5],
                [400, 4],
                [500, 6],
                [600, 3],
                [700, 2]
            ];
            var dataSet2 = [
                [0, 9],
                [100, 6],
                [200, 5],
                [300, 3],
                [400, 3],
                [500, 5],
                [600, 2],
                [700, 1]
            ];
                //
                var dataSetPie = [
                {
                    label: "Asia",
                    data: 4119630000,
                    color: color.primary._500
                },
                {
                    label: "Latin America",
                    data: 590950000,
                    color: color.info._500
                },
                {
                    label: "Africa",
                    data: 1012960000,
                    color: color.warning._500
                },
                {
                    label: "Oceania",
                    data: 95100000,
                    color: color.danger._500
                },
                {
                    label: "Europe",
                    data: 727080000,
                    color: color.success._500
                },
                {
                    label: "North America",
                    data: 344120000,
                    color: color.fusion._400
                }];


                $.plot($("#flotPie"), dataSetPie,
                {
                    series:
                    {
                        pie:
                        {
                            innerRadius: 0.5,
                            show: true,
                            radius: 1,
                            label:
                            {
                                show: true,
                                radius: 2 / 3,
                                threshold: 0.1
                            }
                        }
                    },
                    legend:
                    {
                        show: false
                    }
                });

              


                var flot_toggle = function()
                {

                    var data = [
                    {
                        label: "MDRO Rate",
                        data: dataTargetProfit,
                        color: color.info._400,
                        bars:
                        {
                            show: true,
                            align: "center",
                            barWidth: 30 * 30 * 60 * 1000 * 80,
                            lineWidth: 0,
                            /*fillColor: {
                                colors: [color.primary._500, color.primary._900]
                            },*/
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0.9
                                },
                                {
                                    opacity: 0.1
                                }]
                            }
                        },
                        highlightColor: 'rgba(255,255,255,0.3)',
                        shadowSize: 0
                    },
                    {
                        label: "Acquired Infections",
                        data: dataProfit,
                        color: color.warning._500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    },
                    {
                        label: "User Signups",
                        data: dataSignups,
                        color: color.success._500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    }]

                    var options = {
                        grid:
                        {
                            hoverable: true,
                            clickable: true,
                            tickColor: '#f2f2f2',
                            borderWidth: 1,
                            borderColor: '#f2f2f2'
                        },
                        tooltip: true,
                        tooltipOpts:
                        {
                            cssClass: 'tooltip-inner',
                            defaultTheme: false
                        },
                        xaxis:
                        {
                            mode: "time"
                        },
                        yaxes:
                        {
                            tickFormatter: function(val, axis)
                            {
                                return "$" + val;
                            },
                            max: 1200
                        }

                    };

                    var plot2 = null;

                    function plotNow()
                    {
                        var d = [];
                        $("#js-checkbox-toggles").find(':checkbox').each(function()
                        {
                            if ($(this).is(':checked'))
                            {
                                d.push(data[$(this).attr("name").substr(4, 1)]);
                            }
                        });
                        if (d.length > 0)
                        {
                            if (plot2)
                            {
                                plot2.setData(d);
                                plot2.draw();
                            }
                            else
                            {
                                plot2 = $.plot($("#flot-toggles"), d, options);
                            }
                        }

                    };

                    $("#js-checkbox-toggles").find(':checkbox').on('change', function()
                    {
                        plotNow();
                    });
                    plotNow()
                }
                flot_toggle();
                

              
            });
  var dataSet3 = [
                [0, 10],
                [1, 7],
                [2, 8],
                [3, 9],
                [4, 6],
                [5, 5],
                [6, 7]
            ];
            var dataSet4 = [
                [0, 8],
                [1, 5],
                [2, 6],
                [3, 8],
                [4, 4],
                [5, 3],
                [6, 6]
            ];
            var dataSet5 = [
                [0, 10],
                [1, 6],
                [2, 8],
                [3, 5],
                [4, 6],
                [5, 7],
                [7, 1]
            ];
 $(document).ready(function()
            {
                
                /* flot lines curved -- end */

                /* flot lines tooltip */
                var flotLineAlt = $.plot($('#flot-line-alt'), [
                {
                    data: dataSet3,
                    label: 'Threshold',
                    color: color.info._500
                },
                {
                    data: dataSet4,
                    label: 'Average',
                    color: color.success._500
                },
                {
                    data: dataSet5,
                    label: 'ICU3',
                    color: color.danger._600
                },
                {
                    data: dataSet5,
                    label: 'ICU2',
                    color: color.warning._600
                },
                {
                    data: dataSet5,
                    label: 'ICU1',
                    color: color.success._600
                }],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 1
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    tooltip: true,
                    tooltipOpts:
                    {
                        cssClass: 'tooltip-inner',
                        defaultTheme: false,
                        shifts:
                        {
                            x: 10,
                            y: -40
                        }
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: '#fff'
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 15,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }
                });
                 var flotLineAlt = $.plot($('#flot-line-alt1'), [
                {
                    data: dataSet3,
                    label: 'Threshold',
                    color: color.info._500
                },
                {
                    data: dataSet4,
                    label: 'Average',
                    color: color.success._500
                },
                {
                    data: dataSet5,
                    label: 'ICU3',
                    color: color.danger._600
                },
                {
                    data: dataSet5,
                    label: 'ICU2',
                    color: color.warning._600
                },
                {
                    data: dataSet5,
                    label: 'ICU1',
                    color: color.success._600
                }],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 1
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    tooltip: true,
                    tooltipOpts:
                    {
                        cssClass: 'tooltip-inner',
                        defaultTheme: false,
                        shifts:
                        {
                            x: 10,
                            y: -40
                        }
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: '#fff'
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 15,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }
                });
                  var flotLineAlt = $.plot($('#flot-line-alt2'), [
                {
                    data: dataSet3,
                    label: 'Threshold',
                    color: color.info._500
                },
                {
                    data: dataSet4,
                    label: 'Average',
                    color: color.success._500
                },
                {
                    data: dataSet5,
                    label: 'ICU3',
                    color: color.danger._600
                },
                {
                    data: dataSet5,
                    label: 'ICU2',
                    color: color.warning._600
                },
                {
                    data: dataSet5,
                    label: 'ICU1',
                    color: color.success._600
                }],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 1
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    tooltip: true,
                    tooltipOpts:
                    {
                        cssClass: 'tooltip-inner',
                        defaultTheme: false,
                        shifts:
                        {
                            x: 10,
                            y: -40
                        }
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: '#fff'
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 15,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }
                });
                   var flotLineAlt = $.plot($('#flot-line-alt3'), [
                {
                    data: dataSet3,
                    label: 'Threshold',
                    color: color.info._500
                },
                {
                    data: dataSet4,
                    label: 'Average',
                    color: color.success._500
                },
                {
                    data: dataSet5,
                    label: 'ICU3',
                    color: color.danger._600
                },
                {
                    data: dataSet5,
                    label: 'ICU2',
                    color: color.warning._600
                },
                {
                    data: dataSet5,
                    label: 'ICU1',
                    color: color.success._600
                }],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 1
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    tooltip: true,
                    tooltipOpts:
                    {
                        cssClass: 'tooltip-inner',
                        defaultTheme: false,
                        shifts:
                        {
                            x: 10,
                            y: -40
                        }
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: '#fff'
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 15,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }
                });
                 var flotLineAlt = $.plot($('#flot-line-alt4'), [
                {
                    data: dataSet3,
                    label: 'Threshold',
                    color: color.info._500
                },
                {
                    data: dataSet4,
                    label: 'Average',
                    color: color.success._500
                },
                {
                    data: dataSet5,
                    label: 'ICU3',
                    color: color.danger._600
                },
                {
                    data: dataSet5,
                    label: 'ICU2',
                    color: color.warning._600
                },
                {
                    data: dataSet5,
                    label: 'ICU1',
                    color: color.success._600
                }],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 1
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    tooltip: true,
                    tooltipOpts:
                    {
                        cssClass: 'tooltip-inner',
                        defaultTheme: false,
                        shifts:
                        {
                            x: 10,
                            y: -40
                        }
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: '#fff'
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 15,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }
                });
                 var flotLineAlt = $.plot($('#flot-line-alt5'), [
                {
                    data: dataSet3,
                    label: 'Threshold',
                    color: color.info._500
                },
                {
                    data: dataSet4,
                    label: 'Average',
                    color: color.success._500
                }
                ],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 1
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    tooltip: true,
                    tooltipOpts:
                    {
                        cssClass: 'tooltip-inner',
                        defaultTheme: false,
                        shifts:
                        {
                            x: 10,
                            y: -40
                        }
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: '#fff'
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 15,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }
                });
                 var flotLineAlt = $.plot($('#flot-line-alt6'), [
                {
                    data: dataSet3,
                    label: 'Threshold',
                    color: color.info._500
                },
                {
                    data: dataSet4,
                    label: 'Average',
                    color: color.success._500
                },
                {
                    data: dataSet5,
                    label: 'ICU3',
                    color: color.danger._600
                },
                {
                    data: dataSet5,
                    label: 'ICU2',
                    color: color.warning._600
                },
                {
                    data: dataSet5,
                    label: 'ICU1',
                    color: color.success._600
                }],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 1
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    tooltip: true,
                    tooltipOpts:
                    {
                        cssClass: 'tooltip-inner',
                        defaultTheme: false,
                        shifts:
                        {
                            x: 10,
                            y: -40
                        }
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: '#fff'
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 15,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }
                });
                /* flot lines tooltip -- end */

                /* flot lines curved tooltip */
               
                /* flot pie chart -- end*/
            });

        </script>