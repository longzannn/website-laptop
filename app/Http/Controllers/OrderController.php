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

        $ordersAfterPaginate = $this->PaginateArray($arrOrders, 2);

        return view($this->path . 'order', [
            'orders' => $ordersAfterPaginate,
        ]);
    }

    private function PaginateArray(array $arrOrders, int $int)
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($arrOrders);
        $perPage = $int;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $ordersAfterPaginate = new LengthAwarePaginator($currentPageItems, count($itemCollection), $perPage);
        $ordersAfterPaginate->setPath(route('order.index'));
        return $ordersAfterPaginate;
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
        $orders = $obj->getOrderById($order_id);
        $arrOrders = array();
        $arrProducts = array();
        $existingOrderIds = array();
        foreach ($orders as $order) {
            $orderId = $order->order_id;
            $arrProducts[] = $order->version_id; // Lấy ra version_id của sản phẩm và thêm vào mảng
            // Kiểm tra xem order_id đã tồn tại trong mảng hay chưa
            if (!in_array($orderId, $existingOrderIds)) {
                // Nếu chưa tồn tại, thêm order_id vào mảng tạm thời
                $existingOrderIds[] = $orderId;
                // Thêm bản ghi vào mảng chính
                $arrOrders[] = array(
                    'order_id' => $orderId,
                    'code' => $order->code,
                    'cus_name' => $order->cus_name,
                    'cus_address' => $order->cus_address,
                    'cus_phone' => $order->cus_phone,
                    'cus_email' => $order->cus_email,
                    'status' => $order->status,
                    'payment' => $order->payment,
                    'order_date' => $order->order_date,
                    'quantity' => $order->quantity,
                    'total_price' => $order->total_price,
                );
            }
        }

        $arr = array();
        foreach ($arrProducts as $version_id) {
            $product = $obj->getProductByOrderId($version_id);
                if($product->cat_name == 'Linh kiện máy tính') {
                    $arr[] = array(
                        'version_id' => $product->version_id,
                        'prd_name' => $product->prd_name,
                        'version_name' => $product->version_name,
                        'image' => $product->img_1
                    );
                } else {
                    $arr[] = array(
                        'version_id' => $product->version_id,
                        'prd_name' => $product->prd_name,
                        'version_name' => $product->version_name,
                        'image' => $product->img_5
                    );
                }
        }
        return view($this->path . 'edit_order', [
            'order' => $arrOrders[0],
            'products' => $arr,
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

        // Cập nhật thông tin order_detail
        $order_id = $request->id;
        $status = $request->status;
        $payment = $request->payment;
        $order_detail = new Order();
        $order_detail->updateOrderDetail($order_id, $status, $payment);

        // Cập nhật thông tin order
        $order = new Order();
        $order->order_id = $order_id;
        $order->staff_id = $staff_id;
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
