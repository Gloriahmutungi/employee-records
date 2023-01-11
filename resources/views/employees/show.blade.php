@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
        </div>
        <div class="justify-content-center">
            <h2> Show Employee Details</h2>
        </div>
    
    </div>
</div>


<div class="row justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{ $employee->Title }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Firstname:</strong>
            {{ $employee->firtsname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Latname:</strong>
            {{ $employee->lastname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $employee->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone:</strong>
            {{ $employee->phone }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Designation:</strong>
            {{ $employee->designation }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Salary:</strong>
            {{ $employee->salary }}
        </div>
    </div>
    
</div>
@endsection