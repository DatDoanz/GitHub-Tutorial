<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\producers;
use App\Http\Controllers\producer;
use App\Models\product;
use App\Models\categories;
use Hash;
use Session;
use App\Models\Admin;
class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function customers()
    {
        $data = customer::get();
        return view('admin.customer', compact('data'));
    }

    public function deletecustomer($id)
    {
        Customer::where('customersID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Customers Deleted Successfully');
    }

    public function producers()
    {
        $data = producers::get();
        return view('admin.producer', compact('data'));
    }

    public function products()
    {
        $data = product::get();
        return view('admin.product', compact('data'));
    }

    public function categories()
    {
        $data = categories::get();
        return view('admin.categories', compact('data'));
    }

    public function register1()
    {
        return view('admin.registerAdmin');
    }

    public function login1()
    {
        return view('admin.loginAdmin');
    }

    public function registerAdminProcess(Request $request)
    {
        $admins = new Admin();
        $admins->adminID = $request->username;
        $admins->adminPassword = Hash::make($request->password);
        $admins->adminFullname = $request->fullname;
        $admins->adminAddress = $request->address;
        $admins->adminEmail = $request->email;
        $res = $admins->save();
        if($res) {
            return back()->with('success', 'You have registered successfully!');
        } else {
            return back()->with('fail', 'Oh No! Something wrong!!!');
        }
    }

    public function loginAdminProcess(Request $request)
    {
        $admins = Admin::where('adminEmail', '=', $request->username)->first();
        if($admins) {
            if(Hash::check($request->password, $admins->adminPassword)) {
                $request->session()->put('loginID', $admins->adminID);
                return redirect('index');
            } else {
                return back()->with('fail', 'Password not matches!!!');
            } 
        } else {
            return back()->with('fail', 'This email does not registered!!!');
        }
    }
}
