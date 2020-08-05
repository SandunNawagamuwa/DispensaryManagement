<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        $adminRole = Role::where('name','admin')->first();
        $registrarRole = Role::where('name','registrar')->first();
        $doctorRole = Role::where('name','doctor')->first();
        $patientRole = Role::where('name','patient')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        $registrar = User::create([
            'name' => 'Registrar',
            'email' => 'registrar@registrar.com',
            'password' => bcrypt('registrar')
        ]);

        $doctor = User::create([
            'name' => 'Doctor',
            'email' => 'doctor@doctor.com',
            'password' => bcrypt('doctor')
        ]);

        $patient = User::create([
            'name' => 'Patient',
            'email' => 'patient@patient.com',
            'password' => bcrypt('patient')
        ]);

        $admin->roles()->attach($adminRole);
        $registrar->roles()->attach($registrarRole);
        $doctor->roles()->attach($doctorRole);
        $patient->roles()->attach($patientRole);
    }
}
