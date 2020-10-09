<?php

namespace App\Http\Controllers;

use App\Models\PatientsModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:sanctum');
    }
    public function index(Request $request)
    {
        return view('dashboard');
    }

    public function edit(Request $request,$id=0){
        
        if($request->isMethod('POST')){
            $patient=PatientsModel::find($request->id);
            $patient->name=$request->patient_name;
            $patient->age=$request->age;
            $patient->sex=$request->sex;
            $patient->address=$request->address;
            $patient->unit=$request->unit;
            $patient->department=$request->department;
            $patient->save();
            return redirect()->to('/dashboard')->with('status','Updated Successfully...');
        }
        else{
            $patient=PatientsModel::find($id);
            return view('patients_registration_form',['patient'=>$patient]);
        }
    }

    public function view(Request $request){
        $patient=PatientsModel::find($request->id);
        return view('patient-details',['patient'=>$patient]);
    }

    public function delete($id){
        $patient=PatientsModel::find($id);
        $patient->delete();
        return redirect()->to('/dashboard')->with('status',"Deleted Successfully...");
    }
}
