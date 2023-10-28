<?php

namespace App\Http\Controllers;

use App\Models\ChangePasswordLayout;
use App\Http\Requests\StoreChangePasswordLayoutRequest;
use App\Http\Requests\UpdateChangePasswordLayoutRequest;

class ChangePasswordLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objCategory = new ChangePasswordLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new ChangePasswordLayout();
        $subcategories = $objSubcategory->getSubcategories();

        return view('client/changePassword', [
            'categories' => $categories,
            'subcategories' => $subcategories,
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
    public function store(StoreChangePasswordLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ChangePasswordLayout $changePasswordLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChangePasswordLayout $changePasswordLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChangePasswordLayoutRequest $request, ChangePasswordLayout $changePasswordLayout)
    {
        $cus_id = $request->id;
        $objCustomer = new ChangePasswordLayout();
        $objCustomer->cus_id = $cus_id;
        $objCustomer->password = $request->password;
        $customer = $objCustomer->updateCustomer();

        $customerSS = session()->get('customer');
        $customerSS->password = $customer->password;
        session()->put('customer', $customerSS);

        flash()->addSuccess('Đổi mật khẩu thành công');
        return redirect()->route('client.changePassword');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChangePasswordLayout $changePasswordLayout)
    {
        //
    }
}
