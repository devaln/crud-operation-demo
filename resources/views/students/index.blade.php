@extends('students.layout')
@section('content')
    <div class="center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h1 class="text-center bg-light text-danger mt-4">Welcome To Student Index page : </h1><hr><br>
            </div>
            <!-- <div class="pull-right">
                <a class="form-control btn btn-primary" href="{{ route('students.create') }}"> Create Student</a>
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
                <th><a class="form-control btn btn-success" href="{{ route('students.create') }}"> Add Student</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->middle_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->contact }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->gender }}</td>
                <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete student!')" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
{!! $students->links() !!}
@endsection