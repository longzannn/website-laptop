<?php

namespace App\Http\Controllers;

use App\Models\OrderLayout;
use App\Http\Requests\StoreOrderLayoutRequest;
use App\Http\Requests\UpdateOrderLayoutRequest;

class OrderLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objCategory = new OrderLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new OrderLayout();
        $subcategories = $objSubcategory->getSubcategories();

        $customer = session()->get('customer');
        $cus_id = $customer->cus_id;
        $objOrder = new OrderLayout();
        $objOrder->cus_id = $cus_id;
        $orders = $objOrder->getOrders();

        $objOrderDetail = new OrderLayout();
        $arrOrderDetail = array();
        foreach ($orders as $order) {
            $objOrderDetail->order_id = $order->order_id;
            $orderDetail = $objOrderDetail->getOrderDetail();
            foreach ($orderDetail as $item) {
                $arrOrderDetail[] = $item;
            }
        }
        return view('client/order', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'orders' => $orders,
            'arrOrderDetail' => $arrOrderDetail,
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
    public function store(StoreOrderLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderLayout $orderLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderLayout $orderLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderLayoutRequest $request, OrderLayout $orderLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderLayout $orderLayout)
    {
        //
    }
}
