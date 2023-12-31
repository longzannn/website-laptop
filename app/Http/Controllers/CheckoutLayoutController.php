<?php

namespace App\Http\Controllers;

use App\Mail\Testing;
use App\Models\CartLayout;
use App\Models\CheckoutLayout;
use App\Http\Requests\StoreCheckoutLayoutRequest;
use App\Http\Requests\UpdateCheckoutLayoutRequest;
use Illuminate\Support\Facades\Mail;
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

    public function testMail($code) {
        $details = [
            'title' => 'Laptop Khánh Trần (Đơn hàng: ' . $code . ')',
            'message' => 'Đơn hàng: ' . $code . ' đã được đặt thành công. Vui lòng kiểm tra và duyệt đơn hàng.'
        ];
        Mail::to('accfaceitcsgo117@gmail.com')->send(new Testing($details));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckoutLayoutRequest $request)
    {
        $customerSS = session()->get('customer');
        $cus_id = $customerSS->cus_id;
        $objCheckoutLayout = new CheckoutLayout();
        if($customerSS) {
            $objCheckoutLayout->cus_id = $cus_id;
            $objCheckoutLayout->cus_name = $request->cus_name;
            $objCheckoutLayout->cus_phone = $request->cus_phone;
            $objCheckoutLayout->email = $customerSS->email;
            $objCheckoutLayout->cus_address = $request->cus_address;
            $objCheckoutLayout->updateCustomer();

            $customerSS->cus_name = $request->cus_name;
            $customerSS->cus_phone = $request->cus_phone;
            $customerSS->cus_address = $request->cus_address;
            session()->put('customer', $customerSS);
        }

        $cart = Session::get('cart');
        $total_price = 0;
        foreach ($cart as $version_id => $product) {
            $total_price += $product['current_price'] * $product['quantity'];
        }

        $objCheckoutLayout->cus_id = $cus_id;
        $objCheckoutLayout->status = 'Chờ xác nhận';
        $objCheckoutLayout->total_price = $total_price;
        $date = date('Y-m-d H:i:s');
        $objCheckoutLayout->order_date = $date;
        $dateString = strtotime($date);
        $code = 'DH' . $dateString;
        $objCheckoutLayout->code = $code;
        $order_id = $objCheckoutLayout->storeOrder();

        foreach ($cart as $version_id => $product) {
            $price = 0;
            $price += $product['current_price'] * $product['quantity'];
            $quantity = 0;
            $quantity += $product['quantity'];
            $objCheckoutLayout->order_id = $order_id;
            $objCheckoutLayout->version_id = $version_id;
            $objCheckoutLayout->quantity = $quantity;
            $objCheckoutLayout->price = $price;
            $objCheckoutLayout->storeOrderDetail();
        }

        $this->testMail($code);

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
