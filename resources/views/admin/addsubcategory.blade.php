@extends('admin.layouts.template')
@section('page_title')
    Add Sub Product - Dave Ecomm
@endsection
@section('content')
<div class="container mt-3">
    <h4 class="fw-bold py-3 mb-3"><span class="text-muted fw-light">Forms/</span> Add Sub Category</h4>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add New Sub Category</h5>
                <small class="text-muted float-end">Input Information</small>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="subcategory_name">Sub Category Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" placeholder="Electronic" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="category">Select Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="category" name="category" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Sub Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection