@extends('user_template.layouts.template')
@section('content')
    {{--  <h2 class="py-5"></h2>  --}}
    <!-- fashion section start -->
    <div class="fashion_section" style="margin-top: 20px">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="container">
                <h1 class="fashion_taital">All Product</h1>
                <div class="fashion_section_2">
                    <div class="row">
                        @foreach ($allproduct as $product)
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
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- fashion section end -->
@endsection