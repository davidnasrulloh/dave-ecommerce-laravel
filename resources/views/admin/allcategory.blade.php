@extends('admin.layouts.template')
@section('page_title')
    All Category - Dave Ecomm
@endsection
@section('content')
    <div class="container mt-3">
        <h4 class="fw-bold py-3 mb-3"><span class="text-muted fw-light">Forms/</span> All Category</h4>
        <div class="card">
            <h5 class="card-header">Available Category Information</h5>
            <div   div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id Category</th>
                            <th>Category Name</th>
                            <th>Sub Category</th>
                            <th>Product</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>1</td>
                            <td class="col-sm-4">Electronics</td>
                            <td>10</td>
                            <td>100</td>
                            <td>
                                <div class="d-flex col-sm-4">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection