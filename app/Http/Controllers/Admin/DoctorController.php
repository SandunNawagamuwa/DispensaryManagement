<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;
use App\UserInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin\Srilan\addoc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'nic' => 'required|string|max:15',
            'contact' => 'required|string|max:10',
            'specialized_field' => 'required|string|max:50',
            'gender' => 'max:10',
            'address' => 'required|string',
        ]);
        
        //store doctor object
        $doctorRole = Role::where('name','doctor')->first();

        $doctor = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $doctor->roles()->attach($doctorRole);
        $email = $data['email'];
        $userid = DB::table('users')->where('email',$email)->value('id');

        $user = UserInfo::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'nic' => $data['nic'],
            'contact' => $data['contact'],
            'gender' => $data['gender'],
            'specialized_field' => $data['specialized_field'],
            'address' => $data['address'],
            'user_id' => $userid,
        ]);

        $doctor->userinfo()->save($user);

       //flash message
       if($doctor && $user){
           session()->flash('notif','Success to save');
       }else{
            session()->flash('notify','Fail to save');
       }
       return redirect()->route('home')->with('message','Doctor registerd Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($email)
    {
 
    
    $user = DB::table('users')
        ->join('user_infos', 'users.id','=', 'user_infos.user_id')
        //->join('patient_infos', 'users.id','=', 'patient_infos.user_id')
        ->where('email',$email)
        ->select('users.*','user_infos.*')->first();
       
    //dd($user);
    return view('admin\Srilan\editdoc')->with('user',$user);
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    //   dd($request);
        
       //validate
    //    $data = $request->validate([
    //     'name' => 'required|string|max:100',
    //     'email' => 'required|string|email|max:255',
    //     'first_name' => 'required|string|max:100',
    //     'last_name' => 'required|string|max:100',
    //     'nic' => 'required|string|max:15',
    //     'contact' => 'required|string|max:10',
    //     'specialized_field' => 'required|string|max:50',
    //     'gender' => 'max:10',
    //     'address' => 'required|string',
    //     ]);

        //update
        // $user_id = DB::table('users')
        // ->join('user_infos', 'users.id','=', 'user_infos.user_id')
        // ->select('user_infos.user_id')
        // ->where('users.id',$request->id)->first();
       
         $user = User::find($request->user_id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->update();

        $userInfo = UserInfo::where('id',$request->id)->first();
      
         $userInfo->first_name = $request->first_name;
         $userInfo->last_name = $request->last_name;
         $userInfo->nic = $request->nic;
         $userInfo->contact = $request->contact;
         $userInfo->specialized_field = $request->specialized_field;
        $userInfo->gender = $request->gender;
        $userInfo->address = $request->address;
        $userInfo->update();
        return redirect('/home')->with('messege','Doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * Deactivate the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivate($email)
    {
        //
        $userUpdates = User::where('email',$email)
        ->update([
            'status'=> '0',
        ]);

        if($userUpdates){
            session()->flash('notif','Success to save');
        }else{
             session()->flash('notify','Fail to save');
        }
        return redirect()->route('home');

    }

     /**
     * Activate the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate($email)
    {
        //
        $userUpdates = User::where('email',$email)
        ->update([
            'status'=> '1',
        ]);

        if($userUpdates){
            session()->flash('notif','Success to save');
        }else{
             session()->flash('notify','Fail to save');
        }
         return redirect()->route('home');
    }

}
