<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\producers;
use App\Http\Controllers\producer;
use App\Models\product;
use App\Http\Controllers\categories;
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

    public function deletecustomer()
    {
        customer::where('customersID', '=')->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');
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
}
