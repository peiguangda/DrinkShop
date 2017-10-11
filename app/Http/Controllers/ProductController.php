<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$products = Product::all();
    	return view('product.index')->with('products',$products);
    }


    public function create()
    {
    	return view('product.create');
    }


    public function edit($id)
    {
    	$product = Product::find($id);
    	return view('product.edit')->with('product', $product);
    }


    public function update($id, Request $request)
    {
    	$product = Product::find($id);
        $product->update([
                'name'         => $request->get('name'),
                'price'        => $request->get('price'),
                'discount'     => $request->get('discount'),
                // 'imageUrl'     => $request->file('image')->getRealPath(),    
                'quanity'      => $request->get('quanity'),
                'detail'       => $request->get('detail'),
                'description'  => $request->get('description'),
                'priority'     => $request->get('priority')
            ]);
        return redirect()->route('product.index')->with('notice', 'Update product successful!');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
        }else $image = "";
        
        Product::create([
                'name'         => $request->get('name'),
                'price'        => $request->get('price'),
                'discount'     => $request->get('discount'),
                'quanity'      => $request->get('quanity'),
                'detail'       => $request->get('detail'),
                'description'  => $request->get('description'),
                'priority'     => $request->get('priority'),
                'image'        => $image
            ]);
    	return redirect()->route('product.create')->with('notice', 'Create '.$request->get('name').' successful');
    }

    public function destroy($id)
    {
    	$product = Product::find($id);
    	$product->delete();
    	return redirect()->route('product.index')->with('notice', 'Delete '. $product->name . ' successful!');
    }

}
