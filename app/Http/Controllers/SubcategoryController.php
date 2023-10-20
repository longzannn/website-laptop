<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    private $path = "admin/subcategory/";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new Subcategory();
        $subcategories = $obj->index();
        return view($this->path . 'subcategory', [
            'subcategories' => $subcategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $objCategory = new Category();
        $categories = $objCategory->getCategories();
        return view($this->path . 'add_subcategory', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubcategoryRequest $request)
    {
        $obj = new Subcategory();
        $obj->cat_id = $request->cat_id;
        $obj->sub_name = $request->sub_name;
        $obj->store();
        flash()->addSuccess('Thêm mới thành công');
        return Redirect::route('subcategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory, Request $request)
    {
        $objCategory = new Category();
        $categories = $objCategory->getCategories();

        $objSubcategory = new Subcategory();
        $objSubcategory->sub_id = $request->id;
        $subcategories = $objSubcategory->edit();

        return view($this->path . 'edit_subcategory', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'id' => $objSubcategory->sub_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        $obj = new Subcategory();
        $obj->sub_id = $request->id;
        $obj->cat_id = $request->cat_id;
        $obj->sub_name = $request->sub_name;
        $obj->updateSubcategory();
        flash()->addSuccess('Cập nhật thành công');
        return Redirect::route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory, Request $request)
    {
        $obj = new Subcategory();
        $obj->sub_id = $request->id;
        $obj->deleteSubcategory();
        flash()->addSuccess('Xóa thành công');
        return Redirect::route('subcategory.index');
    }
}
