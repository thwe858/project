@extends('backend.layout')
@section('content')
<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Categories List</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>
        <div class="card shadow mb-4">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary ">All Categories</h6>
            <a href="{{route('categories.index')}}" class="btn btn-primary">Back</a>
    </div>
    <div class="card-body">
       <form action="{{route('categories.store')}}" method="POST">
        @csrf
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="categoryName" class="form-control w-50 @error('categoryName') is-invalid @enderror" id="name" placeholder="Eg.Electronics">
        @error('categoryName')
        <span class="invalid-feedback" role=alert>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
  </div>
 
   <div class="row">
    <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </div>
  
</form>
    </div>
</div>
@endsection