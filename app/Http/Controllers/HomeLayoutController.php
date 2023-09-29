<?php

namespace App\Http\Controllers;

use App\Models\HomeLayout;
use App\Http\Requests\StoreHomeLayoutRequest;
use App\Http\Requests\UpdateHomeLayoutRequest;

class HomeLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client/home');
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
    public function store(StoreHomeLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeLayout $homeLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeLayout $homeLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeLayoutRequest $request, HomeLayout $homeLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeLayout $homeLayout)
    {
        //
    }
}
