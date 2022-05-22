@extends('student.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Project 1 Laravel CRUD - SHOW</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('student.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <p>Name:</p>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" readonly>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <p>Matric:</p>
            <input type="text" name="matric" class="form-control" value="{{ $student->matric }}" readonly>
        </div>
    </div>
</div>

@endsection
