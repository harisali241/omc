<?php

namespace App\Http\Controllers;

use App\Models\homeImage;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\category;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $categories = category::all();
        $products = product::all();

        return view('pages.products.customViewProduct' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // $categories = category::all();
        return view('pages.products.customAddProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate(request(),[

            'product_image' => 'required|image|mimes:jpeg,png|max:5000|dimensions:min_width=800,max_width=2272,min_height=600,max_height=1704',
            'product_name' => 'required',
            'product_detail' => 'required',

        ]);

        if($request->status == null)
        {
            $status = 0;

        }else{

            $status = 1;
        }

        $upload_dir = base_path() . '/public/uploads/product';
        
         
        $file = $request->file('product_image');
        $filename = mt_rand(1000,5000).$file->getClientOriginalName();
        $file->move($upload_dir, $filename);
    

        $product = new product ;

        $product->product_detail = $request['product_detail'];
        $product->product_name = $request['product_name'];
        $product->active = $status;
        $product->product_image = $filename;

        $product->save();

        return redirect('/product')->with('message','Image Successfully Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //dd($request->all());

        $this->validate(request(),[

            'product_image' => 'image|mimes:jpeg,png|max:5000|dimensions:min_width=800,max_width=2272,min_height=600,max_height=1704',
            'product_name' => 'required',
            'product_detail' => 'required',

        ]);

        if($request->status == null)
        {
            $status = 0;

        }else{

            $status = 1;
        }

        $old_name = product::where('id' , $product->id)->pluck('product_image')[0];

        $upload_dir = base_path() . '/public/uploads/product';
        
        if($request->product_image !== null){

            $file = $request->file('product_image');
            $filename = mt_rand(1000,5000).$file->getClientOriginalName();
            $file->move($upload_dir, $filename);
            File::delete($upload_dir .'/'. $old_name);
    
        }else{

            $filename = product::where('id' , $product->id)->pluck('product_image')[0];
                     
        }

        $products = product::findOrFail($product->id) ;

        $products->product_name = $request['product_name'];
        $products->product_detail = $request['product_detail'];
        $products->active = $status;
        $products->product_image = $filename;

        $products->save();


        return redirect()->back()->with('message','Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {

        //dd($product->id);
        product::where('id', $product->id)->delete();

        return redirect()->back()->with('message','Product Successfully Delete');
    }
}
