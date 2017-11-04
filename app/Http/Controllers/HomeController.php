<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carousel;
use App\Models\homeText;
use App\Models\homeImage;

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


    public function images()
    {
        
        return view('pages.home.homeImages');

    }


    public function addImage(Request $request)
    {
        
        //dd($request->all());

        $this->validate(request(),[

            'image_name' => 'image|mimes:jpeg,png|max:4096|dimensions:minwidth=800,height=600',
            'heading' => 'required',
            'textarea' => 'required',

        ]);

        if($request->status == null)
        {
            $status = 0;

        }else{

            $status = 1;
        }

        $upload_dir = base_path() . '/public/uploads/homeImages';
        
         
        $file = $request->file('image_name');
        $filename = $file->getClientOriginalName();
        $file->move($upload_dir, $filename);
    

        $homeImages = new homeImage ;

        $homeImages->heading = $request['heading'];
        $homeImages->textarea = $request['textarea'];
        $homeImages->active = $status;
        $homeImages->image_name = $filename;

        $homeImages->save();

        return view('pages.home.homeViewImages');

        
    }


    public function viewImages()
    {

         return view('pages.home.homeViewImages');

    }

}
