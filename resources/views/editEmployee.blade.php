@extends('layout.mainlayout')

    @section('title', 'Employee')
    @section('pagetitle', 'Edit Employee')

    @section('content')

        <form action="{{ route('employees.update', $employee->emp_id) }}" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PATCH">

            <div class="form-group">
                <label for="emp_name">Employee's Name:</label>
                <input input type="text" class="form-control" name="emp_name" value="{{ $employee->emp_name }}" required>
            </div>

            <div class="form-group">
                <label for="job_position">Job Position:</label>
                <input input type="text" class="form-control" name="job_position" value="{{ $employee->job_position }}">
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <br />
                <select name="gender" class="custom-select">
                    <option hidden value="{{ $employee->gender }}">{{ $employee->gender }}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <br />

            <div class="form-group">
                <label for="hire_date">Hire Date:</label>
                <input input type="date" class="form-control" name="hire_date" value="{{ $employee->hire_date }}">
            </div>
            <br />

            <div class="form-group">
                <label for="dept_name">Department:</label>
                <br />
                <select name="dept_name" class="custom-select" value="{{ $employee->dept_name }}">
                    @foreach ($departments as $dept)
                        @if ($dept['dept_id'] == $employee['dept_name'])
                            <option value="{{ $dept['dept_id'] }}" selected>{{ $dept['dept_name']}}</option>
                        @else
                            <option value="{{ $dept['dept_id'] }}">{{ $dept['dept_name']}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <br />
            <button type="submit" name="submit" value="submit">Submit</button>
            
        </form>

@endsection
