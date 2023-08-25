@extends('user_template.layouts.template')
@section('content')
    <div class="fashion_section fw-bold" style="margin-top: 20px">
        <h2>Add To Cart Page</h2>
        <div class="" >
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12">
                <div class="box_main">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($cart_items as $item)
                                <tr>
                                    @php
                                        $product_name = App\Models\Product::where('id', $item->product_id)->value('product_name');
                                        $product_image = App\Models\Product::where('id', $item->product_id)->value('product_img');
                                    @endphp
                                    <td><img src="{{ asset($product_image) }}" alt="image" style="height: 50px"></td>
                                    <td>{{ $product_name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td><a class="btn btn-warning" href="{{ route('removecartitem', $item->id) }}">Remove</a></td>
                                </tr>

                                @php
                                    $total = $total + $item->price
                                @endphp
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total</td>
                                <td>{{ $total }}</td>
                                @if ($total <= 0)
                                    <td><a class="btn btn-primary disabled">Checkout Now</a></td>
                                @else
                                    <td><a href="{{ route('shippingaddress') }}" class="btn btn-primary">Checkout Now</a></td>
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection