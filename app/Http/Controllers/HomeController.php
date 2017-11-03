<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carousel;
use App\Models\homeText;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = carousel::where('active' , 1)->OrderBy('sort_order', 'asc')->get();
        $homeText = homeText::all();
        return view('pages.main.home',compact('carousel','homeText'));
    }


    public function custom()
    {
        return view('pages.main.customCarousel');
    }


    public function text()
    {
        $homeText = homeText::all();
        return view('pages.home.homeText', compact('homeText'));
    }


    public function store(Request $request){

        $this->validate(request(), [

            'heading1' => 'required',
            'color1' => 'required',
            'text1' => 'required',
            'heading2' => 'required',
            'color2' => 'required',
            'text2' => 'required',
            'heading3' => 'required',
            'color3' => 'required',
            'text3' => 'required',

        ]);

        $homeText = homeText::findOrFail(1);

        $homeText->heading1 = $request['heading1'];
        $homeText->text1 = $request['text1'];
        $homeText->color1 = $request['color1'];
        $homeText->heading2 = $request['heading2'];
        $homeText->text2 = $request['text2'];
        $homeText->color2 = $request['color2'];
        $homeText->heading3 = $request['heading3'];
        $homeText->text3 = $request['text3'];
        $homeText->color3 = $request['color3'];

        $homeText->save();

        return redirect()->back()->with('message','Successfully changed');

    }

}
