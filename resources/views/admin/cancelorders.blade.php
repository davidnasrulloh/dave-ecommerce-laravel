@extends('admin.layouts.template')
@section('page_title')
    Cancel Order - Dave Ecomm
@endsection
@section('content')
<div class="container">
    <h4 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">Page /</span> Order Pending</h4>
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Canceled Orders</h5>
            <small class="text-muted float-end">Orders Information</small>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>User Id</th>
                    <th>Shipping Information</th>
                    <th>Product Id</th>
                    <th>Quantity</th>
                    <th>Total Will Pay</th>
                    <th>Status</th>
                </tr>
                @foreach ($cancel_orders as $order)
                    <tr>
                        <th>{{ $order->user_id }}</th>
                        <th>
                            <ul>
                                <li>{{ $order->sh_phone_number }}</li>
                                <li>{{ $order->sh_city }}</li>
                                <li>{{ $order->sh_postal_code }}</li>
                            </ul>
                        </th>
                        <th>{{ $order->product_id }}</th>
                        <th>{{ $order->quantity }}</th>
                        <th>{{ $order->total_price }}</th>
                        <th>{{ $order->status }}</th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection