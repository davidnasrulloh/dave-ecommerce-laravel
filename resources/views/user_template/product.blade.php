@extends('user_template.layouts.template')
@section('content')
    <!-- fashion section start -->
    <div class="fashion_section" style="margin-top: 36px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box_main">
                        <div class="tshirt_img"><img src="{{ asset($product->product_img) }}"></div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="box_main">
                        <h4 class="shirt_text text-left">{{ $product->product_name }}</h4>
                        <p class="price_text text-left">Price  <span style="color: #262626;">$ {{ $product->price }}</span></p>
                        <p class="lead">{{ $product->product_long_des }}</p>
                        <div class="my-3 product-details bg-light">
                            <p>Category {{ $product->product_category_name }}</p>
                            <p>Sub Category {{ $product->product_subcategory_name }}</p>
                            <p>Quantity {{ $product->quantity }}</p>
                        </div> 
                        <div class="btn_main">
                            <div class="btn btn-warning"><a href="{{ route('singleproduct', [$product->id, $product->slug]) }}">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fashion_section" style="margin-top: 20px">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <h1 class="fashion_taital">Relate Product</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            
                            @foreach ($related_products as $product)
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">{{ $product->product_name }}</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ {{ $product->price }}</span></p>
                                        <div class="tshirt_img"><img src="{{ asset($product->product_img) }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="{{ route('singleproduct', [$product->id, $product->slug]) }}">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fashion section end -->
@endsection