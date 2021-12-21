<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EmployeeController extends Controller
{
    public function index(){
        $employee = Employee::latest()->get();
        return view('welcome',compact('employee'));
    }

    public function employeeStore(Request $request){
        $store = Employee::create([
            'name'=>$request->name,
            'title'=>$request->title,
            'employee_id'=>$request->employee_id,
            'joining_date'=>$request->joining_date,
            'dob'=>$request->dob,
            'blood_group'=>$request->blood_group,
            'description'=>$request->description,
        ]);
        return redirect()->back();

    }

    public function employeeEdit($id){
        $edit= Employee::where('id',$id)->first();
        return view('edit',compact('edit'));
    }

    public function employeeUpdate(Request $request)
    {
        $id = $request->id;
        Employee::where('id',$id)->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'employee_id'=>$request->employee_id,
            'joining_date'=>$request->joining_date,
            'dob'=>$request->dob,
            'blood_group'=>$request->blood_group,
            'description'=>$request->description,
        ]);
        return redirect()->route('index');
    }

    public function employeeDelete($id){
        Employee::where('id',$id)->delete();
        return redirect()->route('index');
    }
}
