<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\collestrol;
use Illuminate\Support\Facades\DB;

class collestrolController extends Controller
{
    //preasure range update
    public function UpdateCOllestrol(Request $request){
        DB::table ('collestrols')->insert([
            'c_id'=>$request->c_id,
            'rate'=> $request ->rate
        ]);
        return redirect('/MD')->with('success','You have successfully added collestrol data.');
    }

     //delete data
     public function delcol($id){
        $collestrol=collestrol::find($id);
        $collestrol->delete();
        return redirect()->back();
        
    }
}
