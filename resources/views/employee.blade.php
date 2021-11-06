@extends('layout.mainlayout')

    @section('title', 'Employee')

    @section('content')

    <div class="container">

        <table class="table-wrap">

            <table class="table table-wrap table-striped table-hover">

                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Employee List</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('employees.create') }}" class="btn btn-success">
                                <i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                        </div>
                    </div>
                </div>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Job Position</th>
                        <th>Gender</th>
                        <th>Hire Date</th>
                        <th>Department</th>
                        <th>Actions</th>
                        </tr>
                </thead>

                </tbody>
    
                    @foreach ($employees as $emp)
                    
                        <tr>
                            <td>{{ ($loop->index) + 1 }}</td>
                            <td>{{ $emp['emp_name'] }}</td>
                            <td>{{ $emp['job_position'] }}</td>
                            <td>{{ $emp['gender'] }}</td>
                            <td>{{ $emp['hire_date'] }}</td>
                            <td>
                                <a href="{{ route ('departments.show', $emp->departments->dept_id) }}">
                                    {{ $emp->departments->dept_name }}</a></td>
        
                            <td class="d-flex">
                                
                                <a href="{{ route('employees.show', $emp->emp_id) }}" class="show">
                                    <i class="material-icons"data-toggle="tooltip" title="Show">&#xE5d3;</i></a>

                                <a href="{{ route('employees.edit', $emp->emp_id) }}" class="edit">
                                    <i class="material-icons"data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                <form action="{{ route('employees.destroy', $emp->emp_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete">
                                        <i class="material-icons"data-toggle="tooltip" title="Delete" 
                                        onclick="return confirm('Click OK to confirm delete the data!');">&#xE872;</i>
                                    </button>
                                </form>

                            </td>

                        </tr>
            
                    @endforeach

                </tbody>

            </table>

        </table>

    </div>
        

@endsection
