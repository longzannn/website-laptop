<?php

namespace App\Http\Controllers;

use App\Models\DetailLayout;
use App\Http\Requests\StoreDetailLayoutRequest;
use App\Http\Requests\UpdateDetailLayoutRequest;

class DetailLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client/detail');
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
    public function store(StoreDetailLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailLayout $detailLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailLayout $detailLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailLayoutRequest $request, DetailLayout $detailLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailLayout $detailLayout)
    {
        //
    }
}
