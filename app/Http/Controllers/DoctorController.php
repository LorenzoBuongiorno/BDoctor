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
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('doctors.show', compact('doctor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);

        // $doctor = Auth::user();
        $type = Specialization::all();
        
        return view('doctors.edit1',
        compact('doctor', 'type')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $doctor = Doctor::findOrFail($id);

        $data = $request->validate([
            "name" => "required",
            "surname" => "required",
            "email" => "required|email|unique:doctors,email, " . $id,
            "address" => "required",
            "city" => "required",
            "photo" => "nullable",
            "number" => "nullable",
            "curriculum" => "nullable",
            "medicalService" => "nullable"
          ]);
           
        $doctor->update($data);
        
        $doctor->save($data);

        
        return redirect()->route("doctors.show", $doctor);

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
