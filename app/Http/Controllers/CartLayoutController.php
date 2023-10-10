<?php

namespace App\Http\Controllers;

use App\Models\CartLayout;
use App\Http\Requests\StoreCartLayoutRequest;
use App\Http\Requests\UpdateCartLayoutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objCategory = new CartLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new CartLayout();
        $subcategories = $objSubcategory->getSubcategories();
        return view('client/cart', [
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    public function addToCart(Request $request) {

        $version_id = $request->id;
        $quantity = $request->quantity;
        $objCart = new CartLayout();
        $product = $objCart->getProductByVersionId($version_id);
        $cart = array();
        $cart[$product -> version_id]['prd_name'] = $product -> prd_name;
        $cart[$product -> version_id]['version_name'] = $product -> version_name;
        $cart[$product -> version_id]['quantity'] = intval($quantity);
        $cart[$product -> version_id]['current_price'] = $product -> current_price;
        if($product -> cat_name == 'Linh kiện máy tính') {
            $cart[$product -> version_id]['image'] = $product -> img_1;
        } else {
            $cart[$product -> version_id]['image'] = $product -> img_5;
        }
        Session::put('cart[' . $product -> version_id .']', $cart);
        return redirect() -> route('client.cart');
    }

    public function deleteCart() {
        Session::flush();
        return redirect() -> route('client.cart');
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
    public function store(StoreCartLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CartLayout $cartLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartLayout $cartLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartLayoutRequest $request, CartLayout $cartLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartLayout $cartLayout)
    {
        //
    }
}
