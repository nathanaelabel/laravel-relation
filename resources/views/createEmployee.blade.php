@extends('layout.mainlayout')

    @section('title', 'Employee')
    @section('pagetitle', 'Create Employee')

    @section('content')

    <div class="container mt-3">

        <form action="{{ route('employees.store') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="employee_name">Employee's Name:</label>
                <input input type="text" class="form-control" name="emp_name">
            </div>

            <div class="form-group">
                <label for="job_position">Job Position:</label>
                <input input type="text" class="form-control" name="job_position">
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <br />
                <select name="gender" class="custom-select">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <br />

            <div class="form-group">
                <label for="hire_date">Hire Date:</label>
                <input input type="date" class="form-control" name="hire_date">
            </div>
            <br />

            <div class="form-group">
                <label for="dept_name">Department:</label>
                <br />
                <select name="dept_name" class="custom-select">
                    @foreach ($departments as $dept)

                    <option value="{{ $dept['dept_id'] }}">{{ $dept['dept_name']}}</option>

                    @endforeach
                </select>
            </div>

            <br />
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>

        </form>

    </div>

@endsection
