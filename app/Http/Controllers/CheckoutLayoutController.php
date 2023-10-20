<?php

namespace App\Http\Controllers;

use App\Models\CartLayout;
use App\Models\CheckoutLayout;
use App\Http\Requests\StoreCheckoutLayoutRequest;
use App\Http\Requests\UpdateCheckoutLayoutRequest;
use Illuminate\Support\Facades\Session;

class CheckoutLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objCategory = new CheckoutLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new CheckoutLayout();
        $subcategories = $objSubcategory->getSubcategories();
        $cart = Session::get('cart');
        return view('client/checkout', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'cart' => $cart
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
    public function store(StoreCheckoutLayoutRequest $request)
    {
        $objCheckoutLayout = new CheckoutLayout();
        $objCheckoutLayout->cus_name = $request->cus_name;
        $objCheckoutLayout->cus_phone = $request->cus_phone;
        $objCheckoutLayout->cus_email = $request->cus_email;
        $objCheckoutLayout->cus_address = $request->cus_address;
        $cus_id = $objCheckoutLayout->storeCustomer();

        $cart = Session::get('cart');
        $total_price = 0;
        $arr_version_id = array();
        $quantity = 0;
        foreach ($cart as $version_id => $product) {
            $quantity += $product['quantity'];
            $total_price += $product['current_price'] * $product['quantity'];
            $arr_version_id[] = $version_id;
        }
        $objCheckoutLayout->cus_id = $cus_id;
        $objCheckoutLayout->staff_id = null;    // Chưa có staff
        $objCheckoutLayout->quantity = $quantity;
        $objCheckoutLayout->total_price = $total_price;
        $date = date('Y-m-d H:i:s');
        $objCheckoutLayout->order_date = $date;
        $order_id = $objCheckoutLayout->storeOrder();

        for ($i = 0; $i < count($arr_version_id); $i++) {
            $objCheckoutLayout->order_id = $order_id;
            $objCheckoutLayout->version_id = $arr_version_id[$i];
            $objCheckoutLayout->payment = 'Chưa thanh toán';
            $objCheckoutLayout->status = 'Đơn hàng mới';
            $code = 'DH00' . $order_id;
            $objCheckoutLayout->code = $code;
            $objCheckoutLayout->storeOrderDetail();
        }

        Session::forget('cart');

        $objCategory = new CartLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new CartLayout();
        $subcategories = $objSubcategory->getSubcategories();

        flash()->addSuccess('Đặt hàng thành công! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.');
        return view('client/cart', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'cart' => $cart
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CheckoutLayout $checkoutLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CheckoutLayout $checkoutLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckoutLayoutRequest $request, CheckoutLayout $checkoutLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheckoutLayout $checkoutLayout)
    {
        //
    }
}
