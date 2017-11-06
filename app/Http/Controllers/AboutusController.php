<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
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

        $about = aboutus::all()[0];
        return view('pages.aboutus.customAboutus', compact('about'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // dd( $request->all() );


        $this->validate(request(), [

            'heading' => 'required',
            'area' => 'required',

        ]);

        $about = aboutus::findORFail(1);
      
        $about->heading = $request['heading'];
        $about->area = $request['area'];

        $about->save();

        return redirect()->back()->with('message','Successfully changed');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show(aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit(aboutus $aboutus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aboutus $aboutus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy(aboutus $aboutus)
    {
        //
    }
}
