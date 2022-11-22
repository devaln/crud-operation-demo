@extends('teachers.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger col-lg-8">Create Teacher : </h1>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> something we are problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('teachers.store') }}" method="POST">
        <legend>Fill required detail below :-</legend>
    @csrf
    <div class="row">
        <div class="col-xs-12 col-lg-8 col-md-12">
            <div class="form-group">
                <strong>First Name :</strong>
                <input type="text" name="first_name" class="form-control" placeholder="First name">
            </div>
        </div>
        <div class="col-xs-12 col-lg-8 col-md-12">
            <div class="form-group">
                <strong>Middle Name :</strong>
                <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
            </div>
        </div>
        <div class="col-xs-12 col-lg-8 col-md-12">
            <div class="form-group">
                <strong>Last Name :</strong>
                <input type="text" name="last_name" class="form-control" placeholder="Last name">
            </div>
        </div>
        <div class="col-xs-12 col-lg-8 col-md-12">
            <div class="form-group">
                <strong>Contact :</strong>
                <input type="integer" max-lenght="10" name="contact" class="form-control" placeholder="Contact">
            </div>
        </div>
        <div class="col-xs-12 col-lg-8 col-md-12">
            <div class="form-group">
                <strong>Birth Date :</strong>
                <input type="date" name="date_of_birth" class="form-control" placeholder="Date Of Birth">
            </div>
        </div>
        <div class="col-xs-12 col-lg-8 col-md-12">
            <div class="form-group">
                <strong>Education :</strong>
                <input type="text" name="education" class="form-control" placeholder="Qualification">
            </div>
        </div>
        <div class="col-xs-12 col-lg-8 col-md-12">
            <div class="form-group">
                <strong>Gender :</strong><br>
                <input type="radio" name="gender" value="male" >Male&nbsp;&nbsp;
                <input type="radio" name="gender" value="female">Female&nbsp;&nbsp;
                <input type="radio" name="gender" value="other">Other&nbsp;&nbsp;
            </div>
        </div>
        <div class="col-xs-12 col-lg-8 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('teachers.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
@endsection