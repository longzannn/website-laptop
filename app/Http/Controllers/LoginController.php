<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('admin/login/login');
    }

    public function loginProcess(Request $request) {
        $account = $request->only(['email', 'password']);
        if(Auth::guard('staff')->attempt($account)) {
            $staff = Auth::guard('staff')->user();
            Auth::guard('staff')->login($staff);
            session(['staff' => $staff]);
            flash()->addSuccess('Đăng nhập thành công');
            return Redirect::route('dashboard');
        } else {
            flash()->addError('Đăng nhập thất bại');
            return Redirect::back();
        }
    }

    public function logout() {
        Auth::guard('staff')->logout();
        session()->forget('staff');
        flash()->addSuccess('Đăng xuất thành công');
        return Redirect::route('login');
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
    public function store(StoreLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
