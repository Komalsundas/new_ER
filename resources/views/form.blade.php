@extends('layouts.app2')
@section('content')
    
    <br>
   <br><br>
<head>
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
</head>

    <body> 
       
        <ul class="nav nav-tabs mb-3" id="myTab0" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab0" data-bs-toggle="tab" data-bs-target="#home0" type="button"
                role="tab" aria-controls="home0" aria-selected="true">
                Applicant Information
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab0" data-bs-toggle="tab" data-bs-target="#profile0" type="button"
                 role="tab" aria-controls="profile0" aria-selected="false">
                 Eduaction
                </button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="exp-tab0" data-bs-toggle="tab" data-bs-target="#exp0" type="button"
                role="tab" aria-controls="exp0" aria-selected="false">
                Previous Employement
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="doc-tab0" data-bs-toggle="tab" data-bs-target="#doc0" type="button"
                role="tab" aria-controls="doc0" aria-selected="false">
                Document Required
                </button>
            </li>
        </ul>
            <br>
            <div class="tab-content" id="myTabContent0">
                <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab0">
                    <!-- Applicant Information -->
                    <div class="container">
                        <style>
                            .custom-card {
                                border: 1px solid #584a4a;
                                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2); /* Increased shadow size */
                                transition: 0.3s;
                                padding: 20px;
                            }
                        
                            .custom-card:hover {
                                box-shadow: 0 12px 20px 0 rgba(0, 0, 0, 0.2); /* Increased shadow size on hover */
                            }
                            .form-control {
                                border: 1px solid #a3a3a3; /* Border for the input fields */
                                padding: 10px;
                                border-radius: 5px; /* Rounded corners for the input fields */
                                transition: 0.3s;
                                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Add box shadow for a 3D effect */
                            }
                        </style>
                        <div class="card custom-card">
                            <div class="card-body">
                                        <label for="position" class="form-label fw-bold small">PERSONAL DETAILS</label>
                                        <div class="row g-3">
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
                                                    <input type="text" class="form-control form-control-sm" id="dob" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="gender" class="form-label fw-bold small">Gender</label>
                                                <select class="form-select form-select-sm" id="gender">
                                                    <option selected>Select One</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
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
                                        </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <br>
                                        <label for="permanentAddress" class="form-label fw-bold small">PERMANENT ADDRESS</label>
                                    </div>
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
                                    <div class="col-md-5">
                                        <label for="presentAddress" class="form-label fw-bold small">PRESENT ADDRESS</label>
                                        <input type="text" class="form-control" style="height: 80px; padding: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <label for="attachment" class="form-label fw-bold small">DOCUMENTS TO BE ATTACHED</label>
                                <div class="row g-3">
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
                                        <label for="securityClearance" class="form-label fw-bold small">Security Clearance</label>
                                        <input type="file" class="form-control form-control-sm" id="securityClearance">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="medicalCertificate" class="form-label fw-bold small">Medical Certificate</label>
                                        <input type="file" class="form-control form-control-sm" id="medicalCertificate">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add a "Proceed" button here -->
                    <div class="row">
                        <div class="col-md-3 offset-md-10"> <!-- Adjust the offset to move the button right -->
                            <button type="button" class="btn btn-primary" id="proceedButton" style="font-family:Georgia, serif; font-size: 16px; width: 75px;">Proceed</button>
                        </div>
                    </div>                    
                </div>
                <!-- Education -->
                <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
                    <!-- Content for the Profile tab -->
                    <div class="container mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-left mb-4" style="font-family: Georgia, serif; font-weight: bold; font-size: 16px;">Education Details</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
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
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Add rows button with Bootstrap styling -->
                                <div class="text-left">
                                    <button class="btn btn-primary btn-sm" id="insertRow">
                                        <i class="fas fa-plus"></i> <span style="font-family: 'Georgia', serif; font-weight: bold; font-size: 12px;">Add new row</span>
                                    </button>
                                </div>    
                            </div>
                        </div>
                    </div>
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
                                cols += '<td><input class="form-control" type="text" name="institute" placeholder="Name of institute"></td>';
                                cols += '<td><input class="form-control" type="text" name="qualification" placeholder="Qualification"></td>';
                                cols += '<td><input class="form-control" type="text" name="course" placeholder="Course"></td>';
                                cols += '<td><input class="form-control" type="text" name="marks" placeholder="Aggregate Marks"></td>';
                                cols += '<td><input class="form-control" type="text" name="year" placeholder="Year of Completion"></td>';
                                cols += '<td><input type="file" class="form-control-file" name="file_upload"></td>';
                                cols += '<td><button class="btn btn-danger deleteRow"><i class="fa fa-trash"></i></button</td>';
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
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-left mb-4" style="font-family: Georgia, serif; font-weight: bold; font-size: 16px;">Experience</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Position</th>
                                                    <th scope="col">Period</th>
                                                    <th scope="col">Place</th>
                                                    <th scope="col">Reason to Change</th>
                                                    <th scope="col">No Objection Certificate(IF ANY)</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a class="btn btn-primary btn-sm rounded" id="insertRowExp0" href="#">
                                        <i class="fas fa-plus"></i> <span style="font-family: 'Georgia', serif; font-weight: bold; font-size: 12px;">Add new row</span>
                                    </a>  
                                </div>
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
                                    cols += '<th scrope="row">' + counter + '</th>';
                                    cols += '<td><input class="form-control rounded-4" type="text" name="company" placeholder="Company"></td>';
                                    cols += '<td><input class="form-control rounded-4" type="text" name="position" placeholder="Position"></td>';
                                    cols += '<td><input class="form-control rounded-4" type="text" name="period" placeholder="Period"></td>';
                                    cols += '<td><input class="form-control rounded-4" type="text" name="place" placeholder="Place"></td>';
                                    cols += '<td><input class="form-control rounded-4" type="text" name="reason to change" placeholder="reason to change"></td>';
                                    cols += '<td><input type="file" class="form-control-file" name="file_upload"></td>';
                                    cols += '<td><button class="btn btn-danger rounded-4 deleteRow"><i class="fa fa-trash"></i></button</td>';
                
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
                <!-- Document Required -->
                <div class="tab-pane fade" id="doc0" role="tabpanel" aria-labelledby="doc-tab0">
                    {{-- <div class="container"> --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="cv" class="form-label fw-bold small">CV</label>
                                <input class="form-control form-control-sm" id="cv" type="file">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="security-clearance" class="form-label fw-bold small">Security Clearance
                                    Certificate</label>
                                <input class="form-control form-control-sm" id="security-clearance" type="file">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="medical-certificate" class="form-label fw-bold small">Medical Certificate</label>
                                <input class="form-control form-control-sm" id="medical-certificate" type="file">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="no-objection-certificate" class="form-label fw-bold small">No Objection
                                    Certificate (IF ANY)</label>
                                <input class="form-control form-control-sm" id="no-objection-certificate" type="file">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="cv" class="form-label fw-bold small">Class X Marksheet</label>
                                <input class="form-control form-control-sm" id="cv" type="file">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="security-clearance" class="form-label fw-bold small">Class XII marksheet</label>
                                <input class="form-control form-control-sm" id="security-clearance" type="file">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="medical-certificate" class="form-label fw-bold small">Degree Marksheet</label>
                                <input class="form-control form-control-sm" id="medical-certificate" type="file">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="no-objection-certificate" class="form-label fw-bold small">No Objection
                                    Certificate (IF ANY)</label>
                                <input class="form-control form-control-sm" id="no-objection-certificate" type="file">
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}

                </div> 
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
                   
    </body>    
@endsection            

     

