@extends('layout.mainlayout')

    @section('title', 'Employee')

    @section('content')

    <div class="card text-center mt-4">
        <h4 class="card-header">Employee Detail</h4>
            <div class="card-body">
                <p class="card-text">Employee's Name: {{ $employees['emp_name'] }}</p>
                <p class="card-text">Job Position: {{ $employees['job_position'] }}</p> 
                <p class="card-text">Hire Date: {{ $employees['hire_date'] }}</p>
                <p class="card-text">Department ID: {{ $employees['dept_name'] }}</p>
            </div>
    </div>

@endsection