@extends('layouts.app2')

@section('content')

    <head>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    </head>
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- User Profile Card -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <!-- Display the user's profile picture here if available -->
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('storage/' . $applicant->passport_photo) }}" alt="User profile picture">
                                </div>
                                <br>
                                <p class="text-muted text-center">Basic Information</p>
                                <h4 class="profile-username text-center">{{ $applicant->name }}</h4>
                                <p class="text text-center">Post applied: {{ $applicant->position }}</p>
                                <hr>
                                <p class="text">CID: {{ $applicant->cid }}</p>
                                <p class="text">Mobile No: {{ $applicant->contact }}</p>
                                <p class="text">DOB: {{ $applicant->dob }}</p>
                                <p class="text">Gender: {{ $applicant->gender }}</p>
                                <p class="text">Email: {{ $applicant->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#education"
                                            data-toggle="tab">Education</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#documents"
                                            data-toggle="tab">Documents</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="education">
                                        <div class="post">
                                            <div class="user-block">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="invoice p-3 mb-3">

                                                                {{-- marks --}}
                                                                <div class="row">
                                                                    <div class="col-12 table-responsive">
                                                                        <table class="table table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Name of institute</th>
                                                                                    <th>Qualification</th>
                                                                                    <th>Course</th>
                                                                                    <th>Eng</th>
                                                                                    <th>Dzo</th>
                                                                                    <th>Mat</th>
                                                                                    <th>Phy</th>
                                                                                    <th>Che</th>
                                                                                    <th>Bio</th>
                                                                                    <th>IT</th>
                                                                                    <th>Eco</th>
                                                                                    <th>His</th>
                                                                                    <th>Geo</th>
                                                                                    <th>Aggregate</th>
                                                                                    <th>Certificate</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($education as $edu)
                                                                                    <tr>
                                                                                        <td>{{ $edu->institute }}</td>
                                                                                        @if ($edu->grade == 10)
                                                                                            <td>{{ 'Class X' }}</td>
                                                                                        @elseif($edu->grade == 12)
                                                                                            <td>{{ 'Class XII' }}</td>
                                                                                        @elseif($edu->grade == 15)
                                                                                            <td>{{ 'Bachelors Degree' }}
                                                                                            </td>
                                                                                        @endif
                                                                                        <td>{{ $edu->course_name }}</td>
                                                                                        <td>{{ $edu->eng }}</td>
                                                                                        <td>{{ $edu->dzo }}</td>
                                                                                        <td>{{ $edu->math }}</td>
                                                                                        <td>{{ $edu->phy }}</td>
                                                                                        <td>{{ $edu->che }}</td>
                                                                                        <td>{{ $edu->bio }}</td>
                                                                                        <td>{{ $edu->it }}</td>
                                                                                        <td>{{ $edu->his }}</td>
                                                                                        <td>{{ $edu->geo }}</td>
                                                                                        <td>{{ $edu->eco }}</td>


                                                                                        <td>{{ $edu->aggregate }}</td>
                                                                                        <td>
                                                                                            <a href="{{ asset('storage/' . $edu->marksheet) }}"
                                                                                                target="_blank">Marksheet</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane" id="documents">
                                        {{-- <div class="timeline timeline-inverse">
                                        <!-- Your experience timeline goes here -->
                                    </div> --}}
                                        <div class="post">
                                            <div class="user-block">
                                                <div class="container" style="width: 150%; margin: 0 -25%;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="invoice p-3 mb-3">
                                                                <div class="row">
                                                                    <div class="col-12 table-responsive">
                                                                        <table class="table table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Cover Letter</th>
                                                                                    <th>CID Copy</th>
                                                                                    <th>CV</th>
                                                                                    <th>MC</th>
                                                                                    <th>Training Certificate</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="{{ asset('storage/' . $applicant->coverletter) }}"
                                                                                            target="_blank">View</a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a href="{{ asset('storage/' . $applicant->cv) }}"
                                                                                            target="_blank">View</a>
                                                                                    </td>
                                                                                    <td><a href="{{ asset('storage/' . $applicant->cidcopy) }}"
                                                                                            target="_blank">View</a></td>
                                                                                    <td><a href="{{ asset('storage/' . $applicant->mc) }}"
                                                                                            target="_blank">View</a></td>

                                                                                    <td>
                                                                                        <a href="{{ asset('storage/' . $applicant->mc) }}"
                                                                                            target="_blank">View</a>
                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
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
            </div>
        </section>
    </div>
@endsection
