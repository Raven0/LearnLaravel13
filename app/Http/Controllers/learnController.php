<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class learnController extends Controller
{
    public function form(){
        return view('learn.index');
    }
    public function proses(Request $request){
        $name = $request->input('nama');
        $score = $request->input('nilai');
        
        if($score > 90){
            echo " predikat $name adalah A ";
        }else if($score > 80){
            echo " predikat $name adalah B ";
        }else if($score > 70){
            echo " predikat $name adalah C ";
        }else if($score > 60){
            echo " predikat $name adalah D ";
        }else{
            echo " predikat $name adalah E ";
        }
    }
    //proses na di controller kan???
}
