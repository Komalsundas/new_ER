@extends('layouts.app2')
@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include the datepicker library CSS and JavaScript files -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include the datepicker library CSS and JavaScript files -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- DataTables js and css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<script src="{{asset('js/jquery.validate.min.js')}}"></script>

<style>
    .custom-card {
        border: 1px solid #584a4a;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        /* Increased shadow size */
        transition: 0.3s;
        padding: 20px;
        width: 8000px;
    }

    .custom-card:hover {
        box-shadow: 0 12px 20px 0 rgba(0, 0, 0, 0.2);
        /* Increased shadow size on hover */
    }

    .form-control {
        border: 1px solid #a3a3a3;
        /* Border for the input fields */
        padding: 10px;
        border-radius: 5px;
        /* Rounded corners for the input fields */
        transition: 0.3s;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        /* Add box shadow for a 3D effect */
    }
</style>
<style>
    .icon-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 5px 5px;
        border-radius: 5px;
        font-size: 15px;
    }

    .icon-button:hover {
        background-color: #08b116;
    }

    .icon {
        margin-right: 2px;
        font-size: 15px;
    }
</style>

<script type="text/javascript">
    $(function () {
        var years = $(".completion_year");
        var currentYear = (new Date()).getFullYear();
        for (var i = currentYear; i >= 2000; i--) {
            var option = $("<option />");
            option.html(i);
            option.val(i);
            years.append(option);
        }
    });
</script>

