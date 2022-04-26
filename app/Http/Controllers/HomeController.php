<?php

namespace App\Http\Controllers;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Category;

class HomeController extends Controller
{
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index(){

        $sliderdata=House::limit(4)->get();
        $houselist=House::limit(15)->get();
       
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'houselist'=>$houselist
        
        ]);
    }

    public function house($id){

        $data=House::find($id);
        $images= DB::table('images')->where('house_id',$id)->get();
       
        return view('home.house',[
            'data'=>$data,
            'images'=>$images
            
        ]);
    }

    public function categoryhouses($id){

        echo "dsadsada";
        exit();
        $data=House::find($id);
        $images= DB::table('images')->where('house_id',$id)->get();
       
        return view('home.house',[
            'data'=>$data,
            'images'=>$images
            
        ]);
    }
}
