@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row justify-content-center">
            <h2>Edit Employee</h2>
        </div>
    </div>
</div>
<div class="row justify-content-center">
<form action="{{ route('employees.update',$employeeuser->id) }}" method="POST">
    @csrf
    @method('PUT')
 <input type="hidden" name="id" value="{{ $employeeuser->id }}" class="form-control">
<div class="row">
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $employeeuser->title }}" required>
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Firstname:</label>
            <input type="text" class="form-control" placeholder="Firstname" name="firstname" value="{{ $employeeuser->firstname }}" required>
            @if ($errors->has('firstname'))
                <span class="text-danger">{{ $errors->first('firstname') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Lastname:</label>
            <input type="text" class="form-control" placeholder="lastname" name="lastname" value="{{ $employeeuser->lastname }}" required>
            @if ($errors->has('lastname'))
                <span class="text-danger">{{ $errors->first('lastname') }}</span>
            @endif
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Gender:</label>
            <input type="text" class="form-control" placeholder="gender" name="gender" value="{{ $employeeuser->gender }}" required>
            @if ($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span>
            @endif
        </div>
    </div>
</div>
   <div class="row">
     <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" placeholder="Email Address" name="email" value="{{ $employeeuser->email }}" required>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
     <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Phone:</label>
            <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{ $employeeuser->phone }}" required>
            @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>
    </div>
    </div>
    <div class="row" >
     <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Designation:</label>
            <input type="text" class="form-control" placeholder="Designation" name="designation" value="{{ $employeeuser->designation }}" required>
            @if ($errors->has('designation'))
                <span class="text-danger">{{ $errors->first('designation') }}</span>
            @endif
        </div>
    </div>
     <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Salary:</label>
            <input type="text" class="form-control" placeholder="salary" name="salary" value="{{ $employeeuser->salary }} " required>
            @if ($errors->has('salary'))
                <span class="text-danger">{{ $errors->first('salary') }}</span>
            @endif
        </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>

@endsection