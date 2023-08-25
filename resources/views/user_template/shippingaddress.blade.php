@extends('user_template.layouts.template')
@section('content')
    <div>
        <h2>Provide Your Shipping Address</h2>
        <div class="row">
            <div class="col-12">
                <div class="box_main">
                    <form action="{{ route('addshippingaddress') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="city_name">City Name</label>
                            <input type="text" name="city_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="postal_code">Postal Code</label>
                            <input type="text" name="postal_code" class="form-control">
                        </div>

                        <input type="submit" value="Next" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection