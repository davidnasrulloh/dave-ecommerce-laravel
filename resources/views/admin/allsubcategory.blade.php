@extends('admin.layouts.template')
@section('page_title')
    All Sub Category - Dave Ecomm
@endsection
@section('content')
    <div class="container mt-3">
        <h4 class="fw-bold py-3 mb-3"><span class="text-muted fw-light">Forms/</span> All Sub Category</h4>
        <div class="card">
            <h5 class="card-header">Available Sub Category Information</h5>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div   div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id Sub Category</th>
                            <th>Sub Category Name</th>
                            <th>Category</th>
                            <th>Product</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($allsubcategories as $subcategory)
                            <tr>
                                <td>{{ $subcategory->id }}</td>
                                <td class="col-sm-5">{{ $subcategory->subcategory_name }}</td>
                                <td class="col-sm-2">{{ $subcategory->category_name }}</td>
                                <td>{{ $subcategory->product_count }}</td>
                                <td>
                                    <div class="d-flex col-sm-4">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
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