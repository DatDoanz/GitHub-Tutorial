<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use DB;
use App\Models\Categories;


class CategoriesController extends Controller
{
    public function index3()
    {
        $data = Categories::get();
        return view('0905b.list3', compact('data'));
    }
 
    public function add2()
    {
        $categories = Categories::get();
        return view('0905b.add2', compact('categories'));
    }

    public function save2(Request $request)
    {
        $categories = new Categories();
        $categories->cate_id = $request->id;
        $categories->cate_name = $request->name;
        $categories->save();

        return redirect()->back()->with('success', 'Categories Added Successfully');
    }

    public function update2(Request $request)
    {
        $id = $request->id;
        Categories::where('cate_id', '=', $id)->update([
            'cate_name'=>$request->name,
        ]);
        return redirect()->back()->with('success', 'Categories Updated Successfully');
    }

    public function delete2($id)
    {
        Categories::where('cate_id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Categories Deleted Successfully');
    }

    public function edit2($id)
    {
        $data = Categories::where('cate_id', '=', $id)->first();
        $categories = Categories::get();
        return view('0905b.edit2', compact('data', 'categories'));
    }
}
