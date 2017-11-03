<?php

namespace App\Http\Controllers;

use App\Models\carousel;
use Illuminate\Http\Request;
use File;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carousel = carousel::where('active' , 1)->OrderBy('sort_order', 'asc')->get();
        $carousels = carousel::OrderBy('sort_order', 'asc')->get();
        // dd($carousels);
        return view('pages.main.customCarousel' , compact('carousels','carousel'));
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

            'carousel_image' => 'image|mimes:jpeg,png|max:2048|dimensions:width=1600,height=800',
            'sort_order' => 'required',

        ]);

        if($request->status == null)
        {
            $status = 0;

        }else{

            $status = 1;
        }

        $old_name = carousel::where('sort_order' , request('sort_order'))->pluck('carousel_image')[0];

        $upload_dir = base_path() . '/public/uploads/carousel';
        
        if($request->carousel_image !== null){
         
            $file = $request->file('carousel_image');
            $filename = $file->getClientOriginalName();
            $file->move($upload_dir, $filename);
            File::delete($upload_dir .'/'. $old_name);
    
        }else{

            $filename = carousel::where('sort_order' , request('sort_order'))->pluck('carousel_image')[0];
                     
        }

        

        $caro = carousel::findOrFail($request->sort_order);

        $caro->carousel_image = $filename;
        $caro->carousel_text = $request['carousel_text'];
        $caro->carousel_label = $request['carousel_label'];
        $caro->active = $status;

        $caro->save();

        return redirect()->back()->with('message','Carousel successfully changed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carousel $carousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(carousel $carousel)
    {
        //
    }
}
