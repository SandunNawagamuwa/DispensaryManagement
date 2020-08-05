<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\UserInfo;
use App\PatientInfo;
use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Session;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\MedicalRecord;




class PatientController extends Controller
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
        return view('registrar\addpatient');
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
        'bday' => 'required|string|max:20',
        'blood_group' => 'required|string|max:3',
        'civil_status' => 'required|string',
        'numberof_child' => 'required|string',
        'address' => 'required|string',
        'allergies' => 'required|string',
    ]);
    
    //store doctor object
    $patientRole = Role::where('name','patient')->first();

    $patient = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    $patient->roles()->attach($patientRole);
    $email = $data['email'];
    $userid = DB::table('users')->where('email',$email)->value('id');

    $user = UserInfo::create([
        'first_name' => $data['name'],
        'last_name' => $data['last_name'],
        'nic' => $data['nic'],
        'contact' => $data['contact'],
        'gender' => 'male',
        'address' => $data['address'],
        'user_id' => $userid,
    ]);

    $patient->userinfo()->save($user);

    $patientinfo = PatientInfo::create([
        'bday' => $data['bday'],
        'blood_group' => $data['blood_group'],
        'civil_status' => $data['civil_status'],
        'numberof_child' => $data['numberof_child'],
        'allergies' => $data['allergies'],
        'user_id' => $userid,
    ]);

    $patient->patientinfo()->save($patientinfo);

    //flash message
    if($patient && $user && $patient){
        session()->flash('notif','Success to save');
    }else{
         session()->flash('notify','Fail to save');
    }

   
    return redirect()->route('home')->with('message','registerd successfully ')->with('id',$userid);
    }

    /**
     * Display the specified resources main info and history.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       //dd($request->regid);
       // session(['u2f.registerData' => $req]);
       \Session::put('pid', $request->regid);

        //dd(session()->all());

        $patient = DB::table('users')
            ->join('user_infos', 'users.id','=', 'user_infos.user_id')
            ->join('patient_infos', 'users.id','=', 'patient_infos.user_id')
            ->where('users.id',$request->regid)
            ->get();
        
        $images = DB::table('medical_records')
            ->where('patient_id',$request->regid)
            ->get();

        return view('doctor\Srilan\viewmedihis')->with('patient',$patient)->with('images',$images);
    }

        /**
     * Display the specified resources main info and history.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showmore2($email)
    {
       
        $patient = DB::table('users')
            ->join('user_infos', 'users.id','=', 'user_infos.user_id')
            ->join('patient_infos', 'users.id','=', 'patient_infos.user_id')
            ->where('users.email',$email)
            ->get();
        
        return view('doctor\Srilan\viewmedihis');
    }

    /**
     * Display the specified resource's personal info.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function showmore($email)
    {
       
        $patient = DB::table('users')
            ->join('user_infos', 'users.id','=', 'user_infos.user_id')
            ->join('patient_infos', 'users.id','=', 'patient_infos.user_id')
            ->where('users.email',$email)
            ->get();
      /*  $medicalrecord = DB::table('medical_records')->get();

         if(count($medicalrecord) > 0){
        return view ('doctor\Srilan\viewpatinfo',['patient'=>$patient,'medical_records'=> $medicalrecord]);
        
            
        }
        else
        {*/
            return view('doctor\Srilan\viewpatinfo')->with('patient',$patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //dd($request);

         $user = User::find($request->user_id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->update();


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
    
  //upload image

  public function imageUpload()
  {
    return view('doctor\Srilan\viewmedihis')
    ->with('image',$imageName);;
  }
 

  public function imageUploadPost(Request $request)
  {
    
    $pid= (session()->get('pid'));
    // dd($pid);
    $request->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      $imageName = time().'.'.$request->image->extension();  
        
      $request->image->move(public_path(''), $imageName);

      $patient = DB::table('users')
        ->join('user_infos', 'users.id','=', 'user_infos.user_id')
        ->join('patient_infos', 'users.id','=', 'patient_infos.user_id')
        ->where('users.id',$pid)
        ->get();

      $images = DB::table('medical_records')
        ->where('patient_id',$pid)
        ->get();

    //dd($images);
 
      MedicalRecord::create([
        'medical_record' => $imageName,
        'patient_id' => $pid,
        
    ]);

    

    return view('doctor\Srilan\viewmedihis')
          ->with('success','You have successfully upload prescription.')
          ->with('image',$imageName)
          ->with('patient',$patient)
          ->with('images',$images);
 
  }

    
    function downloadImage($image){
        return Response::download($image);
    }


    function mh() {

        $p_id=auth()->user()->id;

        $patient = DB::table('users')
            ->join('user_infos', 'users.id','=', 'user_infos.user_id')
            ->join('patient_infos', 'users.id','=', 'patient_infos.user_id')
            ->where('users.id',$p_id)
            ->get();
        
        $images = DB::table('medical_records')
            ->where('patient_id',$p_id)
            ->get();

        return view('patient\Srilan\mh')->with('patient',$patient)->with('images',$images);

        // $medicalrecord = DB::table('medical_records')->get();
        // //dd($medicalrecord);
        // if(count($medicalrecord) > 0) {
        //     return view('patient\Srilan\mh')->with('medicalrecord',$medicalrecord);
        // }
        // else {
        //     return view('patient\Srilan\mh');
        //     return redirect()->back();
        // }
        
    }

    function hd(){

        $id=auth()->user()->id;
        $tasks=DB::table('tasks')->where('P_Id',$id)->get();
        $preasures=DB::table('preasures')->where('pr_id',$id)->get();
        $collestrols=DB::table('collestrols')->where('c_id',$id)->get();
        return view('patient\Srilan\hd',['tasks'=>$tasks,'preasures'=>$preasures,'collestrols'=>$collestrols]);
    }

    function app(){

        $doctors = DB::table('role_user')
            ->join('users', 'role_user.user_id','=', 'users.id')
            ->join('roles', 'role_user.role_id','=', 'roles.id')
            ->join('user_infos', 'role_user.user_id','=', 'user_infos.user_id')
            ->where('roles.name','doctor')
            ->select('users.*','user_infos.*')
            ->get();

        //dd($doctors);

        return view('patient\Srilan\appointment')->with('doctors',$doctors);
    }

    function appointment(Request $request) {
        //dd($request);
        $p_id=auth()->user()->id;
        $email=auth()->user()->email;

        DB::table('dispensaries')->insert([
            'P_ID' => $p_id,
            'Doc_ID' => $request->doctor,
            'E_mail' => $email,
            'status' => 1,
            'date'=> $request->date
            ]);
        
        Session::flash('notify','Set Appointment Success');
        return redirect()->back();
    }

    public function edit() {
        $email=auth()->user()->email;
        //dd($email);
        $patient = DB::table('users')
        ->join('user_infos', 'users.id','=', 'user_infos.user_id')
        ->join('patient_infos', 'users.id','=', 'patient_infos.user_id')
        ->where('users.email',$email)
        ->get();
        //dd($patient);
    
        return view('patient\Srilan\editpatient')->with('patient',$patient);
    }

    public function updatePatient(Request $request) {

        //dd($request->name);
      
        //validate
        $data = $request->validate([
          'name' => 'required|string|max:100',
          'email' => 'required|string|email|max:255',
          //'password' => 'required|string|min:8|confirmed',
          'first_name' => 'required|string|max:100',
          'last_name' => 'required|string|max:100',
          //'nic' => 'required|string|max:15',
          'contact' => 'required|string|size:10',
          //'gender' => 'max:10',
          //'bday' => 'required|string|max:20',
          //'blood_group' => 'required|string|max:3',
          'civil_status' => 'required|string',
          'numberof_child' => 'required|string',
          'address' => 'required|string',
          'allergies' => 'required|string',
      ]);


      $id=auth()->user()->id;
  
      $patientUser = User::where('id', $id)
                         ->update([
                            'name' => $data['name'],
                            'email' => $data['email']
                          ]);
  
      $patientUser_infos = UserInfo::where('user_id', $id)
                         ->update([
                            'first_name' => $data['first_name'],
                            'last_name' => $data['last_name'],
                            'address' => $data['address'],
                            'contact' => $data['contact']
                          ]);
  
      $patientPatient_infos = PatientInfo::where('user_id', $id)
                         ->update([
                            'civil_status' => $data['civil_status'],
                            'numberof_child' => $data['numberof_child'],
                            'allergies' => $data['allergies']
                          ]);
  
        Session::flash('notify','Data Update Success');
        return redirect('/patient/details');
    
    }
  
}
