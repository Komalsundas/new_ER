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
            <h2>Shortlisted Information</h2>
    
            <div class="row">
                <div class="col-md-12">
                    {{-- @if(count($shortlistedCandidates) > 0) --}}
                    @if($shortlistedCandidates && count($shortlistedCandidates) > 0)
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-white">Name</th>
                                    <th class="text-white">CID</th>
                                    <th class="text-white">Contact</th>
                                    <th class="text-white">Position</th>
                                    <th class="text-white">Email</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach($shortlistedCandidates as $app)
                                <tr>
                                    <td>{{$app->name}}</td>
                                    <td>{{$app->cid}}</td>
                                    <td>{{$app->contact}}</td>
                                    <td>{{$app->position}}</td>
                                    <td>{{$app->email}}</td>
                                 
                                </tr>
                            @endforeach
                            
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-info mt-4" role="alert">
                            <h4 class="alert-heading">No Shortlisted Candidates Yet!</h4>
                            <p class="mb-0">It looks like there are no candidates shortlisted for this position at the moment. Check back later or consider adding new candidates to the shortlist.</p>
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
