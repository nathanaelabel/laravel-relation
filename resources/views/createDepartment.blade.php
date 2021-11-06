@extends('layout.mainlayout')

    @section('title', 'Department')
    @section('pagetitle', 'Create Department')

    @section('content')

    <div class="container mt-3">

        <form action="{{ route('departments.store') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="dept_name">Department Name:</label>
                <input input type="text" class="form-control" name="dept_name">
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input input type="text" class="form-control" name="location">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input input type="text" class="form-control" name="description">
            </div>

            <br />
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>

        </form>

    </div>

@endsection
