@extends('layout.mainlayout')

    @section('title', 'Department')

    @section('content')

    <div class="card text-center mt-4">
        <h4 class="card-header">Department Details</h4>
            <div class="card-body">
                <h4 class="card-title"><b>{{ $departments['dept_name'] }}</b></h4>
                <p class="card-text mt-3">Located in {{ $departments['location'] }}</p>
                <p class="card-text">{{ $departments['description'] }}</p>
            </div>
    </div>

    <table class="table-wrap">

        <table class="table table-wrap table-striped table-hover">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Job Position</th>
                    <th>Gender</th>
                    <th>Hire Date</th>
                    <th>Department</th>
                </tr>
            </thead>
            </tbody>
                @foreach ($departments->employees as $emp)
                    <tr>
                        <td>{{ ($loop->index) + 1 }}</td>
                        <td>{{ $emp['emp_name'] }}</td>
                        <td>{{ $emp['job_position'] }}</td>
                        <td>{{ $emp['gender'] }}</td>
                        <td>{{ $emp['hire_date'] }}</td>
                        <td>{{ $emp->departments->dept_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </table>

@endsection
