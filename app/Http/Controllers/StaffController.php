<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StaffController extends Controller
{
    private $path = "admin/staff/";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new Staff();
        $staffs = $obj->index();
        return view($this->path . 'staff', [
            'staffs' => $staffs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->path . 'add_staff');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStaffRequest $request)
    {
        $obj = new Staff();
        $obj->staff_name = $request->staff_name;
        $obj->email = $request->email;
        $obj->staff_phone = $request->staff_phone;
        $obj->staff_address = $request->staff_address;
        $obj->password = $request->password;
        $obj->store();
        return Redirect::route('staff.index');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff, Request $request)
    {
        $obj = new Staff();
        $obj->staff_id = $request->id;
        $staffs = $obj->edit();
        return view($this->path . 'edit_staff', [
            'staffs' => $staffs,
            'id' => $obj->staff_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $obj = new Staff();
        $obj->staff_id = $request->id;
        $obj->staff_name = $request->staff_name;
        $obj->email = $request->email;
        $obj->staff_phone = $request->staff_phone;
        $obj->staff_address = $request->staff_address;
        $obj->password = $request->password;

        $obj->updateStaff();
        return Redirect::route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff, Request $request)
    {
        $obj = new Staff();
        $obj->staff_id = $request->id;
        $obj->deleteStaff();
        return Redirect::route('staff.index');
    }
}
