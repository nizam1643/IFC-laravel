@extends('student.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Project 1 Laravel CRUD - CREATE</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('student.index') }}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Sorry Error!</strong> Please try again. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('student.store') }}" method="POST">
@csrf

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <p>Name:</p>
            <input type="text" name="name" class="form-control" placeholder="Please Enter Name">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <p>Matric:</p>
            <input type="text" name="matric" class="form-control" placeholder="Please Enter Matric">
        </div>
    </div>
    <div class="col-xl-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>

@endsection
