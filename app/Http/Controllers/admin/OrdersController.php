<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Order;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->note = $request->note;
        $order->save();
        return redirect()->route('admin.orders.index')->with('success', 'Cập nhật thành công');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->status = 5;
        $order->save();
        return redirect()->route('admin.orders.index')->with('success', 'Cập nhật thành công');
    }
}
