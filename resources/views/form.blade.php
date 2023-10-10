@extends('layouts.app2')
@section('content')
    {{-- <head> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include the datepicker library CSS and JavaScript files -->
    <link rel="stylesheet" href="datepicker.min.css">
    <script src="datepicker.min.js"></script>

    <script src="{{ asset('js/add_row.js') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    {{-- </head>

    <body> --}}
    <div class="div1  d-flex align-items-start">
        <ul class="nav nav-tabs mb-3 mr-4 py-4 px-3 d-flex flex-column" 
         id="myTab0" role="tablist"  style="background-color: rgba(0,0,0,0.05); border-radius: 4px; white-space: nowrap;
         position: sticky; top: 110px; z-index: 1;">
            <li class="nav-item active mb-2" role="presentation">
                <button class="nav-link text-left w-100" id="home-tab0" data-bs-toggle="tab" data-bs-target="#home0" type="button"
                    role="tab" aria-controls="home0" aria-selected="true" style="font-family: Georgia, serif;">
                    Applicant Information
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-left w-100 " id="profile-tab0" data-bs-toggle="tab" data-bs-target="#profile0" type="button"
                    role="tab" aria-controls="profile0" aria-selected="false"style="font-family: Georgia, serif;">
                    Eduaction
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-left w-100" id="exp-tab0" data-bs-toggle="tab" data-bs-target="#exp0" type="button"
                    role="tab" aria-controls="exp0" aria-selected="false"style="font-family: Georgia, serif;">
                    Previous Employement
                </button>
            </li>

        </ul>
        <br>
        <div class="tab-content px-4 py-3" id="myTabContent0" style="background-color: rgba(0,0,0,0.05); border-radius: 4px;">
            <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab0">
                <!-- Applicant Information -->
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
                <fieldset class="border p-1"style="max-width: 9020px;">
                    <legend class="float-none w-auto p-2"
                        style="font-weight: bold; font-size: 16px; font-family: 'Georgia, serif;">PERSONAL DETAILS</legend>
                    <div class="row g-1">
                        <div class="col-md-3">
                            <label for="fullName" class="form-label fw-bold small">Full Name</label>
                            <input type="text" class="form-control form-control-sm" id="fullName">
                        </div>
                        <div class="col-md-3">
                            <label for="cid" class="form-label fw-bold small">CID</label>
                            <input type="text" class="form-control form-control-sm" id="cid">
                        </div>
                        <div class="col-md-3">
                            <label for="dob" class="form-label fw-bold small">DOB</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar"></i>
                                </span>
                                <input type="text" class="form-control form-control-sm" id="dob">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="gender" class="form-label fw-bold small">Gender</label>
                            <select class="form-select form-select-sm" id="gender">
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
                                <input type="text" class="form-control form-control-sm" id="contactNumber">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="form-label fw-bold small">Email</label>
                            <input type="text" class="form-control form-control-sm" id="email">
                        </div>
                        <div class="col-md-3">
                            <label for="coverLetter" class="form-label fw-bold small">Passport size Photo</label>
                            <input type="file" class="form-control form-control-sm" id="coverLetter" accept="image/png, image/jpeg">
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
                            <input type="text" class="form-control form-control-sm" id="dzongkhag">
                        </div>
                        <div class="col-md-3">
                            <label for="gewog" class="form-label fw-bold small">Gewog</label>
                            <input type="text" class="form-control form-control-sm" id="gewog">
                        </div>
                        <div class="col-md-3">
                            <label for="village" class="form-label fw-bold small">Village</label>
                            <input type="text" class="form-control form-control-sm" id="village">
                        </div>
                        <div class="col-md-3">
                            <label for="village" class="form-label fw-bold small">Present Address</label>
                            <input type="text" class="form-control form-control-sm" id="village">
                        </div>    
                    </div>
                </fieldset>
                <br>
                <fieldset class="border p-1">
                    <legend class="float-none w-auto p-2"
                        style="font-weight: bold; font-size: 16px; font-family: 'Georgia, serif;">DOCUMENTS TO BE ATTACHED
                    </legend>
                    <div class="row g-1">
                        <div class="col-md-3">
                            <label for="coverLetter" class="form-label fw-bold small">Cover Letter</label>
                            <input type="file" class="form-control form-control-sm" id="coverLetter">
                        </div>
                        <div class="col-md-3">
                            <label for="cidAttachment" class="form-label fw-bold small">CID</label>
                            <input type="file" class="form-control form-control-sm" id="cidAttachment">
                        </div>
                        <div class="col-md-3">
                            <label for="cvAttachment" class="form-label fw-bold small">CV</label>
                            <input type="file" class="form-control form-control-sm" id="cvAttachment">
                        </div>
                        
                        <div class="col-md-3">
                            <label for="medicalCertificate" class="form-label fw-bold small">Medical
                                Certificate</label>
                            <input type="file" class="form-control form-control-sm" id="medicalCertificate">
                        </div>
                    </div><br>
                    <!-- Add a "Proceed" button here -->
                    <div style="text-align: right;">
                        <button type="button" class="btn btn-success btn-sm" id="proceedButton"
                            style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #4CAF50; color: white;">Proceed</button>
                    </div>
            </div>
            <!-- Education -->
            <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
                <fieldset class="border p-4" style="width: 103%;">
                    <legend class="float-none w-auto p-2"
                        style="font-weight: bold; font-size: 16px; font-family: 'Georgia, serif;">EDUCATION DETAILS
                    </legend>   
                    <legend class="float-none w-auto p-2"
                        style="font-weight: bold; font-size: 13px; font-family: 'Georgia, serif;">CLASS X</legend>
                        <div class="form-row align-items-center">
                            <div class="col-5">
                                <label for="schoolName" class="form-label fw-bold small">School Name</label>
                                <input type="text" class="form-control mb-2" id="schoolName" placeholder="Enter school name">
                            </div>
                            <div class="col-3">
                                <label for="completionYear" class="form-label fw-bold small">Completion year</label>
                                <input type="text" class="form-control mb-2" id="Please" placeholder="Enter completion year">
                            </div>
                            <div class="col-md-4 d-flex flex-column">
                                <label for="cidAttachment" class="form-label fw-bold small align-self-start">Class X marksheet</label>
                                <input type="file" class="form-control form-control-sm align-self-end" id="cidAttachment" placeholder="Select Marksheet">
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
                            <input type="text" class="form-control form-control-sm" id="eng">
                        </div>
                        <div class="col-md-1">
                            <label for="dzo" class="form-label fw-bold small">Dzongkha</label>
                            <input type="text" class="form-control form-control-sm" id="dzo">
                        </div>
                        <div class="col-md-1">
                            <label for="mat" class="form-label fw-bold small">Math</label>
                            <input type="text" class="form-control form-control-sm" id="mat">
                        </div>
                        <div class="col-md-1">
                            <label for="phy" class="form-label fw-bold small">Physics</label>
                            <input type="text" class="form-control form-control-sm" id="phy">
                        </div>
                        <div class="col-md-1">
                            <label for="che" class="form-label fw-bold small">Chemistry</label>
                            <input type="text" class="form-control form-control-sm" id="che">
                        </div>
                        <div class="col-md-1">
                            <label for="bio" class="form-label fw-bold small">Biology</label>
                            <input type="text" class="form-control form-control-sm" id="bio">
                        </div>
                        <div class="col-md-1">
                            <label for="eco" class="form-label fw-bold small">Economics</label>
                            <input type="text" class="form-control form-control-sm" id="eco">
                        </div>
                        <div class="col-md-1">
                            <label for="his" class="form-label fw-bold small">History</label>
                            <input type="text" class="form-control form-control-sm" id="his">
                        </div>
                        <div class="col-md-1">
                            <label for="geo" class="form-label fw-bold small">Geography</label>
                            <input type="text" class="form-control form-control-sm" id="geo">
                        </div>
                        <div class="col-md-1 text-center">
                            <label for="it" class="form-label fw-bold small">IT</label>
                            <input type="text" class="form-control form-control-sm" id="it">
                        </div>
                        <div class="col-md-1">
                            <label for="percentage" class="form-label fw-bold small">Percentage</label>
                            <input type="text" class="form-control form-control-sm" id="percent" readonly>
                        </div>
                        <hr>
                        {{-- For Class XII --}}
                        <legend class="float-none w-auto p-2"
                            style="font-weight: bold; font-size: 13px; font-family: 'Georgia, serif;">CLASS XII</legend>
                            <div class="form-row align-items-center">
                                <div class="col-5">
                                    <label for="schoolName" class="form-label fw-bold small">School Name</label>
                                    <input type="text" class="form-control mb-2" id="schoolName" placeholder="Enter school name">
                                </div>
                                <div class="col-3">
                                    <label for="completionYear" class="form-label fw-bold small">Completion year</label>
                                    <input type="text" class="form-control mb-2" id="Please" placeholder="Enter completion year">
                                </div>
                                <div class="col-md-4 d-flex flex-column">
                                    <label for="cidAttachment" class="form-label fw-bold small align-self-start">Class XII marksheet</label>
                                    <input type="file" class="form-control form-control-sm align-self-end" id="cidAttachment" placeholder="Select Marksheet">
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
                                <input class="form-check-input " type="radio" name="stream" id="scienceRadio"
                                    onclick="showForm('science')">
                                <label class="form-check-label" for="scienceRadio">Science</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="stream" id="commerceRadio"
                                    onclick="showForm('commerce')">
                                <label class="form-check-label" for="commerceRadio">Commerce</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="stream" id="artsRadio"
                                    onclick="showForm('arts')">
                                <label class="form-check-label" for="artsRadio">Arts</label>
                            </div>
                        </div>
                        <!-- Forms for each stream -->
                        <div id="scienceForm" style="display: none;">
                            <div class="row g-2">
                                <div class="col-md-1">
                                    <label for="subject" class="form-label fw-bold small">Subject</label>
                                    <label for="marks" class="form-label fw-bold small">Marks</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="eng" class="form-label fw-bold small ">English</label>
                                    <input type="text" class="form-control form-control-sm sciencemark" id="scieng">
                                </div>
                                <div class="col-md-1">
                                    <label for="dzo" class="form-label fw-bold small">Dzongkha</label>
                                    <input type="text" class="form-control form-control-sm sciencemark" id="scidzo">
                                </div>
                                <div class="col-md-1">
                                    <label for="mat" class="form-label fw-bold small">Math</label>
                                    <input type="text" class="form-control form-control-sm sciencemark" id="scimat">
                                </div>
                                <div class="col-md-1">
                                    <label for="phy" class="form-label fw-bold small">Physics</label>
                                    <input type="text" class="form-control form-control-sm sciencemark" id="sciphy">
                                </div>
                                <div class="col-md-1">
                                    <label for="che" class="form-label fw-bold small">Chemistry</label>
                                    <input type="text" class="form-control form-control-sm sciencemark" id="sciche">
                                </div>
                                <div class="col-md-1">
                                    <label for="bio" class="form-label fw-bold small">Biology</label>
                                    <input type="text" class="form-control form-control-sm sciencemark" id="scibio">
                                </div>
                                <div class="col-md-1 text-center">
                                    <label for="it" class="form-label fw-bold small">IT</label>
                                    <input type="text" class="form-control form-control-sm sciencemark" id="sciit">
                                </div>
                                <div class="col-md-1">
                                    <label for="percentage" class="form-label fw-bold small">Percentage</label>
                                    <input type="text" class="form-control form-control-sm sciencemark" id="scipercent">
                                </div>
                            </div>
                        </div>
                            {{-- COMMERCE --}}
                        <div id="commerceForm" style="display: none;">
                            <div class="row g-2">
                                <div class="col-md-1">
                                    <label for="subject" class="form-label fw-bold small">Subject</label>
                                    <label for="marks" class="form-label fw-bold small">Marks</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="eng" class="form-label fw-bold small">English</label>
                                    <input type="text" class="form-control form-control-sm commersemark" id="comeng">
                                </div>
                                <div class="col-md-1">
                                    <label for="dzo" class="form-label fw-bold small">Dzongkha</label>
                                    <input type="text" class="form-control form-control-sm commersemark" id="comdzo">
                                </div>
                                <div class="col-md-1">
                                    <label for="mat" class="form-label fw-bold small">Math</label>
                                    <input type="text" class="form-control form-control-sm commersemark" id="commat">
                                </div>
                                <div class="col-md-1">
                                    <label for="com" class="form-label fw-bold small">Commerce</label>
                                    <input type="text" class="form-control form-control-sm commersemark" id="comcom">
                                </div>
                                <div class="col-md-1">
                                    <label for="eco" class="form-label fw-bold small">Economic</label>
                                    <input type="text" class="form-control form-control-sm commersemark" id="comeco">
                                </div>
                                <div class="col-md-1">
                                    <label for="acc" class="form-label fw-bold small">Accountancy</label>
                                    <input type="text" class="form-control form-control-sm commersemark" id="comacc">
                                </div>
                                <div class="col-md-1 text-center">
                                    <label for="it" class="form-label fw-bold small">IT</label>
                                    <input type="text" class="form-control form-control-sm commersemark" id="comit">
                                </div>
                                <div class="col-md-1">
                                    <label for="percentage" class="form-label fw-bold small">Percentage</label>
                                    <input type="text" class="form-control form-control-sm commersemark" id="compercent">
                                </div>
                            </div>
                        </div>
                            {{-- ARTS --}}
                        <div id="artsForm" style="display: none;">
                            <div class="row g-2">
                                <div class="col-md-1">
                                    <label for="subject" class="form-label fw-bold small">Subject</label>
                                    <label for="marks" class="form-label fw-bold small">Marks</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="eng" class="form-label fw-bold small">English</label>
                                    <input type="text" class="form-control form-control-sm artsmark" id="arteng">
                                </div>
                                <div class="col-md-1">
                                    <label for="dzo" class="form-label fw-bold small">Dzongkha</label>
                                    <input type="text" class="form-control form-control-sm artsmark" id="artdzo">
                                </div>
                                <div class="col-md-1">
                                    <label for="mat" class="form-label fw-bold small">Math</label>
                                    <input type="text" class="form-control form-control-sm artsmark" id="artmat">
                                </div>
                                <div class="col-md-1">
                                    <label for="geo" class="form-label fw-bold small">Geography</label>
                                    <input type="text" class="form-control form-control-sm artsmark" id="artgeo">
                                </div>
                                <div class="col-md-1">
                                    <label for="his" class="form-label fw-bold small">History</label>
                                    <input type="text" class="form-control form-control-sm artsmark" id="arthis">
                                </div>
                                <div class="col-md-1 text-center">
                                    <label for="it" class="form-label fw-bold small">IT</label>
                                    <input type="text" class="form-control form-control-sm artsmark" id="artit">
                                </div>
                                <div class="col-md-1">
                                    <label for="percentage" class="form-label fw-bold small">Percentage</label>
                                    <input type="text" class="form-control form-control-sm artsmark" id="artpercent">
                                </div>
                            </div>
                        </div>
                        <script>
                            function showForm(stream) {
                                // Hide all forms
                                document.getElementById('scienceForm').style.display = 'none';
                                document.getElementById('commerceForm').style.display = 'none';
                                document.getElementById('artsForm').style.display = 'none';

                                // Show the selected form
                                document.getElementById(stream + 'Form').style.display = 'block';
                            }
                        </script>
                        <hr>
                        {{-- For Class Degree --}}
                     <legend class="float-none w-auto p-1"
                        style="font-weight: bold; font-size: 13px; font-family: 'Georgia, serif;">DEGREE</legend>  
                        <div class="form-row align-items-center">
                            <div class="col-4">
                                <label for="schoolName" class="form-label fw-bold small">University Name</label>
                                <input type="text" class="form-control mb-2" id="schoolName" placeholder="Enter university name">
                            </div>
                            <div class="col-3">
                                <label for="courseName" class="form-label fw-bold small">Course Name</label>
                                <input type="text" class="form-control mb-2" id="Please" placeholder="Enter course name">
                            </div>
                            <div class="col-2">
                                <label for="completionYear" class="form-label fw-bold small">Completion year</label>
                                <input type="text" class="form-control mb-2" id="Please" placeholder="Completion year">
                            </div>
                            <div class="col-md-3 d-flex flex-column">
                                <label for="marksheetAttachment" class="form-label fw-bold small align-self-start">Degree Marksheet</label>
                                <input type="file" class="form-control form-control-sm align-self-end" id="marksheetAttachment" placeholder="Select Marksheet">
                            </div>
                            
                    </div>  
                    {{-- <div class="row g-1">
                        <div class="col-md-3">
                            <label for="coverLetter" class="form-label fw-bold small">Academic Certificate</label>
                            <input type="file" class="form-control form-control-sm" id="coverLetter">
                        </div>
                        <div class="col-md-3">
                            <label for="cidAttachment" class="form-label fw-bold small">Marksheet Certificate</label>
                            <input type="file" class="form-control form-control-sm" id="cidAttachment">
                        </div>
                    </div> --}}
                    <br>
                    <div style="text-align: right;">
                        <button type="button" class="btn btn-secondary" id="backToproceedButton"
                            style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #7d7d7d; color: white;">Back</button>

                        <button type="button" class="btn btn-success" id="proceedToPreviousEmployment"
                            style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #4CAF50; color: white;">Proceed</button>
                    </div>
                </fieldset>
            </div>
            <!-- Previous Employment -->
            <div class="tab-pane fade" id="exp0" role="tabpanel" aria-labelledby="exp-tab0">
                <div>
                    <div class="container mt-4">
                        <fieldset class="border p-4" style="width: 105%;">
                            <legend class="float-none w-auto p-2"
                                style="font-weight: bold; font-size: 16px; font-family: 'Georgia, serif;">EXPERIENCES
                            </legend>
                            <div class="table-responsive">
                                <table class="table table-bordered experienceTable" style="width: 140%;">
                                    <colgroup>
                                        <col span="1" style="width: 5%;">
                                        <col span="1" style="width: 15%;">
                                        <col span="1" style="width: 15%;">
                                        <col span="1" style="width: 10%;">
                                        <col span="1" style="width: 10%;">
                                        <col span="1" style="width: 15%;">
                                        <col span="1" style="width: 15%;">
                                        <col span="1" style="width: 15%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">Position</th>
                                            <th scope="col" colspan="2" class="text-center">Period</th>
                                            <!-- Span two columns for "Period" -->
                                            <th scope="col" colspan="1">Place</th>
                                            <!-- Span two columns for "Place" -->
                                            <th scope="col" colspan="1">Reason to Change</th>
                                            <!-- Span two columns for "Reason to Change" -->
                                            <th scope="col">Supporting Dcouments(IF ANY)</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><input class="form-control" type="text" name="company"
                                                    placeholder="Company"></td>
                                            <td><input class="form-control" type="text" name="position"
                                                    placeholder="Position"></td>
                                            <td><input class="form-control" type="text" name="from"
                                                    placeholder="From"></td>
                                            <td><input class="form-control" type="text" name="to"
                                                    placeholder="To"></td>
                                            <td><input class="form-control" type="text" name="place"
                                                    placeholder="Place"></td>
                                            <td><input class="form-control" type="text" name="reason"
                                                    placeholder="Reason to Change"></td>
                                            <td><input type="file" class="form-control-file" name="file_upload"></td>
                                            <td></td>
                                        </tr>
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
                            <script>
                                $(document).ready(function() {
                                    $("#openModalBtn").click(function() {
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
                    </div>
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
                            cols += '<th scope="row">' + experienceCounter + '</th>';
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="company" placeholder="Company"></td>';
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="position" placeholder="Position"></td>';
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="from_period" placeholder="From"></td>'; // Change "period" to "from_period"
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="to_period" placeholder="To"></td>'; // Add "to_period" field
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="place" placeholder="Place"></td>';
                            cols +=
                                '<td><input class="form-control rounded-4" type="text" name="reason_to_change" placeholder="Reason to Change"></td>'; // Change "reason to change" to "reason_to_change"
                            cols += '<td><input type="file" class="form-control-file" name="file_upload"></td>';
                            cols +=
                                '<td><button class="btn btn-danger rounded-4 deleteRow"><i class="fa fa-trash"></i></button</td>';
                            // Insert the columns inside a row
                            newRow.append(cols);

                            // Insert the row inside the table
                            $(".experienceTable tbody").append(newRow);
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
            $('#proceedButton').click( function(){
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
            $(document).ready(function(){
                // Listen for changes in the input fields
                $('#eng, #dzo, #mat, #phy, #che, #bio, #eco, #his, #geo, #it').on('input', function(){
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
                    var total = eng + subjects.slice(0, 4).reduce(function(a, b) { return a + b; }, 0);
        
                    // Calculate the percentage
                    var percentage = (total / 500) * 100; // Assuming total marks for all subjects are 500
        
                    // Set the calculated percentage in the 'percent' input field
                    $('#percent').val(percentage.toFixed(2)); // Rounded to two decimal places
                });
            });
        </script>  
        <!--For class 12 science-->
        <script>
            $(document).ready(function(){
                // Listen for changes in the input fields
                $('.sciencemark').on('input', function(){
                    // Get the marks for English and all subjects
                    var eng = parseFloat($('#scieng').val()) || 0;
                    var dzo = parseFloat($('#scidzo').val()) || 0;
                    var mat = parseFloat($('#scimat').val()) || 0;
                    var phy = parseFloat($('#sciphy').val()) || 0;
                    var che = parseFloat($('#sciche').val()) || 0;
                    var bio = parseFloat($('#scibio').val()) || 0;
                    var it = parseFloat($('#sciit').val()) || 0;
        
                    // Sort the subject marks in descending order
                    var subjects = [dzo, mat, phy, che, bio, it];
                    subjects.sort(function(a, b) {
                        return b - a;
                    });
        
                    // Calculate the total of the best four subjects
                    var total = eng + subjects.slice(0, 3).reduce(function(a, b) { return a + b; }, 0);
        
                    // Calculate the percentage
                    var percentage = (total / 400) * 100; // Assuming total marks for all subjects are 500
        
                    // Set the calculated percentage in the 'scipercent' input field
                    $('#scipercent').val(percentage.toFixed(2)); // Rounded to two decimal places
                });
            });
        </script>
         <!--For class 12 commerce-->
        <script>
            $(document).ready(function(){
                // Listen for changes in the input fields
                $('.commersemark').on('input', function(){
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
                    var total = eng + subjects.slice(0, 3).reduce(function(a, b) { return a + b; }, 0);
        
                    // Calculate the percentage
                    var percentage = (total / 400) * 100; // Assuming total marks for all subjects are 500
        
                    // Set the calculated percentage in the 'scipercent' input field
                    $('#compercent').val(percentage.toFixed(2)); // Rounded to two decimal places
                });
            });
        </script>
            <!--For class 12 arts-->
            <script>
                $(document).ready(function(){
                    // Listen for changes in the input fields
                    $('.artsmark').on('input', function(){
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
                        var total = eng + subjects.slice(0, 3).reduce(function(a, b) { return a + b; }, 0);
            
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