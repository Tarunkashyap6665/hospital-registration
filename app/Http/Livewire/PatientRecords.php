<?php

namespace App\Http\Livewire;

use App\Models\PatientsModel;
use Livewire\Component;

class PatientRecords extends Component
{
    protected $patients;
    public $search;
    public function mount(){
        $this->patients=PatientsModel::all();
    }

    public function updatedSearch($value)
    {
        $this->patients=PatientsModel::select("*")->where('name','like',"$this->search%")->get();
    }
    public function render()
    {
        return view('livewire.patient-records',['patients'=>$this->patients]);
    }
}
