<?php
$currentDate = date("m/d/Y");
?>
<style type="text/css">
    /*RED*/
    .form-controlmy {
        border-color: #fd3995;
        padding-right: calc(1.47em + 1rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fd3995' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fd3995' stroke='none'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.3675em + 0.25rem) center;
        background-size: calc(0.735em + 0.5rem) calc(0.735em + 0.5rem);
    }

    .is-invalidmy:focus {
        border-color: #fd3995;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(253, 57, 149, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(253, 57, 149, 0.25);
    }

    /*.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.47em + 1rem);
  background-position: top calc(0.3675em + 0.25rem) right calc(0.3675em + 0.25rem); }*/
    .custom-selectmy {
        border-color: #fd3995;
        padding-right: calc(0.75em + 2.625rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.875rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fd3995' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fd3995' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.875rem/calc(0.735em + 0.5rem) calc(0.735em + 0.5rem);
    }

    /*GREEN*/
    .is-validmy {
        border-color: #1dc9b7;
        padding-right: calc(1.47em + 1rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231dc9b7' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.3675em + 0.25rem) center;
        background-size: calc(0.735em + 0.5rem) calc(0.735em + 0.5rem);
    }

    .is-validmyf:focus {
        border-color: #1dc9b7;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(29, 201, 183, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(29, 201, 183, 0.25);
    }

    /*.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.47em + 1rem);
  background-position: top calc(0.3675em + 0.25rem) right calc(0.3675em + 0.25rem); }*/

    .custom-selectisvalidmy {
        border-color: #1dc9b7;
        padding-right: calc(0.75em + 2.625rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.875rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231dc9b7' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.875rem/calc(0.735em + 0.5rem) calc(0.735em + 0.5rem);
    }

    /*.inactiveLink {
   pointer-events: none;
   
}*/
    .no-drop {
        cursor: no-drop !important
    }

    .color-white {
        background-color: #fff !important;
    }

    .ft13 {
        font-size: 13px;
    }
</style>

<main id="js-page-content" role="main" class="page-content">


    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">IC Portal</a></li>
        <li class="breadcrumb-item">Surveillance Form</li>

        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div id="content">
        <div class="row mb-2">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1> <span class="page-title txt-color-blueDark">Surveillance Form</span></h1>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                <a href="/viewdata" class="btn btn-primary float-right bg-brand-gradient" type="button">View Submitted Form</a>
            </div>
        </div>
        <section>
            <div id="panel-12" class="panel mt">
                <div class="panel-hdr border-faded border-top-0 border-right-0 border-left-0 shadow-0">
                    <!-- <h2>
                      <span>  Surveillance Form</span>
                    </h2> -->
                    <div class="panel-toolbar pr-3 align-self-end">
                        <ul id="demo_panel-tabs" class="nav nav-tabs border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a id="first_tab" class="nav-link " data-toggle="tab" href="#js_pill_border_icon-1" role="tab">Primary Patient Information</a>
                            </li>
                            <li class="nav-item no-drop">
                                <a id="sec_tab" class="nav-link inactiveLink no-drop" data-toggle="tab" href="#js_pill_border_icon-2" role="tab">Daily Clinical Data</a>
                            </li>
                            <li class="nav-item no-drop">
                                <a id="for_tab" class="nav-link inactiveLink no-drop" data-toggle="tab" href="#js_pill_border_icon-4" role="tab">Culture Report</a>
                            </li>
                            <li class="nav-item no-drop">
                                <a id="third_tab" class="nav-link inactiveLink" data-toggle="tab" href="#js_pill_border_icon-3" role="tab">Hospital Acquired Infections</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <form class="needs-validation" name='infectionform' id='infectionform' method='post' action="/info_submit" onsubmit="return ValidateFrom3()" novalidate>
                    <div class="panel-container show">
                        <div class="panel-content">

                            <div class="tab-content py-3">
                                <div id="js_pill_border_icon-1" class="tab-pane fade" role="tabpanel">

                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">M.R.#<span style="color: red">*</span></label>
                                            <input class="form-control" value="" placeholder="Enter M.R. Number" type="Number" min="0" id='mr_num' name='mr_num' required onblur="checkName(this)">
                                            <div class="invalid-feedback">
                                                Please Enter M.R. Number.
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Name<span style="color: red">*</span></label>
                                            <input class="form-control " value="" placeholder="Enter Name" type="text" id='names' name='names' required>
                                            <div class="invalid-feedback">
                                                Please Enter Name.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Ward<span style="color: red">*</span></label>
                                            <select class="custom-select" name="ward" id="ward" required="" onchange="getBed(this.value)">
                                                <option value="0">Select </option>
                                                <?php for ($i = 0; $i < count($bed); $i++) { ?>
                                                    <option value="<?php echo $bed[$i]['ward_no'] ?>"><?php echo $bed[$i]['ward_no'] . " - " . $bed[$i]['ward_depart']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Enter Ward Number.
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Bed #<span style="color: red">*</span></label>
                                            <select class="custom-select" name="bed" id="bed" required="">
                                                <option value="">Select </option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please Enter Bed Number.
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Primary Diagnosis<span style="color: red">*</span></label>
                                            <input class="form-control" value="" placeholder="Enter Primary Diagnosis" type="text" id='primary_diagnosis' name='primary_diagnosis' required>
                                            <div class="invalid-feedback">
                                                Please Enter Primary Diagnosis.
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Final Diagnosis</label>
                                            <input class="form-control" value="" placeholder="Enter Final Diagnosis" type="text" id='final_diagnosis' name='final_diagnosis'>
                                            <div class="invalid-feedback">
                                                Please Enter Final Diagnosis.
                                            </div>
                                        </div>




                                    </div>
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Date Of Admission <span style="color: red">*</span></label>
                                            <div class="input-group">
                                                <input type="text" style="background-color: white;" readonly="" class="form-control aa" value="" id="date_of_admission" name="date_of_admission">
                                                <div class="input-group-append">
                                                    <span class="input-group-text fs-xl">
                                                        <i class="fal fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Select Date Of Admission.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Discharge Status</label>
                                            <select class="custom-select" name="discharge_status" id="discharge_status">
                                                <option value="">Select</option>
                                                <option value="Applicable">Applicable</option>
                                                <option value="Not Applicable">Not Applicable</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Fever.
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Condition On Discharge</label>
                                            <select class="custom-select" name="condition_on_discharge" id="condition_on_discharge" required="">
                                                <option value="">Select </option>
                                                <option value="improved sent home">Improved Sent Home</option>
                                                <option value="shifted to another facility">shifted to another facility</option>
                                                <option value="left against medical advice">Left Against Medical Advice</option>
                                                <option value="discharge on request">Discharge On Request</option>
                                                <option value="expired">Expired</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Condition On Discharge.
                                            </div>
                                        </div>


                                    </div>
                                    <div class="form-row" id="date1" style="display: none">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Date Of Discharge</label>
                                            <div class="input-group">
                                                <input type="text" style="background-color: white;" class="form-control aa" id="date_of_discharge" name="date_of_discharge" value="<?= $currentDate ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text fs-xl">
                                                        <i class="fal fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Select Date Of Discharge .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <div class="demo col-md-6 pull-right">
                                            <button class="btn btn-primary btn-md float-right" onclick="return ValidateFrom()"><i class="fas fa-angle-right" style="margin-right: 4px"></i> Next</button>

                                        </div>
                                    </div>
                                </div>
                                <div id="js_pill_border_icon-2" class="tab-pane fade" role="tabpanel">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Fever</label>
                                            <div>
                                                <span class="badge badge-primary" id='fever' name='fever'>No</span>
                                                <input type="hidden" name='fever' id='fever2' value="no">
                                            </div>

                                            <!-- <select class="custom-select" name="fever" id="fever">
                                                <option value="">Select</option>
                                            </select> -->
                                            <!-- <input style="background-color: white" class="form-control " placeholder="Select" type="text" id='fever' name='fever'> -->

                                            <div class="invalid-feedback">

                                                Please Select Fever.
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-3">
                                            <label class="form-label">Temperature<span style="color: red">*</span></label>
                                            <div class="input-group">
                                                <input class="form-control" value="" placeholder="Enter Name" type="number" id='temperature' name='temperature ' required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text fs-xl">
                                                        <i style="font-size: 13px"><b>&#8457;</b></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Temperature .
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Tachycardia </label><span style="color: red">*</span>

                                            <div>
                                                <span class="badge badge-primary" id='tachycardia'>No</span>
                                                <input type="hidden" id='tachycardia2' name='tachycardia' value="no">
                                            </div>
                                            <!-- <select class="custom-select" name="tachycardia" id="tachycardia" required="">
                                                <option value="">Select </option>
                                                
                                            </select> -->
                                            <!-- <input style="background-color: white" class="form-control " value="" placeholder="Select" type="text" id='tachycardia' name='tachycardia'> -->
                                            <div class="invalid-feedback">
                                                Please Select Tachycardia.
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-3">
                                            <label class="form-label">Pulse <span style="color: red">*</span></label>
                                            <div class="input-group">
                                                <input class="form-control" value="" placeholder="100" type="text" id='pulse' name='pulse' required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text fs-xl">
                                                        <i style="font-size: 13px"><b>bpm</b></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Pulse .
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Hypotension</label><span style="color: red">*</span>
                                            <div>
                                                <span class="badge badge-primary" id='hypotension'>No</span>
                                            </div>
                                            <input type="hidden" id='hypotension2' name='hypotension' value="no">

                                            <!-- <input style="background-color: white" class="form-control " value="" placeholder="Select" type="text" id='hypotension' name='hypotension' readonly> -->
                                            <div class="invalid-feedback">
                                                Please Select Hypotension.
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-3">
                                            <label class="form-label">BP<span style="color: red">*</span></label>
                                            <div class="input-group">
                                                <input class="form-control" value="" placeholder="90/120" type="text" id='bp' name='bp' required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text fs-xl">
                                                        <i style="font-size: 13px"><b>mm Hg</b></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter BP .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Chills</label><span style="color: red">*</span>
                                            <select class="custom-select" name="chills" id="chills" required="">
                                                <option value="">Select </option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Chills.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label">WBC<span style="color: red">*</span></label>
                                            <div class="input-group">
                                                <input class="form-control" value="" placeholder="Enter WBC " type="number" id='wbc' name='wbc' required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text fs-xl">
                                                        <i style="font-size: 13px"><b>x 10<sup>9</sup></b></i>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Neutrophils</label>
                                            <input class="form-control" value="" placeholder="Enter Neutrophils " type="number" id='ln' name='ln' required>
                                            <div class="invalid-feedback">
                                                Please Enter neutrophils.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <div class="demo col-md-6 pull-right">
                                            <button id='bb' class="btn btn-primary btn-md float-right" onclick="return ValidateFrom2()"><i class="fas fa-angle-right" style="margin-right: 4px"></i> Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="js_pill_border_icon-3" role="tabpanel">
                                    <div id="content">

                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div id="panel-1" class="panel">
                                                    <div class="panel-container show">
                                                        <div class="panel-content">

                                                            <div class="form-row">
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label">Phlebitis</label><span style="color: red">*</span><br>
                                                                    <label class="form-label ft13"><i>Cannula present or not?</i></label>
                                                                    <select class="custom-select" name="intravenous_cannula" id="intravenous_cannula" required="">
                                                                        <option value="">Select</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Please Select Intravenous Cannula.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div id="demo" style="display: none">
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Date Of Insertion<span style="color: red">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" style="background-color: white" class="form-control aa" value="" name="phlebitis_date_of_insertion" id="phlebitis_date_of_insertion" readonly="">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text fs-xl">
                                                                                    <i class="fal fa-calendar-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Date Of Insertion.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Site<span style="color: red">*</span></label>
                                                                        <input class="form-control" value="" placeholder="Enter Site" type="text" id='phlebitis_sife' name='phlebitis_sife' >
                                                                        <div class="invalid-feedback">
                                                                            Please Enter Site.
                                                                        </div>
                                                                    </div>



                                                                    <!--  <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Phlebitis </label><span
                                                                            style="color: red">*</span>
                                                                        <select class="custom-select" name="phlebitis_phlebitis"
                                                                            id="phlebitis_phlebitis" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Phlebitis.
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Phlebitis <span style="color: red">*</span></label>

                                                                        <div class="frame-wrap mb-0">
                                                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="phlebitis_options" id="phlebitis_option1" value="Suspected"> Suspected
                                                                                </label>
                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="phlebitis_options" id="phlebitis_option2" value="Confirmed">
                                                                                    Confirm
                                                                                </label>
                                                                                <label class="btn btn-info active">
                                                                                    <input type="radio" name="phlebitis_options" id="phlebitis_option0" value="absent">Absent
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">

                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Culture Report </label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="phlebitis_culture_report" id="phlebitis_culture_report" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Culture Report.
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div id="phlebitis_culture_div" style="display: none;">
                                                                <div class="col-md-12">
                                                                    <div id="panel-3" class="">
                                                                        <div class="panel-hdr">
                                                                            <h2>
                                                                                Culture Report
                                                                            </h2>
                                                                            <div id="dynamicCheck">
                                                                                <button type="button" class="btn btn-primary" onclick="PhlebitisCreateNewElement();"><i class="fas fa-plus" style="margin-right: 4px"></i>Add More
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-container show">
                                                                            <div class="panel-content">
                                                                                <div id="phlebitis_new_elementid">
                                                                                    <div class="form-row">
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Date<span style="color: red">*</span></label>
                                                                                            <div class="input-group">
                                                                                                <input type="text" style="background-color: white" readonly="" class="form-control aa" value="07/17/2020" id="phlebitis_date" name="phlebitis_date[]">
                                                                                                <div class="input-group-append">
                                                                                                    <span class="input-group-text fs-xl">
                                                                                                        <i class="fal fa-calendar-alt"></i>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Date .
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Source</label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="phlebitis_source[]" id="phlebitis_source" required="">
                                                                                                <option value="0">Select </option>
                                                                                                <?php for ($i = 0; $i < count($source); $i++) { ?>
                                                                                                    <option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option>
                                                                                                <?php } ?>
                                                                                            </select>

                                                                                        </div>



                                                                                        <div class="col-md-3 mb-3">
                                                                                            <label class="form-label">Result
                                                                                            </label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="phlebitis_result[]" id="0" required="" onchange="ShowPhlebitisDiv(this)">
                                                                                                <option value="">Select result
                                                                                                </option>
                                                                                                <option value="Positive">
                                                                                                    Positive</option>
                                                                                                <option value="Negative">
                                                                                                    Negative</option>
                                                                                                <option value="Pending">
                                                                                                    Pending</option>
                                                                                            </select>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Result.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id='phlebitis_div0' style="display: none;">
                                                                                        <div class="form-row">
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label">Organism</label><span style="color: red">*</span>
                                                                                                <select class="custom-select phlebitis" name="phlebitis_organism[]" id="phlebitis_organism0" required="" onchange="getAntibiotics(this)">
                                                                                                    <option value="">Select</option>
                                                                                                    <?php for ($i = 0; $i < count($lovs); $i++) { ?>
                                                                                                        <option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>

                                                                                            </div>
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label" for="multiple-placeholder">
                                                                                                    Resistance Antibiotic
                                                                                                </label>
                                                                                                <select class="select2-placeholder-multiple form-control " multiple="multiple" id="phlebitis_antibiotic0" name="phlebitis_antibiotic[0][]" onchange="getCountOfAntiBio(this)">




                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-3 mb-3">
                                                                                                <label class="form-label">MDRO</label><span style="color: red">*</span>
                                                                                                <input class="form-control" name="phlebitis_mdr_name[]" id="phlebitis_mdr_name0" required="" type="text" placeholder="Enter MBRO " style="background-color: white;" readonly="">


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div id="panel-1" class="panel">
                                                    <div class="panel-container show">
                                                        <div class="panel-content">

                                                            <div class="form-row">
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label">Catheter Associated Urinary Tract Infection</label><span style="color: red">*</span><br><label class="form-label ft13"><i>Catheter present or not?</i></label>
                                                                    <select class="custom-select" name="urinary_catheter" id="urinary_catheter" required="">
                                                                        <option value="">Select</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Please Select Urinary Catheter.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div id="demo2" style="display: none">
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Date Of Insertion<span style="color: red">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" style="background-color: white" class="form-control aa" value="" id="urinary_date_of_insertion" name="urinary_date_of_insertion" readonly="">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text fs-xl">
                                                                                    <i class="fal fa-calendar-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Date Of Insertion.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Type Of Catheter </label>
                                                                        <select class="custom-select" name="urinary_type_of_catheter" id="urinary_type_of_catheter" required="">
                                                                            <option value="">Select</option>
                                                                            <option value="Foleys">Foley’s</option>
                                                                            <option value="Silicon">Silicon</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Urinary Catheter.
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">CAUTI <span style="color: red">*</span></label>

                                                                        <div class="frame-wrap mb-0">
                                                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="urinary_options" id="urinary_option1" value="Suspected">
                                                                                    Suspected
                                                                                </label>
                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="urinary_options" id="urinary_option2" value="Confirm">
                                                                                    Confirm
                                                                                </label>
                                                                                <label class="btn btn-info active">
                                                                                    <input type="radio" name="urinary_options" id="urinary_option0" value="absent">Absent
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label" >Site<span style="color: red">*</span></label>
                                        <input class="form-control" value="" 
                                        placeholder="Enter sife" type="text" id='sife' name='sife' required>
                                            <div class="invalid-feedback">
                                                Please Enter Site.
                                            </div>
                                        </div> -->



                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label">Phlebitis </label><span style="color: red">*</span>
                                            <select class="custom-select" name="phlebitis" id="phlebitis" required="">
                                                <option value="">Select </option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Phlebitis.
                                            </div>
                                        </div> -->
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Culture Report </label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="urinary_culture_report" id="urinary_culture_report" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Culture Report.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="urinary_culture_div" style="display: none;">
                                                                <div class="col-md-12">
                                                                    <div id="panel-3" class="">
                                                                        <div class="panel-hdr">
                                                                            <h2>
                                                                                Culture Report
                                                                            </h2>
                                                                            <div id="urinary_dynamic_check">
                                                                                <button type="button" class="btn btn-primary" onclick="UrinaryCreateNewElement();"><i class="fas fa-plus" style="margin-right: 4px"></i>Add
                                                                                    More</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-container show">
                                                                            <div class="panel-content">
                                                                                <div id="urinary_new_elementid">
                                                                                    <div class="form-row">
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Date<span style="color: red">*</span></label>
                                                                                            <div class="input-group">
                                                                                                <input type="text" style="background-color: white" readonly="" class="form-control aa" value="07/17/2020" id="urinary_date" name="urinary_date[]">
                                                                                                <div class="input-group-append">
                                                                                                    <span class="input-group-text fs-xl">
                                                                                                        <i class="fal fa-calendar-alt"></i>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Date .
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Source</label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="urinary_source[]" id="urinary_source" required="">
                                                                                                <option value="0">Select </option>
                                                                                                <?php for ($i = 0; $i < count($source); $i++) { ?>
                                                                                                    <option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option>
                                                                                                <?php } ?>
                                                                                            </select>

                                                                                        </div>



                                                                                        <div class="col-md-3 mb-3">
                                                                                            <label class="form-label">Result
                                                                                            </label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="urinary_result[]" id="0" required="" onchange="ShowUrinaryDiv(this)">
                                                                                                <option value="">Select result
                                                                                                </option>
                                                                                                <option value="Positive">
                                                                                                    Positive</option>
                                                                                                <option value="Negative">
                                                                                                    Negative</option>
                                                                                                <option value="Pending">
                                                                                                    Pending</option>
                                                                                            </select>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Result.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id='urinary_div0' style="display: none;">
                                                                                        <div class="form-row">
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label">Organism</label><span style="color: red">*</span>
                                                                                                <select class="custom-select" name="urinary_organism[]" id="urinary_organism0" required="" onchange="getAntibiotics(this)">
                                                                                                    <option value="">Select</option>
                                                                                                    <?php for ($i = 0; $i < count($lovs); $i++) { ?>
                                                                                                        <option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>

                                                                                            </div>
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label" for="multiple-placeholder">
                                                                                                    Resistance Antibiotic
                                                                                                </label>
                                                                                                <select class="select2-placeholder-multiple form-control" multiple="multiple" id="urinary_antibiotic0" name="urinary_antibiotic[0][]" onchange="getCountOfAntiBio(this)">








                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-3 mb-3">
                                                                                                <label class="form-label">MDRO
                                                                                                </label><span style="color: red">*</span>
                                                                                                <input class="form-control" name="urinary_mdr_name[]" id="urinary_mdr_name0" required="" placeholder="Enter MBRO" style="background-color: white;" readonly>


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div id="panel-1" class="panel">
                                                    <div class="panel-container show">
                                                        <div class="panel-content">

                                                            <div class="form-row">
                                                                <div class="col-md-4 mb-4">
                                                                    <label class="form-label">Central Line Associated
                                                                        Bloodstream </label><span style="color: red">*</span><br><label class="form-label ft13"><i>Central line present or not?</i></label>
                                                                    <select class="custom-select" name="central_line" id="central_line" required="">
                                                                        <option value="">Select</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Please Select Central Line.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div id="demo3" style="display: none">
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Date Of Insertion<span style="color: red">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" style="background-color: white" class="form-control aa" value="" id="central_date_of_insertion" name="central_date_of_insertion" readonly="">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text fs-xl">
                                                                                    <i class="fal fa-calendar-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Date Of Insertion.
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Tpye</label> <span style="color: red">*</span>
                                                                        <select class="custom-select" name="central_type" id="central_type" required="">
                                                                            <option value="">Select</option>
                                                                            <option value="CVP">CVP</option>
                                                                            <option value="DICFD">Double Lumen catheter for
                                                                                dialysis</option>
                                                                            <option value="hickman">Hickman</option>
                                                                            <option value="jo-cath">Jo-cath</option>
                                                                            <option value="perma-cath">Perma-cath</option>

                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Type.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">CLABSI <span style="color: red">*</span></label>

                                                                        <div class="frame-wrap mb-0">
                                                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="central_options" id="central_option1" value="Suspected">
                                                                                    Suspected
                                                                                </label>
                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="central_options" id="central_option2" value="Confirm">
                                                                                    Confirm
                                                                                </label>
                                                                                <label class="btn btn-info active">
                                                                                    <input type="radio" name="central_options" id="central_option0" value="absent">Absent
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label" >Site<span style="color: red">*</span></label>
                                        <input class="form-control" value="" 
                                        placeholder="Enter sife" type="text" id='sife' name='sife' required>
                                            <div class="invalid-feedback">
                                                Please Enter Site.
                                            </div>
                                        </div> -->



                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label">Phlebitis </label><span style="color: red">*</span>
                                            <select class="custom-select" name="phlebitis" id="phlebitis" required="">
                                                <option value="">Select </option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Phlebitis.
                                            </div>
                                        </div> -->
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Culture Report </label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="central_culture_report" id="central_culture_report" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Culture Report.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="central_culture_div" style="display: none;">
                                                                <div class="col-md-12">
                                                                    <div id="panel-3" class="">
                                                                        <div class="panel-hdr">
                                                                            <h2>
                                                                                Culture Report
                                                                            </h2>
                                                                            <div id="dynamicCheck2">
                                                                                <button type="button" class="btn btn-primary" onclick="CentralCreateNewElement();"><i class="fas fa-plus" style="margin-right: 4px"></i>Add
                                                                                    More</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-container show">
                                                                            <div class="panel-content">
                                                                                <div id="central_new_elementid">
                                                                                    <div class="form-row">
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Date<span style="color: red">*</span></label>
                                                                                            <div class="input-group">
                                                                                                <input type="text" style="background-color: white" readonly="" class="form-control aa" value="07/17/2020" id="central_date" name="central_date[]">
                                                                                                <div class="input-group-append">
                                                                                                    <span class="input-group-text fs-xl">
                                                                                                        <i class="fal fa-calendar-alt"></i>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Date .
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Source</label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="central_source[]" id="central_source" required="">
                                                                                                <option value="0">Select </option>
                                                                                                <?php for ($i = 0; $i < count($source); $i++) { ?>
                                                                                                    <option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option>
                                                                                                <?php } ?>
                                                                                            </select>

                                                                                        </div>



                                                                                        <div class="col-md-3 mb-3">
                                                                                            <label class="form-label">Result
                                                                                            </label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="central_result[]" id="0" required="" onchange="ShowCentralDiv(this)">
                                                                                                <option value="">Select result
                                                                                                </option>
                                                                                                <option value="Positive">
                                                                                                    Positive</option>
                                                                                                <option value="Negative">
                                                                                                    Negative</option>
                                                                                                <option value="Pending">
                                                                                                    Pending</option>
                                                                                            </select>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Result.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id='central_div0' style="display: none;">
                                                                                        <div class="form-row">
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label">Organism</label><span style="color: red">*</span>
                                                                                                <select class="custom-select" name="central_organism[]" id="central_organism0" required="" onchange="getAntibiotics(this)">
                                                                                                    <option value="">Select</option>
                                                                                                    <?php for ($i = 0; $i < count($lovs); $i++) { ?>
                                                                                                        <option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>

                                                                                            </div>
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label" for="multiple-placeholder">
                                                                                                    Resistance Antibiotic
                                                                                                </label>
                                                                                                <select class="select2-placeholder-multiple form-control" multiple="multiple" id="central_antibiotic0" name="central_antibiotic[0][]" onchange="getCountOfAntiBio(this)">

                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-3 mb-3">
                                                                                                <label class="form-label">MDRO</label><span style="color: red">*</span>
                                                                                                <input type='text' class="form-control" name="central_mdr_name[]" id="central_mdr_name0" required="" placeholder="Enter MDRO" style="background-color: white;" readonly>


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div id="panel-1" class="panel">
                                                    <div class="panel-container show">
                                                        <div class="panel-content">

                                                            <div class="form-row">
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label">Hospital Acquired
                                                                        Pneumonia</label><span style="color: red">*</span><label class="form-label ft13"><i>
                                                                            Pneumonia present or not?</i></label>
                                                                    <select class="custom-select" name="hospital_acquired_pneumonia" id="hospital_acquired_pneumonia" required="">
                                                                        <option value="">Select</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Please Select Hospital Acquired Pneumonia.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div id="hospital_demo" style="display: none">
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Date Of First Event<span style="color: red">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" style="background-color: white" class="form-control aa" value="" id="hospital_date_of_first_event" name="hospital_date_of_first_event" readonly="">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text fs-xl">
                                                                                    <i class="fal fa-calendar-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Date Of First Event.
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Worsening CXR</label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="hospital_worsening_cxr" id="hospital_worsening_cxr" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="1">Yes</option>
                                                                            <option value="0">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Worsening CXR.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Worsening Tracheal Secretions</label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="hospital_worsening_tracheal_secretions" id="hospital_worsening_tracheal_secretions" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="1">Yes</option>
                                                                            <option value="0">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Worsening Tracheal Secretions.
                                                                        </div>
                                                                    </div>



                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label" >Site<span style="color: red">*</span></label>
                                        <input class="form-control" value="" 
                                        placeholder="Enter sife" type="text" id='sife' name='sife' required>
                                            <div class="invalid-feedback">
                                                Please Enter Site.
                                            </div>
                                        </div> -->



                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label">Phlebitis </label><span style="color: red">*</span>
                                            <select class="custom-select" name="phlebitis" id="phlebitis" required="">
                                                <option value="">Select </option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Phlebitis.
                                            </div>
                                        </div> -->
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">HAP<span style="color: red">*</span></label>

                                                                        <div class="frame-wrap mb-0">
                                                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                                                <label class="btn btn-info ">
                                                                                    <input type="radio" name="hospital_options" id="option1" value="Suspected">
                                                                                    Suspected
                                                                                </label>
                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="hospital_options" id="option2" value="Confirm"> Confirm
                                                                                </label>
                                                                                <label class="btn btn-info active">
                                                                                    <input type="radio" name="hospital_options" id="option0" value="absent">Absent
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Culture Report </label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="hospital_culture_report" id="hospital_culture_report" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Culture Report.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="hostipal_culture_div" style="display: none;">
                                                                <div class="col-md-12">
                                                                    <div id="panel-3" class="">
                                                                        <div class="panel-hdr">
                                                                            <h2>
                                                                                Culture Report
                                                                            </h2>
                                                                            <div id="dynamicCheck3">
                                                                                <button type="button" class="btn btn-primary" onclick="HospitalCreateNewElement();"><i class="fas fa-plus" style="margin-right: 4px"></i>Add
                                                                                    More</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-container show">
                                                                            <div class="panel-content">
                                                                                <div id="hospital_new_elementid">
                                                                                    <div class="form-row">
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Date<span style="color: red">*</span></label>
                                                                                            <div class="input-group">
                                                                                                <input type="text" style="background-color: white" readonly="" class="form-control aa" value="07/17/2020" id="hospital_date" name="hospital_date[]">
                                                                                                <div class="input-group-append">
                                                                                                    <span class="input-group-text fs-xl">
                                                                                                        <i class="fal fa-calendar-alt"></i>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Date .
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Source</label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="hospital_source[]" id="hospital_source" required="">
                                                                                                <option value="0">Select </option>
                                                                                                <?php for ($i = 0; $i < count($source); $i++) { ?>
                                                                                                    <option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option>
                                                                                                <?php } ?>
                                                                                            </select>

                                                                                        </div>



                                                                                        <div class="col-md-3 mb-3">
                                                                                            <label class="form-label">Result
                                                                                            </label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="hospital_result[]" id="0" required="" onchange="ShowHospitalDiv(this)">
                                                                                                <option value="">Select result
                                                                                                </option>
                                                                                                <option value="Positive">
                                                                                                    Positive</option>
                                                                                                <option value="Negative">
                                                                                                    Negative</option>
                                                                                                <option value="Pending">
                                                                                                    Pending</option>
                                                                                            </select>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Result.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id='hospital_div0' style="display: none;">
                                                                                        <div class="form-row">
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label">Organism</label><span style="color: red">*</span>
                                                                                                <select class="custom-select" name="hospital_organism[]" id="hospital_organism0" required="" onchange="getAntibiotics(this)">
                                                                                                    <option value="">Select</option>
                                                                                                    <?php for ($i = 0; $i < count($lovs); $i++) { ?>
                                                                                                        <option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>

                                                                                            </div>
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label" for="multiple-placeholder">
                                                                                                    Resistance Antibiotic
                                                                                                </label>
                                                                                                <select class="select2-placeholder-multiple form-control" multiple="multiple" id="hospital_antibiotic0" name="hospital_antibiotic[0][]" onchange="getCountOfAntiBio(this)">







                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-3 mb-3">
                                                                                                <label class="form-label">MDRO</label><span style="color: red">*</span>
                                                                                                <input class="form-control" name="hospital_mdr_name[]" id="hospital_mdr_name0" required="" placeholder="Enter MBRO" style="background-color: white;" readonly>





                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div id="panel-1" class="panel">
                                                    <div class="panel-container show">
                                                        <div class="panel-content">

                                                            <div class="form-row">
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label">Ventilator Associated
                                                                        Pneumonia</label><span style="color: red">*</span><br><label class="form-label ft13"><i>Ventilator present or not?</i></label>
                                                                    <select class="custom-select" name="ventilator_associated_pneumonia" id="ventilator_associated_pneumonia" required="">
                                                                        <option value="">Select</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Please Select Ventilator Associated Pneumonia.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div id="demo5" style="display: none">
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Date Of Intubation<span style="color: red">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" style="background-color: white" class="form-control aa" value="" id="ventilator_date_of_intubation" name="ventilator_date_of_intubation" readonly="">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text fs-xl">
                                                                                    <i class="fal fa-calendar-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Date Of Intubation.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Date Of Extubation <span style="color: red">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" style="background-color: white" class="form-control aa" value="" id="ventilator_date_of_extubation " name="ventilator_date_of_extubation" readonly="">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text fs-xl">
                                                                                    <i class="fal fa-calendar-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Date Of Extubation.
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">VAP <span style="color: red">*</span></label>

                                                                        <div class="frame-wrap mb-0">
                                                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="ventilator_options" id="ventilator_option1" value="Suspected"> Suspected
                                                                                </label>
                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="ventilator_options" id="ventilator_option2" value="Confirm">
                                                                                    Confirm
                                                                                </label>
                                                                                <label class="btn btn-info active">
                                                                                    <input type="radio" name="ventilator_options" id="ventilator_option0" value="absent">Absent
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label" >Site<span style="color: red">*</span></label>
                                        <input class="form-control" value="" 
                                        placeholder="Enter sife" type="text" id='sife' name='sife' required>
                                            <div class="invalid-feedback">
                                                Please Enter Site.
                                            </div>
                                        </div> -->



                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label">Phlebitis </label><span style="color: red">*</span>
                                            <select class="custom-select" name="phlebitis" id="phlebitis" required="">
                                                <option value="">Select </option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Phlebitis.
                                            </div>
                                        </div> -->
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Worsening CXR</label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="ventilator_worsening_cxr" id="ventilator_worsening_cxr" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="1">Yes</option>
                                                                            <option value="0">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Worsening CXR.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Worsening Tracheal Secretions</label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="ventilator_worsening_tracheal_secretions" id="ventilator_worsening_tracheal_secretions" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="1">Yes</option>
                                                                            <option value="0">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Worsening Tracheal Secretions.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Culture Report </label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="ventilator_culture_report" id="ventilator_culture_report" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Culture Report.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="ventilator_culture_div" style="display: none;">
                                                                <div class="col-md-12">
                                                                    <div id="panel-3" class="">
                                                                        <div class="panel-hdr">
                                                                            <h2>
                                                                                Culture Report
                                                                            </h2>
                                                                            <div id="dynamicCheck4">
                                                                                <button type="button" class="btn btn-primary" onclick="VentilatorCreateNewElement();"><i class="fas fa-plus" style="margin-right: 4px"></i>Add
                                                                                    More</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-container show">
                                                                            <div class="panel-content">
                                                                                <div id="ventilator_new_elementid">
                                                                                    <div class="form-row">
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Date<span style="color: red">*</span></label>
                                                                                            <div class="input-group">
                                                                                                <input type="text" style="background-color: white" readonly="" class="form-control aa" value="07/17/2020" id="ventilator_date" name="ventilator_date[]">
                                                                                                <div class="input-group-append">
                                                                                                    <span class="input-group-text fs-xl">
                                                                                                        <i class="fal fa-calendar-alt"></i>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Date .
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Source</label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="ventilator_source[]" id="ventilator_source" required="">
                                                                                                <option value="0">Select </option>
                                                                                                <?php for ($i = 0; $i < count($source); $i++) { ?>
                                                                                                    <option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option>
                                                                                                <?php } ?>
                                                                                            </select>

                                                                                        </div>



                                                                                        <div class="col-md-3 mb-3">
                                                                                            <label class="form-label">Result
                                                                                            </label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="ventilator_result[]" id="0" required="" onchange="ShowVentilatorDiv(this)">
                                                                                                <option value="">Select result
                                                                                                </option>
                                                                                                <option value="Positive">
                                                                                                    Positive</option>
                                                                                                <option value="Negative">
                                                                                                    Negative</option>
                                                                                                <option value="Pending">
                                                                                                    Pending</option>
                                                                                            </select>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Result.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id='ventilator_div0' style="display: none;">
                                                                                        <div class="form-row">
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label">Organism</label><span style="color: red">*</span>
                                                                                                <select class="custom-select" name="ventilator_organism[]" id="ventilator_organism0" required="" onchange="getAntibiotics(this)">
                                                                                                    <option value="">Select</option>
                                                                                                    <?php for ($i = 0; $i < count($lovs); $i++) { ?>
                                                                                                        <option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>

                                                                                            </div>
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label" for="multiple-placeholder">
                                                                                                    Resistance Antibiotic
                                                                                                </label>
                                                                                                <select class="select2-placeholder-multiple form-control" multiple="multiple" id="ventilator_antibiotic0" name="ventilator_antibiotic[0][]" onchange="getCountOfAntiBio(this)">







                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-3 mb-3">
                                                                                                <label class="form-label">MDRO</label><span style="color: red">*</span>
                                                                                                <input type="text" class="form-control" name="ventilator_mdr_name[]" id="ventilator_mdr_name0" required="" placeholder="Enter MBRO" style="background-color: white;" readonly>



                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div id="panel-1" class="panel">
                                                    <div class="panel-container show">
                                                        <div class="panel-content">

                                                            <div class="form-row">
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label">Surgical Site
                                                                        Infection</label><span style="color: red">*</span><br><label class="form-label ft13"><i>Surgical site
                                                                            present or not</i></label>
                                                                    <select class="custom-select" name="surgical_site_infection" id="surgical_site_infection" required="">
                                                                        <option value="">Select</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Please Select Surgical Site Infection.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div id="demo6" style="display: none">
                                                                <div class="form-row">
                                                                    <!-- <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Date Of Insertion<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" style="background-color: white"
                                                                                class="form-control aa" value=""
                                                                                id="surgical_date_of_insertion"
                                                                                name="surgical_date_of_insertion" readonly="">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text fs-xl">
                                                                                    <i class="fal fa-calendar-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Date Of Insertion.
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Date Of Surgery <span style="color: red">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" style="background-color: white" class="form-control aa" value="" id="surgical_date_of_surgery" name="surgical_date_of_surgery" readonly="">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text fs-xl">
                                                                                    <i class="fal fa-calendar-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Date Of Surgery.
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">SSI <span style="color: red">*</span></label>

                                                                        <div class="frame-wrap mb-0">
                                                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="surgical_options" id="surgical_option1" value="Suspected">
                                                                                    Suspected
                                                                                </label>
                                                                                <label class="btn btn-info">
                                                                                    <input type="radio" name="surgical_options" id="surgical_option2" value="Confirm">
                                                                                    Confirm
                                                                                </label>
                                                                                <label class="btn btn-info active">
                                                                                    <input type="radio" name="surgical_options" id="surgical_option0" value="absent">Absent
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label" >Site<span style="color: red">*</span></label>
                                        <input class="form-control" value="" 
                                        placeholder="Enter sife" type="text" id='sife' name='sife' required>
                                            <div class="invalid-feedback">
                                                Please Enter Site.
                                            </div>
                                        </div> -->



                                                                    <!-- <div class="col-md-4 mb-3"> 
                                            <label class="form-label">Phlebitis </label><span style="color: red">*</span>
                                            <select class="custom-select" name="phlebitis" id="phlebitis" required="">
                                                <option value="">Select </option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Phlebitis.
                                            </div>
                                        </div> -->
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Culture Report </label><span style="color: red">*</span>
                                                                        <select class="custom-select" name="surgical_culture_report" id="surgical_culture_report" required="">
                                                                            <option value="">Select </option>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please Select Culture Report.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="surgical_culture_div" style="display: none;">
                                                                <div class="col-md-12">
                                                                    <div id="panel-3" class="">
                                                                        <div class="panel-hdr">
                                                                            <h2>
                                                                                Culture Report
                                                                            </h2>
                                                                            <div id="dynamicCheck5">
                                                                                <button type="button" class="btn btn-primary" onclick="SurgicalCreateNewElement();"><i class="fas fa-plus" style="margin-right: 4px"></i>Add
                                                                                    More</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-container show">
                                                                            <div class="panel-content">
                                                                                <div id="surgical_new_elementid">
                                                                                    <div class="form-row">
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Date<span style="color: red">*</span></label>
                                                                                            <div class="input-group">
                                                                                                <input type="text" style="background-color: white" readonly="" class="form-control aa" value="07/17/2020" id="surgical_date" name="surgical_date[]">
                                                                                                <div class="input-group-append">
                                                                                                    <span class="input-group-text fs-xl">
                                                                                                        <i class="fal fa-calendar-alt"></i>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Date .
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 mb-3">
                                                                                            <label class="form-label">Source</label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="surgical_source[]" id="surgical_source" required="">
                                                                                                <option value="0">Select </option>
                                                                                                <?php for ($i = 0; $i < count($source); $i++) { ?>
                                                                                                    <option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option>
                                                                                                <?php } ?>
                                                                                            </select>

                                                                                        </div>



                                                                                        <div class="col-md-3 mb-3">
                                                                                            <label class="form-label">Result
                                                                                            </label><span style="color: red">*</span>
                                                                                            <select class="custom-select" name="surgical_result[]" id="0" required="" onchange="ShowSurgicalDiv(this)">
                                                                                                <option value="">Select result
                                                                                                </option>
                                                                                                <option value="Positive">
                                                                                                    Positive</option>
                                                                                                <option value="Negative">
                                                                                                    Negative</option>
                                                                                                <option value="Pending">
                                                                                                    Pending</option>
                                                                                            </select>
                                                                                            <div class="invalid-feedback">
                                                                                                Please Select Result.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id='surgical_div0' style="display: none;">
                                                                                        <div class="form-row">
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label">Organism</label><span style="color: red">*</span>
                                                                                                <select class="custom-select" name="surgical_organism[]" id="surgical_organism0" required="" onchange="getAntibiotics(this)">
                                                                                                    <option value="">Select</option>
                                                                                                    <?php for ($i = 0; $i < count($lovs); $i++) { ?>
                                                                                                        <option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>

                                                                                            </div>
                                                                                            <div class="col-md-4 mb-3">
                                                                                                <label class="form-label" for="multiple-placeholder">
                                                                                                    Resistance Antibiotic
                                                                                                </label>
                                                                                                <select class="select2-placeholder-multiple form-control" multiple="multiple" id="surgical_antibiotic0" name="surgical_antibiotic[0][]" onchange="getCountOfAntiBio(this)">


                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-3 mb-3">
                                                                                                <label class="form-label">MDRO</label><span style="color: red">*</span>
                                                                                                <input placeholder="Enter MBRO" class="form-control" name="surgical_mdr_name[]" id="surgical_mdr_name0" type="text" required="" style="background-color: white;" readonly>



                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div id="panel-1" class="panel">
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                </div>
                                                                <div class="demo col-md-6 pull-right">
                                                                    <button class="btn btn-primary btn-md float-right" type="reset" onclick="window.location.reload();"><i class="fas fa-times-circle" style="margin-right: 4px"></i>Cancel</button>
                                                                    <button id="jsbtn" class="btn btn-primary btn-md float-right" type="submit" onclick="ValidateFrom3()"><i class="fas fa-plus" style="margin-right: 4px"></i> Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="js_pill_border_icon-4" class="tab-pane fade" role="tabpanel">
                                    <div class="row">

                                        <div class="col-xl-12">
                                            <div id="panel-1" class="panel">
                                                <div class="panel-container show">
                                                    <div class="panel-content">

                                                        <div class="form-row">

                                                            <div class="col-md-4 mb-3">
                                                                <label class="form-label">Culture Report </label><span style="color: red">*</span>
                                                                <select class="custom-select" id="culture_report" name="culture_report" required="">
                                                                    <option value="">Select </option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Please Select Culture Report.
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div id="culture_report_div" style="display: none;">
                                                        <div class="col-md-12">
                                                            <div id="panel-3" class="">
                                                                <div class="panel-hdr">
                                                                    <h2>
                                                                        Culture Report
                                                                    </h2>
                                                                    <div id="dynamicCheck6">
                                                                        <button type="button" class="btn btn-primary" onclick="CultureReportCreateNewElement();"><i class="fas fa-plus" style="margin-right: 4px"></i>Add
                                                                            More</button>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-container show">
                                                                    <div class="panel-content">
                                                                        <div id="culture_report_elementid">
                                                                            <div class="form-row">
                                                                                <div class="col-md-4 mb-3">
                                                                                    <label class="form-label">Date<span style="color: red">*</span></label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" style="background-color: white" readonly="" class="form-control aa" value="07/17/2020" id="culture_report_date" name="culture_report_date[]">
                                                                                        <div class="input-group-append">
                                                                                            <span class="input-group-text fs-xl">
                                                                                                <i class="fal fa-calendar-alt"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                        Please Select Date .
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 mb-3">
                                                                                    <label class="form-label">Source</label><span style="color: red">*</span>
                                                                                    <select class="custom-select" name="culture_report_source[]" id="culture_report_source" >
                                                                                        <option value="0">Select </option>
                                                                                        <?php for ($i = 0; $i < count($source); $i++) { ?>
                                                                                            <option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option>
                                                                                        <?php } ?>
                                                                                    </select>

                                                                                </div>



                                                                                <div class="col-md-3 mb-3">
                                                                                    <label class="form-label">Result
                                                                                    </label><span style="color: red">*</span>
                                                                                    <select class="custom-select" name="culture_report_result[]" id="0"  onchange="ShowCultureReportDiv(this)">
                                                                                        <option value="">Select result
                                                                                        </option>
                                                                                        <option value="Positive">
                                                                                            Positive</option>
                                                                                        <option value="Negative">
                                                                                            Negative</option>
                                                                                        <option value="Pending">
                                                                                            Pending</option>
                                                                                    </select>
                                                                                    <div class="invalid-feedback">
                                                                                        Please Select Result.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div id='culture_report_div0' style="display: none;">
                                                                                <div class="form-row">
                                                                                    <div class="col-md-4 mb-3">
                                                                                        <label class="form-label">Organism</label><span style="color: red">*</span>
                                                                                        <select class="custom-select" name="culture_report_organism[]" id="culture_report_organism0"  onchange="getAntibiotics(this)">
                                                                                            <option value="">Select</option>
                                                                                            <?php for ($i = 0; $i < count($lovs); $i++) { ?>
                                                                                                <option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>

                                                                                    </div>
                                                                                    <div class="col-md-4 mb-3">
                                                                                        <label class="form-label" for="multiple-placeholder">
                                                                                            Resistance Antibiotic
                                                                                        </label>
                                                                                        <select class="select2-placeholder-multiple form-control" multiple="multiple" id="culture_report_antibiotic0" name="culture_report_antibiotic[0][]" onchange="getCountOfAntiBio(this)">


                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-3 mb-3">
                                                                                        <label class="form-label">MDRO</label><span style="color: red">*</span>
                                                                                        <input placeholder="Enter MBRO" class="form-control" name="culture_report_mdr_name[]" id="culture_report_mdr_name0" type="text"  style="background-color: white;" readonly>



                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <div class="demo col-md-6 pull-right">
                                            <button id='bb' class="btn btn-primary btn-md float-right" onclick="return ValidateFrom4()"><i class="fas fa-angle-right" style="margin-right: 4px"></i> Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </section>
    </div>




</main>
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->

<script>
//     $(document).ready(function()
//         {
          
// 			$("#bp").keyup(function(){
//   var n = document.getElementById('bp').value;
//         //alert(n);
//         n = n.toString().replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, "/");
//         document.getElementById('bp').value = n;
// });
//       });
    var bed;

    function getBed(val) {
        // var id = val.getAttribute('id');
        var value = val;

        // alert(val);
        if (value == "0") {
            document.getElementById('bed').innerHTML = '<option selected value="">Select</option>';
        }
        // do your stuff

        // console.log(phlebitisAnti);
        //alert(urinaryAnti);
        //alert(urinaryMdrName);


        // var data = $("#").serialize();
        var data = {
            ward: value
        };
        $.ajax({
            url: baseurl + 'get_bed',
            type: 'POST',
            data: data,
            success: function(result) {
                var arrayCoock = "";
                //var result = jQuery.parseJSON(result);
                if (result) {
                    var result = jQuery.parseJSON(result);
                    // console.log(result);
                    arrayCoock += "'<option >Select</option>";
                    for (let i = 0; i < result.length; i++) {
                        if (bed == result[i].bed_no) {
                            arrayCoock += "<option selected value='";
                            arrayCoock += result[i].bed_no;
                            arrayCoock += "'>";
                            arrayCoock += result[i].bed_no;
                            arrayCoock += "</option>";
                        } else {
                            arrayCoock += "<option value='";
                            arrayCoock += result[i].bed_no;
                            arrayCoock += "'>";
                            arrayCoock += result[i].bed_no;
                            arrayCoock += "</option>";
                        }
                    }
                    arrayCoock += "'";
                    document.getElementById('bed').innerHTML = arrayCoock;
                    console.log(arrayCoock);
                }


                // $('#order_total_amount').text(Math.round(total_amount));

            },
            error: function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            }
        });

    }

    function checkName(val) {

        var id = val.getAttribute('id');
        var value = val.value;
        // do your stuff
        //  console.log(phlebitisAnti);
        //  alert(id);
        //alert(urinaryMdrName);


        // var data = $("#").serialize();
        var data = {
            mr_num: value
        };
        $.ajax({
            url: baseurl + 'check_mr_num',
            type: 'POST',
            data: data,
            success: function(result) {

                //var result = jQuery.parseJSON(result);
                if (result) {
                    var result = jQuery.parseJSON(result);
                    console.log(result);

                    var dateDischarge = new Date(result.discharge_date);
                    
                    if(dateDischarge == "Invalid Date")
                    {
                        document.getElementById('discharge_status').innerHTML='';
                        
                        document.getElementById('discharge_status').innerHTML ='<option value="">Select</option><option value="Applicable">Applicable</option><option value="Not Applicable" Selected>Not Applicable</option>';
                        var show = document.getElementById("date1");
                        show.style.display = "none"
                    }
                    else
                    {
                        document.getElementById('discharge_status').innerHTML='';
                        document.getElementById('discharge_status').innerHTML ='<option value="">Select</option><option value="Applicable" Selected>Applicable</option><option value="Not Applicable" >Not Applicable</option>';
                        var show = document.getElementById("date1");
                        show.style.display = "block"
                    }
                    var dateDischarge = dateDischarge.toLocaleDateString();
                    
                    var admission_date = new Date(result.admission_date);
                    var admission_date = admission_date.toLocaleDateString();

                    document.getElementById('names').value = result.pateint_name;
                    document.getElementById('ward').value = result.ward_no;
                    // var a=result.ward_no;
                    // alert(a);
                    getBed(result.ward_no);
                    // console.log(getBed(result.ward_no));
                    bed = result.bed_no;

                    document.getElementById('primary_diagnosis').value = result.primary_diagnosis;
                    document.getElementById('final_diagnosis').value = result.final_diagnosis;
                    document.getElementById('date_of_admission').value = admission_date;
                    document.getElementById('date_of_discharge').value = dateDischarge;
                    if (result.discharge_condition == "improved sent home") {
                        document.getElementById('condition_on_discharge').innerHTML = '<option selected value=' + result.discharge_condition + '>' + result.discharge_condition + '</option><option  value="left against medical advice">left against medical advice</option><option  value="discharge on request">discharge on request</option><option  value="expired">expired</option><option  value="shifted to another facility">shifted to another facility</option>';
                    }
                    if (result.discharge_condition == "shifted to another facility") {
                        document.getElementById('condition_on_discharge').innerHTML = '<option selected value=' + result.discharge_condition + '>' + result.discharge_condition + '</option><option  value="left against medical advice">left against medical advice</option><option  value="discharge on request">discharge on request</option><option  value="expired">expired</option><option  value="improved sent home">improved sent home</option>';
                    }

                    if (result.discharge_condition == "left against medical advice") {
                        document.getElementById('condition_on_discharge').innerHTML = '<option selected value=' + result.discharge_condition + '>' + result.discharge_condition + '</option><option  value="shifted to another facility">shifted to another facility</option><option  value="discharge on request">discharge on request</option><option  value="expired">expired</option><option  value="improved sent home">improved sent home</option>';
                    }

                    if (result.discharge_condition == "discharge on request") {
                        document.getElementById('condition_on_discharge').innerHTML = '<option selected value=' + result.discharge_condition + '>' + result.discharge_condition + '</option><option  value="shifted to another facility">shifted to another facility</option><option  value="left against medical advice">left against medical advice</option><option  value="expired">expired</option><option  value="improved sent home">improved sent home</option>';
                    }

                    if (result.discharge_condition == "expired") {
                        document.getElementById('condition_on_discharge').innerHTML = '<option selected value=' + result.discharge_condition + '>' + result.discharge_condition + '</option><option  value="shifted to another facility">shifted to another facility</option><option  value="left against medical advice">left against medical advice</option><option  value="discharge on request">discharge on request</option><option  value="improved sent home">improved sent home</option>';
                    }









                }

                // $('#order_total_amount').text(Math.round(total_amount));

            },
            error: function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            }
        });

    }

    $("#temperature").keyup(function() {

        var x = document.getElementById("temperature").value;
        if (x >= 0 && x < 100) {

            // $("#fever").val("No");
            $("#fever").text("No");
            $("#fever2").val("No");
        } else if (x == "") {
            $("#fever2").val("No");
        } else {
            $("#fever").text("Yes");
            $("#fever2").val("yes");
        }

        //         var s = document.getElementById("fever");
        // s.options[s.options.length] = new Option('Yes', 'Yes', true,true);
        //      }
        //      else
        //      {
        //         var s = document.getElementById("fever");
        // s.options[s.options.length] = new Option('No', 'No', true,true);


    });

    $("#pulse").keyup(function() {

        let x = document.getElementById("pulse").value;

        if (x > 100) {
            $("#tachycardia").text("Yes");
            $("#tachycardia2").val("Yes");

        } else if (x == "") {
            $("#tachycardia2").val("no");
        } else {
            $("#tachycardia").text("No");
            $("#tachycardia2").val("No");
        }
        //         var s = document.getElementById("fever");
        // s.options[s.options.length] = new Option('Yes', 'Yes', true,true);
        //      }
        //      else
        //      {
        //         var s = document.getElementById("fever");
        // s.options[s.options.length] = new Option('No', 'No', true,true);
        //      }
    });

    $("#bp").keyup(function() {

        let x = document.getElementById("bp").value;
        let splite = x.split("/");
        // alert(splite[0]);
        // alert(splite[1]);
        console.log(splite);
        var a1 = splite[0];
        var a2 = splite[1];
        if (a1 <= 90) {
            if (a2 <= 60) {
                $("#hypotension").text("Yes");
                $("#hypotension").val("Yes");
            }

        }
        if (a1 > 90) {
            if (a2 > 60) {
                $("#hypotension").text("No");
                $("#hypotension").val("no");
            } else {
                $("#hypotension").text("No");
                $("#hypotension").val("no");
            }


        }
        if (x == "") {
            $("#hypotension").val("no");
        }


        // else if (splite[0] < "120" && splite[1] < "80" ) {
        //     $("#hypotension").val("Yes");
        // }
        //         var s = document.getElementById("fever");
        // s.options[s.options.length] = new Option('Yes', 'Yes', true,true);
        //      }
        //      else
        //      {
        //         var s = document.getElementById("fever");
        // s.options[s.options.length] = new Option('No', 'No', true,true);
        //      }
    });



    $(document).ready(function() {

        $('#first_tab').trigger('click');
        // $('#sec_tab').trigger('click');
        // $('#third_tab').trigger('click');

        //jQuery('#js_pill_border_icon-1').removeClass('tab-pane fade active show');
        //jQuery('#js_pill_border_icon-2').addClass('tab-pane fade');

        $('.aa').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
        });

        $(".select2-placeholder-multiple").select2({
            placeholder: "Select State"
        });


        $("#intravenous_cannula").click(function() {

            var x = document.getElementById("intravenous_cannula").value;
            if (x == 'yes') {
                var show = document.getElementById("demo");
                show.style.display = "block";
            } else {
                var show = document.getElementById("demo");
                show.style.display = "none"
            }
        });

        $("#phlebitis_culture_report").click(function() {

            var x = document.getElementById("phlebitis_culture_report").value;
            if (x == 'yes') {
                var show = document.getElementById("phlebitis_culture_div");
                show.style.display = "block";
            } else {
                var show = document.getElementById("phlebitis_culture_div");
                show.style.display = "none"
            }
        });
        $("#culture_report").click(function() {

            var x = document.getElementById("culture_report").value;
            if (x == 'yes') {
                var show = document.getElementById("culture_report_div");
                show.style.display = "block";
            } else {
                var show = document.getElementById("culture_report_div");
                show.style.display = "none"
            }
        });



        $("#discharge_status").click(function() {

            let x = document.getElementById("discharge_status").value;
            if (x == 'Not Applicable') {

                let show = document.getElementById("date1");
                show.style.display = "none";
            }
            if (x == 'Applicable') {
                let show = document.getElementById("date1");
                show.style.display = "block"
            } else {
                let show = document.getElementById("date1");
                show.style.display = "none";
            }
        });

        $("#urinary_catheter").click(function() {

            var x = document.getElementById("urinary_catheter").value;
            if (x == 'yes') {
                var show = document.getElementById("demo2");
                show.style.display = "block";
            } else {
                var show = document.getElementById("demo2");
                show.style.display = "none"
            }
        });

        $("#urinary_culture_report").click(function() {

            var x = document.getElementById("urinary_culture_report").value;
            if (x == 'yes') {
                var show = document.getElementById("urinary_culture_div");
                show.style.display = "block";
            } else {
                var show = document.getElementById("urinary_culture_div");
                show.style.display = "none"
            }
        });

        $("#central_line").click(function() {
            var x = document.getElementById("central_line").value;
            if (x == 'yes') {
                var show = document.getElementById("demo3");
                show.style.display = "block";
            } else {
                var show = document.getElementById("demo3");
                show.style.display = "none"
            }
        });

        $("#central_culture_report").click(function() {
            var x = document.getElementById("central_culture_report").value;
            if (x == 'yes') {
                var show = document.getElementById("central_culture_div");
                show.style.display = "block";
            } else {
                var show = document.getElementById("central_culture_div");
                show.style.display = "none"
            }
        });

        $("#hospital_acquired_pneumonia").click(function() {
            var x = document.getElementById("hospital_acquired_pneumonia").value;
            if (x == 'yes') {
                var show = document.getElementById("hospital_demo");
                show.style.display = "block";
            } else {
                var show = document.getElementById("hospital_demo");
                show.style.display = "none"
            }
        });

        $("#hospital_culture_report").click(function() {

            var x = document.getElementById("hospital_culture_report").value;
            if (x == 'yes') {
                var show = document.getElementById("hostipal_culture_div");
                show.style.display = "block";
            } else {
                var show = document.getElementById("hostipal_culture_div");
                show.style.display = "none"
            }
        });

        $("#ventilator_associated_pneumonia").click(function() {
            var x = document.getElementById("ventilator_associated_pneumonia").value;
            if (x == 'yes') {
                var show = document.getElementById("demo5");
                show.style.display = "block";
            } else {
                var show = document.getElementById("demo5");
                show.style.display = "none"
            }
        });

        $("#ventilator_culture_report").click(function() {
            var x = document.getElementById("ventilator_culture_report").value;
            if (x == 'yes') {
                var show = document.getElementById("ventilator_culture_div");
                show.style.display = "block";
            } else {
                var show = document.getElementById("ventilator_culture_div");
                show.style.display = "none"
            }
        });

        $("#surgical_site_infection").click(function() {
            var x = document.getElementById("surgical_site_infection").value;
            if (x == 'yes') {
                var show = document.getElementById("demo6");
                show.style.display = "block";
            } else {
                var show = document.getElementById("demo6");
                show.style.display = "none"
            }

        });

        $("#surgical_culture_report").click(function() {
            var x = document.getElementById("surgical_culture_report").value;
            if (x == 'yes') {
                var show = document.getElementById("surgical_culture_div");
                show.style.display = "block";
            } else {
                var show = document.getElementById("surgical_culture_div");
                show.style.display = "none"
            }

        });

    });

    $("#pulse").keypress(function(e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[/0-9 ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            return false
        }
        if ($("#pulse").val().length > 6) {
            return false;
        }
    });

    $("#bp").keypress(function(e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[/0-9 ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            return false
        }
        if ($("#bp").val().length > 6) {
            return false;
        }
    });

    // $("#fever").keypress(function(e) {
    //     var keyCode = e.keyCode || e.which;
    //     var regex = /^[ ]+$/;
    //     var isValid = regex.test(String.fromCharCode(keyCode));
    //     if (!isValid) {
    //         return false
    //     }
    //     if ($("#pulse").val().length > 6) {
    //         return false;
    //     }
    // });

    // $("#tachycardia").keypress(function(e) {
    //     var keyCode = e.keyCode || e.which;
    //     var regex = /^[ ]+$/;
    //     var isValid = regex.test(String.fromCharCode(keyCode));
    //     if (!isValid) {
    //         return false
    //     }
    //     if ($("#tachycardia").val().length > 6) {
    //         return false;
    //     }
    // });

    $("#names").keypress(function(e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[A-Za-z0-9 ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            return false
        }
        if ($("#names").val().length > 35) {
            return false;
        }
    });

    $("#phlebitis_sife").keypress(function(e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[A-Za-z0-9 ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            return false
        }
        if ($("#phlebitis_sife").val().length > 35) {
            return false;
        }
    });

    // $("#source").keypress(function(e) {
    //     var keyCode = e.keyCode || e.which;
    //     var regex = /^[A-Za-z0-9 ]+$/;
    //     var isValid = regex.test(String.fromCharCode(keyCode));
    //     if (!isValid) {
    //         return false
    //     }
    //     if ($("#source").val().length > 35) {
    //         return false;
    //     }
    // });

    $("#bed").keypress(function(e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[0-9 ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            return false
        }
        if ($("#bed").val().length > 35) {
            return false;
        }
    });

    $("#mr_num").keypress(function(e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[0-9 ]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            return false
        }
        if ($("#mr_num").val().length > 35) {
            return false;
        }
    });


    function ValidateFrom() {


        var nameW = document.getElementById('names').value;

        if (nameW == "") {
            document.getElementById("names").classList.add("form-controlmy");
            document.getElementById("names").classList.add("is-invalidmy");
            $("#names").focus();
            return false;
        }
        document.getElementById("names").classList.remove("form-controlmy");
        document.getElementById("names").classList.add("is-validmyf");
        document.getElementById("names").classList.add("is-validmy");


        bed = document.getElementById('bed').value;
        if (bed == "") {
            document.getElementById("bed").classList.add("form-controlmy");
            document.getElementById("bed").classList.add("is-invalidmy");
            $("#bed").focus();
            return false;

        }

        document.getElementById("bed").classList.remove("form-controlmy");
        document.getElementById("bed").classList.add("is-validmyf");
        document.getElementById("bed").classList.add("is-validmy");

        dateOfAdmission = document.getElementById('date_of_admission').value;
        if (dateOfAdmission == "") {
            document.getElementById("date_of_admission").classList.add("form-controlmy");
            document.getElementById("date_of_admission").classList.add("is-invalidmy");
            $("#date_of_admission").focus();
            return false;

        }
        document.getElementById("date_of_admission").classList.remove("form-controlmy");
        document.getElementById("date_of_admission").classList.add("is-validmyf");
        document.getElementById("date_of_admission").classList.add("is-validmy");

        mrNum = document.getElementById('mr_num').value;
        if (mrNum == "") {
            document.getElementById("mr_num").classList.add("form-controlmy");
            document.getElementById("mr_num").classList.add("is-invalidmy");
            $("#mr_num").focus();
            return false;

        }
        document.getElementById("mr_num").classList.remove("form-controlmy");
        document.getElementById("mr_num").classList.add("is-validmyf");
        document.getElementById("mr_num").classList.add("is-validmy");

        //  dateOfCannulaInsertion=document.getElementById('date_of_cannula_insertion').value;
        //  if(dateOfCannulaInsertion=="")
        // {
        //     document.getElementById("date_of_cannula_insertion").classList.add("form-controlmy");
        //  document.getElementById("date_of_cannula_insertion").classList.add("is-invalidmy");
        //     $("#date_of_cannula_insertion").focus();
        //     return false;

        // }
        //  document.getElementById("date_of_cannula_insertion").classList.remove("form-controlmy");
        //  document.getElementById("date_of_cannula_insertion").classList.add("is-validmyf");
        //  document.getElementById("date_of_cannula_insertion").classList.add("is-validmy");

        //  dateOfUrinaryCatheterInsertion=document.getElementById('date_of_urinary_catheter_insertion').value;

        //  if(dateOfUrinaryCatheterInsertion=="")
        // {
        // document.getElementById("date_of_urinary_catheter_insertion").classList.add("form-controlmy");
        //  document.getElementById("date_of_urinary_catheter_insertion").classList.add("is-invalidmy");
        //     $("#date_of_urinary_catheter_insertion").focus();
        //     return false;

        // }
        //  document.getElementById("date_of_urinary_catheter_insertion").classList.remove("form-controlmy");
        //  document.getElementById("date_of_urinary_catheter_insertion").classList.add("is-validmyf");
        //  document.getElementById("date_of_urinary_catheter_insertion").classList.add("is-validmy");

        //  dateOfCentralLineInsertion=document.getElementById('date_of_central_line_insertion').value;

        //  if(dateOfCentralLineInsertion=="")
        // {
        //  document.getElementById("date_of_central_line_insertion").classList.add("form-controlmy");
        //  document.getElementById("date_of_central_line_insertion").classList.add("is-invalidmy");
        //     $("#date_of_central_line_insertion").focus();
        //     return false;

        // }
        //  document.getElementById("date_of_central_line_insertion").classList.remove("form-controlmy");
        //  document.getElementById("date_of_central_line_insertion").classList.add("is-validmyf");
        //  document.getElementById("date_of_central_line_insertion").classList.add("is-validmy");


        //  dateOfIntubation=document.getElementById('date_of_intubation').value;

        //  if(dateOfIntubation=="")
        // {
        // document.getElementById("date_of_intubation").classList.add("form-controlmy");
        //  document.getElementById("date_of_intubation").classList.add("is-invalidmy");
        //     $("#date_of_intubation").focus();
        //     return false;

        // }
        // document.getElementById("date_of_intubation").classList.remove("form-controlmy");
        //  document.getElementById("date_of_intubation").classList.add("is-validmyf");
        //  document.getElementById("date_of_intubation").classList.add("is-validmy");

        //  dateOfSurgery=document.getElementById('date_of_surgery').value;

        //  if(dateOfSurgery=="")
        // {
        //  document.getElementById("date_of_surgery").classList.add("form-controlmy");
        //  document.getElementById("date_of_surgery").classList.add("is-invalidmy");
        //     $("#date_of_surgery").focus();
        //     return false;

        // }
        //  document.getElementById("date_of_surgery").classList.remove("form-controlmy");
        //  document.getElementById("date_of_surgery").classList.add("is-validmyf");
        //  document.getElementById("date_of_surgery").classList.add("is-validmy");

        $('#sec_tab').trigger('click');

        return false;
    }
    function ValidateFrom4() {
    $('#js_pill_border_icon-4').removeClass('active show');
        $('#third_tab').trigger('click');

        return false;
    }
    function ValidateFrom2() {
        // fever = document.getElementById('fever').value;
        // if (fever == "") {
        //     document.getElementById("fever").classList.add("custom-selectmy");
        //     document.getElementById("fever").classList.add("is-invalidmy");

        //     $("#fever").focus();
        //     return false;

        // }
        // document.getElementById("fever").classList.remove("custom-selectmy");
        // document.getElementById("fever").classList.add("custom-selectisvalidmy");
        // document.getElementById("fever").classList.add("is-validmyf");

        temperature = document.getElementById('temperature').value;
        if (temperature == "") {
            document.getElementById("temperature").classList.add("form-controlmy");
            document.getElementById("temperature").classList.add("is-invalidmy");
            $("#temperature").focus();
            return false;

        }


        document.getElementById("temperature").classList.remove("form-controlmy");
        document.getElementById("temperature").classList.add("is-validmyf");
        document.getElementById("temperature").classList.add("is-validmy");


        // tachycardia = document.getElementById('tachycardia').value;
        // if (tachycardia == "") {
        //     document.getElementById("tachycardia").classList.add("custom-selectmy");
        //     document.getElementById("tachycardia").classList.add("is-invalidmy");
        //     $("#tachycardia").focus();
        //     return false;

        // }
        // document.getElementById("tachycardia").classList.remove("custom-selectmy");
        // document.getElementById("tachycardia").classList.add("custom-selectisvalidmy");
        // document.getElementById("tachycardia").classList.add("is-validmyf");

        pulse = document.getElementById('pulse').value;


        if (pulse == "") {
            document.getElementById("pulse").classList.add("form-controlmy");
            document.getElementById("pulse").classList.add("is-invalidmy");
            $("#pulse").focus();
            return false;

        }


        document.getElementById("pulse").classList.remove("form-controlmy");
        document.getElementById("pulse").classList.add("is-validmyf");
        document.getElementById("pulse").classList.add("is-validmy");


        hypotension = document.getElementById('hypotension').value;
        if (hypotension == "") {
            document.getElementById("hypotension").classList.add("custom-selectmy");
            document.getElementById("hypotension").classList.add("is-invalidmy");
            $("#hypotension").focus();
            return false;

        }
        document.getElementById("hypotension").classList.remove("form-controlmy");
        document.getElementById("hypotension").classList.add("is-validmyf");
        document.getElementById("hypotension").classList.add("is-validmy");

        bp = document.getElementById('bp').value;

        if (bp == "") {
            document.getElementById("bp").classList.add("form-controlmy");
            document.getElementById("bp").classList.add("is-invalidmy");
            $("#bp").focus();
            return false;

        }


        document.getElementById("bp").classList.remove("form-controlmy");
        document.getElementById("bp").classList.add("is-validmyf");
        document.getElementById("bp").classList.add("is-validmy");

        chills = document.getElementById('chills').value;
        if (chills == "") {
            document.getElementById("chills").classList.add("custom-selectmy");
            document.getElementById("chills").classList.add("is-invalidmy");
            $("#chills").focus();
            return false;

        }
        document.getElementById("chills").classList.remove("custom-selectmy");
        document.getElementById("chills").classList.add("custom-selectisvalidmy");
        document.getElementById("chills").classList.add("is-validmyf");

        wbc = document.getElementById('wbc').value;

        if (wbc == "") {
            document.getElementById("wbc").classList.add("form-controlmy");
            document.getElementById("wbc").classList.add("is-invalidmy");
            $("#wbc").focus();
            return false;

        }


        document.getElementById("wbc").classList.remove("form-controlmy");
        document.getElementById("wbc").classList.add("is-validmyf");
        document.getElementById("wbc").classList.add("is-validmy");


        ln = document.getElementById('ln').value;

        if (ln == "") {
            document.getElementById("ln").classList.add("form-controlmy");
            document.getElementById("ln").classList.add("is-invalidmy");
            $("#ln").focus();
            return false;

        }


        document.getElementById("ln").classList.remove("form-controlmy");
        document.getElementById("ln").classList.add("is-validmyf");
        document.getElementById("ln").classList.add("is-validmy");

        // worseningCxr = document.getElementById('worsening_cxr').value;
        // if (worseningCxr == "") {
        //     document.getElementById("worsening_cxr").classList.add("custom-selectmy");
        //     document.getElementById("worsening_cxr").classList.add("is-invalidmy");
        //     $("#worsening_cxr").focus();
        //     return false;

        // }
        // document.getElementById("worsening_cxr").classList.remove("custom-selectmy");
        // document.getElementById("worsening_cxr").classList.add("custom-selectisvalidmy");
        // document.getElementById("worsening_cxr").classList.add("is-validmyf");

        // worseningTrachealSecretions = document.getElementById('worsening_tracheal_secretions').value;

        // if (worseningTrachealSecretions == "") {
        //     document.getElementById("worsening_tracheal_secretions").classList.add("custom-selectmy");
        //     document.getElementById("worsening_tracheal_secretions").classList.add("is-invalidmy");
        //     $("#worsening_tracheal_secretions").focus();
        //     return false;

        // }
        // document.getElementById("worsening_tracheal_secretions").classList.remove("custom-selectmy");
        // document.getElementById("worsening_tracheal_secretions").classList.add("custom-selectisvalidmy");
        // document.getElementById("worsening_tracheal_secretions").classList.add("is-validmyf");
        $('#js_pill_border_icon-2').removeClass('active show');
        $('#for_tab').trigger('click');

        return false;
    }

    function ValidateFrom3() {
        intravenousCannula = document.getElementById('intravenous_cannula').value;
        if (intravenousCannula == "") {
            document.getElementById("intravenous_cannula").classList.add("custom-selectmy");
            document.getElementById("intravenous_cannula").classList.add("is-invalidmy");

            $("#intravenous_cannula").focus();
            return false;

        }
        document.getElementById("intravenous_cannula").classList.remove("custom-selectmy");
        document.getElementById("intravenous_cannula").classList.add("custom-selectisvalidmy");
        document.getElementById("intravenous_cannula").classList.add("is-validmyf");

        phlebitisDateOfInsertion = document.getElementById('phlebitis_date_of_insertion').value;
        if (phlebitisDateOfInsertion == "") {
            document.getElementById("phlebitis_date_of_insertion").classList.add("form-controlmy");
            document.getElementById("phlebitis_date_of_insertion").classList.add("is-invalidmy");
            $("#phlebitis_date_of_insertion").focus();
            return false;

        }
        document.getElementById("phlebitis_date_of_insertion").classList.remove("form-controlmy");
        document.getElementById("phlebitis_date_of_insertion").classList.add("is-validmyf");
        document.getElementById("phlebitis_date_of_insertion").classList.add("is-validmy");

        var phlebitisSife = document.getElementById('phlebitis_sife').value;

        if (phlebitisSife == "") {
            document.getElementById("phlebitis_sife").classList.add("form-controlmy");
            document.getElementById("phlebitis_sife").classList.add("is-invalidmy");
            $("#phlebitis_sife").focus();
            return false;
        }
        document.getElementById("phlebitis_sife").classList.remove("form-controlmy");
        document.getElementById("phlebitis_sife").classList.add("is-validmyf");
        document.getElementById("phlebitis_sife").classList.add("is-validmy");

        phlebitisPhlebitis = document.getElementById('phlebitis_phlebitis').value;
        if (phlebitisPhlebitis == "") {
            document.getElementById("phlebitis_phlebitis").classList.add("custom-selectmy");
            document.getElementById("phlebitis_phlebitis").classList.add("is-invalidmy");

            $("#phlebitis_phlebitis").focus();
            return false;

        }
        document.getElementById("phlebitis_phlebitis").classList.remove("custom-selectmy");
        document.getElementById("phlebitis_phlebitis").classList.add("custom-selectisvalidmy");
        document.getElementById("phlebitis_phlebitis").classList.add("is-validmyf");

        phlebitisCultureReport = document.getElementById('phlebitis_culture_report').value;
        if (phlebitisCultureReport == "") {
            document.getElementById("phlebitis_culture_report").classList.add("custom-selectmy");
            document.getElementById("phlebitis_culture_report").classList.add("is-invalidmy");

            $("#phlebitis_culture_report").focus();
            return false;

        }
        document.getElementById("phlebitis_culture_report").classList.remove("custom-selectmy");
        document.getElementById("phlebitis_culture_report").classList.add("custom-selectisvalidmy");
        document.getElementById("phlebitis_culture_report").classList.add("is-validmyf");

        datepicker = document.getElementById('datepicker').value;
        if (datepicker == "") {
            document.getElementById("datepicker").classList.add("form-controlmy");
            document.getElementById("datepicker").classList.add("is-invalidmy");
            $("#datepicker").focus();
            return false;

        }
        document.getElementById("datepicker").classList.remove("form-controlmy");
        document.getElementById("datepicker").classList.add("is-validmyf");
        document.getElementById("datepicker").classList.add("is-validmy");

        var source = document.getElementById('source').value;

        if (source == "") {
            document.getElementById("source").classList.add("form-controlmy");
            document.getElementById("source").classList.add("is-invalidmy");
            $("#source").focus();
            return false;
        }
        document.getElementById("source").classList.remove("form-controlmy");
        document.getElementById("source").classList.add("is-validmyf");
        document.getElementById("source").classList.add("is-validmy");

        result = document.getElementById('result').value;
        if (result == "") {
            document.getElementById("result").classList.add("custom-selectmy");
            document.getElementById("result").classList.add("is-invalidmy");

            $("#result").focus();
            return false;

        }
        document.getElementById("result").classList.remove("custom-selectmy");
        document.getElementById("result").classList.add("custom-selectisvalidmy");
        document.getElementById("result").classList.add("is-validmyf");

        return true;
    }

    // PhlebitisCreateNewElement
    var count = 0;

    function PhlebitisCreateNewElement() {
        count++;
        var txtNewInputBox = document.createElement('div');

        txtNewInputBox.innerHTML = '<div class="" id="remove' + count +
            '" ><div class="form-row"><div class="col-md-4 mb-3"><label>Date #' + count +
            '</label><div class="input-group"><input type="text" class="form-control aa" value="07/17/2020" id="phlebitis_date_' +
            count +
            '" name="phlebitis_date[]" ><div class="input-group-append"><span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span></div></div><div class="invalid-feedback"> Please Select Date .</div></div><div class="col-md-4 mb-3"><label class="form-label">Source ' +
            count +
            '</label><span style="color: red">*</span><select class="custom-select" name="phlebitis_source[]" id="phlebitis_source' +
            count +
            '"  required=""><option value="">Select</option><option value="0">Select </option><?php for ($i = 0; $i < count($source); $i++) { ?><option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option><?php } ?></select></div>  <div class="col-md-3 mb-3"> <label class="form-label">Result #' +
            count + ' </label><select class="custom-select" name="phlebitis_result[]" id="' + count +
            '" required="" onchange="ShowPhlebitisDiv(this)"><option value="">Select result</option><option value="Positive">Positive</option><option value="Negative">Negative</option><option value="Pending">Pending</option></select><div class="invalid-feedback">Please Select Result.</div></div></div><div id="phlebitis_div' + count + '" style="display: none;"><div class="form-row"><div class="col-md-4 mb-3"> <label class="form-label">Organism #' +
            count +
            '</label><span style="color: red">*</span><select class="custom-select phlebitis" name="phlebitis_organism[]" id="phlebitis_organism' +
            count +
            '"  required="" onchange="getAntibiotics(this)"><option value="">Select</option><?php for ($i = 0; $i < count($lovs); $i++) { ?><option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option><?php } ?></select></div><div class="col-md-4 mb-3"> <label class="form-label" for="multiple-placeholder">Resistance Antibiotic #' +
            count +
            '</label><select class="select2-placeholder-multiple form-control" multiple="multiple" id="phlebitis_antibiotic' +
            count + '" name="phlebitis_antibiotic[' + count +
            '][]" onchange="getCountOfAntiBio(this)"></select></div><div class="col-md-3 mb-3"> <label class="form-label">MDRO #' +
            count +
            '</label><span style="color: red">*</span><input class="form-control " type="text" name="phlebitis_mdr_name[]" id="phlebitis_mdr_name' +
            count +
            '"  required="" placeholder="Enter MBRO " style="background-color: white;" readonly=""></div> <div class="col-md-1" style="margin-top: 23px"><button class="btn btn-danger"  onclick="delrows(' +
            count + ');" type="button" ><i class="fal fa-times"></i></button></div></div></div></div>';

        document.getElementById("phlebitis_new_elementid").appendChild(txtNewInputBox);

        // $('input[name="date[]"]').each(function(index){

        //         var i= index+1;

        //           $('#date_'+i).daterangepicker({

        //                singleDatePicker: true,
        //                 showDropdowns: true
        //             });
        //           console.log('date_'+i);

        //          });
        $(document).ready(function() {
            $('.aa').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            });
            $(".select2-placeholder-multiple").select2({
                placeholder: "Select State"
            });
        });
    }

    function delrows(count) {
        if (confirm("Are you sure you want to Delete?")) {
            var el = count;
            $('#remove' + el).remove();
        }

    }

    // UrinaryCreateNewElement
    var count1 = 0;

    function UrinaryCreateNewElement() {
        count1++;
        var txtNewInputBox1 = document.createElement('div');

        txtNewInputBox1.innerHTML = '<div class="" id="remove1' + count1 +
            '" ><div class="form-row"><div class="col-md-4 mb-3"><label>Date #' + count1 +
            '</label><div class="input-group"><input type="text" class="form-control aa" value="07/17/2020" id="urinary_date1_' +
            count1 +
            '" name="urinary_date[]" ><div class="input-group-append"><span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span></div></div><div class="invalid-feedback"> Please Select Date .</div></div><div class="col-md-4 mb-3"><label class="form-label">Source ' +
            count1 +
            '</label><span style="color: red">*</span><select class="custom-select" name="urinary_source[]" id="urinary_source1' +
            count1 +
            '"  required=""><option value="0">Select </option><?php for ($i = 0; $i < count($source); $i++) { ?><option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option><?php } ?></select></div>  <div class="col-md-3 mb-3"> <label class="form-label">Result #' +
            count1 + ' </label><select class="custom-select" name="urinary_result[]" id="' + count1 +
            '" required=""  onchange="ShowUrinaryDiv(this)"><option value="">Select result</option><option value="Positive">Positive</option><option value="Negative">Negative</option><option value="Pending">Pending</option></select><div class="invalid-feedback">Please Select Result.</div></div></div><div id="urinary_div' + count1 + '" style="display: none;"><div class="form-row"><div class="col-md-4 mb-3"> <label class="form-label">Organism #' +
            count1 +
            '</label><span style="color: red">*</span><select class="custom-select" name="urinary_organism[]" id="urinary_organism' +
            count1 +
            '"  required="" onchange="getAntibiotics(this)"><option value="">Select</option><?php for ($i = 0; $i < count($lovs); $i++) { ?><option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option><?php } ?></select></div><div class="col-md-4 mb-3"> <label class="form-label" for="multiple-placeholder">Resistance Antibiotic #' +
            count1 +
            '</label><select class="select2-placeholder-multiple form-control" multiple="multiple" id="urinary_antibiotic' +
            count1 +
            '" name="urinary_antibiotic[' + count1 + '][]" onchange="getCountOfAntiBio(this)"></select></div><div class="col-md-3 mb-3"> <label class="form-label">MDRO #' +
            count1 +
            '</label><span style="color: red">*</span><input class="form-control" name="urinary_mdr_name[]" id="urinary_mdr_name' +
            count1 +
            '"  required="" placeholder="Enter MBRO" style="background-color: white;" readonly></div> <div class="col-md-1" style="margin-top: 23px"><button class="btn btn-danger"  onclick="delrows1(' +
            count1 + ');" type="button" ><i class="fal fa-times"></i></button></div></div></div></div>';

        document.getElementById("urinary_new_elementid").appendChild(txtNewInputBox1);

        // $('input[name="date[]"]').each(function(index){

        //         var i= index+1;

        //           $('#date_'+i).daterangepicker({

        //                singleDatePicker: true,
        //                 showDropdowns: true
        //             });
        //           console.log('date_'+i);

        //          });
        $(document).ready(function() {
            $('.aa').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            });
            $(".select2-placeholder-multiple").select2({
                placeholder: "Select State"
            });
        });
    }

    function delrows1(count1) {
        if (confirm("Are you sure you want to Delete?")) {
            var el = count1;
            $('#remove1' + el).remove();
        }

    }

    // CentralCreateNewElement
    var count2 = 0;

    function CentralCreateNewElement() {
        count2++;
        var txtNewInputBox2 = document.createElement('div');

        txtNewInputBox2.innerHTML = '<div class="" id="remove2' + count2 +
            '" ><div class="form-row"><div class="col-md-4 mb-3"><label>Date #' + count2 +
            '</label><div class="input-group"><input type="text" class="form-control aa" value="07/17/2020" id="central_date1_' +
            count2 +
            '" name="central_date[]" ><div class="input-group-append"><span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span></div></div><div class="invalid-feedback"> Please Select Date .</div></div><div class="col-md-4 mb-3"><label class="form-label">Source ' +
            count2 +
            '</label><span style="color: red">*</span><select class="custom-select" name="central_source[]" id="central_source1' +
            count2 +
            '"  required=""><option value="0">Select </option><?php for ($i = 0; $i < count($source); $i++) { ?><option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option><?php } ?></select></div>  <div class="col-md-3 mb-3"> <label class="form-label">Result #' +
            count2 + ' </label><select class="custom-select" name="central_result[]" id="' + count2 +
            '" name="result1[]" required="" onchange="ShowCentralDiv(this)"><option value="">Select result</option><option value="Positive">Positive</option><option value="Negative">Negative</option><option value="Pending">Pending</option></select><div class="invalid-feedback">Please Select Result.</div></div></div><div id="central_div' + count2 + '" style="display: none;"><div class="form-row"><div class="col-md-4 mb-3"> <label class="form-label">Organism #' +
            count2 +
            '</label><span style="color: red">*</span><select class="custom-select" name="central_organism[]" id="central_organism' +
            count2 +
            '"  required="" onchange="getAntibiotics(this)"><option value="">Select</option><?php for ($i = 0; $i < count($lovs); $i++) { ?><option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option><?php } ?></select></div><div class="col-md-4 mb-3"> <label class="form-label" for="multiple-placeholder">Resistance Antibiotic #' +
            count2 +
            '</label><select class="select2-placeholder-multiple form-control" multiple="multiple" id="central_antibiotic' +
            count2 +
            '" name="central_antibiotic[' + count2 + '][]" onchange="getCountOfAntiBio(this)"></select></div><div class="col-md-3 mb-3"> <label class="form-label">MDRO #' +
            count2 +
            '</label><span style="color: red">*</span><input class="form-control" name="central_mdr_name[]" id="central_mdr_name' +
            count2 +
            '"  required="" placeholder="Enter MBRO" style="background-color: white;" readonly></div><div class="col-md-1" style="margin-top: 23px"><button class="btn btn-danger"  onclick="delrows2(' +
            count2 + ');" type="button" ><i class="fal fa-times"></i></button></div></div></div></div>';

        document.getElementById("central_new_elementid").appendChild(txtNewInputBox2);

        // $('input[name="date[]"]').each(function(index){

        //         var i= index+1;

        //           $('#date_'+i).daterangepicker({

        //                singleDatePicker: true,
        //                 showDropdowns: true
        //             });
        //           console.log('date_'+i);

        //          });
        $(document).ready(function() {
            $('.aa').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            });
            $(".select2-placeholder-multiple").select2({
                placeholder: "Select State"
            });
        });
    }

    function delrows2(count2) {
        if (confirm("Are you sure you want to Delete?")) {
            var el = count2;
            $('#remove2' + el).remove();
        }

    }

    // HospitalCreateNewElement
    var count3 = 0;

    function HospitalCreateNewElement() {
        count3++;
        var txtNewInputBox3 = document.createElement('div');

        txtNewInputBox3.innerHTML = '<div class="" id="remove3' + count3 +
            '" ><div class="form-row"><div class="col-md-4 mb-3"><label>Date #' + count3 +
            '</label><div class="input-group"><input type="text" class="form-control aa" value="07/17/2020" id="hospital_date1_' +
            count3 +
            '" name="hospital_date[]" ><div class="input-group-append"><span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span></div></div><div class="invalid-feedback"> Please Select Date .</div></div><div class="col-md-4 mb-3"><label class="form-label">Source ' +
            count3 +
            '</label><span style="color: red">*</span><select class="custom-select" name="hospital_source[]" id="hospital_source1' +
            count3 +
            '"  required=""><option value="0">Select </option><?php for ($i = 0; $i < count($source); $i++) { ?><option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option><?php } ?></select></div>  <div class="col-md-3 mb-3"> <label class="form-label">Result #' +
            count3 + ' </label><select class="custom-select" name="hospital_result[]" id="' + count3 +
            '" name="result13[]" required="" onchange="ShowHospitalDiv(this)"><option value="">Select result</option><option value="Positive">Positive</option><option value="Negative">Negative</option><option value="Pending">Pending</option></select><div class="invalid-feedback">Please Select Result.</div></div></div><div id="hospital_div' + count3 + '" style="display: none;"> <div class="form-row"><div class="col-md-4 mb-3"> <label class="form-label">Organism #' +
            count3 +
            '</label><span style="color: red">*</span><select class="custom-select" name="hospital_organism[]" id="hospital_organism' +
            count3 +
            '"  required="" onchange="getAntibiotics(this)"><option value="">Select</option><?php for ($i = 0; $i < count($lovs); $i++) { ?><option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option><?php } ?></select></div><div class="col-md-4 mb-3"> <label class="form-label" for="multiple-placeholder">Resistance Antibiotic </label><select class="select2-placeholder-multiple form-control" multiple="multiple" id="hospital_antibiotic' +
            count3 +
            '" name="hospital_antibiotic[' + count3 + '][]" onchange="getCountOfAntiBio(this)"></select></div><div class="col-md-3 mb-3"> <label class="form-label">MDRO</label><span style="color: red">*</span><input class="form-control" name="hospital_mdr_name[]" id="hospital_mdr_name' +
            count3 +
            '"  required="" style="background-color: white;" readonly placeholder="Enter MBRO"></div><div class="col-md-1" style="margin-top: 23px"><button class="btn btn-danger"  onclick="delrows3(' +
            count3 + ');" type="button" ><i class="fal fa-times"></i></button></div></div></div></div>';

        document.getElementById("hospital_new_elementid").appendChild(txtNewInputBox3);

        // $('input[name="date[]"]').each(function(index){

        //         var i= index+1;

        //           $('#date_'+i).daterangepicker({

        //                singleDatePicker: true,
        //                 showDropdowns: true
        //             });
        //           console.log('date_'+i);

        //          });
        $(document).ready(function() {
            $('.aa').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            });
            $(".select2-placeholder-multiple").select2({
                placeholder: "Select State"
            });
        });
    }

    function delrows3(count3) {
        if (confirm("Are you sure you want to Delete?")) {
            var el = count3;
            $('#remove3' + el).remove();
        }

    }

    // VentilatorCreateNewElement
    var count4 = 0;

    function VentilatorCreateNewElement() {
        count4++;
        var txtNewInputBox4 = document.createElement('div');

        txtNewInputBox4.innerHTML = '<div class="" id="remove4' + count4 +
            '" ><div class="form-row"><div class="col-md-4 mb-3"><label>Date #' + count4 +
            '</label><div class="input-group"><input type="text" class="form-control aa" value="07/17/2020" id="ventilator_date1_' +
            count4 +
            '" name="ventilator_date[]" ><div class="input-group-append"><span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span></div></div><div class="invalid-feedback"> Please Select Date .</div></div><div class="col-md-4 mb-3"><label class="form-label">Source ' +
            count4 +
            '</label><span style="color: red">*</span><select class="custom-select" name="ventilator_source[]" id="ventilator_source1_' +
            count4 +
            '"  required=""><option value="0">Select </option><?php for ($i = 0; $i < count($source); $i++) { ?><option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option><?php } ?></select></div>  <div class="col-md-3 mb-3"> <label class="form-label">Result #' +
            count4 + ' </label><select class="custom-select" name="ventilator_result[]" id="' + count4 +
            '" name="ventilator_result1[]" required="" onchange="ShowVentilatorDiv(this)"><option value="">Select result</option><option value="Positive">Positive</option><option value="Negative">Negative</option><option value="Pending">Pending</option></select><div class="invalid-feedback">Please Select Result.</div></div></div> <div id="ventilator_div' + count4 + '" style="display: none;"><div class="form-row"><div class="col-md-4 mb-3"> <label class="form-label">Organism #' +
            count4 +
            '</label><span style="color: red">*</span><select class="custom-select" name="ventilator_organism[]" id="ventilator_organism' +
            count4 +
            '"  required="" onchange="getAntibiotics(this)"><option value="">Select</option><?php for ($i = 0; $i < count($lovs); $i++) { ?><option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option><?php } ?></select></div><div class="col-md-4 mb-3"> <label class="form-label" for="multiple-placeholder">Resistance Antibiotic #' +
            count4 +
            '</label><select class="select2-placeholder-multiple form-control" multiple="multiple" id="ventilator_antibiotic' +
            count4 +
            '" name="ventilator_antibiotic[' + count4 + '][]" onchange="getCountOfAntiBio(this)"><optgroup label="Antibiotic class 1"><option value="oxacillin">oxacillin</option><option value="Vancomycin">Vancomycin</option></optgroup><optgroup label="Antibiotic class 2"><option value=" fluoroquinolone">fluoroquinolone</option><option value="Ciprofloxacin">Ciprofloxacin</option></optgroup><optgroup label="Antibiotic class 3"><option value="Ceftazidime">Ceftazidime</option><option value="Ceftazidime">Ceftazidime</option></optgroup><optgroup label="Antibiotic class 4"><option value="piperacillin">piperacillin</option><option value="ticarcilin">ticarcilin</option></optgroup><optgroup label="Antibiotic class 5"><option value="polymyxin b">polymyxin B</option><option value="colistin">colistin</option></optgroup><optgroup label="Antibiotic class 6"><option value="meropenem"> meropenem</option><option value="imipenem ">imipenem</option></optgroup><optgroup label="Antibiotic class 7"><option value="piperacillin tazobactam">piperacillin tazobactam</option><option value="piperacillin tazobactam">piperacillin tazobactam</option></optgroup></select></div><div class="col-md-3 mb-3"> <label class="form-label">MDRO #' +
            count4 +
            '</label><span style="color: red">*</span><input placeholder="Enter MBRO" type="text" class="form-control" name="ventilator_mdr_name[]" id="ventilator_mdr_name' +
            count4 +
            '"  required="" style="background-color: white;" readonly></div><div class="col-md-1" style="margin-top: 23px"><button class="btn btn-danger"  onclick="delrows4(' +
            count4 + ');" type="button" ><i class="fal fa-times"></i></button></div></div></div></div>';

        document.getElementById("ventilator_new_elementid").appendChild(txtNewInputBox4);

        // $('input[name="date[]"]').each(function(index){

        //         var i= index+1;

        //           $('#date_'+i).daterangepicker({

        //                singleDatePicker: true,
        //                 showDropdowns: true
        //             });
        //           console.log('date_'+i);

        //          });
        $(document).ready(function() {
            $('.aa').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            });
            $(".select2-placeholder-multiple").select2({
                placeholder: "Select State"
            });
        });
    }

    function delrows4(count4) {
        if (confirm("Are you sure you want to Delete?")) {

            var el = count4;
            $('#remove4' + el).remove();
        }

    }

    // SurgicalCreateNewElement
    var count5 = 0;

    function SurgicalCreateNewElement() {
        count5++;

        var txtNewInputBox5 = document.createElement('div');

        txtNewInputBox5.innerHTML = '<div class="" id="remove5' + count5 +
            '" ><div class="form-row"><div class="col-md-4 mb-3"><label>Date #' + count5 +
            '</label><div class="input-group"><input type="text" class="form-control aa" value="07/17/2020" id="surgical_date1_' +
            count5 +
            '" name="surgical_date[]" ><div class="input-group-append"><span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span></div></div><div class="invalid-feedback"> Please Select Date .</div></div><div class="col-md-4 mb-3"><label class="form-label">Source ' +
            count5 +
            '</label><span style="color: red">*</span><select class="custom-select" name="surgical_source[]" id="surgical_source1' +
            count5 +
            '"  required=""><option value="0">Select </option><?php for ($i = 0; $i < count($source); $i++) { ?><option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option><?php } ?></select></div>  <div class="col-md-3 mb-3"> <label class="form-label">Result #' +
            count5 + ' </label><select class="custom-select" name="surgical_result[]" id="' + count5 +
            '" required="" onchange="ShowSurgicalDiv(this)"><option value="">Select result</option><option value="Positive">Positive</option><option value="Negative">Negative</option><option value="Pending">Pending</option></select><div class="invalid-feedback">Please Select Result.</div></div></div><div id="surgical_div' + count5 + '" style="display: none;"><div class="form-row"><div class="col-md-4 mb-3"> <label class="form-label">Organism #' +
            count5 +
            '</label><span style="color: red">*</span><select class="custom-select" name="surgical_organism[]" id="surgical_organism' +
            count5 +
            '"  required="" onchange="getAntibiotics(this)"><option value="">Select</option><?php for ($i = 0; $i < count($lovs); $i++) { ?><option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option><?php } ?></select></div><div class="col-md-4 mb-3"> <label class="form-label" for="multiple-placeholder">Resistance Antibiotic </label><select class="select2-placeholder-multiple form-control" multiple="multiple" id="surgical_antibiotic' +
            count5 +
            '" name="surgical_antibiotic[' + count5 + '][]" onchange="getCountOfAntiBio(this)"></select></div><div class="col-md-3 mb-3"> <label class="form-label">MDRO</label><span style="color: red">*</span><input type="text" placeholder="Enter MBRO" class="form-control" name="surgical_mdr_name[]" id="surgical_mdr_name' +
            count5 +
            '"  required="" style="background-color: white;" readonly></div> <div class="col-md-1" style="margin-top: 23px"><button class="btn btn-danger"  onclick="delrows5(' +
            count5 + ');" type="button" ><i class="fal fa-times"></i></button></div></div></div></div>';
        document.getElementById("surgical_new_elementid").appendChild(txtNewInputBox5);

        // $('input[name="date[]"]').each(function(index){

        //         var i= index+1;

        //           $('#date_'+i).daterangepicker({

        //                singleDatePicker: true,
        //                 showDropdowns: true
        //             });
        //           console.log('date_'+i);

        //          });
        $(document).ready(function() {
            $('.aa').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            });
            $(".select2-placeholder-multiple").select2({
                placeholder: "Select State"
            });
        });
    }

    function delrows5(count5) {

        if (confirm("Are you sure you want to Delete?")) {

            var el = count5;

            $('#remove5' + el).remove();
        }

    }
    // CultureReportCreateNewElement
    var count6 = 0;

    function CultureReportCreateNewElement() {
        count6++;

        var txtNewInputBox6 = document.createElement('div');

        txtNewInputBox6.innerHTML = '<div class="" id="remove6' + count6 +
            '" ><div class="form-row"><div class="col-md-4 mb-3"><label>Date #' + count6 +
            '</label><div class="input-group"><input type="text" class="form-control aa" value="07/17/2020" id="culture_report_date1_' +
            count6 +
            '" name="culture_report_date[]" ><div class="input-group-append"><span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span></div></div><div class="invalid-feedback"> Please Select Date .</div></div><div class="col-md-4 mb-3"><label class="form-label">Source ' +
            count6 +
            '</label><span style="color: red">*</span><select class="custom-select" name="culture_report_source[]" id="culture_report_source1' +
            count6 +
            '" ><option value="0">Select </option><?php for ($i = 0; $i < count($source); $i++) { ?><option value="<?php echo $source[$i]['source_name'] ?>"><?php echo $source[$i]['source_name'] ?></option><?php } ?></select></div>  <div class="col-md-3 mb-3"> <label class="form-label">Result #' +
            count6 + ' </label><select class="custom-select" name="culture_report_result[]" id="' + count6 +
            '" onchange="ShowCultureReportDiv(this)"><option value="">Select result</option><option value="Positive">Positive</option><option value="Negative">Negative</option><option value="Pending">Pending</option></select><div class="invalid-feedback">Please Select Result.</div></div></div><div id="culture_report_div' + count6 + '" style="display: none;"><div class="form-row"><div class="col-md-4 mb-3"> <label class="form-label">Organism #' +
            count6 +
            '</label><span style="color: red">*</span><select class="custom-select" name="culture_report_organism[]" id="culture_report_organism' +
            count6 +
            '"  onchange="getAntibiotics(this)"><option value="">Select</option><?php for ($i = 0; $i < count($lovs); $i++) { ?><option value="<?php echo $lovs[$i]['organism_name'] ?>"><?php echo $lovs[$i]['organism_name']; ?></option><?php } ?></select></div><div class="col-md-4 mb-3"> <label class="form-label" for="multiple-placeholder">Resistance Antibiotic </label><select class="select2-placeholder-multiple form-control" multiple="multiple" id="culture_report_antibiotic' +
            count6 +
            '" name="culture_report_antibiotic[' + count6 + '][]" onchange="getCountOfAntiBio(this)"></select></div><div class="col-md-3 mb-3"> <label class="form-label">MDRO</label><span style="color: red">*</span><input type="text" placeholder="Enter MBRO" class="form-control" name="culture_report_mdr_name[]" id="culture_report_mdr_name' +
            count6 +
            '"  style="background-color: white;" readonly></div> <div class="col-md-1" style="margin-top: 23px"><button class="btn btn-danger"  onclick="delrows6(' +
            count6 + ');" type="button" ><i class="fal fa-times"></i></button></div></div></div></div>';
        document.getElementById("culture_report_elementid").appendChild(txtNewInputBox6);

        // $('input[name="date[]"]').each(function(index){

        //         var i= index+1;

        //           $('#date_'+i).daterangepicker({

        //                singleDatePicker: true,
        //                 showDropdowns: true
        //             });
        //           console.log('date_'+i);

        //          });
        $(document).ready(function() {
            $('.aa').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            });
            $(".select2-placeholder-multiple").select2({
                placeholder: "Select State"
            });
        });
    }

    function delrows6(count6) {

        if (confirm("Are you sure you want to Delete?")) {

            var el = count6;

            $('#remove6' + el).remove();
        }

    }

    function lookup(arg) {
        var id = arg.getAttribute('id');
        var value = arg.value;
        // do your stuff
        alert(id);
    }


    var lenghtOfAntiBio1 = "";
    var lenghtOfAntiBio2 = "";
    var lenghtOfAntiBio3 = "";
    var lenghtOfAntiBio4 = "";
    var lenghtOfAntiBio5 = "";
    var lenghtOfAntiBio6 = "";
    var lenghtOfAntiBio7 = "";
    var a1 = "";
    var a2 = "";
    var a3 = "";
    var a4 = "";
    var a5 = "";
    var a6 = "";
    var a7 = "";

    // getCountOfAntiBio
    function getCountOfAntiBio(val) {
        let id = val.getAttribute('id');

        //  console.log(count);

        for (i = 0; i <= count; i++) {
            if (id == 'phlebitis_antibiotic' + i) {
                // alert("here in if");
                var phlebitisAnti = 'phlebitis_antibiotic' + i;
                var phlebitisMdrName = 'phlebitis_mdr_name' + i;
            }
        }
        for (j = 0; j <= count1; j++) {
            if (id == 'urinary_antibiotic' + j) {

                var urinaryAnti = 'urinary_antibiotic' + j;
                var urinaryMdrName = 'urinary_mdr_name' + j;
            }
        }
        for (k = 0; k <= count2; k++) {

            if (id == 'central_antibiotic' + k) {
                var centralAnti = 'central_antibiotic' + k;
                var centralMdrName = 'central_mdr_name' + k;
            }
        }
        for (a = 0; a <= count3; a++) {
            if (id == 'hospital_antibiotic' + a) {
                var hospitalAnti = 'hospital_antibiotic' + a;
                var hospitalMdrName = 'hospital_mdr_name' + a;
            }
        }
        for (b = 0; b <= count4; b++) {
            if (id == 'ventilator_antibiotic' + b) {
                var ventilatorAnti = 'ventilator_antibiotic' + b;
                var ventilatorMdrName = 'ventilator_mdr_name' + b;
            }
        }
        for (c = 0; c <= count5; c++) {
            if (id == 'surgical_antibiotic' + c) {
                var surgicalAnti = 'surgical_antibiotic' + c;
                var surgicalMdrName = 'surgical_mdr_name' + c;
            }
        }
        for (d = 0; d <= count6; d++) {
            if (id == 'culture_report_antibiotic' + d) {
                var cultureAnti = 'culture_report_antibiotic' + d;
                var cultureMdrName = 'culture_report_mdr_name' + d;
            }
        }
        // console.log(phlebitisAnti);
        var countSelectedPhlebiti = $("#" + phlebitisAnti + " :selected").length;


        if (phlebitisAnti != null) {

            if (countSelectedPhlebiti == lenghtOfAntiBio1) {
                document.getElementById(phlebitisMdrName).value = a1;
            } else {
                document.getElementById(phlebitisMdrName).value = "";
            }
        }

        var countSelectedUrinary = $("#" + urinaryAnti + " :selected").length;

        if (urinaryAnti != null) {

            if (countSelectedUrinary == lenghtOfAntiBio2) {
                document.getElementById(urinaryMdrName).value = a2;
            } else {
                document.getElementById(urinaryMdrName).value = "";
            }
        }
        var countSelectedCentral = $("#" + centralAnti + " :selected").length;

        if (centralAnti != null) {

            if (countSelectedCentral == lenghtOfAntiBio3) {
                document.getElementById(centralMdrName).value = a3;
            } else {
                document.getElementById(centralMdrName).value = "";
            }
        }

        var countSelectedHostipal = $("#" + hospitalAnti + " :selected").length;

        if (hospitalAnti != null) {

            if (countSelectedHostipal == lenghtOfAntiBio4) {
                document.getElementById(hospitalMdrName).value = a4;
            } else {
                document.getElementById(hospitalMdrName).value = "";
            }
        }

        var countSelectedventilator = $("#" + ventilatorAnti + " :selected").length;

        if (ventilatorAnti != null) {

            if (countSelectedventilator == lenghtOfAntiBio5) {
                document.getElementById(ventilatorMdrName).value = a5;
            } else {
                document.getElementById(ventilatorMdrName).value = "";
            }
        }
        var countSelectedSurgical = $("#" + surgicalAnti + " :selected").length;

        if (surgicalAnti != null) {

            if (countSelectedSurgical == lenghtOfAntiBio6) {
                document.getElementById(surgicalMdrName).value = a6;
            } else {
                document.getElementById(surgicalMdrName).value = "";
            }
        }
        var countSelectedCult = $("#" + cultureAnti + " :selected").length;
        console.log(cultureAnti);
        if (cultureAnti != null) {

            if (countSelectedCult == lenghtOfAntiBio7) {
                document.getElementById(cultureMdrName).value = a7;
            } else {
                document.getElementById(cultureMdrName).value = "";
            }
        }
    }
    // getAntibiotics
    function getAntibiotics(val) {
        var id = val.getAttribute('id');
        var value = val.value;
        // do your stuff
        for (i = 0; i <= count; i++) {
            if (id == 'phlebitis_organism' + i) {
                var phlebitisAnti = 'phlebitis_antibiotic' + i;
                var phlebitisMdrName = 'phlebitis_mdr_name' + i;
            }
        }
        for (j = 0; j <= count1; j++) {
            if (id == 'urinary_organism' + j) {
                var urinaryAnti = 'urinary_antibiotic' + j;
                var urinaryMdrName = 'urinary_mdr_name' + j;
            }
        }
        for (k = 0; k <= count2; k++) {
            if (id == 'central_organism' + k) {
                var centralAnti = 'central_antibiotic' + k;
                var centralMdrName = 'central_mdr_name' + k;
            }
        }
        for (a = 0; a <= count3; a++) {
            if (id == 'hospital_organism' + a) {
                var hospitalAnti = 'hospital_antibiotic' + a;
                var hospitalMdrName = 'hospital_mdr_name' + a;
            }
        }
        for (b = 0; b <= count4; b++) {
            if (id == 'ventilator_organism' + b) {
                var ventilatorAnti = 'ventilator_antibiotic' + b;
                var ventilatorMdrName = 'ventilator_mdr_name' + b;
            }
        }
        for (c = 0; c <= count5; c++) {
            if (id == 'surgical_organism' + c) {
                var surgicalAnti = 'surgical_antibiotic' + c;
                var surgicalMdrName = 'surgical_mdr_name' + c;
            }
        }

        for (d = 0; d <= count6; d++) {
            if (id == 'culture_report_organism' + d) {
                var cultureAnti = 'culture_report_antibiotic' + d;
                var cultureMdrName = 'culture_report_mdr_name' + d;
            }
        }
        // console.log(phlebitisAnti);
        //alert(urinaryAnti);
        //alert(urinaryMdrName);


        // var data = $("#").serialize();
        var data = {
            organism_name: value
        };
        $.ajax({
            url: baseurl + 'get_antibiotic',
            type: 'POST',
            data: data,
            success: function(result) {

                //var result = jQuery.parseJSON(result);
                if (result) {
                    var result = jQuery.parseJSON(result);
                    console.log(result);

                    if (phlebitisAnti != null) {
                        let arr = [];
                        arr[0] = result.antibiotic_class_1;
                        arr[1] = result.antibiotic_class_2;
                        arr[2] = result.antibiotic_class_3;
                        arr[3] = result.antibiotic_class_4;
                        arr[4] = result.antibiotic_class_5;
                        arr[5] = result.antibiotic_class_6;
                        arr[6] = result.antibiotic_class_7;
                        arr[7] = result.antibiotic_class_8;
                        arr[8] = result.antibiotic_class_9;
                        let antibiotic = "";
                        for (let i = 0; i <= 8; i++) {


                            if (arr[i] == "") {


                            } else {
                                antibiotic += `<option value='${arr[i]}'>${arr[i]}</option>`;
                            }

                        }

                        document.getElementById(phlebitisAnti).innerHTML = antibiotic;
                        //   a1=  document.getElementById(phlebitisMdrName);
                        a1 = result.mbr_name;
                        //  alert(a1);
                        lenghtOfAntiBio1 = document.getElementById(phlebitisAnti).options.length;

                    }
                    if (urinaryAnti != null) {
                        let arr = [];
                        arr[0] = result.antibiotic_class_1;
                        arr[1] = result.antibiotic_class_2;
                        arr[2] = result.antibiotic_class_3;
                        arr[3] = result.antibiotic_class_4;
                        arr[4] = result.antibiotic_class_5;
                        arr[5] = result.antibiotic_class_6;
                        arr[6] = result.antibiotic_class_7;
                        arr[7] = result.antibiotic_class_8;
                        arr[8] = result.antibiotic_class_9;
                        let antibiotic = "";
                        for (let i = 0; i <= 8; i++) {


                            if (arr[i] == "") {


                            } else {
                                antibiotic += `<option value='${arr[i]}'>${arr[i]}</option>`;
                            }

                        }
                        document.getElementById(urinaryAnti).innerHTML = antibiotic;
                        a2 = result.mbr_name;
                        lenghtOfAntiBio2 = document.getElementById(urinaryAnti).options.length;
                    }
                    if (centralAnti != null) {
                        let arr = [];
                        arr[0] = result.antibiotic_class_1;
                        arr[1] = result.antibiotic_class_2;
                        arr[2] = result.antibiotic_class_3;
                        arr[3] = result.antibiotic_class_4;
                        arr[4] = result.antibiotic_class_5;
                        arr[5] = result.antibiotic_class_6;
                        arr[6] = result.antibiotic_class_7;
                        arr[7] = result.antibiotic_class_8;
                        arr[8] = result.antibiotic_class_9;
                        let antibiotic = "";
                        for (let i = 0; i <= 8; i++) {


                            if (arr[i] == "") {


                            } else {
                                antibiotic += `<option value='${arr[i]}'>${arr[i]}</option>`;
                            }

                        }
                        document.getElementById(centralAnti).innerHTML = antibiotic;
                        lenghtOfAntiBio3 = document.getElementById(centralAnti).options.length;
                        a3 = result.mbr_name;
                        console.log(result.mbr_name);
                    }
                    if (hospitalAnti != null) {
                        let arr = [];
                        arr[0] = result.antibiotic_class_1;
                        arr[1] = result.antibiotic_class_2;
                        arr[2] = result.antibiotic_class_3;
                        arr[3] = result.antibiotic_class_4;
                        arr[4] = result.antibiotic_class_5;
                        arr[5] = result.antibiotic_class_6;
                        arr[6] = result.antibiotic_class_7;
                        arr[7] = result.antibiotic_class_8;
                        arr[8] = result.antibiotic_class_9;
                        let antibiotic = "";
                        for (let i = 0; i <= 8; i++) {


                            if (arr[i] == "") {


                            } else {
                                antibiotic += `<option value='${arr[i]}'>${arr[i]}</option>`;
                            }

                        }
                        document.getElementById(hospitalAnti).innerHTML = antibiotic;

                        a4 = result.mbr_name;
                        lenghtOfAntiBio4 = document.getElementById(hospitalAnti).options.length;
                        console.log(result.mbr_name);
                    }
                    if (ventilatorAnti != null) {
                        let arr = [];
                        arr[0] = result.antibiotic_class_1;
                        arr[1] = result.antibiotic_class_2;
                        arr[2] = result.antibiotic_class_3;
                        arr[3] = result.antibiotic_class_4;
                        arr[4] = result.antibiotic_class_5;
                        arr[5] = result.antibiotic_class_6;
                        arr[6] = result.antibiotic_class_7;
                        arr[7] = result.antibiotic_class_8;
                        arr[8] = result.antibiotic_class_9;
                        let antibiotic = "";
                        for (let i = 0; i <= 8; i++) {


                            if (arr[i] == "") {


                            } else {
                                antibiotic += `<option value='${arr[i]}'>${arr[i]}</option>`;
                            }

                        }
                        document.getElementById(ventilatorAnti).innerHTML = antibiotic;

                        a5 = result.mbr_name;
                        console.log(result.mbr_name);
                        lenghtOfAntiBio5 = document.getElementById(ventilatorAnti).options.length;
                    }
                    if (surgicalAnti != null) {
                        let arr = [];
                        arr[0] = result.antibiotic_class_1;
                        arr[1] = result.antibiotic_class_2;
                        arr[2] = result.antibiotic_class_3;
                        arr[3] = result.antibiotic_class_4;
                        arr[4] = result.antibiotic_class_5;
                        arr[5] = result.antibiotic_class_6;
                        arr[6] = result.antibiotic_class_7;
                        arr[7] = result.antibiotic_class_8;
                        arr[8] = result.antibiotic_class_9;
                        let antibiotic = "";
                        for (let i = 0; i <= 8; i++) {


                            if (arr[i] == "") {


                            } else {
                                antibiotic += `<option value='${arr[i]}'>${arr[i]}</option>`;
                            }

                        }
                        document.getElementById(surgicalAnti).innerHTML = antibiotic;

                        a6 = result.mbr_name;
                        console.log(result.mbr_name);
                        lenghtOfAntiBio6 = document.getElementById(surgicalAnti).options.length;
                    }
                    if (cultureAnti != null) {
                        let arr = [];
                        arr[0] = result.antibiotic_class_1;
                        arr[1] = result.antibiotic_class_2;
                        arr[2] = result.antibiotic_class_3;
                        arr[3] = result.antibiotic_class_4;
                        arr[4] = result.antibiotic_class_5;
                        arr[5] = result.antibiotic_class_6;
                        arr[6] = result.antibiotic_class_7;
                        arr[7] = result.antibiotic_class_8;
                        arr[8] = result.antibiotic_class_9;
                        let antibiotic = "";
                        for (let i = 0; i <= 8; i++) {


                            if (arr[i] == "") {


                            } else {
                                antibiotic += `<option value='${arr[i]}'>${arr[i]}</option>`;
                            }

                        }
                        console.log(antibiotic);
                        document.getElementById(cultureAnti).innerHTML = antibiotic;

                        a7 = result.mbr_name;
                        console.log(result.mbr_name);
                        lenghtOfAntiBio7 = document.getElementById(cultureAnti).options.length;
                    }
                }


                // $('#order_total_amount').text(Math.round(total_amount));

            },
            error: function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            }
        });

    }
    // ShowPhlebitisDiv
    function ShowPhlebitisDiv(val) {
        let id = val.getAttribute('id');
        let resultVal = val.value;

        let phlebitisDiv = "phlebitis_div" + id;

        if (resultVal == "") {
            document.getElementById(phlebitisDiv).style.display = "none";
        } else if (resultVal == "Pending") {
            document.getElementById(phlebitisDiv).style.display = "none";
        } else {
            document.getElementById(phlebitisDiv).style.display = "block";
        }
    }
    // ShowUrinaryDiv
    function ShowUrinaryDiv(val) {
        let id = val.getAttribute('id');
        let resultVal = val.value;
        let urinaryDiv = "urinary_div" + id;
        if (resultVal == "") {
            document.getElementById(urinaryDiv).style.display = "none";
        } else if (resultVal == "Pending") {
            document.getElementById(urinaryDiv).style.display = "none";
        } else {
            document.getElementById(urinaryDiv).style.display = "block";
        }


    }
    // ShowCentralDiv
    function ShowCentralDiv(val) {
        let id = val.getAttribute('id');
        let resultVal = val.value;
        let centralDiv = "central_div" + id;
        if (resultVal == "") {
            document.getElementById(centralDiv).style.display = "none";
        } else if (resultVal == "Pending") {
            document.getElementById(centralDiv).style.display = "none";
        } else {
            document.getElementById(centralDiv).style.display = "block";
        }


    }
    // ShowHospitalDiv
    function ShowHospitalDiv(val) {
        let id = val.getAttribute('id');
        let resultVal = val.value;
        let hospital = "hospital_div" + id;
        if (resultVal == "") {
            document.getElementById(hospital).style.display = "none";
        } else if (resultVal == "Pending") {
            document.getElementById(hospital).style.display = "none";
        } else {
            document.getElementById(hospital).style.display = "block";
        }


    }
    // ShowVentilatorDiv
    function ShowVentilatorDiv(val) {
        let id = val.getAttribute('id');
        let resultVal = val.value;
        let ventilator = "ventilator_div" + id;
        if (resultVal == "") {
            document.getElementById(ventilator).style.display = "none";
        } else if (resultVal == "Pending") {
            document.getElementById(ventilator).style.display = "none";
        } else {
            document.getElementById(ventilator).style.display = "block";
        }


    }
    // ShowSurgicalDiv
    function ShowSurgicalDiv(val) {
        let id = val.getAttribute('id');
        let resultVal = val.value;
        let surgical = "surgical_div" + id;
        if (resultVal == "") {
            document.getElementById(surgical).style.display = "none";
        } else if (resultVal == "Pending") {
            document.getElementById(surgical).style.display = "none";
        } else {
            document.getElementById(surgical).style.display = "block";
        }


    }

    function ShowCultureReportDiv(val) {
        let id = val.getAttribute('id');
        let resultVal = val.value;
        let cultureReport = "culture_report_div" + id;
        if (resultVal == "") {
            document.getElementById(cultureReport).style.display = "none";
        } else if (resultVal == "Pending") {
            document.getElementById(cultureReport).style.display = "none";
        } else {
            document.getElementById(cultureReport).style.display = "block";
        }


    }
</script>