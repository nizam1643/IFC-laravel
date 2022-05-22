@extends('student.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Project 1 Laravel CRUD</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('student.create') }}">Create New Data</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Matric</th>
        <th>Action</th>
    </tr>

    @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->matric }}</td>
            <td>
                <form action="{{ route('student.destroy', $student->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('student.show', $student->id) }}">Show Data</a>

                <a class="btn btn-warning" href="{{ route('student.edit', $student->id) }}">Edit Data</a>

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">DELETE</button>

                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection
