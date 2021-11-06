@extends('layout.mainlayout')

    @section('title', 'Department')

    @section('content')

    <div class="container">

        <table class="table-wrap">

            <table class="table table-wrap table-striped table-hover">

                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage Department</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('departments.create') }}" class="btn btn-success">
                                <i class="material-icons">&#xE147;</i> <span>Add New Department</span></a>
                        </div>
                    </div>
                </div>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Department</th>
                        <th>Location</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                </tbody>
    
                    @foreach ($departments as $dept)
                    
                        <tr>
                            <td>{{ ($loop->index) + 1 }}</td>
                            <td>{{ $dept['dept_name'] }}</td>
                            <td>{{ $dept['location'] }}</td>
                            <td>{{ $dept['description'] }}</td>
        
                            <td class="d-flex">
                                
                                <a href="{{ route('departments.show', $dept->dept_id) }}" class="show">
                                    <i class="material-icons"data-toggle="tooltip" title="Show">&#xE5d3;</i></a>

                                <a href="{{ route('departments.edit', $dept->dept_id) }}" class="edit">
                                    <i class="material-icons"data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                <form action="{{ route('departments.destroy', $dept->dept_id) }}" method="POST">
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
