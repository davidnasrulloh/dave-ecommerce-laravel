@extends('user_template.layouts.template')
@section('content')
    <div class="fashion_section" style="margin-top: 32px;">
        <div class="row">
            <div class="col-lg-4">
                <div class="box_main">
                    <ul>
                        <li><a href="{{ route('userprofile') }}">Dashboard</a></li>
                        <li><a href="{{ route('pendingorders') }}">Pending Orders</a></li>
                        <li><a href="{{ route('history') }}">History</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="box_main">
                    @yield('profilecontent')
                </div>
            </div>
        </div>
    </div>
@endsection