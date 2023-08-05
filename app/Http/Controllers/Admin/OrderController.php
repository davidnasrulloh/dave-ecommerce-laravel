<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function PendingOrder(){
        return view('admin/pendingorder');
    }

    public function CompleteOrder(){
        return view('admin/completeorders');
    }

    public function CancelOrder(){
        return view('admin/cancelorders');
    }
}
