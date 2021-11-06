@extends('layout.mainlayout')

    @section('title', 'Department')
    @section('pagetitle', 'Department List')

    @section('content')

    <div class="text-right">
        <a class="btn btn-success pull-right float-end" href="{{ route('departments.create') }}"><i class="fas fa-arrow-alt-circle-right"></i>Create Department</a>
    </div>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Department</th>
                <th>Location</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>

            @foreach ($departments as $dept)
            
                <tr>
                    <td>{{ ($loop->index) + 1 }}</td>
                    <td>{{ $dept['dept_name'] }}</td>
                    <td>{{ $dept['location'] }}</td>
                    <td>{{ $dept['description'] }}</td>
                    <td class="d-flex">
                        <a type="button" href="{{ route('departments.show', $dept->dept_id) }}">
                            <i class="bi bi-three-dots"></i></a>
                        <a type="button" href="{{ route('departments.edit', $dept->dept_id) }}">
                            <i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('departments.destroy', $dept->dept_id) }}" method="POST">
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
