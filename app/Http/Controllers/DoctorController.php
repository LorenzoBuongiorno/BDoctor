<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Doctor;
use App\Specialization;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Doctor::all();

        
        return view('doctors.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        $profile = Doctor::where("doctor", $doctor);
        return view('doctors.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // $user_id = Auth::user()->id;

        // $doctorList = Doctor::all();
        // if($user_id == $doctorList->id){
        //     $doctor = $doctorList->id;
        // }

        /* versione 2 */
        // $user_id = Doctor::where('id', $id);

        // $doctor = Doctor::where('id', $user_id);

        // $doctor = [
        //     'name' => 'marco',
        //     'surname' => 'giammarco'
        // ];
        /* end of versione 2 */

        $doctor = Auth::user();
        $type = Specialization::all();
        
        return view('doctors.edit',
        compact('doctor', 'type')
        //  ['doctors' => $doctor]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    { 
        $data = $request->validate([
            "name" => "required",
            "surname" => "required",
            "city" => "required",
            "photo" => "nullable|image",
            "number" => "nullable",
            "curriculum" => "nullable",
            "medicalService" => "nullable"
          ]);

          $doctor->update($data);

          $doctor->save();

          return redirect()->route("doctors.index", $doctor->id);

        // $data = $request->all();
        // $doctor->update($data);
        // return redirect()->route('doctors.show', $doctor->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
