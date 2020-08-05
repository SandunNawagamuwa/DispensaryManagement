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

class RegistrarController extends Controller
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
        return view('admin\Srilan\adregi');
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
            'gender' => 'max:10',
            'address' => 'required|string',
        ]);
        
         //store doctor object
         $registrarRole = Role::where('name','registrar')->first();

         $registrar = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $registrar->roles()->attach($registrarRole);
        $email = $data['email'];
        $userid = DB::table('users')->where('email',$email)->value('id');

        $user = UserInfo::create([
            'first_name' => $data['name'],
            'last_name' => $data['email'],
            'nic' => $data['nic'],
            'contact' => $data['contact'],
            'gender' => 'male',
            'address' => $data['address'],
            'user_id' => $userid,
        ]);

        $registrar->userinfo()->save($user);

        //flash message
        if($registrar && $user){
            session()->flash('notif','Success to save');
        }else{
             session()->flash('notify','Fail to save');
        }
        return redirect()->route('home')->with('message','Registrar registerd Successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($email)
    {
     
    $email = $email;
    
    $user = DB::table('users')
        ->join('user_infos', 'users.id','=', 'user_infos.user_id')
        ->where('email',$email)
        ->select('users.*','user_infos.*')->first();
    
    
    return view('admin\Srilan\editregi')->with('user',$user);
    
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
        // dd($request);
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

        return redirect('/home')->with('message','Registrar Updated Successfully');
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
