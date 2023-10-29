<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    private $path = "admin/order/";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new Order();
        $orders = $obj->getAllOrder();
        return view($this->path . 'order', [
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order, Request $request)
    {
        $order_id = $request->id;
        $obj = new Order();
        $order = $obj->getOrderById($order_id);
        $order_id = $order->order_id;
        $orders_detail = $obj->getOrderDetailById($order_id);
        return view($this->path . 'edit_order', [
            'order' => $order,
            'orders_detail' => $orders_detail
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        if (Session::has('staff')) {
            $staff = Session::get('staff');
            $staff_id = $staff->staff_id;
        }
        $order_id = $request->id;
        $status = $request->status;
        $order = new Order();
        $order->order_id = $order_id;
        $order->staff_id = $staff_id;
        $order->status = $status;
        $order->updateOrder();

        flash()->addSuccess('Cập nhật đơn hàng thành công');
        return Redirect::route('order.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order, Request $request)
    {

    }
}
