<?php

namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee=Employee::orderBy('id','DESC')->get();
        return view('index',['employee'=>$employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'firstname' => 'required',
            'lastname' =>'required',
            'gender' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'designation' =>'required',
            'salary' =>'required',
            'date_of_birth' =>'required'
        ]);
        $insert=Employee::create([
            'title'=>$request->title,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'designation'=>$request->designation,
            'salary'=>$request->salary,
            'date_of_birth'=>$request->date_of_birth
        ]);
    
      if($insert){
        Session::flash('success',"Employee created successfully");
        return redirect()->route('index');
      }else{
        Session::flash('fail',"Employee could not be created");
        return redirect()->route('employees.create');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $employeeuser = Employee::find($id);
     
        return view('employees.edit',compact('employeeuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'firstname' => 'required',
            'lastname' =>'required',
            'gender' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'designation' =>'required',
            'salary' =>'required',
            'date_of_birth' =>'required'
        ]);
    
        $input = $request->all();
        $employee = Employee::find($id);
        $user->update($input);
        return redirect()->route('index')
                        ->with('success','employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete= Employee::findorfail($id);
        $delete = $delete->delete();
        if($delete){
            Session::flash('success',"employee deleted successfully!");
            return redirect()->route("index");
        }
        else{
            Session::flash('fail',"Oops! failed to delete employee");
            return redirect()->route("employees.edit");
    }
    }
}
