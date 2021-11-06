<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Department';
        $pagetitle = 'Department List';
        
        $departments = Department::all();

        return view('department', compact('title', 'pagetitle', 'departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Department';
        $pagetitle = 'Create Department';
        
        $departments = Department::all();

        return view('createDepartment', compact('title', 'pagetitle', 'departments'));
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
        Department::create([
            'dept_name' => $request->dept_name,
            'location' => $request->location,
            'description' => $request->description
        ]);

        return redirect(route('departments.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @param  int  $dept_id
     * @return \Illuminate\Http\Response
     */
    public function show($dept_id)
    {
        //
        return view('showDepartment', [
            'title' => 'Department',
            'departments' => Department::where('dept_id', $dept_id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @param  int  $dept_id
     * @return \Illuminate\Http\Response
     */
    public function edit($dept_id)
    {
        //
        $title = 'Department';
        $pagetitle = 'Edit Department';

        $department = Department::where('dept_id', $dept_id)->first();

        return view('editDepartment', compact('department', 'title', 'pagetitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @param  int  $dept_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dept_id)
    {
        //
        $department = Department::where('dept_id', $dept_id)->first();

        $department->update([
            'dept_name' => $request->dept_name,
            'location' => $request->location,
            'description' => $request->description
        ]);

        return redirect(route('departments.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @param  int  $dept_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dept_id)
    {
        //
        $department = Department::where('dept_id', $dept_id)->first();
        $department->delete();

        return redirect(route('departments.index'));
    }
}
