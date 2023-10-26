<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    private $path = "admin/category/";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new Category();
        $categories = $obj->index();
        return view($this->path . 'category', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->path . 'add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $obj = new Category();
        $obj->cat_name = $request->cat_name;
        $obj->store();
        flash()->addSuccess('Thêm mới thành công');
        return Redirect::route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, Request $request)
    {
        $obj = new Category();
        $obj->cat_id = $request->id;
        $categories = $obj->edit();
        return view($this->path . 'edit_category', [
            'categories' => $categories,
            'id' => $obj->cat_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $obj = new Category();
        $obj->cat_id = $request->id;
        $obj->cat_name = $request->cat_name;
        $obj->updateCategory();
        flash()->addSuccess('Cập nhật thành công');
        return Redirect::route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, Request $request)
    {
        try {
            $obj = new Category();
            $obj->cat_id = $request->id;
            $obj->deleteCategory();
            flash()->addSuccess('Xóa thành công');
        } catch (\Exception $e) {
            flash()->addWarning('Xóa thất bại, danh mục này đang có sản phẩm ở trong đơn hàng');
        }
        return Redirect::route('category.index');
    }
}
