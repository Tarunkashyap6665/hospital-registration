<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\PatientsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PatientRegisterationController extends Controller
{
    public function register(Request $request){
        // dd(PatientsModel::count());
        if($request->isMethod('POST')){
            $i=PatientsModel::count()==0?1:PatientsModel::count()+1;
            $patient=PatientsModel::create([
            'reg_no'=>date('Ymd')."".$i,
            'name'=>$request->patient_name,
            'age'=>$request->age,
            'sex'=>$request->sex,
            'address'=>$request->address,
            'unit'=>$request->unit,
            'fees'=>$request->fees,
            'department'=>$request->department,
            ]);      
            return redirect()->to(route('register-successfully',['id'=>$patient->id]));
        }
        else{
            return view('patients_registration_form',['patient'=>null]);
        }
    }

}
