<?php

namespace App\Http\Controllers;

use App\Models\ProfileLayout;
use App\Http\Requests\StoreProfileLayoutRequest;
use App\Http\Requests\UpdateProfileLayoutRequest;
use Illuminate\Support\Facades\Redirect;

class ProfileLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objCategory = new ProfileLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new ProfileLayout();
        $subcategories = $objSubcategory->getSubcategories();

        return view('client/profile', [
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
    public function store(StoreProfileLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfileLayout $profileLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfileLayout $profileLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileLayoutRequest $request, ProfileLayout $profileLayout)
    {
        $obj = new ProfileLayout();
        $obj->cus_id = $request->id;
        $obj->cus_name = $request->cus_name;
        $obj->email = $request->email;
        $obj->cus_phone = $request->cus_phone;
        $obj->cus_address = $request->cus_address;
        $customerAfterUpdate = $obj->updateCustomer();

        $customer = session() -> get('customer');
        $customer->cus_name = $customerAfterUpdate->cus_name;
        $customer->email = $customerAfterUpdate->email;
        $customer->cus_phone = $customerAfterUpdate->cus_phone;
        $customer->cus_address = $customerAfterUpdate->cus_address;
        session()->put('customer', $customer);

        flash()->addSuccess('Cập nhật thành công');
        return Redirect::route('client.profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileLayout $profileLayout)
    {
        //
    }
}
