<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Employee';
        $pagetitle = 'Employee List';
        
        $employees = Employee::all();

        return view('employee', compact('title', 'pagetitle', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Employee';
        $pagetitle = 'Create Employee';
        
        $departments = Department::all();

        return view('createEmployee', compact('title', 'pagetitle', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Employee::create([
            'emp_name' => $request->emp_name,
            'job_position' => $request->job_position,
            'gender' => $request->gender,
            'hire_date' => $request->hire_date,
            'dept_name' => $request->dept_name
        ]);

        return redirect(route('employees.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @param  int  $emp_id
     * @return \Illuminate\Http\Response
     */
    public function show($emp_id)
    {
        //
        return view('showEmployee', [
            'title' => 'Employee',
            'employees' => Employee::where('emp_id', $emp_id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @param  int  $emp_id
     * @return \Illuminate\Http\Response
     */
    public function edit($emp_id)
    {
        //
        $title = 'Employee';
        $pagetitle = 'Edit Employee';

        $employee = Employee::where('emp_id', $emp_id)->first();
        $departments = Department::all();

        return view('editEmployee', compact('employee','departments', 'title', 'pagetitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @param  int  $emp_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $emp_id)
    {
        //
        $employee = Employee::where('emp_id', $emp_id)->first();

        $employee->update([
            'emp_name' => $request->emp_name,
            'job_position' => $request->job_position,
            'gender' => $request->gender,
            'hire_date' => $request->hire_date,
            'dept_name' => $request->dept_name
        ]);

        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @param  int  $emp_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($emp_id)
    {
        //
        $employee = Employee::where('emp_id', $emp_id)->first();
        $employee->delete();

        return redirect(route('employees.index'));
    }
}
