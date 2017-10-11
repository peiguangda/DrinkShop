<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$categories = Category::all();
    	return view('category.index')->with('categories', $categories);
    }


    public function edit($id)
    {
    	$category = Category::find($id);
    	return view('category.edit')->with('category', $category);
    }


    public function destroy($id)
    {
    	$category = Category::find($id);
    	$category->delete();
    	return redirect()->route('category.index')->with('notice', 'Delete '. $category->name . ' successful!');
    }


    public function update($id, Request $request)
    {
    	$category = Category::find($id);
    	$category->update([
    		'name' => $request->get('name'),
    		// 'imageUrl' => $request->file('image')
    		]);

    	return redirect()->route('category.index')->with('notice', 'Update Category successful!');
    }


    public function store(Request $request)
    {

    	if ($request->hasFile('image')) {
            $image = $request->file('image');	
        }else $image = "";


    	Category::create([
    		'name' => $request->name,
    		'imageUrl' => $image
    		]);

    	return redirect()->route('category.create')->with('notice', 'Create '.$request->get('name').' successful');
    }


    public function create()
    {
    	return view('category.create');
    }

}
