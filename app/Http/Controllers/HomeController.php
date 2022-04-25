<?php

namespace App\Http\Controllers;
use App\Models\House;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){

        $sliderdata=House::limit(4)->get();
        $houselist=House::limit(15)->get();
       
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'houselist'=>$houselist
        
        ]);
    }
}
