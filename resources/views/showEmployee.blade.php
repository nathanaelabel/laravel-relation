@extends('layout.mainlayout')

    @section('title', 'Employee')

    @section('content')

    <div class="container-fluid p-5 bg-primary text-white text-center">

        <h1>Employee's Detail</h1>
        <br/>
        <p>Employee's Name: {{ $employees['emp_name'] }}</p>
        <p>Job Position: {{ $employees['job_position'] }}</p> 
        <p>Hire Date: {{ $employees['hire_date'] }}</p>
        <p>Department: {{ $employees['dept_name'] }}</p>
        
    </div>

@endsection