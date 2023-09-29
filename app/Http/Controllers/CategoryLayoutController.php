<?php

namespace App\Http\Controllers;

use App\Models\CategoryLayout;
use App\Http\Requests\StoreCategoryLayoutRequest;
use App\Http\Requests\UpdateCategoryLayoutRequest;

class CategoryLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client/category');
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
    public function store(StoreCategoryLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryLayout $categoryLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryLayout $categoryLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryLayoutRequest $request, CategoryLayout $categoryLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryLayout $categoryLayout)
    {
        //
    }
}
