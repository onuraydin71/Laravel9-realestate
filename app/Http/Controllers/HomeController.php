<?php

namespace App\Http\Controllers;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Message;

class HomeController extends Controller
{
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index(){

        $page='home';
        $sliderdata=House::limit(4)->get();
        $houselist=House::limit(15)->get();
        $setting=Setting::first();

        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'houselist'=>$houselist
        
        ]);
    }

    public function about(){

        $setting=Setting::first();

        return view('home.about',[
            'setting'=>$setting,
        ]);
    }

    public function references(){

        $setting=Setting::first();

        return view('home.references',[
            'setting'=>$setting,
        ]);
    }

    public function contact(){
        
        $setting=Setting::first();

        return view('home.contact',[
            'setting'=>$setting,
        ]);
    }

    public function storemessage(Request $request){
        
        $data= new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip= request()->ip();
        $data->save();
        
        return redirect()->route('admin.contact')->with('info','YOUR MESSAGE HAS BEEN SENT , THANK YOU.');
    }

    public function house($id){

        $data=House::find($id);
        $images= DB::table('images')->where('house_id',$id)->get();
        $setting=Setting::first();
        return view('home.house',[
            'data'=>$data,
            'images'=>$images,
            'setting'=>$setting
        ]);
    }

    public function categoryhouses($id){

        $category=Category::find($id);
        $houses= DB::table('houses')->where('category_id',$id)->get();
        $setting=Setting::first();
        return view('home.categoryhouses',[
            'category'=>$category,
            'houses'=>$houses,
            'setting'=>$setting
            
        ]);
    }
}
