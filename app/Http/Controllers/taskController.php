<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use App\preasure;
use App\collestrol;
use App\User;
use App\Role;
use App\UserInfo;
use App\PatientInfo;
use Alert;
use Illuminate\Support\Facades\DB;

class taskController extends Controller
{
    //blood sugar range view
    public function store(){
     
       $pid= (session()->get('pid'));
       $tasks=DB::table('tasks')->where('p_id',$pid)->get();
       $preasures=DB::table('preasures')->where('pr_id',$pid)->get();
       $collestrols=DB::table('collestrols')->where('c_id',$pid)->get();
       return view('doctor\Srilan\MoreDetails',['tasks'=>$tasks,'preasures'=>$preasures,'collestrols'=>$collestrols]);
       
    }

    //blood sugar range update
    public function UpdateBlood(Request $request){
        
        $this->validate($request,[
            'p_id'=>'required|max:5|min:1',
            'rate'=>'required|max:3|min:0',


        ]);

        DB::table ('tasks')->insert([
                'p_id'=>$request->p_id,
                'rate'=> $request ->rate
        ]);
        return redirect('/MD') ->with('success','You have successfully added blood sugar data.');
       
    }

    //delete data
    public function deletetask($id){
        
        $task=task::find($id);
        $task->delete(); 
        return redirect()->back();
       
        
    }

    public function updatetask($id){
        $task=task::find($id);
         
        return view('doctor\Srilan\Update')->with('taskdata',$task);
    }

    public function updatenew(Request $request){
        $id=$request->id;
        $rate=$request->rate;
        $data=task::find($id);
        $data->rate=$rate;
        $data->save();
        $datas=task::all();

        $datas=DB::table('tasks')->get();
       $preasures=DB::table('preasures')->get();
       $collestrols=DB::table('collestrols')->get();
        return view('doctor\Srilan\MoreDetails',['tasks'=>$datas,'preasures'=>$preasures,'collestrols'=>$collestrols]); 
    }

   
}
