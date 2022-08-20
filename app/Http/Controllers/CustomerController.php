<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Hash;
use Session;

class CustomerController extends Controller
{
    public function register()
    {
        return view('0905b.register');
    }

    public function login()
    {
        return view('0905b.login');
    }

    public function registerProcess(Request $request)
    {
        $customer = new Customer();
        $customer->customersID = $request->username;
        $customer->customersPass = Hash::make($request->password);
        $customer->customersFullname = $request->fullname;
        $customer->customersEmail = $request->email;
        $customer->customersPhone = $request->phone;
        $res = $customer->save();
        if($res) {
            return back()->with('success', 'You have registered successfully!');
        } else {
            return back()->with('fail', 'Oh No! Something wrong!!!');
        }
    }

    public function loginProcess(Request $request)
    {
        $customer = Customer::where('customersEmail', '=', $request->username)->first();
        if($customer) {
            if(Hash::check($request->password, $customer->customersPass)) {
                $request->session()->put('loginID', $customer->customersID);
                return redirect('home');
            } else {
                return back()->with('fail', 'Password not matches!!!');
            } 
        } else {
            return back()->with('fail', 'This email does not registered!!!');
        }
    }

    public function logout()
    {
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('login');
        }
    }

    public function information($id)
    {
        $data = Customer::where('customersID', '=', $id)->first();
        return view('0905b.information', compact('data'));
    }

    public function saveinformation(Request $request)
    {
        $id = $request->id;
        Customer::where('customersID', '=', $id)->update([
            'customersFullname'=>$request->name,
            'customersAddress'=>$request->address,
            'customersEmail'=>$request->email,
            'customersPhone'=>$request->phone
        ]);
        return redirect()->back()->with('success', 'Infromation Updated Successfully');
    }

}
