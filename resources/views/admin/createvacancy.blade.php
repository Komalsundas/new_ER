@extends('layouts.app2')

@section('content')

<!-- Include the datepicker library CSS and JavaScript files -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
            $("#dateline").datepicker({
                dateFormat: "dd/mm/yy", // Set the desired date format
                changeMonth: true,
                changeYear: true,
            });
        });
</script>

<div class="div1"></div>

<div class="container">
    <b>
        <p class="text-center">Create Vaccancy</p>
    </b>
    <fieldset class="border p-2">
        <legend class="float-none w-auto p-2">Create Vacancy</legend>
        <form action="{{ route('save-vacancy')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="position" class="form-label fw-bold small">Position</label>
                    <input type="text" class="form-control form-control-sm" name="position" id="position" required>
                </div>
                <div class="col-md-4">
                    <label for="minQuali" class="form-label fw-bold small">Minimum Qualification</label>
                    <select class="form-select form-select-sm form-control" name="minQuali" id="minQuali" required>
                        <option value="">Select Minimum Qualification</option>
                        @foreach($minQuali as $res)
                        <option value="{{$res->id}}">{{$res->qualification}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="course" class="form-label fw-bold small">Course Specific</label>
                    <textarea type="text" class="form-control form-control-sm" name="course" id="course"
                        required></textarea>
                </div>
                <div class="col-md-4">
                    <label for="criteria" class="form-label fw-bold small">Shortlisting Criteria</label>
                    <textarea type="text" class="form-control form-control-sm" name="criteria" id="criteria"
                        required></textarea>
                </div>

                <div class="col-md-4">
                    <label for="empType" class="form-label fw-bold small">Employment Type</label>
                    <select class="form-select form-select-sm form-control" name="empType" id="empType" required>
                        <option value="">Select Employment Type</option>
                        @foreach($empType as $key)
                        <option value="{{$key->id}}">{{$key->employType}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="slot" class="form-label fw-bold small">Slots</label>
                    <input type="number" class="form-control form-control-sm" name="slot" id="slot" required>
                </div>

                <div class="col-md-4">
                    <label for="remuneration" class="form-label fw-bold small">Remuneration</label>
                    <textarea type="text" class="form-control form-control-sm" name="remuneration" id="remuneration"
                        required></textarea>
                </div>

                <div class="col-md-4">
                    <label for="dateline" class="form-label fw-bold small">Application Dateline</label>
                    <div class="input-group date">
                        <span class="input-group-text">
                            <i class="fas fa-calendar"></i>
                        </span>
                        <input type="text" class="form-control form-control-sm" name="dateline" id="dateline" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="tor" class="form-label fw-bold small">TOR</label>
                    <input type="file" class="form-control" id="tor" name="tor" required>
                </div>

            </div>
            <div class="">
                <button type="submit" class="btn-info" id="submitBtn">Save</button>
            </div>
        </form>
    </fieldset>
</div>
@endsection