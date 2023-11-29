@extends('layouts.app2')
@section('content')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>

        <div class="div1">
            <h2>Applicants Information</h2>
    
            <div class="row">
                <div class="col-md-12">
                    {{-- @if(count($applicant) > 0) --}}
                    @if($applicant && count($applicant) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>CID</th>
                                    <th>Contact</th>
                                    <th>Position</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applicant as $app)
                                <tr>
                                    <td>{{$app->name}}</td>
                                    <td>{{$app->cid}}</td>
                                    <td>{{$app->contact}}</td>
                                    <td>{{$app->position}}</td>
                                    <td>{{$app->email}}</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" value="1" name='flag'>
                                            <i class="far fa-edit"></i>
                                            <a href="{{ route('view-candidate', $app->id) }}"
                                                style="color: white; text-decoration: none;">View</a>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" value="1" name='flag'>
                                            <i class="far fa-edit"></i>
                                            <a href="{{ route('view-candidate', $app->id) }}"
                                                style="color: white; text-decoration: none;">Shortlist</a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-info mt-4" role="alert">
                            <h4 class="alert-heading">No Applicants Yet!</h4>
                            <p class="mb-0">There are currently no applicants. Feel free to check back later or add new applicants.</p>
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    
        <!-- Bootstrap JS and Popper.js (Optional) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </body>
</html>
@endsection
