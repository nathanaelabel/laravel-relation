@extends('layout.mainlayout')

    @section('title', 'Department')
    @section('pagetitle', 'Edit Department')

    @section('content')


    <form action="{{ route('departments.update', $department->dept_id) }}" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PATCH">

        <div class="form-group">
            <label for="dept_name">Department Name:</label>
            <input input type="text" class="form-control" name="dept_name" value="{{ $department->dept_name }}" required>
        </div>

        <div class="form-group">
            <label for="location">Location:</label>
            <input input type="text" class="form-control" name="location" value="{{ $department->location }}">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input input type="text" class="form-control" name="description" value="{{ $department->description }}">
        </div>

        <br />
        <button type="submit" name="submit" value="submit">Submit</button>

    </form>    


@endsection
