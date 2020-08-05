<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Role;
use App\RoleUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
        //provide different homes based on user role;
        if(Auth::user()->hasAnyRole('admin')){
            
            //return all users with role doctor
        $doctors = DB::table('role_user')
            ->join('users', 'role_user.user_id','=', 'users.id')
            ->join('roles', 'role_user.role_id','=', 'roles.id')
            ->join('user_infos', 'role_user.user_id','=', 'user_infos.user_id')
            ->where('roles.name','doctor')
            ->select('users.*','user_infos.*')
            ->get();

            //return all users with role registrar
        $registrar = DB::table('role_user')
            ->join('users', 'role_user.user_id','=', 'users.id')
            ->join('roles', 'role_user.role_id','=', 'roles.id')
            ->join('user_infos', 'role_user.user_id','=', 'user_infos.user_id')
            ->where('roles.name','registrar')
            ->select('users.*','user_infos.*')
            ->get();

            return view('admin\Srilan\admin')->with('doctors',$doctors)->with('registrar',$registrar);
        
        }else if(Auth::user()->hasAnyRole('patient')){

            // get current logged user id
             $id = auth()->user()->id;

             //return current logged patient details
             $user = DB::table('role_user')
            ->join('users', 'users.id', 'role_user.user_id')
            ->join('roles', 'roles.id', 'role_user.role_id')
            ->where(function ($query) use ($id) {
                $query->where('users.id', '=', $id);
            })
            ->get();

            $user = DB::table('users')
            ->join('user_infos', 'user_infos.user_id', 'users.id')
            ->join('patient_infos', 'patient_infos.user_id', 'users.id')
            ->where(function ($query) use ($id) {
                $query->where('users.id', '=', $id);
            })
            ->get();

            return view('patient\Srilan\patient')->with('user',$user);
        
        }else if(Auth::user()->hasAnyRole('doctor')){

            //retuen all patients

            $patient = DB::table('role_user')
            ->join('users', 'users.id', 'role_user.user_id')
            ->join('roles', 'roles.id', 'role_user.role_id')
            ->where('roles.name','patient')
            ->get();

            return view('doctor\Srilan\Doctor')->with('patient',$patient);

        }else if(Auth::user()->hasAnyRole('registrar')){

            return view('registrar\Srilan\registrator');

        }else{

            abort(403, 'Unauthorized action.');
            //return view('userhomes\registrarhome');

        }
        //Default function
        //return view('home');
    }
}
