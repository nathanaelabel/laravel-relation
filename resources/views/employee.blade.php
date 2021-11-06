@extends('layout.mainlayout')

    @section('title', 'Employee')
    @section('pagetitle', 'Employee List')

    @section('content')

    <div class="text-right">
        <a class="btn btn-success pull-right float-end" href="{{ route('employees.create') }}"><i class="fas fa-arrow-alt-circle-right"></i>Create Employee</a>
    </div>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Job Position</th>
                <th>Gender</th>
                <th>Hire Date</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>

            @foreach ($employees as $emp)
            
                <tr>
                    <td>{{ ($loop->index) + 1 }}</td>
                    <td>{{ $emp['emp_name'] }}</td>
                    <td>{{ $emp['job_position'] }}</td>
                    <td>{{ $emp['gender'] }}</td>
                    <td>{{ $emp['hire_date'] }}</td>
                    {{-- <td>{{ $emp['dept_name'] }}</td> --}}
                    <td>
                        <a href="{{ route ('departments.show', $emp->departments->dept_id) }}">
                            {{ $emp->departments->dept_name }}</a></td>

                    <td class="d-flex">
                        <a type="button" href="{{ route('employees.show', $emp->emp_id) }}">
                            <i class="bi bi-three-dots"></i></a>
                        <a type="button" href="{{ route('employees.edit', $emp->emp_id) }}">
                            <i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('employees.destroy', $emp->emp_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger"
                                onclick="return confirm('Click OK to confirm delete the data!');">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>     
                    </td>
                </tr>
    
            @endforeach

        </table>

@endsection
