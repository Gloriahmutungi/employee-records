@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row justify-content-center">
            <h2>New Employee</h2>
        </div>
    </div>
</div>
<div class="row justify-content-center">
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
<div class="row">
   <div class="row">
   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" class="form-control" placeholder="Title" name="title" required>
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
    </div>
   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Firstname:</label>
            <input type="text" class="form-control" placeholder="Firstname" name="firstname" required>
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
            <input type="text" class="form-control" placeholder="Lastname" name="lastname" required>
            @if ($errors->has('lastname'))
                <span class="text-danger">{{ $errors->first('lastname') }}</span>
            @endif
        </div>
    </div>
   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Gender:</label>
                <select class="form-control" name="gender" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
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
            <input type="text" class="form-control" placeholder="Email" name="email" required>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Phone:</label>
            <input type="text" class="form-control" placeholder="phone" name="phone" required>
            @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>designation:</label>
            <input type="text" class="form-control" placeholder="designation" name="designation" required>
            @if ($errors->has('designation'))
                <span class="text-danger">{{ $errors->first('designation') }}</span>
            @endif
        </div>
    </div>
   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>salary:</label>
            <input type="text" class="form-control" placeholder="salary" name="salary" required>
            @if ($errors->has('salary'))
                <span class="text-danger">{{ $errors->first('salary') }}</span>
            @endif
        </div>
    </div>
    <div>
 <div class="row">
   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <label>Date of birth:</label>
            <input type="text" class="form-control" placeholder="Date of birth" name="date_of_birth" required>
            @if ($errors->has('date_of_birth'))
                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
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