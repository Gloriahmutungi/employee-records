@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Employees Management</h2>
        </div>
        <div class="pull-right">
            
            <a class="btn btn-dark" href="{{ route('employees.create') }}">New Employee</a>
           
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Email</th>
                <th>phone</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($employee as $key=>$value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->firstname}}</td>
                <td>{{ $value->lastname }}</td>
                <td>{{ $value->gender}}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone}}</td>
                <td>{{ $value->designation }}</td>
                <td>{{ $value->salary }}</td>
                <td style="display: flex">
                    <a href="{{ route('employees.show',$value->id) }}" title="show" class="btn btn-primary m-2">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('employees.edit',$value->id) }}" title="edit" class="btn btn-primary m-2">
                    <i class="fa fa-edit"></i>
                    </a>
                    <form method="POST" action="{{ route('employees.destroy',  $value->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-2" title="delete" type="submit">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
           
            </tbody>
        <tfoot>
            <tr>
            <th>No</th>
                <th>Title</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Email</th>
                <th>phone</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>




<p class="text-center text-primary"><small>Employee records</small></p>
@endsection