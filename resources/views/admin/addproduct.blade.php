@extends('admin.layouts.template')
@section('page_title')
    Add Product - Dave Ecomm
@endsection
@section('content')
<div class="container mt-3">
    <h4 class="fw-bold py-3 mb-3"><span class="text-muted fw-light">Forms/</span> Add Product</h4>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add New Product</h5>
                <small class="text-muted float-end">Input Information</small>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="product_name">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Electronic" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="product_price">Product Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Rp. 50.000" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="product_quantity">Product Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="product_quantity" name="product_quantity" placeholder="50" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="product_shortdescription">Product Short Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_shortdescription" name="product_shortdescription" placeholder="Short Description Product" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="product_longdescription">Product Long Description</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="product_longdescription" name="product_longdescription" placeholder="Long Description Product" rows="5" ></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="category">Select Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="category" name="category" aria-label="Default select example">
                                <option selected>Select Category Here</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="subcategory">Select Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="subcategory" name="subcategory" aria-label="Default select example">
                                <option selected>Select Sub Category Here</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="product_quantity">Upload Product Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" />                        
                        </div>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection