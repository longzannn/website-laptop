<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Http\Requests\StoreDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new Dashboard();
        $productCount = $obj->getProductCount();
        $categoryCount = $obj->getCategoryCount();
        $subcategoryCount = $obj->getSubcategoryCount();
        $customerCount = $obj->getCustomerCount();
        $staffCount = $obj->getStaffCount();
        $userCount = $staffCount + $customerCount;

        $obj = new Dashboard();
        $orders = $obj->getAllOrder();
        $arrOrders = array();
        $existingOrderIds = array();
        foreach ($orders as $order) {
            $orderId = $order->order_id;
            // Kiểm tra xem order_id đã tồn tại trong mảng hay chưa
            if (!in_array($orderId, $existingOrderIds)) {
                // Nếu chưa tồn tại, thêm order_id vào mảng tạm thời
                $existingOrderIds[] = $orderId;
                // Thêm bản ghi vào mảng chính
                $arrOrders[] = array(
                    'order_id' => $orderId,
                    'code' => $order->code,
                    'cus_name' => $order->cus_name,
                    'status' => $order->status,
                    'payment' => $order->payment,
                    'order_date' => $order->order_date,
                    'total_price' => $order->total_price,
                );
            }
        }

        return view('admin/dashboard', [
            'productCount' => $productCount,
            'categoryCount' => $categoryCount,
            'subcategoryCount' => $subcategoryCount,
            'userCount' => $userCount,
            'orders' => $arrOrders,
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
    public function store(StoreDashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDashboardRequest $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
