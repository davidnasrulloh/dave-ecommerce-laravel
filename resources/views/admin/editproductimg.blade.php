@extends('admin.layouts.template')
@section('page_title')
    Edit Product Image - Dave Ecomm
@endsection
@section('content')
<div class="container mt-3">
    <h4 class="fw-bold py-3 mb-3"><span class="text-muted fw-light">Page /</span> Edit Product Image</h4>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Product Image</h5>
                <small class="text-muted float-end">Input Information</small>
            </div>
            <div class="card-body">
                <form action="{{ route('updateproductimg') }}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <input type="hidden" value="{{ $productinfo->id }}" name="id">
                    <input type="hidden" value="{{ $productinfo->product_img }}" name="name_image_previous">

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="product_name">Previous Image</label>
                        <div class="col-sm-10">
                            <img src="{{ asset($productinfo->product_img) }}" style="width: 200px" alt="" srcset="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="product_img">Upload New Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="product_img" name="product_img" />                        
                        </div>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Product Image</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection