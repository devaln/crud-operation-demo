@extends('teachers.layout')
@section('content')
    
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger"> Teacher Detail : </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Contact</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Education</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $teacher->first_name }}</td>
                    <td>{{ $teacher->middle_name }}</td>
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->contact }}</td>
                    <td>{{ $teacher->date_of_birth }}</td>
                    <td>{{ $teacher->gender }}</td>
                    <td>{{ $teacher->education }}</td>
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('teachers.index') }}"> Back</a>
        </div>
    </div>
@endsection