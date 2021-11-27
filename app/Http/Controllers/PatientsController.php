<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientValidatation;
use App\Models\Patients;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class PatientsController extends Controller
{

    /**This function return form for entre data */
    
    public function add()
    {
        return view('addPatient');
        
    }

    /**This function store data in database */

    public function create(PatientValidatation $request)
    {
        session()->flash('message', 'Patient add successfully');
        $name=strtoupper($request->name);
        $request->merge(['name'=> $name]);
        $request->Merge(['visit_number'=>rand(27600000033, 31100000533), 'client_id'=>rand(42315, 63218), 'patient_id'=> rand(1334539220, 3334539220)]);
        $data=Patients::create($request->except('_token'));
        // QrCode::size(500)
        //     ->format('png')
        //     ->generate('/patient/'.$data->client_id, public_path('img/'.$data->name.'qrcode.png'));
        return view('qr-code', compact('data'));

    }

    /**This function return all patients data */
    
    public function show()
    {
        $data=Patients::get()->all();
        return view('show', compact('data'));
    }

    /**This function return form for search */
    
    public function search()
    {
        return view('findPatient');

    }

    /**This function return the patient selected */
    
    public function find($id)
    {
        $data=Patients::where('client_id', $id)->get()->all();
        if ($data) {
            return response()->json($data, 200);
        } else {
            return 'Client not found';
        }

    }
    public function user($id)
    {
        $data=Patients::where('client_id', $id)->get()->all();
        return view('report', compact('data'));
    }
}
