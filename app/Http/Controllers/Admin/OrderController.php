<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function PendingOrder(){
        $pending_orders = Order::where('status', 'pending')->latest()->get();

        return view('admin/pendingorder', compact('pending_orders'));
    }

    public function ConfirmStatus($id){
        Order::findOrFail($id)->update([
            'status' => 'complete'
        ]);

        $pending_orders = Order::where('status', 'pending')->latest()->get();
        return view('admin/pendingorder', compact('pending_orders'));
    }

    public function RejectStatus($id){
        Order::findOrFail($id)->update([
            'status' => 'canceled'
        ]);

        $pending_orders = Order::where('status', 'pending')->latest()->get();
        return view('admin/pendingorder', compact('pending_orders'));
    }

    public function CompleteOrder(){
        $complete_orders = Order::where('status', 'complete')->latest()->get();
        return view('admin/completeorders', compact('complete_orders'));
    }

    public function CancelOrder(){
        $cancel_orders = Order::where('status', 'canceled')->latest()->get();
        return view('admin/cancelorders', compact('cancel_orders'));
    }
}
