<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    private $path = "admin/customer/";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new Customer();
        $customers = $obj->index();
        return view($this->path . 'customer', [
            'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->path . 'add_customer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $obj = new Customer();
        $obj->cus_name = $request->cus_name;
        $obj->cus_email = $request->cus_email;
        $obj->cus_phone = $request->cus_phone;
        $obj->cus_address = $request->cus_address;
        $obj->cus_password = $request->cus_password;
        $obj->store();
        return Redirect::route('customer.index');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer, Request $request)
    {
        $obj = new Customer();
        $obj->cus_id = $request->id;
        $customers = $obj->edit();
        return view($this->path . 'edit_customer', [
            'customers' => $customers,
            'id' => $obj->cus_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $obj = new Customer();
        $obj->cus_id = $request->id;
        $obj->cus_name = $request->cus_name;
        $obj->cus_email = $request->cus_email;
        $obj->cus_phone = $request->cus_phone;
        $obj->cus_address = $request->cus_address;
        $obj->cus_password = $request->cus_password;

        $obj->updateCustomer();
        return Redirect::route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer, Request $request)
    {
        $obj = new Customer();
        $obj->cus_id = $request->id;
        $obj->deleteCustomer();
        return Redirect::route('customer.index');
    }
}
