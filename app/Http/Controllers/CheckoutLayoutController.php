<?php

namespace App\Http\Controllers;

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
        //
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
