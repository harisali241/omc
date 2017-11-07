<?php

namespace App\Http\Controllers;

use App\Models\enquiryForm;
use Illuminate\Http\Request;
use App\Models\carousel;
use App\Models\aboutus;
use App\Models\contact;
use App\Models\product;
use Zablose\Captcha\Captcha;

class EnquiryFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $carousel = carousel::where('active' , 1)
                ->OrderBy('sort_order', 'asc')
                ->get();
        $products = product::all();
        return view('pages.enquiry.enquiryForm', compact('carousel','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'product' => 'required',
            'enquiry' => 'required',
            'captcha' => 'required|captcha',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enquiryForm  $enquiryForm
     * @return \Illuminate\Http\Response
     */
    public function show(enquiryForm $enquiryForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enquiryForm  $enquiryForm
     * @return \Illuminate\Http\Response
     */
    public function edit(enquiryForm $enquiryForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enquiryForm  $enquiryForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enquiryForm $enquiryForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enquiryForm  $enquiryForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(enquiryForm $enquiryForm)
    {
        //
    }
}
