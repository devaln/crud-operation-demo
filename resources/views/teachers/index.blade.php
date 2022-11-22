@extends('teachers.layout')
@section('content')
    <div class="center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h1 class="text-center bg-light text-danger mt-4">Welcome To Teacher Index page : </h1><hr><br>
            </div>
            <!-- <div class="pull-right">
                <a class="form-control btn btn-primary" href="{{ route('teachers.create') }}"> Create Student</a>
            </div> -->
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-hover">
        <thead class="text-center bg-dark text-white">
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Contact</th>
                <th>Birth Date</th>
                <th>Gender</th>
                <th>Education</th>
                <th><a class="form-control btn btn-success" href="{{ route('teachers.create') }}"> Add Student</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->middle_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->contact }}</td>
                <td>{{ $teacher->date_of_birth }}</td>
                <td>{{ $teacher->gender }}</td>
                <td>{{ $teacher->education }}</td>
                <td>
                <form action="{{ route('teachers.destroy',$teacher->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('teachers.show',$teacher->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete Teacher!')" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
{!! $teachers->links() !!}
@endsection