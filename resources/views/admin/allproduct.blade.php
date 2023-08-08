@extends('admin.layouts.template')
@section('page_title')
    All Product - Dave Ecomm
@endsection
@section('content')
    <div class="container mt-3">
        <h4 class="fw-bold py-3 mb-3"><span class="text-muted fw-light">Forms/</span> All Product</h4>
        <div class="card">
            <h5 class="card-header">Available All Product Information</h5>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div   div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id Product</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td class="col-sm-3">{{ $product->product_name }}</td>
                                <td class="col-sm-2">
                                    <img src="{{ asset($product->product_img) }}" style="width: 100px" alt="">
                                    <a class="btn btn-primary ms-1" href="{{ route('editproductimg', $product->id) }}"><i class="bx bx-edit-alt me-1"></i> Update Image</a>
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <div class="d-flex col-sm-4">
                                        <a class="dropdown-item" href="{{ route('editproduct', $product->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="{{ route('deleteproduct', $product->id) }}"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection