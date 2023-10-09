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
    <div class="div1 d-flex align-items-start">
        <ul class="nav nav-tabs mb-3 mr-4 py-4 px-3 d-flex flex-column" id="myTab0" role="tablist" 
        style="background-color: rgba(0,0,0,0.05); border-radius: 4px; white-space: nowrap;
         position: sticky; top: 110px; z-index: 1;">
            <li class="nav-item mb-2 active" role="presentation">
                <button class="nav-link w-100 text-left" id="home-tab0" data-bs-toggle="tab" data-bs-target="#home0" type="button"
                    role="tab" aria-controls="home0" aria-selected="true">
                    Applicant Information
                </button>
            </li>
            <li class="nav-item mb-2" role="presentation">
                <button class="nav-link w-100 text-left" id="profile-tab0" data-bs-toggle="tab" data-bs-target="#profile0" type="button"
                    role="tab" aria-controls="profile0" aria-selected="false">
                    Eduaction
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link w-100 text-left" id="exp-tab0" data-bs-toggle="tab" data-bs-target="#exp0" type="button"
                    role="tab" aria-controls="exp0" aria-selected="false">
                    Previous Employement
                </button>
            </li>
           
        </ul>
        <br>
        <div class="tab-content px-4 py-3" id="myTabContent0" style="background-color: rgba(0,0,0,0.05); border-radius: 4px;">
            <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab0">
                <!-- Applicant Information -->
                {{-- <div class="container"> --}}
                    <style>
                        .custom-card {
                            border: 1px solid #584a4a;
                            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
                            /* Increased shadow size */
                            transition: 0.3s;
                            padding: 20px;
                            width: 8000px;
                        }

                        input {
                         font-family: var(--bs-body-font-family) !important;
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
                    {{-- <div class="card custom-card" style="width: 10000px;"> --}}
                        {{-- <div class="card-body"> --}}
                            <!-- <fieldset class="border p-4" style="max-width: 9020px;"> -->
                                <p class="mx-2" style="font-weight: bold; font-size: 16px;">PERSONAL DETAILS</p>
                            <div class="row g-3 ml-0">
                                <div class="col-md-6 px-2">
                                    <label for="fullName" class="fw-bold small">Full Name</label>
                                    <input type="text" class="form-control form-control" id="fullName">
                                </div>
                                <div class="col-md-6 px-2">
                                    <label for="cid" class="fw-bold small">CID</label>
                                    <input type="text" class="form-control form-control" id="cid">
                                </div>
                                <div class="col-md-6 px-2">
                                    <label for="dob" class="fw-bold small">DOB</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-calendar"></i>
                                        </span>
                                        <input type="text" class="form-control form-control" id="dob">
                                    </div>
                                </div>
                                <div class="col-md-6 px-2">
                                    <label for="gender" class="fw-bold">Gender</label>
                                    <select class="form-select form-select" id="gender">
                                        <option selected>Select One</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6 px-2">
                                    <label for="contactNumber" class="fw-bold">Contact Number</label>
                                    <div class="input-group">
                                        <div class="input-group-text" style="font-size: x-small;">975</div>
                                        <input type="text" class="form-control form-control" id="contactNumber">
                                    </div>
                                </div>
                                <div class="col-md-6 px-2">
                                    <label for="email" class="fw-bold">Email</label>
                                    <input type="text" class="form-control form-control" id="email">
                                </div>
                            </div>
                            <!-- </fieldset> -->
                        {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="card custom-card">
                        <div class="card-body"> --}}
                            <br>
                            <!-- <fieldset class="border p-4"> -->
                                <legend class="float-none w-auto p-2" 
                                style="font-weight: bold; font-size: 16px;">PERMENANT ADDRESS</legend>
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label for="dzongkhag" class="fw-bold">Dzongkhag</label>
                                    <input type="text" class="form-control form-control" id="dzongkhag">
                                </div>
                                <div class="col-md-3">
                                    <label for="gewog" class="fw-bold">Gewog</label>
                                    <input type="text" class="form-control form-control" id="gewog">
                                </div>
                                <div class="col-md-3">
                                    <label for="village" class="fw-bold">Village</label>
                                    <input type="text" class="form-control form-control" id="village">
                                </div>
                                <div class="col-md-5">
                                    <label for="presentAddress" class="fw-bold">Present Address</label>
                                    <textarea type="text" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <!-- </fieldset> -->
                            <br>
                            <!-- <fieldset class="border p-4"> -->
                                <legend class="float-none w-auto p-2" style="font-weight: bold; font-size: 16px;">DOCUMENTS TO BE ATTACHED</legend>
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label for="coverLetter" class="fw-bold">Cover Letter</label>
                                    <input type="file" class="form-control form-control" id="coverLetter">
                                </div>
                                <div class="col-md-3">
                                    <label for="cidAttachment" class="fw-bold">CID</label>
                                    <input type="file" class="form-control form-control" id="cidAttachment">
                                </div>
                                <div class="col-md-3">
                                    <label for="cvAttachment" class="fw-bold">CV</label>
                                    <input type="file" class="form-control form-control" id="cvAttachment">
                                </div>
                                <div class="col-md-3">
                                    <label for="securityClearance" class="fw-bold">Security
                                        Clearance</label>
                                    <input type="file" class="form-control form-control" id="securityClearance">
                                </div>
                                <div class="col-md-3">
                                    <label for="medicalCertificate" class="fw-bold">Medical
                                        Certificate</label>
                                    <input type="file" class="form-control form-control" id="medicalCertificate">
                                </div>
                            </div>
                <!-- Add a "Proceed" button here -->
                        <div style="text-align: right;">
                            <button type="button" class="btn btn-success btn-sm" id="proceedButton"
                            style="font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #4CAF50; color: white;">Proceed</button>
                        </div>
            </div>
            <!-- Education -->
            <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
                <!-- Content for the Profile tab -->
                {{-- <div class="container mt-4"> --}}
                    {{-- <div class="card" style="width: 500%;">
                        <div class="card-body"> --}}
                            <!-- <fieldset class="border p-4" style="width: 103%;"> -->
                            <p class="float-none w-auto" style="font-weight: bold; font-size: 16px;">EDUCATION DETAILS</legend>
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width: 120%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">University or School</th>
                                            <th scope="col">Qualification</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Aggregate marks %</th>
                                            <th scope="col">Completion Year</th>
                                            <th scope="col">Transcript</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><input class="form-control" type="text" name="institute" placeholder="Name of institute"></td>
                                            <td><input class="form-control" type="text" name="qualification" placeholder="Qualification"></td>
                                            <td><input class="form-control" type="text" name="course" placeholder="Course"></td>
                                            <td><input class="form-control" type="text" name="marks" placeholder="Aggregate Marks"></td>
                                            <td><input class="form-control" type="text" name="year" placeholder="Year of Completion"></td>
                                            <td><input type="file" class="form-control-file" name="file_upload"></td>
                                            <td></td>
                                        </tr>  
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <!-- Add rows button with Bootstrap styling -->
                            <div class="text-left">
                                <button class="btn btn-primary btn-sm" id="insertRow">
                                    <i class="fas fa-plus"></i> <span
                                        style="font-family: 'Georgia', serif; font-weight: bold; font-size: 12px;">Add new
                                        row</span>
                                </button>
                            </div>
                            <div style="text-align: right;">
                                <button type="button" class="btn btn-secondary" id="backToproceedButton"
                                style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #7d7d7d; color: white;">Back</button>

                                <button type="button" class="btn btn-success" id="proceedToPreviousEmployment"
                                style="font-family: Georgia, serif; font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #4CAF50; color: white;">Proceed</button>

                            </div>
                            </fieldset>
                        {{-- </div>
                    </div> --}}
                {{-- </div> --}}
                <script>
                    $(function() {
                        // Start counting from the third row
                        var counter = 1;

                        $("#insertRow").on("click", function(event) {
                            event.preventDefault();

                            var newRow = $("<tr>");
                            var cols = '';
                            // Table columns
                            cols += '<th scope="row">' + counter + '</th>';
                            cols +=
                                '<td><input class="form-control" type="text" name="institute" placeholder="Name of institute"></td>';
                            cols +=
                                '<td><input class="form-control" type="text" name="qualification" placeholder="Qualification"></td>';
                            cols +=
                                '<td><input class="form-control" type="text" name="course" placeholder="Course"></td>';
                            cols +=
                                '<td><input class="form-control" type="text" name="marks" placeholder="Aggregate Marks"></td>';
                            cols +=
                                '<td><input class="form-control" type="text" name="year" placeholder="Year of Completion"></td>';
                            cols += '<td><input type="file" class="form-control-file" name="file_upload"></td>';
                            cols +=
                                '<td><button class="btn btn-danger deleteRow"><i class="fa fa-trash"></i></button</td>';
                            // Insert the columns inside a row
                            newRow.append(cols);

                            // Insert the row inside the table
                            $("table tbody").append(newRow);

                            // Increase counter after each row insertion
                            counter++;
                        });

                        // Remove row when delete btn is clicked
                        $("table").on("click", ".deleteRow", function(event) {
                            $(this).closest("tr").remove();
                            counter--;
                        });
                    });
                </script>
            </div>
            <!-- Previous Employment -->
            <div class="tab-pane fade" id="exp0" role="tabpanel" aria-labelledby="exp-tab0">
                <div>
                    <div class="container mt-4">
                        {{-- <div class="card" style="width: 500%;">
                            <div class="card-body"> --}}
                                <!-- <fieldset class="border p-4" style="width: 105%;"> -->
                                    <legend class="float-none w-auto p-2" style="font-weight: bold; font-size: 16px;">EXPERIENCES</legend>
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="width: 140%;">
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
                                                <th scope="col">No Objection Certificate(IF ANY)</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input class="form-control" type="text" name="company" placeholder="Company"></td>
                                                <td><input class="form-control" type="text" name="position" placeholder="Position"></td>
                                                <td><input class="form-control" type="text" name="from" placeholder="From"></td>
                                                <td><input class="form-control" type="text" name="to" placeholder="To"></td>
                                                <td><input class="form-control" type="text" name="place" placeholder="Place"></td>
                                                <td><input class="form-control" type="text" name="reason" placeholder="Reason to Change"></td>
                                                <td><input type="file" class="form-control-file" name="file_upload"></td> 
                                                <td></td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div class="text-left">
                                    <button class="btn btn-primary btn-sm" id="insertRowExp0">
                                        <i class="fas fa-plus"></i> <span
                                            style="font-weight: bold; font-size: 12px;">Add
                                            new row</span>
                                    </button>
                                </div>
                                <!-- Modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="disclaimerModal" tabindex="-1" role="dialog" aria-labelledby="disclaimerModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="disclaimerModalLabel" style="font-weight: bold;">Affirmation</h5>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Add your disclaimer content here -->
                                                {{-- <h5>Affirmation</h5> --}}
                                                <ul style="font-size: 14px;">
                                                    <li>🚫 Not Convicted of a criminal offence</li>
                                                    <li>🚫 Not Terminated or compulsorily retired from any agency except in case of insolvency</li>
                                                    <li>🚫 Not Adjudged medically unfit for employment by a registered medical practitioner</li>
                                                </ul>
                                                <div class="form-check" style="display: flex; align-items: center;">
                                                    <input type="checkbox" class="form-check-input" id="agreeCheckbox">
                                                    <label class="form-check-label" style="font-size: 18px; margin-left: 5px;" for="agreeCheckbox">
                                                        I certify that my answers are true and complete to the best of my knowledge, and I have not furnished fake/forged testimonials/documents.
                                                    </label>
                                                </div>
                                                <p style="font-size: 18px; margin-top: 10px;">
                                                    🤞If this application leads to employment, I understand that false or misleading information in my application or interview may result in my release.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary d-none" id="submitForm">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mt-2">
                                    <button type="button" class="btn btn-secondary" id="backToPreviousEmployment"
                                    style="font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #7d7d7d; color: white;">Back</button>

                                    <button type="button" class="btn btn-success" id="openModalBtn"   style="font-size: 13px; width: 65px; padding: 5px 10px; border-radius: 5px; background-color: #4CAF50; color: white;">Done</button>

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
                                <!-- </fieldset> -->
{{-- 
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- Add rows button with a unique ID -->
                <script>
                    $(function() {
                        // Start counting from the third row
                        var counter = 1;

                        $("#insertRowExp0").on("click", function(event) {
                            event.preventDefault();

                            var newRow = $("<tr>");
                            var cols = '';

                            // Table columns
                            cols += '<th scope="row">' + counter + '</th>';
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
                            $("table tbody").append(newRow);

                            // Increase counter after each row insertion
                            counter++;
                        });

                        // Remove row when delete btn is clicked
                        $("table").on("click", ".deleteRow", function(event) {
                            $(this).closest("tr").remove();
                            counter--;
                        });
                    });
                </script>
            </div>
        </div>
        <br>
     
        <script>
            function switchTab(tabId) {
                // Activate the tab with the specified ID
                var tab = document.querySelector(tabId);
                var tabButton = document.querySelector('[data-bs-target="' + tabId + '"]');
                if (tab && tabButton) {
                    var tabPane = new bootstrap.Tab(tabButton);
                    tabPane.show();
                }
            }

            // Example of using the function to switch to the "Profile" tab    
        </script>
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
            document.getElementById("proceedButton").addEventListener("click", function() {
                // Activate the "Education" tab using Bootstrap's tab('show') method
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

    </div>    

    {{-- </body> --}}
@endsection

