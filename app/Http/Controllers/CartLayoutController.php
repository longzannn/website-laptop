<?php

namespace App\Http\Controllers;

use App\Models\CartLayout;
use App\Http\Requests\StoreCartLayoutRequest;
use App\Http\Requests\UpdateCartLayoutRequest;

class CartLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client/cart');
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
