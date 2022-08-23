<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProducerController;
use App\Models\Producers;

class ProducerController extends Controller
{
    public function index4()
    {
        $data = Producers::get();
        return view('list4', compact('data'));
    }
 
    public function add3()
    {
        $producer = Producers::get();
        return view('add3', compact('producer'));
    }

    public function save3(Request $request)
    {
        $producer = new Producers();
        $producer->producerID = $request->id;
        $producer->producerName = $request->name;
        $producer->save();

        return redirect()->back()->with('success', 'Producer Added Successfully');
    }

    public function update3(Request $request)
    {
        $id = $request->id;
        Producers::where('producerID', '=', $id)->update([
            'producerName'=>$request->name,
        ]);
        return redirect()->back()->with('success', 'Producer Updated Successfully');
    }

    public function delete($id)
    {
        Producers::where('producerID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Producer Deleted Successfully');
    }

    public function edit3($id)
    {
        $data = Producers::where('producerID', '=', $id)->first();
        $producer = Producers::get();
        return view('edit3', compact('data', 'producer'));
    }
}
