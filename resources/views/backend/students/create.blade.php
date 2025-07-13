@extends('backend.layout')
@section('content')
<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Students Create</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>
        <div class="card shadow mb-4">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Student create</h6>
            <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
    </div>
    <div class="card-body">
<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <div class="card shadow-sm p-4 mb-5 bg-white rounded">
        <div class="card-header bg-white border-0 mb-4">
            <h4 class="text-primary">Create Student</h4>
        </div>

        {{-- Student Name --}}
        <div class="mb-3 row">
            <label for="name" class="col-sm-3 col-form-label">Student Name</label>
            <div class="col-sm-9">
                <input type="text" name="studentName" id="name"
                       class="form-control @error('studentName') is-invalid @enderror"
                       placeholder="Eg. Mg Mg">
                @error('studentName')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        {{-- Student Age --}}
        <div class="mb-3 row">
            <label for="age" class="col-sm-3 col-form-label">Student Age</label>
            <div class="col-sm-9">
                <input type="number" name="studentAge" id="age"
                       class="form-control @error('studentAge') is-invalid @enderror"
                       placeholder="Enter your age">
                @error('studentAge')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        {{-- Gender --}}
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-9 d-flex align-items-center">
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="gender" value="Male" id="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Female" id="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
        </div>

        {{-- Address --}}
        <div class="mb-4 row">
            <label for="address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-9">
                <input type="text" name="address" id="address"
                       class="form-control @error('address') is-invalid @enderror"
                       placeholder="Eg. Yangon">
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        {{-- Submit Button --}}
        <div class="row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Add Student</button>
            </div>
        </div>
    </div>
</form>

    </div>
</div>
@endsection