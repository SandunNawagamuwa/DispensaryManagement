<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\preasure;
use Illuminate\Support\Facades\DB;


class preasureController extends Controller
{
    
 
     //preasure range update
     public function UpdatePreasure(Request $request){
     
         DB::table ('preasures')->insert([
                 'pr_id'=>$request->pr_id,
                 'upper_rate'=>$request->upper,
                'lower_rate'=>$request->lower
         ]);
         return redirect('/MD')->with('success','You have successfully added blood pressure data.');
     }

     //delete data
    public function delpre($id){
        $preasure=preasure::find($id);
        $preasure->delete();
        return redirect()->back();
        
    }
}
