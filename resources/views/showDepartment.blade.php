@extends('layout.mainlayout')

    @section('title', 'Department')

    @section('content')

    <div class="container-fluid p-5 bg-primary text-white">
        <h1 class="text-center">Department Details</h1>
        <p>Department: {{ $departments['dept_name'] }}</p>
        <p>Location: {{ $departments['location'] }}</p>
        <p>Description: {{ $departments['description'] }}</p>
    </div>
    
    <br/>

    <table class="table">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Job Position</th>
            <th>Gender</th>
            <th>Hire Date</th>
            <th>Department</th>
        </tr>

        @foreach ($departments->employees as $emp)
        
            <tr>
                <td>{{ ($loop->index) + 1 }}</td>
                <td>{{ $emp['emp_name'] }}</td>
                <td>{{ $emp['job_position'] }}</td>
                <td>{{ $emp['gender'] }}</td>
                <td>{{ $emp['hire_date'] }}</td>
                {{-- <td>{{ $emp['dept_name'] }}</td> --}}
                <td>{{ $emp->departments->dept_name }}</td>
            </tr>

        @endforeach

    </table>

@endsection