<!--Body:Content-->
<div class="div1  d-flex align-items-start">
    <ul class="nav nav-tabs mb-3 mr-4 py-4 px-3 d-flex flex-column" id="myTab0" role="tablist" style="background-color: rgba(0,0,0,0.05); border-radius: 4px; white-space: nowrap;
        position: sticky; top: 110px; z-index: 1;">
        <li class="nav-item active mb-2" role="presentation">
            <button class="nav-link text-left w-100" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                type="button" role="tab" aria-controls="home" aria-selected="true"
                style="font-family: Georgia, serif;">
                Applicant Information
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-left w-100 " id="education-tab" data-bs-toggle="tab" data-bs-target="#education"
                type="button" role="tab" aria-controls="education" aria-selected="false"
                style="font-family: Georgia, serif;">
                Eduaction
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-left w-100" id="employement-tab" data-bs-toggle="tab" data-bs-target="#employement"
                type="button" role="tab" aria-controls="employement" aria-selected="false"
                style="font-family: Georgia, serif;">
                Previous Employement
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-left w-100" id="training-tab" data-bs-toggle="tab" data-bs-target="#training"
                type="button" role="tab" aria-controls="training" aria-selected="false"
                style="font-family: Georgia, serif;">
                Experience/Training
            </button>
        </li>
    </ul>
    <br>
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data" id="job-form">
        @csrf
        <div class="tab-content px-4 py-3" id="myTabContent0"
            style="background-color: rgba(0,0,0,0.05); border-radius: 4px;">

            <!-- Applicant Information -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <fieldset class="border p-1" style="max-width: 9020px;">
                    <legend class="float-none w-auto p-2"
                        style="font-weight: bold; font-size: 16px; font-family: 'Georgia, serif;">PERSONAL DETAILS
                    </legend>
                    <div class="row g-1">
                        <div class="col-md-3">
                            <label for="fullName" class="form-label fw-bold small">Full Name</label>
                            <input type="text" class="form-control form-control-sm" id="fullName" name="name" required>
                        </div>
                        <div class="col-md-3">
                            <label for="cid" class="form-label fw-bold small">CID</label>
                            <input type="text" class="form-control form-control-sm" id="cid" name="cid">
                        </div>
                        <div class="col-md-3">
                            <label for="dob" class="form-label fw-bold small">DOB</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar"></i>
                                </span>
                                <input type="text" class="form-control form-control-sm" id="dob" name="dob">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="gender" class="form-label fw-bold small">Gender</label>
                            <select class="form-select form-select-sm" id="gender" name="gender">
                                <option selected>Select One</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="contactNumber" class="form-label fw-bold small">Contact Number</label>
                            <div class="input-group">
                                <div class="input-group-text" style="font-size: x-small;">975</div>
                                <input type="text" class="form-control form-control-sm" id="contactNumber"
                                    name="contact">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="form-label fw-bold small">Email</label>
                            <input type="text" class="form-control form-control-sm" id="email" name="email">
                        </div>
                        <div class="col-md-3">
                            <label for="passport" class="form-label fw-bold small">Passport size Photo</label>
                            <input type="file" class="form-control form-control-sm" id="coverLetter"
                                accept="image/png, image/jpeg" name="passport_photo">
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset class="border p-1">
                    <legend class="float-none w-auto p-2"
                        style="font-weight: bold; font-size: 16px; font-family: 'Georgia, serif;">ADDRESS</legend>
                    <div class="row g-1">
                        <div class="col-md-3">
                            <label for="dzongkhag" class="form-label fw-bold small">Dzongkhag</label>
                            <input type="text" class="form-control form-control-sm" id="dzongkhag" name="dzongkhag">
                        </div>
                        <div class="col-md-3">
                            <label for="gewog" class="form-label fw-bold small">Gewog</label>
                            <input type="text" class="form-control form-control-sm" id="gewog" name="gewog">
                        </div>
                        <div class="col-md-3">
                            <label for="village" class="form-label fw-bold small">Village</label>
                            <input type="text" class="form-control form-control-sm" id="village" name="village">
                        </div>
                        <div class="col-md-3">
                            <label for="present_address" class="form-label fw-bold small">Present Address</label>
                            <input type="text" class="form-control form-control-sm" id="present_address"
                                name="present_address">
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset class="border p-1">
                    <legend class="float-none w-auto p-2"
                        style="font-weight: bold; font-size: 16px; font-family: 'Georgia, serif;">DOCUMENTS TO BE
                        ATTACHED
                    </legend>
                    <div class="row g-1">
                        <div class="col-md-3">
                            <label for="coverLetter" class="form-label fw-bold small">Cover Letter</label>
                            <input type="file" class="form-control form-control-sm" id="coverLetter" name="coverletter"
                                accept=".pdf">
                        </div>
                        <div class="col-md-3">
                            <label for="cidAttachment" class="form-label fw-bold small">CID</label>
                            <input type="file" class="form-control form-control-sm" id="cidAttachment" name="cidcopy"
                                accept=".pdf">
                        </div>
                        <div class="col-md-3">
                            <label for="cvAttachment" class="form-label fw-bold small">CV</label>
                            <input type="file" class="form-control form-control-sm" id="cvAttachment" name="cv"
                                accept=".pdf">
                        </div>

                            <div class="col-md-3">
                                <label for="medicalCertificate" class="form-label fw-bold small">Medical
                                    Certificate</label>
                                <input type="file" class="form-control form-control-sm" id="medicalCertificate"
                                    name="mc">
                            </div>
                        </div><br>
                        <!-- Add a "Proceed" button here -->
                        <div style="text-align: right;">
                            <button type="button" class="btn btn-success btn-sm" id="proceedButton"
                                style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #4CAF50; color: white;">Proceed</button>
                        </div>
            </div>

            <!-- Education -->
            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                <fieldset class="border p-4" style="width: 103%;">
                    <!-- Class X -->
                    <legend class="float-none w-auto p-2"
                        style="font-weight: bold; font-size: 16px; font-family: 'Georgia, serif;">EDUCATION DETAILS
                    </legend>
                    <p>Class X</p>
                    <div class="form-row align-items-center">
                        <div class="col-5">
                            <label for="schoolName" class="form-label fw-bold small">School Name</label>
                            <input type="text" class="form-control mb-2" id="schoolName" placeholder="Enter school name"
                                name="x_institute">
                        </div>
                        <div class="col-3">
                            <label for="x_year" class="form-label fw-bold small">Completion year</label>
                            <select class="form-select mb-2 completion_year" id="x_year" name="x_year">
                                <option selected>Select Completion Year</option>
                            </select>
                        </div>
                        <div class="col-md-4 d-flex flex-column">
                            <label for="cidAttachment" class="form-label fw-bold small align-self-start">Class X
                                marksheet</label>
                            <input type="file" class="form-control form-control-sm align-self-end"
                                id="cidAttachment" placeholder="Select Marksheet" name="x_marksheet">
                        </div>
                    </div>
                    <p style="font-size: 15px; font-family: 'Georgia, serif; color: #555; margin-left: 20px;">
                        &#8226; Percentage is calculated based on English + best 4 subjects.<br>
                        &#8226; Please input the subject mark as 0 if you have not taken the subject.
                    </p>

                    <div class="row g-2">
                        <div class="col-md-1">
                            <label for="subject" class="form-label fw-bold small">Subject</label>
                            <label for="subject" class="form-label fw-bold small">Marks</label>
                        </div>
                        <div class="col-md-1">
                            <label for="eng" class="form-label fw-bold small">English</label>
                            <input type="text" class="form-control form-control-sm xmark" id="eng" name="x_eng">
                        </div>
                        <div class="col-md-1">
                            <label for="dzo" class="form-label fw-bold small">Dzongkha</label>
                            <input type="text" class="form-control form-control-sm xmark" id="dzo" name="x_dzo">
                        </div>
                        <div class="col-md-1">
                            <label for="mat" class="form-label fw-bold small">Math</label>
                            <input type="text" class="form-control form-control-sm xmark" id="mat" name="x_mat">
                        </div>
                        <div class="col-md-1">
                            <label for="phy" class="form-label fw-bold small">Physics</label>
                            <input type="text" class="form-control form-control-sm xmark" id="phy" name="x_phy">
                        </div>
                        <div class="col-md-1">
                            <label for="che" class="form-label fw-bold small">Chemistry</label>
                            <input type="text" class="form-control form-control-sm xmark" id="che" name="x_che">
                        </div>
                        <div class="col-md-1">
                            <label for="bio" class="form-label fw-bold small">Biology</label>
                            <input type="text" class="form-control form-control-sm xmark" id="bio" name="x_bio">
                        </div>
                        <div class="col-md-1">
                            <label for="eco" class="form-label fw-bold small">Economics</label>
                            <input type="text" class="form-control form-control-sm xmark" id="eco" name="x_eco">
                        </div>
                        <div class="col-md-1">
                            <label for="his" class="form-label fw-bold small">History</label>
                            <input type="text" class="form-control form-control-sm xmark" id="his" name="x_his">
                        </div>
                        <div class="col-md-1">
                            <label for="geo" class="form-label fw-bold small">Geography</label>
                            <input type="text" class="form-control form-control-sm xmark" id="geo" name="x_geo">
                        </div>
                        <div class="col-md-1 text-center">
                            <label for="it" class="form-label fw-bold small">IT</label>
                            <input type="text" class="form-control form-control-sm xmark" id="it" name="x_it">
                        </div>
                        <div class="col-md-1">
                            <label for="percentage" class="form-label fw-bold small">Percentage</label>
                            <input type="text" class="form-control form-control-sm xmark" id="percent" readonly
                                name="x_percentage">
                        </div>
                        <hr>
                        {{-- For Class XII --}}
                        <legend class="float-none w-auto p-2"
                            style="font-weight: bold; font-size: 13px; font-family: 'Georgia, serif;">CLASS XII</legend>
                        <div class="form-row align-items-center">
                            <div class="col-5">
                                <label for="schoolName" class="form-label fw-bold small">School Name</label>
                                <input type="text" class="form-control mb-2" id="schoolName"
                                    placeholder="Enter school name" name="xii_institute">
                            </div>
                            <div class="col-3">
                                <label for="completionYear" class="form-label fw-bold small">Completion year</label>
                                <input type="text" class="form-control mb-2" id="Please"
                                    placeholder="Enter completion year" name="xii_year">
                            </div>
                            <div class="col-md-4 d-flex flex-column">
                                <label for="cidAttachment" class="form-label fw-bold small align-self-start">Class XII
                                    marksheet</label>
                                <input type="file" class="form-control form-control-sm align-self-end"
                                    id="cidAttachment" placeholder="Select Marksheet" name="xii_marksheet">
                            </div>
                        </div>
                        <p style="font-size: 15px; font-family: 'Georgia, serif; color: #555; margin-left: 20px;">
                            &#8226; Percentage is calculated based on English + best 3 subjects.<br>
                            &#8226; Please input the subject mark as 0 if you have not taken the subject.
                        </p>
                        <br>
                        <legend class="float-none w-auto p-1"
                            style="font-weight: bold; font-size: 13px; font-family: 'Georgia, serif;">STREAM</legend>
                        <div class="d-flex" style="gap: 0;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input stream" type="radio" name="stream" id="scienceRadio"
                                    value="S" onclick="showField('S')">
                                <label class="form-check-label" for="scienceRadio">Science</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input stream" type="radio" name="stream" id="commerceRadio"
                                    value="C" onclick="showField('C')">
                                <label class="form-check-label" for="commerceRadio">Commerce</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input stream" type="radio" name="stream" id="artsRadio"
                                    value="A" onclick="showField('A')">
                                <label class="form-check-label" for="artsRadio">Arts</label>
                                
                            </div>
                        </div>
                        <!-- Forms for each stream -->

                        <!-- Forms for each stream -->
                        <div id="scienceForm">
                            <div class="row g-2">
                                <div class="col-md-1">
                                    <label for="subject" class="form-label fw-bold small">Subject</label>
                                    <label for="marks" class="form-label fw-bold small">Marks</label>
                                </div>
                                <div class="col-md-1" id="eng_div">
                                    <label for="eng" class="form-label fw-bold small ">English</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_eng"
                                        name='xii_eng'>
                                </div>
                                <div class="col-md-1">
                                    <label for="dzo" class="form-label fw-bold small">Dzongkha</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_dzo"
                                        name='xii_dzo'>
                                </div>
                                <div class="col-md-1">
                                    <label for="mat" class="form-label fw-bold small">Math</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_mat"
                                        name='xii_mat'>
                                </div>
                                <div class="col-md-1" id="phy_div">
                                    <label for="phy" class="form-label fw-bold small">Physic</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_phy"
                                        name='xii_phy'>
                                </div>
                                <div class="col-md-1" id="che_div">
                                    <label for="che" class="form-label fw-bold small">Chemistry</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_che"
                                        name='xii_che'>
                                </div>
                                <div class="col-md-1" id="bio_div">
                                    <label for="bio" class="form-label fw-bold small">Biology</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_bio"
                                        name='xii_bio'>
                                </div>
                                <div class="col-md-1 text-center">
                                    <label for="it" class="form-label fw-bold small">IT</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_it"
                                        name='xii_it'>
                                </div>
                                <div class="col-md-1" id="com_div">
                                    <label for="com" class="form-label fw-bold small">Commerce</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_com"
                                        name='xii_com'>
                                </div>
                                <div class="col-md-1" id="eco_div">
                                    <label for="eco" class="form-label fw-bold small">Economic</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_eco"
                                        name='xii_eco'>
                                </div>
                                <div class="col-md-1" id="acc_div">
                                    <label for="acc" class="form-label fw-bold small">Accountancy</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_acc"
                                        name='xii_acc'>
                                </div>
                                <div class="col-md-1" id="geo_div">
                                    <label for="geo" class="form-label fw-bold small">Geography</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_geo"
                                        name='xii_geo'>
                                </div>
                                <div class="col-md-1" id="his_div">
                                    <label for="his" class="form-label fw-bold small">History</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_his"
                                        name='xii_his'>
                                </div>
                                <div class="col-md-1">
                                    <label for="percentage" class="form-label fw-bold small">Percentage</label>
                                    <input type="text" class="form-control form-control-sm marks" id="xii_percent"
                                        name='xii_percent' readonly>
                                </div>
                            </div>
                        </div>
                        <script>
                            function showField(radio_val) {
                                clearField();
                                if (radio_val == "C") {
                                    $('#com_div').show();
                                    $('#eco_div').show();
                                    $('#acc_div').show();

                                    $('#phy_div').hide();
                                    $('#che_div').hide();
                                    $('#bio_div').hide();
                                    $('#geo_div').hide();
                                    $('#his_div').hide();
                                } else if (radio_val == "A") {
                                    $('#com_div').hide();
                                    $('#eco_div').hide();
                                    $('#acc_div').hide();
                                    $('#phy_div').hide();
                                    $('#che_div').hide();
                                    $('#bio_div').hide();

                                    $('#geo_div').show();
                                    $('#his_div').show();
                                } else {
                                    $('#com_div').hide();
                                    $('#eco_div').hide();
                                    $('#acc_div').hide();
                                    $('#geo_div').hide();
                                    $('#his_div').hide();

                                    $('#phy_div').show();
                                    $('#che_div').show();
                                    $('#bio_div').show();
                                }

                                function clearField() {
                                    $('#xii_eng').val('');
                                    $('#xii_dzo').val('');
                                    $('#xii_mat').val('');
                                    $('#xii_phy').val('');
                                    $('#xii_che').val('');
                                    $('#xii_bio').val('');
                                    $('#xii_it').val('');
                                    $('#xii_com').val('');
                                    $('#xii_eco').val('');
                                    $('#xii_acc').val('');
                                    $('#xii_geo').val('');
                                    $('#xii_his').val('');
                                    $('#xii_percent').val('');
                                }
                            }
                        </script>
                        <hr>
                        {{-- For Class Degree --}}
                        <legend class="float-none w-auto p-1"
                            style="font-weight: bold; font-size: 13px; font-family: 'Georgia, serif;">DEGREE</legend>
                        <div class="form-row align-items-center">
                            <div class="col-4">
                                <label for="university" class="form-label fw-bold small">University Name</label>
                                <input type="text" class="form-control mb-2" id="schoolName"
                                    placeholder="Enter university name" name="degree_institute">
                            </div>
                            <div class="col-3">
                                <label for="courseName" class="form-label fw-bold small">Course Name</label>
                                <input type="text" class="form-control mb-2" id="Please"
                                    placeholder="Enter course name" name="degree_course">
                            </div>
                            <div class="col-2">
                                <label for="completionYear" class="form-label fw-bold small">Completion year</label>
                                <input type="text" class="form-control mb-2" id="Please"
                                    placeholder="Completion year" name="degree_year">
                            </div>
                            <div class="col-md-1">
                                <label for="percentage" class="form-label fw-bold small">Percentage</label>
                                <input type="text" class="form-control form-control-sm marks" id="degree_percent"
                                    name='degree_percentage'>
                            </div>
                            <div class="col-md-3 d-flex flex-column">
                                <label for="marksheetAttachment" class="form-label fw-bold small align-self-start">Degree
                                    Marksheet</label>
                                <input type="file" class="form-control form-control-sm align-self-end"
                                    id="marksheetAttachment" placeholder="Select Marksheet" name="degree_marksheet">
                            </div>
                        </div>
                        <br>
                        <div style="text-align: right;">
                            <button type="button" class="btn btn-secondary" id="backToproceedButton"
                                style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #7d7d7d; color: white;">Back</button>

                        <button type="button" class="btn btn-success" id="nextToEmployement"
                            style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #4CAF50; color: white;">Next</button>
                    </div>
                </fieldset>
            </div>
            <!-- Previous Employment -->
            <div class="tab-pane fade" id="exp0" role="tabpanel" aria-labelledby="exp-tab0">
                {{-- <div> --}}
                    <div class="container mt-4">
                        <p>Experience</p>
                        <div class="table-responsive">
                            <table class="table table-bordered experienceTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Company</th>
                                        <th scope="col">Position</th>
                                        <th scope="col" colspan="2" class="text-center">Period</th>
                                        <th scope="col" colspan="1">Place</th>
                                        <th scope="col" colspan="1">Reason to Change</th>
                                        <th scope="col">Supporting Dcouments(IF ANY)</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <td><input class="form-control" type="text" name="company[]"
                                                placeholder="Company"></td>
                                        <td><input class="form-control" type="text" name="position[]"
                                                placeholder="Position"></td>
                                        <td><input class="form-control" type="text" name="from[]"
                                                placeholder="From"></td>
                                        <td><input class="form-control" type="text" name="to[]" placeholder="To">
                                        </td>
                                        <td><input class="form-control" type="text" name="place[]"
                                                placeholder="Place"></td>
                                        <td><input class="form-control" type="text" name="reason[]"
                                                placeholder="Reason to Change"></td>
                                        <td><input type="file" class="form-control-file" name="document[]"></td>
                                        <td></td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="text-left">
                            <button class="btn btn-primary btn-sm" id="insertRowExp">
                                <i class="fas fa-plus"></i> <span
                                    style="font-family: 'Georgia', serif; font-weight: bold; font-size: 12px;">Add
                                    More</span>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="disclaimerModal" tabindex="-1" role="dialog"
                            aria-labelledby="disclaimerModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="disclaimerModalLabel"
                                            style="font-family: 'Georgia, serif; font-weight: bold;">Affirmation</h5>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Add your disclaimer content here -->
                                        {{-- <h5>Affirmation</h5> --}}
                                        <ul style="font-family: 'Georgia, serif; font-size: 14px;">
                                            <li>🚫 Not Convicted of a criminal offence</li>
                                            <li>🚫 Not Terminated or compulsorily retired from any agency except in case
                                                of insolvency</li>
                                            <li>🚫 Not Adjudged medically unfit for employment by a registered medical
                                                practitioner</li>
                                        </ul>
                                        <div class="form-check" style="display: flex; align-items: center;">
                                            <input type="checkbox" class="form-check-input" id="agreeCheckbox">
                                            <label class="form-check-label"
                                                style="font-family: 'Georgia, serif; font-size: 18px; margin-left: 5px;"
                                                for="agreeCheckbox">
                                                I certify that my answers are true and complete to the best of my
                                                knowledge, and I have not furnished fake/forged testimonials/documents.
                                            </label>
                                        </div>
                                        <p style="font-family: 'Georgia, serif; font-size: 18px; margin-top: 10px;">
                                            🤞If this application leads to employment, I understand that false or
                                            misleading information in my application or interview may result in my
                                            release.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary d-none"
                                            id="submitForm">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-2">
                            <button type="button" class="btn btn-secondary" id="backToPreviousEmployment"
                                style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #7d7d7d; color: white;">Back</button>

                            <button type="button" class="btn btn-success" id="openModalBtn"
                                style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #4CAF50; color: white;">Done</button>
                        </div>
                    </form>

                        <script>
                            $(document).ready(function() {
                                // $("#submitForm").click(function() {
                                //     alert($('table tbody tr').length);
                                //     // $("#disclaimerModal").modal("show");
                                // });

                                $("#openModalBtn").click(function() {
                                    alert($('table tbody tr').length);
                                    $("#disclaimerModal").modal("show");
                                });
                            });
                        </script>
                        {{-- script for submit buttom --}}
                        <script>
                            $("#agreeCheckbox").change(function() {
                                if ($(this).is(":checked")) {
                                    $("#submitForm").removeClass("d-none");
                                } else {
                                    $("#submitForm").addClass("d-none");
                                }
                            });
                        </script>
                        </fieldset>
                        {{-- 
                            </div>
                        </div> --}}
                    {{-- </div> --}}
                </div>
                <!-- script for adding new row in exprience-->
                <script>
                    $(function() {
                        // Start counting from the third row
                        var experienceCounter = 1;
                        $("#insertRowExp").on("click", function(event) {
                            event.preventDefault();

                            var newRow = $("<tr>");
                            var cols = '';

                            // Table columns

                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="company[]" placeholder="Company"></td>';
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="position[]" placeholder="Position"></td>';
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="from[]" placeholder="From"></td>'; // Change "period" to "from_period"
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="to[]" placeholder="To"></td>'; // Add "to_period" field
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="place[]" placeholder="Place"></td>';
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="reason[]" placeholder="Reason to Change"></td>'; // Change "reason to change" to "reason_to_change"
                            cols += '<td><input type="file" class="form-control-file" name="document[]"></td>';
                            cols +=
                                '<td><button class="btn btn-danger rounded-4 deleteRow"><i class="fa fa-trash"></i></button</td>';
                            // Insert the columns inside a row
                            newRow.append(cols);

                            // Insert the row inside the table
                            $("table").append(newRow);
                            // Increase counter after each row insertion
                            experienceCounter++;
                        });
                        // Remove row when delete btn is clicked
                        $("table").on("click", ".deleteRow", function(event) {
                            $(this).closest("tr").remove();
                            experienceCounter--;
                        });
                    });
                </script>
            </div>




        </div>
        <br>
        <script>
            $(document).ready(function() {
                // to check science radio by default
                $("#scienceRadio").prop("checked", true);
                var stream_val = $('input[name="stream"]:checked').val();
                if (stream_val == "S") {
                    $('#com_div').hide();
                    $('#eco_div').hide();
                    $('#acc_div').hide();
                    $('#geo_div').hide();
                    $('#his_div').hide();
                }

                $("#dob").datepicker({
                    dateFormat: "dd/mm/yy", // Set the desired date format
                    changeMonth: true,
                    changeYear: true,
                });
            });
        </script>
        {{-- script for proceed button --}}
        <script>
            // document.getElementById("proceedButton").addEventListener("click", function() {
            $('#proceedButton').click(function() {
                $('#profile-tab0').tab('show');
            });
        </script>
        <script>
            // Add an event listener to the "Proceed" button in the "Education" tab
            document.getElementById("proceedToPreviousEmployment").addEventListener("click", function() {
                // Activate the "Previous Employment" tab using Bootstrap's tab('show') method
                $('#exp-tab0').tab('show');
            });
        </script>
        <script>
            document.getElementById("backToproceedButton").addEventListener("click", function() {
                // Activate the "Applicant Information" tab using Bootstrap's tab('show') method
                $('#home-tab0').tab('show');
            });
            document.getElementById("backToPreviousEmployment").addEventListener("click", function() {
                // Activate the "Applicant Information" tab using Bootstrap's tab('show') method
                $('#profile-tab0').tab('show');
            });
        </script>
        {{-- script for marks calculation --}}
        <script>
            $(document).ready(function() {
                // Listen for changes in the input fields
                $('.xmark').on('input', function() {
                    // Get the marks for English and all subjects
                    var eng = parseFloat($('#eng').val()) || 0;
                    var dzo = parseFloat($('#dzo').val()) || 0;
                    var mat = parseFloat($('#mat').val()) || 0;
                    var phy = parseFloat($('#phy').val()) || 0;
                    var che = parseFloat($('#che').val()) || 0;
                    var bio = parseFloat($('#bio').val()) || 0;
                    var eco = parseFloat($('#eco').val()) || 0;
                    var his = parseFloat($('#his').val()) || 0;
                    var geo = parseFloat($('#geo').val()) || 0;
                    var it = parseFloat($('#it').val()) || 0;

                // Sort the subject marks in descending order
                var subjects = [dzo, mat, phy, che, bio, eco, his, geo, it];
                subjects.sort(function(a, b) {
                    return b - a;
                });

                // Calculate the total of the best four subjects
                var total = eng + subjects.slice(0, 4).reduce(function(a, b) {
                    return a + b;
                }, 0);

                // Calculate the percentage
                var percentage = (total / 500) * 100; // Assuming total marks for all subjects are 500

                    // Set the calculated percentage in the 'percent' input field
                    $('#percent').val(percentage.toFixed(2)); // Rounded to two decimal places
                });
            });
        </script>
        <!--For class 12 science-->
        <script>
            $(document).ready(function() {
                // Listen for changes in the input fields
                $('.marks').on('input', function() {
                    // Get the marks for English and all subjects
                    var eng = parseFloat($('#xii_eng').val()) || 0;
                    var dzo = parseFloat($('#xii_dzo').val()) || 0;
                    var mat = parseFloat($('#xii_mat').val()) || 0;
                    var phy = parseFloat($('#xii_phy').val()) || 0;
                    var che = parseFloat($('#xii_che').val()) || 0;
                    var bio = parseFloat($('#xii_bio').val()) || 0;
                    var it = parseFloat($('#xii_it').val()) || 0;
                    var geo = parseFloat($('#xii_geo').val()) || 0;
                    var his = parseFloat($('#xii_his').val()) || 0;
                    var com = parseFloat($('#xii_com').val()) || 0;
                    var acc = parseFloat($('#xii_acc').val()) || 0;
                    var eco = parseFloat($('#xii_eco').val()) || 0;

                var stream_val = $('input[name="stream"]:checked').val();
                if (stream_val == 'S') {
                    // Sort the subject marks in descending order
                    var subjects = [dzo, mat, phy, che, bio, it];
                } else if (stream_val == 'C') {
                    var subjects = [dzo, mat, com, eco, acc, it];
                } else {
                    var subjects = [dzo, mat, geo, his, it];
                }

                subjects.sort(function(a, b) {
                    return b - a;
                });

                // Calculate the total of the best four subjects
                var total = eng + subjects.slice(0, 3).reduce(function(a, b) {
                    return a + b;
                }, 0);

                // Calculate the percentage
                var percentage = (total / 400) * 100; // Assuming total marks for all subjects are 500

                    // Set the calculated percentage in the 'scipercent' input field
                    $('#xii_percent').val(percentage.toFixed(2)); // Rounded to two decimal places
                });
            });
        </script>

        <!--For class 12 commerce-->
        <script>
            $(document).ready(function() {

                // Listen for changes in the input fields
                $('.commersemark').on('input', function() {
                    // Get the marks for English and all subjects
                    var eng = parseFloat($('#comeng').val()) || 0;
                    var dzo = parseFloat($('#comdzo').val()) || 0;
                    var mat = parseFloat($('#commat').val()) || 0;
                    var com = parseFloat($('#comcom').val()) || 0;
                    var eco = parseFloat($('#comeco').val()) || 0;
                    var acc = parseFloat($('#comacc').val()) || 0;
                    var it = parseFloat($('#comit').val()) || 0;

                    // Sort the subject marks in descending order
                    var subjects = [dzo, mat, com, eco, acc, it];
                    subjects.sort(function(a, b) {
                        return b - a;
                    });

                    // Calculate the total of the best four subjects
                    var total = eng + subjects.slice(0, 3).reduce(function(a, b) {
                        return a + b;
                    }, 0);

                    // Calculate the percentage
                    var percentage = (total / 400) * 100; // Assuming total marks for all subjects are 500

                    // Set the calculated percentage in the 'scipercent' input field
                    $('#compercent').val(percentage.toFixed(2)); // Rounded to two decimal places
                });
            });
        </script>
        <!--For class 12 arts-->
        <script>
            $(document).ready(function() {
                // Listen for changes in the input fields
                $('.artsmark').on('input', function() {
                    // Get the marks for English and all subjects
                    var eng = parseFloat($('#arteng').val()) || 0;
                    var dzo = parseFloat($('#artdzo').val()) || 0;
                    var mat = parseFloat($('#artmat').val()) || 0;
                    var geo = parseFloat($('#artgeo').val()) || 0;
                    var his = parseFloat($('#arthis').val()) || 0;
                    var it = parseFloat($('#artit').val()) || 0;

                    // Sort the subject marks in descending order
                    var subjects = [dzo, mat, geo, his, it];
                    subjects.sort(function(a, b) {
                        return b - a;
                    });

                    // Calculate the total of the best four subjects
                    var total = eng + subjects.slice(0, 3).reduce(function(a, b) {
                        return a + b;
                    }, 0);

                    // Calculate the percentage
                    var percentage = (total / 400) * 100; // Assuming total marks for all subjects are 500

                    // Set the calculated percentage in the 'scipercent' input field
                    $('#artpercent').val(percentage.toFixed(2)); // Rounded to two decimal places
                });
            });
        </script>
    </div>
    {{-- </body> --}}
@endsection